<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    
    public $count = 0;
    public $amount = 1;
    
    public function increment()
    {
        $this->count++;
    }
    
    public function decrement()
    {
        if ($this->count) {
            $this->count--;
        }
    }
    
    public function resetCount()
    {
        $this->count = 0;
    }
    
    public function incrementByAmount()
    {
        $this->count += $this->amount;
    }
    
    public function decrementByAmount()
    {
        $this->count -= $this->amount;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
