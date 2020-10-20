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
                                <h1>Contact Us</h1>
                                <ol class="breadcrumb">
                                    <li><a href="{{route('web.index')}}">Home</a>
                                    </li>
                                    <li>Contact</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- med_tittle_section End-->

        <!--contact us section start -->
        <div class="contact_us_section med_toppadder70 med_bottompadder70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="choose_heading_wrapper med_bottompadder30">
                            <h1 class="med_bottompadder20">Contact us</h1>
                            <img src="{{asset('web/images/line.png')}}" alt="title" class="med_bottompadder20">
                        </div>
                        @if (Session::has('message'))
                            <div class="alert alert-success" >{{ Session::get('message') }}</div>
                        @endif
                        @if (Session::has('error'))
                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                        @endif
                        <form class="form-horizontal" method="POST" action="{{ route('web.contact') }}">
                            @csrf
                            <div class="cont_main_section">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form1 dc_cont_div">
                                            <input type="text" name="full_name" placeholder="Full Name" value="{{ old('full_name') }}" class="require" required>
                                            @if($errors->has('full_name'))
                                                <span class="invalid-feedback" role="alert" >
                                                    <strong style="color:red">{{ $errors->first('full_name') }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form1 dc_cont_div">
                                            <input type="email" name="email" placeholder="Email" class="require" value="{{ old('email') }}" required>
                                            @if($errors->has('email'))
                                                <span class="invalid-feedback" role="alert" >
                                                    <strong style="color:red">{{ $errors->first('email') }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form1 dc_cont_div">
                                            <input type="number" name="contact_no" placeholder="Phone" value="{{ old('contact_no') }}" class="require" required>
                                            @if($errors->has('contact_no'))
                                                <span class="invalid-feedback" role="alert" >
                                                    <strong style="color:red">{{ $errors->first('contact_no') }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="contect_form1 dc_cont_div">
                                            <input type="text" name="subject" value="{{ old('subject') }}" placeholder="Subject">
                                            @if($errors->has('subject'))
                                                <span class="invalid-feedback" role="alert" >
                                                    <strong style="color:red">{{ $errors->first('subject') }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="contect_form4 dc_cont_div">
                                            <textarea rows="5" name="message" placeholder="Message" class="require" required>{{ old('message') }}</textarea>
                                        </div>
                                        @if($errors->has('message'))
                                            <span class="invalid-feedback" role="alert" >
                                                <strong style="color:red">{{ $errors->first('message') }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="response"></div>
                                        <div class="contact_btn_wrapper med_toppadder30">
                                            <button type="submit" class="submitForm">submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
        <!--contact us section end-->

        <!-- dc category section start-->
        <div class="category_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="cat_about cont_cat_abt">
                            <div class="icon_wrapper dc_icon_section">
                                <img src="{{asset('web/images/icon_call.png')}}" alt="img" class="img-responsive">
                            </div>

                            <div class="cat_txt cont_cat_txt">
                                <h1 style="text-transform: capitalize">PHONE</h1>
                                <p>1800-419-4948 | +91-8797071501</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="cat_about cont_cat_abt">
                            <div class="icon_wrapper dc_icon_section">
                                <img src="{{asset('web/images/icon_map.png')}}" alt="img" class="img-responsive">
                            </div>

                            <div class="cat_txt cont_cat_txt">
                                <p>103, Janak Palace, Manglam Enclave, <br> RPS more Bailey Road, Patna- 801503</p>
                                <p>H.Off: F NO 301, Block C, Rajendra Park, Sector 105, Gurugram, Haryana 122001</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="cat_about cont_cat_abt">
                            <div class="icon_wrapper dc_icon_section">
                                <img src="{{asset('web/images/icon_envelope.png')}}" alt="img" class="img-responsive">
                            </div>

                            <div class="cat_txt cont_cat_txt cont_last_child">
                                <h1 style="text-transform: capitalize">EMAIL</h1>
                                <a href="#"><p> info@quickwellhealthcare.com</p></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map_main_wrapper cont_dc_map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14026.257501388622!2d77.0060658!3d28.492663!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1160f592af6358a0!2sQuickwell%20Remedy%20Healthcare%20Private%20Limited!5e0!3m2!1sen!2sin!4v1602763963342!5m2!1sen!2sin" height="450" frameborder="0" style="border:0;width:100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
        <!-- dc category section end-->
    @endsection

    @section('script') 
    @endsection
	