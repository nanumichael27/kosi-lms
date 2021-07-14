<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_lists', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('course_id')->onDeleteCascade();
            $table->foreignId('user_id')->onDeleteCascade();
            $table->float('percentage')->default(0)->nullable();
            $table->string('videos')->default("[0]");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_lists');
    }
}
