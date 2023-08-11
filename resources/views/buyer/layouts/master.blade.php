<!DOCTYPE html>
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
</html>