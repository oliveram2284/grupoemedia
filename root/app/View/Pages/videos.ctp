<?php echo $this->Html->css(array('public_css/noticia.css',))?>

<div class="row">
  <div class="left_col">

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

    



    


   
    <div class="clip_frame grpelem" id="u1291"><!-- image -->
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