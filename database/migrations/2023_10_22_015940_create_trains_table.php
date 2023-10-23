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
            $table->string('Stazione_Di_Partenza', 30);
            $table->string('Stazione_Di_Arrivo', 30);
            $table->time('orario_di_partenza');
            $table->time('orario_di_arrivo');
            $table->unsignedSmallInteger('codice_treno');
            $table->unsignedTinyInteger('numero_carrozze');
            $table->string('In_Orario', 2);
            $table->string('Cancellato', 2);
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