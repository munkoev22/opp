<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DictionaryRadiationExposure;
use App\Http\Resources\RadiationExposureResource;
class RadiationExposureApiController extends Controller
{
    //
    public function index()
    {
     $employments = DictionaryRadiationExposure::all();
     return RadiationExposureResource::collection($employments);
    }
    
    public function posts($id)
    {
     $posts = DictionaryRadiationExposure::where('id', $id)->orderBy('id', 'desc')->paginate();
     return RadiationExposureResource::collection($posts);
    }
}
