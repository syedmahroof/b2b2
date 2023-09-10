@extends('buyer.layouts.master') <!-- Extending the master.blade.php template -->
@section('content')
    <div class="y-container w-full max-w-6xl h-full mx-auto my-10 lg:my-20 flex flex-col md:flex-row" data-aos="fade-up">
        <div class="w-full md:w-1/2 mb-12 lg:mb-0">
            <h1 class="text-y-charcoal font-main text-4xl md:text-7xl pb-2.5">
                More than just<br />
                Coworking
            </h1>
            <div class="flex flex-col pt-6">
                <div class="flex flex-col text-y-charcoal items-start">

                    <div class="text-xl md:text-2xl">
                        <p>A creative hub in the heart of South Yarra, Yellow Desk is the newest coworking space on the
                            scene.<br /></p>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" class="arrow" viewBox="0 0 157.381 157.38">
                        <g data-name="Group 66" fill="none" stroke="currentColor" stroke-width="14">
                            <path data-name="Path 1" d="M20.352 104.704l84.352-.001.001-84.353"></path>
                            <path data-name="Path 2" d="M104.704 104.704L4.95 4.95">
                            </path>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="font-mainb mx-auto pt-10">
                <a href="contact.html" title="Title Text" aria-label="Aria Text"
                    class="cta md:max-w-xs flex flex-1 md:flex-initial items-center justify-center bg-y-orange hover:bg-y-charcoal border-transparent border-2 button-text text-y-cream hover:text-y-cream text-center leading-none self-start pt-4 pb-3 px-6 rounded-btn">
                    Book a tour
                </a>
            </div>
        </div>

        <div class="w-full mx-auto md:w-1/2 md:pl-20">

            <div class="splide standard">
                <div class="splide__track">
                    <ul class="splide__list">


                        <li class="splide__slide">
                            <picture class="w-full h-auto">
                                <source
                                    data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-31.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=35ad89d58472093427c58e6b5643bd82 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-31.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=cc2cbf2949d575fa9f9a463d33a68f08 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-31.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=0dd52b09688019c9ab1c2a3962787842 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-31.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=8338d77614e89a271bd9fb0c0917e8c6 576w"
                                    data-sizes="100vw" type="image/jpg" />
                                <img src="data:image/png;base64,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"
                                    data-src="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-31.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=35ad89d58472093427c58e6b5643bd82"
                                    data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-31.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=35ad89d58472093427c58e6b5643bd82 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-31.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=cc2cbf2949d575fa9f9a463d33a68f08 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-31.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=0dd52b09688019c9ab1c2a3962787842 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-31.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=8338d77614e89a271bd9fb0c0917e8c6 576w"
                                    data-sizes="100vw" class="lazyload " alt="Yellow Desk Cowork Finals Simon Shiff 0 31" />
                            </picture>
                        </li>
                        <li class="splide__slide">
                            <picture class="w-full h-auto">
                                <source
                                    data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-39.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=c17d849514894ae304403a8b36307b3f 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-39.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=378155e6631e69c5f89635aa137238c9 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-39.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=ca8cf788da568f5e6e7ea0ae9e190d51 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-39.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=6879882839d799d4fc020f99247a6756 576w"
                                    data-sizes="100vw" type="image/jpg" />
                                <img src="data:image/png;base64,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"
                                    data-src="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-39.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=c17d849514894ae304403a8b36307b3f"
                                    data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-39.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=c17d849514894ae304403a8b36307b3f 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-39.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=378155e6631e69c5f89635aa137238c9 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-39.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=ca8cf788da568f5e6e7ea0ae9e190d51 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-39.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=6879882839d799d4fc020f99247a6756 576w"
                                    data-sizes="100vw" class="lazyload " alt="Yellow Desk Cowork Finals Simon Shiff 0 39" />
                            </picture>
                        </li>

                        <li class="splide__slide">
                            <picture class="w-full h-auto">
                                <source
                                    data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-34.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=87101f6eb39f6bfb7daaaadfa658d4b2 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-34.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=51afe2566ea8907c6027c2634755dce3 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-34.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=5f5c467bd440584e301abeec69c98e80 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-34.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=e2e82017d391f746f9a92d571405a56d 576w"
                                    data-sizes="100vw" type="image/jpg" />
                                <img src="data:image/png;base64,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"
                                    data-src="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-34.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=87101f6eb39f6bfb7daaaadfa658d4b2"
                                    data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-34.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=87101f6eb39f6bfb7daaaadfa658d4b2 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-34.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=51afe2566ea8907c6027c2634755dce3 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-34.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=5f5c467bd440584e301abeec69c98e80 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-34.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=e2e82017d391f746f9a92d571405a56d 576w"
                                    data-sizes="100vw" class="lazyload " alt="Yellow Desk Cowork Finals Simon Shiff 0 34" />
                            </picture>
                        </li>




                        <li class="splide__slide">
                            <picture class="w-full h-auto">
                                <source
                                    data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-15.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=c74116bc0f14812fcddf10e15afe2477 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-15.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=8aca5e48dc3b26a54fce1f4835d81457 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-15.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=4bf81e3177dc7751a8c92d192eebee98 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-15.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=63f83ebaf787c7a78f38d1426e2e37c5 576w"
                                    data-sizes="100vw" type="image/jpg" />
                                <img src="data:image/png;base64,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"
                                    data-src="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-15.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=c74116bc0f14812fcddf10e15afe2477"
                                    data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-15.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=c74116bc0f14812fcddf10e15afe2477 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-15.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=8aca5e48dc3b26a54fce1f4835d81457 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-15.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=4bf81e3177dc7751a8c92d192eebee98 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-15.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=63f83ebaf787c7a78f38d1426e2e37c5 576w"
                                    data-sizes="100vw" class="lazyload " alt="Yellow Desk Cowork Finals Simon Shiff 0 15" />
                            </picture>
                        </li>




                        <li class="splide__slide">
                            <picture class="w-full h-auto">
                                <source
                                    data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-7.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=4a9c16ca5aae4d21c28ea279abfb2e1b 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-7.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=67146967f910b0c9f626b729f306acb7 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-7.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=83954a602dddf76d6cda536de9b1bbcc 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-7.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=37cfa3bdfc24648d1e9774bf6631bf32 576w"
                                    data-sizes="100vw" type="image/jpg" />
                                <img src="data:image/png;base64,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"
                                    data-src="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-7.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=4a9c16ca5aae4d21c28ea279abfb2e1b"
                                    data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-7.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=4a9c16ca5aae4d21c28ea279abfb2e1b 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-7.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=67146967f910b0c9f626b729f306acb7 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-7.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=83954a602dddf76d6cda536de9b1bbcc 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-7.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=37cfa3bdfc24648d1e9774bf6631bf32 576w"
                                    data-sizes="100vw" class="lazyload " alt="Yellow Desk Cowork 0 7" />
                            </picture>
                        </li>




                        <li class="splide__slide">
                            <picture class="w-full h-auto">
                                <source
                                    data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-1.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=c1792a1893caaad73f28fd7dd520e482 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-1.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=4d9d59ff5cc1ee8079b31ccacec6e6fb 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-1.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=142e77d6a30bf71cd500c9418abc8b50 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-1.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=827d3f22c7f2c6ed2bcf9cd877c94a95 576w"
                                    data-sizes="100vw" type="image/jpg" />
                                <img src="data:image/png;base64,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"
                                    data-src="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-1.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=c1792a1893caaad73f28fd7dd520e482"
                                    data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-1.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=c1792a1893caaad73f28fd7dd520e482 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-1.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=4d9d59ff5cc1ee8079b31ccacec6e6fb 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-1.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=142e77d6a30bf71cd500c9418abc8b50 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-1.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=827d3f22c7f2c6ed2bcf9cd877c94a95 576w"
                                    data-sizes="100vw" class="lazyload " alt="Yellow Desk Cowork Finals Simon Shiff 0 1" />
                            </picture>
                        </li>


                    </ul>
                </div>
            </div>

        </div>

    </div>

    <div class="y-container w-full max-w-6xl mx-auto">
        <hr class="border-y-charcoal">
        </hr>
    </div>

    <div class="y-container w-full max-w-6xl h-full mx-auto my-10 lg:my-20 flex flex-col md:flex-row" data-aos="fade-up">

        <div class="relative items-center w-full mx-auto">
            <div class="grid w-full grid-cols-1 mx-auto lg:grid-cols-3">



                <div class="py-6">
                    <div class="flex items-start md:justify-center">

                        <div class="inline-flex items-center justify-center flex-shrink-0 w-12 h-12 mr-3 ml-3">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 110 1080 1080">
                                <circle style="fill:none;stroke:orange;stroke-miterlimit:10;stroke-width:288.5px;"
                                    cx="540" cy="540" r="271" />
                            </svg>
                        </div>

                        <div class="flex flex-col">
                            <h1 class="text-y-charcoal font-main text-4xl md:text-5xl">20+</h1>
                            <p class="text-y-charcoal">Suppliers</p>
                        </div>

                    </div>
                </div>



                <div class="py-6">
                    <div class="flex items-start md:justify-center">

                        <div class="inline-flex items-center justify-center flex-shrink-0 w-12 h-12 mr-3 ml-3">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 110 1080 1080">
                                <circle style="fill:none;stroke:orange;stroke-miterlimit:10;stroke-width:288.5px;"
                                    cx="540" cy="540" r="271" />
                            </svg>
                        </div>

                        <div class="flex flex-col">
                            <h1 class="text-y-charcoal font-main text-4xl md:text-5xl">1000+</h1>
                            <p class="text-y-charcoal">Products</p>
                        </div>

                    </div>
                </div>



                <div class="py-6">
                    <div class="flex items-start md:justify-center">

                        <div class="inline-flex items-center justify-center flex-shrink-0 w-12 h-12 mr-3 ml-3">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 110 1080 1080">
                                <circle style="fill:none;stroke:orange;stroke-miterlimit:10;stroke-width:288.5px;"
                                    cx="540" cy="540" r="271" />
                            </svg>
                        </div>

                        <div class="flex flex-col">
                            <h1 class="text-y-charcoal font-main text-4xl md:text-5xl">100+</h1>
                            <p class="text-y-charcoal">Buyers</p>
                        </div>

                    </div>
                </div>


            </div>
        </div>

    </div>

    <div class="y-container w-full max-w-6xl mx-auto">
        <hr class="border-y-charcoal">
        </hr>
    </div>


    <div class="y-container w-full max-w-6xl h-full mx-auto my-10 lg:my-20" data-aos="fade-up">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">



            <picture class="w-full h-auto">
                <source
                    data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-29.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=1ab8c08d7a11761fdc117606e1320b60 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-29.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=242a131069df7bf51ac2e8b0c8af228f 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-29.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=451b5a468f6bb3c56bb8b1e137c93fd6 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-29.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=d60bd47c210a323277edc650c34b4b13 576w"
                    data-sizes="100vw" type="image/jpg" />
                <img src="data:image/png;base64,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"
                    data-src="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-29.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=1ab8c08d7a11761fdc117606e1320b60"
                    data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-29.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=1ab8c08d7a11761fdc117606e1320b60 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-29.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=242a131069df7bf51ac2e8b0c8af228f 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-29.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=451b5a468f6bb3c56bb8b1e137c93fd6 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-29.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=d60bd47c210a323277edc650c34b4b13 576w"
                    data-sizes="100vw" class="lazyload w-full min-h-80 max-h-80 object-cover object-center"
                    alt="Yellow Desk Cowork Finals Simon Shiff 0 29" />
            </picture>



            <picture class="w-full h-auto">
                <source
                    data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-32.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=67c6ad32b48f6e8332a9c3c3c181d028 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-32.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=2d20ed8d07706f3fa19d3d82286a5bb0 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-32.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=2ff6e4442d919bf0c522add64b9391c9 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-32.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=dd3df205cce79904970ad5eb79acf22b 576w"
                    data-sizes="100vw" type="image/jpg" />
                <img src="data:image/png;base64,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"
                    data-src="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-32.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=67c6ad32b48f6e8332a9c3c3c181d028"
                    data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-32.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=67c6ad32b48f6e8332a9c3c3c181d028 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-32.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=2d20ed8d07706f3fa19d3d82286a5bb0 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-32.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=2ff6e4442d919bf0c522add64b9391c9 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-32.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=dd3df205cce79904970ad5eb79acf22b 576w"
                    data-sizes="100vw" class="lazyload w-full min-h-80 max-h-80 object-cover object-center"
                    alt="Yellow Desk Cowork Finals Simon Shiff 0 32" />
            </picture>



        </div>

        <div class="w-full">

            <div class="font-mainb mx-auto pt-10">
                <a href="the-space.html" title="View more photos of our space" aria-label="View more photos of our space"
                    class="cta mx-auto md:max-w-xs flex flex-1 md:flex-initial items-center justify-center bg-y-orange hover:bg-y- border-transparent border-2 button-text text-y-cream hover:text-y- text-center leading-none self-start pt-4 pb-3 px-6 rounded-btn">
                    View more photos of our space
                </a>
            </div>
        </div>

    </div>

    <div class="y-container w-full max-w-6xl mx-auto">
        <hr class="border-y-charcoal">
        </hr>
    </div>

    <div class="y-container w-full max-w-6xl h-full mx-auto my-10 lg:my-20" data-aos="fade-up">

        <h1 class="text-y-charcoal text-center mx-auto font-main text-4xl md:text-5xl pb-2.5">
            A custom-built facility catering to all the needs of creatives and entrepreneurs.
        </h1>
        <div class="font-mainb mx-auto pt-10">
            <a href="#contact" title="Contact us to find out more" aria-label="Contact us to find out more"
                class="cta mx-auto md:max-w-xs flex flex-1 md:flex-initial items-center justify-center bg-y-orange hover:bg-y-charcoal border-transparent border-2 button-text text-y-cream hover:text-y-cream text-center leading-none self-start pt-4 pb-3 px-6 rounded-btn">
                Contact us to find out more
            </a>
        </div>
    </div>

    <div class="y-container w-full max-w-6xl mx-auto">
        <hr class="border-y-charcoal">
        </hr>
    </div>

    <div class="y-container w-full max-w-6xl h-full mx-auto my-10 lg:my-20 flex flex-col" data-aos="fade-up">

        <div class="w-full pb-8">

            <h1 class="text-y-charcoal font-main text-4xl md:text-5xl pb-2.5">
                Member Benefits
            </h1>
            <div class="flex flex-col">
                <div class="flex flex-col text-y-charcoal items-start">

                    <div class="text-xl md:text-2xl">
                        <p>What sets us apart</p>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" class="arrow" viewBox="0 0 157.381 157.38">
                        <g data-name="Group 66" fill="none" stroke="currentColor" stroke-width="14">
                            <path data-name="Path 1" d="M20.352 104.704l84.352-.001.001-84.353"></path>
                            <path data-name="Path 2" d="M104.704 104.704L4.95 4.95">
                            </path>
                        </g>
                    </svg>

                </div>


            </div>
        </div>

        <div class="relative items-center w-full mx-auto">
            <div class="grid w-full grid-cols-2 mx-auto lg:grid-cols-4 icon-fill-orange">


                <div class="flex items-center justify-self-baseline py-2 pr-2 md:pr-6">
                    <div class="inline-flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto mb-5 mr-3">


                        <svg class="icon" width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6 42v-3h4.6V6h19.5v2.25h7.35V39H42v3h-7.55V11.25H30.1V42Zm7.6-33v30Zm8.95 17q.85 0 1.425-.575.575-.575.575-1.425 0-.85-.575-1.425Q23.4 22 22.55 22q-.85 0-1.425.575-.575.575-.575 1.425 0 .85.575 1.425Q21.7 26 22.55 26ZM13.6 39h13.5V9H13.6Z">
                            </path>
                        </svg>



                    </div>
                    <h1 class="text-y-charcoal mb-2 text-sm">Meeting Rooms</h1>
                    <p class="text-y-charcoal"></p>
                </div>

                <div class="flex items-center justify-self-baseline py-2 pr-2 md:pr-6">
                    <div class="inline-flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto mb-5 mr-3">


                        <svg class="icon" width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m40.65 45.2-6.6-6.6q-1.4 1-3.025 1.725-1.625.725-3.375 1.125v-3.1q1.15-.35 2.225-.775 1.075-.425 2.025-1.125l-8.25-8.3V40l-10-10h-8V18h7.8l-11-11L4.6 4.85 42.8 43Zm-1.8-11.6-2.15-2.15q1-1.7 1.475-3.6.475-1.9.475-3.9 0-5.15-3-9.225-3-4.075-8-5.175v-3.1q6.2 1.4 10.1 6.275 3.9 4.875 3.9 11.225 0 2.55-.7 5t-2.1 4.65Zm-6.7-6.7-4.5-4.5v-6.5Q30 17 31.325 19.2q1.325 2.2 1.325 4.8 0 .75-.125 1.475-.125.725-.375 1.425Zm-8.5-8.5-5.2-5.2 5.2-5.2Zm-3 14.3v-7.5l-4.2-4.2h-7.8v6h6.3Zm-2.1-9.6Z">
                            </path>
                        </svg>

                    </div>
                    <h1 class="text-y-charcoal mb-2 text-sm">Private Booths</h1>
                    <p class="text-y-charcoal"></p>
                </div>

                <div class="flex items-center justify-self-baseline py-2 pr-2 md:pr-6">
                    <div class="inline-flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto mb-5 mr-3">


                        <svg class="icon" width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0 36v-2.65q0-1.95 2.1-3.15T7.5 29q.65 0 1.2.025.55.025 1.1.125-.4.85-.6 1.725-.2.875-.2 1.875V36Zm12 0v-3.25q0-3.25 3.325-5.25t8.675-2q5.4 0 8.7 2 3.3 2 3.3 5.25V36Zm27 0v-3.25q0-1-.175-1.875t-.575-1.725q.55-.1 1.1-.125Q39.9 29 40.5 29q3.4 0 5.45 1.2Q48 31.4 48 33.35V36Zm-15-7.5q-4 0-6.5 1.2T15 32.75V33h18v-.3q0-1.8-2.475-3T24 28.5Zm-16.5-1q-1.45 0-2.475-1.025Q4 25.45 4 24q0-1.45 1.025-2.475Q6.05 20.5 7.5 20.5q1.45 0 2.475 1.025Q11 22.55 11 24q0 1.45-1.025 2.475Q8.95 27.5 7.5 27.5Zm33 0q-1.45 0-2.475-1.025Q37 25.45 37 24q0-1.45 1.025-2.475Q39.05 20.5 40.5 20.5q1.45 0 2.475 1.025Q44 22.55 44 24q0 1.45-1.025 2.475Q41.95 27.5 40.5 27.5ZM24 24q-2.5 0-4.25-1.75T18 18q0-2.55 1.75-4.275Q21.5 12 24 12q2.55 0 4.275 1.725Q30 15.45 30 18q0 2.5-1.725 4.25T24 24Zm0-9q-1.25 0-2.125.85T21 18q0 1.25.875 2.125T24 21q1.3 0 2.15-.875Q27 19.25 27 18q0-1.3-.85-2.15Q25.3 15 24 15Zm0 18Zm0-15Z">
                            </path>
                        </svg>



                    </div>
                    <h1 class="text-y-charcoal mb-2 text-sm">Creative Community</h1>
                    <p class="text-y-charcoal"></p>
                </div>

                <div class="flex items-center justify-self-baseline py-2 pr-2 md:pr-6">
                    <div class="inline-flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto mb-5 mr-3">


                        <svg class="icon" width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.5 42q-3.15 0-5.325-2.175Q4 37.65 4 34.5q0-3.15 2.175-5.325Q8.35 27 11.5 27q3.15 0 5.325 2.175Q19 31.35 19 34.5q0 3.15-2.175 5.325Q14.65 42 11.5 42Zm25.05 0q-3.15 0-5.325-2.175Q29.05 37.65 29.05 34.5q0-3.15 2.175-5.325Q33.4 27 36.55 27q3.15 0 5.325 2.175Q44.05 31.35 44.05 34.5q0 3.15-2.175 5.325Q39.7 42 36.55 42ZM11.5 39q1.85 0 3.175-1.325Q16 36.35 16 34.5q0-1.85-1.325-3.175Q13.35 30 11.5 30q-1.85 0-3.175 1.325Q7 32.65 7 34.5q0 1.85 1.325 3.175Q9.65 39 11.5 39Zm25.05 0q1.85 0 3.175-1.325Q41.05 36.35 41.05 34.5q0-1.85-1.325-3.175Q38.4 30 36.55 30q-1.85 0-3.175 1.325Q32.05 32.65 32.05 34.5q0 1.85 1.325 3.175Q34.7 39 36.55 39Zm-12.5-18.05q-3.15 0-5.325-2.175Q16.55 16.6 16.55 13.45q0-3.15 2.175-5.325Q20.9 5.95 24.05 5.95q3.15 0 5.325 2.175Q31.55 10.3 31.55 13.45q0 3.15-2.175 5.325Q27.2 20.95 24.05 20.95Zm0-3q1.85 0 3.175-1.325Q28.55 15.3 28.55 13.45q0-1.85-1.325-3.175Q25.9 8.95 24.05 8.95q-1.85 0-3.175 1.325Q19.55 11.6 19.55 13.45q0 1.85 1.325 3.175Q22.2 17.95 24.05 17.95Zm0-4.5Zm12.5 21.05Zm-25.05 0Z">
                            </path>
                        </svg>



                    </div>
                    <h1 class="text-y-charcoal mb-2 text-sm">Breakout Space</h1>
                    <p class="text-y-charcoal"></p>
                </div>

                <div class="flex items-center justify-self-baseline py-2 pr-2 md:pr-6">
                    <div class="inline-flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto mb-5 mr-3">


                        <svg class="icon" width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.6 30.15 8.45 27q3.5-3.5 7.325-5.25T24 20q4.4 0 8.225 1.75Q36.05 23.5 39.55 27l-3.15 3.15q-3.05-3.05-6.15-4.35-3.1-1.3-6.25-1.3t-6.25 1.3q-3.1 1.3-6.15 4.35ZM3.15 21.7 0 18.55q4.65-4.75 10.825-7.65Q17 8 24 8q7 0 13.175 2.9Q43.35 13.8 48 18.55l-3.15 3.15q-4.4-4.2-9.625-6.7T24 12.5q-6 0-11.225 2.5T3.15 21.7ZM24 42.55l7.4-7.45q-1.45-1.45-3.325-2.275Q26.2 32 24 32t-4.075.825Q18.05 33.65 16.6 35.1Z">
                            </path>
                        </svg>



                    </div>
                    <h1 class="text-y-charcoal mb-2 text-sm">Fibre Optic Internet</h1>
                    <p class="text-y-charcoal"></p>
                </div>

                <div class="flex items-center justify-self-baseline py-2 pr-2 md:pr-6">
                    <div class="inline-flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto mb-5 mr-3">


                        <svg class="icon" width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M24 34.7q3.6 0 6.05-2.45 2.45-2.45 2.45-6.1 0-3.6-2.45-6.025Q27.6 17.7 24 17.7q-3.65 0-6.075 2.425Q15.5 22.55 15.5 26.15q0 3.65 2.425 6.1Q20.35 34.7 24 34.7Zm0-3q-2.4 0-3.95-1.575-1.55-1.575-1.55-3.975 0-2.35 1.55-3.9Q21.6 20.7 24 20.7q2.35 0 3.925 1.55 1.575 1.55 1.575 3.9 0 2.4-1.575 3.975Q26.35 31.7 24 31.7ZM7 42q-1.2 0-2.1-.9Q4 40.2 4 39V13.35q0-1.15.9-2.075.9-.925 2.1-.925h7.35L18 6h12l3.65 4.35H41q1.15 0 2.075.925Q44 12.2 44 13.35V39q0 1.2-.925 2.1-.925.9-2.075.9Zm34-3V13.35h-8.75L28.6 9h-9.2l-3.65 4.35H7V39ZM24 26.2Z">
                            </path>
                        </svg>



                    </div>
                    <h1 class="text-y-charcoal mb-2 text-sm">Photography Studio</h1>
                    <p class="text-y-charcoal"></p>
                </div>

                <div class="flex items-center justify-self-baseline py-2 pr-2 md:pr-6">
                    <div class="inline-flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto mb-5 mr-3">


                        <svg class="icon" width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M24 26.85q-2.15 0-3.6-1.55-1.45-1.55-1.45-3.75V9q0-2.1 1.475-3.55Q21.9 4 24 4t3.575 1.45Q29.05 6.9 29.05 9v12.55q0 2.2-1.45 3.75-1.45 1.55-3.6 1.55Zm0-11.4ZM22.5 42v-6.8q-5.3-.55-8.9-4.45-3.6-3.9-3.6-9.2h3q0 4.55 3.225 7.65Q19.45 32.3 24 32.3q4.55 0 7.775-3.1Q35 26.1 35 21.55h3q0 5.3-3.6 9.2-3.6 3.9-8.9 4.45V42ZM24 23.85q.9 0 1.475-.675.575-.675.575-1.625V9q0-.85-.6-1.425Q24.85 7 24 7t-1.45.575q-.6.575-.6 1.425v12.55q0 .95.575 1.625T24 23.85Z">
                            </path>
                        </svg>



                    </div>
                    <h1 class="text-y-charcoal mb-2 text-sm">Podcast Studio</h1>
                    <p class="text-y-charcoal"></p>
                </div>

                <div class="flex items-center justify-self-baseline py-2 pr-2 md:pr-6">
                    <div class="inline-flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto mb-5 mr-3">


                        <svg class="icon" width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M28 42q-.6 0-1.05-.45-.45-.45-.45-1.05 0-.65.45-1.075Q27.4 39 28 39q2.95 0 4.975-1.2Q35 36.6 35 35q0-1.15-1.475-2.25t-3.975-1.7l2.35-2.35q3.15.95 4.625 2.625T38 35q0 3.35-3.05 5.175Q31.9 42 28 42ZM12 27.3q-3.2-.7-4.6-2.2Q6 23.6 6 22q0-1.75 1.3-3.15t6-3.1q3.3-1.2 4.25-1.95.95-.75.95-1.75 0-1.25-1.1-2.15Q16.3 9 14 9q-1.35 0-2.3.35-.95.35-1.7 1.1-.4.4-1.025.475Q8.35 11 7.85 10.6q-.55-.4-.575-1-.025-.6.375-1.05.85-1.1 2.55-1.825Q11.9 6 14 6q3.4 0 5.45 1.625Q21.5 9.25 21.5 12.05q0 2.05-1.425 3.475Q18.65 16.95 14.5 18.5q-3.35 1.25-4.425 1.975Q9 21.2 9 22q0 .8 1.35 1.525 1.35.725 4.05 1.375Zm24.8-7.7-6.4-6.4 2.25-2.25q.9-.9 2-.9t2 .9l2.4 2.4q.9.9.9 2t-.9 2ZM11 39h2.1l17.25-17.25-2.1-2.1L11 36.9Zm-3 3v-6.4l20.25-20.25 6.4 6.4L14.4 42Zm20.25-22.35 2.1 2.1Z">
                            </path>
                        </svg>



                    </div>
                    <h1 class="text-y-charcoal mb-2 text-sm">Whiteboard Walls</h1>
                    <p class="text-y-charcoal"></p>
                </div>

                <div class="flex items-center justify-self-baseline py-2 pr-2 md:pr-6">
                    <div class="inline-flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto mb-5 mr-3">


                        <svg class="icon" width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7 40q-1.2 0-2.1-.9Q4 38.2 4 37V11q0-1.2.9-2.1Q5.8 8 7 8h34q1.2 0 2.1.9.9.9.9 2.1v26q0 1.2-.9 2.1-.9.9-2.1.9Zm0-3h22V11H7v26Zm25 0h9V11h-9Zm3-20h3v-3h-3Zm1.5 8.5q.65 0 1.075-.45Q38 24.6 38 24q0-.65-.425-1.075-.425-.425-1.075-.425-.6 0-1.05.425Q35 23.35 35 24q0 .6.45 1.05.45.45 1.05.45Zm0 8.5q.65 0 1.075-.45Q38 33.1 38 32.5q0-.65-.425-1.075Q37.15 31 36.5 31q-.6 0-1.05.425Q35 31.85 35 32.5q0 .6.45 1.05.45.45 1.05.45Zm-16-2.5q-1.1 0-1.9-.4-.8-.4-1.4-.8-.4-.25-.825-.525-.425-.275-.875-.275-.55 0-1.025.325-.475.325-.875.675l-2.15-2.1q.6-.6 1.65-1.25 1.05-.65 2.4-.65 1.1 0 1.925.425t1.425.825q.55.35.9.55.35.2.75.2.55 0 1.025-.325.475-.325.875-.675l2.15 2.1q-.6.6-1.65 1.25-1.05.65-2.4.65Zm0-10q-1.1 0-1.9-.4-.8-.4-1.4-.8-.4-.25-.825-.525-.425-.275-.875-.275-.55 0-1.025.325-.475.325-.875.675l-2.15-2.1q.6-.6 1.65-1.25 1.05-.65 2.4-.65 1.1 0 1.925.425t1.425.825q.55.35.9.55.35.2.75.2.55 0 1.025-.325.475-.325.875-.675l2.15 2.1q-.6.6-1.65 1.25-1.05.65-2.4.65ZM32 37V11v26Z">
                            </path>
                        </svg>



                    </div>
                    <h1 class="text-y-charcoal mb-2 text-sm">Full Facility Kitchen</h1>
                    <p class="text-y-charcoal"></p>
                </div>

                <div class="flex items-center justify-self-baseline py-2 pr-2 md:pr-6">
                    <div class="inline-flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto mb-5 mr-3">


                        <svg class="icon" width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6 44v-3h3.9v-7.05q-1.75-.5-2.825-1.925Q6 30.6 6 28.7V12h10.8v16.7q0 1.75-1.075 3.25t-2.825 2V41h3.9v3Zm3-20.95h4.8V15H9Zm2.4 8.05q.95 0 1.675-.725.725-.725.725-1.675v-2.65H9v2.65q0 .95.725 1.675.725.725 1.675.725ZM26 44q-1.2 0-2.1-.9-.9-.9-.9-2.1V20.6q0-1 .55-1.6.55-.6 1.55-1.05l1.9-.85q1.2-.55 1.75-1.35t.55-1.95V5.75q0-.8.475-1.275Q30.25 4 31.05 4h4.7q.8 0 1.275.475.475.475.475 1.275v8.05q0 1.15.675 1.95t1.875 1.35l1.9.85q.95.4 1.5 1.025.55.625.55 1.625V41q0 1.2-.9 2.1-.9.9-2.1.9Zm6.3-34.8h2.2V7h-2.2ZM26 24.75h15V20.6l-2.1-.8q-2-.75-3.2-2.45-1.2-1.7-1.2-3.75v-1.4h-2.2v1.4q0 2.05-1.125 3.6-1.125 1.55-3.025 2.4l-2.15 1ZM26 41h15v-5.15H26Zm0-8.15h15v-5.1H26ZM11.4 31.1ZM26 32.85v-5.1 5.1Z">
                            </path>
                        </svg>



                    </div>
                    <h1 class="text-y-charcoal mb-2 text-sm">Stocked Bar</h1>
                    <p class="text-y-charcoal"></p>
                </div>

                <div class="flex items-center justify-self-baseline py-2 pr-2 md:pr-6">
                    <div class="inline-flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto mb-5 mr-3">


                        <svg class="icon" width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6 46V31.5q0-3.95 2.8-6.725Q11.6 22 15.5 22h3V5q0-1.25.875-2.125T21.5 2h5q1.25 0 2.125.875T29.5 5v17h3q3.95 0 6.725 2.775Q42 27.55 42 31.5V46Zm3-3h5.25v-6.5q0-.65.45-1.075.45-.425 1.1-.425.6 0 1.025.425.425.425.425 1.075V43h5.25v-6.5q0-.65.45-1.075.45-.425 1.1-.425.6 0 1.025.425.425.425.425 1.075V43h5.25v-6.5q0-.65.45-1.075.45-.425 1.1-.425.6 0 1.025.425.425.425.425 1.075V43H39V31.5q0-2.7-1.9-4.6-1.9-1.9-4.6-1.9h-17q-2.7 0-4.6 1.9Q9 28.8 9 31.5Zm17.5-21V5h-5v17Z">
                            </path>
                        </svg>



                    </div>
                    <h1 class="text-y-charcoal mb-2 text-sm">Frequent Cleaning</h1>
                    <p class="text-y-charcoal"></p>
                </div>

                <div class="flex items-center justify-self-baseline py-2 pr-2 md:pr-6">
                    <div class="inline-flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto mb-5 mr-3">


                        <svg class="icon" width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.7 44V23.9l-.7-.7q-.55-.55-.775-1.15Q8 21.45 8 20.75q0-.7.225-1.325T9 18.25l6.4-6.45h9L32.2 4l3.75 3.75q1.95 1.95 2.925 4.475.975 2.525 1.025 5.075-.05 2.55-1.025 5.075Q37.9 24.9 35.95 26.85L31.7 31.1V44Zm3-3h16V29.85l5.1-5.1q1.55-1.55 2.325-3.475.775-1.925.775-3.975t-.775-3.95q-.775-1.9-2.325-3.45l-1.6-1.65-6.55 6.55h-9L15 16.45l3.7 3.7q1.4 1.4 2.1 3.125.7 1.725.7 3.575 0 1.75-.6 3.4t-1.85 3L12.7 26.9Z">
                            </path>
                        </svg>



                    </div>
                    <h1 class="text-y-charcoal mb-2 text-sm">Dog Friendly</h1>
                    <p class="text-y-charcoal"></p>
                </div>

                <div class="flex items-center justify-self-baseline py-2 pr-2 md:pr-6">
                    <div class="inline-flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto mb-5 mr-3">


                        <svg class="icon" width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.15 40.05 4 37.9l8.7-8.7q1.65-1.65 2.35-4.125.7-2.475.7-6.925 0-2.85 1.25-5.6 1.25-2.75 3.8-5.3 4.4-4.4 9.65-5 5.25-.6 8.65 2.8 3.4 3.4 2.8 8.7-.6 5.3-5 9.7-2.55 2.55-5.3 3.75-2.75 1.2-5.6 1.2-4.45 0-6.975.65-2.525.65-4.175 2.3Zm14.5-16.6q2.45 2.45 6.65 1.825 4.2-.625 7.55-3.975 3.35-3.35 4-7.475.65-4.125-1.8-6.575t-6.625-1.825Q26.25 6.05 22.9 9.4q-3.35 3.35-4.025 7.475Q18.2 21 20.65 23.45ZM36.8 46q-3 0-5.1-2.1-2.1-2.1-2.1-5.1 0-3 2.1-5.1 2.1-2.1 5.1-2.1 3 0 5.1 2.1 2.1 2.1 2.1 5.1 0 3-2.1 5.1-2.1 2.1-5.1 2.1Zm0-3q1.8 0 3-1.2t1.2-3q0-1.8-1.2-3t-3-1.2q-1.8 0-3 1.2t-1.2 3q0 1.8 1.2 3t3 1.2Zm0-4.2Z">
                            </path>
                        </svg>



                    </div>
                    <h1 class="text-y-charcoal mb-2 text-sm">Table Tennis</h1>
                    <p class="text-y-charcoal"></p>
                </div>

                <div class="flex items-center justify-self-baseline py-2 pr-2 md:pr-6">
                    <div class="inline-flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto mb-5 mr-3">


                        <svg class="icon" width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M24 44q-4.1 0-7.75-1.575-3.65-1.575-6.375-4.3-2.725-2.725-4.3-6.375Q4 28.1 4 24q0-4.15 1.575-7.775t4.3-6.35q2.725-2.725 6.375-4.3Q19.9 4 24 4q4.15 0 7.775 1.575t6.35 4.3q2.725 2.725 4.3 6.35Q44 19.85 44 24q0 4.1-1.575 7.75-1.575 3.65-4.3 6.375-2.725 2.725-6.35 4.3Q28.15 44 24 44Zm10.25-24.65 3.45-1.2.9-3.2q-1.7-2.65-4.2-4.525-2.5-1.875-5.65-2.875L25.5 9.7v3.5Zm-20.45 0 8.7-6.15V9.7l-3.2-2.15q-3.15 1-5.65 2.875-2.5 1.875-4.2 4.525l1.1 3.2Zm-2.7 16 3-.35 1.95-3.25-3.1-9.55L9.4 21 7 22.95q0 3.6.8 6.575t3.3 5.825ZM24 41q1.35 0 2.725-.25t2.875-.65l1.65-3.6-1.6-2.75H18.4l-1.6 2.75 1.65 3.6q1.3.4 2.75.65T24 41Zm-5.3-10.25h10.4l3.05-9.15L24 15.75l-8.3 5.85Zm18.25 4.6q2.45-2.85 3.25-5.825.8-2.975.8-6.575l-2.4-1.65-3.5.9-3.1 9.55L33.9 35Z">
                            </path>
                        </svg>



                    </div>
                    <h1 class="text-y-charcoal mb-2 text-sm">Foosball Table</h1>
                    <p class="text-y-charcoal"></p>
                </div>

                <div class="flex items-center justify-self-baseline py-2 pr-2 md:pr-6">
                    <div class="inline-flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto mb-5 mr-3">


                        <svg class="icon" width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8 42v-3h31.95v3Zm7.55-6q-3.15 0-5.35-2.175Q8 31.65 8 28.5V6h33q1.25 0 2.125.875T44 9v8q0 1.25-.875 2.125T41 20h-4.8v8.5q0 3.15-2.2 5.325Q31.8 36 28.65 36Zm0-3h13.1q1.8 0 3.175-1.375Q33.2 30.25 33.2 28.5V9H11v19.5q0 1.75 1.4 3.125T15.55 33ZM36.2 17H41V9h-4.8Zm-14.1 4Z">
                            </path>
                        </svg>



                    </div>
                    <h1 class="text-y-charcoal mb-2 text-sm">Coffee Station</h1>
                    <p class="text-y-charcoal"></p>
                </div>

                <div class="flex items-center justify-self-baseline py-2 pr-2 md:pr-6">
                    <div class="inline-flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto mb-5 mr-3">


                        <svg class="icon" width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 30V18h3v9h26v-9h3v12Z"></path>
                        </svg>



                    </div>
                    <h1 class="text-y-charcoal mb-2 text-sm">Monkey Bars</h1>
                    <p class="text-y-charcoal"></p>
                </div>

            </div>
        </div>

        <div class="w-full">

            <div class="font-mainb mx-auto pt-10">
                <a href="#pricing" title="Title Resident" aria-label="Aria Resident"
                    class="cta mx-auto md:max-w-xs flex flex-1 md:flex-initial items-center justify-center bg-y-orange hover:bg-y- border-transparent border-2 button-text text-y-cream hover:text-y- text-center leading-none self-start pt-4 pb-3 px-6 rounded-btn">
                    View our packages
                </a>
            </div>
        </div>

    </div>

    <div class="y-container w-full max-w-6xl mx-auto">
        <hr class="border-y-charcoal">
        </hr>
    </div>


    <div class="w-full mx-auto my-10 lg:my-20" data-aos="fade-up" style="max-width: 1400px;">
        <div class="splide arch">
            <div class="splide__track">
                <ul class="splide__list">


                    <li class="splide__slide">
                        <picture class="w-full h-auto">
                            <source
                                data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-2.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;usm=20&amp;w=1200&amp;s=f1755239a44dba3ff0a1ce4c74840c15 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-2.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=c5d42810522c556ad60963d52a5d34b3 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-2.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=3e82e4365ae1c7d5c66e4757f90080c5 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-2.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=5cb01697466554ff5de07f7ae0a82fe0 576w"
                                data-sizes="100vw" type="image/jpg" />
                            <img src="data:image/png;base64,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"
                                data-src="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-2.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;usm=20&amp;w=1200&amp;s=f1755239a44dba3ff0a1ce4c74840c15"
                                data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-2.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;usm=20&amp;w=1200&amp;s=f1755239a44dba3ff0a1ce4c74840c15 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-2.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=c5d42810522c556ad60963d52a5d34b3 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-2.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=3e82e4365ae1c7d5c66e4757f90080c5 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-2.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=5cb01697466554ff5de07f7ae0a82fe0 576w"
                                data-sizes="100vw" class="lazyload " alt="Yellow Desk Cowork 0 2" />
                        </picture>
                    </li>



                    <li class="splide__slide">
                        <picture class="w-full h-auto">
                            <source
                                data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-3.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;usm=20&amp;w=1200&amp;s=25cbae87de6a34abab7d40d89949f454 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-3.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=b27adef45fedbc07ee4f5aea4af74d0b 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-3.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=ca94e64a725ff3b02129a39cb3f8e3e9 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-3.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=62e62e06b805f6d73129565eb80fad27 576w"
                                data-sizes="100vw" type="image/jpg" />
                            <img src="data:image/png;base64,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"
                                data-src="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-3.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;usm=20&amp;w=1200&amp;s=25cbae87de6a34abab7d40d89949f454"
                                data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-3.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;usm=20&amp;w=1200&amp;s=25cbae87de6a34abab7d40d89949f454 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-3.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=b27adef45fedbc07ee4f5aea4af74d0b 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-3.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=ca94e64a725ff3b02129a39cb3f8e3e9 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-3.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=62e62e06b805f6d73129565eb80fad27 576w"
                                data-sizes="100vw" class="lazyload " alt="Yellow Desk Cowork 0 3" />
                        </picture>
                    </li>



                    <li class="splide__slide">
                        <picture class="w-full h-auto">
                            <source
                                data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-8.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=4d33e51931f370ca4f3e06487611e372 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-8.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=567dfb81a1d93485c28ea7422a2353ea 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-8.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=2b1bc776f27ddfad5ea468e3ffd47afc 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-8.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=1150053769de45c4d0e3861697dcb28c 576w"
                                data-sizes="100vw" type="image/jpg" />
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAAAwCAIAAAAuKetIAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAKl0lEQVRogW1Zy5Jju43MBCmpZ+YH7ZX/f+lwjPu2RSK9wIM8fe8phUpVpTpEAgkgAfEff/s7IJfct++91vf7/X6///n+59evXz9//fr564///+PnP//497/++Bd+/sJP4AsIMOAFvD//8/r87+v9GXOOOc3MSECAIJc7tKQNbcKNGMPGmK/Xa77er9f79XrHizlfc84x5xjTLG5DEAAgeRjoW749Hy655JOkAAIkQZJGY1yW17DxHtPGx18LvmEN4D3m5/16zzHHnMNGHkwAkkQQ0oADAEAjmMblGWC+PSxAmvy49OdfxfsFENPGyNPq3KHpUy4f8hlI4/Tx7/Hj53u5O8QX7YfNH2N+xnyNkZ4jjaxz5ZLLN+TSJkTIjGY25rQxbQyzQTMeSI3kry89rYcw5+slSRLdaQYajYjwhZfG4Jjj9Z6f/3vv5dtdBA2cZtNGPI+HXyEIEWLI5VtyQIRIGGkjrmnzwAAJBnPqETbXd7AeYmHgnK93RMDd3beNsdagDRvDxrA57fuar/d3/dh77e3u7gnOyMHgjY3L+iSuIBVTAwkkEASamgljBP1GkKwwlLel8npjy78QmO/PR1Ag2O5jL5tzrDnWHHOO9Z2v91rf91577+0uSYr/NtJoZvGCV9plDkiZfI1BwQIics3MxhjDbNiw5JI9rTyev5hDEIRRwnx9PrhD4Hvstfcaa879mmuttXZaH7kPQIpD0utGGm73FwDPNHCXK8EXhvBzwbBO7iohf2I+QdAgJ4zwBDQ/nx9qd7m777333mvuvfdae+21tm8P9uhEgARQpwWA9NLxv+Tu6iBUKNSezTIUVmcJ45XEZXrc1ggnDAwMAsT5/vEJp+ZJe+/EsH2v7Stfu7tvlQ+LgeWtYM+dABcAzxLuXnjqLkGIhFGFHCd98ykPJChjWC8Z5YDN9+dH1Yw4IINQSJY3eYJAkiL/MwzlxON+dEiV1udt41vHpX1xgPQtWPYzq1fWMBEgRBMFQpjvd+VAlIw4Joyu5+58LkcdWwhYzxGT8EZiKIvL9oxkh0LpEXW3Ol4XCTgr5w8MWjR6CoLm6/PJktcHpreCOVfrPll4LnYQ6hfK89PPft2zfVMwrlAI91eJEROdImSgohOW6YAoaL5e7+47rnbW3r5H+f7SHnGU2vp65gm/oA7pIdDePobvvYeN7dsbhVe1yn7aIVbXfoMcMAoqdFkLgfl6vQ5r3d2Hy31v8+1je1JoVB10SLoky4XhLkGhwPKO2933MN++zcxt27bNnX+iu9OvvFe2CzkAyACPDq5uysqGrJAS3TbPiWbutre5m5u5hxzIAnJFAL8lwG9JHC42921um9vI7SS5Se69S8yRqOQ+GRyOj2LdDo8/yxMAMOecnXNyd3M66c5Nku7xcHfKXbLSmXhiqJdV9/J2ZoGBe28Sm8BuMy7AAODuZpaJzeB8diykAj7g6v80xxgHAElFUdzB627qjCKWbSirRuTv46tKSN5OfkosKzUjR3ByVyKMAN0rluqY2vVfof11/RLTbBwKsQBfJ0GCCQ4Zqg2otQlODWKHQGQiEAgHLGCNNluyw3nKCKdIM7jIqqp3ewjTmeK0X2CaEaIoyeQOs8xDihTpNFKWY49ujYU2+1GImGVOgIOkGQVj3NFJu57vy0jPennEG0FQBECRCLvbegKTbHoFzj+Xxud48ewDTcg7kRsm0aQ8oqfFmAGOouh9EvtOJFXGKFVSsjo19kx6XsrkTERqi6uyZyPTbXcD4mP6iN+ozYpGGuKgz3hYn3ZXAheOv5xz+sXsqnFkk+4rqpuqbWbBzjYYRVR9P7Z9jRj9KJCAKEEiRF1CB+XXZs7RitekmPLlAFAXIXVT7P7o3U63qv2fueRIuTopCXtX02p/MV6ef+8igYqM2GwADvEsM+mCUSQjpssfarTlY4qgFNeeGLKd4bCtJ5CD4TBPZ6qMVlUBcfSQCU/RmRwrgpExQJf1ObFfGQUAUzFkHeV76Z/d17o16SMCVVKeKJKJpSiSgs3FGwnrNR80O9NGTqvWMOoMksDce+OIx2ugyUlm7RopA9sTQJqebD1bobOZKCrGY0co8hG3ynxwAZTU7Ijx/4ytljDY4zdBTN87jkr7a6QM09cDwIr3pMwCMsQ515JulXenyt6iSHL4fu4pPIIQXU8ABTDWD8EfnCA8nwPB3GvFOX6PxHvtneN8DfXL9/ImdE71SI8YzcxoajI9ATz447UvOgXKT2fsFKhGls/l90PXiMDeu4TEFYAc579rrbW/EYRIgwRQHA3SDDOZycyddvvnqXMbQyW0p+nSpTeP9WgMWRkqgaucAphrrTvO+0Tgu9Za67sDw5XHQaETXDPZuaTeEuL3TFDbrZMAR/j81vPvH3n9+BAHc3+/1wAVCJL6a3/XWnt940f3Fd0gG1kVOJMNmWSSQQaZmDvSzuUoOMX+aIUnTap6hkjUEa9tqarGRpboYJnrkQMXhVblceXA3uuqQhkBlUbtXivIaJYEYm4GW4c/H9m59NAhyJbMlNplfSjMax8jggHgLyn0MP2ZAxkBy8NbmaYZMrhobVTK49OkWtuJQuzFlRXoCgxCpRwN1jud6z1zrS9uCt1ltFpYr4mUAPLWHsLW6XTmvOOU5WEhJtUKhwFbCvOr5BrgSZ5jGaIAZHRCkJjg7gYDAcYHApp7r9rMVR0627hcHpz9Wi+2sl7ElNVjTkZXd5ZlU+oVM1JSx7cYAmisIB0ixjcHzF1m7jFdCN5qArhy4JDoLLN2qqPIvBwF/+rqqvMQx13rCm2qICMAOGF00JwAvE3vZCqyOxijEYwR6msNeUmJWoW77619VjZ1x2v1UxL0aowPVXr/tYeUpDNiNeApo5KIguje7kcJchaGyN/r7mlQALjk3GmZxYojvtkwjomxFq/n5+NqmDXrQzS5k0avFTkFJ1ww+FlZqRb5oSxKuJfvSzLN7bviprMNL8JU0SDMcNKxulhYPfoDF+PV0XrXXwjEWn7A5UkyZ4GIETwLpneqVVqwXZeOrHkgAXQiXL7vmdRIWVEy/WEl4s6HmeeTCrukY88ePaUx7I2HQEsDvMfJbNS9MX1WhOYyibndu3api8z1dotulYTskTTVrR0Mwyw+7CvzL9l1H+Euo5f1ueKhUHuPEhiCC4rE0JEbqGIR10yq1TR86sxZVRlbsZQzS0dYR+G4Pj8rMruVKdN8SqDkBPxpvegKIRdYWj+dHfxZJhzhNF0dAVQR76E6vMLHpHdSuINw0f6RAP2J0WPIjCQmaSn+QQEuWGGI9gjkRxKNA9fmoQIyH625iVNUY8ixu8o/C6U9wtAoajq7JrRoyZkDcKR2EwW6aII3r5JGfkq7jgo8AhaA5tWZYqdVG5nUmwnlYg6e9t+5zCsB7LSCil7JUp3KI5FCrukMvDebqWD3AeHPLBV0RYC3BGCNEbwd/xuAztTDe7bz6484FAqfC65a9Ygyupg53cNMvteFcPs+nzerhG0BuOl/Tw0lB/rOfFrPpojZmSuP12uZ9qhC5STa0XLn1lkakUmMIxCu7tojUXa62ULxzoFrGO1QPKyvH3rHRPK3b7wMYzUyAlHl+/aXQjkHHp9mObqG6+eHLPovphjrMnuvepwAAAAASUVORK5CYII="
                                data-src="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-8.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=4d33e51931f370ca4f3e06487611e372"
                                data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-8.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=4d33e51931f370ca4f3e06487611e372 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-8.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=567dfb81a1d93485c28ea7422a2353ea 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-8.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=2b1bc776f27ddfad5ea468e3ffd47afc 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-8.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=1150053769de45c4d0e3861697dcb28c 576w"
                                data-sizes="100vw" class="lazyload " alt="Yellow Desk Cowork 0 8" />
                        </picture>
                    </li>



                    <li class="splide__slide">
                        <picture class="w-full h-auto">
                            <source
                                data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-12.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;usm=20&amp;w=1200&amp;s=83b73f3e2274da6df6542a91048e15bb 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-12.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=671f4211e349808305e927e6552c4f00 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-12.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=1a41b2741c2672dea7b38f367a406dbf 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-12.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=a28a731ff17b73b7743dd9b41b2000e2 576w"
                                data-sizes="100vw" type="image/jpg" />
                            <img src="data:image/png;base64,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"
                                data-src="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-12.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;usm=20&amp;w=1200&amp;s=83b73f3e2274da6df6542a91048e15bb"
                                data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-12.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;usm=20&amp;w=1200&amp;s=83b73f3e2274da6df6542a91048e15bb 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-12.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=671f4211e349808305e927e6552c4f00 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-12.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=1a41b2741c2672dea7b38f367a406dbf 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-12.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=a28a731ff17b73b7743dd9b41b2000e2 576w"
                                data-sizes="100vw" class="lazyload " alt="Yellow Desk Cowork 0 12" />
                        </picture>
                    </li>



                    <li class="splide__slide">
                        <picture class="w-full h-auto">
                            <source
                                data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-13.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=baf60427e6fb66c0ab2f27986cca64bb 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-13.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=723f5f934346b6c20a99dee8dba83d2d 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-13.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=a47a21b901ead29593d0b35c2359b2d4 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-13.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=75c0c7bf97783ea7536206b1f1863922 576w"
                                data-sizes="100vw" type="image/jpg" />
                            <img src="data:image/png;base64,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"
                                data-src="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-13.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=baf60427e6fb66c0ab2f27986cca64bb"
                                data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-13.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=baf60427e6fb66c0ab2f27986cca64bb 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-13.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=723f5f934346b6c20a99dee8dba83d2d 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-13.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=a47a21b901ead29593d0b35c2359b2d4 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-13.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=75c0c7bf97783ea7536206b1f1863922 576w"
                                data-sizes="100vw" class="lazyload " alt="Yellow Desk Cowork 0 13" />
                        </picture>
                    </li>



                    <li class="splide__slide">
                        <picture class="w-full h-auto">
                            <source
                                data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-19.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=209df40ffa8576bbd5ede725740d2c24 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-19.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=dc1c0a2c789017bd93c803d9296cf8ef 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-19.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=fecdf73f87a13418eedbb20a4e008060 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-19.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=7245dd28602763ac97d4d048a4a92428 576w"
                                data-sizes="100vw" type="image/jpg" />
                            <img src="data:image/png;base64,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"
                                data-src="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-19.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=209df40ffa8576bbd5ede725740d2c24"
                                data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-19.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=209df40ffa8576bbd5ede725740d2c24 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-19.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=dc1c0a2c789017bd93c803d9296cf8ef 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-19.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=fecdf73f87a13418eedbb20a4e008060 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_0-19.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=7245dd28602763ac97d4d048a4a92428 576w"
                                data-sizes="100vw" class="lazyload " alt="Yellow Desk Cowork 0 19" />
                        </picture>
                    </li>



                    <li class="splide__slide">
                        <picture class="w-full h-auto">
                            <source
                                data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-25.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=8eee63e751300ccbf6b9b101b364f0e6 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-25.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=bec0fc406f2175db7e1dd012aa77d422 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-25.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=c94932079783f39f62866a698b21802f 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-25.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=e26a773193be6655b314bf0bc8b0b2fb 576w"
                                data-sizes="100vw" type="image/jpg" />
                            <img src="data:image/png;base64,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"
                                data-src="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-25.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=8eee63e751300ccbf6b9b101b364f0e6"
                                data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-25.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=8eee63e751300ccbf6b9b101b364f0e6 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-25.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=bec0fc406f2175db7e1dd012aa77d422 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-25.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=c94932079783f39f62866a698b21802f 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-25.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=e26a773193be6655b314bf0bc8b0b2fb 576w"
                                data-sizes="100vw" class="lazyload " alt="Yellow Desk Cowork Finals Simon Shiff 0 25" />
                        </picture>
                    </li>



                    <li class="splide__slide">
                        <picture class="w-full h-auto">
                            <source
                                data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-33.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=2e4c9a30ea0e8677614bb7dcdfa7d038 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-33.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=3aeaca5b23fb6fe6f2501b3b5c22633f 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-33.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=7334e94caf1a20f25ec98ee712acbdf3 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-33.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=a2bac57f85f37106f6e164845fd8242b 576w"
                                data-sizes="100vw" type="image/jpg" />
                            <img src="data:image/png;base64,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"
                                data-src="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-33.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=2e4c9a30ea0e8677614bb7dcdfa7d038"
                                data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-33.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=2e4c9a30ea0e8677614bb7dcdfa7d038 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-33.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=3aeaca5b23fb6fe6f2501b3b5c22633f 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-33.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=7334e94caf1a20f25ec98ee712acbdf3 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-33.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=a2bac57f85f37106f6e164845fd8242b 576w"
                                data-sizes="100vw" class="lazyload " alt="Yellow Desk Cowork Finals Simon Shiff 0 33" />
                        </picture>
                    </li>



                    <li class="splide__slide">
                        <picture class="w-full h-auto">
                            <source
                                data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-35.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=537a5ce8f628d882bb5817cbd6c50d41 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-35.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=93f8ecbb82d40870c7e2d4d93f2e773e 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-35.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=a02eac4242812fc1578f2a839e598163 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-35.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=b27cfa763c6e607608b0597aa8819a88 576w"
                                data-sizes="100vw" type="image/jpg" />
                            <img src="data:image/png;base64,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"
                                data-src="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-35.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=537a5ce8f628d882bb5817cbd6c50d41"
                                data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-35.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=537a5ce8f628d882bb5817cbd6c50d41 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-35.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=93f8ecbb82d40870c7e2d4d93f2e773e 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-35.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=a02eac4242812fc1578f2a839e598163 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-35.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=b27cfa763c6e607608b0597aa8819a88 576w"
                                data-sizes="100vw" class="lazyload " alt="Yellow Desk Cowork Finals Simon Shiff 0 35" />
                        </picture>
                    </li>



                    <li class="splide__slide">
                        <picture class="w-full h-auto">
                            <source
                                data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-38.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=da25ef1d03ebe3068306ef0d378b797f 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-38.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=098630fc84b7c67f13506ac129674a45 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-38.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=a85b29c86b354185c75f8cf1d22b9b30 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-38.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=521b0c1fa41fbbeb3ceec15b585030e4 576w"
                                data-sizes="100vw" type="image/jpg" />
                            <img src="data:image/png;base64,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"
                                data-src="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-38.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=da25ef1d03ebe3068306ef0d378b797f"
                                data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-38.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;w=1200&amp;s=da25ef1d03ebe3068306ef0d378b797f 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-38.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=098630fc84b7c67f13506ac129674a45 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-38.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=a85b29c86b354185c75f8cf1d22b9b30 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-38.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=521b0c1fa41fbbeb3ceec15b585030e4 576w"
                                data-sizes="100vw" class="lazyload " alt="Yellow Desk Cowork Finals Simon Shiff 0 38" />
                        </picture>
                    </li>



                    <li class="splide__slide">
                        <picture class="w-full h-auto">
                            <source
                                data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-44.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;usm=20&amp;w=1200&amp;s=d17b658ae27802cfbd5be7b3552baeb3 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-44.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=72f27ef15f9bb6f09feafe310e987ade 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-44.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=e443d8f9cf9e9b433ee4ff2e5af313d0 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-44.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=7bf066009316e1d5c6559b25f312d71a 576w"
                                data-sizes="100vw" type="image/jpg" />
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAABACAIAAADTQmMRAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAKL0lEQVRogXVaYXrsuq0DIJ+3mC6hi+j+93JjoD9ISnJO33wTR+N4LBikSJAK//PvfwEkCYlcXKIerkUtrtUDiRIpiKRAEAQAAkH9AGAPSIIgSUqiKEmLS9LSWvtISXVniWR9T8Dc8dy6J/g1PKcyp3NfkfuCv27w/T332PdJ+nsPkXpSHliYv88xe1zEzJTcF/dX2Vzt6QMGSRCmB0kCMzyfYEI1/cO5HRnEBBkxqTfyC5ABIizz8CLqvHhz1NPSCZMYZsiYhgUCMECKdFm6GErhAcmEMUJEaFhGCAcKDLB4OHh4AQpC8FAF1/MWCwFBxzSogoIQIUOSJMBHPQmAEEbICAhjhjQBEkbdQLpsE5D80PM/PA4O5ISIE8Aw6mYh2g4FCCSAR8NQQSLrWYgxHFIfQwQ2Zjn8jYNtr3z/ZkSwyzoakAdKgrIXCOLRdkCELHDl4CY04NKAzrzZi/7Gxs/gcm0YQw8BsukBTfeab4ZWWZztHGR2iGnnLA9OwPCekaiQ8zcWDmz2iQCcteYYYJKQAXnRU4C0P5AEdMDN6Zqko939PpPyYOLnY4fIbYQE7T9ECtB5ApJ4nqWZXPMmKHRoFiSQkMA5swHt23EzU8OJBxvKgYl0VHRFtfB6GuB51jpUcIHqo7SPVJ1ZA5SDm+PfG9bHfJ+QfsflJitlvPua53meC1ChWeCCzpHSjIe5zn3HGe+V981EE6HniIzpgjsR1bnn+fNnXFGAGtOg4Y1MItdwVha8/KmJ58VKet4kiXNePUacSUTDUwHaDlxP/6EHWjwDQYvHlDywjqMkF6ALhJPYdkLbiW3Vn5ABlufPn/8bhtgM6ViNWtAD1mAAfUgSNCuUvMx0w/FgsdM/tEk7jgu5ExD5mozHr/+C8lyAbkwk97q7fOhjHfugsV+/Nv3Spm0VYark/zzPn1kme9kf7ylYGxNXexIltld9rXYJniHHF6L3ta2Xtr38vq9NOzLdXvWsYmhWWXvxAfRgLeqhhqrWkIvbatqLdEeabbJxlhSWlw3o9etXou3XjulG9Kxe9miHuOzFX4BWwxpRWwyJO9bfgDKAhh6t932X/L4S32W9fPXalGnLdplsPc8w1E889JSyfrgHB9niGO5jteNAbbJy2jGXqDqK8vsKEt+2Y8qJkkc7Urd7bi8uEJubG9ZH+ZdTbzcaRRYnmjXlJuZ9KVjgC5KvXr60WB5/AboZupZS1x6blUcHk7Yb8Tj1tewTJbYo0+RL0i8JGm+bmDWmQVON6GGJwPLoyVw73tRbjawG15nvyieQCowBEJf+8oQE8rd6qiRMknTEAjRBtjnvJdOPrWMXcQbSsLJLqirWthapnCUnuuV2rz513sCoQZKU0059VBTu1XuLnktsXMd5bRly0n1JSQtw0dcqXlKSUFQY1FFECKj19ZNkMLUc2OXonMUn5H1euUFcZzOwwqlC7ge/BGcvpsBl8eeWI0RyVWROdAZXlTdHJl0eHcmxny13Brkqu9uF5hd3CYrnrfu2ejVMwoRI0wZNWLRpgKINCldhRWj84ENdbii39NjP1PBGJ7UGeex369lOHiDwCmQcWKjjCzB4tZdHwkSs1VSV1dQGW46N3ohdUTJxj+vnMN6D5329eSsvQ8AweVkOEHKVDUkhQQQp0ZISdR3T3t9y+siPSR1p4fHeeb/xNtQkwPPz8zMlR+Bwsr4rJAUWZGTFhlbiZCUSlXRoqIV0VxcXQ4Pp3chsv0WTX9dfhyrk+XlfdCAqwRWq3qAgpxSbnEJjRba0JLtCEi9AlyQ6DDWmvM67KWmC8joOxsvw/PyzGXID4gVIoaA3WumjnFeRvSQyKoZ2ULoYmrRfgIYMv40sb5003uNMeP75eSfGNhowakA1iFRorNeStSS9ehXpImlqQv4/gIqP4AByncQ7lyXlQxiGUKIiZCSQA2hF2mi8XkXKajSmrpbcKOvJaU5cxxtNChCcPjpwAOT5+ee9KuXqjKyuVBkpEvKWIydy7EhLikUpoqSwU37F3orTE1raRd5g/Bd2bPhiyBNKn58fd6UHVSiq9GpCQvo9YXsJDiQsxZKExRRBIkkIJNINigsQ4s2EZ2x4PNoTzJ/3nQ4aXb6UTi+MNyBAgIIsKlgLCVbdg0UWU0m0stepnQ04MPApeCp6uyLnTkUI8HRcbD8CmRBiGIPVGTJDp1OiJ5lPQ1SjcrZGqCbLvgZ3gui5d+l6n6xIbXPidPVrqE5mKJV7ArsTfr6N6mXtRtbVW7y1WE4te0mG0d51ZDrLP4lwm6qaNpwnrn7apwF0+i4TL+76fuThaQ1vRyfTirJ1R9q2ZYlSnA+4rlmmfu2uwxbwow93WO6EUY36kY6621mXxAhKhFGhQ6W6oHWh5rpqsD1ki/xes9f0vSuwRIlLkrSk1SMucY2iXVvRtuDcjU9Ni7MUlVpeufvOqPgTaFYZ9RRpW5n2A9dUtT+hpYaxDqa1Tx7dXXq8Hq2cy4G6Y5aOlEg5Y41HzdWLXQZ1ZGxyhhduOtYaBGvQ1Kli7mygnLIaKTcqGEkYOW02p/vmMGsN7+S61sIVGYchHSv11FozWjdPEtfaJcoU1N2wrYVTMTW172EH3GhAlMk4caAAtRMNPWUvjqHW7CfVzlJRNVbb9Hw6fEzF61rDSbVbgGDWcegmCCa7n4ULED4OdDyoZm9mxmRrHOiz57WLpFnC40PNTfkRBV/xyICu1h6fJYEfQNTHZHvu4obNzdeBfnUdd8xKRDi92gnIBhlKE+kgw+ogjDxrDRx0xGl79aznOAB7tXPxMtbHgVrLdixMh84rrIgFixTlk2cAPNJUbNe6vwy3OxztXMPh1Tjbi4sdrM/uRBUkk9wGUHZIV+DO4+04z9IV4EfW7OKdp/vDK0ngOp4+1fEM7i4vvr9PmVjmyhSJvccWPNr5qaqeec4rDZyCax/n6xPW2omvknyqs9/1Kz7vagWfHVFktqcm+Qyl8wamyu9HzI50E2FnVxXsXZUJQFe5eDTHlIfT4PdBWc0GbYXTVJgUv8+RzJ7ZLuwdowrL0NUCGoYzKXVCdImyrl9LkrkLpBlMVZY8PFuc5Rdi3B4SIq4JZo+SiB10eeJyVV17lKMaNj2Y8mz6513DzmfYwxYwgIDjqAF627M3jkK4QXu6QKWVyBAfNBwH/9tks7OQXFRlPnWNcgGqx9LOay3NjGhkWhDjAOqOU3Z4OZ64XfQGtA1XJJ2P2+UR5EHeNlfvAGsvFI7CrA3T4rDaSEyoYLc9Oo7t+IPx6y+gG8QHDQ4g4p11XAztmIm4e0Z9BCPQfS0T6Nhr5Cz+pujwNBDsD5SDCXhQQbI1dSvorTxZO7Y2hJgdyoCwezNXgMfXZDsC3WFo+9JvKJne2oMdxSikOmOZf2FwMtqlxJ7nKiryLnnS7aovR7mstleb/8LRx/7Cg73se7bfwRTo6oenWglgWNj/W7P/uyJDbrbNxmDALpgvTA1oB/X/AnIztVJ+U0MCAAAAAElFTkSuQmCC"
                                data-src="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-44.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;usm=20&amp;w=1200&amp;s=d17b658ae27802cfbd5be7b3552baeb3"
                                data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-44.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;usm=20&amp;w=1200&amp;s=d17b658ae27802cfbd5be7b3552baeb3 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-44.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=72f27ef15f9bb6f09feafe310e987ade 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-44.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=e443d8f9cf9e9b433ee4ff2e5af313d0 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-44.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=7bf066009316e1d5c6559b25f312d71a 576w"
                                data-sizes="100vw" class="lazyload " alt="Yellow Desk Cowork Finals Simon Shiff 0 44" />
                        </picture>
                    </li>



                    <li class="splide__slide">
                        <picture class="w-full h-auto">
                            <source
                                data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-48.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;usm=20&amp;w=1200&amp;s=9b25ab5f1caf1c20b18809e2b5531dbf 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-48.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=2ddadba3333a3e4462aaf2e1347068fa 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-48.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=dc98ff2464e6a717c269e6fecb45e920 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-48.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=3903ea778c47cac0f59300c12397b358 576w"
                                data-sizes="100vw" type="image/jpg" />
                            <img src="data:image/png;base64,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"
                                data-src="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-48.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;usm=20&amp;w=1200&amp;s=9b25ab5f1caf1c20b18809e2b5531dbf"
                                data-srcset="https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-48.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=675&amp;ixlib=php-3.3.1&amp;q=82&amp;usm=20&amp;w=1200&amp;s=9b25ab5f1caf1c20b18809e2b5531dbf 1200w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-48.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=558&amp;ixlib=php-3.3.1&amp;q=82&amp;w=992&amp;s=2ddadba3333a3e4462aaf2e1347068fa 992w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-48.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=576&amp;ixlib=php-3.3.1&amp;q=60&amp;w=768&amp;s=dc98ff2464e6a717c269e6fecb45e920 768w, https://yellowdesk.imgix.net/images/Yellow-Desk-Cowork_Finals_SimonShiff_0-48.jpg?crop=focalpoint&amp;domain=yellowdesk.imgix.net&amp;fit=crop&amp;fm=pjpg&amp;fp-x=0.5&amp;fp-y=0.5&amp;h=432&amp;ixlib=php-3.3.1&amp;q=60&amp;w=576&amp;s=3903ea778c47cac0f59300c12397b358 576w"
                                data-sizes="100vw" class="lazyload " alt="Yellow Desk Cowork Finals Simon Shiff 0 48" />
                        </picture>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <div class="y-container w-full max-w-6xl mx-auto">
        <hr class="border-y-charcoal">
        </hr>
    </div>

    <div id="pricing" class="y-container w-full max-w-6xl h-full mx-auto my-10 lg:my-20" data-aos="fade-up">

        <div class="w-full pb-8">

            <h1 class="text-y-charcoal font-main text-4xl md:text-5xl pb-2.5">
                Workspaces
            </h1>
            <div class="flex flex-col">
                <div class="flex flex-col text-y-charcoal items-start">

                    <div class="text-xl md:text-2xl">
                        <p>Something for everyone</p>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" class="arrow" viewBox="0 0 157.381 157.38">
                        <g data-name="Group 66" fill="none" stroke="currentColor" stroke-width="14">
                            <path data-name="Path 1" d="M20.352 104.704l84.352-.001.001-84.353"></path>
                            <path data-name="Path 2" d="M104.704 104.704L4.95 4.95">
                            </path>
                        </g>
                    </svg>

                </div>


            </div>
        </div>

        <div class="flex flex-col md:flex-row px-2 md:px-0">

            <div class="package-card w-full mx-auto md:mx-0 md:w-1/2 lg:w-1/4 flex flex-col bg-y-charcoal rounded-lg shadow hover:shadow-xl transition duration-100 ease-in-out pt-16 px-6 pb-6 md:mr-4 mb-10 md:mb-0"
                data-aos="fade-right" data-aos-delay="150">
                <h3 class="flex justify-center items-center flex-1 text-y-cream font-mainb text-2xl text-center">Flexi
                    Pass</h3>
                <div class="lower">
                    <p class="text-y-cream mt-8 text-center"><span class="font-bold text-y-cream text-4xl">$30</span>
                        +GST</p>
                    <p class="text-y-cream text-center mt-2"><span class="font-bold bg-y-cream text-y-charcoal text-sm"
                            style="border-radius: 20px;padding: 2px 20px 3px;">
                            from
                            *</span>
                    </p>
                    <div class="text-sm text-y-cream mt-8">
                        <p class="my-4 flex items-center">

                            <span class="mr-4 ml-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    class="fill-y-cream" viewBox="0 0 24 24">
                                    <path
                                        d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 16.518l-4.5-4.319 1.396-1.435 3.078 2.937 6.105-6.218 1.421 1.409-7.5 7.626z" />
                                </svg>
                            </span>

                            1, 10 or 30 day passes

                        </p>
                        <p class="my-4 flex items-center">

                            <span class="mr-4 ml-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    class="fill-y-cream" viewBox="0 0 24 24">
                                    <path
                                        d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 16.518l-4.5-4.319 1.396-1.435 3.078 2.937 6.105-6.218 1.421 1.409-7.5 7.626z" />
                                </svg>
                            </span>

                            Use at any time

                        </p>
                        <p class="my-4 flex items-center">

                            <span class="mr-4 ml-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    class="fill-y-cream" viewBox="0 0 24 24">
                                    <path
                                        d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 16.518l-4.5-4.319 1.396-1.435 3.078 2.937 6.105-6.218 1.421 1.409-7.5 7.626z" />
                                </svg>
                            </span>

                            Full access

                        </p>
                    </div>
                    <button onclick="window.location.href='packages/flexi-pass.html'"
                        class="w-full font-mainb text-y-charcoal bg-y-orange hover:bg-y-charcoal hover:text-y-cream border-y-orange hover:shadow-xl transition duration-150 ease-in-out py-4 mt-4">Learn
                        more</button>
                </div>
            </div>
            <div class="package-card w-full mx-auto md:mx-0 md:w-1/2 lg:w-1/4 flex flex-col bg-y-charcoal rounded-lg shadow hover:shadow-xl transition duration-100 ease-in-out pt-16 px-6 pb-6 md:mr-4 mb-10 md:mb-0"
                data-aos="fade-right" data-aos-delay="300">
                <h3 class="flex justify-center items-center flex-1 text-y-cream font-mainb text-2xl text-center">
                    Dedicated Desk</h3>
                <div class="lower">
                    <p class="text-y-cream mt-8 text-center"><span class="font-bold text-y-cream text-4xl">$600</span>
                        +GST</p>
                    <p class="text-y-cream text-center mt-2"><span class="font-bold bg-y-cream text-y-charcoal text-sm"
                            style="border-radius: 20px;padding: 2px 20px 3px;">
                            per month
                            *</span>
                    </p>
                    <div class="text-sm text-y-cream mt-8">
                        <p class="my-4 flex items-center">

                            <span class="mr-4 ml-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    class="fill-y-cream" viewBox="0 0 24 24">
                                    <path
                                        d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 16.518l-4.5-4.319 1.396-1.435 3.078 2.937 6.105-6.218 1.421 1.409-7.5 7.626z" />
                                </svg>
                            </span>

                            Permanent desk

                        </p>
                        <p class="my-4 flex items-center">

                            <span class="mr-4 ml-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    class="fill-y-cream" viewBox="0 0 24 24">
                                    <path
                                        d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 16.518l-4.5-4.319 1.396-1.435 3.078 2.937 6.105-6.218 1.421 1.409-7.5 7.626z" />
                                </svg>
                            </span>

                            Shared workspace

                        </p>
                        <p class="my-4 flex items-center">

                            <span class="mr-4 ml-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    class="fill-y-cream" viewBox="0 0 24 24">
                                    <path
                                        d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 16.518l-4.5-4.319 1.396-1.435 3.078 2.937 6.105-6.218 1.421 1.409-7.5 7.626z" />
                                </svg>
                            </span>

                            Lockable storage

                        </p>
                    </div>
                    <button onclick="window.location.href='packages/dedicated-desk.html'"
                        class="w-full font-mainb text-y-charcoal bg-y-orange hover:bg-y-charcoal hover:text-y-cream border-y-orange hover:shadow-xl transition duration-150 ease-in-out py-4 mt-4">Learn
                        more</button>
                </div>
            </div>
            <div class="package-card w-full mx-auto md:mx-0 md:w-1/2 lg:w-1/4 flex flex-col bg-y-charcoal rounded-lg shadow hover:shadow-xl transition duration-100 ease-in-out pt-16 px-6 pb-6 md:mr-4 mb-10 md:mb-0"
                data-aos="fade-right" data-aos-delay="450">
                <h3 class="flex justify-center items-center flex-1 text-y-cream font-mainb text-2xl text-center">
                    Private Office</h3>
                <div class="lower">
                    <p class="text-y-cream mt-8 text-center"><span class="font-bold text-y-cream text-4xl">$2800</span>
                        +GST</p>
                    <p class="text-y-cream text-center mt-2"><span class="font-bold bg-y-cream text-y-charcoal text-sm"
                            style="border-radius: 20px;padding: 2px 20px 3px;">
                            per month
                            *</span>
                    </p>
                    <div class="text-sm text-y-cream mt-8">
                        <p class="my-4 flex items-center">

                            <span class="mr-4 ml-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    class="fill-y-cream" viewBox="0 0 24 24">
                                    <path
                                        d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 16.518l-4.5-4.319 1.396-1.435 3.078 2.937 6.105-6.218 1.421 1.409-7.5 7.626z" />
                                </svg>
                            </span>

                            Fully furnished

                        </p>
                        <p class="my-4 flex items-center">

                            <span class="mr-4 ml-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    class="fill-y-cream" viewBox="0 0 24 24">
                                    <path
                                        d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 16.518l-4.5-4.319 1.396-1.435 3.078 2.937 6.105-6.218 1.421 1.409-7.5 7.626z" />
                                </svg>
                            </span>

                            Enclosed space

                        </p>
                        <p class="my-4 flex items-center">

                            <span class="mr-4 ml-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    class="fill-y-cream" viewBox="0 0 24 24">
                                    <path
                                        d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 16.518l-4.5-4.319 1.396-1.435 3.078 2.937 6.105-6.218 1.421 1.409-7.5 7.626z" />
                                </svg>
                            </span>

                            Ideal for 2-4 people

                        </p>
                    </div>
                    <button onclick="window.location.href='packages/private-office.html'"
                        class="w-full font-mainb text-y-charcoal bg-y-orange hover:bg-y-charcoal hover:text-y-cream border-y-orange hover:shadow-xl transition duration-150 ease-in-out py-4 mt-4">Learn
                        more</button>
                </div>
            </div>
            <div class="package-card w-full mx-auto md:mx-0 md:w-1/2 lg:w-1/4 flex flex-col bg-y-charcoal rounded-lg shadow hover:shadow-xl transition duration-100 ease-in-out pt-16 px-6 pb-6 md:mr-4 mb-10 md:mb-0"
                data-aos="fade-right" data-aos-delay="600">
                <h3 class="flex justify-center items-center flex-1 text-y-cream font-mainb text-2xl text-center">
                    Enterprise</h3>
                <div class="lower">
                    <p class="text-y-cream mt-8 text-center"><span class="font-bold text-y-cream text-4xl">Enquire</span>
                    </p>
                    <p class="text-y-cream text-center mt-2"><span class="font-bold bg-y-cream text-y-charcoal text-sm"
                            style="border-radius: 20px;padding: 2px 20px 3px;">
                            custom
                            *</span>
                    </p>
                    <div class="text-sm text-y-cream mt-8">
                        <p class="my-4 flex items-center">

                            <span class="mr-4 ml-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    class="fill-y-cream" viewBox="0 0 24 24">
                                    <path
                                        d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 16.518l-4.5-4.319 1.396-1.435 3.078 2.937 6.105-6.218 1.421 1.409-7.5 7.626z" />
                                </svg>
                            </span>

                            Reduced prices

                        </p>
                        <p class="my-4 flex items-center">

                            <span class="mr-4 ml-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    class="fill-y-cream" viewBox="0 0 24 24">
                                    <path
                                        d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 16.518l-4.5-4.319 1.396-1.435 3.078 2.937 6.105-6.218 1.421 1.409-7.5 7.626z" />
                                </svg>
                            </span>

                            Ideal for 4+ people

                        </p>
                        <p class="my-4 flex items-center">

                            <span class="mr-4 ml-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    class="fill-y-cream" viewBox="0 0 24 24">
                                    <path
                                        d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 16.518l-4.5-4.319 1.396-1.435 3.078 2.937 6.105-6.218 1.421 1.409-7.5 7.626z" />
                                </svg>
                            </span>

                            Custom Solutions

                        </p>
                    </div>
                    <button onclick="window.location.href='packages/enterprise.html'"
                        class="w-full font-mainb text-y-charcoal bg-y-orange hover:bg-y-charcoal hover:text-y-cream border-y-orange hover:shadow-xl transition duration-150 ease-in-out py-4 mt-4">Learn
                        more</button>
                </div>
            </div>

        </div>

    </div>

    <div class="y-container w-full max-w-6xl mx-auto">
        <hr class="border-y-charcoal">
        </hr>
    </div>


    <div id="contact" class="y-container w-full max-w-6xl h-full mx-auto my-10 lg:my-20" data-aos="fade-up">

        <div class="w-full pb-8">
            <h1 class="text-y-charcoal font-main text-4xl md:text-5xl pb-2.5">
                Get in touch
            </h1>
            <div class="flex flex-col">
                <div class="flex flex-col text-y-charcoal items-start">

                    <div class="text-xl md:text-2xl">
                        <p>Wanting to become a part of the community?</p>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" class="arrow" viewBox="0 0 157.381 157.38">
                        <g data-name="Group 66" fill="none" stroke="currentColor" stroke-width="14">
                            <path data-name="Path 1" d="M20.352 104.704l84.352-.001.001-84.353"></path>
                            <path data-name="Path 2" d="M104.704 104.704L4.95 4.95">
                            </path>
                        </g>
                    </svg>

                </div>


            </div>
        </div>

        <div class="w-full flex flex-col md:flex-row">
            <div class="w-full md:w-1/3 pb-20 md:md:pb-0">


                <div class="fui-i">
                    <form id="formie-form-1552264fcdf61bada0"
                        class="font-sans bg-transparent rounded-none border-t-0 border-r-0 border-l-0 border-2"
                        method="post" enctype="multipart/form-data" accept-charset="utf-8" data-submit-method="ajax"
                        data-submit-action="entry" data-loading-indicator="spinner"
                        data-redirect="https://yellowdesk.com.au/thank-you"
                        data-config="{&quot;formHashId&quot;:&quot;formie-form-1552264fcdf61bada0&quot;,&quot;formId&quot;:15522,&quot;formHandle&quot;:&quot;contact&quot;,&quot;registeredJs&quot;:[{&quot;src&quot;:&quot;https:\/\/yellowdesk.com.au\/cpresources\/a57dd1a5\/recaptcha-v2-checkbox.js?v=1683165917&quot;,&quot;module&quot;:&quot;FormieRecaptchaV2Checkbox&quot;,&quot;settings&quot;:{&quot;siteKey&quot;:&quot;6Ldb3dsZAAAAAMR2C2WQz_H0FBCtjWV_n1tXuLqq&quot;,&quot;formId&quot;:&quot;formie-form-1552264fcdf61bada0&quot;,&quot;theme&quot;:&quot;light&quot;,&quot;size&quot;:&quot;normal&quot;,&quot;badge&quot;:&quot;bottomright&quot;,&quot;language&quot;:&quot;en&quot;,&quot;submitMethod&quot;:&quot;ajax&quot;,&quot;hasMultiplePages&quot;:false}}],&quot;settings&quot;:{&quot;submitMethod&quot;:&quot;ajax&quot;,&quot;submitActionMessage&quot;:&quot;Thank you for contacting us! Our team will get in touch shortly to follow up on your message.&quot;,&quot;submitActionMessageTimeout&quot;:&quot;&quot;,&quot;submitActionMessagePosition&quot;:&quot;top-form&quot;,&quot;submitActionFormHide&quot;:&quot;&quot;,&quot;submitAction&quot;:&quot;entry&quot;,&quot;submitActionTab&quot;:&quot;same-tab&quot;,&quot;errorMessage&quot;:&quot;Couldn’t save submission due to errors.&quot;,&quot;errorMessagePosition&quot;:&quot;top-form&quot;,&quot;loadingIndicator&quot;:&quot;spinner&quot;,&quot;loadingIndicatorText&quot;:&quot;&quot;,&quot;validationOnSubmit&quot;:&quot;1&quot;,&quot;validationOnFocus&quot;:&quot;1&quot;,&quot;scrollToTop&quot;:&quot;1&quot;,&quot;hasMultiplePages&quot;:false,&quot;pages&quot;:[{&quot;settings&quot;:{&quot;submitButtonLabel&quot;:&quot;Contact us&quot;,&quot;backButtonLabel&quot;:&quot;Back&quot;,&quot;showBackButton&quot;:false,&quot;buttonsPosition&quot;:&quot;left&quot;,&quot;cssClasses&quot;:&quot;font-mainb&quot;,&quot;containerAttributes&quot;:[],&quot;inputAttributes&quot;:[],&quot;enableNextButtonConditions&quot;:false,&quot;nextButtonConditions&quot;:&quot;{\&quot;showRule\&quot;:\&quot;show\&quot;,\&quot;conditionRule\&quot;:\&quot;all\&quot;,\&quot;conditions\&quot;:[]}&quot;,&quot;enablePageConditions&quot;:false,&quot;pageConditions&quot;:[],&quot;enableJsEvents&quot;:false,&quot;jsGtmEventOptions&quot;:[{&quot;label&quot;:&quot;event&quot;,&quot;value&quot;:&quot;formPageSubmission&quot;},{&quot;label&quot;:&quot;formId&quot;,&quot;value&quot;:&quot;contact&quot;},{&quot;label&quot;:&quot;pageId&quot;,&quot;value&quot;:244},{&quot;label&quot;:&quot;pageIndex&quot;,&quot;value&quot;:0}]},&quot;id&quot;:&quot;723&quot;,&quot;layoutId&quot;:&quot;41&quot;,&quot;name&quot;:&quot;Page 1&quot;,&quot;elements&quot;:[{&quot;width&quot;:100,&quot;label&quot;:null,&quot;instructions&quot;:null,&quot;tip&quot;:null,&quot;warning&quot;:null,&quot;required&quot;:&quot;0&quot;,&quot;fieldUid&quot;:&quot;c1c287e4-1516-4d6a-a6ee-ae5b20dff701&quot;},{&quot;width&quot;:100,&quot;label&quot;:null,&quot;instructions&quot;:null,&quot;tip&quot;:null,&quot;warning&quot;:null,&quot;required&quot;:&quot;0&quot;,&quot;fieldUid&quot;:&quot;423e7864-ce7a-475f-a206-697967fd7809&quot;},{&quot;width&quot;:100,&quot;label&quot;:null,&quot;instructions&quot;:null,&quot;tip&quot;:null,&quot;warning&quot;:null,&quot;required&quot;:&quot;1&quot;,&quot;fieldUid&quot;:&quot;8c3bc59b-a9b9-4aa6-b2f1-9c09006bb48d&quot;},{&quot;width&quot;:100,&quot;label&quot;:null,&quot;instructions&quot;:null,&quot;tip&quot;:null,&quot;warning&quot;:null,&quot;required&quot;:&quot;1&quot;,&quot;fieldUid&quot;:&quot;8b9d7f77-f4ad-4c87-9de0-f10b36751f6e&quot;},{&quot;width&quot;:100,&quot;label&quot;:null,&quot;instructions&quot;:null,&quot;tip&quot;:null,&quot;warning&quot;:null,&quot;required&quot;:&quot;1&quot;,&quot;fieldUid&quot;:&quot;9005b6bf-9927-4b7c-a3c5-028e7b03a23f&quot;},{&quot;width&quot;:100,&quot;label&quot;:null,&quot;instructions&quot;:null,&quot;tip&quot;:null,&quot;warning&quot;:null,&quot;required&quot;:&quot;0&quot;,&quot;fieldUid&quot;:&quot;723ae5e8-df16-4db5-9eeb-ef1a2714e4b9&quot;},{&quot;width&quot;:100,&quot;label&quot;:null,&quot;instructions&quot;:null,&quot;tip&quot;:null,&quot;warning&quot;:null,&quot;required&quot;:&quot;0&quot;,&quot;fieldUid&quot;:&quot;7f6e2976-c624-48d5-ac3f-9a5b9822fca7&quot;}],&quot;sortOrder&quot;:&quot;0&quot;,&quot;uid&quot;:&quot;0332233e-2960-44ef-95af-938b29522a1b&quot;}],&quot;redirectUrl&quot;:&quot;https:\/\/yellowdesk.com.au\/thank-you&quot;,&quot;currentPageId&quot;:&quot;723&quot;,&quot;outputJsTheme&quot;:true,&quot;enableUnloadWarning&quot;:true,&quot;ajaxTimeout&quot;:10}}"
                        data-site-form><input type="hidden" name="CRAFT_CSRF_TOKEN"
                            value="eB64BARVp8cdAkvleXooxI7XpY_SJUX8ESPOh6gFv1ZcKui24wnJpS4siEZXLNeSbVYziUElcKv-nMLMq2pzz2NvqtDpc8thHUml2ZI9uuQ="
                            autocomplete="off"><input type="hidden" name="action"
                            value="formie/submissions/submit"><input type="hidden" name="handle"
                            value="contact"><input type="hidden" name="siteId" value="1"><input type="hidden"
                            name="redirect"
                            value="dc2728241e7bca16b9de410a8597e47097663f08be5d1461d2ab09530cc70c76https://yellowdesk.com.au/thank-you">
                        <div class="fui-form-container">
                            <div id="formie-form-1552264fcdf61bada0-p-723" class="fui-page" data-index="0"
                                data-id="723">
                                <div class="fui-page-container">
                                    <div class="fui-row fui-page-row">
                                        <div id="fields-formie-form-1552264fcdf61bada0-your-name-wrap"
                                            class="fui-field fui-page-field fui-type-name fui-label-hidden fui-subfield-label-hidden fui-instructions-fieldset-start"
                                            data-field-handle="yourName" data-field-type="name">
                                            <div class="fui-field-container">
                                                <div class="fui-input-container">
                                                    <fieldset class="fui-fieldset fui-subfield-fieldset"
                                                        aria-labelledby="fields-formie-form-1552264fcdf61bada0-your-name-label">
                                                        <legend id="fields-formie-form-1552264fcdf61bada0-your-name-label"
                                                            class="fui-legend fui-sr-only">Your Name</legend>
                                                        <div class="fui-field-rows">
                                                            <div class="fui-row">
                                                                <div
                                                                    class="fui-field fui-name-field fui-name-first-name fui-label-hidden fui-text-input-field fui-field-required">
                                                                    <div class="fui-input-container">
                                                                        <div class="fui-input-container"><input
                                                                                type="text"
                                                                                id="fields-formie-form-1552264fcdf61bada0-your-name-firstName"
                                                                                class="fui-input"
                                                                                name="fields[yourName][firstName]"
                                                                                value="" placeholder="First Name"
                                                                                autocomplete="given-name" required
                                                                                data-fui-id="contact-your-name-firstName"
                                                                                data-fui-message=""
                                                                                aria-required="true" /></div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="fui-field fui-name-field fui-name-last-name fui-label-hidden fui-text-input-field fui-field-required">
                                                                    <div class="fui-input-container">
                                                                        <div class="fui-input-container"><input
                                                                                type="text"
                                                                                id="fields-formie-form-1552264fcdf61bada0-your-name-lastName"
                                                                                class="fui-input"
                                                                                name="fields[yourName][lastName]"
                                                                                value="" placeholder="Last Name"
                                                                                autocomplete="family-name" required
                                                                                data-fui-id="contact-your-name-lastName"
                                                                                data-fui-message=""
                                                                                aria-required="true" /></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fui-row fui-page-row">
                                        <div id="fields-formie-form-1552264fcdf61bada0-business-name-wrap"
                                            class="fui-field fui-page-field fui-type-single-line-text fui-label-hidden fui-subfield-label-hidden fui-instructions-above-input fui-text-input-field"
                                            data-field-handle="businessName" data-field-type="single-line-text">
                                            <div class="fui-field-container">
                                                <div class="fui-input-container"><input type="text"
                                                        id="fields-formie-form-1552264fcdf61bada0-business-name"
                                                        class="fui-input" name="fields[businessName]" value=""
                                                        placeholder="Business Name" data-fui-id="contact-business-name"
                                                        data-fui-message="" aria-required="false" /></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fui-row fui-page-row">
                                        <div id="fields-formie-form-1552264fcdf61bada0-email-address-wrap"
                                            class="fui-field fui-page-field fui-type-email-address fui-label-hidden fui-subfield-label-hidden fui-instructions-above-input fui-field-required fui-text-input-field"
                                            data-field-handle="emailAddress" data-field-type="email-address">
                                            <div class="fui-field-container">
                                                <div class="fui-input-container"><input type="email"
                                                        id="fields-formie-form-1552264fcdf61bada0-email-address"
                                                        class="fui-input" name="fields[emailAddress]" value=""
                                                        placeholder="Email Address" autocomplete="email" required
                                                        data-fui-id="contact-email-address" data-fui-message=""
                                                        aria-required="true" /></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fui-row fui-page-row">
                                        <div id="fields-formie-form-1552264fcdf61bada0-phone-number-wrap"
                                            class="fui-field fui-page-field fui-type-phone-number fui-label-hidden fui-subfield-label-hidden fui-instructions-above-input fui-field-required fui-text-input-field"
                                            data-field-handle="phoneNumber" data-field-type="phone-number">
                                            <div class="fui-field-container">
                                                <div class="fui-input-container"><input type="tel"
                                                        id="fields-formie-form-1552264fcdf61bada0-phone-number"
                                                        class="fui-input" name="fields[phoneNumber][number]"
                                                        placeholder="Phone Number" required autocomplete="tel-national"
                                                        data-fui-id="contact-phone-number" data-fui-message=""
                                                        aria-required="true" /></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fui-row fui-page-row">
                                        <div id="fields-formie-form-1552264fcdf61bada0-package-wrap"
                                            class="fui-field fui-page-field fui-type-entries fui-label-hidden fui-subfield-label-hidden fui-instructions-above-input fui-field-required"
                                            data-field-handle="package" data-field-type="entries">
                                            <div class="fui-field-container">
                                                <div class="fui-input-container"><select
                                                        id="fields-formie-form-1552264fcdf61bada0-package"
                                                        class="fui-select" name="fields[package][]" required
                                                        data-fui-id="contact-package" data-fui-message=""
                                                        aria-required="true">
                                                        <option value="" selected>Select a package to enquire
                                                            about ↓</option>
                                                        <option value="17410">10 Seat Boardroom</option>
                                                        <option value="877">6 Seat Boardroom</option>
                                                        <option value="9539">Dedicated Desk</option>
                                                        <option value="9233">Enterprise</option>
                                                        <option value="16528">Flexi Pass</option>
                                                        <option value="17158">Photo Studio</option>
                                                        <option value="16822">Podcast Room</option>
                                                        <option value="9725">Private Office</option>
                                                    </select></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fui-row fui-page-row">
                                        <div id="fields-formie-form-1552264fcdf61bada0-message-wrap"
                                            class="fui-field fui-page-field fui-type-multi-line-text fui-label-hidden fui-subfield-label-hidden fui-instructions-above-input"
                                            data-field-handle="message" data-field-type="multi-line-text">
                                            <div class="fui-field-container">
                                                <div class="fui-input-container">
                                                    <textarea id="fields-formie-form-1552264fcdf61bada0-message" class="fui-input" name="fields[message]"
                                                        placeholder="Message" data-fui-id="contact-message" data-fui-message="" aria-required="false"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fui-row fui-page-row fui-row-empty">
                                        <div id="fields-formie-form-1552264fcdf61bada0-page-url-wrap"
                                            class="fui-field fui-page-field fui-type-hidden-field fui-label-hidden fui-subfield-label-hidden fui-instructions-above-input fui-hidden"
                                            data-field-handle="pageUrl" data-field-type="hidden-field">
                                            <div class="fui-field-container">
                                                <div class="fui-input-container"><input type="hidden"
                                                        id="fields-formie-form-1552264fcdf61bada0-page-url"
                                                        name="fields[pageUrl]" value="https://yellowdesk.com.au/"
                                                        data-fui-id="contact-page-url" /></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="formie-recaptcha-placeholder"></div>
                                <div id="beesknees64fcdf61ccb84_wrapper" style="display:none;"><label
                                        for="beesknees64fcdf61ccb84">Leave this field blank</label><input type="text"
                                        id="beesknees64fcdf61ccb84" name="beesknees" style="display:none;" /></div>
                                <div class="fui-btn-container fui-btn-left font-mainb"><button type="submit"
                                        class="fui-btn fui-submit">Contact us</button></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <style>
                #contact input.fui-input,
                #contact textarea,
                #contact select {
                    font-family: poppins-bold !important;
                    background: transparent;
                    border-top: 0;
                    border-left: 0;
                    border-right: 0;
                    border-radius: 0;
                    border-width: 2px;
                    color: #272b30 !important;
                    border-color: #272b30 !important;
                    margin-bottom: 20px;
                }

                #contact .fui-input.fui-error,
                #contact .fui-select.fui-error {
                    color: #ed9507 !important;
                    border-color: #ed9507 !important;
                }

                #contact .fui-error-message {
                    color: #ed9507 !important;
                    font-family: poppins !important;
                }

                #contact .fui-submit {
                    color: #faf0ca !important;
                    background: #272b30 !important;
                    font-weight: 700 !important;
                    font-family: poppins-bold !important;
                }

                #contact .fui-submit:hover {
                    color: #faf0ca !important;
                    background: #ed9507 !important;
                }

                #contact input::placeholder,
                #contact textarea::placeholder {
                    /* Chrome, Firefox, Opera, Safari 10.1+ */
                    color: #272b30;
                    opacity: 1;
                    /* Firefox */
                }

                #contact input:-ms-input-placeholder,
                #contact textarea:-ms-input-placeholder {
                    /* Internet Explorer 10-11 */
                    color: #272b30;
                }

                #contact input::-ms-input-placeholder,
                #contact textarea::-ms-input-placeholder,
                {
                /* Microsoft Edge */
                color: #272b30;
                }

                #contact .fui-alert-success,
                #contact .fui-alert-error {
                    color: #272b30;
                    background: #ed9507;
                    font-family: poppins-bold !important;
                }
            </style>

            <div class="w-full md:w-2/3 pl-0 md:pl-28">

                <div class="map-container mx-auto" style="filter:drop-shadow(4px 6px 4px rgba(0, 0, 0, 0.05));"
                    data-aos="fade-up" data-aos-delay="300" data-aos-duration="600">

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3150.665430681963!2d144.9937197511801!3d-37.844717679647395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad6694a0460724d%3A0x94f60ca528230c9c!2sYellow%20Desk!5e0!3m2!1sen!2sau!4v1652682508957!5m2!1sen!2sau"
                        class="google-map rounded-small" frameborder="0" scrolling="no" allowfullscreen=""
                        loading="lazy"
                        style="filter: gray;-webkit-filter: grayscale(99%);-webkit-backface-visibility: hidden;"></iframe>

                </div>

            </div>
        </div>

    </div>
    {{-- <div class="prod-container">
        <ul>
            @foreach ($hotSellingProducts as $product)
                <a href="{{ $product->product_link }}"> <!-- Replace with your actual product link variable -->
                    <li>
                        <div class="prod-box">
                            <div class="prod-img">
                                <img class="lazy" src="{{ asset($product->featured_image) }}" alt="{{ $product->name }}">
                            </div>
                       
                            <div class="prod-detail txt-height">
                                <h4 class="prod-title-clipped">{{ $product->name }}</h4>
                                <p><span class="strike-price">${{ $product->price }}</span> <span
                                        class="price-text">${{ $product->discounted_price }}</span></p>
                                <p class="moq">{{ $product->min_order_quantity }}</p>
                            </div>
                        </div>
                    </li>
                </a>
            @endforeach
        </ul>
    </div>

    <div class="jsx-780071979 root py-3 py-md-4 border-bottom">
        <div class="container">
            <div class="row">
                <div class="text-center mt-2 mb-2 mb-md-3 col">
                    <h5 class="jsx-780071979">Compare prices among leading airlines and travel agencies</h5>
                </div>
            </div>
            <div class="row">
                <div class="flight-logo col-3 col-md-2 offset-md-1"><a href="https://link.farefirst.com/go-kiwi"
                        target="_blank" rel="noopener noreferrer" class="jsx-780071979"><img
                            src="_next/static/images/kiwi-6d6faae7923dd59d31fd079f3da9139c.png" alt="KIWI"
                            class="jsx-780071979 img-fluid" /></a></div>
                <div class="flight-logo col-3 col-md-2"><a href="https://link.farefirst.com/go-expedia" target="_blank"
                        rel="noopener noreferrer" class="jsx-780071979"><img
                            src="_next/static/images/expedia-cbf6310a605b1e467dd2caadd3c916e0.png" alt="EXPEDIA"
                            class="jsx-780071979 img-fluid" /></a></div>
                <div class="flight-logo col-3 col-md-2"><a href="https://link.farefirst.com/go-flightnetwork"
                        target="_blank" rel="noopener noreferrer" class="jsx-780071979"><img
                            src="_next/static/images/flightnetwork-916509500f263370e4f99757270bfc60.png" alt="FLIGHTNETWORK"
                            class="jsx-780071979 img-fluid" /></a></div>
                <div class="flight-logo col-3 col-md-2"><a href="https://link.farefirst.com/go-cheaptickets" target="_blank"
                        rel="noopener noreferrer" class="jsx-780071979"><img
                            src="_next/static/images/cheaptickets-33562c79e03d03c1faabb48e6f717ad1.png" alt="CHEAPTICKETS"
                            class="jsx-780071979 img-fluid" /></a></div>
                <div class="d-none d-md-block flight-logo col-md-2"><a href="https://link.farefirst.com/go-mytrip"
                        target="_blank" rel="noopener noreferrer" class="jsx-780071979"><img
                            src="_next/static/images/mytrip-bd164c3d5d76a9ea13130df340f0de7a.png" alt="MYTRIP"
                            class="jsx-780071979 img-fluid" /></a></div>
            </div>
        </div>
    </div>
    <div class="jsx-43082432 root">
        <div class="container">
            <div class="text-center row">
                <div class="my-3 col">
                    <div class="jsx-43082432 h2 top-destination-header">Top Destinations</div>
                    <div class="jsx-43082432 text-muted">The most searched countries in FareFirst</div>
                </div>
            </div>
            <div class="grid-1 no-gutters row">
                <div class="pic-grid-root col-md-5">
                    <div role="button" tabindex="0" class="jsx-43082432">
                        <div class="jsx-43082432 pic-grid">
                            <div class="jsx-43082432 pic-content grid-spain"></div>
                            <div class="jsx-43082432 image-title">
                                <div class="jsx-43082432 image-header">Spain</div>
                                <div class="jsx-43082432 image-sub-title">#spainindetail</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="no-gutters row">
                        <div class="pic-grid-root col-md-6">
                            <div role="button" tabindex="0" class="jsx-43082432">
                                <div class="jsx-43082432 pic-grid">
                                    <div class="jsx-43082432 pic-content grid-turkey"></div>
                                    <div class="jsx-43082432 image-title">
                                        <div class="jsx-43082432 image-header">Turkey</div>
                                        <div class="jsx-43082432 image-sub-title">Be our guest</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pic-grid-root col-md-6">
                            <div role="button" tabindex="0" class="jsx-43082432">
                                <div class="jsx-43082432 pic-grid">
                                    <div class="jsx-43082432 pic-content grid-morocco"></div>
                                    <div class="jsx-43082432 image-title">
                                        <div class="jsx-43082432 image-header">Morocco</div>
                                        <div class="jsx-43082432 image-sub-title">Much Mor</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-2 no-gutters row">
                <div class="col-md-7">
                    <div class="no-gutters row">
                        <div class="pic-grid-root col-md-6">
                            <div role="button" tabindex="0" class="jsx-43082432">
                                <div class="jsx-43082432 pic-grid">
                                    <div class="jsx-43082432 pic-content grid-france"></div>
                                    <div class="jsx-43082432 image-title">
                                        <div class="jsx-43082432 image-header">France</div>
                                        <div class="jsx-43082432 image-sub-title">Rendez vous en France</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pic-grid-root col-md-6">
                            <div role="button" tabindex="0" class="jsx-43082432">
                                <div class="jsx-43082432 pic-grid">
                                    <div class="jsx-43082432 pic-content grid-thailand"></div>
                                    <div class="jsx-43082432 image-title">
                                        <div class="jsx-43082432 image-header">Thailand</div>
                                        <div class="jsx-43082432 image-sub-title">Amazing Thailand</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pic-grid-root col-md-5">
                    <div role="button" tabindex="0" class="jsx-43082432">
                        <div class="jsx-43082432 pic-grid">
                            <div class="jsx-43082432 pic-content grid-mexico"></div>
                            <div class="jsx-43082432 image-title">
                                <div class="jsx-43082432 image-header">Mexico</div>
                                <div class="jsx-43082432 image-sub-title">Live It to Believe It</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
