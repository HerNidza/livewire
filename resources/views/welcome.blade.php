<x-front-layout>
    <div x-data="{ open: false }">
        <button @click="open = true">Expand</button>

        <span x-show="open">
            Content...
        </span>
    </div>

    @livewire(\App\Livewire\Counter::class)
</x-front-layout>
