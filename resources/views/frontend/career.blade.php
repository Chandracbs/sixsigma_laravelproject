@extends('frontend.master')

@section('content')
    <!-- Hero -->
    <div class="careers-hero  text-start bg-image">
        <div class="mask h-100">
            <div class="hero-contain d-flex justify-content-center align-items-center h-100">
                <div class="row w-100">
                    <div class="col-lg-6 mt-5 order-lg-last" style="width: 450px;">
                        <h1 class="mb-3 text-white text-center mt-5">Careers</h1>
                        <h6 class="mb-3 text-white fw-light" style="text-align: justify;">Become a part of our vibrant team and start a fulfilling career with us. Discover intriguing chances, develop your talents, and have a significant effect in a supportive and creative workplace. </h6>
                    </div>
                    <div class="col-lg-6 hero-subimage order-lg-first">
                        <img src="{{asset('assets/images/Careers/Vector 4.png')}}" alt="Image" class="hero-subimg img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero -->

    <div class="careers-main">
        <div class="container">
            <div class="wwwu-section">
                <div class="row">
                    <div class="title text-center">
                        <h1>Why Work With Us?</h1>
                    </div>

                    <div class="wwwu-detail mt-5">
                        <div class="row box-row">

                            <div class="col-md-4 box">
                                <div class="row">
                                    <div class="col-md-2 icon">
                                        <img src="{{asset('')}}" class="w-100"
                                            alt="Image">
                                    </div>
                                    <div class="col-md-10 detail">
                                        <h5>Expertise that Drives Results</h5>
                                        <p>With a team of highly skilled professionals and a wealth of industry experience, we bring deep expertise to the table. Our knowledge and skills enable us to deliver exceptional results and drive tangible outcomes for our clients with desired solutions.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 box">
                                <div class="row">
                                    <div class="col-md-2 icon">
                                        <img src="{{asset('assets/images/Careers/why work with us/ph_trophy.png')}}" class="w-100"
                                            alt="Image">
                                    </div>
                                    <div class="col-md-10 detail">
                                        <h5>Innovative Solutions for Complex Challenges</h5>
                                        <p>We thrive on tackling complex challenges head-on. Our innovative mindset allows us to think outside the box and develop creative solutions that address your unique business needs, helping you stay ahead in a competitive landscape.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 box">
                                <div class="row">
                                    <div class="col-md-2 icon">
                                        <img src="{{asset('assets/images/Careers/why work with us/icon-park-outline_delivery.png')}}"
                                            class="w-100" alt="Image">
                                    </div>
                                    <div class="col-md-10 detail">
                                        <h5>Collaborative Approach for Client Success</h5>
                                        <p>We believe in the power of collaboration. By working closely with our clients, we foster strong partnerships that lead to mutual success. We listen to your goals, understand your vision, and align with your objectives, ensuring your satisfaction.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 box">
                                <div class="row">
                                    <div class="col-md-2 icon">
                                        <img src="{{asset('assets/images/Careers/why work with us/icons8_idea.png')}}" class="w-100"
                                            alt="Image">
                                    </div>
                                    <div class="col-md-10 detail">
                                        <h5>Commitment to Quality and Excellence</h5>
                                        <p>Quality is at the core of everything we do. We adhere to rigorous quality standards and employ best practices throughout our processes to deliver exceptional solutions. Our commitment to excellence is unwavering, and we continuously strive to exceed expectations.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 box">
                                <div class="row">
                                    <div class="col-md-2 icon">
                                        <img src="{{asset('assets/images/Careers/why work with us/icons8_idea.png')}}" class="w-100"
                                            alt="Image">
                                    </div>
                                    <div class="col-md-10 detail">
                                        <h5>Agile and Adaptive to Change</h5>
                                        <p>In a rapidly evolving digital landscape, agility is crucial. We embrace change and adapt quickly to new technologies, trends, and client requirements. Our agile approach ensures that we can respond effectively to your evolving needs, delivering flexible and future-proof solutions.
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 box">
                                <div class="row">
                                    <div class="col-md-2 icon">
                                        <img src="{{asset('assets/images/Careers/why work with us/icon-park-outline_delivery.png')}}"
                                            class="w-100" alt="Image">
                                    </div>
                                    <div class="col-md-10 detail">
                                        <h5>Customer-Centric Focus</h5>
                                        <p>Your success is our priority. We have a strong customer-centric focus and go above and beyond to ensure your satisfaction. From the initial consultation to post-project support, we are dedicated to providing an exceptional customer experience and building long-lasting relationships based on trust and mutual growth.
                                        </p>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>


            <!-- Job Opening Section Start -->
            @if($jobopening->count())
            <div class="jo-section" id="openings">
                <div class="title text-center">
                    <h1>Job Openings</h1>
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
                                    <h4>No. of Vacancy:{{ $value->vacancy_no }}</h4>
                                </div>

                                @if(!empty($value->image))
                                <button class="btn btn-outline-danger w-50 openButton" id="openButton" onclick="myFunction(`/{{$value->image->image_location}}/{{$value->image->image_name}}`)">View Details</button>
                                @else
                                @endif
                            </div>
                        </div>
                    @endforeach

                    <div id="imagePopup" class="popup imagePopup">
                        <!-- Popup content -->
                        <div class="popup-content">
                        <!-- Close button -->
                        <span class="close">&times;</span>
                        <!-- Image -->

                        <img id="popupImage" class="popupImage" src="" alt="Popup Image">
                        </div>
                    </div>
                </div>
            </div>
            @endif



        <div class="ohp-section">
            <div class="title">
                <h1>Our Hiring Process</h1>
            </div>

            <div class="ohp-main">
                <div class="submit-cv box">
                    <div class="circle">
                        <h3>1</h3>
                    </div>
                </div>
                <h5 style="color: aliceblue; margin-top: 20px;">-----------------------></h5>

                <div class="submit-cv box">
                    <div class="circle">
                        <h3>2</h3>
                    </div>
                </div>
                <h5 style="color: aliceblue; margin-top: 20px;">--------------------------></h5>

                <div class="submit-cv box">
                    <div class="circle">
                        <h3>3</h3>
                    </div>
                </div>
                <h5 style="color: aliceblue; margin-top: 20px;">--------------------------></h5>
                <div class="submit-cv box">
                    <div class="circle">
                        <h3>4</h3>
                    </div>
                </div>
            </div>
            <div class="ohp-detail">
                <div class="submit-cv box">
                    <div class="icon">
                        <img src="{{asset('assets/images/Careers/hiring/pepicons-pencil_cv.png')}}" alt="Image">
                    </div>
                    <div class="title">
                        <h4>Submit Your CV</h4>
                    </div>
                </div>

                <div class="submit-cv box">
                    <div class="icon">
                        <img src="{{asset('assets/images/Careers/hiring/interview (1) 1.png')}}" alt="Image">
                    </div>
                    <div class="title">
                        <h4>Phone Interview</h4>
                    </div>
                </div>

                <div class="submit-cv box">
                    <div class="icon">
                        <img src="{{asset('assets/images/Careers/hiring/interview 1.png')}}" alt="Image">
                    </div>
                    <div class="title">
                        <h4>Interview Schedule</h4>
                    </div>
                </div>

                <div class="submit-cv box">
                    <div class="icon">
                        <img src="{{asset('assets/images/Careers/hiring/check-list 1.png')}}" alt="Image">
                    </div>
                    <div class="title">
                        <h4>Selection Status</h4>
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection

@section('script')
    <script>
      function myFunction(image) {

    const imagePopup = document.getElementById("imagePopup");
    const popupImage = document.getElementById("popupImage");
    const closeButton = document.querySelector(".close");

      popupImage.src = image;
      imagePopup.style.display = "block";


      closeButton.addEventListener("click", function() {
      imagePopup.style.display = "none";
    });
  }

    </script>


@endsection
