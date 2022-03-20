@extends('layouts.main')

@section('form')
<form action="">
    <div class="input-group">
        <input type="text" placeholder="What to do next?" class="input-field">
        <button type="button">
            <i class="fa fa-plus"></i>
        </button>
    </div>
</form>
@endsection

@section('content')
<!-- todos -->
<div class="todos">

    <div class="todo-group">
        <p class="todo">Vacuum clean the house</p>
        <button type="button" class="check">
            <i class="fa fa-check"></i>
        </button>
    </div>

    <div class="todo-group">
        <p class="todo">Paint the shed in our garden</p>
        <button type="button" class="check">
            <i class="fa fa-check"></i>
        </button>
    </div>

</div>
<hr>
<h3>These tasks are done</h3>
<div class="todos">
    <div class="todo-group">
        <p class="todo">Update homebrew, php, composer, ...</p>
        <button type="button" class="trash">
            <i class="fa fa-trash"></i>
        </button>
    </div>
    <div class="todo-group">
        <p class="todo">Prepare dinner for my Tinder date.</p>
        <button type="button" class="trash">
            <i class="fa fa-trash"></i>
        </button>
    </div>
    <div class="todo-group">
        <p class="todo">Do pilates with my buddies</p>
        <button type="button" class="trash">
            <i class="fa fa-trash"></i>
        </button>
    </div>
</div>
@endsection

@section('title')
<h2>OMG. so much stuff to do!</h2>
@endsection