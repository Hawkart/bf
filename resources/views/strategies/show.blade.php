@extends('layouts.app')

@section('content')
    
<div class="page-title-wrapper">
	<!-- CONTAINER -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
                {!! Breadcrumbs::render('strategy', $strategy) !!}
				<h1 class="page-title bottom-line">{{ $strategy->title }}</h1>
			</div>
		</div>
	</div>	<!-- /.CONTAINER -->	
</div>
    
<div class="page-content">
	<div class="container">
        <div class="row">
			<div class="col-md-12">
                
                {!! $strategy->detail_text !!}
                <p><br />
                @if(!empty($strategy->timeframe))
                <b class="typo-black">Таймфрейм:</b> {!! $strategy->timeframe !!}<br />
                @endif
                @if(!empty($strategy->symbols))
                <b class="typo-black">Торговые инструменты:</b> {!! $strategy->symbols !!}<br />
                @endif
                @if(!empty($strategy->symbols))
                <b class="typo-black">Индикаторы:</b><br /> {!! $strategy->indicators !!}<br />
                @endif
                </p>
                
                @if(!empty($strategy->open_long))
                <b class="typo-black">Условия для открытия длинных позиций:</b> {!! $strategy->open_long !!}
                @endif
                @if(!empty($strategy->open_short))
                <b class="typo-black">Условия для открытия коротких позиций:</b> {!! $strategy->open_short !!}
                @endif
                @if(!empty($strategy->tp))
                <b class="typo-black">Условия выхода из позиции:</b> {!! $strategy->tp !!}
                @endif
                @if(!empty($strategy->sl))
                <b class="typo-black">Уровень стоп-лосса:</b> {!! $strategy->sl !!}
                @endif
                

                <script type="text/javascript">(function() {
                if (window.pluso)if (typeof window.pluso.start == "function") return;
                if (window.ifpluso==undefined) { window.ifpluso = 1;
                var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
                var h=d[g]('body')[0];
                h.appendChild(s);
                }})();</script>
                <div class="pluso" style="margin-top: 10px; margin-left: -3px;" data-background="#fff" data-options="medium,square,line,horizontal,nocounter,theme=04" data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,email,print"></div>
                
                <div id="disqus_thread"></div>
                <script>
                
                /**
                *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                /*
                var disqus_config = function () {
                this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                };
                */
                (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = 'https://bbfx-ru.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
                })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
            
            </div>	
		</div>		
	</div>
</div>

@endsection