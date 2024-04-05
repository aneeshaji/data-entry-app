<x-app-layout>
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Job Quality Requirements / </span> Create
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
                                        <span class="bs-stepper-subtitle">Add Basic Project Details</span>
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
                                        <span class="bs-stepper-subtitle">Add special material <br> requirements</span>
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
                                        <span class="bs-stepper-subtitle">Add general information</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#social-links-vertical">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="ti ti-server-cog"></i> </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Service Information</span>
                                        <span class="bs-stepper-subtitle">Add service information</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#social-links-vertical1">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="ti ti-adjustments-horizontal"></i> </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Structural Skid</span>
                                        <span class="bs-stepper-subtitle">Add structural skid</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#pressure_vessels">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="ti ti-atom-2"></i> </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Pressure Vessels</span>
                                        <span class="bs-stepper-subtitle">Add pressure vessels</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#non_code_vessels">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="ti ti-alert-square"></i> </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Non Code Vessels/<br>Tanks</span>
                                        <span class="bs-stepper-subtitle">Add non code vessels/<br>Tanks</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#process_fuel_gas_piping">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="ti ti-chart-treemap"></i> </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Process/Fuel/Gas/ <br> Start Gas Piping</span>
                                        <span class="bs-stepper-subtitle">Add process/fuel/gas/ <br> start gas
                                            piping</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#bolting">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="ti ti-bong"></i> </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Bolting</span>
                                        <span class="bs-stepper-subtitle">Add bolting</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#gaskets">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="ti ti-cylinder"></i> </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Gaskets</span>
                                        <span class="bs-stepper-subtitle">Add gaskets</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#tubing">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="ti ti-temperature"></i> </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Tubing</span>
                                        <span class="bs-stepper-subtitle">Add tubing</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#butt_welded">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="ti ti-shield"></i> </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Butt Welded/ <br>Socket Welded/ <br> Utility
                                            Piping</span>
                                        <span class="bs-stepper-subtitle">Add butt welded/<br>socket welded/ <br>
                                            utility piping</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#threaded_piping">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="ti ti-needle-thread"></i> </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Threaded Piping</span>
                                        <span class="bs-stepper-subtitle">Add threaded piping</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#electrical">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="ti ti-circuit-battery"></i> </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Electrical/Instrumentation</span>
                                        <span class="bs-stepper-subtitle">Add electrical/instrumentation</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#preservation">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="ti ti-deselect"></i> </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Preservation</span>
                                        <span class="bs-stepper-subtitle">Add preservation</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line"></div>
                            <div class="step" data-target="#package_testing">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="ti ti-package"></i> </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Package Testing</span>
                                        <span class="bs-stepper-subtitle">Add package testing</span>
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
                                    <small>Enter Basic Project Details.</small>
                                </div>
                                <form onSubmit="return false" id="basic_details_from">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="email1">Job Name</label>
                                            <input type="text" name="job_name" id="job_name" class="form-control"
                                                placeholder="" aria-label=""
                                                value="{{ isset($jqr->job_name) ? $jqr->job_name : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="email1">Stages</label>
                                            <input type="text" id="email1" class="form-control" name="stages"
                                                placeholder="" aria-label=""
                                                value="{{ isset($jqr->stages) ? $jqr->stages : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="email1">Release Date</label>
                                            <input type="date" id="email1" class="form-control" name="release_date"
                                                placeholder="" aria-label=""
                                                value="{{ isset($jqr->release_date) ? $jqr->release_date : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="email1">Due Date</label>
                                            <input type="date" id="email1" name="due_date" class="form-control"
                                                placeholder="" aria-label=""
                                                value="{{ isset($jqr->due_date) ? $jqr->due_date : '' }}" />
                                        </div>
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
                                    <input type="hidden" class="form_id_bd" name="id"
                                        value="{{ isset($jqr->id) ? $jqr->id : '' }}">
                                </form>
                            </div>
                            <!-- Basic Project Details Ends -->
                            <!-- Special Material Requirements -->
                            <div id="special_material" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Special Material Requirements</h6>
                                    <small>Enter special material requirements</small>
                                </div>
                                <form onSubmit="return false" id="special_material_from">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="pipes_and_fittings"
                                                    {{ isset($jqr_special->pipes_and_fittings) ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Pipes & Fittings(400.01)</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="bolting"
                                                    {{ isset($jqr_special->bolting) ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Bolting(400.01)</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="pressure_vessels"
                                                    {{ isset($jqr_special->pressure_vessels) ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Pressure Vessels(400.11)</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="gaskets"
                                                    {{ isset($jqr_special->gaskets) ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Gaskets(400.01)</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="structural_steel"
                                                    {{ isset($jqr_special->structural_steel) ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Structural Steel(410.01)</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input" name="tubing"
                                                    {{ isset($jqr_special->tubing) ? 'checked': '' }}>
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">Tubing(420.01)</span>
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
                                        <input type="hidden" class="form_id_bd" name="id"
                                    value="{{ isset($jqr_special->id) ? $jqr_special->id : '' }}">
                                <input type="hidden" class="basic_details_id" name="basic_details_id"
                                    value="{{ isset($jqr->id) ? $jqr->id : '' }}">
                                </form>
                                </div>

                            </div>
                            <!-- Special Material Requirements Ends -->
                            <!-- General Information -->
                            <div id="personal-info-vertical" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">General Information</h6>
                                    <small>Enter general information</small>
                                </div>
                                <div class="row g-3">
                                    <form onSubmit="return false" id="general_info_from">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="first-name1">Job/Project Number</label>
                                            <input type="text" id="first-name1" class="form-control" placeholder=""
                                                name="job_number"
                                                value="{{ isset($jqr_general_info->job_number) ? $jqr_general_info->job_number : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="last-name1">Cutomer</label>
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
                                        <div class="col-sm-6">
                                            <label class="form-label" for="last-name1">JQR Revision Number</label>
                                            <input type="text" id="last-name1" class="form-control" placeholder=""
                                                name="job_revision_number"
                                                value="{{ isset($jqr_general_info->job_revision_number) ? $jqr_general_info->job_revision_number : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="last-name1">Date Revised</label>
                                            <input type="date" id="last-name1" class="form-control" placeholder=""
                                                name="date_revised"
                                                value="{{ isset($jqr_general_info->date_revised) ? $jqr_general_info->date_revised : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="last-name1">Date Approved By Engineer</label>
                                            <input type="date" id="last-name1" name="date_approved" class="form-control"
                                                placeholder=""
                                                value="{{ isset($jqr_general_info->date_approved) ? $jqr_general_info->date_approved : '' }}" />
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
                                </div>
                                <input type="hidden" class="form_id_bd" name="id"
                                    value="{{ isset($jqr_general_info->id) ? $jqr_general_info->id : '' }}">
                                <input type="hidden" class="" name="basic_details_id"
                                    value="{{ isset($jqr->id) ? $jqr->id : '' }}">
                                </from>
                            </div>
                            <!-- General Information Ends -->
                            <!-- Service Information -->
                            <div id="social-links-vertical" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Service Information</h6>
                                    <small>Enter Service Information.</small>
                                </div>
                                <form onSubmit="return false" id="service_info_from">
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="twitter1">Gas Processed</label>
                                            <input type="text" id="twitter1" class="form-control" placeholder=""
                                            value="{{ isset($jqr->service_info->gas_processed) ? $jqr->service_info->gas_processed : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="facebook1">Application</label>
                                            <input type="text" id="facebook1" class="form-control" placeholder=""
                                            value="{{ isset($jqr->service_info->application) ?$jqr->service_info->application : '' }}"/>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="switch">
                                                <input type="checkbox" class="switch-input">
                                                {{ isset($jqr->service_info->sour_service_required) ? 'checked': '' }}
                                                <span class="switch-toggle-slider">
                                                    <span class="switch-on"></span>
                                                    <span class="switch-off"></span>
                                                </span>
                                                <span class="switch-label">SOUR Service - NACE MR0175 Required</span>
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="facebook1">Other</label>
                                            <input type="text" id="facebook1" class="form-control" placeholder=""
                                            value="{{ isset($jqr->service_info->other) ? $jqr->service_info : '' }}" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="facebook1">Notes</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                rows="3">{{ isset($jqr->service_info->notes) ? $jqr->service_info->notes : '' }}</textarea>
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
                                                    <button class="btn btn-primary btn-next" onclick="submitServiceInfoData(true)">
                                                        <span
                                                            class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                                        <i class="ti ti-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Action Buttons Ends -->
                                    </div>
                                    <input type="hidden" class="form_id_bd" name="id"
                                    value="{{ isset($jqr_general_info->id) ? $jqr_general_info->id : '' }}">
                                    <input type="hidden" class="" name="basic_details_id"
                                    value="{{ isset($jqr->id) ? $jqr->id : '' }}">
                                </form>
                            </div>
                            <!-- Service Information Ends -->
                            <!-- Structural Skid -->
                            <div id="social-links-vertical1" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Structural Skid</h6>
                                    <small>Enter Structural Skid.</small>
                                </div>
                                <div class="row g-3">
                                    <small class="text-light fw-semibold">
                                        * Indicates Special Material Origin Requirements Must Be Checked 'Yes'
                                    </small>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">*Customer/Client AVL Applies</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="twitter1">Material Origin REQS</label>
                                        <input type="text" id="twitter1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
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
                                        <input type="text" id="facebook1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Standard Per Code(NO MTRS)</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">MTRS Required</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Heat Mapping</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Weld Mapping</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="google1">Material Notes</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">NDE Requirements</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">Welding Requirements</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">Governing Code</label>
                                        <input type="text" id="linkedin1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <small class="text-light fw-semibold d-block">PWHT</small>
                                        <div class="form-check form-check-inline mt-3">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">No - EFX
                                                Standard</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">Notes</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                    </div>

                                    <!-- Action Buttons -->
                                    <div class="pt-4">
                                        <div class="row justify-content-end">
                                            <div class="col-sm-9">
                                                <button class="btn btn-label-secondary btn-prev me-sm-3 me-1">
                                                    <i class="ti ti-arrow-left me-sm-1"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-success waves-effect waves-light me-sm-3 me-1"><i
                                                        class="ti ti-check"></i>Save</button>
                                                <button class="btn btn-primary btn-next">
                                                    <span
                                                        class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                                    <i class="ti ti-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Action Buttons Ends -->
                                </div>
                            </div>
                            <!-- Structural Skid Ends -->
                            <!-- Pressure Vessels -->
                            <div id="pressure_vessels" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Pressure Vessels</h6>
                                    <small>Enter Pressure Vessels.</small>
                                </div>
                                <div class="row g-3">
                                    <small class="text-light fw-semibold">
                                        * Indicates Special Material Origin Requirements Must Be Checked 'Yes'
                                    </small>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">*Customer/Client AVL Applies</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="twitter1">Material Origin REQS</label>
                                        <input type="text" id="twitter1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
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
                                        <input type="text" id="facebook1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">MTRS Required(ALL)</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Heat Mapping</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Weld Mapping</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="google1">Material Notes</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">*NACE</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">NDE Requirements</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">Welding Requirements</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">Governing Code</label>
                                        <input type="text" id="linkedin1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <small class="text-light fw-semibold d-block">PWHT</small>
                                        <div class="form-check form-check-inline mt-3">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">No</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio3" value="option3">
                                            <label class="form-check-label" for="inlineRadio3">Per Code REQ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">Hydro Hold Time</label>
                                        <input type="text" id="linkedin1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Witnessed</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Hardness Test</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">Max Hardness</label>
                                        <input type="text" id="linkedin1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Hydro Chart Required</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="google1">Hydro Notes</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">Notes</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <!-- Action Buttons -->
                                    <div class="pt-4">
                                        <div class="row justify-content-end">
                                            <div class="col-sm-9">
                                                <button class="btn btn-label-secondary btn-prev me-sm-3 me-1">
                                                    <i class="ti ti-arrow-left me-sm-1"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-success waves-effect waves-light me-sm-3 me-1"><i
                                                        class="ti ti-check"></i>Save</button>
                                                <button class="btn btn-primary btn-next">
                                                    <span
                                                        class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                                    <i class="ti ti-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Action Buttons Ends -->
                                </div>
                            </div>
                            <!-- Pressure Vessels Ends -->
                            <!-- Non code Vessels -->
                            <div id="non_code_vessels" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Non Code Vessels/Tanks</h6>
                                    <small>Enter Non Code Vessels/Tanks.</small>
                                </div>
                                <div class="row g-3">
                                    <small class="text-light fw-semibold">
                                        * Indicates Special Material Origin Requirements Must Be Checked 'Yes'
                                    </small>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">*Customer/Client AVL Applies</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="twitter1">Material Origin REQS</label>
                                        <input type="text" id="twitter1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">*Origin Traceable To Manufacturer</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
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
                                        <input type="text" id="facebook1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Standard Per Code(NO MTRS)</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">MTRS Required</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Heat Mapping</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Weld Mapping</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="google1">Material Notes</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">*NACE</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">NDE Requirements</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">Welding Requirements</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">Governing Code</label>
                                        <input type="text" id="linkedin1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <small class="text-light fw-semibold d-block">PWHT</small>
                                        <div class="form-check form-check-inline mt-3">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">No</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio3" value="option3">
                                            <label class="form-check-label" for="inlineRadio3">Per Code REQ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">Hydro Hold Time</label>
                                        <input type="text" id="linkedin1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Witnessed</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Hardness Test</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">Max Hardness</label>
                                        <input type="text" id="linkedin1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Hydro Chart Required</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="google1">Hydro Notes</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">Notes</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <!-- Action Buttons -->
                                    <div class="pt-4">
                                        <div class="row justify-content-end">
                                            <div class="col-sm-9">
                                                <button class="btn btn-label-secondary btn-prev me-sm-3 me-1">
                                                    <i class="ti ti-arrow-left me-sm-1"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-success waves-effect waves-light me-sm-3 me-1"><i
                                                        class="ti ti-check"></i>Save</button>
                                                <button class="btn btn-primary btn-next">
                                                    <span
                                                        class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                                    <i class="ti ti-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Action Buttons Ends -->
                                </div>
                            </div>
                            <!-- Non code Vessels Ends -->
                            <!-- Process/Fuel Gas/Start Gas Piping -->
                            <div id="process_fuel_gas_piping" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Process/Fuel Gas/Start Gas Piping</h6>
                                    <small>Enter Process/Fuel Gas/Start Gas Piping.</small>
                                </div>
                                <div class="row g-3">
                                    <small class="text-light fw-semibold">
                                        * Indicates Special Material Origin Requirements Must Be Checked 'Yes'
                                    </small>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">*Customer/Client AVL Applies</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="twitter1">Material Origin REQS</label>
                                        <input type="text" id="twitter1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
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
                                        <input type="text" id="facebook1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Standard/Per Code(NO MTRS)</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">MTRS Required</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Heat Mapping</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Weld Mapping</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="google1">Material Notes</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">*NACE</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">NDE Requirements</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">Welding Requirements</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">Governing Code</label>
                                        <input type="text" id="linkedin1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">Hydro Hold Time</label>
                                        <input type="text" id="linkedin1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Witnessed</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Hardness Test</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">Max Hardness</label>
                                        <input type="text" id="linkedin1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Hydro Chart Required</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="google1">Hydro Notes</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">Notes</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <!-- Action Buttons -->
                                    <div class="pt-4">
                                        <div class="row justify-content-end">
                                            <div class="col-sm-9">
                                                <button class="btn btn-label-secondary btn-prev me-sm-3 me-1">
                                                    <i class="ti ti-arrow-left me-sm-1"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-success waves-effect waves-light me-sm-3 me-1"><i
                                                        class="ti ti-check"></i>Save</button>
                                                <button class="btn btn-primary btn-next">
                                                    <span
                                                        class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                                    <i class="ti ti-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Action Buttons Ends -->
                                </div>
                            </div>
                            <!-- Process/Fuel Gas/Start Gas Piping Ends -->
                            <!-- Bolting -->
                            <div id="bolting" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Bolting</h6>
                                    <small>Enter bolting.</small>
                                </div>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">EFX Standard No COC's / No MTR's</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Vendor COC</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Manufacturer COC</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">MTRS</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="email1">Material Notes</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <!-- Action Buttons -->
                                    <div class="pt-4">
                                        <div class="row justify-content-end">
                                            <div class="col-sm-9">
                                                <button class="btn btn-label-secondary btn-prev me-sm-3 me-1">
                                                    <i class="ti ti-arrow-left me-sm-1"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-success waves-effect waves-light me-sm-3 me-1"><i
                                                        class="ti ti-check"></i>Save</button>
                                                <button class="btn btn-primary btn-next">
                                                    <span
                                                        class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                                    <i class="ti ti-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Action Buttons Ends -->
                                </div>
                            </div>
                            <!-- Bolting Ends -->
                            <!-- Gaskets -->
                            <div id="gaskets" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Gaskets</h6>
                                    <small>Enter gaskets.</small>
                                </div>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">EFX Standard No COC's / No MTR's</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Vendor COC</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Manufacturer COC</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">MTRS</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="email1">Material Notes</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <!-- Action Buttons -->
                                    <div class="pt-4">
                                        <div class="row justify-content-end">
                                            <div class="col-sm-9">
                                                <button class="btn btn-label-secondary btn-prev me-sm-3 me-1">
                                                    <i class="ti ti-arrow-left me-sm-1"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-success waves-effect waves-light me-sm-3 me-1"><i
                                                        class="ti ti-check"></i>Save</button>
                                                <button class="btn btn-primary btn-next">
                                                    <span
                                                        class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                                    <i class="ti ti-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Action Buttons Ends -->
                                </div>
                            </div>
                            <!-- Gaskets Ends -->
                            <!-- Tubing -->
                            <div id="tubing" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Tubing</h6>
                                    <small>Enter Tubing.</small>
                                </div>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Customer/Client AVL Applies</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="twitter1">Material Origin REQS</label>
                                        <input type="text" id="twitter1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
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
                                        <input type="text" id="facebook1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">EFX Standard No COC's / No MTR's</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Tubing MTRS Required</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Tubing COC Required</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Fitting MTRS Required</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Fitting COC Required</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Full Traceability(w/HEAT MAPPING)</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="google1">Material Notes</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">NDE Requirements</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">PMI Requirements</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">Notes</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <!-- Action Buttons -->
                                    <div class="pt-4">
                                        <div class="row justify-content-end">
                                            <div class="col-sm-9">
                                                <button class="btn btn-label-secondary btn-prev me-sm-3 me-1">
                                                    <i class="ti ti-arrow-left me-sm-1"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-success waves-effect waves-light me-sm-3 me-1"><i
                                                        class="ti ti-check"></i>Save</button>
                                                <button class="btn btn-primary btn-next">
                                                    <span
                                                        class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                                    <i class="ti ti-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Action Buttons Ends -->
                                </div>
                            </div>
                            <!-- Tubing Ends -->
                            <!-- Butt Welded/Socket Welded Utility Piping -->
                            <div id="butt_welded" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Butt Welded/Socket Welded Utility Piping</h6>
                                    <small>Enter butt welded/socket welded utility piping.</small>
                                </div>
                                <div class="row g-3">
                                    <small class="text-light fw-semibold">
                                        * Indicates Special Material Origin Requirements Must Be Checked 'Yes'
                                    </small>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">*Customer/Client AVL Applies</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="twitter1">Material Origin REQS</label>
                                        <input type="text" id="twitter1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
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
                                        <input type="text" id="facebook1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Standard Per Code(No MTRS)</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">MTRS Provided</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Heat Mapping</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Weld Mapping</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="google1">Material Notes</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">*NACE</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">NDE Requirements</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">Welding Requirements</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">Governing Code</label>
                                        <input type="text" id="linkedin1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <small class="text-light fw-semibold d-block">PWHT</small>
                                        <div class="form-check form-check-inline mt-3">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">No</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio3" value="option3">
                                            <label class="form-check-label" for="inlineRadio3">Per Code REQ</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">Hydro Hold Time</label>
                                        <input type="text" id="linkedin1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Witnessed</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Hardness Test</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">Max Hardness</label>
                                        <input type="text" id="linkedin1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Hydro Chart Required</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="google1">Hydro Notes</label>
                                        <input type="text" id="google1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">Notes</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <!-- Action Buttons -->
                                    <div class="pt-4">
                                        <div class="row justify-content-end">
                                            <div class="col-sm-9">
                                                <button class="btn btn-label-secondary btn-prev me-sm-3 me-1">
                                                    <i class="ti ti-arrow-left me-sm-1"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-success waves-effect waves-light me-sm-3 me-1"><i
                                                        class="ti ti-check"></i>Save</button>
                                                <button class="btn btn-primary btn-next">
                                                    <span
                                                        class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                                    <i class="ti ti-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Action Buttons Ends -->
                                </div>
                            </div>
                            <!-- Butt Welded/Socket Welded Utility Piping Ends -->
                            <!-- Threaded Piping -->
                            <div id="threaded_piping" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Threaded Piping</h6>
                                    <small>Enter threaded piping.</small>
                                </div>
                                <div class="row g-3">
                                    <small class="text-light fw-semibold">
                                        * Indicates Special Material Origin Requirements Must Be Checked 'Yes'
                                    </small>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Customer/Client AVL Applies</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="twitter1">Material Origin REQS</label>
                                        <input type="text" id="twitter1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
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
                                        <input type="text" id="facebook1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Standard/Per Code(NO MTRS)</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">*MTRS Required</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">*Heat Mapping(FULL TRACEABILITY)</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="google1">Material Notes</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">NACE</span>
                                        </label>
                                    </div>

                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">Notes</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <!-- Action Buttons -->
                                    <div class="pt-4">
                                        <div class="row justify-content-end">
                                            <div class="col-sm-9">
                                                <button class="btn btn-label-secondary btn-prev me-sm-3 me-1">
                                                    <i class="ti ti-arrow-left me-sm-1"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-success waves-effect waves-light me-sm-3 me-1"><i
                                                        class="ti ti-check"></i>Save</button>
                                                <button class="btn btn-primary btn-next">
                                                    <span
                                                        class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                                    <i class="ti ti-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Action Buttons Ends -->
                                </div>
                            </div>
                            <!-- Threaded Piping Ends -->
                            <!-- Electrical/Instrumentation -->
                            <div id="electrical" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Electrical/Instrumentation</h6>
                                    <small>Enter electrical/instrumentation.</small>
                                </div>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
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
                                        <input type="text" id="facebook1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Vendor Restrictions</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">Specify</label>
                                        <input type="text" id="linkedin1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="twitter1">Approved Vendor(S)</label>
                                        <input type="text" id="twitter1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="google1">Material Notes</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">Governing Code</label>
                                        <input type="text" id="linkedin1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">Notes</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <!-- Action Buttons -->
                                    <div class="pt-4">
                                        <div class="row justify-content-end">
                                            <div class="col-sm-9">
                                                <button class="btn btn-label-secondary btn-prev me-sm-3 me-1">
                                                    <i class="ti ti-arrow-left me-sm-1"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-success waves-effect waves-light me-sm-3 me-1"><i
                                                        class="ti ti-check"></i>Save</button>
                                                <button class="btn btn-primary btn-next">
                                                    <span
                                                        class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                                    <i class="ti ti-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Action Buttons Ends -->
                                </div>
                            </div>
                            <!-- Electrical/Instrumentation Ends -->
                            <!-- Preservation -->
                            <div id="preservation" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Preservation</h6>
                                    <small>Enter preservation.</small>
                                </div>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">EFX Standard Short Term(6 Mo)</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">EFX Standard Long Term(6 Mo)</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
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
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">Notes</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <!-- Action Buttons -->
                                    <div class="pt-4">
                                        <div class="row justify-content-end">
                                            <div class="col-sm-9">
                                                <button class="btn btn-label-secondary btn-prev me-sm-3 me-1">
                                                    <i class="ti ti-arrow-left me-sm-1"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-success waves-effect waves-light me-sm-3 me-1"><i
                                                        class="ti ti-check"></i>Save</button>
                                                <button class="btn btn-primary btn-next">
                                                    <span
                                                        class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                                    <i class="ti ti-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Action Buttons Ends -->
                                </div>
                            </div>
                            <!-- Preservation Ends -->
                            <!-- Package Testing -->
                            <div id="package_testing" class="content">
                                <div class="content-header mb-3">
                                    <h6 class="mb-0">Package Testing</h6>
                                    <small>Enter package testing.</small>
                                </div>
                                <label class="form-check-label" for="deliveryAdd">
                                    Pneumatic Testing
                                </label>
                                <hr>
                                <div class="row g-3">
                                    <!-- Pneumatic Testing -->
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Pneumatic Testing</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
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
                                        <input type="text" id="twitter1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="facebook1">System</label>
                                        <input type="text" id="facebook1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="google1">Test Medium</label>
                                        <input type="text" id="google1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">Test Requirement Pressure</label>
                                        <input type="text" id="linkedin1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">Test Requirement Time</label>
                                        <input type="text" id="linkedin1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="linkedin1">Pneumatic Testing Notes</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <!-- Pneumatic Testing Ends -->
                                    <label class="form-check-label" for="deliveryAdd">
                                        Vaccum
                                    </label>
                                    <hr>
                                    <!-- Vaccum -->
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Vaccum</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
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
                                        <input type="text" id="twitter1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="twitter1">Level</label>
                                        <input type="text" id="twitter1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="twitter1">Duration At Level</label>
                                        <input type="text" id="twitter1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="twitter1">Vaccum Notes</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <!-- Vaccum Ends -->
                                    <label class="form-check-label" for="deliveryAdd">
                                        Purge/Charge
                                    </label>
                                    <hr>
                                    <!-- Purge/Charge -->
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Purge/Charge</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="twitter1">Purge/Charge Pressure</label>
                                        <input type="text" id="twitter1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="twitter1">Purge/Charge Medium</label>
                                        <input type="text" id="twitter1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="twitter1">Purge/Charge Notes</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <!-- Purge/Charge Ends -->
                                    <label class="form-check-label" for="deliveryAdd">
                                        Lube Oil Flush
                                    </label>
                                    <hr>
                                    <!-- Lube Oil Flush -->
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Lube Oil Flush</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
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
                                        <input type="text" id="twitter1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="twitter1">Lube Oil Flush Notes</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <!-- Lube Oil Flush Ends -->
                                    <label class="form-check-label" for="deliveryAdd">
                                        Run Test
                                    </label>
                                    <hr>
                                    <!-- Run Test -->
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Run Test</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
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
                                        <input type="text" id="twitter1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <small class="text-light fw-semibold d-block">Run Test Requirement</small>
                                        <div class="form-check form-check-inline mt-3">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">Loaded</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">No Load</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="twitter1">Run Test Duration</label>
                                        <input type="text" id="twitter1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="twitter1">Run Test Notes</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <!-- Run Test Ends -->
                                    <label class="form-check-label" for="deliveryAdd">
                                        Megger Test
                                    </label>
                                    <hr>
                                    <!-- Megger Test -->
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Megger Test</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
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
                                        <input type="text" id="twitter1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="twitter1">Megger Test Notes</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <!-- Megger Test Ends -->
                                    <label class="form-check-label" for="deliveryAdd">
                                        Fat Test
                                    </label>
                                    <hr>
                                    <!-- Fat Test -->
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Fat Test</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
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
                                        <input type="text" id="twitter1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="twitter1">Fat Test Requirement</label>
                                        <input type="text" id="twitter1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="twitter1">Fat Test Notes</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
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
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Additional Testing</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
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
                                        <input type="text" id="twitter1" class="form-control" placeholder="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="twitter1">Additional Testing
                                            Test/Requirements</label>
                                        <input type="text" id="twitter1" class="form-control" placeholder="" />
                                    </div>
                                    <!-- Additional Testing Ends -->
                                    <hr>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Addendum Purchasing Specifications</span>
                                        </label>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
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
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="col-sm-6"></div>
                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
                                            <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                            <span class="switch-label">Addendum Manufacturing Specifications</span>
                                        </label>
                                    </div>

                                    <div class="col-sm-6">
                                        <label class="switch">
                                            <input type="checkbox" class="switch-input">
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
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <!-- Action Buttons -->
                                    <div class="pt-4">
                                        <div class="row justify-content-end">
                                            <div class="col-sm-9">
                                                <button class="btn btn-label-secondary btn-prev me-sm-3 me-1">
                                                    <i class="ti ti-arrow-left me-sm-1"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                                </button>
                                                <button type="button"
                                                    class="btn btn-success waves-effect waves-light me-sm-3 me-1"><i
                                                        class="ti ti-check"></i>Finish</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Action Buttons Ends -->
                                </div>
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
                if ($('#job_name').val() == '') {
                    alert('Job Name is required');
                } else {
                    verticalIconsStepper.next();
                    // submitData(false);
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

// Submit Basic Data
function submitData(reloadFlag) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    var formData = $('#basic_details_from').serialize();
    //var formData = $('#special_material_from').serialize();
    console.log("Form Data", formData)
    $.ajax({
        method: 'POST',
        url: '/admin/job-quality-requirements/saveData',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.status == true) {
                $('.form_id_bd').val(response.id);
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
function submitSpecialData(reloadFlag) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    var formData = $('#special_material_from').serialize();
    console.log("Form Data", formData)
    $.ajax({
        method: 'POST',
        url: '/admin/job-quality-requirements/saveSpecialData',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.status == true) {
                $('.form_id_bd').val(response.id);
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
    console.log("Form Data", formData)
    $.ajax({
        method: 'POST',
        url: '/admin/job-quality-requirements/saveGeneralData',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.status == true) {
                $('.form_id_bd').val(response.id);
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
    console.log("Form Data", formData)
    $.ajax({
        method: 'POST',
        url: '/admin/job-quality-requirements/saveServiceData',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.status == true) {
                $('.form_id_bd').val(response.id);
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
    console.log("Form Data", formData)
    $.ajax({
        method: 'POST',
        url: '/admin/job-quality-requirements/saveStructuralSkidData',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.status == true) {
                $('.form_id_bd').val(response.id);
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
    console.log("Form Data", formData)
    $.ajax({
        method: 'POST',
        url: '/admin/job-quality-requirements/savePressureVesselsData',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.status == true) {
                $('.form_id_bd').val(response.id);
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

//Non Code Vessels/Tanks
function submitNoCodeVesselsData(reloadFlag) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    var formData = $('#nocode_vessels_from').serialize();
    console.log("Form Data", formData)
    $.ajax({
        method: 'POST',
        url: '/admin/job-quality-requirements/saveNoCodeVesselsData',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.status == true) {
                $('.form_id_bd').val(response.id);
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

//Process/Fuel Gas/Start Gas Piping
function submitProcessPipingData(reloadFlag) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    var formData = $('#process_piping_from').serialize();
    console.log("Form Data", formData)
    $.ajax({
        method: 'POST',
        url: '/admin/job-quality-requirements/saveProcessPipingData',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.status == true) {
                $('.form_id_bd').val(response.id);
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

//Bolting
function submitBoltingData(reloadFlag) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    var formData = $('#bolting_from').serialize();
    console.log("Form Data", formData)
    $.ajax({
        method: 'POST',
        url: '/admin/job-quality-requirements/saveBoltingData',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.status == true) {
                $('.form_id_bd').val(response.id);
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
    console.log("Form Data", formData)
    $.ajax({
        method: 'POST',
        url: '/admin/job-quality-requirements/saveGasketsData',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.status == true) {
                $('.form_id_bd').val(response.id);
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
    console.log("Form Data", formData)
    $.ajax({
        method: 'POST',
        url: '/admin/job-quality-requirements/saveTubingData',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.status == true) {
                $('.form_id_bd').val(response.id);
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

//ButtPiping
function submitButtPipingData(reloadFlag) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    var formData = $('#butt_piping_from').serialize();
    console.log("Form Data", formData)
    $.ajax({
        method: 'POST',
        url: '/admin/job-quality-requirements/saveButtPipingData',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.status == true) {
                $('.form_id_bd').val(response.id);
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
    console.log("Form Data", formData)
    $.ajax({
        method: 'POST',
        url: '/admin/job-quality-requirements/saveThreadedPipingData',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.status == true) {
                $('.form_id_bd').val(response.id);
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

//Electrical
function submitElectricalData(reloadFlag) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    var formData = $('#electrical_from').serialize();
    console.log("Form Data", formData)
    $.ajax({
        method: 'POST',
        url: '/admin/job-quality-requirements/saveElectricalData',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.status == true) {
                $('.form_id_bd').val(response.id);
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

//Preservation
function submitPreservationData(reloadFlag) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    var formData = $('#preservation_from').serialize();
    console.log("Form Data", formData)
    $.ajax({
        method: 'POST',
        url: '/admin/job-quality-requirements/savePreservationData',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.status == true) {
                $('.form_id_bd').val(response.id);
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
    console.log("Form Data", formData)
    $.ajax({
        method: 'POST',
        url: '/admin/job-quality-requirements/savePackageTestingData',
        data: formData,
        dataType: 'json',
        success: function(response) {
            if (response.status == true) {
                $('.form_id_bd').val(response.id);
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
