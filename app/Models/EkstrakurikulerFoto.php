<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EkstrakurikulerFoto extends Model
{
    protected $table = 'ekstrakurikuler_fotos';

    protected $fillable = [
        'ekstrakurikuler',
        'foto',
    ];
}