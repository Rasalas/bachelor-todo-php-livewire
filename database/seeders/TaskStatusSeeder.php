<?php

namespace Database\Seeders;

use App\Models\TaskStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TaskStatus::create(['name' => 'Backlog', 'key' => 'backlog', 'icon' => 'warehouse', 'color' => 'secondary']);
        TaskStatus::create(['name' => 'Waiting', 'key' => 'waiting', 'icon' => 'hourglass-half', 'color' => 'info']);
        TaskStatus::create(['name' => 'TODO', 'key' => 'todo', 'icon' => 'hammer', 'color' => 'primary']);
        TaskStatus::create(['name' => 'In Review', 'key' => 'review', 'icon' => 'magnifying-glass', 'color' => 'warning']);
        TaskStatus::create(['name' => 'Done', 'key' => 'done', 'icon' => 'check', 'color' => 'success']);
        TaskStatus::create(['name' => 'Cancelled', 'key' => 'cancelled', 'icon' => 'ban', 'color' => 'danger']);
    }
}
