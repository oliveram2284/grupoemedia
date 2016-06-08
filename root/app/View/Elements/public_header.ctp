<?php
 
$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 

//Salida: Viernes 24 de Febrero del 2012
 
?>
<div class="clearfix colelem" id="pu103">
        <!-- group -->     
        <a class="nonblock nontext MuseLinkActive clip_frame grpelem" id="u103" href="index.html">      
          <?php echo $this->Html->image('logo.png', array('id'=>'u103_img', 'class'=>'block', 'alt' => 'Grupo Medios','width'=>"235" ,'height'=>"55" ,'url'=>'/')) ?>    
        </a>     
        <div class="clearfix grpelem" id="u776-4">
          <!-- content -->     
          <p><?php echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;?></p> 
        </div>     
        <div class="clearfix grpelem" id="u766">
          <!-- group -->      
          <div class="clip_frame grpelem hidden" id="u728">
            <!-- image -->       
            <?php echo $this->Html->image('rss.png', array('id'=>'u728_img', 'class'=>'block', 'alt' => 'Grupo Medios','width'=>"25" ,'height'=>"25" )) ?>      
          </div>      
          <div class="clip_frame grpelem" id="u713">
            <!-- image -->       
            <a href="https://www.facebook.com/LaRedSanJuan" target="_blank">            
              <?php echo $this->Html->image('fcbk.png', array('id'=>'u713_img', 'class'=>'block', 'alt' => 'Grupo Medios','width'=>"25" ,'height'=>"25" )) ?>
            </a>      
          </div>      
          <div class="clip_frame grpelem" id="u735">
            <!-- image --> 
            <a href="https://twitter.com/OtroDiaParaiso" target="_blank">     
              <?php echo $this->Html->image('twtter.png', array('id'=>'u735_img', 'class'=>'block', 'alt' => 'Grupo Medios','width'=>"25" ,'height'=>"25" )) ?>      
            </a> 
          </div>      
          <div class="clip_frame grpelem" id="u742">
            <!-- image -->       
            <?php echo $this->Html->image('ytb.png', array('id'=>'u742_img', 'class'=>'block', 'alt' => 'Grupo Medios','width'=>"25" ,'height'=>"25" )) ?>      
          </div>         
          <div class="clip_frame grpelem" id="u721">
            <!-- image -->       
            <a href="mailto:info@grupoemedios.com" target="_blank">
              <?php echo $this->Html->image('mail.png', array('id'=>'u721_img', 'class'=>'block',  'alt' => 'Grupo Medios','width'=>"25" ,'height'=>"25" )) ?>
            </a>      
          </div>     
        </div>     
        <div class="clip_frame grpelem" id="u779">
          <!-- image -->      
          <?php echo $this->Html->image('buscador.png', array('id'=>'u779_img', 'class'=>'block', 'alt' => 'Grupo Medios','width'=>"164" ,'height'=>"24" )) ?>     
        </div>    
      </div>


<div class="clearfix colelem" id="pmenuu361"><!-- group -->
       <nav class="MenuBar clearfix grpelem" id="menuu361"><!-- horizontal box -->
        <div class="MenuItemContainer clearfix grpelem" id="u362"><!-- vertical box -->

         <a class="nonblock nontext MenuItem MenuItemWithSubMenu transition clearfix colelem" id="u365" href="<?php  
         echo $this->Html->url('/locales.html', array('controller' => 'pages', 'action' => 'view',1)); ?>">
          <!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u368-4"><!-- content -->
          <p>
            LOCALES
          </p>
        </div>
        </a>
        </div>
        <div class="MenuItemContainer clearfix grpelem" id="u490"><!-- vertical box -->
         <a class="nonblock nontext MenuItem MenuItemWithSubMenu transition clearfix colelem" id="u491" href="<?php  
         echo $this->Html->url('/nacionales.html', array('controller' => 'pages', 'action' => 'view',1)); ?>"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u493-4"><!-- content --><p>NACIONALES</p></div></a>
        </div>
        <div class="MenuItemContainer clearfix grpelem" id="u511"><!-- vertical box -->
         <a class="nonblock nontext MenuItem MenuItemWithSubMenu transition clearfix colelem" id="u512" href="/internacionales.html"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u515-4"><!-- content --><p>INTERNACIONALES</p></div></a>
        </div>
        <div class="MenuItemContainer clearfix grpelem" id="u532"><!-- vertical box -->
         <a class="nonblock nontext MenuItem MenuItemWithSubMenu transition clearfix colelem" id="u535" href="<?php  
         echo $this->Html->url('/deportes.html', array('controller' => 'pages', 'action' => 'view',1)); ?>"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u536-4"><!-- content --><p>DEPORTES</p></div></a>
        </div>
        <div class="MenuItemContainer clearfix grpelem" id="u553"><!-- vertical box -->
         <a class="nonblock nontext MenuItem MenuItemWithSubMenu transition clearfix colelem" id="u554" href="<?php  
         echo $this->Html->url('/videos.html', array('controller' => 'pages', 'action' => 'view',1)); ?>"><!-- horizontal box --><div class="MenuItemLabel NoWrap clearfix grpelem" id="u555-4"><!-- content --><p>VIDEOS</p></div></a>
        </div>
       </nav>
       <div class="clearfix grpelem" id="u613"><!-- group -->
        <div class="clearfix grpelem" id="u616-4"><!-- content -->
         <p>ESCUCHANOS EN VIVO</p>
        </div>
       </div>
      </div>