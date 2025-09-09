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
    <script src="https://cdn.jsdelivr.net/npm/@dotlottie/player-component@v1.3.0/dist/dotlottie-player.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/matter-js@0.19.0/build/matter.min.js"></script>

    <style>
        header.circle-header {
            width: 100%;
            position: sticky;
            top: -50px;
            display: block;
            z-index: 999999;
            background-color: #f7f8fa;
            box-shadow: 1px 3px 8px 0px rgba(0, 0, 0, 0.2) !important;
        }

        @media screen and (min-width: 0px) {
            .mobile-view-only {
                padding-left: 1.375rem;
                padding-right: 1.375rem;
            }
        }

        .mobile-view-only {
            width: 100%;
            margin-left: auto;
            box-sizing: border-box;
            margin-right: auto;
            display: block;
            padding-left: 0.125rem;
            padding-right: 0.125rem;
            background-image: url(https://www.webuildgroup.com/_next/static/media/header_mobile_shape.b426e4e1.svg);
            background-color: #000000;
            background-position-x: center;
            background-position-y: top;
            background-repeat: no-repeat;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        .header-center-circle-background {
            background-position: 50% 0%;
            position: relative;
            background-repeat: no-repeat;
            background-image: url(<?= base_url() ?>/assets/images/shape-og-01.svg);
        }

        @media screen and (min-width: 1200px) {
            .header-bottom {
                padding-top: 0.75rem;
                padding-bottom: 6.25rem;
            }
        }

        @media screen and (min-width: 576px) {
            .header-bottom {
                padding-top: 0.5rem;
                padding-bottom: 4.25rem;
            }
        }

        .top-bar .logo {
            width: 100px;
            height: auto;
        }

        .brand {
            font-weight: bold;
            font-size: 18px;
        }

        .nav-bar a {
            padding-bottom: 6px;
            transition: 0.3s all ease;
        }

        .nav-bar a:hover {
            transform: scale(1);
            border-bottom: 2px solid;
            border-bottom-color: rgb(219, 0, 47);
        }

        .nav-bar {
            transition: all 0.3s ease;
        }

        .nav-logo {
            position: absolute;
            left: 45%;
            top: 40%;
            transform: translate(50%, 0%);
            padding: 10px;
            border-radius: 50%;
        }

        .mobile-view-only-img {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);

        }

        .nav-logo img {
            width: 40px;
            height: auto;
        }



        .navbar-sticky {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            padding: 0.875rem 0px 1.125rem;
            background-color: black;
            background-color: rgb(0, 0, 0);
            background-position: 50% 0%;
            position: relative;
            background-repeat: no-repeat;
            background-image: url(https://www.webuildgroup.com/_next/static/media/header_medium_shape.5179ebd7.svg);
        }

        .navbar-sticky .nav-logo {
            position: static !important;
            left: 50%;
        }

        .navbar-sticky .nav-bar-details {
            top: 90px;
        }

        ul {
            padding: 0;
            margin: 0;
        }

        .nav-bar ul li {
            padding-bottom: 20px;
        }

        .navbar-sticky ul li {
            padding-bottom: 0px !important;
        }
    </style>
</head>

<body>

    <header class="circle-header">
        <div class="header-center-circle-background d-none d-md-block">
            <div class="container">
                <div class="">
                    <div
                        class="header-bottom top-bar d-md-flex justify-content-md-between align-items-md-center position-relative">
                        <div class="left d-md-flex align-items-md-center ga-2">
                            <img src="https://eninrac.com/assets/images/logo_dark.png" alt="Webuild Logo" class="logo">

                        </div>
                        <div class="right d-flex align-items-center gap-2 fs-16" style="font-size: 16px;">
                            <i class="icofont-ui-search"></i>
                            <span class="stock"> Store</span>
                            <span class="language">Login </span>
                        </div>
                    </div>
                    <nav class="nav-bar   ">
                        <div class="container">
                            <?php require(APPPATH . 'views/frontend/components/menu_helper.php'); ?>

                        </div>
                    </nav>
                </div>
            </div>
        </div>


        <div class="mobile-view-only bg-primary d-flex d-md-none position-relative"
            style="height:70px;padding-left: 1.375rem;padding-right: 1.375rem;">
            <div class=" d-flex w-100 d-md-none align-items-center justify-content-center position-relative">
                <div class="">
                    <img src="https://store.eninrac.com/assets/images/logo_dark.png" alt="Webuild Logo" class=""
                        style="width: 100px;">
                </div>
            </div>
            <button class="flex-end border-0 text-white float-end p-2"
                style="background:none;font-size: 1.5rem;padding: 8px;border-radius: 50%;     position: absolute;right: 0;">
                <i class="icofont-navigation-menu"></i>
            </button>
        </div>
    </header>

    <!-- <script>
    document.addEventListener("scroll", function() {
        const navbar = document.querySelector(".nav-bar");
        if (window.scrollY >= 200) {
            navbar.classList.add("navbar-sticky");
        } else {
            navbar.classList.remove("navbar-sticky");
        }
    });

    document.addEventListener("DOMContentLoaded", function() {
        const navItems = document.querySelectorAll('li[data-modal]');
        navItems.forEach(item => {
            const modalId = item.getAttribute("data-modal");
            const modal = document.getElementById(modalId);
            let hoverTimeout;

            if (!modal) return; // skip if no matching modal

            function showModal() {
                clearTimeout(hoverTimeout);
                modal.classList.add("show");
                requestAnimationFrame(() => {
                    modal.classList.add("active");
                });
            }

            function hideModal() {
                hoverTimeout = setTimeout(() => {
                    modal.classList.remove("active");
                    modal.addEventListener("transitionend", function handler() {
                        modal.classList.remove("show");
                        modal.removeEventListener("transitionend", handler);
                    });
                }, 200);
            }

            item.addEventListener("mouseenter", showModal);
            item.addEventListener("mouseleave", hideModal);
            modal.addEventListener("mouseenter", showModal);
            modal.addEventListener("mouseleave", hideModal);
        });
    });
    </script> -->