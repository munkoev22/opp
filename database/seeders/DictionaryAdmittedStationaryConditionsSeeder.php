<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DictionaryAdmittedStationaryConditions;
class DictionaryAdmittedStationaryConditionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DictionaryAdmittedStationaryConditions::create(array('title'=>'впервые',
            'system_id'=>1
        ));
    
        DictionaryAdmittedStationaryConditions::create(array('title'=>'повторно',            
            'system_id'=>2
        ));
        DictionaryAdmittedStationaryConditions::create(array('title'=>'да',            
            'system_id'=>3
        ));
        DictionaryAdmittedStationaryConditions::create(array('title'=>'нет',            
            'system_id'=>4
        ));
       

    }
}
