<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Orcamento as Authenticatable;

class Orcamento extends Model
{
    protected $fillable = [
    	'order_service_id', 'data', 'aprovacao', 'entrega', 'defeito', 'servico', 'preco', 'total', 'status', 'responsavel'
    ];

    public function orderservice()
    {
        return $this->belongsTo('App\OrderService');
    }
}
