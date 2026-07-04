<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('title');
            $table->unsignedInteger('rent_amount');
            $table->string('area');
            $table->string('street_address')->nullable();
            $table->text('description')->nullable();
            $table->string('status')->default('available');
            $table->timestamps();
        });

        Schema::create('tenancies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->constrained()->cascadeOnDelete();
            $table->unsignedBigInteger('renter_id');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('status')->default('active');
            $table->timestamps();
        });

        Schema::create('monthly_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenancy_id')->constrained()->cascadeOnDelete();
            $table->date('month');
            $table->unsignedInteger('rent_amount');
            $table->unsignedInteger('electricity_amount')->default(0);
            $table->unsignedInteger('gas_amount')->default(0);
            $table->unsignedInteger('water_amount')->default(0);
            $table->unsignedInteger('other_amount')->default(0);
            $table->text('notes')->nullable();
            $table->string('status')->default('pending');
            $table->timestamp('approved_at')->nullable();
            $table->timestamps();
            $table->unique(['tenancy_id', 'month']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('monthly_records');
        Schema::dropIfExists('tenancies');
        Schema::dropIfExists('properties');
    }
};
