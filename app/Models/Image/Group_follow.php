<?php

namespace App\Models\Image;

use Illuminate\Database\Eloquent\Model;

class Group_Follow extends Model
{
    protected $table = "group_follows";
    protected $fillable = [
        'group_id', 'follower_id',
    ];
}
