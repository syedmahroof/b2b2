<!DOCTYPE html>
<html lang="en">
<head>
    <base href="../../../"/>
    <title>Sign Up</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ asset('theme/demo14/dist/assets/media/logos/favicon.ico') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="{{ asset('theme/demo14/dist/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('theme/demo14/dist/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
</head>
<body id="kt_body" class="app-blank">
    <script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10">
                <div class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px">
                    <div class="d-flex flex-stack py-2">
                        <div class="me-2">
                            <a href="#" class="btn btn-icon bg-light rounded-circle">
                                <span class="svg-icon svg-icon-2 svg-icon-gray-800">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.60001 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13H9.60001V11Z" fill="currentColor" />
                                        <path opacity="0.3" d="M9.6 20V4L2.3 11.3C1.9 11.7 1.9 12.3 2.3 12.7L9.6 20Z" fill="currentColor" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                        <div class="m-0">
                            <span class="text-gray-400 fw-bold fs-5 me-2">Already a member ?</span>
                            <a href="{{route('buyer.login')}}" class="link-primary fw-bold fs-5">Sign In</a>
                        </div>
                    </div>
                    <div class="py-20">
						<form class="form w-100" novalidate="novalidate" id="kt_password_reset_form" data-kt-redirect-url="{{ asset('../../demo14/dist/authentication/layouts/fancy/new-password.html') }}" action="#">
                        <div class="text-start mb-10">
                            <h1 class="text-dark mb-3 fs-3x" data-kt-translate="password-reset-title">Forgot Password ?</h1>
                            <div class="text-gray-400 fw-semibold fs-6" data-kt-translate="password-reset-desc">Enter your email to reset your password.</div>
                        </div>
                        <div class="fv-row mb-10">
                            <input class="form-control form-control-solid" type="email" placeholder="Email" name="email" autocomplete="off" data-kt-translate="password-reset-input-email" />
                        </div>
                        <div class="d-flex flex-stack">
                            <div class="m-0">
                                <button id="kt_password_reset_submit" class="btn btn-primary me-2" data-kt-translate="password-reset-submit">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <a href="{{ asset('../../demo14/dist/authentication/layouts/fancy/sign-in.html') }}" class="btn btn-lg btn-light-primary fw-bold" data-kt-translate="password-reset-cancel">Cancel</a>
                            </div>
                        </div>
                    </form>
                    </div>
                    <div class="m-0">
                        <button class="btn btn-flex btn-link rotate" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, 0px">
                            <img class="w-25px h-25px rounded-circle me-3" src="{{ asset('theme/demo14/dist/assets/media/flags/united-states.svg') }}" alt="" />
                            <span class="me-2">English</span>
                            <span class="svg-icon svg-icon-3 svg-icon-muted rotate-180 m-0">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
                                </svg>
                            </span>
                        </button>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4">
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5">
                                    <span class="symbol symbol-20px me-4">
                                        <img class="rounded-1" src="{{ asset('theme/demo14/dist/assets/media/flags/united-states.svg') }}" alt="" />
                                    </span>
                                    <span>English</span>
                                </a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5">
                                    <span class="symbol symbol-20px me-4">
                                        <img class="rounded-1" src="{{ asset('theme/demo14/dist/assets/media/flags/spain.svg') }}" alt="" />
                                    </span>
                                    <span>Spanish</span>
                                </a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5">
                                    <span class="symbol symbol-20px me-4">
                                        <img class="rounded-1" src="{{ asset('theme/demo14/dist/assets/media/flags/germany.svg') }}" alt="" />
                                    </span>
                                    <span>German</span>
                                </a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5">
                                    <span class="symbol symbol-20px me-4">
                                        <img class="rounded-1" src="{{ asset('theme/demo14/dist/assets/media/flags/japan.svg') }}" alt="" />
                                    </span>
                                    <span>Japanese</span>
                                </a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5">
                                    <span class="symbol symbol-20px me-4">
                                        <img class="rounded-1" src="{{ asset('theme/demo14/dist/assets/media/flags/france.svg') }}" alt="" />
                                    </span>
                                    <span>French</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-lg-flex flex-lg-row-fluid w-50 bgi-size-cover bgi-position-y-center bgi-position-x-start bgi-no-repeat" style="background-image: url({{ asset('theme/demo14/dist/assets/media/auth/bg11.png') }})"></div>
        </div>
    </div>
    <script>var hostUrl = "assets/";</script>
    <script src="{{ asset('theme/demo14/dist/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('theme/demo14/dist/assets/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('theme/demo14/dist/assets/js/pages/custom/login/sign-up.js') }}"></script>
</body>
</html>
