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
        Schema::create('buyers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('profile_image')->nullable();
            $table->string('visiting_card')->nullable();
            $table->string('company_name')->nullable();
            $table->string('contact_person_name')->nullable();
            $table->string('contact_person_email')->nullable();
            $table->string('contact_person_phone')->nullable();
            $table->text('billing_address')->nullable();
            $table->text('shipping_address')->nullable();
            $table->string('preferred_payment_method')->nullable();
            $table->string('preferred_communication_method')->nullable();
            $table->text('notes')->nullable();
            $table->timestamp('last_login')->nullable();
            $table->integer('points')->default(0);
            $table->string('company_description')->nullable();
            $table->string('business_website')->nullable();
            $table->boolean('accepts_supplier_requests')->default(true);
            $table->json('communication_preferences')->nullable(); // Preferences for email, SMS, etc.
            $table->string('tax_id')->nullable(); // Tax ID or VAT number
            $table->string('business_type')->nullable(); // e.g., Corporation, LLC, Sole Proprietorship
            // Add more columns specific to buyers
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buyers');
    }
};
