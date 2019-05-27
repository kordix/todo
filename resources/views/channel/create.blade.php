@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-5">
        <h2>Dodaj channel</h2>
        <form action="{{route('storechannel')}}" method="post">
        <div class="form-group">
                {{ csrf_field() }}
                <label for="Nazwa channela" >Nazwa channela</label>
                <input type="text" name="name" class="form-control" required>
                <button type="submit" class="btn btn-primary">Zatwierdź</button>
        </div>
        </form>
    </div>
</div>
@endsection
