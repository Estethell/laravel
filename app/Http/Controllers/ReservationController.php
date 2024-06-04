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

    public function approve($activityId, $userId)
    {
        if (Auth::user()->role != 'admin') 
        return abort(401);

       

        User::find($userId)->courses()->updateExistingPivot($activityId, ['status'=>'active']);
        
        return redirect()->route('palestra.reservation.show');
        
    }

    public function decline($activityId, $userId)
    {
        if (Auth::user()->role != 'admin') 
        return abort(401);

       

        User::find($userId)->courses()->updateExistingPivot($activityId, ['status'=>'rejected']);
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

       
if (Auth::user()->role == 'admin') {
       $courses = Course::with('users','activity', 'slot')->get();
        // dd($utente->courses);
        return view('palestra.reservation', ['reservations'=>$courses]);
}

        else {
            $utente = User::with('courses','courses.activity', 'courses.slot')->find(Auth::id());
            // dd($utente->courses);
            return view('palestra.reservation', ['reservations'=>$utente->courses]);
        }

        
       
    }
   
    
    
    public function destroy($courseId)
    {
        $course = Course::find($courseId);
       $course->users()->detach(Auth::id());
       
       return redirect()->route('palestra.reservation.show');
    }
}
