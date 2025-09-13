<!-- start of wpo-contact-section -->
<section class="wpo-contact-section-s2 section-padding">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="wpo-contact-section-wrapper">
                    <div class="wpo-section-title">
                        <h2>Are You Attending?</h2>
                    </div>
                    <div class="wpo-contact-form-area">
                        <form method="post" action="{{ route('rsvp.store') }}" class="contact-validation-active" id="contact-form-main">
                            @csrf
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ old('name') }}" required>
                            </div>
                            <div>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required>
                            </div>
                            <div class="radio-buttons">
                                <p>
                                    <input type="radio" id="attend" name="attending" value="1" {{ old('attending', '1') == '1' ? 'checked' : '' }}>
                                    <label for="attend">Yes, I will be there</label>
                                </p>
                                <p>
                                    <input type="radio" id="not" name="attending" value="0" {{ old('attending') == '0' ? 'checked' : '' }}>
                                    <label for="not">Sorry, I can't come</label>
                                </p>
                            </div>
                            <div>
                                <select name="guests" class="form-control" required>
                                    <option disabled {{ old('guests') ? '' : 'selected' }}>Number Of Guests</option>
                                    @for($i = 1; $i <= 10; $i++)
                                        <option value="{{ $i }}" {{ old('guests') == $i ? 'selected' : '' }}>{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div>
                                <input type="text" class="form-control" name="events" id="events" placeholder="What Will You Be Attending" value="{{ old('events') }}">
                            </div>
                            <div>
                                <select name="meal_preference" class="form-control last">
                                    <option disabled {{ old('meal_preference') ? '' : 'selected' }}>Meal Preferences</option>
                                    <option value="Chicken Soup" {{ old('meal_preference') == 'Chicken Soup' ? 'selected' : '' }}>Chicken Soup</option>
                                    <option value="Motton Kabab" {{ old('meal_preference') == 'Motton Kabab' ? 'selected' : '' }}>Motton Kabab</option>
                                    <option value="Chicken BBQ" {{ old('meal_preference') == 'Chicken BBQ' ? 'selected' : '' }}>Chicken BBQ</option>
                                    <option value="Mix Salad" {{ old('meal_preference') == 'Mix Salad' ? 'selected' : '' }}>Mix Salad</option>
                                    <option value="Beef Ribs" {{ old('meal_preference') == 'Beef Ribs' ? 'selected' : '' }}>Beef Ribs</option>
                                </select>
                            </div>
                            <div>
                                <textarea class="form-control" name="message" placeholder="Additional Message">{{ old('message') }}</textarea>
                            </div>
                            <div class="submit-area">
                                <button type="submit" class="theme-btn">RSVP</button>
                                <div id="c-loader">
                                    <i class="ti-reload"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-bg">
        <svg viewBox="0 0 1920 634" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="bg-path" d="M207 286C162.2 87.6 39 44.6667 -17 48L-91 22L-71 726H13L1977 670L1957 424C1926.6 318.4 1815 392 1763 442C1619.8 570 1503.33 495.333 1463 442C1270.2 162.8 1197.33 325.667 1185 442C1159.4 584.4 1117 537.333 1099 496C953.4 192.8 868.333 328.333 844 434C791.2 649.2 649.333 555.667 585 482C455.4 356.4 380.333 429.667 359 482C315 616.4 273.333 547.333 258 496L207 286Z" fill="" />
            <path class="bg-stroke" d="M207 266C162.2 67.6 39 24.6667 -17 28L-91 2L-71 706H13L1977 650L1957 404C1926.6 298.4 1815 372 1763 422C1619.8 550 1503.33 475.333 1463 422C1270.2 142.8 1197.33 305.667 1185 422C1159.4 564.4 1117 517.333 1099 476C953.4 172.8 868.333 308.333 844 414C791.2 629.2 649.333 535.667 585 462C455.4 336.4 380.333 409.667 359 462C315 596.4 273.333 527.333 258 476L207 266Z" stroke="" stroke-width="2" />
        </svg>

        <div class="shape-1">
            <img src="{{ asset('assets/images/rsvp/shape.svg') }}" alt="">
        </div>
        <div class="shape-2 wow fadeInUp" data-wow-duration="1000ms">
            <img src="{{ asset('assets/images/rsvp/shape2.svg') }}" alt="">
        </div>
        <div class="shape-3 wow fadeInUp" data-wow-duration="1200ms">
            <img src="{{ asset('assets/images/rsvp/shape3.svg') }}" alt="">
        </div>
        <div class="shape-4 wow fadeInUp" data-wow-duration="1400ms">
            <img src="{{ asset('assets/images/rsvp/shape4.svg') }}" alt="">
        </div>
        <div class="shape-5 wow fadeInUp" data-wow-duration="1600ms">
            <img src="{{ asset('assets/images/rsvp/shape5.svg') }}" alt="">
        </div>
        <div class="shape-6 wow fadeInUp" data-wow-duration="1800ms">
            <img src="{{ asset('assets/images/rsvp/shape6.svg') }}" alt="">
        </div>
    </div>
</section>
<!-- end of wpo-contact-section -->
