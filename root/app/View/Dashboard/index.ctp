<div class="row">

	<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 ">          
			<!-- small box -->          
			<div class="small-box bg-blue">              
				<div class="inner">                  
					<!--<h3>Socios</h3>-->
					<h3> <?php echo $this->Html->link('Notícias','/posts'); ?></h3>
					<p>Listado</p>
				</div>
        <div class="icon">
            <i class="ion ion-ios7-pricetag-outline"></i>
        </div>
        <?php echo $this->Html->link(
	        $this->Html->tag('i', '', array('class' => 'fa fa-plus')) . "&nbsp;Nuevo",'/posts/add',   
	        array('class' => 'small-box-footer', 'escape' => false)
	        ); 		
	      ?>
        <!-- <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a> -->
    	</div>
    </div><!-- ./col -->
	<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 ">          
			<!-- small box -->          
			<div class="small-box bg-yellow">              
				<div class="inner">                  
					<!--<h3>Socios</h3>-->
					<h3> <?php echo $this->Html->link('Usuarios','/users'); ?></h3>
					<p>Listado</p>
				</div>
        <div class="icon">
            <i class="ion ion-person-stalker"></i>
        </div>
        <?php echo $this->Html->link(
	        $this->Html->tag('i', '', array('class' => 'fa fa-plus')) . " Nuevo ",'/users/add',   
	        array('class' => 'small-box-footer', 'escape' => false)
	        ); 		
	      ?>
        <!-- <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a> -->
    	</div>
    </div><!-- ./col -->



    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 ">                    
			<!-- small box -->          
			<div class="small-box bg-green">              
				<div class="inner">                  
					<!--<h3>Socios</h3>-->
					<h3><?php echo $this->Html->link('Categorias','/category'); ?></h3>
					<p>Listado</p>
				</div>
        <div class="icon">
            <i class="ion ion-ios7-briefcase-outline"></i>
        </div>
        <?php echo $this->Html->link(
	        $this->Html->tag('i', '', array('class' => 'fa fa-plus')) . "&nbsp;Nuevo",'/category/add',   
	        array('class' => 'small-box-footer', 'escape' => false)
	        ); 		
	      ?>
        <!-- <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a> -->
    	</div>
    </div><!-- ./col -->


    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 ">                    
			<!-- small box -->          
			<div class="small-box bg-red">              
				<div class="inner">                  
					<!--<h3>Socios</h3>-->
					<h3><?php echo $this->Html->link('Videos','/videos'); ?></h3>
					<p>Listado</p>
				</div>
        <div class="icon">
            <i class="ion ion-ios7-briefcase-outline"></i>
        </div>
        <?php echo $this->Html->link(
	        $this->Html->tag('i', '', array('class' => 'fa fa-plus')) . "&nbsp;Nuevo",'/videos/add',   
	        array('class' => 'small-box-footer', 'escape' => false)
	        ); 		
	      ?>
        <!-- <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a> -->
    	</div>
    </div><!-- ./col -->

    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 ">                    
			<!-- small box -->          
			<div class="small-box bg-red">              
				<div class="inner">                  
					<!--<h3>Socios</h3>-->
					<h3><?php echo $this->Html->link('Publicidad','/banners'); ?></h3>
					<p>Listado</p>
				</div>
        <div class="icon">
            <i class="ion ion-ios7-briefcase-outline"></i>
        </div>
        <?php echo $this->Html->link(
	        $this->Html->tag('i', '', array('class' => 'fa fa-plus')) . "&nbsp;Nuevo",'/banners/add',   
	        array('class' => 'small-box-footer', 'escape' => false)
	        ); 		
	      ?>
        <!-- <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a> -->
    	</div>
    </div><!-- ./col -->




    
    
   

    

    
    
</div>