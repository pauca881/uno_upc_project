<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReservaMesa extends Model
{

    use HasFactory;

    protected $table = 'reservar_mesa';
    protected $fillable = ['mesa_id', 'comensal_id', 'fecha_reserva'];


    public function mesa()
    {
        return $this->belongsTo(Mesa::class);
    }

    public function comensal()
    {
        return $this->belongsTo(Comensal::class);
    }

}
