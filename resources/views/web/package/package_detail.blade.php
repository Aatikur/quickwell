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
                            <h1>{{ $package->name }}</h1>
                            <ol class="breadcrumb">
                                <li><a href="{{route('web.index')}}">Home</a>
                                </li>
                                <li>Package detail</li>
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
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="choose_heading_wrapper med_bottompadder30">
                        <h1 class="med_bottompadder20">Book Package</h1>
                        <img src="{{asset('web/images/line.png')}}" alt="title" class="med_bottompadder20">
                    </div>
                    @if (Session::has('message'))
                        <div class="alert alert-success" >{{ Session::get('message') }}</div>
                     @endif
                     @if (Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                     @endif
                    {{ Form::open(['method' => 'post','route'=>'web.package_book']) }}
                        <div class="cont_main_section">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="contect_form1 dc_cont_div">
                                        <label for="">Patient Name </label>
                                        <input type="text" name="full_name" value="{{ old('full_name') }}" placeholder="Full Name" class="require">
                                        <input type="hidden" name="amount" value="{{ $package->amount }}">
                                        <input type="hidden" name="package_name" value="{{ $package->name }}">
                                        @if (Auth::guard('web')->check())
                                            <input type="hidden" name="mobile" value="{{ Auth::guard('web')->user()->mobile }}">
                                            <input type="hidden" name="email" value="{{ Auth::guard('web')->user()->email }}">
                                        @endif
                                        @if($errors->has('full_name'))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong>{{ $errors->first('full_name') }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="contect_form1 dc_cont_div">
                                        <label for="">Start From</label>
                                        <input type="date" name="date" id="date" value="{{ old('date') }}" placeholder="Date" class="require">
                                        @if($errors->has('date'))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong>{{ $errors->first('date') }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="contect_form1 dc_cont_div">
                                        <label for="">Number of days</label>
                                        <select name="days" value="{{ old('days') }}">
                                            <option> 1 </option>
                                            <option> 2 </option>
                                            <option> 3 </option>
                                            <option> 4 </option>
                                            <option> 5 </option>
                                            <option> 6 </option>
                                            <option> 7 </option>
                                            <option> 8 </option>
                                            <option> 9 </option>
                                            <option> 10 </option>
                                        </select>
                                        @if($errors->has('days'))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong>{{ $errors->first('days') }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <input type="checkbox" name="contact_no" class="require" required> I agreed to the <a href="{{route('web.other.tc')}}">Terms and Conditions</a> & <a href="{{route('web.other.refund')}}">Return Policy</a>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="response"></div>
                                    <div class="contact_btn_wrapper med_toppadder30">
                                        <button type="submit" class="submitForm">Pay Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 abt_section">
                    <style>@media (max-width: 767px){.abt_section { margin-top: 20px;padding: 0 10px}}.price_box1 { margin-bottom: 30px}</style>
                    <div class="abt_heading_wrapper">
                        <h1 class="med_bottompadder20">Healthcare Packages </h1>
                        <img src="{{asset('web/images/line.png')}}" alt="title" class="med_bottompadder20">
                    </div>
                    <div class="abt_block">
                        <div class="abt_txt">
                            <h3>{{ $package->name }} (Isolation and Quarantine)</h3>
                            <div class="price_box1">
                                <h1><sub>₹</sub><span>{{ $package->amount }}</span><sub>  / Day</sub></h1>
                            </div>
                        </div>
                        <div class="">
                            <div class="content">
                                {!! $package->desc !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--about us wrapper end-->
    @endsection

    @section('script') 
        <script>
            $(function(){
                var dtToday = new Date();
                var month = dtToday.getMonth() + 1;
                var day = dtToday.getDate();
                var year = dtToday.getFullYear();
                if(month < 10)
                    month = '0' + month.toString();
                if(day < 10)
                    day = '0' + day.toString();
                
                var maxDate = year + '-' + month + '-' + day;
                $('#date').attr('min', maxDate);
                });
        </script>
    @endsection
	