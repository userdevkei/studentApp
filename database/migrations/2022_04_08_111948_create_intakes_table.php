<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntakesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intakes', function (Blueprint $table) {
            $table->bigIncrements('intake_id');
            $table->string('intakeName')->unique();
            $table->string('attendanceType');
            $table->string('studyLevel');
            $table->string('allowedStage');
            $table->string('allowedCourses');
            $table->string('courseRequirements');
            $table->tinyInteger('intakeStatus')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('intakes');
    }
}
