@extends('layouts.app')

@section('content')

<div class="container">

    <h2>Edit Task</h2>

    <form action="{{ route('tasks.update',$task->id) }}"
          method="POST">

        @csrf
        @method('PUT')

        <p>Title</p>
        <input type="text"
               name="title"
               value="{{ $task->title }}">

        <p>Description</p>
        <textarea name="description">{{ $task->description }}</textarea>

        <p>Date</p>
        <input type="date"
               name="task_date"
               value="{{ $task->task_date }}">

        <p>Status</p>
        <select name="status">

            <option value="pending"
                {{ $task->status == 'pending' ? 'selected' : '' }}>
                Pending
            </option>

            <option value="done"
                {{ $task->status == 'done' ? 'selected' : '' }}>
                Done
            </option>

        </select>

        <br><br>

        <button type="submit">
            Update
        </button>

    </form>

</div>

@endsection