<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList;

class TodoListController extends Controller
{
    public function index()
    {
        return response()->json(TodoList::all());
    }

    public function create(Request $request) {
        $this->validate($request, [
            'content' => 'required'
        ]);

        $list = TodoList::create($request->all());

        return response()->json($list, 201);
    }
}
