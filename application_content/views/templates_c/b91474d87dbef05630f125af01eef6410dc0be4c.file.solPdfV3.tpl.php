<?php /* Smarty version Smarty-3.1.13, created on 2016-09-18 00:51:33
         compiled from "application_content/views/templates/solpdf/solPdfV3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191000993657ddc745cd8c86-34868855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b91474d87dbef05630f125af01eef6410dc0be4c' => 
    array (
      0 => 'application_content/views/templates/solpdf/solPdfV3.tpl',
      1 => 1474152690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191000993657ddc745cd8c86-34868855',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57ddc746043c92_39269445',
  'variables' => 
  array (
    'DATA' => 0,
    'existeTitular' => 0,
    'col' => 0,
    'esconderA' => 0,
    'esconderH' => 0,
    'GUIA' => 0,
    'g' => 0,
    'guia' => 0,
    'DATAPLAZACAN' => 0,
    'DATAPLAZACREA' => 0,
    'p1' => 0,
    'p2' => 0,
    'kc' => 0,
    'p' => 0,
    'count' => 0,
    'k' => 0,
    'pc' => 0,
    'kg' => 0,
    'mguia' => 0,
    'countGuia' => 0,
    'colspan' => 0,
    'DATARESCAN' => 0,
    'DATARESCREA' => 0,
    'kr' => 0,
    'vr' => 0,
    'countr' => 0,
    'pr2' => 0,
    'pr1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ddc746043c92_39269445')) {function content_57ddc746043c92_39269445($_smarty_tpl) {?><style type="text/css">
@page :first{
margin-top: 0;margin-bottom:0;margin-left: 0;margin-right: 0;padding-bottom:100px;}
body{
width:100%;font-family:Arial;font-size:10pt;margin:0;padding:0;}
p{
margin:0;padding:0;}
.wrapper{
width:95%;margin:0 auto;display:block;clear:both;}
.tabla,.tablaEncabezado, .tablaHead{
border-collapse: collapse !important;border:0px solid #D6D6D6;width: 100% !important;}
.tablaEncabezado th, .tablaEncabezado td,.tablaHead td{
border: 1px solid #D6D6D6 !important;}
.tablaHead td{
padding:5px;font-size:8pt !important; min-height: 55px !important;}
.tablaHead th{
padding:5px; font-size: 12pt !important;}
.tablaEncabezado td{
padding-left: 5px}
.tablaEncabezado th{
padding-right: 5px}
.tabla td, .tabla th, .tablaHead th {
border: 1px solid #D6D6D6 !important;}
.tabla tr:first-child th {
border-top: 0 !important;}
.tabla tr:last-child td {
border-bottom: 0 !important;}
.tabla tr td:first-child,.tabla tr th:first-child {
border-left: 0 !important;}
.tabla tr td:last-child,.tabla tr th:last-child {
border-right: 0 !important;}
.tabla th,.tablaEncabezado th, .tablaHead th{ 
background:#1E6647;color:#FFF; font-size: 6pt;}
.tabla caption{ 
background:#000;color:#FFF; text-align:center; font-weight:bold;}
.tabla td{ 
font-size:8pt !important; padding:3px;}
.center{ 
text-align:center !important;}
.left{ 
text-align:left !important;}
.headding td.right, .right { 
text-align:right !important;}
.tdLetter{
    font-size: 12pt;
}
</style>
<?php if (!empty($_smarty_tpl->tpl_vars['DATA']->value)){?>
    <div class="wrapper">
        <div class="table-responsive">
           <table class="tablaHead" width="100%" cellspacing="2" cellpadding="2">
                <thead>
                <tr>
                    <td colspan="<?php if ($_smarty_tpl->tpl_vars['existeTitular']->value!=''){?>9<?php }else{ ?>8<?php }?>" class="center">CANCELACIÓN</td>
                    <td style="width:4px;"></td>
                    <td colspan="<?php echo $_smarty_tpl->tpl_vars['col']->value;?>
" class="center">CREACIÓN / CONVERSIÓN</td>
                </tr>
                <tr>
                    <?php if ($_smarty_tpl->tpl_vars['existeTitular']->value!=''){?>
                    <th>TITULAR</th>
                    <?php }?>
                    <th>MUNICIPIO Y<br/> LOCALIDAD</th>
                    <th>ZO-<br/>NA</th>
                    <th>CLAVE<br/>ESCUELA</th>
                    <th>TUR-<br/>NO</th>
                    <th>PLAZA</th>
                    <th>MOTIVO</th>
                    <th>VIGENCIA</th>
                    <th>OBSERVACIONES</th>
                    <td style="width:4px;"></td>
                    <th>MUNICIPIO Y<br/> LOCALIDAD</th>
                    <th>CLAVE<br/>ESCUELA</th>
                    <th>TUR-<br/>NO</th>
                    <th>ZO-<br/>NA</th>                    
                    <?php if ($_smarty_tpl->tpl_vars['esconderA']->value==''){?>
                    <th>ASIGNATURA</th>
                    <?php }?>
                    <th>CATE-<br/>GORIA</th>
                    <?php if ($_smarty_tpl->tpl_vars['esconderH']->value==''){?>
                    <th>HO-<br/>RAS</th>
                    <?php }?>
                    <th>MOTIVO</th>
                    <th>VIGENCIA</th>
                    <th>OBSERVACIONES</th>
                </tr>
               
                </thead>
                <?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_smarty_tpl->tpl_vars['kg'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['GUIA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value){
$_smarty_tpl->tpl_vars['g']->_loop = true;
 $_smarty_tpl->tpl_vars['kg']->value = $_smarty_tpl->tpl_vars['g']->key;
?>
                <?php if (isset($_smarty_tpl->tpl_vars["guia"])) {$_smarty_tpl->tpl_vars["guia"] = clone $_smarty_tpl->tpl_vars["guia"];
$_smarty_tpl->tpl_vars["guia"]->value = $_smarty_tpl->tpl_vars['g']->value['guia']; $_smarty_tpl->tpl_vars["guia"]->nocache = null; $_smarty_tpl->tpl_vars["guia"]->scope = 0;
} else $_smarty_tpl->tpl_vars["guia"] = new Smarty_variable($_smarty_tpl->tpl_vars['g']->value['guia'], null, 0);?>
                <?php if (isset($_smarty_tpl->tpl_vars["p1"])) {$_smarty_tpl->tpl_vars["p1"] = clone $_smarty_tpl->tpl_vars["p1"];
$_smarty_tpl->tpl_vars["p1"]->value = count($_smarty_tpl->tpl_vars['DATAPLAZACAN']->value[$_smarty_tpl->tpl_vars['guia']->value]); $_smarty_tpl->tpl_vars["p1"]->nocache = null; $_smarty_tpl->tpl_vars["p1"]->scope = 0;
} else $_smarty_tpl->tpl_vars["p1"] = new Smarty_variable(count($_smarty_tpl->tpl_vars['DATAPLAZACAN']->value[$_smarty_tpl->tpl_vars['guia']->value]), null, 0);?>
                <?php if (isset($_smarty_tpl->tpl_vars["p2"])) {$_smarty_tpl->tpl_vars["p2"] = clone $_smarty_tpl->tpl_vars["p2"];
$_smarty_tpl->tpl_vars["p2"]->value = count($_smarty_tpl->tpl_vars['DATAPLAZACREA']->value[$_smarty_tpl->tpl_vars['guia']->value]); $_smarty_tpl->tpl_vars["p2"]->nocache = null; $_smarty_tpl->tpl_vars["p2"]->scope = 0;
} else $_smarty_tpl->tpl_vars["p2"] = new Smarty_variable(count($_smarty_tpl->tpl_vars['DATAPLAZACREA']->value[$_smarty_tpl->tpl_vars['guia']->value]), null, 0);?>

                <?php if (isset($_smarty_tpl->tpl_vars["tr1"])) {$_smarty_tpl->tpl_vars["tr1"] = clone $_smarty_tpl->tpl_vars["tr1"];
$_smarty_tpl->tpl_vars["tr1"]->value = ''; $_smarty_tpl->tpl_vars["tr1"]->nocache = null; $_smarty_tpl->tpl_vars["tr1"]->scope = 0;
} else $_smarty_tpl->tpl_vars["tr1"] = new Smarty_variable('', null, 0);?>
                <?php if (isset($_smarty_tpl->tpl_vars["tr2"])) {$_smarty_tpl->tpl_vars["tr2"] = clone $_smarty_tpl->tpl_vars["tr2"];
$_smarty_tpl->tpl_vars["tr2"]->value = ''; $_smarty_tpl->tpl_vars["tr2"]->nocache = null; $_smarty_tpl->tpl_vars["tr2"]->scope = 0;
} else $_smarty_tpl->tpl_vars["tr2"] = new Smarty_variable('', null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['p1']->value>$_smarty_tpl->tpl_vars['p2']->value){?>
                    <?php if (isset($_smarty_tpl->tpl_vars["tr2"])) {$_smarty_tpl->tpl_vars["tr2"] = clone $_smarty_tpl->tpl_vars["tr2"];
$_smarty_tpl->tpl_vars["tr2"]->value = ($_smarty_tpl->tpl_vars['p1']->value-$_smarty_tpl->tpl_vars['p2']->value)+1; $_smarty_tpl->tpl_vars["tr2"]->nocache = null; $_smarty_tpl->tpl_vars["tr2"]->scope = 0;
} else $_smarty_tpl->tpl_vars["tr2"] = new Smarty_variable(($_smarty_tpl->tpl_vars['p1']->value-$_smarty_tpl->tpl_vars['p2']->value)+1, null, 0);?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['p2']->value>$_smarty_tpl->tpl_vars['p1']->value){?>
                    <?php if (isset($_smarty_tpl->tpl_vars["tr1"])) {$_smarty_tpl->tpl_vars["tr1"] = clone $_smarty_tpl->tpl_vars["tr1"];
$_smarty_tpl->tpl_vars["tr1"]->value = ($_smarty_tpl->tpl_vars['p2']->value-$_smarty_tpl->tpl_vars['p1']->value)+1; $_smarty_tpl->tpl_vars["tr1"]->nocache = null; $_smarty_tpl->tpl_vars["tr1"]->scope = 0;
} else $_smarty_tpl->tpl_vars["tr1"] = new Smarty_variable(($_smarty_tpl->tpl_vars['p2']->value-$_smarty_tpl->tpl_vars['p1']->value)+1, null, 0);?>
                <?php }?>
                <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_smarty_tpl->tpl_vars['kc'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['DATAPLAZACAN']->value[$_smarty_tpl->tpl_vars['guia']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
 $_smarty_tpl->tpl_vars['kc']->value = $_smarty_tpl->tpl_vars['p']->key;
?>
                <?php if (isset($_smarty_tpl->tpl_vars["count"])) {$_smarty_tpl->tpl_vars["count"] = clone $_smarty_tpl->tpl_vars["count"];
$_smarty_tpl->tpl_vars["count"]->value = $_smarty_tpl->tpl_vars['kc']->value+1; $_smarty_tpl->tpl_vars["count"]->nocache = null; $_smarty_tpl->tpl_vars["count"]->scope = 0;
} else $_smarty_tpl->tpl_vars["count"] = new Smarty_variable($_smarty_tpl->tpl_vars['kc']->value+1, null, 0);?>
                <tr>
                    <?php if ($_smarty_tpl->tpl_vars['existeTitular']->value!=''){?>
                    <td rowspan=""><?php echo $_smarty_tpl->tpl_vars['p']->value['titularCan'];?>
</td>
                    <?php }?>
                    <td rowspan=""><?php echo $_smarty_tpl->tpl_vars['p']->value['municipio'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['p']->value['localidad'];?>
</td>
                    <td rowspan="" class="center"><?php echo $_smarty_tpl->tpl_vars['p']->value['zona'];?>
</td>
                    <td rowspan=""><?php echo $_smarty_tpl->tpl_vars['p']->value['claveCCTCan'];?>
<br/>"<?php echo $_smarty_tpl->tpl_vars['p']->value['nombreCt'];?>
"</td>
                    <td rowspan="" class="center"><?php echo $_smarty_tpl->tpl_vars['p']->value['turnoCCTCan'];?>
</td>
                    <td rowspan=""><?php echo $_smarty_tpl->tpl_vars['p']->value['cp'];?>
</td>
                    <td rowspan=""><?php echo $_smarty_tpl->tpl_vars['p']->value['motivoCan'];?>
</td>
                    <td rowspan="" class="center"><?php echo $_smarty_tpl->tpl_vars['p']->value['vigenciaCan'];?>
</td>
                    <td rowspan="" class="center"><?php echo $_smarty_tpl->tpl_vars['p']->value['observacionesPlanCan'];?>
</td>
                    <td rowspan=""></td>
                    <?php if ($_smarty_tpl->tpl_vars['p2']->value>=$_smarty_tpl->tpl_vars['count']->value){?>
                    <td rowspan=""><?php echo $_smarty_tpl->tpl_vars['DATAPLAZACREA']->value[$_smarty_tpl->tpl_vars['guia']->value][$_smarty_tpl->tpl_vars['kc']->value]['municipio'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['DATAPLAZACREA']->value[$_smarty_tpl->tpl_vars['guia']->value][$_smarty_tpl->tpl_vars['kc']->value]['localidad'];?>
</td>
                    <td rowspan=""><?php echo $_smarty_tpl->tpl_vars['DATAPLAZACREA']->value[$_smarty_tpl->tpl_vars['guia']->value][$_smarty_tpl->tpl_vars['kc']->value]['claveCCTCrea'];?>
<br/>"<?php echo $_smarty_tpl->tpl_vars['DATAPLAZACREA']->value[$_smarty_tpl->tpl_vars['guia']->value][$_smarty_tpl->tpl_vars['kc']->value]['nombreCt'];?>
"</td>
                    <td rowspan="" class="center"><?php echo $_smarty_tpl->tpl_vars['DATAPLAZACREA']->value[$_smarty_tpl->tpl_vars['guia']->value][$_smarty_tpl->tpl_vars['kc']->value]['turnoCCTCrea'];?>
</td>
                    <td rowspan="" class="center"><?php echo $_smarty_tpl->tpl_vars['DATAPLAZACREA']->value[$_smarty_tpl->tpl_vars['guia']->value][$_smarty_tpl->tpl_vars['kc']->value]['zona'];?>
</td>                    
                    <?php if ($_smarty_tpl->tpl_vars['esconderA']->value==''){?>
                    <td rowspan=""><?php echo $_smarty_tpl->tpl_vars['DATAPLAZACREA']->value[$_smarty_tpl->tpl_vars['guia']->value][$_smarty_tpl->tpl_vars['kc']->value]['asignaturaCrea'];?>
</td>
                    <?php }?>
                    <td rowspan="" class="center"v><?php echo $_smarty_tpl->tpl_vars['DATAPLAZACREA']->value[$_smarty_tpl->tpl_vars['guia']->value][$_smarty_tpl->tpl_vars['kc']->value]['plazaCrea'];?>
</td>
                    <?php if ($_smarty_tpl->tpl_vars['esconderH']->value==''){?>
                    <td rowspan="" class="center"><?php echo $_smarty_tpl->tpl_vars['DATAPLAZACREA']->value[$_smarty_tpl->tpl_vars['guia']->value][$_smarty_tpl->tpl_vars['kc']->value]['horasCrea'];?>
</td>
                    <?php }?>
                    <td rowspan=""><?php echo $_smarty_tpl->tpl_vars['DATAPLAZACREA']->value[$_smarty_tpl->tpl_vars['guia']->value][$_smarty_tpl->tpl_vars['kc']->value]['motivoCrea'];?>
</td>
                    <td rowspan="" class="center"><?php echo $_smarty_tpl->tpl_vars['DATAPLAZACREA']->value[$_smarty_tpl->tpl_vars['guia']->value][$_smarty_tpl->tpl_vars['kc']->value]['vigenciaCrea'];?>
</td>
                    <td rowspan=""><?php echo $_smarty_tpl->tpl_vars['DATAPLAZACREA']->value[$_smarty_tpl->tpl_vars['guia']->value][$_smarty_tpl->tpl_vars['kc']->value]['observacionesPlanCrea'];?>
</td>
                    <?php }?>
                </tr>
                    <?php  $_smarty_tpl->tpl_vars['pc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pc']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['DATAPLAZACREA']->value[$_smarty_tpl->tpl_vars['guia']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pc']->key => $_smarty_tpl->tpl_vars['pc']->value){
$_smarty_tpl->tpl_vars['pc']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['pc']->key;
?>
                    <?php if (isset($_smarty_tpl->tpl_vars["count2"])) {$_smarty_tpl->tpl_vars["count2"] = clone $_smarty_tpl->tpl_vars["count2"];
$_smarty_tpl->tpl_vars["count2"]->value = $_smarty_tpl->tpl_vars['k']->value+1; $_smarty_tpl->tpl_vars["count2"]->nocache = null; $_smarty_tpl->tpl_vars["count2"]->scope = 0;
} else $_smarty_tpl->tpl_vars["count2"] = new Smarty_variable($_smarty_tpl->tpl_vars['k']->value+1, null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['k']->value>=$_smarty_tpl->tpl_vars['p1']->value&&$_smarty_tpl->tpl_vars['count']->value==$_smarty_tpl->tpl_vars['p1']->value){?>
                    <tr>
                        <?php if ($_smarty_tpl->tpl_vars['count']->value==$_smarty_tpl->tpl_vars['p1']->value){?>
                        <td colspan="9" style="border: 0px !important;"></td>   
                        <td></td>                     
                        <?php }?>
                        <td rowspan=""><?php echo $_smarty_tpl->tpl_vars['pc']->value['municipio'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['pc']->value['localidad'];?>
</td>
                        <td rowspan=""><?php echo $_smarty_tpl->tpl_vars['pc']->value['claveCCTCrea'];?>
<br/>"<?php echo $_smarty_tpl->tpl_vars['pc']->value['nombreCt'];?>
"</td>
                        <td rowspan="" class="center"><?php echo $_smarty_tpl->tpl_vars['pc']->value['turnoCCTCrea'];?>
</td>
                        <td rowspan="" class="center"><?php echo $_smarty_tpl->tpl_vars['pc']->value['zona'];?>
</td>
                        <?php if ($_smarty_tpl->tpl_vars['esconderA']->value==''){?>
                        <td rowspan=""><?php echo $_smarty_tpl->tpl_vars['pc']->value['asignaturaCrea'];?>
</td>
                        <?php }?>
                        <td rowspan="" class="center"><?php echo $_smarty_tpl->tpl_vars['pc']->value['plazaCrea'];?>
</td>
                        <?php if ($_smarty_tpl->tpl_vars['esconderH']->value==''){?>
                        <td rowspan="" class="center"><?php echo $_smarty_tpl->tpl_vars['pc']->value['horasCrea'];?>
</td>
                        <?php }?>
                        <td rowspan=""><?php echo $_smarty_tpl->tpl_vars['pc']->value['motivoCrea'];?>
</td>
                        <td rowspan=""  class="center"><?php echo $_smarty_tpl->tpl_vars['pc']->value['vigenciaCrea'];?>
</td>
                        <td rowspan=""><?php echo $_smarty_tpl->tpl_vars['pc']->value['observacionesPlanCrea'];?>
</td>
                    </tr>
                    <?php }?>
                    <?php } ?>
                   <?php } ?>
                   <?php if (isset($_smarty_tpl->tpl_vars["mguia"])) {$_smarty_tpl->tpl_vars["mguia"] = clone $_smarty_tpl->tpl_vars["mguia"];
$_smarty_tpl->tpl_vars["mguia"]->value = count($_smarty_tpl->tpl_vars['GUIA']->value); $_smarty_tpl->tpl_vars["mguia"]->nocache = null; $_smarty_tpl->tpl_vars["mguia"]->scope = 0;
} else $_smarty_tpl->tpl_vars["mguia"] = new Smarty_variable(count($_smarty_tpl->tpl_vars['GUIA']->value), null, 0);?>
                   <?php if (isset($_smarty_tpl->tpl_vars["countGuia"])) {$_smarty_tpl->tpl_vars["countGuia"] = clone $_smarty_tpl->tpl_vars["countGuia"];
$_smarty_tpl->tpl_vars["countGuia"]->value = $_smarty_tpl->tpl_vars['kg']->value+1; $_smarty_tpl->tpl_vars["countGuia"]->nocache = null; $_smarty_tpl->tpl_vars["countGuia"]->scope = 0;
} else $_smarty_tpl->tpl_vars["countGuia"] = new Smarty_variable($_smarty_tpl->tpl_vars['kg']->value+1, null, 0);?>
                   <?php if ($_smarty_tpl->tpl_vars['mguia']->value>$_smarty_tpl->tpl_vars['countGuia']->value){?>
                   <tr>
                        <td colspan="<?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
"></td>
                   </tr>
                   <?php }?>
                <?php } ?>
           </table>
        </div>

        <div style="padding: 10px;"></div>
         <div class="table-responsive">
           <table class="tablaHead" width="30%" cellspacing="2" cellpadding="2" style="width: 30% !important;border: 0px;">
            <thead>
                <tr>
                    <th colspan="6" align="center">PLAZAS</th>
                </tr>
                <tr>
                    <th colspan="3" align="center">CANCELADAS</th>
                    <th colspan="3" align="center">CREADAS</th>
                </tr>
                <tr>
                    <th>CATEGORÍA</th>
                    <th>TOTAL</th>
                    <th>HORAS</th>
                    <th>CATEGORÍA</th>
                    <th>TOTAL</th>
                    <th>HORAS</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($_smarty_tpl->tpl_vars["pr1"])) {$_smarty_tpl->tpl_vars["pr1"] = clone $_smarty_tpl->tpl_vars["pr1"];
$_smarty_tpl->tpl_vars["pr1"]->value = count($_smarty_tpl->tpl_vars['DATARESCAN']->value['categoria']); $_smarty_tpl->tpl_vars["pr1"]->nocache = null; $_smarty_tpl->tpl_vars["pr1"]->scope = 0;
} else $_smarty_tpl->tpl_vars["pr1"] = new Smarty_variable(count($_smarty_tpl->tpl_vars['DATARESCAN']->value['categoria']), null, 0);?>
                <?php if (isset($_smarty_tpl->tpl_vars["pr2"])) {$_smarty_tpl->tpl_vars["pr2"] = clone $_smarty_tpl->tpl_vars["pr2"];
$_smarty_tpl->tpl_vars["pr2"]->value = count($_smarty_tpl->tpl_vars['DATARESCREA']->value['categoria']); $_smarty_tpl->tpl_vars["pr2"]->nocache = null; $_smarty_tpl->tpl_vars["pr2"]->scope = 0;
} else $_smarty_tpl->tpl_vars["pr2"] = new Smarty_variable(count($_smarty_tpl->tpl_vars['DATARESCREA']->value['categoria']), null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['vr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vr']->_loop = false;
 $_smarty_tpl->tpl_vars['kr'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['DATARESCAN']->value['categoria']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vr']->key => $_smarty_tpl->tpl_vars['vr']->value){
$_smarty_tpl->tpl_vars['vr']->_loop = true;
 $_smarty_tpl->tpl_vars['kr']->value = $_smarty_tpl->tpl_vars['vr']->key;
?>
                <?php if (isset($_smarty_tpl->tpl_vars["countr"])) {$_smarty_tpl->tpl_vars["countr"] = clone $_smarty_tpl->tpl_vars["countr"];
$_smarty_tpl->tpl_vars["countr"]->value = $_smarty_tpl->tpl_vars['kr']->value+1; $_smarty_tpl->tpl_vars["countr"]->nocache = null; $_smarty_tpl->tpl_vars["countr"]->scope = 0;
} else $_smarty_tpl->tpl_vars["countr"] = new Smarty_variable($_smarty_tpl->tpl_vars['kr']->value+1, null, 0);?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['vr']->value;?>
</td>
                    <td align="center"><?php echo $_smarty_tpl->tpl_vars['DATARESCAN']->value['total'][$_smarty_tpl->tpl_vars['kr']->value];?>
</td>
                    <td align="center"><?php echo $_smarty_tpl->tpl_vars['DATARESCAN']->value['horas'][$_smarty_tpl->tpl_vars['kr']->value];?>
</td>
                    <td style="<?php if ($_smarty_tpl->tpl_vars['countr']->value>$_smarty_tpl->tpl_vars['pr2']->value){?>border:0px;<?php }?>"><?php echo $_smarty_tpl->tpl_vars['DATARESCREA']->value['categoria'][$_smarty_tpl->tpl_vars['kr']->value];?>
</td>
                    <td align="center" style="<?php if ($_smarty_tpl->tpl_vars['countr']->value>$_smarty_tpl->tpl_vars['pr2']->value){?>border:0px;<?php }?>"><?php echo $_smarty_tpl->tpl_vars['DATARESCREA']->value['total'][$_smarty_tpl->tpl_vars['kr']->value];?>
</td>
                    <td align="center" style="<?php if ($_smarty_tpl->tpl_vars['countr']->value>$_smarty_tpl->tpl_vars['pr2']->value){?>border:0px;<?php }?>"><?php echo $_smarty_tpl->tpl_vars['DATARESCREA']->value['horas'][$_smarty_tpl->tpl_vars['kr']->value];?>
</td>
                </tr>
                <?php } ?>
                <?php if ($_smarty_tpl->tpl_vars['pr2']->value>=$_smarty_tpl->tpl_vars['pr1']->value){?>
                <?php  $_smarty_tpl->tpl_vars['vr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vr']->_loop = false;
 $_smarty_tpl->tpl_vars['kr'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['DATARESCREA']->value['categoria']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vr']->key => $_smarty_tpl->tpl_vars['vr']->value){
$_smarty_tpl->tpl_vars['vr']->_loop = true;
 $_smarty_tpl->tpl_vars['kr']->value = $_smarty_tpl->tpl_vars['vr']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['kr']->value>=$_smarty_tpl->tpl_vars['pr1']->value&&$_smarty_tpl->tpl_vars['countr']->value==$_smarty_tpl->tpl_vars['pr1']->value){?>
                <tr>
                    <td style="border:0px;"></td>
                    <td align="center" style="border:0px;"></td>
                    <td align="center" style="border:0px;"></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['DATARESCREA']->value['categoria'][$_smarty_tpl->tpl_vars['kr']->value];?>
</td>
                    <td align="center"><?php echo $_smarty_tpl->tpl_vars['DATARESCREA']->value['total'][$_smarty_tpl->tpl_vars['kr']->value];?>
</td>
                    <td align="center"><?php echo $_smarty_tpl->tpl_vars['DATARESCREA']->value['horas'][$_smarty_tpl->tpl_vars['kr']->value];?>
</td>
                </tr>
                <?php }?>
                <?php } ?>
                <?php }?>
            </tbody>
           </table>
        </div>

    </div>

<?php }else{ ?>
    <div class="wrapper">
        <div class="alert alert-danger">
            No hay información para mostrar.
        </div>
    </div>
<?php }?>
<?php }} ?>