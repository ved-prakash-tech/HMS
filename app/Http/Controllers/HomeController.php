<?php

namespace App\Http\Controllers;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\Gallery;
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

      $startDate = $request->startDate;
      $endDate = $request->endDate;

      $isBooked = Booking::where('room_id', $id)
    ->where(function($query) use ($startDate, $endDate) {
        $query->where('start_date', '<=', $endDate)
              ->where('end_date', '>=', $startDate);
    })
    ->exists();

      if($isBooked){
        return redirect()->back()->with('message', 'Room is already booked for this period! Please choose another date.  ');
      }
      else{
        $data->start_date = $request->startDate;
        $data->end_date = $request->endDate;
      
        $data->save();
        return redirect()->back()->with('message', 'Booking successful');
      }

     
    }

    public function contact(Request $request)
    {
      $contact = new Contact;
      $contact->name = $request->name;
      $contact->email = $request->email;
      $contact->phone = $request->phone;
      $contact->message = $request->message;
      $contact->save();
      return redirect()->back()->with('message', 'Message sent successfully');
    }

    public function our_rooms()
    {
      $room = Room::all();
      return view('home.our_rooms', compact('room'));
    }

    public function hotel_gallery()
    {
      $gallery = Gallery::all();
      return view('home.hotel_gallery', compact('gallery'));
    }

    public function contact_us()
    {
      $contact = Contact::all();
      return view('home.contact_us', compact('contact'));
    }

    public function route_blog()
    {
      return view('home.route_blog');
    }

    public function route_about()
    {
      return view('home.route_about');
    }
}
