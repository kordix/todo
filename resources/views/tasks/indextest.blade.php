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
        <div class="panel panel-primary">
              <div class="panel-heading"> <div class="hideparent"><div class="kropka">@include('tasks.grey')</div></div> </div>
              <div class="panel-body"> <p> {{$task->title}} {{$task->description}}</p>


                {{-- <form style="float:left" action="{{ url('task/'.$task->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <button class="btn btn-danger btn-sm" type="submit" style="margin:0px 5px 0px 0px">
                            <i class="fa fa-trash"></i> Wywal
                        </button>
                </form>
                @if($task->grey != 1)<form style="float:left; margin:0px 5px 0px 0px" method="POST" action="focus/{{$task->id}}">{{ csrf_field() }}{{ method_field('PATCH') }}<button type="submit" class="btn btn-warning btn-sm">Focus</button></form>
                 <form style="float:left; margin:0px 5px 0px 0px" method="POST" action="tasks/complete/{{$task->id}}">{{ csrf_field() }}{{ method_field('PATCH') }}<button type="submit" class="btn btn-success btn-sm">Complete</button></form>@endif
                 <a href="/tasks/edit/{{$task->id}}"><button style="float:left; margin:0px 5px 0px 0px" class="btn btn-default btn-sm">Edytuj</button></a> --}}

        </div>
        </div>

    </div>

@endforeach

</div>

<div class="col-md-5">
    <h2>Dodaj task</h2>
    <form action="/store" method="post">
    <div class="form-group">
            {{ csrf_field() }}
            <label for="Tytuł" >Tytuł</label>
            <input type="text" name="title" class="form-control" required>
            <label for="Opis">Opis</label>
            <input type="text" name="description" class="form-control" required>
            <br>
            <button type="submit" class="btn btn-primary">Zatwierdź</button>
    </div>
    </form>
</div>

</div>

@endsection
