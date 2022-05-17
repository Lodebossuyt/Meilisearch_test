<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Search extends Component
{
    public $name;


    public function render()
    {
        $users = User::search($this->name)->get();

        return view('livewire.search', ['users'=>$users]);
    }
}
