<x-layout>
  
<div class="container">
  <div class="row">
    <div class="col-12 text-light p-5">
        <h3 class="text-center zonrev my-3">{{$announcement_to_check ? 'Annuncio ancora da revisionare' : 'Non ci sono annunci da revisionare'}}</h3>
    </div>
  </div>
</div>
    @if ($announcement_to_check)
    <div class="container ">
      <div class="row">
        <div class="col-12 col-md-8 col-lg-6 ">
          <div id="carouselExample" class="carousel slide mx-5 ">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://img.freepik.com/free-photo/cherry-blossoms-spring-chureito-pagoda-fuji-mountain-sunset-japan_335224-215.jpg?size=626&ext=jpg&ga=GA1.2.315318017.1683296549&semt=sph" class="" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://img.freepik.com/free-photo/people-walking-japan-street-nighttime_23-2148942945.jpg?size=626&ext=jpg&ga=GA1.2.315318017.1683296549&semt=sph" class=" " alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://img.freepik.com/free-photo/beautiful-daigoji-temple-with-colorful-tree-leaf-autumn-season_74190-9903.jpg?size=626&ext=jpg&ga=GA1.2.315318017.1683296549&semt=sph" class="" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
          <div class="col-12 col-md-6 col-lg-6 my-5">
            <h4 class="mb-5">{{$announcement_to_check->name}}</h4>
            <h2 class="mb-2"> € {{$announcement_to_check->price}}</h2>
            <p class="mb-4">{{$announcement_to_check->distretto}}</p>
            <p class="mb-4"> {{$announcement_to_check->body}} </p>
          </div>
       
        <div class="row my-5">
          <div class="col-6">
            <form action="{{route('revisor.accept_announcement' ,['announcement'=>$announcement_to_check])}}" method="POST">
            @csrf
            @method('PATCH')
            {{-- <button class="btn-rev1" type="submit"> accetta </button> --}}
            <button type="submit" class="btn-revisore">
              <div class="wrapper-revisore">
                  <p class="text"> Accetta </p>
          
                  <div class="flower flower1">
                      <div class="petal one"></div>
                      <div class="petal two"></div>
                      <div class="petal three"></div>
                      <div class="petal four"></div>
                  </div>
                  <div class="flower flower2">
                      <div class="petal one"></div>
                      <div class="petal two"></div>
                      <div class="petal three"></div>
                      <div class="petal four"></div>
                  </div>
                  <div class="flower flower3">
                      <div class="petal one"></div>
                      <div class="petal two"></div>
                      <div class="petal three"></div>
                      <div class="petal four"></div>
                  </div>
                  <div class="flower flower4">
                      <div class="petal one"></div>
                      <div class="petal two"></div>
                      <div class="petal three"></div>
                      <div class="petal four"></div>
                  </div>
                  <div class="flower flower5">
                      <div class="petal one"></div>
                      <div class="petal two"></div>
                      <div class="petal three"></div>
                      <div class="petal four"></div>
                  </div>
                  <div class="flower flower6">
                      <div class="petal one"></div>
                      <div class="petal two"></div>
                      <div class="petal three"></div>
                      <div class="petal four"></div>
                  </div>
              </div>
          </button>
          </form>
          </div>
          <div class="col-6">
            <form action="{{route('revisor.reject_announcement' ,['announcement'=>$announcement_to_check])}}" method="POST">
              @csrf
              @method('PATCH')
              {{-- <button type="submit"> Rifiuta </button> --}}
              <button class="btn-revisore">
                <div class="wrapper-revisore">
                    <p class="text"> Rifiuta </p>
            
                    <div class="flower flower1">
                        <div class="petal one"></div>
                        <div class="petal two"></div>
                        <div class="petal three"></div>
                        <div class="petal four"></div>
                    </div>
                    <div class="flower flower2">
                        <div class="petal one"></div>
                        <div class="petal two"></div>
                        <div class="petal three"></div>
                        <div class="petal four"></div>
                    </div>
                    <div class="flower flower3">
                        <div class="petal one"></div>
                        <div class="petal two"></div>
                        <div class="petal three"></div>
                        <div class="petal four"></div>
                    </div>
                    <div class="flower flower4">
                        <div class="petal one"></div>
                        <div class="petal two"></div>
                        <div class="petal three"></div>
                        <div class="petal four"></div>
                    </div>
                    <div class="flower flower5">
                        <div class="petal one"></div>
                        <div class="petal two"></div>
                        <div class="petal three"></div>
                        <div class="petal four"></div>
                    </div>
                    <div class="flower flower6">
                        <div class="petal one"></div>
                        <div class="petal two"></div>
                        <div class="petal three"></div>
                        <div class="petal four"></div>
                    </div>
                </div>
            </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    @endif

</x-layout>