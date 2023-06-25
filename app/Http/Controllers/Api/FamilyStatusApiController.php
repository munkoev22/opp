<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DictionaryFamilyStatus;
use App\Http\Resources\FamilyStatusResource;
class FamilyStatusApiController extends Controller
{
    public function index()
    {
     $FamilyStatus = DictionaryFamilyStatus::all();
     return FamilyStatusResource::collection($FamilyStatus);
    }
    
    public function posts($id)
    {
     $posts = Post::where('id', $id)->orderBy('id', 'desc')->paginate();
     return PostResource::collection($posts);
    }
}
