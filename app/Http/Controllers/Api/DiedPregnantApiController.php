<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DictionaryDiedPregnant;
use App\Http\Resources\DiedPregnantResource;
class DiedPregnantApiController extends Controller
{
    public function index()
    {
        $employments = DictionaryDiedPregnant::all();
        return DiedPregnantResource::collection($employments);
       }
       
       public function posts($id)
       {
        $posts = DictionaryDiedPregnant::where('id', $id)->orderBy('id', 'desc')->paginate();
        return DiedPregnantResource::collection($posts);
       }
}
