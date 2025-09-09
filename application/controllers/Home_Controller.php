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
    public function privacy_policy()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'privacy-policy',
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
    public function about()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'about',
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
    public function cssfile()
    {
        header('Content-Type:text/css');
    }
    public function cookie_statement()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'cookie-statement',
            'title' => 'Eco System Reports',
            'meta' => [
                'title' => 'Eco System Reports',
                'description' => 'Eco System Reports', // Add your description
                'keywords' => 'Eco System Reports',
            ],
            'default_page' => false,
        ]);
    }
    public function refund_policy()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'refund-policy',
            'title' => 'Eco System Reports',
            'meta' => [
                'title' => 'Eco System Reports',
                'description' => 'Eco System Reports', // Add your description
                'keywords' => 'Eco System Reports',
            ],
            'default_page' => false,
        ]);
    }
    public function faqs()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'faqs',
            'title' => 'Eco System Reports',
            'meta' => [
                'title' => 'Eco System Reports',
                'description' => 'Eco System Reports', // Add your description
                'keywords' => 'Eco System Reports',
            ],
            'default_page' => false,
        ]);
    }
    public function contact_us()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'contact-us',
            'title' => 'Eco System Reports | Contact Us',
            'meta' => [
                'title' => 'Eco System Reports | Contact Us',
                'description' => 'Eco System Reports | Contact Us', // Add your description
                'keywords' => 'Eco System Reports | Contact Us',
            ],
            'default_page' => false,
        ]);
    }
    public function survey()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'survey',
            'title' => 'Eninrac rewamp status | Contact Us',
            'meta' => [
                'title' => 'Eco System Reports Survey | Survey',
                'description' => 'Eco System Reports Survey | Survey', // Add your description
                'keywords' => 'Eco System Reports Survey | Survey',
            ],
            'default_page' => false,
        ]);
    }

    public function reports_details_page()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'reports_details_page',
            'title' => 'Eco System Reports Survey | Contact Us',
            'meta' => [
                'title' => 'Eco System Reports Survey | Survey',
                'description' => 'Eco System Reports Survey | Survey', // Add your description
                'keywords' => 'Eco System Reports Survey | Survey',
            ],
            'default_page' => false,
        ]);
    }
}
