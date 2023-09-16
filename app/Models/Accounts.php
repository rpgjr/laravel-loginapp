<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable as AuthAuthenticatable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounts extends Model implements Authenticatable
{
    protected $table = 'accounts';
    protected $fillable = [
        'full_name',
        'username',
        'email',
        'password'
    ];

    use HasFactory;
    use AuthAuthenticatable;
}
