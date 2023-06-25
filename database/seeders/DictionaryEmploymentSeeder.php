<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DictionaryEmployment;


class DictionaryEmploymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        DictionaryEmployment::create(array('title'=>'работает',
            'system_id'=>1
        ));
        DictionaryEmployment::create(array('title'=>'проходит военную службу и приравненную к ней службу',            
            'system_id'=>2  
        ));
        DictionaryEmployment::create(array('title'=>'пенсионерка',            
            'system_id'=>3
        ));
        DictionaryEmployment::create(array('title'=>'студентка',            
            'system_id'=>4
        ));
        DictionaryEmployment::create(array('title'=>'не работает',            
            'system_id'=>5
        ));
        DictionaryEmployment::create(array('title'=>'прочее',            
            'system_id'=>6
        ));
    }
}
