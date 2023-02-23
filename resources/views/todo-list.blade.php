@extends('layouts.layout')

@section('body')
<div id="el">
    <div class="flex flex-col">
        <div class="mb-2">
            <draggable v-model="todoItems" @end="saveSortOrder">
                <div v-for="(item, itemInd) in todoItems" :key="item.id" class="flex flex-row border border-gray-500 p-1" :class="roundedClass(itemInd)">
                    <div class="grow flex-col">
                        <h4>@{{ item.title }}</h4>
                        <hr class="block" />
                        <p>@{{ item.description }}</p>
                    </div>
                    <div>
                        <button class="bg-gray-400 rounded" @click="deleteTodo(item)">
                            <i class="fas fa-times m-1"></i>
                        </button>
                    </div>
                </div>
            </draggable>
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
        methods: {
            roundedClass(itemInd) {
                if (itemInd === 0) {
                    return 'rounded-t'
                }

                if (itemInd === this.todoItems.length - 1) {
                    return 'rounded-b border-t-0'
                }

                return 'border-t-0'
            },

            saveSortOrder() {
                axios.post(`/todos/save-sort-order`, {
                    todos: this.todoItems
                })
                .then(response => {
                    this.todoItems = response.data
                })
            },

            deleteTodo(todo) {
                axios.post(`/todos/delete/${todo.id}`)
                    .then(response => {
                        this.todoItems = response.data
                    })
            }
        }
    })
</script>
@endsection
