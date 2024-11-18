<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="m-2">
       <form action="" wire:submit="createNewUser">
        <input wire:model="name" class=" block rounded border-2 px-3 py-1 mb-1" type="text" placeholder="Enter Name">
        
        @error('name')
        <span class="text-red-500 texr-xs">{{$message}}</span>
        @enderror
        
        <input wire:model="email" class=" block rounded border-2 px-3 py-1 mb-1" type="email" placeholder="Enter Email">
       
        @error('email')
        <span class="text-red-500 texr-xs">{{$message}}</span>
        @enderror

        <input wire:model="password" class=" block rounded border-2 px-3 py-1 mb-1" type="passsword" placeholder="Enter Pasword">
        
        @error('password')
        <span class="text-red-500 texr-xs">{{$message}}</span>
        @enderror
        <br>

        <button class="px-2 block rounded bg-black text-white font-bold text-md">Create</button>
       </form>

       <hr>

       @foreach ($users as $user)

       <h3>{{$user->name}}</h3>


       @endforeach
    </div>
</div>
