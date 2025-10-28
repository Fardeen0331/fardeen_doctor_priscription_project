<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;

class MedicineController extends Controller
{
    // Create Patient view
    public function createGstBill(Request $request)
    {
        $request->validate([
            // Basic Info
            'generic_name'      => 'required|string|max:255|unique:medicines,generic_name',
            'brand_name'        => 'nullable|string|max:255',
            'manufacturer'      => 'nullable|string|max:255',

            // Strength & Type
            'dosage_strength'   => 'required|string|max:50',
            'drug_form'         => 'required|in:Tablet,Syrup,Capsule,Injection',
            'unit_of_measure'   => 'nullable|in:mg,ml,IU',

            // Other Details
            'side_effects'      => 'nullable|string|max:1000',
            'is_active'         => 'sometimes|boolean',
        ]);
    }
}
