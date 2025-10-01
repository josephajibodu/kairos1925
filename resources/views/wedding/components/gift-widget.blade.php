<!-- Floating Gift Us Widget -->
<div class="gift-widget-container">
    <a href="#gifts" class="gift-widget-button" aria-label="Gift Us">
        <div class="gift-widget-content">
            <i class="ti-gift"></i>
            <span class="gift-widget-text">Gift Us</span>
        </div>
        <div class="gift-widget-pulse"></div>
    </a>
</div>

<style>
    .gift-widget-container {
        position: fixed;
        bottom: 30px;
        /* Back to standard bottom position */
        left: 30px;
        /* Left side to avoid scroll-to-top button */
        z-index: 9998;
    }

    .gift-widget-button {
        position: relative;
        display: flex;
        align-items: center;
        gap: 10px;
        background: #ef3567;
        color: #ffffff;
        padding: 14px 24px;
        border-radius: 50px;
        box-shadow: 0 4px 20px rgba(239, 53, 103, 0.5);
        text-decoration: none;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
    }

    .gift-widget-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 25px rgba(239, 53, 103, 0.7);
        color: #ffffff;
        text-decoration: none;
    }

    .gift-widget-content {
        position: relative;
        display: flex;
        align-items: center;
        gap: 10px;
        z-index: 2;
    }

    .gift-widget-content i {
        font-size: 20px;
        animation: giftBounce 2s ease-in-out infinite;
    }

    .gift-widget-text {
        font-weight: 600;
        font-size: 16px;
        letter-spacing: 0.5px;
    }

    .gift-widget-pulse {
        display: none;
        /* Removed pulse animation to avoid color changes */
    }

    @keyframes giftBounce {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-3px);
        }
    }

    /* Mobile responsiveness */
    @media (max-width: 768px) {
        .gift-widget-container {
            bottom: 20px;
            left: 20px;
        }

        .gift-widget-button {
            padding: 12px 20px;
        }

        .gift-widget-content i {
            font-size: 18px;
        }

        .gift-widget-text {
            font-size: 14px;
        }
    }

    /* Extra small screens - keep text visible for clarity */
    @media (max-width: 480px) {
        .gift-widget-button {
            padding: 10px 16px;
        }

        .gift-widget-text {
            font-size: 13px;
        }

        .gift-widget-content {
            gap: 8px;
        }

        .gift-widget-content i {
            font-size: 18px;
        }
    }

    /* Very small screens - keep text visible */
    @media (max-width: 360px) {
        .gift-widget-container {
            bottom: 15px;
            left: 15px;
        }

        .gift-widget-button {
            padding: 8px 14px;
        }

        .gift-widget-text {
            font-size: 12px;
        }

        .gift-widget-content {
            gap: 6px;
        }

        .gift-widget-content i {
            font-size: 16px;
        }
    }

    /* Dark mode support (optional) */
    @media (prefers-color-scheme: dark) {
        .gift-widget-button {
            box-shadow: 0 4px 20px rgba(239, 53, 103, 0.6);
        }

        .gift-widget-button:hover {
            box-shadow: 0 6px 25px rgba(239, 53, 103, 0.8);
        }
    }

    /* Smooth scroll behavior */
    html {
        scroll-behavior: smooth;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const giftWidget = document.querySelector('.gift-widget-button');

        if (giftWidget) {
            giftWidget.addEventListener('click', function (e) {
                e.preventDefault();
                const giftsSection = document.querySelector('#gifts');

                if (giftsSection) {
                    // Smooth scroll to the gifts section
                    giftsSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });

                    // Add a subtle animation to the section when reached
                    setTimeout(() => {
                        giftsSection.classList.add('gift-section-highlight');
                        setTimeout(() => {
                            giftsSection.classList.remove('gift-section-highlight');
                        }, 1000);
                    }, 500);
                }
            });
        }
    });
</script>
