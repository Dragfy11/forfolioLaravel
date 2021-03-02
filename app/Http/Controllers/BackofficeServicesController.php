<?php

namespace App\Http\Controllers;

use App\Models\Service1;
use App\Models\Service2;
use Illuminate\Http\Request;

class BackofficeServicesController extends Controller
{
    public function index(){
        $service_list=Service1::all();
        $serviceList=Service2::all();
        return view('backoffice.pages.service',compact('service_list','servicesList'));
    }
}
