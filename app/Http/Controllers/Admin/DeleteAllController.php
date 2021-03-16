<?php

namespace App\Http\Controllers\Admin;

use App\Proposal;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeleteAllController extends Controller
{
    //third year project delete//
    public function third_project_delete_all()
    {
        $count = Proposal::where('year','Third Year')->count();
        if ($count > 0) {
            DB::table('proposals')->where('year','Third Year')->delete();
            return redirect()->back()->with(['message' => 'Records Deleted Successfully.']);
        } else {
            return redirect()->back()->with(['error' => 'Nothing to delete.']);
        }
        
        
        
    }
    //third year project delete//



    
    //final year project delete//
    public function final_project_delete_all()
    {
        $count = Proposal::where('year','Final Year')->count();
        if ($count > 0) {
            DB::table('proposals')->where('year','Final Year')->delete();
            return redirect()->back()->with(['message' => 'Records Deleted Successfully.']);
        } else {
            return redirect()->back()->with(['error' => 'Nothing to delete.']);
        }
        
        
        
    }
    //final year project delete//
}
