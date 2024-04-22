<?php

namespace App\Http\Controllers;

use App\Models\ScheduleVisit;
use Illuminate\Http\Request;

class ScheduleVisitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $schedule = ScheduleVisit::query()->paginate(5);
    return view('Villa.Admin.index', compact('schedule'));
    
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'FirstName' => 'required|string',
            'LastName' => 'required|string',
            'Phone' => 'required|string',
            'Email' => 'required|email',
            'VisitDate' => 'required|date',
            'PurposeofVisit' => 'required|string',
            'Message' => 'nullable|string',
        ]);
    
        
        $visits = new ScheduleVisit;
        $visits->FirstName = $validatedData['FirstName'];
        $visits->LastName = $validatedData['LastName'];
        $visits->Phone = $validatedData['Phone'];
        $visits->Email = $validatedData['Email'];
        $visits->VisitDate = $validatedData['VisitDate'];
        $visits->PurposeofVisit = $validatedData['PurposeofVisit'];
        $visits->Message = $validatedData['Message'];
        $visits->save();
        
    
       
        return redirect('/schedule-visit')->with('message', 'Succesfully stored');
    }

    /**
     * Display the specified resource.
     */
    public function show(ScheduleVisit $scheduleVisit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ScheduleVisit $scheduleVisit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ScheduleVisit $scheduleVisit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ScheduleVisit $scheduleVisit)
    {
        //
    }
}
