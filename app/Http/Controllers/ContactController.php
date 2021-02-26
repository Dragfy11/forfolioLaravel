<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Header;
use App\Models\Titre;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $headers= Header::all();
        $footers=Footer::all();
        $titres=Titre::all();
        return view('pages.contact', compact('headers', 'footers','titres'));
    }
}
