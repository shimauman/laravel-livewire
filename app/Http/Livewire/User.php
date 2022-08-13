<?php

namespace App\Http\Livewire;

use App\Models\User as ModelsUser;
use Livewire\Component;
use Illuminate\Support\Collection;

class User extends Component
{
    public Collection $users;

    public function mount(): void
    {
        $this->users = ModelsUser::all();
    }

    public function render()
    {
        return view('livewire.user');
    }

    public function delete(ModelsUser $targetUser)
    {
        $this->users = $this->users->filter(function($user, $key) use($targetUser) {
            return $user->id !== $targetUser->id;
        });

        $targetUser->delete();
    }
}
