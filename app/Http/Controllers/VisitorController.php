<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;
use Carbon\Carbon;

class VisitorController extends Controller
{
    public function count(Request $request)
    {
        $ip = $request->ip();
        $userAgent = $request->header('User-Agent');

        $visitor = Visitor::firstOrNew([
            'ip_address' => $ip,
            'user_agent' => $userAgent,
        ]);

        if (!$visitor->exists || Carbon::parse($visitor->last_visit)->isYesterday()) {
            $visitor->visits = ($visitor->visits ?? 0) + 1;
            $visitor->last_visit = Carbon::now();
            $visitor->save();
        }

        $totalVisitors = Visitor::count();
        $totalVisits = Visitor::sum('visits');

        return response()->json([
            'total_visitors' => $totalVisitors,
            'total_visits' => $totalVisits,
        ]);
    }

    public function getStats()
    {
        $totalVisitors = Visitor::count();
        $totalVisits = Visitor::sum('visits');
        $todayVisits = Visitor::whereDate('last_visit', Carbon::today())->count();

        return response()->json([
            'total_visitors' => $totalVisitors,
            'total_visits' => $totalVisits,
            'today_visits' => $todayVisits,
        ]);
    }
}
