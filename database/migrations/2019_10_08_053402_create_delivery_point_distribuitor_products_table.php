<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryPointDistribuitorProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_point_distribuitor_product', function (Blueprint $table) {
            $table->unsignedBigInteger('del_id');
            $table->unsignedBigInteger('product_id');
            $table->timestamps();
            $table->foreign('del_id')->references('id')->on('delivery_point_distribuitor')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('product_id')->references('id')->on('products')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delivery_point_distribuitor_products');
    }
}
