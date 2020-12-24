<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyUserTransactionsTableAddOutletIdField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_transaction_histories', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable()->default(null)->change();
            $table->unsignedBigInteger('outlet_id')->after('user_id')->nullable()->default(null);

            $table->foreign('outlet_id')
                ->references('id')
                ->on('outlets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_transaction_histories', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable(false)->change();
            $table->dropColumn('outlet_id');
        });
    }
}
