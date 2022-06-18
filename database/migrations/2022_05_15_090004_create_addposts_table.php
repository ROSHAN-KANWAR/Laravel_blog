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
        Schema::create('addposts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slugurl');
            $table->string('cate');
            $table->string('userid')->default(0);
            $table->string('photos');
           $table->text('descrip');
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
        Schema::dropIfExists('addposts');
    }
};
