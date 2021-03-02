<?php

namespace App\Http\Controllers;

use App\Models\Resume2;
use App\Models\Resume3;
use App\Models\ResumeList1;
use App\Models\ResumeTitre;
use App\Models\ResumeTitre2;
use Illuminate\Http\Request;

class BackofficeResumeController extends Controller
{
    public function index(){
        $reLists=ResumeList1::all();
        $reTitres=ResumeTitre::all();
        $resumeTitres=ResumeTitre2::all();
        $resume_list=Resume2::all();
        $resumeList=Resume3::all();
        return view('backoffice.pages.resume',compact('reLists','reTitres','resumeTitres','resume_list','resumeList'));
    }
}
