<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DictionaryCheckSkinIll;
class DictionaryCheckSkinIllSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DictionaryCheckSkinIll::create(array('title'=>'да',
            'system_id'=>1
        ));
        DictionaryCheckSkinIll::create(array('title'=>'нет',            
            'system_id'=>2  
        ));
    
    }
}
