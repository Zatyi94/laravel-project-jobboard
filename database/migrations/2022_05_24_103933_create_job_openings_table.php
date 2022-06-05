<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_openings', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('city');
            $table->string('industry');
            $table->string('language_required');
            $table->string('job_title');
            $table->text('job_description');
            $table->text('requirements');
            $table->string('salary');
            $table->string('start_date');
            // $table->timestamp('created_at');
            // $table->timestamp('updated_at');
            $table->timestamp('deleted_at');
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
        Schema::dropIfExists('job_openings');
    }
};
