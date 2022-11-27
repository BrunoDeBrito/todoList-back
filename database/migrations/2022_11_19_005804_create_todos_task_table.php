<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('todos_task', function (Blueprint $table) {

            $table->id();
            $table->foreignId('todo_id');

            $table->string('label');
            $table->boolean('is_complete')->default(false);

            $table->foreign('todo_id')->references('id')->on('todos')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todos_task');
    }
};
