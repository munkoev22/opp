<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DictionaryPrehospitalDefects;
use App\Http\Resources\PrehospitalDefectsResource;
class PrehospitalDefectsApiController extends Controller
{
    //
    public function index()
    {
     $employments = DictionaryPrehospitalDefects::all();
     return PrehospitalDefectsResource::collection($employments);
    }
    
    public function posts($id)
    {
     $posts = DictionaryPrehospitalDefects::where('id', $id)->orderBy('id', 'desc')->paginate();
     return PrehospitalDefectsResource::collection($posts);
    }
}
