<?php

namespace App\Http\Controllers;

use App\Models\CourtDecision;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;


class CourtDecisionController extends Controller {

    public function index(){
        $decisions = CourtDecision::all();
        return view('decisiontest.index', ['decisions' => $decisions]);
    }

    public function testViewLayout() {
        return view('testview.index'); 
    }

    public function listbyid($id): View {
        $data = CourtDecision::find($id);
        if (!$data) {
            return view('personal404error.index'); 
        } else {
            return view('decisionplus.showbyid', ['decision' => $data]);
        }
    
    }
    

}