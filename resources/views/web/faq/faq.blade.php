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
                                <h1>faq</h1>
                                <ol class="breadcrumb">
                                    <li><a href="{{route('web.index')}}">Home</a>
                                    </li>
                                    <li>faq</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- med_tittle_section End-->

        <!-- abt service wrapper start-->
        <div class="abt_service_section med_toppadder100 faq">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="sidebar_wrapper sidebar_right_abt">
                            <div class="accordionFifteen">
                                <div class="panel-group" id="accordionFifteenLeft" role="tablist">
                                    <div class="panel panel-default sidebar_pannel">
                                        <div class="panel-heading desktop">
                                            <h4 class="panel-title">
                                                <a class="collapsed active" data-toggle="collapse" href="#collapseEightLeftone" aria-expanded="true">- What is an intensive care unit (ICU)?</a>
                                                    </h4>
                                        </div>
                                        <div id="collapseEightLeftone" class="panel-collapse collapse show" data-parent="#accordionFifteenLeft" aria-expanded="true" role="tabpanel">
                                            <div class="panel-body">
                                                <div class="panel_cont">
                                                    <p>An intensive care unit (ICU), sometimes called a critical care unit, is a specially designated area of the hospital where patients with serious illness or injury receive care. Care is provided by a team of specialists who monitor and treat the patient around the clock. Staff in the ICU is specially trained to use many different kinds of complex medical equipment to help monitor and treat seriously ill patients.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.panel-default -->
                                    <div class="panel panel-default sidebar_pannel">
                                        <div class="panel-heading horn">
                                            <h4 class="panel-title">
                                                        <a class="collapsed" data-toggle="collapse" href="#collapseEightLefttwo" aria-expanded="false">- Are there different kinds of intensive care units?</a>
                                                    </h4>
                                        </div>
                                        <div id="collapseEightLefttwo" class="panel-collapse collapse" data-parent="#accordionFifteenLeft" aria-expanded="false" style="height: 0px;" role="tabpanel">
                                            <div class="panel-body">
                                                <div class="panel_cont">
                                                    <p>There are several different ICUs. Some of the terms you may hear describing the ICUs are:</p>
                                                    <ul class="pointer">
                                                        <li><i class="fa fa-caret-right" aria-hidden="true"></i> MICU: Medical Intensive Care Unit </li>
                                                        <li><i class="fa fa-caret-right" aria-hidden="true"></i> CCU: Coronary Care Unit</li>
                                                        <li><i class="fa fa-caret-right" aria-hidden="true"></i> SICU: Surgical Intensive Care Unit</li>
                                                        <li><i class="fa fa-caret-right" aria-hidden="true"></i> Neuro ICU: Neurosciences Intensive Care Unit</li>
                                                        <li><i class="fa fa-caret-right" aria-hidden="true"></i> T/SICU: Trauma SICU</li>
                                                        <li><i class="fa fa-caret-right" aria-hidden="true"></i> CVICU: Cardiovascular Intensive Care Unit</li>
                                                        <li><i class="fa fa-caret-right" aria-hidden="true"></i> MICU/SICU: A combined Medical/Surgical Intensive Care Unit</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.panel-default -->
                                    <div class="panel panel-default sidebar_pannel">
                                        <div class="panel-heading bell">
                                            <h4 class="panel-title">
                                                        <a class="collapsed" data-toggle="collapse" href="#collapseEightLeftthree" aria-expanded="false">- Why does the medical team change so often?</a>
                                                    </h4>
                                        </div>
                                        <div id="collapseEightLeftthree" class="panel-collapse collapse " data-parent="#accordionFifteenLeft" aria-expanded="false" style="height: 0px;" role="tabpanel">
                                            <div class="panel-body">
                                                <div class="panel_cont">
                                                    <p>Each physician member of the ICU medical team is on a rotating schedule. Attending physicians are usually on service for two weeks at a time. The residents and interns rotate through all different specialties in the hospital in order to complete their training. Because of this, the team itself is constantly changing.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.panel-default -->
                                    <div class="panel panel-default sidebar_pannel">
                                        <div class="panel-heading bell">
                                            <h4 class="panel-title">
                                                        <a class="collapsed" data-toggle="collapse" href="#collapseEightLeftfour" aria-expanded="false">- May I visit a patient in intensive care?</a>
                                                    </h4>
                                        </div>
                                        <div id="collapseEightLeftfour" class="panel-collapse collapse" data-parent="#accordionFifteenLeft" aria-expanded="false" style="height: 0px;" role="tabpanel">
                                            <div class="panel-body">
                                                <div class="panel_cont">
                                                    <p>We encourage visiting and are committed to flexibility to best meet the patient's and family's needs. We therefore do not have specific "visiting hours," but encourage you to visit at the times that you think are best for you and your loved one. <br>
                                                    If the situation arises where it is better or safer for your loved one to not have visitors, your nurse will let you know and will ask you to step out for a few moments.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.panel-default -->
                                    <div class="panel panel-default sidebar_pannel">
                                        <div class="panel-heading bell">
                                            <h4 class="panel-title">
                                                        <a class="collapsed" data-toggle="collapse" href="#collapseEightLeftfive" aria-expanded="false">- Can I bring flowers or plants to the ICU?</a>
                                                    </h4>
                                        </div>
                                        <div id="collapseEightLeftfive" class="panel-collapse collapse" data-parent="#accordionFifteenLeft" aria-expanded="false" style="height: 0px;" role="tabpanel">
                                            <div class="panel-body">
                                                <div class="panel_cont">
                                                    <p>Unfortunately, plants and flowers are not permitted in intensive care. Critically ill patients have a lot of work to do in the healing process. Their immune systems are already working hard to fight infection and heal damaged tissue. Plants can sometimes carry insects and germs into the environment that may further stress your loved one's immune system.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.panel-default -->
                                    <div class="panel panel-default sidebar_pannel">
                                        <div class="panel-heading bell">
                                            <h4 class="panel-title">
                                                        <a class="collapsed" data-toggle="collapse" href="#collapseEightLeftsix" aria-expanded="false">- Why might a patient be restrained while in the ICU?</a>
                                                    </h4>
                                        </div>
                                        <div id="collapseEightLeftsix" class="panel-collapse collapse" data-parent="#accordionFifteenLeft" aria-expanded="false" style="height: 0px;" role="tabpanel">
                                            <div class="panel-body">
                                                <div class="panel_cont">
                                                    <p>Sometimes, illness or injury causes patients to become disoriented, confused, or agitated. When this happens, we must be concerned about safety. You may notice restraints on a patient's wrists, ankles, or elsewhere. This is to ensure that patients do not pull at necessary equipment, such as IV lines or tubes, or try to get out of bed when they are too ill to walk alone.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.panel-default -->
                                    <div class="panel panel-default sidebar_pannel">
                                        <div class="panel-heading bell">
                                            <h4 class="panel-title">
                                                        <a class="collapsed" data-toggle="collapse" href="#collapseEightLeftseven" aria-expanded="false">- What sort of medical care happens in the ICU?</a>
                                                    </h4>
                                        </div>
                                        <div id="collapseEightLeftseven" class="panel-collapse collapse" data-parent="#accordionFifteenLeft" aria-expanded="false" style="height: 0px;" role="tabpanel">
                                            <div class="panel-body">
                                                <div class="panel_cont">
                                                    <p>Patients in the ICU are very sick. They are often connected to many monitors that allow healthcare professionals to monitor their vital signs on a minute-to-minute basis. Patients often have intravenous tubes (IVs) in their arms and neck so that medications and fluids can be delivered directly into their veins. They often have a tube placed into the body to drain and collect urine. Some patients are also connected to life support machines, such as breathing machines or dialysis machines. Patients may also have a tube through their nose or mouth to deliver liquid food directly into the stomach. In order to tolerate the tubes, IVs, and life support, many patients receive sedating medications.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.panel-default -->
                                    <div class="panel panel-default sidebar_pannel">
                                        <div class="panel-heading bell">
                                            <h4 class="panel-title">
                                                        <a class="collapsed" data-toggle="collapse" href="#collapseEightLefteight" aria-expanded="false">- Is it normal to feel depressed after hospitalization in an ICU?</a>
                                                    </h4>
                                        </div>
                                        <div id="collapseEightLefteight" class="panel-collapse collapse" data-parent="#accordionFifteenLeft" aria-expanded="false" style="height: 0px;" role="tabpanel">
                                            <div class="panel-body">
                                                <div class="panel_cont">
                                                    <p>Depression occurs in one out of three patients after critical illness. Symptoms of depression that might be experienced include prolonged sadness, loss of interest in activities that used to be enjoyable, inability to concentrate, changes in appetite, and changes in sleep.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.panel-default -->
                                    <div class="panel panel-default sidebar_pannel">
                                        <div class="panel-heading bell">
                                            <h4 class="panel-title">
                                                        <a class="collapsed" data-toggle="collapse" href="#collapseEightLeftnine" aria-expanded="false">- What sort of recovery should I expect?</a>
                                                    </h4>
                                        </div>
                                        <div id="collapseEightLeftnine" class="panel-collapse collapse" data-parent="#accordionFifteenLeft" aria-expanded="false" style="height: 0px;" role="tabpanel">
                                            <div class="panel-body">
                                                <div class="panel_cont">
                                                    <p>Recovery time in the ICU can be highly variable, from a few days to a few weeks.  At times, it is too early to know how long recovery will take, but asking can help you plan your time and resources. Stay in touch with the attending physician in a continued, open relationship. This doctor and the medical team can advise you on the condition of your loved one’s health and next steps</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.panel-default -->
                                </div>
                                <!--end of /.panel-group-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- abt service wrapper end-->
    @endsection

    @section('script') 
    @endsection
	