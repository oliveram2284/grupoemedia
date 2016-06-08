

<div class="clearfix colelem" id="pu1071"><!-- group -->
     <div class="clearfix grpelem" id="u1071"><!-- group -->
      <div class="clearfix grpelem " id="u850"><!-- column -->
        <?php 
          $url= "/".$last_post['Category']['slug'].".html/". $last_post['Post']['slug'];
          echo $this->Html->link($last_post['Post']['title'], $url ,    
            array('class' => 'main_title')
          );
        ?>
       <div class="clearfix colelem" id="u892">
        <!-- group -->
        <div class="clip_frame grpelem" id="u872"><!-- image -->
          <?php echo $this->Html->image('shareface.png', array('id'=>'u872_img', 'class'=>'block', 'alt' => 'Grupo Medios','width'=>"20" ,'height'=>"20" )) ?>
        </div>
        <div class="clip_frame grpelem" id="u880"><!-- image -->
          <?php echo $this->Html->image('sharetweet.png', array('id'=>'u880', 'class'=>'block', 'alt' => 'Grupo Medios','width'=>"20" ,'height'=>"20" )) ?>
        </div>
       </div>
      </div>
      <a class="nonblock nontext transition clip_frame clearfix grpelem" id="u851" href="<?php echo $this->Html->url($url)?>">
        <!-- image -->
        <?php 
          if(is_null($last_post['Post']['image'])){
            echo $this->Html->image($last_post['Post']['image_url'], 
            array('id'=>'u851_img', 'class'=>'block img-responsive', 'alt' => 'Grupo Medios','width'=>"628" ,'height'=>"391" )) ;
          }else{
          echo $this->Html->image("../files/".$last_post['Post']['image'], 
          array('id'=>'u851_img', 'class'=>'block img-responsive', 'alt' => 'Grupo Medios','width'=>"628" ,'height'=>"391" )) ;
        } 
          ?>
      </a>
      <div class="clearfix grpelem cat_label <?php echo (isset($last_post['Category']['name']))? 'tag_'.$last_post['Category']['slug']: 'tag_other'?>" id="u854s">
        <!-- group -->
       <div class="clearfix grpelem " id="u855-5"><!-- content -->
        <p><?php echo strtoupper($last_post['Category']['name']);?>  <span id="u855-2"></span></p>
       </div>
      </div>
     </div>
     <ul class="AccordionWidget clearfix grpelem" id="accordionu574"><!-- vertical box -->
      <?php echo $this->element('radio_player');?> 
     </ul>
    </div>

    <div class="clearfix colelem" id="ppu1080"><!-- group -->

      <!--- LEFT COLUMN -->


     <div class="clearfix grpelem" id="pu1080"><!-- column -->

      <?php foreach ($posts as $key => $a_post):?>

        <div class="clearfix colelem " id="u1080"><!-- group -->       
          <div class="clearfix grpelem cat_label <?php echo (isset($a_post['Category']['name']))? 'block_tag_'.$a_post['Category']['slug']: 'block_tag_other'?>" id=""><!-- group -->        
            <div class="clearfix grpelem  " id="u1075-d5"><!-- content -->         
              <p><?php echo strtoupper($a_post['Category']['name']);?> <!-- // <span id="u1075-2">ESCÁNDALO</span> --> </p>        
            </div>       
          </div>      
        </div>      
        <div class="clip_frame colelem" id="u1061"><!-- image --> 
          <?php 
              if(is_null($a_post['Post']['image'])){
                echo $this->Html->image($a_post['Post']['image_url'], 
                array('id'=>'u851_img', 'class'=>'block img-responsive', 'alt' => 'Grupo Medios','width'=>"628" ,'height'=>"391" ,'onerror'=>"this.src='".$this->webroot.'img/img_no_found.jpeg'."'")) ;
              }else{
              echo $this->Html->image("../files/".$a_post['Post']['image'], 
              array('id'=>'u851_img', 'class'=>'block img-responsive', 'alt' => 'Grupo Medios','width'=>"628" ,'height'=>"391" ,'onerror'=>"this.src='".$this->webroot.'img/img_no_found.jpeg'."'")) ;
            } 
          ?>
   
        </div>      
        <div class="clearfix colelem" id="u1096"><!-- column -->       
          <div class="position_content" id="u1096_position_content">        
            <div class="clearfix colelem" id="u1083-4"><!-- content -->
              <?php 
                $url= "/".$a_post['Category']['slug'].".html/". $a_post['Post']['slug'];
                echo $this->Html->link(strtoupper($a_post['Post']['title']), $url ,    
                  array('class' => 'subs_title')
                );
              ?>   
            </div>        
            <div class="clearfix colelem" id="u1091"><!-- group -->         
              <div class="clip_frame grpelem" id="u1094"><!-- image -->          
                <?php echo $this->Html->image('shareface.png', array('id'=>'u1094_img', 'class'=>'block', 'alt' => 'Grupo Medios','width'=>"20" ,'height'=>"20" )) ?>          
              </div>         
              <div class="clip_frame grpelem" id="u1092"><!-- image -->          
                <?php echo $this->Html->image('sharetweet.png', array('id'=>'u1092_img', 'class'=>'block', 'alt' => 'Grupo Medios','width'=>"20" ,'height'=>"20" )) ?>         
              </div>        
            </div>       
          </div>      
        </div>

      <?php endforeach;?>

      
     </div>

  <!--- LEFT COLUMN -->

  <!--- MIDDELD COLUMN -->

    <div class="clearfix grpelem" id="u989"><!-- column -->
    <div class="position_content" id="u989_position_content">
     <div class="clearfix colelem" id="u1026"><!-- group -->
      <div class="clearfix grpelem" id="u1029-4"><!-- content -->
       <p>LO ÚLTIMO //</p>
      </div>
     </div>
     <div class="clip_frame colelem" id="u1016"><!-- image -->
       <?php echo $this->Html->image('clarin.png', array('id'=>'u1016_img', 'class'=>'block', 'alt' => 'Grupo Medios','width'=>"148" ,'height'=>"36")) ?>
     </div>
     <div class="rss-paragraph colelem" id="u935"><!-- custom html -->
      <div class="colelem" id="u1370"><!-- custom html -->
       <!-- start feedwind code --><script type="text/javascript">document.write('\x3Cscript type="text/javascript" src="' + ('https:' == document.location.protocol ? 'https://' : 'http://') + 'feed.mikle.com/js/rssmikle.js">\x3C/script>');</script><script type="text/javascript">(function() {var params = {rssmikle_url: "http://www.clarin.com/rss/lo-ultimo/",rssmikle_frame_width: "300",rssmikle_frame_height: "600",frame_height_by_article: "10",rssmikle_target: "_blank",rssmikle_font: "Arial, Helvetica, sans-serif",rssmikle_font_size: "12",rssmikle_border: "off",responsive: "off",rssmikle_css_url: "",text_align: "left",text_align2: "left",corner: "off",scrollbar: "on",autoscroll: "off",scrolldirection: "up",scrollstep: "20",mcspeed: "20",sort: "New",rssmikle_title: "off",rssmikle_title_sentence: "",rssmikle_title_link: "",rssmikle_title_bgcolor: "#FFD700",rssmikle_title_color: "#FFFFFF",rssmikle_title_bgimage: "",rssmikle_item_bgcolor: "#FFFFFF",rssmikle_item_bgimage: "",rssmikle_item_title_length: "55",rssmikle_item_title_color: "#DD0707",rssmikle_item_border_bottom: "on",rssmikle_item_description: "on",item_link: "off",rssmikle_item_description_length: "150",rssmikle_item_description_color: "#666666",rssmikle_item_date: "gl1",rssmikle_timezone: "Etc/GMT",datetime_format: "%e.%m.%Y %k:%M",item_description_style: "text+tn",item_thumbnail: "full",item_thumbnail_selection: "auto",article_num: "20",rssmikle_item_podcast: "off",keyword_inc: "",keyword_exc: ""};feedwind_show_widget_iframe(params);})();</script><div style="font-size:10px; text-align:center; width:300px;"><a href="http://feed.mikle.com/" target="_blank" style="color:#CCCCCC;">RSS Feed Widget</a><!--Please display the above link in your web page according to Terms of Service.--></div><!-- end feedwind code --><!--  end  feedwind code -->
</div>
    </div>
    </div>
   </div>
  <!--- MIDDELD COLUMN -->

  <!--- RIGHT COLUMN -->
    <div class="clearfix grpelem" id="pu1032"><!-- column -->
      <div class="clearfix colelem" id="u1032"><!-- group -->
       <div class="clearfix grpelem" id="u1035-4"><!-- content -->
        <p>VIDEOS //</p>
       </div>
      </div>
      <div class="clip_frame colelem" id="u1048"><!-- image -->
        
        <ul style="none-style">
          <?php foreach ($videos as $key => $item):?>
            <li class="vbox">
              <div class="media">
                <div class="media-left">
                  <a href="<?php echo $this->Html->url('/videos.html/view/'.$item['Video']['id']); ?>">
                    <img class="media-object" src="<?php echo $item['Video']['default_img']?>" alt="<?php echo $item['Video']['url']?>">
                  </a>
                </div>
                <div class="media-body">
                  <a href="<?php echo $this->Html->url('/videos.html/view/'.$item['Video']['id']); ?>">
                  <h5 class="media-heading"><?php echo $item['Video']['title']?></h5>
                  <p><?php echo substr($item['Video']['description'],0,100); ?></p>
                  </a>
                </div>
              </div>
            </li>
          <?php endforeach;?>
          <li class="more_video"><a href="<?php 
         echo $this->Html->url('/videos.html', array('controller' => 'pages', 'action' => 'videos',1)); ?>"> <i class="fa fa-youtube-play" aria-hidden="true"></i> Ver Más Videos</a> </li>
        </ul>
        <ul style="none-style">
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
      </div>

     </div>
  <!--- RIGHT COLUMN -->

</div>


