<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DictionaryEmployment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DictionaryAdmittedStationaryConditionsSeeder::class,
            DictionaryCheckSkinIllSeeder::class,
            DictionaryDiedPregnantSeeder::class,
            DictionaryDirectedSeeder::class,
            DictionaryDischargedSeeder::class,
            DictionaryEducationSeeder::class,
            DictionaryEmploymentSeeder::class,
            DictionaryFamilyStatusSeeder::class,
            DictionaryIntoxicationSeeder::class,
            DictionaryOutMedicalBirthSeeder::class,
            DictionaryPatronagesSeeder::class,
            DictionaryPrehospitalDefectsSeeder::class,
            DictionaryRadiationExposureSeeder::class,
            DictionaryResultDiseaseSeeder::class,
            DictionarySeederTerrain::class,
            DictionaryVisitedDoctorSeeder::class,
           
        ]);
    }
    
}
