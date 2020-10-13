@extends('web.templet.master')

    {{-- @include('web.include.seo') --}}

    @section('seo')
    @endsection

    @section('content')
        <!--slider wrapper start-->
        <div class="slider_main_wrapper">
            <div class="cc_slider_img_section">
                <div class="owl-carousel owl-theme">
                    <div class="item cc_main_slide1">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12 col-12">
                                    <div class="cc_slider_cont1_wrapper">
                                        <div class="cc_slider_cont1">
                                            <div class="medi">
                                                <h1 data-animation-in="fadeInDown" data-animation-out="animate-out fadeOutDown">ICU<span>Home Care</span></h1></div>
                                            <h2 data-animation-in="fadeInDown" data-animation-out="animate-out fadeOutDown">total health Home care </h2>
                                            <ul>
                                                <li data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutLeft"><a href="#">Contact Us</a></li>
                                                <li data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutLeft"><a href="#">Call Us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item cc_main_slide2">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12 col-12">
                                    <div class="cc_slider_cont1_wrapper">
                                        <div class="cc_slider_cont1">
                                            <div class="medi">
                                                <h1 data-animation-in="fadeInDown" data-animation-out="animate-out fadeOutDown">ICU<span>Home Care</span></h1></div>
                                            <h2 data-animation-in="fadeInDown" data-animation-out="animate-out fadeOutDown">Home Care Solution</h2>
                                            <ul>
                                                <li data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutLeft"><a href="#">Contact Us</a></li>
                                                <li data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutLeft"><a href="#">Call Us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item cc_main_slide3">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12 col-12">
                                    <div class="cc_slider_cont1_wrapper">
                                        <div class="cc_slider_cont1">
                                            <div class="medi">
                                                <h1 data-animation-in="fadeInDown" data-animation-out="animate-out fadeOutDown">ICU<span>Home Care</span></h1></div>
                                            <h2 data-animation-in="fadeInDown" data-animation-out="animate-out fadeOutDown">Intensive Home Care</h2>
                                            <ul>
                                                <li data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutLeft"><a href="#">Contact Us</a></li>
                                                <li data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutLeft"><a href="#">Call Us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--slider wrapper end-->

        <!--about us wrapper start-->
        <div class="about_wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="abt_img abt_box">
                            <img src="{{asset('web/images/abt_img.jpg')}}" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 abt_section">
                        <div class="abt_heading_wrapper">
                            <h1 class="med_bottompadder20">about medical</h1>
                            <img src="{{asset('web/images/line.png')}}" alt="title" class="med_bottompadder20">
                        </div>
                        <div class="abt_txt">
                            <p class="med_toppadder20 text-justify">We are one of the India’s best home isolation and quarantine services with the highest success rate to manage 530+ patients at home with zero casualties. Since 2020, Quickwell Remedy Healthcare is known for setting up high quality ICU setup with round o’clock monitoring under supervision of dedicated medical team and critical care doctors and also we are into online pharmacy with the wide range of the OTC medicines and prescription. We are the one stop solutions in the field of the pharmacy too delivering in the in 100+ cities like - Delhi, Mumbai, and Bangalore. </p>
                            <p class="text-justify">Quickwell Remedy Healthcare has a strong team of 300+ people serving premium quality healthcare services Pan India, and operating from major metropolitan cities and has offices in Gurugram, Delhi-NCR and Patna. Till now, we have managed 2000+ critical patients at home. Quickwell Remedy has a motive to bring World Class Patient care at Home with best quality standards following all related medical protocols at economic pricing.</p>
                            <p class="text-justify">Quickwell Remedy Healthcare also provides Doctor’s consultation at home and Pathology at home. Our various packages promise to offer full medical check-up to help you take care of any health risks on time .</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--about us wrapper end-->

        <!--team wrapper start-->
        <div class="pricing_section med_toppadder30 med_bottompadder100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-lg-offset-2">
                        <div class="team_heading_wrapper med_bottompadder50">
                            <h1 class="med_bottompadder20">Healthcare Packages</h1>
                            <img src="{{asset('web/images/Icon_team.png')}}" alt="line" class="med_bottompadder20">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="pricing_box1_wrapper">
                            <div class="box1_heading_wrapper">
                                <h1>Covid 19 Care <br>
                                <small style="font-size: 60%;">(Covid19 Home Isolation and Quarantine)</small></h1>
                            </div>
                            <div class="price_box1_wrapper">
                                <div class="price_box1">
                                    <h1><sub>₹</sub><span>{{ $package1->amount }}</span></h1>
                                    <p>/ per Day</p>
                                </div>
                            </div>
                            <div class="pricing_cont_wrapper">
                                <h1>features</h1>
                                <div class="pricing_cont">
                                    <ul>
                                        <li>Oxygen Concentrator/ cylinder - 5 LIT. </li>
                                        <li>Cardiac Monitor. </li>
                                        <li>PPE KIT. </li>
                                        <li>Medical Consumable – N95 Mask, Sanitizer, Gloves etc. </li>
                                        <li>Nurse 24 Hours Stay. </li>
                                        <li>Dr. Consultation – Online/ WhatsApp. </li>
                                        <li>Essential Medical kit -Infrared Thermometer, Pulse Oximeter, Stethoscope, BP Machine, Steamer.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pricing_btn_wrapper">
                                <div class="pricing_btn">
                                    <ul>
                                        <li><a href="{{route('web.package.package_detail',  ['id'=> encrypt($package1->id)])}}">View Detail</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="pricing_box1_wrapper">
                            <div class="box1_heading_wrapper">
                                <h1 style="padding: 34px 0;">ICU at Home </h1>
                            </div>
                            <div class="price_box1_wrapper">
                                <div class="price_box1">
                                    <h1><sub>₹</sub><span>{{ $package2->amount }}</span></h1>
                                    <p>/ per Day</p>
                                </div>
                            </div>
                            <div class="pricing_cont_wrapper" style="margin-bottom: 59px;">
                                <h1>features</h1>
                                <div class="pricing_cont">
                                    <ul>
                                        <li>Free Assessment</li>
                                        <li>Transparent care</li>
                                        <li>Testing</li>
                                        <li>Setting up medical equipment</li>
                                        <li>Stabilization of patient </li>
                                        <li>Regular Update  </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pricing_btn_wrapper">
                                <div class="pricing_btn">
                                    <ul>
                                        <li><a href="{{route('web.package.package_detail',  ['id'=> encrypt($package2->id)])}}">View Detail</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--team wrapper end-->

        <!-- counter wrapper start-->
        <div class="counter_section">
            <div class="counter_overlay">
                <section class="counter-section section-padding" data-stellar-background-ratio="0.5">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="icon">
                                    <a href="#"><img src="{{asset('web/images/png/patient.png')}}" alt="img" class="img-responsive"></a>
                                </div>
                                <div class="count-description">
                                    <span class="timer">1300</span>+
                                    <h5 class="con1">Satisfied Patients</h5>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="icon">
                                    <a href="#"><img src="{{asset('web/images/png/corona.png')}}" alt="img" class="img-responsive"></a>
                                </div>
                                <div class="count-description">
                                    <span class="timer">10</span>+
                                    <h5 class="con2">COVID 19 Care</h5>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="icon">
                                    <a href="#"><img src="{{asset('web/images/png/doctor.png')}}" alt="img" class="img-responsive"></a>
                                </div>
                                <div class="count-description">
                                    <span class="timer">30</span>
                                    <h5 class="con2">doctor's team</h5>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="icon">
                                    <a href="#"><img src="{{asset('web/images/png/heart.png')}}" alt="img" class="img-responsive"></a>
                                </div>
                                <div class="count-description">
                                    <span class="timer">1500</span>+
                                    <h5 class="con4">Overall Client</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- counter wrapper end-->

        <!--testimonial wrapper start-->
        <div class="testimonial_wrapper med_toppadder100">
            <div class="test_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-lg-offset-2">
                        <div class="team_heading_wrapper med_bottompadder50 wow fadeInDown" data-wow-delay="0.5s">
                            <h1 class="med_bottompadder20 text-white">our News & blog</h1>
                            <img src="{{asset('web/images/Icon_team.png')}}" alt="line" class="med_bottompadder20">
                        </div>
                    </div>
                    @if(isset($blogs) && !empty($blogs))
                    @foreach ($blogs as $blog)
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                            <div class="blog_about">
                                <div class="blog_img">
                                    <figure>
                                        <img src="{{asset('admin/post/thumb/'.$blog->image)}}" alt="img" class="img-responsive">
                                    </figure>
                                </div>
                                <div class="blog_txt">
                                    <h1><a href="{{route('web.single_post',['slug'=>urlencode($blog->slug),'id'=>$blog->id])}}">{{ $blog->titile }}</a></h1>
                                    <div class="blog_txt_info">
                                        <ul>
                                            <li>WRITTEN ON: {{ date_format($blog->created_at, 'M m, Y') }}</li>
                                        </ul>
                                    </div>
                                    <p>{!! Str::words($blog->body, 25, '...') !!}</p>
                                    <a href="{{route('web.single_post',['slug'=>urlencode($blog->slug),'id'=>$blog->id])}}">Read More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @else
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                            <div class="blog_txt">
                                <h3>No Blog Post Found!</h3>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- testimonial wrapper end-->

        <!-- booking wrapper start -->
        <div class="booking_wrapper med_toppadder100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-lg-offset-2">
                        <div class="team_heading_wrapper med_bottompadder50 wow fadeInDown" data-wow-delay="0.5s">
                            <h1 class="med_bottompadder20">Get in Touch</h1>
                            <img src="{{asset('web/images/Icon_team.png')}}" alt="line" class="med_bottompadder20">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">

                <form class="booking_box">
                    <div class="box_side_icon">
                        <img src="{{asset('web/images/Icon_bk.png')}}" alt="img">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12  col-12">
                                <div class="contect_form1">
                                    <input type="text" name="full_name" placeholder="Full Name" class="require">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  col-12">
                                <div class="contect_form1">
                                    <input type="text" name="email" placeholder="Email" class="require" data-valid="email" data-error="Email should be valid.">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  col-12">
                                <div class="contect_form1">
                                    <input type="text" name="city" placeholder="city" class="require">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  col-12">
                                <div class="contect_form1">
                                    <input type="text" name="contact_no" placeholder="Phone" class="require">
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12  col-12">
                                <div class="verify">
                                    <button type="button" class="btn">Verify</button>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12  col-12">
                                <div class="contect_form1">
                                    <input type="text" name="v-code" placeholder="Otp" class="inactive">
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12  col-12">
                                <div class="contect_form4">
                                    <textarea rows="4" name="message" placeholder="Message" class="require"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  col-12">
                                <div class="response"></div>
                                <div class="contect_btn">
                                    <button type="button" class="submitForm">Send a Message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="chat_box">
                    <div class="booking_box_2">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="booking_box_img">
                                    <img src="{{asset('web/images/booking_call.png')}}" alt="img" class="img-circle">
                                </div>
                                <div class="booking_chat">
                                    <h1>1800-419-4948</h1>
                                    <p>if urgent. Your personal case manager will ensure that you receive the best possible care.</p>
                                </div>
                                <div class="booking_btn">
                                    <ul>
                                        <li><a href="#">Call Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map_main_wrapper">
                <div id="map" style="width:100%; float:left; height:600px;"></div>
            </div>
        </div>
        <!--booking wrapper end-->

    @endsection

    @section('script') 
    @endsection
	