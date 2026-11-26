@extends('layouts.app')

@section('content')

<div style="padding:20px;">

    <h2>Tasks For Today Management System</h2>

    @auth
        <a href="{{ route('tasks.create') }}">
            <button>Create New Task</button>
        </a>

        <br><br>
    @endauth

    @if(session('success'))
        <div style="color:green;">
            {{ session('success') }}
        </div>
        <br>
    @endif

    <table border="1" cellpadding="10">

        <tr>
            <th>Title</th>
            <th>Status</th>
            <th>Date</th>

            @auth
                <th>Actions</th>
            @endauth
        </tr>

        @foreach($tasks as $task)

        <tr>

            <td>{{ $task->title }}</td>

            <td>{{ $task->status }}</td>

            <td>{{ $task->task_date }}</td>

            @auth
            <td>

                <a href="{{ route('tasks.edit', $task->id) }}">
                    Edit
                </a>

                |

                <form
                    action="{{ route('tasks.destroy', $task->id) }}"
                    method="POST"
                    style="display:inline;"
                >
                    @csrf
                    @method('DELETE')

                    <button
                        type="submit"
                        onclick="return confirm('Archive this task?')"
                    >
                        Delete
                    </button>

                </form>

            </td>
            @endauth

        </tr>

        @endforeach

    </table>

</div>

@endsection