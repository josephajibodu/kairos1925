<!-- start wpo-story-section -->
<section class="wpo-story-section-s2 section-padding" id="story">
    <div class="container">
        <div class="wpo-section-title">
            <span>Our Story</span>
            <h2>How it Happened</h2>
        </div>
        <div class="wpo-story-wrap">
            @foreach(config('wedding.story', []) as $index => $story)
            <div class="wpo-story-item">
                <div class="row">
                    <div class="col col-lg-6 col-12 {{ $index % 2 == 1 ? 'order-lg-2 order-1' : '' }}">
                        <div class="wpo-story-img">
                            <img src="{{ asset($story['image']) }}" alt="">
                        </div>
                    </div>
                    <div class="col col-lg-6 col-12 {{ $index % 2 == 1 ? 'order-lg-1 order-2' : '' }}">
                        <div class="wpo-story-content wow flipInX" data-wow-duration="1000ms">
                            <div class="thumb">
                                <span>{{ $story['date'] }}</span>
                                <div class="pin">
                                    <img src="{{ asset('assets/images/story/pin.svg') }}" alt="">
                                </div>
                            </div>
                            <h2>{{ $story['title'] }}</h2>
                            <p>{{ $story['description'] }}</p>
                            <div class="flower">
                                <img src="{{ asset('assets/images/story/flower' . ($index % 2 == 1 ? '-2' : '') . '.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ring-wrap">
                    @for($i = 0; $i < 10; $i++)
                    <div class="ring"><img src="{{ asset('assets/images/story/ring.svg') }}" alt=""></div>
                    @endfor
                </div>
            </div>
            @endforeach
        </div>
    </div> <!-- end container -->
    <div class="flower-shape-1">
        <img src="{{ asset('assets/images/story/flower-shape1.svg') }}" alt="">
    </div>
    <div class="flower-shape-2">
        <img src="{{ asset('assets/images/story/flower-shape2.svg') }}" alt="">
    </div>
    <div class="flower-shape-3">
        <img src="{{ asset('assets/images/story/flower-shape3.svg') }}" alt="">
    </div>
    <div class="flower-shape-4">
        <img src="{{ asset('assets/images/story/flower-shape4.svg') }}" alt="">
    </div>
</section>
<!-- end story-section -->
