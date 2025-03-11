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
        Schema::create('promotions', function (Blueprint $table) {
            $table->id();                   // ID unik untuk setiap promo
            $table->string('title', 100);              // Judul promosi
            $table->text('description');                 // Deskripsi detail
            $table->integer('disc')->nullable();   // Nominal potongan, bisa null kalau nggak ada
            $table->date('start_date');             // Tanggal mulai promo
            $table->date('end_date');          // Tanggal berakhir promo
            $table->text('photos')->nullable();        // URL gambar promo, bisa null
            $table->softDeletes();
            $table->timestamps();                      // Kolom created_at dan updated_at
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promotions');
    }
};
