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

        Task::create([
            'title' => 'Task 4',
            'description' => 'Description for Task 4',
            'due_date' => now()->addDays(21),
        ]);

        Task::create([
            'title' => 'Task 5',
            'description' => 'Description for Task 5',
            'due_date' => now()->addDays(10),
        ]);

        Task::create([
            'title' => 'Task 6',
            'description' => 'Description for Task 6',
            'due_date' => now()->addDays(12),
        ]);
        
        Task::create([
            'title' => 'Task 11',
            'description' => 'Description for Task 11',
            'due_date' => now()->addDays(10),
        ]);

        Task::create([
            'title' => 'Task 12',
            'description' => 'Description for Task 12',
            'due_date' => now()->addDays(12),
        ]);
        // Add more tasks as needed
    }
}
