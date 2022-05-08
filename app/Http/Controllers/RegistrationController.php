<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;

class RegistrationController extends Controller
{
    public function preRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'valley' => 'required',
            'email' => 'required|email',
            'contact' => 'required',
            'previous_school' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'valley' => $request->valley,
            'previous_school' => $request->previous_school,
            'contact' => $request->contact,
        ];
// dd($data);
        $registration = Registration::create($data);
        return redirect()->back()
        ->with('success', 'Your submission is received and we will contact you soon');
    }
}
