<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->id('agent_id');
            $table->string('agent_name');
            $table->string('agency_name');
            $table->string('agent_level');
            $table->string('branch');
            $table->integer('ticket');
            $table->json('ticket_numbers');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};
