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
        Schema::create('controller_resources', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\Domain\Menu\Models\MenuResource::class)->constrained();
            $table->string('method');
            $table->string('uri');
            $table->string('action');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('controller_resources');
    }
};
