<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Channel;
use Session;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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

    public function create()
    {
        return view('tasks.create');
    }
    public function store(Request $request)
    {
        $tasks=Task::create([
        'title' => request('title'),
        'channel_id' => request('channelid'),
        'description' => request('description')
    ]);
        $tasks->save();
        //return redirect('/tasks');
        //Session::flash('message', 'Task successfully added!');
        session()->flash('message', 'dodano Task');
        return back();
    }

    public function createchannel()
    {
        return view('tasks.createchannel');
        session()->flash('message', 'dodano channel');
        return back();
    }

    public function storechannel(Request $request)
    {
        $channel=Channel::create([
            'name' =>request('name')
        ]);
        $channel->save();
    }

    public function edit($id)
    {
        $task = Task::find($id);
        //dd($task);
        return view('tasks.edit', compact('task'));
        $this->middleware('auth');
    }

    public function update(Request $request, $id)
    {
        Task::find($id)->update([
        'title' => request('title'),
        //'channel_id' => 2,
        'description' => request('description'),
        'channel_id' =>request('channelid')
    ]);
        session()->flash('message', 'zapisano zmiany');
        return back();
    }

    public function indexcompleted()
    {
        $zbigniewl;
        $tasks = Task::where('completed', 1)->latest();
        $tasks = $tasks->get();
        return view('tasks.index2', compact('tasks'));
    }

    public function complete($id)
    {
        //dd($id);
        $task = Task::find($id);
        $task->completed=1;
        //$task->update(['completed' => 1]);
        $task->save();
        //dd($task->completed);
        return back();
    }

    public function grey($id)
    {
        $task = Task::find($id);
        if ($task->grey==1) {
            $task->grey=0;
        } else {
            $task->grey=1;
        }
        $task->focus=0;
        $task->save();
        return back();
    }

    public function focus($id)
    {
        $task = Task::find($id);
        if ($task->focus==0) {
            $task->focus=1;
        } else {
            $task->focus=0;
        } ;
        $task->save();
        return back();
    }
}
