<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->text('Naziv');
             $table->text('Opis');
              $table->text('Obavljeni_poslovi');
             $table->date('Datum_početka');
             $table->date('Datum_završetka');
             $table->text('id_voditelja')->references('id')->on('users');




         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
