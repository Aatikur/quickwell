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
                                        <input type="date" name="date" value="{{ old('date') }}" placeholder="Date" class="require">
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
                    <div class="abt_heading_wrapper">
                        <h1 class="med_bottompadder20">Healthcare Packages </h1>
                        <img src="{{asset('web/images/line.png')}}" alt="title" class="med_bottompadder20">
                    </div>
                    <div class="abt_block">
                        <div class="abt_txt">
                            <h3>Covid-19 Care (Covid19 Home Isolation and Quarantine)</h3>
                            <div class="price_box1">
                                <h1><sub>₹</sub><span>{{ $package->amount }}</span><sub>  / per Day</sub></h1>
                            </div>
                            <p class="sub_header med_toppadder20"> Home isolation and quarantine package </p>
                        </div>
                        <div class="">
                            <div class="content">
                                <ul>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>FREE ICU DOCTOR consultation – Online and WhatsApp </span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Complete care plan for family with trained nurse and all medical equipment. </span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Complete training for family for home isolation and quarantine with hand hygiene protocols. </span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Daily review and consultation by doctor for vital monitoring.</span></li>

                                </ul>
                            </div>
                        </div>
                        <div class="abt_txt">
                            <p class="sub_header med_toppadder20">Package for Post COVID- 19 Patients</p>
                        </div>
                        <div class="">
                            <div class="content">
                                <ul>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Oxygen Concentrator/ cylinder - 5 LIT. </span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Cardiac Monitor. </span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>PPE KIT. </span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Medical Consumable – N95 Mask, Sanitizer, Gloves etc. </span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Nurse 24 Hours Stay. </span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Dr. Consultation – Online/ WhatsApp. </span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Essential Medical kit -Infrared Thermometer, Pulse Oximeter, Stethoscope, BP Machine, Steamer.</span></li>

                                </ul>
                            </div>
                        </div>
                        <div class="abt_txt">
                            <p class="sub_header med_toppadder20">Terms and conditions </p>
                        </div>
                        <div class="">
                            <div class="content">
                                <ul>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Minimum service period - 07 days (No refund) and onwards pro data basis. </span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>All the payment will be only online or cheque, no cash payment. </span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Medical consumable like gloves, mask, and sanitizer is included in package. </span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>All medical equipment is also included in package </span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Payment advance- Rs.70000 </span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>COVID 19 lab test cost for staff will be wear by patient party. </span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Family have to follow all govt guidelines issued for Covid19 home isolation and quarantine </span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>We have clarified all medical and critical illness of the patient before our Home care services and saturation going below 88 should be managed in hospital only. </span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>All kind Medicines/ lab will be your responsibility. </span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Any refund will be only online in three working days after closure of services. </span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>If in any case staff have any medical issues it will managed by office and medical COVID insurance will be given to staff</span></li>

                                </ul>
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
    @endsection
	