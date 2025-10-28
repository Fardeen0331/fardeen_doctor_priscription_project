<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use Illuminate\Support\Facades\Validator;

class DoctorController extends Controller
{
    // Create Doctor view
    public function createGstBill(Request $request){
        $request->validate([
            //Basic & Contact Info
    'full_name'             => 'required|string|max:255',
    'age'                   => 'required|integer|min:25|max:100', 
    'gender'                => 'required|in:Male,Female,Other',
    'phone_no'              => 'required|string|min:10|max:15|unique:doctors,phone_no',
    'email'                 => 'required|email|unique:doctors,email|max:255', 
    'date_of_birth'         => 'required|date|before_or_equal:today',
    'address'               => 'nullable|string|max:500',
    'cnic'                  => 'nullable|string|size:13|unique:doctors,cnic',
    
    // Professional Info
    'specialization'        => 'required|string|max:100',
    'qualification'         => 'required|string|max:255',
    'pmdc_registrtion_no'   => 'required|string|unique:doctors,pmdc_registrtion_no|max:50', 
    'clinic_hospital_name'  => 'nullable|string|max:255',
    'consultaion_fee'       => 'required|numeric|min:0', 
    
    // System aur Portal Access
    'availability'          => 'required|array', 
    'availability.*'        => 'in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', 
    'perception_access'     => 'required|boolean', 
        ]);

        return redirect()->back()->with('success', 'Doctor record successfully saved!');
        
    }
}
