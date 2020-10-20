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
                                <h1> Testimonial</h1>
                                <ol class="breadcrumb">
                                    <li><a href="{{route('web.index')}}">Home</a></li>
                                    <li> Testimonial</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- med_tittle_section End-->

        <!--testimonial wrapper start-->
        <div class="testimonial_wrapper med_toppadder100">
            <div class="test_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="test_heading_wrapper">
                            <h1 class="med_bottompadder20">What Patients Are Saying</h1>
                            <img src="{{asset('web/images/line.png')}}" alt="title" class="med_bottompadder60">
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="test_slider_wrapper">
                            <div class="owl-carousel owl-theme">
                                @if (isset($testimonials) && !empty($testimonials))
                                    @foreach ($testimonials as $testimonial)
                                        <div class="item">
                                            <div class="t_icon_wrapper">
                                                <div class="t_client_cont_wrapper2">
                                                    <p>{!! $testimonial->desc !!}</p>
                                                    <div class="client_img_abt">
                                                        <img class="img-circle" src="{{asset('admin/post/'.$testimonial->image)}}" alt="img" style="width:90px;height:90px;">
                                                        <h5>- {{ $testimonial->name }} <br>
                                                            <small>{{ $testimonial->address }}</small>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="item text-center">
                                        <h3>There's no testimonial.</h3>
                                    </div>
                                @endif
                                <style>.t_client_cont_wrapper2 p span {font-family: 'Droid Serif', sans-serif;}</style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonial wrapper end-->
    @endsection

    @section('script') 
    @endsection
	