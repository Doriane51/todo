<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tache extends Model
{
    use HasFactory;
    protected $table = "taches";
    protected $fillable = [
        'titre',
        'description',
        'dateEcheance',
        'statut',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function collaboration()
    {
        return $this->belongsToMany(User::class, 'collaborations');
    }

    public function notification()
    {
        return $this->hasMany(Notification::class);
    }

}
