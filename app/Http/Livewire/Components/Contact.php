<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use App\Mail\SrilEmail;
use Illuminate\Support\Facades\Mail;

class Contact extends Component
{
    public $name, $email, $message;
    public function store()
    {
        $this->validate([
            'name'   => 'required',
            'email' => 'required|email'
        ]);

        $data = array(
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message
        );

        Mail::to("testing@malasngoding.com")->send(new SrilEmail($data));
        $this->reset();
		session()->flash('alert-success', 'SENT SUCCESSFULLY.');
    }
    public function render()
    {
        return view('livewire.components.contact');
    }
}
