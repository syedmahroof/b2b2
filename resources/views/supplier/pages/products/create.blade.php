@extends('supplier.layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <p class="mb-0">Add Product</p>
                        <button class="btn btn-primary btn-sm ms-auto">Settings</button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('supplier.products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <p class="text-uppercase text-sm">Product Information</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-control-label">Name</label>
                                    <input class="form-control" type="text" name="name" id="name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sku" class="form-control-label">SKU</label>
                                    <input class="form-control" type="text" name="sku" id="sku" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="featured_image" class="form-control-label">Featured Image</label>
                                    <input class="form-control" type="file" name="featured_image" id="featured_image">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="min_order_quantity" class="form-control-label">Minimum Order Quantity</label>
                                    <input class="form-control" type="number" name="min_order_quantity" id="min_order_quantity" value="1" min="1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lead_time_days" class="form-control-label">Lead Time (Days)</label>
                                    <input class="form-control" type="number" name="lead_time_days" id="lead_time_days">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="bulk_pricing" class="form-control-label">Bulk Pricing (JSON)</label>
                                    <textarea class="form-control" name="bulk_pricing" id="bulk_pricing" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sample_available" class="form-control-label">Sample Available</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="sample_available" id="sample_available">
                                        <label class="form-check-label" for="sample_available">Yes</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="customization_options" class="form-control-label">Customization Options</label>
                                    <textarea class="form-control" name="customization_options" id="customization_options" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="payment_terms" class="form-control-label">Payment Terms</label>
                                    <textarea class="form-control" name="payment_terms" id="payment_terms" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="bulk_order_enquiry_link" class="form-control-label">Bulk Order Enquiry Link</label>
                                    <input class="form-control" type="text" name="bulk_order_enquiry_link" id="bulk_order_enquiry_link">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="bulk_order_available" class="form-control-label">Bulk Order Available</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="bulk_order_available" id="bulk_order_available" checked>
                                        <label class="form-check-label" for="bulk_order_available">Yes</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="custom_pricing" class="form-control-label">Custom Pricing (JSON)</label>
                                    <textarea class="form-control" name="custom_pricing" id="custom_pricing" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="quote_system_integration" class="form-control-label">Quote System Integration</label>
                                    <input class="form-control" type="text" name="quote_system_integration" id="quote_system_integration">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="estimated_delivery_time" class="form-control-label">Estimated Delivery Time</label>
                                    <input class="form-control" type="number" name="estimated_delivery_time" id="estimated_delivery_time">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="manufacturing_lead_time" class="form-control-label">Manufacturing Lead Time</label>
                                    <input class="form-control" type="number" name="manufacturing_lead_time" id="manufacturing_lead_time">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="certifications" class="form-control-label">Certifications</label>
                                    <textarea class="form-control" name="certifications" id="certifications" rows="3"></textarea>
                                </div>
                            </div>

                            <!-- SEO Columns -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="meta_title" class="form-control-label">Meta Title</label>
                                    <input class="form-control" type="text" name="meta_title" id="meta_title">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="meta_description" class="form-control-label">Meta Description</label>
                                    <textarea class="form-control" name="meta_description" id="meta_description" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="meta_keywords" class="form-control-label">Meta Keywords</label>
                                    <input class="form-control" type="text" name="meta_keywords" id="meta_keywords">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="canonical_url" class="form-control-label">Canonical URL</label>
                                    <input class="form-control" type="text" name="canonical_url" id="canonical_url">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="schema_markup" class="form-control-label">Schema Markup</label>
                                    <textarea class="form-control" name="schema_markup" id="schema_markup" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="og_title" class="form-control-label">Open Graph (OG) Title</label>
                                    <input class="form-control" type="text" name="og_title" id="og_title">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="og_description" class="form-control-label">Open Graph (OG) Description</label>
                                    <textarea class="form-control" name="og_description" id="og_description" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="og_image" class="form-control-label">Open Graph (OG) Image</label>
                                    <input class="form-control" type="file" name="og_image" id="og_image">
                                </div>
                            </div>

                            <!-- Additional SEO Columns -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="twitter_card_title" class="form-control-label">Twitter Card Title</label>
                                    <input class="form-control" type="text" name="twitter_card_title" id="twitter_card_title">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="twitter_card_description" class="form-control-label">Twitter Card Description</label>
                                    <textarea class="form-control" name="twitter_card_description" id="twitter_card_description" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="twitter_card_image" class="form-control-label">Twitter Card Image</label>
                                    <input class="form-control" type="file" name="twitter_card_image" id="twitter_card_image">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sitemap_priority" class="form-control-label">Sitemap Priority</label>
                                    <input class="form-control" type="number" name="sitemap_priority" id="sitemap_priority" step="0.01" min="0" max="1" value="0.5">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sitemap_frequency" class="form-control-label">Sitemap Frequency</label>
                                    <select class="form-control" name="sitemap_frequency" id="sitemap_frequency">
                                        <option value="always">Always</option>
                                        <option value="hourly">Hourly</option>
                                        <option value="daily">Daily</option>
                                        <option value="weekly">Weekly</option>
                                        <option value="monthly">Monthly</option>
                                        <option value="yearly">Yearly</option>
                                        <option value="never">Never</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Additional Fields -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="additional_field" class="form-control-label">Additional Field</label>
                                    <input class="form-control" type="text" name="additional_field" id="additional_field">
                                </div>
                            </div>
                            <!-- Add more fields as needed -->

                        </div>
                        <button type="submit" class="btn btn-primary">Add Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
