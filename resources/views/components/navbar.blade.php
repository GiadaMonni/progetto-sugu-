<nav id="navbar" class="navbar bg-acqua-marina text-blue">

    <div class="container-fluid">

      <a class="navbar-brand col-12 col-md-2" href="#">
        <img id="pinkcar" src="/img/familia.png" alt="sugo" width="70" height="65">
      </a>
      <ul class="d-flex col-12 col-md-8 ">
        
        @guest
      

        <a href=" {{route('login')}}">
          <li class="px-2 fs-6 link1"> Login </li>
        </a> 

        @else

      <li class="px-2 fs-6 link1 dropdown"> 

        <a href="" class="text-center" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> {{Auth::user()->name}} </a>

        <div class="container-fluid">
          <div class="row">
            <div class=" col-12 col-md-8 col-lg-2 ">

              <ul class="dropdown-menu tendina" >
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
          <li class="px-1 fs-4 link2">Articoli</li>
        </a> --}}
        <a href="{{route('homepage')}}">
          <li class="px-2 fs-6 link3">Home</li>
        </a>
        
        <div class="dropdown link3 category fs-6">
          <div class="navbott" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="categoriesDropdown">
           Category
          </div>
          <ul class="dropdown-menu tendina" aria-labelledby="categoriesDropdown">
            @foreach($categories as $category)
            <li><a class="dropdown-item " href="{{route('categoryShow',compact('category'))}}">{{($category->name)}}</a></li>
            @endforeach
          </ul>
        </div>
        
      <a href=""> 
        <li class="px-2 fs-6 link3">Chi siamo</li>
      </a>
    </ul>
    <a class="navbar-brand col-12 col-md-1" href="#">
      <img src="/img/maletas.png" alt="sugo" width="60" height="50">
    </a>
    </div>
    </nav>