<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.includes.head')
  </head>
  <body>

    @include('admin.includes.navbar')

    <div class="container-fluid page-body-wrapper">
    
    @include('admin.includes.sidebar')
    
    @yield('content')
    
    @include('admin.includes.footer')

    @include('admin.includes.script')

  </body>
</html>