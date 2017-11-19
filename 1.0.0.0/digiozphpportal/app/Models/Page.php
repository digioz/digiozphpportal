<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'user_id', 'title', 'url', 'body','keywords','description','visible'
    ];
}
