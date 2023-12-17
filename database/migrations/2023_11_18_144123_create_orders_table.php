<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('plan_id')->nullable();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('activity_name')->nullable();
            $table->string('activity_phone')->nullable();
            $table->string('activity_address')->nullable();
            $table->string('activity_email')->nullable();
            $table->string('activity_description')->nullable();
            $table->string('activity')->nullable();
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('orders');
    }
}
