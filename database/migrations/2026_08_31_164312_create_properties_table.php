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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
              $table->string('title');
               $table->text('description')->nullable();
                 $table->decimal('price', 10, 2);
                $table->integer('bedrooms')->nullable();
               $table->integer('bathrooms')->nullable();
             $table->decimal('area', 10, 2)->nullable();
             $table->string('city')->nullable();
              $table->string('address')->nullable();
              $table->enum('market_type', ['primary', 'secondary'])->default('primary');
               $table->boolean('is_available')->default(true);
           $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
             // ========== الصور ==========
            $table->json('images')->nullable();           // معرض الصور (موجود)
            $table->string('main_image')->nullable();     // الصورة الرئيسية (جديد) ⬅️ أضف هذا
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
