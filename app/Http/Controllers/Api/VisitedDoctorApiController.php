<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DictionaryVisitedDoctor;
use App\Http\Resources\VisitedDoctorResource;
class VisitedDoctorApiController extends Controller
{
    //
    public function index()
    {
     $employments = DictionaryVisitedDoctor::all();
     return VisitedDoctorResource::collection($employments);
    }
    
    public function posts($id)
    {
     $posts = DictionaryVisitedDoctor::where('id', $id)->orderBy('id', 'desc')->paginate();
     return VisitedDoctorResource::collection($posts);
    }
}
