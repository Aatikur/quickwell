@extends('web.templet.master')

    {{-- @include('web.include.seo') --}}

    @section('seo')
    @endsection

    @section('content')

    <!-- med_tittle_section-->
    <div class="med_tittle_section">
        <div class="med_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="med_tittle_cont_wrapper">
                        <div class="med_tittle_cont">
                            <h1>Team</h1>
                            <ol class="breadcrumb">
                                <li><a href="{{route('web.index')}}">Home</a>
                                </li>
                                <li>Team</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- med_tittle_section End-->

    <!--event wrapper start-->
    <div class="event_wrapper med_toppadder100 med_bottompadder70">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="choose_heading_wrapper">
                        <h1 class="med_bottompadder20">Management Team</h1>
                        <img src="{{asset('web/images/line.png')}}" alt="title" class="med_bottompadder60">
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="event_slider_wrapper">
                        <div class="">
                            <div class="item">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="img_section">
                                            <div class="icon_wrapper_event">
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="img_wrapper1">

                                                <img src="{{asset('web/images/team/1.jpg')}}" alt="img" class="img-responsive">
                                            </div>
                                            <div class="event_icon1">
                                                <h2><a href="#">Dr. Ambika Prasad Singh</a></h2>
                                                <p>Dr. Ambika Prasad Singh is a reputed Surgeon in Darbhanga with over 30 years of experience. He has pursued his master in surgeon from Darbhanga medical college.  He was also professor at the Darbhanga medical college.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="img_section">
                                            <div class="icon_wrapper_event">
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="img_wrapper1">
                                                <img src="{{asset('web/images/team/2.jpg')}}" alt="img" class="img-responsive">
                                            </div>
                                            <div class="event_icon1">
                                                <h2><a href="#">Mr. Ambrish Mishra</a></h2>
                                                <p>Mr. Amrish Mishra has done Master of Business Administration and also founder of the HDU Healthcare and directors of Saiman Academy Private Limited and Ccu Homecare Private Limited.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="img_section">
                                            <div class="icon_wrapper_event">
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="img_wrapper1">

                                                <img src="{{asset('web/images/team/3.jpg')}}" alt="img" class="img-responsive">
                                            </div>
                                            <div class="event_icon1">
                                                <h2><a href="#">Mr. Narrotam Narayan Singh</a></h2>
                                                <p>Mr. Narrotam Narayan Singh is Mechanical Engineer, graduated from the MSRIT, Bangalore. He is also one of the directors of Quickwell Remedy Healthcare, he has a 20+ experience in this field and also the director of the 2 other companies Kashivishwanath Pipes Private Limited and Dolphin Water Solutions Limited</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="img_section">
                                            <div class="icon_wrapper_event">
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="img_wrapper1">
                                                <img src="{{asset('web/images/team/4.jpg')}}" alt="img" class="img-responsive">
                                            </div>
                                            <div class="event_icon1">
                                                <h2><a href="#">Mr. Ajay Kumar Singh</a></h2>
                                                <p>Mr. Ajay Kumar Singh is Advocate at the Supreme Court of the India. He has one of the best advocates with lot of experience in this field he holds the key position at Quickwell Remedy Healthcare.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="img_section">
                                            <div class="icon_wrapper_event">
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="img_wrapper1">
                                                <img src="{{asset('web/images/team/5.jpg')}}" alt="img" class="img-responsive">
                                            </div>
                                            <div class="event_icon1">
                                                <h2><a href="#">Mrs. Priyanka Singh</a></h2>
                                                <p>Mrs Priyanka Singh has completed her Masters of Arts from the Bijapur University, Ara. She is one of the directors of Quickwell Remedy Healthcare and also holds the positions as   director of the 2 other companies Kashivishwanath Pipes Private Limited and Dolphin Water Solutions Limited.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="img_section">
                                            <div class="icon_wrapper_event">
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="img_wrapper1">
                                                <img src="{{asset('web/images/team/6.jpg')}}" alt="img" class="img-responsive">
                                            </div>
                                            <div class="event_icon1">
                                                <h2><a href="#">Mr. Saket Kumar</a></h2>
                                                <p>Mr. Saket kumar has completed his Bachelors of engineering from Dayananda Sagar College of engineering, Bangalore. He holds the key position at Quickwell Remedy Healthcare. He has worked with 2 prominent Companies like Indiamart and Omics International and has a good experience in the field of Marketing and Sales.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- event wrapper end-->
    @endsection

    @section('script') 
    @endsection
	