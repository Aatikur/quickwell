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
                                <h1>login </h1>
                                <ol class="breadcrumb">
                                    <li><a href="{{route('web.index')}}">Home</a>
                                    </li>
                                    <li>login</li>
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
                                <a href="#">LOG IN </a>

                            </div>

                            <div class="login_wrapper  float_left">

                                <div class="formsix-pos">
                                    <div class="form-group i-email">
                                        <input type="text" class="form-control" required="" placeholder="Username*">
                                    </div>
                                </div>

                                <div class="formsix-e">
                                    <div class="form-group i-password">
                                        <input type="password" class="form-control" required="" id="password2" placeholder="Password *">
                                    </div>
                                </div>

                                <div class="login_remember_box">
                                    <label class="control control--checkbox">Remember me
                                        <input type="checkbox">
                                        <span class="control__indicator"></span>
                                    </label>
                                <a href="{{route('web.password.forgot-pasword')}}" class="forget_password">Forgot Password</a>
                                </div>
                                <div class="header_btn inner_btn login_btn log float_left">
                                    <a href="#">Log in</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection

    @section('script') 
    @endsection
	