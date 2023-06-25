<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DictionaryRadiationExposure;
class DictionaryRadiationExposureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DictionaryRadiationExposure::create(array('title'=>'Лицо, подвергшееся радиационному облучению',
            'system_id'=>1
        ));
        DictionaryRadiationExposure::create(array('title'=>'Лицо, подвергшееся радиационному облучению, в том числе в Чернобыле',            
            'system_id'=>2  
        ));
        DictionaryRadiationExposure::create(array('title'=>'Не подверглась',            
            'system_id'=>3
        ));
      
    }
}
