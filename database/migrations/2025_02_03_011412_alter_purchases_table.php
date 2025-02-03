<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterPurchasesTable extends Migration
{
    public function up()
    {
        Schema::table('purchases', function (Blueprint $table) {
            // Add new columns or modify existing ones
            $table->string('new_column')->nullable()->after('price');
        });
    }

    public function down()
    {
        Schema::table('purchases', function (Blueprint $table) {
            // Reverse the changes
            $table->dropColumn('new_column');
        });
    }
}
