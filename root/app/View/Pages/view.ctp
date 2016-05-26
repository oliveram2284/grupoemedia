
<style type="text/css">
#u989{
  background-color: transparent;
}

#u1096_position_content {
  min-height: 105px;
}
</style>
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
        <div class="clip_frame grpelem" id="u872"><!-- image -->
          <?php echo $this->Html->image('shareface.png', array('id'=>'u872_img', 'class'=>'block', 'alt' => 'Grupo Medios','width'=>"20" ,'height'=>"20" )) ?>
        </div>
        <div class="clip_frame grpelem" id="u880"><!-- image -->
          <?php echo $this->Html->image('sharetweet.png', array('id'=>'u880', 'class'=>'block', 'alt' => 'Grupo Medios','width'=>"20" ,'height'=>"20" ,'onerror'=>"this.src='".$this->webroot.'img/img_no_found.jpeg'."'")) ?>
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
      <li class="AccordionPanel clearfix colelem" id="u579"><!-- vertical box --><div class="AccordionPanelTab clearfix colelem" id="u580-4"><!-- content --><p>89.3 RADIO LA RED SAN JUAN</p></div><div class="AccordionPanelContent clearfix colelem" id="u581"><!-- group --><div class="clip_frame grpelem" id="u619">
        <!-- image -->
        <?php echo $this->Html->image('radio-online.jpg', array('id'=>'u619_img', 'class'=>'block', 'alt' => 'Grupo Medios','width'=>"314" ,'height'=>"149" )) ?>

      </div></div></li>
      <li class="AccordionPanel clearfix colelem" id="u629"><!-- vertical box --><div class="AccordionPanelTab clearfix colelem" id="u633-4"><!-- content --><p>89.7 RADIO</p></div><div class="AccordionPanelContent disn clearfix colelem" id="u630"><!-- group --><div class="clip_frame grpelem" id="u670">
        <!-- image -->
        
        <?php echo $this->Html->image('radio-online.jpg', array('id'=>'u670_img', 'class'=>'block', 'alt' => 'Grupo Medios','width'=>"314" ,'height'=>"149" )) ?>

      </div></div></li>
      <li class="AccordionPanel clearfix colelem" id="u643"><!-- vertical box --><div class="AccordionPanelTab clearfix colelem" id="u645-4"><!-- content --><p>94.1 RADIO</p></div><div class="AccordionPanelContent disn clearfix colelem" id="u644"><!-- group --><div class="clip_frame grpelem" id="u699">
        <!-- image -->
        
        <?php echo $this->Html->image('radio-online.jpg', array('id'=>'u699_img', 'class'=>'block', 'alt' => 'Grupo Medios','width'=>"314" ,'height'=>"149" )) ?>
      </div></div></li>
      <li class="AccordionPanel clearfix colelem" id="u652"><!-- vertical box --><div class="AccordionPanelTab clearfix colelem" id="u653-4"><!-- content --><p>HITS RADIO</p></div><div class="AccordionPanelContent disn clearfix colelem" id="u654"><!-- group --><div class="clip_frame grpelem" id="u706">
        <!-- image -->
       
        <?php echo $this->Html->image('radio-online.jpg', array('id'=>'u706_img', 'class'=>'block', 'alt' => 'Grupo Medios','width'=>"314" ,'height'=>"149" )) ?>
      </div></div></li>
     </ul>
    </div>

    <div class="clearfix colelem" id="ppu1080"><!-- group -->

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
              <div class="clip_frame grpelem" id="u1094"><!-- image -->          
                <?php echo $this->Html->image('shareface.png', array('id'=>'u1094_img', 'class'=>'block', 'alt' => 'Grupo Medios','width'=>"20" ,'height'=>"20" )) ?>          
              </div>         
              <div class="clip_frame grpelem" id="u1092"><!-- image -->          
                <?php echo $this->Html->image('sharetweet.png', array('id'=>'u1092_img', 'class'=>'block', 'alt' => 'Grupo Medios','width'=>"20" ,'height'=>"20" )) ?>         
              </div>        
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
              <div class="clip_frame grpelem" id="u1094"><!-- image -->          
                <?php echo $this->Html->image('shareface.png', array('id'=>'u1094_img', 'class'=>'block', 'alt' => 'Grupo Medios','width'=>"20" ,'height'=>"20" )) ?>          
              </div>         
              <div class="clip_frame grpelem" id="u1092"><!-- image -->          
                <?php echo $this->Html->image('sharetweet.png', array('id'=>'u1092_img', 'class'=>'block', 'alt' => 'Grupo Medios','width'=>"20" ,'height'=>"20" )) ?>         
              </div>        
            </div>       
          </div>      
        </div>

      <?php endfor;?>   
      <?php endif;?>   
   </div>
  <!--- MIDDELD COLUMN -->

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