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
        Schema::table('users', function ($table) {
            $table->string('email')->nullable()->change();
            $table->string('phone', length: 20)->after('email');
            $table->enum('gender', ['male', 'female'])->after('phone');
            $table->string('address')->after('gender');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function ($table) {
            $table->string('email')->nullable(false)->change();
            $table->dropColumn(['phone', 'gender', 'address']);
        });
    }
};
