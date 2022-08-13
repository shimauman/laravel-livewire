<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MessageInputer extends Component
{
    public string $message = 'default message';

    public function render()
    {
        return view('livewire.message-inputer');
    }
}
