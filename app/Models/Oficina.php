<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oficina extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'gerencias',
        'subgerencias',
        'iduser',
        'condicion'
    ];
    public function users()
    {
        return $this->hasMany(User::class);     
    }   

    public function  expedientes()
    {
        return $this->hasMany(Expediente::class);     
    }    
}
