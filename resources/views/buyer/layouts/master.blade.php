{{-- <!DOCTYPE html>
<html lang="en">
    @include('buyer.includes.head')
    <body id="kt_body" style="background-image: url(assets/media/patterns/header-bg.jpg)" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
        <div class="d-flex flex-column flex-root">
            <div class="page d-flex flex-row flex-column-fluid">
                <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                    @include('buyer.includes.header')
                    @include('buyer.includes.toolbar')
                    @yield('content') 
                    @include('buyer.includes.footer')
                </div>
            </div>
        </div>
        @include('buyer.includes.activities')
        @include('buyer.includes.chat')
        @include('buyer.includes.models')
        @include('buyer.includes.script')
    </body>
</html> --}}

<html lang="en">

@include('buyer.includes.head')

<body>
    <div class="modal-wrapper" style="display: none;">
        <div class="modal-box customstyle">
            <div id="vcredit" class="customstyle"></div>
        </div>
    </div>



    <div class="compare-collection" style="display: none;"><button type="button" class="toggle-bt"><svg
                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                class="icon svg-inline--fa fa-angle-down fa-w-10">
                <path fill="currentColor"
                    d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z"
                    class=""></path>
            </svg>
            <!---->
            <div class="title">Compare</div>
        </button>
        <div class="home-content wrapper-col p-0">
            <div class="container">
                <div class="c-row">
                    <div class="col slide-col">
                        <div class="slick-initialized slick-slider">
                            <div class="slick-list draggable">
                                <div class="slick-track"
                                    style="opacity: 1; width: 1100px; transform: translate3d(0px, 0px, 0px);">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col action-col">
                        <div class="action-sec">
                            <button type="button" class="btn danger compare-bt">
                                Compare
                            </button>
                            <button type="button" class="clear-bt">
                                Clear all items
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" name="compareurl" id="compareurl" value="">

    <!-- Header -->

    <div class="sticky-header stick">
        <!-- Header -->
        @include('buyer.includes.header')
        <!-- /Header -->
        <!-- Nav -->
        @include('buyer.includes.nav')
        <!-- /Nav -->
    </div>
    <!-- /.Header --> <!-- Banner Section -->
    
    @yield('content') 
  
    @include('buyer.includes.footer')
    @include('buyer.includes.script')
</body><!-- jQuery -->

</html>
