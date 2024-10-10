<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>



    <div class="flex  overflow-hidden">
        @include('layouts.sidebar')

        <div class="w-5/6 h-screen overflow-y-auto">

           @include('layouts.flash') 



            @yield('content')
        </div>

    </div>


</body>

</html>
