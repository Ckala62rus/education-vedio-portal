<!DOCTYPE HTML>
<html>
<head>
    <title>Voguish a Blogging Category Flat Bootstarp Responsive Website Template | Single :: w3layouts</title>
    <link href="{{ asset("front/css/bootstrap.css") }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("front/css/style.css") }}" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Voguish Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
    <script src="{{ asset("front/js/jquery.min.js") }}" type="text/javascript"></script>
{{--    <link rel="stylesheet" href="front/css/flexslider.css" type="text/css" media="screen" />--}}

    <script src="{{ asset("front/js/responsiveslides.min.js") }}" type="text/javascript"></script>
{{--    <link href="{{ asset("front/prism/prism.css") }}" rel="stylesheet" type="text/css"/>--}}
{{--    <script src="{{ asset("front/prism/prism.js") }}" type="text/javascript"></script>--}}

    <link href="/front/prism/prism.css" rel="stylesheet" type="text/css"/>
    <script src="/front/prism/prism.js" type="text/javascript"></script>
    <script href="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.4.1/tinymce.min.js"></script>
    <script>
        $(function () {
            $("#slider").responsiveSlides({
                auto: true,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                pager: true,
            });
        });

    </script>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            line-height: 1.4;
            margin: 1rem;
        }
        table {
            border-collapse: collapse;
        }
        /* Apply a default padding if legacy cellpadding attribute is missing */
        table:not([cellpadding]) th,
        table:not([cellpadding]) td {
            padding: 0.4rem;
        }
        /* Set default table styles if a table has a positive border attribute
           and no inline css */
        table[border]:not([border="0"]):not([style*="border-width"]) th,
        table[border]:not([border="0"]):not([style*="border-width"]) td {
            border-width: 1px;
        }
        /* Set default table styles if a table has a positive border attribute
           and no inline css */
        table[border]:not([border="0"]):not([style*="border-style"]) th,
        table[border]:not([border="0"]):not([style*="border-style"]) td {
            border-style: solid;
        }
        /* Set default table styles if a table has a positive border attribute
           and no inline css */
        table[border]:not([border="0"]):not([style*="border-color"]) th,
        table[border]:not([border="0"]):not([style*="border-color"]) td {
            border-color: #ccc;
        }
        figure {
            display: table;
            margin: 1rem auto;
        }
        figure figcaption {
            color: #999;
            display: block;
            margin-top: 0.25rem;
            text-align: center;
        }
        hr {
            border-color: #ccc;
            border-style: solid;
            border-width: 1px 0 0 0;
        }
        code {
            background-color: #e8e8e8;
            border-radius: 3px;
            padding: 0.1rem 0.2rem;
        }
        .mce-content-body:not([dir=rtl]) blockquote {
            border-left: 2px solid #ccc;
            margin-left: 1.5rem;
            padding-left: 1rem;
        }
        .mce-content-body[dir=rtl] blockquote {
            border-right: 2px solid #ccc;
            margin-right: 1.5rem;
            padding-right: 1rem;
        }
    </style>

    <!-- script-for-nav -->
    <script>
        $( "span.menu" ).click(function() {
            $( ".head-nav ul" ).slideToggle(300, function() {
                // Animation complete.
            });
        });
    </script>
    <!-- script-for-nav -->

    <!-- Scripts -->
    @routes
    @vite(['resources/js/front-app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>
<body>
    @inertia
</body>
</html>
