<!-- Header -->
<div class="d-flex w-100 d-md-none align-items-center justify-content-center position-relative">
    <div>
        <img src="https://store.eninrac.com/assets/images/logo_dark.png" alt="Webuild Logo" style="width: 100px;">
    </div>
    <button id="menuBtn" class="border-0 text-white float-end p-2"
        style="background:none;font-size: 1.5rem;padding: 8px;border-radius: 50%;position: absolute;right: 0;">
        <i class="icofont-navigation-menu"></i>
    </button>
</div>

<!-- Mobile Drawer -->
<div id="mobileWrapper" class="mobile-view-wrapper">
    <button id="closeBtn" class="close-btn">
        <i class="icofont-close"></i>
    </button>
    <div class="p-4">
        <h4>Menu</h4>
        <ul class="list-unstyled mt-3">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
</div>

<style>
.mobile-view-wrapper {
    position: fixed;
    top: 0;
    left: -110%;
    /* hidden initially */
    width: 100vw;
    height: 100vh;
    background: #fff;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    z-index: 999999999;
    transition: left 0.3s ease-in-out;
}

.mobile-view-wrapper.active {
    left: 0;
    /* visible */
}

.close-btn {
    position: absolute;
    right: 15px;
    top: 15px;
    background: none;
    border: none;
    font-size: 1.5rem;
}
</style>

<script>
const menuBtn = document.getElementById("menuBtn");
const mobileWrapper = document.getElementById("mobileWrapper");
const closeBtn = document.getElementById("closeBtn");

menuBtn.addEventListener("click", () => {
    mobileWrapper.classList.add("active");
});

closeBtn.addEventListener("click", () => {
    mobileWrapper.classList.remove("active");
});
</script>