<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DictionaryTerrain;

class DictionarySeederTerrain extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DictionaryTerrain::create(array('title'=>'городская',            
            'system_id'=>1
        ));
        DictionaryTerrain::create(array('title'=>'сельская',            
            'system_id'=>2
        ));
        DictionaryTerrain::create(array('title'=>'неизвестно',            
            'system_id'=>0
        ));
    }
}
