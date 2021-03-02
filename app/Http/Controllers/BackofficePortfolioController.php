<?php

namespace App\Http\Controllers;

use App\Models\ImagePortfolio;
use App\Models\pricing;
use App\Models\TitrePortfolio;
use Illuminate\Http\Request;

class BackofficePortfolioController extends Controller
{
    public function index(){
        $pricings=pricing::all();
        $titrePortfolios=TitrePortfolio::all();
        $imagePortfolios=ImagePortfolio::all();
        return view('backoffice.pages.portfolio', compact('pricings','titrePortfolios','imagePortfolios'));
    }
}
