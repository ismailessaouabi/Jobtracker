<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class Tableaux extends Component
{
    public function render()
    {
        return view('livewire.dashboard.tableaux')->layout('livewire.dashboard.layout');
    }
}
