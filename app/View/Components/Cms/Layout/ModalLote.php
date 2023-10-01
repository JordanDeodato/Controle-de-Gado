<?php

namespace App\View\Components\Cms\Layout;

use App\Models\Bezerro;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ModalLote extends Component
{
    public $bezerros;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->bezerros = Bezerro::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cms.layout.modal-lote');
    }
}
