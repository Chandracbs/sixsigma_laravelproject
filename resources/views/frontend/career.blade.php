@extends('frontend.master')

@section('content')

    <!-- Hero -->
    <div class="careers-hero  text-start bg-image">
        <div class="mask h-100">
            <div class="hero-contain d-flex justify-content-center align-items-center h-100">
                <div class="row w-100">
                    <div class="col-lg-6 mt-5 order-lg-last" style="width: 450px;">
                        <h1 class="mb-3 text-white text-center mt-5">Careers</h1>
                        <h6 class="mb-3 text-white fw-light" style="text-align: justify;">Lorem ipsum dolor sit,
                            amet
                            consectetur adipisicing elit. Repudiandae
                            eum, laborum dignissimos quaerat pariatur libero a porro repellat sit vero?</h6>
                    </div>
                    <div class="col-lg-6 hero-subimage order-lg-first">
                        <img src="assets/images/Careers/Vector 4.png" alt="" class="hero-subimg img-fluid">
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
                                        <img src="assets/images/Careers/why work with us/ph_trophy.png" class="w-100"
                                            alt="">
                                    </div>
                                    <div class="col-md-10 detail">
                                        <h5>Experence and Experience</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ratione
                                            reiciendis officiis minima repellat necessitatibus voluptatem maxime
                                            sequi
                                            mollitia autem </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 box">
                                <div class="row">
                                    <div class="col-md-2 icon">
                                        <img src="assets/images/Careers/why work with us/ph_trophy.png" class="w-100"
                                            alt="">
                                    </div>
                                    <div class="col-md-10 detail">
                                        <h5>Experence and Experience</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ratione
                                            reiciendis officiis minima repellat necessitatibus voluptatem maxime
                                            sequi
                                            mollitia autem </p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 box">
                                <div class="row">
                                    <div class="col-md-2 icon">
                                        <img src="assets/images/Careers/why work with us/icon-park-outline_delivery.png"
                                            class="w-100" alt="">
                                    </div>
                                    <div class="col-md-10 detail">
                                        <h5>Experence and Experience</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ratione
                                            reiciendis officiis minima repellat necessitatibus voluptatem maxime
                                            sequi
                                            mollitia autem </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 box">
                                <div class="row">
                                    <div class="col-md-2 icon">
                                        <img src="assets/images/Careers/why work with us/icons8_idea.png" class="w-100"
                                            alt="">
                                    </div>
                                    <div class="col-md-10 detail">
                                        <h5>Experence and Experience</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ratione
                                            reiciendis officiis minima repellat necessitatibus voluptatem maxime
                                            sequi
                                            mollitia autem </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 box">
                                <div class="row">
                                    <div class="col-md-2 icon">
                                        <img src="assets/images/Careers/why work with us/icons8_idea.png" class="w-100"
                                            alt="">
                                    </div>
                                    <div class="col-md-10 detail">
                                        <h5>Experence and Experience</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ratione
                                            reiciendis officiis minima repellat necessitatibus voluptatem maxime
                                            sequi
                                            mollitia autem </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 box">
                                <div class="row">
                                    <div class="col-md-2 icon">
                                        <img src="assets/images/Careers/why work with us/icon-park-outline_delivery.png"
                                            class="w-100" alt="">
                                    </div>
                                    <div class="col-md-10 detail">
                                        <h5>Experence and Experience</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ratione
                                            reiciendis officiis minima repellat necessitatibus voluptatem maxime
                                            sequi
                                            mollitia autem </p>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>



            <!-- Job Opening Section Start -->
            <div class="jo-section" id="openings">
                <div class="title text-center">
                    <h1>Job Openings</h1>
                </div>

                <div class="row jo-row mt-5">
                    @foreach ($jobopening as $value)
                    <div class="col-md-4 box">
                        <div class="row jo-detail">
                            <div class="jo-title text-left">
                                <h3>{!!$value->position_name!!}</h3>
                            </div>
                            <div class="jo-date">
                                <h6>{{ date('jS F, Y', strtotime($value->created_at)) }}</h6>
                            </div>
                            <div class="jo-vacency">
                                <h4>{{$value->vacancy_no}}</h4>
                            </div>
                            <div class="button">
                                <a href="#" class="btn btn-outline-danger">View Details</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            {{-- End --}}
        </div>



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
                        <img src="assets/images/Careers/hiring/pepicons-pencil_cv.png" alt="">
                    </div>
                    <div class="title">
                        <h4>Submit Your CV</h4>
                    </div>
                </div>

                <div class="submit-cv box">
                    <div class="icon">
                        <img src="assets/images/Careers/hiring/interview (1) 1.png" alt="">
                    </div>
                    <div class="title">
                        <h4>Phone Interview</h4>
                    </div>
                </div>

                <div class="submit-cv box">
                    <div class="icon">
                        <img src="assets/images/Careers/hiring/interview 1.png" alt="">
                    </div>
                    <div class="title">
                        <h4>Interview Schedule</h4>
                    </div>
                </div>

                <div class="submit-cv box">
                    <div class="icon">
                        <img src="assets/images/Careers/hiring/check-list 1.png" alt="">
                    </div>
                    <div class="title">
                        <h4>Selection Status</h4>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection

{{-- @section('script')
<script>
    window.addEventListener('DOMContentLoaded', function() {
    var hash = window.location.hash;
    if (hash) {
      var element = document.querySelector(hash);
      if (element) {
        element.scrollIntoView();
      }
    }
  });

</script>
@endsection --}}
