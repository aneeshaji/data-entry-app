<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\JobQualityRequirementCreateRequest;
use App\Models\BasicDetails;
use App\Models\Bolting;
use App\Models\ButtWeldedSocketWeldedUtilityPiping;
use App\Models\ElectricalInstrumentation;
use App\Models\Gaskets;
use App\Models\GeneralInformation;
use App\Models\NonCodeVesselsTanks;
use App\Models\PackageTesting;
use App\Models\Preservation;
use App\Models\PressureVessels;
use App\Models\ProcessFuelGasStartGasPiping;
use App\Models\ServiceInformation;
use App\Models\SpecialMaterialRequirements;
use App\Models\StructuralSkid;
use App\Models\ThreadedPiping;
use App\Models\Tubing;
use App\Models\DocumentDeliverablesStatus;
use App\Models\NdeReportsRequiredStatus;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use DataTables;
use Carbon\Carbon;
use Illuminate\Validation\Rule;

class JobQualityRequirementController extends Controller
{
    /**
     * JQR Dashboard.
     * Created On : 12-04-2024
     * Author : Aneesh Ajithkumar
     * Email : dev.aneeshajithkumar@gmail.com
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        $jqrs_count = BasicDetails::count();
        return view('admin.job-quality-requirements.dashboard', [
            'jqrs_count' => $jqrs_count
        ]);
    }

    /**
     * JQR List.
     * Created On : 02-04-2024
     * Author : Aneesh Ajithkumar
     * Email : dev.aneeshajithkumar@gmail.com
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = BasicDetails::with('pressureVessels')->latest();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<div class="dropdown"><button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                        data-bs-toggle="dropdown">
                        <i class="ti ti-dots-vertical"></i>
                        </button><div class="dropdown-menu"><a class="dropdown-item" href="' . url('admin/job-quality-requirements/' . encrypt($row->id) . '/edit') . '">
                        <i class="ti ti-pencil me-1"></i>Edit</a>';
                    $btn = $btn . '<a class="dropdown-item" target="_blank" href="' . url('admin/job-quality-requirements', encrypt($row->id)) . '">
                        <i class="ti ti-eye"></i>View</a>';
                    $btn = $btn . '<a class="dropdown-item" href="' . url('/generate-pdf', encrypt($row->id)) . '">
                        <i class="ti ti-download"></i>Download</a></div></div>';
                    return $btn;
                })
                ->addColumn('mtrs_required', function (BasicDetails $basic_details) {
                    return isset($basic_details->pressureVessels->mtrs_required) ? ($basic_details->pressureVessels->mtrs_required == '1' ? 'Yes' : 'No') : '';
                })
                ->addColumn('nde_requirements_required', function (BasicDetails $basic_details) {
                    return isset($basic_details->pressureVessels->nde_requirements_required) ? ($basic_details->pressureVessels->nde_requirements_required == '1' ? 'Yes' : 'No') : '';
                })
                ->filter(function ($query) use ($request) {
                    // MTRS_Required Filter
                    if ($request->mtrs_required != NULL) {
                        $query->whereHas('pressureVessels', function ($q) use ($request) {
                            $q->where('mtrs_required', $request->mtrs_required);
                        });
                    }
                    // NDE Requirements Required Filter
                    if ($request->nde_requirements_required != NULL) {
                        $query->whereHas('pressureVessels', function ($q) use ($request) {
                            $q->where('nde_requirements_required', $request->nde_requirements_required);
                        });
                    }
                    // Weld Mapping Filter
                    if ($request->weld_mapping != NULL) {
                        $query->whereHas('pressureVessels', function ($q) use ($request) {
                            $q->where('weld_mapping', $request->weld_mapping);
                        });
                    }
                    // Heat Mapping Filter
                    if ($request->heat_mapping != NULL) {
                        $query->whereHas('pressureVessels', function ($q) use ($request) {
                            $q->where('heat_mapping', $request->heat_mapping);
                        });
                    }
                    // Hydro Chart Required Filter
                    if ($request->hydro_chart_required != NULL) {
                        $query->whereHas('pressureVessels', function ($q) use ($request) {
                            $q->where('hydro_chart_required', $request->hydro_chart_required);
                        });
                    }
                    // Search
                    if (!empty($request->get('search'))) {
                        $query->where(function ($w) use ($request) {
                            $search = $request->get('search');
                            $w
                                ->orWhere('job_number', 'LIKE', "%$search%")
                                ->orWhere('job_name', 'LIKE', "%$search%");
                        });
                    }
                })
                ->make(true);
        }
        return view('admin.job-quality-requirements.index');
    }

    /**
     * JQR Docs Status Report.
     * Created On : 04-09-2024
     * Author : Aneesh Ajithkumar
     * Email : dev.aneeshajithkumar@gmail.com
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function docStatusReport()
    {
        return view('admin.job-quality-requirements.status-report');
    }

    /**
     * JQR Get Docs Status Report.
     * Created On : 05-09-2024
     * Author : Aneesh Ajithkumar
     * Email : dev.aneeshajithkumar@gmail.com
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getDocStatusReport(Request $request)
    {
        if ($request->ajax()) {
            $startDate = $request->start_date;
            $endDate = $request->end_date;
            $data = BasicDetails::with('pressureVessels')
                                ->with('nonCodeVesselsTanks')
                                ->with('processFuelGasStartGasPiping')
                                ->whereBetween('document_deliverables_due_date', [$startDate, $endDate]);
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('traveller_status_pv', function (BasicDetails $basic_details) {
                    return isset($basic_details->pressureVessels->traveller_completed_status) ? ($basic_details->pressureVessels->traveller_completed_status == '1' ? 'Completed' : 'Pending') : '';
                })
                ->addColumn('traveller_status_piping', function (BasicDetails $basic_details) {
                    return isset($basic_details->pressureVessels->traveller_completed_status) ? ($basic_details->pressureVessels->traveller_completed_status == '1' ? 'Completed' : 'Pending') : '';
                })
                ->with([
                    'start_date' => $startDate,
                    'end_date' => $endDate,
                ]) 
            ->make(true);
        }
        return view('admin.job-quality-requirements.status-report');
    }

    /**
     * JQR View Docs Status Report.
     * Created On : 06-09-2024
     * Author : Aneesh Ajithkumar
     * Email : dev.aneeshajithkumar@gmail.com
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function viewDocStatusReport(Request $request)
    {
        $startDate = $request->start_date;
        $endDate = $request->end_date;
        $data = BasicDetails::with('pressureVessels.ndeRequirementsStatus')
                                ->with('nonCodeVesselsTanks')
                                ->with('processFuelGasStartGasPiping.ndeRequirementsStatus')
                                ->whereBetween('document_deliverables_due_date', [$startDate, $endDate])
                                ->get();
        return view('admin.job-quality-requirements.status-report-details', [
            'data' => $data,
            'endDate' => $endDate,
            'page' => 'view'
        ]);
    }

    /**
     * JQR Download Docs Status Report.
     * Created On : 06-09-2024
     * Author : Aneesh Ajithkumar
     * Email : dev.aneeshajithkumar@gmail.com
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function downloadDocStatusReport(Request $request)
    {
        $startDate = $request->start_date;
        $endDate = $request->end_date;
        $data = BasicDetails::with('pressureVessels.ndeRequirementsStatus')
                                ->with('nonCodeVesselsTanks')
                                ->with('processFuelGasStartGasPiping.ndeRequirementsStatus')
                                ->whereBetween('document_deliverables_due_date', [$startDate, $endDate])
                                ->get();
        // Format the end_date to append to the file name (e.g., AUG-31-2024)
        $formattedEndDate = \Carbon\Carbon::parse($endDate)->format('M-d-Y');                        
        // Create a file name with the end_date
        $fileName = "jqrms-docs-status-report-{$formattedEndDate}.pdf";
        $pdf = PDF::loadView('admin.job-quality-requirements.status-report-details', [
                        'data' => $data->toArray(), 
                        'endDate' => $endDate,
                        'page' => 'download'
                    ])
                    ->setPaper('a4', 'landscape');
        return $pdf->download($fileName);
    }
    
    /**
     * Create JQR.
     * Created On : 02-04-2024
     * Author : Aneesh Ajithkumar
     * Email : dev.aneeshajithkumar@gmail.com
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        $documentDeliverablesStatuses = DocumentDeliverablesStatus::all();
        $ndeReportsRequiredStatuses = NdeReportsRequiredStatus::all();
        return view('admin.job-quality-requirements.create', [
            'documentDeliverablesStatuses' => $documentDeliverablesStatuses,
            'ndeReportsRequiredStatuses' => $ndeReportsRequiredStatuses
        ]);
    }

    /**
     * Generate PDF.
     * Created On : 10-04-2024
     * Author : Aneesh Ajithkumar
     * Email : dev.aneeshajithkumar@gmail.com
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function generatePDF($id)
    {   
        $id = decrypt($id);
        $jqr = BasicDetails::where('id', $id)->first();
        $jqr_special = SpecialMaterialRequirements::where('basic_details_id', $jqr->id)->first();
        $jqr_general_info = GeneralInformation::where('basic_details_id', $jqr->id)->first();
        $jqr_service_info = ServiceInformation::where('basic_details_id', $jqr->id)->first();
        $jqr_bolting = Bolting::where('basic_details_id', $jqr->id)->first();
        $jqr_butt = ButtWeldedSocketWeldedUtilityPiping::where('basic_details_id', $jqr->id)->first();
        $jqr_electrical = ElectricalInstrumentation::where('basic_details_id', $jqr->id)->first();
        $jqr_non_code = NonCodeVesselsTanks::where('basic_details_id', $jqr->id)->first();
        $jqr_package_testing = PackageTesting::where('basic_details_id', $jqr->id)->first();
        $jqr_preservation = Preservation::where('basic_details_id', $jqr->id)->first();
        $jqr_pressure_vessels = PressureVessels::where('basic_details_id', $jqr->id)->first();
        $jqr_process_fuel_gas = ProcessFuelGasStartGasPiping::where('basic_details_id', $jqr->id)->first();
        $jqr_structural_skid = StructuralSkid::where('basic_details_id', $jqr->id)->first();
        $jqr_threaded_piping = ThreadedPiping::where('basic_details_id', $jqr->id)->first();
        $jqr_tubing = Tubing::where('basic_details_id', $jqr->id)->first();
        $jqr_gaskets = Gaskets::where('basic_details_id', $jqr->id)->first();

        if ($jqr_package_testing != null && $jqr_package_testing->run_test_requirement) {
            $jqr_package_testing_run_test_requirements = explode(',', $jqr_package_testing->run_test_requirement);
            $run = [];
            if (in_array('1', $jqr_package_testing_run_test_requirements)) {
                $run[] = 'Loaded';
            }
            if (in_array('2', $jqr_package_testing_run_test_requirements)) {
                $run[] = 'No Load';
            }
            if ($run != null) {
                $run_test_reqs = isset($run) ? implode(',', $run) : '';
            }
        } else {
            $jqr_package_testing_run_test_requirements = [];
        }
        if ($jqr->company_logo != null) {
            $logoPath = '/uploads/company-logo/' . $jqr->company_logo;
        } else {
            $logoPath = "";
        }
        $data = [
            'jqr' => $jqr ?? '',
            'jqr_special' => $jqr_special ?? '',
            'jqr_general_info' => $jqr_general_info ?? '',
            'jqr_service_info' => $jqr_service_info ?? '',
            'jqr_bolting' => $jqr_bolting ?? '',
            'jqr_butt' => $jqr_butt ?? '',
            'jqr_electrical' => $jqr_electrical ?? '',
            'jqr_non_code' => $jqr_non_code ?? '',
            'jqr_package_testing' => $jqr_package_testing ?? '',
            'jqr_preservation' => $jqr_preservation ?? '',
            'jqr_pressure_vessels' => $jqr_pressure_vessels ?? '',
            'jqr_process_fuel_gas' => $jqr_process_fuel_gas ?? '',
            'jqr_structural_skid' => $jqr_structural_skid ?? '',
            'jqr_threaded_piping' => $jqr_threaded_piping ?? '',
            'jqr_tubing' => $jqr_tubing ?? '',
            'jqr_gaskets' => $jqr_gaskets ?? '',
            'run_test_reqs' => $run_test_reqs ?? '',
            'logoPath' => $logoPath,
            'page' => 'download'
        ];
        $jobNumber = $jqr->job_number ?? '';
        $fileName = "jqrms-{$jobNumber}.pdf";
        $pdf = PDF::loadView('admin.job-quality-requirements.show-minimized-jqr', $data);
        return $pdf->download($fileName);
    }

    /**
     * Save JQR Basic Details.
     * Created On : 03-04-2024
     * Author : Aneesh Ajithkumar
     * Email : dev.aneeshajithkumar@gmail.com
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function saveData(Request $request)
    { 
        $validator = \Validator::make($request->all(), [
            'job_number' => [
                'required',
                'max:255',
                Rule::unique('basic_details')->ignore($request->id)
            ],
            'no_of_modules' => 'required|max:255',
            'job_revision_number' => 'required|max:255',
            'scheduled_test_date' => 'required|date',
            'company_logo' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:4096'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors(),
            ], 422);
        } else {
            // Store Data
            if ($request->id) {
                // For Edit
                $basic_details = BasicDetails::where('id', $request->id)->first();
            } else {
                // For Create
                $basic_details = new BasicDetails();
            }

            // Handle the Company logo upload
            if ($request->hasFile('company_logo')) {
                // Check if the jqr has an existing company logo
                if ($basic_details && $basic_details->company_logo) {
                    $existingLogoPath = public_path('uploads/company-logo/' . $basic_details->company_logo);
                    // Delete the existing logo if it exists
                    if (file_exists($existingLogoPath)) {
                        unlink($existingLogoPath);
                    }
                }
                // Generate a new file name for the logo
                $companyLogo = 'company-logo-' . time() . '.' . $request->company_logo->extension();
            
                // Move the uploaded file to the public/uploads/company-logo directory
                $request->company_logo->move(public_path('uploads/company-logo'), $companyLogo);
            }

            $basic_details->job_number = $request->job_number;
            $basic_details->job_name = $request->job_name;
            //$basic_details->stages = $request->stages;
            $basic_details->release_date = $request->release_date;
            $basic_details->due_date = $request->due_date;
        
            // Parse the scheduled_test_date from the request
            // if ($request->scheduled_test_date) {
            //     $parsedScheduledTestDate = Carbon::parse($request->scheduled_test_date);
            //     // Calculate the date after 7 days 
            //     $document_deliverables_due_date = $parsedScheduledTestDate->addDays(7)->toDateString();
            // }

            $basic_details->customer_order_purchase_date = $request->customer_order_purchase_date;
            $basic_details->fab_start_date = $request->fab_start_date;
            $basic_details->scheduled_test_date = $request->scheduled_test_date;
            // if (isset($document_deliverables_due_date)) {
            $basic_details->document_deliverables_due_date = $request->document_deliverables_due_date;
            // }
            $basic_details->job_revision_number = $request->job_revision_number;
            $basic_details->production_number = $request->production_number;
            $basic_details->no_of_modules = $request->no_of_modules;
            $basic_details->jqr_revision_date = $request->jqr_revision_date;
            $basic_details->form_number = $request->form_number;
            $basic_details->company_logo = $companyLogo ?? '';
            //Statuses of docs deliverables
            // if ($request->status_of_docs_deliverables_mtrs != null ) {
            //     $basic_details->status_of_docs_deliverables_mtrs = $request->status_of_docs_deliverables_mtrs;
            // }
            // if ($request->status_of_docs_deliverables_nde != null ) {
            //     $basic_details->status_of_docs_deliverables_nde = $request->status_of_docs_deliverables_nde;
            // }
            // if ($request->status_of_docs_deliverables_hydro != null) {
            //     $basic_details->status_of_docs_deliverables_hydro = $request->status_of_docs_deliverables_hydro;
            // }
            // if ($request->status_of_docs_deliverables_heat_map != null) {
            //     $basic_details->status_of_docs_deliverables_heat_map = $request->status_of_docs_deliverables_heat_map;
            // }
            // if ($request->status_of_docs_deliverables_weld_map != null) {
            //     $basic_details->status_of_docs_deliverables_weld_map = $request->status_of_docs_deliverables_weld_map;
            // }
            
            $basic_details->save();
            
            // Batch insert based on no of modules
            if ($basic_details->id && $request->job_number && $request->no_of_modules && $request->id == null && $request->no_of_modules > 0) {
                for ($i = 0; $i < $request->no_of_modules; $i++) {
                    $data[] = [
                        'job_number' => $request->job_number . '-' . str_pad($i + 1, 2, '0', STR_PAD_LEFT),
                        'no_of_modules' => '0',
                        'job_revision_number' => $request->job_revision_number ?? '',
                        'scheduled_test_date' => $request->scheduled_test_date ?? ''
                    ];
                }
                $result = BasicDetails::insert($data);
            }
            if ($basic_details->id) {
                // Getting doc statuses
                // $statusData = BasicDetails::with('ndeStatus')
                //                             ->with('hydroStatus')
                //                             ->with('heatMapStatus')
                //                             ->with('weldMapStatus')
                //                             ->where('id', $basic_details->id)
                //                             ->first();
                return response([
                    'status' => true, 
                    'message' => 'Success', 
                    'id' => $basic_details->id,
                    'jqr' => $basic_details ?? '',
                    // 'doc_statuses' =>  [
                    //     'mtrs' => $statusData->mtrsStatus->name ?? '',
                    //     'nde' => $statusData->ndeStatus->name ?? '',
                    //     'hydro' => $statusData->hydroStatus->name ?? '',
                    //     'heat_map' => $statusData->heatMapStatus->name ?? '',
                    //     'weld_map' => $statusData->weldMapStatus->name ?? ''
                    // ],
                    'redirect' => route('admin.job-quality-requirements')
                ]);
            } else {
                return response(['status' => false, 'message' => 'Error creating JQR']);
            }
        }
    }

    public function saveSpecialData(Request $request)
    {
        // Store Data
        if ($request->id) {
            // For Edit
            $special_material_requirements = SpecialMaterialRequirements::where('id', $request->id)->first();
        } else {
            $special_material_requirements = new SpecialMaterialRequirements();
        }

        $special_material_requirements->basic_details_id = $request->basic_details_id;
        $special_material_requirements->pipes_and_fittings = $request->pipes_and_fittings == 'on' ? '1' : '0';
        
        $special_material_requirements->bolting = $request->bolting == 'on' ? '1' : '0';
        $special_material_requirements->pressure_vessels = $request->pressure_vessels == 'on' ? '1' : '0';
        $special_material_requirements->gaskets = $request->gaskets == 'on' ? '1' : '0';
        $special_material_requirements->structural_steel = $request->structural_steel == 'on' ? '1' : '0';
        $special_material_requirements->tubing = $request->tubing == 'on' ? '1' : '0';
        $special_material_requirements->q_stock_material = $request->q_stock_material == 'on' ? '1' : '0';
        $special_material_requirements->save();

        if ($special_material_requirements->id) {
            return response([
                'status' => true,
                'message' => 'Success',
                'id' => $special_material_requirements->id,
                'basic_details_id' => $special_material_requirements->basic_details_id,
                'redirect' => route('admin.job-quality-requirements')
            ]);
        } else {
            return response(['status' => false, 'message' => 'Error']);
        }
    }

    public function saveGeneralData(Request $request)
    {
        // Store Data
        if ($request->id) {
            // For Edit
            $general_info = GeneralInformation::where('id', $request->id)->first();
        } else {
            $general_info = new GeneralInformation();
        }
        // Fetching Basic Details
        $basic_details = BasicDetails::where('id', $request->id)->first();

        $general_info->basic_details_id = $request->basic_details_id;
        $general_info->customer = $request->customer;
        $general_info->location = $request->location;
        $general_info->end_user = $request->end_user;
        $general_info->engineer = $request->engineer;
        $general_info->designer = $request->designer;
        $general_info->sales_man = $request->sales_man;
        $general_info->job_type = $request->job_type;
        $general_info->job_revision_number = $request->job_revision_number;
        $general_info->date_revised = $request->date_revised;
        $general_info->date_approved = $request->date_approved;
        $general_info->notes = $request->notes;
        $general_info->req_fab_completetion_date = $request->req_fab_completetion_date;
        $general_info->spoling_required = $request->spoling_required == 'on' ? '1' : '0';
        $general_info->vessels_required = $request->vessels_required == 'on' ? '1' : '0';
        $general_info->vessels_outsourced = $request->vessels_outsourced == 'on' ? '1' : '0';
        $general_info->save();

        if ($general_info->id) {
            return response([
                'status' => true, 
                'message' => 'Success', 
                'id' => $general_info->id,
                'jqr' => $basic_details ?? '',
                'redirect' => route('admin.job-quality-requirements')]);
        } else {
            return response(['status' => false, 'message' => 'Error']);
        }
    }

    public function saveServiceData(Request $request)
    {
        // Store Data
        if ($request->id) {
            // For Edit
            $service_info = ServiceInformation::where('id', $request->id)->first();
        } else {
            $service_info = new ServiceInformation();
        }

        $service_info->basic_details_id = $request->basic_details_id;
        $service_info->gas_processed = $request->gas_processed;
        $service_info->application = $request->application;
        $service_info->sour_service_required = $request->sour_service_required == 'on' ? '1' : '0';
        $service_info->other = $request->other;
        $service_info->notes = $request->notes;
        $service_info->save();

        if ($service_info->id) {
            return response(['status' => true, 'message' => 'Success', 'id' => $service_info->id,
                'redirect' => route('admin.job-quality-requirements')]);
        } else {
            return response(['status' => false, 'message' => 'Error']);
        }
    }

    // Structural Skid
    public function saveStructuralSkidData(Request $request)
    {
        // Store Data
        if ($request->id) {
            // For Edit
            $structural_skid = StructuralSkid::where('id', $request->id)->first();
        } else {
            $structural_skid = new StructuralSkid();
        }

        $structural_skid->basic_details_id = $request->basic_details_id;
        $structural_skid->customer_avl_applies = $request->customer_avl_applies == 'on' ? '1' : '0';
        $structural_skid->material_origin_reqs = $request->material_origin_reqs;
        $structural_skid->origin_traceable_to_melt = $request->origin_traceable_to_melt == 'on' ? '1' : '0';
        $structural_skid->acceptable_material_origins = $request->acceptable_material_origins;
        $structural_skid->mtrs_required = $request->mtrs_required == 'on' ? '1' : '0';
        $structural_skid->standard_per_code = $request->standard_per_code == 'on' ? '1' : '0';
        $structural_skid->heat_mapping = $request->heat_mapping == 'on' ? '1' : '0';
        $structural_skid->weld_mapping = $request->weld_mapping == 'on' ? '1' : '0';
        $structural_skid->material_notes = $request->material_notes;
        $structural_skid->nde_requirements = $request->nde_requirements;
        $structural_skid->weld_requirements = $request->weld_requirements;
        $structural_skid->governing_code = $request->governing_code;
        $structural_skid->pwht = $request->pwht;
        $structural_skid->notes = $request->notes;

        $structural_skid->save();

        if ($structural_skid->id) {
            return response(['status' => true, 'message' => 'Success', 'id' => $structural_skid->id,
                'redirect' => route('admin.job-quality-requirements')]);
        } else {
            return response(['status' => false, 'message' => 'Error']);
        }
    }

    // Pressure Vessels
    public function savePressureVesselsData(Request $request)
    {
        // Store Data
        if ($request->id) {
            // For Edit
            $pressure_vessels = PressureVessels::where('id', $request->id)->first();
        } else {
            $pressure_vessels = new PressureVessels();
        }

        // Fetching Basic Details
        $basic_details = BasicDetails::where('id', $request->id)->first();
        $pressure_vessels->basic_details_id = $request->basic_details_id;
        $pressure_vessels->customer_avl_applies = $request->customer_avl_applies == 'on' ? '1' : '0';
        $pressure_vessels->material_origin_reqs = $request->material_origin_reqs;
        $pressure_vessels->origin_traceable_to_melt = $request->origin_traceable_to_melt == 'on' ? '1' : '0';
        $pressure_vessels->acceptable_material_origins = $request->acceptable_material_origins;
        $pressure_vessels->mtrs_required = $request->mtrs_required == 'on' ? '1' : '0';
        $pressure_vessels->heat_mapping = $request->heat_mapping == 'on' ? '1' : '0';
        $pressure_vessels->weld_mapping = $request->weld_mapping == 'on' ? '1' : '0';
        $pressure_vessels->material_notes = $request->material_notes;
        $pressure_vessels->nace = $request->nace == 'on' ? '1' : '0';
        $pressure_vessels->nde_requirements_required = $request->nde_requirements_required;
        $pressure_vessels->nde_requirements = $request->nde_requirements;
        $pressure_vessels->weld_requirements = $request->weld_requirements;
        $pressure_vessels->governing_code = $request->governing_code;
        $pressure_vessels->pwht = $request->pwht;
        $pressure_vessels->hydro_hold_time = $request->hydro_hold_time;
        $pressure_vessels->witnessed = $request->witnessed == 'on' ? '1' : '0';
        $pressure_vessels->hardness_test = $request->hardness_test == 'on' ? '1' : '0';
        $pressure_vessels->max_hardness = $request->max_hardness;
        $pressure_vessels->hydro_chart_required = $request->hydro_chart_required == 'on' ? '1' : '0';
        $pressure_vessels->hydro_notes = $request->hydro_notes;
        $pressure_vessels->notes = $request->notes;
        $pressure_vessels->date_of_confirmation = $request->date_of_confirmation;
        $pressure_vessels->nde_reports_comments = $request->nde_reports_comments;

        //Statuses of docs deliverables
        if ($request->status_of_docs_deliverables_mtrs != null && $request->status_of_docs_deliverables_mtrs != 'default') {
            $pressure_vessels->status_of_docs_deliverables_mtrs = $request->status_of_docs_deliverables_mtrs;
        }
        if ($request->status_of_docs_deliverables_nde != null && $request->status_of_docs_deliverables_nde != 'default') {
            $pressure_vessels->status_of_docs_deliverables_nde = $request->status_of_docs_deliverables_nde;
        }
        if ($request->status_of_docs_deliverables_hydro != null && $request->status_of_docs_deliverables_hydro != 'default') {
            $pressure_vessels->status_of_docs_deliverables_hydro = $request->status_of_docs_deliverables_hydro;
        }
        if ($request->status_of_docs_deliverables_heat_map != null && $request->status_of_docs_deliverables_heat_map != 'default') {
            $pressure_vessels->status_of_docs_deliverables_heat_map = $request->status_of_docs_deliverables_heat_map;
        }
        if ($request->status_of_docs_deliverables_weld_map != null && $request->status_of_docs_deliverables_weld_map != 'default') {
            $pressure_vessels->status_of_docs_deliverables_weld_map = $request->status_of_docs_deliverables_weld_map;
        }
        if ($request->traveller_completed_status != null && $request->traveller_completed_status != 'default') {
            $pressure_vessels->traveller_completed_status = $request->traveller_completed_status;
        }
        
        $pressure_vessels->save();
        
        $jqr_process_fuel_gas = ProcessFuelGasStartGasPiping::where('basic_details_id', $request->id)->first();
        $jqr_non_code = NonCodeVesselsTanks::where('basic_details_id', $request->id)->first();

        $travellerStatuses = [
            'pv' => $jqr_pressure_vessels->traveller_completed_status ?? '',
            'pipe' => $jqr_process_fuel_gas->traveller_completed_status ?? '',
            'nc' => $jqr_non_code->traveller_completed_status ?? ''
        ];

        if ($pressure_vessels->id) {
            return response([
                'status' => true, 
                'message' => 'Success', 
                'id' => $pressure_vessels->id,
                'jqr' => $basic_details ?? '',
                'travellerStatuses' => $travellerStatuses ?? '',
                'redirect' => route('admin.job-quality-requirements')
            ]);
        } else {
            return response(['status' => false, 'message' => 'Error']);
        }
    }

    // Non Code Vessels/Tanks
    public function saveNoCodeVesselsData(Request $request)
    {
        // Store Data
        if ($request->id) {
            // For Edit
            $non_code_vess = NonCodeVesselsTanks::where('id', $request->id)->first();
        } else {
            $non_code_vess = new NonCodeVesselsTanks();
        }

        // Fetching Basic Details
        $basic_details = BasicDetails::where('id', $request->id)->first();

        $non_code_vess->basic_details_id = $request->basic_details_id;
        $non_code_vess->customer_avl_applies = $request->customer_avl_applies == 'on' ? '1' : '0';
        $non_code_vess->material_origin_reqs = $request->material_origin_reqs;
        $non_code_vess->origin_traceable_to_melt = $request->origin_traceable_to_melt == 'on' ? '1' : '0';
        $non_code_vess->origin_traceable_to_manufacturer = $request->origin_traceable_to_manufacturer == 'on' ? '1' : '0';
        $non_code_vess->acceptable_material_origins = $request->acceptable_material_origins;
        $non_code_vess->standard_code = $request->standard_code == 'on' ? '1' : '0';
        $non_code_vess->mtrs_required = $request->mtrs_required == 'on' ? '1' : '0';
        $non_code_vess->heat_mapping = $request->heat_mapping == 'on' ? '1' : '0';
        $non_code_vess->weld_mapping = $request->weld_mapping == 'on' ? '1' : '0';
        $non_code_vess->material_notes = $request->material_notes;
        $non_code_vess->nace = $request->nace == 'on' ? '1' : '0';
        $non_code_vess->nde_requirements = $request->nde_requirements;
        $non_code_vess->weld_requirements = $request->weld_requirements;
        $non_code_vess->governing_code = $request->governing_code;
        $non_code_vess->pwht = $request->pwht;
        $non_code_vess->hydro_hold_time = $request->hydro_hold_time;
        $non_code_vess->witnessed = $request->witnessed == 'on' ? '1' : '0';
        $non_code_vess->hardness_test = $request->hardness_test == 'on' ? '1' : '0';
        $non_code_vess->max_hardness = $request->max_hardness;
        $non_code_vess->hydro_chart_required = $request->hydro_chart_required == 'on' ? '1' : '0';
        $non_code_vess->hydro_notes = $request->hydro_notes;
        $non_code_vess->notes = $request->notes;
        $non_code_vess->nde_requirements_required = $request->nde_requirements_required;
        $non_code_vess->date_of_confirmation = $request->date_of_confirmation;
        $non_code_vess->nde_reports_comments = $request->nde_reports_comments;
        
        //Statuses of docs deliverables
        if ($request->status_of_docs_deliverables_mtrs != null && $request->status_of_docs_deliverables_mtrs != 'default') {
            $non_code_vess->status_of_docs_deliverables_mtrs = $request->status_of_docs_deliverables_mtrs;
        }
        if ($request->status_of_docs_deliverables_nde != null && $request->status_of_docs_deliverables_nde != 'default') {
            $non_code_vess->status_of_docs_deliverables_nde = $request->status_of_docs_deliverables_nde;
        }
        if ($request->status_of_docs_deliverables_hydro != null && $request->status_of_docs_deliverables_hydro != 'default') {
            $non_code_vess->status_of_docs_deliverables_hydro = $request->status_of_docs_deliverables_hydro;
        }
        if ($request->status_of_docs_deliverables_heat_map != null && $request->status_of_docs_deliverables_heat_map != 'default') {
            $non_code_vess->status_of_docs_deliverables_heat_map = $request->status_of_docs_deliverables_heat_map;
        }
        if ($request->status_of_docs_deliverables_weld_map != null && $request->status_of_docs_deliverables_weld_map != 'default') {
            $non_code_vess->status_of_docs_deliverables_weld_map = $request->status_of_docs_deliverables_weld_map;
        }
        if ($request->traveller_completed_status != null && $request->traveller_completed_status != 'default') {
            $non_code_vess->traveller_completed_status = $request->traveller_completed_status;
        }
        
        $non_code_vess->save();

        $jqr_process_fuel_gas = ProcessFuelGasStartGasPiping::where('basic_details_id', $request->id)->first();
        $jqr_pressure_vessels = PressureVessels::where('basic_details_id', $request->id)->first();

        $travellerStatuses = [
            'pv' => $jqr_pressure_vessels->traveller_completed_status ?? '',
            'pipe' => $jqr_process_fuel_gas->traveller_completed_status ?? '',
            'nc' => $non_code_vess->traveller_completed_status ?? ''
        ];

        if ($non_code_vess->id) {
            return response([
                'status' => true, 
                'message' => 'Success', 
                'id' => $non_code_vess->id,
                'jqr' => $basic_details ?? '',
                'travellerStatuses' => $travellerStatuses ?? '',
                'redirect' => route('admin.job-quality-requirements')
            ]);
        } else {
            return response(['status' => false, 'message' => 'Error']);
        }
    }

    // Process/Fuel Gas/Start Gas Piping
    public function saveProcessPipingData(Request $request)
    {
        // Store Data
        if ($request->id) {
            // For Edit
            $process_fuel_gas = ProcessFuelGasStartGasPiping::where('id', $request->id)->first();
        } else {
            $process_fuel_gas = new ProcessFuelGasStartGasPiping();
        }

        // Fetching Basic Details
        $basic_details = BasicDetails::where('id', $request->id)->first();

        $process_fuel_gas->basic_details_id = $request->basic_details_id;
        $process_fuel_gas->customer_avl_applies = $request->customer_avl_applies == 'on' ? '1' : '0';
        $process_fuel_gas->material_origin_reqs = $request->material_origin_reqs;
        $process_fuel_gas->origin_traceable_to_melt = $request->origin_traceable_to_melt == 'on' ? '1' : '0';
        $process_fuel_gas->acceptable_material_origins = $request->acceptable_material_origins;
        $process_fuel_gas->standard_code = $request->standard_code == 'on' ? '1' : '0';
        $process_fuel_gas->mtrs_required = $request->mtrs_required == 'on' ? '1' : '0';
        $process_fuel_gas->heat_mapping = $request->heat_mapping == 'on' ? '1' : '0';
        $process_fuel_gas->weld_mapping = $request->weld_mapping == 'on' ? '1' : '0';
        $process_fuel_gas->material_notes = $request->material_notes;
        $process_fuel_gas->nace = $request->nace == 'on' ? '1' : '0';
        $process_fuel_gas->nde_requirements = $request->nde_requirements;
        $process_fuel_gas->weld_requirements = $request->weld_requirements;
        $process_fuel_gas->governing_code = $request->governing_code;
        $process_fuel_gas->hydro_hold_time = $request->hydro_hold_time;
        $process_fuel_gas->witnessed = $request->witnessed == 'on' ? '1' : '0';
        $process_fuel_gas->hardness_test = $request->hardness_test == 'on' ? '1' : '0';
        $process_fuel_gas->max_hardness = $request->max_hardness;
        $process_fuel_gas->hydro_chart_required = $request->hydro_chart_required == 'on' ? '1' : '0';
        $process_fuel_gas->hydro_notes = $request->hydro_notes;
        $process_fuel_gas->notes = $request->notes;
        $process_fuel_gas->nde_requirements_required = $request->nde_requirements_required;
        $process_fuel_gas->date_of_confirmation = $request->date_of_confirmation;
        $process_fuel_gas->nde_reports_comments = $request->nde_reports_comments;
        
        //Statuses of docs deliverables
        if ($request->status_of_docs_deliverables_mtrs != null && $request->status_of_docs_deliverables_mtrs != 'default') {
            $process_fuel_gas->status_of_docs_deliverables_mtrs = $request->status_of_docs_deliverables_mtrs;
        }
        if ($request->status_of_docs_deliverables_nde != null && $request->status_of_docs_deliverables_nde != 'default') {
            $process_fuel_gas->status_of_docs_deliverables_nde = $request->status_of_docs_deliverables_nde;
        }
        if ($request->status_of_docs_deliverables_hydro != null && $request->status_of_docs_deliverables_hydro != 'default') {
            $process_fuel_gas->status_of_docs_deliverables_hydro = $request->status_of_docs_deliverables_hydro;
        }
        if ($request->status_of_docs_deliverables_heat_map != null && $request->status_of_docs_deliverables_heat_map != 'default') {
            $process_fuel_gas->status_of_docs_deliverables_heat_map = $request->status_of_docs_deliverables_heat_map;
        }
        if ($request->status_of_docs_deliverables_weld_map != null && $request->status_of_docs_deliverables_weld_map != 'default') {
            $process_fuel_gas->status_of_docs_deliverables_weld_map = $request->status_of_docs_deliverables_weld_map;
        }
        if ($request->traveller_completed_status != null && $request->traveller_completed_status != 'default') {
            $process_fuel_gas->traveller_completed_status = $request->traveller_completed_status;
        }
        
        $process_fuel_gas->save();

        $jqr_non_code = NonCodeVesselsTanks::where('basic_details_id', $request->id)->first();
        $jqr_pressure_vessels = PressureVessels::where('basic_details_id', $request->id)->first();

        $travellerStatuses = [
            'pv' => $jqr_pressure_vessels->traveller_completed_status ?? '',
            'pipe' => $process_fuel_gas->traveller_completed_status ?? '',
            'nc' => $jqr_non_code->traveller_completed_status ?? ''
        ];

        if ($process_fuel_gas->id) {
            return response([
                'status' => true, 
                'message' => 'Success', 
                'id' => $process_fuel_gas->id,
                'jqr' => $basic_details ?? '',
                'travellerStatuses' => $travellerStatuses ?? '',
                'redirect' => route('admin.job-quality-requirements')
            ]);
        } else {
            return response(['status' => false, 'message' => 'Error']);
        }
    }

    // Bolting
    public function saveBoltingData(Request $request)
    {
        // Store Data
        if ($request->id) {
            // For Edit
            $bolting = Bolting::where('id', $request->id)->first();
        } else {
            $bolting = new Bolting();
        }

        $bolting->basic_details_id = $request->basic_details_id;
        $bolting->efx_standard_no_cocs = $request->efx_standard_no_cocs == 'on' ? '1' : '0';
        $bolting->vendor_coc = $request->vendor_coc == 'on' ? '1' : '0';
        $bolting->manufacturer_coc = $request->manufacturer_coc == 'on' ? '1' : '0';
        $bolting->mtrs = $request->mtrs == 'on' ? '1' : '0';
        $bolting->material_notes = $request->material_notes;

        $bolting->save();

        if ($bolting->id) {
            return response(['status' => true, 'message' => 'Success', 'id' => $bolting->id,
                'redirect' => route('admin.job-quality-requirements')]);
        } else {
            return response(['status' => false, 'message' => 'Error']);
        }
    }

    // Gaskets
    public function saveGasketsData(Request $request)
    {
        // Store Data
        if ($request->id) {
            // For Edit
            $service_info = Gaskets::where('id', $request->id)->first();
        } else {
            $service_info = new Gaskets();
        }

        $service_info->basic_details_id = $request->basic_details_id;
        $service_info->efx_standard_no_cocs = $request->efx_standard_no_cocs == 'on' ? '1' : '0';
        $service_info->vendor_coc = $request->vendor_coc == 'on' ? '1' : '0';
        $service_info->manufacturer_coc = $request->manufacturer_coc == 'on' ? '1' : '0';
        $service_info->mtrs = $request->mtrs == 'on' ? '1' : '0';
        $service_info->material_notes = $request->material_notes;
        $service_info->save();

        if ($service_info->id) {
            return response(['status' => true, 'message' => 'Success', 'id' => $service_info->id,
                'redirect' => route('admin.job-quality-requirements')]);
        } else {
            return response(['status' => false, 'message' => 'Error']);
        }
    }

    // Tubing
    public function saveTubingData(Request $request)
    {
        // Store Data
        if ($request->id) {
            // For Edit
            $tubing = Tubing::where('id', $request->id)->first();
        } else {
            $tubing = new Tubing();
        }

        $tubing->basic_details_id = $request->basic_details_id;
        $tubing->customer_avl_applies = $request->customer_avl_applies == 'on' ? '1' : '0';
        $tubing->material_origin_reqs = $request->material_origin_reqs;
        $tubing->origin_traceable_to_melt = $request->origin_traceable_to_melt == 'on' ? '1' : '0';
        $tubing->acceptable_material_origins = $request->acceptable_material_origins;
        $tubing->efx_standard_no_cocs = $request->efx_standard_no_cocs == 'on' ? '1' : '0';
        $tubing->tubing_mtrs_required = $request->tubing_mtrs_required == 'on' ? '1' : '0';
        $tubing->tubing_coc_required = $request->tubing_coc_required == 'on' ? '1' : '0';
        $tubing->fitting_mtrs_required = $request->fitting_mtrs_required == 'on' ? '1' : '0';
        $tubing->fitting_coc_required = $request->fitting_coc_required == 'on' ? '1' : '0';
        $tubing->full_traceability = $request->full_traceability == 'on' ? '1' : '0';
        $tubing->material_notes = $request->material_notes;
        $tubing->nde_requirements = $request->nde_requirements;
        $tubing->pmi_Requirements = $request->pmi_Requirements;
        $tubing->notes = $request->notes;
        $tubing->save();

        if ($tubing->id) {
            return response(['status' => true, 'message' => 'Success', 'id' => $tubing->id,
                'redirect' => route('admin.job-quality-requirements')]);
        } else {
            return response(['status' => false, 'message' => 'Error']);
        }
    }

    // ButtPiping
    public function saveButtPipingData(Request $request)
    {
        // Store Data
        if ($request->id) {
            // For Edit
            $buttPiping = ButtWeldedSocketWeldedUtilityPiping::where('id', $request->id)->first();
        } else {
            $buttPiping = new ButtWeldedSocketWeldedUtilityPiping();
        }

        $buttPiping->basic_details_id = $request->basic_details_id;
        $buttPiping->customer_avl_applies = $request->customer_avl_applies == 'on' ? '1' : '0';
        $buttPiping->material_origin_reqs = $request->material_origin_reqs;
        $buttPiping->origin_traceable_to_melt = $request->origin_traceable_to_melt == 'on' ? '1' : '0';
        $buttPiping->acceptable_material_origins = $request->acceptable_material_origins;
        $buttPiping->standard_per_code = $request->standard_per_code == 'on' ? '1' : '0';
        $buttPiping->mtrs_provided = $request->mtrs_provided == 'on' ? '1' : '0';
        $buttPiping->heat_mapping = $request->heat_mapping == 'on' ? '1' : '0';
        $buttPiping->weld_mapping = $request->weld_mapping == 'on' ? '1' : '0';
        $buttPiping->material_notes = $request->material_notes;
        $buttPiping->nace = $request->nace == 'on' ? '1' : '0';
        $buttPiping->nde_requirements = $request->nde_requirements == 'on' ? '1' : '0';;
        $buttPiping->weld_requirements = $request->weld_requirements;
        $buttPiping->governing_code = $request->governing_code;
        $buttPiping->pwht = $request->pwht;
        $buttPiping->hydro_hold_time = $request->hydro_hold_time;
        $buttPiping->witnessed = $request->witnessed == 'on' ? '1' : '0';
        $buttPiping->hardness_test = $request->hardness_test == 'on' ? '1' : '0';
        $buttPiping->max_hardness = $request->max_hardness;
        $buttPiping->hydro_chart_required = $request->hydro_chart_required == 'on' ? '1' : '0';
        $buttPiping->hydro_notes = $request->hydro_notes;
        $buttPiping->notes = $request->notes;

        $buttPiping->save();

        if ($buttPiping->id) {
            return response(['status' => true, 'message' => 'Success', 'id' => $buttPiping->id,
                'redirect' => route('admin.job-quality-requirements')]);
        } else {
            return response(['status' => false, 'message' => 'Error']);
        }
    }

    // Threaded Piping
    public function saveThreadedPipingData(Request $request)
    {
        // Store Data
        if ($request->id) {
            // For Edit
            $threaded = ThreadedPiping::where('id', $request->id)->first();
        } else {
            $threaded = new ThreadedPiping();
        }

        $threaded->basic_details_id = $request->basic_details_id;
        $threaded->customer_avl_applies = $request->customer_avl_applies == 'on' ? '1' : '0';
        $threaded->material_origin_reqs = $request->material_origin_reqs;
        $threaded->origin_traceable_to_melt = $request->origin_traceable_to_melt == 'on' ? '1' : '0';
        $threaded->acceptable_material_origins = $request->acceptable_material_origins;
        $threaded->standard_per_code = $request->standard_per_code == 'on' ? '1' : '0';
        $threaded->mtrs_required = $request->mtrs_required == 'on' ? '1' : '0';
        $threaded->heat_mapping = $request->heat_mapping == 'on' ? '1' : '0';
        $threaded->material_notes = $request->material_notes;
        $threaded->nace = $request->nace == 'on' ? '1' : '0';
        $threaded->notes = $request->notes;

        $threaded->save();

        if ($threaded->id) {
            return response(['status' => true, 'message' => 'Success', 'id' => $threaded->id,
                'redirect' => route('admin.job-quality-requirements')]);
        } else {
            return response(['status' => false, 'message' => 'Error']);
        }
    }

    // Electrical
    public function saveElectricalData(Request $request)
    {
        // Store Data
        if ($request->id) {
            // For Edit
            $electrical = ElectricalInstrumentation::where('id', $request->id)->first();
        } else {
            $electrical = new ElectricalInstrumentation();
        }

        $electrical->basic_details_id = $request->basic_details_id;
        $electrical->customer_avl_applies = $request->customer_avl_applies == 'on' ? '1' : '0';
        $electrical->acceptable_material_origins = $request->acceptable_material_origins;
        $electrical->vendor_restrictions = $request->vendor_restrictions == 'on' ? '1' : '0';
        $electrical->specify = $request->specify;
        $electrical->approved_vendors = $request->approved_vendors;
        $electrical->material_notes = $request->material_notes;
        $electrical->governing_code = $request->governing_code;
        $electrical->notes = $request->notes;

        $electrical->save();

        if ($electrical->id) {
            return response(['status' => true, 'message' => 'Success', 'id' => $electrical->id,
                'redirect' => route('admin.job-quality-requirements')]);
        } else {
            return response(['status' => false, 'message' => 'Error']);
        }
    }

    // Preservation
    public function savePreservationData(Request $request)
    {
        // Store Data
        if ($request->id) {
            // For Edit
            $preservation = Preservation::where('id', $request->id)->first();
        } else {
            $preservation = new Preservation();
        }

        $preservation->basic_details_id = $request->basic_details_id;
        $preservation->efx_standard_short_term = $request->efx_standard_short_term == 'on' ? '1' : '0';
        $preservation->efx_standard_long_term = $request->efx_standard_long_term == 'on' ? '1' : '0';
        $preservation->customer_specified_other = $request->customer_specified_other == 'on' ? '1' : '0';
        $preservation->special_customer_requirements = $request->special_customer_requirements;
        $preservation->notes = $request->notes;
        $preservation->save();

        if ($preservation->id) {
            return response(['status' => true, 'message' => 'Success', 'id' => $preservation->id,
                'redirect' => route('admin.job-quality-requirements')]);
        } else {
            return response(['status' => false, 'message' => 'Error']);
        }
    }

    // PackageTesting
    public function savePackageTestingData(Request $request)
    {
        // Store Data
        if ($request->id) {
            // For Edit
            $package_testing = PackageTesting::where('id', $request->id)->first();
        } else {
            $package_testing = new PackageTesting();
        }

        $package_testing->basic_details_id = $request->basic_details_id;
        $package_testing->pneumatic_testing = $request->pneumatic_testing == 'on' ? '1' : '0';
        $package_testing->pneumatic_testing_customer_third_party_witness_required = $request->pneumatic_testing_customer_third_party_witness_required == 'on' ? '1' : '0';
        $package_testing->pneumatic_testing_notification_requirement = $request->pneumatic_testing_notification_requirement;
        $package_testing->system = $request->system;
        $package_testing->test_medium = $request->test_medium;
        $package_testing->test_requirement_pressure = $request->test_requirement_pressure;
        $package_testing->test_requirement_time = $request->test_requirement_time;
        $package_testing->pneumatic_testing_notes = $request->pneumatic_testing_notes;
        $package_testing->vaccum = $request->vaccum == 'on' ? '1' : '0';
        $package_testing->vaccum_customer_third_party_witness_required = $request->vaccum_customer_third_party_witness_required == 'on' ? '1' : '0';
        $package_testing->vaccum_notification_requirement = $request->vaccum_notification_requirement;
        $package_testing->level = $request->level;
        $package_testing->duration_at_level = $request->duration_at_level;
        $package_testing->vaccum_notes = $request->vaccum_notes;
        $package_testing->purge_charge = $request->purge_charge == 'on' ? '1' : '0';
        $package_testing->purge_charge_medium = $request->purge_charge_medium;
        $package_testing->purge_charge_pressure = $request->purge_charge_pressure;
        $package_testing->purge_charge_notes = $request->purge_charge_notes;
        $package_testing->lube_oil_flush = $request->lube_oil_flush == 'on' ? '1' : '0';
        $package_testing->lube_oil_flush_customer_third_party_witness_required = $request->lube_oil_flush_customer_third_party_witness_required == 'on' ? '1' : '0';
        $package_testing->lube_oil_flush_notification_requirement = $request->lube_oil_flush_notification_requirement;
        $package_testing->lube_oil_flush_notes = $request->lube_oil_flush_notes;
        $package_testing->run_test = $request->run_test == 'on' ? '1' : '0';
        $package_testing->run_test_customer_third_party_witness_required = $request->run_test_customer_third_party_witness_required == 'on' ? '1' : '0';
        $package_testing->run_test_notification_requirement = $request->run_test_notification_requirement;

        $package_testing->run_test_requirement = implode(',', (array) $request->run_test_requirement);

        $package_testing->run_test_duration = $request->run_test_duration;
        $package_testing->run_test_notes = $request->run_test_notes;
        $package_testing->megger_test = $request->megger_test == 'on' ? '1' : '0';
        $package_testing->megger_test_customer_third_party_witness_required = $request->megger_test_customer_third_party_witness_required == 'on' ? '1' : '0';
        $package_testing->megger_test_notification_requirement = $request->megger_test_notification_requirement;
        $package_testing->megger_test_notes = $request->megger_test_notes;
        $package_testing->fat_test = $request->fat_test == 'on' ? '1' : '0';
        $package_testing->fat_test_customer_third_party_witness_required = $request->fat_test_customer_third_party_witness_required == 'on' ? '1' : '0';
        $package_testing->fat_test_notification_requirement = $request->fat_test_notification_requirement;
        $package_testing->fat_test_requirement = $request->fat_test_requirement;
        $package_testing->fat_test_notes = $request->fat_test_notes;
        $package_testing->additional_testing = $request->additional_testing == 'on' ? '1' : '0';
        $package_testing->additional_testing_customer_third_party_witness_required = $request->additional_testing_customer_third_party_witness_required == 'on' ? '1' : '0';
        $package_testing->additional_testing_notification_requirement = $request->additional_testing_notification_requirement;
        $package_testing->additional_testing_test_requirement = $request->additional_testing_test_requirement;
        $package_testing->addendum_purchasing_specifications = $request->addendum_purchasing_specifications == 'on' ? '1' : '0';
        $package_testing->addendum_purchasing_specifications_complete = $request->addendum_purchasing_specifications_complete == 'on' ? '1' : '0';
        $package_testing->addendum_purchasing_specifications_notes = $request->addendum_purchasing_specifications_notes;
        $package_testing->addendum_manufacturing_specifications = $request->addendum_manufacturing_specifications == 'on' ? '1' : '0';
        $package_testing->addendum_manufacturing_specifications_complete = $request->addendum_manufacturing_specifications_complete == 'on' ? '1' : '0';
        $package_testing->addendum_manufacturing_specifications_notes = $request->addendum_manufacturing_specifications_notes;
        $package_testing->save();

        if ($package_testing->id) {
            return response(['status' => true, 'message' => 'Success', 'id' => $package_testing->id,
                'redirect' => route('admin.job-quality-requirements')]);
        } else {
            return response(['status' => false, 'message' => 'Error']);
        }
    }

    /**
     * Save JQR.
     * Created On : 02-04-2024
     * Author : Aneesh Ajithkumar
     * Email : dev.aneeshajithkumar@gmail.com
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request): RedirectResponse
    {
        // $request->user()->fill($request->validated());
        DB::beginTransaction();
        $basic_details = new BasicDetails();
        try {
            // Store Data
            $basic_details->job_name = $request->job_name;
            $basic_details->stages = $request->stages;
            $basic_details->release_date = $request->release_date;
            $basic_details->due_date = $request->due_date;
            $basic_details->save();

            // Commit And Redirected To Listing
            DB::commit();
            return response(['status' => true, 'message' => 'Success']);
            // return redirect()->route('admin.job-quality-requirements.list')->with('success','Basic Details Added Successfully.');
        } catch (\Throwable $th) {
            // Rollback and return with Error
            DB::rollBack();
            return redirect()->back()->withInput()->with('error', $th->getMessage());
        }
    }

    /**
     * View JQR.
     * Created On : 09-04-2024
     * Author : Aneesh Ajithkumar
     * Email : dev.aneeshajithkumar@gmail.com
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show(string $id)
    {
        $id = decrypt($id);
        $jqr = BasicDetails::where('id', $id)->first();
        $jqr_special = SpecialMaterialRequirements::where('basic_details_id', $jqr->id)->first();
        $jqr_general_info = GeneralInformation::where('basic_details_id', $jqr->id)->first();
        $jqr_service_info = ServiceInformation::where('basic_details_id', $jqr->id)->first();
        $jqr_bolting = Bolting::where('basic_details_id', $jqr->id)->first();
        $jqr_butt = ButtWeldedSocketWeldedUtilityPiping::where('basic_details_id', $jqr->id)->first();
        $jqr_electrical = ElectricalInstrumentation::where('basic_details_id', $jqr->id)->first();
        $jqr_non_code = NonCodeVesselsTanks::where('basic_details_id', $jqr->id)->first();
        $jqr_package_testing = PackageTesting::where('basic_details_id', $jqr->id)->first();
        $jqr_preservation = Preservation::where('basic_details_id', $jqr->id)->first();
        $jqr_pressure_vessels = PressureVessels::where('basic_details_id', $jqr->id)->first();
        $jqr_process_fuel_gas = ProcessFuelGasStartGasPiping::where('basic_details_id', $jqr->id)->first();
        $jqr_structural_skid = StructuralSkid::where('basic_details_id', $jqr->id)->first();
        $jqr_threaded_piping = ThreadedPiping::where('basic_details_id', $jqr->id)->first();
        $jqr_tubing = Tubing::where('basic_details_id', $jqr->id)->first();
        $jqr_gaskets = Gaskets::where('basic_details_id', $jqr->id)->first();

        if ($jqr_package_testing != null && $jqr_package_testing->run_test_requirement) {
            $jqr_package_testing_run_test_requirements = explode(',', $jqr_package_testing->run_test_requirement);
            $run = [];
            if (in_array('1', $jqr_package_testing_run_test_requirements)) {
                $run[] = 'Loaded';
            }
            if (in_array('2', $jqr_package_testing_run_test_requirements)) {
                $run[] = 'No Load';
            }
            if ($run != null) {
                $run_test_reqs = isset($run) ? implode(',', $run) : '';
            }
        } else {
            $jqr_package_testing_run_test_requirements = [];
        }
        if ($jqr->company_logo != null) {
            $logoPath = '/uploads/company-logo/' . $jqr->company_logo;
        } else {
            $logoPath = "";
        }

        return view('admin.job-quality-requirements.show-minimized-jqr', [
            'jqr' => $jqr,
            'jqr_special' => $jqr_special,
            'jqr_general_info' => $jqr_general_info,
            'jqr_service_info' => $jqr_service_info,
            'jqr_bolting' => $jqr_bolting,
            'jqr_butt' => $jqr_butt,
            'jqr_electrical' => $jqr_electrical,
            'jqr_non_code' => $jqr_non_code,
            'jqr_package_testing' => $jqr_package_testing,
            'run_test_reqs' => isset($run_test_reqs) ? $run_test_reqs : '',
            'jqr_preservation' => $jqr_preservation,
            'jqr_pressure_vessels' => $jqr_pressure_vessels,
            'jqr_process_fuel_gas' => $jqr_process_fuel_gas,
            'jqr_structural_skid' => $jqr_structural_skid,
            'jqr_threaded_piping' => $jqr_threaded_piping,
            'jqr_tubing' => $jqr_tubing,
            'jqr_gaskets' => $jqr_gaskets,
            'logoPath' => $logoPath,
            'page' => 'view'
        ]);
    }

    /**
     * Edit JQR.
     * Created On : 02-04-2024
     * Author : Aneesh Ajithkumar
     * Email : dev.aneeshajithkumar@gmail.com
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit(string $id)
    {
        $id = decrypt($id);
        $jqr = BasicDetails::where('id', $id)->first();
        $jqr_special = SpecialMaterialRequirements::where('basic_details_id', $jqr->id)->first();
        $jqr_general_info = GeneralInformation::where('basic_details_id', $jqr->id)->first();
        $jqr_service_info = ServiceInformation::where('basic_details_id', $jqr->id)->first();
        $jqr_bolting = Bolting::where('basic_details_id', $jqr->id)->first();
        $jqr_butt = ButtWeldedSocketWeldedUtilityPiping::where('basic_details_id', $jqr->id)->first();
        $jqr_electrical = ElectricalInstrumentation::where('basic_details_id', $jqr->id)->first();
        $jqr_package_testing = PackageTesting::where('basic_details_id', $jqr->id)->first();
        $jqr_preservation = Preservation::where('basic_details_id', $jqr->id)->first();
        $jqr_pressure_vessels = PressureVessels::with('mtrsStatus')
                                                ->with('ndeStatus')
                                                ->with('hydroStatus')
                                                ->with('heatMapStatus')
                                                ->with('weldMapStatus')
                                                ->where('basic_details_id', $jqr->id)
                                                ->first();
        $jqr_process_fuel_gas = ProcessFuelGasStartGasPiping::with('mtrsStatus')
                                                            ->with('ndeStatus')
                                                            ->with('hydroStatus')
                                                            ->with('heatMapStatus')
                                                            ->with('weldMapStatus')
                                                            ->where('basic_details_id', $jqr->id)
                                                            ->first();
        $jqr_non_code = NonCodeVesselsTanks::with('mtrsStatus')
                                            ->with('ndeStatus')
                                            ->with('hydroStatus')
                                            ->with('heatMapStatus')
                                            ->with('weldMapStatus')
                                            ->where('basic_details_id', $jqr->id)
                                            ->first();
        $jqr_structural_skid = StructuralSkid::where('basic_details_id', $jqr->id)->first();
        $jqr_threaded_piping = ThreadedPiping::where('basic_details_id', $jqr->id)->first();
        $jqr_tubing = Tubing::where('basic_details_id', $jqr->id)->first();
        $jqr_gaskets = Gaskets::where('basic_details_id', $jqr->id)->first();
        $documentDeliverablesStatuses = DocumentDeliverablesStatus::all();
        $ndeReportsRequiredStatuses = NdeReportsRequiredStatus::all();
        
        if ($jqr_package_testing != null && $jqr_package_testing->run_test_requirement) {
            $jqr_package_testing_run_test_requirements = explode(',', $jqr_package_testing->run_test_requirement);
        } else {
            $jqr_package_testing_run_test_requirements = [];
        }

        // $pvDocStatuses = [
        //     'mtrs' => $jqr_pressure_vessels->mtrsStatus->name ?? '',
        //     'nde' => $jqr_pressure_vessels->ndeStatus->name ?? '',
        //     'hydro' => $jqr_pressure_vessels->hydroStatus->name ?? '',
        //     'heat_map' => $jqr_pressure_vessels->heatMapStatus->name ?? '',
        //     'weld_map' => $jqr_pressure_vessels->weldMapStatus->name ?? ''
        // ];

        $travellerStatuses = [
            'pv' => $jqr_pressure_vessels->traveller_completed_status ?? '',
            'pipe' => $jqr_process_fuel_gas->traveller_completed_status ?? '',
            'nc' => $jqr_non_code->traveller_completed_status ?? ''
        ];


        return view('admin.job-quality-requirements.create', [
            'jqr' => $jqr,
            'jqr_special' => $jqr_special,
            'jqr_general_info' => $jqr_general_info,
            'jqr_service_info' => $jqr_service_info,
            'jqr_bolting' => $jqr_bolting,
            'jqr_butt' => $jqr_butt,
            'jqr_electrical' => $jqr_electrical,
            'jqr_non_code' => $jqr_non_code,
            'jqr_package_testing' => $jqr_package_testing,
            'jqr_package_testing_run_test_requirements' => $jqr_package_testing_run_test_requirements,
            'jqr_preservation' => $jqr_preservation,
            'jqr_pressure_vessels' => $jqr_pressure_vessels,
            'jqr_process_fuel_gas' => $jqr_process_fuel_gas,
            'jqr_structural_skid' => $jqr_structural_skid,
            'jqr_threaded_piping' => $jqr_threaded_piping,
            'jqr_tubing' => $jqr_tubing,
            'jqr_gaskets' => $jqr_gaskets,
            'documentDeliverablesStatuses' => $documentDeliverablesStatuses,
            'ndeReportsRequiredStatuses' => $ndeReportsRequiredStatuses,
            'travellerStatuses' => $travellerStatuses ?? ''
            // 'pvDocStatuses' => $pvDocStatuses
        ]);
    }

    /**
     * Update JQR.
     * Created On : 02-04-2024
     * Author : Aneesh Ajithkumar
     * Email : dev.aneeshajithkumar@gmail.com
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Delete JQR.
     * Created On : 02-04-2024
     * Author : Aneesh Ajithkumar
     * Email : dev.aneeshajithkumar@gmail.com
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function destroy(string $id)
    {
        //
    }
}
