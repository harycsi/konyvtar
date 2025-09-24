<?php

use App\Models\Book;
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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string("author");
            $table->longText("title");
            $table->integer("pieces");
            $table->timestamps();
        });

         Book::create([
            "author" => "William Shakespeare",
            "title" => "Romeo and Juliette",
            "pieces" => 5
        ]);

        Book::create([
            "author" => "OSHO",
            "title" => "Tantra",
            "pieces" => 2
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
