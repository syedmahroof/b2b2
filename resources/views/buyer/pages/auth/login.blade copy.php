<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Blazor, Django, Flask & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Blazor, Django, Flask & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dark mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic | Bootstrap HTML, VueJS, React, Angular, Asp.Net Core, Blazor, Django, Flask & Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ asset('theme/demo14/dist/assets/media/logos/favicon.ico') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="{{ asset('theme/demo14/dist/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('theme/demo14/dist/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body" class="app-blank">
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <a href="../../demo14/dist/index.html" class="d-block d-lg-none mx-auto py-20">
                <img alt="Logo" src="{{ asset('theme/demo14/dist/assets/media/logos/default.svg') }}"
                    class="theme-light-show h-25px" />
                <img alt="Logo" src="{{ asset('theme/demo14/dist/assets/media/logos/default-dark.svg') }}"
                    class="theme-dark-show h-25px" />
            </a>
            <div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10">
                <div class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px">
                    <div class="d-flex flex-stack py-2">
                        <div class="me-2"></div>
                        <div class="m-0">
                            <span class="text-gray-400 fw-bold fs-5 me-2" data-kt-translate="sign-in-head-desc">Not a
                                Member yet?</span>
                            <a href="{{ route('buyer.signup') }}" class="link-primary fw-bold fs-5"
                                data-kt-translate="sign-in-head-link">Sign Up</a>
                        </div>
                    </div>
                    <div class="py-20">
                        <form class="form w-100" action="{{ route('buyer.submit.login') }}" novalidate="novalidate"
                            id="kt_sign_in_form" data-kt-redirect-url="../../demo14/dist/index.html" action="#">
                            @csrf
                            <div class="card-body">
                                <div class="text-start mb-10">
                                    <h1 class="text-dark mb-3 fs-3x" data-kt-translate="sign-in-title">Sign In</h1>
                                    <div class="text-gray-400 fw-semibold fs-6" data-kt-translate="general-desc">Get
                                        unlimited access & earn money</div>
                                </div>
                                <div class="fv-row mb-8">
                                    <input type="text" placeholder="Email" name="email" autocomplete="off"
                                        data-kt-translate="sign-in-input-email"
                                        class="form-control form-control-solid" />
                                </div>
                                <div class="fv-row mb-7">
                                    <input type="text" placeholder="Password" name="password" autocomplete="off"
                                        data-kt-translate="sign-in-input-password"
                                        class="form-control form-control-solid" />
                                </div>
                                <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-10">
                                    <div></div>
                                    <a href="{{ route('buyer.forgot.password') }}" class="link-primary"
                                        data-kt-translate="sign-in-forgot-password">Forgot Password
                                        ?</a>
                                </div>
                                <div class="d-flex flex-stack">
                                    <button id="kt_sign_in_submit" class="btn btn-primary me-2 flex-shrink-0">
                                        <span class="indicator-label" data-kt-translate="sign-in-submit">Sign In</span>
                                        <span class="indicator-progress">
                                            <span data-kt-translate="general-progress">Please wait...</span>
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>
                                    <div class="d-flex align-items-center">
                                        <div class="text-gray-400 fw-semibold fs-6 me-3 me-md-6"
                                            data-kt-translate="general-or">Or</div>
                                        <a href="{{ url('/auth/google') }}" class="symbol symbol-circle symbol-45px w-45px bg-light me-3">
                                            <img alt="Logo"
                                                src="{{ asset('theme/demo14/dist/assets/media/svg/brand-logos/google-icon.svg') }}"
                                                class="p-4" />
                                        </a>
                                        <a href="{{ url('/auth/facebook') }}"
                                            class="symbol symbol-circle symbol-45px w-45px bg-light me-3">
                                            <img alt="Logo"
                                                src="{{ asset('theme/demo14/dist/assets/media/svg/brand-logos/facebook-3.svg') }}"
                                                class="p-4" />
                                        </a>
                                        <a href="{{ url('/auth/apple') }}" class="symbol symbol-circle symbol-45px w-45px bg-light">
                                            <img alt="Logo"
                                                src="{{ asset('theme/demo14/dist/assets/media/svg/brand-logos/apple-black.svg') }}"
                                                class="theme-light-show p-4" />
                                            <img alt="Logo"
                                                src="{{ asset('theme/demo14/dist/assets/media/svg/brand-logos/apple-black-dark.svg') }}"
                                                class="theme-dark-show p-4" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    {{-- <div class="m-0">
                        <button class="btn btn-flex btn-link rotate" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, 0px">
                            <img data-kt-element="current-lang-flag" class="w-25px h-25px rounded-circle me-3"
                                src="{{ asset('theme/demo14/dist/assets/media/flags/united-states.svg') }}"
                                alt="" />
                            <span data-kt-element="current-lang-name" class="me-2">English</span>
                            <span class="svg-icon svg-icon-3 svg-icon-muted rotate-180 m-0">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                        </button>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4"
                            data-kt-menu="true" id="kt_auth_lang_menu">
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="English">
                                    <span class="symbol symbol-20px me-4">
                                        <img data-kt-element="lang-flag" class="rounded-1"
                                            src="{{ asset('theme/demo14/dist/assets/media/flags/united-states.svg') }}"
                                            alt="" />
                                    </span>
                                    <span data-kt-element="lang-name">English</span>
                                </a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="Spanish">
                                    <span class="symbol symbol-20px me-4">
                                        <img data-kt-element="lang-flag" class="rounded-1"
                                            src="{{ asset('theme/demo14/dist/assets/media/flags/spain.svg') }}"
                                            alt="" />
                                    </span>
                                    <span data-kt-element="lang-name">Spanish</span>
                                </a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="German">
                                    <span class="symbol symbol-20px me-4">
                                        <img data-kt-element="lang-flag" class="rounded-1"
                                            src="{{ asset('theme/demo14/dist/assets/media/flags/germany.svg') }}"
                                            alt="" />
                                    </span>
                                    <span data-kt-element="lang-name">German</span>
                                </a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="Japanese">
                                    <span class="symbol symbol-20px me-4">
                                        <img data-kt-element="lang-flag" class="rounded-1"
                                            src="{{ asset('theme/demo14/dist/assets/media/flags/japan.svg') }}"
                                            alt="" />
                                    </span>
                                    <span data-kt-element="lang-name">Japanese</span>
                                </a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="French">
                                    <span class="symbol symbol-20px me-4">
                                        <img data-kt-element="lang-flag" class="rounded-1"
                                            src="{{ asset('theme/demo14/dist/assets/media/flags/france.svg') }}"
                                            alt="" />
                                    </span>
                                    <span data-kt-element="lang-name">French</span>
                                </a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="d-none d-lg-flex flex-lg-row-fluid w-50 bgi-size-cover bgi-position-y-center bgi-position-x-start bgi-no-repeat"
                style="background-image: url({{ asset('theme/demo14/dist/assets/media/auth/bg11.png') }})"></div>
        </div>
    </div>
    <script>
        var hostUrl = "{{ asset('theme/demo14/dist/assets/') }}";
    </script>
    <script src="{{ asset('theme/demo14/dist/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('theme/demo14/dist/assets/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('theme/demo14/dist/assets/js/custom/authentication/sign-in/general.js') }}"></script>
    <script src="{{ asset('theme/demo14/dist/assets/js/custom/authentication/sign-in/i18n.js') }}"></script>
</body>

</html>
