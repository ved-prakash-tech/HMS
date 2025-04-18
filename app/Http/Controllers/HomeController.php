<?php

namespace App\Http\Controllers;
use App\Models\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Room_details($id)
    {
        $room = Room::find($id);
        return view('home.room_details', compact('room'));
    }
}
