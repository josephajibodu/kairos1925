<!-- start wpo-blog-section -->
<section class="wpo-blog-section section-padding">
    <div class="container">
        <div class="row">
            <div class="wpo-section-title">
                <span>Our Blog</span>
                <h2>Our Latest Wedding News</h2>
            </div>
        </div>
        <div class="wpo-blog-items">
            <div class="row">
                @for($i = 1; $i <= 3; $i++)
                <div class="col col-lg-4 col-md-6 col-12">
                    <div class="wpo-blog-item wow fadeInUp" data-wow-duration="{{ 1000 + ($i * 200) }}ms">
                        <div class="wpo-blog-img">
                            <img src="{{ asset('assets/images/blog/img-' . $i . '.jpg') }}" alt="">
                        </div>
                        <div class="wpo-blog-content">
                            <ul>
                                <li>By <a href="{{ route('blog-single') }}">Robertson Doe</a></li>
                                <li>{{ date('d M Y', strtotime('-' . $i . ' days')) }}</li>
                            </ul>
                            <h2><a href="{{ route('blog-single') }}">Top {{ $i }} wedding bouquet arranging idea</a></h2>
                        </div>
                    </div>
                </div>
                @endfor
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
<!-- end wpo-blog-section -->
