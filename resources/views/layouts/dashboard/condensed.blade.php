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
  <div class="page">
    <x-navbar />
    <div class="page-wrapper">
      @yield('page-header')
      <div class="page-body">
        <div class="container-xl">
          @yield('content')
        </div>
      </div>
      <x-footer />
    </div>
  </div>
  @vite(['resources/js/app.js'])
</body>

</html>
