<?php /* Smarty version Smarty-3.1.13, created on 2016-05-20 05:10:50
         compiled from "application_content\views\templates\chrisNotis.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22930573e7ff4a8a332-75799726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7232da341ed6d5dbd7d6fa16ff9b5773a080519f' => 
    array (
      0 => 'application_content\\views\\templates\\chrisNotis.tpl',
      1 => 1463713813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22930573e7ff4a8a332-75799726',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_573e7ff4accb03_18624351',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573e7ff4accb03_18624351')) {function content_573e7ff4accb03_18624351($_smarty_tpl) {?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
		<title>Bemat Admin v1 - Forms - Basic</title>
		

		<!-- Bootstrap Core CSS - Include with every page -->
		<link href="resources/css/bootstrap.min.css" rel="stylesheet">

		<!-- Bemat Admin CSS - Include with every page -->
		<link href="resources/css/admin.min.css" rel="stylesheet" id="theme-switcher">
		
		<!-- Documentation Prettify -->
		<link href="resources/css/prettify-tomorrow.css" rel="stylesheet" />
	</head>

		<body class="container-fluid ">
		<div id="page-wrapper">
			<aside id="left-content" data-toggle="open" data-default="open" data-size="">
				<header class="header-container">
					<div class="header-wrapper">
						<div id="header-brand">
							<div class="logo padding-left-2">
								<span class="logo-image">B</span>
								<span class="logo-text">Bemat</span>
							</div>
						</div>
					</div>
				</header>
				<div id="sidebar-wrapper">
					<div id="userbox">
						<div id="useravatar">
							<div class="avatar-thumbnail">
								<img src="resources/img/avatar.png" class="img-circle"/>
							</div>
						</div>

						<div id="userinfo">
							<div class="btn-group">
								<button type="button" class="btn btn-default-bright btn-flat dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe <i class="material-icons">arrow_drop_down</i>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#"><i class="material-icons">person</i>Your Profile</a></li>
									<li><a href="#"><i class="material-icons">settings</i>Settings</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="material-icons">lock</i> Lock</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="material-icons">exit_to_app</i> Log Out</a></li>
								</ul>
							</div>
						</div>
					</div> <!-- END: #userbox -->


					<nav id="sidebar">
						<ul>
							<li>
								<a href="index.html">
									<span class="menu-item-ico"><i class="material-icons">dashboard</i></span>
									<span class="menu-item-name">Dashboard</span>
								</a>
							</li>
							<li>
								<a href="">
									<span class="menu-item-ico"><i class="material-icons">extension</i></span>
									<span class="menu-item-name">Components</span>
								</a>
								<ul>
									<li><a href="page-accordions.html">Accordions</a></li>
									<li><a href="page-alerts.html">Alerts</a></li>
									<li><a href="page-badges.html">Badges & Labels</a></li>
									<li><a href="page-boxshadow.html">Box Shadow</a></li>
									<li>
										<a href="">Buttons <span class="badge badge-success">3</span></a>
										<ul>
											<li><a href="page-buttons-types.html">Button Types</a></li>
											<li><a href="page-buttons-FAB-speed-dial.html">FAB Speed Dial <span class="badge badge-default-dark"><i class="material-icons md-18">star</i></span></a></li>
											<li><a href="page-buttons-ink-ripple.html">Material Ink Ripple <span class="badge badge-default-dark"><i class="material-icons md-18">star</i></span></a></li>
										</ul>
									</li>
									<li><a href="page-breadcrumbs.html">Breadcrumbs</a></li>
									<li>
										<a href="">Colors <span class="badge badge-primary">2</span></a>
										<ul>
											<li><a href="page-colors-bemat-admin.html">Bemat Colors</a></li>
											<li><a href="page-colors-material-design.html">Material Design Colors</a></li>
										</ul>
									</li>
									<li><a href="page-dropdowns.html">Dropdowns</a></li>
									<li><a href="page-grid.html">Grid</a></li>
									<li>
										<a href="">Icons <span class="badge badge-info">2</span></a>
										<ul>
											<li><a href="page-icons-materialdesign.html">Material Design Icons</a></li>
											<li><a href="page-icons-fontawesome.html">Font Awesome</a></li>
										</ul>
									</li>
									<li>
										<a href="">Lists <span class="badge badge-warning">2</span></a>
										<ul>
											<li><a href="page-lists.html">Normal Lists</a></li>
											<li><a href="page-lists-subheader.html">Subheader Sticky <span class="badge badge-default-dark"><i class="material-icons md-18">star</i></span></a></li>
										</ul>
									</li>
									<li><a href="page-modals.html">Modals</a></li>
									<li><a href="page-multilevelsmenu.html">Multi Levels Side Menu</a></li>
									<li>
										<a href="">Notifications <span class="badge badge-warning">2</span></a>
										<ul>
											<li><a href="page-notifications-snackbar.html">Snackbars <span class="badge badge-default-dark"><i class="material-icons md-18">star</i></span></a></li>
											<li><a href="page-notifications-toasts.html">Toasts <span class="badge badge-default-dark"><i class="material-icons md-18">star</i></span></a></li>
										</ul>
									</li>
									<li>
										<a href="">Pagination <span class="badge badge-danger">2</span></a>
										<ul>
											<li><a href="page-pagination.html">Pagination</a></li>
											<li><a href="page-pager.html">Pager</a></li>
										</ul>
									</li>
									<li><a href="page-panels.html">Panels</a></li>
									<li>
										<a href="">Progress Indicators <span class="badge badge-success">3</span></a>
										<ul>
											<li><a href="page-progress-circular.html">Circular <span class="badge badge-default-dark"><i class="material-icons md-18">star</i></span></a></li>
											<li><a href="page-progress-linear.html">Linear <span class="badge badge-default-dark"><i class="material-icons md-18">star</i></span></a></li>
											<li><a href="page-progress-progressbar.html">Bootstrap Progressbar</a></li>
										</ul>
									</li>
									<li>
										<a href="">Tables <span class="badge badge-info">3</span></a>
										<ul>
											<li><a href="page-tables-static.html">Static Tables</a></li>
											<li><a href="page-tables-dynamic.html">Dynamic Tables</a></li>
											<li><a href="page-tables-responsive.html">Responsive Tables</a></li>
										</ul>
									</li>
									<li><a href="page-tabs.html">Tabs</a></li>
									<li><a href="page-tooltips.html">Tooltips</a></li>
									<li><a href="page-typography.html">Typography</a></li>
								</ul>
							</li>
							<li>
								<a href="">
									<span class="menu-item-ico"><i class="material-icons">format_align_left</i></span>
									<span class="menu-item-name">Forms</span>
								</a>
								<ul>
									<li><a href="page-forms-basic.html">Form Elements Basic</a></li>
									<li>
										<a href="">Editors <span class="badge badge-primary">3</span></a>
										<ul>
											<li><a href="page-editors-summernote.html">Summernote Editor</a></li>
											<li><a href="page-editors-ckeditor.html">CKEditor</a></li>
											<li><a href="page-editors-wysihtml5.html">wysihtml5</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								<a href="">
									<span class="menu-item-ico"><i class="material-icons">view_compact</i></span>
									<span class="menu-item-name">Layouts</span>
								</a>
								<ul>
									<li><a href="layouts-dark-header-brand.html">Dark Header Brand</a></li>
									<li><a href="layouts-dark-header-toolbar.html">Dark Header Toolbar</a></li>
									<li><a href="layouts-dark-header-full.html">Dark Header Full</a></li>
									<li><a href="layouts-dark-sidebar.html">Dark Sidebar</a></li>
									<li><a href="layouts-collapsed-sidebar.html">Collapsed Sidebar</a></li>
									<li><a href="layouts-alternative-page-header.html">Alternative Page Header</a></li>
								</ul>
							</li>
							<li class="nav-main-heading">
								<span class="sidebar-mini-hide">Premade Pages & Apps</span>
							</li>
							<li>
								<a href="">
									<span class="menu-item-ico"><i class="material-icons">insert_drive_file</i></span>
									<span class="menu-item-name">Pages</span>
								</a>
								<ul>
									<li>
										<a href="#">Authentication <span class="badge badge-default">4</span></a>
										<ul>
											<li><a href="page-authentication-forgot-password.html">Forgot Password</a></li>
											<li><a href="page-authentication-login.html">Login Page</a></li>
											<li><a href="page-authentication-lock.html">Lock Page</a></li>
											<li><a href="page-authentication-register.html">Register</a></li>
										</ul>
									</li>
									<li><a href="page-blank.html">Blank Page</a></li>
									<li><a href="page-helpfaq.html">Help & FAQ</a></li>
									<li><a href="page-invoice.html">Invoice</a></li>
									<li><a href="page-maintenance.html">Maintenance</a></li>
									<li><a href="page-pricing.html">Pricing Tables</a></li>
									<li><a href="page-settings.html">Settings</a></li>
									<li>
										<a href="">Errors</a>
										<ul>
											<li><a href="page-error-404.html">Error 404</a></li>
											<li><a href="page-error-500.html">Error 500</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								<a href="page-calendar.html" class="btn-ripple">
									<span class="menu-item-ico"><i class="material-icons">event</i></span>
									<span class="menu-item-name">Calendar</span>
								</a>
							</li>
							<li>
								<a href="page-charts.html" class="btn-ripple">
									<span class="menu-item-ico"><i class="material-icons">insert_chart</i></span>
									<span class="menu-item-name">Charts</span>
								</a>
								<ul>
									<li><a href="page-charts-sparklines.html">Sparklines</a></li>
									<li><a href="page-charts-peity.html">Peity</a></li>
									<li><a href="page-charts-simplePieCharts.html">Simple Pie Charts</a></li>
									<li><a href="page-charts-chartist.html">Chartist.js</a></li>
									<li><a href="page-charts-nvd3.html">NVD3</a></li>
								</ul>
							</li>
							<li class="nav-main-heading">
								<span class="sidebar-mini-hide">Multi Level Menu</span>
							</li>
							<li>
								<a href="#" class="btn-ripple">
									<span class="menu-item-ico"><i class="fa fa-file-pdf-o"></i></span>
									<span class="menu-item-parent">Parent Item</span>
									<span class="label label-primary">8</span>
								</a>
								<ul>
									<li>
										<a href="#">Subitem 1</a>
										<ul>
											<li><a href="#">Level 2-1</a></li>
											<li><a href="#">Level 2-2</a></li>
											<li>
												<a href="#">Level 2-3</a>
												<ul>
													<li><a href="#">Level 3-1</a></li>
													<li>
														<a href="#">Level 3-2</a>
														<ul>
															<li><a href="#">Level 4-1</a></li>
															<li><a href="#">Level 4-2</a></li>
															<li>
																<a href="#">Level 4-3</a>
																<ul>
																	<li><a href="#">Level 5-1</a></li>
																	<li>
																		<a href="#">Level 5-2</a>
																		<ul>
																			<li><a href="#">Level 6-1</a></li>
																			<li><a href="#">Level 6-2</a></li>
																			<li><a href="#">Level 6-3</a></li>
																			<li><a href="#">Level 6-4</a></li>
																			<li><a href="#">Level 6-5</a></li>
																			<li><a href="#">Level 6-6</a></li>
																			<li>
																				<a href="#">Level 6-7</a>
																				<ul>
																					<li><a href="#">Level 7-1</a></li>
																					<li>
																						<a href="#">Level 7-2</a>
																						<ul>
																							<li><a href="#">Level 8-1</a></li>
																							<li><a href="#">Level 8-2</a></li>
																						</ul>
																					</li>
																				</ul>
																			</li>
																		</ul>
																	</li>
																	<li><a href="#">Level 5-3</a></li>
																	<li><a href="#">Level 5-4</a></li>
																	<li><a href="#">Level 5-5</a></li>
																</ul>
															</li>
														</ul>
													</li>
													<li><a href="#">Level 3-3</a></li>
												</ul>
											</li>
											<li><a href="#">Level 2-4</a></li>
										</ul>
									</li>
									<li><a href="#">Subitem 2</a></li>
									<li><a href="#">Subitem 3</a></li>
								</ul>
							</li>

						</ul>
					</nav><!-- END: nav#sidebar -->	
				</div>
			</aside>
			
			<section id="right-content">
				<header class="header-container">
					<div class="header-wrapper">
						<div id="header-toolbar">
							<ul class="toolbar toolbar-left">
								<li>
									<a id="sidebar-toggle" data-state="open" href="#"><i class="material-icons">menu</i></a>
								</li>
							</ul>

							<div id="searchbox">
								<span class="search-icon"><i class="material-icons">search</i></span>
								<input id="search-input" placeholder="Search" type="text" />
							</div>

							<ul class="toolbar toolbar-right">
								<li>
									<a href="#" id="fullscreen-toggle" data-toggle="tooltip" data-placement="bottom" title="Toggle Fullscreen"><i class="material-icons">fullscreen</i></a>
								</li>
								<li id="user-profile" class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<div class="avatar">
											<img src="resources/img/avatar.png" class="img-circle img-responsive" />
										</div>
										<div class="user">
											<span class="username">John Doe</span>
										</div>
										<span class="expand-ico"><i class="material-icons">expand_more</i></span>
									</a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="material-icons">person</i>Your Profile</a></li>
										<li><a href="#"><i class="material-icons">settings</i>Settings</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="material-icons">lock</i> Lock</a></li>
										<li class="divider"></li>
										<li><a href="#"><i class="material-icons">exit_to_app</i> Log Out</a></li>
									</ul>
								</li><!-- /#user-profile -->
							</ul><!-- /.navbar-right -->					


						</div>
					</div><!-- /#header-toolbar -->
				</header>
				<section id="right-content-wrapper">
					<section class="page-header alternative-header">
						<ol class="breadcrumb">
							<li>Bemat Admin</li>
							<li>Components</li>
							<li>Notifications</li>
							<li>Toasts</li>
						</ol>
						<div class="page-header_title">
							<h1>
								Toasts
								<span class="page-header_subtitle"></span>
							</h1>
						</div>
					</section>

					<section class="page-content">
						<div class="row">
							<div class="col-lg-12">
								<div class="alert alert-callout alert-info alert-exclusive">
									<span class="badge badge-default-dark"><i class="material-icons md-18">star</i></span>  Bemat Admin Exclusive Premium Plugin
								</div>
								<p class="lead">
									Toast are primarily used for system messaging. Toasts are similar to snackbars but do not contain actions and cannot be swiped off screen.
								</p>								
							</div>
						</div>

						<div class="row">
							<div class="col-lg-12">
								<h2 class="text-primary">Initializing</h2>
								<p>For performance reasons, the Toasts are opt-in, meaning you must initialize them yourself.</p>
								<pre><xmp>$(function () {
	$.toasts({
		oneAtTime: false, // Optional Value
	});
});</xmp></pre>
							</div>

							<div class="col-lg-6">
								<h4>Examples:</h4>
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="row">
											<div class="col-lg-6">
												<p>
													<label>
														<input id="demoToastRadio1" class="radio radio-primary" value="top" type="radio" name="demoToast1" checked/>
														<span>Top</span>
													</label>
												</p>
												<p>
													<label>
														<input id="demoToastRadio2" class="radio radio-primary" value="bottom" type="radio" name="demoToast1"/>
														<span>Bottom</span>
													</label>
												</p>
											</div>
											<div class="col-lg-6">
												<p>
													<label>
														<input id="demoToastRadio3" class="radio radio-primary" value="left" type="radio" name="demoToast2"/>
														<span>Left</span>
													</label>
												</p>
												<p>
													<label>
														<input id="demoToastRadio4" class="radio radio-primary" value="right" type="radio" name="demoToast2" checked/>
														<span>Right</span>
													</label>
												</p>
											</div>
											<div class="col-lg-12 text-center">
												<button id="btntest-toast1" class="btn btn-default btn-raised" type="button">Show Simple Toast</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<h4>JAVASCRIPT Code:</h4>
								<div class="panel panel-default">
									<div class="panel-body">
									<pre><xmp>$("#btntest-toast1").on("click",function(){
	$.toasts("add",{
		msg: 		"This is a Demo Toast",
	});
});</xmp></pre>
									</div>
								</div>
							</div>
						</div>


					</section><!-- /#page-content -->

				</section><!-- /#right-content -->
			</section><!-- /#right-content-wrapper -->

		</div>


		<!-- Core Scripts - Include with every page -->
		<script src="resources/js/sistema/jquery-1.10.2.js" type="text/javascript"></script>
		<script src="resources/js/sistema/jquery-ui.custom.min.js" type="text/javascript"></script>
		<script src="resources/js/sistema/bootstrap.min.js" type="text/javascript"></script>
		<script src="resources/js/sistema/modernizr-2.6.2-respond-1.1.0.min.js" type="text/javascript"></script>
	
		<!-- Page-Level Plugin Scripts - Dashboard -->
		<script src="resources/js/sistema/google-code-prettify/prettify.js" type="text/javascript"></script>
		<script src="resources/js/sistema/perfectscrollbar/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
		<script src="resources/js/sistema/iCheck/icheck.min.js" type="text/javascript"></script>
		<script src="resources/js/sistema/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
		<script src="resources/js/sistema/DataTables/jquery.dataTables.min.js" type="text/javascript"></script>
		<script src="resources/js/sistema/DataTables/dataTables.bootstrap.min.js" type="text/javascript"></script>
		<script src="resources/js/sistema/DataTables/dataTables.bootstrap.min.js" type="text/javascript"></script>
		<script src="resources/js/sistema/fullscreen/jquery.fullscreen-min.js" type="text/javascript"></script>
		<script src="resources/js/sistema/fullcalendar/moment.min.js" type="text/javascript"></script>
		<script src="resources/js/sistema/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
		<script src="resources/js/sistema/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
		<script src="resources/js/sistema/peity/jquery.peity.min.js" type="text/javascript"></script>
		<script src="resources/js/sistema/chartist/chartist.min.js" type="text/javascript"></script>
		<script src="resources/js/sistema/summernote/summernote.min.js" type="text/javascript"></script>
		<script src="resources/js/sistema/ckeditor/ckeditor.js" type="text/javascript"></script>
		<script src="resources/js/sistema/wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>

		<!-- Cerocreativo Plugins -->
		<script src="resources/js/sistema/materialRipple/jquery.materialRipple.js" type="text/javascript"></script>
		<script src="resources/js/sistema/snackbar/jquery.snackbar.js" type="text/javascript"></script>
		<script src="resources/js/sistema/toasts/jquery.toasts.js" type="text/javascript"></script>
		<script src="resources/js/sistema/speedDial/jquery.speedDial.js" type="text/javascript"></script>
		<script src="resources/js/sistema/circularProgress/jquery.circularProgress.js" type="text/javascript"></script>
		<script src="resources/js/sistema/linearProgress/jquery.linearProgress.js" type="text/javascript"></script>
		<script src="resources/js/sistema/subheader/jquery.subheader.js" type="text/javascript"></script>
		<script src="resources/js/sistema/simplePieChart/jquery.simplePieChart.js" type="text/javascript"></script>

		<!-- Bemat Admin Scripts - Included with every page -->		
		<script src="resources/js/sistema/admin-common.min.js"></script>
		<script src="resources/js/sistema/admin-demo.min.js"></script>


	</body>
</html><?php }} ?>