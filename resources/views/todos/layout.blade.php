<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todos</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    @livewireStyles
</head>

<body>
<div class="text-center pt-10 flex justify-center">
    <div class="w-1/3 border border-gray-500 rounded-lg py-4">
    @yield('content')
    </div>
</div>
@livewireScripts
</body>

</html>