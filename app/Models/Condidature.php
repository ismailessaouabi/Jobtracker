<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Condidature extends Model
{
    protected $table = 'condidatures';
    protected $fillable = [
        'titre_offre',
        'nom entreprise',
        'description_offre',
        'email_entreprise',
        'status',
        'lien_offre',
        'type_offre',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
