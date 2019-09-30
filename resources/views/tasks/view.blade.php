@extends('layouts.app')

@section('content')
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Task</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>

    @foreach($tasks as  $index =>$task)
        <tr>
            <td>{{$index+1}}</td>
            <td>{{$task['task']}}</td>
            <td>
                <form action="{{ route('tasks.destroy',$task->id) }}" method="POST">

                    {{--<a class="btn btn-info" href="{{ route('tasks.show',$task->id) }}">Show</a>--}}

                    <a class="btn btn-primary" href="{{ route('tasks.edit',$task->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

            </td>
        </tr>


        @endforeach
    </tbody>
</table>


@endsection
