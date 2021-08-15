<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\recruitment_notice; 
Use Session;



class RecruitmentController extends Controller
{
    public function ViewRecruitment(){
        $recruitment_notices=recruitment_notice::paginate(9);
        
        return view('ViewRecruitment')->with('recruitment_notices',$recruitment_notices);
    }

    public function create(){    //step 2 
        $r=request(); //step 3 get data from HTML

        $addRecruitment=recruitment_notice::create([    //step 3 bind data
            'id'=>$r->ID, //add on 
            'salary_range'=>$r->salaryRange, //fullname from HTML
            'career_level'=>$r->careerLevel,
            'job_description'=>$r->jobDescription,
            'requirements'=>$r->requirements,
            'job_type'=>$r->jobType,
            'qualification'=>$r->qualification,
            'job_specialization'=>$r->jobSpecialization,
        ]);
        Session::flash('success',"recruitment_notice add succesful!");
        return redirect()->route('/');       
       
    }
}
