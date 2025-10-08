<section class="page-service">
    <div class="content">
        <div class="wrap">
            <div class="main-first main-first--enin title-img-wrap">
                <div class="row">
                    <div class="col-md-5">
                        <div class="mb-5 mb-md-0 pt-5 mt-5">
                            <h1>
                                <span class="fw-500">Bridging gaps in </span>
                                <span class="fw-light">Market Research</span>
                            </h1>
                            <div class="main-first__text">
                                <p>Your one-stop solution for booking business travel quickly, simply and efficiently
                                </p>
                            </div>
                            <a href="#" class="btn btn-dark text-center animate__animated animate__bounce">Get
                                started</a>
                            <div class="main-first--enin-image">
                                <img src="https://omnicoreplus.com/assets/om-upload/bridge-logo-size-01-01.svg"
                                    style="transform: scale(1.6) translate(-15px, 15px);" alt="enin element">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="border-radius-40">
                            <img src="http://localhost/rewamp/assets/images/aandc.png"
                                alt="Bridging gaps in  &amp; Market Research" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
    .eninrac-card {
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }
</style>
<section>
    <div class="container">
        <div class="py-5">
            <div class="pt-5 mb-5">
                <h3 class="title-h3 text-center ">Market feedback</h3>
                <p class=" text-center mt-3">Witness what our services have done for your businesses
                </p>
            </div>
            <div class="row row-gap-3" id="impressions-row">
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="pt-5 mb-5">
            <h3 class="title-h3 text-center ">Market feedback</h3>
            <p class=" text-center mt-3">Witness what our services have done for your businesses
            </p>
        </div>
        <div class="accordion-container enin-accordion">

            <div class="accordion-item">
                <button class="accordion-header active" onclick="toggleAccordion(this)">
                    <span class="accordion-title">
                        <img src="https://assetsbl.thehindubusinessline.com/theme/images/bl-online/logo.svg"
                            alt="why-eninrac-03.png" style="height: 27px;">
                    </span>
                    <div class="chevron up"></div>
                </button>
                <div class="accordion-content active">
                    <div class="accordion-text">
                        Eninrac Consulting has been recognized as a leading energy consultancy and advisory firm by, The
                        Hindu Business Line.
                        <br>
                        <p class="eninrac-card-content"> Click to Read -
                            <a href="https://www.thehindubusinessline.com/news/power-market-coupling-riddled-with-challenges/article67415546.ece"
                                target="blank"> Article</a>
                        </p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<script>
    function toggleAccordion(button) {
        const content = button.nextElementSibling;
        const chevron = button.querySelector('.chevron');
        const isActive = button.classList.contains('active');

        // Close all accordion items
        document.querySelectorAll('.accordion-header').forEach(header => {
            header.classList.remove('active');
            header.nextElementSibling.classList.remove('active');
            header.querySelector('.chevron').classList.remove('up');
        });

        // If the clicked item wasn't active, open it
        if (!isActive) {
            button.classList.add('active');
            content.classList.add('active');
            chevron.classList.add('up');
        }
    }

    // Optional: Allow multiple items to be open at once
    function toggleAccordionMultiple(button) {
        const content = button.nextElementSibling;
        const chevron = button.querySelector('.chevron');

        button.classList.toggle('active');
        content.classList.toggle('active');
        chevron.classList.toggle('up');
    }
</script>

<script>
    const impressionData = [{
            "img": "https://eninrac.com/assets/images/imp/mck.png",
            "category": "Articles",
            "title": "Mr. Amit Garg",
            "date": "21.10.2025",
            "readTime": "7 min",
            "companyPosition": "Director",
            "playerName": "Gurgaon, India",
            "commentDesc": "The data to information model prepared by the Eninrac team\n                                for was an interesting piece.\n                                It was a detailed one, unit wise dismantling opportunity was evaluated for each thermal\n                                plant"
        },
        {
            "img": "https://eninrac.com/assets/images/imp/hfe.png",
            "category": "Articles",
            "title": "Mr. Gaurav Saini",
            "date": "06.09.2025",
            "readTime": "3 min",
            "companyPosition": "Manager",
            "playerName": "New Delhi, India",
            "commentDesc": "Eninrac Consulting is a proficient consulting firm having\n                                highly qualified and experienced professionals. I am associated with them for last 2\n                                years and I am fully satisfied with the commitment of the team and the services provided\n                                by them."
        },
        {
            "img": "https://eninrac.com/assets/images/imp/kalpataru.png",
            "category": "Articles",
            "title": "Mr. Vikram Sharma",
            "date": "20.01.2024",
            "readTime": "3 min",
            "companyPosition": "General Manager",
            "playerName": "Mumbai, India",
            "commentDesc": "The market research reports of Eninrac have been very\n                                insightful. They are market disrupters in their own kind. The way they present the\n                                information is interesting."
        },
        {
            "img": "https://eninrac.com/assets/images/imp/ge.png",
            "category": "Articles",
            "title": "Ms. Samhita Das Sharma",
            "date": "18.04.2025",
            "readTime": "5 min",
            "companyPosition": "Vice President",
            "playerName": "Gurgaon, India",
            "commentDesc": "The business intelligence service of Eninrac team was\n  fantastic for us. We hope they maintain their services level and wish them best for\n  future"
        },
        {
            "img": "https://eninrac.com/assets/images/imp/jgreen.png",
            "category": "Articles",
            "title": "Mr. Hironobu Miyata",
            "date": "16.07.2023",
            "readTime": "8 min",
            "companyPosition": "Chairman & MD",
            "playerName": "Tokyo, Japan",
            "commentDesc": "The project delivery by Eninrac Consulting team was highly\nsatisfactory and exceeded our expectations. I on behalf of our Japanese promoters thanks\n                                Eninrac Consulting and look forward to more strategic collaboration in future."
        },
        {
            "img": "https://eninrac.com/assets/images/imp/mizuho.png",
            "category": "Articles",
            "title": "Mr. Katsumi Onishi",
            "date": "25.04.2024",
            "readTime": "4 min",
            "companyPosition": "Lead Consultant",
            "playerName": "Tokyo, Japan",
            "commentDesc": "The study on structuring investments in key infrastructure\n                                segments of entire South East Asia and India served our Global Strategic Investment\n                                Department well in designing market approach. We thank Eninrac team for the good\n                                analytical report."
        },
        {
            "img": "https://eninrac.com/assets/images/imp/tata.png",
            "category": "Articles",
            "title": "Mr. Debshankar Banerjee",
            "date": "02.12.2024",
            "readTime": "4 min",
            "companyPosition": "Head - Business Development & SCM",
            "playerName": "Hyderabad, India",
            "commentDesc": "Getting custom research support on cryogenic tankers from\n                                eninrac consulting was a good experience. Their team is very professional and have\n                                supported us through very robustly."
        },
        {
            "img": "https://eninrac.com/assets/images/imp/indonesia.png",
            "category": "Articles",
            "title": "Untitled",
            "date": "01.08.2023",
            "readTime": "8 min",
            "companyPosition": "Hon'ble Ambassador of Republic of Indonesia",
            "playerName": "New Delhi, India",
            "commentDesc": "Reflecting upon the past cooperation with Eninrac\n                                Consulting, the Embassy found that the 2019 study on coal consumption and future demand\n                                in India until 2030 has been beneficial for formulating key policies for our country in\n                                relation to Indian dynamics. We look forward to continue our co-operation and receive\n                                help from Eninrac team through their expertise on coal related aspects."
        }
    ]

    const impressionrow = document.getElementById("impressions-row")
    impressionData.forEach((item) => {
        const col = document.createElement("div");
        col.className = "col-md-3 col-sm-6";

        col.innerHTML = `
         <div class="eninrac-card bg p-3 bg-light h-100">
                        <div class="ip-card h-100">
                            <div
                                class="ip-card-area h-100 d-flex flex-column justify-content-center align-items-center">
                                <img src="${item.img}" alt="why-eninrac-03.png"
                                    style="width: 100px;">
                                <h4 class="eninrac-card-title fs-18">${item.title}</h4>
                                <p class="text-center fs-14">${item.companyPosition}</p>
                                <p class="text-center fs-14">${item.playerName}</p>
                            </div>
                            <div class="flip-area d-none">
                                <p class="eninrac-card-content fs-14">${item.commentDesc}</p>
                            </div>
                        </div>
                    </div>
    `
        impressionrow.appendChild(col);
    })
</script>