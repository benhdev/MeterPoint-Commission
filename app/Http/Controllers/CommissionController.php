<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Partner;

use Log;

class CommissionController extends Controller
{
    /**
     * Return the commission for a given partner and possibly meterpoint
     * @author Ben Hirst
     *
     * @param Request $request
     * {
     *     "partner": String,
     *     "meterpoint": Integer?
     * }
     *
     * @return Json
     */
    public function fetch(Request $request)
    {
        $this->validate($request, [
            'partner' => 'required'
        ]);

        /*
            Typically, I'd do a find using the ID of the Partner rather than
            their name in a where clause - as it is entirely possible
            for two partners to have the same name :P

            However, I believe the partner input is passed as a string
        */
        $partner = Partner::with(['meterpoints' => function($query) use($request) {
                if ($request->meterpoint) {
                    /*
                        if we have a Meter Point ID passed within the request
                        then we only want to get the Pivots with this ID
                    */
                    return $query->where('meter_point_id', $request->meterpoint);
                }
            }])
            ->where('name', $request->partner)
            ->first();

        /*
            Here we calculate the total commission for the partner from
            either ALL meterpoints, or one specific meterpoint
        */
        $totalCommission = 0;
        foreach ($partner->meterpoints as $index => $meterpoint) {
            $totalCommission += $meterpoint->consumption * $meterpoint->uplift;
        }

        // Convert the total commission from pence to pounds, and round to 2 decimal places
        $totalCommission = round($totalCommission / 100, 2);

        // Return the commission as a json response
        return response()->json([
            'commission' => $totalCommission
        ]);
    }
}
