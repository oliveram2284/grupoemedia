
<?php $this->Html->addCrumb('Noticias', '/Posts');?>
<div class="row">
	<div class="col-md-12">
		<!-- COLUMN FILTER DATA TABLE -->
		<div class="widget widget-table">
			<div class="widget-header">
				<h3><i class="fa fa-table"></i> Noticias</h3>
				<!-- <em>- <a href="http://datatables.net/" target="_blank">jQuery Data Table</a>enable filter function on each column</em> -->
				<div class="btn-group widget-header-toolbar">
					<a href="<?php echo $this->Html->url(array("controller" => "posts","action" => "add")); ?>" class="label label-info" >Nuevo</a>
				</div>
			</div>
			<div class="widget-content">
				<table id="datatable-column-filter" class="table table-sorting table-striped table-hover datatable">
					<thead>
						<tr>
							<th>#</th>
							<th>Título</th>
							<th>Categoría</th>
							
							<th>Creador</th>
							<th>Creado</th>
							<th>Mostrar Noticia</th>													
							<th>Acción</th>													
						</tr>
					</thead>
					<tbody>
						<?php foreach ($posts as $index => $row):?>
							<tr>
								<td><?php echo $row['Post']['id']?></td>
								<td><?php echo $row['Post']['title']?></td>
								<td><?php echo $row['Category']['name']?></td>
								<td><?php echo $row['User']['username']?></td>
								<td><?php echo $row['Post']['created']?></td>

								<td>
									<input id="" type="checkbox" class="post_status" data-on="success" data-id="<?php echo $row['Post']['id']?>" data-off="warning" data-on-label="<i class='fa fa-check'></i>" data-off-label="<i class='fa fa-warning'></i>" <?php echo (!$row['Post']['status'])?'checked':''?> >
								</td>
								<td> 
									<a href="<?php echo $this->Html->url(array("controller" => "Posts","action" => "edit",$row['Post']['id'] )); ?>" class="btn btn-success btn-xs " > <i class="fa fa-check-circle"></i> Editar</a> | 
									<a   href="<?php echo $this->Html->url(array("controller" => "Posts","action" => "delete",$row['Post']['id'],1 )); ?>" class="btn btn-danger btn-xs " > <i class="fa fa-trash-o"> </i>Borrar</a>
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

		$("input[type='checkbox'].post_status").change(function(){
			var isChecked=$(this).is(":checked");
			var idPost=$(this).data('id');
			var url="/posts/changeStatus";			

			$.post(url,{id:idPost,status:isChecked},function(the_result){
				console.debug("the_result: %o",the_result);
			});

		});

	});
</script>
