<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpsertTodo;

class TodoController extends Controller
{
    public function index() {
        return view('todo-list');
    }

    public function viewUpsert(Todo $todo = null) {

    }

    public function doUpsert(UpsertTodo $request) {
        //
    }

    public function destroy() {

    }
}
