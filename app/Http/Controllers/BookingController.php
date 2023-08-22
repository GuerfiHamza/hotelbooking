<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
class BookingController extends Controller
{
    public function createBooking(Request $request)
    {
        $booking = new Booking();
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->phone = $request->phone;
        $booking->date = $request->date;
        $booking->time = $request->time;
        $booking->people = $request->people;
        $booking->message = $request->message;
        $booking->save();
        return redirect()->back()->with('message', 'Booking created successfully!');
    }
}
