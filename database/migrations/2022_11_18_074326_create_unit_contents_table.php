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
        Schema::create('unit_contents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('filepath');
            $table->foreignId('unit_id')->constrained('units')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreignId('school_id')->constrained('schools')->onDelete('cascade');
            $table->foreignId('department_id')->constrained('departments')->onDelete('cascade');
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
        Schema::dropIfExists('unit_contents');
    }
};
