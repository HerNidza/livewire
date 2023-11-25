<x-front-layout>

    @customLivewire(\App\Livewire\TodosCustom::class)

<x-slot name="footerScripts">
    <script src="{{ Vite::asset('resources/js/livewire.js') }}"></script>
</x-slot>
</x-front-layout>
