<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;

class TaskController extends Controller
{
    public function index() {
    $tasks =Tasks::all();
    return view('tasks', compact('tasks'));
}

public function store(Request $request) {
    $task = new Tasks();
    $task->title = $request->title;
    $task->description = $request->description;
    $task->save();
    return back();
}
public function destroy($id){
    \App\Models\Tasks::destroy($id);
    return back();
}
}
