<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistributorDistributorTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distribuitor_distribuitor_type', function (Blueprint $table) {
            
            $table->unsignedBigInteger('distribuitor_id');
            $table->unsignedBigInteger('distribuitor_type_id');
            
            $table->foreign('distribuitor_id')->references('id')->on('distribuitors')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            
            $table->foreign('distribuitor_type_id')->references('id')->on('distribuitor_types')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('distributor_distributor_types');
    }
}
