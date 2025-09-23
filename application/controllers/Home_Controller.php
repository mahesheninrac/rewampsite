<?php
defined('BASEPATH') or exit('No direct script access allowed');
require(APPPATH . 'controllers/Default_Controller.php');
class Home_Controller extends Default_Controller
{
    public function index()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'home',
            'title' => 'Eco System Reports',
            'meta' => [
                'title' => 'Eco System Reports',
                'description' => 'Eco System Reports', // Add your description
                'keywords' => 'Eco System Reports',
            ],
            'default_page' => false,
        ]);
    }
    public function servicedemo()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'servicedemo',
            'title' => 'Eco System Reports',
            'meta' => [
                'title' => 'Eco System Reports',
                'description' => 'Eco System Reports', // Add your description
                'keywords' => 'Eco System Reports',
            ],
            'default_page' => false,
        ]);
    }
    public function webinar()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'webinar',
            'title' => 'Eco System Reports',
            'meta' => [
                'title' => 'Eco System Reports',
                'description' => 'Eco System Reports', // Add your description
                'keywords' => 'Eco System Reports',
            ],
            'default_page' => false,
        ]);
    }

    public function testhtml()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'testhtml',
            'title' => 'Eco System Reports',
            'meta' => [
                'title' => 'Eco System Reports',
                'description' => 'Eco System Reports', // Add your description
                'keywords' => 'Eco System Reports',
            ],
            'default_page' => true,
        ]);
    }
}
