<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function create()
    {
        return view('booking.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:225',
            'phone' => 'required|string|max:14',
            'domicile' => 'required|string|max:225',
            'time' => 'required',
            'date' => 'required|date',
        ]);

        $booking = new Booking();
        $booking->name = $request->input('name');
        $booking->phone = $request->input('phone');
        $booking->domicile = $request->input('domicile');
        $booking->time = $request->input('time');
        $booking->date = $request->input('date');
        $booking->save();

    

        $message = "Nama: " . $booking->name . "\nNo Telp: " . $booking->phone . "\nDomisili:" . $booking->domicile . "\nWaktu/Jam:" . $booking->time . "\nTanggal:" . $booking->date;
        return redirect()->away("https://wa.me/6281514484772?text=" . urlencode("Saya ingin booking Bossqu") . urlencode("\n") . urlencode($message));
    }
}
