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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('full', 1024);
            $table->string('district', 128)->nullable();
            $table->string('city', 128 )->nullable();
            $table->string('locality', 128)->nullable();
            $table->string('street', 512)->nullable();
            $table->string('number', 64)->nullable();
            $table->string('postal_code', 32)->nullable();
            $table->string('latitude', 124)->nullable();
            $table->string('longitude', 124)->nullable();
            $table->unsignedBigInteger('store_id');
            $table->index('store_id');
            $table->foreign('store_id')
                   ->references('id')->on('stores')
                    ->onDelete('cascade');
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
        Schema::table('addresses', function (Blueprint $table) {
            Schema::dropIfExists('addresses');
        });
    }
};
