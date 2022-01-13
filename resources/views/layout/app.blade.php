<!DOCTYPE html>
<html lang="en">

@include('layout.partials.head')

<body>

    @include('layout.partials.header')

    <main>@yield('content')</main>

    @include('layout.partials.footer')

</body>

</html>