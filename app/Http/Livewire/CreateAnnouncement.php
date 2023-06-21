<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class CreateAnnouncement extends Component
{
    use WithFileUploads;

    public $name;
    public $body;
    public $distretto;
    public $price;
    public $category;
    public $temporary_images;
    public $images=[];

    
    protected $rules = [
        'name' => 'required|min:3',
        'body' =>'required|min:10',
        'distretto' =>'required|min:3',
        'price' =>'required|numeric',
        'category' =>'required',
        'images.*' =>'image|max:1024',
        'temporary_images.*' =>'image|max:1024',
    ];

    
    protected $messages= [
        'requirede'=>'il campo  e` obbligatorio',
        'min'=>'il campo  e` troppo corto',
        'numeric'=>'il campo  deve essere un numero',
        'temporary_images.required'=> 'inserimento immagine obbligatorio',
        'temporary_images.*.image'=>'i file devono essere immagini',
        'temporary_images.*.max'=>'l\'immagine dev\'essere massimo imb',
        'images.image'=> 'immagine obbligatoria',
        'images.max'=>'l\'immagine dev\'essere massimo imb',
    ];

    public function updatedTemporaryImages()
    {
        if($this->validate(['temporary_images.*'=>'image']))
        {
            foreach($this->temporary_images as $image){$this->images[] = $image;}
        }
    }

    public function removeImage($key)
    { 
        if(in_array($key, array_keys($this->images)))
        {
            unset($this->images[$key]);
        }
    }

    public function store()
    {
        $category=Category::find($this->category);
       $user=Auth::user();

        $announcement= Announcement::create(
                [ 
                'name'=>$this->name,
                'body'=>$this->body,
                'distretto'=>$this->distretto,
                'price'=>$this->price,
                'category_id'=>$category->id,
                'user_id'=>$user->id
                
                ]
            );
            // Auth::user()->announcements()->save($announcement);
        session()->flash('message','caricamento avvenuto con successo');
        $this->cleanForm();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function cleanForm(){
        $this->name = '';
        $this->body = '';
        $this->distretto = '';
        $this->price = '';
        $this->category = '';
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }
}
