<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $counter = 1;

    public function increment()
    {
        $this->counter++;
    }

    public function decrement()
    {
        $this->counter--;
    }

    public function render()
    {
        $counter = $this->counter;
        return view('livewire.counter', compact('counter'));
    }
}
