<?php echo $this->Html->css(array('public_css/noticia.css',))?>

<div class="row">
  <div class="left_col">


  <div id="fb-root"></div>
<script>
/*(function(d, s, id) {

  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6&appId=1812080245687185";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));*/
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

  <!-- Your share button code -->
  <div class="fb-share-button" 
    data-href="<?php echo trim(Router::url( $this->here, true ))?>" 
    data-layout="button"
    >
  </div>


  <br>
  <br>
  <br>
  <br>
  <br>

    <ul style="none-style">
      <?php foreach ($videos as $key => $item):?>
        <li class="vbox">
          <div class="media">
            <div class="media-left">
              <a href="<?php echo $this->Html->url('/videos.html/view/'.$item['Video']['id']); ?>">
                <img class="media-object" src="<?php echo ($item['Video']['medium_img']!='')?$item['Video']['medium_img']:$item['Video']['default_img']?>" width="250" alt="<?php echo $item['Video']['url']?>">
              </a>
            </div>
            <div class="media-body">
              <a href="<?php echo $this->Html->url('/videos.html/view/'.$item['Video']['id']); ?> " >
              <h5 class="media-heading"><?php echo $item['Video']['title']?></h5>
              <p><?php echo substr($item['Video']['description'],0,100); ?></p>
              </a>
            </div>
          </div>
        </li>
      <?php endforeach;?>
      <!--
      <li class="more_video"><a href="<?php 
     echo $this->Html->url('/videos.html', array('controller' => 'pages', 'action' => 'videos',1)); ?>"> <i class="fa fa-youtube-play" aria-hidden="true"></i> Ver Más Videos</a> </li> -->
    </ul>
    

<div class="pagination ">
    <ul class="pagination pull-right">
            <?php
                echo $this->Paginator->prev(__('Ant'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
                echo $this->Paginator->next(__('Sig'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
            ?>
        </ul>
    </div>

<br>

    



    

   <div class="fb-comments" data-href="<?php echo trim(Router::url( $this->here, true ))?>" data-width="576" data-numposts="5" fb-xfbml-state="rendered" >
    </div>
   
   
  </div>
  <div class="right_col">
    <ul class="AccordionWidget clearfix colelem" id="accordionu574"><!-- vertical box -->

       <?php echo $this->element('radio_player');?>



       <li>

      <ul style="none-style">
        <li>
          <a class="twitter-timeline" data-width="100%" data-height="450" data-dnt="true" data-theme="light" data-link-color="#E95F28" href="https://twitter.com/OtroDiaParaiso">Tweets by OtroDiaParaiso</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
          
        </li>
        <li>
         <a href="http://www.accuweather.com/es/ar/san-juan/5952/weather-forecast/5952" class="aw-widget-legal"><!--
          By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at http://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at http://www.accuweather.com/en/privacy.--></a>
          <div id="awcc1465413241434" class="aw-widget-current"  data-locationkey="5952" data-unit="c" data-language="es" data-useip="false" data-uid="awcc1465413241434"></div>
          <script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>
        </li>
        <!--
          <?php foreach ($banners as $key => $banner):?>
            <li>
              <?php if($banner['Banner']['link']):?>
                <a href="">
                  <?php echo $this->Html->image("../files/banners/".$banner['Banner']['imagen'], array('id'=>'u1094_img', 'class'=>'img-responsive', 'alt' => $banner['Banner']['title'],'title' => $banner['Banner']['title'],'style'=>'height:auto;' )) ?>         
                </a>
              <?php else:?>
                <?php echo $this->Html->image("../files/banners/".$banner['Banner']['imagen'], array('id'=>'u1094_img', 'class'=>'img-responsive', 'alt' =>  $banner['Banner']['title'], 'title' => $banner['Banner']['title'] ,'style'=>'height:auto;' )) ?> 
              <?php endif;?>

            </li>
          <?php endforeach;?>-->
        </ul>
    </li>
      </ul>
    <div class="grpelem hidden" id="u1190"><!-- custom html -->      
      <div class="MT_resize_buttons">
        <div class="MT_grow table">
          <div class="MT_cell">+</div>
        </div>
        <div class="MT_shrink table">
          <div class="MT_cell">-</div>
        </div>
      </div>  
    </div>
  </div>
</div>