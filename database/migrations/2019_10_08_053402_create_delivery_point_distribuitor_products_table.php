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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('del_id');
            $table->unsignedBigInteger('product_id');
            $table->double('precio_venta');
            $table->double('cantidad');
            $table->enum('estado',[0,1,2])->default(0);
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
