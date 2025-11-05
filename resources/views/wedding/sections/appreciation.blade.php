<!-- start appreciation-section -->
<section class="wpo-appreciation-section section-padding" id="appreciation">
    <div class="container">
        @if(config('wedding.gifts.appreciation.enabled', true) && !empty(config('wedding.gifts.appreciation.people', [])))
            @php
                $people = config('wedding.gifts.appreciation.people', []);
                shuffle($people);
            @endphp
            <div class="row">
                <div class="col-12">
                    <div class="appreciation-section wow fadeInUp" data-wow-duration="1000ms">
                        <div class="appreciation-header">
                            <span class="appreciation-badge">
                                <i class="ti-heart"></i> {{ config('wedding.gifts.appreciation.title', 'With Gratitude') }}
                            </span>
                            <h3>{{ config('wedding.gifts.appreciation.subtitle', 'We are deeply grateful to everyone who has supported us on our special day') }}
                            </h3>
                        </div>
                        <div class="appreciation-people">
                            <div class="row">
                                @foreach($people as $index => $person)
                                    @php
                                        $name = is_array($person) ? $person['name'] : $person;
                                        $subtitle = is_array($person) && isset($person['subtitle']) ? $person['subtitle'] : null;
                                        $side = is_array($person) && isset($person['side']) ? $person['side'] : null;
                                    @endphp
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                                        <div class="appreciation-person {{ $side ? 'appreciation-person-' . $side : '' }} wow fadeInUp"
                                            data-wow-duration="1000ms" data-wow-delay="{{ ($index % 4) * 100 }}ms"
                                            data-side="{{ $side }}">
                                            <i class="ti-gift"></i>
                                            <div class="appreciation-person-info">
                                                <span class="appreciation-name">{{ $name }}</span>
                                                @if($subtitle)
                                                    <span class="appreciation-subtitle">{{ $subtitle }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div> <!-- end container -->
</section>
<!-- end appreciation-section -->