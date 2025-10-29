<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\MedicineController;


Route::get('/', function(){
    return view('app');
});

// patient
Route::get('/add-patient', [PatientController::class, 'addPatient'])->name('add-patient');

// doctor
Route::get('/add-doctor', [DoctorController::class, 'addDoctor'])->name('add-doctor');

// medicine
Route::get('/add-medicine', [MedicineController::class, 'addMedicine'])->name('add-medicine');


require __DIR__.'/settings.php';
