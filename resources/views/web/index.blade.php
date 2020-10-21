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
                                                <li data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutLeft"><a href="{{route('web.contact.contact')}}">Contact Us</a></li>
                                                <li data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutLeft"><a href="tel:1800-419-4948">Call Us</a></li>
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
                                                <li data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutLeft"><a href="{{route('web.contact.contact')}}">Contact Us</a></li>
                                                <li data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutLeft"><a href="tel:1800-419-4948">Call Us</a></li>
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
                                                <li data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutLeft"><a href="{{route('web.contact.contact')}}">Contact Us</a></li>
                                                <li data-animation-in="bounceInLeft" data-animation-out="animate-out bounceOutLeft"><a href="tel:1800-419-4948">Call Us</a></li>
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
        <div class="pricing_section med_toppadder30 med_bottompadder50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-lg-offset-2">
                        <div class="team_heading_wrapper med_bottompadder50">
                            <h1 class="med_bottompadder20">Healthcare Packages</h1>
                            <img src="{{asset('web/images/Icon_team.png')}}" alt="line" class="med_bottompadder20">
                        </div>
                    </div>
                    @if (isset($packages) && !empty($packages))
                        @foreach ($packages as $package)
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="pricing_box1_wrapper">
                                    <div class="box1_heading_wrapper">
                                        <h1>{{ $package->name }}<br>
                                        <small style="font-size: 60%;">(Covid19 Home Isolation and Quarantine)</small></h1>
                                    </div>
                                    <div class="price_box1_wrapper">
                                        <div class="price_box1">
                                            <h1><sub>₹</sub><span>{{ $package->amount }}</span></h1>
                                            <p>/ Day</p>
                                        </div>
                                    </div>
                                    <div class="pricing_cont_wrapper">
                                        <h1>features</h1>
                                        <div class="pricing_cont">
                                            {!! $package->feature !!}
                                        </div>
                                    </div>
                                    <div class="pricing_btn_wrapper">
                                        <div class="pricing_btn">
                                            <ul>
                                                <li><a href="{{route('web.package.package_detail',  ['slug'=>urlencode($package->slug), 'id'=> $package->id])}}">View Detail</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <h2 class="text-center">There's no Packages yet</h2>
                        </div>
                    @endif
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
        <div class="testimonial_wrapper med_toppadder30">
            <div class="test_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-lg-offset-2">
                        <div class="team_heading_wrapper wow fadeInDown" data-wow-delay="0.5s">
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
                                    <h1><a href="{{route('web.single_post',['slug'=>urlencode($blog->slug),'id'=>$blog->id])}}">{{ $blog->title }}</a></h1>
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
        <section class="booking_wrapper portfolio-area med_toppadder50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-lg-offset-2">
                        <div class="team_heading_wrapper wow fadeInDown" data-wow-delay="0.5s">
                            <h1 class="med_bottompadder20">Certification</h1>
                            <img src="{{asset('web/images/Icon_team.png')}}" alt="line" class="med_bottompadder20">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row portfoli_inner">
                            <div class="col-md-1 d-none d-lg-block"></div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6 portfolio-wrapper">
                                <div class="portfolio-thumb">
                                    <div class="port_img_wrapper">
                                        <img src="{{asset('web/images/certificate/1.jpg')}}" alt="filter_img">
                                    </div>
                                    <div class="portfolio_icon_wrapper_iv zoom_popup">
                                        <a class="img-link" href="{{asset('web/images/certificate/1.jpg')}}"> <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
    
                                    <div class="portfolio-content">
                                        <div class="portfolio-info_iv">
                                            <h3>BRIT QUALIS</h3>
                                            <p class="d-none d-sm-block">ISO 27001:2013 <br><strong>Quickwell Remedy Healthcare Pvt. Ltd.</strong></p>
                                        </div>
                                        <!-- portfolio-info -->
    
                                    </div>
                                    <!-- portfolio-content -->
    
                                </div>
                                <!-- /.portfolio-thumb -->
                            </div>
                            <div class="col-md-2 d-none d-lg-block"></div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6 portfolio-wrapper ">
                                <div class="portfolio-thumb">
                                    <div class="port_img_wrapper">
                                        <img src="{{asset('web/images/certificate/1.jpg')}}" alt="filter_img">
                                    </div>
                                    <div class="portfolio_icon_wrapper_iv zoom_popup">
                                        <a class="img-link" href="{{asset('web/images/certificate/1.jpg')}}"> <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
    
                                    <div class="portfolio-content">
                                        <div class="portfolio-info_iv">
                                            <h3>BRIT QUALIS</h3>
                                            <p class="d-none d-sm-block">ISO 27001:2013 <br><strong>Quickwell Remedy Healthcare Pvt. Ltd.</strong></p>
                                        </div>
                                        <!-- portfolio-info -->
    
                                    </div>
                                    <!-- portfolio-content -->
    
                                </div>
                                <!-- /.portfolio-thumb -->
                            </div>
                            <div class="col-md-1 d-none d-lg-block"></div>
                        </div>
                        <!--/#gridWrapper-->
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </section>
        <!-- testimonial wrapper end-->

        <!-- booking wrapper start -->
        <div class="booking_wrapper med_toppadder50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-lg-offset-2">
                        <div class="team_heading_wrapper wow fadeInDown" data-wow-delay="0.5s">
                            <h1 class="med_bottompadder20">Get in Touch</h1>
                            <img src="{{asset('web/images/Icon_team.png')}}" alt="line" class="med_bottompadder20">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">

                <form class="booking_box" method="POST" id="form-submit" name="form-submit">
                    <div class="box_side_icon">
                        <img src="{{asset('web/images/Icon_bk.png')}}" alt="img">
                        <div id="alert"></div>   
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  col-12">
                                <div class="contect_form1">
                                    <input type="text" name="full_name" id="full_name" required placeholder="Full Name" class="require">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  col-12">
                                <div class="contect_form1">
                                    <input type="email" name="email" id="email" required placeholder="Email" class="require" data-valid="email" data-error="Email should be valid.">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  col-12">
                                <div class="contect_form1">
                                    <input type="text" name="city" id="city" required placeholder="city" class="require">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  col-12">
                                <div class="contect_form1">
                                    <input type="number" name="mobile" id="mobile" required placeholder="Phone" class="require">
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12  col-12">
                                <div class="contect_form4">
                                    <textarea rows="4" name="message" id="message" placeholder="Message" class="require"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  col-12">
                                <div class="response"></div>
                                <div class="contect_btn">
                                    <button class="submitForm">Send a Message</button>
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14026.257501388622!2d77.0060658!3d28.492663!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1160f592af6358a0!2sQuickwell%20Remedy%20Healthcare%20Private%20Limited!5e0!3m2!1sen!2sin!4v1602763963342!5m2!1sen!2sin" height="450" frameborder="0" style="border:0;width:100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
        <!--booking wrapper end-->

    @endsection

    @section('script') 
        <script>
             $(function(){
               
               $('#form-submit').on('submit', function(e){
                   e.preventDefault();
                   var data = $(this).serializeArray();
                   $.ajaxSetup({
                       headers: {
                           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                       }
                   });
                   $.ajax({
                       url: "{{route('web.ajax.getintouch')}}",
                       method: "POST",
                       data: data,
                       success: function(response){
                           var html = '';
                           if(response.errors)
                           {
                               html = '<div class="alert alert-danger">';
                               for(var count = 0; count < response.errors.length; count++){
                                   html += '<p>' + response.errors[count] + '</p>';
                               }
                               html += '</div>';
                           }
                           if(response.success){
                               html = '<div class="alert alert-success">' + response.success + '</div>';
                               $('#form-submit')[0].reset();
                           }
                           if(response.error){
                               html = '<div class="alert alert-danger">' + response.error + '</div>';
                           }
                           $("#alert").html(html);
                       }
                   });
               });
           });
        </script>
    @endsection
	