<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Todo Application</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>
</head>

<body>
    <div class="flex items-center justify-center h-screen bg-gray-900">
        <div class="p-4 bg-gray-200 border border-black rounded">
            @yield('body')
        </div>
    </div>

</body>

@yield('vue')

</html>
