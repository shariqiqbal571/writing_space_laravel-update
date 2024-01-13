<div class="d-flex flex-column flex-lg-row">
    <!--begin::Sidebar-->
    <div class="d-none d-lg-flex flex-column flex-lg-row-auto w-100 w-lg-275px" data-kt-drawer="true" data-kt-drawer-name="inbox-aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_inbox_aside_toggle">

        <!--begin::Sticky aside-->
        <div class="card card-flush mb-0" data-kt-sticky="true" data-kt-sticky-name="inbox-aside-sticky" data-kt-sticky-offset="{default: false, xl: '100px'}" data-kt-sticky-width="{lg: '275px'}" data-kt-sticky-left="auto" data-kt-sticky-top="100px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
            <!--begin::Aside content-->
            <div class="card-body">
                <!--begin::Button-->
                <a href="/metronic8/demo1/../demo1/apps/inbox/compose.html" class="btn btn-primary fw-bold w-100 mb-8">New Message</a>
                <!--end::Button-->

                <!--begin::Menu-->
                <div class="menu menu-column menu-rounded menu-state-bg menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary mb-10">
                    <!--begin::Menu item-->
                    <div class="menu-item mb-3">
                        <!--begin::Inbox-->
                        <span class="menu-link active">
                            <span class="menu-icon"><i class="ki-duotone ki-sms fs-2 me-3"><span class="path1"></span><span class="path2"></span></i></span>
                            <span class="menu-title fw-bold">Inbox</span>
                            <span class="badge badge-light-success">3</span>
                        </span>
                        <!--end::Inbox-->
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item mb-3">
                        <!--begin::Marked-->
                        <span class="menu-link">
                            <span class="menu-icon"><i class="ki-duotone ki-abstract-23 fs-2 me-3"><span class="path1"></span><span class="path2"></span></i></span>
                            <span class="menu-title fw-bold">Marked</span>
                        </span>
                        <!--end::Marked-->
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item mb-3">
                        <!--begin::Draft-->
                        <span class="menu-link">
                            <span class="menu-icon"><i class="ki-duotone ki-file fs-2 me-3"><span class="path1"></span><span class="path2"></span></i></span>
                            <span class="menu-title fw-bold">Draft</span>
                            <span class="badge badge-light-warning">5</span>
                        </span>
                        <!--end::Draft-->
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item mb-3">
                        <!--begin::Sent-->
                        <span class="menu-link">
                            <span class="menu-icon"><i class="ki-duotone ki-send fs-2 me-3"><span class="path1"></span><span class="path2"></span></i></span>
                            <span class="menu-title fw-bold">Sent</span>
                        </span>
                        <!--end::Sent-->
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item">
                        <!--begin::Trash-->
                        <span class="menu-link">
                            <span class="menu-icon"><i class="ki-duotone ki-trash fs-2 me-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i></span>
                            <span class="menu-title fw-bold">Trash</span>
                        </span>
                        <!--end::Trash-->
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Aside content-->
        </div>
        <!--end::Sticky aside-->
    </div>
    <!--end::Sidebar-->

    <!--begin::Content-->
    <div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">

        <!--begin::Card-->
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between py-3">
                <h2 class="card-title m-0">
                    Compose Message
                </h2>

                <!--begin::Toggle-->
                <a href="#" class="btn btn-sm btn-icon btn-color-primary btn-light btn-active-light-primary d-lg-none" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-placement="top" id="kt_inbox_aside_toggle" aria-label="Toggle inbox menu" data-bs-original-title="Toggle inbox menu" data-kt-initialized="1">
                    <i class="ki-duotone ki-burger-menu-2 fs-3 m-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></i> </a>
                <!--end::Toggle-->
            </div>

            <div class="card-body p-0">
                <!--begin::Form-->
                <form id="kt_inbox_compose_form">
                    <!--begin::Body-->
                    <div class="d-block">
                        <!--begin::To-->
                        <div class="d-flex align-items-center border-bottom px-8 min-h-50px">
                            <!--begin::Label-->
                            <div class="text-gray-900 fw-bold w-75px">
                                To:
                            </div>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <tags class="tagify form-control form-control-transparent border-0 tagify--noTags tagify--empty" tabindex="-1">
                                <span contenteditable="" tabindex="0" data-placeholder="​" aria-placeholder="" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                                ​
                            </tags><input type="text" class="form-control form-control-transparent border-0" name="compose_to" value="" data-kt-inbox-form="tagify" tabindex="-1">
                            <!--end::Input-->

                            <!--begin::CC & BCC buttons-->
                            <div class="ms-auto w-75px text-end">
                                <span class="text-muted fs-bold cursor-pointer text-hover-primary me-2" data-kt-inbox-form="cc_button">Cc</span>
                                <span class="text-muted fs-bold cursor-pointer text-hover-primary" data-kt-inbox-form="bcc_button">Bcc</span>
                            </div>
                            <!--end::CC & BCC buttons-->
                        </div>
                        <!--end::To-->

                        <!--begin::CC-->
                        <div class="d-none align-items-center border-bottom ps-8 pe-5 min-h-50px" data-kt-inbox-form="cc">
                            <!--begin::Label-->
                            <div class="text-gray-900 fw-bold w-75px">
                                Cc:
                            </div>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <tags class="tagify form-control form-control-transparent border-0 tagify--noTags tagify--empty" tabindex="-1">
                                <span contenteditable="" tabindex="0" data-placeholder="​" aria-placeholder="" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                                ​
                            </tags><input type="text" class="form-control form-control-transparent border-0" name="compose_cc" value="" data-kt-inbox-form="tagify" tabindex="-1">
                            <!--end::Input-->

                            <!--begin::Close-->
                            <span class="btn btn-clean btn-xs btn-icon" data-kt-inbox-form="cc_close">
                                <i class="ki-duotone ki-cross fs-5"><span class="path1"></span><span class="path2"></span></i> </span>
                            <!--end::Close-->
                        </div>
                        <!--end::CC-->

                        <!--begin::BCC-->
                        <div class="d-none align-items-center border-bottom inbox-to-bcc ps-8 pe-5 min-h-50px" data-kt-inbox-form="bcc">
                            <!--begin::Label-->
                            <div class="text-gray-900 fw-bold w-75px">
                                Bcc:
                            </div>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <tags class="tagify form-control form-control-transparent border-0 tagify--noTags tagify--empty" tabindex="-1">
                                <span contenteditable="" tabindex="0" data-placeholder="​" aria-placeholder="" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                                ​
                            </tags><input type="text" class="form-control form-control-transparent border-0" name="compose_bcc" value="" data-kt-inbox-form="tagify" tabindex="-1">
                            <!--end::Input-->

                            <!--begin::Close-->
                            <span class="btn btn-clean btn-xs btn-icon" data-kt-inbox-form="bcc_close">
                                <i class="ki-duotone ki-cross fs-5"><span class="path1"></span><span class="path2"></span></i> </span>
                            <!--end::Close-->
                        </div>
                        <!--end::BCC-->

                        <!--begin::Subject-->
                        <div class="border-bottom">
                            <input class="form-control form-control-transparent border-0 px-8 min-h-45px" name="compose_subject" placeholder="Subject">
                        </div>
                        <!--end::Subject-->

                        <!--begin::Message-->
                        <div class="ql-toolbar ql-snow px-5 border-top-0 border-start-0 border-end-0"><span class="ql-formats"><span class="ql-header ql-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-0"><svg viewBox="0 0 18 18">
                                            <polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon>
                                            <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon>
                                        </svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-0"><span tabindex="0" role="button" class="ql-picker-item" data-value="1"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="2"></span><span tabindex="0" role="button" class="ql-picker-item ql-selected"></span></span></span><select class="ql-header" style="display: none;">
                                    <option value="1"></option>
                                    <option value="2"></option>
                                    <option selected="selected"></option>
                                </select></span><span class="ql-formats"><button type="button" class="ql-bold"><svg viewBox="0 0 18 18">
                                        <path class="ql-stroke" d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z"></path>
                                        <path class="ql-stroke" d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z"></path>
                                    </svg></button><button type="button" class="ql-italic"><svg viewBox="0 0 18 18">
                                        <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line>
                                        <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line>
                                        <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line>
                                    </svg></button><button type="button" class="ql-underline"><svg viewBox="0 0 18 18">
                                        <path class="ql-stroke" d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path>
                                        <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3" y="15"></rect>
                                    </svg></button></span><span class="ql-formats"><button type="button" class="ql-image"><svg viewBox="0 0 18 18">
                                        <rect class="ql-stroke" height="10" width="12" x="3" y="4"></rect>
                                        <circle class="ql-fill" cx="6" cy="7" r="1"></circle>
                                        <polyline class="ql-even ql-fill" points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12"></polyline>
                                    </svg></button><button type="button" class="ql-code-block"><svg viewBox="0 0 18 18">
                                        <polyline class="ql-even ql-stroke" points="5 7 3 9 5 11"></polyline>
                                        <polyline class="ql-even ql-stroke" points="13 7 15 9 13 11"></polyline>
                                        <line class="ql-stroke" x1="10" x2="8" y1="5" y2="13"></line>
                                    </svg></button></span></div>
                        <div id="kt_inbox_form_editor" class="bg-transparent border-0 h-350px px-3 ql-container ql-snow">
                            <div class="ql-editor ql-blank" data-gramm="false" contenteditable="true" data-placeholder="Type your text here...">
                                <p><br></p>
                            </div>
                            <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                            <div class="ql-tooltip ql-hidden"><a class="ql-preview" rel="noopener noreferrer" target="_blank" href="about:blank"></a><input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL"><a class="ql-action"></a><a class="ql-remove"></a></div>
                        </div>
                        <!--end::Message-->

                        <!--begin::Attachments-->
                        <div class="dropzone dropzone-queue px-8 py-4" id="kt_inbox_reply_attachments" data-kt-inbox-form="dropzone">
                            <div class="dropzone-items">

                            </div>
                            <div class="dz-default dz-message"><button class="dz-button" type="button">Drop files here to upload</button></div>
                        </div>
                        <!--end::Attachments-->
                    </div>
                    <!--end::Body-->

                    <!--begin::Footer-->
                    <div class="d-flex flex-stack flex-wrap gap-2 py-5 ps-8 pe-5 border-top">
                        <!--begin::Actions-->
                        <div class="d-flex align-items-center me-3">
                            <!--begin::Send-->
                            <div class="btn-group me-4">
                                <!--begin::Submit-->
                                <span class="btn btn-primary fs-bold px-6" data-kt-inbox-form="send">
                                    <span class="indicator-label">
                                        Send
                                    </span>
                                    <span class="indicator-progress">
                                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </span>
                                <!--end::Submit-->

                                <!--begin::Send options-->
                                <span class="btn btn-primary btn-icon fs-bold w-30px pe-0" role="button">
                                    <span class="lh-0" data-kt-menu-trigger="click" data-kt-menu-placement="top-start">
                                        <i class="ki-duotone ki-down fs-4 m-0"></i> </span>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                Schedule send
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                Save &amp; archive
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                Cancel
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </span>
                                <!--end::Send options-->
                            </div>
                            <!--end::Send-->

                            <!--begin::Upload attachement-->
                            <span class="btn btn-icon btn-sm btn-clean btn-active-light-primary me-2 dz-clickable" id="kt_inbox_reply_attachments_select" data-kt-inbox-form="dropzone_upload">
                                <i class="ki-duotone ki-paper-clip fs-2 m-0"></i> </span>
                            <!--end::Upload attachement-->

                            <!--begin::Pin-->
                            <span class="btn btn-icon btn-sm btn-clean btn-active-light-primary">
                                <i class="ki-duotone ki-geolocation fs-2 m-0"><span class="path1"></span><span class="path2"></span></i> </span>
                            <!--end::Pin-->
                        </div>
                        <!--end::Actions-->

                        <!--begin::Toolbar-->
                        <div class="d-flex align-items-center">
                            <!--begin::More actions-->
                            <span class="btn btn-icon btn-sm btn-clean btn-active-light-primary me-2" data-toggle="tooltip" title="More actions">
                                <i class="ki-duotone ki-setting-2 fs-2"><span class="path1"></span><span class="path2"></span></i> </span>
                            <!--end::More actions-->

                            <!--begin::Dismiss reply-->
                            <span class="btn btn-icon btn-sm btn-clean btn-active-light-primary" data-inbox="dismiss" data-toggle="tooltip" title="Dismiss reply">
                                <i class="ki-duotone ki-trash fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> </span>
                            <!--end::Dismiss reply-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Footer-->
                </form>
                <!--end::Form-->
            </div>
        </div>
        <!--end::Card-->

    </div>
    <!--end::Content-->
</div>