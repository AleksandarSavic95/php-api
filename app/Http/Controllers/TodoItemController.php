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

    public function show(TodoItem $todoitem)
    {
        return $todoitem;
    }

    public function store(Request $request)
    {
        // \Log::info($request);

        $todoitem = TodoItem::create($request->all());

        return response()->json($todoitem, 201);
    }

    public function update(Request $request, TodoItem $todoitem)
    {
        $todoitem->update($request->all());

        return response()->json($todoitem, 200);
    }

    public function delete(TodoItem $todoitem)
    {
        $todoitem->delete();

        return response()->json(null, 204);
    }
}
