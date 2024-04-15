<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class collaboration extends Model
{
    use HasFactory;
    protected $table = "cars";
    protected $fillable = [
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
