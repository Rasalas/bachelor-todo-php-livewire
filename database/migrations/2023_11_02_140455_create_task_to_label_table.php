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
        Schema::create('task_to_label', function (Blueprint $table) {
            $table->foreignId('task_id')
                ->constrained('tasks')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreignId('label_id')
                ->constrained('task_labels')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->primary(['task_id', 'label_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task_to_label');
    }
};
