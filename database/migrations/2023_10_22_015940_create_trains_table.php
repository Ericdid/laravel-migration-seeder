<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 25);
            $table->string('Stazione Di Partenza', 30);
            $table->string('Stazione Di Arrivo', 30);
            $table->time('orario di partenza');
            $table->time('orario di arrivo');
            $table->unsignedSmallInteger('codice treno');
            $table->unsignedTinyInteger('numero carrozze');
            $table->boolean('In Orario');
            $table->boolean('Cancellato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};