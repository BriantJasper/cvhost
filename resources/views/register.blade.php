<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>

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
    <div class="bg-image"></div>

    <div class="bg-text">
        <div class="row">
            <div class="login-register">
                <a href="/login">Login</a>
                <a href="/register" class="active">Register</a>
            </div>

            <div>
                <form action="post" class="form">
                    @csrf
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" name="email">
                    </div>
                    <div class="input-group">
                        <label for="username">Username</label>
                        <input type="text" name="username">
                    </div>
                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" name="password">
                    </div>

                    <button type="submit">Register</button>
                </form>

                {{-- Separator --}}
                <div class="line-container">
                    <div class="line"></div>
                    <div class="text">Or</div>
                    <div class="line"></div>
                </div>
                <button class="google-btn" type="submit">
                    <div class="img"><img src="https://www.cdnlogo.com/logos/g/35/google-icon.svg"></div>
                    <div class="text">Login With Google</div>
                </button>
            </div>
        </div>
    </div>
</body>

</html>
