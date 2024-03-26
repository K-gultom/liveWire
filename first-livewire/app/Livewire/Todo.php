<?php

namespace App\Livewire;

use App\Models\Todo as ModelsTodo;
use Livewire\Component;
use Livewire\WithPagination;

class Todo extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $title;
    public $tanggal;
    public $description;

    public function store(){
        $rules = [
            'title' => 'required',
            'tanggal' => 'required',
            'description' => 'required',
        ];
        $pesan = [
            'title.required'=>'Title Wajib diisi',
            'tanggal.required'=>'Tanggal Wajib diisi',
            'description.required'=>'Description Wajib diisi',
        ];

        $validate = $this->validate($rules, $pesan);
        ModelsTodo::create($validate);

        dd($this->title);
        // dd($this->tanggal);
        // dd($this->description); 

        session()->flash('message_todo', 'Data berhasil dimasukkan!');
    }


    public function render()
    {
        
        return view('livewire.todo');
        
    }
}
