@extends('layouts.app')

@section('content')

<div class="container">

    <h2>Create Task</h2>

    <form action="{{ route('tasks.store') }}"
          method="POST">

        @csrf

        <p>Title</p>
        <input type="text"
               name="title">

        <p>Description</p>
        <textarea name="description"></textarea>

        <p>Date</p>
        <input type="date"
               name="task_date">

        <p>Status</p>
        <select name="status">
            <option value="pending">
                Pending
            </option>

            <option value="done">
                Done
            </option>
        </select>

        <br><br>

        <button type="submit">
            Save
        </button>

    </form>

</div>

@endsection