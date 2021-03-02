<?php

namespace App\Http\Controllers;

use App\Models\UserList1;
use App\Models\UserList2;
use App\Models\UserList4;
use App\Models\UserTimeList;
use Illuminate\Http\Request;

class BackofficeAboutController extends Controller
{
    public function index(){
        $userList1=UserList1::all();
        $userList2=UserList2::all();
        $userList4=UserList4::all();
        $userTime=UserTimeList::all();
        return view('backoffice.pages.about', compact('userList1','userList2','userList4','userTime'));
    }
}
