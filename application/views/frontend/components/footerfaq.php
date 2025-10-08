<div class="accordion-container enin-accordion">
    <div class="accordion-item">
        <button class="accordion-header active" onclick="toggleAccordion(this)">
            <span class="accordion-title">How to connect corporate airline loyalty programs?</span>
            <div class="chevron up"></div>
        </button>
        <div class="accordion-content active">
            <div class="accordion-text">
                Enter into an agreement with the carrier and name Tumodo as the supplier. Using the tour
                code

            </div>
        </div>
    </div>

    <div class="accordion-item">
        <button class="accordion-header" onclick="toggleAccordion(this)">
            <span class="accordion-title">What are the benefits of corporate travel programs?</span>
            <div class="chevron"></div>
        </button>
        <div class="accordion-content">
            <div class="accordion-text">
                Corporate travel programs offer volume discounts, dedicated account management, priority
                booking,
                flexible change policies, detailed reporting and analytics, and streamlined expense
                management.

            </div>
        </div>
    </div>

    <div class="accordion-item">
        <button class="accordion-header" onclick="toggleAccordion(this)">
            <span class="accordion-title">How do I set up a corporate account with airlines?</span>
            <div class="chevron"></div>
        </button>
        <div class="accordion-content">
            <div class="accordion-text">
                Setting up a corporate account typically involves contacting the airline's corporate sales
                team,
                providing your company information and estimated travel volume, negotiating rates and terms,
                and
                completing the necessary paperwork. Most airlines require a minimum annual travel commitment
                to
                qualify
                for corporate rates.
            </div>
        </div>
    </div>


</div>


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