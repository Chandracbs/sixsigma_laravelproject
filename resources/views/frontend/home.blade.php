@extends('frontend.master')

@section('content')
    <!-- Hero -->
    <div class="main-hero">
        <div class="container-fluid p-0">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/hero-image.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h1>A Leading Technology Service Provider</h1>
                            <p>Let's talk quality. You ask, we deliver</p>
                            <div class="row gs-btn">
                                <div class="col-md-5">
                                    <a href="{{ route('webdev') }}" class="btn text-white cta-btn">Get Started<i
                                            class="fa-solid fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-md-7 rm-btn">
                                    <p>Want to know how we stand out?</p>
                                    <a href="web-development.htm" class="btn text-white mt-0">Read More <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/hero-image.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>A team of experts at your service</h1>
                            <p>We commit ourselves to quality excellence. Watch your concepts come alive.</p>
                            <div class="row gs-btn">
                                <div class="col-md-5">
                                    <a href="{{ route('webdev') }}" class="btn text-white cta-btn">Get Started<i
                                            class="fa-solid fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-md-7 rm-btn">
                                    <p>Want to know how we stand out?</p>
                                    <a href="web-development.htm" class="btn text-white mt-0">Read More <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/hero-image.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>The devoted quality purveyors</h1>
                            <p>The fine art of quality at your price.</p>
                            <div class="row gs-btn">
                                <div class="col-md-5">
                                    <a href="{{ route('webdev') }}" class="btn text-white cta-btn">Get Started<i
                                            class="fa-solid fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-md-7 rm-btn">
                                    <p>Want to know how we stand out?</p>
                                    <a href="web-development.htm" class="btn text-white mt-0">Read More <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero -->





    <!--Main Section Start-->

    <div class="main-section">

        <div class="container whoweare-section">
            <div class="row whoweare-row ">
                <div class="col-md-6 wwr-image">
                    <img src="assets/images/who-we-are.png" class="wwr-img" alt="">
                </div>
                <div class="col-md-6 wwr-contain">
                    <div class="row">
                        <div class="title">
                            <h3>Who We Are</h3>
                        </div>
                        <div class="detail">
                            <p>Six Sigma Inc. Pvt. Ltd. is an expert consulting and solution provider company established in
                                the year 2016 focusing on the current technologies to help boost the productivity of
                                communities, government, businesses, institutions and corporate houses in Nepal. Six Sigma
                                Inc. comprises of professional engineers, consultants, academicians, trainers and
                                businessmen. We at Six Sigma Inc. are committed to providing the best in class services with
                                higher concentration on Computer Information, Communication & Broadcasting Technologies.</p>
                        </div>
                        <div class="learn-more-btn">
                            <a href="{{ route('about') }}" class="btn btn-outline-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Solutions - Section --}}
        <div class="buildbs-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="main-title ">
                                <h3>Building Better Solutions</h3>
                            </div>
                            <div class="subtitle ">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem incidunt
                                    perferendis doloremque animi?</p>
                            </div>
                            <div class="get-str-btn mb-3">
                                <a href="#" class="btn btn-outline-primary">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 box-row">
                        <div class="row">
                            @foreach ($solution as $value)
                                <div class="box col-md-6">
                                    <div class="box-image">
                                        <img src="/{{ $value->image->image_location }}/{{ $value->image->image_name }}"
                                            class="icon" alt="">
                                    </div>
                                    <div class="box-detail">
                                        <div class="title">
                                            <h3>{{ $value->name }}</h3>
                                        </div>
                                        <div class="subtitle">
                                            <p>{{ Str::limit($value->description, 150) }}</p>
                                        </div>
                                        <a class="box-botton" href="#">Learn More <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            @endforeach

                            {{-- <div class="box col-md-6">
                                <div class="box-image">
                                    <img src="assets/images/icons/solutions/monitor.png" class="icon" alt="">
                                </div>
                                <div class="box-detail">
                                    <div class="title">
                                        <h3>Design</h3>
                                    </div>
                                    <div class="subtitle">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque corrupti
                                            molestias voluptatum.</p>
                                    </div>
                                    <a class="box-botton" href="#">Learn More <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>

                            <div class="box col-md-6">
                                <div class="box-image">
                                    <img src="assets/images/icons/solutions/monitor.png" class="icon" alt="">
                                </div>
                                <div class="box-detail">
                                    <div class="title">
                                        <h3>Design</h3>
                                    </div>
                                    <div class="subtitle">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque corrupti
                                            molestias voluptatum.</p>
                                    </div>
                                    <a class="box-botton" href="#">Learn More <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>

                            <div class="box col-md-6">
                                <div class="box-image">
                                    <img src="assets/images/icons/solutions/monitor.png" class="icon" alt="">
                                </div>
                                <div class="box-detail">
                                    <div class="title">
                                        <h3>Design</h3>
                                    </div>
                                    <div class="subtitle">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque corrupti
                                            molestias voluptatum.</p>
                                    </div>
                                    <a class="box-botton" href="#">Learn More <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- What We Do - Section --}}
        <div class="container wtd-section mt-5">
            <div class="row">
                <div class="heading">
                    <h3 class="title text-center">What We Do</h3>
                    <p class="subtitle text-center">We provide various Information and Technology solution.Here are a
                        few of the
                        services we are experts in providing to our client.</p>
                </div>

                <div class="wtd-main">
                    <div class="row">
                        @foreach ($whatwedo as $value)
                            <div class="col-md-3 wtd-contain">
                                <div class="row">
                                    <img src="/{{ $value->image->image_location }}/{{ $value->image->image_name }}"
                                        alt="">
                                    <h3 class="title">{{ $value->name }}</h3>
                                    <p class="description">{{ Str::limit($value->description, 250) }}</p>
                                    <div class="hrline mb-4"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        {{-- End --}}



        {{-- Process We Follow - Section --}}
        <div class="pwf-section mt-5">
            <div class="container">
                <div class="row">
                    <div class="heading">
                        <h3>Process We Follow</h3>
                    </div>
                    <div class="subheading">
                        <p>From project initiation to final delivary, count on us to consistently deliver high-quality
                            products.</p>
                    </div>

                    <div class="pwf-main mt-5 mb-5">
                        <div class="row">
                            @foreach ($process as $value)
                                <div class="row col-lg-2 col-sm-4">
                                    <div class="pwf-img mb-sm-3">
                                        <img src="/{{ $value->image->image_location }}/{{ $value->image->image_name }}"
                                            alt="">
                                    </div>
                                    <h6>{{ $value->name }}</h6>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End --}}



        {{-- Technology We Use - Section --}}
        <div class="twu-section">
            <div class="container">
                <div class="row">
                    <h3>Technologies We Use</h3>

                    <div class="techweuse py-5">
                        @foreach ($technology as $value)
                            <div class="tech-item">
                                <div class="twe-image">
                                    <img src="/{{ $value->image->image_location }}/{{ $value->image->image_name }}"
                                        alt="">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        {{-- end --}}




        <div class="messagefd-section">
            <div class="container">
                <div class="row messagefd-row">
                    <div class="col-md-4">
                        <div class="mfd-image">
                            <img src="assets/images/mfd-2.png" alt="" class="mfd-img">
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="row">
                            <div class="heading text-center">
                                <h3>Message from the Director</h3>
                            </div>
                            <div class="detail mt-3">
                                <p>Lorem ipsum dolor sit amet consectetur. Accumsan tristique nibh scelerisque sit odio
                                    eu eget. Sed id pulvinar suspendisse faucibus diam sapien volutpat turpis id.
                                    Egestas duis nulla at ac. Felis placerat consectetur porttitor nec ac nam mi odio.
                                    Neque tristique consectetur posuere fames urna ultrices cursus. Purus dignissim
                                    quisque ut vitae arcu. Arcu sollicitudin odio euismod sit. Odio purus at eu
                                    imperdiet. Feugiat scelerisque vestibulum orci mauris faucibus donec malesuada cras.
                                    Augue nunc nullam magna varius sed lectus mattis. Lacus magna urna lobortis aliquet
                                    quis vel quis nibh. Ipsum id adipiscing faucibus viverra leo ultricies augue. Nullam
                                    consequat pulvinar facilisis pharetra facilisis dui. Lacus et at tortor sed.
                                    Porttitor urna amet quis elementum nibh aliquet ornare. Risus gravida ut quis a
                                    commodo at vel. Gravida erat porttitor tellus id diam. Massa diam facilisis ornare
                                    non eu volutpat nam augue. Quisque enim enim aliquam placerat tellus id ullamcorper
                                    venenatis eget. In pharetra nunc nibh ligula non nibh. At duis arcu nisl varius
                                    euismod diam. Augue felis sagittis gravida imperdiet. Varius maecenas ac sapien sit
                                    morbi a ut pharetra. Sit id eu est cursus etiam sed etiam. Leo amet sapien vitae.
                                </p>
                            </div>
                            <div class="full-name">
                                <h5>Full Name</h5>
                                <h6>CEO, ABC Company</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="ourproject-section">
            <div class="container">
                <div class="heading">
                    <h3>Our Product</h3>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="row head-logo">
                            <div class="row">
                                <div class="logo col-md-6">
                                    <img src="assets/images/gadget-frame-logo.png" class="img-fluid w-100"
                                        alt="">
                                </div>
                                <div class="col-md-6">
                                    <a href="https://gadgetframe.com/" class="btn btn-outline-primary"
                                        target="_blank">Visit Site</a>
                                </div>
                            </div>
                            <div class="detail">
                                <p>Gadget Frame is a one-stop-shop for mobile seekers and a service partner for
                                    retailers to bridge gap between stores and customers. It provides search feature for
                                    any brand of mobiles like Apple, Samsung, Vivo, Oppo, Huawei, Gionee, LAVA, Sony,
                                    Colors, Micromax, Blackberry and so on. It offers detailed information about mobile
                                    features like Camera, Display Screen, Memory, Processor, Storage, Battery, Sound,
                                    Network, OS Platform, Communication, Design, and Size along with the launch date and
                                    Price (if available in Nepal). Search can be fine-tuned also on the basis of Price
                                    range, RAM size, Storage capacity, Camera resolution, Battery backup, Screen size,
                                    SIM modules. Any brand's mobile model can be compared with any other in a detailed
                                    tabular listing. Under the Blogs section, there are mobile reviews of different
                                    brands and different families. The Stores tab provides the listing of the various
                                    mobile models available with our associate mobile stores, special offers they
                                    provide, their location and contact details.</p>
                            </div>
                            <div class="op1-image">
                                <img src="assets/images/gadget-frame-2.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="op1-image">
                            <img src="assets/images/gadget-frame-1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- Our Clients - Section --}}
        <div class="ourclint-section">
            <div class="container">
                <div class="row">
                    <div class="heading">
                        <h3>Our Clients</h3>
                    </div>
                </div>

                <div class="oc-slider">
                    @foreach ($ourclient as $value)
                        <div class="item">
                            @if (!empty($value->image))
                                <img src="/{{ $value->image->image_location }}/{{ $value->image->image_name }}"
                                    alt="image.jpg">
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- End --}}



        <div class="contact-section">
            <div class="container">
                <div class="row main-row">
                    <div class="col-md-7">
                        <div class="row form-row">
                            <div class="title">
                                <h3>Contact Us</h3>
                            </div>
                            <div class="subtitle">
                                <p>Feel free to contact us anytime.<br>We will get back to you as soon as we can.</p>
                            </div>
                            <div class="row contact-form mt-3">
                                @if (session('message'))
                                    <p>{{ session('message') }}</p>
                                @endif
                                <form action="{{ route('contactUs.send') }}" method="POST">
                                    @csrf
                                    <div class="row fullname">
                                        <label for="">Full Name</label>
                                        <input type="text" name="name" value="{{old('name')}}" required>
                                        @if ($errors->has('name'))
                                            <span class="text-xs text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>

                                    <div class="row email">
                                        <label for="">Email Address</label>
                                        <input type="text" name="email" value="{{old('email')}}" required>
                                        @if ($errors->has('email'))
                                            <span class="text-xs text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>

                                    <div class="row message">
                                        <label for="">Message</label>
                                        <textarea id="" cols="30" rows="10" name="message">{{old('message')}}</textarea>
                                        @if ($errors->has('message'))
                                            <span class="text-xs text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                    </div>

                                    <div class="submit-btn mt-3">
                                        <button type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="contact-info">
                            <div class="row first-row">
                                <div class="title">
                                    <h3>Info</h3>
                                </div>
                                <div class="location">
                                    <div class="row">
                                        <div class="col-1 ms-2 icon"><i class="fa-solid fa-location-dot"></i></div>
                                        <div class="col-9 mt-2 detail">
                                            <p>Kamladi, Kathmandu, Nepal <br> Office hours: 9:30 AM - 5:00 PM (Sun -
                                                Fri)
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="phone-no">
                                    <div class="row">
                                        <div class="col-1 ms-2 icon"><i class="fa-solid fa-phone"></i></div>
                                        <div class="col-9 mt-2 detail">
                                            <p>+977 9813917313</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="email">
                                    <div class="row">
                                        <div class="col-1 ms-2 icon"><i class="fa-solid fa-envelope"></i></div>
                                        <div class="col-9 mt-2 detail">
                                            <p>info@sixsigmainc.com.np</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3 justify-content-center align-items-start">
                                    <div class="col-1 ms-1 icon"><a href="#" class="text-white"><i
                                                class="fa-brands fa-twitter"></i></a></div>
                                    <div class="col-1 ms-1 icon"><a href="#" class="text-white"><i
                                                class="fa-brands fa-instagram"></i></a></div>
                                    <div class="col-1 ms-1 icon"><a href="#" class="text-white"><i
                                                class="fa-brands fa-facebook-f"></i></a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 last-row">
                    </div>
                </div>
            </div>
        </div>


        {{-- Job Opening - Section --}}
        <div class="jobopening-section">
            <div class="container">
                <div class="row text-center">
                    <div class="heading">
                        <h3>Job Opening</h3>
                    </div>

                    <div class="row jo-row mt-5">
                        @foreach ($jobopening as $value)
                            <div class="col-md-4 box">
                                <div class="row jo-detail">
                                    <div class="jo-title text-left">
                                        <h3>{!! $value->position_name !!}</h3>
                                    </div>
                                    <div class="jo-date">
                                        <h6>{{ date('jS F, Y', strtotime($value->created_at)) }}</h6>
                                    </div>
                                    <div class="jo-vacency">
                                        <h4>{{ $value->vacancy_no }}</h4>
                                    </div>
                                    <div class="button">
                                        <a href="#" class="btn btn-outline-danger">View Details</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
        {{-- End --}}


    </div>

    <!--Main Section End-->
@endsection
