<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-1 flex-column justify-content-center my-0">In-Progress Orders</h1>
                <!--end::Title-->

            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Primary button-->
                <a href="create-order.php" class="btn btn-sm fw-bold btn-primary">Back</a>
                <!--end::Primary button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid mb-5">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Card-->
            <div class="card mb-5">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center pt-6 px-6 flex-wrap me-3">
                    <!--begin::Title-->
                    <!--end::Title-->

                </div>
                <!--end::Page title-->
                <div class="mb-3 d-flex justify-content-center">
                    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-1 flex-column justify-content-center my-0">In-Progress Orders</h1>
                </div>
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
                            <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search Order" />
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
                                        <label class="form-label fs-6 fw-semibold">Order Id:</label>
                                        <input type="text" placeholder="Order Id" name="order-id" autocomplete="off" class="form-control bg-transparent" />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-3">
                                        <label class="form-label fs-6 fw-semibold">Topic:</label>
                                        <input type="text" placeholder="Topic" name="topic" autocomplete="off" class="form-control bg-transparent" />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-3">
                                        <label class="form-label fs-6 fw-semibold">Status:</label>
                                        <input type="text" placeholder="Status" name="status" autocomplete="off" class="form-control bg-transparent" />
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
                                        <h2 class="fw-bold">Export Users</h2>
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
                                        <form id="kt_modal_export_users_form" class="form" action="#">
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
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_new_orders">
                        <thead>
                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2 pb-8">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_new_orders .form-check-input" value="1" />
                                    </div>
                                </th>
                                <th class="min-w-70px fw_800 pb-8">order No</th>
                                <th class="min-w-50px fw_800 pb-8">Topic</th>
                                <th class="min-w-70px fw_800 pb-8">Pages</th>
                                <th class="min-w-70px fw_800 pb-8">Order Date</th>
                                <th class="min-w-80px fw_800 pb-8">Due Date</th>
                                <th class="min-w-80px fw_800 pb-8">Status</th>
                                <th class="min-w-50px fw_800 pb-8">Action</th>

                            </tr>

                        </thead>
                        <tbody class="text-gray-600 fw-semibold">

                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td><a href="order-details.php">0319832</a></td>
                                <td class="limit-text">The Brave Kings Man Story 1994</td>

                                <td>2</td>
                                <td>12/24/2023 12:45Pm</td>
                                <td>12/31/2023 12:45Pm</td>
                                <td><span class="badge badge-light-danger fw-bold me-auto px-4 py-3">Disabled</span></td>
                                <td><a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="order-details.php" class="menu-link d-flex justify-content-center px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link d-flex justify-content-center px-3" onclick="confirmDelete()">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="/images/myw3schoolsimage.jpg" class="menu-link d-flex justify-content-center px-3" download>Download</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td><a href="order-details.php">0319832</a></td>
                                <td class="limit-text">The Brave Kings Man Story 1994</td>

                                <td>2</td>
                                <td>12/24/2023 12:45Pm</td>
                                <td>12/31/2023 12:45Pm</td>
                                <td><span class="badge badge-light-success fw-bold me-auto px-4 py-3">Enabled</span></td>
                                <td><a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="order-details.php" class="menu-link d-flex justify-content-center px-3">View</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link d-flex justify-content-center px-3" onclick="confirmEnableDelete()">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="/images/myw3schoolsimage.jpg" class="menu-link d-flex justify-content-center px-3" download>Download</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                </td>
                            </tr>

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
        $('#kt_table_new_orders tbody tr').each(function() {
            // Check if any cell contains the search text
            console.log(this)
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
    // Function to handle table search
    function handleTableEnableSearch() {
        // Get the search input value
        var searchText = $('[data-kt-user-table-filter_2="search1"]').val().toLowerCase();
        console.log(searchText);

        // Loop through each table row
        $('#kt_table_rev_req tbody tr').each(function() {
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

    // Attach the search handler to the input change event for the second table
    $('[data-kt-user-table-filter_2="search1"]').on('input', function() {
        handleTableEnableSearch();
    });
</script>
<script>
    $(document).ready(function() {
        // Initialize DataTables
        var table = $('#kt_table_new_orders').DataTable();

        // Filter form submission
        $('[data-kt-user-table-filter="filter"]').on('click', function(e) {
            e.preventDefault();

            // Get filter values
            var orderId = $('input[name="order-id"]').val();
            var topic = $('input[name="topic"]').val();
            var status = $('input[name="status"]').val();

            // Apply filters
            table.columns(1).search(orderId).draw();
            table.columns(2).search(topic).draw();
            table.columns(6).search(status).draw();
        });

        // Reset filter form
        $('[data-kt-user-table-filter="reset"]').on('click', function(e) {
            e.preventDefault();

            // Reset input fields
            $('input[name="order-id"]').val('');
            $('input[name="topic"]').val('');
            $('input[name="status"]').val('');

            // Clear filters
            table.columns().search('').draw();
        });
    });
</script>
<script>
    $(document).ready(function() {
        // Initialize DataTables
        var table = $('#kt_table_rev_req').DataTable();

        // Filter form submission
        $('[data-kt-user-table-filter_2="filter2"]').on('click', function(e) {
            e.preventDefault();

            // Get filter values
            var orderId = $('input[name="order-id2"]').val();
            var topic = $('input[name="topic2"]').val();
            var status = $('input[name="status2"]').val();

            // Apply filters
            table.columns(1).search(orderId).draw();
            table.columns(2).search(topic).draw();
            table.columns(6).search(status).draw();
        });

        // Reset filter form
        $('[data-kt-user-table-filter_2="reset_2"]').on('click', function(e) {
            e.preventDefault();

            // Reset input fields
            $('input[name="order-id2"]').val('');
            $('input[name="topic2"]').val('');
            $('input[name="status2"]').val('');

            // Clear filters
            table.columns().search('').draw();
        });
    });
</script>
<script>
    function confirmEnableDelete() {
        Swal.fire({
            title: 'First You Have To Disable Row!',
            icon: 'warning',
            customClass: {
                confirmButton: 'btn btn-danger', // Example: Change confirm button color
                title: 'text-danger' // Custom class for the title text color
            }
        });
    }
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
        $('#kt_table_rev_req').DataTable();
    });
</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<!--end::Javascript-->