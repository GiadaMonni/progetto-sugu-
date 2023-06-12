<nav id="navbar" class="navbar bg-acqua-marina text-blue">

    <div class="container-fluid">

      <a class="navbar-brand col-12 col-md-2 col-lg-1" href="#">
        <img id="pinkcar" src="/img/familia.png" alt="sugo" width="70" height="65">
      </a>
      <ul class="d-flex col-12 col-md-8 col-lg-5 ">
        
        @guest
      

        <a href=" {{route('login')}}">
          <li class="px-2 fs-6 link1"> Login </li>
        </a> 

        @else

      <li class="px-2 fs-6 link1 dropdown"> 

        <a href="" class="text-cente link3" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> {{Auth::user()->name}} </a>

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
        @if (Auth::user()->is_revisor)
        <li>
          <a href="{{route('revisor.index')}}" class="link3 mx-2"> _Zona revisore_
          <span class="pall_ross translate-middle badge rounded-pill ">
            {{App\Models\Announcement::toBeRevisionedCount()}}
            <span class="visually-hidden"> Unread Messages</span>
          </span>
        </a>
        </li>
        @endif
        @endguest
        <a href="{{route('homepage')}}">
          <li class="px-2 fs-6 link3">Home</li>
        </a>
        
        <div class="dropdown link3 category fs-6">
          <div class="navbott" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="categoriesDropdown">
           Category
          </div>
          <ul class="dropdown-menu tendina" aria-labelledby="categoriesDropdown">
            @foreach($categories as $category)
            <li>
              <a class="dropdown-item link3 " href="{{route('categoryShow',compact('category'))}}">{{($category->name)}}</a>
            </li>
            @endforeach
          </ul>
          
        </div>

        <a href="{{route('announcements.index')}}"> 
          <li class="px-2 fs-6 link3"> Annunci</li>
        </a>
        
      <a href=""> 
        <li class="px-2 fs-6 link3">Chi siamo</li>
      </a>
    </ul>
    <form action="{{route('announcements.search')}}" method="GET" class="d-flex ">
      <input name="searched" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit"> Search </button>
    </form>
    <a class="navbar-brand col-12 col-md-1 col-lg-1" href="#">
      <img src="/img/maletas.png" alt="sugo" width="60" height="50">
    </a>
    </div>
    </nav>