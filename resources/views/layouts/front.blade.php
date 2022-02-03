<!doctype html>
<html lang="en">

<head>
      {{-- meta --}}
      @include('includes.landing.meta')

      {{-- title --}}

      <title>@yield('title') | SERV</title>
      {{-- Style --}}
      @stack('before-style')

      @include('includes.landing.style')

      @stack('after-style')

</head>
<body class="antialiased">
  <div class="relative">
    {{-- header --}}
    @include('includes.landing.header')
    {{-- Content --}}
      @yield('content')
      {{-- Footer --}}
      @stack('after-style')

      @include('includes.landing.footer')

      @stack('after-style')
      {{-- Modal --}}
      @include('components.modal.login')
      @include('components.modal.register')
      @include('components.modal.regiser-success')
  </div>
</body>
</html>