<!DOCTYPE html>
<html>
<head> 
  @include('admin.css')
  <style>
  .table_deg {
    border: 2px solid white;
    margin: auto;
    width: 100%;
    text-align: center;
    table-layout: fixed;
     object-fit: cover;
    border-collapse: collapse;
  }

  table, th, td {
    border: 2px solid white;
  }

  .th_deg {
    background-color: rgb(240, 216, 36);
  }

  .table_deg th, .table_deg td {
    padding: 10px;
    word-wrap: break-word;
  }

  .table_deg img {
    width: 80px;
    height: 50px;
    object-fit: cover;
  }
  </style>
</head>
<body>
  @include('admin.header')
  @include('admin.sidebar')

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
            <th class="th_deg">Status Update</th>
          </tr>

          @foreach ($data as $data)
            <tr>
              <td>{{ $data->room_id }}</td>
              <td>{{ $data->name }}</td>
              <td>{{ $data->email }}</td>
              <td>{{ $data->phone }}</td>
              <td>{{ $data->start_date }}</td>
              <td>{{ $data->end_date }}</td>
              <td>
                @if ($data->status == 'Approve')
                  <span style="color: skyblue;">Approved</span>
                @elseif ($data->status == 'Rejected')
                  <span style="color: rgb(245, 83, 19);">Rejected</span>
                @elseif ($data->status == 'waiting')
                  <span style="color: rgb(223, 239, 81);">Waiting</span>
                @else
                  <span style="color: gray;">Unknown</span>
                @endif
              </td>
              <td>{{ $data->room->room_title ?? 'N/A' }}</td>
              <td>{{ $data->room->price ?? 'N/A' }}</td>
              <td>
                @if ($data->room && $data->room->image)
                  <img src="/room/{{ $data->room->image }}" alt="">
                @else
                  No Image
                @endif
              </td>
              <td>
                <a onclick="return confirm('Are you sure to delete this?');" href="{{ url('delete_booking', $data->id) }}" class="btn btn-danger">Delete</a>
              </td>
              <td>
                <span style="padding-bottom: 10px">
                  <a href="{{ url('approve_book', $data->id) }}" class="btn btn-success m-2">Approve</a>
                </span>
                <a href="{{ url('reject_book', $data->id) }}" class="btn btn-warning m-2">Reject</a>
              </td>
            </tr>
          @endforeach

        </table>

      </div>
    </div>
  </div>

  @include('admin.footer')
</body>
</html>
