<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parking extends Model
{
    public $table = 'parking';
    public $timestamps=false;
    protected $fillable=[
        'id','placa', 'nombre', 'fecha', 'hora', 'sector', 'servicio'
    ];

    protected $primaryKey='id';
}
