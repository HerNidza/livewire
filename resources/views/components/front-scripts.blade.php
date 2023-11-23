<script type="module" defer src="{{ Vite::asset('resources/js/app.js') }}"></script>
<script src="{{ Vite::asset('resources/js/livewire.js') }}"></script>
@if(isset($footerScripts))
    {{ $footerScripts }}
@endif
