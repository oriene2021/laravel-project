<?php

namespace App\View\Components;

use Illuminate\View\Component;

class datatable extends Component
{
    public $anggotas;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($anggotas)
    {
        $this->anggotas = $anggotas; //memanggil data anggota
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.datatable');
    }
}
