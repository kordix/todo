@extends('layouts.app')
@section('content')
<div class="container">
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
                <button type="submit" class="btn btn-primary">Zatwierdź</button>
        </div>
        </form>
    </div>
</div>
@endsection
