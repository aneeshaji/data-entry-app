<x-app-layout>
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Job Quality Requirements / </span> 
                {{ isset($jqr->id) ? "Edit - " . $jqr->job_number . "" : "Add" }}
            </h4>
            <!-- <p class="mb-4">
                Icons used on this page are made by
                <a href="https://www.flaticon.com/authors/itim2101" title="itim2101" target="_blank">itim2101</a> from
                <a href="https://www.flaticon.com/" title="Flaticon" target="_blank">www.flaticon.com</a>
            </p> -->
            <div class="row">
                <!-- Vertical Icons Wizard -->
                <div class="col-12 mb-4">
                    <!-- <small class="text-light fw-semibold">Vertical Icons</small> -->
                    <div class="bs-stepper vertical wizard-vertical-icons-example mt-2">
                        <div class="bs-stepper-header">
                            <div class="step" data-target="#basic_details">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle">
                                        <i class="ti ti-file-description"></i>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Basic Project Details</span>
                                        <span class="bs-stepper-subtitle">{{ isset($jqr->id) ? 'Edit' : 'Add' }} Basic project details</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#special_material">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle">
                                        <i class="ti ti-brand-matrix"></i>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Special Material<br> Requirements</span>
                                        <span class="bs-stepper-subtitle">{{ isset($jqr->id) ? 'Edit' : 'Add' }} Special material <br> requirements</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#personal-info-vertical">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle">
                                        <i class="ti ti-user"></i>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">General Information</span>
                                        <span class="bs-stepper-subtitle">{{ isset($jqr->id) ? 'Edit' : 'Add' }} general information</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#social-links-vertical">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="ti ti-server-cog"></i> </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Service Information</span>
                                        <span class="bs-stepper-subtitle">{{ isset($jqr->id) ? 'Edit' : 'Add' }} service information</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <!-- <div class="step" data-target="#social-links-vertical1">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="ti ti-adjustments-horizontal"></i> </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Structural Skid</span>
                                        <span class="bs-stepper-subtitle">{{ isset($jqr->id) ? 'Edit' : 'Add' }} structural skid</span>
                                    </span>
                                </button>
                            </div> -->
                            <div class="line"></div>
                            <div class="step" data-target="#pressure_vessels">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="ti ti-atom-2"></i> </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Pressure Vessels</span>
                                        <span class="bs-stepper-subtitle">{{ isset($jqr->id) ? 'Edit' : 'Add' }} pressure vessels</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#non_code_vessels">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="ti ti-alert-square"></i> </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Non Code Vessels/<br>Tanks</span>
                                        <span class="bs-stepper-subtitle">{{ isset($jqr->id) ? 'Edit' : 'Add' }} non code vessels/<br>Tanks</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#process_fuel_gas_piping">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="ti ti-chart-treemap"></i> </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Process/Fuel/Gas/ <br> Start Gas Piping</span>
                                        <span class="bs-stepper-subtitle">{{ isset($jqr->id) ? 'Edit' : 'Add' }} process/fuel/gas/ <br> start gas
                                            piping</span>
                                    </span>
                                </button>
                            </div>
                            <!-- <div class="line"></div>
                            <div class="step" data-target="#bolting">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="ti ti-bong"></i> </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Bolting</span>
                                        <span class="bs-stepper-subtitle">{{ isset($jqr->id) ? 'Edit' : 'Add' }} bolting</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line"></div> -->
                            <!-- <div class="step" data-target="#gaskets">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="ti ti-cylinder"></i> </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Gaskets</span>
                                        <span class="bs-stepper-subtitle">{{ isset($jqr->id) ? 'Edit' : 'Add' }} gaskets</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#tubing">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="ti ti-temperature"></i> </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Tubing</span>
                                        <span class="bs-stepper-subtitle">{{ isset($jqr->id) ? 'Edit' : 'Add' }} tubing</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line"></div> -->
                            <div class="step" data-target="#butt_welded">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="ti ti-shield"></i> </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Butt Welded/ <br>Socket Welded/ <br> Utility
                                            Piping</span>
                                        <span class="bs-stepper-subtitle">{{ isset($jqr->id) ? 'Edit' : 'Add' }} butt welded/<br>socket welded/ <br>
                                            utility piping</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <!-- <div class="step" data-target="#threaded_piping">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="ti ti-needle-thread"></i> </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Threaded Piping</span>
                                        <span class="bs-stepper-subtitle">{{ isset($jqr->id) ? 'Edit' : 'Add' }} threaded piping</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#electrical">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="ti ti-circuit-battery"></i> </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Electrical/Instrumentation</span>
                                        <span class="bs-stepper-subtitle">{{ isset($jqr->id) ? 'Edit' : 'Add' }} electrical/instrumentation</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#preservation">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="ti ti-deselect"></i> </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Preservation</span>
                                        <span class="bs-stepper-subtitle">{{ isset($jqr->id) ? 'Edit' : 'Add' }} preservation</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line"></div> -->
                            <div class="step" data-target="#package_testing">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="ti ti-package"></i> </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Package Testing</span>
                                        <span class="bs-stepper-subtitle">{{ isset($jqr->id) ? 'Edit' : 'Add' }} package testing</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="bs-stepper-content">
                            <!-- <form onSubmit="return false"> -->
                            <!-- Basic Project Details -->
                            <div id="basic_details" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Basic Project Details</h6>
                                    <small>{{ isset($jqr->id) ? 'Update' : 'Enter' }} basic project details</small>
                                </div>
                                <form onSubmit="return false" id="basic_details_from" enctype="multipart/form-data">
								<!-- <form id="basic_details_from" method="POST" enctype="multipart/form-data"> -->
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="first-name1">Job ID/Number<span class="text-danger">*</span></label>
                                            <input type="text" id="job_number" class="form-control" placeholder=""
                                                name="job_number" value="{{ isset($jqr->job_number) ? $jqr->job_number : '' }}" required />
                                            <div class="alert alert-danger alert-dismissible" id="jobnumberValidation" role="alert"> 
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="email1">Job Name</label>
                                            <input type="text" name="job_name" id="job_name" class="form-control"
                                                placeholder="" aria-label=""
                                                value="{{ isset($jqr->job_name) ? $jqr->job_name : '' }}" />
                                        </div>
                                        <!-- <div class="col-sm-6">
                                            <label class="form-label" for="email1">Stages</label>
                                            <input type="text" id="email1" class="form-control" name="stages"
                                                placeholder="" aria-label=""
                                                value="{{ isset($jqr->stages) ? $jqr->stages : '' }}" />
                                        </div> -->
                                        <div class="col-sm-6">
                                            <label class="form-label" for="email1">Release Date</label>
                                            <input type="date" id="email1" class="form-control" name="release_date"
                                                placeholder="" aria-label=""
                                                value="{{ isset($jqr->release_date) ? $jqr->release_date : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="due_date">Due Date As Per PO</label>
                                            <input type="date" id="email1" name="due_date" class="form-control"
                                                placeholder="" aria-label=""
                                                value="{{ isset($jqr->due_date) ? $jqr->due_date : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="customer_order_purchase_date">Date Purchase Order Received From Customer</label>
                                            <input type="date" id="customer_order_purchase_date" name="customer_order_purchase_date" class="form-control"
                                                placeholder="" aria-label=""
                                                value="{{ isset($jqr->customer_order_purchase_date) ? $jqr->customer_order_purchase_date : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="fab_start_date">FAB Start Date</label>
                                            <input type="date" id="fab_start_date" name="fab_start_date" class="form-control"
                                                placeholder="" aria-label=""
                                                value="{{ isset($jqr->fab_start_date) ? $jqr->fab_start_date : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="scheduled_test_date">Scheduled Test Date<span class="text-danger">*</span></label>
                                            <input type="date" id="scheduled_test_date" name="scheduled_test_date" class="form-control"
                                                placeholder="" aria-label=""
                                                value="{{ isset($jqr->scheduled_test_date) ? $jqr->scheduled_test_date : '' }}" required />
											<div class="alert alert-danger alert-dismissible" id="scheduledTestDateValidation" role="alert"> 
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
										</div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="email1">Document Deliverables Due Date</label>
                                            <input type="date" id="document_deliverables_due_date" name="document_deliverables_due_date" class="form-control"
                                                placeholder="" aria-label=""
                                                value="{{ isset($jqr->document_deliverables_due_date) ? $jqr->document_deliverables_due_date : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="job_revision_number">Job Revision Number<span class="text-danger">*</span></label>
                                            <input type="text" id="job_revision_number" class="form-control" name="job_revision_number"
                                                placeholder="" aria-label=""
                                                value="{{ isset($jqr->job_revision_number) ? $jqr->job_revision_number : '' }}" />
                                            <div class="alert alert-danger alert-dismissible" id="jobRevisionNumberValidation" role="alert"> 
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="jqr_revision_date">JQR Revision Date</label>
                                            <input type="date" id="jqr_revision_date" name="jqr_revision_date" class="form-control"
                                                placeholder="" aria-label=""
                                                value="{{ isset($jqr->jqr_revision_date) ? $jqr->jqr_revision_date : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="production_number">Production Number</label>
                                            <input type="text" id="production_number" class="form-control" name="production_number"
                                                placeholder="" aria-label=""
                                                value="{{ isset($jqr->production_number) ? $jqr->production_number : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="no_of_modules">No of Modules<span class="text-danger">*</span></label>
                                            <input type="text" id="no_of_modules" class="form-control" name="no_of_modules"
                                                placeholder="" aria-label=""
                                                value="{{ isset($jqr->no_of_modules) ? $jqr->no_of_modules : '' }}" required />
                                            <div class="alert alert-danger alert-dismissible" id="noOfModulesValidation" role="alert"> 
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="form_number">Form Number</label>
                                            <input type="text" id="form_number" class="form-control" name="form_number"
                                                placeholder="" aria-label=""
                                                value="{{ isset($jqr->form_number) ? $jqr->form_number : '' }}" required />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="company_logo">Company Logo</label>
                                            <input type="file" id="company_logo" class="form-control" name="company_logo"/>
                                            <div class="alert alert-danger alert-dismissible" id="companyLogoValidation" role="alert"> 
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        </div>
                                        <!-- Statuses -->
                                        <div class="col-sm-12">
                                            <label class="form-label" for="no_of_modules">Status of Document Deliverables</label>
                                            <div class="card">
                                                <div class="table-responsive text-nowrap">
                                                    <table class="table table-hover data-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Report</th>
                                                                <th>Status</th>
                                                                <th>Legend</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th>MTR'S</th>
                                                                <td>
                                                                    <select class="doc-status" name="status_of_docs_deliverables_mtrs" data-style="btn-default">
                                                                        <option selected value="0">-Select-</option>
                                                                        @foreach($documentDeliverablesStatuses as $status)
                                                                            <option value="{{ $status->id }}" {{ isset($jqr->status_of_docs_deliverables_mtrs) && $status->id == $jqr->status_of_docs_deliverables_mtrs ? 'selected' : '' }}>{{ $status->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-secondary">None</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>NDE</th>
                                                                <td>
                                                                    <select class="doc-status" name="status_of_docs_deliverables_nde" data-style="btn-default">
                                                                        <option selected value="0">-Select-</option>
                                                                        @foreach($documentDeliverablesStatuses as $status)
                                                                            <option value="{{ $status->id }}" {{ isset($jqr->status_of_docs_deliverables_nde) && $status->id == $jqr->status_of_docs_deliverables_nde ? 'selected' : '' }}>{{ $status->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-secondary">None</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Hydro</th>
                                                                <td>
                                                                    <select class="doc-status" name="status_of_docs_deliverables_hydro" data-style="btn-default">
                                                                        <option selected value="0">-Select-</option>
                                                                        @foreach($documentDeliverablesStatuses as $status)
                                                                            <option value="{{ $status->id }}" {{ isset($jqr->status_of_docs_deliverables_hydro) && $status->id == $jqr->status_of_docs_deliverables_hydro ? 'selected' : '' }}>{{ $status->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-secondary">None</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Heat Map</th>
                                                                <td>
                                                                    <select class="doc-status" name="status_of_docs_deliverables_heat_map" data-style="btn-default">
                                                                        <option selected value="0">-Select-</option>
                                                                        @foreach($documentDeliverablesStatuses as $status)
                                                                            <option value="{{ $status->id }}" {{ isset($jqr->status_of_docs_deliverables_heat_map) && $status->id == $jqr->status_of_docs_deliverables_heat_map ? 'selected' : '' }}>{{ $status->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-secondary">None</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Weld Map</th>
                                                                <td>
                                                                    <select class="doc-status" name="status_of_docs_deliverables_weld_map" data-style="btn-default">
                                                                        <option selected value="0">-Select-</option>
                                                                        @foreach($documentDeliverablesStatuses as $status)
                                                                            <option value="{{ $status->id }}" {{ isset($jqr->status_of_docs_deliverables_weld_map) && $status->id == $jqr->status_of_docs_deliverables_weld_map ? 'selected' : '' }}>{{ $status->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-secondary">None</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Statuses Ends -->
                                        <!-- Action Buttons -->
                                        <div class="pt-4">
                                            <div class="row justify-content-end">
                                                <div class="col-sm-9">
                                                    <button class="btn btn-label-secondary btn-prev me-sm-3 me-1"
                                                        disabled>
                                                        <i class="ti ti-arrow-left me-sm-1"></i>
                                                        <span
                                                            class="align-middle d-sm-inline-block d-none">Previous</span>
                                                    </button>
                                                    <button type="button" onclick="submitData(true)"
                                                        class="btn btn-success waves-effect waves-light me-sm-3 me-1"><i
                                                            class="ti ti-check"></i>Save</button>
                                                    <button class="btn btn-primary btn-next"
                                                        onclick="submitData(false)">
                                                        <span
                                                            class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                                        <i class="ti ti-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Action Buttons Ends -->
                                    </div>
                                    <input type="hidden" class="form_id_bd" name="id" value="{{ isset($jqr->id) ? $jqr->id : '' }}">
                                </form>
                            </div>
                            <!-- Basic Project Details Ends -->
                            <!-- Special Material Requirements -->
                            <div id="special_material" class="content">
                                <!-- <div class="content-header mb-3">
                                    <h6 class="mb-0">Special Material Requirements</h6>
                                    <small>Enter special material requirements</small>
                                </div> -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="content-header mb-3">
                                            <h6 class="mb-0">Special Material Requirements</h6>
                                            <small>{{ isset($jqr->id) ? 'Update' : 'Enter' }} special material requirements</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 content-right">
                                        <div class="content-header mb-3">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#basicDetailsModal" class="btn btn-primary waves-effect waves-light">
                                            Basic Details
                                        </button>
                                        </div>
                                    </div>
                                </div>
                                <form onSubmit="return false" id="special_material_from">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="pipes_and_fittings"
                                                {{ isset($jqr_special->pipes_and_fittings) && $jqr_special->pipes_and_fittings == '1' ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Pipes & Fittings(400.01)</span>
                                            </label>
                                        </div>
                                        <!-- <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="bolting"
                                                {{ isset($jqr_special->bolting) && $jqr_special->bolting == '1'  ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Bolting(400.01)</span>
                                            </label>
                                        </div> -->
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="pressure_vessels"
                                                    {{ isset($jqr_special->pressure_vessels) && $jqr_special->pressure_vessels == '1' ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Pressure Vessels(400.11)</span>
                                            </label>
                                        </div>
                                        <!-- <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="gaskets"
                                                    {{ isset($jqr_special->gaskets) && $jqr_special->gaskets == '1' ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Gaskets(400.01)</span>
                                            </label>
                                        </div> -->
                                        <!-- <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="structural_steel"
                                                    {{ isset($jqr_special->structural_steel) && $jqr_special->structural_steel == '1' ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Structural Steel(410.01)</span>
                                            </label>
                                        </div> -->
                                        <!-- <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="tubing"
                                                    {{ isset($jqr_special->tubing) && $jqr_special->tubing == '1' ? 'checked' : '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Tubing(420.01)</span>
                                            </label>
                                        </div> -->
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="q_stock_material" {{ isset($jqr_special->q_stock_material) && $jqr_special->q_stock_material == '1' ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Any Q Stock Material</span>
                                            </label>
                                        </div>
                                        <!-- Action Buttons -->
                                        <div class="pt-4">
                                            <div class="row justify-content-end">
                                                <div class="col-sm-9">
                                                    <button class="btn btn-label-secondary btn-prev me-sm-3 me-1">
                                                        <i class="ti ti-arrow-left me-sm-1"></i>
                                                        <span
                                                            class="align-middle d-sm-inline-block d-none">Previous</span>
                                                    </button>
                                                    <button type="button" onclick="submitSpecialData(true)"
                                                        class="btn btn-success waves-effect waves-light me-sm-3 me-1"><i
                                                            class="ti ti-check"></i>Save</button>
                                                    <button class="btn btn-primary btn-next"
                                                        onclick="submitSpecialData(false)">
                                                        <span
                                                            class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                                        <i class="ti ti-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Action Buttons Ends -->
                                        <input type="hidden" class="special_id" name="id" value="{{ isset($jqr_special->id) ? $jqr_special->id : '' }}">
                                        <input type="hidden" class="form_id_bd" name="basic_details_id" value="{{ isset($jqr->id) ? $jqr->id : '' }}">
                                    </div>
                                </form>
                            </div>
                            <!-- Special Material Requirements Ends -->
                            <!-- General Information -->
                            <div id="personal-info-vertical" class="content">
                                <!-- <div class="content-header mb-3">
                                    <h6 class="mb-0">General Information</h6>
                                    <small>Enter general information</small>
                                </div> -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="content-header mb-3">
                                            <h6 class="mb-0">General Information</h6>
                                            <small>{{ isset($jqr->id) ? 'Update' : 'Enter' }} general information</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 content-right">
                                        <div class="content-header mb-3">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#basicDetailsModal" class="btn btn-primary waves-effect waves-light">
                                            Basic Details
                                        </button>
                                        </div>
                                    </div>
                                </div>
                                <form onSubmit="return false" id="general_info_from">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="last-name1">Customer</label>
                                            <input type="text" id="last-name1" class="form-control" placeholder=""
                                                name="customer"
                                                value="{{ isset($jqr_general_info->customer) ? $jqr_general_info->customer : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="country1">Location</label>
                                            <input type="text" id="last-name1" class="form-control" placeholder=""
                                                name="location"
                                                value="{{ isset($jqr_general_info->location) ? $jqr_general_info->location : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="last-name1">End User</label>
                                            <input type="text" id="last-name1" class="form-control" placeholder=""
                                                name="end_user"
                                                value="{{ isset($jqr_general_info->end_user) ? $jqr_general_info->end_user : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="last-name1">Engineer</label>
                                            <input type="text" id="last-name1" class="form-control" placeholder=""
                                                name="engineer"
                                                value="{{ isset($jqr_general_info->engineer) ? $jqr_general_info->engineer : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="last-name1">Designer</label>
                                            <input type="text" id="last-name1" class="form-control" placeholder=""
                                                name="designer"
                                                value="{{ isset($jqr_general_info->designer) ? $jqr_general_info->designer : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="last-name1">SalesMan</label>
                                            <input type="text" id="last-name1" class="form-control" placeholder=""
                                                name="sales_man"
                                                value="{{ isset($jqr_general_info->sales_man) ? $jqr_general_info->sales_man : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="last-name1">Job Type/Description</label>
                                            <input type="text" id="last-name1" class="form-control" placeholder=""
                                                name="job_type"
                                                value="{{ isset($jqr_general_info->job_type) ? $jqr_general_info->job_type : '' }}" />
                                        </div>
                                        <!-- <div class="col-sm-6">
                                            <label class="form-label" for="last-name1">JQR Revision Number</label>
                                            <input type="text" id="last-name1" class="form-control" placeholder=""
                                                name="job_revision_number"
                                                value="{{ isset($jqr_general_info->job_revision_number) ? $jqr_general_info->job_revision_number : '' }}" />
                                        </div> -->
                                        <!-- <div class="col-sm-6">
                                            <label class="form-label" for="last-name1">Date Revised</label>
                                            <input type="date" id="last-name1" class="form-control" placeholder=""
                                                name="date_revised"
                                                value="{{ isset($jqr_general_info->date_revised) ? $jqr_general_info->date_revised : '' }}" />
                                        </div> -->
                                        <div class="col-sm-6">
                                            <label class="form-label" for="last-name1">Date Approved By Engineer</label>
                                            <input type="date" id="last-name1" name="date_approved" class="form-control"
                                                placeholder=""
                                                value="{{ isset($jqr_general_info->date_approved) ? $jqr_general_info->date_approved : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="req_fab_completetion_date">Required Fab Completion Date</label>
                                            <input type="date" id="req_fab_completetion_date" name="req_fab_completetion_date" class="form-control"
                                                placeholder=""
                                                value="{{ isset($jqr_general_info->req_fab_completetion_date) ? $jqr_general_info->req_fab_completetion_date : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="spoling_required" {{ isset($jqr_general_info->spoling_required) && $jqr_general_info->spoling_required == '1' ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Spooling Required</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="vessels_required" {{ isset($jqr_general_info->vessels_required) && $jqr_general_info->vessels_required == '1' ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Vessels Required</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="vessels_outsourced" {{ isset($jqr_general_info->vessels_outsourced) && $jqr_general_info->vessels_outsourced == '1' ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Vessels Outsourced</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="last-name1">Notes</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                                name="notes">{{ isset($jqr_general_info->notes) ? $jqr_general_info->notes : '' }}</textarea>
                                        </div>
                                        <!-- Action Buttons -->
                                        <div class="pt-4">
                                            <div class="row justify-content-end">
                                                <div class="col-sm-9">
                                                    <button class="btn btn-label-secondary btn-prev me-sm-3 me-1">
                                                        <i class="ti ti-arrow-left me-sm-1"></i>
                                                        <span
                                                            class="align-middle d-sm-inline-block d-none">Previous</span>
                                                    </button>
                                                    <button type="button" onclick="submitGeneralInfoData(true)"
                                                        class="btn btn-success waves-effect waves-light me-sm-3 me-1"><i
                                                            class="ti ti-check"></i>Save</button>
                                                    <button class="btn btn-primary btn-next"
                                                        onclick="submitGeneralInfoData(false)">
                                                        <span
                                                            class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                                        <i class="ti ti-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Action Buttons Ends -->
                                        <input type="hidden" class="form_general_bd" name="id" value="{{ isset($jqr_general_info->id) ? $jqr_general_info->id : '' }}">
                                        <input type="hidden" class="form_id_bd" name="basic_details_id" value="{{ isset($jqr->id) ? $jqr->id : '' }}">
                                    </div>
                                </form>
                            </div>
                            <!-- General Information Ends -->
                            <!-- Service Information -->
                            <div id="social-links-vertical" class="content">
                                <!-- <div class="content-header mb-3">
                                    <h6 class="mb-0">Service Information</h6>
                                    <small>{{ isset($jqr->id) ? 'Update' : 'Enter' }} service information.</small>
                                </div> -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="content-header mb-3">
                                            <h6 class="mb-0">Service Information</h6>
                                            <small>{{ isset($jqr->id) ? 'Update' : 'Enter' }} service information.</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 content-right">
                                        <div class="content-header mb-3">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#basicDetailsModal" class="btn btn-primary waves-effect waves-light">
                                            Basic Details
                                        </button>
                                        </div>
                                    </div>
                                </div>
                                <form onSubmit="return false" id="service_info_from">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="twitter1">Gas Processed</label>
                                            <input type="text" id="twitter1" name="gas_processed" class="form-control" placeholder=""
                                            value="{{ isset($jqr_service_info->gas_processed) ? $jqr_service_info->gas_processed : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="facebook1">Application</label>
                                            <input type="text" id="facebook1" name="application" class="form-control" placeholder=""
                                            value="{{ isset($jqr_service_info->application) ?$jqr_service_info->application : '' }}"/>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="sour_service_required" {{ isset($jqr_service_info->sour_service_required) && $jqr_service_info->sour_service_required == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">SOUR Service - NACE MR0175 Required</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="facebook1">Other</label>
                                            <input type="text" id="facebook1" class="form-control" name="other" placeholder=""
                                            value="{{ isset($jqr_service_info->other) ? $jqr_service_info->other : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="facebook1">Notes</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                rows="3" name="notes">{{ isset($jqr_service_info->notes) ? $jqr_service_info->notes : '' }}</textarea>
                                        </div>
                                        <!-- Action Buttons -->
                                        <div class="pt-4">
                                            <div class="row justify-content-end">
                                                <div class="col-sm-9">
                                                    <button class="btn btn-label-secondary btn-prev me-sm-3 me-1">
                                                        <i class="ti ti-arrow-left me-sm-1"></i>
                                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                    </button>
                                                    <button type="button" onclick="submitServiceInfoData(true)"
                                                        class="btn btn-success waves-effect waves-light me-sm-3 me-1"><i
                                                            class="ti ti-check"></i>Save</button>
                                                    <button class="btn btn-primary btn-next" onclick="submitServiceInfoData(false)">
                                                        <span
                                                            class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                                        <i class="ti ti-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Action Buttons Ends -->
                                        <input type="hidden" class="form_general_info" name="id" value="{{ isset($jqr_service_info->id) ? $jqr_service_info->id : '' }}">
                                        <input type="hidden" class="form_id_bd" name="basic_details_id" value="{{ isset($jqr->id) ? $jqr->id : '' }}">
                                    </div>
                                </form>
                            </div>
                            <!-- Service Information Ends -->
                            <!-- Structural Skid -->
                            <div id="social-links-vertical1" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Structural Skid</h6>
                                    <small>{{ isset($jqr->id) ? 'Update' : 'Enter' }} structural skid</small>
                                </div>
                                <form onSubmit="return false" id="structural_skid_from">

                                    <div class="row g-3">
                                        <small class="text-light fw-semibold">
                                            * Indicates Special Material Origin Requirements Must Be Checked 'Yes'
                                        </small>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="customer_avl_applies" {{ isset($jqr_structural_skid->customer_avl_applies) && $jqr_structural_skid->customer_avl_applies == '1' ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">*Customer/Client AVL Applies</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="twitter1">Material Origin REQS</label>
                                            <input type="text" id="twitter1" name="material_origin_reqs" class="form-control" placeholder="" value="{{ isset($jqr_structural_skid->material_origin_reqs) ? $jqr_structural_skid->material_origin_reqs : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="origin_traceable_to_melt"  {{ isset($jqr_structural_skid->origin_traceable_to_melt) && $jqr_structural_skid->origin_traceable_to_melt == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">*Origin Traceable To Melt(BILLET)</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="facebook1">Acceptable Material
                                                Origins</label>
                                            <input type="text" name="acceptable_material_origins" id="facebook1" class="form-control" placeholder="" value="{{ isset($jqr_structural_skid->acceptable_material_origins) ? $jqr_structural_skid->acceptable_material_origins : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" name="standard_per_code" class="switch-input" {{ isset($jqr_structural_skid->standard_per_code) && $jqr_structural_skid->standard_per_code == '1' ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Standard Per Code(NO MTRS)</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" name="mtrs_required" class="switch-input" {{ isset($jqr_structural_skid->mtrs_required) && $jqr_structural_skid->mtrs_required == '1' ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">MTRS Required</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" name="heat_mapping" class="switch-input" {{ isset($jqr_structural_skid->heat_mapping) && $jqr_structural_skid->heat_mapping == '1' ? 'checked': '' }}  >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Heat Mapping</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" name="weld_mapping" class="switch-input" {{ isset($jqr_structural_skid->weld_mapping) && $jqr_structural_skid->weld_mapping == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Weld Mapping</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="google1">Material Notes</label>
                                            <textarea class="form-control" name="material_notes" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_structural_skid->material_notes) ? $jqr_structural_skid->material_notes : '' }}</textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">NDE Requirements</label>
                                            <textarea class="form-control" name="nde_requirements" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_structural_skid->nde_requirements) ? $jqr_structural_skid->nde_requirements : '' }}</textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Welding Requirements</label>
                                            <textarea class="form-control" name="weld_requirements" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_structural_skid->weld_requirements) ? $jqr_structural_skid->weld_requirements : '' }}</textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Governing Code</label>
                                            <input type="text" id="linkedin1" name="governing_code" class="form-control" placeholder="" value="{{ isset($jqr_structural_skid->governing_code) ? $jqr_structural_skid->governing_code : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <small class="text-light fw-semibold d-block">PWHT</small>
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="pwht"
                                                    id="inlineRadio1" value="1" {{ isset($jqr_structural_skid->pwht) && $jqr_structural_skid->pwht == '1'  ? 'checked': '' }}>
                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pwht"
                                                    id="inlineRadio2" value="0"  {{ isset($jqr_structural_skid->pwht) && $jqr_structural_skid->pwht == '0'  ? 'checked': '' }} >
                                                <label class="form-check-label" for="inlineRadio2">No - EFX
                                                    Standard</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Notes</label>
                                            <textarea class="form-control" name="notes" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_structural_skid->notes) ? $jqr_structural_skid->notes : '' }}</textarea>
                                        </div>
                                        <div class="col-sm-6">
                                        </div>
                                        <!-- Action Buttons -->
                                        <div class="pt-4">
                                            <div class="row justify-content-end">
                                                <div class="col-sm-9">
                                                    <button class="btn btn-label-secondary btn-prev me-sm-3 me-1" >
                                                        <i class="ti ti-arrow-left me-sm-1"></i>
                                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                    </button>
                                                    <button type="button" onclick="submitStructuralSkidData(true)"
                                                        class="btn btn-success waves-effect waves-light me-sm-3 me-1"><i
                                                            class="ti ti-check"></i>Save</button>
                                                    <button class="btn btn-primary btn-next" onclick="submitStructuralSkidData(false)"  >
                                                        <span
                                                            class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                                        <i class="ti ti-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Action Buttons Ends -->
                                    </div>
                                    <input type="hidden" class="form_Structural_info" name="id" value="{{ isset($jqr_structural_skid->id) ? $jqr_structural_skid->id : '' }}">
                                    <input type="hidden" class="form_id_bd" name="basic_details_id" value="{{ isset($jqr->id) ? $jqr->id : '' }}">
                                </form>
                            </div>
                            <!-- Structural Skid Ends -->
                            <!-- Pressure Vessels -->
                            <div id="pressure_vessels" class="content">
                                <!-- <div class="content-header mb-3">
                                    <h6 class="mb-0">Pressure Vessels</h6>
                                    <small>Enter Pressure Vessels.</small>
                                </div> -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="content-header mb-3">
                                            <h6 class="mb-0">Pressure Vessels</h6>
                                            <small>{{ isset($jqr->id) ? 'Update' : 'Enter' }} pressure vessels</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 content-right">
                                        <div class="content-header mb-3">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#basicDetailsModal" class="btn btn-primary waves-effect waves-light">
                                            Basic Details
                                        </button>
                                        </div>
                                    </div>
                                </div>
                                <form onSubmit="return false" id="pressure_vessels_from">
                                    <div class="row g-3">
                                        <small class="text-light fw-semibold">
                                            * Indicates Special Material Origin Requirements Must Be Checked 'Yes'
                                        </small>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="customer_avl_applies" {{ isset($jqr_pressure_vessels->customer_avl_applies) && $jqr_pressure_vessels->customer_avl_applies == '1' ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">*Customer/Client AVL Applies</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="twitter1">Material Origin REQS</label>
                                            <input type="text" id="twitter1" name="material_origin_reqs" class="form-control" placeholder=""
                                            value="{{ isset($jqr_pressure_vessels->material_origin_reqs) ? $jqr_pressure_vessels->material_origin_reqs : '' }}"/>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="origin_traceable_to_melt" {{ isset($jqr_pressure_vessels->origin_traceable_to_melt) && $jqr_pressure_vessels->origin_traceable_to_melt == '1' ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">*Origin Traceable To Melt</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="facebook1">Acceptable Material
                                                Origins</label>
                                            <input type="text" id="facebook1" name="acceptable_material_origins" class="form-control" placeholder="" value="{{ isset($jqr_pressure_vessels->acceptable_material_origins) ? $jqr_pressure_vessels->acceptable_material_origins : '' }}"/>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="mtrs_required" {{ isset($jqr_pressure_vessels->mtrs_required) && $jqr_pressure_vessels->mtrs_required == '1' ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">MTRS Required(ALL)</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="heat_mapping" {{ isset($jqr_pressure_vessels->heat_mapping) && $jqr_pressure_vessels->heat_mapping == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Heat Mapping</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="weld_mapping" {{ isset($jqr_pressure_vessels->weld_mapping) && $jqr_pressure_vessels->weld_mapping == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Weld Mapping</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="google1">Material Notes</label>
                                            <textarea class="form-control" name="material_notes" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_pressure_vessels->material_notes) ? $jqr_pressure_vessels->material_notes: '' }}</textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="nace" {{ isset($jqr_pressure_vessels->nace) && $jqr_pressure_vessels->nace == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">*NACE</span>
                                            </label>
                                        </div>
                                        <div class="col-md-6 mb-6">
                                            <label for="selectpickerBasic" class="form-label">NDE Rquirements Required</label>
                                            <select class="selectpicker w-100 nde-req-dropdown" name="nde_requirements_required" data-style="btn-default">
                                                <option selected disabled>-Select-</option>
                                                @foreach($ndeReportsRequiredStatuses as $status)
                                                    <option data-code="{{ $status->code }}" value="{{ $status->id }}" {{ isset($jqr_pressure_vessels->nde_requirements_required) && $status->id == $jqr_pressure_vessels->nde_requirements_required ? 'selected' : '' }}>{{ $status->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="nde_req_code">NDE Rquirements Code</label>
                                            <input type="text" class="form-control nde-req-code-input" disabled readonly/>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="date_of_confirmation">Date of confirmation (By Quality Assurance)</label>
                                            <input type="date" id="date_of_confirmation" name="date_of_confirmation" class="form-control"
                                                placeholder="" aria-label=""
                                                value="{{ isset($jqr_pressure_vessels->date_of_confirmation) ? $jqr_pressure_vessels->date_of_confirmation : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="nde_reports_comments">NDE Reports Comments</label>
                                            <textarea class="form-control" name="nde_reports_comments" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_pressure_vessels->nde_reports_comments) ? $jqr_pressure_vessels->nde_reports_comments: '' }}</textarea>
                                        </div>
                                        <!-- <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="nde_requirements_required" {{ isset($jqr_pressure_vessels->nde_requirements_required) && $jqr_pressure_vessels->nde_requirements_required == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">NDE Reports Required</span>
                                            </label>
                                        </div> -->
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">NDE Requirements</label>
                                            <textarea class="form-control" name="nde_requirements" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_pressure_vessels->nde_requirements) ? $jqr_pressure_vessels->nde_requirements: '' }}</textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Welding Requirements</label>
                                            <textarea class="form-control" name="weld_requirements" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_pressure_vessels->weld_requirements) ? $jqr_pressure_vessels->weld_requirements: '' }}</textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Governing Code</label>
                                            <input type="text" id="linkedin1" name="governing_code" class="form-control" placeholder="" value="{{ isset($jqr_pressure_vessels->governing_code) ? $jqr_pressure_vessels->governing_code : '' }}"/>
                                        </div>
                                        <div class="col-sm-6">
                                            <small class="text-light fw-semibold d-block">PWHT</small>
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="pwht"
                                                    id="inlineRadio1" value="0"  {{ isset($jqr_pressure_vessels->pwht) && $jqr_pressure_vessels->pwht == '0'  ? 'checked': '' }} >
                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pwht"
                                                    id="inlineRadio2" value="1" {{ isset($jqr_pressure_vessels->pwht) && $jqr_pressure_vessels->pwht == '1'  ? 'checked': '' }} >
                                                <label class="form-check-label" for="inlineRadio2">No</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pwht"
                                                    id="inlineRadio3" value="2" {{ isset($jqr_pressure_vessels->pwht) && $jqr_pressure_vessels->pwht == '2'  ? 'checked': '' }} >
                                                <label class="form-check-label" for="inlineRadio3">Per Code REQ</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Hydro Hold Time</label>
                                            <input type="text" id="linkedin1" name="hydro_hold_time" class="form-control" placeholder=""  value="{{ isset($jqr_pressure_vessels->hydro_hold_time) ? $jqr_pressure_vessels->hydro_hold_time : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="witnessed" {{ isset($jqr_pressure_vessels->witnessed) && $jqr_pressure_vessels->witnessed == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Witnessed</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="hardness_test"  {{ isset($jqr_pressure_vessels->hardness_test) && $jqr_pressure_vessels->hardness_test == '1' ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Hardness Test</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Max Hardness</label>
                                            <input type="text" id="linkedin1" class="form-control" name="max_hardness" value="{{ isset($jqr_pressure_vessels->max_hardness) ? $jqr_pressure_vessels->max_hardness : '' }}"  placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="hydro_chart_required" {{ isset($jqr_pressure_vessels->hydro_chart_required) && $jqr_pressure_vessels->hydro_chart_required == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Hydro Chart Required</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="google1">Hydro Notes</label>
                                            <textarea class="form-control" name="hydro_notes" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_pressure_vessels->hydro_notes) ? $jqr_pressure_vessels->hydro_notes: '' }}</textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Notes</label>
                                            <textarea class="form-control" name="notes" id="exampleFormControlTextarea1"
                                                rows="3"> {{ isset($jqr_pressure_vessels->notes) ? $jqr_pressure_vessels->notes: '' }}</textarea>
                                        </div>
                                        <!-- Doc Statuses -->
                                        <!-- MTRS --> 
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">MTR's Status</label>
                                            <div class="alert alert-primary mtrs-status" role="alert">None</div>
                                        </div>
                                        <!-- MTRS Ends -->
                                        <!-- NDE --> 
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">NDE Status</label>
                                            <div class="alert alert-primary nde-status" role="alert">None</div>
                                        </div>
                                        <!-- NDE Ends -->
                                        <!-- Hydro --> 
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Hydro Status</label>
                                            <div class="alert alert-primary hydro-status" role="alert">None</div>
                                        </div>
                                        <!-- Hydro Ends -->
                                        <!-- Heat Map --> 
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Heat Map Status</label>
                                            <div class="alert alert-primary heat-map-status" role="alert">None</div>
                                        </div>
                                        <!-- Heat Map Ends --> 
                                        <!-- Weld Map --> 
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Weld Map Status</label>
                                            <div class="alert alert-primary weld-map-status" role="alert">None</div>
                                        </div>
                                        <!-- Weld Map Ends -->  
                                        <!-- Doc Statuses Ends -->
                                        <!-- Action Buttons -->
                                        <div class="pt-4">
                                            <div class="row justify-content-end">
                                                <div class="col-sm-9">
                                                    <button class="btn btn-label-secondary btn-prev me-sm-3 me-1" >
                                                        <i class="ti ti-arrow-left me-sm-1"></i>
                                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                    </button>
                                                    <button type="button" onclick="submitPressureVesselsData(true)"
                                                        class="btn btn-success waves-effect waves-light me-sm-3 me-1"><i
                                                            class="ti ti-check"></i>Save</button>
                                                    <button class="btn btn-primary btn-next" onclick="submitPressureVesselsData(false)">
                                                        <span
                                                            class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                                        <i class="ti ti-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Action Buttons Ends -->
                                    </div>
                                    <input type="hidden" class="form_Pressure_Vessels" name="id" value="{{ isset($jqr_pressure_vessels->id) ? $jqr_pressure_vessels->id : '' }}">
                                    <input type="hidden" class="form_id_bd" name="basic_details_id" value="{{ isset($jqr->id) ? $jqr->id : '' }}">
                                </form>
                            </div>
                            <!-- Pressure Vessels Ends -->
                            <!-- Non code Vessels -->
                            <div id="non_code_vessels" class="content">
                                <!-- <div class="content-header mb-3">
                                    <h6 class="mb-0">Non Code Vessels/Tanks</h6>
                                    <small>Enter Non Code Vessels/Tanks.</small>
                                </div> -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="content-header mb-3">
                                            <h6 class="mb-0">Non Code Vessels/Tanks</h6>
                                            <small>{{ isset($jqr->id) ? 'Update' : 'Enter' }} non code vessels/tanks</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 content-right">
                                        <div class="content-header mb-3">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#basicDetailsModal" class="btn btn-primary waves-effect waves-light">
                                            Basic Details
                                        </button>
                                        </div>
                                    </div>
                                </div>
                                <form onSubmit="return false" id="non_code_vessels_from">
                                    <div class="row g-3">
                                        <small class="text-light fw-semibold">
                                            * Indicates Special Material Origin Requirements Must Be Checked 'Yes'
                                        </small>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="customer_avl_applies" {{ isset($jqr_non_code->customer_avl_applies) && $jqr_non_code->customer_avl_applies == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">*Customer/Client AVL Applies</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="twitter1">Material Origin REQS</label>
                                            <input type="text" id="twitter1" name="material_origin_reqs" class="form-control" value="{{ isset($jqr_non_code->material_origin_reqs) ? $jqr_non_code->material_origin_reqs : '' }}" placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="origin_traceable_to_manufacturer" {{ isset($jqr_non_code->origin_traceable_to_manufacturer) && $jqr_non_code->origin_traceable_to_manufacturer == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">*Origin Traceable To Manufacturer</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="origin_traceable_to_melt"  {{ isset($jqr_non_code->origin_traceable_to_melt) && $jqr_non_code->origin_traceable_to_melt == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                     <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">*Origin Traceable To Melt(BILLET)</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="facebook1">Acceptable Material
                                                Origins</label>
                                            <input type="text" id="facebook1" name="acceptable_material_origins" value="{{ isset($jqr_non_code->acceptable_material_origins) ? $jqr_non_code->acceptable_material_origins : '' }}" class="form-control" placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="standard_code" {{ isset($jqr_non_code->standard_code) && $jqr_non_code->standard_code == '1' ? 'checked': '' }}  >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Standard Per Code(NO MTRS)</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="mtrs_required" {{ isset($jqr_non_code->mtrs_required) && $jqr_non_code->mtrs_required == '1' ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">MTRS Required</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="heat_mapping" {{ isset($jqr_non_code->heat_mapping) && $jqr_non_code->heat_mapping == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Heat Mapping</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="weld_mapping" {{ isset($jqr_non_code->weld_mapping) && $jqr_non_code->weld_mapping == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Weld Mapping</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="google1">Material Notes</label>
                                            <textarea class="form-control" name="material_notes" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_non_code->material_notes) ? $jqr_non_code->material_notes : '' }}</textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="nace" {{ isset($jqr_non_code->nace) && $jqr_non_code->nace == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">*NACE</span>
                                            </label>
                                        </div>
                                        <div class="col-md-6 mb-6">
                                            <label for="selectpickerBasic" class="form-label">NDE Rquirements Required</label>
                                            <select class="selectpicker w-100 nde-req-dropdown" name="nde_requirements_required" data-style="btn-default">
                                                <option selected disabled>-Select-</option>
                                                @foreach($ndeReportsRequiredStatuses as $status)
                                                    <option data-code="{{ $status->code }}" value="{{ $status->id }}" {{ isset($jqr_non_code->nde_requirements_required) && $status->id == $jqr_non_code->nde_requirements_required ? 'selected' : '' }}>{{ $status->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="nde_req_code">NDE Rquirements Code</label>
                                            <input type="text" class="form-control nde-req-code-input" disabled readonly/>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">NDE Requirements</label>
                                            <textarea class="form-control" name="nde_requirements" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_non_code->nde_requirements) ? $jqr_non_code->nde_requirements : '' }}</textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Welding Requirements</label>
                                            <textarea class="form-control" name="weld_requirements" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_non_code->weld_requirements) ? $jqr_non_code->weld_requirements : '' }}</textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Governing Code</label>
                                            <input type="text" id="linkedin1" name="governing_code" class="form-control" value="{{ isset($jqr_non_code->governing_code) ? $jqr_non_code->governing_code : '' }}"  placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <small class="text-light fw-semibold d-block">PWHT</small>
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="pwht" {{ isset($jqr_non_code->pwht) && $jqr_non_code->pwht == '0' ? 'checked': '' }}
                                                    id="inlineRadio1" value="0">
                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pwht"  {{ isset($jqr_non_code->pwht) && $jqr_non_code->pwht == '1' ? 'checked': '' }}
                                                    id="inlineRadio2" value="1">
                                                <label class="form-check-label" for="inlineRadio2">No</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pwht"  {{ isset($jqr_non_code->pwht) && $jqr_non_code->pwht == '2' ? 'checked': '' }}
                                                    id="inlineRadio3" value="2">
                                                <label class="form-check-label" for="inlineRadio3">Per Code REQ</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Hydro Hold Time</label>
                                            <input type="text" id="linkedin1" name="hydro_hold_time" class="form-control" value="{{ isset($jqr_non_code->hydro_hold_time) ? $jqr_non_code->hydro_hold_time : '' }}"  placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="witnessed" {{ isset($jqr_non_code->witnessed) && $jqr_non_code->witnessed == '1' ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Witnessed</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="hardness_test" {{ isset($jqr_non_code->hardness_test) && $jqr_non_code->hardness_test == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Hardness Test</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Max Hardness</label>
                                            <input type="text" id="linkedin1" name="max_hardness" class="form-control" value="{{ isset($jqr_non_code->max_hardness) ? $jqr_non_code->max_hardness : '' }}"  placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="hydro_chart_required"  {{ isset($jqr_non_code->hydro_chart_required) && $jqr_non_code->hydro_chart_required == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Hydro Chart Required</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="google1">Hydro Notes</label>
                                            <textarea class="form-control" name="hydro_notes" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_non_code->hydro_notes) ? $jqr_non_code->hydro_notes : '' }}</textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Notes</label>
                                            <textarea class="form-control" name="notes" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_non_code->notes) ? $jqr_non_code->notes : '' }}</textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="date_of_confirmation">Date of confirmation (By Quality Assurance)</label>
                                            <input type="date" id="date_of_confirmation" name="date_of_confirmation" class="form-control"
                                                placeholder="" aria-label=""
                                                value="{{ isset($jqr_non_code->date_of_confirmation) ? $jqr_non_code->date_of_confirmation : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="nde_reports_comments">NDE Reports Comments</label>
                                            <textarea class="form-control" name="nde_reports_comments" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_non_code->nde_reports_comments) ? $jqr_non_code->nde_reports_comments: '' }}</textarea>
                                        </div>
                                        <!-- Doc Statuses -->
                                        <!-- MTRS --> 
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">MTR's Status</label>
                                            <div class="alert alert-primary mtrs-status" role="alert">None</div>
                                        </div>
                                        <!-- MTRS Ends -->
                                        <!-- NDE --> 
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">NDE Status</label>
                                            <div class="alert alert-primary nde-status" role="alert">None</div>
                                        </div>
                                        <!-- NDE Ends -->
                                        <!-- Hydro --> 
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Hydro Status</label>
                                            <div class="alert alert-primary hydro-status" role="alert">None</div>
                                        </div>
                                        <!-- Hydro Ends -->
                                        <!-- Heat Map --> 
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Heat Map Status</label>
                                            <div class="alert alert-primary heat-map-status" role="alert">None</div>
                                        </div>
                                        <!-- Heat Map Ends --> 
                                        <!-- Weld Map --> 
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Weld Map Status</label>
                                            <div class="alert alert-primary weld-map-status" role="alert">None</div>
                                        </div>
                                        <!-- Weld Map Ends -->  
                                        <!-- Doc Statuses Ends -->
                                        <!-- Action Buttons -->
                                        <div class="pt-4">
                                            <div class="row justify-content-end">
                                                <div class="col-sm-9">
                                                    <button class="btn btn-label-secondary btn-prev me-sm-3 me-1">
                                                        <i class="ti ti-arrow-left me-sm-1"></i>
                                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                    </button>
                                                    <button type="button" onclick="submitNoCodeVesselsData(true)"
                                                        class="btn btn-success waves-effect waves-light me-sm-3 me-1"><i
                                                            class="ti ti-check"></i>Save</button>
                                                    <button class="btn btn-primary btn-next" onclick="submitNoCodeVesselsData(false)" >
                                                        <span
                                                            class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                                        <i class="ti ti-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Action Buttons Ends -->
                                    </div>
                                    <input type="hidden" class="form_Non_code" name="id" value="{{ isset($jqr_non_code->id) ? $jqr_non_code->id : '' }}">
                                    <input type="hidden" class="form_id_bd" name="basic_details_id" value="{{ isset($jqr->id) ? $jqr->id : '' }}">
                                </form>
                            </div>
                            <!-- Non code Vessels Ends -->
                            <!-- Process/Fuel Gas/Start Gas Piping -->
                            <div id="process_fuel_gas_piping" class="content">
                                <!-- <div class="content-header mb-3">
                                    <h6 class="mb-0">Process/Fuel Gas/Start Gas Piping</h6>
                                    <small>Enter Process/Fuel Gas/Start Gas Piping.</small>
                                </div> -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="content-header mb-3">
                                            <h6 class="mb-0">Process/Fuel Gas/Start Gas Piping</h6>
                                            <small>{{ isset($jqr->id) ? 'Update' : 'Enter' }} process/fuel gas/start gas piping</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 content-right">
                                        <div class="content-header mb-3">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#basicDetailsModal" class="btn btn-primary waves-effect waves-light">
                                            Basic Details
                                        </button>
                                        </div>
                                    </div>
                                </div>
                                <form onSubmit="return false" id="process_piping_from">
                                    <div class="row g-3">
                                        <small class="text-light fw-semibold">
                                            * Indicates Special Material Origin Requirements Must Be Checked 'Yes'
                                        </small>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="customer_avl_applies" {{ isset($jqr_process_fuel_gas->customer_avl_applies) && $jqr_process_fuel_gas->customer_avl_applies == '1' ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">*Customer/Client AVL Applies</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="twitter1">Material Origin REQS</label>
                                            <input type="text" id="twitter1" class="form-control" name="material_origin_reqs" value="{{ isset($jqr_process_fuel_gas->material_origin_reqs) ? $jqr_process_fuel_gas->material_origin_reqs : '' }}" placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="origin_traceable_to_melt" {{ isset($jqr_process_fuel_gas->origin_traceable_to_melt) && $jqr_process_fuel_gas->origin_traceable_to_melt == '1' ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">*Origin Traceable To Melt</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="facebook1">Acceptable Material
                                                Origins</label>
                                            <input type="text" id="facebook1" name="acceptable_material_origins" value="{{ isset($jqr_process_fuel_gas->acceptable_material_origins) ? $jqr_process_fuel_gas->acceptable_material_origins : '' }}" class="form-control" placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="standard_code"  {{ isset($jqr_process_fuel_gas->standard_code) && $jqr_process_fuel_gas->standard_code == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Standard/Per Code(NO MTRS)</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="mtrs_required" {{ isset($jqr_process_fuel_gas->mtrs_required) && $jqr_process_fuel_gas->mtrs_required == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">MTRS Required</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="heat_mapping" {{ isset($jqr_process_fuel_gas->heat_mapping) && $jqr_process_fuel_gas->heat_mapping == '1' ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Heat Mapping</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="weld_mapping" {{ isset($jqr_process_fuel_gas->weld_mapping) && $jqr_process_fuel_gas->weld_mapping == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Weld Mapping</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="google1">Material Notes</label>
                                            <textarea class="form-control" name="material_notes" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_process_fuel_gas->material_notes) ? $jqr_process_fuel_gas->material_notes : '' }}</textarea>
                                        </div>
                                        <div class="col-md-6 mb-6">
                                            <label for="selectpickerBasic" class="form-label">NDE Rquirements Required</label>
                                            <select id="selectpickerBasic" class="selectpicker w-100 nde-req-dropdown" name="nde_requirements_required" data-style="btn-default">
                                                <option selected disabled>-Select-</option>
                                                @foreach($ndeReportsRequiredStatuses as $status)
                                                    <option data-code="{{ $status->code }}" value="{{ $status->id }}" {{ isset($jqr_process_fuel_gas->nde_requirements_required) && $status->id == $jqr_process_fuel_gas->nde_requirements_required ? 'selected' : '' }}>{{ $status->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="nde_req_code">NDE Rquirements Code</label>
                                            <input type="text" class="form-control nde-req-code-input" disabled readonly/>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="nace" {{ isset($jqr_process_fuel_gas->nace) && $jqr_process_fuel_gas->nace == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">*NACE</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">NDE Requirements</label>
                                            <textarea class="form-control" name="nde_requirements" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_process_fuel_gas->nde_requirements) ? $jqr_process_fuel_gas->nde_requirements : '' }}</textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Welding Requirements</label>
                                            <textarea class="form-control" name="weld_requirements" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_process_fuel_gas->weld_requirements) ? $jqr_process_fuel_gas->weld_requirements : '' }}</textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Governing Code</label>
                                            <input type="text" id="linkedin1" name="governing_code" class="form-control" value="{{ isset($jqr_process_fuel_gas->governing_code) ? $jqr_process_fuel_gas->governing_code : '' }}"  placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Hydro Hold Time</label>
                                            <input type="text" id="linkedin1" name="hydro_hold_time" class="form-control" value="{{ isset($jqr_process_fuel_gas->hydro_hold_time) ? $jqr_process_fuel_gas->hydro_hold_time : '' }}" placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="witnessed" {{ isset($jqr_process_fuel_gas->witnessed) && $jqr_process_fuel_gas->witnessed == '1' ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Witnessed</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="hardness_test" {{ isset($jqr_process_fuel_gas->hardness_test) && $jqr_process_fuel_gas->hardness_test == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Hardness Test</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Max Hardness</label>
                                            <input type="text" id="linkedin1" class="form-control" name="max_hardness" value="{{ isset($jqr_process_fuel_gas->max_hardness) ? $jqr_process_fuel_gas->max_hardness : '' }}"   placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="hydro_chart_required" {{ isset($jqr_process_fuel_gas->hydro_chart_required) && $jqr_process_fuel_gas->hydro_chart_required == '1' ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Hydro Chart Required</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="google1">Hydro Notes</label>
                                            <textarea class="form-control" name="hydro_notes" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_process_fuel_gas->hydro_notes) ? $jqr_process_fuel_gas->hydro_notes : '' }}</textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Notes</label>
                                            <textarea class="form-control" name="notes" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_process_fuel_gas->notes) ? $jqr_process_fuel_gas->notes : '' }}</textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="date_of_confirmation">Date of confirmation (By Quality Assurance)</label>
                                            <input type="date" id="date_of_confirmation" name="date_of_confirmation" class="form-control"
                                                placeholder="" aria-label=""
                                                value="{{ isset($jqr_process_fuel_gas->date_of_confirmation) ? $jqr_process_fuel_gas->date_of_confirmation : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="nde_reports_comments">NDE Reports Comments</label>
                                            <textarea class="form-control" name="nde_reports_comments" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_process_fuel_gas->nde_reports_comments) ? $jqr_process_fuel_gas->nde_reports_comments: '' }}</textarea>
                                        </div>
                                        <!-- Doc Statuses -->
                                        <!-- MTRS --> 
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">MTR's Status</label>
                                            <div class="alert alert-primary mtrs-status" role="alert">None</div>
                                        </div>
                                        <!-- MTRS Ends -->
                                        <!-- NDE --> 
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">NDE Status</label>
                                            <div class="alert alert-primary nde-status" role="alert">None</div>
                                        </div>
                                        <!-- NDE Ends -->
                                        <!-- Hydro --> 
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Hydro Status</label>
                                            <div class="alert alert-primary hydro-status" role="alert">None</div>
                                        </div>
                                        <!-- Hydro Ends -->
                                        <!-- Heat Map --> 
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Heat Map Status</label>
                                            <div class="alert alert-primary heat-map-status" role="alert">None</div>
                                        </div>
                                        <!-- Heat Map Ends --> 
                                        <!-- Weld Map --> 
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Weld Map Status</label>
                                            <div class="alert alert-primary weld-map-status" role="alert">None</div>
                                        </div>
                                        <!-- Weld Map Ends -->  
                                        <!-- Doc Statuses Ends -->
                                        <!-- Action Buttons -->
                                        <div class="pt-4">
                                            <div class="row justify-content-end">
                                                <div class="col-sm-9">
                                                    <button class="btn btn-label-secondary btn-prev me-sm-3 me-1">
                                                        <i class="ti ti-arrow-left me-sm-1"></i>
                                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                    </button>
                                                    <!-- <button type="button" onclick="submitProcessPipingData(true)"
                                                        class="btn btn-success waves-effect waves-light me-sm-3 me-1"><i
                                                            class="ti ti-check"></i>Finish</button> -->
                                                    <button type="button" onclick="submitProcessPipingData(true)"
                                                        class="btn btn-success waves-effect waves-light me-sm-3 me-1"><i
                                                            class="ti ti-check"></i>Save</button>
                                                    <button class="btn btn-primary btn-next" onclick="submitProcessPipingData(false)" >
                                                        <span
                                                            class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                                        <i class="ti ti-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Action Buttons Ends -->
                                    </div>
                                    <input type="hidden" class="form_Process_Fuel" name="id" value="{{ isset($jqr_process_fuel_gas->id) ? $jqr_process_fuel_gas->id : '' }}">
                                    <input type="hidden" class="form_id_bd" name="basic_details_id" value="{{ isset($jqr->id) ? $jqr->id : '' }}">
                                </form>
                            </div>
                            <!-- Process/Fuel Gas/Start Gas Piping Ends -->
                            <!-- Bolting -->
                            <div id="bolting" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Bolting</h6>
                                    <small>{{ isset($jqr->id) ? 'Update' : 'Enter' }} bolting</small>
                                </div>
                                <form onSubmit="return false" id="bolting_from">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="efx_standard_no_cocs" {{ isset($jqr_bolting->efx_standard_no_cocs) && $jqr_bolting->efx_standard_no_cocs == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">EFX Standard No COC's / No MTR's</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="vendor_coc" {{ isset($jqr_bolting->vendor_coc) && $jqr_bolting->vendor_coc == '1' ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Vendor COC</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="manufacturer_coc" {{ isset($jqr_bolting->manufacturer_coc) && $jqr_bolting->manufacturer_coc == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Manufacturer COC</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="mtrs" {{ isset($jqr_bolting->mtrs) && $jqr_bolting->mtrs == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">MTRS</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="email1">Material Notes</label>
                                            <textarea class="form-control" name="material_notes" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_bolting->material_notes) ? $jqr_bolting->material_notes: '' }}</textarea>
                                        </div>
                                        <!-- Action Buttons -->
                                        <div class="pt-4">
                                            <div class="row justify-content-end">
                                                <div class="col-sm-9">
                                                    <button class="btn btn-label-secondary btn-prev me-sm-3 me-1">
                                                        <i class="ti ti-arrow-left me-sm-1"></i>
                                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                    </button>
                                                    <button type="button" onclick="submitBoltingData(true)"
                                                        class="btn btn-success waves-effect waves-light me-sm-3 me-1"><i
                                                            class="ti ti-check"></i>Save</button>
                                                    <button class="btn btn-primary btn-next" onclick="submitBoltingData(false)">
                                                        <span
                                                            class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                                        <i class="ti ti-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Action Buttons Ends -->
                                    </div>
                                    <input type="hidden" class="form_Bolting" name="id" value="{{ isset($jqr_bolting->id) ? $jqr_bolting->id : '' }}">
                                    <input type="hidden" class="form_id_bd" name="basic_details_id" value="{{ isset($jqr->id) ? $jqr->id : '' }}">
                                </form>
                            </div>
                            <!-- Bolting Ends -->
                            <!-- Gaskets -->
                            <div id="gaskets" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Gaskets</h6>
                                    <small>{{ isset($jqr->id) ? 'Update' : 'Enter' }} gaskets</small>
                                </div>
                                <form onSubmit="return false" id="gaskets_from">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="efx_standard_no_cocs" {{ isset($jqr_gaskets->efx_standard_no_cocs) && $jqr_gaskets->efx_standard_no_cocs == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">EFX Standard No COC's / No MTR's</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="vendor_coc" {{ isset($jqr_gaskets->vendor_coc) && $jqr_gaskets->vendor_coc == '1' ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Vendor COC</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="manufacturer_coc" {{ isset($jqr_gaskets->manufacturer_coc) && $jqr_gaskets->manufacturer_coc == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Manufacturer COC</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="mtrs" {{ isset($jqr_gaskets->mtrs) && $jqr_gaskets->mtrs == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">MTRS</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="email1">Material Notes</label>
                                            <textarea class="form-control" name="material_notes"  id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_gaskets->material_notes) ? $jqr_gaskets->material_notes: '' }}</textarea>
                                        </div>
                                        <!-- Action Buttons -->
                                        <div class="pt-4">
                                            <div class="row justify-content-end">
                                                <div class="col-sm-9">
                                                    <button class="btn btn-label-secondary btn-prev me-sm-3 me-1">
                                                        <i class="ti ti-arrow-left me-sm-1"></i>
                                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                    </button>
                                                    <button type="button" onclick="submitGasketsData(true)"
                                                        class="btn btn-success waves-effect waves-light me-sm-3 me-1"><i
                                                            class="ti ti-check"></i>Save</button>
                                                    <button class="btn btn-primary btn-next">
                                                        <span
                                                            class="align-middle d-sm-inline-block d-none me-sm-1" onclick="submitGasketsData(false)" >Next</span>
                                                        <i class="ti ti-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Action Buttons Ends -->
                                    </div>
                                    <input type="hidden" class="form_Gaskets" name="id" value="{{ isset($jqr_gaskets->id) ? $jqr_gaskets->id : '' }}">
                                    <input type="hidden" class="form_id_bd" name="basic_details_id" value="{{ isset($jqr->id) ? $jqr->id : '' }}">
                                </form>
                            </div>
                            <!-- Gaskets Ends -->
                            <!-- Tubing -->
                            <div id="tubing" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Tubing</h6>
                                    <small>{{ isset($jqr->id) ? 'Update' : 'Enter' }} tubing</small>
                                </div>
                                <form onSubmit="return false" id="tubing_from">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="customer_avl_applies"
                                                {{ isset($jqr_tubing->customer_avl_applies) && $jqr_tubing->customer_avl_applies == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Customer/Client AVL Applies</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="twitter1">Material Origin REQS</label>
                                            <input type="text" id="twitter1" name="material_origin_reqs" class="form-control" placeholder=""
                                            value="{{ isset($jqr_tubing->material_origin_reqs) ? $jqr_tubing->material_origin_reqs : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="origin_traceable_to_melt"
                                                {{ isset($jqr_tubing->origin_traceable_to_melt) && $jqr_tubing->origin_traceable_to_melt == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Origin Traceable To Melt(BILLET)</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="facebook1">Acceptable Material
                                                Origins</label>
                                            <input type="text" id="facebook1" name="acceptable_material_origins" class="form-control" placeholder=""
                                            value="{{ isset($jqr_tubing->acceptable_material_origins) ? $jqr_tubing->acceptable_material_origins : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="efx_standard_no_cocs"
                                                {{ isset($jqr_tubing->efx_standard_no_cocs) && $jqr_tubing->efx_standard_no_cocs == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">EFX Standard No COC's / No MTR's</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="tubing_mtrs_required"
                                                {{ isset($jqr_tubing->tubing_mtrs_required) && $jqr_tubing->tubing_mtrs_required == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Tubing MTRS Required</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="tubing_coc_required"
                                                {{ isset($jqr_tubing->tubing_coc_required) && $jqr_tubing->tubing_coc_required == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Tubing COC Required</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="fitting_mtrs_required"
                                                {{ isset($jqr_tubing->fitting_mtrs_required) && $jqr_tubing->fitting_mtrs_required == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Fitting MTRS Required</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="fitting_coc_required"
                                                {{ isset($jqr_tubing->fitting_coc_required) && $jqr_tubing->fitting_coc_required == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Fitting COC Required</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="full_traceability"
                                                {{ isset($jqr_tubing->full_traceability) && $jqr_tubing->full_traceability == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Full Traceability(w/HEAT MAPPING)</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="google1">Material Notes</label>
                                            <textarea class="form-control" name="material_notes" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_tubing->material_notes) ? $jqr_tubing->material_notes : '' }}</textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">NDE Requirements</label>
                                            <textarea class="form-control" name="nde_requirements" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_tubing->nde_requirements) ? $jqr_tubing->nde_requirements : '' }}</textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">PMI Requirements</label>
                                            <textarea class="form-control" name="pmi_Requirements" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_tubing->pmi_Requirements) ? $jqr_tubing->pmi_Requirements : '' }}</textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Notes</label>
                                            <textarea class="form-control" name="notes" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_tubing->notes) ? $jqr_tubing->notes : '' }}</textarea>
                                        </div>
                                        <!-- Action Buttons -->
                                        <div class="pt-4">
                                            <div class="row justify-content-end">
                                                <div class="col-sm-9">
                                                    <button class="btn btn-label-secondary btn-prev me-sm-3 me-1">
                                                        <i class="ti ti-arrow-left me-sm-1"></i>
                                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                    </button>
                                                    <button type="button" onclick="submitTubingData(true)"
                                                        class="btn btn-success waves-effect waves-light me-sm-3 me-1"><i
                                                            class="ti ti-check"></i>Save</button>
                                                    <button class="btn btn-primary btn-next" onclick="submitTubingData(false)">
                                                        <span
                                                            class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                                        <i class="ti ti-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Action Buttons Ends -->
                                    </div>
                                    <input type="hidden" class="form_Tubing" name="id" value="{{ isset($jqr_tubing->id) ? $jqr_tubing->id : '' }}">
                                    <input type="hidden" class="form_id_bd" name="basic_details_id" value="{{ isset($jqr->id) ? $jqr->id : '' }}">
                                </form>
                            </div>
                            <!-- Tubing Ends -->
                            <!-- Butt Welded/Socket Welded Utility Piping -->
                            <div id="butt_welded" class="content">
                                <!-- <div class="content-header mb-3">
                                    <h6 class="mb-0">Butt Welded/Socket Welded Utility Piping</h6>
                                    <small>{{ isset($jqr->id) ? 'Update' : 'Enter' }} butt welded/socket welded utility piping</small>
                                </div> -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="content-header mb-3">
                                        <h6 class="mb-0">Butt Welded/Socket Welded Utility Piping</h6>
                                        <small>{{ isset($jqr->id) ? 'Update' : 'Enter' }} butt welded/socket welded utility piping</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 content-right">
                                        <div class="content-header mb-3">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#basicDetailsModal" class="btn btn-primary waves-effect waves-light">
                                            Basic Details
                                        </button>
                                        </div>
                                    </div>
                                </div>
                                <form onSubmit="return false" id="butt_piping_from">
                                    <div class="row g-3">
                                        <small class="text-light fw-semibold">
                                            * Indicates Special Material Origin Requirements Must Be Checked 'Yes'
                                        </small>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="customer_avl_applies" {{ isset($jqr_butt->customer_avl_applies) && $jqr_butt->customer_avl_applies == '1' ? 'checked' : '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">*Customer/Client AVL Applies</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="twitter1">Material Origin REQS</label>
                                            <input type="text" id="twitter1" name="material_origin_reqs" class="form-control" value="{{ isset($jqr_butt->material_origin_reqs) ? $jqr_butt->material_origin_reqs : '' }}" placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="origin_traceable_to_melt" {{ isset($jqr_butt->origin_traceable_to_melt) && $jqr_butt->origin_traceable_to_melt == '1' ? 'checked' : '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">*Origin Traceable To Melt(BILLET)</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="facebook1">Acceptable Material
                                                Origins</label>
                                            <input type="text" id="facebook1" name="acceptable_material_origins" value="{{ isset($jqr_butt->acceptable_material_origins) ? $jqr_butt->acceptable_material_origins : '' }}" class="form-control" placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="standard_per_code" {{ isset($jqr_butt->standard_per_code) && $jqr_butt->standard_per_code == '1' ? 'checked' : '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Standard Per Code(No MTRS)</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="mtrs_provided" {{ isset($jqr_butt->mtrs_provided) && $jqr_butt->mtrs_provided == '1' ? 'checked' : '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">MTRS Provided</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="heat_mapping" {{ isset($jqr_butt->heat_mapping) && $jqr_butt->heat_mapping == '1' ? 'checked' : '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Heat Mapping</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="weld_mapping" {{ isset($jqr_butt->weld_mapping) && $jqr_butt->weld_mapping == '1' ? 'checked' : '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Weld Mapping</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="google1">Material Notes</label>
                                            <textarea class="form-control" name="material_notes" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_butt->material_notes) ? $jqr_butt->material_notes : '' }}</textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="nace" {{ isset($jqr_butt->nace) && $jqr_butt->nace == '1' ? 'checked' : '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">*NACE</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="nde_requirements" {{ isset($jqr_butt->nde_requirements) && $jqr_butt->nde_requirements == '1' ? 'checked' : '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">NDE Requirements</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Welding Requirements</label>
                                            <textarea class="form-control" name="weld_requirements" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_butt->weld_requirements) ? $jqr_butt->weld_requirements : '' }}</textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Governing Code</label>
                                            <input type="text" id="linkedin1" name="governing_code" class="form-control"  value="{{ isset($jqr_butt->governing_code) ? $jqr_butt->governing_code : '' }}"  placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <small class="text-light fw-semibold d-block">PWHT</small>
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" type="radio" name="pwht"
                                                    id="inlineRadio1" name="" value="0" {{ isset($jqr_butt->pwht) && $jqr_butt->pwht == '0'  ? 'checked' : '' }} >
                                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pwht"
                                                    id="inlineRadio2" name="" value="1" {{ isset($jqr_butt->pwht) && $jqr_butt->pwht == '1'  ? 'checked' : '' }}>
                                                <label class="form-check-label" for="inlineRadio2">No</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="pwht"
                                                    id="inlineRadio3" name="" value="2"  {{ isset($jqr_butt->pwht) && $jqr_butt->pwht == '2'  ? 'checked' : '' }} >
                                                <label class="form-check-label" for="2">Per Code REQ</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Hydro Hold Time</label>
                                            <input type="text" id="linkedin1" name="hydro_hold_time" class="form-control" value="{{ isset($jqr_butt->hydro_hold_time) ? $jqr_butt->hydro_hold_time : '' }}" placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="witnessed" {{ isset($jqr_butt->witnessed) && $jqr_butt->witnessed == '1' ? 'checked' : '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Witnessed</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="hardness_test" {{ isset($jqr_butt->hardness_test) && $jqr_butt->hardness_test == '1' ? 'checked' : '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Hardness Test</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Max Hardness</label>
                                            <input type="text" id="linkedin1" class="form-control" name="max_hardness" value="{{ isset($jqr_butt->max_hardness) ? $jqr_butt->max_hardness : '' }}" placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="hydro_chart_required" {{ isset($jqr_butt->hydro_chart_required) && $jqr_butt->hydro_chart_required == '1' ? 'checked' : '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Hydro Chart Required</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="google1">Hydro Notes</label>
                                            <input type="text" id="google1" name="hydro_notes" class="form-control" value="{{ isset($jqr_butt->hydro_notes) ? $jqr_butt->hydro_notes : '' }}" placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Notes</label>
                                            <textarea class="form-control" name="notes" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_butt->notes) ? $jqr_butt->notes : '' }}</textarea>
                                        </div>
                                        <!-- Action Buttons -->
                                        <div class="pt-4">
                                            <div class="row justify-content-end">
                                                <div class="col-sm-9">
                                                    <button class="btn btn-label-secondary btn-prev me-sm-3 me-1">
                                                        <i class="ti ti-arrow-left me-sm-1"></i>
                                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                    </button>
                                                    <button type="button" onclick="submitButtPipingData(true)"
                                                        class="btn btn-success waves-effect waves-light me-sm-3 me-1"><i
                                                            class="ti ti-check"></i>Save</button>
                                                    <button class="btn btn-primary btn-next" onclick="submitButtPipingData(false)" >
                                                        <span
                                                            class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                                        <i class="ti ti-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Action Buttons Ends -->
                                    </div>
                                    <input type="hidden" class="form_Butt" name="id" value="{{ isset($jqr_butt->id) ? $jqr_butt->id : '' }}">
                                    <input type="hidden" class="form_id_bd" name="basic_details_id" value="{{ isset($jqr->id) ? $jqr->id : '' }}">
                                </form>
                            </div>
                            <!-- Butt Welded/Socket Welded Utility Piping Ends -->
                            <!-- Threaded Piping -->
                            <div id="threaded_piping" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Threaded Piping</h6>
                                    <small>{{ isset($jqr->id) ? 'Update' : 'Enter' }} threaded piping</small>
                                </div>
                                <form onSubmit="return false" id="threaded_piping_from">
                                    <div class="row g-3">
                                        <small class="text-light fw-semibold">
                                            * Indicates Special Material Origin Requirements Must Be Checked 'Yes'
                                        </small>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="customer_avl_applies" {{ isset($jqr_threaded_piping->customer_avl_applies) && $jqr_threaded_piping->customer_avl_applies == '1' ? 'checked' : '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Customer/Client AVL Applies</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="twitter1">Material Origin REQS</label>
                                            <input type="text" id="twitter1" name="material_origin_reqs"  value="{{ isset($jqr_threaded_piping->material_origin_reqs) ? $jqr_threaded_piping->material_origin_reqs : '' }}" class="form-control" placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="origin_traceable_to_melt"  {{ isset($jqr_threaded_piping->origin_traceable_to_melt) && $jqr_threaded_piping->origin_traceable_to_melt == '1' ? 'checked' : '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Origin Traceable To Melt(BILLET)</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="facebook1">Acceptable Material
                                                Origins</label>
                                            <input type="text" id="facebook1" name="acceptable_material_origins" value="{{ isset($jqr_threaded_piping->acceptable_material_origins) ? $jqr_threaded_piping->acceptable_material_origins : '' }}" class="form-control" placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="standard_per_code" {{ isset($jqr_threaded_piping->standard_per_code) && $jqr_threaded_piping->standard_per_code == '1' ? 'checked' : '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Standard/Per Code(NO MTRS)</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="mtrs_required" {{ isset($jqr_threaded_piping->mtrs_required) && $jqr_threaded_piping->mtrs_required == '1' ? 'checked' : '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">*MTRS Required</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="heat_mapping" {{ isset($jqr_threaded_piping->heat_mapping) && $jqr_threaded_piping->heat_mapping == '1' ? 'checked' : '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">*Heat Mapping(FULL TRACEABILITY)</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="google1">Material Notes</label>
                                            <textarea class="form-control" name="material_notes" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_threaded_piping->material_notes) ? $jqr_threaded_piping->material_notes : '' }}</textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="nace" {{ isset($jqr_threaded_piping->nace) && $jqr_threaded_piping->nace == '1' ? 'checked' : '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">NACE</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Notes</label>
                                            <textarea class="form-control" name="notes" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_threaded_piping->notes) ? $jqr_threaded_piping->notes : '' }}</textarea>
                                        </div>
                                        <!-- Action Buttons -->
                                        <div class="pt-4">
                                            <div class="row justify-content-end">
                                                <div class="col-sm-9">
                                                    <button class="btn btn-label-secondary btn-prev me-sm-3 me-1">
                                                        <i class="ti ti-arrow-left me-sm-1"></i>
                                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                    </button>
                                                    <button type="button" onclick="submitThreadedPipingData(true)"
                                                        class="btn btn-success waves-effect waves-light me-sm-3 me-1"><i
                                                            class="ti ti-check"></i>Save</button>
                                                    <button class="btn btn-primary btn-next">
                                                        <span
                                                            class="align-middle d-sm-inline-block d-none me-sm-1" onclick="submitThreadedPipingData(false)" >Next</span>
                                                        <i class="ti ti-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Action Buttons Ends -->
                                    </div>
                                    <input type="hidden" class="form_Threaded" name="id" value="{{ isset($jqr_threaded_piping->id) ? $jqr_threaded_piping->id : '' }}">
                                    <input type="hidden" class="form_id_bd" name="basic_details_id" value="{{ isset($jqr->id) ? $jqr->id : '' }}">
                                </form>
                            </div>
                            <!-- Threaded Piping Ends -->
                            <!-- Electrical/Instrumentation -->
                            <div id="electrical" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Electrical/Instrumentation</h6>
                                    <small>{{ isset($jqr->id) ? 'Update' : 'Enter' }} electrical/instrumentation</small>
                                </div>
                                <form onSubmit="return false" id="electrical_from">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="customer_avl_applies" {{ isset($jqr_electrical->customer_avl_applies) && $jqr_electrical->customer_avl_applies == '1' ? 'checked' : '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Customer/Client AVL Applies</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="facebook1">Acceptable Material
                                                Origins</label>
                                            <input type="text" id="facebook1" class="form-control" name="acceptable_material_origins" value="{{ isset($jqr_electrical->acceptable_material_origins) ? $jqr_electrical->acceptable_material_origins : '' }}" placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="vendor_restrictions" {{ isset($jqr_electrical->vendor_restrictions) && $jqr_electrical->vendor_restrictions == '1' ? 'checked' : '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Vendor Restrictions</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Specify</label>
                                            <input type="text" id="linkedin1" class="form-control" name="specify" value="{{ isset($jqr_electrical->specify) ? $jqr_electrical->specify : '' }}" placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="twitter1">Approved Vendor(S)</label>
                                            <input type="text" id="twitter1" class="form-control" name="approved_vendors" value="{{ isset($jqr_electrical->approved_vendors) ? $jqr_electrical->approved_vendors : '' }}" placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="google1">Material Notes</label>
                                            <textarea class="form-control" name="material_notes" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_electrical->material_notes) ? $jqr_electrical->material_notes : '' }}</textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Governing Code</label>
                                            <input type="text" id="linkedin1" class="form-control" name="governing_code" value="{{ isset($jqr_electrical->governing_code) ? $jqr_electrical->governing_code : '' }}" placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Notes</label>
                                            <textarea class="form-control" name="notes" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_electrical->notes) ? $jqr_electrical->notes : '' }}</textarea>
                                        </div>
                                        <!-- Action Buttons -->
                                        <div class="pt-4">
                                            <div class="row justify-content-end">
                                                <div class="col-sm-9">
                                                    <button class="btn btn-label-secondary btn-prev me-sm-3 me-1">
                                                        <i class="ti ti-arrow-left me-sm-1"></i>
                                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                    </button>
                                                    <button type="button" onclick="submitElectricalData(true)"
                                                        class="btn btn-success waves-effect waves-light me-sm-3 me-1"><i
                                                            class="ti ti-check"></i>Save</button>
                                                    <button class="btn btn-primary btn-next" onclick="submitElectricalData(false)" >
                                                        <span
                                                            class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                                        <i class="ti ti-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Action Buttons Ends -->
                                    </div>
                                    <input type="hidden" class="form_Electrical" name="id" value="{{ isset($jqr_electrical->id) ? $jqr_electrical->id : '' }}">
                                    <input type="hidden" class="form_id_bd" name="basic_details_id" value="{{ isset($jqr->id) ? $jqr->id : '' }}">
                                </form>
                            </div>
                            <!-- Electrical/Instrumentation Ends -->
                            <!-- Preservation -->
                            <div id="preservation" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Preservation</h6>
                                    <small>{{ isset($jqr->id) ? 'Update' : 'Enter' }} preservation</small>
                                </div>
                                <form onSubmit="return false" id="preservation_from">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="efx_standard_short_term" {{ isset($jqr_preservation->efx_standard_short_term) && $jqr_preservation->efx_standard_short_term == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">EFX Standard Short Term(6 Mo)</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="efx_standard_long_term" {{ isset($jqr_preservation->efx_standard_long_term) && $jqr_preservation->efx_standard_long_term == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">EFX Standard Long Term(6 Mo)</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="customer_specified_other" {{ isset($jqr_preservation->customer_specified_other) && $jqr_preservation->customer_specified_other == '1' ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Customer Specified/Other</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Special Customer
                                                Requirements</label>
                                            <textarea class="form-control" name="special_customer_requirements" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_preservation->special_customer_requirements) ? $jqr_preservation->special_customer_requirements: '' }}</textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Notes</label>
                                            <textarea class="form-control" name="notes" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_preservation->notes) ? $jqr_preservation->notes : '' }}</textarea>
                                        </div>
                                        <!-- Action Buttons -->
                                        <div class="pt-4">
                                            <div class="row justify-content-end">
                                                <div class="col-sm-9">
                                                    <button class="btn btn-label-secondary btn-prev me-sm-3 me-1">
                                                        <i class="ti ti-arrow-left me-sm-1"></i>
                                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                    </button>
                                                    <button type="button" onclick="submitPreservationData(true)"
                                                        class="btn btn-success waves-effect waves-light me-sm-3 me-1"><i
                                                            class="ti ti-check"></i>Save</button>
                                                    <button class="btn btn-primary btn-next" onclick="submitPreservationData(false)">
                                                        <span
                                                            class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                                        <i class="ti ti-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Action Buttons Ends -->
                                    </div>
                                    <input type="hidden" class="form_Preservation" name="id" value="{{ isset($jqr_preservation->id) ? $jqr_preservation->id : '' }}">
                                    <input type="hidden" class="form_id_bd" name="basic_details_id" value="{{ isset($jqr->id) ? $jqr->id : '' }}">
                                </form>
                            </div>
                            <!-- Preservation Ends -->
                            <!-- Package Testing -->
                            <div id="package_testing" class="content">
                                <!-- <div class="content-header mb-3">
                                    <h6 class="mb-0">Package Testing</h6>
                                    <small>{{ isset($jqr->id) ? 'Update' : 'Enter' }} package testing</small>
                                </div> -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="content-header mb-3">
                                            <h6 class="mb-0">Package Testing</h6>
                                            <small>{{ isset($jqr->id) ? 'Update' : 'Enter' }} package testing</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 content-right">
                                        <div class="content-header mb-3">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#basicDetailsModal" class="btn btn-primary waves-effect waves-light">
                                            Basic Details
                                        </button>
                                        </div>
                                    </div>
                                </div>
                                <label class="form-check-label" for="deliveryAdd">
                                    Pneumatic Testing
                                </label>
                                <hr>
                                <form onSubmit="return false" id="package_testing_from">
                                    <div class="row g-3">
                                        <!-- Pneumatic Testing -->
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="pneumatic_testing" {{ isset($jqr_package_testing->pneumatic_testing) && $jqr_package_testing->pneumatic_testing == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Pneumatic Testing</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="pneumatic_testing_customer_third_party_witness_required" {{ isset($jqr_package_testing->pneumatic_testing_customer_third_party_witness_required) && $jqr_package_testing->pneumatic_testing_customer_third_party_witness_required == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Pneumatic Testing Customer/Third Party
                                                    Witness Required</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="twitter1">Pneumatic Testing Notification
                                                Requirement</label>
                                            <input type="text" id="twitter1" name="pneumatic_testing_notification_requirement"  value="{{ isset($jqr_package_testing->pneumatic_testing_notification_requirement) ? $jqr_package_testing->pneumatic_testing_notification_requirement : '' }}"  class="form-control" placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="facebook1">System</label>
                                            <input type="text" id="facebook1" name="system" class="form-control"  value="{{ isset($jqr_package_testing->system) ? $jqr_package_testing->system : '' }}" placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="google1">Test Medium</label>
                                            <input type="text" id="google1" name="test_medium" class="form-control"  value="{{ isset($jqr_package_testing->test_medium) ? $jqr_package_testing->test_medium : '' }}" placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Test Requirement Pressure</label>
                                            <input type="text" id="linkedin1" name="test_requirement_pressure" value="{{ isset($jqr_package_testing->test_requirement_pressure) ? $jqr_package_testing->test_requirement_pressure : '' }}" class="form-control" placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Test Requirement Time</label>
                                            <input type="text" id="linkedin1" name="test_requirement_time" class="form-control" placeholder="" value="{{ isset($jqr_package_testing->test_requirement_time) ? $jqr_package_testing->test_requirement_time : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="linkedin1">Pneumatic Testing Notes</label>
                                            <textarea class="form-control" name="pneumatic_testing_notes" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_package_testing->pneumatic_testing_notes) ? $jqr_package_testing->pneumatic_testing_notes : '' }}</textarea>
                                        </div>
                                        <!-- Pneumatic Testing Ends -->
                                        <label class="form-check-label" for="deliveryAdd">
                                            Vaccum
                                        </label>
                                        <hr>
                                        <!-- Vaccum -->
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="vaccum" {{ isset($jqr_package_testing->vaccum) && $jqr_package_testing->vaccum == '1' ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Vaccum</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="vaccum_customer_third_party_witness_required" {{ isset($jqr_package_testing->vaccum_customer_third_party_witness_required) && $jqr_package_testing->vaccum_customer_third_party_witness_required == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Vaccum Customer/Third Party Witness
                                                    Required</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="twitter1">Vaccum Notification
                                                Requirement</label>
                                            <input type="text" id="twitter1" name="vaccum_notification_requirement"  value="{{ isset($jqr_package_testing->vaccum_notification_requirement) ? $jqr_package_testing->vaccum_notification_requirement : '' }}"  class="form-control" placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="twitter1">Level</label>
                                            <input type="text" id="twitter1" name="level" class="form-control" value="{{ isset($jqr_package_testing->level) ? $jqr_package_testing->level : '' }}" placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="twitter1">Duration At Level</label>
                                            <input type="text" id="twitter1" name="duration_at_level" class="form-control" value="{{ isset($jqr_package_testing->duration_at_level) ? $jqr_package_testing->duration_at_level : '' }}" placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="twitter1">Vaccum Notes</label>
                                            <textarea class="form-control" name="vaccum_notes" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_package_testing->vaccum_notes) ? $jqr_package_testing->vaccum_notes : '' }}</textarea>
                                        </div>
                                        <!-- Vaccum Ends -->
                                        <label class="form-check-label" for="deliveryAdd">
                                            Purge/Charge
                                        </label>
                                        <hr>
                                        <!-- Purge/Charge -->
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="purge_charge" {{ isset($jqr_package_testing->purge_charge) && $jqr_package_testing->purge_charge == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Purge/Charge</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="twitter1">Purge/Charge Pressure</label>
                                            <input type="text" id="twitter1" name="purge_charge_pressure" class="form-control" value="{{ isset($jqr_package_testing->purge_charge_pressure) ? $jqr_package_testing->purge_charge_pressure : '' }}" placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="twitter1">Purge/Charge Medium</label>
                                            <input type="text" id="twitter1" name="purge_charge_medium" class="form-control" value="{{ isset($jqr_package_testing->purge_charge_medium) ? $jqr_package_testing->purge_charge_medium : '' }}" placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="twitter1">Purge/Charge Notes</label>
                                            <textarea class="form-control" name="purge_charge_notes" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_package_testing->purge_charge_notes) ? $jqr_package_testing->purge_charge_notes : '' }}</textarea>
                                        </div>
                                        <!-- Purge/Charge Ends -->
                                        <label class="form-check-label" for="deliveryAdd">
                                            Lube Oil Flush
                                        </label>
                                        <hr>
                                        <!-- Lube Oil Flush -->
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="lube_oil_flush"  {{ isset($jqr_package_testing->lube_oil_flush) && $jqr_package_testing->lube_oil_flush == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Lube Oil Flush</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="lube_oil_flush_customer_third_party_witness_required" {{ isset($jqr_package_testing->lube_oil_flush_customer_third_party_witness_required) && $jqr_package_testing->lube_oil_flush_customer_third_party_witness_required == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Lube Oil Flush Customer/Third Party Witness
                                                    Required</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="twitter1">Lube Oil Flush Notification
                                                Requirement</label>
                                            <input type="text" id="twitter1" name="lube_oil_flush_notification_requirement"
                                            value="{{ isset($jqr_package_testing->lube_oil_flush_notification_requirement) ? $jqr_package_testing->lube_oil_flush_notification_requirement : '' }}" class="form-control" placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="twitter1">Lube Oil Flush Notes</label>
                                            <textarea class="form-control" name="lube_oil_flush_notes" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_package_testing->lube_oil_flush_notes) ? $jqr_package_testing->lube_oil_flush_notes : '' }}</textarea>
                                        </div>
                                        <!-- Lube Oil Flush Ends -->
                                        <label class="form-check-label" for="deliveryAdd">
                                            Run Test
                                        </label>
                                        <hr>
                                        <!-- Run Test -->
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="run_test" {{ isset($jqr_package_testing->run_test) && $jqr_package_testing->run_test == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Run Test</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="run_test_customer_third_party_witness_required" {{ isset($jqr_package_testing->run_test_customer_third_party_witness_required) && $jqr_package_testing->run_test_customer_third_party_witness_required == '1' ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Run Test Customer/Third Party Witness
                                                    Required</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="twitter1">Run Test Notification
                                                Requirement</label>
                                            <input type="text" id="twitter1" name="run_test_notification_requirement" value="{{ isset($jqr_package_testing->run_test_notification_requirement) ? $jqr_package_testing->run_test_notification_requirement : '' }}" class="form-control" placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label">Run Test Requirement</label>
                                            <div class="form-check form-check-inline mt-3">
                                                <input class="form-check-input" name="run_test_requirement[]" type="checkbox" id="inlineCheckbox1"
                                                    value="1"
                                                    {{ isset($jqr_package_testing_run_test_requirements) && in_array('1', $jqr_package_testing_run_test_requirements) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="inlineCheckbox1">Loaded</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="run_test_requirement[]" type="checkbox" id="inlineCheckbox2"
                                                    value="2"
                                                    {{ isset($jqr_package_testing_run_test_requirements) && in_array('2', $jqr_package_testing_run_test_requirements) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="inlineCheckbox2">No Load</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="twitter1">Run Test Duration</label>
                                            <input type="text" id="twitter1" name="run_test_duration" value="{{ isset($jqr_package_testing->run_test_duration) ? $jqr_package_testing->run_test_duration : '' }}" class="form-control" placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="twitter1">Run Test Notes</label>
                                            <textarea class="form-control" name="run_test_notes" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_package_testing->run_test_notes) ? $jqr_package_testing->run_test_notes : '' }}</textarea>
                                        </div>
                                        <!-- Run Test Ends -->
                                        <label class="form-check-label" for="deliveryAdd">
                                            Megger Test
                                        </label>
                                        <hr>
                                        <!-- Megger Test -->
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="megger_test" {{ isset($jqr_package_testing->megger_test) && $jqr_package_testing->megger_test == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Megger Test</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="megger_test_customer_third_party_witness_required" {{ isset($jqr_package_testing->megger_test_customer_third_party_witness_required) && $jqr_package_testing->megger_test_customer_third_party_witness_required == '1' ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Megger Test Customer/Third Party Witness
                                                    Required</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="twitter1">Megger Test Notification
                                                Requirement</label>
                                            <input type="text" id="twitter1" name="megger_test_notification_requirement" value="{{ isset($jqr_package_testing->megger_test_notification_requirement) ? $jqr_package_testing->megger_test_notification_requirement : '' }}" class="form-control" placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="twitter1">Megger Test Notes</label>
                                            <textarea class="form-control" name="megger_test_notes" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_package_testing->megger_test_notes) ? $jqr_package_testing->megger_test_notes : '' }}</textarea>
                                        </div>
                                        <!-- Megger Test Ends -->
                                        <label class="form-check-label" for="deliveryAdd">
                                            Fat Test
                                        </label>
                                        <hr>
                                        <!-- Fat Test -->
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="fat_test" {{ isset($jqr_package_testing->fat_test) && $jqr_package_testing->fat_test == '1'? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Fat Test</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="fat_test_customer_third_party_witness_required" {{ isset($jqr_package_testing->fat_test_customer_third_party_witness_required) && $jqr_package_testing->fat_test_customer_third_party_witness_required == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Fat Test Customer/Third Party Witness
                                                    Required</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="twitter1">Fat Test Notification
                                                Requirement</label>
                                            <input type="text" id="twitter1" name="fat_test_notification_requirement" class="form-control" value="{{ isset($jqr_package_testing->fat_test_notification_requirement) ? $jqr_package_testing->fat_test_notification_requirement : '' }}"  placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="twitter1">Fat Test Requirement</label>
                                            <input type="text" id="twitter1" name="fat_test_requirement" class="form-control" value="{{ isset($jqr_package_testing->fat_test_requirement) ? $jqr_package_testing->fat_test_requirement : '' }}" placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="twitter1">Fat Test Notes</label>
                                            <textarea class="form-control" name="fat_test_notes" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_package_testing->fat_test_notes) ? $jqr_package_testing->fat_test_notes : '' }}</textarea>
                                        </div>
                                        <div class="col-sm-6"></div>
                                        <!-- Fat Test Ends -->
                                        <label class="form-check-label" for="deliveryAdd">
                                            Additional Testing
                                        </label>
                                        <hr>
                                        <!-- Additional Testing -->
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="additional_testing" {{ isset($jqr_package_testing->additional_testing) && $jqr_package_testing->additional_testing == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Additional Testing</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="additional_testing_customer_third_party_witness_required"  {{ isset($jqr_package_testing->additional_testing_customer_third_party_witness_required) && $jqr_package_testing->additional_testing_customer_third_party_witness_required == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Additional Testing Customer/Third Party
                                                    Witness Required</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="twitter1">Additional Testing Notification
                                                Requirement</label>
                                            <input type="text" id="twitter1" name="additional_testing_notification_requirement" value="{{ isset($jqr_package_testing->additional_testing_notification_requirement) ? $jqr_package_testing->additional_testing_notification_requirement : '' }}" class="form-control" placeholder="" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="twitter1">Additional Testing
                                                Test/Requirements</label>
                                            <input type="text" id="twitter1" name="additional_testing_test_requirement" class="form-control" value="{{ isset($jqr_package_testing->additional_testing_test_requirement) ? $jqr_package_testing->additional_testing_test_requirement : '' }}" placeholder="" />
                                        </div>
                                        <!-- Additional Testing Ends -->
                                        <hr>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="addendum_purchasing_specifications" {{ isset($jqr_package_testing->addendum_purchasing_specifications) && $jqr_package_testing->addendum_purchasing_specifications == '1' ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Addendum Purchasing Specifications</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="addendum_purchasing_specifications_complete" {{ isset($jqr_package_testing->addendum_purchasing_specifications_complete) && $jqr_package_testing->addendum_purchasing_specifications_complete == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Addendum Purchasing Specifications
                                                    Complete</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="twitter1">Addendum Purchasing Specifications
                                                Notes</label>
                                            <textarea class="form-control" name="addendum_purchasing_specifications_notes" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_package_testing->addendum_purchasing_specifications_notes) ? $jqr_package_testing->addendum_purchasing_specifications_notes : '' }}</textarea>
                                        </div>
                                        <div class="col-sm-6"></div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="addendum_manufacturing_specifications"  {{ isset($jqr_package_testing->addendum_manufacturing_specifications) && $jqr_package_testing->addendum_manufacturing_specifications == '1' ? 'checked': '' }} >
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Addendum Manufacturing Specifications</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="addendum_manufacturing_specifications_complete" {{ isset($jqr_package_testing->addendum_manufacturing_specifications_complete) && $jqr_package_testing->addendum_manufacturing_specifications == '1' ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Addendum Manufacturing Specifications
                                                    Complete</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="twitter1">Addendum Manufacturing
                                                Specifications Notes</label>
                                            <textarea class="form-control" name="addendum_manufacturing_specifications_notes" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr_package_testing->addendum_manufacturing_specifications_notes) ? $jqr_package_testing->addendum_manufacturing_specifications_notes : '' }}</textarea>
                                        </div>
                                        <!-- Action Buttons -->
                                        <div class="pt-4">
                                            <div class="row justify-content-end">
                                                <div class="col-sm-9">
                                                    <button class="btn btn-label-secondary btn-prev me-sm-3 me-1">
                                                        <i class="ti ti-arrow-left me-sm-1"></i>
                                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                    </button>
                                                    <button type="button" onclick="submitPackageTestingData(true)"
                                                        class="btn btn-success waves-effect waves-light me-sm-3 me-1"><i
                                                            class="ti ti-check"></i>Finish</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Action Buttons Ends -->
                                    </div>
                                    <input type="hidden" class="form_Package" name="id" value="{{ isset($jqr_package_testing->id) ? $jqr_package_testing->id : '' }}">
                                    <input type="hidden" class="form_id_bd" name="basic_details_id" value="{{ isset($jqr->id) ? $jqr->id : '' }}">
                                </form>
                            </div>
                            <!-- Package Testing Ends -->
                            <!-- </form> -->
                        </div>
                    </div>
                </div>
                <!-- /Vertical Icons Wizard -->
            </div>
            <hr class="container-m-nx mb-5" />
        </div>
        <input type="hidden" name="doc-statuses" id="docStatuses" value="{{ isset($doc_statuses) ? json_encode($doc_statuses) : '' }}">
        <!-- / Content -->
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
    <!-- Basic Details Modal -->
    <div class="modal fade" id="basicDetailsModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Basic Details</h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row row g-4">
                        <div class="col mb-0">
                            <label for="nameBasic" class="form-label">Job ID/Number</label>
                            <input type="text" id="jobNumber" class="form-control" value="{{ isset($jqr->job_number) ? $jqr->job_number : ''}}" disabled readonly/>
                        </div>
                        <div class="col mb-0">
                            <label for="nameBasic" class="form-label">Job Name</label>
                            <input type="text" id="jobName" class="form-control" value="{{ isset($jqr->job_name) ? $jqr->job_name : ''}}" disabled readonly/>
                        </div>
                    </div>
                    <div class="row row g-4">
                        <div class="col mb-0">
                            <label for="nameBasic" class="form-label">Release Date</label>
                            <input type="text" id="releaseDate" class="form-control" value="{{ isset($jqr->release_date) ? $jqr->release_date : ''}}" disabled readonly/>
                        </div>
                        <div class="col mb-0">
                            <label for="nameBasic" class="form-label">Due Date As Per PO</label>
                            <input type="text" id="dueDateAsperPo" class="form-control" value="{{ isset($jqr->due_date) ? $jqr->due_date : ''}}" disabled readonly/>
                        </div>
                    </div>
                    <div class="row row g-4">
                        <div class="col mb-0">
                            <label for="nameBasic" class="form-label">Date Purchase Order</label>
                            <input type="text" id="datePurchaseOrder" class="form-control" value="{{ isset($jqr->customer_order_purchase_date) ? $jqr->customer_order_purchase_date : ''}}" disabled readonly/>
                        </div>
                        <div class="col mb-0">
                            <label for="nameBasic" class="form-label">FAB Start Date</label>
                            <input type="text" id="fabStartDate" class="form-control" value="{{ isset($jqr->fab_start_date) ? $jqr->fab_start_date : ''}}" disabled readonly/>
                        </div>
                    </div>
                    <div class="row row g-4">
                        <div class="col mb-0">
                            <label for="nameBasic" class="form-label">Scheduled Test Date</label>
                            <input type="text" id="scheduledTestDate" class="form-control" value="{{ isset($jqr->scheduled_test_date) ? $jqr->scheduled_test_date : ''}}" disabled readonly/>
                        </div>
                        <div class="col mb-0">
                            <label for="nameBasic" class="form-label">Document Deliverables Due Date</label>
                            <input type="text" id="documentDeliverablesDueDate" class="form-control" value="{{ isset($jqr->document_deliverables_due_date) ? $jqr->document_deliverables_due_date : ''}}" disabled readonly/>
                        </div>
                    </div>
                    <div class="row row g-4">
                        <div class="col mb-0">
                            <label for="nameBasic" class="form-label">JQR Revision Date</label>
                            <input type="text" id="jqrRevisionDate" class="form-control" value="{{ isset($jqr->jqr_revision_date) ? $jqr->jqr_revision_date : ''}}" disabled readonly/>
                        </div>
                        <div class="col mb-0">
                            <label for="nameBasic" class="form-label">Job Revision Number</label>
                            <input type="text" id="jobRevisionNumber" class="form-control" value="{{ isset($jqr->job_revision_number) ? $jqr->job_revision_number : ''}}" disabled readonly/>
                        </div>
                    </div>
                    <div class="row row g-4">
                        <div class="col mb-0">
                            <label for="nameBasic" class="form-label">Production Number</label>
                            <input type="text" id="productionNumber" class="form-control" value="{{ isset($jqr->production_number) ? $jqr->production_number : ''}}" disabled readonly/>
                        </div>
                        <div class="col mb-0">
                            <label for="nameBasic" class="form-label">Form Number</label>
                            <input type="text" id="formNumber" class="form-control" value="{{ isset($jqr->form_number) ? $jqr->form_number : ''}}" disabled readonly/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Basic Details Modal Ends -->
</x-app-layout>
<script>
// Vertical Icons Wizard
// --------------------------------------------------------------------
const wizardIconsVertical = document.querySelector('.wizard-vertical-icons-example');

if (typeof wizardIconsVertical !== undefined && wizardIconsVertical !== null) {
    const wizardIconsVerticalBtnNextList = [].slice.call(wizardIconsVertical.querySelectorAll('.btn-next')),
        wizardIconsVerticalBtnPrevList = [].slice.call(wizardIconsVertical.querySelectorAll('.btn-prev')),
        wizardIconsVerticalBtnSubmit = wizardIconsVertical.querySelector('.btn-submit');

    const verticalIconsStepper = new Stepper(wizardIconsVertical, {
        linear: false
    });

    if (wizardIconsVerticalBtnNextList) {
        wizardIconsVerticalBtnNextList.forEach(wizardIconsVerticalBtnNext => {
            wizardIconsVerticalBtnNext.addEventListener('click', event => {
                // Check if there's a validation error in the company logo field
                if ($('#job_number').val() != '' && $('#scheduled_test_date').val() != '' 
                && $('#job_revision_number').val() != '' && $('#no_of_modules').val() != '') {
                    verticalIconsStepper.next();
                }
            });
        });
    }
    if (wizardIconsVerticalBtnPrevList) {
        wizardIconsVerticalBtnPrevList.forEach(wizardIconsVerticalBtnPrev => {
            wizardIconsVerticalBtnPrev.addEventListener('click', event => {
                verticalIconsStepper.previous();
            });
        });
    }
    if (wizardIconsVerticalBtnSubmit) {
        wizardIconsVerticalBtnSubmit.addEventListener('click', event => {
            // alert('Submitted..!!');
        });
    }
}

// Setting Doc Status Labels
$(document).ready(function() {
    function updateBadge(element) {
        // Get the selected value
        let selectedStatusText = element.find('option:selected').text();
        let selectedStatusValue = element.val();
        let nextTd = element.closest('td').next('td');
        // Get the class of the span inside the next 'td'
        let lastTdClass = nextTd.find('span').attr('class');
            
        // Split the classes to remove the old background class
        if (lastTdClass) {
            nextTd.find('span').removeClass(lastTdClass.split(' ')[1]);
        }

        if (selectedStatusValue == 0) {
            nextTd.find('span').text("None");
        } else {
            // Update the corresponding span
            nextTd.find('span').text(selectedStatusText);
        }

        // Apply new class based on selected value
        switch(selectedStatusText) {
            case 'DD Completed':
                nextTd.find('span').addClass('bg-success');
                break;
            case 'Shop Complete':
                nextTd.find('span').addClass('bg-warning');
                break;
            case 'Attention':
                nextTd.find('span').addClass('bg-danger');
                break;
            case 'Rework':
                nextTd.find('span').addClass('bg-primary');
                break;
            case 'Review':
                nextTd.find('span').addClass('bg-info');
                break;
            case 'Outsourced':
                nextTd.find('span').addClass('bg-dark');
                break;
            case 'None':
                nextTd.find('span').addClass('bg-secondary');
                break;
            default:
                nextTd.find('span').addClass('bg-secondary');
                break;
        }
    }

    // Event listener for dropdown changes
    $('.doc-status').on('change', function() {
        updateBadge($(this));
    });

    // Trigger change event on page load for edit page
    $('.doc-status').each(function() {
        if ($(this).val() !== null && $(this).val() !== '') {
            updateBadge($(this));
        }
    });

    let docStatusesJson = $('#docStatuses').val();
    // Parse the JSON string into a JavaScript object
    if (docStatusesJson) {
        let docStatuses = JSON.parse(docStatusesJson);
        updateDocStatuses(docStatuses);
    }

    // Function to update the input field based on dropdown selection
    function updateInputField() {
        $('.nde-req-dropdown').each(function() {
            var selectedCode = $(this).find('option:selected').data('code'); // Get the selected code
            var codeInput = $(this).closest('.col-md-6').siblings('.col-sm-6').find('.nde-req-code-input'); // Find the related input field
            if (typeof selectedCode !== 'undefined') {
                codeInput.val(selectedCode); // Update the related input field
            } else {
                codeInput.val('No Code Available'); // Clear the input if no code is available
            }
        });
    }

    // Call the function on page load to populate all input fields
    updateInputField();

    // Bind the change event to update input fields when dropdown changes
    $('.nde-req-dropdown').on('change', function() {
        var selectedCode = $(this).find('option:selected').data('code'); // Get the selected code
        var codeInput = $(this).closest('.col-md-6').siblings('.col-sm-6').find('.nde-req-code-input'); // Find the related input field
        if (typeof selectedCode !== 'undefined') {
            codeInput.val(selectedCode); // Update the related input field
        } else {
            codeInput.val('No Code Available'); // Clear the input if no code is available
        }
    });
});

// Validation Sections FOr Basic Details
$('#jobnumberValidation').hide();
$('#noOfModulesValidation').hide();
$('#jobRevisionNumberValidation').hide();
$('#scheduledTestDateValidation').hide();
$('#companyLogoValidation').hide();

// Disabling sections on page load
if ($('.form_id_bd').val() == '') {
    $('.step').css('pointer-events', 'none');
}

function updateDocStatuses(statuses) {
    if (statuses) {
        // Define an object mapping status keys to class names
        const statusClassMap = {
            mtrs: 'mtrs-status',
            nde: 'nde-status',
            hydro: 'hydro-status',
            heat_map: 'heat-map-status',
            weld_map: 'weld-map-status'
        };

        // Loop through each status key
        for (const [key, className] of Object.entries(statusClassMap)) {
            // Get the element for the current status
            let element = $('.' + className);
            let classList = element.attr('class').split(' ');
            
            // Remove the old status class
            if (classList.length > 1) {
                element.removeClass(classList.find(cls => cls.startsWith('alert-')));
            }

            // Get the selected status for the current key
            let selectedStatus = statuses[key];

            // Check if the status is empty and update accordingly
            if (!selectedStatus || selectedStatus.trim() === '') {
                element.text('None');
                element.addClass('alert-dark');
            } else {
                element.text(selectedStatus);
                // Add the new class based on the selected status
                switch (selectedStatus) {
                    case 'DD Completed':
                        element.addClass('alert-success');
                        break;
                    case 'Shop Complete':
                        element.addClass('alert-warning');
                        break;
                    case 'Attention':
                        element.addClass('alert-danger');
                        break;
                    case 'Rework':
                        element.addClass('alert-primary');
                        break;
                    case 'Review':
                        element.addClass('alert-info');
                        break;
                    case 'Outsourced':
                        element.addClass('alert-dark');
                        break;
                    default:
                        element.addClass('alert-secondary');
                        break;
                }
            }
        }
    }
}

// Submit Basic Data
function submitData(reloadFlag) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    
	var formData = new FormData($('#basic_details_from')[0]); // Create a FormData object
	$.ajax({
		method: 'POST',
		url: '/admin/job-quality-requirements/saveData',
		data: formData,
		contentType: false, // Important: prevent jQuery from automatically processing the data
		processData: false, // Important: tell jQuery not to process the data
		success: function(response) {
			// Enabling sections after first save
			$('.step').css('pointer-events', 'auto');
			if (response.status == true) {
                if (response.jqr) {
                    // Setting values to the basic details modal
                    $('#jobNumber').val(response.jqr.job_number ? response.jqr.job_number: '');
                    $('#jobName').val(response.jqr.job_name ? response.jqr.job_name : '');
                    $('#releaseDate').val(response.jqr.release_date ? response.jqr.release_date : '');
                    $('#dueDateAsperPo').val(response.jqr.due_date ? response.jqr.due_date : '');
                    $('#datePurchaseOrder').val(response.jqr.customer_order_purchase_date ? response.jqr.customer_order_purchase_date : '');
                    $('#fabStartDate').val(response.jqr.fab_start_date ? response.jqr.fab_start_date : '');
                    $('#scheduledTestDate').val(response.jqr.scheduled_test_date ? response.jqr.scheduled_test_date : '');
                    $('#documentDeliverablesDueDate').val(response.jqr.document_deliverables_due_date ? response.jqr.document_deliverables_due_date : '');
                    $('#jqrRevisionDate').val(response.jqr.jqr_revision_date ? response.jqr.jqr_revision_date : '');
                    $('#jobRevisionNumber').val(response.jqr.job_revision_number ? response.jqr.job_revision_number : '');
                    $('#productionNumber').val(response.jqr.production_number ? response.jqr.production_number : '');
                    $('#formNumber').val(response.jqr.form_number ? response.jqr.form_number : '');
                }
				$('.form_id_bd').val(response.id);
				if (reloadFlag == true) {
					window.location.href = response.redirect;
				} else {
                    updateDocStatuses(response.doc_statuses);
                }
			}
		},
		error: function(response) {
			// Handle errors if needed
			let errors = response.responseJSON.errors;
			if (errors) {
				let jobnumberMessage = errors.job_number ? errors.job_number[0] : '';
				if (jobnumberMessage) {
					$('#jobnumberValidation').prepend(jobnumberMessage + '<br>');
					$('#jobnumberValidation').show();
				}

				let noOfModulesMessage = errors.no_of_modules ? errors.no_of_modules[0] : '';
				if (noOfModulesMessage) {
					$('#noOfModulesValidation').prepend(noOfModulesMessage + '<br>');
					$('#noOfModulesValidation').show();
				}

				let jobRevisionNumberMessage = errors.job_revision_number ? errors.job_revision_number[0] : '';
				if (jobRevisionNumberMessage) {
					$('#jobRevisionNumberValidation').prepend(jobRevisionNumberMessage + '<br>');
					$('#jobRevisionNumberValidation').show();
				}

				let scheduledTestDateMessage = errors.scheduled_test_date ? errors.scheduled_test_date[0] : '';
				if (jobRevisionNumberMessage) {
					$('#scheduledTestDateValidation').prepend(scheduledTestDateMessage + '<br>');
					$('#scheduledTestDateValidation').show();
				}
                let companyLogoMessage = errors.company_logo ? errors.company_logo[0] : '';
				if (jobRevisionNumberMessage) {
					$('#companyLogoValidation').prepend(companyLogoMessage + '<br>');
					$('#companyLogoValidation').show();
				}
			}
		}
	});
}

// Submit Special Data
function submitSpecialData(reloadFlag) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    var formData = $('#special_material_from').serialize();
    $.ajax({
        method: 'POST',
        url: '/admin/job-quality-requirements/saveSpecialData',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.status == true) {
                $('.special_id').val(response.id);
                if (reloadFlag == true) {
                    window.location.href = response.redirect;
                }
            }
        },
        error: function(xhr, status, error) {
            // Handle errors if needed
            console.error(xhr.responseText);
        }
    });
}


// Submit Special Data
function submitGeneralInfoData(reloadFlag) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    var formData = $('#general_info_from').serialize();
    $.ajax({
        method: 'POST',
        url: '/admin/job-quality-requirements/saveGeneralData',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.status == true) {
                if (response.jqr) {
                    // Setting values to the basic details modal
                    $('#jobNumber').val(response.jqr.job_number ? response.jqr.job_number: '');
                    $('#jobName').val(response.jqr.job_name ? response.jqr.job_name : '');
                    $('#releaseDate').val(response.jqr.release_date ? response.jqr.release_date : '');
                    $('#dueDateAsperPo').val(response.jqr.due_date ? response.jqr.due_date : '');
                    $('#datePurchaseOrder').val(response.jqr.customer_order_purchase_date ? response.jqr.customer_order_purchase_date : '');
                    $('#fabStartDate').val(response.jqr.fab_start_date ? response.jqr.fab_start_date : '');
                    $('#scheduledTestDate').val(response.jqr.scheduled_test_date ? response.jqr.scheduled_test_date : '');
                    $('#documentDeliverablesDueDate').val(response.jqr.document_deliverables_due_date ? response.jqr.document_deliverables_due_date : '');
                    $('#jqrRevisionDate').val(response.jqr.jqr_revision_date ? response.jqr.jqr_revision_date : '');
                    $('#jobRevisionNumber').val(response.jqr.job_revision_number ? response.jqr.job_revision_number : '');
                    $('#productionNumber').val(response.jqr.production_number ? response.jqr.production_number : '');
                    $('#formNumber').val(response.jqr.form_number ? response.jqr.form_number : '');
                }
                $('.form_general_bd').val(response.id);
                if (reloadFlag == true) {
                    window.location.href = response.redirect;
                }
            }
        },
        error: function(xhr, status, error) {
            // Handle errors if needed
            console.error(xhr.responseText);
        }
    });
}

// Service Data
function submitServiceInfoData(reloadFlag) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    var formData = $('#service_info_from').serialize();
    $.ajax({
        method: 'POST',
        url: '/admin/job-quality-requirements/saveServiceData',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.status == true) {
                $('.form_general_info').val(response.id);
                if (reloadFlag == true) {
                    window.location.href = response.redirect;
                }
            }
        },
        error: function(xhr, status, error) {
            // Handle errors if needed
            console.error(xhr.responseText);
        }
    });
}

// Structural Skid
function submitStructuralSkidData(reloadFlag) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    var formData = $('#structural_skid_from').serialize();
    $.ajax({
        method: 'POST',
        url: '/admin/job-quality-requirements/saveStructuralSkidData',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.status == true) {
                $('.form_Structural_info').val(response.id);
                if (reloadFlag == true) {
                    window.location.href = response.redirect;
                }
            }
        },
        error: function(xhr, status, error) {
            // Handle errors if needed
            console.error(xhr.responseText);
        }
    });
}

// Pressure Vessels
function submitPressureVesselsData(reloadFlag) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    var formData = $('#pressure_vessels_from').serialize();
    $.ajax({
        method: 'POST',
        url: '/admin/job-quality-requirements/savePressureVesselsData',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.status == true) {
                $('.form_Pressure_Vessels').val(response.id);
                if (reloadFlag == true) {
                    if (response.jqr) {
                        // Setting values to the basic details modal
                        $('#jobNumber').val(response.jqr.job_number ? response.jqr.job_number: '');
                        $('#jobName').val(response.jqr.job_name ? response.jqr.job_name : '');
                        $('#releaseDate').val(response.jqr.release_date ? response.jqr.release_date : '');
                        $('#dueDateAsperPo').val(response.jqr.due_date ? response.jqr.due_date : '');
                        $('#datePurchaseOrder').val(response.jqr.customer_order_purchase_date ? response.jqr.customer_order_purchase_date : '');
                        $('#fabStartDate').val(response.jqr.fab_start_date ? response.jqr.fab_start_date : '');
                        $('#scheduledTestDate').val(response.jqr.scheduled_test_date ? response.jqr.scheduled_test_date : '');
                        $('#documentDeliverablesDueDate').val(response.jqr.document_deliverables_due_date ? response.jqr.document_deliverables_due_date : '');
                        $('#jqrRevisionDate').val(response.jqr.jqr_revision_date ? response.jqr.jqr_revision_date : '');
                        $('#jobRevisionNumber').val(response.jqr.job_revision_number ? response.jqr.job_revision_number : '');
                        $('#productionNumber').val(response.jqr.production_number ? response.jqr.production_number : '');
                        $('#formNumber').val(response.jqr.form_number ? response.jqr.form_number : '');
                    }
                    window.location.href = response.redirect;
                }
            }
        },
        error: function(xhr, status, error) {
            // Handle errors if needed
            console.error(xhr.responseText);
        }
    });
}

//Non Code Vessels/Tanks
function submitNoCodeVesselsData(reloadFlag) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    var formData = $('#non_code_vessels_from').serialize();
    $.ajax({
        method: 'POST',
        url: '/admin/job-quality-requirements/saveNoCodeVesselsData',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.status == true) {
                $('.form_Non_code').val(response.id);
                if (reloadFlag == true) {
                    if (response.jqr) {
                        // Setting values to the basic details modal
                        $('#jobNumber').val(response.jqr.job_number ? response.jqr.job_number: '');
                        $('#jobName').val(response.jqr.job_name ? response.jqr.job_name : '');
                        $('#releaseDate').val(response.jqr.release_date ? response.jqr.release_date : '');
                        $('#dueDateAsperPo').val(response.jqr.due_date ? response.jqr.due_date : '');
                        $('#datePurchaseOrder').val(response.jqr.customer_order_purchase_date ? response.jqr.customer_order_purchase_date : '');
                        $('#fabStartDate').val(response.jqr.fab_start_date ? response.jqr.fab_start_date : '');
                        $('#scheduledTestDate').val(response.jqr.scheduled_test_date ? response.jqr.scheduled_test_date : '');
                        $('#documentDeliverablesDueDate').val(response.jqr.document_deliverables_due_date ? response.jqr.document_deliverables_due_date : '');
                        $('#jqrRevisionDate').val(response.jqr.jqr_revision_date ? response.jqr.jqr_revision_date : '');
                        $('#jobRevisionNumber').val(response.jqr.job_revision_number ? response.jqr.job_revision_number : '');
                        $('#productionNumber').val(response.jqr.production_number ? response.jqr.production_number : '');
                        $('#formNumber').val(response.jqr.form_number ? response.jqr.form_number : '');
                    }
                    window.location.href = response.redirect;
                }
            }
        },
        error: function(xhr, status, error) {
            // Handle errors if needed
            console.error(xhr.responseText);
        }
    });
}

//Process/Fuel Gas/Start Gas Piping
function submitProcessPipingData(reloadFlag) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    var formData = $('#process_piping_from').serialize();
    $.ajax({
        method: 'POST',
        url: '/admin/job-quality-requirements/saveProcessPipingData',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.status == true) {
                $('.form_Process_Fuel').val(response.id);
                if (reloadFlag == true) {
                    if (response.jqr) {
                        // Setting values to the basic details modal
                        $('#jobNumber').val(response.jqr.job_number ? response.jqr.job_number: '');
                        $('#jobName').val(response.jqr.job_name ? response.jqr.job_name : '');
                        $('#releaseDate').val(response.jqr.release_date ? response.jqr.release_date : '');
                        $('#dueDateAsperPo').val(response.jqr.due_date ? response.jqr.due_date : '');
                        $('#datePurchaseOrder').val(response.jqr.customer_order_purchase_date ? response.jqr.customer_order_purchase_date : '');
                        $('#fabStartDate').val(response.jqr.fab_start_date ? response.jqr.fab_start_date : '');
                        $('#scheduledTestDate').val(response.jqr.scheduled_test_date ? response.jqr.scheduled_test_date : '');
                        $('#documentDeliverablesDueDate').val(response.jqr.document_deliverables_due_date ? response.jqr.document_deliverables_due_date : '');
                        $('#jqrRevisionDate').val(response.jqr.jqr_revision_date ? response.jqr.jqr_revision_date : '');
                        $('#jobRevisionNumber').val(response.jqr.job_revision_number ? response.jqr.job_revision_number : '');
                        $('#productionNumber').val(response.jqr.production_number ? response.jqr.production_number : '');
                        $('#formNumber').val(response.jqr.form_number ? response.jqr.form_number : '');
                    }
                    window.location.href = response.redirect;
                }
            }
        },
        error: function(xhr, status, error) {
            // Handle errors if needed
            console.error(xhr.responseText);
        }
    });
}

//Bolting
function submitBoltingData(reloadFlag) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    var formData = $('#bolting_from').serialize();
    $.ajax({
        method: 'POST',
        url: '/admin/job-quality-requirements/saveBoltingData',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.status == true) {
                $('.form_Bolting').val(response.id);
                if (reloadFlag == true) {
                    window.location.href = response.redirect;
                }
            }
        },
        error: function(xhr, status, error) {
            // Handle errors if needed
            console.error(xhr.responseText);
        }
    });
}

//Gaskets
function submitGasketsData(reloadFlag) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    var formData = $('#gaskets_from').serialize();
    $.ajax({
        method: 'POST',
        url: '/admin/job-quality-requirements/saveGasketsData',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.status == true) {
                $('.form_Gaskets').val(response.id);
                if (reloadFlag == true) {
                    window.location.href = response.redirect;
                }
            }
        },
        error: function(xhr, status, error) {
            // Handle errors if needed
            console.error(xhr.responseText);
        }
    });
}

//Tubing
function submitTubingData(reloadFlag) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    var formData = $('#tubing_from').serialize();
    $.ajax({
        method: 'POST',
        url: '/admin/job-quality-requirements/saveTubingData',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.status == true) {
                $('.form_Tubing').val(response.id);
                if (reloadFlag == true) {
                    window.location.href = response.redirect;
                }
            }
        },
        error: function(xhr, status, error) {
            // Handle errors if needed
            console.error(xhr.responseText);
        }
    });
}

//Butt welded
function submitButtPipingData(reloadFlag) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    var formData = $('#butt_piping_from').serialize();
    $.ajax({
        method: 'POST',
        url: '/admin/job-quality-requirements/saveButtPipingData',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.status == true) {
                $('.form_Butt').val(response.id);
                if (reloadFlag == true) {
                    window.location.href = response.redirect;
                }
            }
        },
        error: function(xhr, status, error) {
            // Handle errors if needed
            console.error(xhr.responseText);
        }
    });
}

// Threaded Piping
function submitThreadedPipingData(reloadFlag) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    var formData = $('#threaded_piping_from').serialize();
    $.ajax({
        method: 'POST',
        url: '/admin/job-quality-requirements/saveThreadedPipingData',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.status == true) {
                $('.form_Threaded').val(response.id);
                if (reloadFlag == true) {
                    window.location.href = response.redirect;
                }
            }
        },
        error: function(xhr, status, error) {
            // Handle errors if needed
            console.error(xhr.responseText);
        }
    });
}

// Electrical
function submitElectricalData(reloadFlag) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    var formData = $('#electrical_from').serialize();
    $.ajax({
        method: 'POST',
        url: '/admin/job-quality-requirements/saveElectricalData',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.status == true) {
                $('.form_Electrical').val(response.id);
                if (reloadFlag == true) {
                    window.location.href = response.redirect;
                }
            }
        },
        error: function(xhr, status, error) {
            // Handle errors if needed
            console.error(xhr.responseText);
        }
    });
}

// Preservation
function submitPreservationData(reloadFlag) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    var formData = $('#preservation_from').serialize();
    $.ajax({
        method: 'POST',
        url: '/admin/job-quality-requirements/savePreservationData',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.status == true) {
                $('.form_Preservation').val(response.id);
                if (reloadFlag == true) {
                    window.location.href = response.redirect;
                }
            }
        },
        error: function(xhr, status, error) {
            // Handle errors if needed
            console.error(xhr.responseText);
        }
    });
}

// PackageTesting
function submitPackageTestingData(reloadFlag) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    var formData = $('#package_testing_from').serialize();
    $.ajax({
        method: 'POST',
        url: '/admin/job-quality-requirements/savePackageTestingData',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.status == true) {
                $('.form_Package').val(response.id);
                if (reloadFlag == true) {
                    window.location.href = response.redirect;
                }
            }
        },
        error: function(xhr, status, error) {
            // Handle errors if needed
            console.error(xhr.responseText);
        }
    });
}
</script>
