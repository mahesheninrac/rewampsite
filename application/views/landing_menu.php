<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <link rel="stylesheet" href="<?= base_url('assets/fonts/fonts.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
    <style>
        .off-menu-nav {
            position: fixed;
            top: 0px;
            right: 0px;
            height: 100vh;
            width: 100vw;
            background-color: #d0ddf7;
            transform: translateX(100%);
            transition: transform 0.3s ease-in-out;
            padding: 1rem;

        }

        .off-menu-nav.active {
            transform: translateX(0);
        }

        .off-menu-nav a {
            display: block;
            padding: 1rem;
            font-size: 1.2rem;
        }

        .off-menu-close {
            position: absolute;
            top: 1rem;
            right: 1rem;
            font-size: 1.5rem;
            cursor: pointer;
        }

        .center-align {
            justify-content: center;
            align-items: center;
            padding: 5rem;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md bg-white py-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('') ?>">
                <img src="<?= base_url('assets/images/final-logo-ecosystem.png') ?>" class="w-100 h-80"
                    alt="home-page-banner">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="icofont-navigation-menu fs-30"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center" style="gap: 1.5rem;">
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-normal" href="<?= base_url('reports') ?>">Reports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-normal" href="<?= base_url('custom_page') ?>">Custom Requirements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-normal" href="<?= base_url('event') ?>">Surveys</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-normal" href="<?= base_url('contact_us') ?>">Contact us</a>
                    </li>
                    <li class="nav-item ">
                        <h1 class="icofont-navigation-menu fs-22" id="off-menu-toggler"
                            style="margin-right: 5px; cursor: pointer;"></h1>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="off-menu-nav" id="off-menu-nav">
        <span class="off-menu-close" id="off-menu-close"><i class="icofont-close fs-40"></i></span>
        <div class="d-flex flex-row center-align">
            <div class="">
                <h3>Get in touch</h3>
                <p>Eninrac Consulting Private Limited<br>2nd Floor, B-130, B-Block<br>Sector 65, Noida - 201301</p>
                <div class="">
                    <p>(+91) 9319048963</p>
                    <a href="mailto:info@rhomotion.com" class="p-0">connect@eninrac.com</a>
                </div>
                <!-- social media icons -->
                <div class="d-flex gap-4 ">
                    <a href="https://www.linkedin.com/in/eninrac-consulting-88641719b/" target="_blank" rel="noreferrer"
                        class="p-0">
                        <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/ico-linkedin.5fd894.svg"
                            alt="LinkedIn">
                    </a>
                    <a href="https://x.com/i/flow/login?redirect_after_login=%2Feninrac" target="_blank"
                        rel="noreferrer" class="p-0">
                        <img src="https://rhomotion.com/app/themes/rhomotion-theme/public/images/ico-x.290b8c.svg"
                            alt="Twitter">
                    </a>
                </div>
                <!-- subscribe to news letter -->
                <div class="d-flex flex-column">
                    <label for="">Subscribe to our newsletter</label>
                    <div>
                        <input type="email" name="" id="">
                        <button type="button" class="btn ">Primary</button>
                        <p>By submitting this form, you agree to Rho Motion’s privacy policy.</p>
                    </div>
                </div>

            </div>

            <div class="nav-links">
                <a href="<?= base_url('reports') ?>" class="d-block" id="reports">Reports</a>
                <a href="<?= base_url('custom_page') ?>" class="d-block" id="custom_page">Custom Requirements</a>
                <a href="<?= base_url('event') ?>" class="d-block" id="event">Surveys & VoC</a>
                <a href="<?= base_url('contact_us') ?>" class="d-block">About us</a>

                <button type="button" class="btn btn-outline-secondary">login</button>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('off-menu-toggler').addEventListener('click', function () {
            document.getElementById('off-menu-nav').classList.toggle('active');
        });

        document.getElementById('off-menu-close').addEventListener('click', function () {
            document.getElementById('off-menu-nav').classList.toggle('active');
        });
    </script>
</body>

</html>