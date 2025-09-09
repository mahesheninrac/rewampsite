<style>
    .nav-bar-details {
        position: absolute;
        top: 140px;
        left: 0;
        width: 100%;
        background: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 15px;
        z-index: 1000;
        display: none;

        opacity: 0;
        overflow: hidden;

    }

    li.navbar_dropdown_item:hover .navbar_dropdown_item-details {
        height: 600px;
        opacity: 1;
        transition: 0.5s all ease-in-out;
        display: block;
    }


    .navbar_dropdown_item-details p.menu-description {
        margin: 1rem 0px 0px;
        font-weight: 400;
        font-family: Roboto, sans-serif;
        font-size: 1rem;
        line-height: 1.5rem;

    }

    @media screen and (min-width: 992px) {
        .navbar_dropdown_item-details p.menu-description {
            font-size: 1.125rem;
            line-height: 2rem;
        }
    }

    /* menu item */
    .service-link {
        color: blue;
        cursor: pointer;
        padding: 0.375rem 0rem 0.375rem 0.5rem;
        transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1), box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1), border-color 250ms cubic-bezier(0.4, 0, 0.2, 1), color 250ms cubic-bezier(0.4, 0, 0.2, 1);
        ;
    }

    .service-link:hover {
        background-color: rgba(197, 197, 197, 0.2);
    }

    ul {
        list-style: none !important;
    }

    .servicemenu-wrap .servicemenu-ul {
        position: absolute;
        left: 26%;
        top: 30px;
        width: auto;
        padding-left: 1.5rem;
        display: none;

        flex-direction: column;
        -webkit-box-align: start;
        align-items: start;
    }

    .servicemenu-ul a {
        font-size: 14px;
        line-height: 1rem;
        height: max-content;
    }

    /* .service-item:hover .servicemenu-wrap .servicemenu-ul {
    display: flex !important;
} */
</style>


<div class="d-md-flex justify-content-md-between align-items-md-center">
    <ul class="nav-left p-0 list-unstyled d-md-flex gap-3 ">
        <li class="fs-16 navbar_dropdown_item" data-modal="group-modal">
            <a href="#" class="text-dark">
                How Eninrac Works
            </a>
            <div class="bg-light text-dark nav-bar-details d-block navbar_dropdown_item-details" id="group-modal"
                style="overflow: hidden;">
                <div class="container">
                    <div class="content">
                        <div class="pt-3">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="mega-menu">
                                        <ul>
                                            <li class="service-item">
                                                <!-- <a href="advisory-and-consulting-services" class="service-link"> -->
                                                <span class="service-link"> Advisory Consulting Services </span>
                                                <!-- </a> -->
                                                <div class="servicemenu-wrap">
                                                    <ul class="servicemenu-ul">
                                                        <li>
                                                            <a
                                                                href="advisory-and-consulting-services/business-intelligence">Business
                                                                Intelligence <span class="li-arrow">→</span></a>
                                                        </li>
                                                        <li><a href="advisory-and-consulting-services/due-diligence">Due
                                                                Diligence <span class="li-arrow">→</span></a>
                                                        </li>
                                                        <li><a
                                                                href="advisory-and-consulting-services/benchmarking-services">Benchmarking
                                                                Services <span class="li-arrow">→</span></a>
                                                        </li>
                                                        <li><a href="advisory-and-consulting-services/pfrs-dprs">PFR's/DPR's
                                                                <span class="li-arrow">→</span></a>
                                                        </li>
                                                        <li><a
                                                                href="advisory-and-consulting-services/open-access-services">Open
                                                                Access Advisory Services <span
                                                                    class="li-arrow">→</span></a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="d-flex service-item">
                                                <!-- <a href="advisory-and-consulting-services" class="service-link">
                                                    Advisory Consulting Services
                                                </a> -->
                                                <span class="service-link"> Advisory Consulting Services </span>
                                                <div class="servicemenu-wrap">
                                                    <ul class="servicemenu-ul">
                                                        <li>
                                                            <a
                                                                href="advisory-and-consulting-services/business-intelligence">Business
                                                                Intelligence <span class="li-arrow">→</span></a>
                                                        </li>
                                                        <li><a href="advisory-and-consulting-services/due-diligence">Due
                                                                Diligence <span class="li-arrow">→</span></a>
                                                        </li>
                                                        <li><a
                                                                href="advisory-and-consulting-services/benchmarking-services">Benchmarking
                                                                Services <span class="li-arrow">→</span></a>
                                                        </li>
                                                        <li><a href="advisory-and-consulting-services/pfrs-dprs">PFR's/DPR's
                                                                <span class="li-arrow">→</span></a>
                                                        </li>
                                                        <li><a
                                                                href="advisory-and-consulting-services/open-access-services">Open
                                                                Access Advisory Services <span
                                                                    class="li-arrow">→</span></a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="h-100">
                                        <img src="https://tumodo.io/storage/uploads/de53632c8f350f7da29956c4388e4f27.png"
                                            class="img-fluid object-fit-cover rounded h-100"
                                            style="max-width: 300px;float:right" alt="">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="fs-16 navbar_dropdown_item" data-modal="business-areas-modal">
            <a href="#" class="text-dark">
                Services
            </a>
            <div class="bg-light text-dark nav-bar-details navbar_dropdown_item-details" id="group-modal"
                style="overflow: hidden;">
                <div class="container">
                    <div class="content">
                        <div class="pt-3">
                            <div class="row">
                                <div class="col-md-7"></div>
                                <div class="col-md-5">
                                    <div class="h-100">
                                        <img src="https://tumodo.io/storage/uploads/de53632c8f350f7da29956c4388e4f27.png"
                                            class="img-fluid object-fit-cover rounded h-100"
                                            style="max-width: 300px;float:right" alt="">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="fs-16 navbar_dropdown_item" data-modal="projects-modal">
            <a href="#" class="text-dark">
                Resources
            </a>
            <div class="bg-light text-dark nav-bar-details navbar_dropdown_item-details" id="projects-modal"
                style="overflow: hidden;">
                <div class="container">
                    <div class="content">
                        <div class="pt-3">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="py-3">
                                        <h2 class="fw-600">PROJECTS</h2>
                                        <p class="menu-description">Webuild envisions,
                                            designs,
                                            and
                                            builds major works and
                                            infrastructure for sustainable mobility,
                                            hydropower,
                                            water,
                                            and green buildings.</p>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>

    </ul>

    <div class="nav-logo">
        <img src="https://eninrac.com/assets/images/fevicon.png" alt="Center Logo">
    </div>

    <ul class="nav-right p-0 list-unstyled d-md-flex gap-3">
        <li class="fs-16 navbar_dropdown_item" data-modal="sustainability-modal">
            <a href="#" class="text-dark">Company</a>
            <div class="bg-light text-dark nav-bar-details navbar_dropdown_item-details" id="sustainability-modal"
                style="overflow: hidden;">

            </div>
        </li>

        <li class="fs-16 navbar_dropdown_item" data-modal="sustainability-modal">
            <a href="#" class="text-dark">One Source</a>
            <div class="bg-light text-dark nav-bar-details navbar_dropdown_item-details" id="sustainability-modal"
                style="overflow: hidden;">

            </div>
        </li>

        <li class="fs-16 navbar_dropdown_item" data-modal="sustainability-modal">
            <a href="#" class="text-dark">Horizon</a>
            <div class="bg-light text-dark nav-bar-details navbar_dropdown_item-details" id="sustainability-modal"
                style="overflow: hidden;">

            </div>
        </li>


    </ul>
</div>

<script>
    let menuLink = document.querySelectorAll(".service-item .service-link");
    if (menuLink) {
        menuLink.forEach((item) => {
            item.addEventListener("click", function(e) {
                e.preventDefault()
                const servicemenuwrap = document.querySelector(".servicemenu-wrap .servicemenu-ul");
                if (servicemenuwrap.classList.contains("d-flex")) {
                    servicemenuwrap.classList.remove("d-flex");
                } else {
                    servicemenuwrap.classList.add("d-flex");
                }
            })
        })
    }
</script>