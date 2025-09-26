<?php
defined('BASEPATH') or exit('No direct script access allowed');
require(APPPATH . 'controllers/Default_Controller.php');
class Services_Controller extends Default_Controller
{
    public function advisory_consulting()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'services/advisory-consulting',
            'title' => 'Advisory Consulting',
            'meta' => [
                'title' => 'Advisory Consulting',
                'description' => 'Advisory Consulting', // Add your description
                'keywords' => 'Advisory Consulting',
            ],
            'default_page' => false,
        ]);
    }
}
