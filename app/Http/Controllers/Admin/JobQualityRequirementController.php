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

        if ($basic_details->id) {
            return response(['status' => true, 'message' => 'Success', 'id' => $special_material_requirements->id,
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
        $general_info->job_number = $request->job_number;
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
        // $general_info->pipes_and_fittings = $request->pipes_and_fittings == 'on' ? '1':'0';

        // $general_info->bolting =  $request->bolting == 'on' ? '1':'0';
        // $general_info->pressure_vessels = $request->pressure_vessels == 'on' ? '1':'0';
        // $general_info->gaskets =  $request->gaskets == 'on' ? '1':'0';
        // $general_info->structural_steel =  $request->structural_steel == 'on' ? '1':'0';
        // $general_info->tubing =  $request->tubing == 'on' ? '1':'0';
        $general_info->save();

        if ($general_info->id) {
            return response(['status' => true, 'message' => 'Success', 'id' => $special_material_requirements->id,
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
        //dd($request);
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
        return view('admin.job-quality-requirements.create', [
            'jqr' => $jqr,
            'jqr_special' => $jqr_special,
            'jqr_general_info' =>$jqr_general_info
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
