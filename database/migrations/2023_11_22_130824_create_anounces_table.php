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
        Schema::create('anounces', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('description');
            $table->enum('type', ['Appartement', 'Maison', 'Villa', 'Magasin', 'Terrain']);
            $table->string('ville', 100);
            $table->decimal('superficie', 12, 2);
            $table->boolean('neuf');
            $table->decimal('prix', 12, 2)->nullable()->default(0);
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anounces');
    }
};
