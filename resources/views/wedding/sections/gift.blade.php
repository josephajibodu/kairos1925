<!-- start wpo-gifts-section -->
<section class="wpo-blog-section section-padding" id="gifts">
    <div class="container">
        <div class="row">
            <div class="wpo-section-title">
                <span>Wedding Gifts</span>
                <h2>Support Our Special Day</h2>
            </div>
        </div>

        <!-- Two Column Layout: Bank Details + Online Options -->
        <div class="row mb-5 align-items-start">
            <!-- Bank Account Details - Left Column -->
            <div class="col-lg-5 col-md-12 mb-4 mb-lg-0">
                <div class="gift-bank-details wow fadeInUp" data-wow-duration="1000ms">
                    <div class="bank-card compact">
                        <div class="bank-header">
                            <h4 style="font-family: inherit; font-style: normal; font-size: 20px; margin-bottom: 10px;">
                                <i class="ti-credit-card"></i> Bank Transfer
                            </h4>
                        </div>
                        <div class="bank-info">
                            <div class="bank-row">
                                <span class="bank-label" style="font-size: 14px;">Account Name:</span>
                                <span class="bank-value"
                                    style="font-size: 14px; font-weight: 600;">{{ config('wedding.gifts.bank_details.account_name') }}</span>
                            </div>
                            <div class="bank-row">
                                <span class="bank-label" style="font-size: 14px;">Account Number:</span>
                                <span class="bank-value"
                                    style="font-size: 14px; font-weight: 600;">{{ config('wedding.gifts.bank_details.account_number') }}</span>
                            </div>
                            <div class="bank-row">
                                <span class="bank-label" style="font-size: 14px;">Bank Name:</span>
                                <span class="bank-value"
                                    style="font-size: 14px; font-weight: 600;">{{ config('wedding.gifts.bank_details.bank_name') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Online Payment Options - Right Column -->
            <div class="col-lg-7 col-md-12">
                <div class="gift-online-section">
                    <h4 class="mb-3" style="font-family: inherit; font-style: normal; font-size: 20px;">
                        💳 Or Gift Us Online
                    </h4>
                    <p class="mb-3" style="font-size: 16px;">Choose from different gift categories below to support our
                        wedding</p>
                    <div class="online-gift-arrow">
                        <i class="ti-arrow-down"
                            style="font-size: 24px; color: #ef3567; animation: bounceDown 1.5s ease-in-out infinite;"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="wpo-blog-items">
            <div class="row">
                @foreach(config('wedding.gifts.online_payment_options', []) as $index => $gift)
                    <div class="{{ $gift['col_class'] ?? 'col col-lg-4 col-md-6 col-12' }}">
                        <div class="wpo-blog-item gift-item wow fadeInUp" data-wow-duration="{{ 1000 + ($index * 200) }}ms">
                            <div class="wpo-blog-img">
                                <div class="gift-icon">
                                    <i class="{{ $gift['icon'] }}"></i>
                                </div>
                            </div>
                            <div class="wpo-blog-content">
                                @if($gift['amount'] === 'Custom')
                                    <div class="gift-amount">
                                        <span class="amount">Custom Amount</span>
                                    </div>
                                    <h2>{{ $gift['title'] }}</h2>
                                    <p>{{ $gift['description'] }}</p>
                                    <div class="custom-amount-input mb-3">
                                        <input type="number" id="customAmount" class="form-control"
                                            placeholder="Enter amount e.g 2000" min="1" step="1"
                                            style="padding: 12px 24px; max-width: 300px; margin: auto;">
                                    </div>
                                    <div class="gift-action">
                                        <a href="#" id="customPaymentLink" target="_blank" class="theme-btn-s2"
                                            onclick="handleCustomPayment(event)">
                                            Support Now <i class="ti-arrow-right"></i>
                                        </a>
                                    </div>
                                @else
                                    <div class="gift-amount">
                                        <span class="amount">{{ $gift['amount'] }}</span>
                                    </div>
                                    <h2>{{ $gift['title'] }}</h2>
                                    <p>{{ $gift['description'] }}</p>
                                    <div class="gift-action">
                                        <a href="{{ $gift['link'] }}" target="_blank" class="theme-btn-s2">
                                            Support Now <i class="ti-arrow-right"></i>
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="b-shape-2">
                <img src="{{ asset('assets/images/blog/shape-2.svg') }}" alt="">
            </div>
        </div>
    </div> <!-- end container -->
    <div class="b-shape">
        <img src="{{ asset('assets/images/blog/shape-1.svg') }}" alt="">
    </div>
</section>
<!-- end wpo-gifts-section -->

<script>
    function handleCustomPayment(event) {
        event.preventDefault();

        const amountInput = document.getElementById('customAmount');
        const amount = amountInput.value.trim();

        if (!amount || isNaN(amount) || parseFloat(amount) <= 0) {
            alert('Please enter a valid amount');
            amountInput.focus();
            return;
        }

        // Remove any existing amount and currency parameters from the base URL
        const baseUrl = 'https://selar.com/showlove/kairos1925';
        const paymentUrl = `${baseUrl}?amount=${amount}&currency=NGN`;

        // Open the payment link in a new tab
        window.open(paymentUrl, '_blank');
    }
</script>