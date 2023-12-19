<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TasksTableSeeder extends Seeder
{
    public function run()
    {
        Task::create([
            'title' => 'Task 1',
            'description' => 'Description for Task 1',
            'due_date' => now()->addDays(7),
        ]);

        Task::create([
            'title' => 'Task 2',
            'description' => 'Description for Task 2',
            'due_date' => now()->addDays(14),
        ]);

        // Add more tasks as needed
    }
}
