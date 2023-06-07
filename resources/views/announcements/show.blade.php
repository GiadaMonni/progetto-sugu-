    <x-layout>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>annuncio{{$announcement->title}}</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12  d-flex justify-center my-5">

    <div class="container dett">
    <div class="card-dett">
        <div class=" card card-detta" id="1">
        <div class="image-container"></div>
        <p>#Giappone</p>
        </div>
        <div class=" card card-detta" id="2">
        <div class="image-container"></div>
        <p>#Sogno</p>
        </div>
        <div class=" card card-detta" id="3">
        <div class="image-container"></div>
        <p>#Da visitare</p>
        </div>  
        <div class=" card card-detta" id="4">
        <div class="image-container"></div>
        <p>#Ricordi indelebili</p>
        </div>
        <div class=" card card-detta" id="5">
        <div class="image-container"></div>
        <p>#Ti aspettiamo</p>
        </div>
    </div>
    <a href="#" class="visuallyhidden card-controller">Carousel controller</a>
    </div>
                </div>
                <div class="col-12 dettaglio my-5">
                    <h4 class="mb-5">{{$announcement->name}}</h4>
                    <p class="mb-4"> {{$announcement->body}} </p>
                    <p class="mb-4">{{$announcement->distretto}}</p>
                    <h2 class="mb-2"> € {{$announcement->price}}</h2>
                    <button class="btn-dettaglio">
                        <a href="{{route('homepage')}}">Esci</a>
                    </button>
                </div>
            </div>
        </div>
    </x-layout>