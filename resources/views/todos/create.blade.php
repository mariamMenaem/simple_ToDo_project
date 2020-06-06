@extends('todos.layout')
@section('content')
   <div class="flex justify-between px-4  border-b pb-4">
   <h1 class="text-2xl ">What next you need TO-DO</h1>
    <a href="{{route('todo.index')}}" class="mx-5 py-2 cursor-pointer">
    <span class="fas fa-arrow-left text-gray-500 text-2xl "></span>
    </a>
   </div>

    @if(session()->has('message'))
    <div class="py-4 px-2 bg-green-400">{{session()->get('message')}}</div>
    @elseif(session()->has('errors'))
    <div class="py-4 px-2 bg-red-300">
        @foreach($errors->all() as $error)
        <p>{{$error}}</p>
        @endforeach
    </div>
    @endif
    <form action="{{route('todo.store')}}" method="post" class="py-5">
        @csrf
        <input class="py-2 px-2 border rounded-lg" type="text" name='title'>
        <input class="py-2 px-1 border rounded-lg" type="submit" value="Create">
    </form>

    @endsection


    