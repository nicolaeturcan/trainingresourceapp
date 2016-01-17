<?php

use App\Models\TrainingResource;

/*
|--------------------------------------------------------------------------
| Routes for testing purposes.
|--------------------------------------------------------------------------
|
*/

Route::get('admin/rebuild', function () {
    TrainingResource::rebuild(true);
});

Route::get('admin/generateTrainingResourceSeed', function () {
    \Iseed::generateSeed('training_resources');
});