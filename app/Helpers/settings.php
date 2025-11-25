<?php

use App\Models\Setting;

if (!function_exists('setting')) {
    function setting($key)
    {
        $setting = Setting::where('key', $key)->first();
        return $setting ? $setting->value : null;
    }
}

if (!function_exists('update_setting')) {
    function update_setting($key, $value)
    {
        $setting = Setting::where('key', $key)->first();
        if ($setting) {
            $setting->update(['value' => $value]);
            return true;
        }
        return false;
    }
}
