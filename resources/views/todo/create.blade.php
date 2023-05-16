@extends('layouts.main')
@section('main_content')
    <div class="todo-container">
        <h1>Create New Task</h1>
        <div class="todo-wrapper">
            <div class="todo-box">
                <form id="my_form" action="{{ route('task.store') }}" method="POST">
                    @csrf
                    <textarea rows="10" name="TodoTask" placeholder="Type here.."></textarea>
                </form>
            </div>
            <div class="add-new">
                <a href="javascript:{}" onclick="document.getElementById('my_form').submit();">
                    <i class="fa-solid fa-floppy-disk"></i>
                </a>
            </div>
        </div>
    </div>
@endsection
