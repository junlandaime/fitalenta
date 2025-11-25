<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::orderBy('group')->get()->groupBy('group');
        return view('admin.settings', compact('settings'));
    }

    public function update(Request $request)
    {
        $settings = $request->except('_token');

        foreach ($settings as $key => $value) {
            $setting = Setting::where('key', $key)->first();
            if ($setting) {
                if ($setting->type === 'json') {
                    $value = json_decode($value, true);
                }
                $setting->update(['value' => $value]);
            }
        }

        return redirect()->route('admin.settings.index')
            ->with('success', 'Settings updated successfully');
    }

    public function updateStats(Request $request)
    {
        $request->validate([
            'stats' => 'required|array',
            'stats.*.value' => 'required|numeric',
            'stats.*.label' => 'required|string',
            'stats.*.duration' => 'required|numeric'
        ]);

        $setting = Setting::where('key', 'stats')->first();
        $setting->update(['value' => $request->stats]);

        return redirect()->route('admin.settings.index')
            ->with('success', 'Stats updated successfully');
    }

    public function updateContactInfo(Request $request)
    {
        $request->validate([
            'address' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'whatsapp' => 'required|string'
        ]);

        $setting = Setting::where('key', 'contact_info')->first();
        $setting->update(['value' => $request->all()]);

        return redirect()->route('admin.settings.index')
            ->with('success', 'Contact information updated successfully');
    }

    public function updateSocialMedia(Request $request)
    {
        $request->validate([
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url'
        ]);

        $setting = Setting::where('key', 'social_media')->first();
        $setting->update(['value' => $request->all()]);

        return redirect()->route('admin.settings.index')
            ->with('success', 'Social media links updated successfully');
    }
}
