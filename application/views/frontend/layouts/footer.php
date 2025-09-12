 <style>
     .fade {
         opacity: 0;
         transition: opacity .15s linear;
     }

     .video-bg-model {
         position: fixed;
         top: 0;
         left: 0;
         z-index: 1050;
         width: 100%;
         height: 100%;
         outline: 0;
         background: #323232f0;
         display: none;
         overflow-x: hidden;
         overflow-y: auto;
     }

     .video-bg-model.fade.show {
         display: block;
         opacity: 1;
         z-index: 9999999999999999;
     }

     .close-video-model {
         cursor: pointer;
         position: absolute;
         right: 15px;
         top: 15px;
         font-size: 28px;
         color: white;
     }

     .width-700 {
         max-width: 700px;
         width: 100%;
     }

     .video-caption h3.c-white.text-center {
         color: white;
         margin: 0 auto;
         font-size: 1.75rem;
         line-height: 2.25rem;
         font-weight: 300;
     }

     .gradient-decent {
         background-image: var(--enin-gradient-decent);
     }
 </style>

 <!-- Custom Video Modal -->
 <div class="video-bg-model fade" id="videoModal">
     <div class="close-video-model" id="closeVideoBtn">&times;</div>
     <div class="container width-700 mx-auto my-5">
         <video id="videoPlayer-placeholder" class="w-100" controls>
             <source src="https://eninrac.com/assets/video/market-research.mp4" type="video/mp4">
             Your browser does not support HTML video.
         </video>
         <div class="video-caption my-3">
             <h3 class="c-white text-center">
                 Ready to learn more about Eninrac?
                 <a href="contact" class="gradient-decent fs-14 c-white"
                     style="border: none;padding: 10px 20px;border-radius: 10px 0 10px 0;">
                     REQUEST DEMO
                 </a>
             </h3>
         </div>
     </div>
 </div>

 <script>
     const openBtn = document.getElementById("openVideoBtn");
     const closeBtn = document.getElementById("closeVideoBtn");
     const modal = document.getElementById("videoModal");
     const video = document.getElementById("videoPlayer-placeholder");



     // Close modal and pause video
     closeBtn.addEventListener("click", () => {
         modal.classList.remove("show");
         modal.classList.remove("fade");
         video.pause();
     });

     // Optional: close if user clicks outside the video
     modal.addEventListener("click", (e) => {
         if (e.target === modal) {
             modal.classList.remove("show");
             modal.classList.remove("fade");
             video.pause();
         }
     });
 </script>

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
                             <a href="/ae-en/career">Careers</a>
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