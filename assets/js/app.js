const steps = document.querySelectorAll('.main-block2-step');

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate');
        }
    });
}, { threshold: 0.2 }); // Trigger when 20% visible

steps.forEach(step => observer.observe(step));



// document.addEventListener("DOMContentLoaded", () => {
//     const chatItems = document.querySelectorAll(".support-chat__item");
//     const delayBetweenMessages = 1000; // delay per message
//     const delayBetweenItems = 800;     // delay between chat blocks

//     function animateMessages(item, callback) {
//         const messages = item.querySelectorAll(":scope > div");
//         messages.forEach((msg, index) => {
//             setTimeout(() => {
//                 msg.classList.add("show");
//                 if (index === messages.length - 1 && callback) {
//                     setTimeout(callback, delayBetweenMessages);
//                 }
//             }, index * delayBetweenMessages);
//         });
//     }

//     function startAnimation(index = 0) {
//         if (index >= chatItems.length) return;
//         animateMessages(chatItems[index], () => {
//             setTimeout(() => startAnimation(index + 1), delayBetweenItems);
//         });
//     }

//     startAnimation(); // start from the first chat
// });





function handleImgScroll() {
    const Imgitems = document.querySelectorAll('.scroll-list-item.js-scroll-list-item');
    const image = document.getElementById('active-image');
    if (window.innerWidth <= 768) return;

    let activeImage = null;

    Imgitems.forEach(item => {
        const rect = item.getBoundingClientRect();

        // Activate item if it's in top 200px zone
        if (rect.top <= 200 && rect.bottom > 200) {
            activeImage = item.dataset.image;

        }
    });

    if (activeImage && !image.src.includes(activeImage)) {
        image.src = `http://localhost/eninracrewamp/ns-upload/${activeImage}`;
    }
}

window.addEventListener('scroll', handleImgScroll);
window.addEventListener('load', handleImgScroll);

$('.service-tile .owl-carousel').owlCarousel({
    items: 1,
    loop: true,
    margin: 10,
    dots: false,
    nav: false,
    autoplay: true,
    center: true,
    autoplayTimeout: 3000,
    responsive: {
        0: { items: 2 },
        600: { items: 2 },
        1000: { items: 2 }
    }
});



$('.logo-carousel').owlCarousel({
    loop: true,
    margin: 30,
    dots: false,
    nav: false,
    autoplay: false, // Disable Owl's autoplay (we use CSS animation instead)
    responsive: {
        0: { items: 3 },
        600: { items: 5 },
        1000: { items: 5 }
    },
    onInitialized: function (event) {
        // Duplicate items for seamless loop (stage needs twice the width)
        var $stage = $(event.target).find('.owl-stage');
        $stage.append($stage.html());
    }
});


// Function to check if element is in viewport (partially visible)
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top < window.innerHeight && rect.bottom >= 0
    );
}

// Select all elements you want to animate
const elements = document.querySelectorAll('.animate-on-scroll');

// Scroll event listener
function handleScroll() {
    elements.forEach((el) => {
        if (isInViewport(el)) {
            el.classList.add('active'); // Start animation
        } else {
            el.classList.remove('active'); // Optional: reset when out of view
        }
    });
}

// Run on scroll and on page load
window.addEventListener('scroll', handleScroll);
window.addEventListener('resize', handleScroll);
handleScroll(); // Trigger on load