<!-- <iframe id="ytplayer" type="text/html" width="640" height="390"
  src="http://www.youtube.com/embed/M7lc1UVf-VE?autoplay=1&origin=http://example.com"
  frameborder="0"/> -->

  <?php echo $this->Html->css(array('public_css/noticia.css',))?>

<div class="row">
  <div class="left_col">
    <div class="categ cat_label <?php echo (isset($video['Category']['name']))? 'tag_'.$video['Category']['slug']: 'tag_other'?>">
      <p><?php echo strtoupper($video['Category']['name']);?>  <span id="u855-2"></span></p>
    </div>

    <h2> <?php echo $video['Video']['title'];?></h2>  
   
    
    
    <object width="550" height="390">
  <param name="movie"
         value="https://www.youtube.com/v/<?php echo $video['Video']['youtube_id'];?>?version=3&autoplay=0"></param>
  <param name="allowScriptAccess" value="always"></param>
  <embed src="https://www.youtube.com/v/<?php echo $video['Video']['youtube_id'];?>?version=3&autoplay=0"
         type="application/x-shockwave-flash"
         allowscriptaccess="always"
         width="550" height="390"></embed>
</object>
    

    <div class="clearfix colelem hidden" id="pbuttonu1184"><!-- group -->
       <div class="Button rounded-corners growButton clearfix grpelem" id="buttonu1184"><!-- container box -->
        <div class="clearfix grpelem" id="u1220"><!-- group -->
         <div class="clearfix grpelem" id="u1185-4"><!-- content -->
          <p>+</p>
         </div>
         <div class="clearfix grpelem" id="u1186-4"><!-- content -->
          <p>A</p>
         </div>
        </div>
       </div>
       <div class="Button rounded-corners shrinkButton clearfix grpelem" id="buttonu1187"><!-- container box -->
        <div class="clearfix grpelem" id="u1217"><!-- group -->
         <div class="clearfix grpelem" id="u1188-4"><!-- content -->
          <p>-</p>
         </div>
         <div class="clearfix grpelem" id="u1189-4"><!-- content -->
          <p>A</p>
         </div>
        </div>
       </div>
      </div>




    <p class="body_text">
      <?php echo $video['Video']['description2'];?>
    </p>


    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6&appId=1812080245687185";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <br>

    
    <div class="fb-comments" data-href="<?php echo trim(Router::url( $this->here, true ))?>" data-width="576" data-numposts="100">
    </div>
  </div>
  <div class="right_col">
    <ul class="AccordionWidget clearfix colelem" id="accordionu574"><!-- vertical box -->
      <li class="AccordionPanel clearfix colelem" id="u579"><!-- vertical box -->
        <div class="AccordionPanelTab clearfix colelem" id="u580-4"><!-- content -->
          <p>89.3 RADIO LA RED SAN JUAN</p>
        </div>
        <div class="AccordionPanelContent clearfix colelem" id="u581"><!-- group -->
          <div class="clip_frame grpelem" id="u619"><!-- image -->        
            <?php echo $this->Html->image('radio-online.jpg', array('id'=>'u619_img', 'class'=>'block', 'alt' => 'Grupo Medios','width'=>"314" ,'height'=>"149",'onerror'=>"this.src='".$this->webroot.'img/img_no_found.jpeg'."'" )) ?>      
          </div>
        </div>
      </li>
      <li class="AccordionPanel clearfix colelem" id="u629"><!-- vertical box -->
        <div class="AccordionPanelTab clearfix colelem" id="u633-4"><!-- content -->
          <p>89.7 RADIO</p>
        </div>
        <div class="AccordionPanelContent disn clearfix colelem" id="u630"><!-- group -->
          <div class="clip_frame grpelem" id="u670"><!-- image -->
            <?php echo $this->Html->image('radio-online.jpg', array('id'=>'u619_img', 'class'=>'block', 'alt' => 'Grupo Medios','width'=>"314" ,'height'=>"149" )) ?>       
          </div>
        </div>
      </li>
      <li class="AccordionPanel clearfix colelem" id="u643"><!-- vertical box -->
          <div class="AccordionPanelTab clearfix colelem" id="u645-4"><!-- content --><p>94.1 RADIO</p></div><div class="AccordionPanelContent disn clearfix colelem" id="u644"><!-- group --><div class="clip_frame grpelem" id="u699"><!-- image -->
        <?php echo $this->Html->image('radio-online.jpg', array('id'=>'u619_img', 'class'=>'block', 'alt' => 'Grupo Medios','width'=>"314" ,'height'=>"149" )) ?></div></div></li>
       <li class="AccordionPanel clearfix colelem" id="u652"><!-- vertical box --><div class="AccordionPanelTab clearfix colelem" id="u653-4"><!-- content --><p>HITS RADIO</p></div><div class="AccordionPanelContent disn clearfix colelem" id="u654"><!-- group --><div class="clip_frame grpelem" id="u706"><!-- image -->
        <?php echo $this->Html->image('radio-online.jpg', array('id'=>'u619_img', 'class'=>'block', 'alt' => 'Grupo Medios','width'=>"314" ,'height'=>"149" )) ?>
       </div></div></li>
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