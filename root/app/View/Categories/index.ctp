<?php $this->Html->addCrumb('Usuarios', '/users');?>
<div class="row">
	<div class="col-md-12">
		<!-- COLUMN FILTER DATA TABLE -->
		<div class="widget widget-table">
			<div class="widget-header">
				<h3><i class="fa fa-table"></i> Usuarios</h3>
				<!-- <em>- <a href="http://datatables.net/" target="_blank">jQuery Data Table</a>enable filter function on each column</em> -->
				<div class="btn-group widget-header-toolbar">
					<a href="<?php echo $this->Html->url(array("controller" => "categories","action" => "add")); ?>" class="label label-info" >Nueva Categoría</a>
				</div>
			</div>
			<div class="widget-content">
				<table id="datatable-column-filter" class="table table-sorting table-striped table-hover datatable">
					<thead>
						<tr>
							<th>#</th>
							<th>Usuario</th>
							
							<th>Estado</th>													
							<th>Acción</th>													
						</tr>
					</thead>
					<tbody>
						<?php foreach ($categories as $index => $row):?>
							<tr>
								<td><?php echo $row['Category']['id']?></td>
								<td><?php echo $row['Category']['name']?></td>
								
								<td>
									<input type="checkbox" checked class="switch-demo switch-mini" data-on="success" data-off="warning" data-on-label="<i class='fa fa-check'></i>" data-off-label="<i class='fa fa-warning'></i>">
								</td>
								<td>
									<a href="<?php echo $this->Html->url(array("controller" => "categories","action" => "edit",$row['Category']['id'] )); ?>" class="btn btn-success btn-xs " > <i class="fa fa-check-circle"></i> Editar</a> | 
									<a   href="<?php echo $this->Html->url(array("controller" => "categories","action" => "delete",$row['Category']['id'],1 )); ?>" class="btn btn-danger btn-xs " > <i class="fa fa-trash-o"> </i>Borrar</a>
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