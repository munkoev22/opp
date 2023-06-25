<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DictionaryEducation;
class DictionaryEducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DictionaryEducation::create(array('title'=>'профессиональное высшее',
            'system_id'=>1
        ));
        DictionaryEducation::create(array('title'=>'среднее',            
            'system_id'=>2  
        ));
        DictionaryEducation::create(array('title'=>'общее: среднее',            
            'system_id'=>3
        ));
        DictionaryEducation::create(array('title'=>'основное',            
            'system_id'=>4
        ));
        DictionaryEducation::create(array('title'=>'начальное',            
            'system_id'=>5
        ));
        DictionaryEducation::create(array('title'=>'неизвестно',            
            'system_id'=>6
        ));
    }
}
