<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\JobQualityRequirementCreateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\BasicDetails;
use App\Models\SpecialMaterialRequirements;
use App\Models\GeneralInformation;
use App\Models\ServiceInformation;
use App\Models\Bolting;
use App\Models\ButtWeldedSocketWeldedUtilityPiping;
use App\Models\ElectricalInstrumentation;
use App\Models\NonCodeVesselsTanks;
use App\Models\PackageTesting;
use App\Models\Preservation;
use App\Models\PressureVessels;
use App\Models\ProcessFuelGasStartGasPiping;
use App\Models\StructuralSkid;
use App\Models\ThreadedPiping;
use App\Models\Tubing;
use App\Models\Gaskets;


class JobQualityRequirementController extends Controller
{
    /**
     * JQR List.
     * Created On : 02-04-2024
     * Author : Aneesh Ajithkumar
     * Email : dev.aneeshajithkumar@gmail.com
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jqrs = BasicDetails::orderBy('created_at','DESC')
        ->paginate(10);
        return view('admin.job-quality-requirements.list', [
            'jqrs' => $jqrs
        ]);
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
        return view('admin.job-quality-requirements.create');
    }

    public function saveData(Request $request)
    {
        // Store Data
        if ($request->id) {
            // For Edit
            $basic_details = BasicDetails::where('id', $request->id)->first();
        } else {
            $basic_details = new BasicDetails();
        }
        $basic_details->job_number = $request->job_number;
        $basic_details->job_name = $request->job_name;
        $basic_details->stages = $request->stages;
        $basic_details->release_date = $request->release_date;
        $basic_details->due_date = $request->due_date;
        $basic_details->save();

        if ($basic_details->id) {
            return response(['status' => true, 'message' => 'Success', 'id' => $basic_details->id,
            'redirect' => route('admin.job-quality-requirements')]);
        } else {
            return response(['status' => false, 'message' => 'Error']);
        }
    }

    public function saveSpecialData(Request $request)
    {
        // Store Data
        if ($request->id) {
            // For Edit
            $special_material_requirements = SpecialMaterialRequirements::where('id', $request->id)->first();
        } else {
            $special_material_requirements  = new SpecialMaterialRequirements();
        }

        $special_material_requirements->basic_details_id = $request->basic_details_id;
        $special_material_requirements->pipes_and_fittings = $request->pipes_and_fittings == 'on' ? '1':'0';

        $special_material_requirements->bolting =  $request->bolting == 'on' ? '1':'0';
        $special_material_requirements->pressure_vessels = $request->pressure_vessels == 'on' ? '1':'0';
        $special_material_requirements->gaskets =  $request->gaskets == 'on' ? '1':'0';
        $special_material_requirements->structural_steel =  $request->structural_steel == 'on' ? '1':'0';
        $special_material_requirements->tubing =  $request->tubing == 'on' ? '1':'0';
        $special_material_requirements->save();

        if ($special_material_requirements->id) {
            return response([
                'status' => true,
                'message' => 'Success',
                'id' => $special_material_requirements->id,
                'basic_details_id' => $special_material_requirements->basic_details_id,
                'redirect' => route('admin.job-quality-requirements')]);
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
            $general_info  = new GeneralInformation();
        }

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
        $general_info->save();

        if ($general_info->id) {
            return response(['status' => true, 'message' => 'Success', 'id' => $general_info->id,
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
            $service_info  = new ServiceInformation();
        }

        $service_info->basic_details_id = $request->basic_details_id;
        $service_info->gas_processed = $request->gas_processed;
        $service_info->application = $request->application;
        $service_info->sour_service_required = $request->sour_service_required == 'on' ? '1':'0';
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
            $structural_skid  = new StructuralSkid();
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
            $pressure_vessels  = new PressureVessels();
        }

        $pressure_vessels->basic_details_id = $request->basic_details_id;
        $pressure_vessels->customer_avl_applies = $request->customer_avl_applies == 'on' ? '1' : '0';
        $pressure_vessels->material_origin_reqs = $request->material_origin_reqs;
        $pressure_vessels->origin_traceable_to_melt = $request->origin_traceable_to_melt == 'on' ? '1' : '0';
        $pressure_vessels->acceptable_material_origins = $request->acceptable_material_origins;
        $pressure_vessels->mtrs_required = $request->mtrs_required == 'on' ? '1' : '0';
        $pressure_vessels->heat_mapping = $request->heat_mapping== 'on' ? '1' : '0';
        $pressure_vessels->weld_mapping = $request->weld_mapping== 'on' ? '1' : '0';
        $pressure_vessels->material_notes = $request->material_notes;
        $pressure_vessels->nace = $request->nace == 'on' ? '1' : '0';
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

        $pressure_vessels->save();

        if ($pressure_vessels->id) {
            return response(['status' => true, 'message' => 'Success', 'id' => $pressure_vessels->id,
            'redirect' => route('admin.job-quality-requirements')]);
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
            $non_code_vess  = new NonCodeVesselsTanks();
        }

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
        $non_code_vess->save();

        if ($non_code_vess->id) {
            return response(['status' => true, 'message' => 'Success', 'id' => $non_code_vess->id,
            'redirect' => route('admin.job-quality-requirements')]);
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
            $process_fual_gas = ProcessFuelGasStartGasPiping::where('id', $request->id)->first();
        } else {
            $process_fual_gas  = new ProcessFuelGasStartGasPiping();
        }

        $process_fual_gas->basic_details_id = $request->basic_details_id;
        $process_fual_gas->customer_avl_applies = $request->customer_avl_applies == 'on' ? '1' : '0';
        $process_fual_gas->material_origin_reqs = $request->material_origin_reqs;
        $process_fual_gas->origin_traceable_to_melt = $request->origin_traceable_to_melt == 'on' ? '1' : '0';
        $process_fual_gas->acceptable_material_origins = $request->acceptable_material_origins;
        $process_fual_gas->standard_code = $request->standard_code == 'on' ? '1' : '0';
        $process_fual_gas->mtrs_required = $request->mtrs_required == 'on' ? '1' : '0';
        $process_fual_gas->heat_mapping = $request->heat_mapping == 'on' ? '1' : '0';
        $process_fual_gas->weld_mapping = $request->weld_mapping == 'on' ? '1' : '0';
        $process_fual_gas->material_notes = $request->material_notes;
        $process_fual_gas->nace = $request->nace == 'on' ? '1' : '0';
        $process_fual_gas->nde_requirements = $request->nde_requirements;
        $process_fual_gas->weld_requirements = $request->weld_requirements;
        $process_fual_gas->governing_code = $request->governing_code;
        $process_fual_gas->hydro_hold_time = $request->hydro_hold_time;
        $process_fual_gas->witnessed = $request->witnessed == 'on' ? '1' : '0';
        $process_fual_gas->hardness_test = $request->hardness_test == 'on' ? '1' : '0';
        $process_fual_gas->max_hardness = $request->max_hardness;
        $process_fual_gas->hydro_chart_required = $request->hydro_chart_required == 'on' ? '1' : '0';
        $process_fual_gas->hydro_notes = $request->hydro_notes;
        $process_fual_gas->notes = $request->notes;

        $process_fual_gas->save();

        if ($process_fual_gas->id) {
            return response(['status' => true, 'message' => 'Success', 'id' => $process_fual_gas->id,
            'redirect' => route('admin.job-quality-requirements')]);
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
            $bolting  = new Bolting();
        }

        $bolting->basic_details_id = $request->basic_details_id;
        $bolting->efx_standard_no_cocs = $request->efx_standard_no_cocs == 'on' ? '1' : '0';
        $bolting->vendor_coc = $request->vendor_coc == 'on' ? '1' : '0';
        $bolting->manufacturer_coc = $request->manufacturer_coc== 'on' ? '1' : '0';
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
            $service_info  = new Gaskets();
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
            $tubing  = new Tubing();
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
            $buttPiping  = new ButtWeldedSocketWeldedUtilityPiping();
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
        $buttPiping->nace = $request->nace == 'on' ? '1' : '0' ;
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
            $threaded  = new ThreadedPiping();
        }

        $threaded->basic_details_id = $request->basic_details_id;
        $threaded->customer_avl_applies = $request->customer_avl_applies == 'on' ? '1' : '0';
        $threaded->material_origin_reqs = $request->material_origin_reqs;
        $threaded->origin_traceable_to_melt = $request->origin_traceable_to_melt;
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
            $electrical  = new ElectricalInstrumentation();
        }

        $electrical->basic_details_id = $request->basic_details_id;
        $electrical->customer_avl_applies = $request->customer_avl_applies == 'on' ? '1' : '0';
        $electrical->acceptable_material_origins = $request->acceptable_material_origins;
        $electrical->vendor_restrictions = $request->vendor_restrictions == 'on' ? '1' : '0' ;
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
            $preservation  = new Preservation();
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
            $package_testing  = new PackageTesting();
        }

        $package_testing->basic_details_id = $request->basic_details_id;
        $package_testing->pneumatic_testing = $request->pneumatic_testing == 'on' ? '1' : '0';
        $package_testing->pneumatic_testing_customer_third_party_witness_required = $request->pneumatic_testing_customer_third_party_witness_required == 'on' ? '1' : '0';
        $package_testing->pneumatic_testing_notification_requirement = $request->pneumatic_testing_notification_requirement ;
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
        $package_testing->run_test_requirement = $request->run_test_requirement == 'on' ? '1' : '0';
        $package_testing->run_test_notes = $request->run_test_notes;
        $package_testing->megger_test = $request->megger_test == 'on' ? '1' : '0';
        $package_testing->megger_test_customer_third_party_witness_required = $request->megger_test_customer_third_party_witness_required == 'on' ? '1' : '0';
        $package_testing->megger_test_notification_requirement = $request->megger_test_notification_requirement;
        $package_testing->megger_test_notes = $request->megger_test_notes;
        $package_testing->fat_test = $request->fat_test == 'on' ? '1' : '0';
        $package_testing->fat_test_customer_third_party_witness_required = $request->fat_test_customer_third_party_witness_required ;
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
            //return redirect()->route('admin.job-quality-requirements.list')->with('success','Basic Details Added Successfully.');

        } catch (\Throwable $th) {
            // Rollback and return with Error
            DB::rollBack();
            return redirect()->back()->withInput()->with('error', $th->getMessage());
        }
    }

     /**
     * View JQR.
     * Created On : 02-04-2024
     * Author : Aneesh Ajithkumar
     * Email : dev.aneeshajithkumar@gmail.com
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show(string $id)
    {
        //
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
        $jqr_non_code = NonCodeVesselsTanks::where('basic_details_id', $jqr->id)->first();
        $jqr_package_testing = PackageTesting::where('basic_details_id', $jqr->id)->first();
        $jqr_preservation = Preservation::where('basic_details_id', $jqr->id)->first();
        $jqr_pressure_vessels = PressureVessels::where('basic_details_id', $jqr->id)->first();
        $jqr_process_fuel_gas = ProcessFuelGasStartGasPiping::where('basic_details_id', $jqr->id)->first();
        $jqr_structural_skid = StructuralSkid::where('basic_details_id', $jqr->id)->first();
        $jqr_threaded_piping = ThreadedPiping::where('basic_details_id', $jqr->id)->first();
        $jqr_tubing = Tubing::where('basic_details_id', $jqr->id)->first();
        $jqr_gaskets = Gaskets::where('basic_details_id', $jqr->id)->first();
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
            'jqr_preservation' => $jqr_preservation,
            'jqr_pressure_vessels' => $jqr_pressure_vessels,
            'jqr_process_fuel_gas' => $jqr_process_fuel_gas,
            'jqr_structural_skid' => $jqr_structural_skid,
            'jqr_threaded_piping' => $jqr_threaded_piping,
            'jqr_tubing' => $jqr_tubing,
            'jqr_gaskets' => $jqr_gaskets
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
