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

$cakeDescription = __d('cake_dev', 'GrupoEmedia');
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

		echo $this->Html->css(array('cake.generic','bootstrap.min.css','font-awesome.min.css','main','skins/lightgreen'));

		echo $this->fetch('meta');
		echo $this->fetch('demo-style-switcher/style-switcher.css');
		echo $this->fetch('script');
	?>

	<title>Blank Page | KingAdmin - Admin Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="description" content="KingAdmin - Bootstrap Admin Dashboard Theme">
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
	<style type="text/css">
		#map_canvas {
		   display: block;
		   height: 800px;


		}
	</style>
</head>

<body class="demo-only-page-blank">
	<?php echo $this->fetch('content');?>
	


	<!-- FOOTER -->
	<?php echo $this->element('footer');?>
	
	<!-- END FOOTER -->

	

	<!-- Javascript -->
	<?php echo $this->Html->script('http://maps.google.com/maps/api/js?key=AIzaSyDQbDtglcKzcdbVykj1DZJLO6LgcWb6nPg&sensor=true', false); ?>
	<?php echo $this->Html->script(array(
	'jquery/jquery-2.1.0.min.js',
	'bootstrap/bootstrap.js',
	'plugins/modernizr/modernizr.js',
	'plugins/bootstrap-tour/bootstrap-tour.custom.js',
	'king-common.js',
	'plugins/bootstrap-multiselect/bootstrap-multiselect.js',
	'king-form-layouts.js'
	)); ?>
</body>
</html>