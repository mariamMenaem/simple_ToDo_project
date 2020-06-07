@extends('todos.layout')
@section('content')
<div class="flex justify-between px-4  border-b pb-4">
    <h1 class="text-2xl ">{{$todo->title}}</h1>
    <a href="{{route('todo.index')}}" class="mx-5 py-2 cursor-pointer">
        <span class="fas fa-arrow-left text-gray-500 text-2xl "></span>
    </a>
</div>

<div class="p-3">
    <p>{{$todo->description}}</p>
</div>
@endsection