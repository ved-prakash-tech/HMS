<!DOCTYPE html>
<html>
<head>
  @include('admin.css')
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  @include('admin.header')
  @include('admin.sidebar')

  <div class="page-content" >
    <div class="container-fluid">

      <div class="card shadow-lg rounded-4">
        <div class="card-header bg-primary text-white text-center rounded-top-4">
          <h2 class="mb-0">📬 Contact Messages</h2>
        </div>
        <div class="card-body p-4">

          <div class="table-responsive">
            <table class="table table-hover table-striped align-middle table-bordered">
              <thead class="table-dark">
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Message</th>
                  <th>Send Email</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $item)
                  <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->message }}</td>
                    <td>
                       <a href="{{url('send_mail', $item->id)}}" class="btn btn-success">Send Mail</a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>

        </div>
      </div>

    </div>
  </div>

  @include('admin.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
