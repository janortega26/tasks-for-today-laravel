<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Mail\TaskCompletedMail;
use Illuminate\Support\Facades\Mail;


class TaskController extends Controller
{
    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'task_date' => 'required|date',
        ]);

        Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status ?? 'pending',
            'task_date' => $request->task_date,
        ]);

        return redirect('/tasks')
            ->with('success', 'Task created successfully.');
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required',
            'task_date' => 'required|date',
        ]);

        $oldStatus = $task->status;

        $task->update([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
            'task_date' => $request->task_date,
        ]);

        if (
            $oldStatus !== 'done' &&
            $request->status === 'done'
        ) {

            Mail::to('test@example.com')
                ->send(
                    new TaskCompletedMail($task)
                );
        }

        return redirect('/tasks')
            ->with('success', 'Task updated successfully.');
    }

    public function destroy(Task $task)
    {
        $task->update([
            'is_archived' => true
        ]);

        return redirect('/tasks')
            ->with('success', 'Task archived successfully.');
    }
}