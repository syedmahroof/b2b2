<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('supplier_id');
            $table->string('name');
            $table->string('sku')->unique();
            $table->string('featured_image')->nullable();
            $table->integer('min_order_quantity')->default(1);
            $table->integer('lead_time_days')->nullable();
            $table->string('bulk_pricing')->nullable();
            $table->boolean('sample_available')->default(false);
            $table->text('customization_options')->nullable();
            $table->text('payment_terms')->nullable();
            $table->string('bulk_order_enquiry_link')->nullable();
            $table->string('bulk_order_available')->default(true)->nullable();
            $table->string('custom_pricing')->nullable();
            $table->string('quote_system_integration')->nullable();
            $table->integer('estimated_delivery_time')->nullable();
            $table->integer('manufacturing_lead_time')->nullable();
            $table->text('certifications')->nullable();

            $table->text('recommended_use')->nullable();
            $table->text('safety_information')->nullable();
            $table->text('warranty_information')->nullable();
            
            // SEO columns
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('canonical_url')->nullable();
            $table->text('schema_markup')->nullable();
            $table->string('og_title')->nullable();
            $table->string('og_description')->nullable();
            $table->string('og_image')->nullable();
            
            // Additional SEO columns
            $table->string('twitter_card_title')->nullable();
            $table->string('twitter_card_description')->nullable();
            $table->string('twitter_card_image')->nullable();
            $table->float('sitemap_priority')->default(0.5);
            $table->enum('sitemap_frequency', ['always', 'hourly', 'daily', 'weekly', 'monthly', 'yearly', 'never'])->default('weekly');

            $table->text('description')->nullable();
            $table->decimal('price', 10, 2)->nullable();


            $table->unsignedBigInteger('rating_count')->default(0);
            $table->float('average_rating')->default(0);
            $table->unsignedBigInteger('visit_count')->default(0);
            $table->unsignedBigInteger('like_count')->default(0);
            $table->unsignedBigInteger('comment_count')->default(0);
            $table->integer('points')->default(0);

            // Add more columns as needed
            $table->timestamps();

            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

