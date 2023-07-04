<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_references', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->integer('order_reference_id');
            $table->boolean('is_fulfilled')->default(true);
            $table->integer('total_price');
            $table->date('fulfilment_date');
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
        Schema::dropIfExists('order_references');
    }
}
