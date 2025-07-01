<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->id('transaction_id');
            $table->string('branch');
            $table->date('transaction_date');
            $table->string('created_by')->default(' Zyk Broncano ');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('transaction');
    }
};
