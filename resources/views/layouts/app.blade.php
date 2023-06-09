<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env("APP_NAME") }} - @yield("page-name")</title>

     @vite('resources/js/app.js')

    {{-- Bootstrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>

    <header>
        @include("partials.header")
    </header>

    <main>
        <div class="container my-5">
            @yield("main-content")
        </div>
    </main>
    
    @yield("modals")
</body>
</html>