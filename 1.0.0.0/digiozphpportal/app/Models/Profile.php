<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'user_id', 'first_name', 'middle_name', 'last_name', 'birthday', 'birthday_visible', 'address', 'address2', 'city', 'state', 'zip', 'country', 'signature', 'avatar',
    ];
}
