<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('delivery_point_id');
            $table->unsignedBigInteger('distribuitor_id');
            $table->enum('super',[0,1]);
            $table->integer('estrelas');
            $table->foreign('delivery_point_id')->references('id')->on('delivery_points')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('distribuitor_id')->references('id')->on('distribuitors')
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
        Schema::dropIfExists('favorites');
    }
}
