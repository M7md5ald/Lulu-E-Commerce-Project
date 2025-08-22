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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->enum('payment_method',['credit_card', 'debit_card', 'instapay', 'COD'])->default('credit_card');
            $table->enum('payment_status',['pending', 'successful', 'failed'])->default('pending');
            $table->decimal('total_amount', 8, 2);
            $table->foreignId('user_id')->onDelete('cascade');
            $table->foreignId('order_id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
