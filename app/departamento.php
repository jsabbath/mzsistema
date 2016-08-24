<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class departamento extends Model
{
    protected $fillable = [
        'nombre',
    ];

    public function User(){
    	return $this->hasMany(User::class);
    }
    public function clientes(){
    	return $this->hasMany(cliente::class);
    }
    public function facturas(){
    	return $this->hasMany(factura::class);
    }
}
