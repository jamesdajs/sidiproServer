<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_points', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('nombre');
            $table->text('direccion');  
            $table->text('descripcion');           
            $table->text('foto');         
            $table->text('lat'); 
            $table->text('lng');        
            $table->text('telefono');
            $table->enum('estado',[0,1,2])->default(0);

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
        Schema::dropIfExists('delivery_points');
    }
}
