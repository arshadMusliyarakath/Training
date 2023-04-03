<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - FilmoRate</title>
    <link href="{{ asset('assets/icons/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
  <link href="{{ asset('assets/icons/favicon.ico') }}" rel="apple-touch-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('assets/css/mystyle.css') }}" rel="stylesheet" type="text/css">
  </head>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Back to Site</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page"  href="{{ route('Dashboard') }}">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page"  href="{{ route('add.movie') }}">Add Movie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page"  href="{{ route('admin.logout') }}">{{ Auth::guard('admin')->user()->name }}:<span class="text-danger"> Logout Admin</span></a>
          </li>
        </ul>
 
      </div>
    </div>
  </nav>
  <body>










    
    @yield("admin_content")

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>