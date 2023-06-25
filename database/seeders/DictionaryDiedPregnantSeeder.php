<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DictionaryDiedPregnant;
class DictionaryDiedPregnantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DictionaryDiedPregnant::create(array('title'=>'до 22 недель беременности',
            'system_id'=>1
        ));
        DictionaryDiedPregnant::create(array('title'=>'после 22 недель беременности',            
            'system_id'=>2  
        ));
        DictionaryDiedPregnant::create(array('title'=>'роженица',            
            'system_id'=>3
        ));
     
    }
}
