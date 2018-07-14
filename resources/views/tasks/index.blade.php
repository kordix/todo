@extends('layouts.app')

 @section('content')
    <div class="container">
         @if($flash=session('message'))
        <div class="alert alert-success">
        {{$flash}}

        </div>
        @endif



<div class="row">
@foreach($tasks as $task)

    <div class="col-md-4">
        <div class=@if($task->focus == 1) "panel panel-warning" @elseif($task->grey == 1) "panel panel-default" @else "panel panel-primary" @endif>
              <div class="panel-heading"> {{ $task->title}} <div class="hideparent"><div class="kropka">@include('tasks.grey')</div></div> </div>
              <div class="panel-body"> <p> {!! nl2br($task->description) !!} </p>

                <form style="float:left" action="{{route('delete',$task->id)}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <button class="btn btn-danger btn-sm" type="submit" style="margin:0px 5px 0px 0px">
                            Wywal
                        </button>
                </form>
                @if($task->grey != 1)<form style="float:left; margin:0px 5px 0px 0px" method="POST" action="{{route('focus',$task->id)}}">{{ csrf_field() }}{{ method_field('PATCH') }}<button type="submit" class="btn btn-warning btn-sm">Focus</button></form>
                 <form style="float:left; margin:0px 5px 0px 0px" method="POST" action="{{route('complete', $task->id)}}">{{ csrf_field() }}{{ method_field('PATCH') }}<button type="submit" class="btn btn-success btn-sm">Complete</button></form>@endif
                 <a href="{{route('edit', $task->id)}}"><button style="float:left; margin:0px 5px 0px 0px" class="btn btn-default btn-sm">Edytuj</button></a>

        </div>
        </div>

    </div>

@endforeach
</div>
    <br><br><br>
@auth
<div class="row">
<div class="col-md-5">
    <h2>Dodaj task</h2>
    <form action="{{route('store')}}" method="post">
    <div class="form-group">
            {{ csrf_field() }}
            <label for="Tytuł" >Tytuł</label>
            <input type="text" name="title" class="form-control" required>
            <label for="Opis">Opis</label>
            <input type="text" name="description" class="form-control" required>
            <br>

            <div class="form-group">
                            <label for="channel">Dział:</label>
                            <select name="channelid" id="channel_id" class="form-control">
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
@endauth

@endsection

{{-- <div class="row">
<div id="modulcytat" class="modulcytat">
	<div id="pole" style=""></div>
	<div id="miejscenaprzycisk" style="position:absolute;right:25px;bottom:20px;"><button onclick="cytat()" type="button" class="btn" style="color:black">Losowy cytat</button></div>
</div>
</div> --}}
