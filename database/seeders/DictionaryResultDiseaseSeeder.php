<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DictionaryResultDisease;
class DictionaryResultDiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DictionaryResultDisease::create(array('title'=>'выписана - в удовлетворительном состоянии',
            'system_id'=>1
        ));
        DictionaryResultDisease::create(array('title'=>'переведена в другую медицинскую организацию',            
            'system_id'=>2  
        ));
      
    }
}
