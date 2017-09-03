@extends('layouts.app')

@section('content')
<?/*<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <iframe width="100%" height="600" src="https://www.youtube.com/embed/zWB6R4S1xkQ" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>*/?>


<div id="rev_slider_202_1_wrapper" class="rev_slider_wrapper" data-alias="concept1" style="background-color:#ECEDF1;padding:0px;">
    <!-- START REVOLUTION SLIDER 5.1.1RC fullscreen mode -->
    <div id="rev-slide2" class="rev_slider" style="display:none;" data-version="5.1.1RC">
        <ul>
            <!-- SLIDE  -->
            <li data-transition="zoomin" data-slotamount="3" data-masterspeed="700" >
    			<!-- MAIN IMAGE -->
    			<img src="images/slider/bg-3.jpg"  alt="slidebg1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
    
    			<a href="https://www.youtube.com/watch?v=zWB6R4S1xkQ"  class="youtube tp-caption tp-resizeme ion-ios-play pretty-play pretty-middle"
    				style="z-index: 6;"
    				data-x="['center','center','center','center']"
    				data-y="['middle','middle','middle','middle']"
    				data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
    				data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
    				data-hoffset="['0','0','0','0']"
    				data-voffset="['0','0','0','0']"
    				data-start="700"
    				data-speed="100"
    				data-easing="Power1.easeIn"
    				data-endeasing="Power4.easeOut"
    				data-splitin="none"
    				data-elementdelay="0.1"
    				data-endspeed="1600"
    				data-splitout="none"
    				data-endelementdelay="0.1"></a>
            </li>
        </ul>
        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
    </div>
</div><!-- /. REVOLTION SLIDER -->
			



<?/*
<section class="padding-bottom-none typo-white padding-top-none" data-background="images/bg/1.jpg" style="background-image: url(&quot;images/bg/1.jpg&quot;);">
	<div class="theme-overlay"></div>
	<!-- CONTAINER -->
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				<!-- Form Begins -->
				<div class="contact-form typo-black contact-wrapper animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="200">
			      <iframe width="100%" height="380" src="https://www.youtube.com/embed/zWB6R4S1xkQ" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
	<!-- /. CONTAINER -->
</section>*/?>

<section class="pb-30">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            
            <h1 class="section-title mb-40 bottom-line">Экономический календарь</h1>
            
            <div id="calendar-scrolled">
                {!! $calendar !!}
            </div>
            <?/*
            <div style="overflow: hidden; height: 430px; position: relative;">
            <iframe scrolling="no" allowtransparency="true" frameborder="0"
            width="99%" height="430" src="https://s.tradingview.com/eventswidgetembed/?locale=ru#currencyFilter=EUR%2CUSD%2CJPY%2CGBP%2CCHF%2CAUD%2CCAD%2CNZD%2CCNY" 
            style="box-sizing: border-box;position: absolute;top: -30px;"></iframe>
            </div> */?>
            <?/*
            <span id="tradingview-copyright">
                <a ref="nofollow noopener" target="_blank" href="http://www.tradingview.com" style="color: rgb(173, 174, 176); font-family: &quot;Trebuchet MS&quot;, Tahoma, Arial, sans-serif; font-size: 13px;">Economic Calendar by <span style="color: #3BB3E4">TradingView</span></a>
            </span>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-events.js">
            {
              "width": "100%",
              "height": "450",
              "locale": "ru",
              "currencyFilter": "EUR,USD,JPY,GBP,CHF,AUD,CAD,NZD,CNY"
            }
            </script>*/?>
            </div>
            
            <div class="col-md-4">
            <h1 class="section-title mb-40">&nbsp;</h1>
            <div style="overflow: hidden; height: 450px; position: relative;">
            <iframe scrolling="no" allowtransparency="true" frameborder="0" width="100%" height="450" 
            src="https://s.tradingview.com/marketoverviewwidgetembed/?locale=ru#showChart=false&amp;largeChartUrl=https%3A%2F%2Fbbfx.ru%2Fchart%2F&amp;plotLineColorGrowing=rgba(60%2C%20188%2C%20152%2C%201)&amp;plotLineColorFalling=rgba(255%2C%2074%2C%20104%2C%201)&amp;gridLineColor=rgba(233%2C%20233%2C%20234%2C%201)&amp;scaleFontColor=rgba(218%2C%20221%2C%20224%2C%201)&amp;belowLineFillColorGrowing=rgba(60%2C%20188%2C%20152%2C%200.05)&amp;belowLineFillColorFalling=rgba(255%2C%2074%2C%20104%2C%200.05)&amp;symbolActiveColor=rgba(242%2C%20250%2C%20254%2C%201)&amp;tabs=%5B%7B%22title%22%3A%22%D0%A4%D0%BE%D1%80%D0%B5%D0%BA%D1%81%22%2C%22symbols%22%3A%5B%7B%22s%22%3A%22FX%3AEURUSD%22%7D%2C%7B%22s%22%3A%22FX%3AGBPUSD%22%7D%2C%7B%22s%22%3A%22FX%3AUSDJPY%22%7D%2C%7B%22s%22%3A%22FX%3AUSDCHF%22%7D%2C%7B%22s%22%3A%22FX%3AAUDUSD%22%7D%2C%7B%22s%22%3A%22FX%3AUSDCAD%22%7D%5D%7D%2C%7B%22title%22%3A%22%D0%90%D0%BA%D1%86%D0%B8%D0%B8%22%2C%22symbols%22%3A%5B%7B%22s%22%3A%22INDEX%3ASPX%22%2C%22d%22%3A%22%D0%98%D0%BD%D0%B4%D0%B5%D0%BA%D1%81%20S%26P%20500%22%7D%2C%7B%22s%22%3A%22INDEX%3AIUXX%22%2C%22d%22%3A%22%D0%98%D0%BD%D0%B4%D0%B5%D0%BA%D1%81%20Nasdaq%20100%22%7D%2C%7B%22s%22%3A%22INDEX%3ADOWI%22%2C%22d%22%3A%22Dow%2030%22%7D%2C%7B%22s%22%3A%22INDEX%3ANKY%22%2C%22d%22%3A%22%D0%98%D0%BD%D0%B4%D0%B5%D0%BA%D1%81%20Nikkei%20225%22%7D%2C%7B%22s%22%3A%22NASDAQ%3AAAPL%22%2C%22d%22%3A%22Apple%22%7D%2C%7B%22s%22%3A%22NASDAQ%3AGOOG%22%2C%22d%22%3A%22Google%22%7D%5D%7D%2C%7B%22title%22%3A%22%D0%A4%D1%8C%D1%8E%D1%87%D0%B5%D1%80%D1%81%D1%8B%22%2C%22symbols%22%3A%5B%7B%22s%22%3A%22COMEX%3AGC1!%22%2C%22d%22%3A%22%D0%97%D0%BE%D0%BB%D0%BE%D1%82%D0%BE%22%7D%2C%7B%22s%22%3A%22NYMEX%3ACL1!%22%2C%22d%22%3A%22%D0%9D%D0%B5%D1%84%D1%82%D1%8C%22%7D%2C%7B%22s%22%3A%22NYMEX%3ANG1!%22%2C%22d%22%3A%22%D0%9F%D1%80%D0%B8%D1%80%D0%BE%D0%B4%D0%BD%D1%8B%D0%B9%20%D0%B3%D0%B0%D0%B7%22%7D%2C%7B%22s%22%3A%22CBOT%3AZC1!%22%2C%22d%22%3A%22%D0%9A%D1%83%D0%BA%D1%83%D1%80%D1%83%D0%B7%D0%B0%22%7D%5D%7D%2C%7B%22title%22%3A%22%D0%9E%D0%B1%D0%BB%D0%B8%D0%B3%D0%B0%D1%86%D0%B8%D0%B8%22%2C%22symbols%22%3A%5B%7B%22s%22%3A%22CME%3AGE1!%22%2C%22d%22%3A%22Eurodollar%22%7D%2C%7B%22s%22%3A%22CBOT%3AZB1!%22%2C%22d%22%3A%22T-Bond%22%7D%2C%7B%22s%22%3A%22CBOT%3AUD1!%22%2C%22d%22%3A%22Ultra%20T-Bond%22%7D%2C%7B%22s%22%3A%22EUREX%3AGG1!%22%2C%22d%22%3A%22%D0%95%D0%B2%D1%80%D0%BE%D0%B1%D0%BE%D0%BD%D0%B4%22%7D%2C%7B%22s%22%3A%22EUREX%3AII1!%22%2C%22d%22%3A%22Euro%20BTP%22%7D%2C%7B%22s%22%3A%22EUREX%3AHR1!%22%2C%22d%22%3A%22Euro%20BOBL%22%7D%5D%7D%5D" 
            style="box-sizing: border-box;position: absolute;top: -33px;"></iframe>
            </div>
            <?/*
<span id="tradingview-copyright"><a ref="nofollow noopener" target="_blank" href="http://ru.tradingview.com" style="color: rgb(173, 174, 176); font-family: &quot;Trebuchet MS&quot;, Tahoma, Arial, sans-serif; font-size: 13px;">Рыночные данные предоставлены <span style="color: #3BB3E4">TradingView</span></a></span>
<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js">
{
  "showChart": false,
  "locale": "ru",
  "largeChartUrl": "https://bbfx.ru/chart/",
  "width": "100%",
  "height": "450",
  "title" : false,
  "plotLineColorGrowing": "rgba(60, 188, 152, 1)",
  "plotLineColorFalling": "rgba(255, 74, 104, 1)",
  "gridLineColor": "rgba(233, 233, 234, 1)",
  "scaleFontColor": "rgba(218, 221, 224, 1)",
  "belowLineFillColorGrowing": "rgba(60, 188, 152, 0.05)",
  "belowLineFillColorFalling": "rgba(255, 74, 104, 0.05)",
  "symbolActiveColor": "rgba(242, 250, 254, 1)",
  "tabs": [
    {
      "title": "Форекс",
      "symbols": [
        {
          "s": "FX:EURUSD"
        },
        {
          "s": "FX:GBPUSD"
        },
        {
          "s": "FX:USDJPY"
        },
        {
          "s": "FX:USDCHF"
        },
        {
          "s": "FX:AUDUSD"
        },
        {
          "s": "FX:USDCAD"
        }
      ]
    },
    {
      "title": "Акции",
      "symbols": [
        {
          "s": "INDEX:SPX",
          "d": "Индекс S&P 500"
        },
        {
          "s": "INDEX:IUXX",
          "d": "Индекс Nasdaq 100"
        },
        {
          "s": "INDEX:DOWI",
          "d": "Dow 30"
        },
        {
          "s": "INDEX:NKY",
          "d": "Индекс Nikkei 225"
        },
        {
          "s": "NASDAQ:AAPL",
          "d": "Apple"
        },
        {
          "s": "NASDAQ:GOOG",
          "d": "Google"
        }
      ]
    },
    {
      "title": "Фьючерсы",
      "symbols": [
        {
          "s": "COMEX:GC1!",
          "d": "Золото"
        },
        {
          "s": "NYMEX:CL1!",
          "d": "Нефть"
        },
        {
          "s": "NYMEX:NG1!",
          "d": "Природный газ"
        },
        {
          "s": "CBOT:ZC1!",
          "d": "Кукуруза"
        }
      ]
    },
    {
      "title": "Облигации",
      "symbols": [
        {
          "s": "CME:GE1!",
          "d": "Eurodollar"
        },
        {
          "s": "CBOT:ZB1!",
          "d": "T-Bond"
        },
        {
          "s": "CBOT:UD1!",
          "d": "Ultra T-Bond"
        },
        {
          "s": "EUREX:GG1!",
          "d": "Евробонд"
        },
        {
          "s": "EUREX:II1!",
          "d": "Euro BTP"
        },
        {
          "s": "EUREX:HR1!",
          "d": "Euro BOBL"
        }
      ]
    }
  ]
}
</script>*/?>
            </div>
        </div>
    </div>
</section>
<section class="section-bordered">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="section-title mb-40 bottom-line">Аналитика форекс</h1>
                
                @if($forecasts->count())
                    <div class="news__list forecast__list">
                        @foreach($forecasts as $forecast)
                            
                            <div class="news__item">
                                <div class="news__date"><span class="news__time">{{ \Carbon\Carbon::parse($forecast->created_at)->format('H:i')}}</span> / {{ \Carbon\Carbon::parse($forecast->created_at)->format('d.m.Y')}}</div>
                                <h2 class="news__title">
                                    <a href="{!! route('forecast', ['slug' => $forecast->slug]) !!}">
                                        {{$forecast->title}}
                                    </a>
                                </h2>
        						<div class="news__announce">
                                    {{$forecast->preview_text}}
                                </div>
        					</div>
            				
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="col-md-6">
                <h1 class="section-title mb-40 bottom-line">Статьи</h1>
                
                @if($articles->count())
                    <div class="news__list forecast__list">
                        @foreach($articles as $article)
                            
                            <div class="news__item">
                                <div class="news__date"><span class="news__time">{{ \Carbon\Carbon::parse($article->created_at)->format('H:i')}}</span> / {{ \Carbon\Carbon::parse($article->created_at)->format('d.m.Y')}}</div>
                                <h2 class="news__title">
                                    <a href="{!! route('article', ['slug' => $article->slug]) !!}">
                                        {{$article->title}}
                                    </a>
                                </h2>
        						<div class="news__announce">
                                    {{$article->preview_text}}
                                </div>
        					</div>
            				
                        @endforeach
                    </div>
                @endif
             </div>
        </div>
    </div>
</section>
@endsection