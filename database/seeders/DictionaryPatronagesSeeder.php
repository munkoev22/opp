<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DictionaryPatronages;
class DictionaryPatronagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DictionaryPatronages::create(array('title'=>'да',
            'system_id'=>1
        ));
        DictionaryPatronages::create(array('title'=>'нет',            
            'system_id'=>2  
        ));
        
    }
}
