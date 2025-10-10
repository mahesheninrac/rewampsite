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
    public function about()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'company/about',
            'title' => 'Eco System Reports',
            'meta' => [
                'title' => 'Eco System Reports',
                'description' => 'Eco System Reports', // Add your description
                'keywords' => 'Eco System Reports',
            ],
            'default_page' => false,
        ]);
    }

    public function career()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'company/career',
            'title' => 'Eco System Reports',
            'meta' => [
                'title' => 'Eco System Reports',
                'description' => 'Eco System Reports', // Add your description
                'keywords' => 'Eco System Reports',
            ],
            'default_page' => false,
        ]);
    }
    public function marketresponse()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'market-response',
            'title' => 'Eco System Reports',
            'meta' => [
                'title' => 'Eco System Reports',
                'description' => 'Eco System Reports', // Add your description
                'keywords' => 'Eco System Reports',
            ],
            'default_page' => false,
        ]);
    }
    public function impressions()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'impressions',
            'title' => 'Eco System Reports',
            'meta' => [
                'title' => 'Eco System Reports',
                'description' => 'Eco System Reports', // Add your description
                'keywords' => 'Eco System Reports',
            ],
            'default_page' => false,
        ]);
    }
    public function lifeateninrac()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'lifeateninrac',
            'title' => 'Eco System Reports',
            'meta' => [
                'title' => 'Eco System Reports',
                'description' => 'Eco System Reports', // Add your description
                'keywords' => 'Eco System Reports',
            ],
            'default_page' => false,
        ]);
    }
    public function benefits()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'benefits',
            'title' => 'Eco System Reports',
            'meta' => [
                'title' => 'Eco System Reports',
                'description' => 'Eco System Reports', // Add your description
                'keywords' => 'Eco System Reports',
            ],
            'default_page' => false,
        ]);
    }
    public function forwhom()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'forwhom',
            'title' => 'Eco System Reports',
            'meta' => [
                'title' => 'Eco System Reports',
                'description' => 'Eco System Reports', // Add your description
                'keywords' => 'Eco System Reports',
            ],
            'default_page' => false,
        ]);
    }
    public function contact()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'company/contact',
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