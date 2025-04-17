<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css');
   <style>
    .table_deg{
      border: 2px solid white;
      margin: auto;
      width: 50%;
      text-align: center;
    }
    table,th, tr {
      border: 2px solid white;
    }
    .th_deg {
      background-color: rgb(72, 214, 37);
    }
   </style>
  </head>
  <body>
    @include('admin.header');
  
    @include('admin.sidebar');
   
    <div class="page-content">
      <div class="page-header">
        <div class="container-fluid">
          <table class="table_deg">
            <tr>
              <th class="th_deg">Room Title</th>
              <th class="th_deg">Description</th>
              <th class="th_deg">Price</th>
              <th class="th_deg">Wifi</th>
              <th class="th_deg">Room Type</th>
              <th class="th_deg">Room Image</th>
              <th class="th_deg">Delete</th>
              <th class="th_deg">Update</th>
            </tr>

            @foreach ($data as $data)
             <tr>
              <td>{{$data->room_title}}</td>
              <td>{{$data->description}}</td>
              <td>{{$data->price}}</td>
              <td>{{$data->wifi}}</td>
              <td>{{$data->room_type}}</td>
              <td>
                <img width="100px" src=" room/{{$data->image}}">
              </td>
              <td>
                <a onclick="return confirm('Are you sure to delete this ');" class="btn btn-danger" href="{{url('room_delete', $data->id)}}">Delete</a>
             
              <td>
                 <a class="btn btn-warning" href="{{url('room_update', $data->id)}}">Update</a> 
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