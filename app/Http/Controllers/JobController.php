<?php

namespace App\Http\Controllers;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Auth;

class JobController extends Controller {

    public function searchJobs(Request $request){
        try {
            DB::beginTransaction();

            if ($request->search != '') {
                $jobs = Job::where('company','LIKE',"%$request->search%")
                    ->orWhere('position_company','LIKE',"%$request->search%")
                    ->orWhere('description','LIKE',"%$request->search%")
                    ->orWhere('requirements','LIKE',"%$request->search%")
                    ->orWhere('benefits','LIKE',"%$request->search%")
                    ->orWhere('additionals','LIKE',"%$request->search%")
                    ->orWhere('ubication','LIKE',"%$request->search%")
                    ->orWhere('position_type','LIKE',"%$request->search%")
                    ->where('state',true)
                    ->get();

                if($jobs){ return response()->json(['success'=>true,'jobs'=>$jobs]);
                } else { return response()->json(['success' => false]); }

            }else{ return response()->json(['success' => false]); }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false,'error' => $e],500);//->getMessage()
        }
    }

    public function createJob(Request $request){
        try {
            DB::beginTransaction();

            if ($request->title != '' && $request->id_company != '' && $request->position_company != '' && $request->description != '' && $request->requirements != '' &&
            $request->benefits != '' && $request->additionals != '' && $request->ubication != '' && $request->position_type != '') {

                $job = new Job();
                $job->title = $request->title;
                $job->id_company = $request->id_company;
                $job->position_company = $request->position_company;
                $job->description = $request->description;
                $job->requirements = $request->requirements;
                $job->benefits = $request->benefits;
                $job->additionals = $request->additionals;
                $job->ubication = $request->ubication;
                $job->position_type = $request->position_type;
                $job->save();

                return response()->json(['success'=>true,'message'=>'Trabajo Creado Exitosamente'],200);
            }else{
                return response()->json(['success'=>false,'message'=>'Campos Incompletos'],400);
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => $e],500);//->getMessage()
        }
    }

}
