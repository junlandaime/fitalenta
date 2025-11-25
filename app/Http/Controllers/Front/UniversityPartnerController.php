<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\UniversityPartner;

class UniversityPartnerController extends Controller
{
    public function index()
    {
        $partners = UniversityPartner::where('is_active', true)
            ->orderBy('order')
            ->get();

        $totalStudents = $partners->sum('student_count');
        $totalUniversities = $partners->count();
        $totalProvinces = $partners->unique('location')->count();

        return view('front.university-partners.index', compact(
            'partners',
            'totalStudents',
            'totalUniversities',
            'totalProvinces'
        ));
    }
}
