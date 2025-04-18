<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
  @include('home.css')
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
   </body>
</html>