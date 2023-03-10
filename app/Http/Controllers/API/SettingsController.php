<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\Settings\SettingResource;
use App\Http\Resources\Settings\SlidesResource;
use App\Settings;
use App\Slides;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function websiteSlides()
    {
        $websiteSlides = Slides::first();
        return response()->json(new SlidesResource($websiteSlides));
    }
    public function websiteSettings()
    {
        $settings = Settings::first();
        return response()->json(new SettingResource($settings));
    }
}
