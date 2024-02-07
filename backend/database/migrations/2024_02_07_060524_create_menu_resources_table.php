<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('menu_resources', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\Domain\Menu\Models\MenuCategory::class)->constrained();
            $table->string('name');
            $table->string('slug');
            $table->string('prefix');
            $table->string('namespace');
            $table->string('middleware');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_resources');
    }
};
