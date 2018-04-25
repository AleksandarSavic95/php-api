<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\TodoItem;

class TodoItemController extends Controller
{
    public function index()
    {
        return TodoItem::all();
    }

    public function show(TodoItem $todoitems)
    {
        return $todoitems;
    }

    public function store(Request $request)
    {
        $todoitems = TodoItem::create($request->all());

        return response()->json($todoitems, 201);
    }

    public function update(Request $request, TodoItem $todoitems)
    {
        $todoitems->update($request->all());

        return response()->json($todoitems, 200);
    }

    public function delete(TodoItem $todoitems)
    {
        $todoitems->delete();

        return response()->json(null, 204);
    }
}
