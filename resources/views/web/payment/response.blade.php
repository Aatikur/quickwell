@extends('web.templet.master')

    {{-- @include('web.include.seo') --}}

    @section('seo')
    @endsection

    @section('content')

        <!--about us wrapper start-->
        <div class="call_wrapper_2">
            <div class="call_overlay"></div>
            <div class="container">
                <div class="row">
                    @if ($response['status'] == "success" && $response['unmappedstatus'] == "captured")
                        <!-- Successfull start -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-lg-offset-2">
                            <a href="{{ route('web.index') }}" class="btn btn-primary text-right">Home</a>
                            <div class="call_heading_wraper text-center wow fadeInDown" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
                                <h1 class="med_bottompadder40">Successfull</h1>
                                <h3 class="med_bottompadder40">Your Package is booked</h3>
                                <div class="appointmnt_wrapper_2 text-center">
                                    <style>.abt_txt.abt_txt_resp {padding: 20px;background: #fff;border-radius: 20px;border: 6px solid#2ec8a6;margin-bottom: 30px;}.abt_txt.abt_txt_resp h6{color:#333}</style>
                                    <div class="abt_txt abt_txt_resp">
                                        <p class="sub_header mb-3">Booking Detail</p>
                                        <div class="row profile">
                                            <div class="col-md-4 mb-3">
                                                <h6><strong>Name:</strong> {{ $order->full_name }}</h6>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <h6><strong>Email:</strong> {{ $response['email'] }}</h6>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <h6><strong>Phone:</strong> {{ $order->mobile }}</h6>
                                            </div>
                                            <div class="col-md-8 mb-3">
                                                <h6><strong>Package Name:</strong> {{ $response['productinfo'] }}</h6>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <h6><strong>Start Date:</strong> {{ $order->created_at }}</h6>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <h6><strong>Number of days:</strong> {{ $order->days }}</h6>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <h6><strong>Amount:</strong> {{ number_format($order->total, 2) }}</h6>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="appoint_btn_2">
                                        <ul>
                                            <li><a href="{{ route('web.package.invoice', ['id' => encrypt($order->id)]) }}" target="_blank"><span class="hidden-sm"><i class="fa fa-calendar"></i>View </span>Invoie</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Successfull end -->
                    @else
                        <!-- Not Successfull start -->                
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 col-lg-offset-2 notsucc">
                            <div class="call_heading_wraper text-center wow fadeInDown" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
                                <style>.notsucc h1{color: #e81717!important;}.notsucc .abt_txt.abt_txt_resp{border-color:#e81717!important;}</style>
                                <h1 class="med_bottompadder40">Not Successfull</h1>
                                <h3 class="med_bottompadder40">Your Package is not booked</h3>
                                <div class="appointmnt_wrapper_2 text-center">
                                    <style>.abt_txt.abt_txt_resp {padding: 20px;background: #fff;border-radius: 20px;border: 6px solid#2ec8a6;margin-bottom: 30px;}.abt_txt.abt_txt_resp h6{color:#333}</style>
                                    <div class="abt_txt abt_txt_resp">
                                        <p class="sub_header mb-3">Order Detail</p>
                                        <div class="row profile">
                                            <div class="col-md-4 mb-3">
                                                <h6><strong>Order Id:</strong> {{ $order->order_id }}</h6>
                                                <p class="mb-0">* Please note the order Id for further query</p>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="appoint_btn_2">
                                        <ul>
                                            <li><a href="index"><span class="hidden-sm"><i class="fa fa-home"></i>Home</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Not Successfull end -->
                    @endif
                </div>
            </div>
        </div>
        <!--about us wrapper end-->

    @endsection

    @section('script') 
    @endsection
	