<?php

namespace App\Http\Controllers;




use App\Models\User;
use App\Models\Course;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($activityId)
    {
        Auth::user()->courses()->attach($activityId, ['status'=>'pending']);

        return redirect()->route('palestra.reservation.show');

        

        
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
    public function show()
    {
        // $reservation = session()->get('reservation', []);

       

       $utente = User::with('courses','courses.activity', 'courses.slot')->find(Auth::id());
        // dd($utente->courses);
        return view('palestra.reservation', ['reservations'=>$utente->courses]);
       
    }
   
    public function destroy($courseId)
    {
        $course = Course::find($courseId);
       $course->users()->detach(Auth::id());
       
       return redirect()->route('palestra.reservation.show');
    }
}
