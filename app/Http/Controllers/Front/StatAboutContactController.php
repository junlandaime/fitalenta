<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Setting;

class StatAboutContactController extends Controller
{
    public function index()
    {
        $stats = setting('stats') ?? [];

        // Fallback data in case of empty or invalid stats
        if (empty($stats)) {
            $stats = [
                [
                    'value' => 100,
                    'label' => 'Happy Clients',
                    'duration' => 50
                ],
                // Add more default stats if needed
            ];
        }
        // Decode company story from JSON
        $companyStory = json_decode(setting('company_story'), true) ?? [
            'title' => 'Our Story',
            'content' => 'Default company story content'
        ];
        // Decode contact info from JSON
        $contactInfo = setting('contact_info') ?? [
            'address' => 'Your Company Address',
            'phone' => 'Your Phone Number',
            'email' => 'your@email.com',
            'hours' => 'Monday - Friday: 9AM - 5PM'
        ];
        // Decode social media from JSON
        $socialMedia = setting('social_media') ?? [
            'facebook' => '',
            'twitter' => '',
            'instagram' => '',
            'linkedin' => '',
            'youtube' => ''
        ];

        return view('stat-about-contact', compact(
            'stats',
            'companyStory',
            'contactInfo',
            'socialMedia'
        ));
    }
}
