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
                            <h1>Account</h1>
                            <ol class="breadcrumb">
                                <li><a href="{{route('web.index')}}">Home</a>
                                </li>
                                <li>Account</li>
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
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 abt_section mx-auto">
                    <div class="abt_block">
                        <div class="abt_txt">
                            <h3>Profile</h3>
                            <hr>
                        </div>
                        <div class="row profile">
                            <div class="col-md-4 mb-3">
                                <h3><strong>Name:</strong> Vishal Nag</h3>
                            </div>
                            <div class="col-md-4 mb-3">
                                <h3><strong>Email:</strong> Vishal Nag</h3>
                            </div>
                            <div class="col-md-4 mb-3">
                                <h3><strong>Phone:</strong> Vishal Nag</h3>
                            </div>
                            <div class="col-md-12">
                                <h3><strong>Address:</strong> Vishal Nag</h3>
                            </div>
                        </div>
                        <div class="abt_txt mt-3">
                            <h3>Profile</h3>
                            <hr>
                        </div>
                        <div class="">
                            <div class="content mb-3">
                                <ul>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Covid 19 Package</span></li>
                                </ul>
                            </div>
                            <div class="row profile">
                                <div class="col-md-6 mb-3">
                                    <h3><strong>Package Start Date:</strong> 10/10/2020</h3>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <h3><strong>Package Amount:</strong> ₹10,000 / per Day</h3>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <h3><strong>No. of Day:</strong> 7</h3>
                                </div>
                                <div class="col-md-6">
                                    <h3><strong>Total Amount:</strong>  ₹70,000</h3>
                                </div>
                                <div class="col-md-12">
                                <a class="btn btn-primary" href="{{route('web.other.invoice')}}" target="_blank">View Invoice</a>
                                </div>
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
	