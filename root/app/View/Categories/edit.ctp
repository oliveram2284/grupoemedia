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
<?php $this->Html->addCrumb('Alta Categoría', null);?>

<div class="row">
	<div class="col-md-12">
		<div class="widget">
			<div class="widget-header">
				<h3>Alta Categoría</h3>
			</div>
			<div class="widget-content">
				<?php echo $this->Form->create('Category',$form_option); ?>
					<?php echo $this->Form->hidden('id');?>
			    <fieldset>
			      <legend><?php echo __('Categoría'); ?></legend>
			      <?php echo $this->Form->input('name',array( 'label' => array( 'text' => __('Nombre de Categoría'),'class' => 'col-lg-2 control-label' )));?>

			      <?php echo $this->Form->input('slug',array( 'label' => array( 'text' => __('Url'),'class' => 'col-lg-2 control-label' )));?>
			      
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


<script type="text/javascript">
	$(function(){
		$("#CategoryName").keyup(function(){
			var str=$(this).val();
			//console.debug("===> Text: %o",str);
			$("#CategorySlug").val(str.toLowerCase().replace(' ','-'));
		});
	});
</script>
