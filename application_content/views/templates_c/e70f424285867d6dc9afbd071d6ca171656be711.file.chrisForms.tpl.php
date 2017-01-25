<?php /* Smarty version Smarty-3.1.13, created on 2016-05-24 18:56:00
         compiled from "application_content\views\templates\template\chrisForms.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30494574487a07ac604-10448529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e70f424285867d6dc9afbd071d6ca171656be711' => 
    array (
      0 => 'application_content\\views\\templates\\template\\chrisForms.tpl',
      1 => 1463712875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30494574487a07ac604-10448529',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_574487a082a2e0_54345234',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574487a082a2e0_54345234')) {function content_574487a082a2e0_54345234($_smarty_tpl) {?>
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
			<aside id="left-content" data-toggle="open" data-default="open" data-size="" class="SidebarClose">
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
							<li>Admin</li>
							<li>Dashboard</li>
							<li>Components</li>
							<li>Forms</li>
							<li>Basic Elements</li>
						</ol>
						<div class="page-header_title">
							<h1>
								Basic Form Elements
								<span class="page-header_subtitle"></span>
							</h1>
						</div>
					</section>

					<section class="page-content">
						<div class="row">
							<div class="col-lg-12">
								<p class="lead">
									Text fields allow the user to input text, select text (cut, copy, paste), and lookup data via auto-completion. 
								</p>								
							</div>
						</div>

						<div class="row">
							<div class="col-lg-12">
								<h2 class="text-primary">Input Fields</h2>
							</div>	
						</div>						

						<div class="row">
							<div class="col-lg-6">
								<h4>Static Label Examples:</h4>
								<div class="panel panel-default">
									<div class="panel-body">
										<form class="form">
											<div class="form-group">
												<input type="text" class="form-control" id="regular1">
												<label for="regular1">Regular input</label>
											</div>
											<div class="form-group">
												<input type="password" class="form-control" id="password1">
												<label for="password1">Password</label>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" id="placeholder1" placeholder="Placeholder">
												<label for="placeholder1">Placeholder</label>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" id="help1">
												<label for="help1">Input with help text</label>
												<p class="help-block">Help text</p>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" id="tooltip1" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" data-original-title="Example input tooltip text here">
												<label for="help1">Input with tooltip</label>
											</div>
											<div class="form-group has-success">
												<input type="text" class="form-control" id="success1">
												<label for="success1">Success</label>
											</div>
											<div class="form-group has-error">
												<input type="text" class="form-control" id="error1">
												<label for="error1">Error</label>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<h4>HTML Code:</h4>
								<div class="panel panel-default">
									<div class="panel-body height-10">
										<pre><xmp><form class="form">
	<div class="form-group">
		<input type="text" class="form-control" id="regular1">
		<label for="regular1">Regular input</label>
	</div>
	<div class="form-group">
		<input type="password" class="form-control" id="password1">
		<label for="password1">Password</label>
	</div>
	<div class="form-group">
		<input type="text" class="form-control" id="placeholder1" placeholder="Placeholder">
		<label for="placeholder1">Placeholder</label>
	</div>
	<div class="form-group">
		<input type="text" class="form-control" id="help1">
		<label for="help1">Input with help text</label>
		<p class="help-block">Help text</p>
	</div>
	<div class="form-group">
		<input type="text" class="form-control" id="tooltip1" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" data-original-title="Example input tooltip text here">
		<label for="help1">Input with tooltip</label>
	</div>
	<div class="form-group has-success">
		<input type="text" class="form-control" id="success1">
		<label for="success1">Success</label>
	</div>
	<div class="form-group has-error">
		<input type="text" class="form-control" id="error1">
		<label for="error1">Error</label>
	</div>
</form></xmp></pre>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6">
								<h4>Floating Label Examples:</h4>
								<div class="panel panel-default">
									<div class="panel-body">
										<form class="form" role="form">
											<div class="form-group floating-label">
												<input type="text" class="form-control" id="regular2">
												<label for="regular2">Regular input</label>
											</div>
											<div class="form-group floating-label">
												<input type="password" class="form-control" id="password2">
												<label for="password2">Password</label>
											</div>
											<div class="form-group floating-label">
												<input type="text" class="form-control" id="placeholder2">
												<label for="placeholder2">Placeholder</label>
											</div>
											<div class="form-group floating-label">
												<input type="text" class="form-control" id="help2">
												<label for="help2">Input with help text</label>
												<p class="help-block">Help text</p>
											</div>
											<div class="form-group floating-label">
												<input type="text" class="form-control" id="tooltip2" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" data-original-title="Example input tooltip text here">
												<label for="help2">Input with tooltip</label>
											</div>
											<div class="form-group floating-label has-success">
												<input type="text" class="form-control" id="success2">
												<label for="success2">Success</label>
											</div>
											<div class="form-group floating-label has-error">
												<input type="text" class="form-control" id="error2">
												<label for="error2">Error</label>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<h4>HTML Code:</h4>
								<div class="panel panel-default">
									<div class="panel-body height-10">
										<pre><xmp><form class="form" role="form">
	<div class="form-group floating-label">
		<input type="text" class="form-control" id="regular2">
		<label for="regular2">Regular input</label>
	</div>
	<div class="form-group floating-label">
		<input type="password" class="form-control" id="password2">
		<label for="password2">Password</label>
	</div>
	<div class="form-group floating-label">
		<input type="text" class="form-control" id="placeholder2">
		<label for="placeholder2">Placeholder</label>
	</div>
	<div class="form-group floating-label">
		<input type="text" class="form-control" id="help2">
		<label for="help2">Input with help text</label>
		<p class="help-block">Help text</p>
	</div>
	<div class="form-group floating-label">
		<input type="text" class="form-control" id="tooltip2" data-toggle="tooltip" data-placement="bottom" data-trigger="hover" data-original-title="Example input tooltip text here">
		<label for="help2">Input with tooltip</label>
	</div>
	<div class="form-group floating-label has-success">
		<input type="text" class="form-control" id="success2">
		<label for="success2">Success</label>
	</div>
	<div class="form-group floating-label has-error">
		<input type="text" class="form-control" id="error2">
		<label for="error2">Error</label>
	</div>
</form></xmp></pre>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-12">
								<h2 class="text-primary">Static Control</h2>
							</div>	
						</div>	
						<div class="row">
							<div class="col-lg-6">
								<h4>Examples:</h4>
								<div class="panel panel-default">
									<div class="panel-body">
										<form class="form" role="form">
											<div class="form-group">
												<label>Static control</label>
												<p class="form-control-static">email@example.com</p>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<h4>HTML Code:</h4>
								<div class="panel panel-default">
									<div class="panel-body height-3">
										<pre><xmp><div class="form-group">
	<label>Static control</label>
	<p class="form-control-static">email@example.com</p>
</div></xmp></pre>
									</div>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-lg-12">
								<h2 class="text-primary">Textareas</h2>
							</div>	
						</div>	
						<div class="row">
							<div class="col-lg-6">
								<h4>Static Label Examples:</h4>
								<div class="panel panel-default">
									<div class="panel-body">
										<form class="form" role="form">
											<div class="form-group">
												<textarea name="textarea1" id="textarea1" class="form-control" rows="3" placeholder=""></textarea>
												<label for="textarea1">Textarea</label>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<h4>HTML Code:</h4>
								<div class="panel panel-default">
									<div class="panel-body height-3">
										<pre><xmp><div class="form-group">
	<textarea name="textarea1" id="textarea1" class="form-control" rows="3" placeholder=""></textarea>
	<label for="textarea1">Textarea</label>
</div></xmp></pre>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<h4>Floating Label Examples:</h4>
								<div class="panel panel-default">
									<div class="panel-body">
										<form class="form" role="form">
											<div class="form-group floating-label">
												<textarea name="textarea2" id="textarea2" class="form-control" rows="3" placeholder=""></textarea>
												<label for="textarea2">Textarea</label>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<h4>HTML Code:</h4>
								<div class="panel panel-default">
									<div class="panel-body height-3">
										<pre><xmp><div class="form-group floating-label">
	<textarea name="textarea2" id="textarea2" class="form-control" rows="3" placeholder=""></textarea>
	<label for="textarea2">Textarea</label>
</div></xmp></pre>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-12">
								<h2 class="text-primary">Select</h2>
							</div>	
						</div>	
						<div class="row">
							<div class="col-lg-6">
								<h4>Static Label Examples:</h4>
								<div class="panel panel-default">
									<div class="panel-body">
										<form class="form" role="form">
											<div class="form-group">
												<select id="select1" name="select1" class="form-control">
													<option value="">&nbsp;</option>
													<option value="val1">Option 1</option>
													<option value="val2">Option 2</option>
													<option value="val3">Option 3</option>
													<option value="val4">Option 4</option>
													<option value="val5">Option 5</option>
													<option value="val6">Option 6</option>
													<option value="val7">Option 7</option>
													<option value="val8">Option 8</option>
													<option value="val9">Option 9</option>
												</select>
												<label for="select1">Select</label>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<h4>HTML Code:</h4>
								<div class="panel panel-default">
									<div class="panel-body height-3">
										<pre><xmp><div class="form-group">
	<select id="select1" name="select1" class="form-control">
		<option value="">&nbsp;</option>
		<option value="val1">Option 1</option>
		<option value="val2">Option 2</option>
		<option value="val3">Option 3</option>
		<option value="val4">Option 4</option>
		<option value="val5">Option 5</option>
		<option value="val6">Option 6</option>
		<option value="val7">Option 7</option>
		<option value="val8">Option 8</option>
		<option value="val9">Option 9</option>
	</select>
	<label for="select1">Select</label>
</div></xmp></pre>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<h4>Floating Label Examples:</h4>
								<div class="panel panel-default">
									<div class="panel-body">
										<form class="form" role="form">
											<div class="form-group floating-label">
												<select id="select2" name="select2" class="form-control">
													<option value="">&nbsp;</option>
													<option value="val1">Option 1</option>
													<option value="val2">Option 2</option>
													<option value="val3">Option 3</option>
													<option value="val4">Option 4</option>
													<option value="val5">Option 5</option>
													<option value="val6">Option 6</option>
													<option value="val7">Option 7</option>
													<option value="val8">Option 8</option>
													<option value="val9">Option 9</option>
												</select>
												<label for="select2">Select</label>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<h4>HTML Code:</h4>
								<div class="panel panel-default">
									<div class="panel-body height-3">
										<pre><xmp><div class="form-group floating-label">
	<select id="select2" name="select2" class="form-control">
		<option value="">&nbsp;</option>
		<option value="val1">Option 1</option>
		<option value="val2">Option 2</option>
		<option value="val3">Option 3</option>
		<option value="val4">Option 4</option>
		<option value="val5">Option 5</option>
		<option value="val6">Option 6</option>
		<option value="val7">Option 7</option>
		<option value="val8">Option 8</option>
		<option value="val9">Option 9</option>
	</select>
	<label for="select2">Select</label>
</div></xmp></pre>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-12">
								<h2 class="text-primary">Switches</h2>
							</div>	
						</div>	
						<div class="row">
							<div class="col-lg-6">
								<h4>Examples:</h4>
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="row">
											<div class="col-lg-4">
												<p>
													<label>
														<input class="switch switch-primary" type="checkbox" />
														<span>Primary switch</span>
													</label>
												</p>
												<p>
													<label>
														<input class="switch switch-success" type="checkbox" />
														<span>Success switch</span>
													</label>
												</p>
											</div>
											<div class="col-lg-4">
												<p>
													<label>
														<input class="switch switch-info" type="checkbox" />
														<span>Info switch</span>
													</label>
												</p>
												<p>
													<label>
														<input class="switch switch-warning" type="checkbox" />
														<span>Warning switch</span>
													</label>
												</p>
											</div>
											<div class="col-lg-4">
												<p>
													<label>
														<input class="switch switch-danger" type="checkbox" />
														<span>Danger switch</span>
													</label>
												</p>	
											</div>
											<div class="col-lg-4">
												<p>
													<label>
														<input class="switch switch-primary" type="checkbox" disabled/>
														<span>Disabled switch</span>
													</label>
												</p>	
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<h4>HTML Code:</h4>
								<div class="panel panel-default">
									<div class="panel-body height-3">
										<pre><xmp><label>
	<input class="switch switch-primary" type="checkbox" />
	<span>Primary switch</span>
</label>

<label>
	<input class="switch switch-success" type="checkbox" />
	<span>Success switch</span>
</label>

<label>
	<input class="switch switch-info" type="checkbox" />
	<span>Info switch</span>
</label>

<label>
	<input class="switch switch-warning" type="checkbox" />
	<span>Warning switch</span>
</label>

<label>
	<input class="switch switch-danger" type="checkbox" />
	<span>Danger switch</span>
</label>

<label>
	<input class="switch switch-primary" type="checkbox" disabled/>
	<span>Disabled switch</span>
</label></xmp></pre>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6">
								<h4>Radio Switch Examples:</h4>
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="row">
											<div class="col-lg-4">
												<p>
													<label>
														<input class="switch switch-primary" type="radio" name="demoradio1" checked/>
														<span>Radio switch</span>
													</label>
												</p>
											</div>
											<div class="col-lg-4">
												<p>
													<label>
														<input class="switch switch-primary" type="radio" name="demoradio1"/>
														<span>Radio switch</span>
													</label>
												</p>
											</div>
											<div class="col-lg-4">
												<p>
													<label>
														<input class="switch switch-primary" type="radio" name="demoradio1"/>
														<span>Radio switch</span>
													</label>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<h4>HTML Code:</h4>
								<div class="panel panel-default">
									<div class="panel-body height-3">
										<pre><xmp><label>
	<input class="switch switch-primary" type="radio" name="demoradio1" checked/>
	<span>Radio switch</span>
</label>
<label>
	<input class="switch switch-primary" type="radio" name="demoradio1"/>
	<span>Radio switch</span>
</label>
<label>
	<input class="switch switch-primary" type="radio" name="demoradio1"/>
	<span>Radio switch</span>
</label>
</xmp></pre>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-12">
								<h2 class="text-primary">Radio Buttons</h2>
							</div>	
						</div>	
						<div class="row">
							<div class="col-lg-6">
								<h4>Examples:</h4>
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="row">
											<div class="col-lg-4">
												<p>
													<label>
														<input class="radio radio-primary" type="radio" name="demoradio" checked/>
														<span>Primary radio button</span>
													</label>
												</p>
												<p>
													<label>
														<input class="radio radio-success" type="radio" name="demoradio"/>
														<span>Success radio button</span>
													</label>
												</p>
											</div>
											<div class="col-lg-4">
												<p>
													<label>
														<input class="radio radio-info" type="radio" name="demoradio"/>
														<span>Info radio button</span>
													</label>
												</p>
												<p>
													<label>
														<input class="radio radio-warning" type="radio" name="demoradio"/>
														<span>Warning radio button</span>
													</label>
												</p>
											</div>
											<div class="col-lg-4">
												<p>
													<label>
														<input class="radio radio-danger" type="radio" name="demoradio"/>
														<span>Danger radio button</span>
													</label>
												</p>	
											</div>
											<div class="col-lg-12">
													<label class="checkbox-inline">
														<input class="radio radio-success" type="radio" name="demoinlineradio"/>
														<span>Inline Success radio button</span>
													</label>
													<label class="checkbox-inline">
														<input class="radio radio-info" type="radio" name="demoinlineradio"/>
														<span>Inline Info radio button</span>
													</label>
													<label class="checkbox-inline">
														<input class="radio radio-danger" type="radio" name="demoinlineradio"/>
														<span>Inline Danger radio button</span>
													</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<h4>HTML Code:</h4>
								<div class="panel panel-default">
									<div class="panel-body height-3">
										<pre><xmp><div class="col-lg-4">
	<p>
		<label>
			<input class="radio radio-primary" type="radio" name="demoradio" checked/>
			<span>Primary checkbox</span>
		</label>
	</p>
	<p>
		<label>
			<input class="radio radio-success" type="radio" name="demoradio"/>
			<span>Success checkbox</span>
		</label>
	</p>
</div>
<div class="col-lg-4">
	<p>
		<label>
			<input class="radio radio-info" type="radio" name="demoradio"/>
			<span>Info checkbox</span>
		</label>
	</p>
	<p>
		<label>
			<input class="radio radio-warning" type="radio" name="demoradio"/>
			<span>Warning checkbox</span>
		</label>
	</p>
</div>
<div class="col-lg-4">
	<p>
		<label>
			<input class="radio radio-danger" type="radio" name="demoradio"/>
			<span>Danger checkbox</span>
		</label>
	</p>	
</div>
<div class="col-lg-12">
		<label class="checkbox-inline">
			<input class="radio radio-success" type="radio" name="demoinlineradio"/>
			<span>Inline Success checkbox</span>
		</label>
		<label class="checkbox-inline">
			<input class="radio radio-info" type="radio" name="demoinlineradio"/>
			<span>Inline Info checkbox</span>
		</label>
		<label class="checkbox-inline">
			<input class="radio radio-danger" type="radio" name="demoinlineradio"/>
			<span>Inline Danger checkbox</span>
		</label>
</div></xmp></pre>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-12">
								<h2 class="text-primary">Checkboxes</h2>
							</div>	
						</div>	
						<div class="row">
							<div class="col-lg-6">
								<h4>Examples:</h4>
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="row">
											<div class="col-lg-4">
												<p>
													<label>
														<input class="checkbox checkbox-primary" type="checkbox" />
														<span>Primary checkbox</span>
													</label>
												</p>
												<p>
													<label>
														<input class="checkbox checkbox-success" type="checkbox" />
														<span>Success checkbox</span>
													</label>
												</p>
											</div>
											<div class="col-lg-4">
												<p>
													<label>
														<input class="checkbox checkbox-info" type="checkbox" />
														<span>Info checkbox</span>
													</label>
												</p>
												<p>
													<label>
														<input class="checkbox checkbox-warning" type="checkbox" />
														<span>Warning checkbox</span>
													</label>
												</p>
											</div>
											<div class="col-lg-4">
												<p>
													<label>
														<input class="checkbox checkbox-danger" type="checkbox" />
														<span>Danger checkbox</span>
													</label>
												</p>	
											</div>
											<div class="col-lg-12">
													<label class="checkbox-inline">
														<input class="checkbox checkbox-success" type="checkbox" />
														<span>Inline Success checkbox</span>
													</label>
													<label class="checkbox-inline">
														<input class="checkbox checkbox-info" type="checkbox" />
														<span>Inline Info checkbox</span>
													</label>
													<label class="checkbox-inline">
														<input class="checkbox checkbox-danger" type="checkbox" />
														<span>Inline Danger checkbox</span>
													</label>
											</div>
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<h4>HTML Code:</h4>
								<div class="panel panel-default">
									<div class="panel-body height-3">
										<pre><xmp><div class="col-lg-4">
	<p>
		<label>
			<input class="checkbox checkbox-primary" type="checkbox" />
			<span>Primary checkbox</span>
		</label>
	</p>
	<p>
		<label>
			<input class="checkbox checkbox-success" type="checkbox" />
			<span>Success checkbox</span>
		</label>
	</p>
</div>
<div class="col-lg-4">
	<p>
		<label>
			<input class="checkbox checkbox-info" type="checkbox" />
			<span>Info checkbox</span>
		</label>
	</p>
	<p>
		<label>
			<input class="checkbox checkbox-warning" type="checkbox" />
			<span>Warning checkbox</span>
		</label>
	</p>
</div>
<div class="col-lg-4">
	<p>
		<label>
			<input class="checkbox checkbox-danger" type="checkbox" />
			<span>Danger checkbox</span>
		</label>
	</p>	
</div>
<div class="col-lg-12">
		<label class="checkbox-inline">
			<input class="checkbox checkbox-success" type="checkbox" />
			<span>Inline Success checkbox</span>
		</label>
		<label class="checkbox-inline">
			<input class="checkbox checkbox-info" type="checkbox" />
			<span>Inline Info checkbox</span>
		</label>
		<label class="checkbox-inline">
			<input class="checkbox checkbox-danger" type="checkbox" />
			<span>Inline Danger checkbox</span>
		</label>
</div></xmp></pre>
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