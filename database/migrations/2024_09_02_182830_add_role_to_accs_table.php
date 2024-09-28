<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('accs', function (Blueprint $table) {
            $table->string('role'); // Add the new column
        });
    }

    public function down()
    {
        Schema::table('accs', function (Blueprint $table) {
            $table->dropColumn('role'); // Drop the column if rolling back
        });
    }
};
