<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterCategoryTableAddBrandId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->unsignedBigInteger('brand_id')->after('id')->nullable()->default(null);

            $table->foreign('brand_id')
                ->references('id')
                ->on('brands');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('brand_id');
        });
    }
}
