{{-- <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
    <span class="svg-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
            <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
        </svg>
    </span>
    <!--end::Svg Icon-->
</div>
<!--end::Scrolltop-->
<!--end::Main-->
<script>var hostUrl = "assets/";</script>
<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{ asset('theme/demo2/dist/assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('theme/demo2/dist/assets/js/scripts.bundle.js') }}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="{{ asset('theme/demo2/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{ asset('theme/demo2/dist/assets/js/custom/widgets.js') }}"></script>
<script src="{{ asset('theme/demo2/dist/assets/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ asset('theme/demo2/dist/assets/js/custom/modals/create-app.js') }}"></script>
<script src="{{ asset('theme/demo2/dist/assets/js/custom/modals/upgrade-plan.js') }}"></script> --}}

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Slick Caraousel Script -->
<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
<script src="https://qc.luthersales.iocod.com/frontend/js/header.js"></script>
<!-- TrustBox script -->
<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js"></script>
<!-- End TrustBox script -->
<!-- jQuery -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://js.versatilecredit.com/js/commerce/storefront-sdk-0.9.0.min.js"></script>
<script>
$(document).ready(function() {


    $('.toggle-bt').click(function() {
        $('.compare-collection').toggleClass('close');
        $('.toggle-bt').toggleClass('close');
    });

    $('.clear-bt').click(function() {
        $('.slick-slide').remove();
        $('.compare-collection').css('display', 'none');
        $('.compare_check:checkbox:checked').each(function() {
            $(this).prop('checked', false);
        });
    });

    $(document).on('click', '.remove-bt', function() {
        var checkboxvalue = $(this).parent('.img').find('.productcheck').val();
        $('#' + checkboxvalue).prop('checked', false);
        $(this).closest('.slick-slide').remove();

        var count = $('.slick-slide').length;
        if (count == 0) {
            $('.compare-collection').css('display', 'none');
        }
    });


    $(document).on('click', '.compare_check', function() {
        $('.compare-collection').css('display', 'inherit');
        var toastMixinitemwarning = Swal.mixin({
            toast: true,
            icon: 'warning',
            width: 430,
            title: 'General Title',
            animation: false,
            position: 'top-right',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal
                    .resumeTimer)
            }
        });
        var _this = $(this);
        var slug = _this.data('slug');
        var image = _this.data('image');
        var name = _this.val();
        var count = $('.slick-slide').length;

        if (_this.prop('checked') == true) {
            if (count == 4) {
                toastMixinitemwarning.fire({
                    animation: true,
                    title: 'You can only compare up to 4 items'
                });
                return false;
            } else {
                var html = "<div class='slick-slide slick-active " + slug +
                    "' data-slick-index='1' aria-hidden='false' > <div><input type='hidden' class='product-slug' name='slugs[]' id='slug' value='" +
                    slug +
                    "'> <div style='width: 100%; display: inline-block;'> <div class='d-flx jst-center product-wrapper'> <div class='c-product'> <div class='img'><input type='hidden' class='productcheck' value='" +
                    slug +
                    "'> <button type='button' class='remove-bt' tabindex='0'></button>  <img src='" +
                    image +
                    "' alt='Buy Now Pay Later Apple Products Financing - Leather Case for AirPods Tan' title='Leather Case for AirPods Tan'></div> <div class='title-sec'> <h2 class='title'>" +
                    name + "</h2> </div> </div> </div> </div> </div> </div>";
                $('.slick-track').append(html);
            }
        } else {
            $('.' + slug).remove();
            var count = $('.slick-slide').length;
            if (count == 0) {
                $('.compare-collection').css('display', 'none');
            }
        }

    });

    $(document).on('click', '.compare-bt', function() {

        var toastMixin = Swal.mixin({
            toast: true,
            icon: 'warning',
            width: 430,
            title: 'General Title',
            animation: false,
            position: 'top-right',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal
                    .resumeTimer)
            }
        });
        var count = $('.slick-slide').length;
        if (count == 1) {
            toastMixin.fire({
                animation: true,
                title: 'Please select 2 to 4 items to compare'
            });
            return false;
        }

        var slugs = "";
        $("input[name='slugs[]']").each(function() {
            var _this = $(this);
            slugs += "products=" + _this.val() + "&";
        });
        console.log(slugs);
        var base_url = window.location.origin;
        window.location.href = base_url + "/compare?" + slugs;
    });


    checkboxcall();

    function getwishlistcount() {
        $.ajax({
            type: 'POST',
            url: "https://qc.luthersales.iocod.com/get-wishlistcount",
            data: {
                "_token": "P3MXDkmJaVyFDL1AuXcAuZguwpVwVk6s1qZe1OaR",
                "customer_id": ''
            },
            success: function(response) {
                console.log(response)
                if (response == 0 || response == null || response == '') {
                    $('.wishlistcount').hide();
                } else {
                    $('.wishlistcount').show();
                    $('.wishlistcount').html(response);
                }
            }
        });
    }

    $(document).on("click", '.creditapply', function(event) {
        var toastMixin = Swal.mixin({
            toast: true,
            icon: 'warning',
            width: 400,
            title: 'General Title',
            animation: false,
            position: 'top-right',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal
                    .resumeTimer)
            }
        });
        var base_url = window.location.origin;
        console.log(base_url);
        var vcredit = VCredit.create({
            secureSessionUrl: base_url + '/sessions'
        });

        $('.modal-wrapper').css("display", "");


        vcredit.launch('application', {
            prefill: {
                affiliateMarketingCode: affiliateMarketingCode,
                discoveryMarketingCode: discoveryMarketingCode,
                primaryApplicant: {
                    firstName: firstName,
                    lastName: lastName,
                    middleInitial: middleInitial,
                    address: {
                        addressLine1: addressLine1,
                        addressLine2: addressLine2,
                        city: city,
                        state: state,
                        postalCode: postalCode,
                    },
                    email: email,
                    dateOfBirth: dateOfBirth,
                    homePhone: homePhone,
                    mobilePhone: mobilePhone,
                    incomeSource: {
                        payFrequency: payFrequency,
                    },
                },
            }
        });
        vcredit.on("application.canceled", (event) => {
            $('.modal-wrapper').css("display", "none");
            toastMixin.fire({
                animation: true,
                title: 'Application process cancelled'
            });
        });
        vcredit.on("application.pending", (event) => {

            var status = event.data.status;
            var applicationId = event.data.applicationId;
            var providerId = event.data.providerId;
            var accountId = event.data.accountId;
            var amount = event.data.amount;

            $.ajax({
                type: 'POST',
                url: "https://qc.luthersales.iocod.com/save-versatile",
                data: {
                    "_token": "P3MXDkmJaVyFDL1AuXcAuZguwpVwVk6s1qZe1OaR",
                    "status": status,
                    "applicationId": applicationId,
                    "providerId": providerId,
                    "accountId": accountId,
                    "amount": amount
                },
                success: function(response) {
                    console.log(response);
                }
            });
        });

        vcredit.on("application.approved", (event) => {
            var status = event.data.status;
            var applicationId = event.data.applicationId;
            var providerId = event.data.providerId;
            var accountId = event.data.accountId;
            var amount = event.data.amount;
            amount = Math.floor(amount / 100)

            $.ajax({
                type: 'POST',
                url: "https://qc.luthersales.iocod.com/save-versatile",
                data: {
                    "_token": "P3MXDkmJaVyFDL1AuXcAuZguwpVwVk6s1qZe1OaR",
                    "status": status,
                    "applicationId": applicationId,
                    "providerId": providerId,
                    "accountId": accountId,
                    "amount": amount
                },
                success: function(response) {
                    console.log(response);
                }
            });
        });
        var toastMixinsuccess = Swal.mixin({
            toast: true,
            icon: 'warning',
            width: 400,
            title: 'General Title',
            animation: false,
            position: 'top-right',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal
                    .resumeTimer)
            }
        });
        vcredit.on("flow.end", (event) => {
            $('.modal-wrapper').css("display", "none");
            toastMixinsuccess.fire({
                animation: true,
                title: 'Application process completed'
            });
        });
    });

    $(document).on("click", '.rotate', function(event) {
        var _this = $(this);
        _this.parents('.root').find(".submenu").slideToggle("slow");
        $(this).toggleClass("down");

    });

    $(document).on("click", '.fa-heart', function(event) {
        event.preventDefault();
        event.stopPropagation();

        var _this = $(this);

        var customer_id = _this.closest('.heart-box').find("input[type='hidden']").val();
        if (customer_id == 0) {
            window.location.href = "/login";
        }
        var product_id = _this.closest('.heart-box').find("input[type='hidden']").data('productid');
        var status = _this.closest('.heart-box').find("input[type='hidden']").data('status');

        $.ajax({
            type: 'POST',
            url: "https://qc.luthersales.iocod.com/wishlist-updates",
            data: {
                "_token": "P3MXDkmJaVyFDL1AuXcAuZguwpVwVk6s1qZe1OaR",
                "customer_id": customer_id,
                "product_id": product_id,
                "status": status
            },
            success: function(response) {

                var toastMixin = Swal.mixin({
                    toast: true,
                    width: 400,
                    icon: 'success',
                    title: 'General Title',
                    animation: false,
                    position: 'top-right',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal
                            .resumeTimer)
                    }
                });


                _this.closest('.heart-box').find("input[type='hidden']").data('status',
                    response);
                if (response == 1) {
                    _this.closest('.heart-box').addClass("liked");
                    toastMixin.fire({
                        animation: true,
                        title: 'Item added to your wishlist'
                    });
                } else {
                    _this.closest('.heart-box').removeClass("liked");
                    toastMixin.fire({
                        animation: true,
                        title: 'Item removed from your wishlist'
                    });
                }
                getwishlistcount();

            }
        });
    });


    $("#autosuggest__input").on("input", function() {
        var query = $(this).val();
        if (query.trim().length >= 1) {
            $.ajax({
                type: 'POST',
                url: "https://qc.luthersales.iocod.com/search-autocomplete",
                data: {
                    "_token": "P3MXDkmJaVyFDL1AuXcAuZguwpVwVk6s1qZe1OaR",
                    "query": query
                },
                success: function(response) {

                    var products = "";
                    var brand = "";
                    var sub_category = "";

                    if (response.data) {
                        var data = response.data;
                        if (data.products.length >= 1) {
                            products_details = data.products;
                            products =
                                "<ul><li class='autosuggest__results-before autosuggest__results-before--products'>Products</li>";

                            for (i = 0; i < products_details.length; i++) {
                                var url = "https://qc.luthersales.iocod.com/product" +
                                    '/' +
                                    products_details[i].slug;
                                console.log(url);
                                products +=
                                    "<li data-section-name='products' id='autosuggest__results-item--2' class='autosuggest__results-item' ><a class='autosuggest__results-item-a' href='" +
                                    url + "'>" + products_details[i].name + "</a></li>";
                            }
                            products += "</ul>";
                        }


                        if (data.brand.length >= 1) {
                            brand_details = data.brand;
                            brand =
                                "<ul><li class='autosuggest__results-before autosuggest__results-before--products'>Brands</li>";

                            for (i = 0; i < brand_details.length; i++) {
                                var url =
                                    "https://qc.luthersales.iocod.com/listing/brands" +
                                    brand_details[
                                        i].slug;
                                brand +=
                                    "<li data-section-name='products' id='autosuggest__results-item--2' class='autosuggest__results-item' ><a class='autosuggest__results-item-a' href='" +
                                    url + "'>" + brand_details[i].name + "</a></li>";
                            }
                            brand += "</ul>";
                        }

                        if (data.sub_category.length >= 1) {
                            sub_category_details = data.sub_category;
                            sub_category =
                                "<ul><li class='autosuggest__results-before autosuggest__results-before--products'>Subcategories</li>";

                            for (i = 0; i < sub_category_details.length; i++) {

                                var category = sub_category_details[i].category
                                var url = "https://qc.luthersales.iocod.com/listing" +
                                    '/' + category.slug +
                                    '/' + sub_category_details[i].slug;
                                sub_category +=
                                    "<li data-section-name='products' id='autosuggest__results-item--2' class='autosuggest__results-item' ><a class='autosuggest__results-item-a' href='" +
                                    url + "'>" + sub_category_details[i].name +
                                    "</a></li>";
                            }
                            sub_category += "</ul>";
                        }

                    } else {
                        var html =
                            "<div aria-labelledby='autosuggest' class='autosuggest__results'>  <p class='no-suggestions'>No Results Found...</p></div>";
                    }

                    if (data.sub_category.length >= 1 || data.brand.length >= 1 || data
                        .products.length >= 1) {
                        var html =
                            "<div aria-labelledby='autosuggest' class='autosuggest__results'>" +
                            products + brand + sub_category + "</div>"
                        $('#autosuggest-autosuggest__results').html(html)
                    } else {
                        var html =
                            "<div aria-labelledby='autosuggest' class='autosuggest__results'>  <p class='no-suggestions'>No Results Found...</p></div>";
                        $('#autosuggest-autosuggest__results').html(html)
                    }


                }
            });

        } else {
            var html = "";
            $('#autosuggest-autosuggest__results').html(html)
        }

    });


    var sliders1 = document.querySelectorAll('.hero');
    for (var i = 0; i < sliders1.length; i++) {
        var glide1 = new Glide(sliders1[i], {
            type: 'carousel',
            animationDuration: 2000,
            autoplay: false,
            focusAt: '1',
            startAt: 3,
            perView: 1,
        });
        glide1.mount()
    }
    var sliders = document.querySelectorAll('.multi1');
    for (var i = 0; i < sliders.length; i++) {
        var glide = new Glide(sliders[i], {
            type: 'carousel',
            autoplay: 3500,
            perView: 4
        });
        glide.mount()
    }


    var filters = [];
    $(document).on("click", '.checkfilter', function(event) {

        load_products()

    });


    $(document).on("click", '.limitOptions', function(event) {
        $(this).find('.options-box').toggleClass("closed");
    });
    $(document).on("click", '.filterOption', function(event) {
        $(this).find('.options-box').toggleClass("closed");
    });
    $(document).on("click", '.option-per-page', function(event) {

        var per_page = $(this).data('per-page');
        $('.selected-per-page').text(per_page);
        load_products()

    });

    $(document).on("click", '.option-sort-by', function(event) {

        var sort_by = $(this).data('sort');
        $('.selected-sort-by').text(sort_by);
        load_products()

    });

    $(document).on("click", '.clear-filter-button', function(event) {


        $('.checkfilter').prop('checked', false);
        load_products()

    });

    $("#md-listing-filter-button").on("click", toggleFilters)
    $(".open-bg").click(hideAll)

    $("#md-listing-sort-button").on("click", toggleSort)
    var bg = $(".open-bg")
    var filter = $(".filter-container")
    var sort = $(".sort-by-sec")

    function toggleFilters() {
        filter.toggleClass("show")
        bg.toggleClass("show")
    }

    function toggleSort() {
        sort.toggleClass("show")
        bg.toggleClass("show")
    }

    function hideAll() {
        console.log("hiding all");

        filter.removeClass("show")
        bg.removeClass("show")
        sort.removeClass("show")
    }

});

function load_products() {
    var per_page = parseInt($('.selected-per-page').text());
    var sort_by = $('.selected-sort-by').text();

    filters = [];
    $('.key_name').each(function(e) {
        var _this = $(this);
        key = _this.attr('data-key');
        var attribute_values = [];
        var selecteditems = [];
        _this.parents('.root').find("input:checked").each(function(i, ob) {
            selecteditems.push($(ob).val());
        });
        if (typeof selecteditems !== 'undefined' && selecteditems.length > 0) {
            var obj = {};
            obj[key] = selecteditems;
            filters.push(obj);
        }
    });
    var arrStr = encodeURIComponent(JSON.stringify(filters));
    var refresh = window.location.protocol + "//" + window.location.host + window.location
        .pathname + '?per_page=' + per_page + '&sort_by=' + sort_by + '&filters=' + arrStr;
    window.history.pushState({
        path: refresh
    }, '', refresh);

    console.log(per_page, sort_by)

    $.ajax({
        type: 'GET',
        url: '?per_page=' + per_page + '&sort_by=' + sort_by + '&filters=' + arrStr,
        data: {
            "_token": "P3MXDkmJaVyFDL1AuXcAuZguwpVwVk6s1qZe1OaR",
        },
        success: function(response) {
            $('#productbox').html(response.products_view);
            $('#filters').html(response.filter_view);
            checkboxcall();
        }
    });

}

function checkboxcall() {


    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (i in sURLVariables) {
        let sParameter = sURLVariables[i].split('=');
        let name = sParameter[0]
        if (name == 'filters') {


            let value = decodeURIComponent(sParameter[1]);

            value = JSON.parse(value);

            $(".key_name").each(function(e) {
                thisone = $(this);
                key = $(this).attr('data-key');
                $.each(value, function(i, item) {
                    $.each(item, function(j, items) {
                        if (key == j) {

                            thisone.parents('.root').find("input:checkbox")
                                .each(function(i, ob) {
                                    if ($.inArray($(ob).val(), items) != -1)

                                        $(ob).prop('checked', true);
                                });

                        }
                    });
                });

            });

        }
    }

}

function callMeBeforeLogout() {
    localStorage.removeItem('auth_token');
    localStorage.removeItem('customer_id');
    localStorage.removeItem('payment_method');
    localStorage.removeItem('item_in_cart');
    $.ajax({
        type: 'POST',
        url: "https://qc.luthersales.iocod.com/remove-cookies",
        data: {
            "_token": "P3MXDkmJaVyFDL1AuXcAuZguwpVwVk6s1qZe1OaR"
        },
        success: function(response) {
            if (response == "true") {
                window.location.href = "/";
            }
        }

    });
}
</script>
