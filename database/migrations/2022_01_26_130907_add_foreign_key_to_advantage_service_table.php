<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToAdvantageServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('advantage_service', function (Blueprint $table) {
            $table->foreign('service_id','fk_advantage_service_to_services')
            ->references('id')
            ->on('services')
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
        Schema::table('advantage_service', function (Blueprint $table) {
            $table->dropForeign('fk_advantage_service_to_services');
        });
    }
}
