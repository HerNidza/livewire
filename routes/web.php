<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Blade::directive('livewire', function ($expression) {

    return "<?php echo (new \App\Livewire())->initialRender({$expression}) ?>";
});
