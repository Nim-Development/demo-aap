<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpdrachtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opdrachts', function (Blueprint $table) {
            $table->increments('id');
                $table->bigInteger('cateraar_id');
                
                $table->string('naam');
                $table->string('omschrijving');
                $table->timestamp('oplever_datum');
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
        Schema::dropIfExists('opdrachts');
    }
}
