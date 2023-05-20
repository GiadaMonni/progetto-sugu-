<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;

class CreateAnnouncement extends Component
{
    public $name;
    public $body;
    public $distretto;
    public $price;
    public $category;

    
    protected $rules = [
        'name' => 'required|min:3',
        'body' =>'required|min:10',
        'distretto' =>'required|min:3',
        'price' =>'required|numeric',
        'category' =>'required',
    ];

    
    // protected $messages = [
    //     'requirede' => 'il campo: e` obbligatorio',
    //     'min' => 'il campo: e` troppo corto',
    //     'numeric' => 'il campo attribut: deve essere un numero',
    // ];

    public function store()
    {
        $category=Category::find($this->category);
        $category->announcements()->create([ 
            'name' => $this->name,
            'body' => $this->body,
            'distretto' => $this->distretto,
            'price' => $this->price,]);

        session()->flash('message', 'caricamento avveenuto con successo');
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
    public function render(){
        return view('livewire.create-announcement');
    }
}
