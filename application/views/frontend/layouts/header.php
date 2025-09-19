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
</head>

<body>
    <header class="circle-header">
        <div class="header-center-circle-background d-none d-md-block">
            <div class="container">
                <div class="">
                    <div
                        class="header-bottom top-bar d-md-flex justify-content-md-between align-items-md-center position-relative">
                        <div class="left d-md-flex align-items-md-center ga-2">
                            <img src="<?=base_url()?>assets/images/logo_dark.svg" alt="Webuild Logo" class="logo">

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
        <div class="mobile-view-only bg-primary d-flex d-md-none position-relative" style="height:70px;padding-left: 1.375rem;padding-right: 1.375rem;">
            <?php require(APPPATH . 'views/frontend/components/mobile_menu_helper.php'); ?>
        </div>
    </header>
    <script>
        document.addEventListener("scroll", function() {
            const navbar = document.querySelector("header.circle-header");
            if (window.scrollY >= 50) {
                navbar.classList.add("fixed-header");
            } else {
                navbar.classList.remove("fixed-header");
            }
        });
    </script>