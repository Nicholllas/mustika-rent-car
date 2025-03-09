<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('booking_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id'); // ID booking
            $table->foreignId('item_id'); // ID mobil
            $table->integer('qty'); // Total hari sewa
            $table->integer('total_days'); // Total hari sewa
            $table->decimal('total_cost', 10, 2); // Total biaya untuk detail ini
            $table->string('status', 50)->default('confirmed'); // Status detail booking
            $table->softDeletes();
            $table->timestamps(); // Kolom created_at dan updated_at

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_details');
    }
};
