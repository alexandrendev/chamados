<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('chamados', function (Blueprint $table): void {
            $table->id();
            $table->string('titulo');
            $table->text('descricao')->nullable();
            $table->enum('prioridade', ['baixa', 'media', 'alta'])->default('media');
            $table->enum('status', ['aberto', 'em_atendimento', 'resolvido', 'fechado'])->default('aberto');
            $table->date('data_abertura');
            $table->foreignId('servico_id')->nullable();
            $table->foreignId('categoria_id')->nullable();
            $table->timestamps();

            if (Schema::hasTable('servicos')) {
                $table->foreign('servico_id')->references('id')->on('servicos')->nullOnDelete();
            }

            if (Schema::hasTable('categorias')) {
                $table->foreign('categoria_id')->references('id')->on('categorias')->nullOnDelete();
            }
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('chamados');
    }
};
