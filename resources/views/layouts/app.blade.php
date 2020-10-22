{{-- Layouts/app.blade.php --}}

<!DOCTYPE html>
<html lang="en" dir="ltr">

  {{-- Include Head --}}
  @include("partials.head")

  <body>

      {{-- Main --}}
      <main>
        @yield('content')
      </main>
      {{-- end Main --}}

  </body>
</html>
