<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('job_seeker_id')->nullable();
            $table->foreign('job_seeker_id')->references('id')->on('job_seekers')->onDelete('cascade');
            $table->string('name', 100);
            $table->string('place_of_birth', 100);
            $table->date('date_of_birth');
            $table->string('last_education', 50);
            $table->string('job', 100);
            $table->enum('is', ['1', '2'])->default('1')->comment = '1 = Father, 2 = Mother';
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
        Schema::dropIfExists('parents');
    }
}
