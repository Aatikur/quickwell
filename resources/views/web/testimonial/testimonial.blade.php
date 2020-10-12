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
                                <div class="item">
                                    <div class="t_icon_wrapper">
                                        <div class="t_client_cont_wrapper2">
                                            <p>“ In the month of February 2020 we contracted Quickwell Remedy Healthcare private ltd., for my father Shri Balraj Chopra, 97yrs., who suffers with pneumonia. All the facilities provided by them are complete for a treatment at home to any patient in itself. This company is equipped with all modern medical machines. They also have a reasonable number of medical staff, such as Doctors, physio therepists and nursing staff provided by them for the care of the patient, reducing the possibility of having any type of complaint. It is also praiseworthy that they keep a close watch on the time and arrange all miscellaneous needs as per the contract at the right time. Nowadays, due to the changes of circumstances because of covid-19, they have automatically upgraded their services and provisions as per time.”</p>
                                            <div class="client_img_abt">
                                                <img class="img-circle" src="{{asset('web/images/test_img_1.png')}}" alt="img" style="width:90px;height:90px;">
                                                <h5>- Mr. Anil Chopra <br>
                                                    <small>Patient Son, Delhi</small>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="t_icon_wrapper">
                                        <div class="t_client_cont_wrapper2">
                                            <p>“ Our experience so far over almost a month with Quickwell Remedy has been very positive in terms of support for my mother at home after she was discharged from the ICU in hospital. Their team is very service oriented and responsive, always attentive to our needs and also anticipates future changing needs. The professional nurse provided has been efficient, competent and trustworthy so far. We hope and trust this will continue with all Quickwell Remedy services going forward. ”</p>
                                            <div class="client_img_abt">
                                                <img class="img-circle" src="{{asset('web/images/test_img_1.png')}}" alt="img" style="width:90px;height:90px;">
                                                <h5>- Mr. Kamal Malhotra <br>
                                                    <small>Patient Son, Vietnan</small>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="t_icon_wrapper">
                                        <div class="t_client_cont_wrapper2">
                                            <p>“ We are highly grateful to Quickwell Remedy Healthcare for saving my senior citizen mother with comorbidities in the midst of the COVID pandemic when admitting to a hospital was not an option. In matter of few hours an ICU set up was established at home with a highly skilled 24x7 nurse and the availability of a doctor. The staffs are professional and very dedicated to the patient. Thank you Quickwell Remedy Healthcare for being there is our desperate hour of need.  ”</p>
                                            <div class="client_img_abt">
                                                <img class="img-circle" src="{{asset('web/images/test_img_1.png')}}" alt="img" style="width:90px;height:90px;">
                                                <h5>-  Ms. Molina Kapoor <br>
                                                    <small>Patient Daughter, Dubai</small>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
	