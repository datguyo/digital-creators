@extends('layouts.app')

@section('content')
    <section class="mb-0 ml-0 mr-0 mt-0 pb-20 pl-0 pr-0 pt-20">
        <div class="max-w-[80rem] mt-0 mr-auto mb-0 ml-auto pt-0 pr-8 pb-0 pl-8 md:pr-6 md:pl-6 xl:pr-10 xl:pl-10">

            <div class="flex flex-col items-center">
                <div class="bg-[#f4f4f5] bg-opacity-100 flex h-[250px] items-center justify-center overflow-hidden w-[100%]">
                    <img class="h-auto max-w-full w-[100%]" src="{{ asset('storage/Images/' . $user->cover) }}" sizes="200vw" />
                </div>

                <img class="h-auto max-w-full -mt-24 border-8 border-opacity-100 border-solid border-white mb-0 ml-0 mr-0 rounded-full w-[200px]" src="{{ $user->photo ? asset('storage/Images/' . $user->photo) : asset('storage/Images/avatar.png') }}" srcset='' sizes="400px" >
            </div>

            <div class="flex flex-col items-center mb-0 ml-0 mr-0 mt-6">
                <h1 class="font-semibold m-0 font-poppins text-4xl text-2xl text-center">{{ $user->name ?? null }}</h1>

                <span class="font-poppins text-[#71717a] text-opacity-100">{{ $user->position ?? null }}</span>

                <div class="flex items-center mb-0 ml-0 mr-0 mt-3 sm:flex-col sm:items-center sm:justify-center sm:space-x-0 sm:space-y-2 space-x-6">
                    <div class="flex items-center space-x-1.5">
                        <i class="inline-block h-auto text-[#0d9488] text-opacity-100 w-[18px]">
                            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.01 5.838a1 1 0 011-1H20a1 1 0 011 1v11.324a2 2 0 01-2 2H5a2 2 0 01-2-2v-11c0-.048.003-.094.01-.14v-.184zM5 8.062v9.1h14v-9.1l-4.879 4.879a3 3 0 01-4.242 0L5 8.06zm1.572-1.256h10.856l-4.72 4.72a1 1 0 01-1.415 0l-4.72-4.72z" fill="currentColor"></path>
                            </svg>
                        </i>
                        <a class="font-poppins no-underline text-black text-opacity-100 text-sm" href="mailto:{{ $user->email ?? null }}">{{ $user->email ?? null }}</a>
                    </div>

                    <div class="bg-[#d4d4d8] bg-opacity-100 h-[4px] rounded-full w-[4px]">
                        <span class="hidden">Enter your text...</span>
                    </div>

                    <div class="flex items-center space-x-1.5">
                        <i class="inline-block h-auto text-[#0d9488] text-opacity-100 w-[18px]">
                            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24">
                                <path d="M13 16h-2v2h2v-2z" fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5 4a2 2 0 012-2h10a2 2 0 012 2v16a2 2 0 01-2 2H7a2 2 0 01-2-2V4zm2 0h10v16H7V4z" fill="currentColor"></path>
                            </svg>
                        </i>

                        <span>{{ $user->phone_number ?? null }}</span>
                    </div>
                    <div class="bg-[#d4d4d8] bg-opacity-100 h-[4px] rounded-full w-[4px]">
                        <span class="hidden">Enter your text...</span>
                    </div>

                    <div class="flex items-center space-x-1.5">
                        <i class="inline-block h-auto text-[#0d9488] text-opacity-100 w-[18px]">
                            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11 19v3h2v-3h1a4 4 0 000-8h-1V7h2v2h2V5h-4V2h-2v3h-1a4 4 0 100 8h1v4H9v-2H7v4h4zm2-2h1a2 2 0 100-4h-1v4zm-2-6V7h-1a2 2 0 100 4h1z" fill="currentColor"></path>
                            </svg>
                        </i>

                        <span>{{ $user->hour_price ?? null }} per hour</span>
                    </div>
                </div>
            </div>

            <div class="mb-0 ml-0 mr-0 mt-10">
                <h2 class="font-semibold mb-0 font-poppins text-3xl">Portfolio</h2>

                <div class="gap-10 grid grid-cols-4 mb-0 md:grid-cols-2 ml-0 mr-0 mt-8 sm:grid-cols-1">
                    @foreach($user->work as $work)
                        <div>
                            <div class="bg-[#f4f4f5] bg-opacity-100 h-[200px] mt-0 mr-0 mb-4 ml-0 relative overflow-hidden flex items-center justify-center">
                                <img class="w-[100%]" src="{{ asset('storage/Images/' . $work->photo) }}" sizes="200vw" />
                            </div>

                            <h5 class="text-xl font-semibold font-poppins leading-tight mb-2 ml-0 mr-0 mt-0">{{ $work->name ?? null }}</h5>
                            <p class="font-poppins text-[#71717a] text-opacity-100">{{ $work->description ?? null }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection

@section('css')
    <style>
        .hidden {
            display: none;
        }

        /*! tailwindcss v2.2.0 | MIT License | https://tailwindcss.com */
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        /* Document ========================================================================== */
        /** * 1. Correct the line height in all browsers. * 2. Prevent adjustments of font size after orientation changes in iOS. */
        html {
            line-height: 1.15;
            /* 1 */
            -webkit-text-size-adjust: 100%;
            /* 2 */
        }

        /* Sections ========================================================================== */
        /** * Remove the margin in all browsers. */
        body {
            margin: 0;
        }

        /** * Render the `main` element consistently in IE. */
        main {
            display: block;
        }

        /** * Correct the font size and margin on `h1` elements within `section` and * `article` contexts in Chrome, Firefox, and Safari. */
        h1 {
            font-size: 2em;
            margin: 0.67em 0;
        }

        /* Grouping content ========================================================================== */
        /** * 1. Add the correct box sizing in Firefox. * 2. Show the overflow in Edge and IE. */
        hr {
            box-sizing: content-box;
            /* 1 */
            height: 0;
            /* 1 */
            overflow: visible;
            /* 2 */
        }

        /** * 1. Correct the inheritance and scaling of font size in all browsers. * 2. Correct the odd `em` font sizing in all browsers. */
        pre {
            font-family: monospace, monospace;
            /* 1 */
            font-size: 1em;
            /* 2 */
        }

        /* Text-level semantics ========================================================================== */
        /** * Remove the gray background on active links in IE 10. */
        a {
            background-color: transparent;
        }

        /** * 1. Remove the bottom border in Chrome 57- * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari. */
        abbr[title] {
            border-bottom: none;
            /* 1 */
            text-decoration: underline;
            /* 2 */
            text-decoration: underline dotted;
            /* 2 */
        }

        /** * Add the correct font weight in Chrome, Edge, and Safari. */
        b,
        strong {
            font-weight: bolder;
        }

        /** * 1. Correct the inheritance and scaling of font size in all browsers. * 2. Correct the odd `em` font sizing in all browsers. */
        code,
        kbd,
        samp {
            font-family: monospace, monospace;
            /* 1 */
            font-size: 1em;
            /* 2 */
        }

        /** * Add the correct font size in all browsers. */
        small {
            font-size: 80%;
        }

        /** * Prevent `sub` and `sup` elements from affecting the line height in * all browsers. */
        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
        }

        sub {
            bottom: -0.25em;
        }

        sup {
            top: -0.5em;
        }

        /* Embedded content ========================================================================== */
        /** * Remove the border on images inside links in IE 10. */
        img {
            border-style: none;
        }

        /* Forms ========================================================================== */
        /** * 1. Change the font styles in all browsers. * 2. Remove the margin in Firefox and Safari. */
        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            /* 1 */
            font-size: 100%;
            /* 1 */
            line-height: 1.15;
            /* 1 */
            margin: 0;
            /* 2 */
        }

        /** * Show the overflow in IE. * 1. Show the overflow in Edge. */
        button,
        input {
            /* 1 */
            overflow: visible;
        }

        /** * Remove the inheritance of text transform in Edge, Firefox, and IE. * 1. Remove the inheritance of text transform in Firefox. */
        button,
        select {
            /* 1 */
            text-transform: none;
        }

        /** * Correct the inability to style clickable types in iOS and Safari. */
        button,
        [type="button"],
        [type="reset"],
        [type="submit"] {
            -webkit-appearance: button;
        }

        /** * Remove the inner border and padding in Firefox. */
        button::-moz-focus-inner,
        [type="button"]::-moz-focus-inner,
        [type="reset"]::-moz-focus-inner,
        [type="submit"]::-moz-focus-inner {
            border-style: none;
            padding: 0;
        }

        /** * Restore the focus styles unset by the previous rule. */
        button:-moz-focusring,
        [type="button"]:-moz-focusring,
        [type="reset"]:-moz-focusring,
        [type="submit"]:-moz-focusring {
            outline: 1px dotted ButtonText;
        }

        /** * Correct the padding in Firefox. */
        fieldset {
            padding: 0.35em 0.75em 0.625em;
        }

        /** * 1. Correct the text wrapping in Edge and IE. * 2. Correct the color inheritance from `fieldset` elements in IE. * 3. Remove the padding so developers are not caught out when they zero out * `fieldset` elements in all browsers. */
        legend {
            box-sizing: border-box;
            /* 1 */
            color: inherit;
            /* 2 */
            display: table;
            /* 1 */
            max-width: 100%;
            /* 1 */
            padding: 0;
            /* 3 */
            white-space: normal;
            /* 1 */
        }

        /** * Add the correct vertical alignment in Chrome, Firefox, and Opera. */
        progress {
            vertical-align: baseline;
        }

        /** * Remove the default vertical scrollbar in IE 10+. */
        textarea {
            overflow: auto;
        }

        /** * 1. Add the correct box sizing in IE 10. * 2. Remove the padding in IE 10. */
        [type="checkbox"],
        [type="radio"] {
            box-sizing: border-box;
            /* 1 */
            padding: 0;
            /* 2 */
        }

        /** * Correct the cursor style of increment and decrement buttons in Chrome. */
        [type="number"]::-webkit-inner-spin-button,
        [type="number"]::-webkit-outer-spin-button {
            height: auto;
        }

        /** * 1. Correct the odd appearance in Chrome and Safari. * 2. Correct the outline style in Safari. */
        [type="search"] {
            -webkit-appearance: textfield;
            /* 1 */
            outline-offset: -2px;
            /* 2 */
        }

        /** * Remove the inner padding in Chrome and Safari on macOS. */
        [type="search"]::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        /** * 1. Correct the inability to style clickable types in iOS and Safari. * 2. Change font properties to `inherit` in Safari. */
        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            /* 1 */
            font: inherit;
            /* 2 */
        }

        /* Interactive ========================================================================== */
        /* * Add the correct display in Edge, IE 10+, and Firefox. */
        details {
            display: block;
        }

        /* * Add the correct display in all browsers. */
        summary {
            display: list-item;
        }

        /* Misc ========================================================================== */
        /** * Add the correct display in IE 10+. */
        template {
            display: none;
        }

        /** * Add the correct display in IE 10. */
        [hidden] {
            display: none;
        }

        /** * Manually forked from SUIT CSS Base: https://github.com/suitcss/base * A thin layer on top of normalize.css that provides a starting point more * suitable for web applications. */
        /** * Removes the default spacing and border for appropriate elements. */
        blockquote,
        dl,
        dd,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        figure,
        p,
        pre {
            margin: 0;
        }

        button {
            background-color: transparent;
            background-image: none;
        }

        /** * Work around a Firefox/IE bug where the transparent `button` background * results in a loss of the default `button` focus styles. */
        button:focus {
            outline: 1px dotted;
            outline: 5px auto -webkit-focus-ring-color;
        }

        fieldset {
            margin: 0;
            padding: 0;
        }

        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        /** * Tailwind custom reset styles */
        /** * 1. Use the user's configured `sans` font-family (with Tailwind's default * sans-serif font stack as a fallback) as a sane default. * 2. Use Tailwind's default "normal" line-height so the user isn't forced * to override it to ensure consistency even when using the default theme. */
        html {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            /* 1 */
            line-height: 1.5;
            /* 2 */
        }

        /** * Inherit font-family and line-height from `html` so users can set them as * a class directly on the `html` element. */
        body {
            font-family: inherit;
            line-height: inherit;
        }

        /** * 1. Prevent padding and border from affecting element width. * * We used to set this in the html element and inherit from * the parent element for everything else. This caused issues * in shadow-dom-enhanced elements like
                    <details>
                        where the content * is wrapped by a div with box-sizing set to `content-box`. * * https://github.com/mozdevs/cssremedy/issues/4 * * * 2. Allow adding a border to an element by just adding a border-width. * * By default, the way the browser specifies that an element should have no * border is by setting it's border-style to `none` in the user-agent * stylesheet. * * In order to easily add borders to elements by just setting the `border-width` * property, we change the default border-style for all elements to `solid`, and * use border-width to hide them instead. This way our `border` utilities only * need to set the `border-width` property instead of the entire `border` * shorthand, making our border utilities much more straightforward to compose. * * https://github.com/tailwindcss/tailwindcss/pull/116 */
        *,
        ::before,
        ::after {
            box-sizing: border-box;
            /* 1 */
            border-width: 0;
            /* 2 */
            border-style: solid;
            /* 2 */
            border-color: currentColor;
            /* 2 */
        }

        /* * Ensure horizontal rules are visible by default */
        hr {
            border-top-width: 1px;
        }

        /** * Undo the `border-style: none` reset that Normalize applies to images so that * our `border-{width}` utilities have the expected effect. * * The Normalize reset is unnecessary for us since we default the border-width * to 0 on all elements. * * https://github.com/tailwindcss/tailwindcss/issues/362 */
        img {
            border-style: solid;
        }

        textarea {
            resize: vertical;
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af;
        }

        button,
        [role="button"] {
            cursor: pointer;
        }

        table {
            border-collapse: collapse;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit;
        }

        /** * Reset links to optimize for opt-in styling instead of * opt-out. */
        a {
            color: inherit;
            text-decoration: inherit;
        }

        /** * Reset form element properties that are easy to forget to * style explicitly so you don't inadvertently introduce * styles that deviate from your design system. These styles * supplement a partial reset that is already applied by * normalize.css. */
        button,
        input,
        optgroup,
        select,
        textarea {
            padding: 0;
            line-height: inherit;
            color: inherit;
        }

        /** * Use the configured 'mono' font family for elements that * are expected to be rendered with a monospace font, falling * back to the system monospace stack if there is no configured * 'mono' font family. */
        pre,
        code,
        kbd,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        }

        /** * 1. Make replaced elements `display: block` by default as that's * the behavior you want almost all of the time. Inspired by * CSS Remedy, with `svg` added as well. * * https://github.com/mozdevs/cssremedy/issues/14 * * 2. Add `vertical-align: middle` to align replaced elements more * sensibly by default when overriding `display` by adding a * utility like `inline`. * * This can trigger a poorly considered linting error in some * tools but is included by design. * * https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210 */
        img,
        svg,
        video,
        canvas,
        audio,
        iframe,
        embed,
        object {
            display: block;
            /* 1 */
            vertical-align: middle;
            /* 2 */
        }

        /** * Constrain images and videos to the parent width and preserve * their intrinsic aspect ratio. * * https://github.com/mozdevs/cssremedy/issues/14 */
        img,
        video {
            max-width: 100%;
            height: auto;
        }

        *,
        ::before,
        ::after {
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            --tw-border-opacity: 1;
            border-color: rgba(229, 231, 235, var(--tw-border-opacity));
            --tw-shadow: 0 0 #0000;
            --tw-ring-inset: var(--tw-empty, /*!*/ /*!*/
            );
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgba(59, 130, 246, 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-blur: var(--tw-empty, /*!*/ /*!*/
            );
            --tw-brightness: var(--tw-empty, /*!*/ /*!*/
            );
            --tw-contrast: var(--tw-empty, /*!*/ /*!*/
            );
            --tw-grayscale: var(--tw-empty, /*!*/ /*!*/
            );
            --tw-hue-rotate: var(--tw-empty, /*!*/ /*!*/
            );
            --tw-invert: var(--tw-empty, /*!*/ /*!*/
            );
            --tw-saturate: var(--tw-empty, /*!*/ /*!*/
            );
            --tw-sepia: var(--tw-empty, /*!*/ /*!*/
            );
            --tw-drop-shadow: var(--tw-empty, /*!*/ /*!*/
            );
            --tw-filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
            --tw-backdrop-blur: var(--tw-empty, /*!*/ /*!*/
            );
            --tw-backdrop-brightness: var(--tw-empty, /*!*/ /*!*/
            );
            --tw-backdrop-contrast: var(--tw-empty, /*!*/ /*!*/
            );
            --tw-backdrop-grayscale: var(--tw-empty, /*!*/ /*!*/
            );
            --tw-backdrop-hue-rotate: var(--tw-empty, /*!*/ /*!*/
            );
            --tw-backdrop-invert: var(--tw-empty, /*!*/ /*!*/
            );
            --tw-backdrop-opacity: var(--tw-empty, /*!*/ /*!*/
            );
            --tw-backdrop-saturate: var(--tw-empty, /*!*/ /*!*/
            );
            --tw-backdrop-sepia: var(--tw-empty, /*!*/ /*!*/
            );
            --tw-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
        }

        .container {
            width: 100%;
        }

        @media (min-width: 1536px) {
            .container {
                max-width: 1536px;
            }
        }

        @media (min-width: 1920px) {
            .container {
                max-width: 1920px;
            }
        }

        .visible {
            visibility: visible;
        }

        .fixed {
            position: fixed;
        }

        .absolute {
            position: absolute;
        }

        .relative {
            position: relative;
        }

        .top-0 {
            top: 0px;
        }

        .right-0 {
            right: 0px;
        }

        .bottom-0 {
            bottom: 0px;
        }

        .left-0 {
            left: 0px;
        }

        .z-30 {
            z-index: 30;
        }

        .col-span-4 {
            grid-column: span 4 / span 4;
        }

        .m-0 {
            margin: 0px;
        }

        .mt-0 {
            margin-top: 0px;
        }

        .mr-auto {
            margin-right: auto;
        }

        .mb-0 {
            margin-bottom: 0px;
        }

        .ml-auto {
            margin-left: auto;
        }

        .mr-12 {
            margin-right: 3rem;
        }

        .ml-0 {
            margin-left: 0px;
        }

        .mr-0 {
            margin-right: 0px;
        }

        .mt-20 {
            margin-top: 5rem;
        }

        .mr-2 {
            margin-right: 0.5rem;
        }

        .mt-10 {
            margin-top: 2.5rem;
        }

        .mb-8 {
            margin-bottom: 2rem;
        }

        .-ml-px {
            margin-left: -1px;
        }

        .mb-2 {
            margin-bottom: 0.5rem;
        }

        .mt-6 {
            margin-top: 1.5rem;
        }

        .-mt-24 {
            margin-top: -6rem;
        }

        .mt-3 {
            margin-top: 0.75rem;
        }

        .mt-8 {
            margin-top: 2rem;
        }

        .mb-4 {
            margin-bottom: 1rem;
        }

        .block {
            display: block;
        }

        .inline-block {
            display: inline-block;
        }

        .inline {
            display: inline;
        }

        .flex {
            display: flex;
        }

        .table {
            display: table;
        }

        .grid {
            display: grid;
        }

        .contents {
            display: contents;
        }

        .hidden {
            display: none;
        }

        .h-auto {
            height: auto;
        }

        .h-\[44px\] {
            height: 44px;
        }

        .h-\[250px\] {
            height: 250px;
        }

        .h-\[4px\] {
            height: 4px;
        }

        .h-\[200px\] {
            height: 200px;
        }

        .min-h-full {
            min-height: 100%;
        }

        .w-6 {
            width: 1.5rem;
        }

        .w-full {
            width: 100%;
        }

        .w-\[100\%\] {
            width: 100%;
        }

        .w-\[44px\] {
            width: 44px;
        }

        .w-\[16px\] {
            width: 16px;
        }

        .w-\[200px\] {
            width: 200px;
        }

        .w-\[18px\] {
            width: 18px;
        }

        .w-\[4px\] {
            width: 4px;
        }

        .max-w-full {
            max-width: 100%;
        }

        .max-w-\[80rem\] {
            max-width: 80rem;
        }

        .flex-shrink {
            flex-shrink: 1;
        }

        .border-collapse {
            border-collapse: collapse;
        }

        .cursor-pointer {
            cursor: pointer;
        }

        .cursor-default {
            cursor: default;
        }

        .resize {
            resize: both;
        }

        .grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .grid-cols-4 {
            grid-template-columns: repeat(4, minmax(0, 1fr));
        }

        .flex-col {
            flex-direction: column;
        }

        .content-start {
            align-content: flex-start;
        }

        .items-start {
            align-items: flex-start;
        }

        .items-center {
            align-items: center;
        }

        .items-stretch {
            align-items: stretch;
        }

        .justify-center {
            justify-content: center;
        }

        .justify-between {
            justify-content: space-between;
        }

        .gap-10 {
            gap: 2.5rem;
        }

        .space-x-6 > :not([hidden]) ~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(1.5rem * var(--tw-space-x-reverse));
            margin-left: calc(1.5rem * calc(1 - var(--tw-space-x-reverse)));
        }

        .space-x-0 > :not([hidden]) ~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(0px * var(--tw-space-x-reverse));
            margin-left: calc(0px * calc(1 - var(--tw-space-x-reverse)));
        }

        .space-y-11 > :not([hidden]) ~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(2.75rem * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(2.75rem * var(--tw-space-y-reverse));
        }

        .space-x-2 > :not([hidden]) ~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(0.5rem * var(--tw-space-x-reverse));
            margin-left: calc(0.5rem * calc(1 - var(--tw-space-x-reverse)));
        }

        .space-x-1 > :not([hidden]) ~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(0.25rem * var(--tw-space-x-reverse));
            margin-left: calc(0.25rem * calc(1 - var(--tw-space-x-reverse)));
        }

        .space-x-1\.5 > :not([hidden]) ~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(0.375rem * var(--tw-space-x-reverse));
            margin-left: calc(0.375rem * calc(1 - var(--tw-space-x-reverse)));
        }

        .divide-none > :not([hidden]) ~ :not([hidden]) {
            border-style: none;
        }

        .overflow-hidden {
            overflow: hidden;
        }

        .break-words {
            overflow-wrap: break-word;
        }

        .rounded-md {
            border-radius: 0.375rem;
        }

        .rounded-full {
            border-radius: 9999px;
        }

        .rounded-lg {
            border-radius: 0.5rem;
        }

        .rounded-none {
            border-radius: 0px;
        }

        .rounded-tl-md {
            border-top-left-radius: 0.375rem;
        }

        .rounded-bl-md {
            border-bottom-left-radius: 0.375rem;
        }

        .rounded-br-none {
            border-bottom-right-radius: 0px;
        }

        .rounded-tr-none {
            border-top-right-radius: 0px;
        }

        .rounded-tr-md {
            border-top-right-radius: 0.375rem;
        }

        .rounded-br-md {
            border-bottom-right-radius: 0.375rem;
        }

        .rounded-tl-none {
            border-top-left-radius: 0px;
        }

        .rounded-bl-none {
            border-bottom-left-radius: 0px;
        }

        .border {
            border-width: 1px;
        }

        .border-0 {
            border-width: 0px;
        }

        .border-8 {
            border-width: 8px;
        }

        .border-solid {
            border-style: solid;
        }

        .border-white {
            --tw-border-opacity: 1;
            border-color: rgba(255, 255, 255, var(--tw-border-opacity));
        }

        .border-\[\#0f766e\] {
            --tw-border-opacity: 1;
            border-color: rgba(15, 118, 110, var(--tw-border-opacity));
        }

        .border-\[\#134e4a\] {
            --tw-border-opacity: 1;
            border-color: rgba(19, 78, 74, var(--tw-border-opacity));
        }

        .border-opacity-100 {
            --tw-border-opacity: 1;
        }

        .border-opacity-10 {
            --tw-border-opacity: .1;
        }

        .border-opacity-20 {
            --tw-border-opacity: .2;
        }

        .border-opacity-25 {
            --tw-border-opacity: 0.25;
        }

        .bg-transparent {
            background-color: transparent;
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
        }

        .bg-\[\#115e59\] {
            --tw-bg-opacity: 1;
            background-color: rgba(17, 94, 89, var(--tw-bg-opacity));
        }

        .bg-\[\#5eead4\] {
            --tw-bg-opacity: 1;
            background-color: rgba(94, 234, 212, var(--tw-bg-opacity));
        }

        .bg-\[\#f4f4f5\] {
            --tw-bg-opacity: 1;
            background-color: rgba(244, 244, 245, var(--tw-bg-opacity));
        }

        .bg-\[\#d4d4d8\] {
            --tw-bg-opacity: 1;
            background-color: rgba(212, 212, 216, var(--tw-bg-opacity));
        }

        .bg-opacity-100 {
            --tw-bg-opacity: 1;
        }

        .bg-opacity-50 {
            --tw-bg-opacity: .5;
        }

        .p-8 {
            padding: 2rem;
        }

        .p-2 {
            padding: 0.5rem;
        }

        .p-2\.5 {
            padding: 0.625rem;
        }

        .pt-0 {
            padding-top: 0px;
        }

        .pr-8 {
            padding-right: 2rem;
        }

        .pb-0 {
            padding-bottom: 0px;
        }

        .pl-8 {
            padding-left: 2rem;
        }

        .pt-2 {
            padding-top: 0.5rem;
        }

        .pr-5 {
            padding-right: 1.25rem;
        }

        .pb-2 {
            padding-bottom: 0.5rem;
        }

        .pl-5 {
            padding-left: 1.25rem;
        }

        .pr-0 {
            padding-right: 0px;
        }

        .pl-0 {
            padding-left: 0px;
        }

        .pb-20 {
            padding-bottom: 5rem;
        }

        .pt-20 {
            padding-top: 5rem;
        }

        .pr-3 {
            padding-right: 0.75rem;
        }

        .pl-3 {
            padding-left: 0.75rem;
        }

        .pb-2\.5 {
            padding-bottom: 0.625rem;
        }

        .pt-2\.5 {
            padding-top: 0.625rem;
        }

        .text-center {
            text-align: center;
        }

        .font-poppins {
            font-family: Poppins, sans-serif;
        }

        .text-2xl {
            font-size: 1.5rem;
        }

        .text-base {
            font-size: 1rem;
        }

        .text-sm {
            font-size: 0.875rem;
        }

        .text-lg {
            font-size: 1.125rem;
        }

        .text-xs {
            font-size: 0.75rem;
        }

        .text-4xl {
            font-size: 2.25rem;
        }

        .text-3xl {
            font-size: 1.875rem;
        }

        .text-xl {
            font-size: 1.25rem;
        }

        .font-semibold {
            font-weight: 600;
        }

        .font-normal {
            font-weight: 400;
        }

        .font-light {
            font-weight: 300;
        }

        .font-bold {
            font-weight: 700;
        }

        .leading-relaxed {
            line-height: 1.625;
        }

        .leading-tight {
            line-height: 1.25;
        }

        .tracking-wide {
            letter-spacing: 0.025em;
        }

        .text-white {
            --tw-text-opacity: 1;
            color: rgba(255, 255, 255, var(--tw-text-opacity));
        }

        .text-black {
            --tw-text-opacity: 1;
            color: rgba(0, 0, 0, var(--tw-text-opacity));
        }

        .text-\[\#ccfbf1\] {
            --tw-text-opacity: 1;
            color: rgba(204, 251, 241, var(--tw-text-opacity));
        }

        .text-\[\#5eead4\] {
            --tw-text-opacity: 1;
            color: rgba(94, 234, 212, var(--tw-text-opacity));
        }

        .text-\[\#134e4a\] {
            --tw-text-opacity: 1;
            color: rgba(19, 78, 74, var(--tw-text-opacity));
        }

        .text-\[\#71717a\] {
            --tw-text-opacity: 1;
            color: rgba(113, 113, 122, var(--tw-text-opacity));
        }

        .text-\[\#0d9488\] {
            --tw-text-opacity: 1;
            color: rgba(13, 148, 136, var(--tw-text-opacity));
        }

        .text-opacity-100 {
            --tw-text-opacity: 1;
        }

        .text-opacity-75 {
            --tw-text-opacity: 0.75;
        }

        .underline {
            text-decoration: underline;
        }

        .no-underline {
            text-decoration: none;
        }

        .shadow-xl {
            --tw-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .shadow-none {
            --tw-shadow: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .hover\:border-\[\#0d9488\]:hover {
            --tw-border-opacity: 1;
            border-color: rgba(13, 148, 136, var(--tw-border-opacity));
        }

        .hover\:border-opacity-100:hover {
            --tw-border-opacity: 1;
        }

        .hover\:bg-transparent:hover {
            background-color: transparent;
        }

        .hover\:bg-\[\#99f6e4\]:hover {
            --tw-bg-opacity: 1;
            background-color: rgba(153, 246, 228, var(--tw-bg-opacity));
        }

        .hover\:bg-\[\#ccfbf1\]:hover {
            --tw-bg-opacity: 1;
            background-color: rgba(204, 251, 241, var(--tw-bg-opacity));
        }

        .hover\:bg-opacity-100:hover {
            --tw-bg-opacity: 1;
        }

        .hover\:bg-opacity-50:hover {
            --tw-bg-opacity: .5;
        }

        .hover\:text-white:hover {
            --tw-text-opacity: 1;
            color: rgba(255, 255, 255, var(--tw-text-opacity));
        }

        .hover\:text-\[\#134e4a\]:hover {
            --tw-text-opacity: 1;
            color: rgba(19, 78, 74, var(--tw-text-opacity));
        }

        .hover\:text-opacity-100:hover {
            --tw-text-opacity: 1;
        }

        .focus\:outline-none:focus {
            outline: 2px solid transparent;
            outline-offset: 2px;
        }

        .disabled\:bg-\[\#e4e4e7\]:disabled {
            --tw-bg-opacity: 1;
            background-color: rgba(228, 228, 231, var(--tw-bg-opacity));
        }

        .disabled\:text-\[\#a1a1aa\]:disabled {
            --tw-text-opacity: 1;
            color: rgba(161, 161, 170, var(--tw-text-opacity));
        }

        @media (min-width: 1536px) {
            .xl\:pr-10 {
                padding-right: 2.5rem;
            }

            .xl\:pl-10 {
                padding-left: 2.5rem;
            }
        }

        @media (max-width: 844px) {
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .md\:p-8 {
                padding: 2rem;
            }

            .md\:pr-6 {
                padding-right: 1.5rem;
            }

            .md\:pl-6 {
                padding-left: 1.5rem;
            }

            .md\:pt-0 {
                padding-top: 0px;
            }

            .md\:pb-0 {
                padding-bottom: 0px;
            }

            .md\:hover\:border-\[\#14b8a6\]:hover {
                --tw-border-opacity: 1;
                border-color: rgba(20, 184, 166, var(--tw-border-opacity));
            }

            .md\:hover\:border-opacity-100:hover {
                --tw-border-opacity: 1;
            }

            .md\:hover\:bg-transparent:hover {
                background-color: transparent;
            }

            .md\:hover\:bg-opacity-100:hover {
                --tw-bg-opacity: 1;
            }

            .md\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgba(255, 255, 255, var(--tw-text-opacity));
            }

            .md\:hover\:text-opacity-100:hover {
                --tw-text-opacity: 1;
            }
        }

        @media (max-width: 640px) {
            .sm\:fixed {
                position: fixed;
            }

            .sm\:relative {
                position: relative;
            }

            .sm\:top-0 {
                top: 0px;
            }

            .sm\:right-0 {
                right: 0px;
            }

            .sm\:bottom-0 {
                bottom: 0px;
            }

            .sm\:left-0 {
                left: 0px;
            }

            .sm\:z-30 {
                z-index: 30;
            }

            .sm\:mb-8 {
                margin-bottom: 2rem;
            }

            .sm\:mt-8 {
                margin-top: 2rem;
            }

            .sm\:block {
                display: block;
            }

            .sm\:flex {
                display: flex;
            }

            .sm\:hidden {
                display: none;
            }

            .sm\:grid-cols-1 {
                grid-template-columns: repeat(1, minmax(0, 1fr));
            }

            .sm\:flex-col {
                flex-direction: column;
            }

            .sm\:items-center {
                align-items: center;
            }

            .sm\:justify-center {
                justify-content: center;
            }

            .sm\:justify-between {
                justify-content: space-between;
            }

            .sm\:space-x-0 > :not([hidden]) ~ :not([hidden]) {
                --tw-space-x-reverse: 0;
                margin-right: calc(0px * var(--tw-space-x-reverse));
                margin-left: calc(0px * calc(1 - var(--tw-space-x-reverse)));
            }

            .sm\:space-y-5 > :not([hidden]) ~ :not([hidden]) {
                --tw-space-y-reverse: 0;
                margin-top: calc(1.25rem * calc(1 - var(--tw-space-y-reverse)));
                margin-bottom: calc(1.25rem * var(--tw-space-y-reverse));
            }

            .sm\:space-y-2 > :not([hidden]) ~ :not([hidden]) {
                --tw-space-y-reverse: 0;
                margin-top: calc(0.5rem * calc(1 - var(--tw-space-y-reverse)));
                margin-bottom: calc(0.5rem * var(--tw-space-y-reverse));
            }

            .sm\:bg-\[\#115e59\] {
                --tw-bg-opacity: 1;
                background-color: rgba(17, 94, 89, var(--tw-bg-opacity));
            }

            .sm\:bg-opacity-100 {
                --tw-bg-opacity: 1;
            }

            .sm\:p-8 {
                padding: 2rem;
            }

            .sm\:pt-0 {
                padding-top: 0px;
            }

            .sm\:pr-6 {
                padding-right: 1.5rem;
            }

            .sm\:pl-6 {
                padding-left: 1.5rem;
            }

            .sm\:text-center {
                text-align: center;
            }

            .sm\:text-xl {
                font-size: 1.25rem;
            }

            .sm\:text-white {
                --tw-text-opacity: 1;
                color: rgba(255, 255, 255, var(--tw-text-opacity));
            }

            .sm\:text-opacity-100 {
                --tw-text-opacity: 1;
            }
        }
    </style>
@endsection
