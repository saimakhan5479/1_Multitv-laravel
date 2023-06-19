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
        Schema::table('contents', function (Blueprint $table) {
         $table->string('overview')->nullable()->after('category');
         $table->string('link')->nullable()->after('category');
         $table->string('poster_image')->nullable()->after('live');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contents', function (Blueprint $table) {
        $table->dropColumn('overview');
        $table->dropColumn('link');
        $table->dropColumn('poster_image');

        });
    }
};
