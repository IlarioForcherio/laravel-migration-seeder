<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('compagnia',50)->nullabe();
            $table->string('partenza',50);
            $table->string('destinazione',50);
            $table->float('orario_partenza',4,2);
            $table->float('orario_arrivo',4,2);
            $table->smallInteger('binario');
            $table->float('prezzo',4,2);
            //timestamps va sempre lasciato alla fine
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
        Schema::dropIfExists('trains');
    }
}
