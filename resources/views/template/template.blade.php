<!DOCTYPE html>
<html lang="en">
<head>
  @include('include.meta')
  @include('include.style')
  @stack('add-on-style')
  <title>@yield('title')</title>
</head>
<body>
  @yield('content')
</body>
</html>