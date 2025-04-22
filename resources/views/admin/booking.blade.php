<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css');
  </head>
  <style>
    .table_deg{
      border: 2px solid white;
      margin: auto;
      width: 75%;
      text-align: center;
    }
    table,th, tr {
      border: 2px solid white;
    }
    .th_deg {
      background-color: rgb(72, 214, 37);
    }
  </style>
  <body>
    @include('admin.header');
  
    @include('admin.sidebar');

    <div class="page-content">
      <div class="page-header">
        <div class="container-fluid">
        
          <table class="table_deg">
            <tr>
              <th class="th_deg">Room ID</th>
              <th class="th_deg">Customer Name</th>
              <th class="th_deg">Email</th>
              <th class="th_deg">Phone</th>
              <th class="th_deg">Arrival Date</th>
              <th class="th_deg">Leave Date</th>
              <th class="th_deg">Status</th>
              <th class="th_deg">Room Title</th>
              <th class="th_deg">Price</th>
              <th class="th_deg">Image</th>
              <th class="th_deg">Delete</th>
            </tr>

           @foreach ($data as $data)
               
           <tr>
             <td>{{$data->room_id}}</td>
             <td>{{$data->name}}</td>
             <td>{{$data->email}}</td>
             <td>{{$data->phone}}</td>
             <td>{{$data->start_date}}</td>
             <td>{{$data->end_date}}</td>
             <td>{{$data->status}}</td>
             <td>{{$data->room->room_title}}</td>
             <td>{{$data->room->price}}</td>
             <td>
              <img  src="/room/{{$data->room->image}}" alt="">
             </td>
             <td>
              <a onclick="return confirm('Are you sure to delete this');" href="{{url('delete_booking', $data->id)}}" class="btn btn-danger">Delete</a>
             </td>
            
             
            </tr>
            @endforeach
       
          </table>

        </div>
      </div>
    </div>
   
    @include('admin.footer');
  </body>
</html>