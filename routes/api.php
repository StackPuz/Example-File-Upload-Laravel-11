<?php

use App\Http\Controllers\UploadController;

Route::post('/submit', [ UploadController::class, 'submit' ]);