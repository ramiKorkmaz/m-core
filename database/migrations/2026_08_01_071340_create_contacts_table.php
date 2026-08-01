<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {

            $table->id();

            // Контактные данные
            $table->string('name');
            $table->string('company')->nullable();
            $table->string('phone');

            // Сообщение
            $table->text('message');

            // Статус заявки
            $table->enum('status', [
                'new',
                'processing',
                'completed',
            ])->default('new');

            // Техническая информация
            $table->ipAddress('ip')->nullable();
            $table->text('user_agent')->nullable();

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
