@extends('layouts.app')
@section('content')
<div class="container">
<table>
  <thead>
    <tr>

    <td class="col-md-3">Nazwa </td>
    <td class="col-md-3">Edytuj</td>
    <td class="col-md-3">usuń</td>
  </tr>

  </thead>
  @foreach($channels as $channel)
    <tr>
      <td class="col-3">{{$channel->name}}</td>
      <td class="col-3"> <a href="{{route('channel.edit',$channel->id)}}">Edytuj</a> </td>
      <td class="col-3"><a href="{{route('channel.destroy',$channel->id)}}">Usuń</a> </td>

    </tr>
  @endforeach
</table>
</div>


@endsection
