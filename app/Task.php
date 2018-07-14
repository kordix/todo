<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['description', 'channel_id', 'title'];

    public function channel()
    {
        return $this->belongsTo(Channel::class);
    }
}
