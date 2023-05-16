@extends('layouts.main')
@section('main_content')
    <div class="todo-container">
        <h1>To-Do</h1>
        <div class="todo-wrapper">
            @foreach ($tasks as $task)
                <div class="todo-box">
                    <div class="content">
                        <div>
                            {{ $task->task }}
                        </div>
                    </div>
                    <div class="buttons">
                        <a href="{{ route('task.edit', $task->id) }}"><i class="fa-solid fa-pen"></i></a>
                        <a href="{{ route('task.delete', $task->id) }}"><i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>
            @endforeach
            <!-- add button -->
            <div class="add-new">
                <a href="{{ route('task.create') }}"><i class="fa-solid fa-plus"></i></a>
            </div>
        </div>
    </div>
@endsection
