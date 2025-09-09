<footer class="footer footer pb-5 z-1 pt-5">
    <div class="wrap">
        <div class="footer-top d-flex flex-wrap" style="  border-bottom: 1px solid #404040;">
            <div class="">
                <div class="footer-nav-column">
                    <div class="footer-top__title">Company</div>
                    <ul class="d-flex flex-column gap-1 list-unstyled m-0 p-0">
                        <li>
                            <a href="/ae-en/about">About us</a>
                        </li>
                        <li>
                            <a href="/ae-en/contacts">Contacts</a>
                        </li>
                        <li>
                            <a href="/ae-en/career">Career</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="footer-nav-column">
                    <div class="footer-top__title">Resources</div>
                    <ul class="d-flex flex-column gap-1 list-unstyled m-0 p-0">
                        <li>
                            <a href="/ae-en/resources/research-reports">Research Reports</a>
                        </li>
                        <li>
                            <a href="/ae-en/resources/vantedge-plus">Vantedge+</a>
                        </li>
                        <li>
                            <a href="/ae-en/resources/omnicore-plus">Omnicore+</a>
                        </li>
                        <li>
                            <a href="/ae-en/resources/knowledge-grid">Knowledge Grid</a>
                        </li>
                        <li>
                            <a href="/ae-en/resources/geography">Geography</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="">
                <div class="footer-nav-column">
                    <div class="footer-top__title">Services</div>
                    <ul class="d-flex flex-column gap-1 list-unstyled m-0 p-0">
                        <li>
                            <a href="/ae-en/service/advisory-consulting">Advisory & Consulting Services</a>
                        </li>
                        <li>
                            <a href="/ae-en/service/market-research">Market Research Services</a>
                        </li>
                        <li>
                            <a href="/ae-en/service/strategy-innovation">Strategy & Innovation</a>
                        </li>
                        <li>
                            <a href="/ae-en/service/transformation-sustainability">Transformation &
                                Sustainability</a>
                        </li>
                        <li>
                            <a href="/ae-en/service/training-pro-bono">Training & Pro Bono</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="" id="">
                <div class="footer-nav-column">
                    <div class="footer-top__title">Products</div>
                    <ul class="d-flex flex-column gap-1 list-unstyled m-0 p-0">
                        <li>
                            <a href="/ae-en/products/energy-infra-market">Energy Infra Market</a>
                        </li>
                        <li>
                            <a href="/ae-en/products/market-research-reports">Market Research Reports</a>
                        </li>
                        <li>
                            <a href="/ae-en/products/visionboard">Visionboard</a>
                        </li>
                        <li>
                            <a href="/ae-en/products/open-access-d2i-tool">Open Access D2I Tool</a>
                        </li>
                        <li>
                            <a href="/ae-en/products/power-tariff-d2i-tool">Power Tariff D2I Tool</a>
                        </li>
                        <li>
                            <a href="/ae-en/products/electric-vehicle-mrac-plus-tool">Electric Vehicle MRAC+
                                Tool</a>
                        </li>
                        <li>
                            <a href="/ae-en/products/solar-mrac-plus-tool">Solar MRAC+ Tool</a>
                        </li>
                        <li>
                            <a href="/ae-en/products/wind-mrac-plus-tool">Wind MRAC+ Tool</a>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
        <div class="footer-bottom pt-3 row row-gap-3">
            <div class="col-md-4">
                <div class="footer-info">
                    <div class="footer-logo" style="max-width: 150px;">
                        <img src="https://eninrac.com/assets/images/logo_dark.png" alt="Tumodo: business travel">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class=""></div>
            </div>
        </div>
    </div>
</footer>

<script>
    const revealELs = (element = '[data-reveal]', currentClass = '_visible', delay = 1000) => {
        const El = document.querySelectorAll(element);
        if (El) {
            const io = new IntersectionObserver((entries) => {
                entries.forEach(e => {
                    if (e.isIntersecting) {
                        let el_delay = e.target.getAttribute('[data-delay]')
                        delay = el_delay ? el_delay : delay;
                        setTimeout(function() {


                            e.target.classList.add(currentClass);

                            io.unobserve(e.target);
                        }, delay)
                    }
                });
            }, {
                threshold: .12
            });
            El.forEach(el => io.observe(el));
        }
    }

    revealELs()
    revealELs("[data-msg-reveal]", "show")
</script>


<script src="<?= base_url() ?>assets/plugins/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>assets/js/embedScript.js"></script>
<script src="<?= base_url() ?>assets/js/app.js"></script>
<script src="<?= base_url() ?>assets/js/script.js"></script>
<script src="<?= base_url() ?>assets/js/footer.js"></script>

</body>

</html>