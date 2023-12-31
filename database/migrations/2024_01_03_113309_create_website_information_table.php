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
        Schema::create('website_information', function (Blueprint $table) {
            $table->id();
            $table->string("email")->nullable();
            $table->string("phone")->nullable();
            $table->string("logo")->nullable();
            $table->string("address")->nullable();
            $table->string("about_us")->nullable();
            $table->string("copyright")->nullable();
            $table->string("footer_background")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_information');
    }
};
