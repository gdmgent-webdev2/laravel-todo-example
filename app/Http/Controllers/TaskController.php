<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function redirect() {
        $defaultCategory = Category::orderBy('is_default', 'DESC')->first();
        
        return redirect()
            ->route('category.index', $defaultCategory->slug);
    }

    public function index($category) {
        
        $category = Category::where('slug', $category)->firstOrFail();
        
        return view('tasks', [
            "page_title" => 'Todo APP',
            'current_category' => $category,
            'categories' => Category::orderBy('is_default', 'DESC')->orderBy('name', 'ASC')->get(),
            'tasks' => $category->tasks
        ]);
    }

    public function store(Request $r, $category) {
        // security validation
        $category = Category::where('slug', $category)->firstOrFail();
        if($category->id != $r->category) abort(401);

        $r->validate([
            'task' => 'required|unique:tasks,name|max:255',
            'category' => 'required|exists:categories,id'
        ]);


        // add to database
        $task = new Task();
        $task->name = $r->task;
        $task->category_id = $r->category;
        $task->is_complete = 0;
        $task->save();

        return redirect()->back();
    }

    public function update(Request $r, $category) {
        // security validation
        $category = Category::where('slug', $category)->firstOrFail();

        // validate request
        $r->validate([
            'task' => 'required|exists:tasks,id'
        ]);


        $task = Task::findOrFail($r->task);
        $task->is_complete = true;
        $task->save();

        return redirect()->back();

    }

    public function delete(Request $r, $category) {
        // security validation
        $category = Category::where('slug', $category)->firstOrFail();

        // validate request
        $r->validate([
            'task' => 'required|exists:tasks,id'
        ]);

        $task = Task::findOrFail($r->task);
        $task->delete();
        
        return redirect()->back();
    }
}
