<?php
defined('BASEPATH') or exit('No direct script access allowed');

require 'vendor/autoload.php'; // Load Composer dependencies

use Ahc\Jwt\JWT;

class Jwt_lib
{
    private $jwt;
    private $secret;
    private $ttl; // Token time-to-live (expiry)
    private $blacklist; // Store invalidated tokens

    public function __construct()
    {
        $this->secret = '7f8a1978279d72e5c3b02487e14ec60fa90356c254693d810315dcf5a1bb365a'; // Replace with a strong secret key
        $this->ttl = (3600 * 24); // Token expiry time in seconds (1 hour)

        // Initialize JWT library
        $this->jwt = new JWT($this->secret, 'HS256', $this->ttl);

        // Initialize token blacklist (could be stored in DB or cache)
        $this->blacklist = [];
    }

    // Generate JWT Token
    public function encode($payload)
    {
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
    public function validate_token($token)
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
}
