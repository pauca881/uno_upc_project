<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\belongsToMany;

class tplayer extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $keyType = 'string';

    public function torneos(): belongsToMany
    {
        return $this->belongsToMany(ttorneo::class, 'tplayer_torneo');
    }

    public function partidas()
    {
        return $this->hasMany(tpartida::class);
    }
}
