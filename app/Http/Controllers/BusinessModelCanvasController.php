<?php

namespace App\Http\Controllers;

use App\Models\SideHustle;
use Illuminate\Http\Request;

class BusinessModelCanvasController extends Controller
{
    public function show($sideHustleId)
    {
        $bmc = SideHustle::findOrFail($sideHustleId)->bmc;
        return response()->json($bmc);
    }

    public function update(Request $request, $sideHustleId)
    {
        $bmc = SideHustle::findOrFail($sideHustleId)->bmc;

        $data = $request->validate([
            'keyPartners' => 'nullable|string',
            'keyActivities' => 'nullable|string',
            'keyResources' => 'nullable|string',
            'valuePropositions' => 'nullable|string',
            'customerRelationships' => 'nullable|string',
            'channels' => 'nullable|string',
            'customerSegments' => 'nullable|string',
            'costStructure' => 'nullable|string',
            'revenueStreams' => 'nullable|string',
        ]);

        $bmc->update($data);
        return response()->json($bmc);
    }
}