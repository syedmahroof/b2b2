@extends('buyer.layouts.master') <!-- Extending the master.blade.php template -->
@section('content')
<section class="banner">
    <div class="glide hero glide--ltr glide--carousel glide--swipeable">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides"
                style="transition: transform 0ms cubic-bezier(0.165, 0.84, 0.44, 1) 0s; width: 5370px; transform: translate3d(-3580px, 0px, 0px);">
                <!--  -->
                <li class="glide__slide glide__slide--clone" style="width: 885px; margin-right: 5px;">
                    <a href="#">
                        <img src="frontend/img/banner-01.jpg" alt="">
                    </a>
                    <div class="caption">
                        <div class="container">
                            <h2>
                                <span class="xl">Credit Options</span>
                                <span class="md">That Will Exceed</span>
                                <span class="lg">Your Expectations!</span>
                            </h2>
                            <button class="btn btn-apply">
                                <a href="/login"><span><i>Easy</i> 3-Minute</span>Apply Now</a>
                            </button>
                        </div>
                    </div>
                </li>
                <li class="glide__slide glide__slide--clone"
                    style="width: 885px; margin-left: 5px; margin-right: 5px;">
                    <a href="#">
                        <img src="frontend/img/banner-01.jpg" alt="">
                    </a>
                    <div class="caption">
                        <div class="container">
                            <h2>
                                <span class="xl">Credit Options</span>
                                <span class="md">That Will Exceed</span>
                                <span class="lg">Your Expectations!</span>
                            </h2>
                            <button class="btn btn-apply">
                                <a href="/login"><span><i>Easy</i> 3-Minute</span>Apply Now</a>
                            </button>
                        </div>
                    </div>
                </li>
                <li class="glide__slide" style="width: 885px; margin-left: 5px; margin-right: 5px;">
                    <a href="#">
                        <img src="frontend/img/banner-01.jpg" alt="">
                    </a>
                    <div class="caption">
                        <div class="container">
                            <h2>
                                <span class="xl">Credit Options</span>
                                <span class="md">That Will Exceed</span>
                                <span class="lg">Your Expectations!</span>
                            </h2>
                            <button class="btn btn-apply">
                                <a href="/login"><span><i>Easy</i> 3-Minute</span>Apply Now</a>
                            </button>
                        </div>
                    </div>
                </li>
                <!--  -->
                <li class="glide__slide" style="width: 885px; margin-left: 5px; margin-right: 5px;">
                    <a href="#">
                        <img src="frontend/img/banner-01.jpg" alt="">
                    </a>
                    <div class="caption">
                        <div class="container">
                            <h2>
                                <span class="xl">Credit Options</span>
                                <span class="md">That Will Exceed</span>
                                <span class="lg">Your Expectations!</span>
                            </h2>
                            <button class="btn btn-apply">
                                <a href="/login"><span><i>Easy</i> 3-Minute</span>Apply Now</a>
                            </button>
                        </div>
                    </div>
                </li>
                <!--  -->
                <li class="glide__slide glide__slide--clone"
                    style="width: 885px; margin-left: 5px; margin-right: 5px;">
                    <a href="#">
                        <img src="frontend/img/banner-01.jpg" alt="">
                    </a>
                    <div class="caption">
                        <div class="container">
                            <h2>
                                <span class="xl">Credit Options</span>
                                <span class="md">That Will Exceed</span>
                                <span class="lg">Your Expectations!</span>
                            </h2>
                            <button class="btn btn-apply">
                                <a href="/login"><span><i>Easy</i> 3-Minute</span>Apply Now</a>
                            </button>
                        </div>
                    </div>
                </li>
                <li class="glide__slide glide__slide--clone" style="width: 885px; margin-left: 5px;">
                    <a href="#">
                        <img src="frontend/img/banner-01.jpg" alt="">
                    </a>
                    <div class="caption">
                        <div class="container">
                            <h2>
                                <span class="xl">Credit Options</span>
                                <span class="md">That Will Exceed</span>
                                <span class="lg">Your Expectations!</span>
                            </h2>
                            <button class="btn btn-apply">
                                <a href="/login"><span><i>Easy</i> 3-Minute</span>Apply Now</a>
                            </button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                <i class="fas fa-angle-left"></i>
            </button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                <i class="fas fa-angle-right"></i>
            </button>
        </div>
    </div>
</section>
<!-- /.Banner Section -->




<!-- Home Content Section -->
<section class="home-content">

    <!-- Banner Section -->
    <div class="container">
        <div class="apply-title">
            We Want to Say YES! No Cost to Apply&nbsp;-&nbsp;Same Day Approval.
        </div>
        <section class="process-section">

            <h2>How it works</h2>
            <p>Responsible Purchasing - Low Monthly payments</p>
            <div class="row">
                <div class="col process-box">
                    <div class="img">
                        <img src="frontend/img/proccess-01.png"
                            alt="Buy now pay later financing - Easy Sign-up image" title="Easy Sign-up image">
                    </div>
                    <h6>Fast Approval<b>Easy 3 Minute Application</b></h6>
                </div>
                <div class="col process-box">
                    <div class="img">
                        <img src="frontend/img/proccess-02.png"
                            alt="Buy now pay later financing - Fun Shopping image" title="Fun Shopping image">
                    </div>
                    <h6>Get Products Easily<b>Shop the brands you Love</b></h6>
                </div>
                <div class="col process-box btm">
                    <div class="img">
                        <img src="frontend/img/proccess-03.png"
                            alt="Buy now pay later financing - Payment Methods image"
                            title="Payment Methods image">
                    </div>
                    <h6>Up to 36 Months to Pay<b>Affordably Pay Over Time</b></h6>
                </div>
                <div class="col process-box">
                    <div class="img">
                        <img src="frontend/img/proccess-04.png"
                            alt="Buy now pay later financing - Home Delivery image" title="Home Delivery image">
                    </div>
                    <h6>Grow Your Credit<b>Build and Restore your Credit</b></h6>
                </div>
            </div>

        </section>
    </div>
    <!-- /.Banner Section -->




    <div class="container">
        <div class="why-row">
            <div class="col why-us">
                <h3 class="title sub">
                    Why LutherSales?
                </h3>
                <h2 class="title main">
                    The Luther Advantage:
                </h2>
                <p class="descr">
                    Buy Now Pay Later Furniture Financing plus Computers, TVs, Cell Phones, Electronics, Jewelry,
                    Video Games and More…
                </p>
                <p class="detail">
                    LutherSales gives you the purchasing flexibility you deserve. Since 1967 LutherSales has been a
                    pioneer in providing premium name-brand products ranging from the latest electronics, home
                    furnishings, and household appliances to consumers with limited cash and credit options.
                </p>
                <button class="btn success three-min-btn">
                    <a hreef="/login"><span data-v-034600bc=""><span class="txt-easy">EASY</span>
                            3-Minute
                        </span> <span class="txt-apply">APPLY NOW</span></a></button>
            </div>
            <div class="col why-cards">
                <div class="card-wrapper">
                    <div class="card">
                        <div class="bg">
                            <div class="img"><img src="frontend/img/why_01.png"
                                    alt="Buy Now Pay Later Credit Financing"></div>
                            <div class="content">
                                World-Class Customer Service with Your Own Personal Shopper
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="bg">
                            <div class="img"><img src="frontend/img/why_02.png"
                                    alt="Buy Now Pay Later Credit Financing"></div>
                            <div class="content">
                                World-Class Customer Service with Your Own Personal Shopper
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="bg">
                            <div class="img"><img src="frontend/img/why_03.png"
                                    alt="Buy Now Pay Later Credit Financing"></div>
                            <div class="content">
                                World-Class Customer Service with Your Own Personal Shopper
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="bg">
                            <div class="img"><img src="frontend/img/why_04.png"
                                    alt="Buy Now Pay Later Credit Financing"></div>
                            <div class="content">
                                World-Class Customer Service with Your Own Personal Shopper
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="container">
        <section class="process-section">
            <h2>Choose Your Favourite Brands</h2>
            <p>and Pay as You Go</p>
            <div class="grid-container">
                <div class="grid-item">
                    <div class="img">
                        <a href="https://qc.luthersales.iocod.com/listing/brands/apple">

                            <img src="https://lutehr-test.s3.amazonaws.com/brands/1623667799_5nyupPQIotPPye22xhMtjTcZzUe7k5DmMHHyFiM1.jpeg"
                                alt="Apple - Credit Financing - Buy Now Pay Later"></a>
                    </div><a href="https://qc.luthersales.iocod.com/listing/brands/apple">
                    </a>
                </div>
                <div class="grid-item">
                    <div class="img">
                        <a href="https://qc.luthersales.iocod.com/listing/brands/maytag">

                            <img src="https://lutehr-test.s3.amazonaws.com/brands/1601863402_a8rdz7dtWgOLHu0yDkogNVk8Z37vtyNIGCbjscMf.jpg"
                                alt="Maytag - Credit Financing - Buy Now Pay Later"></a>
                    </div><a href="https://qc.luthersales.iocod.com/listing/brands/maytag">
                    </a>
                </div>
                <div class="grid-item">
                    <div class="img">
                        <a href="https://qc.luthersales.iocod.com/listing/brands/samsung">

                            <img src="https://lutehr-test.s3.amazonaws.com/brands/1600815499_PvjusWzyPnl4ToISh7VCBdfjy1u8gzOjLMTyLaYj.jpg"
                                alt="Samsung - Credit Financing - Buy Now Pay Later"></a>
                    </div><a href="https://qc.luthersales.iocod.com/listing/brands/samsung">
                    </a>
                </div>
                <div class="grid-item">
                    <div class="img">
                        <a href="https://qc.luthersales.iocod.com/listing/brands/shark">

                            <img src="https://lutehr-test.s3.amazonaws.com/brands/1601865439_dE6nKw84COaGyBPXt2HNYUzf36lahim2lHd9zhX4.jpg"
                                alt="Shark - Credit Financing - Buy Now Pay Later"></a>
                    </div><a href="https://qc.luthersales.iocod.com/listing/brands/shark">
                    </a>
                </div>
                <div class="grid-item">
                    <div class="img">
                        <a href="https://qc.luthersales.iocod.com/listing/brands/sony">

                            <img src="https://lutehr-test.s3.amazonaws.com/brands/1601842880_XFCdstO1DASaGwTqjoPOhJRCICsov7BoGs6otyTQ.jpg"
                                alt="Sony - Credit Financing - Buy Now Pay Later"></a>
                    </div><a href="https://qc.luthersales.iocod.com/listing/brands/sony">
                    </a>
                </div>
                <div class="grid-item">
                    <div class="img">
                        <a href="https://qc.luthersales.iocod.com/listing/brands/whirlpool">

                            <img src="https://lutehr-test.s3.amazonaws.com/brands/1601866120_A0hbortoug9vTZ5fbBtigfvfzTCSiK8jY02BrHfB.jpg"
                                alt="Whirlpool - Credit Financing - Buy Now Pay Later"></a>
                    </div><a href="https://qc.luthersales.iocod.com/listing/brands/whirlpool">
                    </a>
                </div>

            </div>
        </section>
    </div>



    <div class="txt-info">
        <p class="txt-primary">
            Boost Your Buying Power at LutherSales Your Buy Now Pay Later Furniture, Computer, Cell Phone,
            Appliance, TV and Electronics Store.
            <br>Credit Not Required… Poor Credit Financing Available.
        </p>
        <p class="txt-sec">
            We ethically help people rebuild credit while empowering them to make essen?al purchases and lead a
            better life. We also Participate in Many Company Human Resources
            <br>and Union Employee Purchasing Plans, plus Civil Service, Federal, Municipal, and State Government
            Employee Bene?t Programs. Poor Credit Programs Available.
        </p>
    </div>


    <div class="container">
        <div class="heading">
            <h3><span>100%</span> Trusted Website</h3>
            <p>Responsible Purchasing</p>
        </div>
        <div class="security-logo">
            <div class="col logo-box">
                <div class="trustpilot-box">
                    <div data-template-id="53aa8807dec7e10d38f59f32"
                        data-businessunit-id="5ce811ab161a7e0001aa2c46"
                        data-review-url="trustpilot.review.com/mywebsite.com" data-locale="en-us"
                        class="trustpilot-widget" id="trustpilot-widget-mini" data-theme="light"
                        data-schema-type="Organization" data-style-width="100%" data-stars="1,2,3,4,5"
                        style="position: relative;"><iframe title="Customer reviews powered by Trustpilot"
                            loading="auto"
                            src="https://widget.trustpilot.com/trustboxes/53aa8807dec7e10d38f59f32/index.html?templateId=53aa8807dec7e10d38f59f32&amp;businessunitId=5ce811ab161a7e0001aa2c46#reviewUrl=trustpilot.review.com%2Fmywebsite.com&amp;locale=en-us&amp;theme=light&amp;schemaType=Organization&amp;styleWidth=100%25&amp;stars=1%2C2%2C3%2C4%2C5"
                            style="position: relative; width: 100%; border-style: none; display: block; overflow: hidden;"></iframe>
                    </div>
                </div>
            </div>
            <div class="col logo-box">
                <a href="http://luthersales.com/cp-ups-tracking.html" target="_blank">
                    <img src="frontend/img/ups.jpeg" alt="Free Shipping Every Order"
                        title="Free Shipping Every Order">
                </a>
            </div>
            <div class="col logo-box">
                <a href="https://smarticon.geotrust.com/smarticonprofile?Referer=https://luthersales.com">
                    <img src="frontend/img/geotrust.jpeg" alt="Geo Trust" title="Geo Trust">
                </a>
            </div>
            <div class="col logo-box">
                <a href="https://www.e-verify.gov/" target="_blank">
                    <img src="frontend/img/e-verfy.jpeg" alt="E-Verify" title="E-Verify">
                </a>
            </div>
        </div>
    </div>

</section>
<!-- /.Home Content Section -->

@endsection
