<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class caso extends Model
{
    protected $fillable = [
    	'nombre', 'pago', 'cliente_id',
    ];
    public function cliente(){
    	return $this->belongsTo(cliente::class);
    }
    public function facturas(){
    	return $this->hasMany(factura::class);
    }
}
