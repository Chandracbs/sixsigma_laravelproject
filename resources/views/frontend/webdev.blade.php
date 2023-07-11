@extends('frontend.master')

@section('content')

<div class="web-development-main">
    <div class="container">

        <div class="wd-section">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="row">
                        <div class="title">
                            <h3>Web Development</h3>
                        </div>
                        <div class="detail">
                            <p>We are a highly skilled team of web developers dedicated to crafting user-friendly
                                website design services that consistently surpass expectations and deliver
                                exceptional results.</p>
                        </div>
                        <div>
                            {{-- <a href="#" class="btn mt-3">Get Started</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="wd-image">
                        <img src="{{asset('assets/images/web development/web-development 1.png')}}" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="hwdi-section">
            <div class="hwdi-row row">
                <div class="heading">
                    <div class="title">
                        <h3>How We Do It</h3>
                    </div>
                    <div class="head-detail">
                        <p>Our process involves collecting specifications, producing wireframes, designing adaptable
                            layouts, implementing frontend and backend features, and conducting comprehensive
                            testing.</p>
                    </div>
                </div>
            </div>

            <div class="row frontend-main mt-5 align-items-center">
                <div class="col-md-4">
                    <div class="frontend-image">
                        <img src="{{asset('assets/images/web development/front-end.png')}}" class="w-100" alt="">
                    </div>
                </div>
                <div class="size-box col-md-1"></div>
                <div class="col-md-7 frontend-contain">
                    <div class="title mb-3">
                        <h3>Front-end Development</h3>
                    </div>
                    <div class="detail">
                        <p>Developing a client-side for a web solution necessitates technical expertise, creative
                            thinking, and a profTo construct the client side of a web solution, one needs technical
                            proficiency, creativity, and a comprehensive grasp of user requirements. Leveraging our
                            expertise, we develop visually appealing interfaces that load swiftly and provide an
                            excellent experience across different devices.ound comprehension of user requirements.
                            With our extensive experience, we excel at crafting visually appealing interfaces that
                            load quickly and deliver an exceptional user experience across various devices.</p>
                    </div>
                </div>
            </div>


            <div class="row backend-main mt-5 align-items-center">
                <div class="col-md-7 backend-contain">
                    <div class="title mb-3">
                        <h3>Back-end Development</h3>
                    </div>
                    <div class="detail">
                        <p>Developing the back end of a web solution requires technical expertise, problem-solving
                            abilities, and a thorough understanding of system requirements. With our experience, we
                            architect robust server-side components, design efficient databases, and build powerful
                            APIs to ensure seamless data management and effective business logic implementation.</p>
                    </div>
                </div>
                <div class="size-box col-md-1"></div>
                <div class="col-md-4">
                    <div class="backend-image">
                        <img src="{{asset('assets/images/web development/backend.png')}}" class="w-100" alt="">
                    </div>
                </div>
            </div>

            <div class="row frontend-main mt-5 align-items-center">
                <div class="col-md-4">
                    <div class="frontend-image">
                        <img src="{{asset('assets/images/web development/front-end.png')}}" class="w-100" alt="">
                    </div>
                </div>
                <div class="size-box col-md-1"></div>
                <div class="col-md-7 frontend-contain">
                    <div class="title mb-3">
                        <h3>Responsive Web Design</h3>
                    </div>
                    <div class="detail">
                        <p>Designing responsive websites demands a combination of technical skills, creative flair,
                            and a deep understanding of user behavior across devices. With our experience, we create
                            visually stunning interfaces that adapt seamlessly to different screen sizes, ensuring
                            optimal user experience and accessibility.</p>
                    </div>
                </div>
            </div>


            <div class="row backend-main mt-5 align-items-center">
                <div class="col-md-7 backend-contain">
                    <div class="title mb-3">
                        <h3>Database Design</h3>
                    </div>
                    <div class="detail">
                        <p>Designing a database necessitates expertise in data modeling, normalization, and
                            efficient storage strategies. Our experience allows us to create well-structured and
                            scalable database architectures that optimize data retrieval, storage, and management,
                            ensuring reliability and performance for web solutions.</p>
                    </div>
                </div>
                <div class="size-box col-md-1"></div>
                <div class="col-md-4">
                    <div class="backend-image">
                        <img src="{{asset('assets/images/web development/backend.png')}}" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </div>

        {{-- FAQs - Section --}}
        <div class="faq-section">
            <div class="title">
                <h3>Frequently Asked Questions (FAQs)</h3>
            </div>

            <div class="faq-main mt-5">
                <div class="faq-row row align-items-center justify-content-center">

                    @foreach($faq as $index => $value)
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-heading{{ $index }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapse{{ $index }}" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapse{{ $index }}">
                                        {{ $value->question }}
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse{{ $index }}" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-heading{{ $index }}">
                                    <div class="accordion-body">
                                        <p>{!! $value->answer !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                    {{-- <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseThree">
                                    What platform do you build your websites on?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body">
                                    <p>There are a lot of platforms in the market that help in building a creative and professionally designed website, but nearly half of the websites on the internet are built on WordPress. We are experts in building websites on the following platforms, WordPress, Magento, Laravel. Depending on your requirements, we would suggest the best suitable platform.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapsefour" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapsefour">
                                    What platform do you build your websites on?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapsefour" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingfour">
                                <div class="accordion-body">
                                    <p>There are a lot of platforms in the market that help in building a creative and professionally designed website, but nearly half of the websites on the internet are built on WordPress. We are experts in building websites on the following platforms, WordPress, Magento, Laravel. Depending on your requirements, we would suggest the best suitable platform.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingfive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapsefive" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapsefive">
                                    What platform do you build your websites on?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapsefive" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingfive">
                                <div class="accordion-body">
                                    <p>There are a lot of platforms in the market that help in building a creative and professionally designed website, but nearly half of the websites on the internet are built on WordPress. We are experts in building websites on the following platforms, WordPress, Magento, Laravel. Depending on your requirements, we would suggest the best suitable platform.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingsix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapsesix" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapsesix">
                                    What platform do you build your websites on?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapsesix" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingsix">
                                <div class="accordion-body">
                                    <p>There are a lot of platforms in the market that help in building a creative and professionally designed website, but nearly half of the websites on the internet are built on WordPress. We are experts in building websites on the following platforms, WordPress, Magento, Laravel. Depending on your requirements, we would suggest the best suitable platform.</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>

        </div>



    </div>
</div>


@endsection
