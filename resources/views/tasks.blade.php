@extends('layouts.app')

@section('content')

<h2>All Tasks</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>Title</th>
        <th>Status</th>
        <th>Date</th>
    </tr>

    @foreach($tasks as $task)
    <tr>
        <td>{{ $task->title }}</td>
        <td>{{ $task->status }}</td>
        <td>{{ $task->task_date }}</td>
    </tr>
    @endforeach

</table>

@endsection