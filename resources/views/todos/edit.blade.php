@extends('todos.layout')
@section('content')
    <h1 class="text-2xl border-b pb-4"> Update What To_DO</h1>
    @if(session()->has('message'))
    <div class="py-4 px-2 bg-green-400">{{session()->get('message')}}</div>
    @elseif(session()->has('errors'))
    <div class="py-4 px-2 bg-red-300">
        @foreach($errors->all() as $error)
        <p>{{$error}}</p>
        @endforeach
    </div>
    @endif
    <form action="{{route('todos.update', $todo->id)}}" method="post" class="py-5">
        @csrf
        @method('put')
        <input class="py-2 px-2 border rounded-lg" type="text" name='title' value="{{$todo->title}}">
        <input class="py-2 px-1 border rounded-lg" type="submit" value="Update">
    </form>

    <a href="/todos" class="mx-5 py-1 px-2 bg-blue-400 cursor-pointer rounded-lg text-white">Go TO-DOS</a>
    @endsection
