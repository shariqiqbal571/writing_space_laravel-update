@extends('custom_layout.customer')
@section('main_content')

<style>
    .switch-container {
        display: flex;
        align-items: center;
    }

    .switch {
        position: relative;
        display: inline-block;
        width: 48px;
        height: 20px;
    }

    .switch input {
        display: none;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
        border-radius: 34px;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 14px;
        width: 14px;
        left: 4px;
        bottom: 3px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
        border-radius: 50%;
    }

    input:checked+.slider {
        background-color: #2196F3;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    #status {
        margin-left: 10px;
    }

    .mod-2 li {
        padding: 10px 0;
        text-align: center;
        border: 1px solid;
    }
</style>
<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">

        <!--begin::Wrapper-->
        <div class="flex-column flex-row-fluid" id="kt_app_wrapper">

            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">
                    <!--begin::Toolbar-->
                    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                        <!--begin::Toolbar container-->
                        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                            <!--begin::Page title-->
                            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                                <!--begin::Title-->
                                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-1 flex-column justify-content-center my-0">Place New Orders</h1>
                                <!--end::Title-->

                            </div>
                        </div>
                        <!--end::Toolbar container-->
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Content-->
                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="app-container container-xxl mb-10">
                            <h1 class="page-heading d-flex text-gray-900 fw-bold fs-1 flex-column justify-content-center my-0 text-center">Custom Example Essay Writing Service</h1>
                        </div>
                        <!--end::Content container-->
                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="app-container container-xxl mb-5">
                            <h3 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 text-center">Pricing Plans & Delivery Dates</h3>
                        </div>
                        <!--end::Content container-->
                        <div class="px-10 mb-20">
                            <div class="plans">
                                @if($pricing)
@foreach ($pricing as $p)
    
                                <ul id="pricing_{{$p->id}}" class="prising-plans selected-plan">
                                    <li>{{$p->text}}</li>
                                    @if($p->min == '15')
                                    <li>{{$p->min}} {{$p->duration_type}} or {{$p->max}}</li>
                                    @else
                                    <li>{{$p->min}} - {{$p->max}} {{$p->duration_type}}</li>
                                    @endif
                                   
                                    <li>{{$p->cost}}</li>
                                    <li>${{$p->cost_per_page}} per page</li>
                                    <li>{{$p->page_limit}} page-limit</li>
                                    <li style="display: none;" id="click_{{$p->id}}"><i class="fa-solid fa-check" style="color:#2196F3;"></i></li>
                                </ul>
@endforeach

                                @endif
                             
                            </div>
                        </div>
                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="app-container container-xxl mb-20">
                            <h3 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 text-center">New customer? Try out our service with a 10% discount (coupon code:<span id="my_coupon">10OFFNEW</span>)</h3>
                        </div>
                        <!--end::Content container-->
                        <div class="px-20">
                            <div class="row">
                                <div class="col-md-8 mb-10">
                                    <!--begin::Content container-->
                                    <div id="kt_app_content_container" class=" mb-10">
                                        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-1 flex-column justify-content-center my-0 text-decoration-underline">Let’s Get Started On Your Order</h1>
                                    </div>
                                    <!--end::Content container-->
                                    <!--begin::Content container-->
                                    <div id="kt_app_content_container" class=" mb-10">
                                        <h3 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 border-bottom">When would you like to receive this order?</h3>
                                    </div>
                                    <div class="">

                                        <form action="" class="kt_invoice_form">
                                            <div class="col-md-6 mb-10">
                                                <select name="pricing" id="pricing" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Pricing">
                                                    <option></option>
                                                    @if($pricing)
                                                    @foreach ($pricing as $p)
                                                    @if($p->min == '15')
                                                    <option value="{{$p->id}}">{{$p->min}} {{$p->duration_type}} or {{$p->max}} = ${{$p->cost_per_page}} per page</option>
                                                    @else
                                                    <option value="{{$p->id}}">{{$p->min}}-{{$p->max}} {{$p->duration_type}} = ${{$p->cost_per_page}} per page</option>
                                                    @endif
                                                   
                                                  
                                                   
                                                    @endforeach

                                @endif
                                                </select>
                                            </div>
                                            <div class="row col-md-8 mb-20">
                                                <div class="col-md-6">
                                                    <label for="" class="mb-3 fs-6 fw-semibold">Select Specific Date</label>
                                                    <input type="date" id="meeting-date" class="form-control" name="meeting-date" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" max="2024-12-12" />
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="" class="mb-3 fs-6 fw-semibold">Select Specific Date</label>
                                                    <div class="d-flex">
                                                        <div class="me-3">
                                                            <input type="time" id="meeting-time" class="form-control" name="meeting-time" value="{{\Carbon\Carbon::now()->format('H:i')}}" min="{{\Carbon\Carbon::now()->format('H:i')}}"  />

                                                        </div>
                                                        <div class="me-3">
                                                            @php
    $currentHour = \Carbon\Carbon::now()->format('H');
@endphp

<select name="ampm" id="ampm" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="AM">
    <option></option>
    <option value="AM" {{ $currentHour < 12 ? 'selected' : '' }}>AM</option>
    <option value="PM" {{ $currentHour >= 12 ? 'selected' : '' }}>PM</option>
</select>
                                                        </div>
                                                        <div class="align-items-center d-flex">
                                                            <label for="" class="mb-3 fs-6 fw-semibold">EST</label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div id="kt_app_content_container" class=" mb-10">
                                                <h3 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 border-bottom">Your Order Details</h3>
                                            </div>
                                            <div class="col-md-6 mb-10">
                                                <label for="" class="mb-3 fs-6 fw-semibold">Email Address:*</label>
                                                <div class="d-flex">
                                                    <input type="text" placeholder="Email Address" name="email" id="email" autocomplete="off" class="form-control bg-transparent" /><button type="button" class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#modal-1"><i class="bi bi-info-circle-fill ms-3"></i></button>
                                                </div>
                                                <div class="d-flex">
                                                    <input type="hidden" placeholder="Email Address" name="user_id" id="user_id" value="1" autocomplete="off" class="form-control bg-transparent" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-10">
                                                <label for="" class="mb-3 fs-6 fw-semibold">Backup Email Address (optional):</label>
                                                <div class="d-flex">
                                                    <input type="text" placeholder="Email Address" name="backup-email" id="backup-email" autocomplete="off" class="form-control bg-transparent" /><button type="button" class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#modal-2"><i class="bi bi-info-circle-fill ms-3"></i></button>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-10">
                                                <label for="" class="mb-3 fs-6 fw-semibold">Number of Pages:</label>
                                                <div class="d-flex">
                                                    <input type="number" placeholder="1" id='no-page' name="no-page" autocomplete="off" class="form-control bg-transparent w-25" /><button type="button" class="border-0 bg-white fs-6 fw-semibold" data-bs-toggle="modal" data-bs-target="#modal-3"><i class="bi bi-info-circle-fill mx-3"></i> 1 page = approximately 300 words</button>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-10">
                                                <label for="" class="mb-3 fs-6 fw-semibold">Number of sources:</label>
                                                <div class="d-flex">
                                                    <input type="number" id="no_of_extra_sources" placeholder="1" name="no_of_extra_sources" autocomplete="off" class="form-control bg-transparent w-25" /><button type="button" class="border-0 bg-white fs-6 fw-semibold" data-bs-toggle="modal" data-bs-target="#modal-4"><i class="bi bi-info-circle-fill mx-3"></i> Details & Limitations</button>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-10">
                                                <label for="" class="mb-3 fs-6 fw-semibold">Bibliography format & citation style:*</label>
                                                <select name="paper_format" id="paper_format" class="form-select form-select-solid " data-control="select2" data-hide-search="true" data-placeholder="Choose">
                                                    <option></option>
                                                    <option value="1">None</option>
                                                    <option value="2">Let the writer choose</option>
                                                    <option value="1">MLA</option>
                                                    <option value="2">APA</option>
                                                    <option value="1">Turabian</option>
                                                    <option value="2">Huavard</option>
                                                    <option value="1">AMA</option>
                                                    <option value="2">Chicago</option>
                                                    <option value="2">BCE</option>
                                                    <option value="1">IEEE</option>
                                                    <option value="2">AIP</option>
                                                    <option value="2">ACS</option>
                                                    <option value="2">Bluebook</option>
                                                    <option value="1">Does Not Matter</option>
                                                    <option value="2">Other (Not Listed Above)</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-10">
                                                <label for="" class="mb-3 fs-6 fw-semibold">Are you submitting resources to the writer?:</label>
                                                <div class="d-flex">
                                                    <input type="number" placeholder="1" name="submitting" id="submitting" autocomplete="off" class="form-control bg-transparent w-25" /><button type="button" class="border-0 bg-white fs-6 fw-semibold" data-bs-toggle="modal" data-bs-target="#modal-5"><i class="bi bi-info-circle-fill mx-3"></i> Details & Limitations</button>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-10">
                                                <label for="" class="mb-3 fs-6 fw-semibold">Type of document:*</label>
                                                <select name="term_of_paper" id="term_of_paper" class="form-select form-select-solid " data-control="select2" data-hide-search="true" data-placeholder="Choose">
                                                    <option value="17000">Term Paper</option>
                                                    <option value="17019">Marketing Plan</option>
                                                    <option value="17020">Annotated Bibliography</option>
                                                    <option value="17021">Article Review</option>
                                                    <option value="17022">Creative Writing</option>
                                                    <option value="17023">Peer Reviewed Journal</option>
                                                    <option value="17024">Poem</option>
                                                    <option value="17025">White Paper</option>
                                                    <option value="17026">Admission Essay</option>
                                                    <option value="17027">Application Essay</option>
                                                    <option value="17028">Journal Professional</option>
                                                    <option value="17029">Corporate</option>
                                                    <option value="17030">Power Point Presentation</option>
                                                    <option value="17031">Resume</option>
                                                    <option value="17032">Website Content</option>
                                                    <option value="17018">Capstone Project</option>
                                                    <option value="17017">Case Study</option>
                                                    <option value="17016">Business Plan</option>
                                                    <option value="17001">Essay</option>
                                                    <option value="17002">Book Report</option>
                                                    <option value="17003">Research Paper</option>
                                                    <option value="17004">Dissertation or Thesis complete</option>
                                                    <option value="17005">Only the Introduction chapter</option>
                                                    <option value="17006">Only the Hypothesis chapter</option>
                                                    <option value="17007">Only the Literature Review chapter</option>
                                                    <option value="17008">Only the Methodology chapter</option>
                                                    <option value="17009">Only the Conclusion chapter</option>
                                                    <option value="17010">Multiple Chapters</option>
                                                    <option value="17011">Research Proposal</option>
                                                    <option value="17013">Book Review</option>
                                                    <option value="17014">Business Proposal</option>
                                                    <option value="17015">SWOT</option>
                                                    <option value="17033">Other (explain in description)</option>
                                                    <option value="12999">Other (not listed above)</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-10">
                                                <label for="" class="mb-3 fs-6 fw-semibold">General subject or field:*</label>
                                                <select name="subject" id="subject" class="form-select form-select-solid " data-control="select2" data-hide-search="true" data-placeholder="Choose">
                                                    <option></option>
                                                    <option value="27422">Aboriginal Studies</option>
                                                    <option value="27421">Abortion</option>
                                                    <option value="27420">Accounting / Finance (general)</option>
                                                    <option value="27419">&nbsp;&nbsp;&nbsp;Accounting: Corporate Finance</option>
                                                    <option value="27418">&nbsp;&nbsp;&nbsp;Accounting: Economic History</option>
                                                    <option value="27417">&nbsp;&nbsp;&nbsp;Accounting: Economic Theory</option>
                                                    <option value="27416">&nbsp;&nbsp;&nbsp;Accounting: Economics</option>
                                                    <option value="27415">&nbsp;&nbsp;&nbsp;Accounting: Intl. Economics</option>
                                                    <option value="27414">&nbsp;&nbsp;&nbsp;Accounting: Intl. Finance</option>
                                                    <option value="27413">&nbsp;&nbsp;&nbsp;Accounting: Money / Banking</option>
                                                    <option value="27412">&nbsp;&nbsp;&nbsp;Accounting: Personal Finance</option>
                                                    <option value="27411">Admissions Essays / Letters</option>
                                                    <option value="27410">Advertising</option>
                                                    <option value="27409">Aeronautics</option>
                                                    <option value="27408">Africa / African Studies</option>
                                                    <option value="27407">African-Americans (general)</option>
                                                    <option value="27406">&nbsp;&nbsp;&nbsp;African-Americans: Civil Rights</option>
                                                    <option value="27405">&nbsp;&nbsp;&nbsp;African-Americans: Historical</option>
                                                    <option value="27404">&nbsp;&nbsp;&nbsp;African-Americans: Leaders</option>
                                                    <option value="27403">&nbsp;&nbsp;&nbsp;African-Americans: Philosophy</option>
                                                    <option value="27402">&nbsp;&nbsp;&nbsp;African-Americans: Politics</option>
                                                    <option value="27401">&nbsp;&nbsp;&nbsp;African-Americans: Racism</option>
                                                    <option value="27400">&nbsp;&nbsp;&nbsp;African-Americans: Social Issues</option>
                                                    <option value="27399">&nbsp;&nbsp;&nbsp;African-Americans: Slavery</option>
                                                    <option value="27398">Aging</option>
                                                    <option value="27397">Agriculture</option>
                                                    <option value="27396">American History</option>
                                                    <option value="27395">American Indian Studies</option>
                                                    <option value="27394">Anatomy</option>
                                                    <option value="27393">Animals / Animal Rights</option>
                                                    <option value="27392">Anthropology</option>
                                                    <option value="27391">Aquaculture</option>
                                                    <option value="27390">Archaeology</option>
                                                    <option value="27389">Architecture</option>
                                                    <option value="27388">Argumentative</option>
                                                    <option value="27387">Art (general)</option>
                                                    <option value="27386">&nbsp;&nbsp;&nbsp;Art: Ancient</option>
                                                    <option value="27385">&nbsp;&nbsp;&nbsp;Art: Artists</option>
                                                    <option value="27384">&nbsp;&nbsp;&nbsp;Art: Design</option>
                                                    <option value="27383">&nbsp;&nbsp;&nbsp;Art: Famous Works</option>
                                                    <option value="27382">&nbsp;&nbsp;&nbsp;Art: Genre</option>
                                                    <option value="27381">&nbsp;&nbsp;&nbsp;Art: Graphic Arts</option>
                                                    <option value="27380">&nbsp;&nbsp;&nbsp;Art: Photographic</option>
                                                    <option value="27379">&nbsp;&nbsp;&nbsp;Art: Political Aspects</option>
                                                    <option value="27378">&nbsp;&nbsp;&nbsp;Art: Social Aspects</option>
                                                    <option value="27377">Asia / Asian Studies (general)</option>
                                                    <option value="27376">&nbsp;&nbsp;&nbsp;Asia: China</option>
                                                    <option value="27375">&nbsp;&nbsp;&nbsp;Asia: India</option>
                                                    <option value="27374">&nbsp;&nbsp;&nbsp;Asia: Japan</option>
                                                    <option value="27373">&nbsp;&nbsp;&nbsp;Asia: Korea</option>
                                                    <option value="27372">Astronomy</option>
                                                    <option value="27371">Authors</option>
                                                    <option value="27370">Aviation</option>
                                                    <option value="27369">Banking</option>
                                                    <option value="27368">Biography</option>
                                                    <option value="27367">Biology</option>
                                                    <option value="27366">Birth Control</option>
                                                    <option value="27365">Broadcasting</option>
                                                    <option value="27364">Bureaucracy</option>
                                                    <option value="27363">Business (general)</option>
                                                    <option value="27362">&nbsp;&nbsp;&nbsp;Business: Advertising</option>
                                                    <option value="27361">&nbsp;&nbsp;&nbsp;Business: Applied Operations</option>
                                                    <option value="27360">&nbsp;&nbsp;&nbsp;Business: Plans</option>
                                                    <option value="27359">&nbsp;&nbsp;&nbsp;Business: Theory</option>
                                                    <option value="27358">&nbsp;&nbsp;&nbsp;Business: Case Studies</option>
                                                    <option value="27357">&nbsp;&nbsp;&nbsp;Business: Companies</option>
                                                    <option value="27356">&nbsp;&nbsp;&nbsp;Business: Consumer Behavior</option>
                                                    <option value="27355">&nbsp;&nbsp;&nbsp;Business: Ethics</option>
                                                    <option value="27354">&nbsp;&nbsp;&nbsp;Business: Human Resources</option>
                                                    <option value="27353">&nbsp;&nbsp;&nbsp;Business: Industries</option>
                                                    <option value="27352">&nbsp;&nbsp;&nbsp;Business: Information Systems</option>
                                                    <option value="27351">&nbsp;&nbsp;&nbsp;Business: International</option>
                                                    <option value="27350">&nbsp;&nbsp;&nbsp;Business: Law</option>
                                                    <option value="27349">&nbsp;&nbsp;&nbsp;Business: Management</option>
                                                    <option value="27348">&nbsp;&nbsp;&nbsp;Business: Management Theory</option>
                                                    <option value="27347">&nbsp;&nbsp;&nbsp;Business: Marketing</option>
                                                    <option value="27346">&nbsp;&nbsp;&nbsp;Business: Operations</option>
                                                    <option value="27345">&nbsp;&nbsp;&nbsp;Business: Small</option>
                                                    <option value="27344">&nbsp;&nbsp;&nbsp;Business: Technical Writing</option>
                                                    <option value="27343">Canada / Canadian</option>
                                                    <option value="27342">Capital Punishment</option>
                                                    <option value="27341">Careers</option>
                                                    <option value="27340">Caribbean</option>
                                                    <option value="27339">Case Studies</option>
                                                    <option value="27338">Chemistry</option>
                                                    <option value="27337">Child Abuse</option>
                                                    <option value="27336">Child Care</option>
                                                    <option value="27335">Children</option>
                                                    <option value="27334">China / Chinese</option>
                                                    <option value="27333">Civil War</option>
                                                    <option value="27332">Communication (general)</option>
                                                    <option value="27331">&nbsp;&nbsp;&nbsp;Communication: Journalism</option>
                                                    <option value="27330">&nbsp;&nbsp;&nbsp;Communication: Language</option>
                                                    <option value="27329">&nbsp;&nbsp;&nbsp;Communication: Media</option>
                                                    <option value="27328">&nbsp;&nbsp;&nbsp;Communication: Non-verbal</option>
                                                    <option value="27327">&nbsp;&nbsp;&nbsp;Communication: Speech</option>
                                                    <option value="27326">&nbsp;&nbsp;&nbsp;Communication: Television</option>
                                                    <option value="27325">Communism</option>
                                                    <option value="27324">Computer Science</option>
                                                    <option value="27323">Computers (general)</option>
                                                    <option value="27322">&nbsp;&nbsp;&nbsp;Computers: Industry</option>
                                                    <option value="27321">&nbsp;&nbsp;&nbsp;Computers: Technology</option>
                                                    <option value="27320">&nbsp;&nbsp;&nbsp;Computers: Connections</option>
                                                    <option value="27319">&nbsp;&nbsp;&nbsp;Computers: Hardware</option>
                                                    <option value="27318">&nbsp;&nbsp;&nbsp;Computers: History</option>
                                                    <option value="27317">&nbsp;&nbsp;&nbsp;Computers: Internet</option>
                                                    <option value="27316">&nbsp;&nbsp;&nbsp;Computers: Operating Systems</option>
                                                    <option value="27315">&nbsp;&nbsp;&nbsp;Computers: Software</option>
                                                    <option value="27314">&nbsp;&nbsp;&nbsp;Computers: Social Networking</option>
                                                    <option value="27313">&nbsp;&nbsp;&nbsp;Computers: Wireless</option>
                                                    <option value="27312">Construction</option>
                                                    <option value="27311">Consumerism</option>
                                                    <option value="27310">Cooking</option>
                                                    <option value="27309">Corporal Punishment</option>
                                                    <option value="27308">Corrections / Police (general)</option>
                                                    <option value="27307">&nbsp;&nbsp;&nbsp;Corrections: Courts</option>
                                                    <option value="27306">&nbsp;&nbsp;&nbsp;Corrections: Criminal Justice</option>
                                                    <option value="27305">&nbsp;&nbsp;&nbsp;Corrections: Forensics</option>
                                                    <option value="27304">&nbsp;&nbsp;&nbsp;Corrections: Intelligence</option>
                                                    <option value="27303">&nbsp;&nbsp;&nbsp;Corrections: Juvenile Justice</option>
                                                    <option value="27302">&nbsp;&nbsp;&nbsp;Corrections: Law Enforcement</option>
                                                    <option value="27301">&nbsp;&nbsp;&nbsp;Corrections: Lawyers</option>
                                                    <option value="27300">&nbsp;&nbsp;&nbsp;Corrections: Organized Crime</option>
                                                    <option value="27299">&nbsp;&nbsp;&nbsp;Corrections: Police Misconduct</option>
                                                    <option value="27298">&nbsp;&nbsp;&nbsp;Corrections: Prisons</option>
                                                    <option value="27297">&nbsp;&nbsp;&nbsp;Corrections: Public Perception</option>
                                                    <option value="27296">&nbsp;&nbsp;&nbsp;Corrections: Sentencing</option>
                                                    <option value="27295">Cosmetology</option>
                                                    <option value="27294">Counseling</option>
                                                    <option value="27293">Creative Writing</option>
                                                    <option value="27292">Criminal Justice (general)</option>
                                                    <option value="27291">&nbsp;&nbsp;&nbsp;Criminal Justice: Juveniles</option>
                                                    <option value="27290">&nbsp;&nbsp;&nbsp;Criminal Justice: Corrections</option>
                                                    <option value="27289">&nbsp;&nbsp;&nbsp;Criminal Justice: Courts</option>
                                                    <option value="27288">&nbsp;&nbsp;&nbsp;Criminal Justice: Police</option>
                                                    <option value="27287">&nbsp;&nbsp;&nbsp;Criminal Justice: Prisons</option>
                                                    <option value="27286">&nbsp;&nbsp;&nbsp;Criminal Justice: Intelligence</option>
                                                    <option value="27285">&nbsp;&nbsp;&nbsp;Criminal Justice: Organized Crime</option>
                                                    <option value="27284">&nbsp;&nbsp;&nbsp;Criminal Justice: Forensics</option>
                                                    <option value="27283">Criminology</option>
                                                    <option value="27282">Cuba</option>
                                                    <option value="27281">Culture</option>
                                                    <option value="27280">Death / Dying (general)</option>
                                                    <option value="27279">&nbsp;&nbsp;&nbsp;Death: Euthanasia</option>
                                                    <option value="27278">&nbsp;&nbsp;&nbsp;Death: Suicide</option>
                                                    <option value="27277">&nbsp;&nbsp;&nbsp;Death: Elderly</option>
                                                    <option value="27276">Death Penalty</option>
                                                    <option value="27275">Disease</option>
                                                    <option value="27274">Drama (general)</option>
                                                    <option value="27273">&nbsp;&nbsp;&nbsp;Drama: American</option>
                                                    <option value="27272">&nbsp;&nbsp;&nbsp;Drama: English</option>
                                                    <option value="27271">&nbsp;&nbsp;&nbsp;Drama: World</option>
                                                    <option value="27270">Drugs / Alcohol</option>
                                                    <option value="27269">E-commerce</option>
                                                    <option value="27268">Ecology</option>
                                                    <option value="27267">Economics (general)</option>
                                                    <option value="27266">&nbsp;&nbsp;&nbsp;Economics: Banking</option>
                                                    <option value="27265">&nbsp;&nbsp;&nbsp;Economics: Economists</option>
                                                    <option value="27264">&nbsp;&nbsp;&nbsp;Economics: Inflation</option>
                                                    <option value="27263">&nbsp;&nbsp;&nbsp;Economics: International Trade</option>
                                                    <option value="27262">&nbsp;&nbsp;&nbsp;Economics: Taxation</option>
                                                    <option value="27261">Education (general)</option>
                                                    <option value="27260">&nbsp;&nbsp;&nbsp;Education: Administration</option>
                                                    <option value="27259">&nbsp;&nbsp;&nbsp;Education: Classroom Mgmt.</option>
                                                    <option value="27258">&nbsp;&nbsp;&nbsp;Education: Coaching</option>
                                                    <option value="27257">&nbsp;&nbsp;&nbsp;Education: Computers</option>
                                                    <option value="27256">&nbsp;&nbsp;&nbsp;Education: Counseling</option>
                                                    <option value="27255">&nbsp;&nbsp;&nbsp;Education: Countries</option>
                                                    <option value="27254">&nbsp;&nbsp;&nbsp;Education: Curriculum</option>
                                                    <option value="27253">&nbsp;&nbsp;&nbsp;Education: Foreign Countries</option>
                                                    <option value="27252">&nbsp;&nbsp;&nbsp;Education: Higher Education</option>
                                                    <option value="27251">&nbsp;&nbsp;&nbsp;Education: Homeschooling</option>
                                                    <option value="27250">&nbsp;&nbsp;&nbsp;Education: Inclusion</option>
                                                    <option value="27249">&nbsp;&nbsp;&nbsp;Education: Mainstreaming</option>
                                                    <option value="27248">&nbsp;&nbsp;&nbsp;Education: Mathematics</option>
                                                    <option value="27247">&nbsp;&nbsp;&nbsp;Education: Multiculturalism</option>
                                                    <option value="27246">&nbsp;&nbsp;&nbsp;Education: Politics</option>
                                                    <option value="27245">&nbsp;&nbsp;&nbsp;Education: Physical Education</option>
                                                    <option value="27244">&nbsp;&nbsp;&nbsp;Education: Public vs. Private</option>
                                                    <option value="27243">&nbsp;&nbsp;&nbsp;Education: Reading</option>
                                                    <option value="27242">&nbsp;&nbsp;&nbsp;Education: Social Issues</option>
                                                    <option value="27241">&nbsp;&nbsp;&nbsp;Education: Special Education</option>
                                                    <option value="27240">&nbsp;&nbsp;&nbsp;Education: Teaching Methods</option>
                                                    <option value="27239">&nbsp;&nbsp;&nbsp;Education: Technology</option>
                                                    <option value="27238">&nbsp;&nbsp;&nbsp;Education: Theory</option>
                                                    <option value="27237">Employment</option>
                                                    <option value="27236">Energy</option>
                                                    <option value="27235">Engineering</option>
                                                    <option value="27234">English Literature</option>
                                                    <option value="27233">Environmental Science</option>
                                                    <option value="27232">Ethics / Morality</option>
                                                    <option value="27231">Evolution</option>
                                                    <option value="27230">Exercise</option>
                                                    <option value="27229">Family / Marriage</option>
                                                    <option value="27228">Feminism / Feminists</option>
                                                    <option value="27227">Film</option>
                                                    <option value="27226">Finance</option>
                                                    <option value="27225">First Aid</option>
                                                    <option value="27224">Foreign Relations</option>
                                                    <option value="27222">Forensics</option>
                                                    <option value="27223">France / French</option>
                                                    <option value="27220">Gay / Lesbian (general)</option>
                                                    <option value="27221">&nbsp;&nbsp;&nbsp;Gay: Adoption</option>
                                                    <option value="27219">&nbsp;&nbsp;&nbsp;Gay: AIDS</option>
                                                    <option value="27217">&nbsp;&nbsp;&nbsp;Gay: Civil Rights</option>
                                                    <option value="27218">&nbsp;&nbsp;&nbsp;Gay: Discrimination</option>
                                                    <option value="27216">&nbsp;&nbsp;&nbsp;Gay: Equality</option>
                                                    <option value="27215">&nbsp;&nbsp;&nbsp;Gay: Homosexuality</option>
                                                    <option value="27213">&nbsp;&nbsp;&nbsp;Gay: Marriage</option>
                                                    <option value="27214">&nbsp;&nbsp;&nbsp;Gay: Raising Children</option>
                                                    <option value="27211">&nbsp;&nbsp;&nbsp;Gay: Sex</option>
                                                    <option value="27212">Gender / Sexuality</option>
                                                    <option value="27210">Genetics</option>
                                                    <option value="27209">Geography</option>
                                                    <option value="27208">Germany / German</option>
                                                    <option value="27207">Gerontology</option>
                                                    <option value="27206">Global Politics (general)</option>
                                                    <option value="27205">&nbsp;&nbsp;&nbsp;Global Politics: Comparative</option>
                                                    <option value="27204">&nbsp;&nbsp;&nbsp;Global Politics: World Affairs</option>
                                                    <option value="27202">Globalization</option>
                                                    <option value="27203">Government (general)</option>
                                                    <option value="27201">&nbsp;&nbsp;&nbsp;Government: Campaigns</option>
                                                    <option value="27200">&nbsp;&nbsp;&nbsp;Government: Elections</option>
                                                    <option value="27198">&nbsp;&nbsp;&nbsp;Government: Federal</option>
                                                    <option value="27199">&nbsp;&nbsp;&nbsp;Government: Fiscal Policy</option>
                                                    <option value="27197">&nbsp;&nbsp;&nbsp;Government: Foreign Policy</option>
                                                    <option value="27196">&nbsp;&nbsp;&nbsp;Government: Agencies</option>
                                                    <option value="27194">&nbsp;&nbsp;&nbsp;Government: Intl. Relations</option>
                                                    <option value="27195">&nbsp;&nbsp;&nbsp;Government: Local</option>
                                                    <option value="27193">&nbsp;&nbsp;&nbsp;Government: Military Agencies</option>
                                                    <option value="27192">&nbsp;&nbsp;&nbsp;Government: Politicians</option>
                                                    <option value="27191">&nbsp;&nbsp;&nbsp;Government: Presidents</option>
                                                    <option value="27190">&nbsp;&nbsp;&nbsp;Government: Social Security</option>
                                                    <option value="27189">&nbsp;&nbsp;&nbsp;Government: State</option>
                                                    <option value="27188">&nbsp;&nbsp;&nbsp;Government: Theory</option>
                                                    <option value="27187">&nbsp;&nbsp;&nbsp;Government: Welfare</option>
                                                    <option value="27186">Graphics / Graphic Design</option>
                                                    <option value="27185">Greek Studies</option>
                                                    <option value="27184">Health (general)</option>
                                                    <option value="27183">&nbsp;&nbsp;&nbsp;Health: Exercise</option>
                                                    <option value="27182">&nbsp;&nbsp;&nbsp;Health: First Aid</option>
                                                    <option value="27181">&nbsp;&nbsp;&nbsp;Health: Human Sexuality</option>
                                                    <option value="27180">&nbsp;&nbsp;&nbsp;Health: Nursing</option>
                                                    <option value="27179">&nbsp;&nbsp;&nbsp;Health: Nutrition</option>
                                                    <option value="27178">&nbsp;&nbsp;&nbsp;Health: Public Health Issues</option>
                                                    <option value="27177">&nbsp;&nbsp;&nbsp;Health: Safety</option>
                                                    <option value="27175">Healthcare</option>
                                                    <option value="27176">Higher Education</option>
                                                    <option value="27174">History (general)</option>
                                                    <option value="27173">&nbsp;&nbsp;&nbsp;History: Ancient</option>
                                                    <option value="27172">&nbsp;&nbsp;&nbsp;History: Asian</option>
                                                    <option value="27171">&nbsp;&nbsp;&nbsp;History: Civil War</option>
                                                    <option value="27170">&nbsp;&nbsp;&nbsp;History: Colonial America</option>
                                                    <option value="27169">&nbsp;&nbsp;&nbsp;History: European</option>
                                                    <option value="27168">&nbsp;&nbsp;&nbsp;History: Great Britain</option>
                                                    <option value="27167">&nbsp;&nbsp;&nbsp;History: Greek / Roman</option>
                                                    <option value="27166">&nbsp;&nbsp;&nbsp;History: Holocaust Studies</option>
                                                    <option value="27165">&nbsp;&nbsp;&nbsp;History: Israel</option>
                                                    <option value="27164">&nbsp;&nbsp;&nbsp;History: Latin</option>
                                                    <option value="27163">&nbsp;&nbsp;&nbsp;History: Middle East</option>
                                                    <option value="27161">&nbsp;&nbsp;&nbsp;History: Pre-Colonial America</option>
                                                    <option value="27162">&nbsp;&nbsp;&nbsp;History: Presidents</option>
                                                    <option value="27160">&nbsp;&nbsp;&nbsp;History: Russia / USSR</option>
                                                    <option value="27159">&nbsp;&nbsp;&nbsp;History: U.S. (after 1865)</option>
                                                    <option value="27158">&nbsp;&nbsp;&nbsp;History: U.S. (before 1865)</option>
                                                    <option value="27157">&nbsp;&nbsp;&nbsp;History: Wars (miscellaneous)</option>
                                                    <option value="27156">&nbsp;&nbsp;&nbsp;History: World War I</option>
                                                    <option value="27155">&nbsp;&nbsp;&nbsp;History: World War II</option>
                                                    <option value="27152">Holocaust</option>
                                                    <option value="27153">Homosexuality</option>
                                                    <option value="27154">Housing</option>
                                                    <option value="27151">Human Resources</option>
                                                    <option value="27150">Human Rights</option>
                                                    <option value="27149">Human Sexuality</option>
                                                    <option value="27148">Immigration</option>
                                                    <option value="27147">India / Indian</option>
                                                    <option value="27146">Indonesia / Indonesian</option>
                                                    <option value="27145">Information Technology</option>
                                                    <option value="27144">International Relations</option>
                                                    <option value="27143">Internet</option>
                                                    <option value="27142">Japan / Japanese</option>
                                                    <option value="27141">Jewish Studies</option>
                                                    <option value="27140">Juvenile Delinquency / Crime</option>
                                                    <option value="27139">Korea / Korean</option>
                                                    <option value="27138">Labor / Union Studies</option>
                                                    <option value="27137">Languages</option>
                                                    <option value="27136">Latin America (general)</option>
                                                    <option value="27135">&nbsp;&nbsp;&nbsp;Latin America: Caribbean</option>
                                                    <option value="27134">&nbsp;&nbsp;&nbsp;Latin America: Brazil</option>
                                                    <option value="27133">&nbsp;&nbsp;&nbsp;Latin America: Central America</option>
                                                    <option value="27132">&nbsp;&nbsp;&nbsp;Latin America: Costa Rica</option>
                                                    <option value="27131">&nbsp;&nbsp;&nbsp;Latin America: Cuba</option>
                                                    <option value="27130">&nbsp;&nbsp;&nbsp;Latin America: Guatemala</option>
                                                    <option value="27129">&nbsp;&nbsp;&nbsp;Latin America: Mexico</option>
                                                    <option value="27127">&nbsp;&nbsp;&nbsp;Latin America: Puerto Rico</option>
                                                    <option value="27128">&nbsp;&nbsp;&nbsp;Latin America: South America</option>
                                                    <option value="27126">Law (general)</option>
                                                    <option value="27125">&nbsp;&nbsp;&nbsp;Law: Business</option>
                                                    <option value="27124">&nbsp;&nbsp;&nbsp;Law: Constitutional Law</option>
                                                    <option value="27123">&nbsp;&nbsp;&nbsp;Law: Corrections</option>
                                                    <option value="27122">&nbsp;&nbsp;&nbsp;Law: Courts</option>
                                                    <option value="27121">&nbsp;&nbsp;&nbsp;Law: Enforcement</option>
                                                    <option value="27120">&nbsp;&nbsp;&nbsp;Law: Historic Trials</option>
                                                    <option value="27119">&nbsp;&nbsp;&nbsp;Law: International</option>
                                                    <option value="27118">&nbsp;&nbsp;&nbsp;Law: Legal Briefs</option>
                                                    <option value="27116">&nbsp;&nbsp;&nbsp;Law: Legal Issues</option>
                                                    <option value="27117">&nbsp;&nbsp;&nbsp;Law: Litigation</option>
                                                    <option value="27115">&nbsp;&nbsp;&nbsp;Law: Supreme Court</option>
                                                    <option value="27114">&nbsp;&nbsp;&nbsp;Law: Theory</option>
                                                    <option value="27112">&nbsp;&nbsp;&nbsp;Law: Trial System</option>
                                                    <option value="27113">Leadership</option>
                                                    <option value="27111">Learning</option>
                                                    <option value="27110">Linguistics</option>
                                                    <option value="27109">Literature (general)</option>
                                                    <option value="27108">&nbsp;&nbsp;&nbsp;Literature: African</option>
                                                    <option value="27107">&nbsp;&nbsp;&nbsp;Literature: African-American</option>
                                                    <option value="27106">&nbsp;&nbsp;&nbsp;Literature: American</option>
                                                    <option value="27104">&nbsp;&nbsp;&nbsp;Literature: Ancient</option>
                                                    <option value="27105">&nbsp;&nbsp;&nbsp;Literature: Asian</option>
                                                    <option value="27103">&nbsp;&nbsp;&nbsp;Literature: Authors</option>
                                                    <option value="27102">&nbsp;&nbsp;&nbsp;Literature: British</option>
                                                    <option value="27101">&nbsp;&nbsp;&nbsp;Literature: Canadian</option>
                                                    <option value="27100">&nbsp;&nbsp;&nbsp;Literature: Caribbean</option>
                                                    <option value="27099">&nbsp;&nbsp;&nbsp;Literature: Children's</option>
                                                    <option value="27097">&nbsp;&nbsp;&nbsp;Literature: Classic (Greek/Roman)</option>
                                                    <option value="27098">&nbsp;&nbsp;&nbsp;Literature: English</option>
                                                    <option value="27096">&nbsp;&nbsp;&nbsp;Literature: French</option>
                                                    <option value="27095">&nbsp;&nbsp;&nbsp;Literature: German</option>
                                                    <option value="27093">&nbsp;&nbsp;&nbsp;Literature: Greek / Roman</option>
                                                    <option value="27094">&nbsp;&nbsp;&nbsp;Literature: Irish / Scottish</option>
                                                    <option value="27092">&nbsp;&nbsp;&nbsp;Literature: Italian</option>
                                                    <option value="27091">&nbsp;&nbsp;&nbsp;Literature: Latin-American</option>
                                                    <option value="27090">&nbsp;&nbsp;&nbsp;Literature: Medieval</option>
                                                    <option value="27089">&nbsp;&nbsp;&nbsp;Literature: Portuguese</option>
                                                    <option value="27088">&nbsp;&nbsp;&nbsp;Literature: Russian</option>
                                                    <option value="27086">&nbsp;&nbsp;&nbsp;Literature: Shakespeare</option>
                                                    <option value="27087">&nbsp;&nbsp;&nbsp;Literature: Spanish</option>
                                                    <option value="27085">&nbsp;&nbsp;&nbsp;Literature: World</option>
                                                    <option value="27083">Mainstreaming</option>
                                                    <option value="27084">Management (general)</option>
                                                    <option value="27082">&nbsp;&nbsp;&nbsp;Management: Motivation</option>
                                                    <option value="27080">&nbsp;&nbsp;&nbsp;Management: Theory</option>
                                                    <option value="27081">Marketing</option>
                                                    <option value="27079">Mass Communications</option>
                                                    <option value="27078">Mathematics</option>
                                                    <option value="27077">Media</option>
                                                    <option value="27076">Medical / Medicine (general)</option>
                                                    <option value="27075">&nbsp;&nbsp;&nbsp;Medical: AIDS</option>
                                                    <option value="27074">&nbsp;&nbsp;&nbsp;Medical: Alternative Medicine</option>
                                                    <option value="27072">&nbsp;&nbsp;&nbsp;Medical: Cancer</option>
                                                    <option value="27073">&nbsp;&nbsp;&nbsp;Medical: Dentistry</option>
                                                    <option value="27071">&nbsp;&nbsp;&nbsp;Medical: Diseases</option>
                                                    <option value="27070">&nbsp;&nbsp;&nbsp;Medical: Disorders</option>
                                                    <option value="27069">&nbsp;&nbsp;&nbsp;Medical: Doctoring</option>
                                                    <option value="27068">&nbsp;&nbsp;&nbsp;Medical: Epidemiology</option>
                                                    <option value="27067">&nbsp;&nbsp;&nbsp;Medical: Ethics</option>
                                                    <option value="27066">&nbsp;&nbsp;&nbsp;Medical: Health Care</option>
                                                    <option value="27065">&nbsp;&nbsp;&nbsp;Medical: Holistic Medicine</option>
                                                    <option value="27423">&nbsp;&nbsp;&nbsp;Medical: Issues</option>
                                                    <option value="27424">&nbsp;&nbsp;&nbsp;Medical: Nursing</option>
                                                    <option value="27425">&nbsp;&nbsp;&nbsp;Medical: Pharmacy</option>
                                                    <option value="27426">&nbsp;&nbsp;&nbsp;Medical: Treatment</option>
                                                    <option value="27427">Meteorology</option>
                                                    <option value="27428">Mexico / Mexican-American</option>
                                                    <option value="27429">Middle East</option>
                                                    <option value="27430">Military</option>
                                                    <option value="27431">Morality</option>
                                                    <option value="27432">Motivation</option>
                                                    <option value="27433">Multiculturalism</option>
                                                    <option value="27434">Music</option>
                                                    <option value="27435">Mythology (general)</option>
                                                    <option value="27436">&nbsp;&nbsp;&nbsp;Mythology: Ancient Beliefs</option>
                                                    <option value="27437">&nbsp;&nbsp;&nbsp;Mythology: Bible</option>
                                                    <option value="27438">&nbsp;&nbsp;&nbsp;Mythology: Christianity</option>
                                                    <option value="27439">&nbsp;&nbsp;&nbsp;Mythology: Church</option>
                                                    <option value="27440">&nbsp;&nbsp;&nbsp;Mythology: Cults</option>
                                                    <option value="27441">&nbsp;&nbsp;&nbsp;Mythology: Eastern</option>
                                                    <option value="27442">&nbsp;&nbsp;&nbsp;Mythology: Greek / Roman</option>
                                                    <option value="27443">&nbsp;&nbsp;&nbsp;Mythology: Islam</option>
                                                    <option value="27444">&nbsp;&nbsp;&nbsp;Mythology: Judaism</option>
                                                    <option value="27445">&nbsp;&nbsp;&nbsp;Mythology: Medieval</option>
                                                    <option value="27446">&nbsp;&nbsp;&nbsp;Mythology: Native Indian</option>
                                                    <option value="27447">&nbsp;&nbsp;&nbsp;Mythology: People</option>
                                                    <option value="27448">&nbsp;&nbsp;&nbsp;Mythology: Political Issues</option>
                                                    <option value="27449">&nbsp;&nbsp;&nbsp;Mythology: Religion</option>
                                                    <option value="27450">&nbsp;&nbsp;&nbsp;Mythology: Superstition</option>
                                                    <option value="27451">&nbsp;&nbsp;&nbsp;Mythology: Theology</option>
                                                    <option value="27452">&nbsp;&nbsp;&nbsp;Mythology: World</option>
                                                    <option value="27453">Native Americans</option>
                                                    <option value="27454">Nature</option>
                                                    <option value="27455">News</option>
                                                    <option value="27456">Novels</option>
                                                    <option value="27457">Nuclear Energy</option>
                                                    <option value="27458">Nursing</option>
                                                    <option value="27459">Nutrition</option>
                                                    <option value="27460">Occult</option>
                                                    <option value="27461">Oceanography</option>
                                                    <option value="27462">Organized Crime</option>
                                                    <option value="27463">Pakistan / Pakistani</option>
                                                    <option value="27464">Paleontology</option>
                                                    <option value="27465">Parapsychology</option>
                                                    <option value="27466">Parenting</option>
                                                    <option value="27467">Pharmacy</option>
                                                    <option value="27468">Philosophy (general)</option>
                                                    <option value="27469">&nbsp;&nbsp;&nbsp;Philosophy: Existence of God</option>
                                                    <option value="27470">&nbsp;&nbsp;&nbsp;Philosophy: Famous Figures</option>
                                                    <option value="27471">&nbsp;&nbsp;&nbsp;Philosophy: Free Will</option>
                                                    <option value="27472">&nbsp;&nbsp;&nbsp;Philosophy: Greek</option>
                                                    <option value="27473">&nbsp;&nbsp;&nbsp;Philosophy: Philosophers</option>
                                                    <option value="27474">&nbsp;&nbsp;&nbsp;Philosophy: Religious</option>
                                                    <option value="27475">&nbsp;&nbsp;&nbsp;Philosophy: Utopia</option>
                                                    <option value="27476">Photography</option>
                                                    <option value="27477">Physical Education (PE)</option>
                                                    <option value="27478">Physics</option>
                                                    <option value="27479">Physiology</option>
                                                    <option value="27480">Planets</option>
                                                    <option value="27481">Plays</option>
                                                    <option value="27482">Poetry / Poets (general)</option>
                                                    <option value="27483">&nbsp;&nbsp;&nbsp;Poetry / Poets: American</option>
                                                    <option value="27484">&nbsp;&nbsp;&nbsp;Poetry / Poets: English</option>
                                                    <option value="27485">Police</option>
                                                    <option value="27486">Political Science / Politics (general)</option>
                                                    <option value="27487">&nbsp;&nbsp;&nbsp;Politics: Campaigns</option>
                                                    <option value="27488">&nbsp;&nbsp;&nbsp;Politics: Elections</option>
                                                    <option value="27489">&nbsp;&nbsp;&nbsp;Politics: Federal</option>
                                                    <option value="27490">&nbsp;&nbsp;&nbsp;Politics: Fiscal Policy</option>
                                                    <option value="27491">&nbsp;&nbsp;&nbsp;Politics: Foreign Policy</option>
                                                    <option value="27492">&nbsp;&nbsp;&nbsp;Politics: Government Agencies</option>
                                                    <option value="27493">&nbsp;&nbsp;&nbsp;Politics: International Relations</option>
                                                    <option value="27494">&nbsp;&nbsp;&nbsp;Politics: Local</option>
                                                    <option value="27495">&nbsp;&nbsp;&nbsp;Politics: Military Agencies</option>
                                                    <option value="27496">&nbsp;&nbsp;&nbsp;Politics: Politicians</option>
                                                    <option value="27497">&nbsp;&nbsp;&nbsp;Politics: Presidential Studies</option>
                                                    <option value="27498">&nbsp;&nbsp;&nbsp;Politics: Social Security</option>
                                                    <option value="27499">&nbsp;&nbsp;&nbsp;Politics: State</option>
                                                    <option value="27500">&nbsp;&nbsp;&nbsp;Politics: Theory</option>
                                                    <option value="27501">&nbsp;&nbsp;&nbsp;Politics: Voting</option>
                                                    <option value="27502">&nbsp;&nbsp;&nbsp;Politics: Welfare</option>
                                                    <option value="27503">Pollution</option>
                                                    <option value="27504">Population</option>
                                                    <option value="27505">Pornography</option>
                                                    <option value="27506">Privacy</option>
                                                    <option value="27507">Pros and Cons</option>
                                                    <option value="27508">Programming</option>
                                                    <option value="27509">Psychiatry</option>
                                                    <option value="27510">Psychology (general)</option>
                                                    <option value="27511">&nbsp;&nbsp;&nbsp;Psychology: Abnormal</option>
                                                    <option value="27512">&nbsp;&nbsp;&nbsp;Psychology: Adolescent</option>
                                                    <option value="27513">&nbsp;&nbsp;&nbsp;Psychology: Behaviorism</option>
                                                    <option value="27514">&nbsp;&nbsp;&nbsp;Psychology: Child</option>
                                                    <option value="27515">&nbsp;&nbsp;&nbsp;Psychology: Cognitive</option>
                                                    <option value="27516">&nbsp;&nbsp;&nbsp;Psychology: Counseling</option>
                                                    <option value="27517">&nbsp;&nbsp;&nbsp;Psychology: Developmental</option>
                                                    <option value="27518">&nbsp;&nbsp;&nbsp;Psychology: Disorders</option>
                                                    <option value="27519">&nbsp;&nbsp;&nbsp;Psychology: Dreams</option>
                                                    <option value="27520">&nbsp;&nbsp;&nbsp;Psychology: Experimental</option>
                                                    <option value="27521">&nbsp;&nbsp;&nbsp;Psychology: Freud</option>
                                                    <option value="27522">&nbsp;&nbsp;&nbsp;Psychology: History</option>
                                                    <option value="27523">&nbsp;&nbsp;&nbsp;Psychology: Jung</option>
                                                    <option value="27524">&nbsp;&nbsp;&nbsp;Psychology: Parapsychology</option>
                                                    <option value="27525">&nbsp;&nbsp;&nbsp;Psychology: Personality</option>
                                                    <option value="27526">&nbsp;&nbsp;&nbsp;Psychology: Physiology</option>
                                                    <option value="27527">&nbsp;&nbsp;&nbsp;Psychology: Piaget</option>
                                                    <option value="27528">&nbsp;&nbsp;&nbsp;Psychology: Psychotherapy</option>
                                                    <option value="27529">&nbsp;&nbsp;&nbsp;Psychology: Rogers</option>
                                                    <option value="27530">&nbsp;&nbsp;&nbsp;Psychology: Social</option>
                                                    <option value="27531">&nbsp;&nbsp;&nbsp;Psychology: Testing</option>
                                                    <option value="27532">&nbsp;&nbsp;&nbsp;Psychology: Theories</option>
                                                    <option value="27533">&nbsp;&nbsp;&nbsp;Psychology: Therapy</option>
                                                    <option value="27534">Public Administration</option>
                                                    <option value="27535">Public Relations</option>
                                                    <option value="27536">Race / Racism</option>
                                                    <option value="27537">Reading</option>
                                                    <option value="27538">Real Estate</option>
                                                    <option value="27539">Recreation / Leisure</option>
                                                    <option value="27540">Religion (general)</option>
                                                    <option value="27541">&nbsp;&nbsp;&nbsp;Religion: Bible</option>
                                                    <option value="27542">&nbsp;&nbsp;&nbsp;Religion: Buddhism</option>
                                                    <option value="27543">&nbsp;&nbsp;&nbsp;Religion: Christianity</option>
                                                    <option value="27544">&nbsp;&nbsp;&nbsp;Religion: Church vs. State</option>
                                                    <option value="27545">&nbsp;&nbsp;&nbsp;Religion: Cults</option>
                                                    <option value="27546">&nbsp;&nbsp;&nbsp;Religion: Eastern</option>
                                                    <option value="27547">&nbsp;&nbsp;&nbsp;Religion: Famous People</option>
                                                    <option value="27548">&nbsp;&nbsp;&nbsp;Religion: Hinduism</option>
                                                    <option value="27549">&nbsp;&nbsp;&nbsp;Religion: Islam</option>
                                                    <option value="27550">&nbsp;&nbsp;&nbsp;Religion: Janism</option>
                                                    <option value="27551">&nbsp;&nbsp;&nbsp;Religion: Judaism</option>
                                                    <option value="27552">&nbsp;&nbsp;&nbsp;Religion: Koran</option>
                                                    <option value="27553">&nbsp;&nbsp;&nbsp;Religion: Political Issues</option>
                                                    <option value="27554">&nbsp;&nbsp;&nbsp;Religion: Shinto</option>
                                                    <option value="27555">&nbsp;&nbsp;&nbsp;Religion: Superstition</option>
                                                    <option value="27556">&nbsp;&nbsp;&nbsp;Religion: Taoism</option>
                                                    <option value="27557">&nbsp;&nbsp;&nbsp;Religion: Theology</option>
                                                    <option value="27558">&nbsp;&nbsp;&nbsp;Religion: Tora</option>
                                                    <option value="27559">&nbsp;&nbsp;&nbsp;Religion: World</option>
                                                    <option value="27560">Roman Studies</option>
                                                    <option value="27561">Russia / Russian</option>
                                                    <option value="27562">Safety</option>
                                                    <option value="27563">School Issues</option>
                                                    <option value="27564">Science</option>
                                                    <option value="27565">Security</option>
                                                    <option value="27566">Shakespeare</option>
                                                    <option value="27567">Slavery</option>
                                                    <option value="27568">Social Media</option>
                                                    <option value="27569">Sociology (general)</option>
                                                    <option value="27570">&nbsp;&nbsp;&nbsp;Sociology: Counseling</option>
                                                    <option value="27571">&nbsp;&nbsp;&nbsp;Sociology: Family Issues</option>
                                                    <option value="27572">&nbsp;&nbsp;&nbsp;Sociology: Human Services</option>
                                                    <option value="27573">&nbsp;&nbsp;&nbsp;Sociology: Politics</option>
                                                    <option value="27574">&nbsp;&nbsp;&nbsp;Sociology: Problems</option>
                                                    <option value="27575">&nbsp;&nbsp;&nbsp;Sociology: Race</option>
                                                    <option value="27576">&nbsp;&nbsp;&nbsp;Sociology: Research</option>
                                                    <option value="27577">&nbsp;&nbsp;&nbsp;Sociology: Services</option>
                                                    <option value="27578">&nbsp;&nbsp;&nbsp;Sociology: Sex / Aids</option>
                                                    <option value="27579">&nbsp;&nbsp;&nbsp;Sociology: Social Work</option>
                                                    <option value="27580">&nbsp;&nbsp;&nbsp;Sociology: Theories</option>
                                                    <option value="27581">&nbsp;&nbsp;&nbsp;Sociology: Theorists</option>
                                                    <option value="27582">&nbsp;&nbsp;&nbsp;Sociology: Therapy</option>
                                                    <option value="27583">&nbsp;&nbsp;&nbsp;Sociology: Utopian Societies</option>
                                                    <option value="27584">&nbsp;&nbsp;&nbsp;Sociology: Welfare</option>
                                                    <option value="27585">Software</option>
                                                    <option value="27586">Soviet Union / USSR</option>
                                                    <option value="27587">Speech</option>
                                                    <option value="27588">Sports (general)</option>
                                                    <option value="27589">&nbsp;&nbsp;&nbsp;Sports: Advertising</option>
                                                    <option value="27590">&nbsp;&nbsp;&nbsp;Sports: Athletic Fitness</option>
                                                    <option value="27591">&nbsp;&nbsp;&nbsp;Sports: Business</option>
                                                    <option value="27592">&nbsp;&nbsp;&nbsp;Sports: Coaching</option>
                                                    <option value="27593">&nbsp;&nbsp;&nbsp;Sports: College</option>
                                                    <option value="27594">&nbsp;&nbsp;&nbsp;Sports: Culture</option>
                                                    <option value="27595">&nbsp;&nbsp;&nbsp;Sports: Drugs</option>
                                                    <option value="27596">&nbsp;&nbsp;&nbsp;Sports: Economics</option>
                                                    <option value="27597">&nbsp;&nbsp;&nbsp;Sports: Gambling</option>
                                                    <option value="27598">&nbsp;&nbsp;&nbsp;Sports: High School</option>
                                                    <option value="27599">&nbsp;&nbsp;&nbsp;Sports: Law</option>
                                                    <option value="27600">&nbsp;&nbsp;&nbsp;Sports: Management</option>
                                                    <option value="27601">&nbsp;&nbsp;&nbsp;Sports: Medicine</option>
                                                    <option value="27602">&nbsp;&nbsp;&nbsp;Sports: Olympics</option>
                                                    <option value="27603">&nbsp;&nbsp;&nbsp;Sports: Political Issues</option>
                                                    <option value="27604">&nbsp;&nbsp;&nbsp;Sports: Professional Athletes</option>
                                                    <option value="27605">&nbsp;&nbsp;&nbsp;Sports: Recreational</option>
                                                    <option value="27606">&nbsp;&nbsp;&nbsp;Sports: Social Issues</option>
                                                    <option value="27607">&nbsp;&nbsp;&nbsp;Sports: Steroids</option>
                                                    <option value="27608">&nbsp;&nbsp;&nbsp;Sports: Teams</option>
                                                    <option value="27609">&nbsp;&nbsp;&nbsp;Sports: Violence</option>
                                                    <option value="27610">&nbsp;&nbsp;&nbsp;Sports: Women</option>
                                                    <option value="27611">&nbsp;&nbsp;&nbsp;Sports: Youth</option>
                                                    <option value="27612">Teaching (general)</option>
                                                    <option value="27613">&nbsp;&nbsp;&nbsp;Teaching: Administration</option>
                                                    <option value="27614">&nbsp;&nbsp;&nbsp;Teaching: Classroom Mgmt.</option>
                                                    <option value="27615">&nbsp;&nbsp;&nbsp;Teaching: Coaching</option>
                                                    <option value="27616">&nbsp;&nbsp;&nbsp;Teaching: Computers</option>
                                                    <option value="27617">&nbsp;&nbsp;&nbsp;Teaching: Counseling</option>
                                                    <option value="27618">&nbsp;&nbsp;&nbsp;Teaching: Countries</option>
                                                    <option value="27619">&nbsp;&nbsp;&nbsp;Teaching: Curriculum</option>
                                                    <option value="27620">&nbsp;&nbsp;&nbsp;Teaching: ESL</option>
                                                    <option value="27621">&nbsp;&nbsp;&nbsp;Teaching: Foreign Countries</option>
                                                    <option value="27622">&nbsp;&nbsp;&nbsp;Teaching: Higher Education</option>
                                                    <option value="27623">&nbsp;&nbsp;&nbsp;Teaching: Homeschooling</option>
                                                    <option value="27624">&nbsp;&nbsp;&nbsp;Teaching: Inclusion</option>
                                                    <option value="27625">&nbsp;&nbsp;&nbsp;Teaching: Mathematics</option>
                                                    <option value="27626">&nbsp;&nbsp;&nbsp;Teaching: Politics</option>
                                                    <option value="27627">&nbsp;&nbsp;&nbsp;Teaching: Physical Education</option>
                                                    <option value="27628">&nbsp;&nbsp;&nbsp;Teaching: Public vs. Private</option>
                                                    <option value="27629">&nbsp;&nbsp;&nbsp;Teaching: Reading</option>
                                                    <option value="27630">&nbsp;&nbsp;&nbsp;Teaching: Social Issues</option>
                                                    <option value="27631">&nbsp;&nbsp;&nbsp;Teaching: Special Education</option>
                                                    <option value="27632">&nbsp;&nbsp;&nbsp;Teaching: Teaching Methods</option>
                                                    <option value="27633">&nbsp;&nbsp;&nbsp;Teaching: Technology</option>
                                                    <option value="27634">&nbsp;&nbsp;&nbsp;Teaching: Theory</option>
                                                    <option value="27635">Technical Writing</option>
                                                    <option value="27636">Technology</option>
                                                    <option value="27637">Television</option>
                                                    <option value="27638">Terrorism</option>
                                                    <option value="27639">Theology</option>
                                                    <option value="27640">Theory</option>
                                                    <option value="27641">Therapy</option>
                                                    <option value="27642">Topography</option>
                                                    <option value="27643">Tourism</option>
                                                    <option value="27644">Transportation (general)</option>
                                                    <option value="27645">&nbsp;&nbsp;&nbsp;Transportation: Aviation</option>
                                                    <option value="27646">&nbsp;&nbsp;&nbsp;Transportation: Boat</option>
                                                    <option value="27647">&nbsp;&nbsp;&nbsp;Transportation: Bus</option>
                                                    <option value="27648">&nbsp;&nbsp;&nbsp;Transportation: Car</option>
                                                    <option value="27649">&nbsp;&nbsp;&nbsp;Transportation: Environment</option>
                                                    <option value="27650">&nbsp;&nbsp;&nbsp;Transportation: Freight</option>
                                                    <option value="27651">&nbsp;&nbsp;&nbsp;Transportation: Public</option>
                                                    <option value="27652">&nbsp;&nbsp;&nbsp;Transportation: Railroads</option>
                                                    <option value="27653">&nbsp;&nbsp;&nbsp;Transportation: SUV</option>
                                                    <option value="27654">Urban Studies</option>
                                                    <option value="27655">Vietnam</option>
                                                    <option value="27656">Violence</option>
                                                    <option value="27657">War</option>
                                                    <option value="27658">Weather</option>
                                                    <option value="27659">Western Civilization (general)</option>
                                                    <option value="27660">&nbsp;&nbsp;&nbsp;Western Civ: Ancient Civilizations</option>
                                                    <option value="27661">&nbsp;&nbsp;&nbsp;Western Civ: England (pre-1800)</option>
                                                    <option value="27662">&nbsp;&nbsp;&nbsp;Western Civ: Europe's Culture</option>
                                                    <option value="27663">&nbsp;&nbsp;&nbsp;Western Civ: Europe's History</option>
                                                    <option value="27664">&nbsp;&nbsp;&nbsp;Western Civ: France (pre-1800)</option>
                                                    <option value="27665">&nbsp;&nbsp;&nbsp;Western Civ: Greeks / Greece</option>
                                                    <option value="27666">&nbsp;&nbsp;&nbsp;Western Civ: Romans / Italy</option>
                                                    <option value="27667">Witchcraft / Magic / Voodoo</option>
                                                    <option value="27668">Women (general)</option>
                                                    <option value="27669">&nbsp;&nbsp;&nbsp;Women: Abortion</option>
                                                    <option value="27670">&nbsp;&nbsp;&nbsp;Women: Achievements</option>
                                                    <option value="27671">&nbsp;&nbsp;&nbsp;Women: Activists</option>
                                                    <option value="27672">&nbsp;&nbsp;&nbsp;Women: Birth Control</option>
                                                    <option value="27673">&nbsp;&nbsp;&nbsp;Women: Civil Rights</option>
                                                    <option value="27674">&nbsp;&nbsp;&nbsp;Women: Cultures</option>
                                                    <option value="27675">&nbsp;&nbsp;&nbsp;Women: Employment</option>
                                                    <option value="27676">&nbsp;&nbsp;&nbsp;Women: Feminism / Feminists</option>
                                                    <option value="27677">&nbsp;&nbsp;&nbsp;Women: Foreign Countries</option>
                                                    <option value="27678">&nbsp;&nbsp;&nbsp;Women: Gender / Society</option>
                                                    <option value="27679">&nbsp;&nbsp;&nbsp;Women: Health Issues</option>
                                                    <option value="27680">&nbsp;&nbsp;&nbsp;Women: Sexuality</option>
                                                    <option value="27681">&nbsp;&nbsp;&nbsp;Women: Social Issues</option>
                                                    <option value="27682">&nbsp;&nbsp;&nbsp;Women: Workforce</option>
                                                    <option value="27683">World Literature</option>
                                                    <option value="27684">Writing</option>
                                                    <option value="27685">Zoology</option>
                                                    <option value="27686">Other (not listed above) </option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-10">
                                                <label for="" class="mb-3 fs-6 fw-semibold">Specific topic or title:*</label>
                                                <div class="d-flex">
                                                    <input type="text" placeholder="Specific topic or title" name="topic" id="topic" autocomplete="off" class="form-control bg-transparent" /><button type="button" class="border-0 bg-white fs-6 fw-semibold" data-bs-toggle="modal" data-bs-target="#modal-6"><i class="bi bi-info-circle-fill mx-3"></i></button>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-10">
                                                <label for="" class="mb-3 fs-6 fw-semibold">Academic Level:*</label>
                                                <select name="academic_level" id="academic_level" class="form-select form-select-solid " data-control="select2" data-hide-search="true" data-placeholder="Choose">
                                                    <option></option>
                                                    <option value="1">High School</option>
                                                    <option value="2">Collage Freshman </option>
                                                    <option value="1">Collage Sophomore</option>
                                                    <option value="2">Collage Junior</option>
                                                    <option value="1">Collage Senior</option>
                                                    <option value="2">Master</option>
                                                    <option value="1">Doctoral</option>
                                                    <option value="2">Corporate/Professional</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-20">
                                                <label for="" class="mb-3 fs-6 fw-semibold">Language & spelling style:*</label>
                                                <div class="d-flex">
                                                    <select name="language_spelling" id="language_spelling" class="form-select form-select-solid " data-control="select2" data-hide-search="true" data-placeholder="Choose">
                                                        <option></option>
                                                        <option value="1">American</option>
                                                        <option value="2">British</option>
                                                    </select>
                                                    <button type="button" class="border-0 bg-white fs-6 fw-semibold" data-bs-toggle="modal" data-bs-target="#modal-7"><i class="bi bi-info-circle-fill mx-3"></i></button>
                                                </div>
                                            </div>
                                            <div id="kt_app_content_container" class="d-flex mb-10">
                                                <h3 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 border-bottom">Description & Detailed Specifications</h3> <button type="button" class="border-0 bg-white fs-6 fw-semibold" data-bs-toggle="modal" data-bs-target="#modal-8"><i class="bi bi-info-circle-fill mx-3"></i></button>
                                            </div>
                                            <div class="col-md-6 mb-10">
                                                <label for="" class="mb-3 fs-6 fw-semibold">Your instructions, requirements, specifications, etc.*:</label>
                                                <div class="d-flex">
                                                    <textarea name="description" id="description" class="form-control form-control-solid" rows="3" placeholder="Your Instructions !"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-10">
                                                <label for="" class="mb-3 fs-6 fw-semibold">Statistical Analysis:*<button type="button" class="border-0 bg-white fs-6 fw-semibold" data-bs-toggle="modal" data-bs-target="#modal-9"><i class="bi bi-info-circle-fill mx-3"></i></button></label>
                                                <div class="d-flex">
                                                    <input class="form-check-input" value="no" type="radio" name="flexRadioDefault" id="statistical_analysis" checked>
                                                    <label class="fs-6 fw-semibold mx-3" for="flexRadioDefault1">
                                                        No
                                                    </label>
                                                    <input class="form-check-input" value="yes" type="radio" name="flexRadioDefault" id="statistical_analysis_yes">
                                                    <label class="fs-6 fw-semibold mx-3" for="flexRadioDefault2">
                                                        Yes (+15% to subtotal)

                                                    </label>
                                                </div>
                                            </div>
                                           
                                           
                                        </form>
                                    </div>
                                    <!--end::Content container-->
                                </div>
                                <div class="col-md-4 mb-10">
                                    <div class="card">
                                        <div class="p-5  border-bottom mb-5">
                                            <h1 class="page-heading d-flex text-gray-900 fw-bold fs-1 flex-column my-0 mb-3">Order Summary:</h1>
                                        </div>
                                        <div class="p-5 d-flex border-bottom">
                                            <div class="col-6 align-items-center d-flex">
                                                <label for="" class="mb-3 fs-6 fw-semibold">Currency:</label>
                                            </div>
                                            <div class="col-6 d-flex  align-items-center">
                                                <img src="assets/media/ws/america-flag.webp" class="mb-3 h-25px w-25px rounded-circle" alt=""><i class="bi bi-currency-dollar mx-3 mb-3"></i>
                                                <p class="mb-3 fs-6 fw-semibold"> US Dollors</p>
                                            </div>
                                        </div>
                                        <div class="p-5 border-bottom">
                                            <div class="d-flex">
                                                <div class="col-6 align-items-center d-flex">
                                                    <label for="" class="mt-3 fs-6 fw-semibold">Document Length:</label>
                                                </div>
                                                <div class="col-6 d-flex  align-items-center justify-content-end">
                                                    <label for="" class="mt-3 fs-6 fw-semibold"><span id="no_of_pages">0</span> Pages</label>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="col-6 align-items-center d-flex">
                                                    <label for="" class="mt-3 fs-6 fw-semibold">Pricing Plan:</label>
                                                </div>
                                                <div class="col-6 d-flex  align-items-center justify-content-end">
                                                    <label for="" class="mt-3 fs-6 fw-semibold">US $<span id="cost_per_page">0</span> per page</label>
                                                </div>

                                            </div>
                                            <div class="d-flex">
                                                <div class="col-6 align-items-center d-flex">
                                                    <label for="" class="mt-3 fs-6 fw-semibold">Research Level:</label>
                                                </div>
                                                <div class="col-6 d-flex  align-items-center justify-content-end">
                                                    <label for="" class="mt-3 fs-6 fw-semibold" id="research_level_show"></label>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="col-6 align-items-center d-flex">
                                                    <label for="" class="mt-3 fs-6 fw-semibold">Document Type:</label>
                                                </div>
                                                <div class="col-6 d-flex  align-items-center justify-content-end">
                                                    <label for="" class="mt-3 fs-6 fw-semibold" id="document_type_show"></label>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="col-6 align-items-center d-flex">
                                                    <label for="" class="my-3 fs-6 fw-semibold">Delivery Date:</label>
                                                </div>
                                                <div class="col-6 d-flex  align-items-center justify-content-end">
                                                    <label for="" class="my-3 fs-6 fw-semibold" id="day_date"></label>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="col-6 align-items-center d-flex">
                                                    <label for="" class="my-3 fs-6 fw-semibold">Extra Sources:</label>
                                                </div>
                                                <div class="col-6 d-flex  align-items-center justify-content-end">
                                                    <label for="" class="my-3 fs-6 fw-semibold">$<span id="extra_sources">0</span></label>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="col-6 align-items-center d-flex">
                                                    <label for="" class="my-3 fs-6 fw-semibold">Statistical Analysis:</label>
                                                </div>
                                                <div class="col-6 d-flex  align-items-center justify-content-end">
                                                    <label for="" class="my-3 fs-6 fw-semibold"><span id="statistic_percentage">0</span>%</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-5 d-flex border-bottom">
                                            <div class="col-12 align-items-center d-flex">
                                                <label for="" class="my-3 fs-6 fw-semibold">Subtotal: US $<span id='sub_total'>0</span></label>
                                            </div>
                                        </div>
                                        <div class="p-5 border-bottom">
                                            <div class="d-flex">
                                                <h3 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column my-3">Optional Add-Ons:</h3><button type="button" class="border-0 bg-white"><i class="bi bi-info-circle-fill ms-3" title="Additional Features that you may find useful"></i></button>
                                            </div>
                                            <div class="d-flex">
                                                <div class="col-6 align-items-center d-flex ok">
                                                    <label for="" class="mt-3 fs-6 fw-semibold cost_label" id="cost_label1">Paper Summary:</label><button type="button" class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#modal-10"><i class="bi bi-info-circle-fill ms-3"></i></button>
                                                </div>
                                                <div class="col-6 d-flex  align-items-center justify-content-end">
                                                    <label for="" class="mt-3 fs-6 fw-semibold me-3">$<span id="cost_per_page">0</span></label>
                                                    <div class="switch-container">
                                                        <label class="switch">
                                                            <input type="checkbox" id="toggleSwitch" data-target="1">
                                                            <span class="slider"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="col-6 align-items-center d-flex ok">
                                                    <label for="" class="mt-3 fs-6 fw-semibold cost_label" id="cost_label2">Paper Outline In Bullets:</label>
                                                    <button type="button" class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#modal-11"><i class="bi bi-info-circle-fill ms-3"></i></button>
                                                </div>
                                                <div class="col-6 d-flex  align-items-center justify-content-end">
                                                    <label for="" class="mt-3 fs-6 fw-semibold me-3">$<span id="cost_per_page">0</span></label>
                                                    <div class="switch-container">
                                                        <label class="switch">
                                                            <input type="checkbox" id="toggleSwitch" data-target="2">
                                                            <span class="slider"></span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="d-flex">
                                                <div class="col-6 align-items-center d-flex ok">
                                                    <label for="" class="mt-3 fs-6 fw-semibold cost_label" id="cost_label3">Paper Abstract:</label>
                                                    <button type="button" class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#modal-12"><i class="bi bi-info-circle-fill ms-3"></i></button>
                                                </div>
                                                <div class="col-6 d-flex  align-items-center justify-content-end">
                                                    <label for="" class="mt-3 fs-6 fw-semibold me-3">$<span id="cost_per_page">0</span></label>
                                                    <div class="switch-container">
                                                        <label class="switch">
                                                            <input type="checkbox" id="toggleSwitch" data-target="3">
                                                            <span class="slider"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="d-flex">
                                                <div class="col-6 align-items-center d-flex ok">
                                                    <label for="" class="my-3 fs-6 fw-semibold cost_label" id="cost_label4">Turnitin Report:</label>
                                                    <button type="button" class="border-0 bg-white" data-bs-toggle="modal" data-bs-target="#modal-14"><i class="bi bi-info-circle-fill ms-3"></i></button>
                                                </div>
                                                <div class="col-6 d-flex  align-items-center justify-content-end">
                                                    <label for="" class="mt-3 fs-6 fw-semibold me-3">$<span id="cost_per_page">0</span></label>
                                                  
                                                    <div class="switch-container">
                                                        <label class="switch">
                                                            <input type="checkbox" id="toggleSwitch" data-target="4">
                                                            <span class="slider"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-light p-5">
                                            <div class="">
                                                <label for="" class="mb-3 fs-6 fw-semibold">Coupon:</label>
                                                <div class="d-flex">
                                                    <input type="text" placeholder="" name="coupon" id="coupon" autocomplete="off" class="form-control bg-white w-75" /><button type="button" class="form-control w-25 rounded bg-white ms-2" onclick="coupon()"><i class="bi bi-arrow-right ms-1"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-5 text-center">
                                            <label for="" class="mb-3 fs-6 fw-semibold text-center">Total Price:</label>
                                            <h1 class="page-heading text-center d-flex text-gray-900 fw-bold fs-1 flex-column my-0 mb-3">US $<span id="total_cost">0</span></h1>
                                        </div>
                                        <div class="d-flex justify-content-center mb-5">
                                            <button class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#modal-15" onclick="payment()">Continue to Payment</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Content wrapper-->
            </div>
            <!--end:::Main-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<div class="modal fade" id="modal-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title " id="exampleModalLabel">Don't Block Our Emails Accidentally</h5>
                <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Email providers (such as Gmail, Yahoo, AOL, & Hotmail) use filters to block "junk mail" and "SPAM." Unfortunately, these filters sometimes block legitimate emails. To avoid accidentally blocking any of our emails, you should do one (or both) of the following in your online email account and in your email application:</p>
                <ul>
                    <li>temporarily disable any "junk mail" or "SPAM" features until your order is complete;</li>
                    <li>add our email address <span style="color:#0066cc">writingspace@snrinfo.com</span> to your "safe list," "white list," or equivalent.</li>
                </ul>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title " id="exampleModalLabel">What is a "Backup Email Address"?</h5>
                <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Your "backup email address" is a different, additional email address at which you'd like to receive all of our emails. Providing a backup email address is completely optional.
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title " id="exampleModalLabel">How Many Words on Each "Page"?</h5>
                <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="mb-5">We write all documents using 1-inch margins and 12-point, double-spaced, "Times New Roman" or "Arial" font. These standard, academic guidelines result in approximately 300 word per page.</p>
                <p class="mb-5">NOTE: "Bibliography," "Works Cited," or "References" pages are free, so do not include them in your page-count.</p>
                <div class="d-flex justify-content-center mod-2">
                    <div class="col-3">
                        <ul class="list-unstyled">
                            <li><Strong>PAGES</Strong> <i class="bi bi-arrow-right ms-2"></i></li>
                            <li>1</li>
                            <li>5</li>
                            <li>10</li>
                            <li>15</li>
                            <li>20</li>
                            <li>35</li>
                            <li>50</li>
                            <li>75</li>
                            <li>100</li>
                            <li>150</li>
                            <li>200</li>
                            <li>300</li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <ul class="list-unstyled">
                            <li><i class="bi bi-arrow-left me-2"></i><Strong>WORDS</Strong></li>
                            <li>300</li>
                            <li>1,500</li>
                            <li>3,000</li>
                            <li>4,500</li>
                            <li>6,000</li>
                            <li>10,500</li>
                            <li>15,000</li>
                            <li>22,500</li>
                            <li>30,000</li>
                            <li>45,000</li>
                            <li>60,000</li>
                            <li>90,000</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title " id="exampleModalLabel">What Are "Sources"?</h5>
                <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="mb-5">"Sources" are the different items from which we will reference information and/or obtain quotations to include in the paper that we write. Sources can include your choice of books, journals, articles, newspapers, poems, Web sites, artwork, etc.</p>
                <p class="mb-5">LIMITATION #1: Locating and incorporating obscure sources (or a needlessly high number of sources) can be a difficult, time-consuming task for the writer. For that reason, you may request—for free—only ONE source per every ONE page of text that you order. There is a small surcharge of $1 per each extra source exceeding the number of pages that you order. (For example, if you order 10 pages and request 15 sources, there will be a total additional cost of $5 for the 5 extra sources.)</p>
                <p class="mb-5">
                    LIMITATION #2: Although we have access to literally millions of sources (journals, magazines, newspaper articles, books, periodicals, etc.), we may not be able to access a particular source if it is unavailable online or at the assigned writer's local library. For example, class textbooks are not available online or in public libraries. If your order requires access to a class textbook, you must be prepared to fax or email the necessary pages from that textbook. Similarly, if your order requires our writer to access a password-protected Web site, you must include your username and password with your order specifications.
                </p>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title " id="exampleModalLabel">What Are "Resources"?</h5>
                <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="mb-5">
                    "Resources" are documents/files in your possession that you may want to submit to the writer. If you have photocopies, hand-written notes, drafts, images, or any other materials that you believe will assist the writer in completing your order, you may submit them to us via email, upload, or fax. After finishing this ordering process, you'll have a username/password that will enable you to log-in to your account to transmit your resources (if any).
                </p>
                <h5>If you have "mandatory" files for the writer, do not delay!</h5>
                <p class="mb-5">
                    Our work is extremely time-sensitive. If you indicate in the order form that you will be providing resource documents, you must do so in a timely manner. If we are unable to begin or continue working because you do not provide "mandatory" materials within an amount of time that is conducive to your service timeframe, the completion time/date of your order may be delayed.
                </p>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title " id="exampleModalLabel">What Is the "Specific Topic or Title"?</h5>
                <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="mb-5">The "specific topic or title" is your short (100 characters or less), focused description of the paper. Here are a few examples:</p>
                <ul>
                    <li>"Trench Warfare in World War 2"</li>
                    <li>"How Art Influences Modern Architecture"</li>
                    <li>"Mathematics in Nature"</li>
                    <li>"Symbolism in the Works of James Joyce"</li>
                    <li>"Explosive Reactions in Chemical Compounds"</li>
                </ul>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title " id="exampleModalLabel">What Is "Language & Spelling Style"?</h5>
                <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="mb-5">There are minor spelling differences between "American/US" and "British/UK" English. Here are a few examples:</p>
                <ul>
                    <li>color (US) vs. colour (UK)</li>
                    <li>center (US) vs. centre (UK)</li>
                    <li>defense (US) vs. defence (UK)</li>
                    <li>recognize (US) vs. recognise (UK)</li>
                </ul>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title " id="exampleModalLabel">Please Provide Clear, Detailed Instructions</h5>
                <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Type all information, instructions, requirements, and specifications related to your order. Be as descriptive and detailed as possible. The more information, the better. Remember, we are not responsible for including material or features that you do not specifically request in this order form.
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title " id="exampleModalLabel">Features That Qualify as "Statistical Analysis"</h5>
                <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="mb-5">Our prices are based on words per page. However, to complete a paper that requires a meaningful amount of statistical analysis and/or mathematical calculations, a writer must generally dedicate a significant amount of extra/unpaid time, labor, and effort. Therefore, if your order requires a meaningful amount of statistical analysis and/or mathematical calculations, we ask that you voluntarily add 15% to the order subtotal to adequately compensate the writer.</p>
                <p class="mb-5">
                    The following features qualify as "statistical analysis":
                </p>
                <ul class="list-unstyled">
                    <li>Analysis of Covariance (ANCOVA or ANOCOVA)</li>
                    <li>Analysis of Variance (ANOVA)</li>
                    <li>Causal Modeling</li>
                    <li>Cluster Analysis</li>
                    <li>Components of Variation</li>
                    <li>Computer Modeling and Simulation</li>
                    <li>Data Analysis and Interpretation</li>
                    <li>Discriminant Function Analysis</li>
                    <li>Econometric Models</li>
                    <li>Excel software calculations</li>
                    <li>Factor Analysis</li>
                    <li>Gauge (Gage) R&amp;R</li>
                    <li>JMP software calculations</li>
                    <li>Linear Regression</li>
                    <li>Logistic Regression</li>
                    <li>Multiple Regression</li>
                    <li>Multivariate Analysis of Covariance (MANCOVA)</li>
                    <li>Multivariate Analysis of Variance (MANOVA)</li>
                    <li>Multivariate Statistical Analysis</li>
                    <li>Path Analysis</li>
                    <li>Repeated Measures ANOVA</li>
                    <li>SAS software calculations</li>
                    <li>SPSS software calculations</li>
                    <li>Univariate Statistical Analysis</li>
                    <li>Variance Components (VARCOMP)</li>
                </ul>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title " id="exampleModalLabel">Add a 1-Page Summary to Your Order</h5>
                <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Receive an additional, 1-page summary of the paper. It will contain a descriptive, concise breakdown of the paper's thesis, main points, arguments, findings, conclusions, etc. A 1-page summary is the perfect tool for studying, convenient referencing, rehearsing talking points for a presentation, preparing for an oral exam/defense, etc.
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title " id="exampleModalLabel">Priority Support:  Get the "VIP" Treatment</h5>
                <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                We will reply to your emails and support tickets with even greater urgency, usually within 30 minutes. Plus, your prioritized "VIP" account will provide you with access to our priority phone number, real-time order status updates, direct chat with your writer, the ability to quickly add additional pages to your order with just a few clicks, and many other conveniences.
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title " id="exampleModalLabel">We'll Store the Paper . . . Forever!</h5>
                <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            In your online account, we will backup and permanently store the completed paper, all resource files that you uploaded, and the order specifications that you provided.  At any time in the future (and from any location with any device), you'll be able to read or download all of those materials simply by logging-in to your account.  You'll never have to worry about losing or forgetting them!
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title " id="exampleModalLabel">"Shortcut Guide" to Writing</h5>
                <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            We wrote our downloadable (.pdf) writing guide specifically for busy college students who need shortcuts.  We skip all of the useless, boring stuff and provide direct, easy-to-implement advice regarding how to quickly improve your writing skills.  We also explain how to make incredibly simple, fast changes to your writing style that will impress any professor (which is what really matters).  Topics include "Eight Tips to Dramatically Improve Your Writing Overnight," "The Perfect Thesis Statement," "Keys to Grammar, Punctuation, and Style," "Overcoming Writer's Block in Five Easy Steps," "Secrets to Bibliographies, Works Cited, and References," etc.
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title " id="exampleModalLabel">Get SMS Text Notifications!</h5>
                <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            You will receive an SMS text alert at every critical stage of the project, including when the order has been completed!  (US phones only.)
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title " id="exampleModalLabel">Add Payment Details!</h5>
                <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id" data-kt-stepper-type="step" class='step'>
                    <!--begin::Step 4-->
                    <div data-kt-stepper-element="content">
                        <div class="w-100">
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                    <span class="required">Name On Card</span>
                                    <span class="ms-1" data-bs-toggle="tooltip" title="Specify a card holder's name">
                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" placeholder="Card Name" id="card_name" name="card_name" />
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
                                <!--end::Label-->
                                <!--begin::Input wrapper-->
                                <div class="position-relative">
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" placeholder="Enter card number" id='card_number' name="card_number" value="4111 1111 1111 1111" />
                                    <!--end::Input-->
                                    <!--begin::Card logos-->
                                    <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                        <img src="assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
                                        <img src="assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
                                        <img src="assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
                                    </div>
                                    <!--end::Card logos-->
                                </div>
                                <!--end::Input wrapper-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-10">
                                <!--begin::Col-->
                                <div class="col-md-8 fv-row">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
                                    <!--end::Label-->
                                    <!--begin::Row-->
                                    <div class="row fv-row">
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <select name="card_expiry_month" id="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
                                                <option></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <input name="card_expiry_year" id="card_expiry_year"  placeholder="Year"/>
                                               
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                        <span class="required">CVV</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter a card CVV code">
                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input wrapper-->
                                    <div class="position-relative">
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" id="card_cvv" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
                                        <!--end::Input-->
                                        <!--begin::CVV icon-->
                                        <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                            <i class="ki-duotone ki-credit-cart fs-2hx"><span class="path1"></span><span class="path2"></span></i>
                                        </div>
                                        <!--end::CVV icon-->
                                    </div>
                                    <!--end::Input wrapper-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="d-flex flex-stack">
                                <!--begin::Label-->
                                <div class="me-5">
                                    <label class="fs-6 fw-semibold form-label">Save Card for further billing?</label>
                                    <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
                                </div>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <label class="form-check form-switch form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                    <span class="form-check-label fw-semibold text-muted">
                                        Save Card
                                    </span>
                                </label>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                        </div>
                    </div>
                    <!--end::Step 4-->
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="submit" class="btn btn-secondary" onclick="submit_payment()">Submit</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--end::App-->
<!--begin::Drawers-->
<!--end::Drawers-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up">
        <span class="path1"></span>
        <span class="path2"></span>
    </i>
</div>
<!--end::Scrolltop-->
<!--begin::Javascript-->

<script>
    var hostUrl = "assets/";
</script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
      localStorage.removeItem('checkedlength');
      localStorage.removeItem('checkedlabels');
      localStorage.removeItem('dataObject');
    console.log(document.getElementById('meeting-date').value);
    // Function to handle table search
    function handleTableSearch() {
        // Get the search input value
        var searchText = $('[data-kt-user-table-filter="search"]').val().toLowerCase();
        console.log(searchText)
        // Loop through each table row
        $('#kt_table_users tbody tr').each(function() {
            // Check if any cell contains the search text
            var rowText = $(this).text().toLowerCase();
            if (rowText.indexOf(searchText) === -1) {
                // Hide the row if it doesn't match the search text
                $(this).hide();
            } else {
                // Show the row if it matches the search text
                $(this).show();
            }
        });
    }

    // Attach the search handler to the input change event
    $('[data-kt-user-table-filter="search"]').on('input', function() {
        handleTableSearch();
    });

let old='';

    $(document).ready(function() {
    $('#pricing').on('change', function() {
        var selectedValue = $(this).val();
        if(old !== ''){
            document.getElementById(`click_${old}`).style.display='none';
        }
    document.getElementById(`click_${selectedValue}`).style.display='block';
    old=selectedValue;

    $.ajax({
                    type: 'get',
                    url: '/customer/changeDate/' + selectedValue,
                    data: { id: selectedValue }, // Assuming id is a parameter you want to send
                    success: function (response) {
                        // Handle the success response here
                        var data = response.message;
        var type = data.duration_type;
        var max = data.max;
        if(max === 'later'){
            max='16'
        }
        var per_page=data.cost_per_page;
        var elements = document.querySelectorAll('#cost_per_page');
console.log(elements)
// Loop through the elements and set the content
elements.forEach(function (element) {
    element.innerHTML = per_page;
});

        calculate_sub_total();
        // Get current date and time
       var currentDate = new Date();
        var currentTime = currentDate.getTime();

        // Variables to store formatted date, time, and AM/PM
        var formattedDate;
        var formattedTime;
        var ampm;
var day_date;
        // Check duration type and adjust date or time accordingly
        if (type === 'Days') {
          
            currentDate.setDate(currentDate.getDate() + parseInt(max, 10));
    formattedDate = currentDate.toISOString().slice(0, 10);
    day_date = formatDate(formattedDate);
    document.getElementById('meeting-date').value = formattedDate;
    document.getElementById('day_date').innerHTML = day_date;

    console.log('New Date:', formattedDate+day_date);
    
        } else if (type === 'Hours') {
            currentTime += parseInt(max, 10) * 60 * 60 * 1000;
            var newDate = new Date(currentTime);
    
    // Use newDate after it's assigned
    formattedTime = newDate.toLocaleTimeString('en-US', { hour: 'numeric', minute: 'numeric', hour12: false }); // Remove AM/PM
    formattedDate = newDate.toISOString().slice(0, 10);
    ampm = newDate.toLocaleTimeString('en-US', { hour12: true }).split(' ')[1]; // Extract AM/PM
    day_date = formatDate(formattedDate);

            if (newDate.getDate() !== currentDate.getDate()) {
                formattedDate = newDate.toISOString().slice(0, 10);
                day_date = formatDate(formattedDate);
                document.getElementById('day_date').innerHTML = day_date;

                console.log('Time and Date:', formattedDate, formattedTime, ampm);
                document.getElementById('meeting-date').value = formattedDate;
                document.getElementById('meeting-time').value = formattedTime;
                document.getElementById('day_date').innerHTML = day_date;

                $('#ampm').val(ampm).trigger('change');

            } else {
                
                console.log('New Time:', formattedTime, ampm ,+day_date);

                formattedDate = newDate.toISOString().slice(0, 10);
                day_date = formatDate(formattedDate);
                document.getElementById('meeting-time').value = formattedTime;
                document.getElementById('meeting-date').value = formattedDate;
                document.getElementById('day_date').innerHTML = day_date;
                $('#ampm').val(ampm).trigger('change');
            }
        }
                    },
                    error: function (error) {
                        // Handle any errors here
                        console.error(error);
                    }
                });

    });
    
    $('#term_of_paper').on('change', function() {
 var value=$(this).val();
 console.log(value);
 document.getElementById('document_type_show').innerHTML= value;
})

$('#academic_level').on('change', function() {
 var value=$(this).val();
 document.getElementById('research_level_show').innerHTML= value;
})
});
function formatDate(dateString) {
    var date = new Date(dateString);
    try {
        return date.toLocaleDateString('en-US', { weekday: 'short', month: 'short', day: 'numeric' });
    } catch (error) {
        console.error('Error formatting date:', error);
        // Fallback: Create a custom format manually
        return `${date.getFullYear()}-${(date.getMonth() + 1).toString().padStart(2, '0')}-${date.getDate().toString().padStart(2, '0')}`;
    }
}
document.getElementById('no-page').addEventListener('input', function() {
    var inputValue = this.value;
    if(inputValue == ''){
        document.getElementById('no_of_pages').innerHTML=0;
    }else{
        document.getElementById('no_of_pages').innerHTML=inputValue;
    }
    var no_of_extra_page=document.getElementById('no_of_extra_sources').value;
    if(parseInt(no_of_extra_page)>parseInt(inputValue)){
        console.log(no_of_extra_page+' '+inputValue);
        var minus = parseInt(no_of_extra_page) - parseInt(inputValue);
        if(inputValue == ''){
            document.getElementById('extra_sources').innerHTML=no_of_extra_page;
    }else{
        document.getElementById('extra_sources').innerHTML=minus;
    }
      
    }else{
        document.getElementById('extra_sources').innerHTML=0;
    }

    calculate_sub_total();
    console.log('Input Value Changed:', inputValue,no_of_extra_page);
});

document.getElementById('no_of_extra_sources').addEventListener('input', function() {
    var inputValue = this.value;
    var no_of_page=document.getElementById('no_of_pages').innerHTML;
    if(parseInt(inputValue) > parseInt(no_of_page)){
        var minus = parseInt(inputValue) - parseInt(no_of_page);
        document.getElementById('extra_sources').innerHTML=minus;
    }else{
        document.getElementById('extra_sources').innerHTML=0;
    }
    calculate_sub_total();
})

document.getElementById('statistical_analysis').addEventListener('input', function() {

    var inputValue = this.value;
    console.log(inputValue)
    let check=document.getElementById('statistic_percentage').innerHTML;
if(check != '0'){
    document.getElementById('statistic_percentage').innerHTML=0
    calculate_sub_total()
}else{
    document.getElementById('statistic_percentage').innerHTML=0
}
   
 
})

document.getElementById('statistical_analysis_yes').addEventListener('input', function() {

var inputValue = this.value;
console.log(inputValue)
let check=document.getElementById('statistic_percentage').innerHTML;
if(check != '15'){
    document.getElementById('statistic_percentage').innerHTML=15
    let no_of_page= document.getElementById('no_of_pages').innerHTML;
    let extra=document.getElementById('extra_sources').innerHTML;
    if(no_of_page === ''){
        no_of_page=0;
    }
    if(extra === ''){
        extra=0;
    }

    let cost_page=document.getElementById('cost_per_page').innerHTML;
     let total =parseInt(no_of_page)*parseInt(cost_page)+parseInt(extra);
     let percentage=document.getElementById('statistic_percentage').innerHTML;
     let calculate=total + (total * parseInt(percentage)/100);
     document.getElementById('sub_total').innerHTML=calculate;
    
  
     var local = localStorage.getItem('checkedlength');
     console.log(local);
     if(local!=null){
        check=JSON.parse(local);
additional=parseInt(cost_page)*parseInt(check)
console.log(additional)
total_sum_final(additional)
     }else{
        additional=0
        console.log(additional)

total_sum_final(additional)
     }
}




})

function calculate_sub_total(){
    let no_of_page= document.getElementById('no_of_pages').innerHTML;
    let extra=document.getElementById('extra_sources').innerHTML;
    if(no_of_page === ''){
        no_of_page=0;
    }
    if(extra === ''){
        extra=0;
    }
percentage=document.getElementById('statistic_percentage').innerHTML;
    let cost_page=document.getElementById('cost_per_page').innerHTML;
     let total =parseInt(no_of_page)*parseInt(cost_page)+parseInt(extra);
     console.log(percentage);
     if(percentage != '0'){
        let calculate=total + (total * parseInt(percentage)/100);
     document.getElementById('sub_total').innerHTML=calculate;
     }else{
        document.getElementById('sub_total').innerHTML=total;

     }
     var local = localStorage.getItem('checkedlength');
     console.log(local);
     if(local!=null){
        check=JSON.parse(local);
additional=parseInt(cost_page)*parseInt(check)
console.log(additional)
total_sum_final(additional)
     }else{
        additional=0
        console.log(additional)

total_sum_final(additional)
     }
}
function payment(){
    var email=document.getElementById('email').value;
    var backup_email=document.getElementById('backup-email').value;
    var pricing=document.getElementById('pricing').value;
   var due_date=document.getElementById('meeting-date').value;
   var due_time=document.getElementById('meeting-time').value;
   var ampm=document.getElementById('ampm').value;
   var cost_per_page=document.getElementById('cost_per_page').innerHTML;
   var academic_level=document.getElementById('academic_level').value;
   var subject=document.getElementById('subject').value;
   var description=document.getElementById('description').value;
   var paper_format=document.getElementById('paper_format').value;
   var term_of_paper=document.getElementById('term_of_paper').value;
   var no_of_extra_sources=document.getElementById('no_of_extra_sources').value;
   var topic=document.getElementById('topic').value;
   var no_of_pages=document.getElementById('no_of_pages').innerHTML;
   var language_spelling=document.getElementById('language_spelling').value;
   var submitting=document.getElementById('submitting').value;
var sub_total=document.getElementById('sub_total').innerHTML;
var total_cost=document.getElementById('total_cost').innerHTML;
var coupon=document.getElementById('coupon').value;
var local = localStorage.getItem('checkedlabels');
     console.log(local);
     if(local!=null){
        check=JSON.parse(local);
additional_info=check;
     }else{
        additional_info=null;
     }
     var statistical_analysis=document.getElementById('statistic_percentage').innerHTML;

     var dataObject = {
  pricing: pricing,
  due_date: due_date,
  due_time: due_time,
  coupon:coupon,
  ampm: ampm,
  subject: subject,
  description: description,
  paper_format: paper_format,
  term_of_paper: term_of_paper,
  no_of_extra_sources: no_of_extra_sources,
  topic: topic,
  no_of_pages: no_of_pages,
  submitting: submitting,
  sub_total: sub_total,
  academic_level:academic_level,
  language_spelling:language_spelling,
  total_cost: total_cost,
  cost_per_page:cost_per_page,
  additional_info: additional_info,
  statistical_analysis: statistical_analysis,
  email:email,
  backup_email:backup_email
};
localStorage.setItem('dataObject', JSON.stringify(dataObject))
console.log(dataObject);
}

</script>




<script>
  var checkedLabels = [];

// Add event listener to the toggle switches
document.querySelectorAll('#toggleSwitch').forEach(function (toggleSwitch) {
    toggleSwitch.addEventListener('change', function () {
        var target = this.dataset.target; // Get the data-target attribute
        var costLabelElement = document.getElementById('cost_label' + target);

// Log the costLabelElement to the console to debug
console.log(costLabelElement);

// Update the variable or perform any action based on the checked state
if (this.checked) {
    var costLabelValue = costLabelElement.textContent.trim();
    // Do something with the costLabelValue
    console.log('ON: ' + costLabelValue);

    // Add the checked label to the array
    checkedLabels.push(costLabelValue);
    checklength=checkedLabels.length;
    localStorage.setItem('checkedlength', JSON.stringify(checklength));
    localStorage.setItem('checkedlabels', JSON.stringify(checkedLabels));
    cost_per=document.getElementById('cost_per_page').innerHTML;
additional= parseInt(checklength)*parseInt(cost_per);
total_sum_final(additional);
} else {
    // Remove the unchecked label from the array
    var costLabelValue = costLabelElement.textContent.trim();
    var index = checkedLabels.indexOf(costLabelValue);
    if (index !== -1) {
        checkedLabels.splice(index, 1);
    }
checklength=checkedLabels.length;
localStorage.setItem('checkedlength', JSON.stringify(checklength));  
localStorage.setItem('checkedlabels', JSON.stringify(checkedLabels));
cost_per=document.getElementById('cost_per_page').innerHTML;
additional= parseInt(checklength)*parseInt(cost_per);
total_sum_final(additional);
  console.log('OFF: ' + costLabelValue);
}

// Display the current array of checked labels
console.log('Checked Labels: ', checkedLabels);


});
});

function total_sum_final(additional){
var sub_total=document.getElementById('sub_total').innerHTML;
console.log(additional)
    total = parseInt(sub_total) + parseInt(additional);
    console.log(total);
    document.getElementById('total_cost').innerHTML=total;
    coupon();

}
function coupon(){
    var my_coupon=document.getElementById('my_coupon').innerHTML;
    var coupon=document.getElementById('coupon').value;
    if(coupon == my_coupon){
        net_total=document.getElementById('total_cost').innerHTML;
        total= parseInt(net_total) - (parseInt(net_total)*10/100);
        document.getElementById('total_cost').innerHTML=  total;
    }
}
function submit_payment(){
    var card_name=document.getElementById('card_name').value;
    var card_number=document.getElementById('card_number').value;
    var card_expiry_month=document.getElementById('card_expiry_month').value;
    var card_expiry_year=document.getElementById('card_expiry_year').value;
    var card_cvv=document.getElementById('card_cvv').value;

    var card_detail={
        card_name:card_name,
        card_number:card_number,
        card_expiry_month:card_expiry_month,
        card_expiry_year:card_expiry_year,
        card_cvv:card_cvv
    }
    localStorage.setItem('card_detail', JSON.stringify(card_detail))
console.log(card_detail);
user_id=document.getElementById('user_id').value;
var data = localStorage.getItem('dataObject');
     dataobject=JSON.parse(data);
$.ajax({
                    type: 'post',
                    url: '/customer/payment/' + user_id,
                    data: { card: card_detail,  _token: '{{ csrf_token() }}', }, 
                  // Assuming id is a parameter you want to send
                    success: function (response) { 
                        console.log(response);
                        message=response.message;
                        card=message.card;
                        $.ajax({
                    type: 'post',
                    url: '/customer/createOrder/' + user_id,
                    data: { card: card_detail, dataObject:dataobject, _token: '{{ csrf_token() }}', }, 
                  // Assuming id is a parameter you want to send
                    success: function (response) { 
                        console.log(response);
                      
                        
                      

                    },

                    error: function (error) {
                        // Handle any errors here
                        console.error(error);
                    }
                });

                    },

                    error: function (error) {
                        // Handle any errors here
                        console.error(error);
                    }
                });
}
</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{ asset('backend/assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{ asset('backend/assets/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{ asset('backend/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="{{ asset('backend/assets/js/custom/apps/user-management/users/list/table.js')}}"></script>
<script src="{{ asset('backend/assets/js/custom/apps/user-management/users/list/export-users.js')}}"></script>
<script src="{{ asset('backend/assets/js/custom/apps/user-management/users/list/add.js')}}"></script>


<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="{{ asset('backend/assets/js/widgets.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/widgets.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>


<script src="{{ asset('backend/assets/js/custom/utilities/modals/users-search.js') }}"></script>

<!--end::Custom Javascript-->
<!--end::Javascript-->


@endsection