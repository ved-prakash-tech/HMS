<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
   @include('admin.css');
  </head>
  <body>
    @include('admin.header');
  
    @include('admin.sidebar');
   
    <div class="page-content">
      <div class="page-header">
        <div class="container-fluid">
          <center>
            <h1>Mail send to {{$data->name}}</h1>
            <form action="{{url('mail', $data->id)}}" method="POST">
              @csrf
             <div>
              <label>Greeting</label>
              <input type="text" name="greeting">
             </div>
             <div>
              <label>Mail Body</label>
              <textarea name="body" id="" cols="30" rows="10"></textarea>
             </div>
             <div>
              <label>Action</label>
              <input type="text" name="action_text">
             </div>
             <div>
              <label>Action URL</label>
              <input type="text" name="action_url">
             </div>
             <div>
              <label>End Line</label>
              <input type="text" name="end_line">
             </div>
             <div>
              <input type="submit" class="btn btn-primary" value="Send Mail">
             </div>
            </form>
          </center>
        </div>
      </div>
    </div>

   
     @include('admin.footer');
  </body>
</html>