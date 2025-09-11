<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Dotenv\Dotenv;

/**
 * Environment Library
 *
 * This library loads environment variables from .env file
 * and provides methods to access them.
 */
class Environment {
    
    /**
     * CI instance
     *
     * @var object
     */
    protected $CI;
    
    /**
     * Dotenv instance
     *
     * @var Dotenv\Dotenv
     */
    protected $dotenv;
    
    /**
     * Constructor
     */
    public function __construct() {
        $this->CI =& get_instance();
        
        // Load Composer's autoloader if not already loaded
        if (!defined('COMPOSER_AUTOLOAD')) {
            require_once FCPATH . 'vendor/autoload.php';
            define('COMPOSER_AUTOLOAD', TRUE);
        }
        
        // Initialize Dotenv
        $this->init();
    }
    
    /**
     * Initialize Dotenv
     *
     * @return void
     */
    private function init() {
        try {
            // Create Dotenv instance
            $this->dotenv = Dotenv::createImmutable(FCPATH);
            
            // Load environment variables
            $this->dotenv->load();
            
            // Required variables
            $this->dotenv->required(['CI_ENV', 'BASE_URL']);
            
            // Set CI environment
            if (!defined('ENVIRONMENT')) {
                define('ENVIRONMENT', getenv('CI_ENV'));
            }
        } catch (Exception $e) {
            log_message('error', 'Environment initialization failed: ' . $e->getMessage());
        }
    }
    
    /**
     * Get environment variable
     *
     * @param string $key     The environment variable name
     * @param mixed  $default Default value if not found
     * @return mixed
     */
    public function get($key, $default = null) {
        $value = getenv($key);
        return $value !== false ? $value : $default;
    }
    
    /**
     * Check if environment variable exists
     *
     * @param string $key The environment variable name
     * @return bool
     */
    public function has($key) {
        return getenv($key) !== false;
    }
    
    /**
     * Get all environment variables
     *
     * @return array
     */
    public function all() {
        return getenv();
    }
    
    /**
     * Update config values from environment variables
     *
     * @param string $config_file Config file name without .php extension
     * @param array  $mappings    Array of config keys and their env variable names
     * @return void
     */
    public function updateConfig($config_file, $mappings) {
        // Load the config file
        $this->CI->config->load($config_file, true);
        
        // Update config values from environment variables
        foreach ($mappings as $config_key => $env_key) {
            $env_value = $this->get($env_key);
            
            if ($env_value !== null) {
                $this->CI->config->set_item($config_key, $env_value, $config_file);
            }
        }
    }
}