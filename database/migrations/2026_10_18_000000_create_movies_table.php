<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();                                   // id
            $table->string('title');                        // title
            $table->string('genre');                        // genre
            $table->unsignedSmallInteger('duration');       // duration (menit)
            $table->unsignedSmallInteger('release_year');   // release_year
            $table->text('description');                    // description
            $table->string('poster');                       // poster (nama file di public/assets/images/)
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
