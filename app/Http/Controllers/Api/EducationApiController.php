<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DictionaryEducation;
use App\Http\Resources\EducationResource;
class EducationApiController extends Controller
{
    public function index()
    {
     $employments = DictionaryEducation::all();
     return EducationResource::collection($employments);
    }
    
    public function posts($id)
    {
     $posts = DictionaryEducation::where('id', $id)->orderBy('id', 'desc')->paginate();
     return EducationResource::collection($posts);
    }
}
