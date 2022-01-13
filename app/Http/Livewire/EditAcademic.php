<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Academic;

class EditAcademic extends Component
{
    public $counts = [];

    public function mount($academic)
    {
        // dd($experiences);
        $this->counts = $academic;
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
            Academic::find($var['id'])->delete();
        unset($this->counts[$index]);

    }
    public function render()
    {
        return view('livewire.edit-academic');
    }
}
