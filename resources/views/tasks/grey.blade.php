<form style="float:right; margin:0px 5px 0px 0px" method="POST" action="{{route('grey',$task->id)}}">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <button type="submit" class="btn btn-default btn-sm"></button>
</form>
