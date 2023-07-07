@extends('frontend.master')

@section('content')

    <!-- Hero -->
    <div class="services-hero  text-start bg-image">
        <div class="mask h-100">
            <div class="hero-contain d-flex justify-content-center align-items-center h-100">
                <div class="row w-100">
                    <div class="col-md-12" style="width: 600px;">
                        <h1 class="mb-3 text-white text-center">Our Services</h1>
                        <h6 class="mb-3 text-white fw-light text-center">Comprehensive IT Solutions: Empowering businesses with a wide range of IT services including web design, development, UI/UX, digital marketing, and more.</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero -->


    {{-- What We Do - Section --}}
    <div class="service-main">
        <div class="container">
            <div class="wwd-section">
                <div class="row main-row justify-content-center">
                    <div class="heading mb-4 text-center">
                        <div class="title">
                            <h1>What We Do</h1>
                        </div>
                        <div class="subtitle">
                            <p>We provide various Information and Technology solutions. Here are a few of the services
                                we are experts in providing to our clients.</p>
                        </div>
                    </div>

                    <div class="wwd-main">
                        <div class="row">
                            @foreach ($whatwedo as $value)
                            <div class="col-md-3 box">
                                <div class="row text-center">
                                    <div class="wwd-image">
                                        <img src="/{{$value->image->image_location}}/{{$value->image->image_name}}" alt="">
                                    </div>
                                    <div class="title mt-4">
                                        <h3>{{$value->name}}</h3>
                                    </div>
                                    <div class="learn-more-btn mt-4">
                                        {{-- <a href="#" class="btn">Learn More<i
                                                class="fa-solid fa-arrow-right ms-3"></i></a> --}}
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>


            {{-- Process We Follow - Section --}}
            <div class="owp-section">
                <div class="row main-row justify-content-center">
                    <div class="heading mb-4 text-center">
                        <div class="title">
                            <h1>Our Working Process</h1>
                        </div>
                        <div class="subtitle">
                            <p>From project initiation to final delivery, count on us to consistently deliver
                                high-quality products.</p>
                        </div>
                    </div>
                    <div class="owp-main">
                        <div class="row">
                            @foreach($process as $value)
                            <div class="col-md-2 box">
                                <div class="row text-center">
                                    <div class="owp-image">
                                        <img src="/{{$value->image->image_location}}/{{$value->image->image_name}}" alt="image.jpg">
                                    </div>
                                    <div class="title mt-4">
                                        <h3>{{$value->name}}</h3>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>



            <!-- Technology - Section -->
            <div class="twu-section">
                <div class="container">
                    <div class="row">
                        <h3>Technologies We Use</h3>

                        <div class="techweuse py-5">
                            @foreach ($technology as $value)
                            <div class="tech-item">
                                <div class="twe-image">
                                    <img src="/{{$value->image->image_location}}/{{$value->image->image_name}}" alt="try.jpg">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>


            <!-- Testimonial Section -->
            @if($testimonial->count())
                <div class="wocs-section">
                    <div class="row main-row justify-content-center">
                        <div class="heading mb-4 text-center">
                            <div class="title">
                                <h1>What Our Clients Says</h1>
                            </div>
                        </div>

                        <div class="wocs-main mt-5">
                            <div class="wocs-slider">
                                @foreach($testimonial as $value)
                                <div class="item">
                                    <div class="row justify-content-center">
                                        <div class="icon mt-4 text-center">
                                            <i class="fa-solid fa-quote-left"></i>
                                        </div>
                                        <div class="detail mt-2">
                                            <p>{{Str::limit($value->testimonials,150)}}</p>
                                        </div>
                                        <div class="client-image">
                                            <img src="/{{$value->image->image_location}}/{{$value->image->image_name}}" alt="try.jpg">
                                        </div>
                                        <div class="client-name">
                                            <h3>{!!$value->name!!}</h3>
                                        </div>
                                        <div class="client-position mb-3">
                                            <h6>{{$value->position}}</h6>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="slider__prev"><i class="fa-solid fa-chevron-left"></i></div>
                            <div class="slider__next"><i class="fa-solid fa-chevron-right"></i></div>
                        </div>
                    </div>
            @endif

                </div>


        </div>



    </div>
    </div>

@endsection
