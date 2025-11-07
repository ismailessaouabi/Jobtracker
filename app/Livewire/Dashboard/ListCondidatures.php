<?php

namespace App\Livewire\Dashboard;


use Livewire\Component;
use App\Models\Condidature;

class ListCondidatures extends Component
{
    
    public function render()
    {
        $condidatures = Condidature::where('user_id', auth()->user()->id)->get();
        return view('livewire.dashboard.list-condidatures',compact('condidatures'))->layout('livewire.dashboard.layout');
    }
}
