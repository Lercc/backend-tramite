<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'codigo_expediente',
        'cabecera_documento',
        'tipo_documento',
        'asunto',
        'nro_folios',
        'file',
        'fecha_tramite',
        'condicion'
    ];

    public function oficina(){
        return $this->belongsTo(Oficina::class);
    }
    
    public function users(){
        return $this->belongsToMany(User::class);
    }

}
