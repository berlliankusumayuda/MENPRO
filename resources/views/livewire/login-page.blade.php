<div class="login_wrapper">
    {{-- Error & Success Messages --}}
    @if($errorMessage)
        <div style="background-color: #fee; border: 1px solid #fcc; padding: 10px; border-radius: 5px; margin-bottom: 15px; color: #c00;">
            {{ $errorMessage }}
        </div>
    @endif

    @if($successMessage)
        <div style="background-color: #efe; border: 1px solid #cfc; padding: 10px; border-radius: 5px; margin-bottom: 15px; color: #0a0;">
            {{ $successMessage }}
        </div>
    @endif

    {{-- LOGIN FORM --}}
    @if (!$showRegister && !$showForgotPassword)
        <div class="login_header">
            <h1>Login</h1>
            <div class="line"></div>
        </div>
        <form class="login_form" wire:submit.prevent="login">
            <div class="input_group">
                <label for="username">Username</label>
                <input type="text" id="username" wire:model="username" placeholder="Masukkan Username">
                @error('username') <span style="color: red; font-size: 0.9rem;">{{ $message }}</span> @enderror
            </div>
            <div class="input_group">
                <label for="password">Password</label>
                <input type="password" id="password" wire:model="password" placeholder="Masukkan Password">
                @error('password') <span style="color: red; font-size: 0.9rem;">{{ $message }}</span> @enderror
            </div>
            <p class="lupa">
                Lupa kata sandi?
                <a href="#" wire:click.prevent="showForgotPasswordForm" class="link-lupa">Klik disini</a>
            </p>
            <button type="submit" class="login_button">Masuk</button>
        </form>

        <div class="atau">
            <div class="gariskiri"></div>
            <p>atau</p>
            <div class="gariskanan"></div>
        </div>

        <div class="register_link">
            <p>Belum punya akun?
                <a href="#" wire:click.prevent="showRegisterForm">Daftar disini</a>
            </p>
        </div>

    {{-- REGISTER FORM --}}
    @elseif ($showRegister)
        <div class="login_header">
            <h1>Register</h1>
            <div class="line"></div>
        </div>
        <form class="login_form" wire:submit.prevent="register">
            <div class="input_group">
                <label for="reg_name">Nama Lengkap</label>
                <input type="text" id="reg_name" wire:model="reg_name" placeholder="Masukkan Nama Lengkap">
                @error('reg_name') <span style="color: red; font-size: 0.9rem;">{{ $message }}</span> @enderror
            </div>
            <div class="input_group">
                <label for="reg_username">Username</label>
                <input type="text" id="reg_username" wire:model="reg_username" placeholder="Masukkan Username">
                @error('reg_username') <span style="color: red; font-size: 0.9rem;">{{ $message }}</span> @enderror
            </div>
            <div class="input_group">
                <label for="reg_email">Email</label>
                <input type="email" id="reg_email" wire:model="reg_email" placeholder="Masukkan Email">
                @error('reg_email') <span style="color: red; font-size: 0.9rem;">{{ $message }}</span> @enderror
            </div>
            <div class="input_group">
                <label for="reg_password">Password</label>
                <input type="password" id="reg_password" wire:model="reg_password" placeholder="Masukkan Password">
                @error('reg_password') <span style="color: red; font-size: 0.9rem;">{{ $message }}</span> @enderror
            </div>
            <div class="input_group">
                <label for="reg_password_confirmation">Konfirmasi Password</label>
                <input type="password" id="reg_password_confirmation" wire:model="reg_password_confirmation" placeholder="Konfirmasi Password">
            </div>
            <button type="submit" class="login_button">Daftar</button>
        </form>

        <div class="atau">
            <div class="gariskiri"></div>
            <p>atau</p>
            <div class="gariskanan"></div>
        </div>

        <div class="register_link">
            <p>Sudah punya akun?
                <a href="#" wire:click.prevent="showLoginForm">Kembali ke Login</a>
            </p>
        </div>

    {{-- FORGOT PASSWORD FORM --}}
    @elseif ($showForgotPassword)
        <div class="login_header">
            <h1>Reset Password</h1>
            <div class="line"></div>
        </div>
        <form class="login_form" wire:submit.prevent="resetPassword">
            <div class="input_group">
                <label for="reset_email">Email</label>
                <input type="email" id="reset_email" wire:model="reset_email" placeholder="Masukkan Email">
                @error('reset_email') <span style="color: red; font-size: 0.9rem;">{{ $message }}</span> @enderror
            </div>
            <div class="input_group">
                <label for="new_password">Password Baru</label>
                <input type="password" id="new_password" wire:model="new_password" placeholder="Masukkan Password Baru">
                @error('new_password') <span style="color: red; font-size: 0.9rem;">{{ $message }}</span> @enderror
            </div>
            <div class="input_group">
                <label for="new_password_confirmation">Konfirmasi Password Baru</label>
                <input type="password" id="new_password_confirmation" wire:model="new_password_confirmation" placeholder="Konfirmasi Password Baru">
            </div>
            <button type="submit" class="login_button">Ubah Password</button>
        </form>
        <div class="atau">
            <div class="gariskiri"></div>
            <p>atau</p>
            <div class="gariskanan"></div>
        </div>
        <div class="register_link">
            <p>Ingat password?
                <a href="#" wire:click.prevent="showLoginForm">Kembali ke Login</a>
            </p>
        </div>
    @endif
</div>
