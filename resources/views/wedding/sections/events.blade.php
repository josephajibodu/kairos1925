<!-- start wpo-event-section -->
<section class="wpo-event-section section-padding" id="event">
    <div class="container">
        <div class="wpo-section-title">
            <span>Our Wedding</span>
            <h2>When & Where</h2>
        </div>
        <div class="wpo-event-wrap">
            <div class="row">
                @foreach(config('wedding.events', []) as $eventKey => $event)
                <div class="col col-lg-4 col-md-6 col-12">
                    <div class="wpo-event-item wow fadeInUp" data-wow-duration="{{ 1000 + (array_search($eventKey, array_keys(config('wedding.events', []))) * 200) }}ms">
                        <div class="wpo-event-img">
                            <div class="wpo-event-img-inner">
                                <img src="{{ asset($event['image']) }}" alt="">
                            </div>
                        </div>
                        <div class="wpo-event-text">
                            <div class="title">
                                <h2>{{ $event['title'] }}</h2>
                            </div>
                            <ul>
                                <li>{{ $event['date'] }}<br>{{ $event['time'] }}</li>
                                <li>{{ $event['address'] }}</li>
                                <li>{{ $event['phone'] }}</li>
                                <li><a class="popup-gmaps" href="{{ $event['google_maps'] }}">See Location</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end wpo-event-section -->
