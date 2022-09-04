<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="https://www.flaticon.es/icono-gratis/php_603172" type="image/x-png">
<title>@yield('title')</title>

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-
bootstrap/5.0.2/css/bootstrap.min.css' />

</head>
<body>
<div class="container">
<div class="row my-2">
<div class="col-lg-12 d-flex justify-content-between align-items-center mx-auto">
<div>
<h2 class="text-primary">@yield('heading')</h2>
</div>
<div>

<a href="@yield('link')" class="btn btn-primary rounded-
pill">@yield('link_text')</a>

<a href="/" class="btn btn-success rounded-pill">Principal</a>
</div>
</div>
</div>
<hr class="my-2">
@yield('content')
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-
bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>

</body>
</html>
