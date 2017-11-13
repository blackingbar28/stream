<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToMatchsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('matchs', function (Blueprint $table) {
            $table->foreign('league_id', 'matchs_ibfk_1')->references('id')->on('leagues')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('matchs', function (Blueprint $table) {
            $table->dropForeign('matchs_ibfk_1');
        });
    }
}
