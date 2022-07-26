<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="argon/img/apple-icon.png">
    <link rel="icon" type="image/png" href="argon/img/favicon.png">
    <title>
        Argon Dashboard 2 by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    @include('argon.includes.style')

    @include('argon.includes.script')
</head>

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>

    @include('argon.includes.sidebar')

    @include('argon.includes.content')

    @include('argon.includes.change-theme')

    @include('argon.includes.script')
</body>

</html>
