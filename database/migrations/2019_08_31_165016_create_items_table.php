<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->index();
            $table->double('price')->index();
            $table->double('quantity')->index();
            $table->double('model')->index();
            $table->double('brand')->index();
            $table->double('number')->index();
            $table->double('company')->index();
            $table->double('expired_at');
            $table->double('packed_at');
            $table->double('made_at');
            $table->string('description')->nullable();
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
        Schema::dropIfExists('items');
    }
}
