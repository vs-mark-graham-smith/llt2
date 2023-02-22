<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Todo Application</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.4/axios.min.js" integrity="sha512-LUKzDoJKOLqnxGWWIBM4lzRBlxcva2ZTztO8bTcWPmDSpkErWx0bSP4pdsjNH8kiHAUPaT06UXcb+vOEZH+HpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- CDNJS :: Sortable (https://cdnjs.com/) -->
    <script src="//cdn.jsdelivr.net/npm/sortablejs@1.8.4/Sortable.min.js"></script>
    <!-- CDNJS :: Vue.Draggable (https://cdnjs.com/) -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/Vue.Draggable/2.20.0/vuedraggable.umd.min.js"></script>

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
