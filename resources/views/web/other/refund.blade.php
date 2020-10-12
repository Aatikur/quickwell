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
                                <h1> DOCTOR ON CALL</h1>
                                <ol class="breadcrumb">
                                    <li><a href="{{route('web.index')}}">Home</a>
                                    </li>
                                    <li> Doctor On Call</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- med_tittle_section End-->

        <!--ser_abt section start-->
        <div class="ser_abt">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 abt_section">
                        <div class="abt_txt abt_txt_resp">
                            <h3 class="med_toppadder20">Refund Policy</h3>
                            <p class="sub_header">Cancellation (Applicable Before service use)</p>
                            <div class="abt_chk med_toppadder10">
                                <div class="content">
                                    <ul>
                                        <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>In how many days/ Hours customers can initiate the cancellation: within 7 days </span></li>
                                        <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span> Once cancellation is approved till when (days) refund will be processed: 3 working days </span></li>
                                        <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>In how many days amount would be reflected in customer’s bank account: 3 working days</span></li>
                                    </ul>
                                </div>
                            </div>
                            
                            <p class="sub_header med_toppadder30">Refund (Applicable After service use)</p>                        
                            <div class="abt_chk med_toppadder10">
                                <div class="content">
                                    <ul>
                                        <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>In how many days/ Hours customers can initiate the cancellation: within 7 days </span></li>
                                        <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span> Once cancellation is approved till when (days) refund will be processed: 3 working days </span></li>
                                        <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>In how many days amount would be reflected in customer’s bank account: 3 working days</span></li>
                                    </ul>
                                </div>
                            </div>
                                                    
                            <p>“I agree to be contacted by Quickwell Remedy Healthcare Pvt. Ltd. over phone and e-mail. I do not have any objection to receiving emails, messages (SMS or any other mode) and calls from Quickwell Remedy Healthcare Pvt. Ltd. This consent shall supersede any preferences set through Do Not Disturb (DND Register)/ National Customer Preference Register (NCPR)”</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--ser_abt section end-->
    @endsection

    @section('script') 
    @endsection
	