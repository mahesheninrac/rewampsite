<style>
    .accordion-container {
        max-width: 800px;
        margin: 0 auto;
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .accordion-item {
        border-bottom: 1px solid #e2e8f0;
    }

    .accordion-item:last-child {
        border-bottom: none;
    }

    .accordion-header {
        background: white;
        border: none;
        width: 100%;
        padding: 20px 24px;
        text-align: left;
        cursor: pointer;
        display: flex;
        justify-content: between;
        align-items: center;
        transition: background-color 0.2s ease;
        font-size: 16px;
        font-weight: 500;
        color: #64748b;
    }

    .accordion-header:hover {
        background-color: #f8fafc;
    }

    .accordion-header.active {
        background-color: #f8fafc;
    }

    .accordion-title {
        flex: 1;
        padding-right: 20px;
    }

    .accordion-icon {
        width: 20px;
        height: 20px;
        transition: transform 0.3s ease;
        color: #64748b;
    }

    .accordion-icon.rotated {
        transform: rotate(180deg);
    }

    .accordion-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease, padding 0.3s ease;
        background-color: #f8fafc;
    }

    .accordion-content.active {
        max-height: 200px;
        padding: 20px 24px;
    }

    .accordion-text {
        color: #475569;
        font-size: 14px;
        line-height: 1.6;
    }

    /* Chevron icon styles */
    .chevron {
        width: 20px;
        height: 20px;
        position: relative;
    }

    .chevron::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 8px;
        height: 8px;
        border-right: 2px solid #64748b;
        border-bottom: 2px solid #64748b;
        transform: translate(-50%, -50%) rotate(45deg);
        transition: transform 0.3s ease;
    }

    .chevron.up::before {
        transform: translate(-50%, -50%) rotate(-135deg);
    }
</style>

<div class="accordion-container">
    <div class="accordion-item">
        <button class="accordion-header active" onclick="toggleAccordion(this)">
            <span class="accordion-title">How to connect corporate airline loyalty programs?</span>
            <div class="chevron up"></div>
        </button>
        <div class="accordion-content active">
            <div class="accordion-text">
                Enter into an agreement with the carrier and name Tumodo as the supplier. Using the tour
                code
                issued by
                the airline, we will connect the loyalty program to your personal account. If you don't know
                where to
                start, contact your personal service manager and he will help you get a corporate discount.
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
                These
                benefits help reduce travel costs while improving the overall travel experience for your
                employees.
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
<style>
    .accordion-container {
        max-width: 800px;
        margin: 0 auto;
        background: white;
        border-radius: 8px;
        /* box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); */
        overflow: hidden;
    }

    /* .accordion-item {
        border-bottom: 1px solid #e2e8f0;
    } */

    .accordion-item:last-child {
        border-bottom: none;
    }

    .accordion-header {
        background: white;
        border: none;
        width: 100%;
        padding: 20px 24px;
        text-align: left;
        cursor: pointer;
        display: flex;
        justify-content: between;
        align-items: center;
        transition: background-color 0.2s ease;
        font-size: 16px;
        font-weight: 500;
        color: #64748b;
    }

    .accordion-header:hover {
        background-color: #f8fafc;
    }

    .accordion-header.active {
        background-color: #f8fafc;
    }

    .accordion-title {
        flex: 1;
        padding-right: 20px;
    }

    .accordion-icon {
        width: 20px;
        height: 20px;
        transition: transform 0.3s ease;
        color: #64748b;
    }

    .accordion-icon.rotated {
        transform: rotate(180deg);
    }

    .accordion-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease, padding 0.3s ease;
        background-color: #f8fafc;
    }

    .accordion-content.active {
        max-height: 200px;
        padding: 20px 24px;
    }

    .accordion-text {
        color: #475569;
        font-size: 14px;
        line-height: 1.6;
    }

    /* Chevron icon styles */
    .chevron {
        width: 20px;
        height: 20px;
        position: relative;
    }

    .chevron::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 8px;
        height: 8px;
        border-right: 2px solid #64748b;
        border-bottom: 2px solid #64748b;
        transform: translate(-50%, -50%) rotate(45deg);
        transition: transform 0.3s ease;
    }

    .chevron.up::before {
        transform: translate(-50%, -50%) rotate(-135deg);
    }
</style>

<div class="accordion-container">
    <div class="accordion-item">
        <button class="accordion-header active" onclick="toggleAccordion(this)">
            <span class="accordion-title">How to connect corporate airline loyalty programs?</span>
            <div class="chevron up"></div>
        </button>
        <div class="accordion-content active">
            <div class="accordion-text">
                Enter into an agreement with the carrier and name Tumodo as the supplier. Using the tour
                code
                issued by
                the airline, we will connect the loyalty program to your personal account. If you don't know
                where to
                start, contact your personal service manager and he will help you get a corporate discount.
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
                These
                benefits help reduce travel costs while improving the overall travel experience for your
                employees.
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