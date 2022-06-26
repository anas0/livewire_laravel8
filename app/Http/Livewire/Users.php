<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\withPagination;

class Users extends Component
{
    use withPagination;

    public function render()
    {
        $users = User::paginate(5);
        return view('livewire.users', ['users'=>$users]);
    }
}
