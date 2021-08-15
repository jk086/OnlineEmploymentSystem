<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\resume; 
Use Session;

class ResumeController extends Controller
{
    public function ViewResume(){
        $resumes=resume::paginate(9);
        
        return view('ViewResume')->with('resumes',$resumes);
    }
}
