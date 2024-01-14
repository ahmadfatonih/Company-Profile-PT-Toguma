<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'subject' => 'required|max:255',
            'message' => 'required',
        ]);

        Form::create($validatedData);

        // return back()->with('succes', 'Message sent successfully!');
        return redirect()->back()->with('success', 'Thank you for contacting us!');
    }
}
