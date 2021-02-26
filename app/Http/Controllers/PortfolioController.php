<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Header;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $headers= Header::all();
        $footers=Footer::all();
        return view('pages.portfolio', compact('headers','footers'));
    }
}
