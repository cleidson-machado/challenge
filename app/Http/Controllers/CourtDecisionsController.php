<?php

namespace App\Http\Controllers;

use App\Models\CourtDecision;
use App\Models\User;
use Illuminate\Http\Request;

class CourtDecisionsController extends Controller
{
    

    /**
     * Show a specific court decison.
     *
     * @param $processNumber
     * @return \Illuminate\View\View
     */
    public function decision($processNumber)
    {

        
        $decision = CourtDecision::where('process_number', $processNumber)
            ->with('court')
            ->with('tags')
            ->firstOrFail();

        return view('decision.decision', [
            'decision' => $decision,
            'court' => $decision->court,
            'tags' => $decision->tags
        ]);
    }

}
