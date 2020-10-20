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
                            <h1>Career</h1>
                            <ol class="breadcrumb">
                                <li><a href="{{route('web.index')}}">Home</a>
                                </li>
                                <li>Career</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- med_tittle_section End-->

    <!--about us wrapper start-->
    <div class="about_wrapper career">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="choose_heading_wrapper med_bottompadder30">
                        <h1 class="med_bottompadder20">Upload Resume</h1>
                        <img src="{{asset('web/images/line.png')}}" alt="title" class="med_bottompadder20">
                    </div>
                    @if (Session::has('message'))
                        <div class="alert alert-success" >{{ Session::get('message') }}</div>
                    @endif
                    @if (Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                    @endif
                    {{ Form::open(['method' => 'post','route'=>'web.job_openings', 'enctype'=>'multipart/form-data']) }}
                        <div class="cont_main_section">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="contect_form1 dc_cont_div">
                                        <label for="">Name </label>
                                        <input type="text" name="full_name" value="{{ old('full_name') }}" placeholder="Full Name" class="require">
                                        @if($errors->has('full_name'))
                                            <span class="invalid-feedback" role="alert" >
                                                <strong style="color:red">{{ $errors->first('full_name') }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="contect_form1 dc_cont_div">
                                        <label for="">Email</label>
                                        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" class="require">
                                        @if($errors->has('email'))
                                            <span class="invalid-feedback" role="alert" >
                                                <strong style="color:red">{{ $errors->first('email') }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="contect_form1 dc_cont_div">
                                        <label for="">Phone</label>
                                        <input type="number" name="mobile" value="{{ old('mobile') }}" placeholder="Phone" class="require">
                                        @if($errors->has('mobile'))
                                            <span class="invalid-feedback" role="alert" >
                                                <strong style="color:red">{{ $errors->first('mobile') }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="contect_form1 dc_cont_div">
                                        <label for="">Designation</label>
                                        <select name="designation">
                                            <option value="" selected disabled>--Designation--</option>
                                            @foreach ($careers as $career)
                                                <option {{old('designation') == $career->designation ? 'selected' : ''}}> {{ $career->designation }} </option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('designation'))
                                            <span class="invalid-feedback" role="alert" >
                                                <strong style="color:red">{{ $errors->first('designation') }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="contect_form1 dc_cont_div">
                                        <label for="">Upload resume *</label>
                                        <input type="file" name="resume" style="padding: 10px;">
                                        @if($errors->has('resume'))
                                            <span class="invalid-feedback" role="alert" >
                                                <strong style="color:red">{{ $errors->first('resume') }}</strong>
                                            </span>
                                        @enderror
                                    </div>
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
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 abt_section">
                    <div class="abt_heading_wrapper">
                        <h1 class="med_bottompadder20">Open Positions</h1>
                        <p>We’re always eager to meet fresh talent, so check out our open positions</p>
                        <img src="{{asset('web/images/line.png')}}" alt="title" class="med_bottompadder20">
                    </div>
                    @if (isset($careers) && !empty($careers))
                        @foreach ($careers as $career)
                            @php
                                $count = 1;
                            @endphp
                            <div class="abt_block">
                                <div class="abt_txt">
                                    <h3>{{ $count++ }}.	{{ $career->designation }}</h3>
                                </div>
                                <div class="">
                                    <div class="content">
                                        {!! $career->role !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="abt_block text-center">
                            <h2>There's No Job Openings Right Now.</h2>
                        </div>
                    @endif
                    <style>.abt_block span {font-family: 'Open Sans', sans-serif!important;}</style>
                </div>
            </div>
        </div>
    </div>
    <!--about us wrapper end-->
    @endsection
    @section('css')
        <style>
            .invalid-feedback{
                display: block;
            }
        </style>   
    @endsection
    @section('script') 
    @endsection
	