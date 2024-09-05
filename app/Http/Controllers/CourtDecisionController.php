<?php

namespace App\Http\Controllers;

use App\Models\CourtDecision;

class CourtDecisionController extends Controller {

    public function index(){
        $decisions = CourtDecision::all();
        return view('decisiontest.index', ['decisions' => $decisions]);
    }

    public function testViewLayout() {
        return view('testview.index'); 
    }

}