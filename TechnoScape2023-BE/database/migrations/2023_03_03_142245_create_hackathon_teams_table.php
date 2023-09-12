<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hackathon_teams', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('team_token')->unique();
            $table->boolean('is_binusian');
            $table->set('payment_type', ["early", "general"])->nullable();
            $table->set("payment_status", ["unpaid", "pending", "accepted", "rejected"])->default("unpaid");
            $table->string('payment_receipt')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hackathon_teams');
    }
};
