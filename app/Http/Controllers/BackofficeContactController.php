<?php

namespace App\Http\Controllers;

use App\Models\Contact1;
use App\Models\Contact2;
use App\Models\ContactIcon;
use Illuminate\Http\Request;

class BackofficeContactController extends Controller
{
    public function index(){
        $contactList=Contact1::all();
        $contactIcons=ContactIcon::all();
        $contactList2=Contact2::all();
        return view('backoffice.pages.contact', compact('contactList','contactIcons','contactList2'));
    }
}
