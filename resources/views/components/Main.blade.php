<!DOCTYPE html>
<html lang="es">
<head>
    <title>{{$_PAGE_TITLE}} | @yield('title', '*** TITLE ***')</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="all,follow" />

    <meta name="google-site-verification" content="6ejnuNh5CX0Gdtu7_6W8z9hu4-PWDh1u194Cowjxcf0" />
    
    @yield('components.Stylesheets')
</head>

<body>
    @yield('components.Navbar')

    @yield('content', '*** CONTENT ***')
        
    @yield('components.Footer')

    @yield('components.Scripts')
</body>
</html>