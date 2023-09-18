@extends('buyer.layouts.master') <!-- Extending the master.blade.php template -->
@section('content')
<section id="content">
    <div class="content-header" id="sotd">
        <div class="block">
            <div class="c-sotd">
                {{-- <div class="inner">
                    <div class="heading-svg has-sticker">
                        <svg class="heading-svg__title" width="1779" height="172"
                            viewBox="0 0 1779 172">
                            <path
                                d="M58.52 171.92C48.6 171.92 39.56 169.84 31.4 165.68C23.4 161.52 16.68 155.84 11.24 148.64C5.96 141.44 2.44 133.52 0.68 124.88L25.88 109.04C28.44 119.28 32.44 127.52 37.88 133.76C43.48 140 50.6 143.12 59.24 143.12C65.8 143.12 71.08 141.52 75.08 138.32C79.08 134.96 81.08 129.92 81.08 123.2C81.08 119.04 79.72 115.36 77 112.16C74.28 108.96 70.84 106.16 66.68 103.76C62.68 101.36 56.92 98.32 49.4 94.64L42.44 91.28C32.84 86.48 25.16 80.48 19.4 73.28C13.64 65.92 10.76 56.56 10.76 45.2C10.76 36.72 12.68 29.04 16.52 22.16C20.52 15.28 26.04 9.91999 33.08 6.07999C40.28 2.08 48.44 0.079999 57.56 0.079999C80.76 0.079999 96.6 10.24 105.08 30.56L79.88 46.64C75.72 34.8 68.28 28.88 57.56 28.88C52.92 28.88 48.92 30.4 45.56 33.44C42.2 36.32 40.52 39.92 40.52 44.24C40.52 48.56 41.96 52.4 44.84 55.76C47.88 58.96 51.48 61.76 55.64 64.16C59.96 66.4 66.12 69.36 74.12 73.04C81.96 76.72 88.52 80.48 93.8 84.32C99.24 88.16 103.64 93.2 107 99.44C110.52 105.52 112.28 112.96 112.28 121.76C112.28 131.84 109.96 140.72 105.32 148.4C100.84 155.92 94.52 161.76 86.36 165.92C78.2 169.92 68.92 171.92 58.52 171.92ZM138.26 1.99999H169.46V170H138.26V1.99999ZM235.102 30.8H188.302V1.99999H313.102V30.8H266.302V170H235.102V30.8ZM332.021 1.99999H435.941V30.8H363.221V66.08H421.541V94.88H363.221V141.2H438.341V170H332.021V1.99999ZM597.29 171.92C582.73 171.92 569.45 168.72 557.45 162.32C545.45 155.92 535.85 146.32 528.65 133.52C521.61 120.56 518.09 104.72 518.09 86C518.09 67.28 521.61 51.52 528.65 38.72C535.85 25.76 545.45 16.08 557.45 9.67999C569.45 3.28 582.73 0.079999 597.29 0.079999C611.85 0.079999 625.13 3.28 637.13 9.67999C649.13 16.08 658.65 25.76 665.69 38.72C672.89 51.52 676.49 67.28 676.49 86C676.49 104.72 672.89 120.56 665.69 133.52C658.65 146.32 649.13 155.92 637.13 162.32C625.13 168.72 611.85 171.92 597.29 171.92ZM597.29 143.12C606.09 143.12 614.01 141.12 621.05 137.12C628.25 132.96 634.01 126.64 638.33 118.16C642.65 109.52 644.81 98.8 644.81 86C644.81 73.2 642.65 62.56 638.33 54.08C634.01 45.44 628.25 39.12 621.05 35.12C614.01 30.96 606.09 28.88 597.29 28.88C588.49 28.88 580.49 30.96 573.29 35.12C566.25 39.12 560.57 45.44 556.25 54.08C551.93 62.56 549.77 73.2 549.77 86C549.77 98.8 551.93 109.52 556.25 118.16C560.57 126.64 566.25 132.96 573.29 137.12C580.49 141.12 588.49 143.12 597.29 143.12ZM705.279 1.99999H811.599V30.8H736.479V69.2H796.959V98H736.479V170H705.279V1.99999ZM927.946 30.8H881.146V1.99999H1005.95V30.8H959.146V170H927.946V30.8ZM1024.86 1.99999H1056.06V65.84H1123.26V1.99999H1154.46V170H1123.26V94.64H1056.06V170H1024.86V1.99999ZM1191.47 1.99999H1295.39V30.8H1222.67V66.08H1280.99V94.88H1222.67V141.2H1297.79V170H1191.47V1.99999ZM1385.7 1.99999H1438.26C1452.18 1.99999 1465.06 5.03999 1476.9 11.12C1488.74 17.2 1498.26 26.56 1505.46 39.2C1512.82 51.68 1516.5 67.28 1516.5 86C1516.5 104.72 1512.82 120.4 1505.46 133.04C1498.26 145.52 1488.74 154.8 1476.9 160.88C1465.06 166.96 1452.18 170 1438.26 170H1385.7V1.99999ZM1428.42 141.2C1444.42 141.2 1457.78 137.12 1468.5 128.96C1479.38 120.64 1484.82 106.32 1484.82 86C1484.82 65.68 1479.38 51.44 1468.5 43.28C1457.78 34.96 1444.42 30.8 1428.42 30.8H1416.9V141.2H1428.42ZM1578.79 1.99999H1609.99L1666.87 170H1633.27L1621.03 130.4H1567.75L1555.51 170H1521.91L1578.79 1.99999ZM1612.15 101.6L1594.39 43.28L1576.63 101.6H1612.15ZM1699.26 98.48L1650.78 1.99999H1684.38L1714.86 67.28L1745.34 1.99999H1778.94L1730.46 98.48V170H1699.26V98.48Z">
                            </path>
                        </svg>
                    </div>
                </div> --}}
                {{-- <div class="inner">
                    <div class="marquee-text" data-controller="marquee">
                        <div><strong>Nortera</strong> — Site of the Day - <strong>7.31</strong> — Sep 9, 2023 —
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="inner">
                    <div class="card-site-anime">
                        <a href="sites/nortera.html" class="item-link"
                            aria-label="Nortera - Site of the Day"></a>
                        <div class="card-site-anime__content">
                            <div class="swiper slider-site-anime">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card-site-anime__slide">
                                            <div class="card-site-anime__label is-text-anime">
                                                <span>Site name</span>
                                            </div>
                                            <div class="card-site-anime__text is-text-anime">
                                                <span>Nortera</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-site-anime__slide">
                                            <div class="card-site-anime__label is-text-anime">
                                                <span>Overall Score</span>
                                            </div>
                                            <div class="card-site-anime__text is-text-anime">
                                                <span class="card-site-anime__note">
                                                    7.31<sup>/10</sup>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-site-anime__slide">
                                            <div class="card-site-anime__label is-text-anime">
                                                <span>By</span>
                                            </div>
                                            <div class="card-site-anime__text is-text-anime">
                                                <span>agency_lg2</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="button button--large--outline--white--rounded hidden-lg">Explore
                            SOTD</span>
                        <img class="card-site-anime__bg"
                            src="https://assets.awwwards.com/awards/sites_of_the_day/2023/09/nortera-cover.jpg"
                            alt="">
                    </div>
                    <div class="card-site-full__credits">
                        <div class="head-site__credits has-many-credits">

                            <div class="users-credits ">
                                <ul class="users-credits__details">
                                    <li>
                                        <div class="users-credits__item">
                                            <figure class="avatar-name ">
                                                <a class="avatar-name__link" href="agency_lg2/index.html"
                                                    aria-label="LG2">
                                                    <img class="avatar-name__img"
                                                        src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/avatar/607820/6193f887abcf5989257526.jpg"
                                                        width="32" height="32" alt="LG2" />
                                                    <figcaption class="avatar-name__name">
                                                        <strong class="link-underlined ">LG2</strong>
                                                        <sup>PRO</sup>
                                                    </figcaption>
                                                </a>
                                            </figure>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
{{-- 
    <div class="block">
        <div class="inner">
            <div class="c-heading c-heading--small">
                <div class="c-heading__top">
                    <h2 class="text-default">News and Updates</h2>
                </div>
                <div class="c-heading__middle">
                    <div class="c-heading__between">
                        <h3 class="heading-5">Follow what's brand<br>new in digital design.</h3>
                        <div>Don't miss the <strong>latest</strong> happenings on <strong>awwwards</strong>.
                        </div>
                    </div>
                </div>
            </div>
            <div class="l-list-sites">
                <div class="l-list-sites__col">
                    <h3 class="heading-hr"><strong>w.news</strong></h3>
                    <ul class="list-sites">
                        <li class="list-sites__item">
                            <div class="list-sites__card ">
                                <figure class="list-sites__figure">
                                    <a href="inspiration/cursor-interaction-on-the-logo-in-the-footer.html">
                                        <img width="72" height="72" loading="lazy"
                                            class="list-sites__media"
                                            src="https://assets.awwwards.com/awards/media/cache/square_thumb_140/element/2023/08/64f053dba626c069270583_static.jpeg"
                                            alt="Cursor interaction on the logo in the footer">
                                    </a>
                                </figure>
                                <div class="list-sites__info">
                                    <div class="list-sites__label">
                                        Element of the Day
                                        <span class="budget-tag budget-tag--solid--black">FRESH</span>
                                    </div>
                                    <h3 class="list-sites__title list-sites__title--truncate">
                                        <a href="inspiration/cursor-interaction-on-the-logo-in-the-footer.html"
                                            title="Cursor interaction on the logo in the footer">
                                            Cursor interaction on the logo in the footer
                                        </a>
                                    </h3>
                                </div>
                            </div>

                        </li>
                        <li class="list-sites__item">




                            <div class="list-sites__card ">
                                <figure class="list-sites__figure">
                                    <a href="c2-montr%c3%a9al-by-koki-kiko-and-friends-wins-sotm-may.html">
                                        <img width="72" height="72" loading="lazy"
                                            class="list-sites__media"
                                            src="https://assets.awwwards.com/awards/media/cache/square_thumb_140/images/2023/06/c2mtl-thumb.jpg"
                                            alt="C2 Montréal by KOKI-KIKO and friends wins SOTM May">
                                    </a>
                                </figure>
                                <div class="list-sites__info">
                                    <div class="list-sites__label">
                                        News - June 27, 2023
                                    </div>
                                    <h3 class="list-sites__title list-sites__title--truncate">
                                        <a href="c2-montr%c3%a9al-by-koki-kiko-and-friends-wins-sotm-may.html"
                                            title="C2 Montréal by KOKI-KIKO and friends wins SOTM May">
                                            C2 Montréal by KOKI-KIKO and friends wins SOTM May
                                        </a>
                                    </h3>
                                </div>
                            </div>


                        </li>
                        <li class="list-sites__item">




                            <div class="list-sites__card ">
                                <figure class="list-sites__figure">
                                    <a
                                        href="engine-station-by-monogrid-a-3d-experiential-e-commerce-destination.html">
                                        <img width="72" height="72" loading="lazy"
                                            class="list-sites__media"
                                            src="https://assets.awwwards.com/awards/media/cache/square_thumb_140/images/2023/05/es-thumb-v2.jpg"
                                            alt="Engine Station by MONOGRID: A 3D Experiential E-Commerce Destination">
                                    </a>
                                </figure>
                                <div class="list-sites__info">
                                    <div class="list-sites__label">
                                        News - May 24, 2023
                                    </div>
                                    <h3 class="list-sites__title list-sites__title--truncate">
                                        <a href="engine-station-by-monogrid-a-3d-experiential-e-commerce-destination.html"
                                            title="Engine Station by MONOGRID: A 3D Experiential E-Commerce Destination">
                                            Engine Station by MONOGRID: A 3D Experiential E-Commerce Destination
                                        </a>
                                    </h3>
                                </div>
                            </div>


                        </li>
                        <li class="list-sites__item">




                            <div class="list-sites__card ">
                                <figure class="list-sites__figure">
                                    <a href="case-study-reinventing-locomotive-r.html">
                                        <img width="72" height="72" loading="lazy"
                                            class="list-sites__media"
                                            src="https://assets.awwwards.com/awards/media/cache/square_thumb_140/images/2023/05/loco-thumb.jpg"
                                            alt="Reinventing Locomotive® Wins Site of the Month March">
                                    </a>
                                </figure>
                                <div class="list-sites__info">
                                    <div class="list-sites__label">
                                        News - May 10, 2023
                                    </div>
                                    <h3 class="list-sites__title list-sites__title--truncate">
                                        <a href="case-study-reinventing-locomotive-r.html"
                                            title="Reinventing Locomotive® Wins Site of the Month March">
                                            Reinventing Locomotive® Wins Site of the Month March
                                        </a>
                                    </h3>
                                </div>
                            </div>


                        </li>
                    </ul>
                </div>
                <div class="l-list-sites__col">

                    <h3 class="heading-hr"><strong>w.creators - close to you</strong></h3>
                    <ul class="list-sites">
                        <li class="list-sites__item">
                            <div class="list-sites__card ">
                                <figure class="list-sites__figure">
                                    <a href="Ruckus/index.html">
                                        <img width="72" height="72" loading="lazy"
                                            class="list-sites__media"
                                            src="https://assets.awwwards.com/awards/media/cache/thumb_user_retina/avatar/394575/56d5bad90370e.jpeg"
                                            alt="Ruckus">
                                    </a>
                                </figure>
                                <div class="list-sites__info">
                                    <div class="list-sites__label">
                                        Agency
                                        <span class="budget-tag budget-tag--solid--black">INTERNATIONAL</span>
                                    </div>
                                    <h3 class="list-sites__title list-sites__title--truncate">
                                        <a href="Ruckus/index.html" title="Ruckus">
                                            Ruckus
                                        </a>
                                    </h3>
                                </div>
                            </div>

                        </li>
                        <li class="list-sites__item">
                            <div class="list-sites__card ">
                                <figure class="list-sites__figure">
                                    <a href="Zajno/index.html">
                                        <img width="72" height="72" loading="lazy"
                                            class="list-sites__media"
                                            src="https://assets.awwwards.com/awards/media/cache/thumb_user_retina/avatar/518459/646207d0207f6428357435.png"
                                            alt="Zajno">
                                    </a>
                                </figure>
                                <div class="list-sites__info">
                                    <div class="list-sites__label">
                                        Agency
                                        <span class="budget-tag budget-tag--solid--black">INTERNATIONAL</span>
                                    </div>
                                    <h3 class="list-sites__title list-sites__title--truncate">
                                        <a href="Zajno/index.html" title="Zajno">
                                            Zajno
                                        </a>
                                    </h3>
                                </div>
                            </div>

                        </li>
                        <li class="list-sites__item">
                            <div class="list-sites__card ">
                                <figure class="list-sites__figure">
                                    <a href="jaffar/index.html">
                                        <img width="72" height="72" loading="lazy"
                                            class="list-sites__media"
                                            src="https://assets.awwwards.com/awards/media/cache/thumb_user_retina/avatar/182035/5ee84fb630b01399133765.jpg"
                                            alt="Jaffar">
                                    </a>
                                </figure>
                                <div class="list-sites__info">
                                    <div class="list-sites__label">
                                        Freelance - United Arab Emirates
                                    </div>
                                    <h3 class="list-sites__title list-sites__title--truncate">
                                        <a href="jaffar/index.html" title="Jaffar">
                                            Jaffar
                                        </a>
                                    </h3>
                                </div>
                            </div>

                        </li>
                        <li class="list-sites__item">
                            <div class="list-sites__card ">
                                <figure class="list-sites__figure">
                                    <a href="nidalben/index.html">
                                        <img width="72" height="72" loading="lazy"
                                            class="list-sites__media"
                                            src="https://assets.awwwards.com/awards/media/cache/thumb_user_retina/avatar/928628/63bf483e3e19b727659483.png"
                                            alt="Nidal Benatia">
                                    </a>
                                </figure>
                                <div class="list-sites__info">
                                    <div class="list-sites__label">
                                        Studio - United Arab Emirates
                                    </div>
                                    <h3 class="list-sites__title list-sites__title--truncate">
                                        <a href="nidalben/index.html" title="Nidal Benatia">
                                            Nidal Benatia
                                        </a>
                                    </h3>
                                </div>
                            </div>

                        </li>
                    </ul>

                </div>
                <div class="l-list-sites__col s-2">
                    <h3 class="heading-hr"><strong>Featured</strong></h3>
                    <ul class="list-sites">
                        <li class="list-sites__item">
                            <div class="list-sites__card ">
                                <figure class="list-sites__figure">
                                    <a href="https://conference.awwwards.com/">
                                        <img width="72" height="72" loading="lazy"
                                            class="list-sites__media"
                                            src="https://assets.awwwards.com/awards/64996d7aea14b8.99251204.png"
                                            alt="Early Bird Tickets on sale for a limited time, grab yours here!">
                                    </a>
                                </figure>
                                <div class="list-sites__info">
                                    <div class="list-sites__label">
                                        An inspiring event for the digital design community
                                    </div>
                                    <h3 class="list-sites__title ">
                                        <a href="https://conference.awwwards.com/"
                                            title="Early Bird Tickets on sale for a limited time, grab yours here!">
                                            Early Bird Tickets on sale for a limited time, grab yours here!
                                        </a>
                                    </h3>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}


    {{-- <div class="anchor-section" id="nominees">
        <div class="c-box-float-more">
            <div class="inner">
                <div class="box-float-more style-1">
                    <a href="websites/nominees/index.html" class="item-link"
                        aria-label="View all Nominees"></a>
                    <div class="box-float-more__info">
                        <div>View all</div>
                        <div><span>Nominees</span></div>
                    </div>
                    <img class="box-float-more__photo" width="60" height="48"
                        src="https://assets.awwwards.com/awards/media/cache/thumb_60_45/submissions/2023/08/64f08dc37fa7e763864775.jpg"
                        alt="View all Nominees">
                </div>
            </div>
        </div>
        <div class="block">
            <div class="inner">
                <div class="c-heading text-center">
                    <div class="c-heading__top">
                        <h2 class="text-default">Latest</h2>
                    </div>
                    <div class="c-heading__middle">
                        <h3 class="heading-1">
                            NOMINEES
                            <span class="budget-cool hidden-sm">Cool Sites!</span>
                        </h3>
                    </div>
                    <div class="c-heading__bottom">
                        <div class="c-heading__short-desc">
                            <span>Vote for the latest websites on awwwards</span>
                        </div>
                    </div>
                </div>
                <div class="swiper slider-sites" data-controller="swiper"
                    data-swiper-configuration-value="slider_3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">

                            <div class="card-slide">


                                <figure class="figure-rollover js-collectable is-large"
                                    data-controller="collectable"
                                    data-collectable-model-value="&#x7B;&quot;collectableIdentifier&quot;&#x3A;&quot;fitsole&quot;,&quot;collectableImage&quot;&#x3A;&quot;submissions&#x5C;&#x2F;2023&#x5C;&#x2F;08&#x5C;&#x2F;64f08dc37fa7e763864775.jpg&quot;,&quot;collectableTitle&quot;&#x3A;&quot;Fitsole&quot;,&quot;id&quot;&#x3A;54471,&quot;images&quot;&#x3A;&#x7B;&quot;thumbnail&quot;&#x3A;&quot;submissions&#x5C;&#x2F;2023&#x5C;&#x2F;08&#x5C;&#x2F;64f08dc37fa7e763864775.jpg&quot;&#x7D;,&quot;slug&quot;&#x3A;&quot;fitsole&quot;,&quot;title&quot;&#x3A;&quot;Fitsole&quot;,&quot;createdAt&quot;&#x3A;1693985415,&quot;tags&quot;&#x3A;&#x5B;&quot;E-Commerce&quot;,&quot;Fashion&quot;,&quot;Web&#x20;&amp;&#x20;Interactive&quot;,&quot;Clean&quot;,&quot;Minimal&quot;,&quot;Menu&#x20;-&#x20;Horizontal&quot;,&quot;UI&#x20;design&quot;,&quot;About&#x20;Page&quot;,&quot;Footer&#x20;Design&quot;&#x5D;,&quot;type&quot;&#x3A;&quot;submission&quot;&#x7D;">
                                    <a aria-label="Fitsole" href="sites/fitsole.html"
                                        class="figure-rollover__link ">
                                        <img class="figure-rollover__file lazy"
                                            data-controller="lazyload-image"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAQAAADB7vUKAAAAEUlEQVR42mNkIAAYRxXQSwEAC5oADbo22BYAAAAASUVORK5CYII="
                                            data-src="https://assets.awwwards.com/awards/media/cache/thumb_880_660/submissions/2023/08/64f08dc37fa7e763864775.jpg"
                                            alt="Fitsole">
                                    </a>
                                    <div class="figure-rollover__hover">
                                        <div class="figure-rollover__center">
                                            <a href="sites/fitsole.html"
                                                class="button button--white--rounded">
                                                <svg class="ico--left" width="14" viewBox="0 0 20 17">
                                                    <path
                                                        d="M17.8246 7.4299H0V9.29145H17.8246L12.2047 16L13.6589 16.8982L19.4269 10.0128C20.191 9.10064 20.191 7.61838 19.4269 6.70622L13.809 0L12.3548 0.89587L17.8246 7.4299Z">
                                                    </path>
                                                </svg>
                                                Vote Now
                                            </a>
                                        </div>
                                        <div class="figure-rollover__left">
                                            <div class="figure-rollover__row"><small>WEBSITE</small></div>
                                            <div class="figure-rollover__row">
                                                <h3>Fitsole</h3>
                                            </div>
                                        </div>
                                        <div class="figure-rollover__right">
                                            <div class="figure-rollover__bts">
                                                <a href="https://fitsole.shop/" rel="noopener nofollow"
                                                    target="_blank" class="figure-rollover__bt">
                                                    <svg width="14" height="14" viewBox="0 0 14 14">
                                                        <path
                                                            d="M10.8101 1.96222L0.726954 12.0453L1.66171 12.9801L11.7448 2.89698L11.9344 9.4447L13.208 9.07311L13.0134 2.35278C12.9877 1.46249 12.2434 0.718185 11.3531 0.692412L4.80762 0.502924L4.43487 1.77539L10.8101 1.96222Z"
                                                            fill="white" stroke="white"
                                                            stroke-width="0.542084" />
                                                    </svg>
                                                </a>
                                                <span class="figure-rollover__bt"
                                                    data-action="click->collectable#collect">
                                                    <svg width="15" height="18" viewBox="0 0 15 18">
                                                        <path
                                                            d="M11.7746 1.00195H3.21618C1.99236 1.00195 0.996094 2.07031 0.996094 3.38268V14.6912C0.996094 15.7744 1.44566 16.5511 2.26154 16.8755C2.47384 16.9603 2.70001 17.002 2.92896 17.002C3.14403 17.002 3.36188 16.9648 3.57278 16.8889C3.78369 16.813 4.24436 16.566 4.38034 16.4916L7.4954 14.2299H7.49678L8.48611 13.5112L7.81592 13.0246L7.49401 12.7925L3.84613 15.4456C3.60608 15.575 3.30776 15.7268 3.21896 15.7595C2.95949 15.8532 2.74996 15.7982 2.64867 15.758C2.39613 15.6568 2.10614 15.4441 2.10614 14.6882V3.37971C2.10614 2.72352 2.60427 2.18934 3.21618 2.18934H11.7746C12.3865 2.18934 12.8847 2.72352 12.8847 3.37971V14.6882C12.8847 15.4441 12.5947 15.6568 12.3421 15.758C12.2408 15.7982 12.0313 15.8532 11.7718 15.7595C11.683 15.7283 11.3847 15.575 11.1447 15.4456L9.92639 14.5587L8.93707 15.2774L10.5508 16.4514L10.6118 16.4901C10.7478 16.5645 11.2085 16.8115 11.4194 16.8874C11.8523 17.0436 12.3172 17.0377 12.7306 16.874C13.5465 16.5481 13.9961 15.7729 13.9961 14.6897V3.38119C13.9947 2.0703 12.9984 1.00195 11.7746 1.00195Z"
                                                            fill="white" stroke="white"
                                                            stroke-width="0.542084" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="figure-rollover__fixed-left">

                                    </div>
                                </figure>



                                <div class="card-slide__info">
                                    <div class="card-slide__row">
                                        <h3 class="card-slide__title">
                                            <a href="sites/fitsole.html">Fitsole</a>
                                        </h3>
                                        <div class="card-slide__data">
                                            <small>by</small>

                                            <div class="users-credits is-large">
                                                <ul class="users-credits__details">
                                                    <li>
                                                        <div class="users-credits__item">
                                                            <figure class="avatar-name ">
                                                                <a class="avatar-name__link"
                                                                    href="DashDigital%c2%ae/index.html"
                                                                    aria-label="DashDigital®">
                                                                    <img class="avatar-name__img"
                                                                        src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/avatar/797758/624eb897ecc05050422732.jpg"
                                                                        width="32" height="32"
                                                                        alt="DashDigital®" />
                                                                    <figcaption class="avatar-name__name">
                                                                        <strong
                                                                            class="link-underlined ">DashDigital®</strong>
                                                                        <sup>PRO</sup>
                                                                    </figcaption>
                                                                </a>
                                                            </figure>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="swiper-slide">

                            <div class="card-slide">


                                <figure class="figure-rollover js-collectable is-large"
                                    data-controller="collectable"
                                    data-collectable-model-value="&#x7B;&quot;collectableIdentifier&quot;&#x3A;&quot;tsu-lange-yor&quot;,&quot;collectableImage&quot;&#x3A;&quot;submissions&#x5C;&#x2F;2023&#x5C;&#x2F;09&#x5C;&#x2F;64f54e2e90257699219043.jpg&quot;,&quot;collectableTitle&quot;&#x3A;&quot;Tsu&#x20;Lange&#x20;Yor&quot;,&quot;id&quot;&#x3A;54500,&quot;images&quot;&#x3A;&#x7B;&quot;thumbnail&quot;&#x3A;&quot;submissions&#x5C;&#x2F;2023&#x5C;&#x2F;09&#x5C;&#x2F;64f54e2e90257699219043.jpg&quot;&#x7D;,&quot;slug&quot;&#x3A;&quot;tsu-lange-yor&quot;,&quot;title&quot;&#x3A;&quot;Tsu&#x20;Lange&#x20;Yor&quot;,&quot;createdAt&quot;&#x3A;1694159278,&quot;tags&quot;&#x3A;&#x5B;&quot;E-Commerce&quot;,&quot;Clean&quot;,&quot;Minimal&quot;,&quot;Photography&quot;,&quot;Transitions&quot;,&quot;Menu&#x20;-&#x20;Vertical&quot;,&quot;Photo&#x20;&amp;&#x20;Video&quot;&#x5D;,&quot;type&quot;&#x3A;&quot;submission&quot;&#x7D;">
                                    <a aria-label="Tsu Lange Yor" href="sites/tsu-lange-yor.html"
                                        class="figure-rollover__link ">
                                        <img class="figure-rollover__file lazy"
                                            data-controller="lazyload-image"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAQAAADB7vUKAAAAEUlEQVR42mNkIAAYRxXQSwEAC5oADbo22BYAAAAASUVORK5CYII="
                                            data-src="https://assets.awwwards.com/awards/media/cache/thumb_880_660/submissions/2023/09/64f54e2e90257699219043.jpg"
                                            alt="Tsu Lange Yor">
                                    </a>
                                    <div class="figure-rollover__hover">
                                        <div class="figure-rollover__center">
                                            <a href="sites/tsu-lange-yor.html"
                                                class="button button--white--rounded">
                                                <svg class="ico--left" width="14" viewBox="0 0 20 17">
                                                    <path
                                                        d="M17.8246 7.4299H0V9.29145H17.8246L12.2047 16L13.6589 16.8982L19.4269 10.0128C20.191 9.10064 20.191 7.61838 19.4269 6.70622L13.809 0L12.3548 0.89587L17.8246 7.4299Z">
                                                    </path>
                                                </svg>
                                                Vote Now
                                            </a>
                                        </div>
                                        <div class="figure-rollover__left">
                                            <div class="figure-rollover__row"><small>WEBSITE</small></div>
                                            <div class="figure-rollover__row">
                                                <h3>Tsu Lange Yor</h3>
                                            </div>
                                        </div>
                                        <div class="figure-rollover__right">
                                            <div class="figure-rollover__bts">
                                                <a href="https://tsu-lange-yor.au/" rel="noopener nofollow"
                                                    target="_blank" class="figure-rollover__bt">
                                                    <svg width="14" height="14" viewBox="0 0 14 14">
                                                        <path
                                                            d="M10.8101 1.96222L0.726954 12.0453L1.66171 12.9801L11.7448 2.89698L11.9344 9.4447L13.208 9.07311L13.0134 2.35278C12.9877 1.46249 12.2434 0.718185 11.3531 0.692412L4.80762 0.502924L4.43487 1.77539L10.8101 1.96222Z"
                                                            fill="white" stroke="white"
                                                            stroke-width="0.542084" />
                                                    </svg>
                                                </a>
                                                <span class="figure-rollover__bt"
                                                    data-action="click->collectable#collect">
                                                    <svg width="15" height="18" viewBox="0 0 15 18">
                                                        <path
                                                            d="M11.7746 1.00195H3.21618C1.99236 1.00195 0.996094 2.07031 0.996094 3.38268V14.6912C0.996094 15.7744 1.44566 16.5511 2.26154 16.8755C2.47384 16.9603 2.70001 17.002 2.92896 17.002C3.14403 17.002 3.36188 16.9648 3.57278 16.8889C3.78369 16.813 4.24436 16.566 4.38034 16.4916L7.4954 14.2299H7.49678L8.48611 13.5112L7.81592 13.0246L7.49401 12.7925L3.84613 15.4456C3.60608 15.575 3.30776 15.7268 3.21896 15.7595C2.95949 15.8532 2.74996 15.7982 2.64867 15.758C2.39613 15.6568 2.10614 15.4441 2.10614 14.6882V3.37971C2.10614 2.72352 2.60427 2.18934 3.21618 2.18934H11.7746C12.3865 2.18934 12.8847 2.72352 12.8847 3.37971V14.6882C12.8847 15.4441 12.5947 15.6568 12.3421 15.758C12.2408 15.7982 12.0313 15.8532 11.7718 15.7595C11.683 15.7283 11.3847 15.575 11.1447 15.4456L9.92639 14.5587L8.93707 15.2774L10.5508 16.4514L10.6118 16.4901C10.7478 16.5645 11.2085 16.8115 11.4194 16.8874C11.8523 17.0436 12.3172 17.0377 12.7306 16.874C13.5465 16.5481 13.9961 15.7729 13.9961 14.6897V3.38119C13.9947 2.0703 12.9984 1.00195 11.7746 1.00195Z"
                                                            fill="white" stroke="white"
                                                            stroke-width="0.542084" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="figure-rollover__fixed-left">

                                    </div>
                                </figure>



                                <div class="card-slide__info">
                                    <div class="card-slide__row">
                                        <h3 class="card-slide__title">
                                            <a href="sites/tsu-lange-yor.html">Tsu Lange Yor</a>
                                        </h3>
                                        <div class="card-slide__data">
                                            <small>by</small>

                                            <div class="users-credits is-large">
                                                <ul class="users-credits__details">
                                                    <li>
                                                        <div class="users-credits__item">
                                                            <figure class="avatar-name ">
                                                                <a class="avatar-name__link"
                                                                    href="Bone.Digital/index.html"
                                                                    aria-label="Bone Digital">
                                                                    <img class="avatar-name__img"
                                                                        src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/avatar/902169/6155911ec1dab888390872.png"
                                                                        width="32" height="32"
                                                                        alt="Bone Digital" />
                                                                    <figcaption class="avatar-name__name">
                                                                        <strong class="link-underlined ">Bone
                                                                            Digital</strong>
                                                                        <sup>PRO</sup>
                                                                    </figcaption>
                                                                </a>
                                                            </figure>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="swiper-slide">

                            <div class="card-slide">


                                <figure class="figure-rollover js-collectable is-large"
                                    data-controller="collectable"
                                    data-collectable-model-value="&#x7B;&quot;collectableIdentifier&quot;&#x3A;&quot;dom-perignon&quot;,&quot;collectableImage&quot;&#x3A;&quot;submissions&#x5C;&#x2F;2023&#x5C;&#x2F;09&#x5C;&#x2F;64f4e1f45bab2122861027.jpg&quot;,&quot;collectableTitle&quot;&#x3A;&quot;Dom&#x20;Perignon&quot;,&quot;id&quot;&#x3A;54499,&quot;images&quot;&#x3A;&#x7B;&quot;thumbnail&quot;&#x3A;&quot;submissions&#x5C;&#x2F;2023&#x5C;&#x2F;09&#x5C;&#x2F;64f4e1f45bab2122861027.jpg&quot;&#x7D;,&quot;slug&quot;&#x3A;&quot;dom-perignon&quot;,&quot;title&quot;&#x3A;&quot;Dom&#x20;Perignon&quot;,&quot;createdAt&quot;&#x3A;1694159287,&quot;tags&quot;&#x3A;&#x5B;&quot;Food&#x20;&amp;&#x20;Drink&quot;,&quot;Animation&quot;,&quot;Big&#x20;Background&#x20;Images&quot;,&quot;Clean&quot;,&quot;Flat&#x20;Design&quot;,&quot;Fullscreen&quot;,&quot;Video&quot;&#x5D;,&quot;type&quot;&#x3A;&quot;submission&quot;&#x7D;">
                                    <a aria-label="Dom Perignon" href="sites/dom-perignon.html"
                                        class="figure-rollover__link ">
                                        <img class="figure-rollover__file lazy"
                                            data-controller="lazyload-image"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAQAAADB7vUKAAAAEUlEQVR42mNkIAAYRxXQSwEAC5oADbo22BYAAAAASUVORK5CYII="
                                            data-src="https://assets.awwwards.com/awards/media/cache/thumb_880_660/submissions/2023/09/64f4e1f45bab2122861027.jpg"
                                            alt="Dom Perignon">
                                    </a>
                                    <div class="figure-rollover__hover">
                                        <div class="figure-rollover__center">
                                            <a href="sites/dom-perignon.html"
                                                class="button button--white--rounded">
                                                <svg class="ico--left" width="14" viewBox="0 0 20 17">
                                                    <path
                                                        d="M17.8246 7.4299H0V9.29145H17.8246L12.2047 16L13.6589 16.8982L19.4269 10.0128C20.191 9.10064 20.191 7.61838 19.4269 6.70622L13.809 0L12.3548 0.89587L17.8246 7.4299Z">
                                                    </path>
                                                </svg>
                                                Vote Now
                                            </a>
                                        </div>
                                        <div class="figure-rollover__left">
                                            <div class="figure-rollover__row"><small>WEBSITE</small></div>
                                            <div class="figure-rollover__row">
                                                <h3>Dom Perignon</h3>
                                            </div>
                                        </div>
                                        <div class="figure-rollover__right">
                                            <div class="figure-rollover__bts">
                                                <a href="https://www.domperignon.com/" rel="noopener nofollow"
                                                    target="_blank" class="figure-rollover__bt">
                                                    <svg width="14" height="14" viewBox="0 0 14 14">
                                                        <path
                                                            d="M10.8101 1.96222L0.726954 12.0453L1.66171 12.9801L11.7448 2.89698L11.9344 9.4447L13.208 9.07311L13.0134 2.35278C12.9877 1.46249 12.2434 0.718185 11.3531 0.692412L4.80762 0.502924L4.43487 1.77539L10.8101 1.96222Z"
                                                            fill="white" stroke="white"
                                                            stroke-width="0.542084" />
                                                    </svg>
                                                </a>
                                                <span class="figure-rollover__bt"
                                                    data-action="click->collectable#collect">
                                                    <svg width="15" height="18" viewBox="0 0 15 18">
                                                        <path
                                                            d="M11.7746 1.00195H3.21618C1.99236 1.00195 0.996094 2.07031 0.996094 3.38268V14.6912C0.996094 15.7744 1.44566 16.5511 2.26154 16.8755C2.47384 16.9603 2.70001 17.002 2.92896 17.002C3.14403 17.002 3.36188 16.9648 3.57278 16.8889C3.78369 16.813 4.24436 16.566 4.38034 16.4916L7.4954 14.2299H7.49678L8.48611 13.5112L7.81592 13.0246L7.49401 12.7925L3.84613 15.4456C3.60608 15.575 3.30776 15.7268 3.21896 15.7595C2.95949 15.8532 2.74996 15.7982 2.64867 15.758C2.39613 15.6568 2.10614 15.4441 2.10614 14.6882V3.37971C2.10614 2.72352 2.60427 2.18934 3.21618 2.18934H11.7746C12.3865 2.18934 12.8847 2.72352 12.8847 3.37971V14.6882C12.8847 15.4441 12.5947 15.6568 12.3421 15.758C12.2408 15.7982 12.0313 15.8532 11.7718 15.7595C11.683 15.7283 11.3847 15.575 11.1447 15.4456L9.92639 14.5587L8.93707 15.2774L10.5508 16.4514L10.6118 16.4901C10.7478 16.5645 11.2085 16.8115 11.4194 16.8874C11.8523 17.0436 12.3172 17.0377 12.7306 16.874C13.5465 16.5481 13.9961 15.7729 13.9961 14.6897V3.38119C13.9947 2.0703 12.9984 1.00195 11.7746 1.00195Z"
                                                            fill="white" stroke="white"
                                                            stroke-width="0.542084" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="figure-rollover__fixed-left">

                                    </div>
                                </figure>



                                <div class="card-slide__info">
                                    <div class="card-slide__row">
                                        <h3 class="card-slide__title">
                                            <a href="sites/dom-perignon.html">Dom Perignon</a>
                                        </h3>
                                        <div class="card-slide__data">
                                            <small>by</small>

                                            <div class="users-credits is-large">
                                                <ul class="users-credits__details">
                                                    <li>
                                                        <div class="users-credits__item">
                                                            <figure class="avatar-name ">
                                                                <a class="avatar-name__link"
                                                                    href="Numbered/index.html"
                                                                    aria-label="Numbered">
                                                                    <img class="avatar-name__img"
                                                                        src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/avatar/805325/5e78a075320cf632068037.png"
                                                                        width="32" height="32"
                                                                        alt="Numbered" />
                                                                    <figcaption class="avatar-name__name">
                                                                        <strong
                                                                            class="link-underlined ">Numbered</strong>
                                                                        <sup>PRO</sup>
                                                                    </figcaption>
                                                                </a>
                                                            </figure>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="swiper-slide">

                            <div class="card-slide">


                                <figure class="figure-rollover js-collectable is-large"
                                    data-controller="collectable"
                                    data-collectable-model-value="&#x7B;&quot;collectableIdentifier&quot;&#x3A;&quot;tvinenko-a-t-ko-portfolio&quot;,&quot;collectableImage&quot;&#x3A;&quot;submissions&#x5C;&#x2F;2023&#x5C;&#x2F;09&#x5C;&#x2F;64f389727d0f4705660468.jpg&quot;,&quot;collectableTitle&quot;&#x3A;&quot;Tvinenko&#x20;A.&#x20;&#x5B;T-KO&#x5D;&#x20;Portfolio&quot;,&quot;id&quot;&#x3A;54490,&quot;images&quot;&#x3A;&#x7B;&quot;thumbnail&quot;&#x3A;&quot;submissions&#x5C;&#x2F;2023&#x5C;&#x2F;09&#x5C;&#x2F;64f389727d0f4705660468.jpg&quot;&#x7D;,&quot;slug&quot;&#x3A;&quot;tvinenko-a-t-ko-portfolio&quot;,&quot;title&quot;&#x3A;&quot;Tvinenko&#x20;A.&#x20;&#x5B;T-KO&#x5D;&#x20;Portfolio&quot;,&quot;createdAt&quot;&#x3A;1693985402,&quot;tags&quot;&#x3A;&#x5B;&quot;Design&#x20;Agencies&quot;,&quot;Fashion&quot;,&quot;Web&#x20;&amp;&#x20;Interactive&quot;,&quot;Portfolio&quot;,&quot;Scrolling&quot;,&quot;Unusual&#x20;Navigation&quot;,&quot;Interaction&#x20;Design&quot;,&quot;UI&#x20;design&quot;,&quot;Microinteractions&quot;&#x5D;,&quot;type&quot;&#x3A;&quot;submission&quot;&#x7D;">
                                    <a aria-label="Tvinenko A. [T-KO] Portfolio"
                                        href="sites/tvinenko-a-t-ko-portfolio.html"
                                        class="figure-rollover__link ">
                                        <img class="figure-rollover__file lazy"
                                            data-controller="lazyload-image"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAQAAADB7vUKAAAAEUlEQVR42mNkIAAYRxXQSwEAC5oADbo22BYAAAAASUVORK5CYII="
                                            data-src="https://assets.awwwards.com/awards/media/cache/thumb_880_660/submissions/2023/09/64f389727d0f4705660468.jpg"
                                            alt="Tvinenko A. [T-KO] Portfolio">
                                    </a>
                                    <div class="figure-rollover__hover">
                                        <div class="figure-rollover__center">
                                            <a href="sites/tvinenko-a-t-ko-portfolio.html"
                                                class="button button--white--rounded">
                                                <svg class="ico--left" width="14" viewBox="0 0 20 17">
                                                    <path
                                                        d="M17.8246 7.4299H0V9.29145H17.8246L12.2047 16L13.6589 16.8982L19.4269 10.0128C20.191 9.10064 20.191 7.61838 19.4269 6.70622L13.809 0L12.3548 0.89587L17.8246 7.4299Z">
                                                    </path>
                                                </svg>
                                                Vote Now
                                            </a>
                                        </div>
                                        <div class="figure-rollover__left">
                                            <div class="figure-rollover__row"><small>WEBSITE</small></div>
                                            <div class="figure-rollover__row">
                                                <h3>Tvinenko A. [T-KO] Portfolio</h3>
                                            </div>
                                        </div>
                                        <div class="figure-rollover__right">
                                            <div class="figure-rollover__bts">
                                                <a href="https://t-ko.pro/" rel="noopener nofollow"
                                                    target="_blank" class="figure-rollover__bt">
                                                    <svg width="14" height="14" viewBox="0 0 14 14">
                                                        <path
                                                            d="M10.8101 1.96222L0.726954 12.0453L1.66171 12.9801L11.7448 2.89698L11.9344 9.4447L13.208 9.07311L13.0134 2.35278C12.9877 1.46249 12.2434 0.718185 11.3531 0.692412L4.80762 0.502924L4.43487 1.77539L10.8101 1.96222Z"
                                                            fill="white" stroke="white"
                                                            stroke-width="0.542084" />
                                                    </svg>
                                                </a>
                                                <span class="figure-rollover__bt"
                                                    data-action="click->collectable#collect">
                                                    <svg width="15" height="18" viewBox="0 0 15 18">
                                                        <path
                                                            d="M11.7746 1.00195H3.21618C1.99236 1.00195 0.996094 2.07031 0.996094 3.38268V14.6912C0.996094 15.7744 1.44566 16.5511 2.26154 16.8755C2.47384 16.9603 2.70001 17.002 2.92896 17.002C3.14403 17.002 3.36188 16.9648 3.57278 16.8889C3.78369 16.813 4.24436 16.566 4.38034 16.4916L7.4954 14.2299H7.49678L8.48611 13.5112L7.81592 13.0246L7.49401 12.7925L3.84613 15.4456C3.60608 15.575 3.30776 15.7268 3.21896 15.7595C2.95949 15.8532 2.74996 15.7982 2.64867 15.758C2.39613 15.6568 2.10614 15.4441 2.10614 14.6882V3.37971C2.10614 2.72352 2.60427 2.18934 3.21618 2.18934H11.7746C12.3865 2.18934 12.8847 2.72352 12.8847 3.37971V14.6882C12.8847 15.4441 12.5947 15.6568 12.3421 15.758C12.2408 15.7982 12.0313 15.8532 11.7718 15.7595C11.683 15.7283 11.3847 15.575 11.1447 15.4456L9.92639 14.5587L8.93707 15.2774L10.5508 16.4514L10.6118 16.4901C10.7478 16.5645 11.2085 16.8115 11.4194 16.8874C11.8523 17.0436 12.3172 17.0377 12.7306 16.874C13.5465 16.5481 13.9961 15.7729 13.9961 14.6897V3.38119C13.9947 2.0703 12.9984 1.00195 11.7746 1.00195Z"
                                                            fill="white" stroke="white"
                                                            stroke-width="0.542084" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="figure-rollover__fixed-left">

                                    </div>
                                </figure>



                                <div class="card-slide__info">
                                    <div class="card-slide__row">
                                        <h3 class="card-slide__title">
                                            <a href="sites/tvinenko-a-t-ko-portfolio.html">Tvinenko A. [T-KO]
                                                Portfolio</a>
                                        </h3>
                                        <div class="card-slide__data">
                                            <small>by</small>

                                            <div class="users-credits is-large">
                                                <ul class="users-credits__details">
                                                    <li>
                                                        <div class="users-credits__item">
                                                            <figure class="avatar-name ">
                                                                <a class="avatar-name__link"
                                                                    href="tvinenko/index.html"
                                                                    aria-label="Anton Tvinenko">
                                                                    <img class="avatar-name__img"
                                                                        src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/avatar/2079938/64f389e77eff8175666012.jpg"
                                                                        width="32" height="32"
                                                                        alt="Anton Tvinenko" />
                                                                    <figcaption class="avatar-name__name">
                                                                        <strong class="link-underlined ">Anton
                                                                            Tvinenko</strong>
                                                                    </figcaption>
                                                                </a>
                                                            </figure>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="slider-sites__nav">
                        <div class="button button--small--outline--circle js-slider-sites-prev">
                            <svg width="8" height="12" viewBox="0 0 8 12">
                                <path
                                    d="M3.37879 6.64083L2.74979 6.01183L3.37879 5.37654L7.64341 1.11193L6.75652 0.218751L1.85661 5.11865L0.969726 6.00554L2.4919 7.52772L6.75652 11.7923L7.64341 10.9054L3.37879 6.64083Z" />
                            </svg>
                        </div>

                        <div class="button button--small--outline--circle js-slider-sites-next">
                            <svg width="8" height="13" viewBox="0 0 8 13">
                                <path
                                    d="M5.13292 5.61893L5.76192 6.24793L5.13292 6.88322L0.86831 11.1478L1.7552 12.041L6.6551 7.14111L7.54199 6.25422L6.01981 4.73204L1.7552 0.467429L0.86831 1.35432L5.13292 5.61893Z" />
                            </svg>
                        </div>

                    </div>
                </div>
                <div class="c-view-all">
                    <div class="c-view-all__row  text-medium">
                        <span>Check out all submitted websites</span>
                        <a href="websites/nominees/index.html" class="bt-ico-left">
                            <svg class="ico-svg" viewbox="0 0 20 20" width="16">
                                <use xlink:href="assets/redesign/images/sprite-icons.svg#arrow"></use>
                            </svg>

                            <strong class="link-underlined">View Nominees</strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="anchor-section" id="market">
        <div class="block">
            <div class="inner">
                <div class="c-courses">
                    <div class="c-heading c-heading--small">
                        <div class="c-heading__top">
                            <h2 class="text-default">Market</h2>
                        </div>
                        <div class="c-heading__middle">
                            <h3 class="heading-5">A curated marketplace <br> for digital & physical products
                            </h3>
                        </div>
                    </div>
                    <div class="has-sticker">
                        <ul class="grid-courses grid-courses--one-row">
                            <li>


                                <div class="card-academy">
                                    <figure class="card-academy__figure">
                                        <a aria-label="Uzui Startup Framer Template"
                                            href="market/product_64f6d9e182c93523907027.html">
                                            <img width="439" height="329"
                                                class="card-directory__media lazy"
                                                data-controller="lazyload-image"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAQAAADB7vUKAAAAEUlEQVR42mNkIAAYRxXQSwEAC5oADbo22BYAAAAASUVORK5CYII="
                                                data-src="https://assets.awwwards.com/awards/asset/2023/09/64f6dbffb8c37397793931.png"
                                                alt="Uzui Startup Framer Template">
                                        </a>
                                    </figure>
                                    <div class="card-academy__info">
                                        <div class="card-academy__header">
                                            <div class="card-academy__row card-asset__header">
                                                Digital Product
                                                <h3 class="card-academy__title"><a
                                                        href="market/product_64f6d9e182c93523907027.html">Uzui
                                                        Startup Framer Template</a></h3>
                                            </div>
                                        </div>
                                        <div class="card-academy__footer">
                                            <div class="card-academy__row">
                                                <div class="card-academy__by">
                                                    <small>By</small>
                                                    <strong>Juno studio</strong>
                                                </div>
                                                <div class="box-price">
                                                    <div class="box-price__off">
                                                        <strong class="box-price__percent">from</strong>
                                                        <span class="text-strikethrough box-price__old"></span>
                                                    </div>
                                                    <div class="box-price__total">
                                                        <strong>69</strong><sup>USD</sup>
                                                    </div>
                                                </div>
                                            </div>

                                            <a aria-label="View Product"
                                                href="market/product_64f6d9e182c93523907027.html"
                                                data-controller="preview"
                                                data-preview-url-value="&#x2F;market&#x2F;product_64f6d9e182c93523907027&#x2F;content"
                                                data-action="click->preview#preview">
                                                <div class="card-academy__row">
                                                    <div>
                                                        <div class="box-score">
                                                            <strong>View Product</strong>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <svg class="ico-svg" viewbox="0 0 20 20"
                                                            width="20">
                                                            <use
                                                                xlink:href="assets/redesign/images/sprite-icons.svg#arrow">
                                                            </use>
                                                        </svg>

                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>




                            </li>
                            <li>


                                <div class="card-academy">
                                    <figure class="card-academy__figure">
                                        <a aria-label="Whole Shop Bundle by Craft Supply Co"
                                            href="market/product_64f439a59188c645956941.html">
                                            <img width="439" height="329"
                                                class="card-directory__media lazy"
                                                data-controller="lazyload-image"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAQAAADB7vUKAAAAEUlEQVR42mNkIAAYRxXQSwEAC5oADbo22BYAAAAASUVORK5CYII="
                                                data-src="https://assets.awwwards.com/awards/asset/2023/09/64f43e2ab1deb046557533.png"
                                                alt="Whole Shop Bundle by Craft Supply Co">
                                        </a>
                                    </figure>
                                    <div class="card-academy__info">
                                        <div class="card-academy__header">
                                            <div class="card-academy__row card-asset__header">
                                                Digital Product
                                                <h3 class="card-academy__title"><a
                                                        href="market/product_64f439a59188c645956941.html">Whole
                                                        Shop Bundle by Craft Supply Co</a></h3>
                                            </div>
                                        </div>
                                        <div class="card-academy__footer">
                                            <div class="card-academy__row">
                                                <div class="card-academy__by">
                                                    <small>By</small>
                                                    <strong>Craft Supply Co</strong>
                                                </div>
                                                <div class="box-price">
                                                    <div class="box-price__off">
                                                        <strong class="box-price__percent">from</strong>
                                                        <span class="text-strikethrough box-price__old"></span>
                                                    </div>
                                                    <div class="box-price__total">
                                                        <strong>49</strong><sup>USD</sup>
                                                    </div>
                                                </div>
                                            </div>

                                            <a aria-label="View Product"
                                                href="market/product_64f439a59188c645956941.html"
                                                data-controller="preview"
                                                data-preview-url-value="&#x2F;market&#x2F;product_64f439a59188c645956941&#x2F;content"
                                                data-action="click->preview#preview">
                                                <div class="card-academy__row">
                                                    <div>
                                                        <div class="box-score">
                                                            <strong>View Product</strong>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <svg class="ico-svg" viewbox="0 0 20 20"
                                                            width="20">
                                                            <use
                                                                xlink:href="assets/redesign/images/sprite-icons.svg#arrow">
                                                            </use>
                                                        </svg>

                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>




                            </li>
                            <li>


                                <div class="card-academy">
                                    <figure class="card-academy__figure">
                                        <a aria-label="JetFormBuilder WordPress Form Plugin"
                                            href="market/product_64db3adc061ce079255659.html">
                                            <img width="439" height="329"
                                                class="card-directory__media lazy"
                                                data-controller="lazyload-image"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAQAAADB7vUKAAAAEUlEQVR42mNkIAAYRxXQSwEAC5oADbo22BYAAAAASUVORK5CYII="
                                                data-src="https://assets.awwwards.com/awards/asset/2023/08/64db3fc37541d992452128.png"
                                                alt="JetFormBuilder WordPress Form Plugin">
                                        </a>
                                    </figure>
                                    <div class="card-academy__info">
                                        <div class="card-academy__header">
                                            <div class="card-academy__row card-asset__header">
                                                Digital Product
                                                <h3 class="card-academy__title"><a
                                                        href="market/product_64db3adc061ce079255659.html">JetFormBuilder
                                                        WordPress Form Plugin</a></h3>
                                            </div>
                                        </div>
                                        <div class="card-academy__footer">
                                            <div class="card-academy__row">
                                                <div class="card-academy__by">
                                                    <small>By</small>
                                                    <strong>crocoblock</strong>
                                                </div>
                                                <div class="box-price">
                                                    <div class="box-price__off">
                                                        <strong class="box-price__percent">from</strong>
                                                        <span class="text-strikethrough box-price__old"></span>
                                                    </div>
                                                    <div class="box-price__total">
                                                        <strong>39</strong><sup>USD</sup>
                                                    </div>
                                                </div>
                                            </div>

                                            <a aria-label="View Product"
                                                href="market/product_64db3adc061ce079255659.html"
                                                data-controller="preview"
                                                data-preview-url-value="&#x2F;market&#x2F;product_64db3adc061ce079255659&#x2F;content"
                                                data-action="click->preview#preview">
                                                <div class="card-academy__row">
                                                    <div>
                                                        <div class="box-score">
                                                            <strong>View Product</strong>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <svg class="ico-svg" viewbox="0 0 20 20"
                                                            width="20">
                                                            <use
                                                                xlink:href="assets/redesign/images/sprite-icons.svg#arrow">
                                                            </use>
                                                        </svg>

                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>




                            </li>
                            <li>


                                <div class="card-academy">
                                    <figure class="card-academy__figure">
                                        <a aria-label="JetEngine WordPress Plugin for Elementor, Gutenberg, and Bricks"
                                            href="market/product_64db36b60e5ed300860173.html">
                                            <img width="439" height="329"
                                                class="card-directory__media lazy"
                                                data-controller="lazyload-image"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAQAAADB7vUKAAAAEUlEQVR42mNkIAAYRxXQSwEAC5oADbo22BYAAAAASUVORK5CYII="
                                                data-src="https://assets.awwwards.com/awards/asset/2023/08/64db3a96861df064990914.png"
                                                alt="JetEngine WordPress Plugin for Elementor, Gutenberg, and Bricks">
                                        </a>
                                    </figure>
                                    <div class="card-academy__info">
                                        <div class="card-academy__header">
                                            <div class="card-academy__row card-asset__header">
                                                Digital Product
                                                <h3 class="card-academy__title"><a
                                                        href="market/product_64db36b60e5ed300860173.html">JetEngine
                                                        WordPress Plugin for Elementor, Gutenberg, and
                                                        Bricks</a></h3>
                                            </div>
                                        </div>
                                        <div class="card-academy__footer">
                                            <div class="card-academy__row">
                                                <div class="card-academy__by">
                                                    <small>By</small>
                                                    <strong>crocoblock</strong>
                                                </div>
                                                <div class="box-price">
                                                    <div class="box-price__off">
                                                        <strong class="box-price__percent">from</strong>
                                                        <span class="text-strikethrough box-price__old"></span>
                                                    </div>
                                                    <div class="box-price__total">
                                                        <strong>43</strong><sup>USD</sup>
                                                    </div>
                                                </div>
                                            </div>

                                            <a aria-label="View Product"
                                                href="market/product_64db36b60e5ed300860173.html"
                                                data-controller="preview"
                                                data-preview-url-value="&#x2F;market&#x2F;product_64db36b60e5ed300860173&#x2F;content"
                                                data-action="click->preview#preview">
                                                <div class="card-academy__row">
                                                    <div>
                                                        <div class="box-score">
                                                            <strong>View Product</strong>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <svg class="ico-svg" viewbox="0 0 20 20"
                                                            width="20">
                                                            <use
                                                                xlink:href="assets/redesign/images/sprite-icons.svg#arrow">
                                                            </use>
                                                        </svg>

                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>




                            </li>
                        </ul>
                        <svg class="sticker-svg sticker__2 sc-green-black" viewbox="0 0 100 100"
                            width="100">
                            <use xlink:href="assets/redesign/images/sprite-stickers.svg#one-to-watch"></use>
                        </svg>

                    </div>
                    <div class="c-view-all">
                        <div class="c-view-all__row  text-medium">
                            <span>Browse specially curated products</span>
                            <a href="market/index.html" class="bt-ico-left">
                                <svg class="ico-svg" viewbox="0 0 20 20" width="16">
                                    <use xlink:href="assets/redesign/images/sprite-icons.svg#arrow"></use>
                                </svg>

                                <strong class="link-underlined">View Market</strong>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="anchor-section" id="academy">
        <div class="c-box-float-more">
            <div class="inner">
                <div class="box-float-more style-1">
                    <a href="websites/nominees/index.html" class="item-link"
                        aria-label="View all Courses"></a>
                    <div class="box-float-more__info">
                        <div>View all</div>
                        <div><span>Courses</span></div>
                    </div>
                    <img class="box-float-more__photo" width="60" height="48"
                        src="https://assets.awwwards.com/awards/media/cache/thumb_60_45/course/624ec6012e4be805354024.jpg"
                        alt="View all Courses">
                </div>
            </div>
        </div>
        {{-- <div class="block">
            <div class="inner">
                <div class="c-courses">
                    <div class="c-heading c-heading--small">
                        <div class="c-heading__top">
                            <h2 class="text-default">Academy</h2>
                        </div>
                        <div class="c-heading__middle">
                            <h3 class="heading-5">Learn from the<br>best instructors.</h3>
                        </div>
                    </div>
                    <div class="has-sticker">
                        <ul class="grid-courses grid-courses--one-row">
                            <li>
                                <div class="card-course card-academy">
                                    <div class="swiper js-slider-course">
                                        <div class="swiper-wrapper">
                                            <figure class="card-course__figure">
                                                <a href="academy/course/unleashing-your-best.html">
                                                    <img width="439" height="263"
                                                        class="card-course__img lazy"
                                                        data-controller="lazyload-image"
                                                        src="data:image/svg+xml,%3Csvg xmlns=&#039;http://www.w3.org/2000/svg&#039; viewBox=&#039;0 0 439 263&#039; %3E%3C/svg%3E"
                                                        data-src="https://assets.awwwards.com/awards/media/cache/academy_thumb/course/624ec6012e4be805354024.jpg"
                                                        alt="Unleashing Your Best: How to achieve your goals without sacrificing your life">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="card-course__content">
                                        <h3 class="card-course__title"><a
                                                href="academy/course/unleashing-your-best.html">Unleashing
                                                Your Best: How to achieve your goals without sacrificing your
                                                life</a></h3>
                                    </div>
                                    <div class="card-course__footer hidden-sm">
                                        <div class="card-course__row">
                                            <strong>Instructor</strong>
                                            <span>
                                                Victor Work
                                            </span>
                                        </div>
                                        <div class="card-academy__row">
                                            <div>
                                                <div class="box-score">
                                                    <div class="box-score__info" style="text-align: left">
                                                        <strong>Score</strong> 4/5
                                                    </div>
                                                    <div class="box-score__wrap">
                                                        <div class="box-score__bar" style="width: 80%">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div>
                                                <a aria-label="View Course"
                                                    href="academy/course/unleashing-your-best.html">
                                                    <svg class="ico-svg" viewbox="0 0 20 20"
                                                        width="20">
                                                        <use
                                                            xlink:href="assets/redesign/images/sprite-icons.svg#arrow">
                                                        </use>
                                                    </svg>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                            </li>
                            <li>
                                <div class="card-course card-academy">
                                    <div class="swiper js-slider-course">
                                        <div class="swiper-wrapper">
                                            <figure class="card-course__figure">
                                                <a
                                                    href="academy/course/building-an-immersive-creative-website-from-scratch-without-frameworks.html">
                                                    <img width="439" height="263"
                                                        class="card-course__img lazy"
                                                        data-controller="lazyload-image"
                                                        src="data:image/svg+xml,%3Csvg xmlns=&#039;http://www.w3.org/2000/svg&#039; viewBox=&#039;0 0 439 263&#039; %3E%3C/svg%3E"
                                                        data-src="https://assets.awwwards.com/awards/media/cache/academy_thumb/course/60d1ec9304e32783301759.jpg"
                                                        alt="Building an immersive creative website from scratch without frameworks">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="card-course__content">
                                        <h3 class="card-course__title"><a
                                                href="academy/course/building-an-immersive-creative-website-from-scratch-without-frameworks.html">Building
                                                an immersive creative website from scratch without
                                                frameworks</a></h3>
                                    </div>
                                    <div class="card-course__footer hidden-sm">
                                        <div class="card-course__row">
                                            <strong>Instructor</strong>
                                            <span>
                                                Luis Henrique Bizarro
                                            </span>
                                        </div>
                                        <div class="card-academy__row">
                                            <div>
                                                <div class="box-score">
                                                    <div class="box-score__info" style="text-align: left">
                                                        <strong>Score</strong> 4.5/5
                                                    </div>
                                                    <div class="box-score__wrap">
                                                        <div class="box-score__bar" style="width: 90%">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div>
                                                <a aria-label="View Course"
                                                    href="academy/course/building-an-immersive-creative-website-from-scratch-without-frameworks.html">
                                                    <svg class="ico-svg" viewbox="0 0 20 20"
                                                        width="20">
                                                        <use
                                                            xlink:href="assets/redesign/images/sprite-icons.svg#arrow">
                                                        </use>
                                                    </svg>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                            </li>
                            <li>
                                <div class="card-course card-academy">
                                    <div class="swiper js-slider-course">
                                        <div class="swiper-wrapper">
                                            <figure class="card-course__figure">
                                                <a
                                                    href="academy/course/create-award-winning-animation-and-interaction-design-in-webflow.html">
                                                    <img width="439" height="263"
                                                        class="card-course__img lazy"
                                                        data-controller="lazyload-image"
                                                        src="data:image/svg+xml,%3Csvg xmlns=&#039;http://www.w3.org/2000/svg&#039; viewBox=&#039;0 0 439 263&#039; %3E%3C/svg%3E"
                                                        data-src="https://assets.awwwards.com/awards/media/cache/academy_thumb/course/6082a01226b89219847516.jpg"
                                                        alt="Create Award Winning Animation and Interaction Design In Webflow">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="card-course__content">
                                        <h3 class="card-course__title"><a
                                                href="academy/course/create-award-winning-animation-and-interaction-design-in-webflow.html">Create
                                                Award Winning Animation and Interaction Design In Webflow</a>
                                        </h3>
                                    </div>
                                    <div class="card-course__footer hidden-sm">
                                        <div class="card-course__row">
                                            <strong>Instructor</strong>
                                            <span>
                                                Joseph Berry
                                            </span>
                                        </div>
                                        <div class="card-academy__row">
                                            <div>
                                                <div class="box-score">
                                                    <div class="box-score__info" style="text-align: left">
                                                        <strong>Score</strong> 4.5/5
                                                    </div>
                                                    <div class="box-score__wrap">
                                                        <div class="box-score__bar" style="width: 90%">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div>
                                                <a aria-label="View Course"
                                                    href="academy/course/create-award-winning-animation-and-interaction-design-in-webflow.html">
                                                    <svg class="ico-svg" viewbox="0 0 20 20"
                                                        width="20">
                                                        <use
                                                            xlink:href="assets/redesign/images/sprite-icons.svg#arrow">
                                                        </use>
                                                    </svg>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                            </li>
                            <li>
                                <div class="card-course card-academy">
                                    <div class="swiper js-slider-course">
                                        <div class="swiper-wrapper">
                                            <figure class="card-course__figure">
                                                <a
                                                    href="academy/course/creative-portfolios-a-powerful-visual-language-for-brands-online-course.html">
                                                    <img width="439" height="263"
                                                        class="card-course__img lazy"
                                                        data-controller="lazyload-image"
                                                        src="data:image/svg+xml,%3Csvg xmlns=&#039;http://www.w3.org/2000/svg&#039; viewBox=&#039;0 0 439 263&#039; %3E%3C/svg%3E"
                                                        data-src="https://assets.awwwards.com/awards/media/cache/academy_thumb/course/619f4b4794213339643255.jpg"
                                                        alt="Creative Portfolios: A powerful visual language for brands">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="card-course__content">
                                        <h3 class="card-course__title"><a
                                                href="academy/course/creative-portfolios-a-powerful-visual-language-for-brands-online-course.html">Creative
                                                Portfolios: A powerful visual language for brands</a></h3>
                                    </div>
                                    <div class="card-course__footer hidden-sm">
                                        <div class="card-course__row">
                                            <strong>Instructor</strong>
                                            <span>
                                                Niccolò Miranda
                                            </span>
                                        </div>
                                        <div class="card-academy__row">
                                            <div>
                                                <div class="box-score">
                                                    <div class="box-score__info" style="text-align: left">
                                                        <strong>Score</strong> 4.5/5
                                                    </div>
                                                    <div class="box-score__wrap">
                                                        <div class="box-score__bar" style="width: 90%">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div>
                                                <a aria-label="View Course"
                                                    href="academy/course/creative-portfolios-a-powerful-visual-language-for-brands-online-course.html">
                                                    <svg class="ico-svg" viewbox="0 0 20 20"
                                                        width="20">
                                                        <use
                                                            xlink:href="assets/redesign/images/sprite-icons.svg#arrow">
                                                        </use>
                                                    </svg>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                            </li>
                        </ul>
                        <svg class="sticker-svg sticker__2 sc-green-black" viewbox="0 0 100 100"
                            width="100">
                            <use xlink:href="assets/redesign/images/sprite-stickers.svg#one-to-watch"></use>
                        </svg>

                    </div>
                    <div class="c-view-all">
                        <div class="c-view-all__row  text-medium">
                            <span>Choose from over <strong>hundreds</strong> of courses</span>
                            <a href="academy/index.html" class="bt-ico-left">
                                <svg class="ico-svg" viewbox="0 0 20 20" width="16">
                                    <use xlink:href="assets/redesign/images/sprite-icons.svg#arrow"></use>
                                </svg>

                                <strong class="link-underlined">View Academy</strong>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>

    {{-- <div class="anchor-section" id="directory">
        <div class="block">

            <div class="inner">
                <div class="c-heading text-center">
                    <div class="c-heading__top">
                        <h2 class="text-default">Directory</h2>
                    </div>
                    <div class="c-heading__middle">
                        <h3 class="heading-1">
                            <span class="has-sticker">
                                W.CREATORS
                                <svg class="sticker-svg sticker__3 sc-purple-green" viewbox="0 0 100 100"
                                    width="100">
                                    <use xlink:href="assets/redesign/images/sprite-stickers.svg#asterisk">
                                    </use>
                                </svg>

                            </span>
                        </h3>
                    </div>
                    <div class="c-heading__bottom">
                        <div class="c-heading__short-desc">
                            <span>Active creators in your country.</span>
                        </div>
                    </div>
                </div>
                <ul class="grid-directory grid-directory--pro">
                    <li>

                        <div class="card-directory-sp">
                            <div class="card-directory-sp__header">
                                <figure class="circle-avatar ">
                                    <a aria-label="Immersive Garden" href="immersivegarden/index.html">
                                        <img class="circle-avatar__img"
                                            src="https://assets.awwwards.com/awards/media/cache/thumb_user_retina/avatar/207/560d58029b7c5.jpeg"
                                            width="52" height="52" alt="Immersive Garden">
                                    </a>
                                </figure>
                                <div class="swiper" data-controller="swiper"
                                    data-swiper-configuration-value="card_directory">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img width="278" height="209" class="lazy"
                                                data-controller="lazyload-image"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAQAAADB7vUKAAAAEUlEQVR42mNkIAAYRxXQSwEAC5oADbo22BYAAAAASUVORK5CYII="
                                                data-src="https://assets.awwwards.com/awards/media/cache/thumb_440_330/submissions/2023/06/648ae5911456b165547357.png"
                                                alt="Immersive Garden">
                                        </div>
                                        <div class="swiper-slide">
                                            <img width="278" height="209" class="lazy"
                                                data-controller="lazyload-image"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAQAAADB7vUKAAAAEUlEQVR42mNkIAAYRxXQSwEAC5oADbo22BYAAAAASUVORK5CYII="
                                                data-src="https://assets.awwwards.com/awards/media/cache/thumb_440_330/submissions/2023/06/648737ea4ef20511187443.png"
                                                alt="Immersive Garden">
                                        </div>
                                        <div class="swiper-slide">
                                            <img width="278" height="209" class="lazy"
                                                data-controller="lazyload-image"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAQAAADB7vUKAAAAEUlEQVR42mNkIAAYRxXQSwEAC5oADbo22BYAAAAASUVORK5CYII="
                                                data-src="https://assets.awwwards.com/awards/media/cache/thumb_440_330/submissions/2023/05/646ccf635d64f207238778.png"
                                                alt="Immersive Garden">
                                        </div>
                                        <div class="swiper-slide">
                                            <img width="278" height="209" class="lazy"
                                                data-controller="lazyload-image"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAQAAADB7vUKAAAAEUlEQVR42mNkIAAYRxXQSwEAC5oADbo22BYAAAAASUVORK5CYII="
                                                data-src="https://assets.awwwards.com/awards/media/cache/thumb_440_330/submissions/2023/04/6441243b1dde7385395024.jpg"
                                                alt="Immersive Garden">
                                        </div>
                                        <div class="swiper-slide">
                                            <img width="278" height="209" class="lazy"
                                                data-controller="lazyload-image"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAQAAADB7vUKAAAAEUlEQVR42mNkIAAYRxXQSwEAC5oADbo22BYAAAAASUVORK5CYII="
                                                data-src="https://assets.awwwards.com/awards/media/cache/thumb_440_330/submissions/2023/04/643031ead8cd4599218801.jpg"
                                                alt="Immersive Garden">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                            <div class="card-directory-sp__content">
                                <div class="card-directory-sp__left">
                                    <p>International</p>
                                    <h2 class="card-directory-sp__title">
                                        <a href="immersivegarden/index.html">
                                            Immersive Garden
                                        </a>
                                    </h2>
                                </div>
                                <div class="card-directory-sp__right">
                                    <div class="badget-reviews">
                                        <span class="badget-reviews__label">Works</span>
                                        <strong class="badget-reviews__number">72</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="card-directory-sp__footer">
                                <div class="card-directory-sp__left">
                                    <a href="http://www.immersive-g.com/" class="url"
                                        rel="nofollow noopener noreferrer"
                                        target="_blank">immersive-g.com</a>
                                </div>
                                <div class="card-directory-sp__right">71 awards</div>
                            </div>
                        </div>

                    </li>
                    <li>

                        <div class="card-directory-sp">
                            <div class="card-directory-sp__header">
                                <figure class="circle-avatar ">
                                    <a aria-label="Adchitects" href="adchitects/index.html">
                                        <img class="circle-avatar__img"
                                            src="https://assets.awwwards.com/awards/media/cache/thumb_user_retina/avatar/683701/5ff849fa967af168929537.png"
                                            width="52" height="52" alt="Adchitects">
                                    </a>
                                </figure>
                                <div class="swiper" data-controller="swiper"
                                    data-swiper-configuration-value="card_directory">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img width="278" height="209" class="lazy"
                                                data-controller="lazyload-image"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAQAAADB7vUKAAAAEUlEQVR42mNkIAAYRxXQSwEAC5oADbo22BYAAAAASUVORK5CYII="
                                                data-src="https://assets.awwwards.com/awards/media/cache/thumb_440_330/submissions/2023/07/64a6e9a21089f834155071.jpg"
                                                alt="Adchitects">
                                        </div>
                                        <div class="swiper-slide">
                                            <img width="278" height="209" class="lazy"
                                                data-controller="lazyload-image"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAQAAADB7vUKAAAAEUlEQVR42mNkIAAYRxXQSwEAC5oADbo22BYAAAAASUVORK5CYII="
                                                data-src="https://assets.awwwards.com/awards/media/cache/thumb_440_330/submissions/2022/12/63936d34c126e207568194.png"
                                                alt="Adchitects">
                                        </div>
                                        <div class="swiper-slide">
                                            <img width="278" height="209" class="lazy"
                                                data-controller="lazyload-image"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAQAAADB7vUKAAAAEUlEQVR42mNkIAAYRxXQSwEAC5oADbo22BYAAAAASUVORK5CYII="
                                                data-src="https://assets.awwwards.com/awards/media/cache/thumb_440_330/submissions/2022/11/6384d0d099711786698581.png"
                                                alt="Adchitects">
                                        </div>
                                        <div class="swiper-slide">
                                            <img width="278" height="209" class="lazy"
                                                data-controller="lazyload-image"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAQAAADB7vUKAAAAEUlEQVR42mNkIAAYRxXQSwEAC5oADbo22BYAAAAASUVORK5CYII="
                                                data-src="https://assets.awwwards.com/awards/media/cache/thumb_440_330/submissions/2022/11/6374caf0f1a63421219459.png"
                                                alt="Adchitects">
                                        </div>
                                        <div class="swiper-slide">
                                            <img width="278" height="209" class="lazy"
                                                data-controller="lazyload-image"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAQAAADB7vUKAAAAEUlEQVR42mNkIAAYRxXQSwEAC5oADbo22BYAAAAASUVORK5CYII="
                                                data-src="https://assets.awwwards.com/awards/media/cache/thumb_440_330/submissions/2022/10/635299273f451503238099.jpg"
                                                alt="Adchitects">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                            <div class="card-directory-sp__content">
                                <div class="card-directory-sp__left">
                                    <p>International</p>
                                    <h2 class="card-directory-sp__title">
                                        <a href="adchitects/index.html">
                                            Adchitects
                                        </a>
                                    </h2>
                                </div>
                                <div class="card-directory-sp__right">
                                    <div class="badget-reviews">
                                        <span class="badget-reviews__label">Works</span>
                                        <strong class="badget-reviews__number">07</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="card-directory-sp__footer">
                                <div class="card-directory-sp__left">
                                    <a href="https://bit.ly/awwwards-adchitects" class="url"
                                        rel="nofollow noopener noreferrer" target="_blank">bit.ly</a>
                                </div>
                                <div class="card-directory-sp__right">5 awards</div>
                            </div>
                        </div>

                    </li>
                    <li>

                        <div class="card-directory-sp">
                            <div class="card-directory-sp__header">
                                <figure class="circle-avatar ">
                                    <a aria-label="OHMY" href="ohmystudio/index.html">
                                        <img class="circle-avatar__img"
                                            src="https://assets.awwwards.com/awards/media/cache/thumb_user_retina/avatar/320439/63c800df96098035908152.png"
                                            width="52" height="52" alt="OHMY">
                                    </a>
                                </figure>
                                <div class="swiper" data-controller="swiper"
                                    data-swiper-configuration-value="card_directory">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img width="278" height="209" class="lazy"
                                                data-controller="lazyload-image"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAQAAADB7vUKAAAAEUlEQVR42mNkIAAYRxXQSwEAC5oADbo22BYAAAAASUVORK5CYII="
                                                data-src="https://assets.awwwards.com/awards/media/cache/thumb_440_330/submissions/2023/05/645d42da7e122712980258.png"
                                                alt="OHMY">
                                        </div>
                                        <div class="swiper-slide">
                                            <img width="278" height="209" class="lazy"
                                                data-controller="lazyload-image"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAQAAADB7vUKAAAAEUlEQVR42mNkIAAYRxXQSwEAC5oADbo22BYAAAAASUVORK5CYII="
                                                data-src="https://assets.awwwards.com/awards/media/cache/thumb_440_330/submissions/2023/02/63e2762d3af04608989578.png"
                                                alt="OHMY">
                                        </div>
                                        <div class="swiper-slide">
                                            <img width="278" height="209" class="lazy"
                                                data-controller="lazyload-image"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAQAAADB7vUKAAAAEUlEQVR42mNkIAAYRxXQSwEAC5oADbo22BYAAAAASUVORK5CYII="
                                                data-src="https://assets.awwwards.com/awards/media/cache/thumb_440_330/submissions/2023/02/63e269f2602d5656848284.png"
                                                alt="OHMY">
                                        </div>
                                        <div class="swiper-slide">
                                            <img width="278" height="209" class="lazy"
                                                data-controller="lazyload-image"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAQAAADB7vUKAAAAEUlEQVR42mNkIAAYRxXQSwEAC5oADbo22BYAAAAASUVORK5CYII="
                                                data-src="https://assets.awwwards.com/awards/media/cache/thumb_440_330/submissions/2016/11/582ae98761f5d.png"
                                                alt="OHMY">
                                        </div>
                                        <div class="swiper-slide">
                                            <img width="278" height="209" class="lazy"
                                                data-controller="lazyload-image"
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAQAAADB7vUKAAAAEUlEQVR42mNkIAAYRxXQSwEAC5oADbo22BYAAAAASUVORK5CYII="
                                                data-src="https://assets.awwwards.com/awards/media/cache/thumb_440_330/submissions/2015/04/5526617fc0b13.png"
                                                alt="OHMY">
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                            <div class="card-directory-sp__content">
                                <div class="card-directory-sp__left">
                                    <p>International</p>
                                    <h2 class="card-directory-sp__title">
                                        <a href="ohmystudio/index.html">
                                            OHMY
                                        </a>
                                    </h2>
                                </div>
                                <div class="card-directory-sp__right">
                                    <div class="badget-reviews">
                                        <span class="badget-reviews__label">Works</span>
                                        <strong class="badget-reviews__number">05</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="card-directory-sp__footer">
                                <div class="card-directory-sp__left">
                                    <a href="http://www.ohmy.studio/" class="url"
                                        rel="nofollow noopener noreferrer" target="_blank">ohmy.studio</a>
                                </div>
                                <div class="card-directory-sp__right">5 awards</div>
                            </div>
                        </div>

                    </li>
                </ul>
                <div class="box-table">
                    <table class="tb-dotteds">
                        <thead>
                            <tr>
                                <th align="left" width="25%">Name</th>
                                <th align="left" width="20%" class="hidden-sm">Profile</th>
                                <th align="left" width="15%" class="hidden-sm">Awards</th>
                                <th align="left" width="30%" class="hidden-sm">Categories</th>
                                <th align="right"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td align="left">
                                    <div class="card-site-mini">

                                        <div class="users-credits ">
                                            <ul class="users-credits__details">
                                                <li>
                                                    <div class="users-credits__item">
                                                        <figure class="avatar-name ">
                                                            <a class="avatar-name__link"
                                                                href="RUYA/index.html" aria-label="RUYA">
                                                                <img class="avatar-name__img"
                                                                    src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/avatar/373532/566183a516d15.jpeg"
                                                                    width="32" height="32"
                                                                    alt="RUYA" />
                                                                <figcaption class="avatar-name__name">
                                                                    <strong
                                                                        class="link-underlined text-bold">RUYA</strong>
                                                                </figcaption>
                                                            </a>
                                                        </figure>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </td>
                                <td align="left" class="hidden-sm">Agency</td>
                                <td align="left" class="hidden-sm">5</td>
                                <td align="left" class="hidden-sm">
                                    <div class="text-truncated">
                                        Web Design </div>
                                </td>
                                <td align="right">
                                    <div class="tb-dotteds__bts">
                                        <a href="RUYA/index.html"
                                            class="button button--small--outline--rounded">View</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    <div class="card-site-mini">

                                        <div class="users-credits ">
                                            <ul class="users-credits__details">
                                                <li>
                                                    <div class="users-credits__item">
                                                        <figure class="avatar-name ">
                                                            <a class="avatar-name__link"
                                                                href="thunderfoot/index.html"
                                                                aria-label="Thunderfoot">
                                                                <img class="avatar-name__img"
                                                                    src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/avatar/1383118/61dc444fe40ba112073939.jpg"
                                                                    width="32" height="32"
                                                                    alt="Thunderfoot" />
                                                                <figcaption class="avatar-name__name">
                                                                    <strong
                                                                        class="link-underlined text-bold">Thunderfoot</strong>
                                                                    <sup>INT</sup>
                                                                </figcaption>
                                                            </a>
                                                        </figure>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </td>
                                <td align="left" class="hidden-sm">Agency</td>
                                <td align="left" class="hidden-sm">2</td>
                                <td align="left" class="hidden-sm">
                                    <div class="text-truncated">
                                        Web Design , Web Development , Graphic Design , SEO/SEM , UX/UI </div>
                                </td>
                                <td align="right">
                                    <div class="tb-dotteds__bts">
                                        <a href="thunderfoot/index.html"
                                            class="button button--small--outline--rounded">View</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    <div class="card-site-mini">

                                        <div class="users-credits ">
                                            <ul class="users-credits__details">
                                                <li>
                                                    <div class="users-credits__item">
                                                        <figure class="avatar-name ">
                                                            <a class="avatar-name__link"
                                                                href="baunfire/index.html"
                                                                aria-label="Baunfire">
                                                                <img class="avatar-name__img"
                                                                    src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/avatar/543478/63bc8a620e305171737419.png"
                                                                    width="32" height="32"
                                                                    alt="Baunfire" />
                                                                <figcaption class="avatar-name__name">
                                                                    <strong
                                                                        class="link-underlined text-bold">Baunfire</strong>
                                                                    <sup>INT</sup>
                                                                </figcaption>
                                                            </a>
                                                        </figure>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </td>
                                <td align="left" class="hidden-sm">Agency</td>
                                <td align="left" class="hidden-sm">17</td>
                                <td align="left" class="hidden-sm">
                                    <div class="text-truncated">
                                        Web Design , Web Development , UX/UI , Interactive , Art Direction
                                    </div>
                                </td>
                                <td align="right">
                                    <div class="tb-dotteds__bts">
                                        <a href="baunfire/index.html"
                                            class="button button--small--outline--rounded">View</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    <div class="card-site-mini">

                                        <div class="users-credits ">
                                            <ul class="users-credits__details">
                                                <li>
                                                    <div class="users-credits__item">
                                                        <figure class="avatar-name ">
                                                            <a class="avatar-name__link"
                                                                href="ScrumLaunch/index.html"
                                                                aria-label="ScrumLaunch">
                                                                <img class="avatar-name__img"
                                                                    src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/avatar/1054652/63e144f3abc3b551463121.png"
                                                                    width="32" height="32"
                                                                    alt="ScrumLaunch" />
                                                                <figcaption class="avatar-name__name">
                                                                    <strong
                                                                        class="link-underlined text-bold">ScrumLaunch</strong>
                                                                    <sup>INT</sup>
                                                                </figcaption>
                                                            </a>
                                                        </figure>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </td>
                                <td align="left" class="hidden-sm">Agency</td>
                                <td align="left" class="hidden-sm">0</td>
                                <td align="left" class="hidden-sm">
                                    <div class="text-truncated">
                                        Web Development , Graphic Design , UX/UI , App Development , Other
                                    </div>
                                </td>
                                <td align="right">
                                    <div class="tb-dotteds__bts">
                                        <a href="ScrumLaunch/index.html"
                                            class="button button--small--outline--rounded">View</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="c-view-all">
                    <div class="c-view-all__row text-medium">
                        <span>Connect with over <strong> 5,077
                            </strong> Agencies and Professionals</span>
                        <a href="directory/index.html" class="bt-ico-left">
                            <svg class="ico-svg" viewbox="0 0 20 20" width="16">
                                <use xlink:href="assets/redesign/images/sprite-icons.svg#arrow"></use>
                            </svg>

                            <strong class="link-underlined">View Directory</strong>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div> --}}





    <div class="anchor-section" id="element_of_the_week">
        <div class="c-box-float-more">
            <div class="inner">
                <div class="box-float-more style-1">
                    <a href="elements/index.html" class="item-link" aria-label="View all Elements"></a>
                    <div class="box-float-more__info">
                        <div>View all</div>
                        <div><span>Elements</span></div>
                    </div>
                    <img class="box-float-more__photo" width="60" height="48"
                        src="https://assets.awwwards.com/awards/media/cache/thumb_60_45/element/2023/08/64f053dba626c069270583_static.jpeg"
                        alt="View all Elements">
                </div>
            </div>
        </div>

        {{-- <div class="block">
            <div class="inner has-sticker">
                <svg class="sticker-svg sc-purple-green sticker__6" viewbox="0 0 100 49" width="220">
                    <use xlink:href="assets/redesign/images/sprite-stickers.svg#ribbon-inspire"></use>
                </svg>

                <div class="l-news l-news--dark">
                    <div class="c-elements text-center">
                        <div class="c-heading text-center">
                            <div class="c-heading__top">
                                <h2 class="text-default">Inspirational elements</h2>
                            </div>
                            <div class="c-heading__middle">
                                <h3 class="heading-1 text-uppercase">ELEMENT OF<br>THE DAY</h3>
                            </div>
                        </div>
                        <div class="card-slide">




                            <figure class="figure-rollover js-collectable is-large"
                                data-controller="collectable"
                                data-collectable-model-value="&#x7B;&quot;collectableIdentifier&quot;&#x3A;&quot;94424311-cc8b-4c32-bfbe-a78d21c3e1c1&quot;,&quot;collectableImage&quot;&#x3A;&quot;element&#x5C;&#x2F;2023&#x5C;&#x2F;08&#x5C;&#x2F;64f053dba626c069270583.mp4&quot;,&quot;collectableTitle&quot;&#x3A;&quot;Cursor&#x20;interaction&#x20;on&#x20;the&#x20;logo&#x20;in&#x20;the&#x20;footer&quot;,&quot;id&quot;&#x3A;&quot;94424311-cc8b-4c32-bfbe-a78d21c3e1c1&quot;,&quot;user&quot;&#x3A;&#x7B;&quot;image&quot;&#x3A;&quot;avatar&#x5C;&#x2F;68654&#x5C;&#x2F;51adabf540344.jpeg&quot;,&quot;username&quot;&#x3A;&quot;claudioguglieri&quot;,&quot;displayName&quot;&#x3A;&quot;Claudio&#x20;Guglieri&quot;,&quot;type&quot;&#x3A;&quot;user&quot;&#x7D;,&quot;main_image&quot;&#x3A;&quot;element&#x5C;&#x2F;2023&#x5C;&#x2F;08&#x5C;&#x2F;64f053dba626c069270583.mp4&quot;,&quot;tags&quot;&#x3A;&#x5B;&quot;interaction&quot;,&quot;mouse&quot;,&quot;footer&quot;,&quot;logo&quot;&#x5D;,&quot;title&quot;&#x3A;&quot;Cursor&#x20;interaction&#x20;on&#x20;the&#x20;logo&#x20;in&#x20;the&#x20;footer&quot;,&quot;createdAt&quot;&#x3A;1693471673,&quot;type&quot;&#x3A;&quot;element&quot;&#x7D;">
                                <a aria-label="Cursor interaction on the logo in the footer"
                                    href="inspiration/cursor-interaction-on-the-logo-in-the-footer.html"
                                    class="figure-rollover__link " data-controller="preview"
                                    data-preview-url-value="&#x2F;inspiration&#x2F;cursor-interaction-on-the-logo-in-the-footer"
                                    data-action="click->preview#preview">
                                    <video class="figure-rollover__file lazy"
                                        poster="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAQAAADB7vUKAAAAEUlEQVR42mNkIAAYRxXQSwEAC5oADbo22BYAAAAASUVORK5CYII="
                                        data-poster="https://assets.awwwards.com/awards/element/2023/08/64f053dba626c069270583_static.jpeg"
                                        data-controller="lazyload-video video-hover" width="417"
                                        height="298" muted loop preload="none">
                                        <source src="https://assets.awwwards.com/assets/videos/blank.mp4"
                                            data-src="https://assets.awwwards.com/awards/element/2023/08/64f053dba626c069270583.mp4"
                                            type="video/mp4">
                                    </video>
                                </a>
                                <div class="figure-rollover__hover">
                                    <div class="figure-rollover__left">
                                        <div class="figure-rollover__row"><small>ELEMENT</small></div>
                                        <div class="figure-rollover__row">
                                            <h3>Cursor interaction on the logo in the footer</h3>
                                        </div>
                                    </div>
                                    <div class="figure-rollover__right">
                                        <div class="figure-rollover__bts">
                                            <a href="https://opalcamera.com/" rel="noopener nofollow"
                                                target="_blank" class="figure-rollover__bt">
                                                <svg width="14" height="14" viewBox="0 0 14 14">
                                                    <path
                                                        d="M10.8101 1.96222L0.726954 12.0453L1.66171 12.9801L11.7448 2.89698L11.9344 9.4447L13.208 9.07311L13.0134 2.35278C12.9877 1.46249 12.2434 0.718185 11.3531 0.692412L4.80762 0.502924L4.43487 1.77539L10.8101 1.96222Z"
                                                        fill="white" stroke="white"
                                                        stroke-width="0.542084" />
                                                </svg>
                                            </a>
                                            <span class="figure-rollover__bt"
                                                data-action="click->collectable#collect">
                                                <svg width="15" height="18" viewBox="0 0 15 18">
                                                    <path
                                                        d="M11.7746 1.00195H3.21618C1.99236 1.00195 0.996094 2.07031 0.996094 3.38268V14.6912C0.996094 15.7744 1.44566 16.5511 2.26154 16.8755C2.47384 16.9603 2.70001 17.002 2.92896 17.002C3.14403 17.002 3.36188 16.9648 3.57278 16.8889C3.78369 16.813 4.24436 16.566 4.38034 16.4916L7.4954 14.2299H7.49678L8.48611 13.5112L7.81592 13.0246L7.49401 12.7925L3.84613 15.4456C3.60608 15.575 3.30776 15.7268 3.21896 15.7595C2.95949 15.8532 2.74996 15.7982 2.64867 15.758C2.39613 15.6568 2.10614 15.4441 2.10614 14.6882V3.37971C2.10614 2.72352 2.60427 2.18934 3.21618 2.18934H11.7746C12.3865 2.18934 12.8847 2.72352 12.8847 3.37971V14.6882C12.8847 15.4441 12.5947 15.6568 12.3421 15.758C12.2408 15.7982 12.0313 15.8532 11.7718 15.7595C11.683 15.7283 11.3847 15.575 11.1447 15.4456L9.92639 14.5587L8.93707 15.2774L10.5508 16.4514L10.6118 16.4901C10.7478 16.5645 11.2085 16.8115 11.4194 16.8874C11.8523 17.0436 12.3172 17.0377 12.7306 16.874C13.5465 16.5481 13.9961 15.7729 13.9961 14.6897V3.38119C13.9947 2.0703 12.9984 1.00195 11.7746 1.00195Z"
                                                        fill="white" stroke="white"
                                                        stroke-width="0.542084" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="figure-rollover__fixed-left">


                                    <span class="budget-tag budget-tag---white">video</span>
                                </div>
                            </figure>


                            <div class="card-slide__info">
                                <div class="card-slide__row">
                                    <h3 class="card-slide__title">
                                        <a
                                            href="inspiration/cursor-interaction-on-the-logo-in-the-footer.html">Cursor
                                            interaction on the logo in the footer</a>
                                    </h3>
                                    <div class="card-slide__data">
                                        <small>from</small>
                                        <a href="elements/mouse_interaction/index.html"
                                            class="link-underlined" style="color:white">
                                            Mouse Interaction
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <p>Discover a huge selection of inspiring elements</p>
                        <ul class="list-elements">
                            <li>




                                <figure class="figure-rollover js-collectable "
                                    data-controller="collectable"
                                    data-collectable-model-value="&#x7B;&quot;collectableIdentifier&quot;&#x3A;&quot;43d29b99-7f5b-47c6-89df-a8f355c405ca&quot;,&quot;collectableImage&quot;&#x3A;&quot;element&#x5C;&#x2F;2023&#x5C;&#x2F;07&#x5C;&#x2F;64b8f4d510379347861479.mp4&quot;,&quot;collectableTitle&quot;&#x3A;&quot;Mouse&#x20;interaction&#x20;effect&quot;,&quot;id&quot;&#x3A;&quot;43d29b99-7f5b-47c6-89df-a8f355c405ca&quot;,&quot;user&quot;&#x3A;&#x7B;&quot;image&quot;&#x3A;&quot;avatar&#x5C;&#x2F;518459&#x5C;&#x2F;646207d0207f6428357435.png&quot;,&quot;username&quot;&#x3A;&quot;Zajno&quot;,&quot;displayName&quot;&#x3A;&quot;Zajno&quot;,&quot;type&quot;&#x3A;&quot;user&quot;&#x7D;,&quot;main_image&quot;&#x3A;&quot;element&#x5C;&#x2F;2023&#x5C;&#x2F;07&#x5C;&#x2F;64b8f4d510379347861479.mp4&quot;,&quot;tags&quot;&#x3A;&#x5B;&quot;filters&quot;,&quot;logo&#x20;effect&quot;,&quot;clean&quot;,&quot;graphic&#x20;design&quot;,&quot;minimal&quot;,&quot;interaction&#x20;design&quot;&#x5D;,&quot;title&quot;&#x3A;&quot;Mouse&#x20;interaction&#x20;effect&quot;,&quot;createdAt&quot;&#x3A;1689842900,&quot;type&quot;&#x3A;&quot;element&quot;&#x7D;">
                                    <a aria-label="Mouse interaction effect"
                                        href="inspiration/mouse-interaction-effect.html"
                                        class="figure-rollover__link " data-controller="preview"
                                        data-preview-url-value="&#x2F;inspiration&#x2F;mouse-interaction-effect"
                                        data-action="click->preview#preview">
                                        <video class="figure-rollover__file lazy"
                                            poster="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAQAAADB7vUKAAAAEUlEQVR42mNkIAAYRxXQSwEAC5oADbo22BYAAAAASUVORK5CYII="
                                            data-poster="https://assets.awwwards.com/awards/element/2023/07/64b8f4d510379347861479_static.jpeg"
                                            data-controller="lazyload-video video-hover" width="417"
                                            height="298" muted loop preload="none">
                                            <source src="https://assets.awwwards.com/assets/videos/blank.mp4"
                                                data-src="https://assets.awwwards.com/awards/element/2023/07/64b8f4d510379347861479.mp4"
                                                type="video/mp4">
                                        </video>
                                    </a>
                                    <div class="figure-rollover__hover">
                                        <div class="figure-rollover__left">
                                            <div class="figure-rollover__row"><small>ELEMENT</small></div>
                                            <div class="figure-rollover__row">
                                                <h3>Mouse interaction effect</h3>
                                            </div>
                                        </div>
                                        <div class="figure-rollover__right">
                                            <div class="figure-rollover__bts">
                                                <a href="https://zajno.com/" rel="noopener nofollow"
                                                    target="_blank" class="figure-rollover__bt">
                                                    <svg width="14" height="14"
                                                        viewBox="0 0 14 14">
                                                        <path
                                                            d="M10.8101 1.96222L0.726954 12.0453L1.66171 12.9801L11.7448 2.89698L11.9344 9.4447L13.208 9.07311L13.0134 2.35278C12.9877 1.46249 12.2434 0.718185 11.3531 0.692412L4.80762 0.502924L4.43487 1.77539L10.8101 1.96222Z"
                                                            fill="white" stroke="white"
                                                            stroke-width="0.542084" />
                                                    </svg>
                                                </a>
                                                <span class="figure-rollover__bt"
                                                    data-action="click->collectable#collect">
                                                    <svg width="15" height="18"
                                                        viewBox="0 0 15 18">
                                                        <path
                                                            d="M11.7746 1.00195H3.21618C1.99236 1.00195 0.996094 2.07031 0.996094 3.38268V14.6912C0.996094 15.7744 1.44566 16.5511 2.26154 16.8755C2.47384 16.9603 2.70001 17.002 2.92896 17.002C3.14403 17.002 3.36188 16.9648 3.57278 16.8889C3.78369 16.813 4.24436 16.566 4.38034 16.4916L7.4954 14.2299H7.49678L8.48611 13.5112L7.81592 13.0246L7.49401 12.7925L3.84613 15.4456C3.60608 15.575 3.30776 15.7268 3.21896 15.7595C2.95949 15.8532 2.74996 15.7982 2.64867 15.758C2.39613 15.6568 2.10614 15.4441 2.10614 14.6882V3.37971C2.10614 2.72352 2.60427 2.18934 3.21618 2.18934H11.7746C12.3865 2.18934 12.8847 2.72352 12.8847 3.37971V14.6882C12.8847 15.4441 12.5947 15.6568 12.3421 15.758C12.2408 15.7982 12.0313 15.8532 11.7718 15.7595C11.683 15.7283 11.3847 15.575 11.1447 15.4456L9.92639 14.5587L8.93707 15.2774L10.5508 16.4514L10.6118 16.4901C10.7478 16.5645 11.2085 16.8115 11.4194 16.8874C11.8523 17.0436 12.3172 17.0377 12.7306 16.874C13.5465 16.5481 13.9961 15.7729 13.9961 14.6897V3.38119C13.9947 2.0703 12.9984 1.00195 11.7746 1.00195Z"
                                                            fill="white" stroke="white"
                                                            stroke-width="0.542084" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="figure-rollover__fixed-left">


                                        <span class="budget-tag budget-tag---white">video</span>
                                    </div>
                                </figure>


                            </li>
                            <li>




                                <figure class="figure-rollover js-collectable "
                                    data-controller="collectable"
                                    data-collectable-model-value="&#x7B;&quot;collectableIdentifier&quot;&#x3A;&quot;be453d09-d374-449b-8c6b-d9f64a1908b7&quot;,&quot;collectableImage&quot;&#x3A;&quot;element&#x5C;&#x2F;2022&#x5C;&#x2F;12&#x5C;&#x2F;639716b159317787781757.png&quot;,&quot;collectableTitle&quot;&#x3A;&quot;Logo&quot;,&quot;id&quot;&#x3A;&quot;be453d09-d374-449b-8c6b-d9f64a1908b7&quot;,&quot;user&quot;&#x3A;&#x7B;&quot;image&quot;&#x3A;&quot;avatar&#x5C;&#x2F;620478&#x5C;&#x2F;5fcf512c8e149535132525.png&quot;,&quot;username&quot;&#x3A;&quot;Clint_Agency&quot;,&quot;displayName&quot;&#x3A;&quot;Clint&#x20;Agency&quot;,&quot;type&quot;&#x3A;&quot;user&quot;&#x7D;,&quot;main_image&quot;&#x3A;&quot;element&#x5C;&#x2F;2022&#x5C;&#x2F;12&#x5C;&#x2F;639716b159317787781757.png&quot;,&quot;tags&quot;&#x3A;&#x5B;&quot;logo&quot;&#x5D;,&quot;title&quot;&#x3A;&quot;Logo&quot;,&quot;createdAt&quot;&#x3A;1670846129,&quot;type&quot;&#x3A;&quot;element&quot;&#x7D;">
                                    <a aria-label="Logo" href="inspiration/logo-harvey.html"
                                        class="figure-rollover__link " data-controller="preview"
                                        data-preview-url-value="&#x2F;inspiration&#x2F;logo-harvey"
                                        data-action="click->preview#preview">
                                        <img class="figure-rollover__file lazy"
                                            data-controller="lazyload-image"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAQAAADB7vUKAAAAEUlEQVR42mNkIAAYRxXQSwEAC5oADbo22BYAAAAASUVORK5CYII="
                                            data-src="https://assets.awwwards.com/awards/element/2022/12/639716b159317787781757.png"
                                            alt="Logo">
                                    </a>
                                    <div class="figure-rollover__hover">
                                        <div class="figure-rollover__left">
                                            <div class="figure-rollover__row"><small>ELEMENT</small></div>
                                            <div class="figure-rollover__row">
                                                <h3>Logo</h3>
                                            </div>
                                        </div>
                                        <div class="figure-rollover__right">
                                            <div class="figure-rollover__bts">
                                                <a href="https://www.harvey.fr/" rel="noopener nofollow"
                                                    target="_blank" class="figure-rollover__bt">
                                                    <svg width="14" height="14"
                                                        viewBox="0 0 14 14">
                                                        <path
                                                            d="M10.8101 1.96222L0.726954 12.0453L1.66171 12.9801L11.7448 2.89698L11.9344 9.4447L13.208 9.07311L13.0134 2.35278C12.9877 1.46249 12.2434 0.718185 11.3531 0.692412L4.80762 0.502924L4.43487 1.77539L10.8101 1.96222Z"
                                                            fill="white" stroke="white"
                                                            stroke-width="0.542084" />
                                                    </svg>
                                                </a>
                                                <span class="figure-rollover__bt"
                                                    data-action="click->collectable#collect">
                                                    <svg width="15" height="18"
                                                        viewBox="0 0 15 18">
                                                        <path
                                                            d="M11.7746 1.00195H3.21618C1.99236 1.00195 0.996094 2.07031 0.996094 3.38268V14.6912C0.996094 15.7744 1.44566 16.5511 2.26154 16.8755C2.47384 16.9603 2.70001 17.002 2.92896 17.002C3.14403 17.002 3.36188 16.9648 3.57278 16.8889C3.78369 16.813 4.24436 16.566 4.38034 16.4916L7.4954 14.2299H7.49678L8.48611 13.5112L7.81592 13.0246L7.49401 12.7925L3.84613 15.4456C3.60608 15.575 3.30776 15.7268 3.21896 15.7595C2.95949 15.8532 2.74996 15.7982 2.64867 15.758C2.39613 15.6568 2.10614 15.4441 2.10614 14.6882V3.37971C2.10614 2.72352 2.60427 2.18934 3.21618 2.18934H11.7746C12.3865 2.18934 12.8847 2.72352 12.8847 3.37971V14.6882C12.8847 15.4441 12.5947 15.6568 12.3421 15.758C12.2408 15.7982 12.0313 15.8532 11.7718 15.7595C11.683 15.7283 11.3847 15.575 11.1447 15.4456L9.92639 14.5587L8.93707 15.2774L10.5508 16.4514L10.6118 16.4901C10.7478 16.5645 11.2085 16.8115 11.4194 16.8874C11.8523 17.0436 12.3172 17.0377 12.7306 16.874C13.5465 16.5481 13.9961 15.7729 13.9961 14.6897V3.38119C13.9947 2.0703 12.9984 1.00195 11.7746 1.00195Z"
                                                            fill="white" stroke="white"
                                                            stroke-width="0.542084" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="figure-rollover__fixed-left">


                                    </div>
                                </figure>


                            </li>
                            <li>




                                <figure class="figure-rollover js-collectable "
                                    data-controller="collectable"
                                    data-collectable-model-value="&#x7B;&quot;collectableIdentifier&quot;&#x3A;&quot;c3e55a80-78c1-4973-aa56-a82b5874a38a&quot;,&quot;collectableImage&quot;&#x3A;&quot;element&#x5C;&#x2F;2023&#x5C;&#x2F;02&#x5C;&#x2F;63fd4d090023b365668416.jpg&quot;,&quot;collectableTitle&quot;&#x3A;&quot;Footer&#x20;Logo&#x20;&amp;&#x20;Design&quot;,&quot;id&quot;&#x3A;&quot;c3e55a80-78c1-4973-aa56-a82b5874a38a&quot;,&quot;user&quot;&#x3A;&#x7B;&quot;image&quot;&#x3A;&quot;avatar&#x5C;&#x2F;679488&#x5C;&#x2F;5c1ecdc9a80f1.png&quot;,&quot;username&quot;&#x3A;&quot;nicepeople&quot;,&quot;displayName&quot;&#x3A;&quot;Nice&#x20;People&quot;,&quot;type&quot;&#x3A;&quot;user&quot;&#x7D;,&quot;main_image&quot;&#x3A;&quot;element&#x5C;&#x2F;2023&#x5C;&#x2F;02&#x5C;&#x2F;63fd4d090023b365668416.jpg&quot;,&quot;tags&quot;&#x3A;&#x5B;&quot;footer&quot;,&quot;large&#x20;logo&quot;,&quot;footer&#x20;organization&quot;,&quot;link&#x20;organization&quot;,&quot;branded&#x20;footer&quot;&#x5D;,&quot;title&quot;&#x3A;&quot;Footer&#x20;Logo&#x20;&amp;&#x20;Design&quot;,&quot;createdAt&quot;&#x3A;1677544705,&quot;type&quot;&#x3A;&quot;element&quot;&#x7D;">
                                    <a aria-label="Footer Logo &amp; Design"
                                        href="inspiration/footer-logo-design-real-noni.html"
                                        class="figure-rollover__link " data-controller="preview"
                                        data-preview-url-value="&#x2F;inspiration&#x2F;footer-logo-design-real-noni"
                                        data-action="click->preview#preview">
                                        <img class="figure-rollover__file lazy"
                                            data-controller="lazyload-image"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAQAAADB7vUKAAAAEUlEQVR42mNkIAAYRxXQSwEAC5oADbo22BYAAAAASUVORK5CYII="
                                            data-src="https://assets.awwwards.com/awards/element/2023/02/63fd4d090023b365668416.jpg"
                                            alt="Footer Logo &amp; Design">
                                    </a>
                                    <div class="figure-rollover__hover">
                                        <div class="figure-rollover__left">
                                            <div class="figure-rollover__row"><small>ELEMENT</small></div>
                                            <div class="figure-rollover__row">
                                                <h3>Footer Logo &amp; Design</h3>
                                            </div>
                                        </div>
                                        <div class="figure-rollover__right">
                                            <div class="figure-rollover__bts">
                                                <a href="https://realnoni.com/" rel="noopener nofollow"
                                                    target="_blank" class="figure-rollover__bt">
                                                    <svg width="14" height="14"
                                                        viewBox="0 0 14 14">
                                                        <path
                                                            d="M10.8101 1.96222L0.726954 12.0453L1.66171 12.9801L11.7448 2.89698L11.9344 9.4447L13.208 9.07311L13.0134 2.35278C12.9877 1.46249 12.2434 0.718185 11.3531 0.692412L4.80762 0.502924L4.43487 1.77539L10.8101 1.96222Z"
                                                            fill="white" stroke="white"
                                                            stroke-width="0.542084" />
                                                    </svg>
                                                </a>
                                                <span class="figure-rollover__bt"
                                                    data-action="click->collectable#collect">
                                                    <svg width="15" height="18"
                                                        viewBox="0 0 15 18">
                                                        <path
                                                            d="M11.7746 1.00195H3.21618C1.99236 1.00195 0.996094 2.07031 0.996094 3.38268V14.6912C0.996094 15.7744 1.44566 16.5511 2.26154 16.8755C2.47384 16.9603 2.70001 17.002 2.92896 17.002C3.14403 17.002 3.36188 16.9648 3.57278 16.8889C3.78369 16.813 4.24436 16.566 4.38034 16.4916L7.4954 14.2299H7.49678L8.48611 13.5112L7.81592 13.0246L7.49401 12.7925L3.84613 15.4456C3.60608 15.575 3.30776 15.7268 3.21896 15.7595C2.95949 15.8532 2.74996 15.7982 2.64867 15.758C2.39613 15.6568 2.10614 15.4441 2.10614 14.6882V3.37971C2.10614 2.72352 2.60427 2.18934 3.21618 2.18934H11.7746C12.3865 2.18934 12.8847 2.72352 12.8847 3.37971V14.6882C12.8847 15.4441 12.5947 15.6568 12.3421 15.758C12.2408 15.7982 12.0313 15.8532 11.7718 15.7595C11.683 15.7283 11.3847 15.575 11.1447 15.4456L9.92639 14.5587L8.93707 15.2774L10.5508 16.4514L10.6118 16.4901C10.7478 16.5645 11.2085 16.8115 11.4194 16.8874C11.8523 17.0436 12.3172 17.0377 12.7306 16.874C13.5465 16.5481 13.9961 15.7729 13.9961 14.6897V3.38119C13.9947 2.0703 12.9984 1.00195 11.7746 1.00195Z"
                                                            fill="white" stroke="white"
                                                            stroke-width="0.542084" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="figure-rollover__fixed-left">


                                    </div>
                                </figure>


                            </li>
                            <li>




                                <figure class="figure-rollover js-collectable "
                                    data-controller="collectable"
                                    data-collectable-model-value="&#x7B;&quot;collectableIdentifier&quot;&#x3A;&quot;6a13d0c0-c9c4-4ceb-84e9-e461fb695377&quot;,&quot;collectableImage&quot;&#x3A;&quot;element&#x5C;&#x2F;2022&#x5C;&#x2F;04&#x5C;&#x2F;625016528d829308312017.png&quot;,&quot;collectableTitle&quot;&#x3A;&quot;Footer&#x20;design&quot;,&quot;id&quot;&#x3A;&quot;6a13d0c0-c9c4-4ceb-84e9-e461fb695377&quot;,&quot;user&quot;&#x3A;&#x7B;&quot;image&quot;&#x3A;&quot;avatar&#x5C;&#x2F;965022&#x5C;&#x2F;614d9fa516e48664985959.png&quot;,&quot;username&quot;&#x3A;&quot;antinomy&quot;,&quot;displayName&quot;&#x3A;&quot;Antinomy&#x20;Studio&quot;,&quot;type&quot;&#x3A;&quot;user&quot;&#x7D;,&quot;main_image&quot;&#x3A;&quot;element&#x5C;&#x2F;2022&#x5C;&#x2F;04&#x5C;&#x2F;625016528d829308312017.png&quot;,&quot;tags&quot;&#x3A;&#x5B;&quot;footer&quot;,&quot;clean&quot;,&quot;hero&#x20;logo&quot;,&quot;brand&quot;&#x5D;,&quot;title&quot;&#x3A;&quot;Footer&#x20;design&quot;,&quot;createdAt&quot;&#x3A;1649415227,&quot;type&quot;&#x3A;&quot;element&quot;&#x7D;">
                                    <a aria-label="Footer design" href="inspiration/footer-design-1.html"
                                        class="figure-rollover__link " data-controller="preview"
                                        data-preview-url-value="&#x2F;inspiration&#x2F;footer-design-1"
                                        data-action="click->preview#preview">
                                        <img class="figure-rollover__file lazy"
                                            data-controller="lazyload-image"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAMCAQAAADB7vUKAAAAEUlEQVR42mNkIAAYRxXQSwEAC5oADbo22BYAAAAASUVORK5CYII="
                                            data-src="https://assets.awwwards.com/awards/element/2022/04/625016528d829308312017.png"
                                            alt="Footer design">
                                    </a>
                                    <div class="figure-rollover__hover">
                                        <div class="figure-rollover__left">
                                            <div class="figure-rollover__row"><small>ELEMENT</small></div>
                                            <div class="figure-rollover__row">
                                                <h3>Footer design</h3>
                                            </div>
                                        </div>
                                        <div class="figure-rollover__right">
                                            <div class="figure-rollover__bts">
                                                <a href="http://blokwatches.com/" rel="noopener nofollow"
                                                    target="_blank" class="figure-rollover__bt">
                                                    <svg width="14" height="14"
                                                        viewBox="0 0 14 14">
                                                        <path
                                                            d="M10.8101 1.96222L0.726954 12.0453L1.66171 12.9801L11.7448 2.89698L11.9344 9.4447L13.208 9.07311L13.0134 2.35278C12.9877 1.46249 12.2434 0.718185 11.3531 0.692412L4.80762 0.502924L4.43487 1.77539L10.8101 1.96222Z"
                                                            fill="white" stroke="white"
                                                            stroke-width="0.542084" />
                                                    </svg>
                                                </a>
                                                <span class="figure-rollover__bt"
                                                    data-action="click->collectable#collect">
                                                    <svg width="15" height="18"
                                                        viewBox="0 0 15 18">
                                                        <path
                                                            d="M11.7746 1.00195H3.21618C1.99236 1.00195 0.996094 2.07031 0.996094 3.38268V14.6912C0.996094 15.7744 1.44566 16.5511 2.26154 16.8755C2.47384 16.9603 2.70001 17.002 2.92896 17.002C3.14403 17.002 3.36188 16.9648 3.57278 16.8889C3.78369 16.813 4.24436 16.566 4.38034 16.4916L7.4954 14.2299H7.49678L8.48611 13.5112L7.81592 13.0246L7.49401 12.7925L3.84613 15.4456C3.60608 15.575 3.30776 15.7268 3.21896 15.7595C2.95949 15.8532 2.74996 15.7982 2.64867 15.758C2.39613 15.6568 2.10614 15.4441 2.10614 14.6882V3.37971C2.10614 2.72352 2.60427 2.18934 3.21618 2.18934H11.7746C12.3865 2.18934 12.8847 2.72352 12.8847 3.37971V14.6882C12.8847 15.4441 12.5947 15.6568 12.3421 15.758C12.2408 15.7982 12.0313 15.8532 11.7718 15.7595C11.683 15.7283 11.3847 15.575 11.1447 15.4456L9.92639 14.5587L8.93707 15.2774L10.5508 16.4514L10.6118 16.4901C10.7478 16.5645 11.2085 16.8115 11.4194 16.8874C11.8523 17.0436 12.3172 17.0377 12.7306 16.874C13.5465 16.5481 13.9961 15.7729 13.9961 14.6897V3.38119C13.9947 2.0703 12.9984 1.00195 11.7746 1.00195Z"
                                                            fill="white" stroke="white"
                                                            stroke-width="0.542084" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="figure-rollover__fixed-left">


                                    </div>
                                </figure>


                            </li>
                        </ul>
                        <div class="c-view-all">
                            <div class="c-view-all__row text-medium">
                                <a href="elements/index.html" class="bt-ico-left">
                                    <svg class="ico-svg" viewbox="0 0 20 20" width="16">
                                        <use xlink:href="assets/redesign/images/sprite-icons.svg#arrow"></use>
                                    </svg>

                                    <strong class="link-underlined link-underlined--white">View All
                                        Elements</strong>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>

    {{-- <div class="anchor-section" id="collections">
        <div class="block">
            <div class="inner">
                <div class="c-heading">
                    <div class="c-heading__top">
                        <h2 class="text-default">Collections</h2>
                    </div>
                    <div class="c-heading__middle">
                        <h3 class="heading-5">Explore a wide <br>variety of collections.</h3>
                    </div>
                </div>
                <div class="swiper slider-sites" data-controller="swiper"
                    data-swiper-configuration-value="slider_3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">


                            <div class="card-slide " id="584537dce1382321895a7ade">
                                <figure class="figure-rollover is-large"
                                    data-model="{&quot;id&quot;:&quot;584537dce1382321895a7ade&quot;,&quot;name&quot;:&quot;Menu Inspiration&quot;,&quot;description&quot;:&quot;A menu is the principal UI interaction element that groups the navigation, guiding the user to their desired content on the website.&quot;,&quot;user&quot;:{&quot;country&quot;:&quot;&quot;,&quot;photo&quot;:&quot;avatar\/57289\/620f55adbdb42025477900.png&quot;,&quot;id&quot;:57289,&quot;display_name&quot;:&quot;awwwards.&quot;,&quot;order&quot;:11,&quot;username&quot;:&quot;awwwards&quot;},&quot;slug&quot;:&quot;menu&quot;,&quot;category&quot;:{&quot;name&quot;:&quot;UX\/UI&quot;,&quot;slug&quot;:&quot;ux-ui&quot;},&quot;followers_count&quot;:2194,&quot;collaborators&quot;:[],&quot;private&quot;:false,&quot;like&quot;:false,&quot;createdAt&quot;:1480931292,&quot;type&quot;:&quot;collection&quot;}">

                                    <a aria-label="View Collection" class="figure-rollover__link"
                                        href="awwwards/collections/menu/index.html">
                                        <video
                                            poster="https://assets.awwwards.com/awards/images/2020/05/menu-collection-5_static.jpeg"
                                            data-controller="lazyload-video video-hover"
                                            class="figure-rollover__file lazy" width="417"
                                            height="298" muted loop>
                                            <source src="https://assets.awwwards.com/assets/videos/blank.mp4"
                                                data-src="https://assets.awwwards.com/awards/images/2020/05/menu-collection-5.mp4"
                                                type="video/mp4">
                                        </video>
                                    </a>
                                    <div class="figure-rollover__hover">
                                        <div class="figure-rollover__left">
                                            <div class="figure-rollover__row"><small>COLLECTION</small></div>
                                            <div class="figure-rollover__row">
                                                <span class="js-category-collection">UX/UI</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="figure-rollover__fixed-left">
                                    </div>

                                </figure>

                                <div class="card-slide__info">
                                    <div class="card-slide__row">
                                        <h3 class="card-slide__title">
                                            <a href="awwwards/collections/menu/index.html">
                                                <span class="js-title-collection">Menu Inspiration</span>
                                            </a>
                                        </h3>
                                        <div class="card-slide__data">
                                            <small>followed by</small>

                                            <div class="users-credits ">
                                                <ul class="users-credits__cards">
                                                    <li class="users-credits__item">
                                                        <figure class="avatar-name ">
                                                            <img class="circle-avatar__img"
                                                                src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/default/user8.jpg"
                                                                width="32" height="32"
                                                                alt="Arthur Bakhmetiev" />
                                                        </figure>
                                                    </li>
                                                    <li class="users-credits__item">
                                                        <figure class="avatar-name ">
                                                            <img class="circle-avatar__img"
                                                                src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/default/user6.jpg"
                                                                width="32" height="32"
                                                                alt="rina." />
                                                        </figure>
                                                    </li>
                                                    <li class="users-credits__item">
                                                        <figure class="avatar-name ">
                                                            <img class="circle-avatar__img"
                                                                src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/default/user7.jpg"
                                                                width="32" height="32"
                                                                alt="xuanquang-pham" />
                                                        </figure>
                                                    </li>
                                                </ul>
                                                <div class="users-credits__number">
                                                    <strong>+2191</strong>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="swiper-slide">


                            <div class="card-slide " id="57dbd6f5e1382304a95756e1">
                                <figure class="figure-rollover is-large"
                                    data-model="{&quot;id&quot;:&quot;57dbd6f5e1382304a95756e1&quot;,&quot;name&quot;:&quot;Transitions&quot;,&quot;description&quot;:&quot;Transitions are the animated changes between two pages, states or views to provide visual continuity to the user interface. Transitions can use any kind of visual effects and motion techniques like fade, slide, fold, scale, or mask transitions.&quot;,&quot;user&quot;:{&quot;country&quot;:&quot;&quot;,&quot;photo&quot;:&quot;avatar\/57289\/620f55adbdb42025477900.png&quot;,&quot;id&quot;:57289,&quot;display_name&quot;:&quot;awwwards.&quot;,&quot;order&quot;:27,&quot;username&quot;:&quot;awwwards&quot;},&quot;slug&quot;:&quot;transitions&quot;,&quot;category&quot;:{&quot;name&quot;:&quot;UX\/UI&quot;,&quot;slug&quot;:&quot;ux-ui&quot;},&quot;followers_count&quot;:1768,&quot;collaborators&quot;:[],&quot;private&quot;:false,&quot;like&quot;:false,&quot;createdAt&quot;:1474025205,&quot;type&quot;:&quot;collection&quot;}">

                                    <a aria-label="View Collection" class="figure-rollover__link"
                                        href="awwwards/collections/transitions/index.html">
                                        <img class="figure-rollover__file"
                                            src="data:image/svg+xml,%3Csvg xmlns=&#039;http://www.w3.org/2000/svg&#039; viewBox=&#039;0 0 16 12&#039; %3E%3C/svg%3E"
                                            data-controller="lazyload-image" alt="Transitions"
                                            data-src="https://assets.awwwards.com/awards/images/2018/07/TRANSITIONS.jpg"
                                            class="lazy " />
                                    </a>
                                    <div class="figure-rollover__hover">
                                        <div class="figure-rollover__left">
                                            <div class="figure-rollover__row"><small>COLLECTION</small></div>
                                            <div class="figure-rollover__row">
                                                <span class="js-category-collection">UX/UI</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="figure-rollover__fixed-left">
                                    </div>

                                </figure>

                                <div class="card-slide__info">
                                    <div class="card-slide__row">
                                        <h3 class="card-slide__title">
                                            <a href="awwwards/collections/transitions/index.html">
                                                <span class="js-title-collection">Transitions</span>
                                            </a>
                                        </h3>
                                        <div class="card-slide__data">
                                            <small>followed by</small>

                                            <div class="users-credits ">
                                                <ul class="users-credits__cards">
                                                    <li class="users-credits__item">
                                                        <figure class="avatar-name ">
                                                            <img class="circle-avatar__img"
                                                                src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/default/user3.jpg"
                                                                width="32" height="32"
                                                                alt="rodrigo-bins" />
                                                        </figure>
                                                    </li>
                                                    <li class="users-credits__item">
                                                        <figure class="avatar-name ">
                                                            <img class="circle-avatar__img"
                                                                src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/default/user8.jpg"
                                                                width="32" height="32"
                                                                alt="abdurrohim-syahruromadhon" />
                                                        </figure>
                                                    </li>
                                                    <li class="users-credits__item">
                                                        <figure class="avatar-name ">
                                                            <img class="circle-avatar__img"
                                                                src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/default/user2.jpg"
                                                                width="32" height="32"
                                                                alt="frustak" />
                                                        </figure>
                                                    </li>
                                                </ul>
                                                <div class="users-credits__number">
                                                    <strong>+1765</strong>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="swiper-slide">


                            <div class="card-slide " id="58356933e138233fc1116ca1">
                                <figure class="figure-rollover is-large"
                                    data-model="{&quot;id&quot;:&quot;58356933e138233fc1116ca1&quot;,&quot;name&quot;:&quot;The Best of Navigation&quot;,&quot;description&quot;:&quot;Examples of Innovative Navigation for Your Inspiration&quot;,&quot;user&quot;:{&quot;country&quot;:&quot;&quot;,&quot;photo&quot;:&quot;avatar\/57289\/620f55adbdb42025477900.png&quot;,&quot;id&quot;:57289,&quot;display_name&quot;:&quot;awwwards.&quot;,&quot;order&quot;:62,&quot;username&quot;:&quot;awwwards&quot;},&quot;slug&quot;:&quot;the-best-of-navigation&quot;,&quot;category&quot;:{&quot;name&quot;:&quot;UX\/UI&quot;,&quot;slug&quot;:&quot;ux-ui&quot;},&quot;followers_count&quot;:1938,&quot;collaborators&quot;:[],&quot;private&quot;:false,&quot;like&quot;:false,&quot;createdAt&quot;:1479895347,&quot;type&quot;:&quot;collection&quot;}">

                                    <a aria-label="View Collection" class="figure-rollover__link"
                                        href="awwwards/collections/the-best-of-navigation/index.html">
                                        <img class="figure-rollover__file"
                                            src="data:image/svg+xml,%3Csvg xmlns=&#039;http://www.w3.org/2000/svg&#039; viewBox=&#039;0 0 16 12&#039; %3E%3C/svg%3E"
                                            data-controller="lazyload-image" alt="The Best of Navigation"
                                            data-src="https://assets.awwwards.com/awards/images/2018/08/trans.jpg"
                                            class="lazy " />
                                    </a>
                                    <div class="figure-rollover__hover">
                                        <div class="figure-rollover__left">
                                            <div class="figure-rollover__row"><small>COLLECTION</small></div>
                                            <div class="figure-rollover__row">
                                                <span class="js-category-collection">UX/UI</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="figure-rollover__fixed-left">
                                    </div>

                                </figure>

                                <div class="card-slide__info">
                                    <div class="card-slide__row">
                                        <h3 class="card-slide__title">
                                            <a href="awwwards/collections/the-best-of-navigation/index.html">
                                                <span class="js-title-collection">The Best of
                                                    Navigation</span>
                                            </a>
                                        </h3>
                                        <div class="card-slide__data">
                                            <small>followed by</small>

                                            <div class="users-credits ">
                                                <ul class="users-credits__cards">
                                                    <li class="users-credits__item">
                                                        <figure class="avatar-name ">
                                                            <img class="circle-avatar__img"
                                                                src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/avatar/390845/63e386d0a0a59387626527.png"
                                                                width="32" height="32"
                                                                alt="Stian Bjørhovde" />
                                                        </figure>
                                                    </li>
                                                    <li class="users-credits__item">
                                                        <figure class="avatar-name ">
                                                            <img class="circle-avatar__img"
                                                                src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/default/user1.jpg"
                                                                width="32" height="32"
                                                                alt="nazes-wqdgvj" />
                                                        </figure>
                                                    </li>
                                                    <li class="users-credits__item">
                                                        <figure class="avatar-name ">
                                                            <img class="circle-avatar__img"
                                                                src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/default/user7.jpg"
                                                                width="32" height="32"
                                                                alt="nicole-sassi" />
                                                        </figure>
                                                    </li>
                                                </ul>
                                                <div class="users-credits__number">
                                                    <strong>+1935</strong>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="swiper-slide">


                            <div class="card-slide " id="57c94f11e138231a830bbc41">
                                <figure class="figure-rollover is-large"
                                    data-model="{&quot;id&quot;:&quot;57c94f11e138231a830bbc41&quot;,&quot;name&quot;:&quot;UI Animation and Microinteractions&quot;,&quot;description&quot;:&quot;These prime examples use Canvas, SVG, CSS3, WebGL and more to enhance visual content.&quot;,&quot;user&quot;:{&quot;country&quot;:&quot;&quot;,&quot;photo&quot;:&quot;avatar\/57289\/620f55adbdb42025477900.png&quot;,&quot;id&quot;:57289,&quot;display_name&quot;:&quot;awwwards.&quot;,&quot;order&quot;:17,&quot;username&quot;:&quot;awwwards&quot;},&quot;slug&quot;:&quot;animation&quot;,&quot;category&quot;:{&quot;name&quot;:&quot;Inspiration&quot;,&quot;slug&quot;:&quot;inspiration&quot;},&quot;followers_count&quot;:1505,&quot;collaborators&quot;:[],&quot;private&quot;:false,&quot;like&quot;:false,&quot;createdAt&quot;:1472810769,&quot;type&quot;:&quot;collection&quot;}">

                                    <a aria-label="View Collection" class="figure-rollover__link"
                                        href="awwwards/collections/animation/index.html">
                                        <img class="figure-rollover__file"
                                            src="data:image/svg+xml,%3Csvg xmlns=&#039;http://www.w3.org/2000/svg&#039; viewBox=&#039;0 0 16 12&#039; %3E%3C/svg%3E"
                                            data-controller="lazyload-image"
                                            alt="UI Animation and Microinteractions"
                                            data-src="https://assets.awwwards.com/awards/images/2020/05/microinteraction-collection-2.jpg"
                                            class="lazy " />
                                    </a>
                                    <div class="figure-rollover__hover">
                                        <div class="figure-rollover__left">
                                            <div class="figure-rollover__row"><small>COLLECTION</small></div>
                                            <div class="figure-rollover__row">
                                                <span class="js-category-collection">Inspiration</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="figure-rollover__fixed-left">
                                    </div>

                                </figure>

                                <div class="card-slide__info">
                                    <div class="card-slide__row">
                                        <h3 class="card-slide__title">
                                            <a href="awwwards/collections/animation/index.html">
                                                <span class="js-title-collection">UI Animation and
                                                    Microinter...</span>
                                            </a>
                                        </h3>
                                        <div class="card-slide__data">
                                            <small>followed by</small>

                                            <div class="users-credits ">
                                                <ul class="users-credits__cards">
                                                    <li class="users-credits__item">
                                                        <figure class="avatar-name ">
                                                            <img class="circle-avatar__img"
                                                                src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/default/user7.jpg"
                                                                width="32" height="32"
                                                                alt="ko-su" />
                                                        </figure>
                                                    </li>
                                                    <li class="users-credits__item">
                                                        <figure class="avatar-name ">
                                                            <img class="circle-avatar__img"
                                                                src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/default/user7.jpg"
                                                                width="32" height="32"
                                                                alt="nicole-sassi" />
                                                        </figure>
                                                    </li>
                                                    <li class="users-credits__item">
                                                        <figure class="avatar-name ">
                                                            <img class="circle-avatar__img"
                                                                src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/default/user2.jpg"
                                                                width="32" height="32"
                                                                alt="james-hollis-1" />
                                                        </figure>
                                                    </li>
                                                </ul>
                                                <div class="users-credits__number">
                                                    <strong>+1502</strong>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="swiper-slide">


                            <div class="card-slide " id="587fa3e1e1382326bf218f2a">
                                <figure class="figure-rollover is-large"
                                    data-model="{&quot;id&quot;:&quot;587fa3e1e1382326bf218f2a&quot;,&quot;name&quot;:&quot;Typography in Web Design&quot;,&quot;description&quot;:&quot;Best Examples of Typography in Web Design&quot;,&quot;user&quot;:{&quot;country&quot;:&quot;&quot;,&quot;photo&quot;:&quot;avatar\/57289\/620f55adbdb42025477900.png&quot;,&quot;id&quot;:57289,&quot;display_name&quot;:&quot;awwwards.&quot;,&quot;order&quot;:64,&quot;username&quot;:&quot;awwwards&quot;},&quot;slug&quot;:&quot;typography-in-web-design&quot;,&quot;category&quot;:{&quot;name&quot;:&quot;Inspiration&quot;,&quot;slug&quot;:&quot;inspiration&quot;},&quot;followers_count&quot;:1245,&quot;collaborators&quot;:[],&quot;private&quot;:false,&quot;like&quot;:false,&quot;createdAt&quot;:1484760033,&quot;type&quot;:&quot;collection&quot;}">

                                    <a aria-label="View Collection" class="figure-rollover__link"
                                        href="awwwards/collections/typography-in-web-design/index.html">
                                        <img class="figure-rollover__file"
                                            src="data:image/svg+xml,%3Csvg xmlns=&#039;http://www.w3.org/2000/svg&#039; viewBox=&#039;0 0 16 12&#039; %3E%3C/svg%3E"
                                            data-controller="lazyload-image" alt="Typography in Web Design"
                                            data-src="https://assets.awwwards.com/awards/images/2020/05/typo-collection.jpg"
                                            class="lazy " />
                                    </a>
                                    <div class="figure-rollover__hover">
                                        <div class="figure-rollover__left">
                                            <div class="figure-rollover__row"><small>COLLECTION</small></div>
                                            <div class="figure-rollover__row">
                                                <span class="js-category-collection">Inspiration</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="figure-rollover__fixed-left">
                                    </div>

                                </figure>

                                <div class="card-slide__info">
                                    <div class="card-slide__row">
                                        <h3 class="card-slide__title">
                                            <a
                                                href="awwwards/collections/typography-in-web-design/index.html">
                                                <span class="js-title-collection">Typography in Web
                                                    Design</span>
                                            </a>
                                        </h3>
                                        <div class="card-slide__data">
                                            <small>followed by</small>

                                            <div class="users-credits ">
                                                <ul class="users-credits__cards">
                                                    <li class="users-credits__item">
                                                        <figure class="avatar-name ">
                                                            <img class="circle-avatar__img"
                                                                src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/default/user2.jpg"
                                                                width="32" height="32"
                                                                alt="p-a" />
                                                        </figure>
                                                    </li>
                                                    <li class="users-credits__item">
                                                        <figure class="avatar-name ">
                                                            <img class="circle-avatar__img"
                                                                src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/avatar/1869027/64dbb7b59de25921891959.png"
                                                                width="32" height="32"
                                                                alt="Wendel Anthuny" />
                                                        </figure>
                                                    </li>
                                                    <li class="users-credits__item">
                                                        <figure class="avatar-name ">
                                                            <img class="circle-avatar__img"
                                                                src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/avatar/2129071/64f99a1af23a6727007176.png"
                                                                width="32" height="32"
                                                                alt="Zero One Design" />
                                                        </figure>
                                                    </li>
                                                </ul>
                                                <div class="users-credits__number">
                                                    <strong>+1242</strong>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="swiper-slide">


                            <div class="card-slide " id="590ae1f9e13823524f3624b6">
                                <figure class="figure-rollover is-large"
                                    data-model="{&quot;id&quot;:&quot;590ae1f9e13823524f3624b6&quot;,&quot;name&quot;:&quot;Hovers, Cursors and Cute Interactions&quot;,&quot;description&quot;:&quot;Hovers, Cursors, Animations, Interactions,RollOvers&quot;,&quot;user&quot;:{&quot;country&quot;:&quot;&quot;,&quot;photo&quot;:&quot;avatar\/57289\/620f55adbdb42025477900.png&quot;,&quot;id&quot;:57289,&quot;display_name&quot;:&quot;awwwards.&quot;,&quot;order&quot;:4,&quot;username&quot;:&quot;awwwards&quot;},&quot;slug&quot;:&quot;hovers-cursors-and-cute-interactions&quot;,&quot;category&quot;:{&quot;name&quot;:&quot;UX\/UI&quot;,&quot;slug&quot;:&quot;ux-ui&quot;},&quot;followers_count&quot;:1275,&quot;collaborators&quot;:[],&quot;private&quot;:false,&quot;like&quot;:false,&quot;createdAt&quot;:1493885433,&quot;type&quot;:&quot;collection&quot;}">

                                    <a aria-label="View Collection" class="figure-rollover__link"
                                        href="awwwards/collections/hovers-cursors-and-cute-interactions/index.html">
                                        <img class="figure-rollover__file"
                                            src="data:image/svg+xml,%3Csvg xmlns=&#039;http://www.w3.org/2000/svg&#039; viewBox=&#039;0 0 16 12&#039; %3E%3C/svg%3E"
                                            data-controller="lazyload-image"
                                            alt="Hovers, Cursors and Cute Interactions"
                                            data-src="https://assets.awwwards.com/awards/images/2020/05/cursor-collection.jpg"
                                            class="lazy " />
                                    </a>
                                    <div class="figure-rollover__hover">
                                        <div class="figure-rollover__left">
                                            <div class="figure-rollover__row"><small>COLLECTION</small></div>
                                            <div class="figure-rollover__row">
                                                <span class="js-category-collection">UX/UI</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="figure-rollover__fixed-left">
                                    </div>

                                </figure>

                                <div class="card-slide__info">
                                    <div class="card-slide__row">
                                        <h3 class="card-slide__title">
                                            <a
                                                href="awwwards/collections/hovers-cursors-and-cute-interactions/index.html">
                                                <span class="js-title-collection">Hovers, Cursors and Cute
                                                    In...</span>
                                            </a>
                                        </h3>
                                        <div class="card-slide__data">
                                            <small>followed by</small>

                                            <div class="users-credits ">
                                                <ul class="users-credits__cards">
                                                    <li class="users-credits__item">
                                                        <figure class="avatar-name ">
                                                            <img class="circle-avatar__img"
                                                                src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/default/user3.jpg"
                                                                width="32" height="32"
                                                                alt="Andrea Sabatini" />
                                                        </figure>
                                                    </li>
                                                    <li class="users-credits__item">
                                                        <figure class="avatar-name ">
                                                            <img class="circle-avatar__img"
                                                                src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/avatar/1420487/64fac94e79312501982579.jpeg"
                                                                width="32" height="32"
                                                                alt="melanie-linehan" />
                                                        </figure>
                                                    </li>
                                                    <li class="users-credits__item">
                                                        <figure class="avatar-name ">
                                                            <img class="circle-avatar__img"
                                                                src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/default/user7.jpg"
                                                                width="32" height="32"
                                                                alt="nicole-sassi" />
                                                        </figure>
                                                    </li>
                                                </ul>
                                                <div class="users-credits__number">
                                                    <strong>+1272</strong>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="swiper-slide">


                            <div class="card-slide " id="57dac179e1382350911593e1">
                                <figure class="figure-rollover is-large"
                                    data-model="{&quot;id&quot;:&quot;57dac179e1382350911593e1&quot;,&quot;name&quot;:&quot;Loading Animations&quot;,&quot;description&quot;:&quot;A page or animated element which shows the progress of the loading process.&quot;,&quot;user&quot;:{&quot;country&quot;:&quot;&quot;,&quot;photo&quot;:&quot;avatar\/57289\/620f55adbdb42025477900.png&quot;,&quot;id&quot;:57289,&quot;display_name&quot;:&quot;awwwards.&quot;,&quot;order&quot;:35,&quot;username&quot;:&quot;awwwards&quot;},&quot;slug&quot;:&quot;loading-page&quot;,&quot;category&quot;:{&quot;name&quot;:&quot;UX\/UI&quot;,&quot;slug&quot;:&quot;ux-ui&quot;},&quot;followers_count&quot;:1291,&quot;collaborators&quot;:[],&quot;private&quot;:false,&quot;like&quot;:false,&quot;createdAt&quot;:1473954169,&quot;type&quot;:&quot;collection&quot;}">

                                    <a aria-label="View Collection" class="figure-rollover__link"
                                        href="awwwards/collections/loading-page/index.html">
                                        <img class="figure-rollover__file"
                                            src="data:image/svg+xml,%3Csvg xmlns=&#039;http://www.w3.org/2000/svg&#039; viewBox=&#039;0 0 16 12&#039; %3E%3C/svg%3E"
                                            data-controller="lazyload-image" alt="Loading Animations"
                                            data-src="https://assets.awwwards.com/awards/images/2020/05/loading-collection-2.jpg"
                                            class="lazy " />
                                    </a>
                                    <div class="figure-rollover__hover">
                                        <div class="figure-rollover__left">
                                            <div class="figure-rollover__row"><small>COLLECTION</small></div>
                                            <div class="figure-rollover__row">
                                                <span class="js-category-collection">UX/UI</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="figure-rollover__fixed-left">
                                    </div>

                                </figure>

                                <div class="card-slide__info">
                                    <div class="card-slide__row">
                                        <h3 class="card-slide__title">
                                            <a href="awwwards/collections/loading-page/index.html">
                                                <span class="js-title-collection">Loading Animations</span>
                                            </a>
                                        </h3>
                                        <div class="card-slide__data">
                                            <small>followed by</small>

                                            <div class="users-credits ">
                                                <ul class="users-credits__cards">
                                                    <li class="users-credits__item">
                                                        <figure class="avatar-name ">
                                                            <img class="circle-avatar__img"
                                                                src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/default/user3.jpg"
                                                                width="32" height="32"
                                                                alt="rodrigo-bins" />
                                                        </figure>
                                                    </li>
                                                    <li class="users-credits__item">
                                                        <figure class="avatar-name ">
                                                            <img class="circle-avatar__img"
                                                                src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/default/user4.jpg"
                                                                width="32" height="32"
                                                                alt="yasser-hemeda" />
                                                        </figure>
                                                    </li>
                                                    <li class="users-credits__item">
                                                        <figure class="avatar-name ">
                                                            <img class="circle-avatar__img"
                                                                src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/default/user5.jpg"
                                                                width="32" height="32"
                                                                alt="Emmanuel Katto" />
                                                        </figure>
                                                    </li>
                                                </ul>
                                                <div class="users-credits__number">
                                                    <strong>+1288</strong>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="swiper-slide">


                            <div class="card-slide " id="57e240e1e13823064d486ea1">
                                <figure class="figure-rollover is-large"
                                    data-model="{&quot;id&quot;:&quot;57e240e1e13823064d486ea1&quot;,&quot;name&quot;:&quot;CSS &amp; JS Animations&quot;,&quot;description&quot;:&quot;Examples of stunning CSS3 and Javascript animation examples. Featuring UI elements, scroll triggered animations, SVG and much more.&quot;,&quot;user&quot;:{&quot;country&quot;:&quot;&quot;,&quot;photo&quot;:&quot;avatar\/57289\/620f55adbdb42025477900.png&quot;,&quot;id&quot;:57289,&quot;display_name&quot;:&quot;awwwards.&quot;,&quot;order&quot;:23,&quot;username&quot;:&quot;awwwards&quot;},&quot;slug&quot;:&quot;css-js-animations&quot;,&quot;category&quot;:{&quot;name&quot;:&quot;Web Technology&quot;,&quot;slug&quot;:&quot;web-technology&quot;},&quot;followers_count&quot;:1024,&quot;collaborators&quot;:[],&quot;private&quot;:false,&quot;like&quot;:false,&quot;createdAt&quot;:1474445537,&quot;type&quot;:&quot;collection&quot;}">

                                    <a aria-label="View Collection" class="figure-rollover__link"
                                        href="awwwards/collections/css-js-animations/index.html">
                                        <video
                                            poster="https://assets.awwwards.com/awards/element/2023/09/64f719efa1b12532185307_static.jpeg"
                                            data-controller="lazyload-video video-hover"
                                            class="figure-rollover__file lazy" width="417"
                                            height="298" muted loop>
                                            <source src="https://assets.awwwards.com/assets/videos/blank.mp4"
                                                data-src="https://assets.awwwards.com/awards/element/2023/09/64f719efa1b12532185307.mp4"
                                                type="video/mp4">
                                        </video>
                                    </a>
                                    <div class="figure-rollover__hover">
                                        <div class="figure-rollover__left">
                                            <div class="figure-rollover__row"><small>COLLECTION</small></div>
                                            <div class="figure-rollover__row">
                                                <span class="js-category-collection">Web Technology</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="figure-rollover__fixed-left">
                                    </div>

                                </figure>

                                <div class="card-slide__info">
                                    <div class="card-slide__row">
                                        <h3 class="card-slide__title">
                                            <a href="awwwards/collections/css-js-animations/index.html">
                                                <span class="js-title-collection">CSS &amp; JS
                                                    Animations</span>
                                            </a>
                                        </h3>
                                        <div class="card-slide__data">
                                            <small>followed by</small>

                                            <div class="users-credits ">
                                                <ul class="users-credits__cards">
                                                    <li class="users-credits__item">
                                                        <figure class="avatar-name ">
                                                            <img class="circle-avatar__img"
                                                                src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/default/user4.jpg"
                                                                width="32" height="32"
                                                                alt="yasser-hemeda" />
                                                        </figure>
                                                    </li>
                                                    <li class="users-credits__item">
                                                        <figure class="avatar-name ">
                                                            <img class="circle-avatar__img"
                                                                src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/default/user3.jpg"
                                                                width="32" height="32"
                                                                alt="mehedi-hasan-masum" />
                                                        </figure>
                                                    </li>
                                                    <li class="users-credits__item">
                                                        <figure class="avatar-name ">
                                                            <img class="circle-avatar__img"
                                                                src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/default/user5.jpg"
                                                                width="32" height="32"
                                                                alt="Emmanuel Katto" />
                                                        </figure>
                                                    </li>
                                                </ul>
                                                <div class="users-credits__number">
                                                    <strong>+1021</strong>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="slider-sites__nav">
                        <div class="button button--small--outline--circle js-slider-sites-prev">
                            <svg width="8" height="12" viewBox="0 0 8 12">
                                <path
                                    d="M3.37879 6.64083L2.74979 6.01183L3.37879 5.37654L7.64341 1.11193L6.75652 0.218751L1.85661 5.11865L0.969726 6.00554L2.4919 7.52772L6.75652 11.7923L7.64341 10.9054L3.37879 6.64083Z" />
                            </svg>
                        </div>

                        <div class="button button--small--outline--circle js-slider-sites-next">
                            <svg width="8" height="13" viewBox="0 0 8 13">
                                <path
                                    d="M5.13292 5.61893L5.76192 6.24793L5.13292 6.88322L0.86831 11.1478L1.7552 12.041L6.6551 7.14111L7.54199 6.25422L6.01981 4.73204L1.7552 0.467429L0.86831 1.35432L5.13292 5.61893Z" />
                            </svg>
                        </div>

                    </div>
                </div>
                <div class="c-view-all">
                    <div class="c-view-all__row  text-medium">
                        <span>Find inspiration for your projects</span>
                        <a href="collections/index.html" class="bt-ico-left">
                            <svg class="ico-svg" viewbox="0 0 20 20" width="16">
                                <use xlink:href="assets/redesign/images/sprite-icons.svg#arrow"></use>
                            </svg>

                            <strong class="link-underlined">View Collections</strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}




    <div class="anchor-section" id="recomendations">
        <div class="block">
            <div class="inner">
                <ul class="list-recommendation">
                    <li>
                        <div class="card-recommendation">
                            <img src="data:image/svg+xml,%3Csvg xmlns=&#039;http://www.w3.org/2000/svg&#039; viewBox=&#039;0 0 16 12&#039; %3E%3C/svg%3E"
                                data-controller="lazyload-image" class="card-recommendation__bg lazy"
                                data-src="https://assets.awwwards.com/assets/redesign/images/pages/home/submit.jpg"
                                alt="Submit your website for visibility and recognition">
                            <div class="card-recommendation__content">
                                <p>Share your work</p>
                                <h3 class="heading-5 card-recommendation__title">Submit your website for
                                    visibility and recognition</h3>
                                <a href="submit/index.html" class="button button--large--outline--rounded">
                                    Submit Website
                                </a>
                            </div>
                            <div class="card-recommendation__footer">
                                Got questions? Read our <a class="link-underlined link-underlined--white"
                                    href="faqs/index.html">FAQs</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card-recommendation">
                            <img src="data:image/svg+xml,%3Csvg xmlns=&#039;http://www.w3.org/2000/svg&#039; viewBox=&#039;0 0 16 12&#039; %3E%3C/svg%3E"
                                data-controller="lazyload-image" class="card-recommendation__bg lazy"
                                data-src="https://assets.awwwards.com/assets/redesign/images/pages/home/member.jpg"
                                alt="Get access to special pro features">
                            <div class="card-recommendation__content">
                                <p>Be a member</p>
                                <h3 class="heading-5 card-recommendation__title">Get access to special pro
                                    features</h3>
                                <a href="plans/user-plans.html"
                                    class="button button--large--outline--rounded">
                                    Be Pro
                                </a>
                            </div>
                            <div class="card-recommendation__footer">
                                Got questions? Read our <a class="link-underlined link-underlined--white"
                                    href="faqs/index.html">FAQs</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>




    <div class="menu-float  js-menufloat-show  ">
        <div class="inner">
            <div class="menu-float__inner">

                <div class="bt-nav bt-nav--left js-gototop">
                    <svg width="18" height="22" viewBox="0 0 18 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M8.69899 3.08174L7.76441 4.02584L7.75493 4.0258L1.3542 10.4265L0.0117182 9.08405L6.41245 2.68332L8.69707 0.398693L10.0396 1.74118L17.4565 9.15817L16.1159 10.4893L9.66059 4.0339L8.69899 3.08174ZM8.22508 5.69881L10.4911 7.2949L10.5527 21.8672L8.29342 21.8576L8.22508 5.69881Z"
                            fill="white" />
                    </svg>
                </div>

                <div class="menu-float__wrapper">
                    <div class="menu-float__top">
                        <div class="menu-float__menu menu-main" id="menu-main">
                            <div class="menu-float__menu-content">
                                <div class="menu-float__menu--main">
                                    <div class="menu-float__menu-col style-2 ">
                                        <div class="menu-float__menu-section">Awards</div>
                                        <ul class="menu-float__menu-nav">
                                            <li>
                                                <a href="websites/index.html"
                                                    class="menu-float__sub-item ">Winners
                                                </a>
                                            </li>
                                            <li>
                                                <a href="websites/nominees/index.html"
                                                    class="menu-float__sub-item ">
                                                    Nominees
                                                </a>
                                            </li>
                                            <li>
                                                <a href="websites/sites_of_the_day/index.html"
                                                    class="menu-float__sub-item">
                                                    Sites of the Day
                                                </a>
                                            </li>
                                            <li>
                                                <a href="websites/sites_of_the_month/index.html"
                                                    class="menu-float__sub-item">
                                                    Sites of the Month
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="menu-float__menu-col style-1">
                                        <div class="menu-float__menu-row style-1 ">
                                            <div class="menu-float__menu-section">Inspiration</div>
                                            <ul class="menu-float__menu-nav">
                                                <li>
                                                    <a href="collections/index.html"
                                                        class="menu-float__sub-item">
                                                        Collections
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="elements/index.html"
                                                        class="menu-float__sub-item">
                                                        Elements
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="menu-float__menu-row style-1">
                                            <div class="menu-float__menu-section">Academy</div>
                                            <ul class="menu-float__menu-nav">
                                                <li>
                                                    <a href="academy/index.html"
                                                        class="menu-float__sub-item">
                                                        Courses
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="masterclasses/index.html"
                                                        class="menu-float__sub-item">
                                                        Masterclasses
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="menu-float__menu-col style-1 ">
                                        <div class="menu-float__menu-row style-1 ">
                                            <div class="menu-float__menu-section">Directory</div>
                                            <ul class="menu-float__menu-nav">
                                                <li>
                                                    <a href="directory/homepage/index.html"
                                                        class="menu-float__sub-item ">
                                                        Professionals
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="directory/international/index.html"
                                                        class="menu-float__sub-item">
                                                        Internationals
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="directory/freelance/index.html"
                                                        class="menu-float__sub-item">
                                                        Freelancers
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="directory/agency-studio/index.html"
                                                        class="menu-float__sub-item ">
                                                        Agencies & Studios
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="menu-float__menu-col style-1 ">
                                        <div class="menu-float__menu-row style-1 ">
                                            <div class="menu-float__menu-section">w.</div>
                                            <ul class="menu-float__menu-nav">
                                                <li>
                                                    <a href="blog/index.html" class="menu-float__sub-item">
                                                        Blog
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="jobs/index.html" class="menu-float__sub-item">
                                                        Jobs
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="official-jury/index.html"
                                                        class="menu-float__sub-item ">
                                                        Jury
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="menu-float__menu-row style-1">
                                            <div class="menu-float__menu-section">Market</div>
                                            <ul class="menu-float__menu-nav">
                                                <li>
                                                    <a href="market/index.html"
                                                        class="menu-float__sub-item ">Products &nbsp;<span
                                                            class="budget-tag budget-tag--solid--white">New</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-float__menu" id="menu-filters">
                            <div class="menu-float__menu-content">
                            </div>
                        </div>
                    </div>

                    <div class="menu-float__bottom">
                        <div class="menu-float__layout menu-float__layout--primary">
                            <div class="menu-float__content">
                                <a href="index.html" class="menu-float__logo">w.</a>
                                <div class="menu-float__breadcrumb">
                                    <strong class="menu-float__title ">home</strong>
                                </div>
                                <div class="menu-float__hamburger js-menufloat-hamburger">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                        </div>

                        <div class="menu-float__layout menu-float__layout--secondary">
                            <div class="menu-float__content">
                                <div class="menu-float__progress">
                                    <div class="menu-float__bar js-menu-progress"></div>
                                </div>
                                <strong class="menu-float__title-section">Home</strong>
                                <ul class="menu-float__nav">
                                    <li><a class="menu-float__item js-menu-anchor" href="#sotd">SOTD</a>
                                    </li>
                                    <li><a class="menu-float__item js-menu-anchor"
                                            href="#nominees">Nominees</a></li>
                                    <li><a class="menu-float__item js-menu-anchor"
                                            href="#directory">Directory</a></li>
                                    <li><a class="menu-float__item js-menu-anchor"
                                            href="#collections">Collections</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>



            </div>
        </div>
    </div>


</section>
@endsection
