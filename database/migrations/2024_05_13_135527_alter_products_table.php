<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('products', function ($table) {
            $table->integer('is_show_left_menu')->nullable()->default(0)->after('position');
            $table->integer('is_featured')->nullable()->default(0)->after('is_show_left_menu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('product_categories', function ($table) {
            $table->dropColumn('is_show_left_menu');
            $table->dropColumn('is_featured');
        });
    }
};
