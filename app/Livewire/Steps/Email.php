<?php

namespace App\Livewire\Steps;

class Email extends AbstractStep
{
    public string $email;

    public array $rules = [
        'email' => 'required|email',
    ];

    public function saveData()
    {
        // TODO : add rule to check if email is already in the database for the current year
        $this->validate();
        $this->updateSessionData([
            'email' => $this->email,
        ]);
    }

    public function render()
    {
        return view('livewire.steps.email');
    }
}
