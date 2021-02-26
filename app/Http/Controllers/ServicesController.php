<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Header;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){
        $headers= Header::all();
        $footers=Footer::all();
        return view('pages.services', compact('headers','footers'));
    }
}
