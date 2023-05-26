        <div>
            <div class="container my-5">
                <div class="row">
                    <div class="col-12">
                        <div class="login-box">
                            <p> ANNUNCI </p>
                                
                                @if (session()->has('message'))
                                <div class="flex flex-row justify-content-center py-0 px-1 alert alert-success">
                                    {{session('message')}}
                                </div>    
                                @endif
                            
                                <form wire:submit.prevent="store">
                                    @csrf
                                <div class="user-box mb-3">
                                    <input wire:model="name" type="text" class="form-control mb-0 @error('name') text-danger is-invalid @enderror">
                                    <label for="name"> Citta`</label>
                                    @error('name')
                                    {{$message}}
                                    @enderror
                                </div>

                            <div class="user-box mb-3">
                                <input wire:model="body" type="text" class="form-control mb-0 @error('body') text-danger is-invalid @enderror">
                                <label for="body"> Descrizione </label>
                                @error('body')
                                    {{$message}}
                                @enderror
                            </div>

                            <div class="user-box mb-3">
                                <input wire:model="distretto" type="text" class="form-control mb-0 @error('distretto') text-danger is-invalid @enderror">
                                <label for="distretto"> Prefettura </label>
                                @error('distretto')
                                    {{$message}}
                                @enderror
                            </div>

                            <div class="user-box mb-5">
                                <input wire:model="price" type="number" class="form-control mb-0 @error('price') text-danger is-invalid @enderror">
                                <label for="price"> Prezzo </label>
                                @error('price')
                                    {{$message}}
                                @enderror
                            </div>

                            <div class="user-box mt-5">
                                <label for="category"></label>
                                <select wire:model.defer="category" id="category" class="form-control">
                                    <option value=""> Scegli la provincia </option>
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                                                            
                            <button class="butt-ann my-4" type="submit">
                                crea
                            </button>
                        
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
