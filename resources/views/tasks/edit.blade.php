@extends('layouts.app')
@section('content')
<div class="container">

    @if($flash=session('message'))
   <div class="row"><div class="col-md-5"><div class="alert alert-success">
   {{$flash}}

   </div></div></div>
   @endif
    <div class="col-md-5">
        <h2>Edytuj Task</h2>

        <form method="POST" action="{{route('edit', $task->id)}}">
        <div class="form-group">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                {{ method_field('PATCH') }}
                <label for="Tytuł" >Tytuł</label>
                <input type="text" name="title" class="form-control" value="{{$task->title}}" required>
                <label for="Opis">Opis</label>
                <textarea type="text" name="description" class="form-control" value="" style="height:200px" required>{{$task->description}}</textarea>
                <div class="form-group">
                                <label for="channel">Dział:</label>

                                <select name="channelid" id="channel_id" class="form-control">
                                    <option value="{{$task->channel_id}}" selected>{{App\Channel::find($task->channel_id)->name}}</option>
                                    @foreach(App\Channel::all() as $channel)
                                    <option value="{{ $channel->id}}">{{$channel->name}}</option>
                                    @endforeach
                                </select>
                </div>

                <button type="submit" class="btn btn-primary">Zatwierdź</button>
        </div>

        </form>
    </div>
</div>
@endsection
