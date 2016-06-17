<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Grupoemedia');
$cakeVersion =  "";//__d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>

	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('bootstrap.min.css','font-awesome.min.css','main','skins/fullbright','custom','clockpicker','ionicons.min'));

		echo $this->fetch('meta');
		echo $this->fetch('demo-style-switcher/style-switcher.css');
		echo $this->fetch('script');
	?>

	<title>GrupoEmedia</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="description" content="GrupoEmedia">
	<meta name="author" content="The Develovers">
	<!-- CSS -->
	<!--[if lte IE 9]>
			<link href="css/main-ie.css" rel="stylesheet" type="text/css" media="screen" />
			<link href="css/main-ie-part2.css" rel="stylesheet" type="text/css" media="screen" />
	<![endif]-->
	<!-- CSS for demo style switcher. you can remove this -->
	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/kingadmin-favicon144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/kingadmin-favicon114x114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/kingadmin-favicon72x72.png">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="ico/kingadmin-favicon57x57.png">
	<link rel="shortcut icon" href="ico/favicon.png">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<?php echo $this->Html->script(array(
	'jquery/jquery-2.1.0.js'));?> 
	<style type="text/css">
	.truncate {
  width: 250px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
	</style>
</head>

<body class="demo-only-page-blank">
	<!-- WRAPPER -->
	
	<div class="wrapper">

		<!-- TOP BAR -->
		<?php echo $this->element('header');?>		
		<!-- /top -->

		<!-- BOTTOM: LEFT NAV AND RIGHT MAIN CONTENT -->
		<div class="bottom">
			<div class="container">
				<div class="row">
					
					<?php echo $this->element('leftsidebar');?>					
					<!-- top general alert -->
					<!-- <div class="alert alert-danger top-general-alert">
						<span>If you <strong>can't see the logo</strong> on the top left, please reset the style on right style switcher (for upgraded theme only).</span>
						<button type="button" class="close">&times;</button>
					</div> -->
					<!-- end top general alert -->
					<!-- content-wrapper -->

						<!-- top general alert -->
							<!-- <div class="alert alert-danger top-general-alert">
								<span>If you <strong>can't see the logo</strong> on the top left, please reset the style on right style switcher (for upgraded theme only).</span>
								<button type="button" class="close">&times;</button>
							</div> -->
						<!-- end top general alert -->


						<div class="col-md-10 content-wrapper">
						<div class="row">
							
							<div class="col-lg-4  ">								
								<?php /*echo $this->Html->getCrumbsCustom('', array(  'text' =>'<i class="fa fa-home"></i> Inicio',
    'url' => '/',    'escape' => false));	*/?>								
							</div>

							<div class="col-lg-8 hidden">
								<div class="top-content">
									<ul class="list-inline quick-access">
										<li>
											<a href="charts-statistics-interactive.html">
												<div class="quick-access-item bg-color-green">
													<i class="fa fa-bar-chart-o"></i>
													<h5>CHARTS</h5>
													<em>basic, interactive, real-time</em>
												</div>
											</a>
										</li>
										<li>
											<a href="page-inbox.html">
												<div class="quick-access-item bg-color-blue">
													<i class="fa fa-envelope"></i>
													<h5>INBOX</h5>
													<em>inbox with gmail style</em>
												</div>
											</a>
										</li>
										<li>
											<a href="tables-dynamic-table.html">
												<div class="quick-access-item bg-color-orange">
													<i class="fa fa-table"></i>
													<h5>DYNAMIC TABLE</h5>
													<em>tons of features and interactivity</em>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- main -->

						<div class="content">
							
							

							<div class="main-header">
								<h2><?php echo (isset($pagetitle))? $pagetitle:'Blank Page';  ?></h2>
								<em><?php echo (isset($label))? $label:'';  ?></em>

								
							</div>
							<?php echo $this->Session->flash(); ?>
							<div class="main-content">


								<?php echo $this->fetch('content');?>
							</div>
							<!-- /main-content -->
						</div>
						<!-- /main -->
					</div>



					
					<!-- /content-wrapper -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- END BOTTOM: LEFT NAV AND RIGHT MAIN CONTENT -->
		<div class="push-sticky-footer">
		</div>
	</div>
	<!-- /wrapper -->


	<!-- FOOTER -->
	
	<?php /*echo $this->element('sql_dump'); */?>
	<?php echo $this->element('footer');?>
	
	<!-- END FOOTER -->

	

	<!-- Javascript -->
	
	<?php echo $this->Html->script(array(
	'jquery/jquery-2.1.0.js',
	'bootstrap/bootstrap.js',
	'plugins/modernizr/modernizr.js',
	'plugins/bootstrap-tour/bootstrap-tour.custom.js',
	'king-common.js',
	'plugins/bootstrap-multiselect/bootstrap-multiselect.js',
	'king-form-layouts.js',
	'plugins/datatable/jquery.dataTables.min.js',
	'plugins/datatable/exts/dataTables.colVis.bootstrap.js',
	'plugins/datatable/exts/dataTables.colReorder.min.js',
	'plugins/datatable/exts/dataTables.tableTools.min.js',
	'plugins/datatable/dataTables.bootstrap.js',
	'plugins/jqgrid/jquery.jqGrid.min.js',
	'plugins/jqgrid/i18n/grid.locale-en.js',
	'plugins/jqgrid/jquery.jqGrid.fluid.js',

	
	//'king-table.js'
	'jquery-ui/jquery-ui-1.10.4.custom.min.js',
	'plugins/bootstrap-switch/bootstrap-switch.min.js',
	'plugins/bootstrap-switch/bootstrap-switch.js',
	'plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js',
	'plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js',
	'king-elements.js',
	'plugins/bootstrap-datepicker/bootstrap-datepicker.js',
	'clockpicker.js',
	'plugins/summernote/summernote.min.js',
	'plugins/markdown/markdown.js',
	'plugins/markdown/to-markdown.js',
	'plugins/markdown/bootstrap-markdown.js',
	'king-elements.js',

	)); ?>

	<!-- 
	<script src="assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="assets/js/bootstrap/bootstrap.js"></script>
	<script src="assets/js/plugins/modernizr/modernizr.js"></script>
	<script src="assets/js/plugins/bootstrap-tour/bootstrap-tour.custom.js"></script>
	<script src="assets/js/king-common.js"></script>
	<script src="demo-style-switcher/assets/js/deliswitch.js"></script>
	<script src="assets/js/plugins/datatable/jquery.dataTables.min.js"></script>
	<script src="assets/js/plugins/datatable/exts/dataTables.colVis.bootstrap.js"></script>
	<script src="assets/js/plugins/datatable/exts/dataTables.colReorder.min.js"></script>
	<script src="assets/js/plugins/datatable/exts/dataTables.tableTools.min.js"></script>
	<script src="assets/js/plugins/datatable/dataTables.bootstrap.js"></script>
	<script src="assets/js/plugins/jqgrid/jquery.jqGrid.min.js"></script>
	<script src="assets/js/plugins/jqgrid/i18n/grid.locale-en.js"></script>
	<script src="assets/js/plugins/jqgrid/jquery.jqGrid.fluid.js"></script>
	<script src="assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
	<script src="assets/js/king-table.js"></script>
-->
<script type="text/javascript">
	$(function(){
		$.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '<Ant',
        nextText: 'Sig>',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };

    $.datepicker.setDefaults($.datepicker.regional['es']);

   /* $('#summernote').summernote({
			fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
			  height: 500,                 
			  minHeight: null,             
			  maxHeight: 900,             
			  focus: true                 
			});

		});*/
	




	});


</script>
</body>
</html>