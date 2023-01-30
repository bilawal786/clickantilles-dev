<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\Settings\SlidesResource;
use App\Slides;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function websiteSlides()
    {
        $websiteSlides = Slides::first();
        return response()->json(new SlidesResource($websiteSlides));
    }
}
