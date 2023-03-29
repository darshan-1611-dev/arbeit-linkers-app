<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArbeitLinkers | Dashboard</title>

    @include('admin.layout.css')
</head>

<body>

@include('admin.layout.sidebar')

{{-- Content --}}
<section id="content">

    @include('admin.layout.navbar')

    @yield('body')
</section>
{{-- End Content --}}

@include('admin.layout.js')
</body>

</html>
