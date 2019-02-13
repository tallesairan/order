<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        /*
         * Table: orders
         */
        Schema::create('orders', function ($table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->text('payment_address')->nullable();
            $table->text('shipping_address')->nullable();
            $table->string('shipping_method', 255)->nullable();
            $table->text('shipping_method_description')->nullable();
            $table->string('payment_method', 255)->nullable();
            $table->string('payment_status', 255)->nullable();
            $table->text('payment_method_description')->nullable();
            $table->string('total', 255)->nullable();
            $table->string('subtotal', 255)->nullable();
            $table->integer('coupon_id')->nullable();
            $table->integer('invoice_no')->nullable();
            $table->string('invoice_prefix', 255)->nullable();
            $table->string('firstname', 255)->nullable();
            $table->string('lastname', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('telephone', 255)->nullable();
            $table->string('fax', 255)->nullable();
            $table->text('payment_custom_field')->nullable();
            $table->string('payment_code', 255)->nullable();
            $table->text('shipping_custom_field')->nullable();
            $table->string('shipping_code', 255)->nullable();
            $table->text('comment')->nullable();
            $table->integer('order_status_id')->nullable();
            $table->string('tracking', 255)->nullable();
            $table->string('ip', 255)->nullable();
            $table->softDeletes();
            $table->nullableTimestamps();
        });
    }

    /*
    * Reverse the migrations.
    *
    * @return void
    */

    public function down()
    {
        Schema::drop('orders');
    }
}
