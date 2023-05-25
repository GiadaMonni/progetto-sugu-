    <x-layout>
        <div class="container-fluid">
            <div class="row">
                    <div class="col-12">
                        <x-header/>     
                    </div>

                    <div class="container-fluid">
                        <div class="row">
                            @foreach ($announcements as $announcement)
                                {{-- card --}}
        <div class="col-12 col-md-8 col-lg-3 section over-hide">
            <div class="container">
                <div class="row full-height justify-content-center">
                    <div class="col-12 text-center align-self-center py-5">
                        <div class="section text-center py-5 py-md-0">
                            <input class="pricing" type="checkbox" id="pricing" name="pricing"/>
                            <label for="pricing"><span class="block-diff">Viaggio<span class="float-right"> Itinerario </span></span></label>
                            <div class="card-3d-wrap mx-auto">
                                <div class="card-3d-wrapper">
                                    <div class="card-front">
                                        <div class="pricing-wrap">
                                            <h4 class="mb-5">{{$announcement->name}}</h4>
                                            <h2 class="mb-2"> € {{$announcement->price}}</h2>
                                            <p class="mb-4">{{$announcement->distretto}}</p>
                                            <p class="mb-1"><i class="uil uil-location-pin-alt size-22"></i></p>
                                            <p class="my-4"> Un esperienza da sogno </p>
                                            <a href="#0" class="link"> Dettaglio </a>
                                            <div class="img-wrap img-2">
                                                <img src="https://wordpress-network.prod.aws.skyscnr.com/wp-content/uploads/2019/01/Giappone.jpeg?w=1000&h=312&crop=1" alt="MONTE FUJI">
                                            </div>
                                            <div class="img-wrap img-1">
                                                <img src="/img/tempio-giapu.png" alt="TEMPIO GIAPU">
                                            </div>
                                            <div class="img-wrap img-3">
                                                <img src="/img/Senzanome.png" alt="">
                                            </div>
                                            <div class="img-wrap img-6">
                                                <img src="/img/fioreLoto.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-back">
                                        <div class="pricing-wrap">
                                            <h4 class="mb-5"> Viaggio </h4>
                                            <p class="mb-2"> Vieni a scoprire {{$announcement->name}}</p>
                                            <p class="mb-4"> {{$announcement->body}} </p>
                                            <p class="mb-1"><i class="uil uil-location-pin-alt size-22"></i></p>
                                            {{-- <p class="mb-4">Tara, Serbia</p> --}}
                                            <a href="#0" class="link"> dettaglio </a>
                                            <div class="img-wrap img-2">
                                                <img src="https://st.focusedcollection.com/9264440/i/650/focused_237840754-stock-photo-aerial-view-tokyo-night-cityscape.jpg" alt="">
                                            </div>
                                            <div class="img-wrap img-4">
                                                <img src="/img/gatto.png" alt="">
                                            </div>
                                            <div class="img-wrap img-5">
                                                <img src="https://assets.codepen.io/1462889/Ivy.png" alt="">
                                            </div>
                                            <div class="img-wrap img-7">
                                                <img src="https://assets.codepen.io/1462889/IvyRock.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                            
                            @endforeach
                        </div>
                    </div>
        </x-layout>
