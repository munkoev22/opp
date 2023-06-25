<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DictionaryFamilyStatus;

class DictionaryFamilyStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DictionaryFamilyStatus::create(array('title'=>'состоит в зарегистрированном браке',            
            'system_id'=>1
        ));
        DictionaryFamilyStatus::create(array('title'=>'не состоит в браке',            
            'system_id'=>2
        ));
        DictionaryFamilyStatus::create(array('title'=>'неизвестно',            
            'system_id'=>0
        ));
    }
}
