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
                                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Permissions List</h1>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                        <a href="index.html" class="text-muted text-hover-primary">Home</a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">User Management</li>
                                    <!--end::Item-->
                                </ul>
                                <!--end::Breadcrumb-->
                            </div>
                            <!--end::Page title-->
                        </div>
                        <!--end::Toolbar container-->
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Content-->
                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="app-container container-xxl">
                            <!--begin::Card-->
                            <div class="card card-flush">
                                <!--begin::Card header-->
                                <div class="card-header mt-6">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <!--begin::Search-->
                                        <div class="d-flex align-items-center position-relative my-1 me-5">
                                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <input type="text" data-kt-permissions-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search Permissions" />
                                        </div>
                                        <!--end::Search-->
                                    </div>
                                    <!--end::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Button-->
                                        <button type="button" class="btn btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_permission">
                                            <i class="ki-duotone ki-plus-square fs-3">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>Add Permission</button>
                                        <!--end::Button-->
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_permissions_table">
                                        <thead>
                                            <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                <th class="min-w-125px">Name</th>
                                                <th class="min-w-125px">Group Name</th>
                                                <th class="min-w-250px">Assigned to</th>
                                                <th class="min-w-125px">Created Date</th>
                                                <th class="text-end min-w-100px">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="fw-semibold text-gray-600">
                                            @foreach ($permissions as $perm )
                                                
                                         
                                            <tr>
                                                <td>{{ $perm->name }}</td>
                                                <td>{{ getPermissionGroup($perm->id) }}</td>
                                                <td>
                                                    <a href="{{ route('admin.show.all.roles') }}" class="badge badge-light-primary fs-7 m-1">Administrator</a>
                                                </td>
                                                <td>{{ $perm->created_at }}</td>
                                                <td class="text-end">
                                                    <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3 perm_edit" data-id="{{ $perm->id}}" data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                                                        <i class="ki-duotone ki-setting-3 fs-3">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                            <span class="path4"></span>
                                                            <span class="path5"></span>
                                                        </i>
                                                    </button>
                                                    <button class="btn btn-icon btn-active-light-primary w-30px h-30px perm_delete" data-id={{ $perm->id }}>
                                                        <i class="ki-duotone ki-trash fs-3">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                            <span class="path4"></span>
                                                            <span class="path5"></span>
                                                        </i>
                                                    </button>
                                                </td>
                                            </tr>
                                           
                                            @endforeach

                                        </tbody>
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                            <!--begin::Modals-->
                            <!--begin::Modal - Add permissions-->
                            <div class="modal fade" id="kt_modal_add_permission" tabindex="-1" aria-hidden="true">
                                <!--begin::Modal dialog-->
                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                    <!--begin::Modal content-->
                                    <div class="modal-content">
                                        <!--begin::Modal header-->
                                        <div class="modal-header">
                                            <!--begin::Modal title-->
                                            <h2 class="fw-bold">Add a Permission</h2>
                                            <!--end::Modal title-->
                                            <!--begin::Close-->
                                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-permissions-modal-action="close">
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
                                            <form id="kt_modal_add_permission_form" class="form">
                                                @csrf
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold form-label mb-2">
                                                        <span class="required">Permission Name</span>
                                                        <span class="ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Permission names is required to be unique.">
                                                            <i class="ki-duotone ki-information fs-7">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input class="form-control form-control-solid" placeholder="Enter a permission name" id="name" name="name" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-semibold form-label mb-2">
                                                        <span class="required">Group Name</span>
                                                        <span class="ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Permission names is required to be unique.">
                                                            <i class="ki-duotone ki-information fs-7">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </span>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input class="form-control form-control-solid" placeholder="Enter a group name" id="group_name" name="group_name" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Actions-->
                                                <div class="text-center pt-15">
                                                    <button type="reset" class="btn btn-light me-3" data-kt-permissions-modal-action="cancel">Discard</button>
                                                    <button type="button" class="btn btn-primary addNewPermission" >
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
                            <!--end::Modal - Add permissions-->

                             <!--begin::Modal - Update permissions-->
                             <div class="modal fade update_modal_permission" id="kt_modal_update_permission" tabindex="-1" aria-hidden="true">
                                <!--begin::Modal dialog-->
                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                    <!--begin::Modal content-->
                                    <div class="modal-content">
                                        <!--begin::Modal header-->
                                        <div class="modal-header">
                                            <!--begin::Modal title-->
                                            <h2 class="fw-bold">Update Permission</h2>
                                            <!--end::Modal title-->
                                            <!--begin::Close-->
                                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-permissions-modal-action="close">
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
                                            <!--begin::Notice-->
                                            <!--begin::Notice-->
                                            <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                                                <!--begin::Icon-->
                                                <i class="ki-duotone ki-information fs-2tx text-warning me-4">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                                <!--end::Icon-->
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-stack flex-grow-1">
                                                    <!--begin::Content-->
                                                    <div class="fw-semibold">
                                                        <div class="fs-6 text-gray-700">
                                                            <strong class="me-1">Warning!</strong>By editing the permission name, you might break the system permissions functionality. Please ensure you're absolutely certain before proceeding.
                                                        </div>
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Notice-->
                                            <!--end::Notice-->
                                            <!--begin::Form-->
                                            <form id="kt_modal_update_permission_form" class="form" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" id="update_perm_id" >
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold form-label mb-2">
                                                    <span class="required">Permission Name</span>
                                                    <span class="ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Permission names is required to be unique.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid" placeholder="Enter a permission name" id="update_name" name="name"/>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold form-label mb-2">
                                                    <span class="required">Group Name</span>
                                                    <span class="ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Permission names is required to be unique.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input class="form-control form-control-solid" placeholder="Enter a group name" id="update_group_name" name="group_name" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                                <!--begin::Actions-->
                                                <div class="text-center pt-15">
                                                    <button type="reset" class="btn btn-light me-3" data-kt-permissions-modal-action="cancel">Discard</button>
                                                    <button type="button" class="btn btn-primary update_perm" data-kt-permissions-modal-action="submit">
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
                            <!--end::Modal - Update permissions-->

                            <!--end::Modals-->

                        </div>
                        <!--end::Content container-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Content wrapper-->
                <!--begin::Footer-->
                <div id="kt_app_footer" class="app-footer">
                    <!--begin::Footer container-->
                    <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                        <!--begin::Copyright-->
                        <div class="text-gray-900 order-2 order-md-1">
                            <span class="text-muted fw-semibold me-1">2023&copy;</span>
                            <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                            <li class="menu-item">
                                <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                            </li>
                            <li class="menu-item">
                                <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
                            </li>
                            <li class="menu-item">
                                <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
                            </li>
                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Footer container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end:::Main-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::App-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up">
        <span class="path1"></span>
        <span class="path2"></span>
    </i>
</div>
<!--end::Scrolltop-->
<!--begin::Modals-->
<!--begin::Javascript-->
<script>
    var hostUrl = "assets/";
</script>
<script>
    $(document).ready(function () {
    //update permission
    $('.update_perm').on('click', function (e) {
        e.preventDefault();

        var update_perm_id = $('#update_perm_id').val();
        var update_name = $('#update_name').val();
        var update_group_name = $('#update_group_name').val();
         // Get the CSRF token from the meta tag
         var csrfToken = $('meta[name="csrf-token"]').attr('content');
        // alert(UpdateEmail);
        $.ajax({
            url: '{{route("admin.permission.update")}}',
            type: 'POST',
            data: {
                'id' : update_perm_id,
                'name' : update_name,
                'group_name' : update_group_name,
                '_token': csrfToken
                },
            dataType: 'json',
            success: function(response) {
                // Handle success response
                console.log(response.success);
                if(response.success){
                    $('#kt_modal_add_permission').modal('hide');
                    // $('.modal-backdrop').hide();
                    location.reload();
                }

                // Display success message to the user
                Swal.fire('Success!', response.success, 'success');

                // Optionally, you can access the updated user data if needed
                console.log(response.user);
            },
            error: function(xhr) {
                // Handle error response
                var errors = xhr.responseJSON.errors;

                if (errors && errors.email) {
                    // Display the validation error message with SweetAlert
                    Swal.fire('Error!', errors.email[0], 'error');
                } else {
                    // Display a generic error message
                    console.error('Oops! Something went wrong');
                    // Display a generic error message with SweetAlert
                    Swal.fire('Error!', 'Oops! Something went wrong', 'error');
                }
            }
        })


    });

    //edit permission
    $('.perm_edit').on('click', function (e) {
        e.preventDefault();

        var perm_id = $(this).attr("data-id");

        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: '{{ route("admin.permission.edit", ["id" => "__perm_id"]) }}'.replace('__perm_id', perm_id),
            type: 'GET', // Corrected the HTTP method to uppercase
            data: {
                'id': perm_id,
                '_token': csrfToken
            },
            dataType: 'json',
            success: function (response) {
                // Handle success response
                var permission = response.permission;

                if (permission) {
                    $('#kt_modal_update_permission').modal('show');

                    $('#update_perm_id').val(permission.id);
                    $('#update_name').val(permission.name);
                    // Assuming 'group_name' is a property of 'permission'
                    $('#update_group_name').val(permission.group_name);
                }
            },

            error: function (xhr) {
                // Handle error response
                var errors = xhr.responseJSON.errors;

                if (errors && errors.id) { // Corrected to check 'id' instead of 'email'
                    // Display the validation error message with SweetAlert
                    Swal.fire('Error!', errors.id[0], 'error');
                } else {
                    // Display a generic error message
                    console.error('Oops! Something went wrong');
                    // Display a generic error message with SweetAlert
                    Swal.fire('Error!', 'Oops! Something went wrong', 'error');
                }
            }
        });
    });

    //add new permission
    $('.addNewPermission').on('click', function (e) {
        e.preventDefault();
        // alert('ok');
        var name = $('#name').val();
        var group_name = $('#group_name').val();
        // Get the CSRF token from the meta tag
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        // alert(UpdateEmail);
        $.ajax({
            url: '{{route("admin.permission.store")}}',
            type: 'post',
            data: {
                'name' : name,
                'group_name' : group_name,
                '_token': csrfToken
                },
            dataType: 'json',
            success: function(response) {
                // Handle success response
                console.log(response.success);
                if(response.success){
                    $('#kt_modal_add_permission').modal('hide');
                    // $('.modal-backdrop').hide();
                    location.reload();
                    $('#name').val('');
                    $('#group_name').val('');
                }

                // Display success message to the user
                Swal.fire('Success!', response.success, 'success');

                // Optionally, you can access the updated user data if needed
                console.log(response.user);
            },
            error: function(xhr) {
                // Handle error response
                var errors = xhr.responseJSON.errors;

                if (errors && errors.email) {
                    // Display the validation error message with SweetAlert
                    Swal.fire('Error!', errors.email[0], 'error');
                } else {
                    // Display a generic error message
                    console.error('Oops! Something went wrong');
                    // Display a generic error message with SweetAlert
                    Swal.fire('Error!', 'Oops! Something went wrong', 'error');
                }
            }
        })


        });


    // delete permission
    $('.perm_delete').on('click', function (e) {
        e.preventDefault();

        var permission_id = $(this).data('id');

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        });

        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                // Make Ajax request to delete the permission
                $.ajax({
                    type: 'GET',
                    url: 'permission/delete/' + permission_id, // Update with your actual route
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (data) {
                        swalWithBootstrapButtons.fire({
                            title: 'Deleted!',
                            text: 'Your permission has been deleted.',
                            icon: 'success'
                        });

                        location.reload();
                    },
                    error: function (error) {
                        swalWithBootstrapButtons.fire({
                            title: 'Error',
                            text: 'An error occurred while deleting the permission.',
                            icon: 'error'
                        });
                    }
                });
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                swalWithBootstrapButtons.fire({
                    title: 'Cancelled',
                    text: 'Your imaginary file is safe :)',
                    icon: 'error'
                });
            }
        });
    });
});

</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script src="assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="assets/js/custom/apps/user-management/permissions/list.js"></script>
<script src="assets/js/custom/apps/user-management/permissions/add-permission.js"></script>
<script src="assets/js/custom/apps/user-management/permissions/update-permission.js"></script>
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="assets/js/custom/utilities/modals/create-app.js"></script>
<script src="assets/js/custom/utilities/modals/users-search.js"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->