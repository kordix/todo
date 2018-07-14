@extends('layouts.app')

@section('content')
    <div class="container">
<div class="row">

@foreach($tasks as $task)


    <div class="col-md-4">
        <div class="panel panel-success">
              <div class="panel-heading">{{ $task->title}}</div>
              <div class="panel-body">{{$task->description}}</div>
                {{-- <form action="{{ url('task/'.$task->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <button type="submit" style="margin:0px 5px 5px 5px">
                            <i class="fa fa-trash"></i> Wywal
                        </button>
                </form> --}}
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
