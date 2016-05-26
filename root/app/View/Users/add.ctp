<!-- app/View/Users/add.ctp -->
<?php 
	$form_option= array(
'class' => 'form-horizontal', 
'role' => 'form',
'inputDefaults' => array(
    'format' => array('before', 'label', 'between', 'input', 'error', 'after'),
    'div' => array('class' => 'form-group'),
    'class' => array('form-control'),
    'label' => array('class' => 'col-lg-2 control-label'),
    'between' => '<div class="col-lg-6">',
    'after' => '</div>',
    'error' => array('attributes' => array('wrap' => 'span', 'class' => 'help-inline')),
));
?>
<?php $this->Html->addCrumb('Usuarios', '/users');?>
<?php $this->Html->addCrumb('Alta Usuario', null);?>

<div class="row">
	<div class="col-md-12">
		<div class="widget">
			<div class="widget-header">
				<h3>Alta Usuario</h3>
			</div>
			<div class="widget-content">
				<?php echo $this->Form->create('User',$form_option); ?>
			    <fieldset>
			      <legend><?php echo __('Add User'); ?></legend>
			      <?php echo $this->Form->input('username',array( 'label' => array( 'text' => __('Nombre de Usuario'),'class' => 'col-lg-2 control-label' )));?>
			      <?php echo $this->Form->input('password',array( 'label' => array( 'text' => __('Contraseña'),'class' => 'col-lg-2 control-label' )));?>
			      <?php echo $this->Form->input('role',array( 'label' => array( 'text' => __('Tipo de Comercio'),'class' => 'col-lg-2 control-label' ),'options'=>array('administrador' => 'Administrador', 'usuario' => 'Usuario'),));?>
									
			        <div class=" col-md-5 pull-right" >				
						<button class="btn btn-primary " type="submit">					
							<i class="fa fa-check-circle"></i>					
							Guardar				
						</button>					
					</div> 
			    </fieldset>
			   
				<?php echo $this->Form->end(); ?>
			</div>
		</div>
	</div>
</div>

