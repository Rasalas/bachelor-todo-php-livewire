<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create(['title' => 'Database Schema Design', 'description' => 'Design the initial database schema for the project.', 'complexity' => 4, 'project_id' => 1, 'status_id' => 1]);
        Task::create(['title' => 'API Endpoint Implementation', 'description' => 'Implement the RESTful API endpoints for managing tasks.', 'complexity' => 5, 'project_id' => 1, 'status_id' => 2]);
        Task::create(['title' => 'Frontend Layout Design', 'description' => 'Design the layout for the frontend using a responsive framework.', 'complexity' => 3, 'project_id' => 2, 'status_id' => 3]);
        Task::create(['title' => 'User Authentication', 'description' => 'Implement user authentication and authorization.', 'complexity' => 5, 'project_id' => 2, 'status_id' => 4]);
        Task::create(['title' => 'Testing Suite Setup', 'description' => 'Setup a testing suite for backend services.', 'complexity' => 4, 'project_id' => 1, 'status_id' => 5]);
        Task::create(['title' => 'Performance Optimization', 'description' => 'Optimize the performance of the backend by analyzing and improving database queries.', 'complexity' => 5, 'project_id' => 2, 'status_id' => 6]);
        Task::create(['title' => 'Error Handling', 'description' => 'Implement robust error handling across the application.', 'complexity' => 3, 'project_id' => 1, 'status_id' => 4]);
        Task::create(['title' => 'Documentation', 'description' => 'Create comprehensive documentation for the API.', 'complexity' => 2, 'project_id' => 2, 'status_id' => 1]);
        Task::create(['title' => 'User Feedback', 'description' => 'Collect and analyze user feedback for the next iteration.', 'complexity' => 3, 'project_id' => 1, 'status_id' => 2]);
        Task::create(['title' => 'Refactoring', 'description' => 'Refactor the codebase to ensure maintainability.', 'complexity' => 4, 'project_id' => 2, 'status_id' => 3]);
    }
}
