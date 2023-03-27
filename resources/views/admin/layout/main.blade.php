<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <title>Dashboard | ArbeitLinkers</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">

    @include("admin.layout.css")

</head>

<body>
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

        @include("admin.layout.sidebar")

        <div class="layout-page">

            @include("admin.layout.navbar")

            <div class="content-wrapper">

                <div class="container-xxl flex-grow-1 container-p-y">
                    @yield("body")
                </div>

            </div>
        </div>
    </div>

    <div class="layout-overlay layout-menu-toggle"></div>
    <div class="drag-target"></div>
</div>


@include("admin.layout.js")
</body>

</html>
