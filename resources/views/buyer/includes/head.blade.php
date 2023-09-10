<head>
    <meta charset="UTF-8">
    <meta name="referrer" content="origin-when-cross-origin" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awwwards - Website Awards - Best Web Design Trends</title>
    <meta name="keywords" content="Website Awards, Web Design Inspiration, Webdesign Trends">
    <meta property="og:site_name" content="Awwwards">
    <meta property="og:image"
        content="https://assets.awwwards.com/assets/images/pages/about-certificates/awwwards.jpg" />
    <meta property="og:title" content="Awwwards - Website Awards - Best Web Design Trends" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="index.html" />
    <meta property="og:description"
        content="Awwwards are the Website Awards that recognize and promote the talent and effort of the best developers, designers and web agencies in the world." />
    <meta name="description"
        content="Awwwards are the Website Awards that recognize and promote the talent and effort of the best developers, designers and web agencies in the world.">
    <link rel="icon" href="h" type="image/svg+xml" />
    <link rel="mask-icon" href="" color="#000000" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />
    <link rel="preload" href="https://assets.awwwards.com/assets/fonts/apercu/apercu-light-pro.woff2" as="font"
        crossorigin>
    <link rel="preload" href="https://assets.awwwards.com/assets/fonts/apercu/apercu-regular-pro.woff2" as="font"
        crossorigin>
    <link rel="preload" href="https://assets.awwwards.com/assets/fonts/apercu/apercu-bold-pro.woff2" as="font"
        crossorigin>
    <style>
        * {
            margin: 0;
            padding: 0
        }

        html {
            box-sizing: border-box
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit
        }

        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        nav,
        section {
            display: block
        }

        li {
            list-style: none
        }

        table {
            border-collapse: separate;
            border-spacing: 0
        }

        img {
            border: none
        }

        input {
            border: none
        }

        input[type=submit],
        input[type=text] {
            -webkit-appearance: none
        }

        input:focus {
            outline: none
        }

        input[type=submit],
        button {
            cursor: pointer
        }

        input[type=submit]:focus,
        button:focus {
            outline: none
        }

        a {
            text-decoration: none
        }

        .grid {
            display: grid;
            grid-template-rows: repeat(var(--grid-rows, 1), 1fr);
            grid-template-columns: repeat(var(--grid-columns, 12), 1fr);
            gap: var(--grid-gutter, var(--gutter))
        }

        .grid__col-1 {
            grid-column: auto/span 1
        }

        .grid__col-2 {
            grid-column: auto/span 2
        }

        .grid__col-3 {
            grid-column: auto/span 3
        }

        .grid__col-4 {
            grid-column: auto/span 4
        }

        .grid__col-5 {
            grid-column: auto/span 5
        }

        .grid__col-6 {
            grid-column: auto/span 6
        }

        .grid__col-7 {
            grid-column: auto/span 7
        }

        .grid__col-8 {
            grid-column: auto/span 8
        }

        .grid__col-9 {
            grid-column: auto/span 9
        }

        .grid__col-10 {
            grid-column: auto/span 10
        }

        .grid__col-11 {
            grid-column: auto/span 11
        }

        .grid__col-12 {
            grid-column: auto/span 12
        }

        @media(max-width: 576px) {
            .grid {
                display: flex;
                flex-direction: column
            }

            [class*=grid__col-] {
                grid-column: auto
            }
        }

        @font-face {
            font-family: "apercu";
            src: url("https://assets.awwwards.com/assets/fonts/apercu/apercu-light-pro.woff2") format("woff2");
            font-weight: 300;
            font-style: normal;
            font-display: swap
        }

        @font-face {
            font-family: "apercu";
            src: url("https://assets.awwwards.com/assets/fonts/apercu/apercu-light-italic-pro.woff2") format("woff2");
            font-weight: 300;
            font-style: italic;
            font-display: swap
        }

        @font-face {
            font-family: "apercu";
            src: url("https://assets.awwwards.com/assets/fonts/apercu/apercu-regular-pro.woff2") format("woff2");
            font-weight: 400;
            font-style: normal;
            font-display: swap
        }

        @font-face {
            font-family: "apercu";
            src: url("https://assets.awwwards.com/assets/fonts/apercu/apercu-medium-pro.woff2") format("woff2");
            font-weight: 500;
            font-style: normal;
            font-display: swap
        }

        @font-face {
            font-family: "apercu";
            src: url("https://assets.awwwards.com/assets/fonts/apercu/apercu-bold-pro.woff2") format("woff2");
            font-weight: 600;
            font-weight: bold;
            font-style: normal;
            font-display: swap
        }

        @font-face {
            font-family: "apercu";
            src: url("https://assets.awwwards.com/assets/fonts/apercu/apercu-black-pro.woff2") format("woff2");
            font-weight: 800;
            font-style: normal;
            font-display: swap
        }

        @font-face {
            font-family: "Hanken Grotesk";
            src: url("https://assets.awwwards.com/assets/fonts/hanken-grotesk/HankenGrotesk-VariableFont_wght.ttf") format("truetype");
            font-weight: 300 900
        }

        :root {
            --font-1: apercu, sans-serif;
            --color-primary: #222;
            --color-primary-rgb: 34, 34, 34;
            --color-link: #222;
            --color-white: #fff;
            --color-white-rgb: 255, 255, 255;
            --color-orange: #FA5D29;
            --color-errors: #FA5D29;
            --color-featured: #f8f0ee;
            --color-underlined: var(--color-primary-rgb);
            --color-connect: #FF602C;
            --color-connect-2: #FFAE94;
            --color-connect-3: #FFC5B1;
            --color-inspire: #AAEEC4;
            --color-inspire-2: #C8E4D3;
            --color-inspire-3: #E2F4E9;
            --color-awards: #502bd8;
            --color-awards-2: #6749d1;
            --color-awards-3: #917eda;
            --color-read: #c0ab3c;
            --color-read-2: #CDC38B;
            --color-read-3: #DBD6C0;
            --color-learn: #FFF083;
            --color-learn-2: #FFF9D0;
            --color-learn-3: #fffbe2;
            --color-jobs: #74bcff;
            --color-jobs-2: #99ccfc;
            --color-jobs-3: #b4d7f8;
            --text-size-small: 12px;
            --text-size-primary: 16px;
            --text-size-medium: 18px;
            --text-size-large: 24px;
            --border-gray: #e9e9e9;
            --color-dotteds-rgb: 34, 34, 34;
            --bg-primary: #F8F8F8;
            --bg-primary-rgb: 248, 248, 248;
            --bg-secondary: #222;
            --bg-3rd: #e9e9e9;
            --bg-4rd: #f3f3f3;
            --bg-white: white;
            --header-height: 71px;
            --gutter: 20px;
            --pad-inner: 52px;
            --color-odd-rows: #f3f3f3;
            --avatar-bg: #F8F8F8;
            --border-table: #222;
            --alert-green: #e0f4d9;
            --alert-green-rgb: 224, 244, 217;
            --alert-yellow: #FFF083;
            --alert-yellow-rgb: 255, 240, 131;
            --rounded-small: 4px;
            --rounded-normal: 8px;
            --rounded-large: 1rem;
            --img-resizing-site: 16 / 12;
            --img-resizing-paronamic: 2 / 1;
            --img-resizing-desktop: 19 / 10
        }

        .fs-1 {
            font-size: 24px
        }

        html {
            scroll-behavior: smooth
        }

        body {
            margin: auto;
            font-family: var(--font-1);
            font-size: var(--text-size-primary);
            font-weight: 300;
            background: var(--bg-primary);
            color: var(--color-primary);
            line-height: 200%;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility
        }

        body.dark {
            --color-primary: #eee;
            --bg-primary: #121212
        }

        body.header-above #content {
            margin-top: -71px
        }

        body.header-above #header {
            background: rgba(0, 0, 0, 0)
        }

        body.header-dark #header {
            --color-primary: #fff;
            --bg-primary: #222;
            --sf-bg: #383838;
            --button-bg: var(--color-primary);
            --button-color: #222;
            color: var(--color-primary)
        }

        .is-content-header .search-form,
        .is-content-header .header-floating {
            filter: brightness(90%)
        }

        .content-header {
            margin-bottom: clamp(30px, 6vw, 100px);
            padding-top: 71px;
            padding-bottom: clamp(30px, 6vw, 100px);
            background: var(--ch-bg, transparent)
        }

        .content-header .block {
            margin-bottom: 0
        }

        input,
        select,
        textarea,
        button {
            font-family: var(--font-1);
            font-size: var(--text-size-primary)
        }

        figure img {
            display: block
        }

        a {
            color: var(--color-link)
        }

        strong {
            font-weight: bold
        }

        .ico-svg {
            position: relative;
            display: inline-block;
            height: auto;
            fill: currentColor;
            transition: all .3s
        }

        .ico-svg.is-success {
            color: #52c67e
        }

        .ico-svg.is-danger {
            color: #fa5d29
        }

        .ico-svg.is-alert {
            color: #ff602c
        }

        .ico-svg[class*="--reflect"] {
            transform: scaleX(-1)
        }

        .ico-svg[class*="--white"] {
            color: #fff
        }

        .ico-svg[class*="--middle"] {
            top: -1px;
            vertical-align: middle;
            margin-right: .1em
        }

        .has-sticker {
            position: relative
        }

        span.has-sticker {
            display: inline-block
        }

        .has-sticker .sticker-svg {
            position: absolute;
            pointer-events: none
        }

        .sticker-svg {
            --color-1: #ec6237;
            --color-2: #e5d8ca;
            --color-3: #AAEEC4;
            --color-4: #502BD8;
            --color-5: #222;
            --color-6: #502BD8;
            --color-7: #FCB6F2;
            position: relative;
            display: inline-block;
            width: -moz-fit-content;
            width: fit-content;
            height: auto
        }

        .sticker-svg.sc-orange-beige {
            --sc-1: var(--color-1);
            --sc-2: var(--color-2)
        }

        .sticker-svg.sc-orange-black {
            --sc-1: var(--color-1);
            --sc-2: var(--color-5)
        }

        .sticker-svg.sc-beige-purple {
            --sc-1: var(--color-2);
            --sc-2: var(--color-4)
        }

        .sticker-svg.sc-green-black {
            --sc-1: var(--color-3);
            --sc-2: var(--color-5)
        }

        .sticker-svg.sc-green-purple {
            --sc-1: var(--color-3);
            --sc-2: var(--color-4)
        }

        .sticker-svg.sc-purple-pink {
            --sc-1: var(--color-6);
            --sc-2: var(--color-7)
        }

        .sticker-svg.sc-purple-green {
            --sc-1: var(--color-6);
            --sc-2: var(--color-3)
        }

        .bg-color-academy {
            background-color: var(--color-learn) !important
        }

        img {
            max-width: 100%
        }

        p {
            margin-bottom: 1em
        }

        :root {
            --sf-height: 48px;
            --sf-bg: var(--bg-3rd);
            --hf-bg: var(--bg-primary)
        }

        .is-content-header {
            --sf-bg: var(--ch-bg, --bg-3rd);
            --hf-bg: var(--ch-bg, --bg-primary)
        }

        #header {
            position: relative;
            background-color: var(--bg-primary)
        }

        .header-fixed #header {
            position: sticky;
            top: 0;
            z-index: 4
        }

        #header.is-top {
            z-index: 5
        }

        .header-main {
            --text-header: 14px;
            position: relative;
            display: flex;
            align-items: center;
            width: 100%;
            height: var(--header-height);
            font-size: var(--text-header)
        }

        .header-main__logo svg {
            display: block;
            fill: var(--color-primary)
        }

        .header-main__right {
            display: flex;
            gap: 12px;
            height: var(--sf-height);
            margin-left: 20px
        }

        .header-main__bts {
            display: flex;
            gap: 12px;
            margin-left: 8px
        }

        .header-main__bts .button {
            font-weight: normal
        }

        .header-main__user {
            height: 100%;
            display: flex;
            align-items: center;
            gap: 16px
        }

        .header-main__separator {
            width: 1px;
            height: 24px;
            background-color: rgba(var(--color-primary-rgb), 0.2)
        }

        .header-main__link {
            cursor: pointer
        }

        .header-main__ico {
            display: none;
            align-items: center;
            cursor: pointer
        }

        .has-search {
            --button-color-border: #f3f3f3
        }

        .has-search .header-main__bts .button--rounded {
            display: none
        }

        .has-search .header-search {
            max-width: 100%;
            overflow: hidden
        }

        .has-search .search-form__field {
            flex: none;
            background: #d3d3d3;
            padding-right: 20px;
            border-radius: var(--rounded-normal)
        }

        .has-search .search-form__in {
            display: none
        }

        .has-search .search-form__input {
            flex: none;
            min-width: 82px;
            max-width: 500px;
            font-weight: bold
        }

        .has-search .search-form__filters {
            flex: 1
        }

        .has-search .dropdown-user {
            left: auto;
            right: 0
        }

        @media(max-width: 1023px) {
            .has-search .search-form__field {
                flex: 1;
                background: rgba(0, 0, 0, 0)
            }
        }

        .header-search {
            position: relative;
            flex: 1;
            margin-left: 12px;
            z-index: 3
        }

        .header-search.show-results {
            --color-primary: #7a7a7a;
            --search-color-light: #fff;
            --search-results-fs: 0.75em;
            color: var(--color-primary);
            overflow: visible
        }

        .header-search.show-results .header-search__overlay {
            opacity: 1;
            visibility: visible
        }

        .header-search.show-results .header-search__results {
            opacity: 1;
            visibility: visible
        }

        .header-search.show-results .header-search__dropdown {
            color: var(--search-color-light)
        }

        .header-search.show-results .header-search__dropdown svg {
            stroke: var(--search-color-light)
        }

        .header-search.show-results .search-form {
            background-color: #383838
        }

        .header-search.show-results .search-form__field {
            flex: 1;
            background: rgba(0, 0, 0, 0)
        }

        .header-search.show-results .search-form__input {
            flex: 1;
            color: var(--search-color-light)
        }

        .header-search.show-results .search-form__filters {
            display: none
        }

        .header-search__overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, .4);
            opacity: 0;
            visibility: hidden;
            transition: all .3s
        }

        .header-search__results {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            background-color: var(--bg-secondary);
            border-radius: var(--rounded-normal);
            font-size: var(--search-results-fs);
            opacity: 0;
            visibility: hidden;
            transition: opacity .3s
        }

        .header-search__content-results {
            display: flex;
            gap: 80px;
            padding: 90px 0 54px 0;
            padding-left: 36px
        }

        .header-search__right {
            flex: 1;
            min-width: 0
        }

        .header-search__row {
            width: 100%;
            padding-right: 36px
        }

        .header-search__row:not(:last-child) {
            margin-bottom: 36px
        }

        .header-search .button[class*="--tag"] {
            font-size: var(--text-size-primary)
        }

        @media(max-width: 1700px) {
            .header-search .header-search__right {
                display: none
            }
        }

        @media(max-width: 1023px) {
            .header-search__row {
                padding: 0 20px
            }
        }

        .search-form {
            position: relative;
            display: flex;
            align-items: center;
            gap: 20px;
            height: var(--sf-height);
            padding-right: 20px;
            background: var(--sf-bg);
            border-radius: var(--rounded-normal);
            font-size: 14px;
            transition: background .3s;
            z-index: 1
        }

        .search-form__field {
            display: flex;
            flex: 1;
            height: 100%;
            padding-left: 20px;
            border-top-left-radius: var(--rounded-normal);
            border-bottom-left-radius: var(--rounded-normal)
        }

        .search-form__button {
            display: flex;
            align-items: center;
            padding: 0;
            background: rgba(0, 0, 0, 0);
            border: none;
            cursor: pointer
        }

        .search-form__button:focus {
            outline: none
        }

        .search-form__button svg {
            fill: #a7a7a7
        }

        .search-form__input {
            position: relative;
            flex: 1;
            height: 100%;
            background: rgba(0, 0, 0, 0);
            border: none;
            padding-left: 10px;
            font-size: var(--text-header)
        }

        .search-form__input:focus {
            outline: none
        }

        .search-form__input::-moz-placeholder {
            color: #a7a7a7
        }

        .search-form__input::placeholder {
            color: #a7a7a7
        }

        .search-form__separator {
            display: inline-flex;
            align-items: center;
            margin: 0 20px;
            font-size: 11px
        }

        .search-form__filters {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 100%;
            height: 100%;
            overflow: hidden;
            white-space: nowrap
        }

        .search-form__filters.is-active .search-form__tags {
            display: none
        }

        .search-form__filters.is-active .search-form__or {
            display: block
        }

        .search-form__tags {
            --button-color-border: var(--sf-bg);
            display: flex;
            gap: 8px
        }

        .search-form__tags .button {
            font-weight: bold
        }

        .search-form__with {
            display: flex;
            gap: 8px
        }

        .search-form__label .link-underlined {
            margin: 0 4px 0 8px
        }

        .search-form__or {
            display: none
        }

        .search-form__or .link-underlined {
            margin-left: 4px
        }

        .search-form__left {
            display: flex;
            gap: 8px
        }

        .search-form .button[class*="--tag"] {
            font-size: var(--text-header)
        }

        .list-search-ac {
            min-width: 500px
        }

        .list-search-ac:nth-last-of-type(n+2) {
            margin-bottom: clamp(20px, 3vw, 30px);
            padding-bottom: clamp(20px, 3vw, 40px);
            border-bottom: 1px solid #383838
        }

        .list-search-ac li {
            display: flex;
            align-items: center;
            width: 100%;
            margin-bottom: 1.6em;
            font-size: var(--text-size-primary);
            color: var(--color-white);
            line-height: 100%
        }

        .list-search-ac li:last-child {
            margin-bottom: 0
        }

        .list-search-ac--s2 li {
            margin-bottom: 0;
            background-image: linear-gradient(to right, #7a7a7a 0 10%, rgba(255, 255, 255, 0) 10%);
            background-position: bottom;
            background-size: 8px 1px;
            background-repeat: repeat-x
        }

        .list-search-ac--s2 li:first-child .list-search-ac__link {
            padding-top: 0
        }

        .list-search-ac--s2 li:last-child {
            background-image: none
        }

        .list-search-ac--s2 .list-search-ac__link {
            width: 100%;
            padding: clamp(15px, 1vw, 30px) 0
        }

        .list-search-ac__top {
            display: flex
        }

        .list-search-ac__bottom {
            display: flex;
            justify-content: space-between;
            padding-top: 16px
        }

        .list-search-ac__user {
            display: flex;
            gap: 20px
        }

        .list-search-ac__link {
            color: var(--color-white);
            line-height: 118%
        }

        .list-search-ac__link img {
            flex-shrink: 0;
            margin-right: 8px
        }

        .list-search-ac__img {
            display: inline-flex;
            align-items: center;
            width: 28px
        }

        .list-search-ac__gallery {
            display: flex;
            gap: 8px
        }

        .list-search-ac__gallery img {
            margin-right: 0;
            border-radius: var(--rounded-small)
        }

        .list-search-ac__awards {
            display: flex;
            gap: 8px
        }

        .list-search-ac mark {
            background: #f8f8f8;
            color: #222;
            font-weight: 400
        }

        .list-search-ac .budget-tag {
            height: auto;
            padding-top: 1px;
            line-height: 16px;
            margin-left: 4px;
            border-color: var(--color-primary);
            font-size: 10px;
            font-weight: 300
        }

        @media(max-width: 1023px) {
            .list-search-ac__awards {
                display: none
            }

            .list-search-ac__gallery img:nth-child(4) {
                display: none
            }
        }

        .search-dropdown {
            position: relative;
            display: inline-flex;
            width: 150px;
            cursor: pointer;
            border-radius: 26px
        }

        .search-dropdown.is-active .search-dropdown__selected {
            padding-left: 16px;
            color: var(--color-white)
        }

        .search-dropdown.is-active .search-dropdown__options {
            opacity: 1;
            visibility: visible
        }

        .search-dropdown.is-active .search-dropdown__arrow {
            top: calc(50% - 5px);
            fill: var(--color-white);
            transform: scaleY(-1)
        }

        .search-dropdown__options {
            position: absolute;
            top: calc(100% - 40px);
            width: calc(100% + 28px);
            padding: 40px 0 10px 0;
            background: var(--bg-secondary);
            border-radius: var(--rounded-normal);
            color: var(--color-white);
            transform: translateX(-8px);
            overflow: hidden;
            opacity: 0;
            visibility: hidden;
            transition: all .3s
        }

        .search-dropdown__option {
            display: block;
            padding: 2px 24px;
            color: var(--color-white);
            transition: all .3s
        }

        .search-dropdown__option.is-selected {
            display: none
        }

        .search-dropdown__option.is-child {
            padding-left: 36px
        }

        .search-dropdown__option:hover {
            opacity: .7
        }

        .search-dropdown__selected {
            position: relative;
            display: flex;
            align-items: center;
            padding-right: 30px;
            font-weight: 500;
            z-index: 2
        }

        .search-dropdown__arrow {
            position: absolute;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
            z-index: 2;
            transition: transform .3s
        }

        .slider-header {
            position: relative;
            z-index: 0;
            padding-right: 10%;
            overflow: hidden
        }

        .slider-header .swiper-slide {
            width: 350px
        }

        .slider-header__figure {
            margin-bottom: 20px
        }

        .slider-header__img {
            display: block
        }

        .slider-header__title {
            line-height: 130%;
            font-size: 1rem;
            font-weight: 300;
            color: var(--color-white)
        }

        .slider-header__nav {
            display: flex;
            justify-content: flex-end
        }

        .slider-header__btnav {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 30px;
            height: 30px;
            fill: var(--color-white);
            cursor: pointer;
            transition: all .3s
        }

        .slider-header__btnav:hover {
            opacity: .7
        }

        .slider-header__btnav--next {
            transform: scaleX(-1)
        }

        .header-floating {
            position: fixed;
            top: -80px;
            left: 0;
            width: 100%;
            height: 72px;
            min-height: 72px;
            background: var(--hf-bg);
            border-bottom: 1px solid var(--ch--bg, --bg-3rd);
            transition: all .3s ease-in-out;
            z-index: 4
        }

        .header-floating.show {
            top: 0
        }

        .header-floating .inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 100%
        }

        .header-floating__left {
            display: flex;
            align-items: center;
            gap: 10px
        }

        .header-floating__right {
            display: flex;
            align-items: center;
            gap: 40px
        }

        .header-floating__by {
            display: flex;
            align-items: center;
            gap: 10px
        }

        @media(max-width: 1023px) {
            .header-floating__left {
                height: 32px;
                overflow: hidden
            }

            .header-floating__left strong {
                padding-right: 8px;
                text-overflow: ellipsis;
                white-space: nowrap;
                overflow: hidden
            }
        }

        .list-featured {
            display: flex;
            flex-wrap: wrap;
            gap: 8px
        }

        .list-featured__img {
            display: block;
            width: 100%;
            border-radius: 4px
        }

        .list-featured__title {
            display: block;
            margin-top: 12px;
            color: var(--color-white);
            line-height: 100%
        }

        .bt-dropdown-user {
            position: relative;
            display: flex;
            align-items: center
        }

        .bt-dropdown-user:hover .dropdown-user {
            opacity: 1;
            visibility: visible
        }

        .bt-dropdown-user .circle-avatar {
            font-size: 1.25em
        }

        @media(max-width: 576px) {
            .bt-dropdown-user .bt-dropdown-user__link {
                pointer-events: none
            }
        }

        .dropdown-user {
            --color-hover: rgba(255, 255, 255, 0.1);
            position: absolute;
            top: calc(100% + 12px);
            left: 0;
            width: 230px;
            padding: 20px 0;
            background: var(--bg-secondary);
            color: var(--color-white);
            border-radius: var(--rounded-normal);
            z-index: 3;
            transition: all .3s;
            opacity: 0;
            visibility: hidden
        }

        .dropdown-user:before {
            content: "";
            width: 44px;
            height: 44px;
            position: absolute;
            top: -25px
        }

        .dropdown-user__list {
            padding: 16px 0;
            border-bottom: 1px solid var(--color-hover)
        }

        .dropdown-user__list:first-child {
            padding-top: 0
        }

        .dropdown-user__list:last-child {
            padding-bottom: 0;
            border-bottom: 0
        }

        .dropdown-user__link {
            padding: 0 28px;
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--color-white);
            transition: all .3s
        }

        .dropdown-user__link:hover {
            background-color: var(--color-hover)
        }

        @media(max-width: 1023px) {
            .dropdown-user {
                left: auto;
                right: 0
            }
        }

        :root {
            --height-input: 48px;
            --pad-input: 16px;
            --bg-input: #fff;
            --bg-input-hover: #f3f3f3;
            --color-input: #222;
            --border-input: #e9e9e9;
            --bg-checkbox: #d3d3d3;
            --bg-checkbox-true: #222
        }

        .form-field {
            position: relative;
            width: 100%
        }

        .form-field.is-invalid .text-input {
            color: currentColor;
            border-color: var(--color-errors)
        }

        .form-field.is-invalid .input-drag {
            border-color: var(--color-errors)
        }

        .form-field.is-invalid .link-underlined {
            --color-underlined: 250, 93, 41
        }

        .form-field.is-invalid .form-field__msg {
            color: var(--color-errors)
        }

        .form-field__label {
            display: block;
            margin-bottom: 8px;
            line-height: 100%;
            text-transform: uppercase;
            font-size: 12px;
            font-weight: 300;
            color: #a7a7a7
        }

        .form-field__label.is-required:after {
            content: " (*)"
        }

        .form-field__msg {
            padding-top: 1em;
            font-size: var(--text-size-small);
            line-height: 100%;
            color: #a7a7a7
        }

        .form-field__msg li:not(:last-child) {
            margin-bottom: .5em
        }

        .form-field__remove {
            position: absolute;
            bottom: 0;
            right: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 36px;
            height: var(--height-input);
            cursor: pointer;
            transition: all .3s
        }

        .form-field__remove:hover {
            opacity: .7
        }

        .form-field__remove+.text-input {
            padding-right: 36px
        }

        .form-field .text-input {
            width: 100%
        }

        .text-input {
            display: block;
            height: var(--height-input);
            padding: 0 var(--pad-input);
            background: var(--bg-input);
            border: 0;
            color: var(--color-input);
            border-bottom: 1px solid var(--border-input);
            transition: all .3s ease-in-out
        }

        .text-input:focus {
            outline: 0;
            border-color: #a7a7a7
        }

        .text-input:disabled {
            background: var(--bg-primary)
        }

        .text-input::-moz-placeholder {
            color: #d3d3d3;
            font-weight: 300
        }

        .text-input::placeholder {
            color: #d3d3d3;
            font-weight: 300
        }

        textarea.text-input {
            height: 100px;
            padding-top: var(--pad-input)
        }

        .box-input-check-toggle {
            display: flex;
            align-items: center;
            gap: 10px
        }

        .box-text-input {
            position: relative;
            display: flex;
            width: 100%;
            background: var(--bg-input)
        }

        .box-text-input__url {
            display: flex;
            align-items: center;
            padding-left: var(--pad-input);
            color: #a7a7a7;
            border-bottom: 1px solid var(--border-input)
        }

        .box-text-input .text-input {
            width: 100%;
            padding-left: 4px
        }

        .c-toggle {
            display: inline-flex;
            gap: 16px
        }

        .label-c-toggle+.c-toggle {
            margin-left: 2em
        }

        .c-toggle__col {
            display: flex;
            align-items: center
        }

        .c-toggle strong {
            position: relative;
            line-height: 130%
        }

        .c-toggle sup {
            position: absolute;
            bottom: 100%;
            left: 0;
            width: 100%;
            text-align: center;
            color: #7a7a7a;
            font-size: var(--text-size-small)
        }

        .check-toggle {
            --height-input: 40px;
            display: inline-block;
            position: relative;
            width: 80px;
            height: var(--height-input);
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none
        }

        .check-toggle__ball {
            position: relative;
            top: 2px;
            display: block;
            width: calc(var(--height-input) - 4px);
            height: calc(var(--height-input) - 4px);
            background: var(--color-white);
            border-radius: 50%;
            transform: translateX(2px);
            transition: all .3s
        }

        .check-toggle input {
            display: none
        }

        .check-toggle input:checked+label {
            background: var(--bg-checkbox-true)
        }

        .check-toggle input:checked+label .check-toggle__ball {
            transform: translateX(43px)
        }

        .check-toggle label {
            position: absolute;
            inset: 0;
            background: var(--bg-checkbox);
            border-radius: var(--height-input);
            cursor: pointer;
            transition: all .3s
        }

        .input-check {
            position: relative;
            display: inline-block
        }

        .input-check input {
            display: none
        }

        .input-check label {
            display: inline-block;
            position: relative;
            padding-left: 25px;
            margin-right: 30px;
            line-height: 130%;
            cursor: pointer
        }

        .input-check label:before {
            content: "";
            display: block;
            position: absolute;
            top: 9px;
            left: 0;
            width: 19px;
            height: 19px;
            margin-top: -10px;
            border: 2px solid #d3d3d3;
            border-radius: var(--rounded-small)
        }

        .input-check label:after {
            content: "";
            position: absolute;
            top: 4px;
            left: 5px;
            width: 9px;
            height: 9px;
            background: var(--color-primary);
            border-radius: 2px;
            opacity: 0;
            transform: scale(0);
            transition: all .3s
        }

        .input-check input[type=checkbox]:checked+label:after {
            opacity: 1;
            transform: scale(1)
        }

        .input-check input[type=radio]:checked+label:after {
            opacity: 1;
            transform: scale(1)
        }

        .input-check input[type=radio]+label:before {
            border-radius: 50%
        }

        .input-check input[type=radio]+label:after {
            border-radius: 50%;
            border: none;
            top: 4px;
            left: 5px;
            width: 9px;
            height: 9px;
            background-color: var(--color-primary);
            border-radius: 50%;
            transform: scale(0)
        }

        .input-ranger-double {
            --height-ranger: 20px;
            position: relative;
            width: 100%;
            height: var(--height-ranger)
        }

        .input-ranger-double__input {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            width: 100%;
            outline: none;
            position: absolute;
            margin: auto;
            top: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0);
            pointer-events: none
        }

        .input-ranger-double__track {
            width: 100%;
            height: 4px;
            position: absolute;
            margin: auto;
            top: 0;
            bottom: 0;
            border-radius: var(--height-ranger)
        }

        .input-ranger-double input[type=range]::-webkit-slider-runnable-track {
            -webkit-appearance: none
        }

        .input-ranger-double input[type=range]::-moz-range-track {
            -moz-appearance: none
        }

        .input-ranger-double input[type=range]::-webkit-slider-thumb {
            -webkit-appearance: none;
            height: var(--height-ranger);
            width: var(--height-ranger);
            background-color: var(--color-white);
            border: 2px solid #27ae60;
            pointer-events: auto;
            border-radius: 50%;
            cursor: pointer
        }

        .input-ranger-double input[type=range]::-moz-range-thumb {
            -webkit-appearance: none;
            height: var(--height-ranger);
            width: var(--height-ranger);
            background-color: var(--color-white);
            border: 2px solid #27ae60;
            pointer-events: auto;
            border-radius: 50%;
            cursor: pointer;
            box-sizing: border-box
        }

        .input-ranger-double input[type=range]:active::-webkit-slider-thumb {
            background: #27ae60
        }

        .input-ranger-double__values {
            display: flex;
            justify-content: space-between;
            padding-top: 8px;
            color: #a7a7a7
        }

        .input-ranger-double__values strong {
            color: var(--color-primary)
        }

        .input-drag {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid var(--border-input);
            aspect-ratio: var(--input-ratio, 1/1);
            border-radius: var(--rounded-small);
            background-color: var(--bg-input);
            overflow: hidden;
            transition: all .3s
        }

        .input-drag:hover {
            border-color: #a7a7a7
        }

        .input-drag.is-drag {
            border-color: var(--color-primary);
            border-style: dashed;
            background-color: #e9e9e9
        }

        .input-drag.is-inserted:hover .input-drag__hover {
            opacity: 1
        }

        .input-drag.is-inserted .input-drag__hover {
            z-index: 1
        }

        .input-drag__input {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            overflow: hidden;
            cursor: pointer;
            z-index: 1
        }

        .input-drag__label {
            padding: 20px;
            text-align: center;
            line-height: 140%
        }

        .input-drag__label p {
            margin-bottom: .5em
        }

        .input-drag__label p:last-child {
            margin-bottom: 0
        }

        .input-drag__preview {
            position: absolute;
            inset: 0
        }

        .input-drag__preview img,
        .input-drag__preview video {
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover
        }

        .input-drag__hover {
            position: absolute;
            inset: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
            background: rgba(0, 0, 0, .5);
            opacity: 0;
            transition: all .3s
        }

        .input-drag__hover .button {
            position: relative;
            z-index: 5;
            pointer-events: auto
        }

        .input-drag__hover .button:hover {
            background: red
        }

        .form-errors {
            margin-bottom: 30px;
            color: #fa5d29;
            line-height: 120%
        }

        .form-errors li {
            margin-bottom: 8px
        }

        .form__row {
            margin-bottom: 30px
        }

        .form__row .text-input {
            width: 100%
        }

        .form__bts {
            display: flex;
            justify-content: space-between;
            gap: var(--gutter);
            margin-top: clamp(30px, 5vw, 60px)
        }

        .form__bts__left {
            display: flex;
            align-items: center
        }

        .form__bts__right {
            display: flex;
            gap: 8px
        }

        .form__bts .button {
            flex: auto
        }

        .form__hr {
            height: 1px;
            background-color: #d3d3d3;
            border: none;
            margin: clamp(40px, 4vw, 80px) 0
        }

        .form__hr--small {
            margin: clamp(20px, 4vw, 40px) 0
        }

        .box-form-autocomplete {
            display: flex;
            gap: 8px
        }

        .box-form-autocomplete .button,
        .box-form-autocomplete .text-input {
            border-radius: var(--rounded-small)
        }

        .field-autocomplete {
            position: relative
        }

        .field-autocomplete__wrap {
            position: relative
        }

        .field-autocomplete__dropdown {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            z-index: 1;
            opacity: 0;
            visibility: hidden;
            transition: all .3s
        }

        .field-autocomplete__dropdown.is-visible {
            opacity: 1;
            visibility: visible
        }

        .field-autocomplete__list {
            max-height: 204px;
            overflow-y: auto
        }

        .field-autocomplete__list li {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 4px 16px;
            border-bottom: 1px solid #e9e9e9;
            background: var(--color-white);
            cursor: pointer;
            transition: all .3s
        }

        .field-autocomplete__list li:last-child {
            border-bottom: 0
        }

        .field-autocomplete__list li:hover {
            background: #f3f3f3
        }

        .field-autocomplete__avatars {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            padding: 16px
        }

        .field-autocomplete__avatars li {
            position: relative;
            display: flex;
            cursor: pointer
        }

        .field-autocomplete__avatars li:hover img {
            opacity: .5
        }

        .field-autocomplete__avatars li:hover .ico-svg {
            opacity: 1
        }

        .field-autocomplete__avatars li img {
            transition: all .3s
        }

        .field-autocomplete__avatars .circle-avatar {
            background: #000;
            border-radius: 50%;
            overflow: hidden
        }

        .field-autocomplete__avatars .ico-svg {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 40%;
            transform: translate(-50%, -50%);
            fill: var(--color-white);
            opacity: 0
        }

        .field-autocomplete__avatar {
            display: flex;
            position: relative
        }

        .field-autocomplete__loading {
            --spinner-bg: #e9e9e9;
            --spinner-color: #222;
            position: absolute;
            top: 0;
            right: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            width: var(--height-input);
            height: var(--height-input);
            font-size: 10px
        }

        .snackbar {
            --snack-text: var(--color-white);
            position: fixed;
            bottom: 20px;
            left: 40px;
            max-width: 400px;
            padding: 20px 20px 20px 65px;
            opacity: 0;
            font-size: 16px;
            color: var(--snack-text);
            line-height: 170%;
            background: rgba(var(--color-primary-rgb), 0.7);
            box-shadow: 10px 10px 20px -10px rgba(var(--color-primary-rgb), 0.4);
            border-radius: var(--rounded-normal);
            z-index: 11;
            transition: all .3s
        }

        .snackbar--success {
            background-color: rgba(14, 14, 14, .9)
        }

        .snackbar--warning {
            --snack-text: var(--color-primary);
            background-color: rgba(230, 230, 0, .9);
            font-weight: 400
        }

        .snackbar--error {
            background-color: rgba(255, 0, 0, .9)
        }

        .snackbar.is-visible {
            opacity: 1;
            transform: translateY(-20px)
        }

        .snackbar svg {
            position: absolute;
            top: 50%;
            left: 20px;
            width: 30px;
            height: 30px;
            margin-top: -15px;
            fill: var(--snack-text)
        }

        :root {
            --button-rounded: 8px;
            --button-rounded-full: 72px;
            --button-height: 48px;
            --button-pad: 24px;
            --button-bg: var(--color-primary);
            --button-color: var(--color-white);
            --button-color-border: var(--bg-primary)
        }

        .button {
            position: relative;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            height: var(--button-height);
            padding: 0 var(--button-pad);
            background-color: var(--button-bg);
            font-size: var(--text-size-primary);
            color: var(--button-color);
            text-align: center;
            cursor: pointer;
            border: none;
            white-space: nowrap;
            transition: color .3s, background .3s, border .3s
        }

        .button:focus {
            outline: none
        }

        .button[class*="--tag"] {
            background: rgba(0, 0, 0, 0);
            border-radius: var(--button-rounded-full);
            color: var(--color-primary);
            font-size: var(--text-size-medium);
            border: 1px solid rgba(var(--color-primary-rgb), 0.3)
        }

        .button[class*="--tag"]:hover {
            background: rgba(0, 0, 0, 0);
            border-color: var(--color-primary);
            color: var(--color-primary)
        }

        .button[class*="--large"] {
            --button-height: 72px;
            min-width: var(--button-height);
            height: var(--button-height);
            padding: 0 1.6em;
            font-size: 20px;
            font-weight: 400;
            line-height: var(--button-height)
        }

        .button[class*="--medium"] {
            --button-height: 60px;
            min-width: var(--button-height);
            height: var(--button-height);
            padding: 0 1.2em;
            font-size: 18px;
            line-height: var(--button-height)
        }

        .button[class*="--small"] {
            min-width: 40px;
            height: 40px;
            padding: 0 20px;
            line-height: 40px
        }

        .button[class*="--x-small"] {
            min-width: 32px;
            height: 32px;
            padding: 0 12px;
            line-height: 32px
        }

        .button[class*="--extra-pad"] {
            padding: 0 3em
        }

        .button[class*="--rounded"] {
            border-radius: var(--button-rounded)
        }

        .button[class*="--rounded-full"] {
            border-radius: var(--button-rounded-full)
        }

        .button[class*="--color"] {
            padding: 0;
            border: none;
            outline: 1px solid rgba(var(--color-primary-rgb), 0.3);
            aspect-ratio: 1/1
        }

        .button[class*="--color"]:before {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 8px solid var(--button-color-border);
            border-radius: 50%;
            transition: border .3s
        }

        .button[class*="--color"]:hover:before {
            border-width: 4px
        }

        .button[class*="--full"] {
            width: 100%
        }

        .button[class*="--circle"] {
            padding: 0;
            border-radius: 50%
        }

        .button[class*="--square"] {
            padding: 0;
            aspect-ratio: 1/1
        }

        .button[class*="--circle"] {
            padding: 0;
            border-radius: 50%;
            aspect-ratio: 1/1
        }

        .button[class*="--dark"] {
            color: var(--color-white);
            border-color: rgba(255, 255, 255, .4)
        }

        .button[class*="--dark"]:hover {
            color: var(--color-primary);
            border-color: var(--color-white);
            background: var(--color-white)
        }

        .button[class*="--white"] {
            --button-bg: var(--color-white);
            color: var(--color-primary)
        }

        .button[class*="--red"] {
            --button-bg: #FA5D29;
            color: var(--color-white)
        }

        .button[class*="--gray"] {
            --button-bg: #d3d3d3;
            color: var(--color-primary)
        }

        .button[class*="--inspire"] {
            --button-bg: var(--color-inspire);
            color: #222
        }

        .button[class*="--outline"] {
            background: rgba(0, 0, 0, 0);
            border: 1px solid var(--color-primary);
            color: var(--color-primary)
        }

        .button[class*="--outline--gray"] {
            border-color: #d3d3d3
        }

        .button[class*="--outline--dark"] {
            color: var(--color-white);
            border-color: rgba(255, 255, 255, .4)
        }

        .button[class*="--outline--white"] {
            border-color: #fff;
            color: #fff
        }

        .button[class*="--outline--white"]:hover {
            background: #fff;
            color: #222
        }

        .button[class*="--disabled"] {
            opacity: .5;
            pointer-events: none
        }

        .button.is-active {
            background-color: var(--bg-secondary);
            color: var(--color-white)
        }

        .button.is-loading .button__content {
            opacity: 0
        }

        .button.is-loading .button__spinner {
            opacity: 1
        }

        .button__spinner {
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -16px 0 0 -16px;
            width: 32px;
            height: 32px;
            border: 1px solid rgba(255, 255, 255, .5);
            border-left-color: var(--color-white);
            border-radius: 50%;
            opacity: 0;
            transition: all .3s;
            animation: btRotate .6s infinite linear
        }

        .button[class*="--close"] {
            --ico-close: #a7a7a7
        }

        .button[class*="--close"] .ico-svg {
            margin-left: 8px;
            fill: var(--ico-close)
        }

        .button[class*="--close"]:hover {
            --ico-close: var(--color-white);
            color: var(--color-white);
            background: var(--bg-secondary) !important
        }

        .button[class*="--color--close"] {
            --ico-close: #fff
        }

        .button[class*="--color--close"]:before {
            transition: none
        }

        .button[class*="--color--close"] .ico-svg {
            margin-left: 0;
            fill: var(--ico-close);
            opacity: 0
        }

        .button[class*="--color--close"]:hover {
            outline-color: var(--bg-secondary);
            background: var(--bg-secondary) !important
        }

        .button[class*="--color--close"]:hover:before {
            border: 0
        }

        .button[class*="--color--close"]:hover .ico-svg {
            opacity: 1
        }

        .button svg {
            position: relative;
            vertical-align: middle;
            fill: currentColor;
            transition: fill .3s
        }

        .button svg.ico--left {
            margin-right: .5em
        }

        .button svg.ico--right {
            margin-left: .5em
        }

        .button:hover {
            color: var(--color-white);
            background-color: #383838
        }

        .button:hover svg {
            fill: currentColor
        }

        .bt-play {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 62px;
            height: 62px;
            border: 1px solid var(--color-white);
            border-radius: 50%;
            cursor: pointer
        }

        .bt-play .play-pause {
            transform: translateX(2px);
            transition: all .3s
        }

        .bt-play .play-pause.is-playing {
            transform: translateX(0)
        }

        .play-pause {
            position: relative;
            display: inline-block;
            cursor: pointer;
            width: 12px;
            height: 14px
        }

        .play-pause.is-playing .play-pause__bt--before {
            -webkit-clip-path: polygon(0 0, 30% 0, 30% 100%, 0% 100%);
            clip-path: polygon(0 0, 30% 0, 30% 100%, 0% 100%)
        }

        .play-pause.is-playing .play-pause__bt--after {
            -webkit-clip-path: polygon(70% 0, 100% 0, 100% 100%, 70% 100%);
            clip-path: polygon(70% 0, 100% 0, 100% 100%, 70% 100%)
        }

        .play-pause__bt {
            display: inline-block;
            position: absolute;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--color-white);
            transition: -webkit-clip-path .3s ease;
            transition: clip-path .3s ease;
            transition: clip-path .3s ease, -webkit-clip-path .3s ease
        }

        .play-pause__bt--before {
            -webkit-clip-path: polygon(0 0, 50% 25%, 50% 75%, 0% 100%);
            clip-path: polygon(0 0, 50% 25%, 50% 75%, 0% 100%)
        }

        .play-pause__bt--after {
            -webkit-clip-path: polygon(50% 25%, 100% 50%, 100% 50%, 50% 75%);
            clip-path: polygon(50% 25%, 100% 50%, 100% 50%, 50% 75%)
        }

        .budget-tag {
            display: inline-block;
            height: 22px;
            padding: 0 4px;
            line-height: 22px;
            font-size: 12px;
            font-weight: 500;
            border-radius: var(--rounded-small);
            border: 1px solid var(--budget-tag-border, rgba(var(--color-primary-rgb), 0.3))
        }

        .budget-tag[class*="--sotd"] {
            border-color: #ce6644;
            color: #ce6644
        }

        .budget-tag[class*="--dev"] {
            border-color: #8eabc6;
            color: #8eabc6
        }

        .budget-tag[class*="--hm"] {
            border-color: #726996;
            color: #726996
        }

        .budget-tag[class*="--white"] {
            border-color: #fff;
            color: #fff
        }

        .budget-tag[class*="--solid"] {
            color: var(--color-primary);
            border: none;
            line-height: 24px
        }

        .budget-tag[class*="--solid"][class*="--black"] {
            background: #222;
            color: #fff
        }

        .budget-tag[class*="--solid"][class*="--white"] {
            background: #fff
        }

        .budget-tag[class*="--solid"][class*="--green"] {
            background: #aaeec4;
            border: none
        }

        .budget-tag[class*="--solid"][class*="--red"] {
            background: #fa5d29;
            color: #fff
        }

        .budget-tag[class*="--solid"][class*="--yellow"] {
            background: #fff083
        }

        .budget-circle {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 24px;
            height: 24px;
            background-color: #e9e9e9;
            border-radius: 50%;
            font-weight: bold;
            font-weight: 400;
            transition: all .3s
        }

        .budget {
            --budget-height: 20px;
            display: inline-block;
            height: var(--budget-height);
            padding: 0 10px;
            line-height: var(--budget-height);
            font-size: 10px;
            border-radius: var(--budget-height)
        }

        .budget[class*="--white"] {
            background: var(--bg-white);
            color: var(--color-primary)
        }

        @keyframes btRotate {
            0% {
                transform: rotate(0deg)
            }

            100% {
                transform: rotate(360deg)
            }
        }

        .bt-ico-left {
            display: inline-flex;
            align-items: center;
            gap: .5em;
            cursor: pointer
        }

        .bt-ico-label {
            display: inline-flex;
            flex-direction: column;
            align-items: center;
            gap: 4px;
            cursor: pointer
        }

        .bt-ico-label small {
            font-size: 12px
        }

        .bt-ellipses {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 12px;
            height: 72px;
            background-color: #f3f3f3;
            background-image: linear-gradient(to right, rgb(var(--color-dotteds-rgb)) 0 10%, rgba(255, 255, 255, 0) 10%), linear-gradient(to right, rgb(var(--color-dotteds-rgb)) 0 10%, rgba(255, 255, 255, 0) 10%);
            background-position: left top, left bottom;
            background-size: 8px 1px, 8px 1px;
            background-repeat: repeat-x, repeat-x;
            cursor: pointer;
            transition: all .3s
        }

        .bt-ellipses--no-hover {
            cursor: default
        }

        .bt-ellipses--white {
            background-color: #fff
        }

        .bt-ellipses:not(.bt-ellipses--no-hover):hover {
            background-color: #e9e9e9
        }

        .label-site {
            display: flex;
            align-items: center;
            height: 60px;
            padding: 0 10px;
            background: #fff;
            border-radius: 60px
        }

        .label-site__site {
            display: flex;
            align-items: center;
            gap: 16px
        }

        .label-site__img {
            height: auto
        }

        .label-site__info {
            line-height: 100%;
            padding-right: 20px
        }

        .label-site__label {
            margin-bottom: 4px;
            opacity: .5;
            font-size: 14px
        }

        .label-site .users-credits {
            padding-right: 8px
        }

        @media(max-width: 576px) {
            .button[class*="--tag"] {
                --button-height: 36px;
                --button-pad: 16px;
                font-size: var(--text-size-primary)
            }

            .button[class*="--large"] {
                --button-height: 48px;
                font-size: var(--text-size-primary)
            }

            .button[class*="--medium"] {
                --button-height: 48px
            }
        }

        .heading-1 {
            font-size: 42px;
            font-size: clamp(42px, -6.5915492958px + 9.7183098592vw, 180px);
            line-height: 100%
        }

        .heading-2 {
            font-size: 42px;
            font-size: clamp(42px, 4.676056338px + 7.4647887324vw, 148px);
            line-height: 100%
        }

        .heading-3 {
            font-size: 36px;
            font-size: clamp(36px, 14.8732394366px + 4.2253521127vw, 96px);
            line-height: 100%
        }

        .heading-4 {
            font-size: 32px;
            font-size: clamp(32px, 16.5070422535px + 3.0985915493vw, 76px);
            line-height: 100%
        }

        .heading-5 {
            font-size: 26px;
            font-size: clamp(26px, 15.4366197183px + 2.1126760563vw, 56px);
            line-height: 120%
        }

        .heading-6 {
            margin-bottom: 1em;
            font-size: 22px;
            font-size: clamp(22px, 12.8450704225px + 1.8309859155vw, 48px);
            line-height: 130%;
            font-weight: 300
        }

        .text-large {
            font-size: 18px;
            font-size: clamp(18px, 15.8873239437px + 0.4225352113vw, 24px)
        }

        .text-medium {
            font-size: 18px;
            font-size: clamp(18px, 17.2957746479px + 0.1408450704vw, 20px)
        }

        .text-underlined {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline;
            -webkit-text-decoration-style: solid;
            text-decoration-style: solid;
            -webkit-text-decoration-color: var(--color-primary);
            text-decoration-color: var(--color-primary);
            text-decoration-thickness: 1px;
            text-underline-offset: .2em
        }

        .text-truncated {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden
        }

        .legal-recaptcha {
            margin: 1.5rem 0;
            line-height: 120%
        }

        .legal-recaptcha small {
            opacity: .7
        }

        .link-underlined {
            position: relative;
            display: inline-block;
            line-height: 100%;
            color: rgb(var(--color-underlined));
            border: none;
            cursor: pointer
        }

        .link-underlined:before {
            content: "";
            position: absolute;
            bottom: -0.2em;
            left: 0;
            width: 100%;
            height: 2px;
            background-repeat: no-repeat;
            background-image: linear-gradient(to right, rgb(var(--color-underlined)) 45%, rgba(var(--color-underlined), 0.3) 55%);
            background-size: 220% 100%;
            background-position: 100% 50%;
            transition: .3s ease-out
        }

        .link-underlined--white {
            --color-underlined: 255, 255, 255
        }

        .link-underlined--red {
            --color-underlined: 250, 93, 41
        }

        .link-underlined:hover:before {
            background-position: 0% 50%
        }

        .toggle {
            overflow: hidden;
            max-height: 0;
            clear: both;
            transition: all .6s cubic-bezier(0, 1, 0.5, 1)
        }

        .toggle.show {
            transition: all .6s ease-in;
            max-height: 1000px;
            overflow: hidden
        }

        .heading-hr {
            padding-bottom: 24px;
            border-bottom: 1px solid var(--border-gray);
            font-size: var(--text-size-primary)
        }

        .star-price {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            width: clamp(70px, 10vw, 128px);
            aspect-ratio: 1/1;
            line-height: 120%;
            font-size: 10px;
            font-size: clamp(10px, 7.8873239437px + 0.4225352113vw, 16px)
        }

        .star-price--small {
            font-size: 9px
        }

        .star-price--small .star-price__label {
            margin-bottom: .4em;
            line-height: 90%
        }

        .star-price--large {
            width: 10em;
            font-size: clamp(8px, 2vw, 16px)
        }

        .star-price--large .star-price__price {
            margin: .05em 0 0 0;
            font-size: 3em;
            font-weight: bold
        }

        .star-price--large .star-price__price small {
            font-size: .6em
        }

        .star-price__wrap {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            line-height: 170%;
            text-align: center;
            font-weight: 400
        }

        .star-price__label {
            font-size: 1.3em
        }

        .star-price__label--small {
            font-size: 1em
        }

        .star-price__price {
            margin: .05em 0;
            font-size: 2em;
            font-weight: bold
        }

        .star-price__old {
            font-size: .7em;
            text-decoration: line-through
        }

        .star-price svg {
            width: 100%;
            max-width: 100%;
            height: auto
        }

        .loading {
            --spinner-bg: rgba(255, 255, 255, 0.2);
            --spinner-color: #fff;
            --loading-msg: #fff;
            position: absolute;
            inset: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, .7);
            transform: scale(0.5);
            opacity: 0;
            visibility: hidden;
            transition: all .3s;
            z-index: 5
        }

        .loading--fixed {
            position: fixed;
            z-index: 15
        }

        .loading--white {
            --spinner-bg: rgba(0, 0, 0, 0.2);
            --spinner-color: var(--color-primary);
            --loading-msg: #222;
            background-color: var(--bg-primary)
        }

        .loading.is-visible {
            transform: scale(1);
            opacity: 1;
            visibility: visible
        }

        .loading__content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px
        }

        .loading__msg {
            max-width: 400px;
            color: var(--loading-msg);
            text-align: center
        }

        .loading__spinner {
            pointer-events: none;
            width: 2.5em;
            height: 2.5em;
            border: 2px solid rgba(0, 0, 0, 0);
            border-color: var(--spinner-bg);
            border-top-color: var(--spinner-color);
            border-radius: 50%;
            animation: loadingSpinner .6s linear infinite
        }

        @keyframes loadingSpinner {
            100% {
                transform: rotate(360deg)
            }
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh
        }

        .inner {
            --innerWidth: 1920px;
            width: 100%;
            max-width: var(--innerWidth);
            margin: 0 auto;
            padding: 0 var(--pad-inner)
        }

        .inner--sm {
            --innerWidth: 931px
        }

        .inner--lg {
            --innerWidth: 1216px
        }

        .inner--xl {
            --innerWidth: 1386px
        }

        .inner--xxl {
            --innerWidth: 1650px
        }

        .inner--xxxl {
            --innerWidth: 1834px
        }

        .swiper {
            overflow: hidden
        }

        #content {
            flex: 1
        }

        .block {
            margin-top: clamp(20px, 3vw, 50px);
            margin-bottom: clamp(50px, 20vw, 200px)
        }

        .block--mb-s {
            margin-bottom: clamp(50px, 20vw, 100px)
        }

        .block--private {
            position: relative;
            display: flex;
            align-items: center;
            min-height: calc(100vh - 71px);
            margin: 0;
            padding: clamp(50px, 20vw, 100px) 0;
            background: rgba(0, 0, 0, .7)
        }

        .block--private .c-heading,
        .block--private .c-view-all {
            color: #fff
        }

        .block--private .bg-private {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            -o-object-fit: contain;
            object-fit: contain
        }

        .block[class*="--bg"] {
            margin: clamp(50px, 20vw, 200px) 0;
            padding: 100px 0
        }

        .block[class*="--gray"] {
            background: var(--bg-3rd)
        }

        .item-link {
            position: absolute;
            top: 0;
            left: 0;
            display: block;
            width: 100%;
            height: 100%;
            z-index: 1
        }

        .users-credits {
            display: inline-flex;
            flex-wrap: wrap;
            gap: .3em
        }

        .users-credits__details {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: clamp(10px, 3vw, 20px)
        }

        .users-credits__cards {
            display: flex
        }

        .users-credits__cards .users-credits__item:nth-child(n+2) {
            margin-left: -1em
        }

        .users-credits__cards .circle-avatar__img {
            border: 2px solid var(--bg-primary)
        }

        .users-credits__number {
            display: flex;
            align-items: center
        }

        .users-credits .circle-avatar {
            display: block;
            flex-shrink: 0
        }

        .users-credits .circle-avatar__img {
            box-sizing: content-box
        }

        .avatar-name__link {
            display: flex;
            align-items: center;
            gap: .5em;
            min-width: -moz-fit-content;
            min-width: fit-content
        }

        .avatar-name__link sup {
            flex: 1;
            margin-bottom: auto;
            margin-left: .2em;
            vertical-align: text-top;
            font-size: .5em;
            font-weight: 500
        }

        .avatar-name__name {
            line-height: 100%
        }

        .avatar-name__title {
            display: inline-block;
            font-size: 1em
        }

        .avatar-name__img {
            display: block;
            height: auto;
            border-radius: 50%;
            filter: grayscale(1)
        }

        .circle-avatar {
            display: inline-block;
            position: relative
        }

        .circle-avatar__img {
            display: block;
            height: auto;
            border-radius: 50%;
            filter: grayscale(1)
        }

        .circle-avatar__ribbon {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        .circle-avatar__ribbon svg {
            position: relative;
            top: 50%;
            left: 50%;
            width: calc(100% + .6em);
            height: calc(100% + .6em);
            transform: translate(-50%, -50%);
            stroke-width: 1px;
            overflow: visible
        }

        .circle-avatar__ribbon span {
            position: absolute;
            left: 0;
            top: 100%;
            width: 100%;
            text-align: center;
            font-size: Arial;
            font-size: 8px;
            font-weight: 400;
            line-height: 100%;
            z-index: 1
        }

        .menu-tabs {
            position: relative;
            display: flex;
            gap: clamp(8px, 5vw, 32px)
        }

        .menu-tabs--s2 {
            height: 80px;
            margin-bottom: clamp(24px, 3vw, 48px);
            justify-content: center;
            background-image: linear-gradient(to right, rgb(var(--color-dotteds-rgb)) 0 10%, rgba(255, 255, 255, 0) 10%);
            background-position: bottom;
            background-size: 8px 1px;
            background-repeat: repeat-x
        }

        .menu-tabs--s3 {
            margin-bottom: clamp(24px, 3vw, 48px);
            background-image: linear-gradient(to right, rgb(var(--color-dotteds-rgb)) 0 10%, rgba(255, 255, 255, 0) 10%);
            background-position: bottom;
            background-size: 8px 1px;
            background-repeat: repeat-x
        }

        .menu-tabs--s3 li {
            padding-bottom: clamp(20px, 3vw, 20px);
            line-height: 150%
        }

        .menu-tabs .active {
            font-weight: bold
        }

        .menu-tabs li {
            position: relative;
            display: flex;
            align-items: center;
            height: 100%;
            cursor: pointer;
            color: #a7a7a7;
            white-space: nowrap
        }

        .menu-tabs .active {
            color: var(--color-primary)
        }

        .menu-tabs .active:before {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            border-bottom: 2px solid var(--color-primary)
        }

        .menu-tabs sup {
            position: relative;
            top: -0.2em;
            margin-left: .5em;
            font-size: 10px
        }

        .menu-dd {
            --menu-bg: #222;
            --menu-bg-active: #FA5D29;
            --menu-color: #fff;
            display: flex;
            gap: 8px;
            padding-left: 8px;
            font-size: 14px;
            color: var(--menu-color)
        }

        .menu-dd.is-open .menu-dd__bt {
            background: var(--menu-bg-active)
        }

        .menu-dd.is-open .menu-dd__box {
            opacity: 1;
            visibility: visible;
            pointer-events: auto
        }

        .menu-dd__bt {
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            width: var(--menu-bt-size, 48px);
            height: var(--menu-bt-size, 48px);
            background: var(--menu-bg);
            font-size: Arial, sans-serif;
            font-size: 35px;
            letter-spacing: -0.15em;
            border-radius: var(--rounded-normal);
            cursor: pointer;
            pointer-events: auto;
            transition: background .3s
        }

        .menu-dd__bt:hover {
            background: var(--menu-bg-active)
        }

        .menu-dd__bt svg {
            fill: var(--color-white)
        }

        .menu-dd__box {
            padding: clamp(20px, 3vw, 30px);
            background: var(--menu-bg);
            border-radius: var(--rounded-normal);
            opacity: 0;
            visibility: hidden;
            transition: all .3s
        }

        .menu-dd__list li:not(:last-child) {
            margin-bottom: 16px
        }

        .menu-dd__list+.menu-dd__list {
            border-top: 1px solid rgba(255, 255, 255, .2);
            margin-top: 16px;
            padding-top: 16px
        }

        .menu-dd__item {
            display: flex;
            align-items: center;
            gap: 12px;
            line-height: 100%;
            cursor: pointer;
            transition: all .3s
        }

        .menu-dd__item:hover {
            opacity: .7
        }

        .menu-dd__item .ico-svg {
            width: 14px
        }

        .menu-dd a {
            color: var(--color-white)
        }

        .content-tabs__item {
            position: relative;
            display: none
        }

        .content-tabs__item.active {
            display: block
        }

        .tab img {
            display: block;
            width: 100%
        }

        .list-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 12px
        }

        .list-tags--center {
            justify-content: center;
            min-width: 100%
        }

        .list-tags li {
            display: flex
        }

        .list-default {
            margin: 2em 0
        }

        .list-default li {
            list-style: square inside;
            line-height: 140%
        }

        .list-default li:not(:last-child) {
            margin-bottom: .5em
        }

        .list-checks li {
            position: relative;
            margin-bottom: 1em;
            padding-left: 32px;
            line-height: 150%
        }

        .list-checks li:last-child {
            margin-bottom: 0
        }

        .list-checks .ico-svg {
            position: absolute;
            top: 0;
            left: 0
        }

        .list-check li {
            position: relative;
            margin-bottom: 1em;
            padding-left: 28px;
            line-height: 150%
        }

        .list-check li:last-child {
            margin-bottom: 0
        }

        .list-check .ico-svg {
            position: absolute;
            top: 6px;
            left: 0
        }

        .list-lines li {
            display: flex;
            padding: 12px 0;
            border-bottom: 1px solid #d3d3d3
        }

        .list-lines li:last-child {
            border-bottom: none
        }

        .list-lines li div {
            flex: 1;
            line-height: 130%
        }

        .box-site {
            position: relative;
            display: flex;
            align-items: flex-end;
            margin-bottom: 30px;
            overflow: hidden
        }

        .box-site__bg {
            display: block;
            aspect-ratio: 16/7;
            border-radius: var(--rounded-large)
        }

        .box-site__top {
            position: absolute;
            top: 20px;
            left: 20px
        }

        .c-boxes-score {
            display: inline-flex
        }

        .c-boxes-score .box-score:is(:first-child) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .c-boxes-score .box-score:is(:last-child) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .c-boxes-score .box-score:not(:last-child) {
            border-right: none
        }

        .c-boxes-score .box-score:not(:first-child):not(:last-child) {
            border-radius: 0
        }

        .box-score {
            --scoreBorder: var(--color-primary);
            display: inline-flex;
            flex-direction: column;
            border: 1px solid var(--scoreBorder);
            border-radius: var(--rounded-normal);
            text-align: center;
            line-height: 100%;
            font-size: 10px;
            font-size: clamp(10px, 7.8873239437px + 0.4225352113vw, 16px)
        }

        .box-score--small {
            min-width: 40px;
            border-radius: var(--rounded-small)
        }

        .box-score--small .box-score__top {
            padding: .6em .6em;
            font-size: 9px
        }

        .box-score--small .box-score__bottom {
            width: 100%;
            padding: .8em 0;
            font-size: 14px;
            justify-content: center
        }

        .box-score__top {
            padding: .5em 1em
        }

        .box-score__top strong {
            font-weight: 500
        }

        .box-score__bottom {
            padding: .8em;
            border-top: 1px solid var(--scoreBorder)
        }

        .box-score__note {
            display: flex;
            flex-direction: column
        }

        .box-score__note strong {
            display: block;
            font-size: 1.65em
        }

        .box-score__note sub {
            margin-top: .2em;
            font-size: .9em;
            font-weight: normal
        }

        .box-figure {
            height: 100%;
            padding: clamp(20px, 4vw, 80px);
            background: var(--bg-box-figure, #222);
            border-radius: var(--rounded-large)
        }

        .box-figure>* {
            width: 100%
        }

        .box-figure figure {
            width: 100%;
            border-radius: var(--rounded-normal);
            overflow: hidden
        }

        .swiper-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 1;
            display: flex;
            transition-property: transform;
            box-sizing: content-box
        }

        .swiper-slide {
            flex-shrink: 0;
            width: 100%;
            height: 100%;
            position: relative;
            transition-property: transform;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none
        }

        .swiper-pointer-events {
            touch-action: pan-y
        }

        .swiper-pagination {
            display: flex;
            gap: 12px
        }

        .swiper-pagination-bullet {
            width: 8px;
            height: 8px;
            display: inline-block;
            border-radius: 50%;
            background: var(--color-primary);
            opacity: .2;
            cursor: pointer;
            transition: all .3s
        }

        .swiper-pagination-bullet:hover {
            opacity: 1
        }

        .swiper-pagination-bullet-active {
            opacity: 1
        }

        .swiper-button-disabled {
            visibility: hidden
        }

        .swiper-vertical>.swiper-wrapper {
            flex-direction: column
        }

        .swiper-fade.swiper-free-mode .swiper-slide {
            transition-timing-function: ease-out
        }

        .swiper-fade .swiper-slide {
            transition-property: opacity
        }

        .swiper-fade .swiper-slide-active {
            z-index: 999
        }

        [class*=slider-cards] .swiper-slide {
            height: auto
        }

        .slider-cards--half-3 .swiper-slide {
            width: 490px
        }

        .slider-sites {
            margin-bottom: 1em
        }

        .slider-sites--temp-1 .swiper-slide {
            width: 670px
        }

        .slider-sites .swiper-wrapper {
            display: grid;
            grid-auto-flow: column
        }

        .slider-sites .swiper-slide {
            position: relative;
            display: flex;
            flex-direction: column
        }

        .slider-sites__nav {
            display: flex;
            justify-content: flex-end;
            gap: 16px;
            padding-top: clamp(20px, 3vw, 48px)
        }

        .slider-sites__prev svg {
            transform: translateX(-1px)
        }

        .slider-sites__next svg {
            transform: translateX(1px)
        }

        .slider-sites .figure-rollover__file {
            aspect-ratio: var(--img-resizing-site);
            -o-object-fit: cover;
            object-fit: cover
        }

        .slider-carousel .navigation {
            display: flex;
            justify-content: flex-end;
            gap: 16px;
            margin-top: 24px
        }

        .slider-carousel .navigation svg {
            fill: var(--color-primary)
        }

        .slider-carousel .bt-nav {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            border: 1px solid var(--color-primary);
            border-radius: 50%;
            cursor: pointer
        }

        .slider-carousel .swiper-button-disabled {
            visibility: visible;
            opacity: .3
        }

        .slider-carousel .swiper-button-next {
            transform: scaleX(-1)
        }

        .slider-carousel .swiper-slide img {
            display: block;
            width: 100%
        }

        .pagination {
            display: flex;
            justify-content: flex-end;
            gap: 8px;
            margin-top: 50px;
            font-weight: bold
        }

        .pagination__item {
            display: flex;
            justify-content: center;
            min-width: 32px;
            border-radius: var(--rounded-normal);
            font-size: 12px;
            color: var(--color-primary);
            transition: all .3s
        }

        .pagination__item--current,
        .pagination__item:hover {
            background: var(--bg-secondary);
            color: var(--color-white)
        }

        .pagination__prev {
            margin-right: 1em
        }

        .pagination__next {
            margin-left: 1em
        }

        .pagination .link-underlined {
            margin-top: auto;
            margin-bottom: auto;
            font-size: 14px
        }

        @media(max-width: 576px) {
            .pagination {
                justify-content: center
            }

            .pagination__item:nth-of-type(4),
            .pagination__item:nth-of-type(5) {
                display: none
            }
        }

        .list-circle-notes {
            display: flex;
            gap: 8px
        }

        .circle-note {
            display: flex;
            flex-direction: column
        }

        .circle-note__legend {
            text-align: center;
            font-size: 12px;
            font-weight: 400
        }

        .circle-note__bg {
            fill: none;
            stroke: #d3d3d3;
            stroke-width: 1
        }

        .circle-note__path {
            fill: none;
            stroke-width: 1;
            stroke: var(--color-primary);
            animation: progress .6s ease-out forwards
        }

        .circle-note__note {
            font-size: 8px;
            font-weight: bold;
            line-height: 100%;
            text-anchor: middle;
            transform: translateY(1px)
        }

        @keyframes progress {
            0% {
                stroke-dasharray: 0 100
            }
        }

        .list-circle-notes-ani {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 15px
        }

        .circle-note-progress {
            position: relative;
            display: inline-block;
            display: flex;
            flex-direction: column
        }

        .circle-note-progress .box-circle {
            position: relative;
            display: flex;
            align-items: center;
            flex-direction: column;
            transition: all .3s
        }

        .circle-note-progress .box-circle .legend,
        .circle-note-progress .box-circle .percent {
            transition: all .3s
        }

        .circle-note-progress svg {
            display: block;
            transform: rotate(-90deg)
        }

        .circle-note-progress circle {
            fill: none;
            stroke: var(--color-primary);
            stroke-width: 1
        }

        .circle-note-progress circle:nth-child(1) {
            stroke-opacity: .3
        }

        .circle-note-progress circle:nth-child(2) {
            stroke-dasharray: 238.7610416728;
            stroke-dashoffset: 238.7610416728
        }

        .circle-note-progress .circle {
            position: relative;
            display: flex;
            justify-content: center
        }

        .circle-note-progress .info {
            position: absolute;
            top: 50%;
            left: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 12px;
            width: 100%;
            padding-top: 10px;
            line-height: 100%;
            text-align: center;
            font-weight: 500;
            transform: translateY(-50%)
        }

        .circle-note-progress .percent {
            display: inline-flex;
            font-size: 34px;
            font-weight: bold
        }

        .figure-rollover {
            position: relative;
            display: block;
            transition: all .3s
        }

        .figure-rollover.is-large {
            font-size: 16px;
            font-size: clamp(16px, 13.1830985915px + 0.5633802817vw, 24px)
        }

        .figure-rollover.is-large .button {
            height: auto;
            padding: .7em 1.4em
        }

        .figure-rollover__hover {
            position: absolute;
            top: 0;
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            width: 100%;
            height: 100%;
            padding: 1.6em 1.6em 1.5em 1.6em;
            visibility: hidden;
            opacity: 0;
            color: #fff;
            background: linear-gradient(0deg, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0) 100%);
            z-index: 2;
            transition: all .3s;
            pointer-events: none;
            box-sizing: border-box
        }

        .figure-rollover__hover svg {
            pointer-events: all;
            cursor: pointer
        }

        .figure-rollover__hover .figure-rollover__bt {
            pointer-events: auto
        }

        .figure-rollover__fixed-left {
            position: absolute;
            top: 1.6em;
            left: 1.6em;
            display: flex;
            align-items: center;
            gap: 8px;
            z-index: 2;
            pointer-events: none
        }

        .figure-rollover__fixed-left .button {
            pointer-events: auto
        }

        .figure-rollover__fixed-right {
            position: absolute;
            top: 1.6em;
            right: 1.6em;
            display: flex;
            align-items: center;
            gap: 8px;
            z-index: 2;
            pointer-events: none
        }

        .figure-rollover__fixed-right .button {
            pointer-events: auto
        }

        .figure-rollover__fixed-right-bottom {
            position: absolute;
            bottom: 1.6em;
            right: 1.6em;
            display: flex;
            align-items: center;
            gap: 8px;
            z-index: 2;
            pointer-events: none
        }

        .figure-rollover__center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%)
        }

        .figure-rollover__center * {
            pointer-events: all
        }

        .figure-rollover__right {
            display: flex;
            align-items: flex-end
        }

        .figure-rollover__right * {
            pointer-events: all
        }

        .figure-rollover__topright {
            display: flex;
            align-items: flex-end
        }

        .figure-rollover__topright * {
            pointer-events: all
        }

        .figure-rollover.has-hover-active .figure-rollover__hover {
            opacity: 1;
            visibility: visible
        }

        .figure-rollover__link {
            display: block
        }

        .figure-rollover__file {
            display: block;
            width: 100%;
            height: auto;
            -o-object-fit: cover;
            object-fit: cover
        }

        .figure-rollover__row {
            margin-bottom: .2em;
            line-height: 120%;
            text-align: left
        }

        .figure-rollover__row:last-child {
            margin-bottom: 0
        }

        .figure-rollover__bts {
            display: flex;
            gap: 1em;
            margin-bottom: .3em
        }

        .figure-rollover__bt {
            margin: auto
        }

        .figure-rollover__bt svg {
            display: block;
            width: 1em;
            height: auto
        }

        .figure-rollover__note {
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            font-size: 40px;
            font-weight: bold;
            color: var(--color-white);
            background: rgba(0, 0, 0, .5);
            pointer-events: none
        }

        .figure-rollover small {
            font-size: .666em
        }

        .figure-rollover h3 {
            font-size: 1em;
            font-weight: 500
        }

        .figure-rollover:hover .figure-rollover__hover {
            opacity: 1;
            visibility: visible
        }

        .c-load-more {
            margin-top: clamp(20px, 6vw, 100px);
            text-align: center
        }

        .total-grid {
            margin-bottom: clamp(24px, 3vw, 48px)
        }

        .header-grid {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-bottom: clamp(24px, 3vw, 48px)
        }

        .grid-awwwards {
            --minthumb: 250px;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(var(--minthumb), 1fr));
            grid-auto-flow: row dense;
            grid-gap: clamp(20px, 10vw, 100px) var(--gutter)
        }

        @media(max-width: 576px) {
            .grid-awwwards {
                --minthumb: 150px !important
            }
        }

        .grid-collections {
            --minthumb: 440px;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(var(--minthumb), 1fr));
            grid-auto-flow: row dense;
            grid-gap: 36px var(--gutter);
            padding-bottom: 30px;
            font-size: 15px
        }

        @media(min-width: 1600px) {
            .grid-collections {
                --minthumb: 440px
            }
        }

        .grid-collections .is-double {
            grid-column: span 2
        }

        .grid-collections .card-banner {
            height: calc(100% - 47px);
            border-radius: var(--rounded-large)
        }

        .grid-collections .figure-rollover__file {
            aspect-ratio: var(--img-resizing-site)
        }

        .grid-elements-fit {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(297px, 1fr));
            grid-gap: var(--gutter)
        }

        .grid-elements-fit .figure-rollover {
            border-radius: var(--rounded-large);
            overflow: hidden
        }

        .grid-elements-fit--small .figure-rollover {
            border-radius: var(--rounded-normal)
        }

        .card-banner {
            position: relative;
            height: 100%;
            background: var(--card-bg, --bg-secondary);
            overflow: hidden
        }

        .card-banner[class*="--dark"] {
            color: var(--color-white)
        }

        .card-banner[class*="--dark"] .link-underlined {
            --color-underlined: var(--color-white-rgb)
        }

        .card-banner[class*="--s1"] {
            display: flex;
            flex-direction: column;
            justify-content: space-between
        }

        .card-banner[class*="--s1"] .card-banner__info {
            width: 70%
        }

        .card-banner[class*="--s1"] .card-banner__title {
            margin-bottom: .6em
        }

        .card-banner[class*="--s1"] .card-banner__footer {
            position: relative;
            padding: clamp(24px, 3vw, 40px);
            text-align: right;
            line-height: 100%
        }

        .card-banner[class*="--s2"] {
            min-height: 350px
        }

        .card-banner[class*="--s2"] .card-banner__info {
            width: 500px;
            max-width: 100%
        }

        .card-banner[class*="--s2"] .users-credits {
            margin: 1em 0 1.5em 0
        }

        .card-banner[class*="--s2"] .users-credits__cards {
            --bg-primary: var(--bg-secondary)
        }

        .card-banner[class*="--s2"] .sticker-svg {
            position: absolute;
            top: 12%;
            right: 60%;
            width: clamp(80px, 8vw, 140px)
        }

        .card-banner__info {
            position: relative;
            display: flex;
            flex-direction: column;
            gap: 12px;
            padding: clamp(24px, 3vw, 64px)
        }

        .card-banner__title {
            line-height: 120%
        }

        .card-banner__photo {
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%
        }

        .card-banner__photo img {
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover
        }

        .grid-academy {
            --minthumb: 400px;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(var(--minthumb), 1fr));
            grid-auto-flow: row dense;
            grid-gap: clamp(20px, 3vw, 60px) var(--gutter);
            padding-bottom: 30px
        }

        @media(max-width: 1780px) {
            .grid-academy--one-row>li:nth-last-child(-n+1) {
                display: none
            }
        }

        @media(max-width: 1360px) {
            .grid-academy--one-row>li:nth-last-child(-n+2) {
                display: none
            }
        }

        .grid-courses {
            --minthumb: 350px;
            --itemDisplay: block;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(var(--minthumb), 1fr));
            grid-auto-flow: row dense;
            grid-gap: var(--gutter);
            padding-bottom: 30px;
            font-size: 15px
        }

        .grid-courses .is-double {
            grid-column: span 2
        }

        @media(max-width: 1556px) {
            .grid-courses--one-row>li:nth-last-child(-n+1) {
                display: none
            }
        }

        @media(max-width: 1168px) {
            .grid-courses--one-row>li:nth-last-child(-n+2) {
                display: none
            }
        }

        .grid-courses .card-banner {
            border-radius: var(--rounded-large)
        }

        .grid-directory {
            --minthumb: 350px;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(var(--minthumb), 1fr));
            grid-auto-flow: row dense;
            grid-gap: var(--gutter);
            padding-bottom: 30px;
            font-size: 15px
        }

        .grid-directory--pro {
            --minthumb: 480px;
            margin-bottom: var(--gutter);
            padding-bottom: 0;
            overflow: hidden
        }

        .grid-directory--pro+.grid-directory {
            margin-top: 40px
        }

        @media(max-width: 1600px) {
            .grid-directory--pro>li:nth-last-child(-n+1) {
                display: none
            }
        }

        .grid-directory--large {
            --minthumb: 600px
        }

        .grid-directory .is-double {
            grid-column: span 2
        }

        .grid-directory .card-banner {
            border-radius: var(--rounded-normal)
        }

        .grid-sites {
            --minthumb: 350px;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(var(--minthumb), 1fr));
            grid-auto-flow: row dense;
            grid-gap: 30px var(--gutter);
            padding-bottom: 30px
        }

        .grid-sites--3cols {
            --minthumb: 440px
        }

        .grid-jobs {
            --minthumb: 400px;
            --itemDisplay: block;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(var(--minthumb), 1fr));
            grid-auto-flow: row dense;
            grid-gap: var(--gutter);
            padding-bottom: 30px;
            font-size: 15px
        }

        @media(max-width: 2291px) {
            .grid-jobs--one-row>li:nth-last-child(-n+1) {
                display: none
            }
        }

        @media(max-width: 1925px) {
            .grid-jobs--one-row>li:nth-last-child(-n+2) {
                display: none
            }
        }

        @media(max-width: 1351px) {
            .grid-jobs--one-row>li:nth-last-child(-n+3) {
                display: none
            }
        }

        @media(max-width: 1024px) {
            .grid-jobs--one-row>li:nth-last-child(-n+4) {
                display: none
            }
        }

        .grid-jury {
            --minthumb: 285px;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(var(--minthumb), 1fr));
            grid-auto-flow: row dense;
            grid-gap: var(--gutter);
            font-size: 15px
        }

        @media(min-width: 1600px) {
            .grid-jury {
                --minthumb: 426px
            }
        }

        .card-blog {
            display: flex;
            flex-direction: column;
            height: 100%
        }

        .card-blog__header {
            flex: 1;
            margin-bottom: 2em
        }

        .card-blog__title {
            width: 90%;
            font-size: 20px;
            font-size: clamp(20px, 10.8450704225px + 1.8309859155vw, 46px);
            line-height: 120%
        }

        .card-blog__figure {
            position: relative
        }

        .card-blog__excerpt {
            width: 80%;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            min-height: 96px;
            overflow: hidden
        }

        .card-blog__by {
            display: flex;
            align-items: center;
            gap: 12px;
            margin: 2em 0
        }

        .card-blog__by .link-underlined {
            font-size: 18px;
            font-size: clamp(18px, 15.8873239437px + 0.4225352113vw, 24px);
            font-weight: bold
        }

        .card-blog__media {
            display: block;
            width: 100%;
            height: auto;
            border-radius: var(--rounded-normal);
            aspect-ratio: var(--img-resizing-site);
            -o-object-fit: cover;
            object-fit: cover
        }

        .card-blog__footer {
            margin-top: clamp(24px, 3vw, 48px);
            font-size: 18px;
            font-size: clamp(18px, 17.2957746479px + 0.1408450704vw, 20px)
        }

        .card-blog .sticker-svg {
            position: absolute;
            top: 10%;
            right: 0;
            width: clamp(85px, 9vw, 170px);
            transform: translateX(50%);
            pointer-events: none
        }

        .slider-assets {
            margin-bottom: var(--gutter)
        }

        .slider-assets .swiper-slide {
            width: 860px;
            max-width: 100%
        }

        .slider-assets .card-slide .figure-rollover {
            border-radius: var(--rounded-normal)
        }

        @media(max-width: 576px) {
            .slider-assets {
                overflow: visible
            }

            .slider-assets .swiper-wrapper {
                flex-direction: column;
                gap: var(--gutter);
                transform: none !important
            }
        }

        .card-awwward__figure {
            width: 170px;
            max-width: 100%;
            margin: 0 auto
        }

        .card-awwward__figure:hover .card-awwward__media {
            transform: scale(1.05) translateY(-10px);
            filter: drop-shadow(0 6px 3px rgba(34, 34, 34, 0.4))
        }

        .card-awwward__figure svg {
            width: 100%;
            transition: all .3s
        }

        .card-awwward__media {
            position: relative;
            max-width: 100%;
            transition: all .3s
        }

        .card-awwward__caption {
            margin-top: 1.4em;
            font-size: 18px;
            font-size: clamp(18px, 15.8873239437px + 0.4225352113vw, 24px);
            font-weight: 400;
            text-align: center;
            white-space: nowrap
        }

        .card-awwward__row {
            margin-top: 1em;
            text-align: center
        }

        .card-awwward-mini {
            --card-width: 84px;
            --card-pad: 12px 8px 8px 8px;
            --card-bordertop: 7px;
            --card-titlesize: 12px;
            --card-rounded: 0;
            position: relative;
            width: var(--card-width);
            border-radius: var(--card-rounded);
            color: #222;
            line-height: 100%;
            aspect-ratio: 84/96;
            cursor: pointer;
            overflow: hidden
        }

        .card-awwward-mini--small {
            --card-width: 51px;
            --card-pad: 8px 5px;
            --card-bordertop: 3px;
            --card-titlesize: 8px;
            --card-rounded: 3px
        }

        .card-awwward-mini:hover .card-awwward-mini__bg {
            fill: #d3d3d3
        }

        .card-awwward-mini__info {
            position: absolute;
            inset: 0;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: flex-start;
            padding: var(--card-pad);
            border-top: var(--card-bordertop) solid var(--awwward-color)
        }

        .card-awwward-mini__number {
            font-size: var(--text-size-primary)
        }

        .card-awwward-mini__logo {
            width: 20px
        }

        .card-awwward-mini__title {
            width: 60px;
            max-width: 100%;
            font-size: var(--card-titlesize);
            font-weight: normal;
            line-height: 100%;
            text-align: left
        }

        .card-awwward-mini__bg {
            display: block;
            width: 100%;
            height: 100%;
            fill: #e9e9e9;
            transition: all .3s
        }

        .card-asset {
            --card-pad-x: clamp(20px, 3vw, 30px);
            --card-pad-y: clamp(15px, 3vw, 26px);
            --card-border: 1px solid var(--border-gray);
            --card-bg: rgba(255, 255, 255, 0.6);
            --card-bt: var(--border-gray);
            display: flex;
            flex-direction: column;
            height: 100%;
            background: var(--card-bg);
            border-radius: var(--rounded-normal);
            overflow: hidden
        }

        .card-asset__header {
            display: flex;
            flex-direction: column;
            flex: 1;
            gap: 12px;
            padding: var(--card-pad-x);
            line-height: normal
        }

        .card-asset__title {
            font-size: 18px;
            font-size: clamp(18px, 15.8873239437px + 0.4225352113vw, 24px);
            font-weight: bold;
            line-height: 120%
        }

        .card-asset__content {
            flex: 1;
            display: flex;
            flex-direction: column
        }

        .card-asset__list li {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: var(--card-pad-y) var(--card-pad-x);
            border-top: var(--card-border);
            line-height: 120%
        }

        .card-asset__list>div {
            display: flex;
            align-items: center
        }

        .card-asset__section {
            width: 40%;
            flex-shrink: 0
        }

        .card-asset__bts {
            display: flex;
            border-top: var(--card-border)
        }

        .card-asset__bt {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: clamp(64px, 5vw, 94px);
            font-weight: bold;
            transition: all .3s;
            transform: translateZ(0)
        }

        .card-asset__bt:hover {
            background: var(--color-white);
            color: #222
        }

        .card-asset__bt:nth-child(2) {
            border-left: 1px solid var(--card-border)
        }

        .card-asset__media {
            display: block;
            aspect-ratio: var(--img-resizing-site);
            -o-object-fit: cover;
            object-fit: cover;
            transition: all .3s
        }

        .card-asset__media:hover {
            filter: brightness(80%)
        }

        .card-asset .swiper {
            position: relative;
            overflow: visible
        }

        .card-asset .swiper-wrapper {
            border-radius: var(--rounded-normal);
            cursor: pointer;
            overflow: hidden
        }

        .card-asset .swiper-pagination {
            position: absolute;
            top: calc(100% + 30px);
            right: var(--card-pad-x)
        }

        .card-blog-full {
            position: relative
        }

        .card-blog-full__figure {
            grid-column: 1/3;
            grid-row: 1;
            width: 100%;
            border-radius: var(--rounded-large);
            overflow: hidden
        }

        .card-blog-full__img {
            display: block;
            width: 100%
        }

        .card-blog-full__entry {
            display: flex;
            flex-wrap: wrap;
            gap: var(--gutter);
            width: 100%;
            margin-top: clamp(32px, 5vw, 180px)
        }

        .card-blog-full__desc {
            flex: 1;
            font-size: 18px;
            font-size: clamp(18px, 15.8873239437px + 0.4225352113vw, 24px);
            margin: 0 clamp(0px, 5vw, 140px);
            line-height: 150%
        }

        .card-blog-full__more {
            margin: clamp(20px, 4vw, 60px) 0
        }

        .card-blog-full__box {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 16px;
            padding: clamp(20px, 4vw, 40px);
            background: #f3f3f3;
            border-radius: var(--rounded-normal);
            line-height: 140%;
            font-size: var(--text-size-medium)
        }

        .card-blog-full .c-typography__photo {
            width: 80%;
            margin: 0 auto
        }

        .card-blog-full .c-typography__photo img {
            width: 100%
        }

        .card-blog-full table {
            margin: 0 auto
        }

        @media(max-width: 576px) {
            .card-blog-full__entry {
                flex-direction: column
            }

            .card-blog-full__desc {
                margin: 0
            }
        }

        .card-certificate {
            --color-line: rgba(0, 0, 0, 0.1);
            position: relative;
            display: flex;
            flex-direction: column;
            width: 436px;
            max-width: 100%;
            padding: 5%;
            border-top: 10px solid var(--color-award);
            background: var(--bg-3rd);
            aspect-ratio: 430/610
        }

        .card-certificate__header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 16%
        }

        .card-certificate__logo {
            width: 10%
        }

        .card-certificate__data {
            flex: 1;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 20%;
            line-height: 100%;
            font-size: 9px
        }

        .card-certificate__content {
            display: flex;
            flex-direction: column;
            flex: 1
        }

        .card-certificate__title {
            padding: 6% 0;
            font-size: 18px;
            font-size: clamp(18px, 17.2957746479px + 0.1408450704vw, 20px);
            font-weight: bold;
            line-height: 120%;
            border-top: 1px solid var(--color-line);
            border-bottom: 1px solid var(--color-line)
        }

        .card-certificate__by {
            padding: 3% 0;
            font-size: 14px;
            font-size: clamp(14px, 13.2957746479px + 0.1408450704vw, 16px);
            line-height: 120%;
            border-bottom: 1px solid var(--color-line)
        }

        .card-certificate__cover {
            display: flex;
            align-items: center;
            flex: 1;
            padding: 5% 0
        }

        .card-certificate__logo-text {
            display: flex;
            align-items: center;
            font-size: 10px;
            font-weight: 500;
            line-height: 10px
        }

        .card-certificate__logo-text svg {
            fill: #acacac
        }

        .card-collection__info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 16px;
            line-height: 100%
        }

        .card-collection__left {
            flex: 1
        }

        .card-collection__right {
            flex-shrink: 0
        }

        .card-collection__row {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 8px
        }

        .card-collection__row a {
            color: var(--color-primary)
        }

        .card-collection__row h3 {
            font-size: var(--text-size-primary);
            line-height: 140%
        }

        .card-collection__footer {
            margin-top: 12px;
            padding-top: 16px;
            border-top: 1px solid #f3f3f3
        }

        .card-collection .figure-rollover {
            border-radius: var(--rounded-large);
            overflow: hidden
        }

        .card-collection .figure-rollover__file {
            aspect-ratio: var(--img-resizing-site)
        }

        .card-course {
            --pad-content: 32px;
            display: flex;
            flex-direction: column;
            height: 100%;
            background: var(--color-white);
            border-radius: var(--rounded-large);
            overflow: hidden
        }

        .card-course__figure {
            width: 100%;
            overflow: hidden
        }

        .card-course__img {
            display: block;
            width: 100%;
            height: auto
        }

        .card-course__content {
            flex: 1;
            padding: var(--pad-content)
        }

        .card-course__title {
            margin-bottom: .4em;
            font-size: 24px
        }

        .card-course__footer svg {
            display: block
        }

        .card-course__row {
            display: grid;
            grid-template-columns: 50% 50%;
            padding: 20px var(--pad-content);
            border-top: 1px solid #f3f3f3;
            border-bottom: 1px solid #f3f3f3;
            line-height: 120%
        }

        .card-course__link {
            display: flex;
            justify-content: flex-end;
            padding: var(--pad-content)
        }

        .card-course .swiper {
            position: relative;
            width: 100%
        }

        .card-course .swiper-pagination {
            position: absolute;
            bottom: 28px;
            right: 28px;
            z-index: 10
        }

        .card-course a {
            color: var(--color-primary)
        }

        .card-course .circle-avatar__img {
            width: 20px
        }

        .card-directory-sp {
            display: flex;
            flex-direction: column;
            height: 100%;
            padding: clamp(24px, 3vw, 64px);
            background: var(--bg-secondary);
            border-radius: var(--rounded-normal);
            color: var(--color-white);
            overflow: hidden
        }

        .card-directory-sp__header {
            display: flex;
            justify-content: space-between
        }

        .card-directory-sp__title {
            font-size: 30px;
            font-size: clamp(30px, 20.8450704225px + 1.8309859155vw, 56px);
            line-height: 110%
        }

        .card-directory-sp__content {
            flex: 1;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
            padding-top: 2em
        }

        .card-directory-sp__left {
            flex: 1
        }

        .card-directory-sp__footer {
            display: flex;
            justify-content: space-between;
            margin-top: 4em
        }

        .card-directory-sp .swiper {
            width: 60%
        }

        .card-directory-sp .swiper-wrapper {
            height: auto;
            border-radius: var(--rounded-normal);
            overflow: hidden
        }

        .card-directory-sp .swiper-pagination {
            display: flex;
            justify-content: flex-end;
            margin-top: 36px
        }

        .card-directory-sp .swiper-pagination-bullet {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .2);
            cursor: pointer;
            transition: all .3s
        }

        .card-directory-sp .swiper-pagination-bullet-active {
            background: var(--color-white)
        }

        .card-directory-sp .swiper img {
            display: block;
            aspect-ratio: var(--img-resizing-site);
            -o-object-fit: cover;
            object-fit: cover
        }

        .card-directory-sp .circle-avatar {
            margin-bottom: auto;
            font-size: var(--text-size-large)
        }

        .card-directory-sp .circle-avatar.hot {
            --avatar-bg: var(--bg-secondary)
        }

        .card-directory-sp .badget-reviews {
            position: relative;
            top: 50px;
            border-color: rgba(255, 255, 255, .3)
        }

        .card-directory-sp a {
            color: var(--color-white)
        }

        .card-directory {
            --card-pad-x: clamp(20px, 3vw, 30px);
            --card-pad-y: clamp(15px, 3vw, 26px);
            --card-border: 1px solid var(--border-gray);
            --card-bg: var(--bg-white);
            --avatar-bg: var(--card-bg);
            display: flex;
            flex-direction: column;
            height: 100%;
            background: var(--card-bg);
            border-radius: var(--rounded-normal);
            overflow: hidden
        }

        .card-directory__header {
            display: flex;
            padding: var(--card-pad-x);
            font-size: 18px;
            font-size: clamp(18px, 15.8873239437px + 0.4225352113vw, 24px);
            font-weight: bold
        }

        .card-directory__content {
            flex: 1
        }

        .card-directory__media {
            display: block;
            width: 100%;
            aspect-ratio: 4/3;
            -o-object-fit: cover;
            object-fit: cover;
            border-radius: var(--rounded-normal);
            transition: all .3s
        }

        .card-directory__media:hover {
            filter: brightness(80%)
        }

        .card-directory__list {
            flex: 1
        }

        .card-directory__list li {
            display: flex;
            gap: 20px;
            padding: var(--card-pad-y) var(--card-pad-x);
            border-top: var(--card-border);
            line-height: 120%
        }

        .card-directory__list>div {
            display: flex;
            align-items: center
        }

        .card-directory__section {
            width: 40%;
            flex-shrink: 0
        }

        .card-directory__awards {
            display: flex;
            align-items: center;
            gap: 4px;
            font-weight: bold
        }

        .card-directory__awards .ico-svg {
            top: -1px;
            display: block
        }

        .card-directory .box-score--small {
            width: 50px;
            max-width: -moz-max-content;
            max-width: max-content
        }

        .card-directory-basic {
            --card-pad-x: clamp(24px, 3vw, 36px);
            --card-pad: clamp(10px, 3vw, 16px) var(--card-pad-x);
            --card-border: 1px solid #383838;
            --card-bg: var(--bg-secondary);
            --card-color: #fff;
            display: flex;
            flex-direction: column;
            height: 100%;
            background: var(--card-bg);
            border-radius: var(--rounded-normal);
            color: var(--card-color)
        }

        .card-directory-basic__header {
            padding: clamp(30px, 3vw, 60px) var(--card-pad-x);
            font-size: 16px;
            font-size: clamp(16px, 13.1830985915px + 0.5633802817vw, 24px)
        }

        .card-directory-basic__header p:last-child {
            margin-bottom: 0
        }

        .card-directory-basic__user sup {
            font-weight: 300;
            font-size: .4em
        }

        .card-directory-basic__list {
            flex: 1
        }

        .card-directory-basic__list li {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: var(--card-pad);
            border-top: var(--card-border);
            line-height: 120%
        }

        .card-directory-basic__list div:nth-child(2) {
            text-align: right
        }

        .card-directory-basic__footer {
            display: flex;
            justify-content: flex-end;
            padding: var(--card-pad);
            padding-top: clamp(10px, 3vw, 30px);
            padding-bottom: clamp(10px, 3vw, 30px);
            border-top: var(--card-border)
        }

        .card-directory-basic .ico-svg {
            fill: var(--card-color)
        }

        .card-directory-basic a {
            color: var(--card-color)
        }

        .card-academy {
            --card-pad-x: clamp(20px, 3vw, 30px);
            --card-pad-y: clamp(10px, 3vw, 20px);
            --card-border: 1px solid #e9e9e9;
            --card-bg: var(--color-white);
            display: flex;
            flex-direction: column;
            height: 100%;
            background: var(--card-bg);
            border-radius: var(--rounded-large);
            overflow: hidden
        }

        .card-academy__figure {
            position: relative
        }

        .card-academy__figure .top-right {
            position: absolute;
            top: 20px;
            right: 20px;
            pointer-events: none
        }

        .card-academy__media {
            display: block;
            width: 100%;
            transition: all .3s
        }

        .card-academy__media:hover {
            filter: brightness(80%)
        }

        .card-academy__tag {
            background: var(--color-learn);
            border: none
        }

        .card-academy__info {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%
        }

        .card-academy__footer .card-academy__row {
            border-top: var(--card-border)
        }

        .card-academy__title {
            font-size: 18px;
            font-size: clamp(18px, 15.8873239437px + 0.4225352113vw, 24px);
            line-height: 120%
        }

        .card-academy__row {
            display: flex;
            gap: 4px;
            padding: var(--card-pad-y) var(--card-pad-x)
        }

        .card-academy__row:first-child {
            padding-top: var(--card-pad-x);
            padding-bottom: var(--card-pad-x)
        }

        .card-academy__row>*:first-child {
            flex: 1
        }

        .card-academy__row:last-child div:nth-of-type(2) {
            display: flex;
            align-items: center
        }

        .card-academy__row:last-child .ico-svg {
            display: block
        }

        .card-academy__row .budget-tag {
            position: relative;
            top: 3px
        }

        .card-academy__score {
            width: 100px
        }

        .card-academy .box-score {
            width: 100px;
            margin-bottom: 8px;
            border: none;
            text-align: left
        }

        .card-academy .box-score__info {
            margin-bottom: 12px;
            font-size: 14px
        }

        .card-academy .box-score__wrap {
            display: flex;
            align-items: center;
            position: relative;
            background-color: #e9e9e9;
            border-radius: 4px;
            overflow: hidden
        }

        .card-academy .box-score__bar {
            height: 4px;
            background-color: var(--color-learn)
        }

        .box-price {
            display: flex;
            align-items: center;
            gap: 20px;
            line-height: 100%
        }

        .box-price__off {
            display: flex;
            flex-direction: column;
            gap: 2px;
            padding-top: 3px;
            font-size: 12px
        }

        .box-price__old {
            color: #a7a7a7
        }

        .box-price__total {
            font-size: 32px
        }

        .box-price__total sup {
            margin-left: 4px;
            font-size: 14px;
            font-weight: 400
        }

        .postit {
            position: absolute;
            top: 0;
            right: 0;
            width: 260px;
            padding: clamp(20px, 2vw, 30px);
            background: var(--ch-bg, var(--color-learn-2));
            line-height: 140%;
            border-radius: var(--rounded-large)
        }

        .postit p:last-child {
            margin-bottom: 0
        }

        .card-job {
            --card-pad-x: clamp(20px, 3vw, 30px);
            --card-pad-y: clamp(10px, 3vw, 16px);
            --card-border: 1px solid #e9e9e9;
            --card-bg: var(--color-white);
            --avatar-bg: var(--card-bg);
            display: flex;
            flex-direction: column;
            height: 100%;
            background: var(--card-bg);
            border-radius: var(--rounded-large)
        }

        .card-job__header {
            display: flex;
            gap: 8px;
            align-items: center;
            padding: var(--card-pad-x);
            font-size: 18px;
            font-size: clamp(18px, 15.8873239437px + 0.4225352113vw, 24px);
            font-weight: bold;
            border-bottom: var(--card-border)
        }

        .card-job__header>div {
            display: flex
        }

        .card-job__header>div:nth-child(1) {
            flex: 1;
            overflow: hidden
        }

        .card-job__header .users-credits__item {
            flex-wrap: nowrap
        }

        .card-job__header .circle-avatar {
            flex-shrink: 0
        }

        .card-job__tag {
            background: #fdede8;
            border: none
        }

        .card-job__content {
            flex: 1;
            padding: var(--card-pad-x);
            line-height: 150%
        }

        .card-job__title {
            margin-bottom: 1em;
            font-size: 18px;
            font-size: clamp(18px, 17.2957746479px + 0.1408450704vw, 20px);
            line-height: 130%
        }

        .card-job__list {
            padding-bottom: var(--card-pad-y)
        }

        .card-job__list li {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: var(--card-pad-y) var(--card-pad-x);
            border-top: var(--card-border);
            line-height: 120%
        }

        .card-job__list div:nth-child(2) {
            text-align: right
        }

        .card-job__ago {
            display: flex;
            align-items: center
        }

        .card-job__ago .ico-svg {
            top: -1px;
            margin-right: 8px
        }

        .card-jury {
            --card-pad: clamp(10px, 3vw, 16px) clamp(20px, 3vw, 30px);
            --card-border: 1px solid var(--border-gray);
            --card-bg: var(--bg-white);
            --avatar-bg: var(--card-bg);
            display: flex;
            flex-direction: column;
            height: 100%;
            background: var(--card-bg);
            border-radius: var(--rounded-normal)
        }

        .card-jury__header {
            padding: var(--card-pad);
            font-size: 18px;
            font-size: clamp(18px, 15.8873239437px + 0.4225352113vw, 24px);
            font-weight: bold
        }

        .card-jury__title {
            margin: clamp(10px, 3vw, 20px) 0;
            font-size: 18px;
            font-size: clamp(18px, 15.8873239437px + 0.4225352113vw, 24px);
            line-height: 130%
        }

        .card-jury__figure img {
            display: block;
            width: 100%;
            aspect-ratio: var(--img-resizing-site);
            -o-object-fit: cover;
            object-fit: cover;
            border-radius: var(--rounded-normal);
            transition: all .3s;
            filter: grayscale(1)
        }

        .card-jury__figure img:hover {
            filter: grayscale(1) brightness(80%)
        }

        .card-jury__list {
            flex: 1
        }

        .card-jury__list li {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            padding: var(--card-pad);
            border-top: var(--card-border);
            line-height: 120%
        }

        .card-jury__list div:nth-child(2) {
            text-align: right
        }

        .card-jury__footer {
            display: flex;
            justify-content: space-between;
            padding: var(--card-pad);
            padding-top: clamp(10px, 3vw, 30px);
            padding-bottom: clamp(10px, 3vw, 30px);
            border-top: var(--card-border)
        }

        .card-jury__social {
            display: flex;
            align-items: center;
            gap: 30px
        }

        .card-jury__social .ico-svg {
            display: block
        }

        .badget-reviews {
            display: inline-flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-width: 60px;
            height: 60px;
            border: 1px solid rgba(var(--color-primary-rgb), 0.1);
            border-radius: var(--rounded-normal);
            font-size: 1em;
            line-height: 100%
        }

        .badget-reviews__label {
            margin: 2px 0;
            font-size: .8em
        }

        .badget-reviews__number {
            font-size: 1.6em
        }

        .c-view-all {
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-top: clamp(30px, 5vw, 80px)
        }

        .c-view-all__row {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            gap: 20px
        }

        .c-view-all__ico-left {
            vertical-align: text-bottom;
            margin-right: 4px
        }

        .add-card {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            flex-wrap: wrap;
            gap: var(--gutter);
            height: 100%;
            min-height: 300px;
            border: 1px solid #e9e9e9;
            background: #f3f3f3;
            border-radius: var(--rounded-normal)
        }

        .add-card__content {
            padding: 30px;
            text-align: center;
            line-height: 150%
        }

        .add-card__content p:not(:last-child) {
            margin-bottom: 2em
        }

        .add-card .button {
            min-width: 180px
        }

        .card-masterclass {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: clamp(20px, 4vw, 60px);
            border-radius: var(--rounded-large);
            aspect-ratio: 1/1;
            color: #fff;
            overflow: hidden
        }

        .card-masterclass--soon {
            pointer-events: none
        }

        .card-masterclass--soon:has(a) {
            pointer-events: all
        }

        .card-masterclass--soon .card-masterclass__bottom {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center
        }

        .card-masterclass--soon .card-masterclass__photo {
            filter: brightness(40%)
        }

        .card-masterclass__top,
        .card-masterclass__bottom {
            position: relative;
            pointer-events: none;
            z-index: 2
        }

        .card-masterclass__logo {
            max-width: 15vw;
            width: auto;
            max-height: 80px
        }

        .card-masterclass__photo {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            -o-object-fit: cover;
            object-fit: cover
        }

        .card-masterclass__bt {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 220px;
            max-width: 30vw;
            height: 60px;
            text-align: center;
            font-size: 18px;
            border-bottom: 10px solid var(--color-masterclass)
        }

        .card-masterclass__title {
            line-height: 100%;
            width: 600px;
            max-width: 100%;
            margin: .2em 0
        }

        .card-site-full__credits {
            display: flex;
            justify-content: center;
            margin-top: clamp(30px, 5vw, 80px);
            font-size: 18px;
            font-size: clamp(18px, 15.8873239437px + 0.4225352113vw, 24px);
            font-weight: bold
        }

        .card-site-full__more {
            margin-top: clamp(30px, 5vw, 60px);
            text-align: center
        }

        .card-site-full .figure-rollover {
            width: 100%;
            border-radius: var(--rounded-large);
            overflow: hidden
        }

        .card-site-mini {
            display: flex;
            align-items: center;
            gap: 20px
        }

        .card-site-mini__figure {
            flex-shrink: 0;
            position: relative;
            border-radius: var(--rounded-small);
            overflow: hidden
        }

        .card-site-mini__title {
            font-size: 1em
        }

        .card-site-mini a {
            color: var(--color-primary)
        }

        .card-site {
            font-size: 15px
        }

        .card-site__left {
            flex: 1;
            display: flex;
            align-items: center
        }

        .card-site__right {
            display: flex;
            gap: 16px;
            flex-shrink: 0;
            padding-left: 20px
        }

        .card-site__info {
            display: flex;
            flex-wrap: wrap;
            padding-top: 16px
        }

        .card-site__row {
            display: flex;
            align-items: center;
            gap: 8px
        }

        .card-site__award {
            font-weight: 500
        }

        .card-site__title {
            font-size: 15px;
            line-height: 150%
        }

        .card-site__desc p {
            margin: .4em 0 0 0;
            line-height: 150%
        }

        .card-site .figure-rollover {
            border-radius: var(--rounded-small);
            overflow: hidden
        }

        .card-site .figure-rollover__file {
            aspect-ratio: var(--img-resizing-site)
        }

        .card-site-2 {
            display: flex;
            flex-direction: column;
            height: 100%;
            background: var(--bg-white);
            border-radius: var(--rounded-normal)
        }

        .card-site-2__info {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: clamp(20px, 3vw, 30px)
        }

        .card-site-2__row {
            display: flex;
            justify-content: space-between
        }

        .card-site-2__row:has(.card-site-2__category) {
            gap: 20px
        }

        .card-site-2__row div:nth-child(2) {
            flex-shrink: 0;
            text-align: right
        }

        .card-site-2__title {
            font-size: 18px;
            font-size: clamp(18px, 15.8873239437px + 0.4225352113vw, 24px);
            line-height: 120%
        }

        .card-site-2__vote-now {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-top: 20px
        }

        .card-site-2 .figure-rollover {
            border-radius: var(--rounded-normal);
            overflow: hidden
        }

        .card-site-2 .figure-rollover:hover {
            filter: brightness(90%)
        }

        .card-site-2 .figure-rollover__file {
            aspect-ratio: var(--img-resizing-site)
        }

        .card-video {
            position: relative;
            display: inline-flex;
            color: var(--color-white);
            overflow: hidden
        }

        .card-video__header {
            position: absolute;
            top: 28px;
            left: 28px;
            z-index: 9
        }

        .card-video__footer {
            position: absolute;
            bottom: 28px;
            right: 28px
        }

        .card-video-v {
            --colorCard: #fff;
            position: relative;
            border-radius: var(--rounded-large);
            aspect-ratio: 50/74;
            color: var(--colorCard);
            overflow: hidden
        }

        .card-video-v:hover .card-video-v__media {
            filter: brightness(90%);
            transform: scale(1.05)
        }

        .card-video-v__media {
            display: block;
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            transition: all .3s
        }

        .card-video-v__info {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: flex-end;
            padding: clamp(20px, 6vw, 44px)
        }

        .card-video-v__footer {
            display: flex;
            gap: 20px
        }

        .card-video-v__title {
            font-size: 24px;
            font-size: clamp(24px, 19.7746478873px + 0.8450704225vw, 36px);
            line-height: 120%
        }

        .card-video-v__title+div {
            margin-top: 1em
        }

        .card-video-v__ico {
            display: flex;
            align-items: flex-end;
            flex-shrink: 0
        }

        .l-news {
            position: relative;
            padding: clamp(40px, 6vw, 120px) clamp(0px, 6vw, 100px);
            border-radius: var(--rounded-large)
        }

        .l-news--dark {
            --bg-primary: var(--bg-secondary);
            --color-primary: var(--color-white);
            --color-primary-rgb: 255, 255, 255;
            background: var(--bg-secondary);
            color: var(--color-white)
        }

        .l-news--style1 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(3, auto)
        }

        .l-news--style1 .l-news__item {
            width: clamp(100px, 33vw, 608px)
        }

        .l-news--style1 .l-news__item:nth-child(1) {
            grid-column: 1/3;
            justify-self: end
        }

        .l-news--style1 .l-news__item:nth-child(3) {
            grid-area: 3/2;
            justify-self: end;
            margin-top: -40%
        }

        .l-news--style1 .grid-title {
            margin-top: 2rem
        }

        .l-news--style1 .grid-title__cell:nth-child(1),
        .l-news--style1 .grid-title__cell:nth-child(4) {
            grid-column: 1/3
        }

        .l-news--style1 .grid-title__cell:nth-child(2) {
            position: relative;
            left: -20%
        }

        .l-news--style1 .grid-title span {
            position: relative
        }

        .l-news--style1 .grid-title sup.grid-title__subtitle {
            position: absolute;
            bottom: calc(100% + 2rem);
            left: 0;
            font-size: var(--text-size-primary);
            font-weight: 300
        }

        .l-news--style1 .grid-title sup.grid-title__desc {
            position: absolute;
            top: calc(100% + 2rem);
            left: 0;
            font-size: 18px;
            font-size: clamp(18px, 15.8873239437px + 0.4225352113vw, 24px);
            font-weight: 300;
            text-align: left;
            line-height: 150%;
            font-weight: 300;
            color: #7a7a7a
        }

        .l-news--style1 .grid-title svg {
            margin-left: -0.1em;
            width: .7em;
            height: auto
        }

        .l-news--style1 p {
            color: #7a7a7a
        }

        .l-news--style2 {
            display: grid;
            grid-template-columns: auto auto;
            grid-template-rows: repeat(2, auto);
            justify-content: space-evenly;
            width: 100%;
            margin: 0 auto;
            padding: 0
        }

        .l-news--style2 .l-news__item:nth-child(odd) {
            padding-right: 0
        }

        .l-news--style2 .l-news__item:nth-child(odd) .card-blog {
            width: 350px;
            max-width: 100%
        }

        .l-news--style2 .l-news__item:nth-child(odd) .card-blog__title {
            width: 100%
        }

        .l-news--style2 .l-news__item:nth-child(1) {
            grid-column: 2/3
        }

        .l-news--style2 .l-news__item:nth-child(2) {
            grid-row: 1/3;
            align-self: center
        }

        .l-news--style2 .l-news__item:nth-child(3) {
            grid-area: 2/2;
            justify-self: end;
            margin-top: 40%
        }

        .l-news--style2 .card-blog {
            display: block;
            width: 657px;
            max-width: 100%
        }

        .l-news--style2 .card-blog__title {
            width: 500px;
            max-width: 100%;
            font-size: 30px
        }

        .l-news .card-element {
            margin: 0 auto 5vw auto
        }

        .l-news .list-elements {
            margin: 4vw 0
        }

        .l-news p {
            margin-bottom: 1.5em;
            font-size: 18px;
            font-size: clamp(18px, 15.8873239437px + 0.4225352113vw, 24px);
            line-height: 140%
        }

        .l-news .ico-svg {
            fill: var(--color-primary)
        }

        @media(max-width: 1023px) {
            .l-news--style1 {
                display: flex;
                flex-direction: column;
                gap: var(--gutter);
                padding: 0
            }

            .l-news--style1 .l-news__item {
                width: 100%
            }

            .l-news--style1 .l-news__item:nth-child(1) {
                display: flex;
                justify-content: flex-end;
                width: 100%
            }

            .l-news--style1 .l-news__item:nth-child(3) {
                margin-top: 0
            }

            .l-news--style1 .l-news__item .grid-title {
                width: -moz-min-content;
                width: min-content
            }

            .l-news--style2 {
                display: flex;
                flex-direction: column;
                gap: var(--gutter);
                padding: 0
            }

            .l-news--style2 .l-news__item {
                width: 100%
            }

            .l-news--style2 .l-news__item:nth-child(2) {
                margin-top: 0
            }

            .l-news--style2 .l-news__item:nth-child(3) {
                margin-top: 0
            }
        }

        .card-slide__info {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            padding-top: 24px
        }

        .card-slide__title {
            margin-bottom: .5em;
            font-size: 16px;
            font-size: clamp(16px, 13.1830985915px + 0.5633802817vw, 24px)
        }

        .card-slide__title a {
            color: var(--color-primary)
        }

        .card-slide__data {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 8px
        }

        .card-slide .is-truncated {
            flex: 1
        }

        .card-slide .is-truncated .avatar-name {
            flex: 1
        }

        .card-slide .is-truncated .avatar-name__name {
            flex: 1;
            display: flex
        }

        .card-slide .is-truncated .avatar-name .link-underlined {
            flex: 1;
            width: 0;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis
        }

        .card-slide__row {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 8px;
            width: 100%
        }

        .card-slide__row .card-slide__title {
            margin-bottom: 0
        }

        .card-slide__row .link-underlined {
            font-size: 16px;
            font-size: clamp(16px, 13.1830985915px + 0.5633802817vw, 24px);
            font-weight: bold
        }

        .card-slide__row small {
            position: relative;
            top: .2em;
            margin: 0 .3em;
            font-weight: 300;
            font-size: .75em;
            line-height: 100%
        }

        .card-slide .figure-rollover {
            border-radius: var(--rounded-large);
            overflow: hidden
        }

        .content-dropdown-tags {
            position: relative
        }

        .content-dropdown-tags.is-active .button {
            background: var(--bg-secondary);
            color: var(--color-white)
        }

        .content-dropdown-tags.is-active .dropdown-tags {
            opacity: 1;
            visibility: visible
        }

        .dropdown-tags {
            position: absolute;
            top: calc(100% + 10px);
            right: 0;
            width: 600px;
            max-width: calc(100vw - 48px);
            max-height: 400px;
            padding: 30px;
            border-radius: var(--rounded-normal);
            background: var(--bg-secondary);
            overflow-y: auto;
            cursor: default;
            opacity: 0;
            visibility: hidden;
            transition: all .3s;
            z-index: 4;
            overflow: auto;
            overscroll-behavior: contain
        }

        .dropdown-tags--top-right {
            top: auto;
            bottom: calc(100% + 16px);
            right: 0
        }

        .dropdown-tags.is-show {
            opacity: 1;
            visibility: visible
        }

        .dropdown-tags__label {
            margin-bottom: 20px;
            text-align: left;
            font-size: var(--text-size-small);
            color: #a7a7a7;
            line-height: 100%
        }

        .dropdown-tags__close {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 10px;
            cursor: pointer
        }

        .dropdown-tags__close svg {
            display: block;
            fill: #fff
        }

        .dropdown-tags .list-tags+.dropdown-tags__label {
            margin-top: 30px
        }

        .dropdown-tags .button {
            border-color: rgba(255, 255, 255, .4)
        }

        .dropdown-tags .button:hover {
            border-color: rgba(255, 255, 255, .4)
        }

        .c-tags {
            display: flex;
            width: 1100px;
            max-width: 100%;
            margin: 0 auto
        }

        .c-tags .list-tags {
            justify-content: center
        }

        .c-tags-row {
            position: relative;
            display: flex;
            gap: 16px;
            margin: 20px 0
        }

        .c-tags-row__left {
            flex: 1;
            height: 40px;
            overflow: hidden
        }

        .c-tags-row .more-tags {
            position: absolute;
            right: 0
        }

        .modal {
            --pad-modal: 30px;
            --pad-large-modal: 50px;
            --pad-modal-box: clamp(24px, 3vw, 48px);
            position: fixed;
            inset: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100%;
            height: auto;
            padding: var(--pad-modal) 0;
            background-color: rgba(0, 0, 0, .7);
            overflow-x: hidden;
            overflow-y: auto;
            overscroll-behavior: contain;
            visibility: hidden;
            opacity: 0;
            z-index: 10;
            transition: all .4s
        }

        .modal.is-visible {
            visibility: visible;
            opacity: 1
        }

        .modal.is-visible .modal__content {
            opacity: 1
        }

        .modal[class*="--white"] {
            background-color: rgba(255, 255, 255, .7)
        }

        .modal[class*="--fullscreen"] {
            padding: 0
        }

        .modal[class*="--fullscreen"] .modal__content {
            width: 100%;
            height: calc(100% - 30px);
            margin-bottom: 0
        }

        .modal[class*="--x-large"] .modal__content {
            width: calc(100% - 52px)
        }

        .modal[class*="--large"] .modal__content {
            width: 1142px
        }

        .modal[class*="--medium"] .modal__content {
            width: 900px
        }

        .modal[class*="--small"] .modal__content {
            width: 600px
        }

        .modal[class*="--bottom"] {
            padding-bottom: 0;
            align-items: flex-end
        }

        .modal[class*="--bottom"].is-visible .modal__content {
            transform: translateY(0)
        }

        .modal[class*="--bottom"] .modal__content {
            margin: 0;
            transform: translateY(300px);
            transition: transform .6s
        }

        .modal[class*="--bottom"] .modal__box {
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0
        }

        .modal__content {
            display: inline-block;
            width: 840px;
            max-width: 100%;
            margin: auto 0;
            opacity: 0;
            transition: opacity .6s .2s
        }

        .modal__box {
            padding: 3em;
            padding: var(--pad-modal-box);
            background: var(--bg-primary);
            border-radius: var(--rounded-large)
        }

        .modal__box--dark {
            background: var(--bg-secondary);
            color: var(--color-white)
        }

        .modal__video {
            border-radius: var(--rounded-large);
            overflow: hidden
        }

        .modal__sotd-document {
            display: flex;
            flex-direction: column;
            width: 100%;
            height: 100%;
            background-color: var(--bg-primary);
            overflow-x: hidden;
            overflow-y: auto;
            scroll-behavior: smooth;
            border-radius: var(--rounded-normal)
        }

        .modal .header-floating {
            top: 0;
            position: sticky;
            display: flex;
            align-items: center
        }

        .modal .bt-nav {
            position: fixed;
            bottom: 40px;
            right: 40px;
            z-index: 9
        }

        .header-col {
            display: flex;
            margin-bottom: clamp(50px, 20vw, 100px)
        }

        .header-col>div {
            flex: 1
        }

        .l-register {
            display: flex;
            min-height: 100vh
        }

        .l-register__left {
            position: relative;
            width: 60%
        }

        .l-register__right {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            width: 40%;
            min-width: 700px
        }

        .l-register__bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            -o-object-fit: contain;
            object-fit: contain
        }

        .l-register__content {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
            padding: 0 40px
        }

        .l-register__top,
        .l-register__bottom {
            padding: clamp(30px, 4vw, 60px) 0
        }

        .l-register__logo {
            position: absolute;
            top: 40px;
            left: 40px;
            display: inline-flex;
            align-items: center;
            gap: 16px;
            margin-bottom: clamp(30px, 4vw, 60px)
        }

        .l-register__logo svg:nth-child(1) {
            width: 71px;
            height: auto;
            fill: var(--color-primary)
        }

        .l-register__logo .sticker-svg {
            width: clamp(40px, 5vw, 80px)
        }

        .l-register .content-tabs {
            width: 580px;
            max-width: 100%;
            height: 100%
        }

        .l-register .content-tabs__item {
            height: 100%
        }

        @media(max-width: 576px) {
            .l-register__left {
                display: none
            }

            .l-register__right {
                width: 100%;
                min-width: auto
            }
        }

        .m-login {
            --min-height-login: 693px;
            position: relative;
            width: 100%;
            min-height: var(--min-height-login);
            border-radius: var(--rounded-large);
            overflow: hidden
        }

        .m-login__container {
            display: flex;
            justify-content: space-between;
            min-height: var(--min-height-login)
        }

        .m-login__container>div {
            flex: 1
        }

        .m-login__left {
            background: var(--bg-3rd)
        }

        .m-login__right {
            background: var(--bg-primary)
        }

        .m-login__inner {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
            padding: var(--pad-large-modal)
        }

        .m-login__title {
            margin-bottom: 1.5em;
            font-size: var(--text-size-large);
            font-weight: normal
        }

        .m-login__logo {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2vw;
            font-size: 162px
        }

        .m-login__logo svg {
            width: auto;
            height: 1em
        }

        .m-login__logo svg:nth-child(1) {
            height: .4em
        }

        .m-login__forgot {
            margin-top: -1em;
            text-align: right;
            font-size: .8em
        }

        .m-login__social {
            display: flex;
            flex-wrap: wrap;
            gap: 16px
        }

        .m-login__social .button {
            flex: 1
        }

        .m-login__or {
            margin-top: 2em
        }

        .m-login .button[class*=full] {
            margin-top: .5em
        }

        .m-alert__header {
            display: flex;
            justify-content: space-between;
            margin-bottom: clamp(40px, 5vw, 80px)
        }

        .m-alert__top {
            margin-bottom: 2em
        }

        .m-alert__title {
            font-size: var(--text-size-large);
            font-weight: 300
        }

        .m-alert__bts {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: var(--gutter);
            margin-top: var(--pad-modal-box)
        }

        .m-alert__bts .button {
            flex: 1;
            min-width: min(12em, 100%)
        }

        .m-cookies__bottom {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 16px 0;
            margin-top: clamp(30px, 5vw, 50px)
        }

        .m-cookies__bottom div:first-child {
            flex: 1
        }

        .m-cookies__list li {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            padding: 16px 0;
            line-height: 130%;
            background-image: linear-gradient(to right, rgb(var(--color-dotteds-rgb)) 0 10%, rgba(255, 255, 255, 0) 10%);
            background-position: bottom;
            background-size: 8px 1px;
            background-repeat: repeat-x
        }

        .m-cookies__list div:first-child {
            flex: 1
        }

        .cookies-popup {
            position: fixed;
            right: 30px;
            bottom: -50%;
            width: 400px;
            max-width: 100%;
            padding: clamp(20px, 5vw, 30px);
            background: var(--bg-secondary);
            color: #fff;
            border-radius: var(--rounded-normal);
            z-index: 10;
            opacity: 0;
            transition: all .4s
        }

        .cookies-popup.is-show {
            opacity: 1;
            bottom: 30px
        }

        .cookies-popup .button:hover {
            background: #7a7a7a
        }

        .c-heading {
            position: relative;
            margin-bottom: clamp(40px, 5vw, 96px);
            font-weight: 400
        }

        .c-heading--small .c-heading__top {
            margin-bottom: 1rem
        }

        .c-heading--small .c-heading__middle+.c-heading__bottom {
            margin-top: 1em
        }

        .c-heading--small .c-heading__short-desc {
            width: 500px
        }

        .c-heading__top {
            margin-bottom: clamp(20px, 3vw, 32px);
            font-weight: 400
        }

        .c-heading__top .text-default {
            font-weight: 400
        }

        .c-heading__middle+.c-heading__bottom {
            margin-top: 1em
        }

        .c-heading__short-desc {
            display: inline-block;
            width: 360px;
            max-width: 100%;
            font-size: 18px;
            font-size: clamp(18px, 15.8873239437px + 0.4225352113vw, 24px)
        }

        .c-heading__large-desc {
            display: inline-block;
            width: 900px;
            max-width: 100%;
            font-size: 18px;
            font-size: clamp(18px, 15.8873239437px + 0.4225352113vw, 24px)
        }

        .c-heading__by {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            margin-top: clamp(20px, 2vw, 30px);
            font-size: 16px;
            font-size: clamp(16px, 14.5915492958px + 0.2816901408vw, 20px)
        }

        .c-heading__by small {
            font-size: .6em
        }

        .c-heading__between {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            flex-wrap: wrap;
            gap: 16px
        }

        .c-heading .heading-1 {
            position: relative;
            display: inline-block
        }

        .subtitle-center {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: clamp(30px, 5vw, 80px);
            font-size: 18px;
            font-size: clamp(18px, 17.2957746479px + 0.1408450704vw, 20px)
        }

        .subtitle-center--bottom {
            margin-top: clamp(30px, 5vw, 80px)
        }

        .subtitle-center .bt-ico-left {
            margin-left: 1em
        }

        .text-subtitle-narrow {
            display: inline-block;
            width: 360px;
            max-width: 100%
        }

        .heading-underlined {
            margin-bottom: 3em;
            font-size: var(--text-size-primary);
            font-weight: normal
        }

        .heading-underlined__text {
            display: inline-block;
            border-bottom: 1px solid var(--color-primary)
        }

        .heading-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 71px;
            margin-bottom: 48px;
            background: var(--bg-primary);
            background-image: linear-gradient(to right, rgb(var(--color-dotteds-rgb)) 0 10%, rgba(255, 255, 255, 0) 10%);
            background-position: bottom;
            background-size: 8px 1px;
            background-repeat: repeat-x
        }

        .heading-section.sticky {
            position: sticky;
            top: 71px;
            z-index: 1
        }

        .heading-section__left {
            display: flex;
            align-items: center;
            gap: 8px;
            height: 100%
        }

        .heading-section__right {
            display: flex;
            align-items: center
        }

        .heading-section__title {
            min-width: 150px;
            font-size: var(--text-size-primary);
            font-weight: 500
        }

        .heading-section .menu-tabs {
            display: flex;
            align-items: center;
            height: 100%
        }

        .tb-stats {
            border-collapse: separate;
            border-spacing: 0;
            margin: 0 auto
        }

        .tb-stats th,
        .tb-stats td {
            border-right: 1px solid var(--border-table);
            border-bottom: 1px solid var(--border-table)
        }

        .tb-stats th:first-child,
        .tb-stats td:first-child {
            border-left: 1px solid var(--border-table)
        }

        .tb-stats th {
            padding: clamp(8px, 2vw, 16px);
            border-top: 1px solid var(--border-table);
            font-size: var(--text-size-small);
            font-weight: 500;
            text-transform: uppercase;
            line-height: 120%
        }

        .tb-stats td {
            padding: clamp(8px, 2vw, 20px) clamp(8px, 2vw, 16px);
            font-size: 18px;
            font-size: clamp(18px, 15.8873239437px + 0.4225352113vw, 24px);
            line-height: 120%
        }

        .tb-stats tr:first-child th:first-child {
            border-top-left-radius: var(--rounded-normal)
        }

        .tb-stats tr:first-child th:last-child {
            border-top-right-radius: var(--rounded-normal)
        }

        .tb-stats tr:last-child td:first-child {
            border-bottom-left-radius: var(--rounded-normal)
        }

        .tb-stats tr:last-child td:last-child {
            border-bottom-right-radius: var(--rounded-normal)
        }

        .tb-dotteds {
            --button-pad: 16px;
            width: 100%;
            line-height: 120%;
            font-weight: 400
        }

        .tb-dotteds__bts {
            display: inline-flex;
            gap: 12px
        }

        .tb-dotteds th {
            padding: clamp(10px, 2vw, 28px);
            background-image: linear-gradient(to right, rgb(var(--color-dotteds-rgb)) 0 10%, rgba(255, 255, 255, 0) 10%);
            background-position: bottom;
            background-size: 8px 1px;
            background-repeat: repeat-x;
            font-weight: normal
        }

        .tb-dotteds tr {
            position: relative;
            transition: all .3s
        }

        .tb-dotteds tr:hover:not(:has(th)) {
            background: var(--color-odd-rows)
        }

        .tb-dotteds td {
            padding: clamp(10px, 2vw, 36px) clamp(10px, 2vw, 28px);
            background-image: linear-gradient(to right, rgb(var(--color-dotteds-rgb)) 0 10%, rgba(255, 255, 255, 0) 10%);
            background-position: bottom;
            background-size: 8px 1px;
            background-repeat: repeat-x;
            font-size: 16px;
            font-size: clamp(16px, 14.5915492958px + 0.2816901408vw, 20px)
        }

        .tb-dotteds .button {
            font-size: 1rem
        }

        .tb-dotteds .text-truncated {
            max-width: 300px
        }

        .palette__desc {
            width: 300px;
            margin-bottom: 2em;
            font-size: 16px;
            font-size: clamp(16px, 14.5915492958px + 0.2816901408vw, 20px)
        }

        .palette__list {
            display: flex;
            justify-content: center
        }

        .list-palette {
            --palette-width: 400px;
            --palette-margin: 300px;
            --palette-margin-neg: -300px;
            --palette-height: 580px;
            --palette-pad: 30px;
            --palette-pad-neg: -30px;
            position: relative;
            display: inline-flex;
            box-sizing: content-box
        }

        .list-palette--h {
            padding-left: var(--palette-margin)
        }

        .list-palette--h li {
            margin-left: var(--palette-margin-neg);
            transition: all .3s
        }

        .list-palette--h li:hover:not(:last-child) {
            margin-right: var(--palette-margin)
        }

        .list-palette--h li:hover:not(:last-child) .list-palette__item {
            margin-right: var(--palette-pad-neg);
            padding-right: var(--palette-pad);
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .list-palette--h li:hover:not(:last-child) .list-palette__header {
            transition-delay: .3s;
            opacity: 1
        }

        .list-palette--h li:not(:last-child) .list-palette__header {
            opacity: 0
        }

        .list-palette--v {
            padding-left: var(--palette-margin)
        }

        .list-palette--v li {
            margin-left: var(--palette-margin-neg);
            transition: all .3s
        }

        .list-palette--v li:not(:last-child) .list-palette__header {
            opacity: 0
        }

        .list-palette--v li:hover {
            z-index: 2
        }

        .list-palette--v li:hover .list-palette__bts,
        .list-palette--v li:hover .list-palette__header {
            opacity: 1
        }

        .list-palette--v .list-palette__item {
            height: auto
        }

        .list-palette--v .list-palette__footer {
            display: none
        }

        .list-palette--v .list-palette__bts {
            opacity: 0;
            transition: all .3s
        }

        .list-palette__item {
            display: inline-flex;
            flex-direction: column;
            justify-content: space-between;
            width: var(--palette-width);
            height: var(--palette-height);
            border-radius: var(--rounded-large);
            color: var(--color-card, --color-primary);
            overflow: hidden;
            transition: all .3s
        }

        .list-palette__box {
            display: inline-flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
            padding: var(--palette-pad)
        }

        .list-palette__header {
            position: relative;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            font-size: 20px;
            transition: all .3s
        }

        .list-palette__footer {
            text-align: right
        }

        .list-palette__aa {
            font-size: 75px;
            font-size: clamp(75px, 48.5915492958px + 5.2816901408vw, 150px);
            font-weight: 400;
            line-height: 60%;
            transition: all .3s
        }

        .list-palette__bts {
            display: flex;
            align-items: center;
            gap: var(--gutter)
        }

        .list-palette__bt {
            display: flex;
            align-items: stretch;
            cursor: pointer;
            transition: all .3s
        }

        .list-palette__bt:hover {
            opacity: .7
        }

        @media(max-width: 1023px) {
            .list-palette {
                --palette-width: 200px;
                --palette-margin: 170px;
                --palette-margin-neg: -170px;
                --palette-pad: 15px;
                --palette-pad-neg: -15px
            }

            .list-palette__header {
                font-size: var(--text-size-primary)
            }
        }

        .marquee-text {
            display: flex;
            align-items: center;
            justify-items: center;
            overflow: hidden
        }

        .marquee-text div {
            padding-right: .5ch;
            white-space: nowrap
        }

        .heading-svg {
            position: relative;
            margin: clamp(20px, 6vw, 60px) 0;
            line-height: 100%
        }

        .heading-svg__title {
            width: 100%;
            height: auto;
            fill: var(--color-primary);
            font-weight: bold
        }

        .heading-fit {
            container-type: inline-size;
            margin: clamp(20px, 6vw, 60px) 0;
            text-align: center;
            border: 1px solid red
        }

        .heading-fit__title {
            display: block;
            font-weight: bold;
            font-size: var(--font-size);
            line-height: 1em;
            transform: translateY(0.07em);
            white-space: nowrap
        }

        .c-collect {
            --gray-collect: #a7a7a7;
            --height-modal: 591px;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            background: var(--bg-primary);
            border-radius: var(--rounded-large);
            overflow: hidden
        }

        .c-collect__left {
            display: flex;
            justify-content: space-between;
            flex-direction: column;
            flex: 1;
            min-width: min(12em, 100%);
            min-height: var(--height-modal);
            background-color: #e9e9e9
        }

        .c-collect__right {
            flex: 1
        }

        .c-collect__inner {
            width: 100%;
            padding: 0 var(--pad-large-modal)
        }

        .c-collect__media {
            flex: 1;
            display: flex;
            justify-content: center
        }

        .c-collect__thumb {
            width: 380px;
            margin: auto;
            border-radius: var(--rounded-normal)
        }

        .c-collect__header {
            display: flex;
            align-items: center;
            height: 140px
        }

        .c-collect__title {
            font-size: var(--text-size-large)
        }

        .c-collect__footer {
            display: flex;
            align-items: center;
            height: 140px
        }

        .c-collect__search {
            --height-input: 32px;
            position: relative;
            margin: 50px 0
        }

        .c-collect__search input {
            width: 100%;
            height: var(--height-input);
            background: rgba(0, 0, 0, 0)
        }

        .c-collect__search input::-moz-placeholder {
            color: var(--gray-collect);
            font-size: 10px;
            text-transform: uppercase
        }

        .c-collect__search input::placeholder {
            color: var(--gray-collect);
            font-size: 10px;
            text-transform: uppercase
        }

        .c-collect__search button {
            position: absolute;
            top: 0;
            right: 0;
            width: var(--height-input);
            height: var(--height-input);
            background: rgba(0, 0, 0, 0);
            border: none;
            display: flex;
            justify-content: center;
            align-items: center
        }

        .c-collect__search svg {
            stroke: var(--gray-collect)
        }

        .c-collect .list-collections {
            max-height: 319px;
            overflow-y: auto
        }

        .c-collect__form {
            display: flex;
            flex-direction: column;
            width: 100%;
            min-height: var(--height-modal)
        }

        .c-collect__form .rows {
            flex: 1;
            margin-top: 50px
        }

        .c-collect__form .row {
            margin-bottom: 2rem
        }

        .c-collect__bts {
            display: flex;
            gap: 12px;
            width: 100%
        }

        .c-collect__bts [class*="--full"] {
            flex: 1
        }

        .c-collect__saved {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 2rem;
            min-height: var(--height-modal);
            font-size: var(--text-size-large);
            text-align: center;
            line-height: 170%
        }

        .c-collect__saved-thumb {
            display: flex;
            justify-content: center;
            gap: 20px
        }

        .c-collect__saved-thumb .logo {
            width: 20%;
            height: auto
        }

        .c-collect__saved-thumb img {
            width: 30%;
            border-radius: var(--rounded-normal)
        }

        .list-collections__item {
            display: flex;
            justify-content: space-between;
            padding: 20px var(--pad-large-modal);
            background-image: linear-gradient(to right, rgb(var(--color-dotteds-rgb)) 0 10%, rgba(255, 255, 255, 0) 10%);
            background-position: bottom;
            background-size: 8px 1px;
            background-repeat: repeat-x
        }

        .list-collections__left {
            display: flex;
            align-items: center;
            gap: 12px
        }

        .list-collections__number {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 32px;
            height: 32px;
            border-radius: var(--rounded-normal);
            background: #e9e9e9
        }

        .head-toolbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            margin-bottom: clamp(20px, 3vw, 50px)
        }

        .head-toolbar__left {
            display: inline-flex;
            align-items: center;
            gap: 16px
        }

        .head-toolbar__right {
            display: flex
        }

        .toolbar-bts {
            --toolbar-gutter: 40px;
            display: inline-flex;
            gap: var(--toolbar-gutter)
        }

        .toolbar-bts__item {
            position: relative;
            display: flex;
            cursor: pointer;
            transition: all .3s
        }

        .toolbar-bts__item:hover .ico-svg {
            opacity: .5
        }

        .toolbar-bts .ico-svg {
            display: block;
            fill: var(--color-primary)
        }

        .toolbar-bts__share {
            position: absolute;
            top: 50%;
            right: -17px;
            display: flex;
            align-items: center;
            gap: var(--toolbar-gutter);
            height: 45px;
            padding: 0 20px;
            background: var(--bg-secondary);
            border-radius: 45px;
            transform: translateY(-50%);
            opacity: 0;
            visibility: hidden;
            transition: all .3s
        }

        .toolbar-bts__share.is-show {
            opacity: 1;
            visibility: visible
        }

        .toolbar-bts__share .ico-svg {
            display: block;
            width: 16px;
            fill: var(--color-white);
            opacity: .5
        }

        .toolbar-bts__share .ico-svg:hover {
            opacity: 1
        }

        .toolbar-bts__close {
            cursor: pointer
        }

        .toolbar-bts__close .ico-svg {
            opacity: 1
        }

        .tags-info {
            display: grid;
            grid-template-columns: 50% 50%;
            margin: clamp(30px, 4vw, 60px) 0
        }

        .tags-info__right>p {
            width: 740px;
            max-width: 100%
        }

        .tags-info__title {
            font-size: 28px;
            font-size: clamp(28px, 18.1408450704px + 1.9718309859vw, 56px);
            line-height: 100%
        }

        .tags-info__subtitle {
            font-size: 1rem;
            font-weight: 300
        }

        .tags-info__read-more {
            display: flex;
            gap: 10px;
            margin-top: clamp(1em, 3vw, 2em)
        }

        .tags-info__read-more .link-underlined {
            margin: auto 0
        }

        .tags-info__more p:first-child {
            margin-top: 1em
        }

        .l-msg {
            width: 700px;
            max-width: 100%;
            margin: 0 auto;
            text-align: center
        }

        .l-msg__logo {
            display: inline-flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 2em
        }

        .l-msg__logo svg:nth-child(1) {
            width: 84px;
            height: auto;
            fill: var(--color-primary)
        }

        .l-msg__logo .sticker-svg {
            width: clamp(50px, 5vw, 100px)
        }

        .l-msg__text {
            width: 500px;
            max-width: 100%;
            margin: 0 auto;
            font-size: 18px;
            font-size: clamp(18px, 15.8873239437px + 0.4225352113vw, 24px)
        }

        .l-msg__text+.toast {
            margin-top: clamp(80px, 5vw, 160px)
        }

        .l-msg h2 {
            margin-bottom: .5em
        }

        .faqs__list {
            background-image: linear-gradient(to right, rgb(var(--color-dotteds-rgb)) 0 10%, rgba(255, 255, 255, 0) 10%);
            background-position: top;
            background-size: 8px 1px;
            background-repeat: repeat-x;
            font-size: 18px;
            font-size: clamp(18px, 17.2957746479px + 0.1408450704vw, 20px)
        }

        .faqs__list>li {
            background-image: linear-gradient(to right, rgb(var(--color-dotteds-rgb)) 0 10%, rgba(255, 255, 255, 0) 10%);
            background-position: bottom;
            background-size: 8px 1px;
            background-repeat: repeat-x
        }

        .faqs__question {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: clamp(20px, 3vw, 30px) 0;
            font-weight: bold;
            cursor: pointer
        }

        .faqs__answer {
            height: 0;
            overflow: hidden
        }

        .faqs__answer ul,
        .faqs__answer ol {
            margin-bottom: 1em
        }

        .faqs__answer ul li {
            list-style-type: disc
        }

        .faqs__answer ol li {
            list-style-type: decimal
        }

        .faqs__answer li {
            list-style-position: inside
        }

        .toast {
            display: inline-flex;
            padding: clamp(20px, 5vw, 30px);
            background: #f3f3f3;
            border-radius: var(--rounded-normal);
            text-align: left;
            line-height: 150%
        }

        .toast__icon {
            display: flex;
            align-items: flex-start;
            padding: 8px 16px 0 0
        }

        .box-featured {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: auto;
            padding: clamp(20px, 4vw, 32px);
            background: var(--bg-4rd);
            border-radius: var(--rounded-normal);
            line-height: 150%
        }

        .box-featured--green {
            background: #E2F4E9
        }

        .box-featured--warning {
            background: #f7f0cc
        }

        .box-featured--danger {
            background: #ffd1d1
        }

        .box-featured__m {
            margin: 0 8px
        }

        .box-featured__label {
            margin-bottom: .5em;
            text-transform: uppercase;
            font-size: 12px;
            color: #7a7a7a
        }

        .box-featured .ico-svg {
            vertical-align: middle
        }

        .box-featured p:last-child {
            margin-bottom: 0
        }

        .intro-texts {
            font-size: 30px;
            font-size: clamp(30px, 3.9436619718px + 5.2112676056vw, 104px);
            line-height: 140%;
            font-weight: bold
        }

        .intro-texts__subtitle {
            margin-top: clamp(20px, 5vw, 100px);
            text-align: center;
            font-size: 18px;
            font-size: clamp(18px, 14.4788732394px + 0.7042253521vw, 28px);
            font-weight: 300;
            line-height: 120%
        }

        .intro-texts__link {
            margin-right: .2em;
            padding-bottom: .1em;
            color: #a7a7a7;
            cursor: pointer;
            transition: all .3s;
            background-image: linear-gradient(to right, transparent 20%, var(--bg-primary) 20%), linear-gradient(to right, var(--color-primary), transparent);
            background-position: bottom;
            background-size: 16px 3px;
            background-repeat: repeat-x
        }

        .intro-texts__link .ico-svg {
            width: .3em;
            margin-left: .1em
        }

        .intro-texts__link:hover {
            color: currentColor
        }

        .intro-texts__button {
            border: 0;
            font-size: 30px;
            font-size: clamp(30px, 3.9436619718px + 5.2112676056vw, 104px);
            font-weight: bold;
            color: var(--color-connect);
            border-bottom: 2px solid currentColor;
            transition: all .3s
        }

        .intro-texts__button:hover {
            color: var(--color-primary)
        }

        @media(max-width: 1023px) {
            .intro-texts__link {
                background-size: 8px 2px
            }
        }

        .has-tooltip {
            position: relative;
            display: inline-block
        }

        .has-tooltip:hover .tooltip {
            visibility: visible;
            opacity: 1;
            transform: translate(-50%, 0)
        }

        .tooltip {
            --tooltip-bg: var(--bg-secondary);
            --tooltip-color: #fff;
            visibility: hidden;
            opacity: 0;
            position: absolute;
            bottom: calc(100% + 10px);
            left: 50%;
            width: var(--tooltip-width, auto);
            background-color: var(--tooltip-bg);
            border-radius: var(--rounded-normal);
            color: var(--tooltip-color);
            line-height: 120%;
            transform: translate(-50%, -10px);
            transition: all .3s ease-in-out;
            z-index: 3
        }

        .tooltip--white {
            --tooltip-bg: #fff;
            --tooltip-color: #222
        }

        .tooltip:before {
            content: "";
            position: absolute;
            top: calc(100% - 0px);
            left: 50%;
            height: 10px;
            width: 100%;
            transform: translateX(-50%)
        }

        .tooltip:after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            height: 0;
            width: 0;
            margin-left: -6px;
            border: solid rgba(0, 0, 0, 0);
            border-top-color: var(--tooltip-bg);
            border-width: 8px 6px;
            pointer-events: none
        }

        .tooltip--user {
            width: 180px;
            padding: 35px 30px;
            min-height: 240px;
            text-align: center;
            line-height: 120%
        }

        .tooltip__content {
            padding: 20px;
            white-space: nowrap;
            font-size: 14px;
            line-height: 100%;
            text-align: center;
            z-index: 1
        }

        .tooltip__content--multiline {
            white-space: normal;
            text-align: left;
            line-height: 120%
        }

        .tooltip__content P:last-child {
            margin-bottom: 0
        }

        .tooltip.is-open {
            visibility: visible;
            opacity: 1;
            transform: translate(-50%, 0)
        }

        .tooltip__row:not(:last-child) {
            margin-bottom: 1em
        }

        .tooltip a {
            color: var(--tooltip-color)
        }

        .marquee-top {
            --marquee-bg: #222;
            --marquee-color: #fff;
            position: relative;
            width: 100%;
            display: flex;
            align-items: center;
            overflow: hidden;
            white-space: nowrap;
            height: 50px;
            background-color: var(--marquee-bg);
            font-size: 17px;
            color: var(--marquee-color)
        }

        .marquee-top--awwwards {
            --marquee-bg: var(--color-award, transparent);
            filter: brightness(90%);
            color: #fff
        }

        .marquee-top__wrapper {
            display: flex;
            align-items: center;
            height: 100%
        }

        .marquee-top__item:has(.marquee-top__separator) {
            padding: 0 10px
        }

        .marquee-top__separator {
            position: relative;
            top: -1px;
            margin: 0 10px;
            font-size: 1.3em;
            vertical-align: middle;
            fill: currentColor
        }

        .marquee-top a:hover {
            opacity: 0
        }

        .color-menu {
            color: var(--menu-color-1)
        }

        .menu-float {
            --menu-color-3: #fff;
            position: fixed;
            bottom: -80px;
            left: 0;
            width: 100%;
            font-size: 14px;
            opacity: 0;
            transition: all .3s ease-in-out;
            z-index: 9;
            pointer-events: none
        }

        .menu-float.is-visible {
            opacity: 1;
            bottom: 30px
        }

        .menu-float__inner {
            position: relative;
            display: flex;
            justify-content: center
        }

        .menu-float__top {
            max-width: 707px;
            max-height: 0;
            overflow: hidden;
            transition: all .4s
        }

        .menu-float__bottom {
            position: relative;
            display: flex;
            justify-content: center
        }

        .menu-float__bottom:before {
            content: "";
            height: 60px;
            transition: all .3s
        }

        .menu-float__menu-row+.menu-float__menu-row {
            margin-top: 28px
        }

        .menu-float__wrapper {
            --bg-menu-wrapper: 34, 34, 34;
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            max-width: -moz-fit-content;
            max-width: fit-content;
            padding: 6px;
            border-radius: 12px;
            background: rgba(var(--bg-menu-wrapper), 0.8);
            pointer-events: auto;
            transition: all .4s
        }

        .menu-float__wrapper.is-open-main .menu-float__bottom {
            position: relative
        }

        .menu-float__wrapper.is-open-main .menu-float__layout--primary .menu-float__content {
            width: 100%
        }

        .menu-float__wrapper.is-open-main .menu-float__layout--primary {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%
        }

        .menu-float__wrapper.is-open-main .menu-float__layout--secondary,
        .menu-float__wrapper.is-open-main .menu-float__layout--tertiary {
            opacity: 0;
            visibility: hidden
        }

        .menu-float__wrapper.is-open {
            min-width: 720px !important;
            max-width: 1200px
        }

        .menu-float__wrapper.is-open .menu-float__top {
            max-height: 500px
        }

        .menu-float__wrapper.is-open .menu-float__bottom:before {
            flex: 0;
            width: 100%
        }

        .menu-float__wrapper.is-open .menu-float__menu-content {
            max-width: 1200px
        }

        .menu-float__wrapper.is-open .menu-float__title:after {
            max-width: 200px;
            opacity: 1
        }

        .menu-float__wrapper.is-open .menu-float__subtitle {
            max-width: 200px;
            opacity: 1
        }

        .menu-float__wrapper.is-open .menu-float__hamburger {
            margin-left: auto
        }

        .menu-float__wrapper.is-open .menu-float__hamburger div:nth-child(1) {
            top: 0;
            transform: rotate(45deg)
        }

        .menu-float__wrapper.is-open .menu-float__hamburger div:nth-child(2) {
            opacity: 0
        }

        .menu-float__wrapper.is-open .menu-float__hamburger div:nth-child(3) {
            top: 0;
            transform: rotate(-45deg)
        }

        .menu-float__right {
            position: absolute;
            right: 0;
            bottom: 0
        }

        .menu-float__right .menu-float__wrapper {
            overflow: visible !important
        }

        .menu-float__logo {
            display: flex;
            color: #fff;
            font-weight: bold
        }

        .menu-float__breadcrumb {
            display: inline-flex;
            align-items: center;
            flex-shrink: 0;
            height: 48px
        }

        .menu-float__title {
            margin-left: -2px;
            color: var(--menu-color-1)
        }

        .menu-float__title+.menu-float__subtitle:before {
            content: ".";
            margin-right: 2px;
            color: var(--menu-color-1);
            font-weight: bold
        }

        .menu-float__subtitle {
            color: #a7a7a7;
            transition: all .3s
        }

        .menu-float__layout--primary .menu-float__content {
            display: flex;
            padding: 0 20px;
            background-color: var(--bg-secondary);
            color: #fff
        }

        .menu-float__layout--secondary {
            flex: 1;
            margin-left: 6px
        }

        .menu-float__layout--secondary .menu-float__content {
            position: relative;
            width: 100%;
            background: #3e3e3e;
            color: #d3d3d3
        }

        .menu-float__layout--secondary .menu-float__item {
            justify-content: center;
            width: 100%;
            border: 1px solid #4e4e4e;
            color: #d3d3d3;
            white-space: nowrap
        }

        .menu-float__layout--secondary .menu-float__item.is-active {
            color: var(--menu-color-1, #d3d3d3);
            border-color: var(--menu-color-1, #d3d3d3)
        }

        .menu-float__layout--secondary .menu-float__item.is-active:hover {
            opacity: .8
        }

        .menu-float__layout--secondary .menu-float__item:hover:not(.is-active) {
            border-color: #a7a7a7
        }

        .menu-float__layout--tertiary {
            display: flex;
            margin-left: 6px
        }

        .menu-float__layout--tertiary .menu-float__content {
            padding: 0
        }

        .menu-float__layout--tertiary .button {
            width: 100%;
            font-size: 14px;
            transition: all .3s
        }

        .menu-float__layout--tertiary .button:not(.is-custom) {
            background: var(--menu-color-1);
            color: var(--color-primary)
        }

        .menu-float__layout--tertiary .button:hover {
            opacity: .8
        }

        .menu-float__hamburger {
            position: relative;
            width: 20px;
            height: 30px;
            cursor: pointer;
            pointer-events: auto;
            transition: all .3s
        }

        .menu-float__hamburger div {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            width: 10px;
            height: 1px;
            background-color: #fff;
            transform: translateZ(0);
            transition: all .3s
        }

        .menu-float__hamburger div:nth-child(1) {
            top: -8px
        }

        .menu-float__hamburger div:nth-child(3) {
            top: 8px
        }

        .menu-float__menu {
            display: none;
            width: 100%;
            display: none;
            margin-bottom: 6px;
            padding: 30px;
            background: #2c2c2c;
            color: #fff;
            border-radius: var(--rounded-normal);
            z-index: -1;
            transition: all .4s
        }

        .menu-float__menu--main {
            display: flex;
            font-size: 15px;
            padding-top: 4px;
            padding-left: 1px
        }

        .menu-float__menu.is-active {
            display: block
        }

        .menu-float__menu-content {
            max-width: 0;
            opacity: 0;
            transition: all .4s, max-width 0s;
            overflow: hidden
        }

        .menu-float__menu-content.is-show {
            opacity: 1
        }

        .menu-float__menu-col {
            position: relative;
            flex: 1;
            background-image: linear-gradient(to bottom, #7a7a7a 0 10%, rgba(255, 255, 255, 0) 10%);
            background-position: left top;
            background-repeat: repeat-y;
            background-size: 1px 8px
        }

        .menu-float__menu-section {
            position: relative;
            margin-top: 0px;
            margin-bottom: 25px;
            margin-left: 16px;
            font-size: 12px;
            color: #a7a7a7;
            line-height: 100%
        }

        .menu-float__menu-section:before {
            content: "";
            position: absolute;
            top: 3px;
            left: -17px;
            width: 4px;
            height: 4px;
            border-radius: 50%;
            background: var(--menu-color-2, #fff)
        }

        .menu-float__menu-nav {
            line-height: 120%
        }

        .menu-float__menu-nav li:not(:last-child) {
            margin-bottom: 16px
        }

        .menu-float__menu-nav li.is-active {
            font-weight: bold
        }

        .menu-float__menu-nav li.is-active a {
            color: var(--menu-color-1, --color-white);
            border-color: var(--menu-color-1, --color-white)
        }

        .menu-float__menu-nav a {
            display: block;
            padding: 8px 0 8px 16px;
            border-left: 1px solid rgba(0, 0, 0, 0);
            transition: all .3s
        }

        .menu-float__menu-nav a:hover {
            color: var(--menu-color-1, --color-white);
            border-color: var(--menu-color-1, --color-white)
        }

        .menu-float__menu a {
            color: #fff
        }

        .menu-float__title-section {
            flex-shrink: 0;
            display: flex;
            align-items: center;
            margin: 0 12px 0 6px;
            line-height: 100%
        }

        .menu-float__content {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            height: 60px;
            padding: 0 6px;
            text-align: center;
            border-radius: var(--rounded-normal);
            overflow: hidden
        }

        .menu-float__progress {
            position: absolute;
            top: 0;
            left: 0;
            display: flex;
            width: 100%;
            height: 100%
        }

        .menu-float__bar {
            background-color: rgba(78, 78, 78, .5);
            width: 0;
            height: 100%
        }

        .menu-float__nav {
            position: relative;
            display: flex;
            margin-left: -6px
        }

        .menu-float__nav li {
            display: flex
        }

        .menu-float__item {
            display: inline-flex;
            align-items: center;
            height: 48px;
            margin-left: 6px;
            padding: 0 12px;
            border-radius: var(--rounded-normal);
            color: var(--color-primary);
            font-weight: 400;
            cursor: pointer;
            overflow: hidden;
            transition: max-width .3s, padding .3s, margin .3s, color .3s, background .3s, border-radius .3s, border-color .3s, opacity .3s
        }

        .menu-float__filters {
            position: relative;
            display: flex;
            height: 60px;
            margin-left: -6px;
            margin-right: -6px
        }

        .menu-float__filters li {
            border-left: 1px solid rgba(var(--color-primary-rgb), 0.1)
        }

        .menu-float__filter {
            position: relative;
            display: flex;
            align-items: center;
            height: 100%;
            padding: 0 12px;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none
        }

        .menu-float__filter.has-filter:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--menu-color-2)
        }

        .menu-float__filter.is-active {
            background: #222
        }

        .menu-float__filter.is-active svg {
            transform: scaleY(-1)
        }

        .menu-float__arrow {
            fill: #a7a7a7;
            margin-left: 12px
        }

        .menu-float__content:has(.menu-float__awwwards) {
            border-radius: 0
        }

        .menu-float__awwwards {
            display: flex;
            gap: 6px
        }

        .menu-float .button[class*="--awwward"] {
            --button-bg: var(--color-award);
            color: #fff
        }

        .menu-float .avatar-name sup {
            color: #fff
        }

        .menu-float .bt-nav {
            position: absolute;
            bottom: 0;
            pointer-events: auto
        }

        .menu-float .bt-nav--left {
            left: -28px
        }

        .menu-float .bt-nav--right {
            right: -28px
        }

        .menu-float .button--suggestions {
            --button-bg: var(--bg-secondary);
            --button-color: #fff
        }

        .menu-float .button--suggestions:hover {
            background-color: #4e4e4e
        }

        .menu-float .button--suggestions img {
            margin: 0 20px 0 8px;
            border-radius: 50%
        }

        .menu-float .button--suggestions .budget-circle {
            flex-shrink: 0;
            margin: 0 8px 0 20px;
            background: #4e4e4e
        }

        .style-1 {
            --menu-color-1: var(--color-inspire);
            --menu-color-2: var(--color-inspire-2);
            --menu-color-3: var(--color-inspire-3)
        }

        .style-2 {
            --menu-color-1: var(--color-learn);
            --menu-color-2: var(--color-learn-2);
            --menu-color-3: var(--color-learn-3)
        }

        .style-3 {
            --menu-color-1: var(--color-connect);
            --menu-color-2: var(--color-connect-2);
            --menu-color-3: var(--color-connect-3)
        }

        .style-4 {
            --menu-color-1: var(--color-read);
            --menu-color-2: var(--color-read-2);
            --menu-color-3: var(--color-read-3)
        }

        .style-5 {
            --menu-color-1: var(--color-awards);
            --menu-color-2: var(--color-awards-2);
            --menu-color-3: var(--color-awards-3)
        }

        .style-6 {
            --menu-color-1: var(--color-jobs);
            --menu-color-2: var(--color-jobs-2);
            --menu-color-3: var(--color-jobs-3)
        }

        .bt-nav {
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--bg-secondary);
            border-radius: var(--rounded-normal);
            cursor: pointer;
            transition: all .3s
        }

        .bt-nav.is-hidden {
            opacity: 0
        }

        .is-intersecting .c-box-float-more .box-float-more {
            opacity: 1;
            top: 0;
            transform: translateY(0)
        }

        .c-box-float-more {
            position: fixed;
            bottom: 30px;
            left: 0;
            width: 100%;
            z-index: 9;
            pointer-events: none
        }

        .c-box-float-more .inner {
            position: relative;
            display: flex;
            justify-content: flex-end
        }

        .c-box-float-more .box-float-more {
            pointer-events: all;
            opacity: 0;
            transform: translateY(50px)
        }

        .box-float-more {
            position: relative;
            display: inline-flex;
            height: 72px;
            padding: 6px;
            background: var(--bg-secondary);
            border-radius: var(--rounded-small);
            color: #fff;
            line-height: 120%;
            pointer-events: all;
            overflow: hidden;
            transition: all .3s ease-in-out
        }

        .box-float-more:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: var(--menu-color-2)
        }

        .box-float-more__info {
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 4px;
            min-width: 80px;
            padding: 0 12px
        }

        .box-float-more__info span {
            color: #7a7a7a
        }

        .box-float-more__photo {
            border-radius: 4px;
            -o-object-fit: cover;
            object-fit: cover
        }

        .menu-float-news-1 {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 220px;
            padding: 12px;
            border-radius: var(--rounded-normal);
            background: var(--bg-secondary);
            color: #fff;
            line-height: 1.3em;
            border-bottom: 6px solid var(--menu-color-1);
            pointer-events: all;
            transform: translateY(calc(100% - 30px));
            opacity: 0;
            visibility: hidden;
            transition: all .4s
        }

        .menu-float-news-1.is-visible {
            transform: translateY(0);
            opacity: 1;
            visibility: visible
        }

        .menu-float-news-1__photo {
            margin-bottom: .4em;
            -o-object-fit: cover;
            object-fit: cover
        }

        .menu-float-news-1__video {
            margin-bottom: .4em
        }

        .menu-float-news-1__label {
            color: #a7a7a7
        }

        .menu-float-news-1__close {
            text-align: right
        }

        .menu-float-news-1__close span {
            position: relative;
            top: -6px;
            right: -6px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 20px;
            height: 20px;
            line-height: 100%;
            padding: 4px;
            z-index: 2;
            cursor: pointer
        }

        .menu-float-news-1__close span:hover {
            opacity: .7
        }

        .filters {
            display: flex;
            flex-direction: column;
            border-radius: var(--rounded-normal);
            transition: all .3s;
            z-index: -1;
            pointer-events: all
        }

        .filters__tab {
            display: none
        }

        .filters__tab.is-active {
            display: block
        }

        .filters__search {
            display: flex;
            height: 40px;
            margin-bottom: 20px;
            background: #383838;
            border-radius: var(--rounded-small)
        }

        .filters__search input {
            flex: 1;
            padding: 0 16px;
            background: rgba(0, 0, 0, 0);
            font-size: var(--text-size-primary);
            color: var(--color-white)
        }

        .filters__search button {
            width: 40px;
            background: rgba(0, 0, 0, 0);
            border: none
        }

        .filters__search .ico-svg {
            fill: var(--color-white)
        }

        .filters__label {
            margin-bottom: 1.5em;
            text-transform: uppercase;
            color: #7a7a7a;
            font-weight: 400;
            font-size: var(--text-size-small);
            border-bottom: 1px solid #4e4e4e;
            clear: both
        }

        .filters__content {
            flex: 1;
            max-height: 310px;
            color: var(--color-white);
            overflow-y: auto;
            overflow-x: hidden
        }

        .filters__content::-webkit-scrollbar {
            width: 2px
        }

        .filters__content::-webkit-scrollbar-track {
            background: #383838
        }

        .filters__content::-webkit-scrollbar-thumb {
            background-color: var(--color-white)
        }

        .filters__list li {
            float: left;
            width: 33.333%
        }

        .filters__list--small li {
            width: 50%
        }

        .filters__list+.filters__title {
            padding-top: 2em
        }

        .filters li {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis
        }

        .filters__item {
            display: inline-flex;
            align-items: center;
            height: 26px;
            padding: 0 8px;
            color: var(--color-white);
            border-radius: 26px;
            cursor: pointer;
            transition: all .3s
        }

        .filters__item.is-active {
            color: var(--menu-color-3);
            background: #383838
        }

        .filters__item.is-active .ico-svg {
            margin-left: 6px
        }

        .filters__item:hover {
            background: #383838
        }

        .filters__colors {
            display: grid;
            grid-template-columns: repeat(9, 1fr)
        }

        .filters__colors .filters__item {
            position: relative;
            display: flex;
            width: 100%;
            height: 36px;
            padding: 0;
            border-radius: 0;
            outline: 4px solid rgba(0, 0, 0, 0);
            transition: z-index 0s outline .6s
        }

        .filters__colors .filters__item.is-active,
        .filters__colors .filters__item:hover {
            outline-color: var(--color-white);
            z-index: 1
        }

        .cart-count {
            position: relative;
            display: block;
            margin: auto;
            display: flex
        }

        .cart-count span {
            position: absolute;
            top: -12px;
            right: -12px;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 15px;
            height: 15px;
            background: #fff;
            color: var(--color-primary);
            border-radius: 50%;
            font-size: 12px;
            font-weight: bold;
            line-height: 100%
        }

        @media(max-width: 576px) {
            .menu-float.is-visible {
                bottom: 8px
            }

            .menu-float__wrapper {
                min-width: 0 !important
            }

            .menu-float__wrapper.is-open-main .menu-float__layout--primary {
                position: static
            }

            .menu-float__wrapper.is-open {
                min-width: 100% !important
            }

            .menu-float__wrapper.is-open .menu-float__top {
                max-height: var(--mft-height, 100vh)
            }

            .menu-float__wrapper.is-open .menu-float__layout--tertiary {
                display: none
            }

            .menu-float__top {
                overflow-y: auto
            }

            .menu-float__layout--primary {
                flex: 1
            }

            .menu-float__layout--primary .menu-float__content {
                display: flex
            }

            .menu-float__layout--secondary {
                display: none
            }

            .menu-float__menu {
                padding: 20px
            }

            .menu-float__menu--main {
                flex-direction: column
            }

            .menu-float__menu-nav li {
                margin-bottom: 0
            }

            .menu-float__menu-col:last-child .menu-float__menu-row:last-child {
                margin-bottom: 0
            }

            .menu-float__menu-row {
                margin-bottom: 20px
            }

            .menu-float__menu-section {
                margin-bottom: 12px
            }

            .menu-float__menu-section+ul {
                margin-bottom: 12px
            }

            .menu-float .inner {
                padding: 0 8px
            }

            .menu-float .bt-nav {
                display: none
            }

            .menu-float .button {
                --button-height: 60px
            }
        }

        #footer a {
            color: var(--color-primary)
        }

        #footer a:hover {
            opacity: .75
        }

        .footer__top {
            margin-bottom: clamp(40px, 4vw, 150px)
        }

        .footer__top .box-featured {
            background: var(--ch-bg, var(--bg-4rd))
        }

        .footer__bottom {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            flex-wrap: wrap;
            margin-bottom: 120px;
            padding-top: clamp(24px, 3vw, 48px);
            font-size: 14px;
            font-weight: 400;
            background-image: linear-gradient(to right, rgb(var(--color-dotteds-rgb)) 0 10%, rgba(255, 255, 255, 0) 10%);
            background-position: top;
            background-size: 8px 1px;
            background-repeat: repeat-x
        }

        .footer__wrapper {
            display: flex
        }

        .footer__nav {
            display: flex;
            flex-wrap: wrap
        }

        .footer__item {
            display: flex;
            line-height: 140%;
            font-size: clamp(35px, 20vw, 4vw);
            font-weight: bold
        }

        .footer__item:not(:last-child):after {
            content: "-";
            margin: 0 .4em;
            font-weight: 300
        }

        .footer__figure {
            position: absolute;
            transform: translate(-50%, -50%);
            opacity: 0;
            transition: opacity .3s;
            transform-origin: center;
            pointer-events: none
        }

        .footer__figure.show {
            opacity: 1
        }

        .footer__figure.show img {
            opacity: .9;
            transform: scale(1) rotate(20deg)
        }

        .footer__img {
            transform: scale(0);
            transition: all .3s
        }

        .footer__logo {
            display: inline-flex;
            align-items: center;
            gap: 16px;
            margin-bottom: clamp(30px, 4vw, 60px)
        }

        .footer__logo--s1 svg {
            width: 40px
        }

        .footer__logo--s2 svg:nth-child(1) {
            width: 44px;
            height: auto;
            fill: var(--color-primary)
        }

        .footer__logo--s2 .sticker-svg {
            width: clamp(40px, 4vw, 72px)
        }

        .footer__logo svg {
            fill: var(--color-primary)
        }

        .footer__nav {
            display: flex;
            flex-wrap: wrap;
            gap: 0 24px
        }

        .footer__grid {
            --grid-min: 18%;
            --menu-margin: clamp(10px, 4vw, 20px);
            flex: 1;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(var(--grid-min), 1fr));
            grid-gap: 24px
        }

        .footer__menu {
            font-weight: bold;
            line-height: 100%
        }

        .footer__menu li:not(:last-child) {
            margin-bottom: var(--menu-margin)
        }

        @media(max-width: 1023px) {
            .footer__bottom {
                margin-bottom: 100px
            }

            .footer__wrapper {
                flex-direction: column;
                gap: 40px
            }

            .footer__grid {
                --grid-min: 40%;
                gap: var(--menu-margin)
            }
        }

        .l-404 {
            position: relative;
            height: 100vh
        }

        .l-404__header {
            display: flex;
            align-items: center;
            gap: 24px;
            padding: 70px
        }

        .l-404__logo {
            width: 72px;
            height: auto;
            fill: #fff;
            filter: drop-shadow(1px 1px 30px rgba(0, 0, 0, 0.5))
        }

        .l-404__img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            z-index: -1
        }

        @media(max-width: 1023px) {
            .l-404__header {
                justify-content: center;
                height: 100%;
                padding: 0
            }
        }

        .contact-us__desc {
            width: 510px;
            max-width: 100%
        }

        .no-results {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 400px;
            text-align: center
        }

        .no-results__msg {
            width: 240px;
            max-width: 100%
        }

        .no-results p:last-child {
            margin-bottom: 0
        }

        .ribbon-pro {
            display: inline-flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            width: 72px;
            height: 82px;
            padding: 8px;
            background: #fff;
            border-radius: var(--rounded-normal);
            line-height: 100%
        }

        .ribbon-pro__bottom {
            font-size: 10px
        }

        .ribbon-pro--black {
            background: #222;
            color: #fff
        }

        .ribbon-pro .ico-svg {
            top: -2px
        }

        .snackbar-msg {
            position: absolute;
            top: 0;
            right: 0;
            width: 460px;
            max-width: 100%;
            padding: clamp(20px, 6vw, 28px);
            background: var(--bg-secondary);
            font-size: var(--text-size-primary);
            color: #fff;
            line-height: 140%;
            border-radius: var(--rounded-normal);
            z-index: 2;
            transform: translateY(calc(-100% - 70px));
            opacity: 0;
            transition: all .4s ease-in-out
        }

        .snackbar-msg.is-show {
            opacity: 1;
            transform: translateY(72px)
        }

        .snackbar-msg__item {
            display: flex;
            gap: 30px
        }

        .snackbar-msg__close {
            position: absolute;
            top: 0;
            right: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 28px;
            height: 28px;
            cursor: pointer
        }

        .snackbar-msg__close:hover svg {
            transform: rotate(90deg)
        }

        .snackbar-msg__close svg {
            transition: all .3s
        }

        .snackbar-msg__label {
            margin-bottom: 12px;
            font-size: 10px;
            line-height: 100%
        }

        .snackbar-msg li:not(:last-child) {
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid rgba(255, 255, 255, .2)
        }

        .snackbar-msg .button:hover {
            background: #4e4e4e
        }

        .fit-video {
            position: relative;
            padding-bottom: 56.25%;
            height: 0
        }

        .fit-video iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        .lazy {
            opacity: 0;
            transition: all .6s
        }

        .lazy--hidden {
            opacity: 0
        }

        .lazy--loaded {
            opacity: 1
        }

        @media(max-width: 1280px) {
            :root {
                --pad-inner: 40px
            }

            .list-palette {
                --palette-width: 300px;
                --palette-height: 435px;
                --palette-margin: 220px;
                --palette-margin-neg: -220px
            }

            .list-palette--v {
                --palette-width: 200px;
                --palette-margin: 170px;
                --palette-margin-neg: -170px
            }
        }

        @media(max-width: 1023px) {
            :root {
                --pad-inner: 24px
            }

            .header-main__bts {
                display: none
            }

            .heading-section__left {
                justify-content: space-between;
                width: 100%
            }

            .heading-section__right {
                display: none
            }

            [class*=grid-] {
                --minthumb: 320px
            }

            [class*=grid-] .is-double {
                grid-column: auto
            }

            .box-table {
                overflow-x: auto
            }

            .box-table th {
                width: auto
            }

            .grid-sites-last {
                grid-template-columns: 1fr
            }
        }

        @media(max-width: 576px) {
            :root {
                --pad-inner: 16px;
                --rounded-large: 8px;
                --text-size-large: 20px
            }

            .header-main__ico {
                display: flex
            }

            .wrapper {
                overflow-x: hidden
            }

            .header-search__separator,
            .search-dropdown {
                display: none
            }

            .header-search.show-results {
                position: absolute;
                left: 0;
                right: 0;
                width: initial;
                margin: 0 24px
            }

            .header-search__left {
                width: 100%;
                padding: 0 20px
            }

            .header-search__content-results {
                padding: 60px 0 30px 0
            }

            .list-search-ac {
                min-width: auto
            }

            .toolbar-bts {
                --toolbar-gutter: 20px
            }

            .head-toolbar.is-sm-center {
                justify-content: center
            }

            .heading-section.sticky {
                position: static
            }

            .heading-section__title {
                min-width: auto
            }

            .c-heading .heading-1 {
                display: block;
                word-wrap: break-word
            }

            .c-heading br {
                content: ""
            }

            .c-heading br:after {
                content: " "
            }

            .c-view-all__row {
                flex-direction: column
            }

            .modal {
                padding: 0
            }

            .modal[class*="--x-large"] .modal__content {
                width: 100%
            }

            .modal[class*="--bottom"] {
                display: block
            }

            .modal__box {
                min-height: 100vh;
                border-radius: 0
            }

            .modal .bt-nav {
                top: 0;
                right: 0;
                border-radius: 0
            }

            .grid-directory {
                grid-gap: var(--gutter) 0
            }

            .grid-directory--pro {
                height: auto !important
            }

            .grid-directory--pro li {
                width: 100%
            }

            .card-directory__section {
                width: 80px
            }

            .card-directory-sp__header {
                flex-direction: column;
                gap: 20px
            }

            .card-directory-sp__header .circle-avatar {
                position: relative;
                margin-right: auto;
                font-size: 1rem
            }

            .card-directory-sp__header .circle-avatar img {
                width: 30px
            }

            .card-directory-sp .swiper {
                width: 100%
            }

            .card-directory-sp .swiper-pagination {
                margin-top: 20px
            }

            .swiper-button-disabled {
                display: none
            }

            .slider-sites__nav {
                justify-content: center
            }

            .card-banner--s2 .card-banner__photo img {
                opacity: .2
            }

            .card-banner--s2 .sticker-svg {
                top: auto;
                left: auto;
                bottom: 10%;
                right: 10%
            }

            .total-grid {
                text-align: center
            }

            .tags-info {
                grid-template-columns: 100%;
                grid-gap: 1em
            }

            .tags-info__read-more {
                flex-direction: column
            }

            .tags-info__read-more .link-underlined {
                margin-right: auto
            }

            .c-tags-row+.tags-info {
                margin-top: 40px
            }

            .header-col {
                flex-direction: column;
                gap: 20px
            }

            .dropdown-tags .list-tags {
                gap: 8px
            }

            .dropdown-tags .button {
                height: 28px;
                padding: 0 8px;
                font-size: var(--text-size-small)
            }

            .m-login__container {
                flex-direction: column
            }

            .has-many-credits .avatar-name__name {
                display: none
            }

            .has-many-credits .avatar-name__link {
                gap: 0
            }

            .cookies-popup {
                bottom: 0;
                right: 0;
                width: 100%;
                border-radius: 0
            }
        }

        .choices [hidden] {
            display: none !important
        }

        .choices {
            position: relative;
            font-size: 16px
        }

        .choices:focus {
            outline: none
        }

        .choices.is-disabled .choices__inner,
        .choices.is-disabled .choices__input {
            cursor: not-allowed;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none
        }

        .choices.is-disabled .choices__item {
            cursor: not-allowed
        }

        .choices[data-type*=select-one] {
            cursor: pointer
        }

        .choices[data-type*=select-one] .choices__input {
            display: block;
            width: 100%;
            padding: 10px;
            border-bottom: 1px solid var(--border-input);
            margin: 0
        }

        .choices[data-type*=select-one]:after {
            content: "";
            position: absolute;
            top: 50%;
            right: 24px;
            width: 12px;
            height: 12px;
            margin-top: -4px;
            border: 2px solid #a7a7a7;
            border-top: 0;
            border-left: 0;
            transform: rotate(45deg) translateY(-50%);
            transform-origin: center;
            pointer-events: none
        }

        .choices[data-type*=select-one].is-open:after {
            right: 17px;
            margin-top: -4px;
            transform: rotate(-135deg) translateY(-50%)
        }

        .choices[data-type*=select-multiple] .choices__inner,
        .choices[data-type*=text] .choices__inner {
            padding-bottom: 5px;
            cursor: text
        }

        input[type=search].choices__input::-webkit-search-cancel-button {
            display: none
        }

        .choices__inner {
            display: inline-block;
            width: 100%;
            min-height: var(--height-input);
            border-bottom: 1px solid var(--border-input);
            background-color: var(--bg-input);
            font-size: var(--text-size-primary);
            vertical-align: top;
            overflow: hidden
        }

        .choices__list--single {
            display: inline-block;
            padding-left: var(--pad-input);
            width: 100%;
            line-height: var(--height-input)
        }

        .choices__list--single .choices__button {
            display: none
        }

        .choices__list--multiple {
            display: inline;
            padding-bottom: 5px
        }

        .choices__list--multiple .choices__item {
            position: relative;
            display: inline-block;
            vertical-align: middle;
            margin: 5px 0 0 5px;
            padding: 11px;
            max-width: 100%;
            border-radius: 29px;
            background-color: #e9e9e9;
            color: #222;
            font-weight: normal;
            line-height: 13px;
            cursor: default;
            word-break: break-all
        }

        .choices__list--multiple .choices__item[data-deletable] {
            padding-right: 25px
        }

        .choices__list--multiple+.choices__input {
            min-width: auto
        }

        .choices__list--dropdown {
            display: none;
            position: absolute;
            width: 100%;
            background: #fff;
            border: 1px solid #e9e9e9;
            top: 100%;
            margin-top: -1px;
            overflow: hidden;
            word-break: break-all;
            z-index: 2
        }

        .choices__list--dropdown.is-active {
            display: block
        }

        .choices__list--dropdown .choices__list {
            position: relative;
            max-height: 390px;
            overflow: auto;
            -webkit-overflow-scrolling: touch;
            will-change: scroll-position
        }

        .choices__list--dropdown .choices__item {
            position: relative;
            padding: 10px 15px;
            line-height: normal;
            transition: all .3s
        }

        .choices__list--dropdown .choices__item--selectable.is-highlighted {
            background-color: #f3f3f3
        }

        .choices__item {
            cursor: default
        }

        .choices__item--selectable {
            cursor: pointer
        }

        .choices__item--disabled {
            cursor: not-allowed;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            opacity: .5
        }

        .choices__button {
            position: absolute;
            top: 13px;
            right: 8px;
            display: block;
            width: 12px;
            height: 12px;
            border: none;
            text-indent: -23em;
            overflow: hidden;
            cursor: pointer
        }

        .choices__button:before,
        .choices__button:after {
            content: "";
            display: block;
            position: absolute;
            top: 4px;
            left: 0px;
            width: 12px;
            height: 1px;
            background-color: var(--color-primary);
            transform: translateZ(0)
        }

        .choices__button:before {
            transform: translateZ(0) rotate(-45deg)
        }

        .choices__button:after {
            transform: translateZ(0) rotate(45deg)
        }

        .choices__button:hover {
            opacity: .7
        }

        .choices__button:focus {
            outline: none
        }

        .choices__input {
            min-width: 100%;
            margin-left: 15px;
            padding: 10px 0 0 0;
            border: 0;
            border-radius: 0;
            background: transparent;
            vertical-align: middle
        }

        .choices__input::-moz-placeholder {
            color: #a7a7a7;
            font-weight: 300
        }

        .choices__input::placeholder {
            color: #a7a7a7;
            font-weight: 300
        }

        .choices__input:focus {
            outline: 0
        }

        .circle-color .choices__list--multiple .choices__item {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            pointer-events: none
        }

        .circle-color .choices__list--multiple .choices__item:before {
            content: "";
            display: block;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: var(--color-tag, white)
        }

        .circle-color .choices__button {
            pointer-events: all
        }

        .grecaptcha-badge {
            visibility: hidden;
        }
    </style>

    <link rel="stylesheet" type="text/css" media="screen" href="https://assets.awwwards.com/assets/redesign/css/home.css" />

    <link rel="stylesheet" type="text/css" media="screen" href="https://assets.awwwards.com/assets/redesign/css/element.css" />

    <style>
        :root {
            --ch-bg: #dbe6e7;
        }
    </style>
    <style>
        .pointer-none {
            pointer-events: none
        }

        .relative {
            position: relative
        }

        .mb-0 {
            margin-bottom: 0
        }

        .mt-0 {
            margin-top: 0
        }

        .m-0 {
            margin: 0
        }

        .mt-lg {
            margin-top: clamp(1em, 2vw, 2em)
        }

        .mb-lg {
            margin-bottom: clamp(1em, 2vw, 2em)
        }

        .mb-xl {
            margin-bottom: clamp(1em, 4vw, 3em)
        }

        .p-0 {
            padding: 0
        }

        .pt-0 {
            padding-top: 0
        }

        .pb-0 {
            padding-bottom: 0
        }

        .no-scroll {
            overflow: hidden
        }

        .no-pointer {
            pointer-events: none
        }

        .nowrap {
            white-space: nowrap
        }

        .text-uppercase {
            text-transform: uppercase
        }

        .text-default {
            font-size: var(--text-size-primary);
            font-weight: 300
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-bold {
            font-weight: bold
        }

        .text-regular {
            font-weight: 400
        }

        .text-strikethrough {
            text-decoration: line-through
        }

        .text-red {
            color: var(--color-errors)
        }

        .ar-sites {
            width: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            aspect-ratio: var(--img-resizing-site) !important
        }

        .ar-paronamic {
            width: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            aspect-ratio: 2/1 !important
        }

        .ar-desktop {
            width: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            aspect-ratio: var(--img-resizing-desktop) !important
        }

        .color-primary {
            color: var(--color-primary)
        }

        .hidden {
            display: none !important
        }

        .is-hidden {
            display: none !important
        }

        .is-grab {
            cursor: grab
        }

        .is-grabbing {
            cursor: grabbing
        }

        .cursor-pointer {
            cursor: pointer
        }

        .rounded-small {
            border-radius: var(--rounded-small)
        }

        .rounded-normal {
            border-radius: var(--rounded-normal)
        }

        .rounded-large {
            border-radius: var(--rounded-large)
        }

        .box-width {
            max-width: 100%;
            width: var(--widthBox)
        }

        .box-width--auto {
            margin: 0 auto
        }

        @media(max-width: 1023px) {
            .hidden-lg {
                display: none
            }
        }
    </style>
</head>