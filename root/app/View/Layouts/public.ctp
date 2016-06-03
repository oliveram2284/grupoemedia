<?php setlocale(LC_CTYPE,'de_AT.utf8');?>
<!DOCTYPE html>
<html class="nojs html" lang="es-ES">
 <head>

  <script type="text/javascript">
   if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["jquery-1.8.3.min.js", "museutils.js", "jquery.musemenu.js", "webpro.js", "musewpdisclosure.js", "jquery.watch.js", "index.css"], "outOfDate":[]};
</script>
  
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="generator" content="2015.1.0.342"/>
  <title>Groupoemedia</title>

  <meta property="og:url"           content="<?php echo trim(Router::url( $this->here, true ))?>" />
  <meta property="og:type"          content="article" />
  <meta property="og:site_name"     content="grip" />
  <meta property="og:title"         content="Groupoemedia" />
  <meta property="og:description"   content="Portal de Noticias" />
  <meta property="og:image"         content="http://www.clarin.com/politica/politica/Mensaje-Francisco-Letranen-EFEANGELO-CARCONI_CLAIMA20160526_0406_28.jpg" />
  <!-- CSS -->
  <?php
    /*echo $this->Html->meta('icon');*/


    echo $this->Html->css(
      array(
        'bootstrap.css',
        'font-awesome.min.css',
        'public_css/site_global.css',
        'public_css/master_a-p_g_-maestra.css?3917155597',
        'public_css/index.css?360624035',
        //'public_css/entypo.min.css',
        'bootstrap.css',
        'public_css/custom.css',
       
        
        )
      ); 
    //echo $this->Html->css('/js/lib/jquery-ui',null,array('inline' => false));//( 'jPlayer.jplayer.blue.monday.min.css');
    $this->Html->meta('icon', $this->Html->url('/favicon.png'));
  ?>
  <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot."jPlayer/skin/blue.monday/css/jplayer.blue.monday.css"?>">

  <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
  <!--
  <link rel="stylesheet" type="text/css" href="css/site_global.css?3858561749"/>
  <link rel="stylesheet" type="text/css" href="css/master_a-p_g_-maestra.css?3917155597"/>
  <link rel="stylesheet" type="text/css" href="css/index.css?360624035" id="pagesheet"/> -->
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/iefonts_index.css?512291998"/>
  <![endif]-->
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');
var __adobewebfontsappname__ = "muse";
</script>
  <!-- JS includes -->
  <script type="text/javascript">
   document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/open-sans:i3,n3,n6,i4,n4:default.js" type="text/javascript">\x3C/script>');
</script>
  <!--[if lt IE 9]>
  <script src="scripts/html5shiv.js?4241844378" type="text/javascript"></script>
  <![endif]-->
    <!--HTML Widget code-->
  
<style>

.rss-text-styles{visibility:hidden;display:none}
.rss-paragraph img {display:block;width:200px;height:100%;margin-right: 20px;margin-bottom: 0px;margin-top: 0px;float:left;display:inline-block;}
.rss-paragraph img::after {clear:both;}
.rss-body ul li {margin-bottom: 10px;}
.rss-paragraph .rss-date {padding-bottom: 0px !important;}
.rss-paragraph div {padding-bottom: 20px;}
.rss-paragraph p {margin-bottom:18px;}
</style>

    <style>
          .growButton,
          .shrinkButton {
            cursor: pointer;
          }
          .table {
            display: table;
          }
          .MT_resize_buttons {
            width: 100%;
            height: 98px;
          }
          .MT_resize_buttons.false {
            display: none;
          }
          .MT_cell {
            display: table-cell;
            vertical-align: middle;
          }
          .MT_shrink{
            background: #ffffff;
            color: #000000;
            text-align: center;
            float: left;
            width: 45%;
            height: 100%;
            cursor: pointer;
          }
          .MT_shrink:hover
          {
            background: #000000;
            color: #ffffff;
          }
          .MT_grow{
            margin-right: 10%;
            background: #ffffff;
            color: #000000;
            text-align: center;
            float: left;
            width: 45%;
            height: 100%;
            cursor: pointer;
          }
          .MT_grow:hover{
            background: #000000;
            color: #ffffff;
          }
        </style>
    
  <style>

@media screen and (-webkit-min-device-pixel-ratio:0) {
   @font-face {
      font-family: 'entypo';
      src: url('http://weloveiconfonts.com/api/?family=entypo') format('svg');
   }
}

  
.share-button.sharer-0 {
  height: 40px !important;
  width: 200px !important;
}

.share-button.sharer-0 label {
  -webkit-transition: all .3s ease;
  transition:         all .3s ease;
  background: #303030 !important;
  border-radius: 4px !important;
  color: #FFFFFF !important;
  font-size: 16px !important;
  padding: 5px 10px;
}

.share-button.sharer-0 label {
  background: #303030 !important;
  border-radius: 4px !important;
  color: #FFFFFF !important;
  font-size: {param_iconSize}px;
}

.share-button.sharer-0 label span {
  font-family: montserrat,sans-serif !important;
  font-size: 14px !important;
  padding-left: 20px !important;
  text-transform: uppercase !important;
}

.entypo-export:before {
display: inline;
}

.share-button.sharer-0 .social.networks-5.center {
    margin-left: -100px !important;
}

.share-button.sharer-0 .social.networks-5.left {
    margin-left: -100px !important;
}

.share-button.sharer-0 .social.networks-5.right {
    margin-left: -100px !important;
}

.share-button.sharer-0 .social.middle.right .social.middle.left {
    margin-left: -100px !important;
}

.share-button.sharer-0 .social.right {
    margin-left: -100px !important;
}

.entypo-export:before {
    content: "" !important;
}

</style>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '215834698809523',
      xfbml      : true,
      version    : 'v2.5',
      method: 'feed',
  link: 'https://developers.facebook.com/docs/',
  caption: 'An example caption',
    },function(response){alert("asd")});
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/es_LA/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
 </head>
 <body>
  <!--HTML Widget code--> 

  <div class="clearfix" id="page"><!-- column -->   
    <div class="position_content" id="page_position_content"> 

    <?php echo $this->element('public_header');?>
    <?php echo $this->fetch('content');?> 

    <div class="verticalspacer"></div>

   </div>
  </div>
  <!-- JS includes -->
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn2.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
<!--
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script src="scripts/museutils.js?4190794036" type="text/javascript"></script>
  <script src="scripts/whatinput.js?84559013" type="text/javascript"></script>
  <script src="scripts/jquery.musemenu.js?3866264083" type="text/javascript"></script>
  <script src="scripts/webpro.js?488283310" type="text/javascript"></script>
  <script src="scripts/musewpdisclosure.js?3898505244" type="text/javascript"></script>
  <script src="scripts/jquery.watch.js?349565855" type="text/javascript"></script> -->
   <?php echo $this->Html->script(
  array(
    'public_js/museutils.js',
    'public_js/whatinput.js',
    'public_js/jquery.musemenu.js',
    'public_js/webpro.js',
    'public_js/musewpdisclosure.js',
    'public_js/jquery.watch.js',
    )
  )?> 
   
  <!-- Other scripts -->
  <script type="text/javascript">
   $(document).ready(function() { try {
(function(){var a={},b=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),16);return 0};(function(){$('link[type="text/css"]').each(function(){var b=($(this).attr("href")||"").match(/\/?css\/([\w\-]+\.css)\?(\d+)/);b&&b[1]&&b[2]&&(a[b[1]]=b[2])})})();(function(){$("body").append('<div class="version" style="display:none; width:1px; height:1px;"></div>');
for(var c=$(".version"),d=0;d<Muse.assets.required.length;){var f=Muse.assets.required[d],g=f.match(/([\w\-\.]+)\.(\w+)$/),k=g&&g[1]?g[1]:null,g=g&&g[2]?g[2]:null;switch(g.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");c.addClass(k);var g=b(c.css("color")),h=b(c.css("background-color"));g!=0||h!=0?(Muse.assets.required.splice(d,1),"undefined"!=typeof a[f]&&(g!=a[f]>>>24||h!=(a[f]&16777215))&&Muse.assets.outOfDate.push(f)):d++;c.removeClass(k);break;case "js":k.match(/^jquery-[\d\.]+/gi)&&
typeof $!="undefined"?Muse.assets.required.splice(d,1):d++;break;default:throw Error("Unsupported file type: "+g);}}c.remove();if(Muse.assets.outOfDate.length||Muse.assets.required.length)c="Puede que determinados archivos falten en el servidor o sean incorrectos. Limpie la cache del navegador e inténtelo de nuevo. Si el problema persiste, póngase en contacto con el administrador del sitio web.",(d=location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi))&&Muse.assets.outOfDate.length&&(c+="\nOut of date: "+Muse.assets.outOfDate.join(",")),d&&Muse.assets.required.length&&(c+="\nMissing: "+Muse.assets.required.join(",")),alert(c)})()})();
/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.initWidget('.MenuBar', ['#bp_infinity'], function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
Muse.Utils.initWidget('#accordionu574', ['#bp_infinity'], function(elem) { return new WebPro.Widget.Accordion(elem, {canCloseAll:false,defaultIndex:0}); });/* #accordionu574 */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { if (e && 'function' == typeof e.notify) e.notify(); else Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
  
  <!--HTML Widget code-->
     
<script>
eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('(w(e){e.2M.2Q=w(r,i,s){i=e.2P({12:10,F:1,19:!0,U:"2F",H:!0,V:"1w",Y:!0,1l:!0,L:!0,1A:!0,Z:"",K:11,1f:!1,1F:"2x",P:"",1s:!1,5:"",1E:!0,17:!1},i);B I.1B(w(o,u){9 a=e(u),f="";i.1f&&(f="s");a.2w("1i")||a.2B("1i");l(11==r)B!1;0<i.F&&(i.F-=1);i.12+=i.F;f="2S"+f+"://1d.34.37/1d/3e/Q/2W?v=1.0&1U=?&q="+1o(r);f+="&1V="+i.12;i.17&&(f+="&1G=h");11!=i.K&&(f+="&K="+i.K);e.30(f+"&2a=2b",w(r){l(2c==r.2d){9 o=r.29,f=i;l(r=o.Q){9 c=[],d=0,v="",m="W";l(f.L){9 g=o.28;"18 24 23"==25.26?(d=j 27("18.2f"),d.2n="2o",d.2p(g)):d=(j 2q).2m(g,"2l/2h");g=d.1j("2g")}f.19&&(v+=\'<3 8="22"><a O="\'+r.1u+\'" 4="\'+r.2k+\'" 8="2r">\'+r.4+"</a></3>");v+=\'<3 8="21"><R>\';1a(o=f.F;o<r.1b.z;o++){d=o-f.F;c[d]=[];9 y=r.1b[o],b,E="",S=y.1u;1t(f.5){A"4":E=y.4;J;A"H":E=y.15}c[d].5=E;l(y.15)1t(E=j D(y.15),b=E.1x()+" "+E.1r(),f.V){A"1w":J;A"H":b=E.1x();J;A"1I":b=E.1r();J;A"1H":b=j D(E);b=6.G(((j D).1n()-b.1n())/1X);1y>b?b="< 1 1q":(16>b?(b=6.G(b/1y)-1,E="1q"):1h>b?(b=6.G(b/16)-1,E="1W"):1c>b?(b=6.G(b/1h)-1,E="1R"):(b=6.G(b/1c)-1,E="1S"),1<b&&(E+="s"),b=b+" "+E);J;1T:b=E,E=j D(b),b=f.V,b=b.x("2j",t(E.2R())),b=b.x("2s",n(E.1p())),b=b.x("31",t(E.1p()+1)),b=b.x("33",E.2Z()),b=b.x("2Y",t(E.2U())),b=b.x("2T",t(E.2V())),b=b.x("2X",t(E.35()))}f.P&&(S=1o(S));c[d].7="<"+f.U+\'><a O="\'+f.P+S+\'" 4="1z I Q 1k \'+r.4+\'">\'+y.4+"</a></"+f.U+">";f.H&&b&&(c[d].7+=\'<3 8="3c">\'+b+"</3>");f.Y&&(y=f.1l&&""!=y.1m?y.1m:y.Y,f.1s&&(y=\'<a O="\'+f.P+S+\'" 4="1z I Q 1k \'+r.4+\'">\'+y+"</a>"),c[d].7+=\'<p 8="14">\'+y+"</p>");l(f.L&&0<g.z&&(S=g[o].1j("2D"),0<S.z)){c[d].7+=\'<3 8="2z"><3>2y 2u</3><R>\';1a(y=0;y<S.z;y++){9 T=S[y].X("2t"),N=S[y].X("2v"),C=S[y].X("z"),E=c[d],k=c[d].7,T=\'<M><a O="\'+T+\'" 4="2E I L">\'+T.13("/").2N()+"</a> ("+N+", ",N=6.1v(6.1g(C)/6.1g(1e)),C=(C/6.2O(1e,6.1v(N))).2L(2)+" "+"2H 2G 2I 2J 2K 1Z".13(" ")[N];E.7=k+(T+C+")</M>")}c[d].7+="</R></3>"}}f.5&&c.5(w(e,t){l(f.1E)9 n=e.5,r=t.5;1D n=t.5,r=e.5;l("H"==f.5)B j D(n)-j D(r);n=n.1C();r=r.1C();B n<r?-1:n>r?1:0});e.1B(c,w(e){v+=\'<M 8="14 2C \'+m+\'">\'+c[e].7+"</M>";m="W"==m?"38":"W"});v+="</R></3>";e(u).7(v);e("a",u).36("3b",f.1F)}e.3a(s)&&s.32(I,a)}1D i.1A&&(d=""!=i.Z?i.Z:r.20),e(u).7(\'<3 8="1Y"><p 8="14">\'+d+"</p></3>")})})};9 t=w(e){e+="";2>e.z&&(e="0"+e);B e},n=w(e){B"1O 1N 1M 1L 2i 2e 1K 1P 1J 1Q 3d 2A".13(" ")[e]}})(39)',62,201,'|||div|title|sort|Math|html|class|var||||||||||new||if|||||||||||function|replace||length|case|return||Date||offset|round|date|this|break|key|media|li||href|linkredirect|feed|ul|||titletag|dateformat|rss-odd-container|getAttribute|content|errormsg||null|limit|split|rss-paragraph|publishedDate|3600|historical|Microsoft|header|for|entries|604800|ajax|1024|ssl|log|86400|rssFeed|getElementsByTagName|at|snippet|contentSnippet|getTime|encodeURIComponent|getMonth|min|toLocaleTimeString|linkcontent|switch|link|floor|datetime|toLocaleDateString|60|View|showerror|each|toLowerCase|else|sortasc|linktarget|scoring|timeline|time|Sep|Jul|Apr|Mar|Feb|Jan|Aug|Oct|day|week|default|callback|num|hour|1e3|rssError|PB|responseDetails|rss-body|rssHeader|Explorer|Internet|navigator|appName|ActiveXObject|xmlString|responseData|output|json_xml|200|responseStatus|Jun|XMLDOM|item|xml|May|dd|description|text|parseFromString|async|false|loadXML|DOMParser|rss-title|MMMM|url|files|type|hasClass|_self|Media|rssMedia|Dec|addClass|rssRow|enclosure|Download|h4|kb|bytes|MB|GB|TB|toFixed|fn|pop|pow|extend|rssfeed|getDate|http|mm|getHours|getMinutes|load|ss|hh|getFullYear|getJSON|MM|call|yyyy|googleapis|getSeconds|attr|com|rss-even-container|jQuery|isFunction|target|rss-date|Nov|services'.split('|'),0,{}))

</script>
<script>
(function(e){e.fn.vTicker=function(t){var n={speed:700,pause:4e3,showItems:3,animation:"",mousePause:true,isPaused:false};var t=e.extend(n,t);moveUp=function(n,r,i){if(i)return;var s=n.children("ul");first=s.children("li:first").clone(true);s.animate({top:"-="+r+"px"},t.speed,function(){e(this).children("li:first").remove();e(this).css("top","0px")});if(t.animation=="fade"){s.children("li:first").fadeOut(t.speed);s.children("li:last").hide().fadeIn(t.speed)}first.appendTo(s)};return this.each(function(){var n=e(this);var r=0;var i=t.isPaused;n.css({overflow:"hidden",position:"relative"}).children("ul").css({position:"absolute",margin:0,padding:0}).children("li").css({margin:0,padding:0});n.children("ul").children("li").each(function(){if(e(this).height()>r){r=e(this).height()}});n.children("ul").children("li").each(function(){e(this).height(r)});n.height(r*t.showItems);var s=setInterval(function(){moveUp(n,r,i)},t.pause);if(t.mousePause){n.bind("mouseenter",function(){i=true}).bind("mouseleave",function(){i=false})}})}})(jQuery)
</script>
<script type="text/javascript">
$(document).ready(function () {
	$('#123muse').rssfeed('http://www.clarin.com/rss/lo-ultimo/', {
		limit: 10,
        dateformat: 'date',
		linktarget: '_blank',
        sort: 'date',
		sortasc: true,
        header: false,
        date: true,
        snippet: false,
        media: true,
        showerror: true,
        titletag: 'h3 class="rss-title"',
        errormsg: 'What happened? We cant get the feed. Try later.',
        content: true,
        linkcontent: true
        // }, function(e) {
        
        // $(e).find('div.rss-body').vTicker({
			// showItems: 1
		// });
  });
	});

  //$("#jquery_jplayer_1").jPlayer({
    


</script>




    
   </body>
</html>
