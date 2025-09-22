<style>
.mobile-view-wrapper {
    position: fixed;
    inset: 0 auto 0 -110%;
    width: 100vw;
    height: 100vh;
    background: #fff;
    box-shadow: rgba(0, 0, 0, .24) 0 3px 8px;
    z-index: 999999999;
    transition: left .3s ease-in-out;
    overflow: auto;
    -webkit-overflow-scrolling: touch;
}

.mobile-view-wrapper.active {
    left: 0;
}

.close-btn {
    position: absolute;
    right: 16px;
    top: 16px;
    background: none;
    border: 0;
    font-size: 1.6rem;
}

/* Header inside drawer */
.mv-header {
    display: flex;
    align-items: center;
    gap: .75rem;
    padding: 20px;
    border-bottom: 1px solid #f0f0f0;
}

.mv-header img {
    width: 110px;
    height: auto;
}

.mv-title {
    font-size: 1rem;
    color: #6b7280;
}

/* Accordion look (like screenshot) */
.mv-nav {
    padding: 12px 0 60px;
}

.accordion-section {
    border-bottom: 1px solid #f3f4f6;
}

.accordion-trigger {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 18px 20px;
    background: #f8fafc;
    border: 0;
    font-size: 1.2rem;
    font-weight: 600;
    color: #111827;
    cursor: pointer;
}




.accordion-trigger .chev {
    transition: transform .3s ease-in-out;
    color: #111827;
}

.accordion-trigger[aria-expanded="true"] .chev {
    transform: rotate(180deg);
}


.accordion-panel {
    padding: 14px 12px 18px 12px;
}

.sub-list {
    list-style: none;
    margin: 0;
    padding: 0 8px;
    display: flex;
    flex-direction: column;
    gap: 14px;
}

.sub-list a {
    display: flex;
    align-items: center;
    gap: 12px;
    text-decoration: none;
    color: #111827;
    font-size: 1.05rem;
}

.sub-ico {
    width: 28px;
    height: 28px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    opacity: .45;
    font-size: 18px;
}

.sub-list a:hover .sub-ico {
    opacity: .75;
}


.child-list {
    list-style: none;
    margin: 8px 0 0 34px;

    padding: 0;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.child-list a {
    font-size: 0.95rem;
    color: #374151;
    text-decoration: none;
}

.child-list a:hover {
    color: #111827;
}


.sub-trigger {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: none;
    border: none;
    padding: 6px 0;
    font-size: 1.05rem;
    color: #111827;
    cursor: pointer;
}

.sub-trigger .chev {
    transition: transform 0.2s ease;
    opacity: 0.6;
}

.sub-trigger[aria-expanded="true"] .chev {
    transform: rotate(180deg);
    opacity: 1;
}
</style>

<div class="d-flex w-100 d-md-none align-items-center justify-content-center position-relative">
    <div>
        <img src="https://store.eninrac.com/assets/images/logo_dark.png" alt="Webuild Logo" style="width: 100px;">
    </div>
    <button id="menuBtn" class="border-0 text-white float-end p-2"
        style="background:none;font-size: 1.5rem;padding: 8px;border-radius: 50%;position: absolute;right: 0;">
        <i class="icofont-navigation-menu"></i>
    </button>
</div>
<div id="mobileWrapper" class="mobile-view-wrapper" aria-hidden="true">
    <button id="closeBtn" class="close-btn" aria-label="Close menu">
        <i class="icofont-close"></i>
    </button>
    <div class="mv-header">
        <img src="https://store.eninrac.com/assets/images/logo_dark.png" alt="Webuild Logo">
    </div>

    <nav class="mv-nav" aria-label="Mobile site navigation">

        <section class="accordion-section">
            <button class="accordion-trigger" aria-expanded="false">
                <span>Resources</span>
                <svg class="chev" width="20" height="20" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
            </button>
            <div class="accordion-panel" hidden>
                <ul class="sub-list">
                    <li>
                        <button class="sub-trigger" aria-expanded="false">
                            <span>Research Reports</span>
                            <svg class="chev" width="16" height="16" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                            </svg>
                        </button>
                        <ul class="child-list" hidden>

                            <li><a href="https://store.eninrac.com/browse-categories">Industries <span
                                        class="li-arrow">→</span></a></li>

                            <li><a href="https://store.eninrac.com/report-categories/insights">Insights <span
                                        class="li-arrow">→</span></a></li>

                            <li><a href="https://store.eninrac.com/report-categories/market-report">Market Report <span
                                        class="li-arrow">→</span></a>

                            </li>

                            <li><a href="https://store.eninrac.com/report-categories/database">Database <span
                                        class="li-arrow">→</span></a></li>

                            <li><a href="geography">Geography <span class="li-arrow">→</span></a></li>

                            <li><a href="reports">All Reports <span class="li-arrow">→</span></a></li>

                        </ul>
                    </li>
                    <li>
                        <button class="sub-trigger" aria-expanded="false">
                            <span>Vantedge</span>
                            <svg class="chev" width="16" height="16" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                            </svg>
                        </button>
                        <ul class="child-list" hidden>
                            <li>
                                <a href="https://vantedgeplus.com/categories/on-point">
                                    On-Point
                                    <span class="li-arrow">→</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://vantedgeplus.com/categories/80-twenty">
                                    80-20 of Industry
                                    <span class="li-arrow">→</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://vantedgeplus.com/categories/blue-papers">
                                    Blue Papers
                                    <span class="li-arrow">→</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <button class="sub-trigger" aria-expanded="false">
                            <span>Ecosystem Reports</span>
                            <svg class="chev" width="16" height="16" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                            </svg>
                        </button>
                        <ul class="child-list" hidden>
                            <li><a href="https://ecosystemreports.com/market-coverage/">Market
                                    Coverage <span class="li-arrow">→</span></a>
                            </li>
                            <li><a href="https://ecosystemreports.com/reports/">Reports
                                    <span class="li-arrow">→</span></a></li>
                            <li><a href="https://ecosystemreports.com/surveys/">Surveys
                                    <span class="li-arrow">→</span></a></li>
                            <li><a href="https://ecosystemreports.com/events/">Events
                                    <span class="li-arrow">→</span></a></li>

                        </ul>
                    </li>
                    <li>
                        <button class="sub-trigger" aria-expanded="false">
                            <span>EI Market</span>
                            <svg class="chev" width="16" height="16" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                            </svg>
                        </button>
                        <ul class="child-list" hidden>
                            <li><a href="https://energyinfra.market/">Project
                                    Manager <span class="li-arrow">→</span></a>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <button class="sub-trigger" aria-expanded="false">
                            <span>Einfews</span>
                            <svg class="chev" width="16" height="16" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                            </svg>
                        </button>
                        <ul class="child-list" hidden>
                            <li>
                                <a href="https://einfews.energyinfra.market/category/new-energy">
                                    New Energy
                                    <span class="li-arrow">→</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://einfews.energyinfra.market/category/conventional-project">
                                    Conventional Project
                                    <span class="li-arrow">→</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://einfews.energyinfra.market/category/deal-tracker">
                                    Deal Tracker
                                    <span class="li-arrow">→</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://einfews.energyinfra.market/category/new-energy">
                                    New Energy
                                    <span class="li-arrow">→</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <button class="sub-trigger" aria-expanded="false">
                            <span>Omnicore</span>
                            <svg class="chev" width="16" height="16" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                            </svg>
                        </button>
                        <ul class="child-list" hidden>
                            <li><a href="https://omnicoreplus.com/category/bid-updates">Bid
                                    Updates<span class="li-arrow">→</span></a></li>
                            <li><a href="https://omnicoreplus.com/category/central">Central<span
                                        class="li-arrow">→</span></a></li>
                            <li><a href="https://omnicoreplus.com/category/state">State<span
                                        class="li-arrow">→</span></a></li>
                            <li><a href="https://omnicoreplus.com/category/open-access">Open
                                    Access<span class="li-arrow">→</span></a></li>
                        </ul>
                    </li>

                    <li>
                        <button class="sub-trigger" aria-expanded="false">
                            <span>WHI</span>
                            <svg class="chev" width="16" height="16" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                            </svg>
                        </button>
                        <ul class="child-list" hidden>
                            <li><a href="https://einfews.energyinfra.market/category/new-energy">
                                    New Energy
                                    <span class="li-arrow">→</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </section>

        <section class="accordion-section">
            <button class="accordion-trigger" aria-expanded="false">
                <span>Services</span>
                <svg class="chev" width="20" height="20" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
            </button>
            <div class="accordion-panel" hidden>
                <ul class="sub-list">
                    <li>
                        <button class="sub-trigger" aria-expanded="false">
                            <span>Advisory & Consulting Services</span>
                            <svg class="chev" width="16" height="16" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                            </svg>
                        </button>
                        <ul class="child-list" hidden>
                            <li><a href="advisory-and-consulting-services/business-intelligence">Business Intelligence
                                    <span class="li-arrow">→</span></a></li>
                            <li><a href="advisory-and-consulting-services/due-diligence">Due Diligence <span
                                        class="li-arrow">→</span></a>
                            </li>
                            <li><a href="advisory-and-consulting-services/benchmarking-services">Benchmarking Services
                                    <span class="li-arrow">→</span></a></li>
                            <li><a href="advisory-and-consulting-services/pfrs-dprs">PFR's/DPR's <span
                                        class="li-arrow">→</span></a>
                            </li>
                            <li><a href="advisory-and-consulting-services/open-access-services">Open Access Advisory
                                    Services <span class="li-arrow">→</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <button class="sub-trigger" aria-expanded="false">
                            <span>Market Research Service</span>
                            <svg class="chev" width="16" height="16" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                            </svg>
                        </button>
                        <ul class="child-list" hidden>
                            <li><a href="market-research-service/market-tracking-and-sizing">Market Tracking &amp;
                                    Sizing <span class="li-arrow">→</span></a>

                            </li>

                            <li><a href="market-research-service/market-analytics">Market Analytics <span
                                        class="li-arrow">→</span></a></li>

                            <li><a href="market-research-service/competitor-analysis">Competitor Analysis <span
                                        class="li-arrow">→</span></a></li>

                            <li><a href="market-research-service/research-on-demand-tracking">Research on Demand
                                    Tracking <span class="li-arrow">→</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <button class="sub-trigger" aria-expanded="false">
                            <span>Strategy & Innovation</span>
                            <svg class="chev" width="16" height="16" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                            </svg>
                        </button>

                        <ul class="child-list" hidden>

                            <li><a href="strategy-and-innovation/change-management">Change Management <span
                                        class="li-arrow">→</span></a></li>

                            <li><a href="strategy-and-innovation/growth-strategy">Growth Strategy <span
                                        class="li-arrow">→</span></a></li>

                            <li><a href="strategy-and-innovation/product-innovation-strategy">Product Innovation
                                    Strategy <span class="li-arrow">→</span></a></li>

                            <li><a href="strategy-and-innovation/operations-strategy">Operations Strategy <span
                                        class="li-arrow">→</span></a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="https://eninrac.com/transformation-and-sustainability" style="width: max-content;"
                            class="">
                            <button class="sub-trigger" aria-expanded="false">
                                <span>Transformation &amp; Sustainability <span class="li-arrow">→</span></span>
                            </button>
                        </a>
                    </li>
                    <li>
                        <a href="https://eninrac.com/training-and-pro-bono-services" style="width: max-content;"
                            class="">
                            <button class="sub-trigger" aria-expanded="false">
                                <span> Training &amp; Pro-Bono Services <span class="li-arrow">→</span></span>
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
        </section>

        <section class="accordion-section">
            <button class="accordion-trigger" aria-expanded="false">
                <span>Company</span>
                <svg class="chev" width="20" height="20" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
            </button>
            <div class="accordion-panel" hidden>
                <ul class="sub-list">
                    <li>
                        <button class="sub-trigger" aria-expanded="false">
                            <span>Difference Margin</span>
                            <svg class="chev" width="16" height="16" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                            </svg>
                        </button>
                        <ul class="child-list" hidden>

                            <li>
                                <a href="https://eninrac.com/impressions">Impressions
                                    <span class="li-arrow">→</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://eninrac.com/market-response">Market Response
                                    <span class="li-arrow">→</span>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <button class="sub-trigger" aria-expanded="false">
                            <span>Why Eninrac</span>
                            <svg class="chev" width="16" height="16" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                            </svg>
                        </button>
                        <ul class="child-list" hidden>

                            <li>
                                <a href="https://eninrac.com/life-at-eninrac">
                                    Life @ Eninrac
                                    <span class="li-arrow">→</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://eninrac.com/careers">
                                    Careers
                                    <span class="li-arrow">→</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="https://eninrac.com/press-releases" style="width: max-content;" class="">
                            <button class="sub-trigger" aria-expanded="false">
                                <span>Press Releases <span class="li-arrow">→</span></span>
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
        </section>





        <section class="accordion-section">
            <button class="accordion-trigger" aria-expanded="false">
                <span>One Source</span>
                <svg class="chev" width="20" height="20" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
            </button>
            <div class="accordion-panel" hidden>
                <ul class="sub-list">
                    <li>
                        <button class="sub-trigger" aria-expanded="false">
                            <span>Budget</span>
                            <svg class="chev" width="16" height="16" viewBox="0 0 24 24">
                                <path d="M7 10l5 5 5-5" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                            </svg>
                        </button>
                        <ul class="child-list" hidden>
                            <li>
                                <a href="https://eninrac.com/budget/budget-2025">India Budget 2025
                                    <span class="li-arrow">→</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://eninrac.com/budget/budget-2024">India Budget 2024
                                    <span class="li-arrow">→</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://eninrac.com/budget/budget-2023">India Budget 2023
                                    <span class="li-arrow">→</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://eninrac.com/budget/budget-2022">India Budget 2022
                                    <span class="li-arrow">→</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://eninrac.com/budget/budget-2021">India Budget 2021
                                    <span class="li-arrow">→</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://eninrac.com/budget/budget-2020">India Budget 2020
                                    <span class="li-arrow">→</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="https://eninrac.com/knowledge-grid" target="_blank" style="width: max-content;"
                            class="">
                            <button class="sub-trigger" aria-expanded="false">
                                <span>Knowledge Grid <span class="li-arrow">→</span></span>
                            </button>
                        </a>
                    </li>
                    <li>
                        <a href="https://eninrac.com/press-releases" target="_blank" style="width: max-content;"
                            class="">
                            <button class="sub-trigger" aria-expanded="false">
                                <span>Eninrac Survey <span class="li-arrow">→</span></span>
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
        </section>


        <section class="accordion-section">
            <a href="https://eninrac.com/how-eninrac-works" style="width: max-content;">
                <button class="accordion-trigger" aria-expanded="false">
                    <span>How Eninrac Works <span class="li-arrow" style="margin-left:10px;">→</span></span>
                </button>
            </a>
        </section>

        <section class="accordion-section">
            <a href="https://eninrac.com/horizon/" style="width: max-content;">
                <button class="accordion-trigger" aria-expanded="false">
                    <span>Horizon <span class="li-arrow" style="margin-left:10px;">→</span></span>
                </button>
            </a>
        </section>
    </nav>
</div>



<script>
// Drawer open/close
const menuBtn = document.getElementById("menuBtn");
const mobileWrapper = document.getElementById("mobileWrapper");
const closeBtn = document.getElementById("closeBtn");

menuBtn.addEventListener("click", () => {
    mobileWrapper.classList.add("active");
    mobileWrapper.setAttribute("aria-hidden", "false");
});

closeBtn.addEventListener("click", () => {
    mobileWrapper.classList.remove("active");
    mobileWrapper.setAttribute("aria-hidden", "true");
});

document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") {
        closeBtn.click();
    }
});

// Accordion behavior - only one open at a time
document.querySelectorAll(".accordion-trigger").forEach(btn => {
    btn.addEventListener("click", () => {
        const isExpanded = btn.getAttribute("aria-expanded") === "true";

        // Close all accordion panels
        document.querySelectorAll(".accordion-trigger").forEach(otherBtn => {
            otherBtn.setAttribute("aria-expanded", "false");
            const otherPanel = otherBtn.parentElement.querySelector(".accordion-panel");
            if (otherPanel) otherPanel.hidden = true;
        });

        // Toggle the clicked panel
        btn.setAttribute("aria-expanded", String(!isExpanded));
        const panel = btn.parentElement.querySelector(".accordion-panel");
        if (panel) panel.hidden = isExpanded;
    });
});

// Sub-level toggles (remain independent)
document.querySelectorAll(".sub-trigger").forEach(btn => {
    btn.addEventListener("click", () => {
        const expanded = btn.getAttribute("aria-expanded") === "true";
        btn.setAttribute("aria-expanded", String(!expanded));

        const childList = btn.parentElement.querySelector(".child-list");
        if (childList) childList.hidden = expanded;
    });
});

// Ensure default-expanded section (Services) is visible on load
document.querySelectorAll(".accordion-trigger[aria-expanded='true']").forEach(btn => {
    const panel = btn.parentElement.querySelector(".accordion-panel");
    if (panel) panel.hidden = false;
});
</script>