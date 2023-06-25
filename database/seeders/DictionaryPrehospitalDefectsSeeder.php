<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DictionaryPrehospitalDefects;
class DictionaryPrehospitalDefectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DictionaryPrehospitalDefects::create(array('title'=>'несвоевременность госпитализации',
            'system_id'=>1
        ));
        DictionaryPrehospitalDefects::create(array('title'=>'недостаточный объем клинико-диагностического обследования',            
            'system_id'=>2  
        ));
        DictionaryPrehospitalDefects::create(array('title'=>'неправильная тактика лечения',            
            'system_id'=>3
        ));
        DictionaryPrehospitalDefects::create(array('title'=>'несовпадение диагноза',            
            'system_id'=>4
        ));
   
    }
}
