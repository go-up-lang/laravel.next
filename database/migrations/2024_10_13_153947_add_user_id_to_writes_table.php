<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::table('writes', function (Blueprint $table) {
        $table->unsignedBigInteger('user_id')->after('id'); // or after('note') if you prefer
    });
}

public function down(): void
{
    Schema::table('writes', function (Blueprint $table) {
        $table->dropColumn('user_id');
    });
}
};
