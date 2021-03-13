<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Index extends Component
{
    public $toggler='false';
    public $info=[];

    protected $listeners = ['toggle' => 'toggleComponent'];

    public function toggleComponent($data)
    {
       $this->info=$data;
        if ($this->toggler=='false') 
     {
        $this->toggler='true';
     }
    } 

   

    public function render()
    {
        return view('livewire.index');
    }
}
