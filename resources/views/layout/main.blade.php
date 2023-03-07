<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <title>ArebitLinkers - Freelance Service Provider</title>

    @include("layout.css")
</head>

<body>
@include("layout.header")

@yield("body")

@include("layout.footer")
</body>


@include("layout.js")

</html>
