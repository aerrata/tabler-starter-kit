<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Tabler Demo</title>
  @vite(['resources/css/app.css'])
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.4.0/dist/js/tabler-theme.min.js"></script>
  <div class="row g-0 flex-fill">
    <div class="col-12 col-lg-6 col-xl-6 d-flex flex-column justify-content-center">
      <div class="container-tight px-lg-5 container my-5">
        <div class="mb-4 text-center">
          <a href="." aria-label="Tabler" class="navbar-brand navbar-brand-autodark">
            <x-app-logo />
          </a>
        </div>
        @yield('content')
      </div>
    </div>
    <div class="col-12 col-lg-6 col-xl-6 d-none d-lg-block">
      <div class="h-100 min-vh-100 bg-cover" style="background-image: url(https://images.unsplash.com/photo-1518005020951-eccb494ad742?q=80&w=1055&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)"></div>
    </div>
  </div>
  @vite(['resources/js/app.js'])
</body>

</html>
