<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'SMK Al Falah Tanjungjaya')
    </title>

    <meta name="description"
        content="Website resmi SMK Al Falah Tanjungjaya">

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        rel="stylesheet">

    <style>
        :root {
            --primary: #176b9d;
            --primary-dark: #0e4568;
            --primary-light: #eaf6fc;
            --text-dark: #17324d;
        }

        body {
            font-family: Arial, sans-serif;
            color: var(--text-dark);
            background: #ffffff;
        }

        .navbar-school {
            background: #ffffff;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
        }

        .navbar-brand {
            font-weight: 700;
            color: var(--primary-dark) !important;
        }

        .navbar-brand small {
            display: block;
            font-size: 11px;
            font-weight: 400;
            color: #777;
        }

        .nav-link {
            color: #29485e !important;
            font-weight: 500;
            margin-left: 8px;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--primary) !important;
        }

        .btn-school {
            background: var(--primary);
            color: white;
            border-radius: 8px;
            padding: 11px 22px;
            border: none;
        }

        .btn-school:hover {
            background: var(--primary-dark);
            color: white;
        }

        .section-title {
            font-weight: 700;
            color: var(--primary-dark);
        }

        .school-footer {
            background: #102f46;
            color: white;
        }
    </style>

    @stack('styles')
    <style>
    body.dark-mode {
        background-color: #121a21 !important;
        color: #f1f5f9 !important;
    }

    body.dark-mode .navbar {
        background-color: #17232d !important;
    }

    body.dark-mode .navbar-brand,
    body.dark-mode .nav-link {
        color: #f1f5f9 !important;
    }

    body.dark-mode .nav-link.active {
        color: #7cc7ff !important;
    }

    body.dark-mode .card {
        background-color: #1b2a36 !important;
        color: #f1f5f9 !important;
    }

    body.dark-mode .text-muted,
    body.dark-mode .text-secondary {
        color: #b8c5cf !important;
    }

    body.dark-mode section {
        background-color: #121a21 !important;
    }

    body.dark-mode footer {
        background-color: #0d141a !important;
    }

    body.dark-mode .btn-outline-primary {
        color: #7cc7ff !important;
        border-color: #7cc7ff !important;
    }
    body.dark-mode .card h4,
body.dark-mode .card h5,
body.dark-mode .card h6 {
    color: #ffffff !important;
}

body.dark-mode .form-check-label {
    color: #ffffff !important;
}
body.dark-mode .text-dark-mode-title {
    color: #ffffff !important;
}
</style>
</head>

<body>

    @if (!request()->is('admin/*') && !request()->is('admin'))
    @include('partials.navbar')
@endif

    <main>
        @yield('content')

    </main>

    @include('partials.footer')

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

    @stack('scripts')
    <script>
    const darkModeSwitch = document.getElementById('darkModeSwitch');

    if (darkModeSwitch) {
        darkModeSwitch.addEventListener('change', function () {
            if (this.checked) {
                document.body.classList.add('dark-mode');
                localStorage.setItem('darkMode', 'on');
            } else {
                document.body.classList.remove('dark-mode');
                localStorage.setItem('darkMode', 'off');
            }
        });
    }

    if (localStorage.getItem('darkMode') === 'on') {
        document.body.classList.add('dark-mode');

        if (darkModeSwitch) {
            darkModeSwitch.checked = true;
        }
    }
</script>

</body>

</html>