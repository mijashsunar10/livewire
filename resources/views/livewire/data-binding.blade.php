<div>
    {{-- In work, do what you enjoy. --}}
    <div class="m-2"> 
    <form wire:submit="createNewUser"  action="">
        <input wire:model="name" class="border-2 " type="text" placeholder="name">
        {{-- wire:model=name of the public property --}}
        <input wire:model="email" type="email"  class="border-2 " placeholder="Email">
        <input wire:model="password" type="password"  class="border-2 " placeholder="Password">
        <button class="px-2  bg-black text-white font-bold text-md">Create</button>
    </form>

    <hr>
    
@foreach ($users as $user)
<h3>{{$user->name}}</h3>
    
@endforeach
</div>
</div>
