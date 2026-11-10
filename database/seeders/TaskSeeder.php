<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        Task::insert([
            [
                'title' => 'Finish Laravel Activity',
                'status' => 'pending',
                'task_date' => now()->toDateString(),
            ],
            [
                'title' => 'Study Blade Templates',
                'status' => 'completed',
                'task_date' => now()->toDateString(),
            ],
            [
                'title' => 'Create Controller',
                'status' => 'pending',
                'task_date' => now()->toDateString(),
            ],
            [
                'title' => 'Update GitHub',
                'status' => 'completed',
                'task_date' => now()->addDay()->toDateString(),
            ],
            [
                'title' => 'Review MVC',
                'status' => 'pending',
                'task_date' => now()->addDay()->toDateString(),
            ],
            [
                'title' => 'Read Laravel Docs',
                'status' => 'pending',
                'task_date' => now()->subDay()->toDateString(),
            ],
            [
                'title' => 'Practice Routing',
                'status' => 'completed',
                'task_date' => now()->subDay()->toDateString(),
            ],
            [
                'title' => 'Prepare Submission',
                'status' => 'pending',
                'task_date' => now()->addDays(2)->toDateString(),
            ]
        ]);
    }
}