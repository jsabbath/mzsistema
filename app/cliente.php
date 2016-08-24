<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $fillable = [
        'nombre', 'pais', 'valor', 'responsable', 'departamento_id',
    ];
    public function departamento(){
        return $this->belongsTo(departamento::class);
    }
    public function casos(){
    	return $this->hasMany(caso::class);
    }
    public function facturas(){
    	return $this->hasMany(factura::class);
    }
}
