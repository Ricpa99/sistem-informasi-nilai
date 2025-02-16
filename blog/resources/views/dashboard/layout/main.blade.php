<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>{{ $title }}</title>
    <link href="/asset/css/style.css" rel="stylesheet">
    {{-- <link href="/css/style.css" rel="stylesheet"> --}}

</head>

<body>
    {{-- @include('dashboard.layout.load') --}}
    <div id="main-wrapper">
       @include('dashboard.layout.nav')
        <div class="header">    
            @include('dashboard.layout.header')
         </div>
         <div class="nk-sidebar">           
           @include('dashboard.layout.sidebar')
            
        </div>
        <div class="content-body mt-4">
            <div class="container-fluid">
                <div class="row justify-content-center">
                   <div class="col-lg-12">
                       @yield('container')
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Ricky 2024</p>
            </div>
        </div>
    </div>
    <script src="/asset/plugins/common/common.min.js"></script>
    <script src="/asset/js/custom.min.js"></script>
    <script src="/asset/js/settings.js"></script>
    <script src="/asset/js/gleek.js"></script>
    <script src="/asset/js/img.js"></script>
    <!-- <script src="js/styleSwitcher.js"></script> -->
    <!-- <script src="./plugins/validation/jquery.validate.min.js"></script>
    <script src="./plugins/validation/jquery.validate-init.js"></script> -->

</body>
</html>