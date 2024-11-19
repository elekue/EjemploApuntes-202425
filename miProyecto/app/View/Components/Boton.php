<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Boton extends Component
{
    /**
     * Create a new component instance.
     */ 
    public $texto;
    public $url;
    public $type;
    public $class;
    public function __construct($texto, $url = '#', $type = 'button', $class = 'btn btn-primary') // El valor predeterminado para $class
    {
        $this->texto = $texto;
        $this->url = $url;
        $this->type = $type;
        $this->class = $class; // Clase CSS para el botón
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        dd($this->class); return view('components.boton');
    }
}
