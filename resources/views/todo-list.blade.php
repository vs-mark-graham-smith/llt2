@extends('layouts.layout')

@section('body')
<div id="el">
    <div class="flex flex-col">
        <a class="bg-red-400 p-4 rounded" href="/todos/upsert">Add a todo item</a>
    </div>
</div>
@endsection

@section('vue')
<script>
    var vueObj = new Vue({
        el: '#el',
        data: {
            todoItems: {}
        },
        beforeMount() {
            // Axios to get todo items
        },


    })
</script>
@endsection
