<?php

namespace App\Http\Controllers;

use App\Models\Contact1;
use App\Models\Contact2;
use App\Models\ContactIcon;
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
        $contactList=Contact1::all();
        $contactIcons=ContactIcon::all();
        $contactList2=Contact2::all();
        return view('pages.contact', compact('headers', 'footers','titres','contactList','contactIcons','contactList2'));
    }

    public function storeContact1(Request $request)
    {
        $storeContact1 = new Contact1;
        $storeContact1->ref = $request->ref;
        $storeContact1->class = $request->class;
        $storeContact1->icon = $request->icon;
        $storeContact1->save();
        return redirect()->back();
    }
    public function storeContact2(Request $request)
    {
        $storeContact2 = new Contact2;
        $storeContact2->icon = $request->icon;
        $storeContact2->titre = $request->titre;
        $storeContact2->text = $request->text;
        $storeContact2->save();
        return redirect()->back();
    }
    public function storeContactIcon(Request $request)
    {
        $storeContactIcon = new ContactIcon;
        $storeContactIcon->icon = $request->icon;
        $storeContactIcon->titre = $request->titre;
        $storeContactIcon->save();
        return redirect()->back();
    }
    public function showContact1($id){
        $showContact1=Contact1::find($id);
        return view('backoffice.partials.show.showContact1',compact('showContact1'));
    }
    public function showContact2($id){
        $showContact2=Contact2::find($id);
        return view('backoffice.partials.show.showContact2',compact('showContact2'));
    }
    public function showContactIcon($id){
        $showContactIcon2=ContactIcon::find($id);
        return view('backoffice.partials.show.showContactIcon',compact('showContactIcon'));
    }
    public function destroyContact1($id){
        $destroyContact1=Contact1::find($id);
        $destroyContact1->delete();
        return redirect()->back();
    }
    public function destroyContact2($id){
        $destroyContact2=Contact2::find($id);
        $destroyContact2->delete();
        return redirect()->back();
    }
    public function destroyContactIcon($id){
        $destroyContactIcon=ContactIcon::find($id);
        $destroyContactIcon->delete();
        return redirect()->back();
    }

}
