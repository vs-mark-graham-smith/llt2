@extends('layouts.layout')

@section('body')
<div id="el">
    <form class="flex flex-col" method="POST" :action="computedAction">
        @csrf
        <div class="flex flex-col">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" v-model="todo.title" />
        </div>
        <div class="flex flex-col mt-2">
            <label for="description">Description</label>
            <textarea type="text" id="description" name="description" v-model="todo.description"></textarea>
        </div>
        <button type="submit" class="bg-red-400 p-4 rounded mt-4">Submit</button>
    </form>
</div>
@endsection

@section('vue')
<script>
    var vueObj = new Vue({
        el: '#el',
        data: {
            todo: @json($todo)
        },
        computed: {
            computedAction() {
                return '/todos/upsert' + (this.todo.id ? `/${this.todo.id}` : '')
            }
        }
    })
</script>
@endsection
