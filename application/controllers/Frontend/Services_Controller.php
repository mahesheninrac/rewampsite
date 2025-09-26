<?php
defined('BASEPATH') or exit('No direct script access allowed');
require(APPPATH . 'controllers/Default_Controller.php');
class Services_Controller extends Default_Controller
{
    public function advisory_and_consulting_services()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'services/advisory-and-consulting-services',
            'title' => 'Advisory and Consulting Services',
            'meta' => [
                'title' => 'Advisory and Consulting Services',
                'description' => 'Advisory and Consulting Services', // Add your description
                'keywords' => 'Advisory and Consulting Services',
            ],
            'default_page' => false,
        ]);
    }
    public function business_intelligence()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'services/business-intelligence',
            'title' => 'Business Intelligence',
            'meta' => [
                'title' => 'Business Intelligence',
                'description' => 'Business Intelligence', // Add your description
                'keywords' => 'Business Intelligence',
            ],
            'default_page' => false,
        ]);
    }
    public function due_diligence()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'services/due-diligence',
            'title' => 'Due Diligence',
            'meta' => [
                'title' => 'Due Diligence',
                'description' => 'Due Diligence', // Add your description
                'keywords' => 'Due Diligence',
            ],
            'default_page' => false,
        ]);
    }
    public function benchmarking_services()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'services/benchmarking-services',
            'title' => 'Benchmarking Services',
            'meta' => [
                'title' => 'Benchmarking Services',
                'description' => 'Benchmarking Services', // Add your description
                'keywords' => 'Benchmarking Services',
            ],
            'default_page' => false,
        ]);
    }
    public function pfrs_dprs()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'services/pfrs-dprs',
            'title' => 'PFR\'s/DPR\'s',
            'meta' => [
                'title' => 'PFR\'s/DPR\'s',
                'description' => 'PFR\'s/DPR\'s', // Add your description
                'keywords' => 'PFR\'s/DPR\'s',
            ],
            'default_page' => false,
        ]);
    }
    public function open_access_services()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'services/open-access-services',
            'title' => 'Open Access Services',
            'meta' => [
                'title' => 'Open Access Services',
                'description' => 'Open Access Services', // Add your description
                'keywords' => 'Open Access Services',
            ],
            'default_page' => false,
        ]);
    }
    public function market_research_service()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'services/market-research-service',
            'title' => 'Market Research Service',
            'meta' => [
                'title' => 'Market Research Service',
                'description' => 'Market Research Service', // Add your description
                'keywords' => 'Market Research Service',
            ],
            'default_page' => false,
        ]);
    }
    public function market_tracking_and_sizing()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'services/market-tracking-and-sizing',
            'title' => 'Market Research Service',
            'meta' => [
                'title' => 'Market Tracking and Sizing',
                'description' => 'Market Tracking and Sizing', // Add your description
                'keywords' => 'Market Tracking and Sizing',
            ],
            'default_page' => false,
        ]);
    }
    public function market_analytics()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'services/market-analytics',
            'title' => 'Market Analytics',
            'meta' => [
                'title' => 'Market Analytics',
                'description' => 'Market Analytics', // Add your description
                'keywords' => 'Market Analytics',
            ],
            'default_page' => false,
        ]);
    }
    public function competitor_analysis()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'services/competitor-analysis',
            'title' => 'Competitor Analysis',
            'meta' => [
                'title' => 'Competitor Analysis',
                'description' => 'Competitor Analysis', // Add your description
                'keywords' => 'Competitor Analysis',
            ],
            'default_page' => false,
        ]);
    }
    public function research_on_demand_tracking()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'services/research-on-demand-tracking',
            'title' => 'Research on Demand Tracking',
            'meta' => [
                'title' => 'Research on Demand Tracking',
                'description' => 'Research on Demand Tracking', // Add your description
                'keywords' => 'Research on Demand Tracking',
            ],
            'default_page' => false,
        ]);
    }
    public function strategy_and_innovation()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'services/strategy-and-innovation',
            'title' => 'Strategy and Innovation',
            'meta' => [
                'title' => 'Strategy and Innovation',
                'description' => 'Strategy and Innovation', // Add your description
                'keywords' => 'Strategy and Innovation',
            ],
            'default_page' => false,
        ]);
    }
    public function change_management()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'services/change-management',
            'title' => 'Change Management',
            'meta' => [
                'title' => 'Change Management',
                'description' => 'Change Management', // Add your description
                'keywords' => 'Change Management',
            ],
            'default_page' => false,
        ]);
    }
    public function growth_strategy()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'services/growth-strategy',
            'title' => 'Change Management',
            'meta' => [
                'title' => 'Growth Strategy',
                'description' => 'Growth Strategy', // Add your description
                'keywords' => 'Growth Strategy',
            ],
            'default_page' => false,
        ]);
    }
    public function product_innovation_strategy()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'services/product-innovation-strategy',
            'title' => 'Product Innovation Strategy',
            'meta' => [
                'title' => 'Product Innovation Strategy',
                'description' => 'Product Innovation Strategy', // Add your description
                'keywords' => 'Product Innovation Strategy',
            ],
            'default_page' => false,
        ]);
    }
    public function operations_strategy()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'services/operations-strategy',
            'title' => 'Operations Strategy',
            'meta' => [
                'title' => 'Operations Strategy',
                'description' => 'Operations Strategy', // Add your description
                'keywords' => 'Operations Strategy',
            ],
            'default_page' => false,
        ]);
    }
    public function transformation_and_sustainability()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'services/transformation-and-sustainability',
            'title' => 'Transformation and Sustainability',
            'meta' => [
                'title' => 'Transformation and Sustainability',
                'description' => 'Transformation and Sustainability', // Add your description
                'keywords' => 'Transformation and Sustainability',
            ],
            'default_page' => false,
        ]);
    }
    public function training_and_pro_bono_services()
    {
        $this->load->view('frontend/theme', [
            'theme' => 'services/training-and-pro-bono-services',
            'title' => 'Training and Pro Bono Services',
            'meta' => [
                'title' => 'Training and Pro Bono Services',
                'description' => 'Training and Pro Bono Services', // Add your description
                'keywords' => 'Training and Pro Bono Services',
            ],
            'default_page' => false,
        ]);
    }
}
