<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Learning</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.95.3/css/materialize.min.css">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
<body>
    <header>
        <nav class="teal">
            <div class="nav-wrapper container">
                <a href="{{ route('user.index') }}" class="brand-logo">Learning CRUD LOGIN</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="{{ route('user.index') }}">Read</a></li>
                    <li><a href="{{ route('user.create') }}">Create</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
    @section('footer')
    <footer class="page-footer teal">
        <div class="footer-copyright">
            <div class="container">
                Deky Dilfiana Dewantara &bull; powered by <a class="grey-text text-lighten-4" href="http://www.laravel.com">Laravel</a>
                &bull; copyright &copy; {{ Date('Y') }}
            </div>
        </div>
    </footer>
    <!-- Compiled and minified JavaScript -->
    <script src="{{ url('jquery.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.95.3/js/materialize.min.js"></script>
    @show
</body>
</html>
