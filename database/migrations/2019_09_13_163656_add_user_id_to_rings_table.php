<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToRingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rings', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned();
            
            //外部キー制約
            $table->foreign('user_id')->references('id')->on('users')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rings', function (Blueprint $table) {
            $table->dropForeign('rings_user_id_foreign');
            $table->dropColumn('user_id');
        });
    }
}
