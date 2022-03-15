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

    //
    public function index($category) {
        
        $category = Category::where('slug', $category)->firstOrFail();
        $task = Task::first();
        
        return view('tasks', [
            "page_title" => 'Done for today',
            'categories' => Category::all(),
            'tasks' => $category->tasks
        ]);
    }

    public function store($category) {
        dd('post will happen here');
    }
}
