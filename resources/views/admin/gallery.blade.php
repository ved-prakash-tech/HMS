<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')
    <!-- Include Bootstrap CSS if not already in admin.css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body class="bg-light">

    @include('admin.header')
    @include('admin.sidebar')

    <div class="page-content ms-5 p-4">
      <div class="container-fluid">

        <h1 class="text-center text-white mb-5 fw-bold display-5">📸 Gallery</h1>

        <div class="row g-4 mb-5">
          @foreach ($gallery as  $item)
            <div class="col-12 col-md-4">
              <div class="card shadow-sm h-90">
                <img src="/gallery/{{$item->image}}" alt="Gallery Image" class="card-img-top" style="height: 180px; object-fit: cover;">
                <div class="card-body text-center">
                  <a href="{{url('delete_gallery', $item->id)}}" 
                    class="btn btn-danger w-75">
                    🗑️ Delete
                  </a>
                </div>
              </div>
            </div>
          @endforeach
        </div>

        <div class="card mx-auto shadow-lg" style="max-width: 500px;">
          <div class="card-body">
            <h2 class="card-title text-center mb-4 fw-bold">Upload New Image</h2>
            <form action="{{url('upload_gallery')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label class="form-label">Select Image</label>
                <input type="file" name="image" class="form-control" required>
              </div>
              <button type="submit" class="btn btn-warning w-100 fw-semibold mb-2">
                ➕ Add Image
              </button>
            </form>
          </div>
        </div>

      </div>
    </div>

    @include('admin.footer')

    <!-- Include Bootstrap JS if needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
