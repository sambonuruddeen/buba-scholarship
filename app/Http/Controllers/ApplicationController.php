<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    //
    public function index()
    {
        return view('application');
    }

    public function store(Request $request)
    {
        // Validate the form data
        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|email',
        //     'phone' => 'required|numeric',
        //     'address' => 'required|string',
        //     'city' => 'required|string',
        //     'state' => 'required|string',
        //     'country' => 'required|string',
        //     'institution' => 'required|string',
        //     'course' => 'required|string',
        //     'lga' => 'required|string',
        //     'status' => 'required|string',
        // ]);

        // // Create a new application record
        // $application = new Application();
        // $application->name = $validatedData['name'];
        // $application->email = $validatedData['email'];
        // $application->phone = $validatedData['phone'];
        // $application->institution = $validatedData['institution'];
        // $application->course = $validatedData['course'];
        // $application->lga = $validatedData['lga'];
        // $application->status = 'pending';
        // $application->save();

        // Redirect to the dashboard or show a success message
        //return redirect()->route('apply-success')->with('success', 'Application submitted successfully!');
        // Redirect to the dashboard or show a success message
        return view('apply');
        // Redirect to the dashboard or show a success message

        //return redirect()->route('dashboard')->with('success', 'Application submitted successfully!');


    }
            
}
