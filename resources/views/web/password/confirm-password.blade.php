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
                                <h1>CONFIRM PASSWORD</h1>
                                <ol class="breadcrumb">
                                    <li><a href="{{route('web.index')}}">Home</a>
                                    </li>
                                    <li>CONFIRM PASSWORD</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- med_tittle_section End-->

        <!--CONFIRM PASSWORD wrapper start-->     
        <div class="login_wrapper_top float_left">
            <div class="login_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mx-auto">
                        <div class="login_tab_top_wrap float_left">
                            <div class="btn_log">
                                <a href="#">CONFIRM PASSWORD </a>
                            </div>
                            @if (Session::has('message'))
                                <div class="alert alert-success" >{{ Session::get('message') }}</div>
                            @endif
                            @if (Session::has('error'))
                                <div class="alert alert-danger">{{ Session::get('error') }}</div>
                            @endif
                        {{ Form::open(['method' => 'post','route'=>'password.update'])}}   
                            <input type="hidden" name="token" value="{{ $token }}">               
                            <div class="login_wrapper  float_left">
                                <div class="formsix-e">
                                    <div class="form-group i-password">
                                        <input type="password" class="form-control" name="password" required="" id="password1" placeholder="Password *">
                                        @if($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="formsix-e">
                                    <div class="form-group i-password">
                                        <input type="password" class="form-control" name="confirm_password" required="" id="password2" placeholder="Password *">
                                        @if($errors->has('confirm_password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('confirm_password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="header_btn inner_btn login_btn log float_left">
                                    <button type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CONFIRM PASSWORD wrapper end-->
    @endsection

    @section('script') 
    @endsection
	