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
<style type="text/css">
.note-editor .note-editable{
	border-left: 1px solid gray;
	border-right: 1px solid gray;
}


	input[type='file'].form-control  {
		border: none !important;
		background-color: transparent !important;
	}
	input[type="file"] {
	    display: block !important;
	    height: 30px !important;
	    padding: 0px !important;
	}
</style>
<?php $this->Html->addCrumb('Usuarios', '/users');?>
<?php $this->Html->addCrumb('Alta Categoría', null);?>

<div class="row">
	<div class="col-md-12">
		<div class="widget">
			<div class="widget-header">
				<h3>Video Categoría</h3>
			</div>
			<div class="widget-content">
				<?php echo $this->Form->create('Video',$form_option); ?>
			    <?php echo $this->Form->hidden('id');?>

			    <fieldset>
			      <legend><?php echo __('Video'); ?></legend>
			      <?php echo $this->Form->input('url',array( 'label' => array( 'text' => __('URL Video'),'class' => 'col-lg-2 control-label' )));?>
			      <?php echo $this->Form->input('description2',array( 'id'=>'summernote', 'type'=>'textarea', 'label' => array( 'text' => __('Desarrollo'),'class' => 'col-lg-2 control-label' )));?>
			      <?php echo $this->Form->input('category_id',array('default'=>'5',  'empty' => "Seleccionar Categoría",'label' => array('text' => __('Categoría'),'class' => 'col-lg-2 control-label' )));?>

			      
			      
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
	$(document).ready(function() {  
		$('#summernote').summernote({
			fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
  height: 300,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: 900,             // set maximum height of editor
  focus: true                  // set focus to editable area after initializing summernote
});
	});

	
</script>
