<?php

namespace App\Http\Livewire;
use App\Experience;

use Livewire\Component;

class EditProfessional extends Component
{
    public $counts = [];

    public function mount($experiences)
    {
        // dd($experiences);
        $this->counts = $experiences->toArray();
    }
 
    public function increment()
    {
        // dd(count($this->counts));

        $this->counts[]= count($this->counts);

        // dd($this->counts);


    }
    public function remove($index)
    {

        $var= $this->counts[$index];
        if(isset($var['id']))
            Experience::find($var['id'])->delete();
        unset($this->counts[$index]);

    }
    public function render()
    {
        return view('livewire.edit-professional');
    }
}
