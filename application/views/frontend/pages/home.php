<style>
.video-block__play {
    position: absolute;
    z-index: 5;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    cursor: pointer;
}

.video-block__play i {
    font-size: 50px;
    color: #fff;
    transition: color 0.2s linear;
    display: inline-block;
}

.video-block__play i:hover {
    color: var(--primary-500);
}

.main-block2-step__image {
    height: 260px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding-bottom: 16px;
    padding-left: 8px;
}

.main-block2-step--1 .main-block2-step__image {
    justify-content: flex-end;
}

.main-block2-step--2 .main-block2-step__image {
    padding-bottom: 0;
}

.main-block2-step--4 .main-block2-step__image {
    justify-content: flex-start;
}

@media screen and (max-width: 1599px) {
    .main-first--enin-image {
        margin-right: -80px;
    }

    .main-first--enin-image img {
        height: 360px;

    }

    .main-first__text {
        max-width: 340px;
    }

    .video-block {
        height: 314px;
    }

    .video-block__play i {
        font-size: 55px;
    }

    .main-block2-step--1 .main-block2-step__image {
        width: 165px;
    }

    .main-block2-step--2 .main-block2-step__image {
        width: 162px;
    }

    .main-block2-step--3 .main-block2-step__image {
        width: 164px;
    }

    .main-block2-step--4 .main-block2-step__image {
        width: 175px;
    }

    .main-block2-step__image {
        height: 200px;
    }
}

@media screen and (max-width: 2599px) {
    .main-block2-step--3 .main-block2-step__image {
        padding-bottom: 0;
        padding-top: 12px;
    }

    .main-block2-step--4 .main-block2-step__image {
        justify-content: center;
        padding-left: 32px;
    }
}
</style>
<div class="content">
    <div class="wrap">
        <div class="main-first main-first--enin">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-5 mb-md-0 ">
                        <h1><span class="fw-bold">Bridging gaps in </span><span class="fw-light">Market
                                Research</span></h1>
                        <div class="main-first__text">
                            <p>Your one-stop solution for booking business travel quickly, simply and efficiently
                            </p>
                        </div>
                        <a href="#" class="btn btn-dark text-center animate__animated animate__bounce">Get started</a>
                        <div class="main-first--enin-image">
                            <img src="https://omnicoreplus.com/assets/om-upload/bridge-logo-size-01-01.svg"
                                alt="enin element" style="transform: scale(1.6) translate(-17px, 0px);">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="video-block js-video-block border-radius-40 overflow-auto position-relative">
                        <img src="https://enin.io/storage/uploads/de53632c8f350f7da29956c4388e4f27.png"
                            alt="Bridging gaps in  &amp; Market Research" class="img-fluid"
                            style="height: 100%; object-fit:cover">
                        <div class="video-block__play">
                            <i class="icofont-ui-play"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-5">
            <div class="row row-gap-4 main-block2 main-block2--steps position-relative" data-reveal>
                <div class="col-md-3">
                    <div class="position-relative main-block2-step main-block2-step--1">
                        <div class="d-flex justify-content-center align-items-center bg-primary-600 mb-md-3 text-white "
                            style="width: 34px; height: 34px;">1</div>
                        <div class="main-block2-step__title fw-700">Search for hoteltests and flights</div>
                        <div class="main-block2-step__image justify-content-md-end justify-content-start ">
                            <img loading="lazy" src="https://omnicoreplus.com/assets/om-upload/Wind_renewafrica.jpg"
                                alt="">
                        </div>
                        <div class="main-block2-step__text">
                            <span>Select convenient flights and hotels</span> with high-quality service
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="position-relative  main-block2-step main-block2-step--2">
                        <div class="d-flex justify-content-center align-items-center bg-primary-600 mb-md-3 text-white "
                            style="width: 34px; height: 34px;">1</div>
                        <div class="main-block2-step__title">Search for hotels and flights</div>
                        <div class="main-block2-step__image justify-content-md-end">
                            <img loading="lazy"
                                src="https://omnicoreplus.com/assets/om-upload/floating_solar_th_bing.jpeg" alt="">
                        </div>
                        <div class="main-block2-step__text">
                            <span>Select convenient flights and hotels</span> with high-quality service
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="position-relative main-block2-step main-block2-step--3">
                        <div class="d-flex justify-content-center align-items-center bg-primary-600 mb-md-3 text-white "
                            style="width: 34px; height: 34px;">1</div>
                        <div class="main-block2-step__title">Search for hotels and flights</div>
                        <div class="main-block2-step__image justify-content-md-end">
                            <img loading="lazy"
                                src="https://omnicoreplus.com/assets/om-upload/Indonesia-thermal-power-plant_th_bing.jpeg"
                                alt="">
                        </div>
                        <div class="main-block2-step__text">
                            <span>Select convenient flights and hotels</span> with high-quality service
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="position-relative main-block2-step main-block2-step--4">
                        <div class="d-flex justify-content-center align-items-center bg-primary-600 mb-md-3 text-white "
                            style="width: 34px; height: 34px;">1</div>
                        <div class="main-block2-step__title">Search for hotels and flights</div>
                        <div class="main-block2-step__image justify-content-md-end justify-content-center">
                            <img loading="lazy"
                                src="https://omnicoreplus.com/assets/om-upload/Robert_moses_niaga_upload_wikimedia_org1.jpg"
                                alt="">
                        </div>
                        <div class="main-block2-step__text">
                            <span>Select convenient flights and hotels</span> with high-quality service
                        </div>
                    </div>
                </div>
                <div class="main-block2--steps-bg d-none d-md-block"></div>
            </div>
        </div>

        <div class="py-3">
            <div>
                <div class="row row-gap-3">
                    <div class="col-md-6">
                        <div class="row row-gap-3 h-100   flex-column">
                            <div class="p-5 bg-primary-800 text-white border-radius-40" class="hidden animate-on-scroll"
                                data-animate="animate__zoomIn">
                                <h2>Forget about manual data collection</h2>
                                <p>Analytics and reporting are always at hand and can be generated in a couple of
                                    clicks
                                </p>
                                <div class="">
                                    <img src="./first-card.png" alt="">
                                </div>
                            </div>
                            <div class="p-1">
                                <div class="p-md-5 border-radius-40 " style="background: #d8dae7;">
                                    <div class="p-5 d-md-flex justify-content-between">
                                        <h3 style="font-size: 20px;">Book all your business travel needs on a
                                            centralised
                                            platform</h3>
                                        <img src="https://enin.io/storage/uploads/da988e20129536840c77fc14dd74d1b1.svg"
                                            style="width: 42px; height: 42px;" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2 px-1 pb-1 ">
                                <div class="">
                                    <h2 class="title-h2">24/7 customer support</h2>
                                    <p class="fs-16">We are always ready to assist you</p>
                                </div>

                                <div class="support-chat">
                                    <!-- First chat block -->
                                    <div class="support-chat__item">
                                        <div data-msg-reveal data-delay="1000"
                                            class="chat-client d-flex justify-content-end align-items-end gap-1 support-1">
                                            <div class="support-chat__phrase "
                                                style="border-radius: 20px 20px 0px 20px;">
                                                <div class="support-chat__phrase-info">
                                                    <span class="name">Employee:</span>
                                                    <span class="date">16:29 </span>
                                                </div>
                                                <p>My flight was postponed by 6 hours, and I need to fly urgently.
                                                    Could you exchange my ticket, please?</p>
                                            </div>
                                            <div class="support-chat__person">
                                                <img src="https://enin.io/storage/uploads/7ca37345585191f318905498c7dc3684.png"
                                                    alt="">
                                            </div>
                                        </div>

                                        <div data-msg-reveal data-delay="1500"
                                            class="chat-support support-2 d-flex justify-content-start align-items-end gap-1">
                                            <div class="support-chat__person">
                                                <img src="https://enin.io/storage/uploads/ae0f4c9d8c5b343e598df7ba56859fda.png"
                                                    alt="">
                                            </div>
                                            <div class="support-chat__phrase"
                                                style="border-radius: 20px 20px 20px 0px;">
                                                <div class="support-chat__phrase-info">
                                                    <span class="name">Support manager:</span>
                                                    <span class="date">16:30 </span>
                                                </div>
                                                <p>Hi! We found a flight for you in 40 minutes, already exchanging!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row row-gap-3 flex-column">
                            <div class="col">
                                <div class="p-5 border-radius-40 bg-primary-100 ">
                                    <h2>Webinar</h2>
                                    <p>You will learn how we: save up to 35% of your travel budget</p>
                                    <button class="btn mb-3 bg-light text-primary">Register</button>
                                    <div class="">
                                        <img src="./first-card.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-5 border-radius-40 bg-secondary-100 ">
                                    <h2 class="title-h2 fw-normal mb-3 pe-1" style="line-height: 104%;">
                                        Set up travel policies and approval schemes — kee everything
                                        under control</h2>
                                    <div class="d-flex justify-content-end align-items-end">
                                        <img src="https://enin.io/storage/uploads/f30f1dedcbcb319da96a2da1282a734f.png"
                                            class="img-fluid bg-light" style="height: 138px;">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-4 border-radius-40 row flex-column align-items-center row-gap-3"
                                    style="background-color: #efefef;">
                                    <div class="companies-logotips d-flex align-items-center justify-content-center">
                                        <img loading="lazy"
                                            src="https://enin.io/storage/uploads/315553a479f75e970d194b7adab0dd03.svg"
                                            alt="Tabby">
                                        <img loading="lazy"
                                            src="https://enin.io/storage/uploads/9704c2bd3b61715ef6afa003a567812a.svg"
                                            alt="Sage">
                                        <img loading="lazy"
                                            src="https://enin.io/storage/uploads/226bd7c8787b9ad88c5b19763f121360.png"
                                            alt="Binance">
                                    </div>
                                    <p class="text-center">Discover how we’re changing the business travel
                                        experience of over 300
                                        companies</p>
                                    <div class="w-100 d-flex align-items-center justify-content-center">
                                        <button class="btn btn-dark px-md-3 letter-spacing-2">Read the
                                            stories</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

    <div class="fullwdith py-5 cursor-pointer" style="background-color: #d8dae7;">
        <div class="wrap">
            <h2 style="    margin-bottom: 44px;">Calculate your savings with Eninrac</h2>
            <div class="">
                <div class="row row-gap-3">
                    <div class="col-md-6">
                        <div class="">
                            <div class="row row-gap-3">
                                <div class="col-md-6">
                                    <div class="position-raltive border-radius-20 p-3 bg-light">
                                        <p class="fs-16 fw-400">Total spend on travel by the company per month</p>
                                        <p>0$ +</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-raltive border-radius-20 p-3 bg-light">
                                        <p class="fs-16 fw-400">Total spend on travel by the company per month</p>
                                        <p>0$ +</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="bg-light border-radius-20 p-3">
                                        <p class="fs-16 fw-400">Number of employees</p>
                                        <div
                                            class="checkbox-list num-employee d-flex flex-wrap gap-2 align-items-center justify-content-start">
                                            <label class="checkbox-item ">
                                                <input required="" checked="" type="radio" name="col-personal"
                                                    value="10-20">
                                                <span class="">10-20</span>
                                            </label>
                                            <label class="checkbox-item">
                                                <input required="" checked="" type="radio" name="col-personal"
                                                    value="10-20">
                                                <span>10-20</span>
                                            </label>
                                            <label class="checkbox-item">
                                                <input required="" checked="" type="radio" name="col-personal"
                                                    value="10-20">
                                                <span>10-20</span>
                                            </label>
                                            <label class="checkbox-item">
                                                <input required="" checked="" type="radio" name="col-personal"
                                                    value="10-20">
                                                <span>10-20</span>
                                            </label>
                                            <label class="checkbox-item">
                                                <input required="" checked="" type="radio" name="col-personal"
                                                    value="10-20">
                                                <span>10-20</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="bg-light border-radius-20 p-3">
                                        <p>Current process of arranging business trips</p>
                                        <div
                                            class="d-flex flex-column align-items-start justify-content-start row-gap-2">
                                            <label class="checkbox-item _active">
                                                <input required="" type="radio" name="method" value="self">
                                                <span>Independently</span>
                                            </label>
                                            <label class="checkbox-item">
                                                <input required="" type="radio" name="method" value="offline">
                                                <span>Agency</span>
                                            </label>
                                            <label class="checkbox-item">
                                                <input required="" type="radio" name="method" value="online">
                                                <span>Travel manager</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bg-light border-radius-20 p-3 h-100 d-flex flex-column row-gap-3">
                            <p>Result</p>
                            <h2>Fill in all the fields and find out your benefits with enin</h2>
                            <button class="btn btn-primary " style="width: max-content;"> See the result</button>
                            <div class="w-100">
                                <img src="https://enin.io/storage/uploads/5dfa2501099ba87f68175061d5cfa485.png"
                                    class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="fullwidth py-5" style="background-color: #f7f8fa;">
        <div class="wrap">
            <h2 style="margin-bottom: 44px;">Read our insights</h2>
            <div class="">
                <div class="row row-gap-5">
                    <div class="col-md-4 col-sm-6">
                        <div class="w-100 p-4 border-radius-20" style="background-color: white;">
                            <a href="" class="news-blog text-decoration-none text-dark">
                                <div class="w-100 mb-2 overflow-hidden news__image" style="height: 157px;">
                                    <img src="https://tumodo.io/storage/uploads/013b03c919ea3381209347eb6957a028.png"
                                        class=" img-fluid w-100 object-fit-cover d-block h-100" alt=""
                                        style="transition: transform 0.2s linear;">
                                </div>
                                <div class="p-1 bg-secondary rounded text-center text-light fs-12"
                                    style="width: max-content;">
                                    Articles
                                </div>
                                <div class="news-info">
                                    <p class="fs-20 fw-600 mb-1">What to Include in an Employee Travel Policy?</p>
                                    <div class="text-muted fs-14">
                                        <span>10.06.2025</span><span>7 min</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="w-100 p-4 border-radius-20" style="background-color: white;">
                            <a href="" class="news-blog text-decoration-none text-dark">
                                <div class="w-100 mb-2 overflow-hidden news__image" style="height: 157px;">
                                    <img src="https://tumodo.io/storage/uploads/013b03c919ea3381209347eb6957a028.png"
                                        class=" img-fluid w-100 object-fit-cover d-block h-100" alt=""
                                        style="transition: transform 0.2s linear;">
                                </div>
                                <div class="p-1 bg-secondary rounded text-center text-light fs-12"
                                    style="width: max-content;">
                                    Articles
                                </div>
                                <div class="news-info">
                                    <p class="fs-20 fw-600 mb-1">What to Include in an Employee Travel Policy?</p>
                                    <div class="text-muted fs-14">
                                        <span>10.06.2025</span><span>7 min</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="w-100 p-4 border-radius-20" style="background-color: white;">
                            <a href="" class="news-blog text-decoration-none text-dark">
                                <div class="w-100 mb-2 overflow-hidden news__image" style="height: 157px;">
                                    <img src="https://tumodo.io/storage/uploads/013b03c919ea3381209347eb6957a028.png"
                                        class=" img-fluid w-100 object-fit-cover d-block h-100" alt=""
                                        style="transition: transform 0.2s linear;">
                                </div>
                                <div class="p-1 bg-secondary rounded text-center text-light fs-12"
                                    style="width: max-content;">
                                    Articles
                                </div>
                                <div class="news-info">
                                    <p class="fs-20 fw-600 mb-1">What to Include in an Employee Travel Policy?</p>
                                    <div class="text-muted fs-14">
                                        <span>10.06.2025</span><span>7 min</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="fullwidth py-5">
        <div class="wrap">
            <div class="d-flex flex-column gap-4">
                <h2 class="title-h2 text-center ">More than 300 companies trust enin</h2>
                <div class="">
                    <div class="logo-carousel owl-carousel">
                        <div class="item w-100"><img class="img-fluid"
                                src="https://tumodo.io/storage/uploads/b04da7331943d3782be850cecae3fbe9.png" alt="Gulf">
                        </div>
                        <div class="item w-100"><img
                                src="https://tumodo.io/storage/uploads/1e52d81a3cbde8f03c274473f175dd41.svg" alt="">
                        </div>
                        <div class="item w-100"><img class="img-fluid"
                                src="https://tumodo.io/storage/uploads/e6ebd704c874ab2bc55a48768ba6ffb8.png" alt="Gulf">
                        </div>
                        <div class="item w-100"><img class="img-fluid"
                                src="https://tumodo.io/storage/uploads/b04da7331943d3782be850cecae3fbe9.png" alt="Gulf">
                        </div>
                        <div class="item w-100"><img class="img-fluid"
                                src="https://tumodo.io/storage/uploads/badd2a0b1bc04107e1bc58e4d69c9e1a.svg"
                                alt="Denuo">
                        </div>
                        <div class="item w-100"><img class="img-fluid"
                                src="https://tumodo.io/storage/uploads/1aae929890fdf5f60049311b01000509.svg"
                                alt="Bakertilly"></div>
                        <div class="item w-100"><img class="img-fluid"
                                src="https://tumodo.io/storage/uploads/1e52d81a3cbde8f03c274473f175dd41.svg" alt="">
                        </div>
                        <div class="item w-100"><img class="img-fluid"
                                src="https://tumodo.io/storage/uploads/e6ebd704c874ab2bc55a48768ba6ffb8.png" alt="Gulf">
                        </div>
                        <div class="item w-100"><img class="img-fluid"
                                src="https://tumodo.io/storage/uploads/b04da7331943d3782be850cecae3fbe9.png" alt="Gulf">
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center ">
                    <button class="btn btn-dark">Read the stories</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="scroll-section">
    <div class="fullwidth py-5">
        <div class="wrap">
            <section class="scroll-section">
                <div class="scroll-list row row-gap-3">
                    <!-- Left Side: Texts -->
                    <div class="scroll-list-texts col-md-5">
                        <div class="scroll-list-item js-scroll-list-item"
                            data-image="ev-pcs-electricity-consumption-summary-october-24.jpg">
                            <div class="scroll-list-item__number">1/5 advantages of enin</div>
                            <div class="title-h2">Arrange a business trip in 2 minutes</div>
                            <div class="scroll-list-item__text">
                                <p>Manage business trips with enin easily. Book tickets and accommodation in just
                                    a couple of clicks.</p>
                            </div>
                        </div>
                        <div class="scroll-list-item js-scroll-list-item"
                            data-image="powering-progress-the-transmission-grid-of-india.jpg">
                            <div class="scroll-list-item__number ">2/5 advantages of enin</div>
                            <div class="title-h2">Corporate travel simplified</div>
                            <div class="scroll-list-item__text">
                                <p>Manage business trips with enin easily. Book tickets and accommodation in just
                                    a couple of clicks, accumulate personal and corporate bonuses and monitor travel
                                    statuses online. Use enin where it is convenient for you: telephone, mail,
                                    compute.</p>
                            </div>
                        </div>
                        <div class="scroll-list-item js-scroll-list-item" data-image="india-power-grid-2025.jpg">
                            <div class="scroll-list-item__number">2/5 advantages of enin</div>
                            <div class="title-h2">Corporate travel simplified</div>
                            <div class="scroll-list-item__text">
                                <p>Set up integration with your accounting system and collect all necessary
                                    documents automatically. Forget about manual data input and receive flight
                                    certificates in case of lost boarding passes.</p>
                            </div>
                        </div>
                        <div class="scroll-list-item js-scroll-list-item"
                            data-image="indias-power-transmission-surge.jpg">
                            <div class="scroll-list-item__number">2/5 advantages of enin</div>
                            <div class="title-h2">Corporate travel simplified</div>
                            <div class="scroll-list-item__text">
                                <p>Set up integration with your accounting system and collect all necessary
                                    documents automatically. Forget about manual data input and receive flight
                                    certificates in case of lost boarding passes.</p>
                            </div>
                        </div>
                        <div class="scroll-list-item js-scroll-list-item">
                            <div class="scroll-list-item__number">1/5 advantages of enin</div>
                            <div class="title-h2">Arrange a business trip in 2 minutes</div>
                            <div class="scroll-list-item__text">
                                <p>Manage business trips with enin easily. Book tickets and accommodation in just
                                    a couple of clicks.</p>
                            </div>
                        </div>
                        <!-- Add more items (3, 4, 5) similarly -->
                    </div>

                    <!-- Right Side: Sticky Image -->
                    <div class="scroll-list-image col-md-7 desktop-only">
                        <img id="active-image"
                            src="<?= base_url() ?>ns-upload/ev-pcs-electricity-consumption-summary-october-24.jpg"
                            alt="Active Image">
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<section>
    <div class="fullwidth py-5">
        <div class="wrap faq-wrap">
            <div class="row">
                <div class="col-md-5">
                    <div class="">
                        <h2>FAQ</h2>
                        <p>Didn't find the answer?
                            <br> Email us at
                            <a class="link-primary text-decoration-none"
                                href="mailto:connect@eninrac.com">connect@eninrac.com</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="faq-list">
                        <div class="faq-item p-3 p-md-4 js-faq-item">
                            <p class="faq-item-question d-flex justify-content-between align-items-center mb-0">
                                <span>What is the pricing for your platform?</span>
                                <i class="icofont-rounded-down"></i>
                            </p>
                            <p class="faq-item-answear" style="display: none;">We operate on a service fee model.
                                You only pay for the services you actually book.</p>
                        </div>
                        <div class="faq-item p-3 p-md-4 js-faq-item">
                            <p class="faq-item-question d-flex justify-content-between align-items-center mb-0">
                                <span>How does it work?</span>
                                <i class="icofont-rounded-down"></i>
                            </p>
                            <p class="faq-item-answear" style="display: none;">You browse, book, and pay for only
                                the services you use—no hidden charges.</p>
                        </div>
                    </div>
                    <script>
                    const faqItems = document.querySelectorAll('.js-faq-item');

                    faqItems.forEach(item => {
                        const question = item.querySelector('.faq-item-question');

                        question.addEventListener('click', () => {
                            const isActive = item.classList.contains('active');
                            // Close all answers first
                            faqItems.forEach(i => {
                                i.querySelector('.faq-item-answear').style.display = 'none';
                                i.classList.remove('active');
                            });

                            // Toggle the clicked one
                            if (!isActive) {
                                item.querySelector('.faq-item-answear').style.display = 'block';
                                item.classList.add('active');
                            }
                        });
                    });
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact-form-section">
    <div class="fullwidth py-5">
        <div class="wrap position-relative">
            <div class="trial-form-top">
                <h2 class="text-center">Get started</h2>
                <p class="text-center">
                    Fill out the short form to find out how enin works
                </p>
            </div>
            <div class="trial-contact-form">
                <form action="">
                    <div class="row row-gap-3">
                        <div class="col-md-6 ">
                            <div class="form-group">
                                <input class="form-control" type="text" name="name" placeholder="name">
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="form-group">
                                <input class="form-control" type="text" name="company" placeholder="company">
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="form-group">
                                <input class="form-control" type="email" name="email" placeholder="email">
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="form-group">
                                <input class="form-control" type="number" name="phone" placeholder="+91 1234567890">
                            </div>
                        </div>
                        <div class="col">
                            <button class="btn btn-dark w-100">get started</button>
                            <p class="mt-2 text-center ">
                                <span class="opacity-50"> By submitting this form, you agree to our</span> <a
                                    href="#">Privacy Policy</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
            <div class=" trial-form--tumodo-image">
                <picture>
                    <img src="https://omnicoreplus.com/assets/om-upload/bridge-logo-size-01-01.svg" alt="">
                </picture>
            </div>
        </div>
    </div>
</section>

<style>
.trial-form--tumodo-image {
    position: absolute;
    top: -32px;
    right: 100%;
    z-index: -1;
    margin-right: -25%;
}

.trial-form--tumodo-image img {
    max-width: none;
    position: static;
    width: auto;
    height: 400px;
}

.trial-form-wrapper>picture,
.trial-form-wrapper img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}

@media screen and (max-width: 1599px) {
    .trial-form--tumodo-image {
        top: -10px;
        margin-right: -38%;
    }

    .trial-form--tumodo-image img {
        height: 325px;
    }
}
</style>