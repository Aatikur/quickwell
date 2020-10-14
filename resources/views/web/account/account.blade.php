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
                                <h3><strong>Name:</strong> {{ Auth::guard('web')->user()->name }}</h3>
                            </div>
                            <div class="col-md-4 mb-3">
                                <h3><strong>Email:</strong>{{ Auth::guard('web')->user()->email }}</h3>
                            </div>
                            <div class="col-md-4 mb-3">
                                <h3><strong>Phone:</strong>{{ Auth::guard('web')->user()->mobile }}</h3>
                            </div>
                        </div>
                        <div class="abt_txt mt-3">
                            <h3>Package</h3>
                            <hr>
                        </div>
                        @if (isset($orders) && !empty($orders))
                            @foreach ($orders as $order)
                                <div class="">
                                    <div class="content mb-3">
                                        <ul>
                                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>{{ $order->package_name }}</span></li>
                                        </ul>
                                    </div>

                                    <div class="row profile">
                                        <div class="col-md-6 mb-3">
                                            <h3><strong>Package Start Date:</strong> {{ $order->created_at }}</h3>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <h3><strong>Package Amount:</strong> ₹{{ number_format($order->package_rate, 2) }} / per Day</h3>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <h3><strong>No. of Day:</strong> {{ $order->days }}</h3>
                                        </div>
                                        <div class="col-md-6">
                                            <h3><strong>Total Amount:</strong>  ₹{{ number_format($order->total, 2) }}</h3>
                                        </div>
                                        <div class="col-md-12">
                                            <a class="btn btn-primary" href="{{route('web.package.invoice', ['id' => encrypt($order->id)])}}" target="_blank">View Invoice</a>

                                            @php
                                                $date = Carbon\Carbon::parse($order->expires_at);
                                                $now = Carbon\Carbon::now();
                                                $usage = $date->diffInDays($now + 1);
                                            @endphp
                                            @if(!empty($usage))
                                                <button class="btn btn-success">
                                                    Running
                                                </button>
                                            @else
                                                <button class="btn btn-danger">
                                                    Expires
                                                </button>
                                            @endif
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            @endforeach
                        @else
                            <div class="text-center">
                                <span>You haven't subscribed any package.</span>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--about us wrapper end-->
    @endsection

    @section('script') 
    @endsection
	