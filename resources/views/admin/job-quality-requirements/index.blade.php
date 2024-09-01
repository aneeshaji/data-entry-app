<x-app-layout>
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <!-- <h4 class="py-3 mb-4"><span class="text-muted fw-light">Job Quality Requirements /</span> List</h4> -->
            <!-- Hoverable Table rows -->
            <div class="card">
                <div id="sticky-wrapper" class="sticky-wrapper" style="height: 85.675px;">
                    <div class="card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row"
                        style="">
                        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Job Quality Requirements /</span> List
                        </h4>
                        <div class="action-btns add-jqr-btn">
                            <!-- <button class="btn btn-label-primary me-3 waves-effect">
                                <span class="align-middle"> Back</span>
                            </button> -->
                            <a href="{{ url('/admin/job-quality-requirements/create') }}"
                                class="btn btn-primary waves-effect waves-light">Add JQR</a>
                        </div>
                    </div>
                </div>
                <!-- <h5 class="card-header">Hoverable rows</h5> -->
                <div class="card">
                    <!-- <h5 class="card-header">Advanced Search</h5> -->
                    <!--Search Form -->
                    <div class="card-body">
                        <form class="dt_adv_search">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row g-3">
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <label class="form-label">MTRS Required</label>
                                            <select id='mtrs_required' class="form-control" style="width: 200px">
                                                <option disabled selected>-Select-</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <label class="form-label">NDE Requirements Required</label>
                                            <select id='nde_requirements_required' class="form-control"
                                                style="width: 200px">
                                                <option disabled selected>-Select-</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <button id="reset" class="btn btn-secondary waves-effect waves-light btn-reset" tabindex="0"
                                                aria-controls="DataTables_Table_0" type="button" aria-haspopup="dialog"
                                                aria-expanded="false"><span><i class="ti ti-reload"></i>
                                                    </span></button>
                                            <!-- <button type="button" id="reset" class="btn rounded-pill btn-info waves-effect waves-light">Info</button> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 pt-10">
                                    <div class="row g-4">
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <label class="form-label">Weld Mapping</label>
                                            <select id='weld_mapping' class="form-control" style="width: 200px">
                                                <option disabled selected>-Select-</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <label class="form-label">Heat Mapping</label>
                                            <select id='heat_mapping' class="form-control"
                                                style="width: 200px">
                                                <option disabled selected>-Select-</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <label class="form-label">Hydro Chart Required</label>
                                            <select id='hydro_chart_required' class="form-control"
                                                style="width: 200px">
                                                <option disabled selected>-Select-</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- <hr class="mt-0"> -->
                </div>
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover data-table">
                        <thead>
                            <!-- <tr>
                                <div class="container">
                                    <div class="inline-div">
                                        <div class="form-group">
                                            <label><strong>MTRS Required</strong></label>
                                            <select id='mtrs_required' class="form-control" style="width: 200px">
                                                <option disabled selected>-Select-</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="inline-div">
                                        <div class="form-group">
                                            <label><strong>NDE Requirements Required</strong></label>
                                            <select id='nde_requirements_required' class="form-control"
                                                style="width: 200px">
                                                <option disabled selected>-Select-</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </tr> -->
                            <tr>
                                <th>Job Number</th>
                                <th>Job Name</th>
                                <th>Stages</th>
                                <th>Release Date</th>
                                <th>Due Date</th>
                                <th>MTRS Req</th>
                                <th>NDE Req</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                    </table>
                </div>

            </div>
        </div>
        <!-- / Content -->
        <hr class="container-m-nx mb-5" />
        <!-- Footer -->
        <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl">
                <div
                    class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                    <div>
                        ©
                        <script>
                        document.write(new Date().getFullYear());
                        </script>
                        All Rights Reserved
                        <!-- <a href="https://pixinvent.com" target="_blank"
                            class="footer-link text-primary fw-medium">codeFirstIT</a> -->
                    </div>
                    <!-- <div class="d-none d-lg-inline-block">
                        <a href="https://themeforest.net/licenses/standard" class="footer-link me-4"
                            target="_blank">License</a>
                        <a href="https://1.envato.market/pixinvent_portfolio" target="_blank"
                            class="footer-link me-4">More
                            Themes</a>

                        <a href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/" target="_blank"
                            class="footer-link me-4">Documentation</a>

                        <a href="https://pixinvent.ticksy.com/" target="_blank"
                            class="footer-link d-none d-sm-inline-block">Support</a>
                    </div> -->
                </div>
            </div>
        </footer>
        <!-- / Footer -->

        <div class="content-backdrop fade"></div>
    </div>
</x-app-layout>
<script>
$(function() {
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('admin.job-quality-requirements') }}",
            data: function(d) {
                d.mtrs_required = $('#mtrs_required').val(),
                d.nde_requirements_required = $('#nde_requirements_required').val(),
                d.weld_mapping = $('#weld_mapping').val(),
                d.heat_mapping = $('#heat_mapping').val(),
                d.hydro_chart_required = $('#hydro_chart_required').val(),
                d.search = $('input[type="search"]').val()
            }
        },
        columns: [{
                data: 'job_number',
                name: 'job_number'
            },
            {
                data: 'job_name',
                name: 'job_name'
            },
            {
                data: 'stages',
                name: 'stages'
            },
            {
                data: 'release_date',
                name: 'release_date'
            },
            {
                data: 'due_date',
                name: 'due_date'
            },
            {
                data: 'mtrs_required',
                name: 'mtrs_required'
            },
            {
                data: 'nde_requirements_required',
                name: 'nde_requirements_required'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            }
        ]
    });

    $('#mtrs_required').change(function() {
        table.draw();
    });

    $('#nde_requirements_required').change(function() {
        table.draw();
    });

    $('#weld_mapping').change(function() {
        table.draw();
    });

    $('#heat_mapping').change(function() {
        table.draw();
    });

    $('#hydro_chart_required').change(function() {
        table.draw();
    });

    $('#reset').click(function() {
        $('#mtrs_required').val('');
        $('#nde_requirements_required').val('');
        $('#weld_mapping').val('');
        $('#heat_mapping').val('');
        $('#hydro_chart_required').val('');
        $('input[type="search"]').val('').trigger('keyup');
        table.ajax.reload();
    });
});
</script>