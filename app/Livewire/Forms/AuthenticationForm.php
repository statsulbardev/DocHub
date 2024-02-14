<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class AuthenticationForm extends Form
{
    #[Validate('required', onUpdate: false, message: 'Username tidak boleh kosong')]
    #[Validate('min:4', onUpdate: false, message: 'Username minimal 4 karakter')]
    public string $username;

    #[Validate('required', onUpdate: false, message: 'Password tidak boleh kosong')]
    #[Validate('min:6', onUpdate: false, message: 'Password minimal 6 karakter')]
    public string $password;
}
