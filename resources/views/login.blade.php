<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/login.css'])
    @livewireStyles

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
            <livewire:login-page />
        </div>
    </div>
</div>
@livewireScripts
</body>
</html>
