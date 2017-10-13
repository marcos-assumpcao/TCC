<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        /**'name', 'email', 'password',*/
        'name', 'fantasia', 'aniversario', 'endereco', 'bairro', 'cidade', 'estado', 'cep', 'site', 'inscr_estadual', 'cpf_cnpj', 'telefone', 'celular', 'fax', 'email', 'password',
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
