<?php echo $this->Html->css(array('public_css/noticia.css',))?>

<div class="row">
  <div class="left_col">
    <div class="categ cat_label <?php echo (isset($post['Category']['name']))? 'tag_'.$post['Category']['slug']: 'tag_other'?>">
      <p><?php echo strtoupper($post['Category']['name']);?>  <span id="u855-2"></span></p>
    </div>

    <?php 
          $url= "/".$post['Category']['slug'].".html/". $post['Post']['slug'];
          echo $this->Html->link(strtoupper($post['Post']['title']), $url ,    
            array('class' => 'main_title')
          );
        ?>
    <p class="overview">
      <?php echo $post['Post']['overview'];?>
    </p>
    <?php 
      $img_url=(is_null($post['Post']['image']))? $post['Post']['image_url']: $this->webroot."files/".$post['Post']['image'];
    ?>
    <div class="new_img" style="background-image: url(<?php echo $img_url ?> );"
      >    
    </div>
    <div class="share-button sharer-0" style="display: block;">
      <label class="entypo-export">
        <span>COMPARTIR</span>
      </label>
      <div class="social load top right networks-4">
        <ul>
          <li class="entypo-pinterest" data-network="pinterest"></li>
          <li class="entypo-twitter" data-network="twitter"></li>
          <li class="entypo-facebook" data-network="facebook"></li>
          <li class="entypo-gplus" data-network="google_plus"></li>
          <li class="entypo-paper-plane" data-network="email"></li>
        </ul>
      </div>
    </div>

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
      <?php echo $post['Post']['body'];?>
    </p>

    <?php foreach ($post['File'] as $key => $file):?>      
      <?php if(isset($file['type']) && $file['type']=='audio'   ):?>
        <audio controls>
          <source src="<?php echo $this->webroot.'files/'.$file['path'] ?>" type="audio/ogg">
          <source src="<?php echo $this->webroot.'files/'.$file['path'] ?>" type="audio/mpeg">
          <source src="<?php echo $this->webroot.'files/'.$file['path'] ?>" type='video/3gpp; codecs="mp4v.20.8, samr"'>
          Your browser does not support the audio element.
        </audio>
      <?php endif;?>
    <?php endforeach;?>


    


    <div class="other_news">
      OTRAS NOTICIAS
    </div>


    <div class="block_news">
      <?php foreach($last_three as $post):?>
        <div class="new_box">
          <?php $img_url1=(is_null($post['Post']['image']))? $post['Post']['image_url']: $this->webroot."files/".$post['Post']['image'];?>
          <div class="new_box_img" style="background-image:url(<?php echo $img_url1 ?> )">
          </div>
          <?php  $url= "/".$post['Category']['slug'].".html/". $post['Post']['slug'];?>         
          <a href="<?php echo $this->Html->url($url); ?>"><?php echo $post['Post'] ['title']; ?></a>
        </div>
      <?php endforeach;?>
      
      
      
    </div>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6&appId=1812080245687185";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <br>

    
    <!-- <div class="fb-comments" data-href="<?php echo trim(Router::url( $this->here, true ))?>" data-width="576" data-numposts="100">
    </div> -->
    <div class="fb-comments" data-href="https://www.facebook.com/mauricio.olivera/posts/10209310783345775?notif_t=feedback_reaction_generic&notif_id=1464196308758185" data-width="576" data-numposts="100">
    </div>


    <div class="clip_frame grpelem hidden" id="u1291"><!-- image -->
      <img class="block" id="u1291_img" src="<?php echo $this->webroot."img/imagen pegada 1920x1080-crop-u1291.jpg"; ?>" alt=""/>
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