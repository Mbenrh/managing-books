<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Livre extends Model
{
    use HasFactory;
    protected $fillable = ['titre', 'description', 'nombre_pages', 'auteur_id'];

    public function auteur()
    {
        return $this->belongsTo(Auteur::class);
    }
}
