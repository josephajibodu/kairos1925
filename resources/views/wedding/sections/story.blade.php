<!-- start wpo-story-section -->
<section class="wpo-story-section section-padding" id="story">
    <div class="container">
        <div class="wpo-section-title">
            <span>Our Story</span>
            <h2>How it Happened</h2>
        </div>
        <div class="wpo-story-wrap">
            @foreach(config('wedding.story', []) as $index => $story)
            <div class="wpo-story-item">
                <div class="wpo-story-img-wrap">
                    <div class="wpo-story-img wow zoomIn" data-wow-duration="1000ms">
                        <img src="{{ asset($story['image']) }}" alt="">
                    </div>
                    @if($index == 1)
                    <div class="clip-shape">
                        <svg viewBox="0 0 382 440" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M191 0L381.526 110V330L191 440L0.474411 330V110L191 0Z" />
                        </svg>
                    </div>
                    @endif
                    <div class="wpo-img-shape">
                        <img src="{{ asset('assets/images/story/shape' . ($index + 1) . '.png') }}" alt="">
                    </div>
                </div>
                <div class="wpo-story-content">
                    <div class="wpo-story-content-inner wow {{ $index % 2 == 1 ? 'fadeInLeftSlow' : 'fadeInRightSlow' }}" data-wow-duration="1700ms">
                        <span>{{ $story['date'] }}</span>
                        <h2>{{ $story['title'] }}</h2>
                        <p>{{ $story['description'] }}</p>
                    </div>
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
