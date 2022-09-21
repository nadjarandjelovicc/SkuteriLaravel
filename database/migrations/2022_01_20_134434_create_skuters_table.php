<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkutersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skuters', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('boja');
            $table->string('materijal');
            $table->string('stanje');
            $table->double('cena');
            $table->string('brzina');
            $table->string('snaga');
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
        Schema::dropIfExists('skuters');
    }
}
