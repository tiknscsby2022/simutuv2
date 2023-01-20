<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ $link }}/dist/css/adminlte.min.css">
    <script src="https://kit.fontawesome.com/b4c8b2ca68.js" crossorigin="anonymous"></script>  
    @stack('css')
</head>
<body>
    @include('partials.aside')
    @include('partials.header')

    <div class="content-wrapper">
        <section class="content-header">            
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </section>
    </div>

    @stack('script')

    <script src="{{ $link }}/plugins/jquery/jquery.min.js"></script>    
    <script src="{{ $link }}/plugins/jquery-ui/jquery-ui.min.js"></script>    
    <script src="{{ $link }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>    
    <script src="{{ $link }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="{{ $link }}/dist/js/adminlte.min.js"></script>


</body>
</html>