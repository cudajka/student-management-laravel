<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{url('/assets')}}/assets/bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{url('/assets')}}/assets/font-awesome-6-pro-main/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="{{url('/assets')}}/css/style.css" rel="stylesheet" type="text/css">
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32" aria-hidden="true"><use xlink:href="#bootstrap"></use></svg>
                <span class="fs-4">Simple header</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link">About</a></li>
            </ul>
        </header>
    </div>

    @yield('content')

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1" aria-label="Bootstrap">
                    <svg class="bi" width="30" height="24" aria-hidden="true"><use xlink:href="#bootstrap"></use></svg>
                </a>
                <span class="mb-3 mb-md-0 text-body-secondary">© 2025 Company, Inc</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-body-secondary" href="#" aria-label="Instagram"><svg class="bi" width="24" height="24" aria-hidden="true"><use xlink:href="#instagram"></use></svg></a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#" aria-label="Facebook"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
            </ul>
        </footer>
    </div>

    <script src="{{url('/assets')}}/assets/bootstrap-5.3.3-dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{url('/assets')}}/js/jquery-3.7.1.min.js" type="text/javascript"></script>
    </body>
</html>
