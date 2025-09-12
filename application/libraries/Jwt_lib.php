<?php
defined('BASEPATH') or exit('No direct script access allowed');

require 'vendor/autoload.php'; // Load Composer dependencies

use Ahc\Jwt\JWT;

class Jwt_lib
{
    private $jwt;
    private $secret;
    private $ttl; // Token time-to-live (expiry)
    private $refresh_ttl; // Refresh token time-to-live
    private $blacklist; // Store invalidated tokens

    public function __construct()
    {
        $this->secret = $_ENV['ENCRYPTION_KEY']; // Replace with a strong secret key
        $this->ttl = (3600 * 24); // Token expiry time in seconds (24 hours)
        $this->refresh_ttl = (3600 * 24 * 30); // Refresh token expiry (30 days)

        // Initialize JWT library
        $this->jwt = new JWT($this->secret, 'HS256', $this->ttl);

        // Initialize token blacklist (could be stored in DB or cache)
        $this->blacklist = [];
    }

    // Generate JWT Token
    public function encode($payload, $is_refresh = false)
    {
        // Set custom TTL for refresh tokens
        if ($is_refresh) {
            $this->jwt->setTtl($this->refresh_ttl);
            $payload['type'] = 'refresh';
        } else {
            $this->jwt->setTtl($this->ttl);
            $payload['type'] = 'access';
        }
        
        return $this->jwt->encode($payload);
    }

    // Decode JWT Token
    public function decode($token)
    {
        try {
            return $this->jwt->decode($token);
        } catch (Exception $e) {
            return false; // Invalid token
        }
    }

    // Validate JWT Token from Request
    public function validate_token($token, $token_type = 'access')
    {
        if (!$token) {
            return ['status' => false, 'message' => 'Token not provided'];
        }

        // Check if token is in blacklist
        if (in_array($token, $this->blacklist)) {
            return ['status' => false, 'message' => 'Token has been revoked'];
        }

        $decodedData = $this->decode($token);

        if ($decodedData) {
            // Verify token type if specified
            if (isset($decodedData['type']) && $decodedData['type'] !== $token_type) {
                return ['status' => false, 'message' => 'Invalid token type'];
            }
            return ['status' => true, 'data' => $decodedData];
        } else {
            return ['status' => false, 'message' => 'Invalid or expired token'];
        }
    }

    // Destroy JWT Token (Add to blacklist)
    public function destroy_token($token)
    {
        if ($token) {
            $this->blacklist[] = $token; // Store in array (use DB/cache in production)
            return ['status' => true, 'message' => 'Token has been revoked'];
        }
        return ['status' => false, 'message' => 'Token not provided'];
    }
    
    // Generate refresh token
    public function create_refresh_token($user_id)
    {
        $payload = [
            'user_id' => $user_id,
            'jti' => bin2hex(random_bytes(16)) // Unique token ID
        ];
        
        return $this->encode($payload, true);
    }
    
    // Issue new access token using refresh token
    public function refresh_token($refresh_token)
    {
        $result = $this->validate_token($refresh_token, 'refresh');
        
        if ($result['status']) {
            $user_id = $result['data']['user_id'];
            $payload = [
                'user_id' => $user_id,
                'jti' => bin2hex(random_bytes(16))
            ];
            
            return [
                'status' => true,
                'access_token' => $this->encode($payload),
                'refresh_token' => $refresh_token
            ];
        }
        
        return $result;
    }
}
