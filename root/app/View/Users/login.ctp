<?php 
$form_option= array(
'class' => 'form-horizontal', 
'role' => 'form',
'inputDefaults' => array(
    'format' => array('before', 'label', 'between', 'input', 'error', 'after'),
    'div' => array('class' => 'form-group'),
    'class' => array('form-control'),
    'label' => array('class' => 'col-lg-2 control-label'),
    'between' => '<div class="col-lg-12">',
    'after' => '</div>',
    'error' => array('attributes' => array('wrap' => 'span', 'class' => 'help-inline')),
));

?>
<div class="wrapper full-page-wrapper page-login text-center">
		<div class="row">
			<div class="col-lg-3"></div>
			<div class="col-lg-6">
				<div class="inner-page">
			<div class="logo">
				<!-- <a href="index.html">
					<img src="assets/img/kingadmin-logo.png" alt="" />
				</a> -->
				<h2>GrupoEmedia</h2>
			</div>	

			<div class="login-box center-block">
				<?php echo $this->Form->create('User',$form_option); ?>
					<p class="title">Bienvenido, ingrese usuario y contraseña </p>

					<?php echo $this->Form->input('username',array( 'label' => array( 'text' => __('Usuario'),'class' => 'col-lg-2 control-label' )));?>
					<?php echo $this->Form->input('password',array( 'label' => array( 'text' => __('Contraseña'),'class' => 'col-lg-2 control-label' )));?>
					<?php 
						
       		?>
				
					<button class="btn btn-custom-primary btn-lg btn-block btn-login"><i class="fa fa-arrow-circle-o-right"></i> Ingresar</button>
				<?php echo $this->Form->end(); ?>
				<!-- 
				<div class="links">
					<p>
						<a href="#">Forgot Username or Password?</a>
					</p>
					<p>
						<a href="#">Create New Account</a>
					</p>
				</div> -->

			</div>
		</div>
			</div>
			<div class="col-lg-3"></div>

		</div>
		<?php echo $this->Session->flash(); ?>
		
		<div class="push-sticky-footer"></div>
	</div>
<?php /* ?>
<div class="users form">

<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <?php echo __('Please enter your username and password'); ?>
        </legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>  

<?php */?>