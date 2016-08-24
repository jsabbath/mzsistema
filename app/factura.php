<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class factura extends Model
{
    protected $fillable = [
    	'fecha', 'descripcion', 'tiempo', 'user_id', 'cliente_id', 'caso_id', 'departamento_id'
    ];
    public function cliente(){
    	return $this->belongsTo(cliente::class);
    }
    public function User(){
    	return $this->belongsTo(User::class);
    }
    public function caso(){
    	return $this->belongsTo(caso::class);
    }
    public function departamento(){
    	return $this->belongsTo(departamento::class);
    }
}
