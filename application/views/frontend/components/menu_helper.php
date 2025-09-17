<div class="d-md-flex justify-content-md-between align-items-md-center">
    <ul class="nav-left p-0 list-unstyled d-md-flex gap-3 ">
        <li class="fs-16 navbar_dropdown_item">
            <a href="https://eninrac.com/how-eninrac-works" class="navbar_top_item">How Eninrac Works</a>
        </li>
        <li class="fs-16 navbar_dropdown_item">
            <a href="#" class="navbar_top_item">Services</a>
            <?php require(APPPATH . 'views/frontend/components/menu/services.php'); ?>
        </li>
        <li class="fs-16 navbar_dropdown_item">
            <a href="#" class="navbar_top_item">Resources</a>
            <?php require(APPPATH . 'views/frontend/components/menu/resources.php'); ?>
        </li>
    </ul>
    <div class="nav-logo">
        <img src="<?= base_url() ?>assets/images/bridge.svg" alt="Center Logo">
    </div>
    <ul class="nav-right p-0 list-unstyled d-md-flex gap-3">
        <li class="fs-16 navbar_dropdown_item">
            <a href="#" class="navbar_top_item">Company</a>
            <?php require(APPPATH . 'views/frontend/components/menu/company.php'); ?>
        </li>
        <li class="fs-16 navbar_dropdown_item">
            <a href="#" class="navbar_top_item">One Source</a>
            <?php require(APPPATH . 'views/frontend/components/menu/one-source.php'); ?>
        </li>
        <li class="fs-16 navbar_dropdown_item">
            <a href="https://eninrac.com/horizon/" class="navbar_top_item">Horizon</a>
        </li>
    </ul>
</div>
<script>
let menuLinks = document.querySelectorAll(".service-item .service-link");
if (menuLinks) {
    menuLinks.forEach((item) => {
        item.addEventListener("click", function(e) {
            e.preventDefault();
            showServices(item);
            // find the nearest servicemenu-ul inside the same service-item
            const serviceMenu = item.closest(".service-item").querySelector(".servicemenu-wrap");
            const icon = item.querySelector(".icofont-rounded-right");
            if (serviceMenu) {
                // check if already visible
                const isActive = serviceMenu.classList.contains('active');
                if (!isActive) {
                    // hide all other menus first
                    let serviceWrap = item.parentElement.parentElement.parentElement.querySelectorAll(
                        ".servicemenu-wrap")
                    let serviceLinkIcon = item.parentElement.parentElement.parentElement
                        .querySelectorAll(".service-link .icofont-rounded-right")
                    serviceWrap.forEach(ul => ul.classList.remove('active'));
                    serviceLinkIcon.forEach(i => i.style.display = "none");
                    // then show the current one
                    serviceMenu.classList.add('active');
                    if (icon) icon.style.display = "inline-block";
                }
            }
        });
    });
}

function showServices(item) {
    if (item.hasAttribute("data-service")) {
        const serviceId = item.getAttribute("data-service");
        let row = item.closest(".navbar_dropdown_item-details");
        row.querySelectorAll(".service-menu").forEach(el => {
            if (el.id === serviceId) {
                el.classList.remove('d-none');
                el.classList.add('d-flex');
            } else {
                el.classList.remove('d-flex');
                el.classList.add('d-none');
            }
        });

    }
}
let playBtn = document.querySelectorAll(".service-menu .icofont-ui-play");
playBtn.forEach(btn => {
    btn.addEventListener("click", function(e) {
        if (btn.hasAttribute("data-play")) {
            const videoSrc = btn.getAttribute("data-play");
            const videoPlayer = document.getElementById("videoPlayer-placeholder");
            if (videoPlayer) {
                const modal = document.getElementById("videoModal");
                modal.classList.add("fade", "show");
                videoPlayer.src = videoSrc;

                // video.currentTime = 0; // restart every time
                videoPlayer.load();
                videoPlayer.play();
            }
        }
    });
})
</script>