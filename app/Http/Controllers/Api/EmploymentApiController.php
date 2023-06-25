<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DictionaryEmployment;
use App\Http\Resources\EmploymentResource;
class EmploymentApiController extends Controller
{
    public function index()
    {
     $employments = DictionaryEmployment::all();
     return EmploymentResource::collection($employments);
    }
    
    public function posts($id)
    {
     $posts = DictionaryEmployment::where('id', $id)->orderBy('id', 'desc')->paginate();
     return EmploymentResource::collection($posts);
    }
}
