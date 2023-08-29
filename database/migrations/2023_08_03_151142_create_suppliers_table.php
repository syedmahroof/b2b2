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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('password');
            $table->string('website')->nullable();
            $table->string('mobile_primary')->nullable();
            $table->string('mobile_secondary')->nullable();
            $table->string('officephone')->nullable();
            $table->string('address')->nullable();
            $table->string('zip')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('contact_person_name')->nullable();
            $table->string('contact_person_email')->nullable();
            $table->string('contact_person_phone')->nullable();
            $table->string('business_type')->nullable();
            $table->string('business_registration_number')->nullable();
            $table->text('company_info')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('pinterest')->nullable();
            $table->string('youtube_channel')->nullable(); // YouTube Channel
            $table->string('tiktok_profile')->nullable(); // TikTok Profile
            $table->year('established_year')->nullable();
            $table->string('logo')->nullable();
            $table->string('qr_code')->nullable();
            $table->string('license_number')->nullable();
            // Additional fields
            $table->string('about')->nullable();
            $table->string('verification_status')->nullable();
            $table->timestamp('verified_date')->nullable();
            $table->string('verified_by')->nullable();
            $table->float('customer_rating')->nullable();
            $table->integer('customer_rating_count')->default(0);
            $table->integer('total_visitors')->default(0);
            $table->string('supplier_profile_link')->nullable();
            $table->integer('points')->default(0);
            $table->boolean('two_factor_enabled')->default(false);
            $table->integer('total_employees')->nullable();
            // SEO columns
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('canonical_url')->nullable();
            $table->text('schema_markup')->nullable();
            $table->string('og_title')->nullable();
            $table->string('og_description')->nullable();
            $table->string('og_image')->nullable();
            $table->string('twitter_card_title')->nullable();
            $table->string('twitter_card_description')->nullable();
            $table->string('twitter_card_image')->nullable();
            $table->float('sitemap_priority')->default(0.5);
            $table->enum('sitemap_frequency', ['always', 'hourly', 'daily', 'weekly', 'monthly', 'yearly', 'never'])
                  ->default('weekly');
            // Additional fields
            $table->time('preferred_communication_start')->nullable(); // Preferred Communication Start Time
            $table->time('preferred_communication_end')->nullable(); // Preferred Communication End Time
            $table->string('tax_id')->nullable(); // Tax ID / VAT Number

            $table->string('referral_source')->nullable(); // Referral Source Details
            // Add more columns as needed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
