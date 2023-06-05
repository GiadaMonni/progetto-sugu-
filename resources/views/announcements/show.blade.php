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
                <div class="col-12 col-md-8 col-lg-5">
                    
    <h1 class="dettaglio">Drag the cards to move them</h1>

    <div class="container dett">
    <div class="card-dett">
        <div class=" card card-detta" id="1">
        <div class="image-container"></div>
        <p>1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, explicabo!</p>
        </div>
        <div class=" card card-detta" id="2">
        <div class="image-container"></div>
        <p>2 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, explicabo!</p>
        </div>
        <div class=" card card-detta" id="3">
        <div class="image-container"></div>
        <p>3 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, explicabo!</p>
        </div>  
        <div class=" card card-detta" id="4">
        <div class="image-container"></div>
        <p>4 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, explicabo!</p>
        </div>
        <div class=" card card-detta" id="5">
        <div class="image-container"></div>
        <p>5 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, explicabo!</p>
        </div>
    </div>
    <a href="#" class="visuallyhidden card-controller">Carousel controller</a>
    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-5">
                    <h4 class="mb-5">{{$announcement->name}}</h4>
                    <h2 class="mb-2"> € {{$announcement->price}}</h2>
                    <p class="mb-4">{{$announcement->distretto}}</p>
                </div>
            </div>
        </div>
    </x-layout>