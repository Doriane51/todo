<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notification extends Model
{
    use HasFactory;
    protected $table = "notifictions";
    protected $fillable = [
        'contenu',
        'date',
        'id_user',
        'id_tache'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tache()
    {
        return $this->belongsTo(Tache::class);
    }
}

