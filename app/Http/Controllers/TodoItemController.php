<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\TodoItem;
use \App\User;

use Auth;

class TodoItemController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        return User::find($userId)->todoItems;
    }

    public function show(TodoItem $todoItem)
    {
        if ($todoItem->user_id == Auth::id()) {
            return $todoItem;
        }
        
        return response()->json(null, 404);
    }

    public function store(Request $request)
    {
        $userId = Auth::id();
        
        return TodoItem::create(array_merge($request->all(), ['user_id' => $userId]));
    }

    public function update(Request $request, TodoItem $todoItem)
    {
        // remove 'user_id' from request array to prevent change of ownership
        unset($request['user_id']);

        $todoItem->update($request->all());

        return response()->json($todoItem, 200);
    }

    public function delete(TodoItem $todoItem)
    {
        $todoItem->delete();

        return response()->json(null, 204);
    }
}
