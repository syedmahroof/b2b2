<header id="header" data-controller="search" data-search-url-value="tv_search_inspiration"
data-search-selected-type-value="inspiration">
<div class="inner">
	<div class="header-main ">
		<a href="index.html" class="header-main__logo" aria-label="Awwwards">
			<svg width="30" height="16" viewBox="0 0 30 16">
				<path
					d="m18.4 0-2.803 10.855L12.951 0H9.34L6.693 10.855 3.892 0H0l5.012 15.812h3.425l2.708-10.228 2.709 10.228h3.425L22.29 0h-3.892ZM24.77 13.365c0 1.506 1.12 2.635 2.615 2.635C28.879 16 30 14.87 30 13.365c0-1.506-1.12-2.636-2.615-2.636s-2.615 1.13-2.615 2.636Z" />
			</svg>

		</a>
		<div class="header-search" data-search-target="search">
			<div class="header-search__overlay" data-search-target="overlay"
				data-action="click->search#close"></div>
			<div class="search-form">
				<div class="search-form__field">
					<button type="submit" class="search-form__button" aria-label="Search">
						<svg class="ico-svg" viewbox="0 0 20 20" width="20">
							<use xlink:href="assets/redesign/images/sprite-icons.svg#lupe"></use>
						</svg>

					</button>
					<input type="text" value="" placeholder="Search in Inspiration"
						class="search-form__input js-search-input"
						data-action="focus->search#show keyup->search#search" data-search-target="input">
				</div>
				<div class="search-form__in hidden-sm">
					<div class="search-form__separator">IN</div>
					<div class="search-dropdown" data-controller="search-dropdown"
						data-action="click->search-dropdown#showSelector">
						<svg class="ico-svg search-dropdown__arrow" viewbox="0 0 20 20" width="12">
							<use xlink:href="assets/redesign/images/sprite-icons.svg#arrow-dd"></use>
						</svg>


						<div class="search-dropdown__selected">
							Inspiration
						</div>
						<div class="search-dropdown__options">
							<a class="search-dropdown__option " data-option="inspiration"
								data-action="click->search-dropdown#selectItem"
								href="/inspiration_search/">Inspiration</a>
							<a class="search-dropdown__option is-child" data-option="submission"
								data-action="click->search-dropdown#selectItem"
								href="/websites/">Websites</a>
							<a class="search-dropdown__option is-child" data-option="element"
								data-action="click->search-dropdown#selectItem"
								href="/elements/">Elements</a>
							<a class="search-dropdown__option is-child" data-option="collection"
								data-action="click->search-dropdown#selectItem"
								href="/collections/search/">Collections</a>
							<a class="search-dropdown__option " data-option="post"
								data-action="click->search-dropdown#selectItem" href="/blog/">Blog</a>
							<a class="search-dropdown__option " data-option="course"
								data-action="click->search-dropdown#selectItem"
								href="/academy/">Courses</a>
							<a class="search-dropdown__option " data-option="user"
								data-action="click->search-dropdown#selectItem"
								href="/directory/">Directory</a>
						</div>
					</div>
				</div>
			</div>
			<div class="header-search__results">
				<div class="content-tabs">
					<div class="content-tabs__item active" id="search-default"
						data-search-target="defaultView">
						<div class="header-search__content-results">
							<div class="header-search__left">

								<div class="header-search__row hidden-sm">
									<p class="text-uppercase">Featured in Awwwards</p>
									<ul class="list-featured">
										<li>
											<figure>
												<a href="websites/sites_of_the_day/index.html">
													<img width="143" height="88"
														class="list-featured__img" loading="lazy"
														src="https://assets.awwwards.com/assets/redesign/images/header/search/featured/1.jpg"
														alt="Sites of the Day">
												</a>
											</figure>
											<a class="list-featured__title"
												href="websites/sites_of_the_day/index.html">Sites of the
												Day</a>
										</li>
										<li>
											<figure>
												<a href="websites/index.html">
													<img width="143" height="88"
														class="list-featured__img" loading="lazy"
														src="https://assets.awwwards.com/assets/redesign/images/header/search/featured/2.jpg"
														alt="Websites">
												</a>
											</figure>
											<a class="list-featured__title"
												href="websites/index.html">Websites</a>
										</li>
										<li>
											<figure>
												<a href="elements/index.html">
													<img width="143" height="88"
														class="list-featured__img" loading="lazy"
														src="https://assets.awwwards.com/assets/redesign/images/header/search/featured/3.jpg"
														alt="Elements">
												</a>
											</figure>
											<a class="list-featured__title"
												href="elements/index.html">Elements</a>
										</li>
										<li>
											<figure>
												<a href="academy/index.html">
													<img width="143" height="88"
														class="list-featured__img" loading="lazy"
														src="https://assets.awwwards.com/assets/redesign/images/header/search/featured/4.jpg"
														alt="Courses">
												</a>
											</figure>
											<a class="list-featured__title"
												href="academy/index.html">Courses</a>
										</li>
									</ul>
								</div>
								<div class="header-search__row">
									<p class="text-uppercase">Best Tags</p>
									<ul class="list-tags">
										<li>
											<a href="websites/animation/index.html"
												class="button button--tag--x-small--dark">Animation</a>
										</li>
										<li>
											<a href="websites/portfolio/index.html"
												class="button button--tag--x-small--dark">Portfolio</a>
										</li>
										<li>
											<a href="websites/404-pages/index.html"
												class="button button--tag--x-small--dark">404 pages</a>
										</li>
										<li>
											<a href="websites/clean/index.html"
												class="button button--tag--x-small--dark">Clean</a>
										</li>
									</ul>
								</div>

							</div>
							<div class="header-search__right">
								<p class="uppercase">Coming soon</p>
								<div class="slider-header swiper" data-controller="swiper"
									data-swiper-custom-configuration-value="&#x7B;&quot;grabCursor&quot;&#x3A;true,&quot;navigation&quot;&#x3A;&#x7B;&quot;nextEl&quot;&#x3A;&quot;.js-slider-header-next&quot;,&quot;prevEl&quot;&#x3A;&quot;.js-slider-header-prev&quot;&#x7D;,&quot;slidesPerView&quot;&#x3A;&quot;auto&quot;,&quot;spaceBetween&quot;&#x3A;16&#x7D;">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<figure class="slider-header__figure">
												<a
													href="c2-montr%c3%a9al-by-koki-kiko-and-friends-wins-sotm-may.html">
													<img width="350" height="263"
														class="slider-header__img lazy"
														data-controller="lazyload-image"
														src="data:image/svg+xml,%3Csvg xmlns=&#039;http://www.w3.org/2000/svg&#039; viewBox=&#039;0 0 350 263&#039; %3E%3C/svg%3E"
														data-srcset="https://assets.awwwards.com/awards/media/cache/thumb_440_330/images/2023/06/c2mtl-thumb.jpg 1x, https://assets.awwwards.com/awards/media/cache/optimize/images/2023/06/c2mtl-thumb.jpg 2x"
														alt="C2 Montréal by KOKI-KIKO and friends wins SOTM May" />
												</a>
											</figure>
											<h4 class="slider-header__title">C2 Montréal by KOKI-KIKO and
												friends wins SOTM May</h4>
										</div>
										<div class="swiper-slide">
											<figure class="slider-header__figure">
												<a
													href="engine-station-by-monogrid-a-3d-experiential-e-commerce-destination.html">
													<img width="350" height="263"
														class="slider-header__img lazy"
														data-controller="lazyload-image"
														src="data:image/svg+xml,%3Csvg xmlns=&#039;http://www.w3.org/2000/svg&#039; viewBox=&#039;0 0 350 263&#039; %3E%3C/svg%3E"
														data-srcset="https://assets.awwwards.com/awards/media/cache/thumb_440_330/images/2023/05/es-thumb-v2.jpg 1x, https://assets.awwwards.com/awards/media/cache/optimize/images/2023/05/es-thumb-v2.jpg 2x"
														alt="Engine Station by MONOGRID: A 3D Experiential E-Commerce Destination" />
												</a>
											</figure>
											<h4 class="slider-header__title">Engine Station by MONOGRID: A
												3D Experiential E-Commerce Destination</h4>
										</div>
										<div class="swiper-slide">
											<figure class="slider-header__figure">
												<a href="case-study-reinventing-locomotive-r.html">
													<img width="350" height="263"
														class="slider-header__img lazy"
														data-controller="lazyload-image"
														src="data:image/svg+xml,%3Csvg xmlns=&#039;http://www.w3.org/2000/svg&#039; viewBox=&#039;0 0 350 263&#039; %3E%3C/svg%3E"
														data-srcset="https://assets.awwwards.com/awards/media/cache/thumb_440_330/images/2023/05/loco-thumb.jpg 1x, https://assets.awwwards.com/awards/media/cache/optimize/images/2023/05/loco-thumb.jpg 2x"
														alt="Reinventing Locomotive® Wins Site of the Month March" />
												</a>
											</figure>
											<h4 class="slider-header__title">Reinventing Locomotive® Wins
												Site of the Month March</h4>
										</div>
										<div class="swiper-slide">
											<figure class="slider-header__figure">
												<a href="vote-for-site-of-the-month-april-2023.html">
													<img width="350" height="263"
														class="slider-header__img lazy"
														data-controller="lazyload-image"
														src="data:image/svg+xml,%3Csvg xmlns=&#039;http://www.w3.org/2000/svg&#039; viewBox=&#039;0 0 350 263&#039; %3E%3C/svg%3E"
														data-srcset="https://assets.awwwards.com/awards/media/cache/thumb_440_330/images/2023/05/sotm-april-2023-thumbnail.jpg 1x, https://assets.awwwards.com/awards/media/cache/optimize/images/2023/05/sotm-april-2023-thumbnail.jpg 2x"
														alt="Vote for Site of the Month April 2023!" />
												</a>
											</figure>
											<h4 class="slider-header__title">Vote for Site of the Month
												April 2023!</h4>
										</div>
									</div>
									<div class="slider-header__nav">
										<div class="slider-header__btnav js-slider-header-prev">
											<svg width="14" height="11" viewBox="0 0 14 11">
												<path
													d="M1.6282 5.31601L2.20129 5.88332L2.20127 5.88907L6.08664 9.77444L5.27172 10.5894L1.38635 6.70399L-0.000460164 5.31717L0.814456 4.50226L5.31672 -1.6281e-06L6.12471 0.813773L2.20618 4.7323L1.6282 5.31601ZM3.21672 5.60365L4.18558 4.22814L13.0313 4.19073L13.0254 5.56217L3.21672 5.60365Z" />
											</svg>
										</div>
										<div class="slider-header__btnav js-slider-header-next">
											<svg width="14" height="11" viewBox="0 0 14 11">
												<path
													d="M11.403 5.27335L10.83 4.70604L10.83 4.70028L6.94461 0.814915L7.75953 0L11.6449 3.88537L13.0317 5.27218L12.2168 6.0871L7.71453 10.5894L6.90654 9.77558L10.8251 5.85706L11.403 5.27335ZM9.81453 4.9857L8.84567 6.36122L0 6.39862L0.00580048 5.02719L9.81453 4.9857Z" />
											</svg>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="content-tabs__item" id="search-autocomplete"
						data-search-target="autocompleteView">
						<div class="header-search__content-results">
							<div class="header-search__row">
								<div data-search-target="autocompleteTagsContainer">
									<p class="text-uppercase">Search</p>
									<ul class="list-search-ac" data-search-target="autocompleteTags"></ul>
								</div>
								<div data-search-target="autocompleteUsersContainer">
									<p class="text-uppercase">Users</p>
									<ul class="list-search-ac list-search-ac--s2"
										data-search-target="autocompleteUsers"></ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header-main__right">
			<div class="header-main__user">
				<strong class="header-main__link hidden-sm" data-controller="login"
					data-action="click->login#open">Log in</strong>
				<strong class="header-main__link hidden-sm" data-controller="login"
					data-action="click->login#register">Sign Up</strong>
				<span class="header-main__ico" data-controller="login" data-action="click->login#open">
					<svg class="ico-svg" viewbox="0 0 20 20" width="20">
						<use xlink:href="assets/redesign/images/sprite-icons.svg#user-login"></use>
					</svg>

				</span>
				<div id="g_id_onload"
					data-client_id="67367874134-drekvs51ripc1p92r1hpcntjk1jfmqka.apps.googleusercontent.com"
					data-login_uri="https://www.awwwards.com/login-google-one-tap" data-_destination="/">
				</div>
			</div>


			<div class="header-main__bts">
				<a href="pro.html" class="button button--rounded">
					Be Pro
				</a>
				<a href="submit/index.html" class="button button--outline--rounded">
					Submit Website
				</a>
			</div>
		</div>
	</div>
</div>
</header>