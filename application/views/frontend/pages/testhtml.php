<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/fonts.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/animation.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <style>
        .service-link {

            min-width: 217px;
            padding: 0.375rem 0rem 0.375rem 0.5rem;
            transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1), box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1), border-color 250ms cubic-bezier(0.4, 0, 0.2, 1), color 250ms cubic-bezier(0.4, 0, 0.2, 1);
            ;
        }

        .service-link:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        ul {
            list-style: none !important;
        }

        .servicemenu-wrap .service-menu {
            position: absolute;
            left: 33%;
            top: 0;
            width: auto;
            padding-left: 1.5rem;
            display: none;
            gap: 0.7rem;
            flex-direction: column;
            -webkit-box-align: start;
            align-items: start;
        }

        .service-menu a {
            font-size: 14px;
            line-height: 1rem;
            height: max-content;
        }

        .service-item:hover .servicemenu-wrap .service-menu {
            display: flex !important;
        }
    </style>
</head>

<body>
    <div class="service-menu mega-menu">
        <ul class="service-root">
            <li class="service-item">
                <div class="">
                    <ul>
                        <li class="d-flex">
                            <a href="advisory-and-consulting-services" class="service-link">
                                Advisory Consulting Services
                            </a>
                            <div class="servicemenu-wrap">
                                <ul class="service-menu">
                                    <li>
                                        <a href="advisory-and-consulting-services/business-intelligence">Business
                                            Intelligence <span class="li-arrow">→</span></a>
                                    </li>
                                    <li><a href="advisory-and-consulting-services/due-diligence">Due
                                            Diligence <span class="li-arrow">→</span></a>
                                    </li>
                                    <li><a href="advisory-and-consulting-services/benchmarking-services">Benchmarking
                                            Services <span class="li-arrow">→</span></a>
                                    </li>
                                    <li><a href="advisory-and-consulting-services/pfrs-dprs">PFR's/DPR's
                                            <span class="li-arrow">→</span></a>
                                    </li>
                                    <li><a href="advisory-and-consulting-services/open-access-services">Open
                                            Access Advisory Services <span class="li-arrow">→</span></a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="d-flex">
                            <a href="advisory-and-consulting-services" class="service-link">
                                Advisory Consulting Services
                            </a>
                            <div class="servicemenu-wrap">
                                <ul class="service-menu">
                                    <li>
                                        <a href="advisory-and-consulting-services/business-intelligence">Business
                                            Intelligence <span class="li-arrow">→</span></a>
                                    </li>
                                    <li><a href="advisory-and-consulting-services/due-diligence">Due
                                            Diligence <span class="li-arrow">→</span></a>
                                    </li>
                                    <li><a href="advisory-and-consulting-services/benchmarking-services">Benchmarking
                                            Services <span class="li-arrow">→</span></a>
                                    </li>
                                    <li><a href="advisory-and-consulting-services/pfrs-dprs">PFR's/DPR's
                                            <span class="li-arrow">→</span></a>
                                    </li>
                                    <li><a href="advisory-and-consulting-services/open-access-services">Open
                                            Access Advisory Services <span class="li-arrow">→</span></a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>


        </ul>
    </div>
</body>

</html>