@extends('todos.layout')
@section('content')
<div class="flex justify-between px-4  border-b pb-4">
  <h1 class="text-2xl">Here are Your TO-DOS</h1>


  <a href="/todos/create" class="mx-5 py-2 cursor-pointer">
  <span class="fas fa-plus-circle text-blue-400  text-2xl"></span>
</a>
</div>
@if(session()->has('message'))
<div class="py-4 px-2 my-2 bg-green-400">{{session()->get('message')}}</div>
@elseif(session()->has('errors'))
<div class="py-4 px-2 my-2 bg-red-300">
  @foreach($errors->all() as $error)
  <p>{{$error}}</p>
  @endforeach
</div>
@endif
<ul class="my-5">
  @foreach($todos as $todo)
  <li class="flex justify-between p-2 capitalize">
  
  <div class="flex justify-between">
  @include('todos.completeBtn')
  @if($todo->cpmleated)
    <p class="line-through px-5"> {{$todo->title}} </p>
    @else
    <p class="px-5"> {{$todo->title}} </p>
    @endif
  </div>
  <div class="text-orange-400">
      <a class="mx-3 py-1 cursor-pointer rounded-lg" href={{route('todos.edit',['todo' => $todo['id'] ])}}>
        <span class="fas fa-edit"></span>
      </a>

      <a class="mx-3 py-1 cursor-pointer rounded-lg" href={{route('todos.edit',['todo' => $todo['id'] ])}}>
        <span onclick="event.preventDefault(); if(confirm('Are you really want to delete this task !!')){document.getElementById('form-delete-{{$todo->id}}').submit();};   " class="fas fa-trash text-red-500"></span>
      </a>

      <form action="{{route('todos.delete', $todo->id)}}" id="{{'form-delete-'.$todo->id}}" style="display: none" method="post">
        @csrf
        @method('delete')
    </form>

    
    </div>

  </li>
  @endforeach
</ul>
@endsection