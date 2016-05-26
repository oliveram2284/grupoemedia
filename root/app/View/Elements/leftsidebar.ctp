<!-- left sidebar -->
					<div class="col-md-2 left-sidebar">

						<!-- main-nav -->
						<nav class="main-nav">

							<ul class="main-menu">
								
								<li>
									<a href="<?php echo $this->Html->url('/admin'); ?>"><i class="fa fa-dashboard fa-fw fa-2x"></i>
										<span class="text"> &nbsp; &nbsp;Inicio</span>
									</a>
								</li>
								<li class="">
									<a href="#" class="js-sub-menu-toggle"><i class="fa fa-group fa-fw fa-2x"></i>
										<span class="text"> &nbsp; &nbsp; Usuarios</span>
										<i class="toggle-icon fa fa-angle-left"></i>
									</a>
									<ul class="sub-menu">
										<li>
											<a href="<?php echo $this->Html->url(array("controller" => "users","action" => "add")); ?>">
												<span class="text">Nuevo</span>
											</a>
										</li>
										<li>
											<a href="<?php echo $this->Html->url(array("controller" => "users","action" => "index")); ?>">
												<span class="text">Listar</span>
											</a>
										</li>
										
										<!-- <li>
											<a href="page-invoice.html">
												<span class="text">Buscar</span>
											</a>
										</li> -->	
									</ul>
								</li>
								<li>
									<a href="#" class="js-sub-menu-toggle"><i class="fa fa-newspaper-o fa-fw fa-2x"></i>
										<span class="text"> &nbsp; &nbsp; Noticias</span>
										<i class="toggle-icon fa fa-angle-left"></i>
									</a>
									<ul class="sub-menu ">
										<li>
											<a href="<?php echo $this->Html->url(array("controller" => "posts","action" => "add")); ?>">
												<span class="text">Nuevo</span>
											</a>
										</li>
										<li>
											<a href="<?php echo $this->Html->url(array("controller" => "posts","action" => "index")); ?>">
												<span class="text">Listar</span>
											</a>
										</li>
										
										<!-- <li>
											<a href="page-invoice.html">
												<span class="text">Buscar</span>
											</a>
										</li> -->	
									</ul>
								</li>

								<li>
									<a href="#" class="js-sub-menu-toggle"><i class="fa fa-tag fa-fw fa-2x"></i>
										<span class="text">&nbsp; &nbsp;Categorias</span>
										<i class="toggle-icon fa fa-angle-left"></i>
									</a>
									<ul class="sub-menu">
										<li>
											<a href="<?php echo $this->Html->url(array("controller" => "categories","action" => "add")); ?>">
												<span class="text">Nuevo</span>
											</a>
										</li>
										<li>
											<a href="<?php echo $this->Html->url(array("controller" => "categories","action" => "index")); ?>">
												<span class="text">Listar</span>
											</a>
										</li>
									</ul>
								</li>

								<li class="">
									<a href="#" class="js-sub-menu-toggle"><i class="fa fa-file-video-o fa-fw fa-2x"></i>
										<span class="text">&nbsp; &nbsp;Videos</span>
										<i class="toggle-icon fa fa-angle-left"></i>
									</a>
									<ul class="sub-menu">
										<li>
											<a href="<?php echo $this->Html->url(array("controller" => "videos","action" => "add")); ?>">
												<span class="text">Nuevo</span>
											</a>
										</li>
										<li>
											<a href="<?php echo $this->Html->url(array("controller" => "videos","action" => "index")); ?>">
												<span class="text">Listar</span>
											</a>
										</li>
									</ul>
								</li>

								<li class="hidden">
									<a href="#" class="js-sub-menu-toggle"><i class="fa fa-usd fa-fw fa-2x"></i>
										<span class="text">&nbsp; &nbsp;Lista de Precios</span>
										<i class="toggle-icon fa fa-angle-left"></i>
									</a>
									<ul class="sub-menu">
										<li>
											<a href="<?php echo $this->Html->url(array("controller" => "pricelist","action" => "add")); ?>">
												<span class="text">Nuevo</span>
											</a>
										</li>
										<li>
											<a href="<?php echo $this->Html->url(array("controller" => "pricelist","action" => "index")); ?>">
												<span class="text">Listar</span>
											</a>
										</li>
										
										<!-- <li>
											<a href="page-invoice.html">
												<span class="text">Buscar</span>
											</a>
										</li> -->	
									</ul>
								</li>
								<li class="hidden">
									<a href="#" class="js-sub-menu-toggle"><i class="fa fa-globe la-fw fa-2x"></i>
										<span class="text">&nbsp; &nbsp; Zonas</span>
										<i class="toggle-icon fa fa-angle-left"></i>
									</a>
									<ul class="sub-menu">
										<li>
											<a href="<?php echo $this->Html->url(array("controller" => "zones","action" => "add")); ?>">
												<span class="text">Nuevo</span>
											</a>
										</li>
										<li>
											<a href="<?php echo $this->Html->url(array("controller" => "zones","action" => "index")); ?>">
												<span class="text">Listar</span>
											</a>
										</li>		

										<li>
											<a href="<?php echo $this->Html->url(array("controller" => "zones","action" => "map_all")); ?>">
												<span class="text">Mapa Todos Los Clientes</span>
											</a>
										</li>								
										
									</ul>
								</li>
								
								<li class="hidden">
									<a href="#" class="js-sub-menu-toggle"><i class="fa fa-bar-chart la-fw fa-2x"></i>
										<span class="text">&nbsp; &nbsp; Reportes</span>
										<i class="toggle-icon fa fa-angle-left"></i>
									</a>
									<ul class="sub-menu">
										<li>
											<a href="<?php echo $this->Html->url(array("controller" => "reports","action" => "index")); ?>">
												<span class="text">Reportes</span>
											</a>
										</li>
										<li>
											<a href="<?php echo $this->Html->url(array("controller" => "reports","action" => "sales")); ?>">
												<sell class="text">Ventas</span>
											</a>
										</li>										
										
									</ul>
								</li>

								<li class="hidden">
									<a href="#" class="js-sub-menu-toggle"><i class="fa fa-cogs fa-fw fa-2x"></i>
										<span class="text"> &nbsp; &nbsp; Opciones</span>
										<i class="toggle-icon fa fa-angle-left"></i>
									</a>
									<ul class="sub-menu">
										<li>
											<a href="<?php echo $this->Html->url(array("controller" => "options","action" => "index")); ?>">
												<span class="text">Listado</span>
											</a>
										</li>
										<!--
										<li>
											<a href="<?php echo $this->Html->url(array("controller" => "options","action" => "business")); ?>">
												<span class="text">Tipo de Comercios</span>
											</a>
										</li>
										<li>
											<a href="<?php echo $this->Html->url(array("controller" => "options","action" => "payments")); ?>">
												<span class="text">Formas de Pago</span>
											</a>
										</li> 
									-->
									</ul>
								</li>
								<!--
								<li>
									<a href="<?php echo $this->Html->url(array(    
										"controller" => "Historial",    
										"action" => "index")); ?>"><i class="fa fa-calendar fa-fw"></i>
										<span class="text">Historial</span>
									</a>
								</li> -->
								<!--<li>
									<a href="#" class="js-sub-menu-toggle"><i class="fa fa-edit fw"></i>
										<span class="text">Historial</span>
										<i class="toggle-icon fa fa-angle-left"></i>
									</a>
									<ul class="sub-menu ">
										<li>
											<a href="form-inplace-editing.html">
												<span class="text">In-place Editing</span>
											</a>
										</li>
										<li>
											<a href="form-elements.html">
												<span class="text">Form Elements
													<span class="badge element-bg-color-blue">Updated</span>
												</span>
											</a>
										</li>
										<li>
											<a href="form-layouts.html">
												<span class="text">Form Layouts</span>
											</a>
										</li>
										<li>
											<a href="form-bootstrap-elements.html">
												<span class="text">Bootstrap Elements</span>
											</a>
										</li>
										<li>
											<a href="form-validations.html">
												<span class="text">Validation</span>
											</a>
										</li>
										<li>
											<a href="form-file-upload.html">
												<span class="text">File Upload</span>
											</a>
										</li>
										<li>
											<a href="form-text-editor.html">
												<span class="text">Text Editor</span>
											</a>
										</li>
									</ul>
								</li> -->
								
								
								<!--
								<li>
									<a href="typography.html"><i class="fa fa-font fa-fw"></i>
										<span class="text">Typography</span>
									</a>
								</li> -->
							</ul>
						</nav>
						<!-- /main-nav -->

						<div class="sidebar-minified js-toggle-minified">
							<i class="fa fa-angle-left"></i>
						</div>

						<!-- sidebar content -->
						<?php // echo $this->element('tips')?>
						<!-- end sidebar content -->
					</div>
					<!-- end left sidebar -->