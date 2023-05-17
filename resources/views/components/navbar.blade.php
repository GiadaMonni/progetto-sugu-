<nav id="navbar" class="navbar bg-acqua-marina text-blue">

    <div class="container d-flex justify-content-center">

      <a class="navbar-brand col-12 col-md-2" href="#">
        <img id="pinkcar" src="/img/familia.png" alt="sugo" width="70" height="65">
      </a>
      <ul class="d-flex col-12 col-md-8 ">
        
        @guest
      

        <a href=" {{route('login')}}">
          <li class="px-3 fs-4 link1"> Login </li>
        </a> 

        @else

      <li class="px-3 fs-4 link1 "> 

        <a href="" class="dropdown-toggle text-center" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> {{Auth::user()->name}} </a>

        <div class="container-fluid">
          <div class="row">
            <div class=" col-12 col-md-8 col-lg-2 ">

              <ul class="dropdown-menu " >
    
                {{-- <li>
                  <a class="dropdown-item" href="#">Action</a>
                </li>
      
                <li>
                  <a class="dropdown-item" href="#">Another action</a>
                </li> --}}
      
                {{-- <li>
                  <hr class="dropdown-divider">
                </li> --}}
      
                <li>
                  <a class="dropdown-item" href="/logout" onclick="event.preventDefault();getElementById('form-logout').submit();"> Logout</a>
                </li>
      
                <form id="form-logout" action="{{route('logout')}}" method="POST" class="d-none">
                @csrf
                </form>
                
              </ul>
              
            </div>
          </div>
        </div>

      </li>

        @endguest
        {{-- <a href="">
          <li class="px-3 fs-4 link2">Articoli</li>
        </a> --}}
        <a href="">
          <li class="px-3 fs-4 link1">Home</li>
        </a>
      <a href=""> 
        <li class="px-3 fs-4 link3">Chi siamo</li>
      </a>
    </ul>
    <a class="navbar-brand col-12 col-md-1" href="#">
      <img src="/img/maletas.png" alt="sugo" width="60" height="50">
    </a>
    </div>
    </nav>