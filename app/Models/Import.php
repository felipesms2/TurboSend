<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Import extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'username',
        'user_id',
        'access_hash',
        'name',
        'group_name',
        'group_id'
    ];
}
