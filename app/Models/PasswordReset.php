<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Resetando o password
 *
 * @author Bruno De Brito <bruno@sysout.com.br>
 * @since 22/11/2022
 * @version 1.0.0
 */
class PasswordReset extends Model {

    use HasFactory;

    const UPDATED_AT = null;

    protected $fillable = [
        'email',  'token'

    ];
}
