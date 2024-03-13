<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    {{-- External CSS --}}

    <link rel="stylesheet" href="/css/style.css">
    {{-- Bootstrap Links --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
    ">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    @yield('container')

    @include('partials.footer')

    {{-- Scroll Navbar BG Color --}}
    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            const headerElements = document.querySelectorAll('.header-elements');
            const navbarNav = document.querySelector('.navbar-nav');
            if (window.scrollY > 100) {
                navbar.classList.add('bg-scroll');
                headerElements.forEach(element => {
                    element.style.display = 'none';
                });
                navbarNav.style.marginTop = '0'; // Adjust margin-top here
            } else {
                navbar.classList.remove('bg-scroll');
                headerElements.forEach(element => {
                    element.style.display = 'block';
                });
                navbarNav.style.marginTop = '-15px'; // Set back to default margin-top value
            }
        });
    </script>
    {{-- Bootstrap Popper --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
