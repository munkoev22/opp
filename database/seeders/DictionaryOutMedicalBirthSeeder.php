<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DictionaryOutMedicalBirth;
class DictionaryOutMedicalBirthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DictionaryOutMedicalBirth::create(array('title'=>'да',
        'system_id'=>1
        ));
   
        DictionaryOutMedicalBirth::create(array('title'=>'нет',            
            'system_id'=>2
        ));
    }
}
