@extends('frontend.master')

@section('content')
    <!-- Hero -->
    <div class="services-hero  text-start bg-image">
        <div class="mask h-100">
            <div class="hero-contain d-flex justify-content-center align-items-center h-75">
                <div class="row w-100">
                    <div class="col-md-12" style="width: 600px;">
                        <h1 class="mb-3 text-white text-center">Contact Us</h1>
                        <h6 class="mb-3 text-white fw-light text-center">Our committed team is prepared to help you with great service and cutting-edge solutions. Get in touch with us right away for a smooth and effective partnership.</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero -->


    <div class="contactus-main" >
        <div class="container">

            <div class="contact-form-section">
                <div class="form-row row p-5">
                    <div class="col-md-6 contact-details">
                        <div class="row justify-content-center">
                            <div class="title">
                                <h1>Have a Project?</h1>
                                <h5>We'd Love to Hear From You.</h5>
                            </div>
                            <div class="row contact mt-4">
                                <div class="location">
                                    <div class="row align-items-center box">
                                        <div class="col-1 ms-3 icon"><i class="fa-solid fa-location-dot"></i></div>
                                        <div class="col-9 mt-3 detail" >
                                            <p>Kamladi, Kathmandu, Nepal <br> Office hours: 9:00 AM - 5:00 PM (Sun -
                                                Fri)
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="phone-no ">
                                    <div class="row align-items-center p-2 box">
                                        <div class="col-1 ms-2 icon"><i class="fa-solid fa-phone"></i></div>
                                        <div class="col-9 mt-3 detail">
                                            <p><a href="tel:+977 9813917313" class="col-md-10" style="text-decoration: none; color:#0F3C54;">+977 9813917313</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="email">
                                    <div class="row align-items-center p-2 box">
                                        <div class="col-1 ms-2 icon"><i class="fa-solid fa-envelope"></i></div>
                                        <div class="col-9 mt-3 detail">
                                            <p><a href="mailto:info@sixsigmainc.com.np" class="col-md-10 mb-2" style="text-decoration: none; color:#0F3C54;">info@sixsigmainc.com.np</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-- Admin Panel - Contact Us (Backend) --}}
                    <div class="col-md-6 contact-form" id="validateform">
                        <form action="{{ route('contactUs.store') }}" method="POST" id="contactform">
                            @csrf
                            <div class="message-row">
                                <div class="row">
                                    <div class="mt-2 col-lg-6 full-name box">
                                        <label for="">Full Name</label>
                                        <input type="text" name="name" value="{{ old('name') }}" required>
                                        @if ($errors->has('name'))
                                            <span class="text-xs text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                    <div class="mt-2 col-lg-6 phone-number box">
                                        <label for="">Phone Number</label>
                                        <input type="text" name="phone" value="{{ old('phone') }}" required>
                                        @if ($errors->has('phone'))
                                            <span class="text-xs text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mt-2 col-lg-6 email box">
                                        <label for="">Email</label>
                                        <input type="text" name="email" value="{{ old('email') }}" required>
                                        @if ($errors->has('email'))
                                            <span class="text-xs text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="mt-2 col-lg-6 your-intrest box">
                                        <div class="form-group">
                                            <label for="">Select Your Interest</label>
                                            <select class="form-control" id="exampleFormControlSelect1" name="interest"
                                                value="{{ old('interest') }}">
                                                <option value="Web Development">Web Development</option>
                                                <option value="Frontend">Frontend</option>
                                                <option value="Laravel Development">Laravel Development</option>
                                                <option value="UI/UX">UI/UX</option>
                                            </select>
                                            @if ($errors->has('interest'))
                                                <span class="text-xs text-danger">{{ $errors->first('interest') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="message" >
                                    <label for="">Message</label>
                                    <textarea name="message" id="" cols="10" rows="10" required>{{ old('message') }}</textarea>
                                    @if ($errors->has('message'))
                                        <span class="text-xs text-danger">{{ $errors->first('message') }}</span>
                                    @endif
                                </div>
                                <button class="btn btn-success text-center mt-4" type="submit" onclick="scrollToDiv()">Send
                                    Message</button>
                                {{-- <div class="btn btn-success text-center mt-4">Send Message</div> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="map-section">
                <div class="row map-row">
                    <div class="heading">
                        <h1>Find us on the Map</h1>
                    </div>

                    <div class="map mt-5">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                {{-- <iframe class="gmap_iframe"
                                frameborder="0"
                                scrolling="no"
                                marginheight="0"
                                marginwidth="0"
                                allowfullscreen
                                    src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Japan&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                                </iframe> --}}
                                <iframe class="gmap_iframe" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14129.116604335699!2d85.3192814!3d27.7086661!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1995bf18040f%3A0xe32201383f17fb47!2sSix%20Sigma%20Inc.%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1688364515897!5m2!1sen!2snp"
                                width="600"
                                height="450"
                                 style="border:0;"
                                  allowfullscreen=""
                                  loading="lazy"
                                   referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- Consultation - Section --}}
            <div class="consultation-section" id="consultationform">
                <div class="consult-row" id="validateconsultationform">
                    <div class="heading">
                        <h1>Need a Consultation?</h1>
                    </div>
                    <div class="subheading">
                        <h5>Drop us a line. We are here to answer your question 24/7.</h5>
                    </div>

                    <div class="row ans-que mt-4">
                        <div class="col-md-9">
                            <form action="{{ route('consultation.send') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-3">
                                        <input class="form-control" type="text" placeholder="Full Name"
                                            name="c_name" required value="{{old('c_name')}}">
                                        @if ($errors->has('c_name'))
                                            <span class="text-sm text-danger">{{ $errors->first('c_name') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" type="text" placeholder="Company Name"
                                            name="company_name" value="{{old('company_name')}}" required>
                                        @if ($errors->has('company_name'))
                                            <span class="text-sm text-danger">{{ $errors->first('company_name') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" type="text" placeholder="Work Email"
                                            name="c_email" value="{{old('c_email')}}" required>
                                        @if ($errors->has('c_email'))
                                            <span class="text-sm text-danger">{{ $errors->first('c_email') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" type="text" placeholder="Contact No."
                                            name="c_contact" value="{{old('c_contact')}}" required>
                                        @if ($errors->has('c_contact'))
                                            <span class="text-sm text-danger">{{ $errors->first('c_contact') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="help-message mt-3">
                                    <textarea name="c_message" id="" cols="30" rows="10" placeholder="How can we help you?" required>{{old('c_message')}}</textarea>
                                    @if ($errors->has('c_message'))
                                        <span class="text-sm text-danger">{{ $errors->first('c_message') }}</span>
                                    @endif
                                </div>

                                <div class="submit-btn mt-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3 our-social-media">
                            <div class="row">
                                <div class="title">
                                    <h5>Our Social Medias</h5>
                                </div>
                                <div class="row social-media">
                                    <div class="col-md-1 ms-3 icon"><a href="https://www.youtube.com/@GadgetFrame" target="_blank" class="text-white"><i
                                                class="fa-brands fa-youtube"></i></a></div>
                                    <div class="col-md-1 ms-3 icon"><a href="https://www.instagram.com/sixsigmainc/" target="_blank" class="text-white"><i
                                                class="fa-brands fa-instagram"></i></a></div>
                                    <div class="col-md-1 ms-3 icon"><a href="https://www.facebook.com/sixsigmaincofficial/" target="_blank" class="text-white"><i
                                                class="fa-brands fa-facebook-f"></i></a></div>
                                </div>

                                <div class="jointeam mt-4">
                                    <h5>Join Our Team</h5>
                                    <a class="box-botton" href="{{ route('career') }}#openings">Check our open vacancies
                                        <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

