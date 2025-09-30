<!-- start of wpo-site-footer-section -->
<footer class="wpo-site-footer">
    <div class="wpo-upper-footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col col-xl-3  col-lg-4 col-md-6 col-sm-12 col-12">

                    <div class="widget about-widget">
                        <div class="logo widget-title">
                            <a class="logo" href="{{ route('home') }}">
                                Kairos1925
                            </a>
                        </div>
                        <p>We can't wait to see all of our beloved friends and relatives at our wedding.</p>
                        <ul style="display: none;">
                            <li>
                                <a href="{{ config('wedding.social.facebook', '#') }}">
                                    <i class="ti-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ config('wedding.social.twitter', '#') }}">
                                    <i class="ti-twitter-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ config('wedding.social.instagram', '#') }}">
                                    <i class="ti-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col col-xl-6 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="widget about-widget">

                    </div>
                </div>
                <div class="col col-xl-3  col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="widget wpo-service-link-widget">
                        <div class="widget-title">
                            <h3>Contact</h3>
                        </div>
                        <div class="contact-ft">
                            <p>kairos1915@gmail.com</p>
                            <p>JOBAMED EVENT CENTER, Along Robiyan Ibaragun Road, Abule Ijoko, Ogun State.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </div>
    <div class="wpo-lower-footer">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <p class="copyright">
                        &copy; Copyright {{ date('Y') }} |
                        <a href="{{ route('home') }}">{{ config('wedding.site_name', 'Habibi') }}</a> |
                        All right reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="ft-shape-1">
        <img src="{{ asset('assets/images/footer-shape-1.svg') }}" alt="">
    </div>
    <div class="ft-shape-2">
        <img src="{{ asset('assets/images/footer-shape-2.svg') }}" alt="">
    </div>
</footer>
<!-- end of wpo-site-footer-section -->
