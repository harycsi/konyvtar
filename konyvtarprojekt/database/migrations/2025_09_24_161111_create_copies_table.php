<?php

use App\Models\Copy;
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
        Schema::create('copies', function (Blueprint $table) {
            $table->id();
            $table->foreignId("book_id")->constrained("books");
            $table->boolean('hardcovered')->default(1); //0: keménykötés, 1: puhakötés
            $table->year('publication');
            $table->smallInteger('status')->default(0); //0: könyvtárba, 1: kikölcsönzött, 2: selejt
            $table->timestamps();
        });

        Copy::create([
            "book_id" => 1,
            "publication" => 1960
        ]);

         Copy::create([
            "book_id" => 2,
            "publication"  => 2022,
            "status" => 2
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('copies');
    }
};
