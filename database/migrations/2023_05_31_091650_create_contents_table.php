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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('category')->nullable();
            $table->string('ordering')->nullable();
            $table->string('status')->default('Active')->comment('1 for Active and 0 for InActive');
            $table->boolean('live')->default(0);
            $table->string('poster_image')->nullable();
            $table->string('image')->nullable();
            $table->string('link')->nullable();
            $table->string('overview')->nullable();
            $table->timestamps();
        });

        // Foreign key relationship(In This Project we did this manually in database ** by clicking on(Relation view) on top side and add that -- delete ->restrict * update->cascade (constrain properties) )
            // $table->foreign('category_id')
            //       ->references('id')
            //       ->on('categories')
            //       ->onDelete('cascade');

            // $table->timestamps();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
