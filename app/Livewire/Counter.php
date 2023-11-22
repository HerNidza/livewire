<?php

namespace App\Livewire;

use Livewire\Component;

class Counter
{
    public int $count = 0;
    public function increment()
    {
        $this->count++;
    }
    public function render(): string
    {
        return <<<'HTML'
            <div class="counter">
                <div class="wrapper">
                    <span>{{ $count }}</span>
                    <button wire:click="increment">+</button>
                </div>
            </div>
        HTML;
    }
}
