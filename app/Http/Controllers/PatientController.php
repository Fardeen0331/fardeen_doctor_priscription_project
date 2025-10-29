<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    // view page 
    public function addPatient()
    {
        return view('patient.add');
    }
    // Create Patient view
    public function createGstBill(Request $request)
    {
        $request->validate([
            // Basic Info
            'name'          => 'required|string|max:255',
            'age'           => 'required|integer|min:1|max:120',
            'gender'        => 'required|in:Male,Female,Other',
            'phone_no'      => 'required|string|min:10|max:15|unique:patients,phone_no',
            'date'      => 'required|date|before_or_equal:today',
            'time'      => 'required|string|min:10|max:30|',

            // Lifestyle & Context
            'address'       => 'nullable|string|max:500',
            'occupation'    => 'nullable|string|max:255',
            'diet'          => 'nullable',
            'addiction'     => 'nullable|string|max:500',

            // Medical & Health Data
            'mental_health' => 'nullable|string|max:500',
            'lab_test'      => 'nullable|string|max:500',
        ]);

        return redirect()->back()->with('success', 'Patient record successfully saved!');
    }
}
