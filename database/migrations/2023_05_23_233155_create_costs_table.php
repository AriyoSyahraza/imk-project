<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costs', function (Blueprint $table) {
            $table->increments('id_costs');
            $table->unsignedBigInteger('id_users');
            $table->string('cost_name', 35);
            $table->tinyInteger('total_kamar');
            $table->enum('cost_type', ['pria', 'wanita', 'campuran']);
            $table->tinyInteger('available_room');
            $table->text('cost_address');
            $table->text('description'); // Kolom untuk menyimpan deskripsi dalam teks
            $table->string('contact_person', 13);
            $table->string('night_limit', 10);
            $table->text('long_add');
            $table->text('lat_add');
            $table->timestamps();

            $table->foreign('id_users')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('costs');
    }
}
