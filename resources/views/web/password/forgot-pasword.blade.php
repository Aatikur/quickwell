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
                                <h1>FORGOT PASSWORD</h1>
                                <ol class="breadcrumb">
                                    <li><a href="{{route('web.index')}}">Home</a>
                                    </li>
                                    <li>FORGOT PASSWORD</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- med_tittle_section End-->

        <!--FORGOT PASSWORD wrapper start-->     
        <div class="login_wrapper_top float_left">
            <div class="login_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mx-auto">
                        <div class="login_tab_top_wrap float_left">
                            <div class="btn_log">
                                <a href="#">FORGOT PASSWORD </a>
                            </div>

                            <div class="login_wrapper  float_left">

                                <div class="formsix-pos">
                                    <div class="form-group i-email">
                                        <input type="text" class="form-control" required="" placeholder="Username*">
                                    </div>
                                </div>
                                <div class="header_btn inner_btn login_btn log float_left">
                                    <a href="#">Submit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FORGOT PASSWORD wrapper end-->
    @endsection

    @section('script') 
    @endsection
	