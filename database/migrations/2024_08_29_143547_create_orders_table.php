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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('invoice');
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->decimal('subtotal', 8,2)->default(0);
            $table->integer('qty')->default(0);
            $table->decimal('shipping_charges', 8,2)->default(0);
            $table->decimal('tax', 8,2)->default(0);
            $table->decimal('discount', 8,2)->default(0);
            $table->decimal('grandtotal', 8,2)->default(0);
            $table->enum('shipping_status', ['pending', 'shipped', 'canceled'])->default('pending');
            $table->enum('payment_status', ['pending', 'paid', 'checkout', 'canceled', 'declined', 'error', 'refund'])->default('pending');
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
