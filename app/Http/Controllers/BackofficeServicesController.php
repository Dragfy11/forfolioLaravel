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
        return view('backoffice.pages.service',compact('service_list','serviceList'));
    }
    public function storeService1(Request $request)
    {
        $storeService1 = new Service1;
        $storeService1->ref = $request->ref;
        $storeService1->titre = $request->titre;
        $storeService1->save();
        return redirect()->back();
    }
    public function storeService2(Request $request)
    {
        $storeService2 = new Service2;
        $storeService2->titre = $request->titre;
        $storeService2->subtitre = $request->subtitre;
        $storeService2->copy = $request->copy;
        $storeService2->designed = $request->designed;
        $storeService2->img = $request->img;
        $storeService2->save();
        return redirect()->back();
    }
    public function showService1($id){
        $showService1=Service1::find($id);
        return view('backoffice.partials.show.showService1',compact('showService1'));
    }
    public function showService2($id){
        $showService2=Service2::find($id);
        return view('backoffice.partials.show.showService2',compact('showService2'));
    }
    public function destroyService1($id){
        $destroyService1=Service1::find($id);
        $destroyService1->delete();
        return redirect()->back();
    }
    public function destroyService2($id){
        $destroyService2=Service2::find($id);
        $destroyService2->delete();
        return redirect()->back();
    }
}
