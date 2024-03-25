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
    {{-- Boostrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="bg-image"></div>
    <div class="bg-text">
        <div class="wrapper">
            <div class="login-register">
                <a href="/login">Login</a>
                <a href="/register" class="active">Register</a>
            </div>

            <div>
                <form method="post" class="form" action="/register">
                    @csrf
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="@error('email') is-invalid @enderror" required>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="input-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="@error('name') is-invalid @enderror" required>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="@error('password') is-invalid @enderror" required>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

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
                    <a href="{{ url('/auth/google') }}" class="text">Login With Google</a>
                </button>
            </div>
        </div>
    </div>
</body>

</html>
