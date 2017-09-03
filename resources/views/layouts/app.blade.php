<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="yandex-verification" content="7d19099c5829b30b" />
    {!! SEO::generate(true) !!}
    
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
    <![endif]-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 
    <?/*<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />*/?>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/revolution/settings.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/revolution/layers.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/revolution/navigation.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <?/*<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />*/?>
    <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/color-scheme/color.css') }}" rel="stylesheet" />
    
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter45621201 = new Ya.Metrika({
                        id:45621201,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                    });
                } catch(e) { }
            });
    
            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";
    
            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/45621201" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    
    <!--Vk messanger-->
    <script src="https://vk.com/js/api/openapi.js?146" type="text/javascript"></script> 
</head>
<body>
	<?/*<div id="pageloader">
		<img src="{{ asset('images/loader.gif') }}" class="img-responsive" alt="loader" height="128" width="128">
	</div>*/?>

    <div class="page-wrapper">
    
        @include('_partials.header_alt')
        
        @yield('content')
        
        @include('_partials.footer')
        	
	</div>
    
    <!-- VK Widget -->
    <div id="vk_community_messages"></div>
    <script type="text/javascript">
    VK.Widgets.CommunityMessages("vk_community_messages", 147039066, {tooltipButtonText: "Есть вопрос?"});
    </script>

    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.themepunch.tools.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.themepunch.revolution.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/revolution-extension.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/theme.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.youtubepopup.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.tablescroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
</body>
</html>