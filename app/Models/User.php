<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use  HasFactory, Notifiable, HasApiTokens;

 

    protected $fillable = [
        'id', 'email', 'password','condicion','idrol', 
    ];

    public $timestamps = false;

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

  
        public function rol(){
            return $this->belongsTo(Role::class);
        }
        public function oficina(){
            return $this->belongsTo(Oficina::class);
        }        
        public function persona(){
            return $this->belongsTo(Persona::class);
        }

        public function expedientes(){
            return $this->belongsToMany(Expediente::class);
        }


}
