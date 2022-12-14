<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('id');

            $table->foreign('user_id')->references('id')->on('users');

            // ? Può anche esser abbreviato, laravel usa il nome della tabella per fare le sue ricerche,
            // ?  usarlo fuori contesti inglesi è un problema
            // $table->foreignId('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            // ! La sua costruzione dipende da, tabella posts, la FK user_id, e specifichiamo foreign
            $table->dropForeign('posts_user_id_foreign');

            $table->dropColumn('user_id');
        });
    }
}
