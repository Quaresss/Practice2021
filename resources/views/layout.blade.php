<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<div style="height: 45px;background-image:url('{{ asset('images/image.jpg') }}');border-radius: 5px;position:relative">
<div class="container">
  <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
      <span class="fs-4">News</span>
    </a>
    <ul class="nav nav-pills">
      <li class="nav-item"><a href="\news" class="nav-link active" aria-current="page">Главная</a></li>     
    </ul>
  </header>
</div>
<script src="/js/bootstrap.min.js"></script> 

<div class="container">
  @yield('main.content')
</div>

</body>
</html>