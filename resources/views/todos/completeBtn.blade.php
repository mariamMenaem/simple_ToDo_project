 @if($todo->cpmleated)
      <span onclick="event.preventDefault(); document.getElementById('form-incomplete-{{$todo->id}}').submit(); " class="fas fa-check px-1 my-1 text-green-400 cursor-pointer"></span>
      <form action="{{route('todos.incomplete', $todo->id)}}" id="{{'form-incomplete-'.$todo->id}}" style="display: none" method="post">
        @csrf
        @method('delete')
    </form>
      @else
      <span onclick="event.preventDefault(); document.getElementById('form-complete-{{$todo->id}}').submit(); " class="fas fa-check px-1 my-1 text-gray-300 cursor-pointer"></span>
      <form action="{{route('todos.complete', $todo->id)}}" id="{{'form-complete-'.$todo->id}}" style="display: none" method="post">
        @csrf
        @method('put')
    </form>

   
      @endif