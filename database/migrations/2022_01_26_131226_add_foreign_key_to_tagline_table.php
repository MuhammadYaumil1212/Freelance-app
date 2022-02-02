<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToTaglineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tagline', function (Blueprint $table) {
            $table->foreign('service_id','fk_tagline_to_services')
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
        Schema::table('tagline', function (Blueprint $table) {
            $table->dropForeign('fk_tagline_to_services');
        });
    }
}
