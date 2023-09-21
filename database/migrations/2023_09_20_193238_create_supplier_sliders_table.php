<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierSlidersTable extends Migration
{
    public function up()
    {
        Schema::create('supplier_sliders', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('attachment');
            $table->text('description');
            $table->unsignedBigInteger('supplier_id');
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('supplier_sliders');
    }
}
