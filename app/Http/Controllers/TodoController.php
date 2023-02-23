<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSortOrder;
use Illuminate\Http\Request;
use App\Http\Requests\UpsertTodo;
use App\Todo;

class TodoController extends Controller
{
    public function index() {
        return view('todo-list', [
            'todoItems' => app(Todo::class)
                ->orderBy('order', 'asc')
                ->get()
                ->toArray()
        ]);
    }

    public function viewUpsert(Todo $todo = null) {
        return view('todo-upsert', [
            'todo' => $todo ?? app(Todo::class)->fill([
                'title' => null,
                'description' => null,
                'order' => null
            ])
        ]);
    }

    public function doUpsert(UpsertTodo $request, Todo $todo = null) {
        if ($todo === null) {
            $todo = app(Todo::class);
            $todo->order = app(Todo::class)
                ->orderBy('order', 'desc')
                ->first()
                ->order ?? 0 + 1;
        }

        $todo->fill([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        $todo->save();

        return redirect('/')->with('success', 'Todo item created!');
    }

    public function doSaveSortOrder(UpdateSortOrder $request) {
        $order = 1;
        collect($request->input('todos'))
            ->reverse()
            ->each(static function ($todo) use (&$order) {
                $todo = app(Todo::class)->find($todo['id']);
                $todo->order = $order++;
                $todo->save();
            });

        return response()
            ->json(
                app(Todo::class)
                    ->orderBy('order', 'desc')
                    ->get()
                    ->toArray()
            );
    }

    public function doDelete(Todo $todo) {
        $todo->delete();

        return response()
            ->json(
                app(Todo::class)
                    ->orderBy('order', 'desc')
                    ->get()
                    ->toArray()
            );
    }
}
