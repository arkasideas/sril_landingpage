<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use App\Mail\SrilEmail;
use Illuminate\Support\Facades\Mail;

class Contact extends Component
{
    public $name, $email, $message,$kota,$receiver, $recaptcha;
    public function store()
    {

        $this->validate([
            'name'   => 'required',
            'email' => 'required|email',
            'recaptcha' => 'required|captcha'
        ]);

        $data = array(
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message
        );

        if($this->kota == 1){
            $this->receiver = "jakarta@malasngoding.com";
        }
        else{
            $this->receiver = "kendari@malasngoding.com";
        }
        Mail::to($this->receiver)->send(new SrilEmail($data));
        $this->reset();
		session()->flash('alert-success', 'SENT SUCCESSFULLY.');
    }
    public function render()
    {
        return view('livewire.components.contact');
    }
}
