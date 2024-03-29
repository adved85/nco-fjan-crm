<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiseaseListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disease_lists', function (Blueprint $table) {
            $table->id();
            $table->string('chapter');
            $table->string('block')->nullable();
            $table->string('code', 20)->unique();
            $table->enum('status',['active','inactive'])->default('active');
            $table->text('name');
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
        Schema::dropIfExists('disease_lists');
    }
}
