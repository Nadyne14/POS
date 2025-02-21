<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::create('transactions', function (Blueprint $table) {
    //         $table->id();
    //         $table->timestamps();
    //     });
    // }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }

    public function up()
{
    Schema::create('transactions', function (Blueprint $table) {
        $table->id();
        $table->string('product_name');
        $table->integer('quantity');
        $table->decimal('total_price', 10, 2);
        $table->timestamp('transaction_date');
        $table->timestamps();
    });
}

};
