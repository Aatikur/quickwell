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
                                <h1>Single Blog</h1>
                                <ol class="breadcrumb">
                                    <li><a href="{{route('web.index')}}">Home</a>
                                    </li>
                                    <li>Single Blog</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- med_tittle_section End -->
        <!--blog category section start-->
        <div class="blog_section med_toppadder100 med_bottompadder100">
            <div class="container">
                <div class="blog_category_main_wrapper">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="blog_about">
                                        <div class="blog_img blog_post_img">
                                            <figure>
                                                <img src="{{asset('web/images/blog_bg_1.jpg')}}" alt="img" class="img-responsive">
                                            </figure>
                                        </div>
                                        <div class="blog_txt">
                                            <h1><a href="#">Very popular during</a></h1>
                                            <div class="blog_txt_info">
                                                <ul>
                                                    <li>BY ADMIN</li>
                                                    <li>SEPT.29,2020</li>
                                                </ul>
                                            </div>
                                            <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor.</p>
                                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora.</p>
                                            <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 med_toppadder50">
                                    <div class="blog_single_txt">
                                        <div class="blog_txt_body ">
                                            <p>“ Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis nisi elit consequat bh id el bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. ”</p>
                                            <div class="client_img_abt">
                                                <img class="img-circle" src="{{asset('web/images/blog_txt.png')}}" alt="img">
                                                <h5>- Sandeep S.</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 med_toppadder50">
                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor.</p>
                                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibhMorbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora.</p>
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
	