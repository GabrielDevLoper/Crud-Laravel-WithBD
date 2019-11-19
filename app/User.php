<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name', 'cpf','email', 'file'];
    protected $guarded = ['id', 'created-at', 'update-at'];
    protected $table = 'usuarios';
}
