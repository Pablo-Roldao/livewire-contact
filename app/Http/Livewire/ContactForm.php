<?php

namespace App\Http\Livewire;

use App\Mail\ContactFormMailable;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{

    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required|min:10'
    ];

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function submit()
    {
        $this->validate();
        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message
        ];

        Mail::to('pablo.roldao.santos@gmail.com')->send(new ContactFormMailable($data));

        session()->flash('success', 'Thank you for reaching out to us!');

        $this->reset();
    }
}
