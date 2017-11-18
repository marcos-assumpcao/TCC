<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\OrderService as Authenticatable;

class OrderService extends Model
{
     protected $fillable = [
        'user_id', 'contato', 'equipamento', 'marca', 'defeito', 'serie', 'modelo', 'tensao', 'cor', 'ano', 'patrimonio', 'chamado',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
