<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DictionaryCheckSkinIll;
use App\Http\Resources\CheckSkinIllResource;
class CheckSkinIllApiController extends Controller
{
    public function index()
    {
     $employments = DictionaryCheckSkinIll::all();
     return CheckSkinIllResource::collection($employments);
    }
    
    public function posts($id)
    {
     $posts = DictionaryCheckSkinIll::where('id', $id)->orderBy('id', 'desc')->paginate();
     return CheckSkinIllResource::collection($posts);
    }
}
