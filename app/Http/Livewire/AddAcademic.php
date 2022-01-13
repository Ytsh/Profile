<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddAcademic extends Component
{
    public $counts = [];
 
    public function increment()
    {
        // dd(count($this->counts));

        $this->counts[]= count($this->counts);

        // dd($this->counts);


    }
    public function remove($index)
    {
        unset($this->counts[$index]);
    }
    public function render()
    {
        return view('livewire.add-academic');
    }
}
