<?php

namespace App\Http\Controllers;


use App\Models\Course;

use App\Models\Activity;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activity::orderBy('created_at', 'DESC')->paginate(4);
        return view('palestra.activities', [
            'activities' => $activities,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
       
    }

    /**
     * Display the specified resource.
     */
    public function show($course)
    {
        $course = Course::with('activity', 'slot')->find($course);
        return view('palestra.about', [

            'course' => $course,

        ]);
    }
        
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
   
    {
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        
    }
}
