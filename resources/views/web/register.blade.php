@extends('web.templet.master')

    {{-- @include('web.include.seo') --}}

    @section('seo')
    @endsection

    @section('content')
        <!--med_tittle_section-->
        <div class="med_tittle_section">
            <div class="med_img_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="med_tittle_cont_wrapper">
                            <div class="med_tittle_cont">
                                <h1> Sign up </h1>
                                <ol class="breadcrumb">
                                    <li><a href="{{route('web.index')}}">Home</a>
                                    </li>
                                    <li>Sign up</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- med_tittle_section End -->

        <div class="login_wrapper_top float_left">
            <div class="login_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mx-auto">
                        <div class="login_tab_top_wrap float_left">
                            <div class="btn_log">
                                <a href="#">REGISTER</a>
                            </div>
                            @if (Session::has('message'))
                                <div class="alert alert-success" >{{ Session::get('message') }}</div>
                            @endif
                            @if (Session::has('error'))
                                <div class="alert alert-danger">{{ Session::get('error') }}</div>
                            @endif
                            <div class="login_wrapper float_left">
                                {{ Form::open(['method' => 'post','route'=>'web.user.register']) }}
                                    <div class="formsix-pos">
                                        <div class="form-group i-email">
                                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" required="" placeholder="Enter Full Name">
                                            @if($errors->has('name'))
                                                <span class="invalid-feedback" role="alert" style="color:red">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter Email">
                                        @if($errors->has('email'))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="mobile" value="{{ old('mobile') }}" placeholder="Enter Mobile No">
                                        @if($errors->has('mobile'))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong>{{ $errors->first('mobile') }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group i-password">
                                            <input type="password" class="form-control" name="password" required="" id="password" placeholder="Enter Password">
                                            @if($errors->has('password'))
                                                <span class="invalid-feedback" role="alert" style="color:red">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group i-password">
                                            <input type="password" class="form-control" name="confirm_password" required="" id="confirm_password" placeholder="Enter Confirm Password">
                                            @if($errors->has('confirm_password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong style="color:red">{{ $errors->first('confirm_password') }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="login_remember_box">
                                        <input type="checkbox" name="contact_no" class="require" required> I agreed to the <a href="{{route('web.other.tc')}}">Terms and Conditions</a> & <a href="{{route('web.other.privacy')}}">Privacy Policy</a>
                                    </div>
                                    <div class="header_btn inner_btn login_btn log float_left">
                                        <button >register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--booking wrapper end-->

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
	