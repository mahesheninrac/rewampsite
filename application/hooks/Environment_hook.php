<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Environment Hook Class
 *
 * This hook loads environment variables from .env file
 * early in the application lifecycle.
 */
class Environment_hook {
    
    /**
     * Load environment variables
     *
     * @return void
     */
    public function load() {
        // Load Composer's autoloader
        if (!defined('COMPOSER_AUTOLOAD')) {
            require_once FCPATH . 'vendor/autoload.php';
            define('COMPOSER_AUTOLOAD', TRUE);
        }
        
        try {
            // Initialize Dotenv
            $dotenv = \Dotenv\Dotenv::createImmutable(FCPATH);
            $dotenv->load();
            
            // Set CI environment if not already defined
            if (!defined('ENVIRONMENT') && getenv('CI_ENV') !== false) {
                define('ENVIRONMENT', getenv('CI_ENV'));
            }
            
            // Update base_url in config
            if (getenv('BASE_URL') !== false) {
                $config =& get_config();
                $config['base_url'] = getenv('BASE_URL');
            }
            
        } catch (Exception $e) {
            log_message('error', 'Environment hook failed: ' . $e->getMessage());
        }
    }
}