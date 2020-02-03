@extends('layout')

@section('content')

<div class="row">
    <div class="col-lg-6 col-lg-offset-3">
    <form action="{{route('todos.save',['id' => $todo->id])}}" method="POST">
            {{csrf_field()}}
        <input type="text" class="form-control input-lg" value="{{$todo -> todo}}" placeholder="Create a new todo" name="todo" >
        </form>
    </div>
</div>
<hr>


@stop
