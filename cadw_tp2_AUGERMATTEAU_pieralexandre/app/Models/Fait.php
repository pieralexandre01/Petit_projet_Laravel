<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fait extends Model
{
    use HasFactory;

    protected $fillable = [
        'texte',
    ];

    /**
     * Retourne les 60 premier caractères d'un fait
     *
     * @return string
     */
    public function getTexteLimiteAttribute(){
        return substr($this->texte, 0, 60);
    }
}
