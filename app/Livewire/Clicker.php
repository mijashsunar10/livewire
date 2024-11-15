<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{
    public function render()
    {
        $title = "test";
        $users = User::all();
        return view('livewire.clicker',[
            'title' => $title,
            'users' => $users,

            // return view('livewire.clicker',compact('title'));   
        ]);
    }
    public function handleClick()
    {
        dump("clicked");
    }

    public function createNewUser()
    {
        User::create(
            [
                'name' => "test user",
                'email'=>"test@example.com",
                'password' => "123123123"
            ]
            );
    }

    public $username = "test user";
}
