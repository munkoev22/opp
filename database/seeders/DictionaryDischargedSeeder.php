<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DictionaryDischarged;
class DictionaryDischargedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DictionaryDischarged::create(array('title'=>'в дневной стационар',
            'system_id'=>1
        ));
        DictionaryDischarged::create(array('title'=>'в другую медицинскую организацию',            
            'system_id'=>2  
        ));
        DictionaryDischarged::create(array('title'=>'переведена в другую медицинскую организацию',            
            'system_id'=>3
        ));
       
    }
}
