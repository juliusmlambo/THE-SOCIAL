<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="./" style="font-weight: 900">Social</a>
          <a class="nav-link active" aria-current="page" href="./">Home</a>
          <a class="nav-link" href="./about">About</a>
          <a class="nav-link" href="./services">Services</a>
          <a class="nav-link" href="./posts">Blog</a>
         
         
          <!--gggggggggggggg-->
          <ul class="nav navbar-nav navbar-right">

              @if (Auth::guest())
              <li><a href="{{route('login')}}">Login</a></li>
              <li><a href="{{route('register')}}">Register</a></li>
                  
              @else
                  <li class="">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        {{Auth::user()->name}}<span class="caret"></span>
                      </a>

                     
                          <div>

                            <li><a href="/home">dashboard</a></li>
                            <li><a href="{{route('logout')}}" 
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                              
                              Logout
                              </a></li>
                            
                            <form id="logout-form" action="{{route('logout')}}" method="POST">

                                {{ csrf_field() }}
                            </form>

                          </div>


                  

                  </li>
              @endif
         
          </ul> 
        </div>

    

        
      </div>

     
    </div>
  </nav>