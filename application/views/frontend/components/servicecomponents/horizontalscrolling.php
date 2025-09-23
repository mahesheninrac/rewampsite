    <style>
        .scroll-parent {
            width: 100%;
            height: 110px;
            overflow: hidden;
            box-sizing: border-box;
            position: relative;
        }

        .scroll-content {
            display: flex;
            gap: 10px;
            height: 100%;
            align-items: center;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
        }

        .scroll-content.right {
            animation-name: scrollRight;
            animation-duration: 15s;
        }

        .scroll-content.left {
            animation-name: scrollLeft;
            animation-duration: 15s;
        }

        .scroll-item {
            min-width: 150px;
            height: 100px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #c1bdff;
            font-size: 14px;
            flex-shrink: 0;
            background-color: #827cff;
        }

        @keyframes scrollRight {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-860px);
            }
        }

        @keyframes scrollLeft {
            0% {
                transform: translateX(-860px);
            }

            100% {
                transform: translateX(0);
            }
        }
    </style>
    <div class="scroll-parent parent1">
        <div class="scroll-content right" id="content1">
            <div class="scroll-item">24x7 customer support</div>
            <div class="scroll-item">Quick TAT</div>
            <div class="scroll-item">Best in class <br> team access</div>
            <div class="scroll-item">Analyst support</div>
            <!-- Duplicate items for seamless loop -->
            <div class="scroll-item">Discount upto <br> PPU Model 10%</div>
            <div class="scroll-item">Complimentery<br> Letter</div>
            <div class="scroll-item">Free Insights</div>
            <div class="scroll-item">Access to webinars</div>
            <div class="scroll-item">Model Discount<br> upto 20%</div>
        </div>
    </div>
    <div class="scroll-parent parent2">
        <div class="scroll-content left" id="content2">
            <div class="scroll-item">Model Discount<br> upto 20%</div>
            <div class="scroll-item">Access to webinars</div>
            <div class="scroll-item">Complimentery<br> Letter</div>
            <div class="scroll-item">Free Insights</div>
            <!-- Duplicate items for seamless loop -->
            <div class="scroll-item">Discount upto <br>PPU Model 10%</div>
            <div class="scroll-item">Best in class<br> team access</div>
            <div class="scroll-item">Quick TAT</div>
            <div class="scroll-item">Analyst support</div>
        </div>
    </div>

    <script>
        let isPaused = false;
        const content1 = document.getElementById('content1');
        const content2 = document.getElementById('content2');

        // Optional: Pause on hover for better user experience
        const parent1 = document.querySelector('.parent1');
        const parent2 = document.querySelector('.parent2');

        // Initialize animation on page load
        window.addEventListener('load', () => {
            // Ensure animations start
            content1.style.animationPlayState = 'running';
            content2.style.animationPlayState = 'running';
        });
    </script>