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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seller_id')->index();
            $table->unsignedBigInteger('buyer_id')->nullable()->index();
            $table->unsignedBigInteger('category_id')->index();
            $table->unsignedBigInteger('condition_id')->index();
            $table->string('name')->nullable(false);
            $table->string('img_src')->nullable();
            $table->text('description')->nullable();
            $table->unsignedInteger('price');
            $table->timestamp('bought_at')->nullable();
            $table->timestamps();

            // 外部キー設定
            $table->foreign('seller_id')->references('id')
                ->on('users');
            $table->foreign('buyer_id')->references('id')
                ->on('users');
            $table->foreign('category_id')->references('id')
                ->on('categories');
            $table->foreign('condition_id')->references('id')
                ->on('item_conditions');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
};
