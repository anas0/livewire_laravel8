<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User as Users;

class User extends Component
{
    public $users;

    public function render()
    {
        $this->users = Users::all();

        return view('livewire.user');
        
        // return <<<'blade'
        //     <div>
        //         <h1>this is the User component</h1>
        //     </div>
        // blade;
    }
}
