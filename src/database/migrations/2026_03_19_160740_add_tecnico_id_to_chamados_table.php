<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('chamados', function (Blueprint $table): void {
            if (!Schema::hasColumn('chamados', 'tecnico_id')) {
                $table->foreignId('tecnico_id')
                    ->nullable()
                    ->after('categoria_id')
                    ->constrained('tecnicos')
                    ->nullOnDelete();
            }
        });
    }

    public function down(): void
    {
        Schema::table('chamados', function (Blueprint $table): void {
            if (Schema::hasColumn('chamados', 'tecnico_id')) {
                $table->dropConstrainedForeignId('tecnico_id');
            }
        });
    }
};
