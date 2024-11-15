<div>
    {{-- The whole world belongs to you. --}}
    {{-- Hello Youtube --}}

    <h1>{{$title}}</h1>

    <h2>{{count($users)}}</h2>

    <h1 class="text-xl">{{$username}}</h1>

    {{-- <button type="button" class="btn btn-primary" wire:click="handleClick">Button</button> --}}
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" wire:click="handleClick">
        Button
      </button>

      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" wire:click="createNewUser">
        Add New User
      </button>
</div>
