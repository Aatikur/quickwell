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
                            <h1>Career</h1>
                            <ol class="breadcrumb">
                                <li><a href="{{route('web.index')}}">Home</a>
                                </li>
                                <li>Career</li>
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
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="choose_heading_wrapper med_bottompadder30">
                        <h1 class="med_bottompadder20">Upload Resume</h1>
                        <img src="{{asset('web/images/line.png')}}" alt="title" class="med_bottompadder20">
                    </div>

                    <form>
                        <div class="cont_main_section">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="contect_form1 dc_cont_div">
                                        <label for="">Name </label>
                                        <input type="text" name="full_name" placeholder="Full Name" class="require">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="contect_form1 dc_cont_div">
                                        <label for="">Email</label>
                                        <input type="text" name="email" placeholder="Email" class="require" data-valid="email" data-error="Email should be valid.">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="contect_form1 dc_cont_div">
                                        <label for="">Phone</label>
                                        <input type="text" name="contact_no" placeholder="Phone" class="require">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="contect_form1 dc_cont_div">
                                        <label for="">Post</label>
                                        <select>
                                            <option> Purchase Manager </option>
                                            <option> Hr Manager </option>
                                            <option> Operational Head </option>
                                            <option> Graphic Designer </option>
                                            <option> Retail Store Manager </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="contect_form1 dc_cont_div">
                                        <label for="">Upload resume *</label>
                                        <input type="file" name="subject" style="padding: 10px;">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="response"></div>
                                    <div class="contact_btn_wrapper med_toppadder30">
                                        <button type="button" class="submitForm">submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 abt_section">
                    <div class="abt_heading_wrapper">
                        <h1 class="med_bottompadder20">Open Positions</h1>
                        <p>We’re always eager to meet fresh talent, so check out our open positions</p>
                        <img src="{{asset('web/images/line.png')}}" alt="title" class="med_bottompadder20">
                    </div>
                    <div class="abt_block">
                        <div class="abt_txt">
                            <h3>1.	Purchase Manager</h3>
                            <p class="sub_header med_toppadder20">Roles and Responsibilities </p>
                        </div>
                        <div class="">
                            <div class="content">
                                <ul>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Maintain records of goods ordered and received.</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Locate vendors of materials, equipment or supplies, and interview them in order to determine product availability and terms of sales.</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Prepare and process requisitions and purchase orders for supplies and equipment.</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Control purchasing department budgets. </span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Review purchase order claims and contracts for conformance to company policy.</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Analyze market and delivery systems in order to assess present and future material availability.</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Develop and implement purchasing and contract management instructions, policies, and procedures.</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Participate in the development of specifications for equipment, products or substitute materials.</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Resolve vendor or contractor grievances, and claims against suppliers.</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Represent companies in negotiating contracts and formulating policies with suppliers.</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Direct and coordinate activities of personnel engaged in buying, selling, and distributing materials, equipment, machinery, and supplies.</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="abt_txt">
                            <p class="sub_header med_toppadder20">Education</p>
                        </div>
                        <div class="">
                            <div class="content">
                                <ul>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Minimum B Pharmacy or PharmD</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="abt_txt">
                            <p class="sub_header med_toppadder20">Work Experience</p>
                        </div>
                        <div class="">
                            <div class="content">
                                <ul>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>3-5 years of relevant work experience</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="abt_block">
                        <div class="abt_txt">
                            <h3>2.	Purchase Manager</h3>
                            <p class="sub_header med_toppadder20">Roles and Responsibilities </p>
                        </div>
                        <div class="">
                            <div class="content">
                                <ul>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Develop and implement HR strategies and initiatives aligned with the overall business strategy.</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Bridge management and employee relations by addressing demands, grievances or other issues.</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Manage the recruitment and selection process.</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Support current and future business needs through the development, engagement, motivation and preservation of human capital.</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Develop and monitor overall HR strategies, systems, tactics and procedures across the organization.</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Nurture a positive working environment.</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Oversee and manage a performance appraisal system that drives high performance.</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Maintain pay plan and benefits program.</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Assess training needs to apply and monitor training programs</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Report to management and provide decision support through HR metrics</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Ensure legal compliance throughout human resource management</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="abt_txt">
                            <p class="sub_header med_toppadder20">Education</p>
                        </div>
                        <div class="">
                            <div class="content">
                                <ul>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>MBA in HR </span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="abt_txt">
                            <p class="sub_header med_toppadder20">Work Experience</p>
                        </div>
                        <div class="">
                            <div class="content">
                                <ul>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>3-5 years of relevant work experience</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="abt_block">
                        <div class="abt_txt">
                            <h3>3.	Purchase Manager</h3>
                            <p class="sub_header med_toppadder20">Roles and Responsibilities </p>
                        </div>
                        <div class="">
                            <div class="content">
                                <ul>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span> Oversees the operations of the pharmacy department </span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span> Make sure that customers are prescribed the correct medicine </span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span> Ensure the pharmacy complies with federal and state regulations </span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span> Communicate effectively with customers relating to queries and issues </span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span> Ensure staff provide high standards of customer service to customers </span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span> Assist in the on boarding process of new hires </span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span> Train staff in prioritizing customer orders and delivering them efficiently </span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span> Instruct staff to interact professionally and courteously to customers at all times </span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="abt_txt">
                            <p class="sub_header med_toppadder20">Education</p>
                        </div>
                        <div class="">
                            <div class="content">
                                <ul>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Minimum Doctor of Pharmacy (Pharm.D)</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="abt_txt">
                            <p class="sub_header med_toppadder20">Work Experience</p>
                        </div>
                        <div class="">
                            <div class="content">
                                <ul>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>5-7 years of relevant work experience</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="abt_block">
                        <div class="abt_txt">
                            <h3>4.	Purchase Manager</h3>
                            <p class="sub_header med_toppadder20">Roles and Responsibilities </p>
                        </div>
                        <div class="">
                            <div class="content">
                                <ul>                                                                        
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Planning concepts by studying relevant information and materials.</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Illustrating concepts by designing examples of art arrangement, size, type size and style and submitting them for approval.</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Creating a wide range of graphics and layouts for product illustrations, company logos, and websites with software such as Photoshop and InDesign.</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Coordinating with outside agencies, art services, web designer, marketing, printers, and colleagues as necessary.</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="abt_txt">
                            <p class="sub_header med_toppadder20">Education</p>
                        </div>
                        <div class="">
                            <div class="content">
                                <ul>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Bachelor’s degree in graphic design or related field.</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="abt_txt">
                            <p class="sub_header med_toppadder20">Work Experience</p>
                        </div>
                        <div class="">
                            <div class="content">
                                <ul>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>2-4 years of relevant work experience.</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="abt_block">
                        <div class="abt_txt">
                            <h3>5.	Purchase Manager</h3>
                            <p class="sub_header med_toppadder20">Roles and Responsibilities </p>
                        </div>
                        <div class="">
                            <div class="content">
                                <ul>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Deliver excellent service to ensure high levels of customer satisfaction.</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Motivate the sales team to meet sales objectives by training and mentoring staff.</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Create business strategies to attract new customers, expand store traffic, and enhance profitability.</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Respond to customer complaints and concerns in a professional manner.</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Ensure store compliance with health and safety regulations.</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Develop and arrange promotional material and in-store displays.</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Prepare detailed reports on buying trends, customer requirements, and profits.</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Undertake store administration duties such as managing store budgets and updating financial records.</span></li>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Monitor inventory levels and order new items.</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="abt_txt">
                            <p class="sub_header med_toppadder20">Education</p>
                        </div>
                        <div class="">
                            <div class="content">
                                <ul>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>Minimum Diploma in Pharmacy or Bachelors in Pharmacy</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="abt_txt">
                            <p class="sub_header med_toppadder20">Work Experience</p>
                        </div>
                        <div class="">
                            <div class="content">
                                <ul>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span>1-3 years of relevant work experience</span></li>
                                </ul>
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
	