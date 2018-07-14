<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Channel;
use Session;

class indexController extends Controller
{
    public function index(Channel $channel)
    {
        if ($channel->exists) {
            $tasks = $channel->tasks()->latest()->where('completed', '0');
        } else {
            $tasks = Task::where('completed', 0)->latest();
        }

        $tasks = $tasks->get();
        return view('tasks.index', compact('tasks'));
    }
}
