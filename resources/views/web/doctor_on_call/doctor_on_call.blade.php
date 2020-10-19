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
                                    <li> Doctor On CALL</li>
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
                            <h3>Doctor’s Consultation </h3>
                            <p class="med_toppadder20">Consult with city's top doctor’s at home within 1 hour. 2500+ doctors, 25+ specialties, 500+ hospitals. Get answers to your health problems by consulting a doctor </br>
                            Quickwell Remedy Healthcare doctor at home service provides expert care for you and your family that encompasses day-to-day healthcare needs as well as long term assistance.</p>
                            <p class="mb-0">We have following specialities:</p>
                        </div>
                        <div class="abt_chk med_toppadder10">
                            <div class="content">
                                <ul>
                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span> General Physician/ Internal Medicine 
                                    (For any common health issues like fever, cold, headache)</span></li>

                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span> Family Physician
                                    (For common health concerns like fever, cold, headache)</span></li>

                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span> Infectious Disease 
                                    (For Disease caused by microorganisms like severe Headache, fever, Animal bite)</span></li>

                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span> Paediatrics
                                    (Children’s health care like Injury, Infection, development delay)</span></li>

                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span> Gastroenterology /GI Medicine
                                    (For stomach problems like stomach ulcers, Diarrhoea, Constipation)</span></li>

                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span> Obstetrics & Gynaecology
                                    (For women Health issues like Irregular periods, pregnancy)</span></li>

                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span> Endocrinology 
                                    (For diabetes and hormonal problems like Hypertension, Thyroid)</span></li>

                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span> ENT
                                    (For Ear, Nose and throat problems like Ear ache, common cold)</span></li>

                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span> Orthopaedics 
                                    (For disorders of musculoskeletal systems like Bone fracture, Ligament tears)</span></li>

                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span> Dermatology 
                                    (For skin and hair problems like skin rash, Acne)</span></li>

                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span> Cardiology 
                                    (For heart and blood pressure problems like chest pain, Anxiety, High BP)</span></li>

                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span> Neurology
                                    (For disorders of nervous system like Stroke, Dementia)</span></li>

                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span> Ophthalmology
                                    (For eye care like cataract, blurred vision, Glaucoma)</span></li>

                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span> Urology
                                    (For disorders of urinary tract and male reproductive organs like Urinary infection, kidney stones)</span></li>

                                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><span> General Surgery 
                                    (For all kinds of surgeries like Hernia, Abdominal Surgery)</span></li>                                
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 abt_section">
                        <div class="abt_txt abt_txt_resp">
                            <h3 class="med_toppadder20">Pathology at Home </h3>
                            <p class="sub_header">Book Diagnostic Lab Tests</p>
                            <p>Being the most trusted brand when it comes to healthcare, Quickwell Remedy has top-notch, fully automated labs that are bar-coded with international quality standards. When you trust us with your samples for your regular health check-up, you can rest assured knowing that you will only get accurate results. And to top it all, you can choose from an extensive collection of body check-up packages at Quickwell Remedy that starts right from a simple blood test at home to master health check-up or full body check-up!</p>
                            
                            <p class="sub_header">Book a Lab Test at Home</p>
                            <p>When you need to get a blood test or a full body check-up done, you don’t have to visit a diagnostic centre near you because Quickwell Remedy brings it to you.</br>
                            Booking a lab test at home has never been easier before. With a few easy clicks on our user-friendly website, you can choose between the comprehensive healths check-up packages that Quickwell has to offer you.</br>
                            Our various packages promise to offer full medical check-up to help you take care of any health risks on time. You can take advantage of high-quality tests such as Complete Blood Count (CBC) test, Thyroid Profile (T3 + T4 + TSH), Vitamin B12, Liver Function Test, Kidney Function Test, Lipid Profile, PSA, Beta HCG (Pregnancy), Hemoglobin (Hb), HbA1c, ESR, FBS, Urine Routine, Pancreatic Profile, Iron Studies (Iron + Transferrin).</p>
                            
                            <p class="sub_header">How Does Quickwell Remedy Lab Test Online Work?</p>
                            <p> When you book a blood test at home or any other diagnostic test with us, a certified, trained and capable phlebotomist will visit you for blood sample collection at no extra cost. After the speedy analysis in our lab, you will receive accurate reports in your email within 24 hours from the sample collection time.</p>

                            <p class="sub_header">Complete Body Health Check-Up Packages</p>
                            <p>We cover all your healthcare needs by offering a wide array of health check-up packages. You can choose Basic Full body Check-up, Advanced Full body Check-up, Comprehensive Full body Check-up, Comprehensive Full body Check-up with Vitamin D and B12, Master Full body Check-up with Cancer Arthritis Screening (Female) Master Full body Check-up with Cancer Arthritis Screening (Male) or Aarogyam B based on your medical needs.</p>

                        <p class="sub_header"> We Aim to Serve You with Exceptional Healthcare Services</p>
                            <p>We have our state-of-the-art labs located in Bengaluru, Mumbai, Kolkata and Delhi for your convenience. We also have tie-ups with partner labs (Bioline Labs) to help serve more patients as well as maintain quality reporting in more than 200 cities including major cities like Pune, Chennai, Hyderabad, Ahmedabad, Gurgaon and Lucknow.</p>

                            <p class="sub_header">How to Book Diagnostic Tests Online?</p>
                            <p>Quickwell Remedy has made booking a lab test online easier. All you have to do is visit our labs page on our app or website and follow the below-mentioned steps.</p>
                            <ol>
                                <li>Browse through our various health care packages and choose the test you want to take.</li>
                                <li>If you are new to our website, then register with us before proceeding.</li>
                                <li>Enter appointment details such as date, time and click ‘Confirm’.</li>
                                <li>You can choose to pay online or through cash at the time of sample collection.</li>
                                <li>You can even book a lab test by calling our healthcare experts at 8008053191.</li>
                                <li>So, the next time you wonder - which is the best lab test near me? - turn to Quickwell Remedy</li>
                            </ol>

                            <p class="sub_header">What is the Full Body Checkup Price?</p>
                            <p>If you are wondering who offers the most cost-effective full body check-up near me, then the answer is Quickwell Remedy We aim at making healthcare not only simple, personal, accessible, but also affordable for everyone! You can choose from a wide range of healthcare packages whose prices differ based on your location. However, you don’t have to worry about the full body check-up cost when you book it with Quickwell Remedy as we offer exciting discounts from time to time.</p>

                            <p class="sub_header">Packages:</p>
                            <p>Basic Health Checkup with Covid Antibody @1249 </br>
                            Advanced Full Body Checkup @899</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--ser_abt section end-->
    @endsection

    @section('script') 
    @endsection
	