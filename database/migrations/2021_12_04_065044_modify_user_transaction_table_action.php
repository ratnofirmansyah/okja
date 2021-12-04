<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyUserTransactionTableAction extends Migration
{
    public function up()
    {
        Schema::table('user_transaction_histories', function (Blueprint $table) {
            $table->string('action')->after('product_id');
        });
    }

    public function down()
    {
        Schema::table('user_transaction_histories', function (Blueprint $table) {
            $table->dropColumn('action');
        });
    }
}
