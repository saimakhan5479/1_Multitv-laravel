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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('ordering')->nullable();
            $table->string('status')->default('Active');
            $table->timestamps();


            // Foreign key relationship(In This Project we did this manually in database ** by clicking on(Relation view) on top side and add that -- delete ->restrict * update->cascade (constrain properties) )
            // $table->foreign('category_id')
            //       ->references('id')
            //       ->on('categories')
            //       ->onDelete('cascade');

            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
