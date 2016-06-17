<style type="text/css">
.cake-error{ display: none;}
</style>

<!-- include libraries(jQuery, bootstrap) -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

<!-- include summernote css/js-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.js"></script>

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
    'between' => '<div class="col-lg-10">',
    'after' => '</div>',
    'error' => array('attributes' => array('wrap' => 'span', 'class' => 'help-block alert-danger','style'=>'height:60px; padding:20px')),
  ),'type' => 'file','novalidate'=>true
);
?>
<?php $this->Html->addCrumb('Usuarios', '/users');?>
<?php $this->Html->addCrumb('Alta Categoría', null);?>
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

<div class="row">
	<div class="col-md-12">
		<div class="widget">
			<div class="widget-header">
				<h3>Alta Notícia</h3>
			</div>
			<div class="widget-content">
				<div class="alert alert-danger alert-dismissible hidden" id="msg_error" role="alert">
					
				</div>
				
				<?php echo $this->Form->create('Post',$form_option); ?>
			    <fieldset>
			      <legend><?php echo __('Notícia'); ?></legend>
			      <?php echo $this->Form->hidden('user_id',array('value'=>$user_id));?>
			      <?php echo $this->Form->input('title',array( 'label' => array( 'text' => __('Título'),'class' => 'col-lg-2 control-label' )));?>
			      <?php echo $this->Form->input('overview',array( 'type'=>'textarea', 'label' => array( 'text' => __('Copete'),'class' => 'col-lg-2 control-label' )));?>
			      <?php echo $this->Form->input('body',array( 'id'=>'summernote', 'type'=>'textarea', 'label' => array( 'text' => __('Desarrollo'),'class' => 'col-lg-2 control-label' )));?>


			      <?php echo $this->Form->input('image',array( 'type' => 'file','class'=>'dssd', 'label' => array( 'text' => __('Imagen'),'class' => 'col-lg-2 control-label' )));?>
			      <?php echo $this->Form->input('image_url',array( 'label' => array( 'text' => __('Imagen URL'),'class' => 'col-lg-2 control-label' )));?>
			      <?php echo $this->Form->input('category_id',array( 'label' => array( 'text' => __('Categoría'),'class' => 'col-lg-2 control-label' )));?>
			     
			      <?php echo $this->Form->input('audio1',array( 'type' => 'file', 'label' => array( 'text' => __('Audio 1'),'class' => 'col-lg-2 control-label' )));?>
			      <?php echo $this->Form->input('audio2',array( 'type' => 'file', 'label' => array( 'text' => __('Audio 2'),'class' => 'col-lg-2 control-label' )));?>
			      <?php echo $this->Form->input('audio3',array( 'type' => 'file', 'label' => array( 'text' => __('Audio 3'),'class' => 'col-lg-2 control-label' )));?>

			      <?php echo $this->Form->input('order',array( 'label' => array( 'text' => __('Orden'),'class' => 'col-lg-2 control-label' )));?>
			      
						

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

		//$('#summernote').summernote({airMode: true});
		/*
		$('#summernote').summernote({
		  height: 400,                 // set editor height
		  minHeight: 150,             // set minimum height of editor
		  maxHeight: null,             // set maximum height of editor
		  focus: true                  // set focus to editable area after initializing summernote
		});

		$("form").submit(function(){
			var markupStr = $('#summernote').summernote('code').val();
			console.debug("===> markupStr: %o",markupStr);
			return false;
		});
	*/
	});

	$(document).ready(function() {  
		$('#summernote').summernote({
			fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
		  height: 500,                 // set editor height
		  minHeight: null,             // set minimum height of editor
		  maxHeight: 900,             // set maximum height of editor
		  focus: true                  // set focus to editable area after initializing summernote
		});

		$("form").submit(function(){
			console.debug("===> SUBMIT");
			var file=$("#PostImage").val();
			var img_url=$("#PostImageUrl").val();
			console.debug("file VALUE: %o",file);
			console.debug("img_url VALUE: %o",img_url);
			if(file=="" && img_url==""){
				//$("#msg_error").html("<span></span>");
				var output='<button type="button" class="close" data-dismiss="alert" ';
				output+=' aria-label="Close"><span aria-hidden="true">&times;</span></button>  ';
				output+='<strong>Error!</strong> Debe seleccionar una imagen para crear una noticia';
				$("#msg_error").html(output).removeClass("hidden");
				return false;
			}else{
				return true;
			}

		});

	});
</script>
