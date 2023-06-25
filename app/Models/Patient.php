<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable=['surname','name','patronymic','birth_date','registration_place',
                        'address','terrain','family_status','education','employment',
                        'work_place','insurance_policy','snils','medical_organization' ];
}
