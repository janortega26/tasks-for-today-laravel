<?php
namespace App\Http\Controllers;
use App\Models\Task;
use App\Models\User;
use Carbon\Carbon;
class PageController extends Controller
{
    public function welcome()
    {
        $tasks = Task::where('is_archived', false)
            ->whereDate(
                'task_date',
                now()->toDateString()
            )
            ->get();

        return view('welcome', compact('tasks'));
    }
    public function tasks()
    {
        $tasks = Task::where('is_archived', false)
            ->orderBy('task_date')
            ->get();
        return view('tasks', compact('tasks'));
    }
    public function profile()
    {
        $user = User::first();
        return view('profile', compact('user'));
    }
    public function about()
    {
        return view('about');
    }
}