<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidateFormController extends Controller

{

    public function validateForm(Request $request){
    $validatedData = $request->validate([
        'name' => 'required|string|max:255|min:4',
        'email' => 'required|email',
        'message'=>'required|string|max:400|min:150'
    ]);


    return redirect()->back()->with('success', 'Form validated successfully');
}
}
