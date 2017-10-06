<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Orderservice as Authenticatable;

class Orderservice extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fantasia', 'contato', 'equipamento', 'marca', 'defeito', 'serie', 'modelo', 'tensao', 'cor', 'ano', 'anexos', 'observacao',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
