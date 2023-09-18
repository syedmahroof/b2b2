/** Shopify CDN: Minification failed

Line 156:4 Transforming const to the configured target environment ("es5") is not supported yet
Line 158:4 Transforming let to the configured target environment ("es5") is not supported yet
Line 159:4 Transforming let to the configured target environment ("es5") is not supported yet
Line 207:4 Transforming let to the configured target environment ("es5") is not supported yet
Line 210:8 Transforming let to the configured target environment ("es5") is not supported yet
Line 211:8 Transforming const to the configured target environment ("es5") is not supported yet
Line 232:8 Transforming let to the configured target environment ("es5") is not supported yet
Line 233:8 Transforming const to the configured target environment ("es5") is not supported yet
Line 234:8 Transforming let to the configured target environment ("es5") is not supported yet
Line 264:8 Transforming let to the configured target environment ("es5") is not supported yet
... and 12 more hidden warnings

**/
if (typeof boostPFSThemeConfig !== 'undefined') {
  // Override Settings
  var boostPFSFilterConfig = {
    general: {
      limit: boostPFSConfig.custom.products_per_page,
      loadProductFirst: true,
      numberFilterTree: 2,
      selectOptionContainer: '.grid__item .card-wrapper',
      stickyFixTopPos: true
    },
    selector: {
      otpTopCartCount: '.cart-count-bubble'
    }
  };
}

(function () {
  var onSale = false,
    soldOut = false,
    priceVaries = false,
    images = [],
    boostPFSRangeWidths = [165, 360, 533, 720, 940, 1066];


  BoostPFS.inject(this);
  /* For Filter Setting Layout */
  Selector.stickyElementDesktop = jQ('.boost-pfs-filter-left-col').length > 0 && !Utils.isMobile() ? '.boost-pfs-filter-left-col' : '.boost-pfs-filter-tree';
  /************************** CUSTOMIZE DATA BEFORE BUILDING PRODUCT ITEM **************************/
  function prepareShopifyData(data) {
    // Displaying price base on the policy of Shopify, have to multiple by 100
    soldOut = !data.available; // Check a product is out of stock
    onSale = data.compare_at_price_min > data.price_min; // Check a product is on sale
    priceVaries = data.price_min != data.price_max; // Check a product has many prices
    // Convert images to array
    images = data.images_info;
    // Get First Variant (selected_or_first_available_variant)
    firstVariant = data['variants'][0];
    if (Utils.getParam('variant') !== null && Utils.getParam('variant') != '') {
      var paramVariant = data.variants.filter(function (e) {
        return e.id == Utils.getParam('variant');
      });
      if (typeof paramVariant[0] !== 'undefined') firstVariant = paramVariant[0];
    } else {
      for (var i = 0; i < data['variants'].length; i++) {
        if (data['variants'][i].available) {
          firstVariant = data['variants'][i];
          break;
        }
      }
    }

    return data;
  }

  /************************** END CUSTOMIZE DATA BEFORE BUILDING PRODUCT ITEM **************************/
  /************************** BUILD PRODUCT LIST **************************/
  // Build Product Grid Item
  ProductGridItem.prototype.compileTemplate = function (data) {
    if (!data) data = this.data;
    // Customize API data to get the Shopify data
    data = prepareShopifyData(data);

    // Get Template
    var itemHtml = boostPFSTemplate.productGridItemHtml;
    // Add Custom class
    var soldOutClass = soldOut ? boostPFSTemplate.soldOutClass : '';
    var saleClass = onSale ? boostPFSTemplate.saleClass : '';
    var ratioImage = getRatioImage(data);
    var imageAspectRatio = ratioImage / getAspectRatio(data.images_info[0]) * 100;

    itemHtml = itemHtml.replace(/{{imageAspectRatio}}/g, imageAspectRatio);

    itemHtml = itemHtml.replace(/{{soldOutClass}}/g, soldOutClass);


    itemHtml = itemHtml.replace(/{{saleClass}}/g, saleClass);

    // Add Card product class
    itemHtml = itemHtml.replace(/{{cardProductClass}}/g, buildCardProductClass(data));
    // Add Card inner product class
    itemHtml = itemHtml.replace(/{{cardInnerProductClass}}/g, buildCardInnerProductClass(data));
    // Add Card badge position
    itemHtml = itemHtml.replace(/{{cardBadgePosition}}/g, boostPFSThemeConfig.custom.badge_position);
    // Add check card heading five
    itemHtml = itemHtml.replace(/{{cardIsHeadingFive}}/g, buildCardIsHeadingFive(data));
    // Add sold out Label
    itemHtml = itemHtml.replace(/{{itemSoldOut}}/g, buildSoldOutLabel());
    // Add sale Label
    itemHtml = itemHtml.replace(/{{itemSale}}/g, buildSaleLabel());
    // Add Images
    itemHtml = itemHtml.replace(/{{itemImages}}/g, buildImages(data));
    // Add Price
    itemHtml = itemHtml.replace(/{{itemPrice}}/g, buildPrice(data));


    // Add Review
    itemHtml = itemHtml.replace(/{{itemReviews}}/g, buildReview(data));

    // Add Description
    itemHtml = itemHtml.replace(/{{itemDescription}}/g, boostPFSThemeConfig.custom.description || '');

    // Add Vendor
    itemHtml = itemHtml.replace(/{{itemVendor}}/g, buildVendor(data));


    // Add main attribute (Always put at the end of this function)
    itemHtml = itemHtml.replace(/{{itemId}}/g, data.id);
    itemHtml = itemHtml.replace(/{{itemTitle}}/g, data.title);
    itemHtml = itemHtml.replace(/{{itemHandle}}/g, data.handle);
    itemHtml = itemHtml.replace(/{{itemVendorLabel}}/g, data.vendor);
    itemHtml = itemHtml.replace(/{{itemUrl}}/g, Utils.buildProductItemUrlWithVariant(data));
    itemHtml = itemHtml.replace(/{{itemTags}}/g, buildTags(data));
    itemHtml = itemHtml.replace(/{{itemAvailable}}/g, buildAvailability(data));
    itemHtml = itemHtml.replace(/{{itemSizes}}/g, buildSizes(data));
    itemHtml = itemHtml.replace(/{{sizeClass}}/g, buildSizeClass(data));

    setTimeout(function(){
      if(window.WhatSub) {
        window.WhatSub.dispatch('CREATE_SWATCHES', data);
        window.WhatSub.dispatch('CREATE_REVIEWS', data);
      }
    }, 1000);

    return itemHtml;
  };



  function buildSizeClass(data) {
    var html = '';
    if (data.options[0] === 'maat'){
      html += 'm-product-card__content--inner'
    } else {
      html += 'm-product-card__content--inner-without-sizes'
    }
    return html;
  }


  function buildSizes(data) {
    const productUrl = Utils.buildProductItemUrlWithVariant(data)
    var html = '';
    let variantAvailable = ''
    let variantMaat = false
    if (data.variants.length > 1){
      for (var j = 0; j < data.variants.length; j++) {
      if(data.variants[j].option_maat){
        variantMaat = true
      }
    }
    if (variantMaat){
      html += '<div class="m-product-card__sizes">'
    for (var i = 0; i < data.variants.length; i++) {
      if(data.variants[i].option_maat){
        if(!data.variants[i].available){
          variantAvailable = 'a-option--disabled'
          html += '<div class="a-option a-option--square a-option--dark no-hover ' + variantAvailable + '"><span>' + data.variants[i].option_maat + '</span></div>';

        } else {
          variantId = data.variants[i].id
          variantUrl = productUrl + '?variant=' + variantId
          variantAvailable = ''
          html += '<a href="'  + variantUrl + '" class="a-option a-option--square a-option--dark no-hover full-unstyled-link ' + variantAvailable + '"><span>' + data.variants[i].option_maat + '</span></a>';

        }



      }
    }
  }
    html += '</div>'
}

/*
    var html = '';
    if (data.options_with_values[0].name == 'size' || data.options_with_values[0].name == 'maat'){
      html += '<div class="m-product-card__sizes">'
      for (var i = 0; i < data.options_with_values[0].values.length; i++) {
        html += '<a class="m-product-card__size-btn"><span>' + data.options_with_values[0].values[i].title + '</span></a>';
      }
      html += '</div>'
    }
*/


    return html;
  }

  function buildAvailability(data) {
    var available = '';
    let tagClass = "";
    for (var i = 0; i < data.tags.length; i++) {
      if(data.tags[i].indexOf('__status') > -1){
        let fullTag = data.tags[i];
        const tag = fullTag.split(":")
        if (tag.indexOf('pre-order') > -1){
          tagClass = " pre-order"
        }

      }
    }

    if(data.available){
      available += '<div class="price__stock-container'+ tagClass +'">{{product.metafields.inventory.delivery}}</div>';
    }

    return available;
  }

  function buildTags(data) {
    var html = '';
    for (var j = 0; j < data.tags.length; j++) {

      if(data.tags[j].indexOf("__status") > -1){

        let fullTag = data.tags[j];
        const tag = fullTag.split(":")
        let tagClass = "--empty"
        if(tag[1].indexOf('promo') > -1){
          tagClass = "--blue"
        }
        else if (tag[1].indexOf('keuze') > -1){
          tagClass = "--black"
        }
        else if (tag[1].indexOf('pre-order') > -1){
          tagClass = "--orange"
        }
        else if (tag[1].indexOf('excl') > -1){
          tagClass = "--gold"
        }
        else if (tag[1].indexOf('drops') > -1){
          tagClass = "--drops"
        }
        else if (tag[1].indexOf('sale') > -1){
          tagClass = "--sale"
        }
        else{
          tagClass = "--blue"
        }

        if (tagClass!= "--drops" && tagClass!= "--sale"){
          html += '<div class="m-product-card__badge m-product-card__badge' + tagClass + '"><span>' + tag[1] + '</span></div>';
        }

      }

      if(data.tags[j].indexOf("__DROPS_DATE_") > -1){
        let dateTag = data.tags[j];
        const tempReleaseDate = dateTag.split("__DROPS_DATE_")
        releaseDate = tempReleaseDate[1].replace('@', 'T')
        releaseDateTime = tempReleaseDate[1].replace('@', ':')
        const releaseDateStr = new Date(releaseDateTime)
        const releaseDateSeconds = releaseDateStr.getTime() / 1000;

        const currentDateTime = new Date();
        const currentDateSeconds=currentDateTime.getTime() / 1000;

        if (releaseDateSeconds > currentDateSeconds){
          html += '<div class="m-product-card__badge m-product-card__badge--drops"><span>' + '<div class="m-product-card__badge--countdown js-counter" data-end-date="' + releaseDate + '" data-units="d,h,m,s"><span class="coming-soon js-coming-soon"></span></div>' + '</span></div>';
        }

      }

      if(data.tags[j].indexOf("__SALE_DATE_") > -1){
        let dateTag = data.tags[j];
        const tempReleaseDate = dateTag.split("__SALE_DATE_")
        releaseDate = tempReleaseDate[1].replace('@', 'T')
        releaseDateTime = tempReleaseDate[1].replace('@', ':')
        const releaseDateStr = new Date(releaseDateTime)
        const releaseDateSeconds = releaseDateStr.getTime() / 1000;

        const currentDateTime = new Date();
        const currentDateSeconds=currentDateTime.getTime() / 1000;
        if (releaseDateSeconds > currentDateSeconds){
          html += '<div class="m-product-card__badge m-product-card__badge--sale"><span>' + '<div class="m-product-card__badge--countdown js-counter" data-end-date="' + releaseDate + '" data-units="d,h,m,s"><span class="coming-soon js-sale"></span></div>' + '</span></div>';
        }

      }


    }
    return html;
  }

  /************************** END BUILD PRODUCT LIST **************************/
  /************************** BUILD PRODUCT ITEM ELEMENTS **************************/
  function buildImages(data) {
    var html = '';
    if (images && Array.isArray(images) && images.length > 0) {
      html += '<div class="card__media">';
      var aspectRatio = '',
        rangeWidths = boostPFSRangeWidths;

      var dataSrcSet = '',
        imgAlt = data.title,
        flipImageSrcSet = '';

      var activeSwapImage = !Utils.isMobile() && images.length > 1 &&
        boostPFSThemeConfig.custom.hasOwnProperty('show_secondary_image') &&
        boostPFSThemeConfig.custom.show_secondary_image == true;

      for (var i = 0; i < rangeWidths.length; i++) {
        dataSrcSet += Utils.getFeaturedImage(images, rangeWidths[i] + 'x') + ' ' + rangeWidths[i] + 'w';

        if (activeSwapImage) {
          flipImageSrcSet += Utils.optimizeImage(images[1]['src'], rangeWidths[i] + 'x') + ' ' + rangeWidths[i] + 'w';
        }

        if (i < rangeWidths.length - 1) {
          dataSrcSet += ', ';

          if (activeSwapImage) {
            flipImageSrcSet += ', ';
          }
        }
      }

      aspectRatio = images[0]['width'] / images[0]['height'];
      html += '<div class="media media--transparent media--hover-effect"><img class="motion-reduce"' +
        'loading="lazy"' +
        'srcset="' + dataSrcSet + '" ' +
        'height="' + images[0].height + '" ' +
        'width="' + images[0].width + '" ' +
        'sizes="(min-width: 1100px) 535px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"' +
        'src="' + Utils.optimizeImage(images[0].src, '533x') + '" ' +
        'alt="' + imgAlt + '" />';

      if (activeSwapImage) {
        html += '<img class="motion-reduce"' +
        'loading="lazy"' +
        'srcset="' + flipImageSrcSet + '" ' +
        'height="' + images[1].height + '" ' +
        'width="' + images[1].width + '" ' +
        'sizes="(min-width: 1100px) 535px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"' +
        'src="' + Utils.optimizeImage(images[1].src, '533x') + '" ' +
        'alt="' + imgAlt + '" />';
      }
      html += '</div>';
      html += '</div>';
    } else {

      html += '<div class="card__media">';
      html +=
      '<div class="media media--hover-effect"><img class="motion-reduce"' +
      'loading="lazy"' +
      'sizes="(min-width: 1100px) 535px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"' +
      'height="311px" ' +
      'width="311px" ' +
      'src="' + Utils.optimizeImage('https://cdn.shopify.com/s/files/1/0629/7881/8265/files/thumbnail_product_tile.png?v=1664463062', '533x') + '" ' +
      'alt="Placeholder Image" />' +
      '</div>';
      html += '</div>';
    }
    return html;
  }

  function buildCardProductClass(data) {
    var html = '' + boostPFSThemeConfig.custom.card_style;
    if (!images) {
      html += ' card--text';
    } else {
      html += ' card--media';
    }
    if (boostPFSThemeConfig.custom.card_style == 'card') {
      html += ' color-' + boostPFSThemeConfig.custom.card_color_scheme;
    }

    return html;
  }

  function buildCardInnerProductClass(data) {
    var html = '';
    if (boostPFSThemeConfig.custom.card_style == 'standard') {
      html += ' color-' + boostPFSThemeConfig.custom.card_color_scheme;
    }
    if (images || boostPFSThemeConfig.custom.card_style == 'standard') {
      html += ' ratio';
    }
    return html;
  }

  function buildCardIsHeadingFive(data) {
    var html = '';
    if (images || boostPFSThemeConfig.custom.card_style == 'standard') {
      html = 'h5';
    }
    return html;
  }

  function buildVendor(data) {
    var html = '';
    if (boostPFSThemeConfig.custom.hasOwnProperty('show_vendor') &&
      boostPFSThemeConfig.custom.show_vendor === true) {
      html = boostPFSTemplate.vendorHtml;
    }
    return html;
  }

  function buildPrice(data) {
    var html = '';
    var noComparePrice = data.price_varies === false && data.compare_at_price_varies;
    var priceAmount = boostPFSConfig.custom.currency_code_enabled ? Utils.formatMoney(data.price_min, 'money_with_currency') : Utils.formatMoney(data.price_min);
    var compareAtPrice = boostPFSConfig.custom.currency_code_enabled ? Utils.formatMoney(data.compare_at_price_min, 'money_with_currency') : Utils.formatMoney(data.compare_at_price_min);
    var moneyPrice = priceVaries ? boostPFSConfig.label.from_price_html.replace(/{{ price }}/, priceAmount) : priceAmount;
    var unitPriceClass = !data.available || typeof data?.selected_or_first_available_variant?.unit_price_measurement === 'undefined' ? 'hidden' : ''
    html = `<div class="price ${soldOut ? 'price--sold-out' : ''} ${onSale ? 'price--on-sale' : ''}${noComparePrice ? 'price--no-compare' : ''}">
          <div class="price__container">
            <div class="price__regular">
              <span class="visually-hidden visually-hidden--inline">
                ${boostPFSConfig.label.regular_price}
              </span>
              <span class="price-item price-item--regular">
                ${moneyPrice}
              </span>
            </div>
            <div class="price__sale">
              <span class="visually-hidden visually-hidden--inline">
                ${boostPFSConfig.label.regular_price}
              </span>
              <span>
                <s class="price-item price-item--regular">
                  ${compareAtPrice}
                </s>
              </span>
              <span class="visually-hidden visually-hidden--inline">${boostPFSConfig.label.sale_price}</span>
              <span class="price-item price-item--sale price-item--last">
                ${moneyPrice}
              </span>
            </div>
            <small class="unit-price caption ${unitPriceClass}">
              <span class="visually-hidden">${boostPFSConfig.label.unit_price}</span>
              <span class="price-item price-item--last">
                <span>${Utils.formatMoney(data.selected_or_first_available_variant && data.selected_or_first_available_variant.unit_price)}</span>
                <span aria-hidden="true">/</span>
                <span class="visually-hidden">&nbsp;${boostPFSConfig.label.unit_price_separator}&nbsp;</span>
              </span>
            </small>
          </div>
        </div>`
    return html;
  }

  function buildSoldOutLabel() {
    // Build Sold out label
    var soldOutLabel = '';
    if (boostPFSThemeConfig.custom.hasOwnProperty('sold_out_badge_color_scheme') && soldOut) {
      soldOutLabel = boostPFSTemplate.soldOutLabelHtml.replace(/{{soldOutBadgeClass}}/g, boostPFSThemeConfig.custom.sold_out_badge_color_scheme);
    }
    return soldOutLabel;
  }

  function buildSaleLabel() {
    // Build Sale label
    var saleLabel = '';
    if (boostPFSThemeConfig.custom.hasOwnProperty('sale_badge_color_scheme') && onSale && !soldOut) {
      saleLabel = boostPFSTemplate.saleLabelHtml.replace(/{{saleBadgeClass}}/g, boostPFSThemeConfig.custom.sale_badge_color_scheme);
    }
    return saleLabel;
  }

  function buildReview(data) {
    var html = '';
    const productUrl = Utils.buildProductItemUrlWithVariant(data)

    // Get all variant skus
    var skus = data.variants.map(function (variant) {
      return variant.sku
    });

    // Get all variant ids
    var ids = data.variants.map(function (variant) {
      return variant.id
    });

    // Join with separator
    skus = skus.join(';')
    ids = ids.join(';')

    // Build html
    html += '<div class="m-reviews m-product-card__reviews">';
    html += '<a href="' + productUrl + '#pdp-reviews" class="full-unstyled-link js-scroll-link">';
    html += `<div class="ruk_rating_snippet m-reviews__stars m-reviews__stars-${data.id}" data-sku="${data.handle};${skus};${ids}"></div>`;
    html += '</a>';
    html += '</div>';

    return html;
  }

  function getAspectRatio(data) {
    var width = (data == null) ? '535' : data.width;
    var height = (data == null) ? '535' : data.height;

    return width / height;
  }

  function getRatioImage(data) {
    var ratio = 1;
    if (images && boostPFSThemeConfig.custom.media_size == 'portrait') {
      ratio = 0.8;
    } else if (images && boostPFSThemeConfig.custom.media_size == 'adapt') {
      ratio = getAspectRatio(data.images[0]);
    }
    if (ratio === 0 || ratio === null) {
      ratio = 1;
    }
    return ratio;
  }

  /************************** END BUILD PRODUCT ITEM ELEMENTS **************************/
  /************************** BUILD TOOLBAR **************************/
  // Build Pagination
  ProductPaginationDefault.prototype.compileTemplate = function (totalProduct) {
    if (!totalProduct) totalProduct = this.totalProduct;
    // Get page info
    var currentPage = parseInt(Globals.queryParams.page);
    var totalPage = Math.ceil(totalProduct / Globals.queryParams.limit);
    // If it has only one page, clear Pagination
    if (totalPage <= 1) {
      return '';
    }

    var paginationHtml = boostPFSTemplate.paginateHtml;
    // Build Previous
    var previousHtml = (currentPage > 1) ? boostPFSTemplate.previousActiveHtml : '';
    previousHtml = previousHtml.replace(/{{itemUrl}}/g, Utils.buildToolbarLink('page', currentPage, currentPage - 1));
    paginationHtml = paginationHtml.replace(/{{previous}}/g, previousHtml);
    // Build Next
    var nextHtml = (currentPage < totalPage) ? boostPFSTemplate.nextActiveHtml : '';
    nextHtml = nextHtml.replace(/{{itemUrl}}/g, Utils.buildToolbarLink('page', currentPage, currentPage + 1));
    paginationHtml = paginationHtml.replace(/{{next}}/g, nextHtml);
    // Create page items array
    var beforeCurrentPageArr = [];
    for (var iBefore = currentPage - 1; iBefore > currentPage - 3 && iBefore > 0; iBefore--) {
      beforeCurrentPageArr.unshift(iBefore);
    }
    if (currentPage - 4 > 0) {
      beforeCurrentPageArr.unshift('...');
    }
    if (currentPage - 4 >= 0) {
      beforeCurrentPageArr.unshift(1);
    }
    beforeCurrentPageArr.push(currentPage);
    var afterCurrentPageArr = [];
    for (var iAfter = currentPage + 1; iAfter < currentPage + 3 && iAfter <= totalPage; iAfter++) {
      afterCurrentPageArr.push(iAfter);
    }
    if (currentPage + 3 < totalPage) {
      afterCurrentPageArr.push('...');
    }
    if (currentPage + 3 <= totalPage) {
      afterCurrentPageArr.push(totalPage);
    }
    // Build page items
    var pageItemsHtml = '';
    var pageArr = beforeCurrentPageArr.concat(afterCurrentPageArr);
    for (var iPage = 0; iPage < pageArr.length; iPage++) {
      if (pageArr[iPage] == '...') {
        pageItemsHtml += boostPFSTemplate.pageItemRemainHtml;
      } else {
        pageItemsHtml += (pageArr[iPage] == currentPage) ? boostPFSTemplate.pageItemSelectedHtml : boostPFSTemplate.pageItemHtml;
      }
      pageItemsHtml = pageItemsHtml.replace(/{{itemTitle}}/g, pageArr[iPage]);
      pageItemsHtml = pageItemsHtml.replace(/{{itemUrl}}/g, Utils.buildToolbarLink('page', currentPage, pageArr[iPage]));
    }
    paginationHtml = paginationHtml.replace(/{{pageItems}}/g, pageItemsHtml);

    if(window.WhatSub) {
      window.WhatSub.dispatch('UPDATE_CARD');
    }
    return paginationHtml;

  };

  ProductPaginationDefault.prototype._onClickEvent = function(event) {
		event.preventDefault();
		Globals.internalClick = true;

		// Get the new page value
		var url;
		try {
			url = new URL(jQ(event.currentTarget).attr('href'));
		} catch (e) {
			url = new URL('https://' + boostPFSConfig.shop.domain + jQ(event.currentTarget).attr('href'));
		}

		var pageValue = url && url.searchParams ? url.searchParams.get('page') : 1;
		if (!pageValue) pageValue = 1;

		// Apply filter
		FilterApi.setParam('page', pageValue);
		FilterApi.applyFilter('page');

		// Scroll to top of product list
		window.scrollTo({
			top: 0,
			behavior: 'smooth'
		});
	};

  // Build Sorting
  ProductSorting.prototype.compileTemplate = function () {
    var html = '';
    if (boostPFSTemplate.hasOwnProperty('sortingHtml')) {
      var sortingArr = Utils.getSortingList();
      if (sortingArr) {
        var paramSort = Globals.queryParams.sort || '';
        // Build content
        var sortingItemsHtml = '';
        for (var k in sortingArr) {
          var isSelected = ''
          if(paramSort == k) {
            isSelected = 'selected="selected"'
          }
          sortingItemsHtml += '<option value="' + k + '"' + isSelected + '>' + sortingArr[k] + '</option>';
        }
        html = boostPFSTemplate.sortingHtml.replace(/{{sortingItems}}/g, sortingItemsHtml);
      }
    }
    return html;
  };

  ProductSorting.prototype.render = function () {
    jQ(Selector.topSorting).html(this.compileTemplate());

    if (jQ('.boost-pfs-filter-custom-sorting').hasClass('boost-pfs-filter-sort-active')) {
      jQ('.boost-pfs-filter-custom-sorting').toggleClass('boost-pfs-filter-sort-active');
    }

    var labelSort = '';
    var paramSort = Globals.queryParams.sort || '';
    var sortingList = Utils.getSortingList();
    if (paramSort.length > 0 && sortingList && sortingList[paramSort]) {
      labelSort = sortingList[paramSort];
    } else {
      labelSort = Labels.sorting;
    }

    jQ('.boost-pfs-filter-custom-sorting button span span').text(labelSort);
  }

  // Build Sorting event
  ProductSorting.prototype.bindEvents = function() {
    jQ(Selector.topSorting + ' .facet-filters__sort').change(function(e) {
      e.preventDefault();
      FilterApi.setParam('sort', jQ(this).val());
      FilterApi.setParam('page', 1);
      FilterApi.applyFilter('sort');
    });
  };

  // Add additional feature for product list, used commonly in customizing product list
  ProductList.prototype.afterRender = function(data) {
    if (!data) data = this.data;

  }

  // Build Additional Elements
  Filter.prototype.afterRender = function(data, eventType) {
    if (!data) data = this.data;

    buildPopularFilter(data);

    jQ('.boost-pfs-filter-total-product').html(data.total_product + ' products');
    if(window.WhatSub) {
      window.WhatSub.dispatch('UPDATE_FILTER');
    };

  };

  // Build Popular Filter
  function buildPopularFilter(data) {
    if (Utils.isCollectionPage()) {
      var popularFilters = boostPFSThemeConfig.custom.popular_filters.split(',');
      if(popularFilters.length >= 1 && popularFilters[0] !== '') {
        var html = '';
        html += '<div class="display-on-desktop boost-popular-filter-header">'+ boostPFSConfig.label.popular_filters +'</div>';
        html += '<ul class="boost-popular-filter">';
        for (var i = 0; i < popularFilters.length; i++) {
          var nameFilter =  popularFilters[i].split(':')[0].trim();
          var valueFilter = popularFilters[i].substring(popularFilters[i].indexOf(':')+1).trim();
          var classActive = typeof Globals.queryParams.pf_t_tag !== 'undefined' && Globals.queryParams.pf_t_tag == valueFilter ? 'isActive' : '';
          html += '<li class="boost-popular-filter--item '+ classActive +'" data-value="'+valueFilter+'" >'+ nameFilter  +'</li>';
        }
        if (typeof Globals.queryParams.pf_t_tag !== 'undefined') html += '<li class="boost-popular-filter--item boost-popular-filter--clear active" data-value="" >Clear</li>';
        html += '</ul>';
        jQ('.boost-pfs-popular-filter-container').html(html);
        jQ('.boost-pfs-filter-left-col').addClass('has-popular-filters');

        jQ('.boost-pfs-popular-filter-container li.boost-popular-filter--item').on('click', function(e) {
          var value = jQ(this).data('value');
          //value !== '' ? jQ('.boost-pfs-popular-filter-container li.boost-popular-filter--item.boost-popular-filter--clear').addClass('active') : jQ('.boost-pfs-popular-filter-container li.boost-popular-filter--item.boost-popular-filter--clear').removeClass('active');
          FilterApi.setParam('page', 1);
          value !== '' ? FilterApi.setParam('pf_t_tag', [value]) : FilterApi.setParam('pf_t_tag', []);
          FilterApi.applyFilter('pf_t_tag');
        })
      } else {
        var html = '';
-        jQ('.boost-pfs-popular-filter-container').html(html);
      }
    }
  }

  /************************** END BUILD TOOLBAR **************************/

  FilterOption.prototype.afterRender = function () {

  }

})();
