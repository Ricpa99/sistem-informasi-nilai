
<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ $title }}</title>
    <link href="/asset/css/style.css" rel="stylesheet">
    
</head>

<body class="h-100">
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            @if (session()->has('loginError'))
                            <div class="alert alert-danger alert-dismissible fade show " role="alert">
                                {{ session('loginError') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                
                            </div>
                            @endif
                            <div class="card-body pt-5">
                                <a class="text-center" href="\login"> <h4>Login</h4></a>
        
                                <form action="/login" method="post" class="mt-5 mb-5 login-input">
                                    @csrf
                                    <div class="form-group">
                                        <input autofocus class="form-control rounded-top  @error('nim') is-invalid @enderror " type="text" max="20" required class="form-control" placeholder="Nim" name="nim">
                                        @error('nim')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" max="20" required class="form-control" placeholder="Password" name="password">
                                    </div>
                                    <button class="btn login-form__btn submit w-100">Sign In</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="/asset/plugins/common/common.min.js"></script>
    <script src="/asset/js/custom.min.js"></script>
    <script src="js/settings.js"></script> 
    <script src="js/gleek.js"></script> 
    <script src="js/styleSwitcher.js"></script> 
</body>
</html>





