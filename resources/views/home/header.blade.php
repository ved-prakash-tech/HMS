<!-- header -->
<div class="header">
   <div class="container">
      <div class="row">
         <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
            <div class="full">
               <div class="center-desk">
                  <div class="logo">
                     <a href="{{ url('/') }}"><img src="images/logo.png" alt="#" /></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
            <nav class="navigation navbar navbar-expand-md navbar-dark">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarsExample04">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                     </li>
                     <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                     <li class="nav-item"><a class="nav-link" href="room.html">Our room</a></li>
                     <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                     <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                     <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>

                     @guest
                        <!-- Show login/register if user is not logged in -->
                        <li class="nav-item">
                           <a class="btn btn-success mx-1" href="{{ url('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                           <a class="btn btn-success mx-1" href="{{ url('register') }}">Register</a>
                        </li>
                     @endguest

                     @auth
                        <!-- Show username and logout if user is logged in -->
                        <li class="nav-item text-white d-flex align-items-center mx-2">
                           <i class="fas fa-user mr-1"></i> {{ Auth::user()->name }}
                        </li>
                        <li class="nav-item">
                           <form method="POST" action="{{ route('logout') }}">
                              @csrf
                              <button type="submit" class="btn btn-danger mx-1">
                                 {{ __('Logout') }}
                              </button>
                           </form>
                        </li>
                     @endauth
                  </ul>
               </div>
            </nav>
         </div>
      </div>
   </div>
</div>
<!-- end header -->
