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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nom_de_parfum');  // Better to use snake_case for column names
            $table->string('path_image');
            $table->decimal('prix', 8, 2);    // Better for prices than string
            $table->text('description');      // Better for long text than string
            $table->boolean('disponible');   
            $table->date('out_of_stock') ;
            $table->timestamps();             // Remove parameter - creates created_at/updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
