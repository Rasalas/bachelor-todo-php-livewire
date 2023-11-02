<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            
            $table->string('title');

            $table->text('description')->nullable()->default(null);

            $table->integer('complexity')->nullable()->default(null);

            $table->foreignId('project_id')->nullable()->default(null)
                ->constrained('projects', 'id')
                ->onDelete('cascade')
                ->onUpdate('cascade')
                ;

            $table->foreignId('status_id')->nullable()->default(null)
                ->constrained('task_statuses', 'id')
                ->onDelete('cascade')
                ->onUpdate('cascade')
                ;

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
