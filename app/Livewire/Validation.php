<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Validation extends Component
{
    public $name;
    public $email;
    public $password;

    public function createNewUser()
    {

        $this->validate(
            [
                'name' => 'required|min:2|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:5',
            ]
            );
        
        User::create(
            [
                'name' => $this->name,
                'email'=> $this->email,
                'password' => $this->password,
            ]
            );
    }


    public function render()
    {
        $users=User::all();
        return view('livewire.validation',
    [
        'users'=> $users,
    ]);
    }
}
