@extends('layouts.master')

@section('content')
<div class="col-xs-6">
<h1>All Tasks</h1>
<ul class="list-group">
@foreach($tasks as $task)

<li class="list-group-item">
<a href="/{{$task->user->username}}/tasks"><img src="{{gravatar_url($task->user->email)}}" alt="{{$task->user->email}}"/></a>
{{link_to_path($task)}}
</li>
@endforeach
</ul>
</div>

<div class="col-md-6">
@if(isset($users))

<h3>Add New Task</h3>
@include('tasks.partials._form')

@endif

</div>
@stop













