<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DictionaryRadiationExposure extends Model
{
    use HasFactory;
    protected $fillable=['title','system_id'];
}
