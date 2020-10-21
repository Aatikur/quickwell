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
                                <h1>{{ $single_post->title }}</h1>
                                <ol class="breadcrumb">
                                    <li><a href="{{route('web.index')}}">Home</a>
                                    </li>
                                    <li>{{ $single_post->slug }}</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- med_tittle_section End -->
        <!--blog category section start-->
        <div class="blog_section med_toppadder50">
            <div class="container">
                <div class="blog_category_main_wrapper">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="blog_about">
                                        <div class="blog_img blog_post_img">
                                            <figure>
                                                <img src="{{asset('admin/post/'.$single_post->image)}}" alt="img" class="img-responsive">
                                            </figure>
                                        </div>
                                        <div class="blog_txt">
                                            <h1><a>{{ $single_post->title }}</a></h1>
                                            <style>.blog_txt h1 a {font-size: 20px;color:#333!important}.blog_txt span {font-family: 'Open Sans', sans-serif!important;color: #5d5d5d!important;}</style>
                                            <div class="blog_txt_info">
                                                <ul>
                                                    <li>WRITTEN ON: {{ date_format($single_post->created_at, 'M m, Y') }}</li>
                                                    <li>By Admin</li>
                                                </ul>
                                            </div>
                                            {!! $single_post->body !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--blog section end-->
    @endsection

    @section('script') 
    @endsection
	