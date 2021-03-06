<div>
    <div class="flex justify-center px-4 my-3">
        <h1 class="text-lg ">Add steps if required</h1>

        <span wire:click="increment" class="fas fa-plus text-gray-500 text-lg mx-5 py-1 cursor-pointer "></span>

    </div>

    @foreach($steps as $step)

    <div class="flex justify-center" wire:key="{{$step}}">
        <input class="py-2 px-2 border rounded-lg  mb-2  outline-none" type="text" name='step[]' placeholder="{{'Step '.($step +1).' ....'}}">
        <span class="fas fa-times text-red-500 py-1 m-3" wire:click="remove({{$step}})" }></span>

    </div>

    @endforeach

</div>