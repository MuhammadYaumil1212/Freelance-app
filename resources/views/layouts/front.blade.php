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
      @include('includes.landing.footer')
      {{-- Script --}}
      @stack('before-script')
        @include('includes.landing.script')
      @stack('after-script')
      {{-- Modal --}}
      @include('components.modal.login')
      @include('components.modal.register')
      @include('components.modal.register-success')
  </div>
</body>
</html>