<!-- start wpo-gifts-section -->
<section class="wpo-blog-section section-padding" id="gifts">
    <div class="container">
        <div class="row">
            <div class="wpo-section-title">
                <span>Wedding Gifts</span>
                <h2>Support Our Special Day</h2>
            </div>
        </div>

        <!-- Bank Account Details -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="gift-bank-details wow fadeInUp" data-wow-duration="1000ms">
                    <div class="bank-card">
                        <div class="bank-header">
                            <h3><i class="ti-credit-card"></i> Bank Transfer Details</h3>
                            <p>You can support us by making a direct bank transfer to our account</p>
                        </div>
                        <div class="bank-info">
                            <div class="bank-row">
                                <span class="bank-label">Account Name:</span>
                                <span class="bank-value">{{ config('wedding.gifts.bank_details.account_name') }}</span>
                            </div>
                            <div class="bank-row">
                                <span class="bank-label">Account Number:</span>
                                <span class="bank-value">{{ config('wedding.gifts.bank_details.account_number') }}</span>
                            </div>
                            <div class="bank-row">
                                <span class="bank-label">Bank Name:</span>
                                <span class="bank-value">{{ config('wedding.gifts.bank_details.bank_name') }}</span>
                            </div>
                            <div class="bank-row">
                                <span class="bank-label">Sort Code:</span>
                                <span class="bank-value">{{ config('wedding.gifts.bank_details.sort_code') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Online Payment Options -->
        <div class="row">
            <div class="col-12">
                <div class="gift-online-section">
                    <h4 class="text-center mb-4">Or Support Us Online</h4>
                    <p class="text-center mb-5">Choose from different categories to support our wedding in a meaningful way</p>
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
