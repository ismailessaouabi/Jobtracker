<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Condidature;

class AjouterCondidature extends Component
{
    public $titre_offre;
    public $nom_entreprise;
    public $description_offre;
    public $email_entreprise;
    public $lien_offre;
    public $type_offre;
    

    public function ajouter(){
        $this->validate([
            'titre_offre' => 'required|string|max:255',
            'nom_entreprise' => 'required|string|max:255',
            'description_offre' => 'required|string',
            'email_entreprise' => 'required|email|max:255',
            'lien_offre' => 'nullable|url|max:255',
            'type_offre' => 'required|string|max:100',
        ]);

        Condidature::create([
            'titre_offre' => $this->titre_offre,
            'nom entreprise' => $this->nom_entreprise,
            'description_offre' => $this->description_offre,
            'email_entreprise' => $this->email_entreprise,
            'lien_offre' => $this->lien_offre,
            'type_offre' => $this->type_offre,
            'user_id' => auth()->id(),
        ]);

        session()->flash('message', 'Condidature ajoutée avec succès !');

        return redirect()->route('ajouter.condidature');
        
    }
    public function render()
    {
        return view('livewire.dashboard.ajouter-condidature')->layout('livewire.dashboard.layout');
    }
}
