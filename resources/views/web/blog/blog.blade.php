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
                                <h1>Blog</h1>
                                <ol class="breadcrumb">
                                    <li><a href="{{route('web.index')}}">Home</a>
                                    </li>
                                    <li>Blog</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- med_tittle_section End-->

        <!--blog wrapper start-->
        <div class="team_wrapper med_toppadder100 blog_main">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="blog_about">
                            <div class="blog_img">
                                <figure>
                                    <img src="{{asset('web/images/blog_img_1.jpg')}}" alt="img" class="img-responsive">
                                </figure>
                            </div>
                            <div class="blog_txt">
                                <h1><a href="{{route('web.blog.single-blog')}}">Blog Image Post</a></h1>
                                <div class="blog_txt_info">
                                    <ul>
                                        <li>BY ADMIN</li>
                                        <li>SEPT.29,2020</li>
                                    </ul>
                                </div>
                                <p>Sollicitudin, lorem quis bibe u auctor, nisi elit conat ipsu, nec sagittis sem ni id elit. Duis sed odio sit amet nibh vulpute cursus.</p>
                                <a href="{{route('web.blog.single-blog')}}">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="blog_about">
                            <div class="blog_img">
                                <figure>
                                    <img src="{{asset('web/images/blog_img_2.jpg')}}" alt="img" class="img-responsive">
                                </figure>
                            </div>
                            <div class="blog_txt">
                                <h1><a href="{{route('web.blog.single-blog')}}">Blog Image Post</a></h1>
                                <div class="blog_txt_info">
                                    <ul>
                                        <li>BY ADMIN</li>
                                        <li>SEPT.29,2020</li>
                                    </ul>
                                </div>
                                <p>Sollicitudin, lorem quis bibe u auctor, nisi elit conat ipsu, nec sagittis sem ni id elit. Duis sed odio sit amet nibh vulpute cursus.</p>
                                <a href="{{route('web.blog.single-blog')}}">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="blog_about">
                            <div class="blog_img">
                                <figure>
                                    <img src="{{asset('web/images/blog_img_3.jpg')}}" alt="img" class="img-responsive">
                                </figure>
                            </div>
                            <div class="blog_txt">
                                <h1><a href="{{route('web.blog.single-blog')}}">Blog Image Post</a></h1>
                                <div class="blog_txt_info">
                                    <ul>
                                        <li>BY ADMIN</li>
                                        <li>SEPT.29,2020</li>
                                    </ul>
                                </div>
                                <p>Sollicitudin, lorem quis bibe u auctor, nisi elit conat ipsu, nec sagittis sem ni id elit. Duis sed odio sit amet nibh vulpute cursus.</p>
                                <a href="{{route('web.blog.single-blog')}}">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog wrapper end-->
    @endsection

    @section('script') 
    @endsection
	