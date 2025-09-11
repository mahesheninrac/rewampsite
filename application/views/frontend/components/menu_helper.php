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
    cursor: pointer;
    padding: 0.375rem 0rem 0.375rem 0.5rem !important;
}

.service-link:hover {
    /* background-color: rgba(197, 197, 197, 0.2); */
    background-color: rgb(241, 242, 245);
    color: rgb(20, 33, 70);
}

.service-link .icofont-rounded-right {
    display: none;
    /* hide by default */
}


ul {
    list-style: none !important;
}

.servicemenu-wrap {
    position: absolute;
    left: 327px;
    top: 0;
    width: 450px;
    padding-left: 2.5rem;
    display: none;
    flex-direction: column;
    -webkit-box-align: start;
    align-items: start;
}

.servicemenu-ul li,
.servicemenu-wrap h3 {
    padding: 0.375rem 0rem 0.375rem 0.5rem;
}

.servicemenu-ul a {
    font-size: 16px;
    line-height: 1rem;
    height: max-content;
}

/* .right-image-link-ref::before {
    content: "→";
    position: absolute;
    bottom: 0;
    left: 0;
    background-color: blue;
    width: 40px;
    height: 40px;
    color: white;
    transition: 0.5s all ease-in-out;
} */

/* .right-image-link-ref:hover span {
    transform: rotate(307deg);
} */

.right-image-link-ref {
    display: flex;
    flex-direction: column;
    min-height: 208px;
    overflow: hidden;
    justify-content: space-between;
    max-width: 375px;
    width: 100%;
}

.services-right-ref__image {
    position: absolute;
    right: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.service-btn_icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #0055fe;
    color: #fff;
    transition: box-shadow 0.1s linear;
    position: absolute;
    left: 10px;
    bottom: 10px;
}

.service-btn_icon .icofont-long-arrow-up {
    transition: 0.5s all ease-in-out;
    font-size: 20px;
    transform: rotate(45deg);
}

.service-btn_icon:hover .icofont-long-arrow-up {
    transform: rotate(-307deg);
}

a.cta {
    font-size: 14px;
    color: black;
    float: right;
}

.cta::after {
    position: absolute;
    pointer-events: none;
    font-family: mck-icons;
    content: "→";
    font-style: normal;
}

a.cta:hover {
    color: #0055fe;

}
</style>


<div class="d-md-flex justify-content-md-between align-items-md-center">
    <ul class="nav-left p-0 list-unstyled d-md-flex gap-3 ">
        <li class="fs-16 navbar_dropdown_item " data-modal="group-modal">
            <a href="#" class="text-white navbar_top_item">
                How Eninrac Works
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
        <li class="fs-16 navbar_dropdown_item" data-modal="business-areas-modal">
            <a href="#" class="text-white navbar_top_item">
                Services
            </a>
            <div class="bg-light text-dark nav-bar-details  navbar_dropdown_item-details" id="group-modal"
                style="overflow: hidden;">
                <div class="container">
                    <div class="content">
                        <div class="pt-3">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="mega-menu position-relative">
                                        <ul class="d-flex flex-column gap-2">
                                            <li class="row service-item">
                                                <div class="col-md-6">
                                                    <div style="max-width: 274px;"
                                                        class="d-flex w-100 align-items-center justify-content-between gap-2 service-link">
                                                        <span class="fw-bold">Advisory Consulting
                                                            Services</span>
                                                        <i class="icofont-rounded-right"></i>
                                                    </div>
                                                </div>

                                                <!-- </a> -->
                                                <div class="col-md-6">
                                                    <div class="servicemenu-wrap">
                                                        <ul class="servicemenu-ul">
                                                            <li>
                                                                <a
                                                                    href="advisory-and-consulting-services/business-intelligence">Business
                                                                    Intelligence
                                                                    <span class="li-arrow">→</span></a>
                                                            </li>
                                                            <li><a
                                                                    href="advisory-and-consulting-services/due-diligence">Due
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
                                                </div>

                                            </li>
                                            <li class="row service-item">
                                                <div class="col-md-6">
                                                    <div style="max-width: 274px;"
                                                        class="d-flex w-100 align-items-center justify-content-between gap-2 service-link">
                                                        <span class="fw-bold">Market Tracking & Sizing</span>
                                                        <i class="icofont-rounded-right"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="">
                                                        <div class="servicemenu-wrap">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center gap-5">
                                                                <h3 class="fs-16 fw-bold">Market Tracking & Sizing</h3>
                                                                <a href="<?= base_url() ?>market-research-service"
                                                                    class="cta -arrow position-relative">View</a>
                                                            </div>
                                                            <ul class="servicemenu-ul">
                                                                <li>
                                                                    <a
                                                                        href="market-research-service/market-tracking-and-sizing">Market
                                                                        Tracking &amp; Sizing <span
                                                                            class="li-arrow">→</span></a>
                                                                </li>
                                                                <li><a href="market-research-service/market-analytics">Market
                                                                        Analytics <span class="li-arrow">→</span></a>
                                                                </li>
                                                                <li><a
                                                                        href="market-research-service/competitor-analysis">Competitor
                                                                        Analysis <span class="li-arrow">→</span></a>
                                                                </li>
                                                                <li><a
                                                                        href="market-research-service/research-on-demand-tracking">Research
                                                                        on Demand Tracking <span
                                                                            class="li-arrow">→</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>


                                                </div>
                                            </li>

                                            <li class="row service-item">
                                                <div class="col-md-6">
                                                    <div style="max-width: 274px;"
                                                        class="d-flex w-100 align-items-center justify-content-between gap-2 service-link">
                                                        <span class="fw-bold">Strategy & Innovation</span>
                                                        <i class="icofont-rounded-right"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="">
                                                        <div class="servicemenu-wrap">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center gap-5">
                                                                <h3 class="fs-16 fw-bold">Strategy & Innovation</h3>
                                                                <a href="<?= base_url() ?>strategy-and-innovation"
                                                                    class="cta -arrow position-relative">View</a>
                                                            </div>
                                                            <ul class="servicemenu-ul">
                                                                <li><a href="strategy-and-innovation/change-management">Change
                                                                        Management <span class="li-arrow">→</span></a>
                                                                </li>
                                                                <li><a href="strategy-and-innovation/growth-strategy">Growth
                                                                        Strategy <span class="li-arrow">→</span></a>
                                                                </li>
                                                                <li><a
                                                                        href="strategy-and-innovation/product-innovation-strategy">Product
                                                                        Innovation Strategy <span
                                                                            class="li-arrow">→</span></a>
                                                                </li>
                                                                <li><a
                                                                        href="strategy-and-innovation/operations-strategy">Operations
                                                                        Strategy <span class="li-arrow">→</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex service-item">
                                                <div style="max-width: 274px;"
                                                    class="d-flex w-100 align-items-center justify-content-between gap-2 service-link">
                                                    <span class="fw-bold">Transformation & Sustainability</span>
                                                    <i class="icofont-rounded-right"></i>
                                                </div>
                                            </li>
                                            <li class="d-flex service-item">
                                                <div style="max-width: 274px;"
                                                    class="d-flex w-100 align-items-center justify-content-between gap-2 service-link">
                                                    <span class="fw-bold">Training & Pro-Bono Services</span>
                                                    <i class="icofont-rounded-right"></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="">
                                        <a href="#" class="right-image-link-ref position-relative">
                                            <!-- <div role="button"
                                                class="right-image-link-ref position-absolute d-flex rounded-circle cursor-pointer justify-content-center align-items-center bg bg-primary"
                                                style="width:40px;height:40px;top:56%;right:55%;">
                                                <span class="li-arrow text-white">→</span>
                                            </div> -->
                                            <img src="https://tumodo.io/storage/uploads/de53632c8f350f7da29956c4388e4f27.png"
                                                class="services-right-ref__image  img-fluid object-fit-cover rounded h-100"
                                                style="float:right" alt="">
                                            <div class="service-btn_icon">
                                                <i class="icofont-long-arrow-up"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="fs-16 navbar_dropdown_item" data-modal="projects-modal">
            <a href="#" class="text-white navbar_top_item">
                Resources
            </a>
            <div class="bg-light text-dark nav-bar-details  navbar_dropdown_item-details" id="group-modal"
                style="overflow: hidden;">
                <div class="container">
                    <div class="content">
                        <div class="pt-3">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="mega-menu position-relative">
                                        <ul class="d-flex flex-column gap-2">
                                            <li class="row service-item">
                                                <div class="col-md-6">
                                                    <div style="max-width: 274px;"
                                                        class="d-flex w-100 align-items-center justify-content-between gap-2 service-link">
                                                        <span class="fw-bold">Research Report</span>
                                                        <i class="icofont-rounded-right"></i>
                                                    </div>
                                                </div>

                                                <!-- </a> -->
                                                <div class="col-md-6">
                                                    <div class="servicemenu-wrap">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center gap-5">
                                                            <h3 class="fs-16 fw-bold">Research Report</h3>
                                                            <a href="<?= base_url() ?>research-reports"
                                                                class="cta -arrow position-relative">View</a>
                                                        </div>
                                                        <ul class="servicemenu-ul">
                                                            <li><a href="https://store.eninrac.com/browse-categories">Industries
                                                                    <span class="li-arrow">→</span></a></li>
                                                            <li><a
                                                                    href="https://store.eninrac.com/report-categories/insights">Insights
                                                                    <span class="li-arrow">→</span></a></li>
                                                            <li><a
                                                                    href="https://store.eninrac.com/report-categories/market-report">Market
                                                                    Report <span class="li-arrow">→</span></a>
                                                            </li>
                                                            <li><a
                                                                    href="https://store.eninrac.com/report-categories/database">Database
                                                                    <span class="li-arrow">→</span></a></li>
                                                            <li><a href="geography">Geography <span
                                                                        class="li-arrow">→</span></a>
                                                            </li>
                                                            <li><a href="reports">All Reports <span
                                                                        class="li-arrow">→</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </li>
                                            <li class="row service-item">
                                                <div class="col-md-6">
                                                    <div style="max-width: 274px;"
                                                        class="d-flex w-100 align-items-center justify-content-between gap-2 service-link">
                                                        <span class="fw-bold">Vantedge Plus</span>
                                                        <i class="icofont-rounded-right"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="">
                                                        <div class="servicemenu-wrap">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center gap-5">
                                                                <h3 class="fs-16 fw-bold">Vantedge Plus</h3>
                                                                <a href="https://vantedgeplus.com/"
                                                                    class="cta -arrow position-relative">View</a>
                                                            </div>

                                                            <ul class="servicemenu-ul">
                                                                <li><a
                                                                        href="https://vantedgeplus.com/categories/on-point">On-Point
                                                                        <span class="li-arrow">→</span></a></li>
                                                                <li><a
                                                                        href="https://vantedgeplus.com/categories/80-twenty">80-20
                                                                        of Industry <span class="li-arrow">→</span></a>
                                                                </li>
                                                                <li><a
                                                                        href="https://vantedgeplus.com/categories/blue-papers">Blue
                                                                        Papers <span class="li-arrow">→</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>


                                                </div>
                                            </li>

                                            <li class="row service-item">
                                                <div class="col-md-6">
                                                    <div style="max-width: 274px;"
                                                        class="d-flex w-100 align-items-center justify-content-between gap-2 service-link">
                                                        <span class="fw-bold">Ecosystem Reports</span>
                                                        <i class="icofont-rounded-right"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="">
                                                        <div class="servicemenu-wrap">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center gap-5">
                                                                <h3 class="fs-16 fw-bold">Ecosystem Reports</h3>
                                                                <a href="https://ecosystemreports.com/"
                                                                    class="cta -arrow position-relative">View</a>
                                                            </div>
                                                            <ul class="servicemenu-ul">
                                                                <li><a
                                                                        href="https://ecosystemreports.com/market-coverage/">Market
                                                                        Coverage <span class="li-arrow">→</span></a>
                                                                </li>
                                                                <li><a href="https://ecosystemreports.com/reports/">Reports
                                                                        <span class="li-arrow">→</span></a></li>
                                                                <li><a href="https://ecosystemreports.com/surveys/">Surveys
                                                                        <span class="li-arrow">→</span></a></li>
                                                                <li><a href="https://ecosystemreports.com/events/">Events
                                                                        <span class="li-arrow">→</span></a></li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>


                                            <li class="row service-item">
                                                <div class="col-md-6">
                                                    <div style="max-width: 274px;"
                                                        class="d-flex w-100 align-items-center justify-content-between gap-2 service-link">
                                                        <span class="fw-bold">EI Market</span>
                                                        <i class="icofont-rounded-right"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="">
                                                        <div class="servicemenu-wrap">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center gap-5">
                                                                <h3 class="fs-16 fw-bold">EI Market</h3>
                                                                <a href="https://energyinfra.market/"
                                                                    class="cta -arrow position-relative">View</a>
                                                            </div>
                                                            <ul class="servicemenu-ul">
                                                                <li><a href="https://energyinfra.market/">Project
                                                                        Manager <span class="li-arrow">→</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="row service-item">
                                                <div class="col-md-6">
                                                    <div style="max-width: 274px;"
                                                        class="d-flex w-100 align-items-center justify-content-between gap-2 service-link">
                                                        <span class="fw-bold">Einfews</span>
                                                        <i class="icofont-rounded-right"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="">
                                                        <div class="servicemenu-wrap">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center gap-5">
                                                                <h3 class="fs-16 fw-bold">Einfews</h3>
                                                                <a href="https://einfews.energyinfra.market/"
                                                                    class="cta -arrow position-relative">View</a>
                                                            </div>
                                                            <ul class="servicemenu-ul">
                                                                <li><a
                                                                        href="https://einfews.energyinfra.market/category/new-energy">New
                                                                        Energy<span class="li-arrow">→</span></a></li>
                                                                <li><a
                                                                        href="https://einfews.energyinfra.market/category/conventional-project">Conventional
                                                                        Project<span class="li-arrow">→</span></a></li>
                                                                <li><a
                                                                        href="https://einfews.energyinfra.market/category/deal-tracker">Deal
                                                                        Tracker<span class="li-arrow">→</span></a></li>
                                                                <li><a
                                                                        href="https://einfews.energyinfra.market/category/new-energy">New
                                                                        Energy<span class="li-arrow">→</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="row service-item">
                                                <div class="col-md-6">
                                                    <div style="max-width: 274px;"
                                                        class="d-flex w-100 align-items-center justify-content-between gap-2 service-link">
                                                        <span class="fw-bold">Omnicore</span>
                                                        <i class="icofont-rounded-right"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="">
                                                        <div class="servicemenu-wrap">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center gap-5">
                                                                <h3 class="fs-16 fw-bold">Omnicore</h3>
                                                                <a href="https://omnicoreplus.com/"
                                                                    class="cta -arrow position-relative">View</a>
                                                            </div>
                                                            <ul class="servicemenu-ul">
                                                                <li><a
                                                                        href="https://omnicoreplus.com/category/bid-updates">Bid
                                                                        Updates<span class="li-arrow">→</span></a></li>
                                                                <li><a href="https://omnicoreplus.com/category/central">Central<span
                                                                            class="li-arrow">→</span></a></li>
                                                                <li><a href="https://omnicoreplus.com/category/state">State<span
                                                                            class="li-arrow">→</span></a></li>
                                                                <li><a
                                                                        href="https://omnicoreplus.com/category/open-access">Open
                                                                        Access<span class="li-arrow">→</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <!-- <li class="row service-item">
                                                <div class="col-md-6">
                                                    <div style="max-width: 274px;"
                                                        class="d-flex w-100 align-items-center justify-content-between gap-2 service-link">
                                                        <span class="fw-bold">OneSource</span>
                                                        <i class="icofont-rounded-right"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="">
                                                        <div class="servicemenu-wrap">
                                                            <ul class="servicemenu-ul">
                                                                <li><a href="https://eninrac.com/budget">Budget<span
                                                                            class="li-arrow">→</span></a></li>
                                                                <li><a href="https://omnicoreplus.com/category/central">Horizon<span
                                                                            class="li-arrow">→</span></a></li>
                                                                <li><a href="https://eninrac.com/knowledge-grid">Knowledge
                                                                        grid<span class="li-arrow">→</span></a></li>
                                                                <li><a href="https://survey.eninrac.com/">Eninrac
                                                                        Survey<span class="li-arrow">→</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="">
                                        <a href="#" class="right-image-link-ref position-relative">
                                            <!-- <div role="button"
                                                class="right-image-link-ref position-absolute d-flex rounded-circle cursor-pointer justify-content-center align-items-center bg bg-primary"
                                                style="width:40px;height:40px;top:56%;right:55%;">
                                                <span class="li-arrow text-white">→</span>
                                            </div> -->
                                            <img src="https://tumodo.io/storage/uploads/de53632c8f350f7da29956c4388e4f27.png"
                                                class="services-right-ref__image  img-fluid object-fit-cover rounded h-100"
                                                style="float:right" alt="">
                                            <div class="service-btn_icon">
                                                <i class="icofont-long-arrow-up"></i>
                                            </div>
                                        </a>
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
            <a href="#" class="text-white navbar_top_item">Company</a>
            <div class="bg-light text-dark nav-bar-details navbar_dropdown_item-details" id="sustainability-modal"
                style="overflow: hidden;">
                <div class="container">
                    <div class="content">
                        <div class="pt-3">
                            <div class="row">
                                <div class="col-md-4">
                                    <ul>
                                        <div class="col-md-6">
                                            <div style="max-width: 274px;"
                                                class="d-flex w-100 align-items-center justify-content-between gap-2 service-link">
                                                <span class="fw-bold">Market Tracking & Sizing</span>
                                                <i class="icofont-rounded-right"></i>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>

        <li class="fs-16 navbar_dropdown_item" data-modal="sustainability-modal">
            <a href="#" class="text-white navbar_top_item">One Source</a>
            <div class="bg-light text-dark nav-bar-details navbar_dropdown_item-details" id="sustainability-modal"
                style="overflow: hidden;">

            </div>
        </li>

        <li class="fs-16 navbar_dropdown_item" data-modal="sustainability-modal">
            <a href="#" class="text-white navbar_top_item">Horizon</a>
            <div class="bg-light text-dark nav-bar-details navbar_dropdown_item-details" id="sustainability-modal"
                style="overflow: hidden;">

            </div>
        </li>


    </ul>
</div>

<script>
let menuLinks = document.querySelectorAll(".service-item .service-link");

if (menuLinks) {
    menuLinks.forEach((item) => {
        item.addEventListener("click", function(e) {
            e.preventDefault();


            // find the nearest servicemenu-ul inside the same service-item
            const serviceMenu = item.closest(".service-item").querySelector(
                ".servicemenu-wrap ");
            const icon = item.querySelector(".icofont-rounded-right");


            if (serviceMenu) {
                // check if already visible
                if (serviceMenu.style.display !== "flex") {
                    // hide all other menus first
                    document.querySelectorAll(".servicemenu-wrap").forEach(ul => ul.style.display =
                        "none");

                    document.querySelectorAll(".service-link .icofont-rounded-right").forEach(i => i
                        .style.display = "none");

                    // then show the current one
                    serviceMenu.style.display = "flex";

                    if (icon) icon.style.display = "inline-block";
                }
                // else do nothing if already open
            }



        });
    });
}
</script>