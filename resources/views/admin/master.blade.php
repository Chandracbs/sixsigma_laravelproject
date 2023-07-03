<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Six Sigma Admin Panel</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"/>
    <link rel="stylesheet" href="{{url('/admin_assets/css/tailwind.output.css')}}" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="{{url('/admin_assets/js/init-alpine.js')}}"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      defer
    ></script>
    <script src="{{url('/admin_assets/js/charts-lines.js')}}" defer></script>
    <script src="{{url('/admin_assets/js/charts-pie.js')}}" defer></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
  </head>
  <body>
    <div
    class="flex h-screen bg-gray-50 dark:bg-gray-900"
    :class="{ 'overflow-hidden': isSideMenuOpen }"
    >
        @include('admin.partials.sidebar')
        <div class="flex flex-col flex-1 w-full">
            @include('admin.partials.header')
            @yield('content')
            <purple-notice \>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>

    @yield('scripts')

  </body>
  </html>
