<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyUsersTableAddOutletId extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->rememberToken()->after('password');
            $table->unsignedBigInteger('outlet_id')->after('brand_id')->nullable()->default(null);

            $table->foreign('outlet_id')
                ->references('id')
                ->on('outlets');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('remember_token');
            $table->dropColumn('outlet_id');
        });
    }
}
