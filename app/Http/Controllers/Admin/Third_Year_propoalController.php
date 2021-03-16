<?php

namespace App\Http\Controllers\Admin;
use App\Proposal;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Third_Year_propoalController extends Controller
{
    public function third_project(){
        $proposals = Proposal::where('coursecode','CSE-3300')->get();
        return view ('admin.third-year-project',compact('proposals'));
    }

    //delete//
    public function delete($id)
    {
        $proposal = Proposal::find($id);
        $proposal->delete();
        return redirect()->back();
    }
    //delete//
    
    public function supervisor_assign(Request $request)
    {
        $proposal = Proposal::find($request->id);
        $proposal->supervisor = $request->supervisor;
        $proposal->save();
        return redirect()->back();
    }

    public function schedule(Request $request)
    {
        $date = $request->date;
        $time = $request->time;
        $schedule = $date.' '.$time;
        $proposal = Proposal::find($request->id);
        $proposal->schedule = date('Y-m-d H:i:s', strtotime($schedule));
        $proposal->save();
        return redirect()->back();
    }
    
}
