<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    protected $fillable = [
    	'order_service_id', 'data', 'aprovacao', 'entrega', 'defeito', 'servico', 'preco', 'total',
    ];
}
