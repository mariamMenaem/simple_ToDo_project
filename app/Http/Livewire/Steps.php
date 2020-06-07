<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Steps extends Component
{
    public $steps = 0;

    public function increment()
    {
        $this->steps++;
    }

    public function remove()
    {
        $this->steps--;
    }

    public function render()
    {
        return view('livewire.steps');
    }
}
