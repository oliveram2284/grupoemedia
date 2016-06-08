<!-- app/View/Users/add.ctp -->
<link href="http://hayageek.github.io/jQuery-Upload-File/4.0.10/uploadfile.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://hayageek.github.io/jQuery-Upload-File/4.0.10/jquery.uploadfile.min.js"></script>
<style type="text/css">
.ajax-upload-dragdrop{
	width: 100%;
}
</style>
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

	 $url=Router::url(array('controller' => 'banners', 'action' => 'upload_image'));

?>
<?php $this->Html->addCrumb('Usuarios', '/users');?>
<?php $this->Html->addCrumb('Alta Categoría', null);?>

<div class="row">
	<div class="col-md-12">
		<div class="widget">
			<div class="widget-header">
				<h3>Nuevo Banner</h3>
			</div>
			<div class="widget-content">
				<?php echo $this->Form->create('Banner',$form_option); ?>
					<?php echo $this->Form->hidden('id');?>
			    <fieldset>
			      <legend><?php echo __('Banner'); ?></legend>
			      <?php echo $this->Form->input('title',array( 'label' => array( 'text' => __('Titulo Banner'),'class' => 'col-lg-2 control-label' )));?>

			      <?php echo $this->Form->input('link',array( 'label' => array( 'text' => __('Url'),'class' => 'col-lg-2 control-label' )));?>
			      <div class="form-group">
			      	<label class="col-lg-2 control-label">Imagen</label>
			      	<div class="col-lg-6">
			      		<div id="fileuploader">Subir Imagen</div>
			      	</div>
			      	<?php echo $this->Form->hidden('imagen');?>
			      </div>
			      
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




<script>
$(document).ready(function()
{
	$("#fileuploader").uploadFile({
	url:"<?php echo $url?>",
	fileName:"myfile",
	returnType:"json",
	showDelete: true,
	showDownload:false,
	statusBarWidth:600,
	dragdropWidth:600,
	//maxFileSize:200*1024,
	showPreview:true,
	previewHeight: "100px",
	previewWidth: "100px",
	onSuccess:function(files,data,xhr,pd)
	{
		console.debug(" Data: %o", data[0]);
		$("#BannerImagen").val(data[0]);
		$("#eventsmessage").html($("#eventsmessage").html()+"<br/> ==> Success for: "+JSON.stringify(data));
		
	},deleteCallback: function (data, pd) {
    for (var i = 0; i < data.length; i++) {
        $.post("delete.php", {op: "delete",name: data[i]},
            function (resp,textStatus, jqXHR) {
                //Show Message	
                alert("File Deleted");
            });
    }
    pd.statusbar.hide(); //You choice.

}
	});
});
</script>
