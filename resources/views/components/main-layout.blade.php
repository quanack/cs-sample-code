<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <title>Soil Connect - Sample Code Project</title>
</head>

<body class="bg-gray-100">
    <div class="container m-auto">
        <div id="content">
            <x-main-menu />
            {{ $slot }}
        </div>
    </div>
</body>

</html>
