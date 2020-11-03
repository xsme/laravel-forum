<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forums', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id')->nullable()->default(null);
            $table->unsignedBigInteger('left_id')->nullable()->default(null);
            $table->unsignedBigInteger('right_id')->nullable()->default(null);
            $table->string('name');
            $table->text('description')->nullable()->default(null);
            $table->tinyInteger('type')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->string('link')->nullable()->default(null);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('parent_id')->references('id')->on('forums');
            $table->foreign('left_id')->references('id')->on('forums');
            $table->foreign('right_id')->references('id')->on('forums');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forums');
    }
}
