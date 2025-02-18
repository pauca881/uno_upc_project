<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\belongsToMany;

class ttorneo extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $keyType = 'string';

    public function players():belongsToMany
    {
        return $this -> belongsToMany(tplayer::class,'tplayer_torneo');
    }
}
