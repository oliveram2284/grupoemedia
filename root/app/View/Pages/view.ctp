
<style type="text/css">

#u892 {
    z-index: 101;
    width: 150px;
    border-width: 0px;
    border-color: transparent;
    background-color: transparent;
    margin-left: 460px;
    top: -5px;
    margin-bottom: -5px;
    position: relative;
}
#u989{
  background-color: transparent;
}



#u1091 {
   
  z-index: 139;
  width: 100%;
  border-width: 0px;
  border-color: transparent;
  background-color: transparent;
  margin-left: 0px;
  margin-top: 3px;
  position: relative;
  text-align: right;
}

#u1092 {
  z-index: 142;
  width: 80px;
  left: 30px;
}

#u1096_position_content {
  min-height: 105px;
}
#u1071{
  z-index: 0;
}
#ppu1080 {
    position: absolute;
    float: left;
    width: 0.01px;
    margin-left: -1px;
    margin-top: 15px;
    top: 500px;
}

.lt-479 div.aw-widget-current-inner div.aw-widget-content a.aw-current-weather p {
    position: relative!important;
    width: 100%!important;
    padding-left: 50%!important;
    z-index: 11!important;
}
</style>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<div class="clearfix colelem" id="pu1071"><!-- group -->
     <div class="clearfix grpelem" id="u1071"><!-- group -->
      <div class="clearfix grpelem " id="u850"><!-- column -->
        <?php 
          $url= "/".$last_post['Category']['slug'].".html/". $last_post['Post']['slug'];
          echo $this->Html->link(strtoupper($last_post['Post']['title']), $url ,    
            array('class' => 'main_title')
          );
        ?>
       <div class="clearfix colelem" id="u892">
        <!-- group -->
        <div class="clearfix colelem" id="u1091"><!-- group -->  
              <div class="fb-share-button pull-right" data-href="<?php echo trim(Router::url( $url, true ))?>" data-layout="button" data-mobile-iframe="true"></div>
              <a href="https://twitter.com/share" class="twitter-share-button" 
              data-url="<?php echo trim(Router::url( $url, true ))?>" 
              data-text="<?php echo $last_post['Post']['title']?>" data-via="a" data-dnt="true">Tweet</a>              
            </div>       


       </div>
      </div>
      <a class="nonblock nontext transition clip_frame clearfix grpelem" id="u851" href="<?php echo $this->Html->url($url)?>">
        <!-- image -->
        <?php $img_url=(is_null($last_post['Post']['image']))? $last_post['Post']['image_url']: $this->webroot."files/".$last_post['Post']['image'];?>
        <?php echo $this->Html->image( $img_url, 
        array('id'=>'u851_img', 'class'=>'block img-responsive', 'alt' => 'Grupo Medios','width'=>"628" ,'height'=>"391" )) ?>
      </a>
      <div class="clearfix grpelem cat_label <?php echo (isset($last_post['Category']['name']))? 'tag_'.$last_post['Category']['slug']: 'tag_other'?>" id="u854s">
        <!-- group -->
       <div class="clearfix grpelem " id="u855-5"><!-- content -->
        <p><?php echo strtoupper($last_post['Category']['name']);?>  <span id="u855-2"></span></p>
       </div>
      </div>

      
     <ul class="AccordionWidget clearfix grpelem" id="accordionu574"><!-- vertical box -->
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
          <?php endforeach;?>
        </ul>
    </li>
     </ul>


    </div>

    <div class="clearfix colelem" id="ppu1080"><!-- group -->

        <div class="clearfix grpelem" id="pu1080"><!-- column -->

        <?php for ($i=0; $i<count($posts);$i++):?>

          <div class="clearfix colelem" id="u1080"><!-- group -->       
            <div class="clearfix grpelem cat_label <?php echo (isset($posts[$i]['Category']['name']))? 'block_tag_'.$posts[$i]['Category']['slug']: 'block_tag_other'?>" id="u1074s" ><!-- group -->        
              <div class="clearfix grpelem " id="u1075-5s"><!-- content -->         
                <p><?php echo strtoupper($posts[$i]['Category']['name']);?> <!-- // <span id="u1075-2">ESCÁNDALO</span> --> </p>        
              </div>       
            </div>      
          </div>      
          <div class="clip_frame colelem" id="u1061"><!-- image -->  
          <?php $img_url1=(is_null($posts[$i]['Post']['image']))? $posts[$i]['Post']['image_url']: $this->webroot."files/".$posts[$i]['Post']['image'];?>      
            <?php echo $this->Html->image($img_url1,  array('id'=>'u1061_img', 'class'=>'img-responsive', 'alt' => 'Grupo Medios','width'=>"313" ,'height'=>"191", 'onerror'=>"this.src='".$this->webroot.'img/img_no_found.jpeg'."'" )) ?>      
          </div>      
          <div class="clearfix colelem" id="u1096"><!-- column -->  
            <div class="position_content" id="u1096_position_content">        
              <div class="clearfix colelem" id="u1083-4"><!-- content -->
                <?php 
                  $url= "/".$posts[$i]['Category']['slug'].".html/". $posts[$i]['Post']['slug'];
                  echo $this->Html->link(strtoupper($posts[$i]['Post']['title']), $url ,    
                    array('class' => 'subs_title')
                  );
                ?>  
              </div>        
              <div class="clearfix colelem" id="u1091"><!-- group -->  
                <div class="fb-share-button pull-right" data-href="<?php echo trim(Router::url( $url, true ))?>" data-layout="button" data-mobile-iframe="true"></div>
                <a href="https://twitter.com/share" class="twitter-share-button" 
                data-url="<?php echo trim(Router::url( $url, true ))?>" 
                data-text="<?php echo $posts[$i]['Post']['title']?>" data-via="a" data-dnt="true">Tweet</a>              
              </div>       
            </div>      
          </div>

        <?php endfor;?>  
        
       </div>


      <?php if(isset($last_post['Category']['id']) && $last_post['Category']['id']==1):?>
       <div class="clearfix grpelem" id="u989"><!-- column -->   
        
             <!-- start feedwind code --><script type="text/javascript">document.write('\x3Cscript type="text/javascript" src="' + ('https:' == document.location.protocol ? 'https://' : 'http://') + 'feed.mikle.com/js/rssmikle.js">\x3C/script>');</script><script type="text/javascript">(function() {var params = {rssmikle_url: "http://www.canal13sanjuan.com/rss/feed.html?r=3",rssmikle_frame_width: "300",rssmikle_frame_height: "600",frame_height_by_article: "7",rssmikle_target: "_blank",rssmikle_font: "Arial, Helvetica, sans-serif",rssmikle_font_size: "12",rssmikle_border: "off",responsive: "off",rssmikle_css_url: "",text_align: "left",text_align2: "left",corner: "off",scrollbar: "on",autoscroll: "off",scrolldirection: "up",scrollstep: "10",mcspeed: "20",sort: "New",rssmikle_title: "off",rssmikle_title_sentence: "",rssmikle_title_link: "",rssmikle_title_bgcolor: "#FFD700",rssmikle_title_color: "#FFFFFF",rssmikle_title_bgimage: "",rssmikle_item_bgcolor: "#FFFFFF",rssmikle_item_bgimage: "",rssmikle_item_title_length: "55",rssmikle_item_title_color: "#DD0707",rssmikle_item_border_bottom: "on",rssmikle_item_description: "on",item_link: "off",rssmikle_item_description_length: "150",rssmikle_item_description_color: "#666666",rssmikle_item_date: "gl1",rssmikle_timezone: "Etc/GMT",datetime_format: "%e.%m.%Y %k:%M",item_description_style: "text+tn",item_thumbnail: "full",item_thumbnail_selection: "auto",article_num: "7",rssmikle_item_podcast: "off",keyword_inc: "",keyword_exc: ""};feedwind_show_widget_iframe(params);})();</script><div style="font-size:10px; text-align:center; width:300px;"><a href="http://feed.mikle.com/" target="_blank" style="color:#CCCCCC;">RSS Feed Widget</a><!--Please display the above link in your web page according to Terms of Service.--></div><!-- end feedwind code --><!--  end  feedwind code -->
        
        </div>

       

      
      <?php else:?>

        
      
     

      <!--- LEFT COLUMN -->


    <div class="clearfix grpelem" id="pu1080"><!-- column -->

      <?php for ($i=count($posts)/2; $i<count($posts);$i++):?>

        <div class="clearfix colelem" id="u1080"><!-- group -->       
          <div class="clearfix grpelem cat_label <?php echo (isset($posts[$i]['Category']['name']))? 'block_tag_'.$posts[$i]['Category']['slug']: 'block_tag_other'?>" id="u1074s" ><!-- group -->        
            <div class="clearfix grpelem " id="u1075-5s"><!-- content -->         
              <p><?php echo strtoupper($posts[$i]['Category']['name']);?> <!-- // <span id="u1075-2">ESCÁNDALO</span> --> </p>        
            </div>       
          </div>      
        </div>      
        <div class="clip_frame colelem" id="u1061"><!-- image -->  
        <?php $img_url1=(is_null($posts[$i]['Post']['image']))? $posts[$i]['Post']['image_url']: $this->webroot."files/".$posts[$i]['Post']['image'];?>      
          <?php echo $this->Html->image($img_url1,  array('id'=>'u1061_img', 'class'=>'img-responsive', 'alt' => 'Grupo Medios','width'=>"313" ,'height'=>"191", 'onerror'=>"this.src='".$this->webroot.'img/img_no_found.jpeg'."'" )) ?>      
        </div>      
        <div class="clearfix colelem" id="u1096"><!-- column -->  
          <div class="position_content" id="u1096_position_content">        
            <div class="clearfix colelem" id="u1083-4"><!-- content -->
              <?php 
                $url= "/".$posts[$i]['Category']['slug'].".html/". $posts[$i]['Post']['slug'];
                echo $this->Html->link(strtoupper($posts[$i]['Post']['title']), $url ,    
                  array('class' => 'subs_title')
                );
              ?>  
            </div>        
            <div class="clearfix colelem" id="u1091"><!-- group -->  
              <div class="fb-share-button pull-right" data-href="<?php echo trim(Router::url( $url, true ))?>" data-layout="button" data-mobile-iframe="true"></div>
              <a href="https://twitter.com/share" class="twitter-share-button" 
              data-url="<?php echo trim(Router::url( $url, true ))?>" 
              data-text="<?php echo $posts[$i]['Post']['title']?>" data-via="a" data-dnt="true">Tweet</a>              
            </div>       
          </div>      
        </div>

      <?php endfor;?>  
      
     </div>

  <!--- LEFT COLUMN -->

  <!--- MIDDELD COLUMN -->

    <div class="clearfix grpelem" id="u989"><!-- column -->   

     


      
      <?php if(count($posts)>1): ?>
      <?php for ($i=0; $i<count($posts)/2;$i++):?>

        <div class="clearfix colelem" id="u1080"><!-- group -->       
          <div class="clearfix grpelem cat_label <?php echo (isset($posts[$i]['Category']['name']))? 'block_tag_'.$posts[$i]['Category']['slug']: 'block_tag_other'?>" id="u1074s" ><!-- group -->        
            <div class="clearfix grpelem " id="u1075-5s"><!-- content -->         
              <p><?php echo strtoupper($posts[$i]['Category']['name']);?> <!-- // <span id="u1075-2">ESCÁNDALO</span> --> </p>        
            </div>       
          </div>      
        </div>     
        <div class="clip_frame colelem" id="u1061"><!-- image -->        
          <?php $img_url1=(is_null($posts[$i]['Post']['image']))? $posts[$i]['Post']['image_url']: $this->webroot."files/".$posts[$i]['Post']['image'];?>      
          <?php echo $this->Html->image($img_url1,  array('id'=>'u1061_img', 'class'=>'img-responsive', 'alt' => 'Grupo Medios','width'=>"313" ,'height'=>"191", 'onerror'=>"this.src='".$this->webroot.'img/img_no_found.jpeg'."'" )) ?>          
        </div>      
        <div class="clearfix colelem" id="u1096"><!-- column -->       
          <div class="position_content" id="u1096_position_content">        
            <div class="clearfix colelem" id="u1083-4"><!-- content -->
              <?php 
                $url= "/".$posts[$i]['Category']['slug'].".html/". $posts[$i]['Post']['slug'];
                echo $this->Html->link(strtoupper($posts[$i]['Post']['title']), $url ,    
                  array('class' => 'subs_title')
                );
              ?>   
            </div>        
            <div class="clearfix colelem" id="u1091"><!-- group --> 
              <!--
              <div class="clip_frame grpelem" id="u1094">   
                <?php echo $this->Html->image('shareface.png', array('id'=>'u1094_img', 'class'=>'block', 'alt' => 'Grupo Medios','width'=>"20" ,'height'=>"20" )) ?>          
              </div>      -->
              <div class="fb-share-button pull-right" data-href="<?php echo trim(Router::url( $url, true ))?>" data-layout="button" data-mobile-iframe="true"></div>
              <!--    
              <div class="clip_frame grpelem" id="u1092">    
                <?php echo $this->Html->image('sharetweet.png', array('id'=>'u1092_img', 'class'=>'block', 'alt' => 'Grupo Medios','width'=>"20" ,'height'=>"20" )) ?>         
              </div>     -->
              <a href="https://twitter.com/share" class="twitter-share-button" 
              data-url="<?php echo trim(Router::url( $url, true ))?>" 
              data-text="<?php echo $posts[$i]['Post']['title']?>" data-via="a" data-dnt="true"></a>   
            </div>       
          </div>      
        </div>

      <?php endfor;?>   
      <?php endif;?>   
   </div>
  <!--- MIDDELD COLUMN -->
 <?php endif?>
  <!--- RIGHT COLUMN -->
  <div class="clearfix grpelem" id="pu1032"><!-- column -->
    <div class="clearfix colelem hidden" id="u1032"><!-- group -->
     <div class="clearfix grpelem" id="u1035-4"><!-- content -->
      <p>VIDEOS //</p>
     </div>
    </div>
    <div class="clip_frame colelem hidden" id="u1048"><!-- image -->
       <?php echo $this->Html->image('sin-t%c3%adtulo-1.jpg', array('id'=>'u1048_img', 'class'=>'block', 'alt' => 'Grupo Medios','width'=>"314" ,'height'=>"410" )) ?>
    </div>
   </div>
  <!--- RIGHT COLUMN -->

</div>