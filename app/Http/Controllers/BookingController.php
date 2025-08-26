<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    
    public function create()
    {
        return view('booktable');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'time' => 'required',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'total_person' => 'required|integer|min:1',
        ]);

        $booking = new Booking();
        $booking->user_id = Auth::id(); 
        $booking->date = $request->date;
        $booking->time = $request->time;
        $booking->name = $request->name;
        $booking->phone = $request->phone;
        $booking->total_person = $request->total_person;
        $booking->status = 'pending'; 
        $booking->save();

       return redirect()->route('book.create')->with('success', 'Your booking has been submitted successfully!');

    }
}
