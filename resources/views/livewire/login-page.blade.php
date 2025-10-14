<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/login.css'])
</head>
<body>
    <div class="container">
        <div class="body_container">
            <div class="logo_container">
                <img src="{{ asset('img/logo.webp') }}" alt="logo gergaji" class="logo_img">
                <div class="logo_text">
                    <h4>GERGAJI</h4>
                    <p>Data Warga RT</p>
                </div>
            </div>
            <div class="login_wrapper">
                <div class="login_header">
                    <h1>Login</h1>
                    <div class="line"></div>
                </div>
            <from class="login_form">
                    <div class="input_group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Masukkan Username">
                    </div>
                    <div class="input_group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Masukkan Password">
                    </div>
                    <p class="lupa">lupa kata sandi? <a class="link-lupa" href="">klik disini</a></p>
                    <button type="submit" class="login_button">Masuk</button>
                </from>
                <div class="atau">
                    <div class="gariskiri"></div>
                    <p>atau</p>
                    <div class="gariskanam"></div>
                </div>
                <div class="register_link">
                    <p>Belum punya akun? <a href="">Daftar disini</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
