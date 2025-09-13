<!-- start wpo-team-section -->
<section class="wpo-team-section section-padding pt-0">
    <div class="container">
        <div class="wpo-section-title">
            <span>Important Persons</span>
            <h2>Bridesmaids & Groomsmen</h2>
        </div>
        <div class="wpo-team-wrap scene-2" id="scene-2">
            <div class="row">
                @foreach(config('wedding.team', []) as $index => $member)
                <div class="col col-lg-3 col-md-6 col-sm-6 col-12 layer" data-depth="0.{{ 10 + ($index * 5) }}">
                    <div class="wpo-team-item wow fadeInUp" data-wow-duration="{{ 1000 + ($index * 200) }}ms">
                        <div class="wpo-team-img-wrap">
                            <div class="wpo-team-img" style="mask-image: url({{ asset($member['mask']) }}); -webkit-mask-image: url({{ asset($member['mask']) }});">
                                <img src="{{ asset($member['image']) }}" alt="">
                            </div>
                            <div class="team-shape">
                                <!-- SVG shapes would go here -->
                            </div>
                        </div>
                        <div class="wpo-team-text">
                            <h3><a href="{{ route('team-single') }}">{{ $member['name'] }}</a></h3>
                            <span>{{ $member['role'] }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end wpo-team-section -->
