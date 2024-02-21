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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('menu_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Domain\Menu\Models\Menu::class)->constrained();
            $table->string('name')->unique();
            $table->string('slug');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('sub_menus', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Domain\Menu\Models\MenuSection::class)->constrained();
            $table->string('name');
            $table->string('slug');
            $table->string('icon')->nullable();
            $table->unique(['menu_section_id', 'name']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
        Schema::dropIfExists('menu_section');
        Schema::dropIfExists('sub_menus');
    }
};
