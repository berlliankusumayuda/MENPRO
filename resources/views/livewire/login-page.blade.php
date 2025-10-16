<div class="login_wrapper">
    {{-- LOGIN FORM --}}
    @if (!$showRegister && !$showForgotPassword)
        <div class="login_header">
            <h1>Login</h1>
            <div class="line"></div>
        </div>
        <form class="login_form">
            <div class="input_group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Masukkan Username">
            </div>
            <div class="input_group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan Password">
            </div>
            <p class="lupa">
                Lupa kata sandi?
                <a href="#" wire:click="showForgotPasswordForm">Klik disini</a>
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
                <a href="#" wire:click="showRegisterForm">Daftar disini</a>
            </p>
        </div>

    {{-- REGISTER FORM --}}
    @elseif ($showRegister)
        <div class="login_header">
            <h1>Register</h1>
            <div class="line"></div>
        </div>
        <form class="login_form">
            <div class="input_group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Masukkan Username">
            </div>
            <div class="input_group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan Password">
            </div>
            <div class="input_group">
                <label for="confirm_password">Konfirmasi Password</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Konfirmasi Password">
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
                <a href="#" wire:click="showLoginForm">Kembali ke Login</a>
            </p>
        </div>

    {{-- FORGOT PASSWORD FORM --}}
    @elseif ($showForgotPassword)
        <div class="login_header">
            <h1>Reset Password</h1>
            <div class="line"></div>
        </div>
        <form class="login_form">
            <div class="input_group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukkan Email">
            </div>
            <div class="input_group">
                <label for="new_password">Password Baru</label>
                <input type="password" id="new_password" name="new_password" placeholder="Masukkan Password Baru">
            </div>
            <div class="input_group">
                <label for="confirm_new_password">Konfirmasi Password Baru</label>
                <input type="password" id="confirm_new_password" name="confirm_new_password" placeholder="Konfirmasi Password Baru">
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
                <a href="#" wire:click="showLoginForm">Kembali ke Login</a>
            </p>
        </div>
    @endif
</div>
