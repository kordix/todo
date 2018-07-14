<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//use App\Task;

class Channel extends Model
{
    protected $fillable=['name'];

    public function tasks()
    {
        //$zbigniew = Task::where('completed', 0);
        //return $this->hasMany($zbigniew);
        return $this->hasMany(Task::class);
    }
}
