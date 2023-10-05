@extends('buyer.layouts.master') <!-- Extending the master.blade.php template -->
@section('content')
    <div class="site__body">
        <div class="block about-us">
            <div class="about-us__image"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-10">
                        <div class="about-us__body">
                            <h1 class="about-us__title">About Us</h1>
                            <div class="about-us__text typography">
                                <p>Welcome to Our B2B Application - Connecting Buyers and Suppliers</p>
                                <p>At [Your Company Name], we are committed to revolutionizing the way businesses connect. Our B2B application is your ultimate solution for efficient and effective buyer-supplier interactions. We are dedicated to providing top-notch services that empower your business and drive growth.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="block what-we-provide">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-10">
                        <div class="what-we-provide__body">
                            <h2 class="what-we-provide__title">What We Provide</h2>
                            <div class="what-we-provide__text typography">
                                <p>Discover the Benefits of Our B2B Application</p>
                                <ul>
                                    <li><strong>Buyer-Supplier Connect:</strong> Seamlessly connect with trusted suppliers and explore a world of opportunities.</li>
                                    <li><strong>Product Marketing:</strong> Showcase your products to a global audience and boost your sales.</li>
                                    <li><strong>Bulk Ordering:</strong> Simplify large-scale procurement with our user-friendly bulk ordering feature.</li>
                                    <li><strong>Effortless Marketing:</strong> Take advantage of one-click social media posting, email marketing, and SMS marketing to reach your target audience.</li>
                                    <li><strong>Request for Quotation:</strong> Streamline the quotation process for quicker and hassle-free transactions.</li>
                                    <li><strong>Quality Check and Certification:</strong> Ensure the highest product quality with our quality check and certification features.</li>
                                    <li><strong>Instant Communication:</strong> Chat directly with buyers and suppliers, fostering better communication and stronger relationships.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="block our-benefits">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-10">
                        <div class="our-benefits__body">
                            <h2 class="our-benefits__title">Our Benefits</h2>
                            <div class="our-benefits__text typography">
                                <p>Why Choose [Your Company Name]?</p>
                                <ul>
                                    <li><strong>Streamlined B2B Interactions:</strong> We simplify the buyer-supplier interaction process, saving you time and effort.</li>
                                    <li><strong>Global Product Exposure:</strong> Expand your reach and gain exposure to a global audience of potential buyers.</li>
                                    <li><strong>Effortless Bulk Ordering:</strong> Order large quantities with ease, ensuring a steady supply for your business.</li>
                                    <li><strong>Enhanced Marketing Capabilities:</strong> Promote your products effectively with our marketing tools, reaching a wider audience.</li>
                                    <li><strong>Seamless Quotation Process:</strong> Our platform streamlines the quotation process, facilitating quicker deal closures.</li>
                                    <li><strong>Quality Assurance:</strong> Trust in the quality of products with our quality check and certification features.</li>
                                    <li><strong>Instant Communication:</strong> Foster better relationships and clarify details with instant communication between buyers and suppliers.</li>
                                    <!-- Add more benefits as needed -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
