<?php $this->Html->addCrumb('Usuarios', '/users');?>
<div class="row">
	<div class="col-md-12">
		<!-- COLUMN FILTER DATA TABLE -->
		<div class="widget widget-table">
			<div class="widget-header">
				<h3><i class="fa fa-table"></i> Listado de Banners</h3>
				<!-- <em>- <a href="http://datatables.net/" target="_blank">jQuery Data Table</a>enable filter function on each column</em> -->
				<div class="btn-group widget-header-toolbar">
					<a href="<?php echo $this->Html->url(array("controller" => "banners","action" => "add")); ?>" class="label label-info" >Nuevo Banner</a>
				</div>
			</div>
			<div class="widget-content">
				<table id="datatable-column-filter" class="table table-sorting table-striped table-hover datatable">
					<thead>
						<tr>
							<th>#</th>
							<th>Nombre</th>
							
							<th>Mostrar en Pagina Principal</th>		
							<th>Mostrar en Página de Categoría</th>		
							<th>Mostrar en en Noticia</th>		
							<th>Acción</th>													
						</tr>
					</thead>
					<tbody>
						<?php foreach ($categories as $index => $row):?>
							<tr>
								<td><?php echo $row['Banner']['id']?></td>
								<td><?php echo $row['Banner']['title']?></td>
								
								<td>
									<input type="checkbox" data-id="<?php echo $row['Banner']['id']?>" data-view="1" data-value="<?php echo $row['Banner']['index']?>"  <?php echo ($row['Banner']['index']==1)?'checked':''?> > 
								</td>
								<td>
									<input type="checkbox"  data-id="<?php echo $row['Banner']['id']?>" data-view="2" data-value="<?php echo $row['Banner']['category']?>" <?php echo ($row['Banner']['category']==1)?'checked':''?>>
								</td>
								<td>
									<input type="checkbox" data-id="<?php echo $row['Banner']['id']?>" data-view="3" data-value="<?php echo $row['Banner']['single']?>"  <?php echo ($row['Banner']['single']==1)?'checked':''?>>
								</td>
								<td>
									<a href="<?php echo $this->Html->url(array("controller" => "banners","action" => "edit",$row['Banner']['id'] )); ?>" class="btn btn-success btn-xs " > <i class="fa fa-check-circle"></i> Editar</a> | 
									<a   href="<?php echo $this->Html->url(array("controller" => "banners","action" => "delete",$row['Banner']['id'],1 )); ?>" class="btn btn-danger btn-xs " > <i class="fa fa-trash-o"> </i>Borrar</a>
								</td>
							</tr>
						<?php endforeach;?>
						
					</tbody>
				</table>
			</div>
		</div>
		<!-- END COLUMN FILTER DATA TABLE -->
	</div>
</div>

<script type="text/javascript">
  $(function(){
    $("table tr td input[type=checkbox]").click(function(){
    
    	var checkbox=$(this);
    	//console.debug("===> checkbox: %o",input_data);
    	var val=0
    	if(checkbox.is(":checked")){
    		val=1;
    	}else{
    		val=0;
    	}

    	console.debug("===> checkbox: %o",val);
    	var url="/banners/changeShow";			

			$.post(url,{id:checkbox.data('id'),section:checkbox.data('view'),value:val},function(the_result){
				console.debug("the_result: %o",the_result);
			});




    });
  });
  
</script>