<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DictionaryVisitedDoctor;
class DictionaryVisitedDoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DictionaryVisitedDoctor::create(array('title'=>'да',
            'system_id'=>1
        ));
        DictionaryVisitedDoctor::create(array('title'=>'нет',            
            'system_id'=>2  
        ));
       
    }
}
