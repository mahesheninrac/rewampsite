<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Environment Helper
 *
 * This helper provides functions to easily access environment variables.
 */

/**
 * Get environment variable
 *
 * @param string $key     The environment variable name
 * @param mixed  $default Default value if not found
 * @return mixed
 */
if (!function_exists('env')) {
    function env($key, $default = null) {
        $value = getenv($key);
        
        if ($value === false) {
            return $default;
        }
        
        switch (strtolower($value)) {
            case 'true':
            case '(true)':
                return true;
            case 'false':
            case '(false)':
                return false;
            case 'empty':
            case '(empty)':
                return '';
            case 'null':
            case '(null)':
                return null;
        }
        
        if (preg_match('/\A([\'"]).+\1\z/', $value)) {
            return substr($value, 1, -1);
        }
        
        return $value;
    }
}

/**
 * Check if environment variable exists
 *
 * @param string $key The environment variable name
 * @return bool
 */
if (!function_exists('env_has')) {
    function env_has($key) {
        return getenv($key) !== false;
    }
}

/**
 * Get environment name
 *
 * @return string
 */
if (!function_exists('environment')) {
    function environment() {
        return defined('ENVIRONMENT') ? ENVIRONMENT : env('CI_ENV', 'development');
    }
}

/**
 * Check if environment is development
 *
 * @return bool
 */
if (!function_exists('is_development')) {
    function is_development() {
        return environment() === 'development';
    }
}

/**
 * Check if environment is testing
 *
 * @return bool
 */
if (!function_exists('is_testing')) {
    function is_testing() {
        return environment() === 'testing';
    }
}

/**
 * Check if environment is production
 *
 * @return bool
 */
if (!function_exists('is_production')) {
    function is_production() {
        return environment() === 'production';
    }
}