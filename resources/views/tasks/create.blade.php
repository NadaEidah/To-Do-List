@extends('layouts.app')

@section('content')

    <form action = "{{route('tasks.store')}}" method="post">
        @csrf


        <div class="form-group">
            <label for="task">Task </label>
            <input name= "task" type="text" class="form-control" id="task" aria-describedby="Task" placeholder="Task">
        </div>

        <button type="submit" class="btn btn-primary">Add Task</button>
    </form>

@endsection
