<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
  @include('home.css')
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <style>
   label{
      display: inline-block;
      width: 100%;
   }
  </style>
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
       <!-- end header -->
      <header>
  @include('home.header')
      </header>

      <div  class="our_room">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage">
                    <h2>Our Room</h2>
                    <p>Lorem Ipsum available, but the majority have suffered </p>
                 </div>
              </div>
           </div>
           
           <div class="row">
          
               
            <div class="col-md-4 col-sm-6">
               <div id="serv_hover"  class="room">
                  <div class="room_img">
                     <figure>
                       <img style="height: 200px; width=250px" src="room/{{$room->image}}" alt="#"/>
    
                     </figure>
                  </div>
                  <div class="bed_room">
                  <h3>{{$room->room_title}}</h3>   
                  <p>{{$room->description}}</p>     
                  <h4>Free Wifi : {{$room->wifi}}</h4>       
                  <h4>Room Type : {{$room->room_type}}</h4>       
                  <h4>Price : {{$room->price}}</h4>       
                  </div>
               </div>
            </div>
            

         <div class="col-md-4">
            <h1><b>Book Room</b></h1>
            @if (session()->has('message'))
                <div class="alert alert-success" role="alert">
                  <button type="button" class="close" data-bs-dismiss="alert">X</button>
                {{session()->get('message')}}
                </div>
            @endif
          
            @if ($errors)

            @foreach ($errors->all() as $errors)
                <li style="color: red">{{$errors}}</li>
            @endforeach
                
            @endif

            <form action="{{url('add_booking', $room->id)}}" method="post">
               @csrf
            <div>
               <label>Name</label>
               <input type="text" name="name"
               @if(Auth::id())
                value="{{Auth::user()->name}}">
                @endif
            </div>
            <div>
               <label>Email</label>
               <input type="email" name="email" 
               @if (Auth::id())  
               value="{{Auth::user()->email}}">
               @endif
            </div>
            <div>
               <label>Phone</label>
               <input type="number" name="phone"  @if (Auth::id())  
               value="{{Auth::user()->phone}}">
               @endif
            </div>
            <div>
               <label>Start Date</label>
               <input type="date" name="startDate" id="startDate">
            </div>
            <div>
               <label>End Date</label>
               <input type="date" name="endDate" id="endDate">
            </div>
            <div>
               <input type="submit" class="btn btn-primary mt-2" value="Book Room" name="submit">
            </div>
         </div>
         </form>

        </div>
        </div>
      </div>
       <!-- end header -->
  
      <!--  footer -->
    @include('home.footer');
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>


       <!-- for choosing only current and future dates -->
      <script>
         $(function() {
         var dtToday = new Date();
         var month = dtToday.getMonth() + 1;
         var day = dtToday.getDate();
         var year = dtToday.getFullYear();
         if (month < 10)
         month = '0' + month;
         if (day < 10)
         day = '0' + day;
         var today = year + '-' + month + '-' + day;
         $('#startDate').attr('min', today);
         $('#endDate').attr('min', today);
         
         });
         </script>
   </body>
</html>