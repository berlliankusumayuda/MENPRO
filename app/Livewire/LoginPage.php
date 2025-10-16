<?php

namespace App\Livewire;

use Livewire\Component;

class LoginPage extends Component
{
    public $showRegister = false;
    public $showForgotPassword = false;

    public function showRegisterForm()
    {
        $this->showRegister = true;
        $this->showForgotPassword = false;
    }

    public function showLoginForm()
    {
        $this->showRegister = false;
        $this->showForgotPassword = false;
    }

    public function showForgotPasswordForm()
    {
        $this->showForgotPassword = true;
        $this->showRegister = false;
    }

    public function render()
    {
        return view('livewire.login-page');
    }
}
