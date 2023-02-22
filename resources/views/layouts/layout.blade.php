<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Todo Application</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            safelist: [
                'rounded-t',
                'rounded-b',
                'border-t-0'
            ]
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="flex items-center justify-center h-screen bg-gray-900">
        <div class="p-4 w-2/5 bg-gray-200 border border-black rounded">
            @yield('body')
        </div>
    </div>

</body>

@yield('vue')

</html>
