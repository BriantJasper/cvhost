<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/b5572efd23.js" crossorigin="anonymous"></script>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    {{-- External CSS --}}
    <link rel="stylesheet" href="/css/login.css">
</head>

<body>
    <div class="bg-image">
        <img src="/images/login-bg.jpg" width="100%">
    </div>

    <div class="bg-text">
        <div class="row">
            <div class="login-register">
                <a href="/login" class="active">Login</a>
                <a href="/register">Register</a>
            </div>

            <div>
                <form action="post" class="form">
                    @csrf
                    <div class="input-group">
                        <label for="username">Username</label>
                        <input type="text" name="username">
                    </div>
                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" name="password">
                    </div>

                    {{-- Checkbox --}}
                    <div class="checkbox">
                        <input class="checkbox-effect checkbox-effect-1" id="get-up-1" type="checkbox" name="remember">
                        <label for="get-up-1">Remember Me</label>
                    </div>

                    <button type="submit">Login</button>

                    <a class="forgot-password" href="">Forgot Password?</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
