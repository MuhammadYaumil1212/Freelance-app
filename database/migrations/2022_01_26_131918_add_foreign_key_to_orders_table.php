<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('service_id','fk_orders_to_services')
            ->references('id')
            ->on('services')
            ->cascadeOnDelete()
            ->cascadeOnUpdate();

            $table->foreign('freelancer_id','fk_orders_to_users')
            ->references('id')
            ->on('users')
            ->cascadeOnDelete()
            ->cascadeOnUpdate();

            $table->foreign('buyer_id','fk_orders_Buyer_to_users')
            ->references('id')
            ->on('users')
            ->cascadeOnDelete()
            ->cascadeOnUpdate();

            $table->foreign('order_status_id','fk_orders_status_to_order_status')
            ->references('id')
            ->on('order_status')
            ->cascadeOnDelete()
            ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            // $table->dropForeign(['fk_orders_to_services','fk_orders_to_users','fk_orders_Buyer_to_users','fk_orders_status_to_order_status']);
        });
    }
}
