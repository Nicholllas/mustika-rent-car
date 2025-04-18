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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();

            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();

            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();

            $table->string('status')->default('pending');


            $table->string('payment_method')->default('midtrans');
            $table->string('payment_status')->default('pending');
            $table->string('payment_url')->nullable();

            $table->integer('total_price')->default(0);

            $table->foreignId('item_id')->constrained();
            $table->foreignId('user_id')->constrained();


            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
