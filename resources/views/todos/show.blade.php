@extends('todos.layout')
@section('content')
<div class="flex justify-between px-4  border-b pb-4">
    <h1 class="text-2xl ">{{$todo->title}}</h1>
    <a href="{{route('todo.index')}}" class="mx-5 py-2 cursor-pointer">
        <span class="fas fa-arrow-left text-gray-500 text-2xl "></span>
    </a>
</div>

<div class="py-3">
    <h2 class="text-lg border-b pb-2 text-left px-2">To-Do Description :</h2>
    <p class="p-3 text-left text-gray-600"">{{$todo->description}}</p>
    @if($todo->steps->count() > 0)
    <div>
        <h2 class="text-lg border-b pb-2 text-left my-5 px-2">To-Do Steps :</h2>
        @foreach($todo->steps as $step)
        <p class="text-left px-3 text-gray-600">- {{$step->name}}</p>
        @endforeach
    </div>
    @endif
</div>
@endsection