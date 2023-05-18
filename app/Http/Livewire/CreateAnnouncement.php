<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use Livewire\Component;

class CreateAnnouncement extends Component
{
    public $name;
    public $body;
    public $province;
    public $price;

    
    protected $rules = [
        'name' => 'required|min:3',
        'body' =>'required|min:10',
        'province' =>'required|min:3',
        'price' =>'required|numeric',
    ];

    
    // protected $messages = [
    //     'requirede' => 'il campo: e` obbligatorio',
    //     'min' => 'il campo: e` troppo corto',
    //     'numeric' => 'il campo attribut: deve essere un numero',
    // ];

    public function store()
    {
        Announcement::create([
            'name' => $this->name,
            'body' => $this->body,
            'province' => $this->province,
            'price' => $this->price,
        ]);
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
        $this->province = '';
        $this->price = '';
    }
    public function render(){
        return view('livewire.create-announcement');
    }
}
