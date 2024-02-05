<?php
// app/Http/Livewire/ToastNotification.php

namespace App\Livewire;

use Livewire\Component;

class ToastNotification extends Component
{
    public $message;
    public $type;
    public $id;
    protected $listeners = ['showToast'];

    public function showToast($message, $type = 'info')
    {
        $this->message = $message;
        $this->type = $type;
        $this->dispatch('show-toast');
    }

    public function render()
    {
        return view('livewire.toast-notification');
    }
}
