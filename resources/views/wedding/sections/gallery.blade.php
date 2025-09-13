<!-- start wpo-portfolio-section -->
<section class="wpo-portfolio-section section-padding" id="gallery">
    <h2 class="hidden">some</h2>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="portfolio-grids gallery-container clearfix portfolio-slide owl-carousel">
                    @for($i = 1; $i <= 6; $i++)
                    <div class="grid">
                        <div class="img-holder">
                            <a href="{{ asset('assets/images/portfolio/' . $i . '.jpg') }}" class="fancybox" data-fancybox-group="gall-1">
                                <img src="{{ asset('assets/images/portfolio/' . $i . '.jpg') }}" alt class="img img-responsive">
                                <div class="hover-content">
                                    <i class="ti-plus"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end wpo-portfolio-section -->
