<x-layout>
<div class="container">
  <div class="row">
    <div class="col-12 text-light p-5">
        <h3>{{$announcement_to_check?'Annuncio ancora da revisionare' : 'Non ci sono annunci da revisionare'}}</h3>
    </div>
  </div>
</div>
   @if ($announcement_to_check)
   
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="..." class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
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
              <div>
                <h4 class="mb-5">{{$announcement_to_check->name}}</h4>
                <h2 class="mb-2"> € {{$announcement_to_check->price}}</h2>
                <p class="mb-4">{{$announcement_to_check->distretto}}</p>
                <p class="mb-4"> {{$announcement_to_check->body}} </p>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <form action="{{route('revisor.accept_announcement' ,['announcement'=>$announcement_to_check])}}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit"> accetta </button>
              </form>
              </div>
              <div class="col-12">
                <form action="{{route('revisor.reject_announcement' ,['announcement'=>$announcement_to_check])}}" method="POST">
                  @csrf
                  @method('PATCH')
                  <button type="submit"> Rifiuta </button>
                </form>
              </div>
            </div>
          </div>
        </div>
        @endif
<x-layout/>