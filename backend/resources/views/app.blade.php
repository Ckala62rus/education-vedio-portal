<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <link href="" rel="stylesheet" type="text/css"/>
        <link href="{{ asset("template/plugins/global/plugins.bundle.css") }}" rel="stylesheet" type="text/css"/>
{{--        <link href="{{ asset("template/plugins/custom/prismjs/prismjs.bundle.css") }}" rel="stylesheet" type="text/css"/>--}}
        <link href="{{ asset("template/css/style.bundle.css") }}" rel="stylesheet" type="text/css"/>

        <link href="{{ asset("template/css/themes/layout/header/base/light.css") }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset("template/css/themes/layout/header/menu/light.css") }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset("template/css/themes/layout/aside/dark.css") }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset("template/css/themes/layout/brand/dark.css") }}" rel="stylesheet" type="text/css"/>

        <script src="/front/prism/prism.js" type="text/javascript"></script>
        <link href="/front/prism/prism.css" rel="stylesheet" type="text/css"/>

        <style>
            .form-control {
                border: 1px solid #E4E6EF;
            }
        </style>
        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>

{{--    @if(!\Illuminate\Support\Facades\Auth::user())--}}
{{--        <body class="font-sans antialiased">--}}
{{--            @inertia--}}
{{--        </body>--}}
{{--    @endif--}}

    <body id="kt_body"
          class="
            header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading"
    >
        @inertia
    </body>

    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1200
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#6993FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#F3F6F9",
                        "dark": "#212121"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1E9FF",
                        "secondary": "#ECF0F3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#212121",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#ECF0F3",
                    "gray-300": "#E5EAEE",
                    "gray-400": "#D6D6E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#80808F",
                    "gray-700": "#464E5F",
                    "gray-800": "#1B283F",
                    "gray-900": "#212121"
                }
            },
            "font-family": "Poppins"
        };
    </script>

    <script src="{{ asset("template/plugins/global/plugins.bundle.js") }}" type="text/javascript"></script>
{{--    <script src="{{ asset("template/plugins/custom/prismjs/prismjs.bundle.js") }}" type="text/javascript"></script>--}}
    <script src="{{ asset("template/js/scripts.bundle.js") }}" type="text/javascript"></script>
    <script src="{{ asset("template/js/pages/widgets.js") }}" type="text/javascript"></script>

</html>
