        <div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="login-box">
                            <p> ANNUNCI </p>
                             
                            @if (session()->has('message'))
                            <div class="flex flex-row justify-content-center my-2 alert    alert-success">
                                {{session('message')}}
                            </div>    
                            @endif
                            
                            <form wire:submit.prevent="store">
                                @csrf
                            <div class="user-box">
                                <input wire:model="name" type="text" class="form-control  @error('name') text-danger is-invalid @enderror">
                                <label for="name"> Citta`</label>
                            </div>

                            <div class="user-box">
                                <input wire:model="body" type="text" class="form-control @error('body') text-danger is-invalid @enderror">
                                <label for="body"> Descrizione </label>
                            </div>

                            <div class="user-box">
                                <input wire:model="province" type="text" class="form-control @error('category') text-danger is-invalid @enderror">

                                <label for="province"> Prefettura </label>
                            </div>

                            <div class="user-box">
                                <input wire:model="price" type="text" class="form-control @error('price') text-danger is-invalid @enderror">
                                    
                                <label for="price"> Prezzo </label>
                            </div>
                        
                            <a href="" type="submit">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                Crea
                            </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
