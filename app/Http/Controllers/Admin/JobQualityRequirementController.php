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
        return view('admin.job-quality-requirements.create', [
            'jqr' => $jqr
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
