@extends('layouts.layout')

@section('body')
<div id="el">
    <div class="flex flex-col">
        <div>
            <div v-for="item in todoItems">
                @{{ item.title }}
            </div>
        </div>
        <a class="bg-red-400 p-4 rounded" href="/todos/upsert">Add a todo item</a>
    </div>
</div>
@endsection

@section('vue')
<script>
    var vueObj = new Vue({
        el: '#el',
        data: {
            todoItems: @json($todoItems),
        },
    })
</script>
@endsection
