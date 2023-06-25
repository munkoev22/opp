<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DictionaryOutMedicalBirth;
use App\Http\Resources\OutMedicalBirthResource;
class OutMedicalBirthApiController extends Controller
{
    //
    public function index()
    {
     $employments = DictionaryOutMedicalBirth::all();
     return OutMedicalBirthResource::collection($employments);
    }
    
    public function posts($id)
    {
     $posts = DictionaryOutMedicalBirth::where('id', $id)->orderBy('id', 'desc')->paginate();
     return OutMedicalBirthResource::collection($posts);
    }
}
