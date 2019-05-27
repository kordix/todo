@extends('layouts.app')
@section('content')
<div class="container">
<form class="" action="{{route('channel.update',$channel->id)}}" method="post">
  {{ csrf_field() }}
  {{method_field('PATCH')}}
  <label for="">Nazwa</label>
  <input type="text" name="name" value="{{$channel->name}}">
  <button type="submit" name="button">Zatwierdź</button>

</form>
</div>


@endsection
