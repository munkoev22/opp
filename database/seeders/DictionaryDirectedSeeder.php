<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DictionaryDirected;
class DictionaryDirectedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DictionaryDirected::create(array('title'=>'медицинской организацией',
            'system_id'=>1
        ));
        DictionaryDirected::create(array('title'=>'выездной бригадой скорой медицинской помощи',            
            'system_id'=>2  
        ));
        DictionaryDirected::create(array('title'=>'полицией',            
            'system_id'=>3
        ));
        DictionaryDirected::create(array('title'=>'обратилась самостоятельно',            
            'system_id'=>4
        ));
   
    }
}
