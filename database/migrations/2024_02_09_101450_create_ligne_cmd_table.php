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
        Schema::create('ligne_cmd', function (Blueprint $table) {
            $table->bigInteger("quantite");
            $table->bigInteger('code')->unsigned()->nullable();
            $table->bigInteger('num')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('code')->references('code')->on('article')->onDelete('cascade');
            $table->foreign('num')->references('num')->on('commande')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ligne_cmd');
    }
};
