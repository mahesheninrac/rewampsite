<!-- pricing_carousel -->
<div class="pt-2 px-1 pb-1 threedcarosule">
    <style>
        .threedcarosule .carousel-wrapper {
            background: #e1e2ee;
            padding: 40px;
            border-radius: 20px;
            max-width: 700px;
            margin: auto;
        }

        .payment__value {
            font-size: 36px;
            line-height: 120%;
            flex-grow: 1;
            margin-bottom: 32px;
        }

        @media screen and (max-width: 2599px) {
            .payment__value {
                font-size: 24px;
                margin-bottom: 24px;
            }
        }



        .threedcarosule .carousel-container {
            max-width: 700px;
            width: 100%;
            position: relative;
        }

        .threedcarosule .carousel-wrapper {
            position: relative;
            height: 400px;
            perspective: 1000px;
        }

        .threedcarosule .carousel-track {
            position: relative;
            height: 100%;
            width: 100%;
        }

        .threedcarosule .carousel-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 90%;
            max-width: 380px;
            background: white;
            padding: 40px 30px;
            text-align: center;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
        }

        .threedcarosule .carousel-slide:nth-child(1) {
            z-index: 4;
            transform: scale(1) translateX(0);
        }

        .threedcarosule .carousel-slide:nth-child(2) {
            z-index: 3;
            transform: scale(0.7) translateX(35%);
            opacity: 0.8;
        }

        .threedcarosule .carousel-slide:nth-child(3) {
            z-index: 2;
            transform: scale(0.5) translateX(85%);
            opacity: 0.6;
        }

        .threedcarosule .carousel-slide.active {
            z-index: 10 !important;
            transform: scale(1) translateX(0) !important;
            opacity: 1 !important;

        }

        .threedcarosule .carousel-slide.next-1 {
            z-index: 9 !important;
            transform: scale(0.7) translateX(35%) !important;
            opacity: 0.8 !important;

        }

        .threedcarosule .carousel-slide.next-2 {
            z-index: 8 !important;
            transform: scale(0.5) translateX(85%) !important;
            opacity: 0.6 !important;

        }

        .threedcarosule .offer-label {
            display: inline-block;
            background: linear-gradient(135deg, #8b5cf6, #a855f7);
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 24px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .threedcarosule .trips-count {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 24px;
            line-height: 1.2;
        }

        .threedcarosule .offer-description {
            font-size: 16px;
            color: #6b7280;
            line-height: 1.5;
            max-width: 300px;
            margin: 0 auto;
        }

        .threedcarosule .carousel-nav {

            top: 50%;

            width: 40px;
            height: 40px;
            background: white;
            border: none;
            border-radius: 50%;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            z-index: 10;
        }

        .threedcarosule .carousel-nav:hover {
            background: #f8fafc;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);

        }




        .threedcarosule .carousel-nav svg {
            width: 24px;
            height: 24px;
            fill: #4b5563;
            transition: fill 0.3s ease;
        }

        .threedcarosule .carousel-nav:hover svg {
            fill: #1f2937;
        }

        .threedcarosule .carousel-dots {
            display: flex;
            justify-content: center;
            gap: 12px;

            position: absolute;
            bottom: 0;
            padding-bottom: 20px;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .threedcarosule .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .threedcarosule .dot.active {
            background: white;
            transform: scale(1.2);
        }

        @media screen and (max-width: 768px) {
            .threedcarosule .carousel-nav {
                width: 40px;
                height: 40px;
            }



            .threedcarosule .carousel-slide {
                padding: 30px 20px;
                left: 10%;
                width: 85%;
                max-width: 300px;
            }

            .threedcarosule .carousel-slide.active {
                transform: scale(1) translateX(0)
            }

            .threedcarosule .carousel-slide.next-1 {
                transform: scale(0.7) translateX(35%)
            }

            .threedcarosule .carousel-slide.next-2 {
                transform: scale(0.5) translateX(85%)
            }



            .threedcarosule .trips-count {
                font-size: 2rem;
            }
        }

        @media screen and (max-width: 480px) {
            .threedcarosule .carousel-nav.prev {
                left: 5px;
                top: 20px;
                transform: none;
            }

            .threedcarosule .carousel-nav.next {
                right: 5px;
                top: 20px;
                transform: none;
            }

            .threedcarosule .carousel-slide {
                left: 5%;
                width: 80%;
                max-width: 280px;
            }

            .threedcarosule .carousel-slide.active {
                left: 5% !important;
            }

            .threedcarosule .carousel-slide.next-1 {
                left: 5% !important;
                transform: scale(1) translateX(0) !important;
            }

            .threedcarosule .carousel-slide.next-2 {
                left: 5% !important;
                transform: scale(0.7) translateX(35%) !important;
            }


            .threedcarosule .offer-label {
                font-size: 12px;
                padding: 6px 12px;
            }

            .threedcarosule .trips-count {
                font-size: 1.8rem;
            }

            .threedcarosule .offer-description {
                font-size: 14px;
            }
        }
    </style>
    <div class="carousel-container">
        <div class="carousel-wrapper">
            <div class="carousel-track" id="carouselTrack">
                <div class="carousel-slide">
                    <div class="offer-label">Individual offer</div>
                    <div class="payment__value">100+ trips per month</div>
                    <div class="offer-description">We will gladly prepare a customised
                        offer for you</div>
                </div>
                <div class="carousel-slide">
                    <div class="offer-label">Business plan</div>
                    <div class="payment__value">50+ trips per month</div>
                    <div class="offer-description">Perfect for growing businesses with
                        regular transportation needs</div>
                </div>
                <div class="carousel-slide">
                    <div class="offer-label">Starter package</div>
                    <div class="payment__value">25+ trips per month</div>
                    <div class="offer-description">Ideal for small teams and occasional
                        business travel</div>
                </div>
            </div>
        </div>

        <div class="d-flex gap-2 position-absolute" style="right: 30px;bottom: 70px;">
            <button class="carousel-nav prev" id="prevBtn">
                <svg viewBox="0 0 24 24">
                    <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
                </svg>
            </button>

            <button class="carousel-nav next" id="nextBtn">
                <svg viewBox="0 0 24 24">
                    <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" />
                </svg>
            </button>
        </div>

        <div class="carousel-dots" id="carouselDots">
            <div class="dot active" data-slide="0"></div>
            <div class="dot" data-slide="1"></div>
            <div class="dot" data-slide="2"></div>

        </div>
    </div>

    <script>
        class Carousel {
            constructor() {
                this.track = document.getElementById('carouselTrack');
                this.prevBtn = document.getElementById('prevBtn');
                this.nextBtn = document.getElementById('nextBtn');
                this.dots = document.querySelectorAll('.dot');
                this.slides = document.querySelectorAll('.carousel-slide');

                this.currentSlide = 0;
                this.totalSlides = this.slides.length;

                this.init();
            }

            init() {
                this.prevBtn.addEventListener('click', () => this.prevSlide());
                this.nextBtn.addEventListener('click', () => this.nextSlide());

                this.dots.forEach((dot, index) => {
                    dot.addEventListener('click', () => this.goToSlide(index));
                });

                // Add click listeners to slides for navigation
                this.slides.forEach((slide, index) => {
                    slide.addEventListener('click', () => {
                        if (index !== this.currentSlide) {
                            this.goToSlide(index);
                        }
                    });
                });

                // Initialize the stacked layout
                this.updateCarousel();

                // Auto-play (optional)
                this.startAutoPlay();

                // Pause auto-play on hover
                const container = document.querySelector('.carousel-container');
                container.addEventListener('mouseenter', () => this.stopAutoPlay());
                container.addEventListener('mouseleave', () => this.startAutoPlay());

                // Touch/swipe support
                this.addTouchSupport();
            }

            updateCarousel() {
                this.slides.forEach((slide, index) => {
                    // Remove all classes
                    slide.classList.remove('active', 'next-1', 'next-2',
                        'next-3', 'hidden');

                    // Calculate position relative to current slide
                    let position = (index - this.currentSlide + this
                        .totalSlides) % this.totalSlides;

                    if (position === 0) {
                        slide.classList.add('active');
                    } else if (position === 1) {
                        slide.classList.add('next-1');
                    } else if (position === 2) {
                        slide.classList.add('next-2');
                    } else if (position === 3) {
                        slide.classList.add('next-3');
                    } else {
                        slide.classList.add('hidden');
                    }
                });

                // Update dots
                this.dots.forEach((dot, index) => {
                    dot.classList.toggle('active', index === this.currentSlide);
                });
            }

            prevSlide() {
                this.currentSlide = this.currentSlide === 0 ? this.totalSlides - 1 :
                    this.currentSlide - 1;
                this.updateCarousel();
            }

            nextSlide() {
                this.currentSlide = this.currentSlide === this.totalSlides - 1 ? 0 :
                    this.currentSlide + 1;
                this.updateCarousel();
            }

            goToSlide(slideIndex) {
                this.currentSlide = slideIndex;
                this.updateCarousel();
            }

            startAutoPlay() {
                this.autoPlayInterval = setInterval(() => {
                    this.nextSlide();
                }, 4000);
            }

            stopAutoPlay() {
                if (this.autoPlayInterval) {
                    clearInterval(this.autoPlayInterval);
                }
            }

            addTouchSupport() {
                let startX = 0;
                let startY = 0;
                let moveX = 0;
                let moveY = 0;
                let isDragging = false;

                this.track.addEventListener('touchstart', (e) => {
                    startX = e.touches[0].clientX;
                    startY = e.touches[0].clientY;
                    isDragging = true;
                    this.stopAutoPlay();
                });

                this.track.addEventListener('touchmove', (e) => {
                    if (!isDragging) return;
                    moveX = e.touches[0].clientX;
                    moveY = e.touches[0].clientY;
                });

                this.track.addEventListener('touchend', () => {
                    if (!isDragging) return;

                    const diffX = startX - moveX;
                    const diffY = startY - moveY;
                    const threshold = 50;

                    // Only process horizontal swipes
                    if (Math.abs(diffX) > Math.abs(diffY) && Math.abs(diffX) >
                        threshold) {
                        if (diffX > 0) {
                            this.nextSlide();
                        } else {
                            this.prevSlide();
                        }
                    }

                    isDragging = false;
                    this.startAutoPlay();
                });
            }
        }

        // Initialize carousel when DOM is loaded
        document.addEventListener('DOMContentLoaded', () => {
            new Carousel();
        });
    </script>


</div>