<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DictionaryAdmittedStationaryConditions;
use App\Http\Resources\AdmittedStationaryConditionsResource;

class AdmittedStationaryConditionsApiController extends Controller
{
    public function index()
    {
     $employments = DictionaryAdmittedStationaryConditions::all();
     return AdmittedStationaryConditionsResource::collection($employments);
    }
    
    public function posts($id)
    {
     $posts = DictionaryAdmittedStationaryConditions::where('id', $id)->orderBy('id', 'desc')->paginate();
     return AdmittedStationaryConditionsResource::collection($posts);
    }
}
