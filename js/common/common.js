//フォント読み込み
  (function(d) {
    var config = {
      kitId: 'oel5ghi',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);

//スムーススクロール
$(function(){
  $('a[href^="#"]').click(function(){
    var speed = 500;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
});

//フェードイン
$(function(){
    $(window).scroll(function (){
        $('.fadein').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight + 100){
                $(this).addClass('scrollin');
            }
        });
    });
});

//ローディングアニメーション
$(function() {
var h = $(window).height(); //ブラウザウィンドウの高さを取得
$('.wrapper,#footer,header').css('display','none'); 
$('.wrapper').css('overflow','hidden'); //初期状態ではメインコンテンツを非表示
$('#loader-bg ,.spinner').css('display','block'); //ウィンドウの高さに合わせでローディング画面を表示
});

$(window).on('load', function () {
$('#loader-bg').delay(900).fadeOut(800); //$('#loader-bg').fadeOut(800);でも可
$('.spinner').delay(600).fadeOut(300); //$('#loader').fadeOut(300);でも可
$('.wrapper,#footer,header').css('display', 'block');
$('.wrapper').css('overflow', 'auto');// ページ読み込みが終わったらメインコンテンツを表示する
});

//SVG
window.addEventListener('load', function(){
  deSVG('.svg', true);
});


//ナビゲーション用
		(function($) {
			$(function () {
				$('#nav-toggle').on('click', function() {
					$('body').toggleClass('open');
				});
				$('#gloval-nav a').on('click', function() {
					$('body').toggleClass('open');
				});
			});
		})(jQuery);

//背景スクロール
$(function () {
    var loop = document.getElementById('loop_js'),
        loopAnim = new TimelineMax({
          repeat: -1
        }),
        loopItem = (window.innerWidth, loop.children[0]);

    loop.appendChild(loopItem.cloneNode(true)), loop.appendChild(loopItem.cloneNode(true)),
      loopAnim.to(loop, 50, {
      ease: Power0.easeNone,
      xPercent: -100
    }).to(loop, 0, {
      ease: Power0.easeNone,
      x: 0
    })
  });