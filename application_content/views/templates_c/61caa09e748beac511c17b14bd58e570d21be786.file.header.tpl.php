<?php /* Smarty version Smarty-3.1.13, created on 2017-01-25 07:55:29
         compiled from "application_content/views/templates/design/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21466727565751c9f00ef634-47657442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61caa09e748beac511c17b14bd58e570d21be786' => 
    array (
      0 => 'application_content/views/templates/design/header.tpl',
      1 => 1485327328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21466727565751c9f00ef634-47657442',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5751c9f016d8f4_35312083',
  'variables' => 
  array (
    'title' => 0,
    'raiz' => 0,
    'st_programa' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5751c9f016d8f4_35312083')) {function content_5751c9f016d8f4_35312083($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-type" value="text/html; charset=utf-8">
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" media="all" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/favicon/favicon.ico" />
    <link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/favicon/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/favicon/apple-touch-icon-114x114.png" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/theme/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/theme/css/material-dashboard.css" rel="stylesheet" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/theme/css/estilo.css" rel="stylesheet" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/plugs/captcha.css" rel="stylesheet" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/theme/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/theme/css/css.css?family=Roboto:300,400,500,700|Material+Icons" />
</head>
<body class="sidebar-mini">
<div class="wrapper">
        <div class="sidebar" data-active-color="green" data-background-color="black" data-image="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/theme/img/sidebar-3.jpg">
           
            <div class="logo">
                <a href="javascript:void(0);" class="simple-text">
                  SEGEY
                </a>
            </div>
            <div class="logo logo-mini">
                <a href="javascript:void(0);" class="simple-text">
                    SEGEY
                </a>
            </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/theme/img/faces/logo.png"  />
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            <?php echo $_smarty_tpl->tpl_vars['st_programa']->value;?>

                            <b class="caret"></b>
                        </a>
                        <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a href="#">Perfil</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <li class="active">
                        <a href="inicio">
                            <i class="material-icons">home</i>
                            <p>Inicio</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="cerrarSession">
                            <i class="material-icons">exit_to_app</i>
                            <p>Salir</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div><?php }} ?>