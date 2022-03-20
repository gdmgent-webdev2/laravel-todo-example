@extends('layouts.main')

@section('form')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form class="add" method="post" action="{{ route('category.store', $current_category->slug) }}">
    @csrf
    <div class="input-group @error('task') is-invalid @enderror">
        <input type="hidden" name="category" value="{{ $current_category->id }}">
        <input type="text" name="task" placeholder="What to do next?" class="input-field">
        <button type="submit">
            <i class="fa fa-plus"></i>
        </button>
    </div>
</form>
@endsection

@section('content')
<!-- todos -->
<div class="todos">


    @foreach ($tasks->where('is_complete', 0) as $task)
    
    {!! $loop->first ? '<h3>These tasks are waiting</h3>' : '' !!}
    
    <form action="{{ route('category.update', $current_category->slug) }}" method="POST">
        <div class="todo-group">
            <p class="todo">{{ $task->name }}</p>
            @method('PUT')
            @csrf
            <input type="hidden" name="task" value="{{$task->id}}">
            <button type="submit" class="check">
                <i class="fa fa-check"></i>
            </button>
        </div>
    </form>
    @endforeach
</div>
<div class="todos">
    @foreach ($tasks->where('is_complete', 1) as $task)
    {!! $loop->first ? '<hr><h3>These tasks are done</h3>' : '' !!}
    <form action="{{ route('category.delete', $current_category->slug) }}" method="POST">
        @csrf
        @method("DELETE")
        <input type="hidden" name="task" value="{{ $task->id }}">
        <div class="todo-group">
            <p class="todo">{{ $task->name }}</p>
            <button type="submit" class="trash">
                <i class="fa fa-trash"></i>
            </button>
        </div>
    </form>
    @endforeach
</div>
@endsection

@section('title')
<h2>OMG. so much stuff to do!</h2>
@endsection