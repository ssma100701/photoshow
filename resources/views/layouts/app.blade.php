<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.1/css/foundation.css">
</head>
<body>
    @include('layouts.topbar')
    <br>
    <div class="row">
        @include('layouts.messages')
        @yield('content')
    </div>
</body>
</html>
