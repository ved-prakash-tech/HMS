<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Room;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $usertype = Auth::user()->usertype;

            if ($usertype == 'user') {
                return view('dashboard');
            } elseif ($usertype == 'admin') {
                return view('admin.index');
            } else {
                return redirect()->back()->with('error', 'Invalid user type');
            }
        } else {
            return redirect('/login')->with('error', 'Please login first');
        }
    }

    public function home()
     {
        return view('home.index');
     }

     public function create_room()
      {
        return view('admin.create_room');
      }

     public function add_room(Request $request)
      {
         $data = new Room();
         $data->room_title = $request->title;
         $data->description = $request->description;
         $data->price = $request->price;
         $data->wifi = $request->wifi;
         $data->room_type = $request->type;
         $image = $request->image;
         if($image)
         {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('room', $imagename);

            $data->image = $imagename;
         }
         $data->save();

         return redirect()->back();
      }

      public function view_room()
      {
        $data = Room::all();
         return view('admin.view_room', compact('data'));
      }

      public function room_delete($id)
      {
        $data = Room::find($id);
        $data->delete();
        return redirect()->back();
      }

      public function room_update($id)
      {
        $data = Room::find($id);
        return view('admin.update_room', compact('data'));
      }

      public function edit_room(REQUEST $request, $id)
      {
        $data = Room::find($id);
        $data->room_title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->wifi = $request->wifi;
        $data->room_type = $request->room_type;

        $image = $request->image;
        if($image)
         {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('room', $imagename);

            $data->image = $imagename;
         }

        $data->save();
        return redirect()->back();
      }

    }