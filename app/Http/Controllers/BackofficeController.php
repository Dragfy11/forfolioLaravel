<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Header;
use App\Models\Titre;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{
    public function index(){
        $headers= Header::all();
        $footers=Footer::all();
        $titres=Titre::all();
        return view('backoffice.homeback', compact('headers','footers','titres'));
    }
    
    public function storeHeader(Request $request)
    {
        $storeHeader = new Header;
        $storeHeader->ref = $request->ref;
        $storeHeader->titre = $request->titre;
        $storeHeader->save();
        return redirect()->back();
    }
    public function storeFooter(Request $request)
    {
        $storeFooter = new Footer;
        $storeFooter->titre = $request->titre;
        $storeFooter->subtitre = $request->subtitre;
        $storeFooter->copy = $request->copy;
        $storeFooter->designed = $request->designed;
        $storeFooter->img = $request->img;
        $storeFooter->save();
        return redirect()->back();
    }
    public function storeTitre(Request $request)
    {
        $storeTitre = new Titre;
        $storeTitre->titre = $request->titre;
        $storeTitre->subtitre = $request->subtitre;
        $storeTitre->save();
        return redirect()->back();
    }
    public function showHeader($id){
        $showHeader=Header::find($id);
        return view('backoffice.partials.show.showHeader',compact('showHeader'));
    }
    public function showFooter($id){
        $showFooter=Footer::find($id);
        return view('backoffice.partials.show.showFooter',compact('showFooter'));
    }
    public function showTitre($id){
        $showTitre=Titre::find($id);
        return view('backoffice.partials.show.showTitre',compact('showTitre'));
    }
    public function destroyHeader($id){
        $destroyHeader=Header::find($id);
        $destroyHeader->delete();
        return redirect()->back();
    }
    public function destroyFooter($id){
        $destroyFooter=Footer::find($id);
        $destroyFooter->delete();
        return redirect()->back();
    }
    public function destroyTitre($id){
        $destroyTitre=Titre::find($id);
        $destroyTitre->delete();
        return redirect()->back();
    }
}
