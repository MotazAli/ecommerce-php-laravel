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
        Schema::create('store_categories', function (Blueprint $table) {
            $table->uuid();
            $table->uuid('store_id');
            $table->uuid('category_id');
            $table->boolean('is_active')->default(0);
            $table->boolean('is_deleted')->default(0);
            $table->uuid('created_by');
            $table->uuid('updated_by');
            $table->foreignUuid('store_id')->references('id')->on('stores')->onDelete('cascade');
            $table->foreignUuid('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_categories');
    }
};
