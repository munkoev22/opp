<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EmploymentApiController;
use App\Http\Controllers\Api\FamilyStatusApiController;
use App\Http\Controllers\Api\DictionaryTerrainApiController;
use App\Http\Controllers\Api\EducationApiController;

use App\Http\Controllers\Api\AdmittedStationaryConditionsApiController;
use App\Http\Controllers\Api\CheckSkinIllApiController;
use App\Http\Controllers\Api\DiedPregnantApiController;
use App\Http\Controllers\Api\DirectedApiController;
use App\Http\Controllers\Api\DischargedApiController;
use App\Http\Controllers\Api\IntoxicationApiController;
use App\Http\Controllers\Api\OutMedicalBirthApiController;
use App\Http\Controllers\Api\PatronagesApiController;
use App\Http\Controllers\Api\PrehospitalDefectsApiController;
use App\Http\Controllers\Api\RadiationExposureApiController;
use App\Http\Controllers\Api\ResultDiseaseApiController;
use App\Http\Controllers\Api\VisitedDoctorApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('employments', [EmploymentApiController::class, 'index']);
Route::get('employments/posts/{id}', [EmploymentApiController::class, 'posts']);

Route::get('family_status', [FamilyStatusApiController::class, 'index']);

Route::get('terrain', [DictionaryTerrainApiController::class, 'index']);

Route::get('education', [EducationApiController::class, 'index']);
Route::get('education/posts/{id}', [EducationApiController::class, 'posts']);

Route::get('AdmittedStationaryConditions', [AdmittedStationaryConditionsApiController::class, 'index']);
Route::get('AdmittedStationaryConditions/posts/{id}', [AdmittedStationaryConditionsApiController::class, 'posts']);

Route::get('CheckSkinIll', [CheckSkinIllApiController::class, 'index']);
Route::get('CheckSkinIll/posts/{id}', [CheckSkinIllApiController::class, 'posts']);

Route::get('DiedPregnant', [DiedPregnantApiController::class, 'index']);
Route::get('DiedPregnant/posts/{id}', [DiedPregnantApiController::class, 'posts']);

Route::get('Directed', [DirectedApiController::class, 'index']);
Route::get('Directed/posts/{id}', [DirectedApiController::class, 'posts']);

Route::get('Discharged', [DischargedApiController::class, 'index']);
Route::get('Discharged/posts/{id}', [DischargedApiController::class, 'posts']);

Route::get('Intoxication', [IntoxicationApiController::class, 'index']);
Route::get('Intoxication/posts/{id}', [IntoxicationApiController::class, 'posts']);

Route::get('OutMedicalBirth', [OutMedicalBirthApiController::class, 'index']);
Route::get('OutMedicalBirth/posts/{id}', [OutMedicalBirthApiController::class, 'posts']);

Route::get('Patronages', [PatronagesApiController::class, 'index']);
Route::get('Patronages/posts/{id}', [PatronagesApiController::class, 'posts']);

Route::get('PrehospitalDefects', [PrehospitalDefectsApiController::class, 'index']);
Route::get('PrehospitalDefects/posts/{id}', [PrehospitalDefectsApiController::class, 'posts']);

Route::get('RadiationExposure', [RadiationExposureApiController::class, 'index']);
Route::get('RadiationExposure/posts/{id}', [RadiationExposureApiController::class, 'posts']);

Route::get('ResultDisease', [ResultDiseaseApiController::class, 'index']);
Route::get('ResultDisease/posts/{id}', [ResultDiseaseApiController::class, 'posts']);

Route::get('VisitedDoctor', [VisitedDoctorApiController::class, 'index']);
Route::get('VisitedDoctor/posts/{id}', [VisitedDoctorApiController::class, 'posts']);


