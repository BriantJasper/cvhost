<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
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

    {{-- Boostrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="bg-image">
    </div>


    <div class="bg-text">
        <div class="wrapper">
            <div class="login-register">
                <a href="/login" class="active">Login</a>
                <a href="/register">Register</a>
            </div>

            @if (session()->has('loginError'))
                <div class="loginError">
                    {{ session('loginError') }}
                </div>
            @endif

            <div>
                <form method="post" action="/login" class="form">
                    @csrf
                    <div class="input-group">
                        <label for="username">Email</label>
                        <input type="email" name="email" class="class="@error('email') is-invalid @enderror"
                            required>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="@error('email') is-invalid @enderror" required>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Checkbox --}}
                    <div class="checkbox">
                        <input class="checkbox-effect checkbox-effect-1" id="get-up-1" type="checkbox" name="remember">
                        <label for="get-up-1">Remember Me</label>
                    </div>

                    <button type="submit">Login</button>

                    <a class="forgot-password" href="">Forgot Password?</a>
                </form>
                {{-- Separator --}}
                <div class="line-container">
                    <div class="line"></div>
                    <div class="text">Or</div>
                    <div class="line"></div>
                </div>
                <button class="google-btn" type="submit">
                    <div class="img"><img src="https://www.cdnlogo.com/logos/g/35/google-icon.svg"></div>
                    <a href="{{ url('/auth/google') }}" class="text">Login With Google</a>
            </div>
            </button>

        </div>
    </div>
    </div>
</body>

</html>
