<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations', function (Blueprint $table) {


            $table->id();
            $table->string('nomFormation');
            
            $table->string('type');
            $table->string('categorie')->nullable();
            $table->string('prix');
            $table->string('descFormation');
            $table->string('module1')->nullable();
            $table->string('module2')->nullable();
            $table->string('module3')->nullable();
            $table->string('image');
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
        Schema::dropIfExists('formations');
    }
}
