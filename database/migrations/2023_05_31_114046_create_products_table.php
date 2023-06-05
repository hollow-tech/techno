<?php

use App\Models\User;
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
            $table->string('title', 2000);
            $table->string('slug', 2000);
            $table->string('color', 2000);
            $table->integer('discount');
            $table->integer('rate');
            $table->integer('comments');
            $table->integer('year');
            $table->decimal('screen_size', 2,1);
            $table->string('screen_definition', 2000);
            $table->string('screen_type', 2000);
            $table->string('image', 2000)->nullable();
            $table->decimal('price', 8, 3);

            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
