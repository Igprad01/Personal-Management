<?php

namespace App\Livewire\Portofolio;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.portofolio.index')
        ->layout('components.layouts.portofolio.main', ['title' => 'main']);
    }
}
