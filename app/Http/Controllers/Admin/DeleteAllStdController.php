<?php

namespace App\Http\Controllers\Admin;

use App\User;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeleteAllStdController extends Controller
{
    //third year student delete//
    public function third_student_delete_all()
    {
        $count = User::where('userType','Student')->where('year','Third Year')->count();
        if ($count > 0) {
            DB::table('users')->where('year','Third Year')->delete();
            return redirect()->back()->with(['message' => 'Records Deleted Successfully.']);
        } else {
            return redirect()->back()->with(['error' => 'Nothing to delete.']);
        }
        
        
        
    }
    //third year student delete//



    
    //final year student delete//
    public function final_student_delete_all()
    {
        $count = User::where('userType','Student')->where('year','Final Year')->count();
        $final = User::where('userType','Student')->where('year','Final Year')->get();
        if ($count > 0) {
            foreach( $final as $row) {
            return $row->proposal();
            }
            DB::table('users')->where('year','Final Year')->delete();
            return redirect()->back()->with(['message' => 'Records Deleted Successfully.']);
        } else {
            return redirect()->back()->with(['error' => 'Nothing to delete.']);
        }
        
        
        
    }
    //final year student delete//
}
