<?php

namespace App\Http\Controllers;
use App\Models\Room;
use App\Models\Booking;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Room_details($id)
    {
        $room = Room::find($id);
        return view('home.room_details', compact('room'));
    }

    public function add_booking(Request $request, $id)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email:rfc', 'max:255'],
            'phone' => ['required', 'string', 'max:10'],
           'startDate' => ['required', 'date'],
            'endDate' => ['required', 'date', 'after:startDate'],
        ]);
      $data = new Booking();
      $data->room_id = $id;
      $data->name = $request->name;
      $data->email = $request->email;
      $data->phone = $request->phone;
      $data->start_date = $request->startDate;
      $data->end_date = $request->endDate;

      $data->save();
      return redirect()->back();
    }
}
