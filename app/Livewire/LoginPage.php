<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginPage extends Component
{
    public $showRegister = false;
    public $showForgotPassword = false;
    
    // Login
    public $username = '';
    public $password = '';
    
    // Register
    public $reg_name = '';
    public $reg_username = '';
    public $reg_email = '';
    public $reg_password = '';
    public $reg_password_confirmation = '';
    
    // Forgot Password
    public $reset_email = '';
    public $new_password = '';
    public $new_password_confirmation = '';
    
    public $errorMessage = '';
    public $successMessage = '';

    public function showRegisterForm()
    {
        $this->resetForm();
        $this->showRegister = true;
        $this->showForgotPassword = false;
    }

    public function showLoginForm()
    {
        $this->resetForm();
        $this->showRegister = false;
        $this->showForgotPassword = false;
    }

    public function showForgotPasswordForm()
    {
        $this->resetForm();
        $this->showForgotPassword = true;
        $this->showRegister = false;
    }

    private function resetForm()
    {
        $this->errorMessage = '';
        $this->successMessage = '';
        $this->reset(['username', 'password', 'reg_name', 'reg_username', 'reg_email', 
                     'reg_password', 'reg_password_confirmation', 'reset_email', 
                     'new_password', 'new_password_confirmation']);
    }

    public function login()
    {
        $this->validate([
            'username' => 'required|string',
            'password' => 'required|string|min:6',
        ], [
            'username.required' => 'Username harus diisi',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password minimal 6 karakter'
        ]);

        // Coba login dengan username
        $credentials = [
            'username' => $this->username,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials, true)) {
            session()->regenerate();
            return redirect()->route('dashboard');
        }

        $this->errorMessage = 'Username atau password salah!';
    }

    public function register()
    {
        $this->validate([
            'reg_name' => 'required|string|max:255',
            'reg_username' => 'required|string|max:255|unique:users,username',
            'reg_email' => 'required|email|unique:users,email',
            'reg_password' => 'required|string|min:6|confirmed',
        ], [
            'reg_name.required' => 'Nama harus diisi',
            'reg_username.required' => 'Username harus diisi',
            'reg_username.unique' => 'Username sudah digunakan',
            'reg_email.required' => 'Email harus diisi',
            'reg_email.email' => 'Format email tidak valid',
            'reg_email.unique' => 'Email sudah terdaftar',
            'reg_password.required' => 'Password harus diisi',
            'reg_password.min' => 'Password minimal 6 karakter',
            'reg_password.confirmed' => 'Konfirmasi password tidak cocok',
        ]);

        try {
            $user = User::create([
                'name' => $this->reg_name,
                'username' => $this->reg_username,
                'email' => $this->reg_email,
                'password' => Hash::make($this->reg_password),
            ]);

            Auth::login($user, true);
            session()->regenerate();
            
            return redirect()->route('dashboard');
        } catch (\Exception $e) {
            $this->errorMessage = 'Terjadi kesalahan saat registrasi: ' . $e->getMessage();
        }
    }

    public function resetPassword()
    {
        $this->validate([
            'reset_email' => 'required|email|exists:users,email',
            'new_password' => 'required|string|min:6|confirmed',
        ], [
            'reset_email.required' => 'Email harus diisi',
            'reset_email.email' => 'Format email tidak valid',
            'reset_email.exists' => 'Email tidak terdaftar',
            'new_password.required' => 'Password baru harus diisi',
            'new_password.min' => 'Password minimal 6 karakter',
            'new_password.confirmed' => 'Konfirmasi password tidak cocok',
        ]);

        try {
            $user = User::where('email', $this->reset_email)->first();
            $user->password = Hash::make($this->new_password);
            $user->save();

            $this->successMessage = 'Password berhasil diubah! Silakan login.';
            $this->showLoginForm();
        } catch (\Exception $e) {
            $this->errorMessage = 'Terjadi kesalahan: ' . $e->getMessage();
        }
    }

    public function render()
    {
        return view('livewire.login-page');
    }
}
