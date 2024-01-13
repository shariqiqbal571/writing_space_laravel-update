@extends('custom_layout.master')
@section('main_content')
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
                                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-1 flex-column justify-content-center my-0">Subscription</h1>
                                <!--end::Title-->

                            </div>
                            <!--end::Page title-->
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center gap-2 gap-lg-3">

                                <!--begin::Secondary button-->
                                <!--end::Secondary button-->
                                <!--begin::Primary button-->
                                <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_subs">Create Subscription</a>
                                <!--end::Primary button-->
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Toolbar container-->
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Content-->
                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="app-container container-xxl">
                            <!--begin::Card-->
                            <div class="card mb-10">
                                <!--begin::Page title-->
                                <div class="page-title d-flex flex-column justify-content-center pt-6 px-6 flex-wrap me-3">
                                    <!--begin::Title-->
                                    <h3 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Subscription</h3>
                                    <!--end::Title-->

                                </div>
                                <!--end::Page title-->
                                <!--begin::Card header-->
                                <div class="card-header border-0 pt-6">

                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <!--begin::Search-->
                                        <div class="d-flex align-items-center position-relative my-1">
                                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search user" />
                                        </div>
                                        <!--end::Search-->
                                    </div>
                                    <!--begin::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Toolbar-->
                                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                            <!--begin::Filter-->
                                            <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <i class="ki-duotone ki-filter fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>Filter</button>
                                            <!--begin::Menu 1-->
                                            <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                                                <!--begin::Header-->
                                                <div class="px-7 py-5">
                                                    <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Separator-->
                                                <div class="separator border-gray-200"></div>
                                                <!--end::Separator-->
                                                <!--begin::Content-->
                                                <div class="px-7 py-5" data-kt-user-table-filter="form">
                                                    <!--begin::Input group-->
                                                    <div class="mb-3">
                                                        <label class="form-label fs-6 fw-semibold">Subscription Plan:</label>
                                                        <input type="text" placeholder="Subscription Plan" name="subscription-plan" autocomplete="off" class="form-control bg-transparent" />
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="mb-3">
                                                        <label class="form-label fs-6 fw-semibold">Service:</label>
                                                        <input type="text" placeholder="Service" name="service" autocomplete="off" class="form-control bg-transparent" />
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="mb-3">
                                                        <label class="form-label fs-6 fw-semibold">Total Pages:</label>
                                                        <input type="text" placeholder="Total Pages" name="total-pages" autocomplete="off" class="form-control bg-transparent" />
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Actions-->
                                                    <div class="d-flex justify-content-end">
                                                        <button type="reset" class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">Reset</button>
                                                        <button type="submit" class="btn btn-primary fw-semibold px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="filter">Apply</button>
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Menu 1-->
                                            <!--end::Filter-->
                                            <!--begin::Export-->
                                            <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_export_users">
                                                <i class="ki-duotone ki-exit-up fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>Export</button>
                                            <!--end::Export-->
                                        </div>
                                        <!--end::Toolbar-->
                                        <!--begin::Group actions-->
                                        <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                                            <div class="fw-bold me-5">
                                                <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected
                                            </div>
                                            <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
                                        </div>
                                        <!--end::Group actions-->
                                        <!--begin::Modal - Adjust Balance-->
                                        <div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">
                                            <!--begin::Modal dialog-->
                                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                                <!--begin::Modal content-->
                                                <div class="modal-content">
                                                    <!--begin::Modal header-->
                                                    <div class="modal-header">
                                                        <!--begin::Modal title-->
                                                        <h2 class="fw-bold">Export Subscription</h2>
                                                        <!--end::Modal title-->
                                                        <!--begin::Close-->
                                                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" aria-label="Close">
                                                            <i class="ki-duotone ki-cross fs-1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </div>
                                                        <!--end::Close-->
                                                    </div>
                                                    <!--end::Modal header-->
                                                    <!--begin::Modal body-->
                                                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                                        <!--begin::Form-->
                                                  
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-10">
                                                                <!--begin::Label-->
                                                                <label class="fs-6 fw-semibold form-label mb-2">Select Status:</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <select name="role" data-control="select2" data-placeholder="Select Status" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                                                    <option></option>
                                                                    <option value="Administrator">Enable</option>
                                                                    <option value="Analyst">Disable</option>
                                                                </select>
                                                                <!--end::Input-->
                                                            </div>
                                                            <!--end::Input group-->
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-10">
                                                                <!--begin::Label-->
                                                                <label class="required fs-6 fw-semibold form-label mb-2">Select Export Format:</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <select name="format" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                                                    <option></option>
                                                                    <option value="excel">Excel</option>
                                                                    <option value="pdf">PDF</option>
                                                                    <option value="cvs">CVS</option>
                                                                    <option value="zip">ZIP</option>
                                                                </select>
                                                                <!--end::Input-->
                                                            </div>
                                                            <!--end::Input group-->
                                                            <!--begin::Actions-->
                                                            <div class="text-center">
                                                                <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Discard</button>
                                                                <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                                                    <span class="indicator-label">Submit</span>
                                                                    <span class="indicator-progress">Please wait...
                                                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                                </button>
                                                            </div>
                                                            <!--end::Actions-->
                                                        </form>
                                                        <!--end::Form-->
                                                    </div>
                                                    <!--end::Modal body-->
                                                </div>
                                                <!--end::Modal content-->
                                            </div>
                                            <!--end::Modal dialog-->
                                        </div>
                                        <!--end::Modal - New Card-->
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body py-4">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                                        <thead>
                                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                <th class="w-10px pe-2">
                                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                                    </div>
                                                </th>
                                                <th class="min-w-100px">Subscription Plan</th>
                                                <th class="min-w-100px">Service Type</th>
                                                <th class="min-w-100px">Cost Per Page</th>
                                                <th class="min-w-100px">Set Time Limit</th>
                                                <th class="min-w-80px">Min Page</th>
                                                <th class="min-w-80px">Max Page</th>
                                                <th class="min-w-90px">Total Pages</th>
                                                <th class="min-w-70px">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-gray-600 fw-semibold">
                                            @if($subscription)
                                            @foreach($subscription as $subs)
                                            <tr>
                                                <td>
                                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="{{$subs->id}}" />
                                                    </div>
                                                </td>
                                                <td>{{$subs->subscription_name}}</td>
                                                <td>{{$subs->service_type}}</td>
                                                <td>{{$subs->cost_per_page}}</td>
                                                <td>{{$subs->set_time}}</td>
                                                <td>{{$subs->min_page}}</td>
                                                <td>{{$subs->max_page}}</td>
                                                <td>{{$subs->total_subscription}}</td>
                                                <td>
                                                    <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <button type="button" class="btn menu-link d-flex justify-content-center fs-7 w-100" data-bs-toggle="modal" data-bs-target="#view-invoice_{{$subs->id}}">View</button>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <button type="button" class="btn menu-link d-flex justify-content-center fs-7 w-100" data-bs-toggle="modal" data-bs-target="#kt_modal_create_subscription">Edit</button>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link d-flex justify-content-center px-3" onclick="confirmDelete({{$subs->id}})">Delete</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="/images/myw3schoolsimage.jpg" class="menu-link d-flex justify-content-center px-3" download>Download</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="view-invoice_{{$subs->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header border-0">
                                                            <h5 class="modal-title" id="exampleModalLabel">Invoice</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="">
                                                                <!--begin::Body-->
                                                                <div class="card-body">
                                                                    <!--begin::Layout-->
                                                                    <div class="d-flex flex-column flex-xl-row">
                                                                        <!--begin::Content-->
                                                                        <div class="flex-lg-row-fluid me-xl-18 mb-10 mb-xl-0">
                                                                            <!--begin::Invoice 2 content-->
                                                                            <div class="mt-n1">
                                                                                <!--begin::Top-->
                                                                                <div class="d-flex flex-stack pb-10">
                                                                                    <!--begin::Logo-->
                                                                                    <a href="#">
                                                                                        <img alt="Logo" src="assets/media/ws/ws-dark-name-logo.png" />
                                                                                    </a>
                                                                                    <!--end::Logo-->
                                                                                </div>
                                                                                <!--end::Top-->
                                                                                <!--begin::Wrapper-->
                                                                                <div class="m-0">
                                                                                    <!--begin::Label-->
                                                                                    <div class="fw-bold fs-3 text-gray-800 mb-8">Subscription #{{$subs->id}}</div>
                                                                                    <!--end::Label-->
                                                                                    <!--begin::Row-->
                                                                                    <div class="row g-5 mb-12">
                                                                                        <!--end::Col-->
                                                                                        <div class="col-md-3">
                                                                                            <!--end::Label-->
                                                                                            <div class="fw-semibold fs-7 text-gray-600 mb-1">Subscription Plan:</div>
                                                                                            <!--end::Label-->
                                                                                            <!--end::Text-->
                                                                                            <div class="fw-bold fs-6 text-gray-800">{{$subs->subscription_name}}</div>
                                                                                            <!--end::Text-->
                                                                                        </div>
                                                                                        <!--end::Col-->
                                                                                        <!--end::Col-->
                                                                                        <div class="col-md-3">
                                                                                            <!--end::Label-->
                                                                                            <div class="fw-semibold fs-7 text-gray-600 mb-1">Service Type:</div>
                                                                                            <!--end::Label-->
                                                                                            <!--end::Text-->
                                                                                            <div class="fw-bold fs-6 text-gray-800">{{$subs->service_type}}</div>
                                                                                            <!--end::Text-->
                                                                                        </div>
                                                                                        <!--end::Col-->
                                                                                        <div class="col-md-3">
                                                                                            <!--end::Label-->
                                                                                            <div class="fw-semibold fs-7 text-gray-600 mb-1">Cost Per Page:</div>
                                                                                            <!--end::Label-->
                                                                                            <!--end::Text-->
                                                                                            <div class="fw-bold fs-6 text-gray-800">{{$subs->cost_per_page}}</div>
                                                                                            <!--end::Text-->
                                                                                        </div>
                                                                                        <!--end::Col-->
                                                                                        <!--end::Col-->
                                                                                        <div class="col-md-3">
                                                                                            <!--end::Label-->
                                                                                            <div class="fw-semibold fs-7 text-gray-600 mb-1">Set Time Limit:</div>
                                                                                            <!--end::Label-->
                                                                                            <!--end::Text-->
                                                                                            <div class="fw-bold fs-6 text-gray-800">{{$subs->set_time}}</div>
                                                                                            <!--end::Text-->
                                                                                        </div>
                                                                                        <!--end::Col-->
                                                                                    </div>
                                                                                    <!--end::Row-->
                                                                                    <!--begin::Content-->
                                                                                    <div class="row g-5 mb-12">
                                                                                        <!--end::Col-->
                                                                                        <div class="col-md-3">
                                                                                            <!--end::Label-->
                                                                                            <div class="fw-semibold fs-7 text-gray-600 mb-1">Minimum Pages:</div>
                                                                                            <!--end::Label-->
                                                                                            <!--end::Text-->
                                                                                            <div class="fw-bold fs-6 text-gray-800">{{$subs->min_page}}</div>
                                                                                            <!--end::Text-->
                                                                                        </div>
                                                                                        <!--end::Col-->
                                                                                        <!--end::Col-->
                                                                                        <div class="col-md-3">
                                                                                            <!--end::Label-->
                                                                                            <div class="fw-semibold fs-7 text-gray-600 mb-1">Maximum Pages:</div>
                                                                                            <!--end::Label-->
                                                                                            <!--end::Text-->
                                                                                            <div class="fw-bold fs-6 text-gray-800">{{$subs->max_page}}</div>
                                                                                            <!--end::Text-->
                                                                                        </div>
                                                                                        <!--end::Col-->
                                                                                        <div class="col-md-3">
                                                                                            <!--end::Label-->
                                                                                            <div class="fw-semibold fs-7 text-gray-600 mb-1">Total Pages in Subscription:</div>
                                                                                            <!--end::Label-->
                                                                                            <!--end::Text-->
                                                                                            <div class="fw-bold fs-6 text-gray-800">{{$subs->total_subscription}}</div>
                                                                                            <!--end::Text-->
                                                                                        </div>
                                                                                        <!--end::Col-->
                                                                                        <div class="col-md-3">
                                                                                            <!--end::Label-->
                                                                                            <div class="fw-semibold fs-7 text-gray-600 mb-1">Rollover Limit (Max Pages):</div>
                                                                                            <!--end::Label-->
                                                                                            <!--end::Text-->
                                                                                            <div class="fw-bold fs-6 text-gray-800">{{$subs->rollover_limit}}</div>
                                                                                            <!--end::Text-->
                                            
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end::Content-->
                                                                                    <!--begin::Row-->
                                                                                    <div class="row g-5 mb-12">
                                                                                        <!--end::Col-->
                                                                                        <div class="col-sm-9">
                                                                                            <div class="col-md-8">
                                                                                                <!--end::Label-->
                                                                                                <div class="fw-semibold fs-7 text-gray-600 mb-1">Inform Customer Day Before The Expiry Date:</div>
                                                                                                <!--end::Label-->
                                                                                                <!--end::Text-->
                                                                                                <div class="fw-bold fs-6 text-gray-800">{{$subs->inform_customer_expiry_date}}</div>
                                                                                                <!--end::Text-->
                                                                                            </div>
                                                                                            <div class="col-md-4">
                                                                                                <!--end::Label-->
                                                                                                <div class="fw-semibold fs-7 text-gray-600 mb-1">Everyday via email:</div>
                                                                                                <!--end::Label-->
                                                                                                <!--end::Text-->
                                                                                                <div class="fw-bold fs-6 text-gray-800">{{$subs->inform_customer_email}}</div>
                                                                                                <!--end::Text-->
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="col-md-12">
                                                                                                <!--end::Label-->

                                                                                                <!--end::Label-->
                                                                                                <!--end::Text-->
                                                                                                @if (!empty($subs->restrictions))
                                                                                                @foreach(json_decode($subs->restrictions) as $r)
                                                                                                <div class="fw-bold fs-6 text-gray-800"><i class="fa-solid fa-check"></i>{{$r}}</div>
                                                                                                @endforeach
                                                                                                @endif
                                                                                                <!--end::Text-->
                                                                                            </div>
                                                                                            <br>
                                                                                            <div class="col-md-12">
                                                                                                <!--end::Label-->

                                                                                                <!--end::Label-->
                                                                                                <!--end::Text-->
                                                                                                @if (!empty($subs->more_restrictions))
                                                                                                @foreach(json_decode($subs->more_restrictions) as $r)
                                                                                                @if($r->status === true)
                                                                                                <div class="fw-bold fs-6 text-gray-800"><i class="fa-solid fa-check"></i> {{$r->title}}</div>
                                                                                                @else
                                                                                                <div class="fw-bold fs-6 text-gray-800"><i class="fa-solid fa-xmark"></i>{{$r->title}}</div>
@endif
                                                                                                @endforeach
                                                                                                @endif
                                                                                                <!--end::Text-->
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end::Row-->
                                                                                </div>
                                                                                <!--end::Wrapper-->
                                                                            </div>
                                                                            <!--end::Invoice 2 content-->
                                                                        </div>
                                                                        <!--end::Content-->
                                            
                                                                    </div>
                                                                    <!--end::Layout-->
                                                                </div>
                                                                <!--end::Body-->
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer border-0 justify-content-between">
                                                            <div class="">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                           
                                            @endif
                                        </tbody>
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Content container-->
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

<div class="modal fade" id="kt_modal_create_subs" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-900px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Create Subscription</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body py-lg-10 px-lg-10">
                <!--begin::Stepper-->
                <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_app_stepper">
                    <!--begin::Aside-->
                    <div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
                        <!--begin::Nav-->
                        <div class="stepper-nav ps-lg-10">
                            <!--begin::Step 1-->
                            <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id" data-kt-stepper-type="step" class='step_name'>
                                <div class="stepper-item current" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="ki-duotone ki-check stepper-check fs-2"></i> <span class="stepper-number">1</span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                Subscription
                                            </h3>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                            </div>

                            <!--end::Step 1-->
                            <!--begin::Step 2-->
                            <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id" data-kt-stepper-type="step" class='step_name'>
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="ki-duotone ki-check stepper-check fs-2"></i> <span class="stepper-number">2</span>
                                        </div>
                                        <!--begin::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                Set Cost and Time Parameters
                                            </h3>
                                        </div>
                                        <!--begin::Label-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                            </div>

                            <!--end::Step 2-->
                            <!--begin::Step 3-->
                            <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id" data-kt-stepper-type="step" class='step_name'>
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="ki-duotone ki-check stepper-check fs-2"></i> <span class="stepper-number">3</span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                (Set Page Parameters)
                                            </h3>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                            </div>

                            <!--end::Step 3-->
                            <!--begin::Step 4-->
                            <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id" data-kt-stepper-type="step" class='step_name'>
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="ki-duotone ki-check stepper-check fs-2"></i> <span class="stepper-number">4</span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                (Renewal/Expiry Policy)
                                            </h3>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                            </div>
                            <!--end::Step 4-->
                            <!--begin::Step 5-->
                            <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id" data-kt-stepper-type="step" class='step_name'>
                                <div class="stepper-item mark-completed" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="ki-duotone ki-check stepper-check fs-2"></i> <span class="stepper-number">5</span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                Completed
                                            </h3>
                                            <div class="stepper-desc">
                                                Review and Submit
                                            </div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                            </div>
                            <!--end::Step 5-->
                        </div>
                        <!--end::Nav-->
                    </div>
                    <!--begin::Aside-->
                    <!--begin::Content-->
                    <div class="flex-row-fluid py-lg-5 px-lg-15">
                        <!--begin::Form-->
                        <div data-kt-stepper="true">
                            <form class="form" novalidate="novalidate" id="kt_modal_create_app_form" method="post" action="{{route("admin.createSubscription")}}">
                                <!--begin::Step 1-->
                                @csrf
                                <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id" data-kt-stepper-type="step" class='step'>
                                    <!-- ... Step content ... -->

                                    <div class="current" data-kt-stepper-element="content">
                                        <div class="w-100">
                                            <!--begin::heading-->
                                            <div class="d-flex align-items-center fs-3 fw-semibold mb-4">
                                                <h3>Subscription Basic Info</h3><span class="ms-1" data-bs-toggle="tooltip" title="Specify your apps framework">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                            </div>
                                            <!--end::heading-->
                                           
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                        <span class="required">Subscription Plan</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-lg form-control-solid" name="subscription_name" placeholder="Basic" value="Basic" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row row">
                                                    <!--begin::col-->
                                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                        <span class="required">Service Type</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <select class="form-select form-select-solid fw-bold" name='service_type' data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true">
                                                        <option></option>
                                                        <option value="proofreading">Proofreading</option>
                                                        <option value="editing">Editing</option>
                                                        <option value="custom-writing">Custom Writing</option>
                                                    </select>
                                                    <!--end::Input-->

                                                </div>
                                        
                                        </div>
                                    </div>
                                    <!--end::Step 1-->

                                </div>

                                <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id" data-kt-stepper-type="step" class='step'>
                                    <!--begin::Step 2-->
                                    <div data-kt-stepper-element="content">
                                        <div class="w-100">
                                           
                                                <!--begin::Input group-->
                                                <div class="fv-row">
                                                    <!--begin::heading-->
                                                    <div class="d-flex align-items-center fs-3 fw-semibold mb-4">
                                                        <h3>Set Cost and Time Parameters</h3><span class="ms-1" data-bs-toggle="tooltip" title="Specify your apps framework">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                                    </div>
                                                    <!--end::heading-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row row">
                                                        <!--begin::col-->
                                                        <div class="col-md-6 mb-10">
                                                            <!--begin::Label-->
                                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                                <span class="required">Cost Per Page</span>
                                                                <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <div class="position-relative">
                                                                <input type="number" class="form-control form-control-lg form-control-solid" name="cost_per_page" placeholder="5" value="" />
                                                                <i class="bi bi-currency-dollar position-absolute cost-sign"></i>
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::col-->
                                                        <!--begin::col-->
                                                        <div class="col-md-6 mb-10">
                                                            <!--begin::Label-->
                                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                                <span class="required">Set Time Limit</span>
                                                                <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <select class="form-select form-select-solid fw-bold" name="set_time" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true">
                                                                <option></option>
                                                                <option value="Monthly">Monthly</option>
                                                                <option value="Quaterly">Quaterly</option>
                                                                <option value="Annually">Annually</option>
                                                            </select>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::col-->

                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Input group-->
                                           
                                        </div>
                                    </div>
                                    <!--end::Step 2-->

                                </div>

                                <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id" data-kt-stepper-type="step" class='step'>
                                    <!--begin::Step 3-->
                                    <div data-kt-stepper-element="content">
                                        <div class="w-100">
                                            <!--begin::heading-->
                                            <div class="d-flex align-items-center fs-3 fw-semibold mb-4">
                                                <h3>Subscription Renewal Policy</h3><span class="ms-1" data-bs-toggle="tooltip" title="Specify your apps framework">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                            </div>
                                            <!--end::heading-->
                                        
                                                <div class="fv-row mb-10 row">
                                                    <div class="col-md-6">
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-10">
                                                            <!--begin::Label-->
                                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                                <span class="required">Minimum Pages</span>
                                                                <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="number" class="form-control form-control-lg form-control-solid" name="min_page" placeholder="50" value="50" />
                                                            <!--end::Input-->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <!--begin::Label-->
                                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                            <span class="required">Maximum Pages</span>
                                                            <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="number" class="form-control form-control-lg form-control-solid" name="max_page" placeholder="750" value="750" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10 row">
                                                    <div class="col-md-6">
                                                        <!--begin::Label-->
                                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                            <span class="required">Total Pages in Subscription:</span>
                                                            <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="number" class="form-control form-control-lg form-control-solid" name="total_subscription" placeholder="Total Pages" value="abeer@elementary-solutions.com" min="1" required />
                                                        <!--end::Input-->
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="fv-row mb-10">
                                                            <!--begin::Label-->
                                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                                <span class="required">Rollover Limit (Max Pages):</span>
                                                                <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="number" class="form-control form-control-lg form-control-solid" name="rollover_limit" placeholder="Rollover Limit" value="" min="0" required />
                                                            <!--end::Input-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input row-->
                                                <div class="d-flex fv-row mb-5">
                                                    <!--begin::Radio-->
                                                    <div class="form-check form-check-custom form-check-solid">
                                                        <!--begin::Input-->
                                                        <input type="checkbox" id="allowAllPages" name="restrictions[]" value="Allow All Pages to Rollover:" class="form-check-input me-3">
                                                        <!--end::Input-->
                                                        <!--begin::Label-->
                                                        <label class="form-check-label" for="kt_modal_update_role_option_0">
                                                            <div class="text-gray-600">Allow All Pages to Rollover:</div>
                                                        </label>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Radio-->
                                                </div>
                                                <!--end::Input row-->
                                                <!--begin::Input row-->
                                                <div class="d-flex fv-row mb-5">
                                                    <!--begin::Radio-->
                                                    <div class="form-check form-check-custom form-check-solid">
                                                        <!--begin::Input-->
                                                        <input type="checkbox" id="membership-complete" value='If Customer Manually cancels the Renewal, the membership will Complete its full allotted time.' name="restrictions[]" class="form-check-input me-3">
                                                        <!--end::Input-->
                                                        <!--begin::Label-->
                                                        <label class="form-check-label" for="kt_modal_update_role_option_0">
                                                            <div class="text-gray-600">If Customer Manually cancels the Renewal, the membership will Complete its full allotted time.</div>
                                                        </label>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Radio-->
                                                </div>
                                                <!--end::Input row-->
                                                <!--begin::Input row-->
                                                <div class="d-flex fv-row">
                                                    <!--begin::Radio-->
                                                    <div class="form-check form-check-custom form-check-solid">
                                                        <!--begin::Input-->
                                                        <input type="checkbox" id="used-up" name="restrictions[]" value="Cancel when all Pages are Used Up." class="form-check-input me-3">
                                                        <!--end::Input-->
                                                        <!--begin::Label-->
                                                        <label class="form-check-label" for="kt_modal_update_role_option_0">
                                                            <div class="text-gray-600">Cancel when all Pages are Used Up.</div>
                                                        </label>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Radio-->
                                                </div>
                                                <!--end::Input row-->
                                          
                                        </div>
                                    </div>
                                    <!--end::Step 3-->
                                </div>

                                <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id" data-kt-stepper-type="step" class='step'>
                                    <!--begin::Step 3-->
                                    <div data-kt-stepper-element="content">
                                        
                                        <div class="w-100" id="myForm">
<!--begin::Input group-->
<div class=" mb-10 fv-row row">
    <div class="row mb-3 justify-content-between">
        <div class="col-md-3 mb-3">
            <!--begin::Label-->
            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-3">
                <span class="required">Inform Customer Day(s)</span>
                <span class="ms-1" data-bs-toggle="tooltip" title="Specify a card holder's name">
                </span>
            </label>
            <!--end::Label-->
        </div>
        <div class="col-md-3 mb-3">
            <select name="inform_customer_expiry_date" class="form-select form-select-solid mx-3" data-control="select2" data-hide-search="true" data-placeholder="Select Option">
                <option></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </div>
        <div class="col-md-5 mb-3">
            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-3">
                <span class="required">Day(s) Before The Expiry Date</span>
                <span class="ms-1" data-bs-toggle="tooltip" title="Specify a card holder's name">
                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
            </label>
        </div>
    </div>
    <div class="row mb-3 justify-content-between">
        <div class="col-md-3 mb-3">
            <!--begin::Label-->
            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-3">
                <span class="required">Inform Customer Day(s)</span>
                <span class="ms-1" data-bs-toggle="tooltip" title="Specify a card holder's name">
                </span>
            </label>
            <!--end::Label-->
        </div>
        <div class="col-md-3 mb-3">
            <select name="inform_customer_email" class="form-select form-select-solid mx-3" data-control="select2" data-hide-search="true" data-placeholder="Select Option">
                <option></option>
                <option value="1">Once</option>
            <option value="2">Twice</option>
            </select>
        </div>
        <div class="col-md-5 mb-3">
            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-3">
                <span class="required">Everyday via email</span>
                <span class="ms-1" data-bs-toggle="tooltip" title="Specify a card holder's name">
                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span>
            </label>
        </div>
    </div>
</div>
<!--end::Input group-->
<!--begin::Input group-->
<div class="row mb-10">

    <div class="col-md-8 mb-3 mb-3">
        <!--begin::Label-->
        <label class="required fs-6 fw-semibold form-label">If Customer Manually cancels the Renewal, allow customer to use all the unused pages</label>
        <!--end::Label-->
    </div>
    <div class="col-md-4 mb-3">
        <select name="more[]" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Option">
            <option></option>
            <option value="1">Yes</option>
            <option value="2">No</option>
        </select>
    </div>

</div>
<!--end::Input group-->
<!--begin::Input group-->
<div class="row mb-10">

    <div class="col-md-8 mb-3">
        <!--begin::Label-->
        <label class="required fs-6 fw-semibold form-label">If Customer Manually cancels the Renewal, allow customer to use add more pages to existing subscription</label>
        <!--end::Label-->
    </div>
    <div class="col-md-4 mb-3">
        <select name="more[]" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Option">
            <option></option>
            <option value="1">Yes</option>
            <option value="2">No</option>
        </select>
    </div>

</div>
<!--end::Input group-->
<!--begin::Input group-->
<div class="row mb-10">

    <div class="col-md-8 mb-3">
        <!--begin::Label-->
        <label class="required fs-6 fw-semibold form-label mb-2">Subscription Renewal Successful Email</label>
        <!--end::Label-->
    </div>
    <div class="col-md-4 mb-3">
        <select name="more[]" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Option">
            <option></option>
            <option value="1">Yes</option>
            <option value="2">No</option>
        </select>
    </div>

</div>
<!--end::Input group-->
<!--begin::Input group-->
<div class="row mb-10">

    <div class="col-md-8 mb-3">
        <!--begin::Label-->
        <label class="required fs-6 fw-semibold form-label mb-2">Subscription Renewal Payment/Decline Email</label>
        <!--end::Label-->
    </div>
    <div class="col-md-4 mb-3">
        <select name="more[]" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Option">
            <option></option>
            <option value="1">Yes</option>
            <option value="2">No</option>
        </select>
    </div>

</div>
<!--end::Input group-->
<!--begin::Input group-->
<div class="row mb-10">

    <div class="col-md-8 mb-3">
        <!--begin::Label-->
        <label class="required fs-6 fw-semibold form-label mb-2">Subscription Renewal System-Dysfunctional Email</label>
        <!--end::Label-->
    </div>
    <div class="col-md-4 mb-3">
        <select name="more[]" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Option">
            <option></option>
            <option value="1">Yes</option>
            <option value="2">No</option>
        </select>
    </div>

</div>
<!--end::Input group-->
<input type="hidden" value='' name="more_restrictions" id='more'>
</div>
</div>
                                </div>
                               

                                <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id" data-kt-stepper-type="step" class='step'>
                                    <!--begin::Step 5-->
                                    <div data-kt-stepper-element="content">
                                        <div class="w-100 text-center">
                                            <!--begin::Heading-->
                                            <h1 class="fw-bold text-gray-900 mb-3">Congratulations!</h1>
                                            <!--end::Heading-->
                                            <!--begin::Description-->
                                            <div class="text-muted fw-semibold fs-3">
                                                Submited Your Subscription.
                                            </div>
                                            <!--end::Description-->
                                            <!--begin::Illustration-->
                                            <div class="text-center px-4 py-15">
                                                <img src="assets/media/illustrations/sketchy-1/9.png" alt="" class="mw-100 mh-300px" />
                                            </div>
                                            <!--end::Illustration-->
                                        </div>
                                    </div>
                                    <!--end::Step 5-->
                                </div>
                                <!--begin::Actions-->
                                <div class="d-flex flex-stack pt-10">
                                    <!--begin::Wrapper-->
                                    <div class="me-2">
                                        <button type="button" class="btn btn-lg btn-light-primary me-3" id='previous' style='display:none;'>
                                            <i class="ki-duotone ki-arrow-left fs-3 me-1"><span class="path1"></span><span class="path2"></span></i> Back
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="submit" class="btn btn-lg btn-primary" id='submit' style='display:none;'>
                                            <span class="indicator-label">
                                                Submit
                                                <i class="ki-duotone ki-arrow-right fs-3 ms-2 me-0"><span class="path1"></span><span class="path2"></span></i> </span>
                                            <span class="indicator-progress">
                                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                            </span>
                                        </button>


                                        <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next" id='next'>
                                            Continue
                                            <i class="ki-duotone ki-arrow-right fs-3 ms-1 me-0"><span class="path1"></span><span class="path2"></span></i> </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Stepper-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
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
</script>
<script>
    function confirmDelete() {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You will not be able to recover this data!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // TODO: Add your deletion logic here
                // For now, let's show an alert
                Swal.fire('Deleted!', 'Your data has been deleted.', 'success');
            }
        });
    }
</script>
<script>
    $(document).ready(function() {
        // Initialize DataTables
        var table = $('#kt_table_users').DataTable();

        // Filter form submission
        $('[data-kt-user-table-filter="filter"]').on('click', function(e) {
            e.preventDefault();

            // Get filter values
            var subscriptionPlan = $('input[name="subscription-plan"]').val();
            var service = $('input[name="service"]').val();
            var totalPages = $('input[name="total-pages"]').val();

            // Apply filters
            table.columns(1).search(subscriptionPlan).draw();
            table.columns(2).search(service).draw();
            table.columns(7).search(totalPages).draw();
        });

        // Reset filter form
        $('[data-kt-user-table-filter="reset"]').on('click', function(e) {
            e.preventDefault();

            // Reset input fields
            $('input[name="subscription-plan"]').val('');
            $('input[name="service"]').val();
            $('input[name="total-pages"]').val();

            // Clear filters
            table.columns().search('').draw();
        });
    });
</script>
<script>
    var isStatusEnabled = false;

    function toggleStatus() {
        isStatusEnabled = !isStatusEnabled;
        updateButtonAppearance();
        // You can also perform other actions based on the status change here
    }

    function updateButtonAppearance() {
        var button = document.getElementById("toggleButton");
        if (isStatusEnabled) {
            button.textContent = "Enabled";
            button.classList.remove("disabledd");
            button.classList.add("enabledd");
        } else {
            button.textContent = "Disabled";
            button.classList.remove("enabledd");
            button.classList.add("disabledd");
        }
    }
</script>
<script>
    var currentStep = 1;

    function updateStepper() {
        // Get all steps
        var steps = document.querySelectorAll('.step');

        // Remove 'current' class from all steps
        steps.forEach(function(step) {
            $(step).find('[data-kt-stepper-element="content"]').removeClass('current');
            $(step).hide();
        });

        // Add 'current' class to the current step
        $(steps[currentStep - 1]).find('[data-kt-stepper-element="content"]').addClass('current');
        $(steps[currentStep - 1]).show();

        const backButton = document.querySelector('#previous');
        const continueButton = document.querySelector('#next');
        const submitButton = document.querySelector('#submit');

        if (currentStep === 1) {
            backButton.style.display = 'none';
            continueButton.style.display = 'block';
            submitButton.style.display = 'none';
        } else if (currentStep < 5) {
            backButton.style.display = 'block';
            continueButton.style.display = 'block';
            submitButton.style.display = 'none';
        } else {
            backButton.style.display = 'block';
            continueButton.style.display = 'none';
            submitButton.style.display = 'block';
        }

    }

    function active_button() {
        var steps = document.querySelectorAll('.step_name');

        // Remove 'current' class from all steps
        steps.forEach(function(step) {
            $(step).find('[data-kt-stepper-element="nav"]').removeClass('current');

        });

        // Add 'current' class to the current step
        $(steps[currentStep - 1]).find('[data-kt-stepper-element="nav"]').addClass('current');

    }
    const continueButton = document.querySelector('#next');
    continueButton.addEventListener("click", function() {
        // Go to the next step (if not already at the last step)
        if (currentStep < 5) {
            currentStep++;
            updateStepper();
            active_button()
        }
    });
    const backButton = document.querySelector('#previous');
    backButton.addEventListener("click", function() {
        if (currentStep > 1) {
            currentStep--;
            updateStepper();
            active_button()
        }
    });
</script>
<script>
    // Automatically generate the JSON structure on page load
    $(document).ready(function () {
        generateJSON();

        // Add event listener for change on select elements
        $("select[name='more[]']").on('change', function () {
            generateJSON();
        });
    });

    // Function to generate the JSON structure
    function generateJSON() {
        var moreRestrictions = [];

        // Loop through select elements and create JSON structure
        $("select[name='more[]']").each(function () {
            var title = $(this).closest(".mb-10").find(".fs-6").text().trim();
            var status = $(this).val() === "1";
            moreRestrictions.push({ "title": title, "status": status });
        });
console.log(moreRestrictions)
        // Display the result in the console (you can send it to the server as needed)
       document.getElementById('more').value=JSON.stringify(moreRestrictions);
       console.log(document.getElementById('more').value)

    }

    function confirmDelete(id)
 {
   console.log(id)
        Swal.fire({
            title: 'Are you sure?',
            text: 'You will not be able to recover this data!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {


                $.ajax({
                    type: 'get',
                    url: '/admin/deleteSubscription/' + id,
                    data: { id: id }, // Assuming id is a parameter you want to send
                    success: function (response) {
                        // Handle the success response here
                        console.log(response);
                        location.reload(true);
                    },
                    error: function (error) {
                        // Handle any errors here
                        console.error(error);
                    }
                });
     

                Swal.fire('Deleted!', 'Your data has been deleted.', 'success');
            }
        });
    }
</script>

@endsection