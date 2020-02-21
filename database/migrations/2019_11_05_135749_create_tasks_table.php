<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cid')->default(0);
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->text('description');
            $table->longtext('content')->nullable();
            $table->string('image')->nullable();
            $table->string('clip')->nullable();     
            $table->string('tag')->nullable();
            $table->string('slug');
            $table->smallInteger('status')->default(1);
            $table->smallInteger('hot')->default(0);            
            $table->integer('visit');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');

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
        Schema::dropIfExists('tasks');
    }
}
