<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title }}</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="{{ $link }}/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="{{ $link }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <link rel="stylesheet" href="{{ $link }}/dist/css/adminlte.min.css?v=3.2.0">        
    </head>
    <body class="hold-transition login-page">        
        <div class="login-box">
            <div class="login-logo">
                <a href="#"><b>Simutu</b> GO</a>
            </div>
            <div class="card">
                <div class="card-body login-card-body">                    
                    <form action="{{ route('authenticate') }}" method="post">
                        {{ csrf_field() }}
                        @if($errors->any())
                            <div class="row">
                                <div class="col-12">
                                    <p class="text-danger text-center">Nama atau password salah !</p>
                                </div>
                            </div>
                        @endif 
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Nama" name="name" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>  
                        </div>                        
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <a href="#">Lupa password ?</a>                                    
                                </div>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                            </div>        
                        </div>                                               
                    </form>                        
                </div>
            </div>
        </div>
        <script src="{{ $link }}/plugins/jquery/jquery.min.js"></script>
        <script src="{{ $link }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ $link }}/dist/js/adminlte.min.js?v=3.2.0"></script>        
    </body>
</html>
