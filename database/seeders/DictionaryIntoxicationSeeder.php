<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DictionaryIntoxication;
class DictionaryIntoxicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DictionaryIntoxication::create(array('title'=>'алкогольное',            
            'system_id'=>1
        ));
        DictionaryIntoxication::create(array('title'=>'наркотическое',            
            'system_id'=>2
        ));
      
    }
}
