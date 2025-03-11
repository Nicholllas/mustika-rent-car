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
            $table->string('judul', 100);              // Judul promosi
            $table->text('deskripsi');                 // Deskripsi detail
            $table->integer('potongan')->nullable();   // Nominal potongan, bisa null kalau nggak ada
            $table->date('tanggal_mulai');             // Tanggal mulai promo
            $table->date('tanggal_berakhir');          // Tanggal berakhir promo
            $table->text('gambar')->nullable();        // URL gambar promo, bisa null
            $table->boolean('status')->default(true);  // Status promo (aktif atau tidak)
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
