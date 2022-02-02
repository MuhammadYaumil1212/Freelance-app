<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToThumbnailServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('thumbnail_service', function (Blueprint $table) {
            $table->foreign('service_id','fk_thumbnail_service_to_services')
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
        Schema::table('thumbnail_service', function (Blueprint $table) {
            $table->dropForeign('fk_thumbnail_to_services');
        });
    }
}
