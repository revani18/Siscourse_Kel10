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
       Schema::create('post_kategoris', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger("kategori_id");
    $table->unsignedBigInteger("post_id");
    $table->foreign("kategori_id")->references("id")->on("kategoris")->onDelete('cascade');
    $table->foreign("post_id")->references("id")->on("posts")->onDelete('cascade');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_kategoris');
    }
};
