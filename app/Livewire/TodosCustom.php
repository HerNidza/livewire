<?php

namespace App\Livewire;

class TodosCustom
{
    public $draft = 'Some todos...';

    public $todos;

    public function mount()
    {
        $this->todos = collect(['One todo', 'Two todo']);
    }

    public function updatedDraft (): void
    {
        $this->draft = strtoupper($this->draft);
    }

    public function addTodo()
    {
        $this->todos->push($this->draft);

        $this->draft = '';
    }

    public function render(): string
    {
        return <<<'HTML'
        <div class="todo__flex">
            <div class="todos">
                <input type="text" wire:model="draft">
                <button wire:click="addTodo">Add Todo</button>

                <ul>
                    @foreach($todos as $todo)
                        <li>{{ $todo}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        HTML;
    }
}
