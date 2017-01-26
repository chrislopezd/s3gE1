<?php /* Smarty version Smarty-3.1.13, created on 2017-01-26 05:33:36
         compiled from "application_content/views/templates/usuarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50878627558894fcd4529f8-16918433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c8301b03b9650892d42b8d3eb9c4fbbd20c06c1' => 
    array (
      0 => 'application_content/views/templates/usuarios.tpl',
      1 => 1485404986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50878627558894fcd4529f8-16918433',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_58894fcd47f3f6_89525781',
  'variables' => 
  array (
    'LISTADO' => 0,
    'key' => 0,
    'res' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58894fcd47f3f6_89525781')) {function content_58894fcd47f3f6_89525781($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("design/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="rose">
                                    <h4 class="card-title">Listado de usuarios</h4>
                                </div>
                                <div class="card-content">
                                <hr/>
                                    <div class="toolbar">
                                       <a href="nuevoUsuario" class="btn btn-round btn-success">
                                            <i class="material-icons">add</i>
                                            Nuevo usuario
                                        </a>
                                    </div>
                                    <div class="material-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tipo perfil</th>
                                                    <th>Tipo beneficiado</th>
                                                    <th>Usuario</th>
                                                    <th>Programa</th>
                                                    <th>Estatus</th>
                                                    <th class="disabled-sorting text-right">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                   <th>#</th>
                                                    <th>Tipo perfil</th>
                                                    <th>Tipo beneficiado</th>
                                                    <th>Usuario</th>
                                                    <th>Programa</th>
                                                    <th>Estatus</th>
                                                    <th class="disabled-sorting text-right">Acciones</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php  $_smarty_tpl->tpl_vars['res'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['res']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LISTADO']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['res']->key => $_smarty_tpl->tpl_vars['res']->value){
$_smarty_tpl->tpl_vars['res']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['res']->key;
?>
                                                <tr>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['res']->value['nombrePerfilUsuario'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['res']->value['tipo'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['res']->value['programa'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['res']->value['observaciones'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['res']->value['estatusUsuario'];?>
</td>
                                                    <td class="td-actions text-right">
                                                        <button type="button" rel="tooltip" class="btn btn-success btn-round edit">
                                                            <i class="material-icons">edit</i>
                                                        </button>
                                                        <button type="button" rel="tooltip" class="btn btn-danger btn-round remove">
                                                            <i class="material-icons">close</i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- end content-->
                            </div>
                            <!--  end card  -->
                        </div>
                        <!-- end col-md-12 -->
                    </div>
                    <!-- end row -->
                </div>
            </div>


<?php echo $_smarty_tpl->getSubTemplate ("design/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript">
    $(document).ready(function() {
        $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "Todos"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Buscar",
                sZeroRecords:"No se encontraron resultados",
                paginate:{
                    first:"Primero",
                    last:"Último",
                    next:"Siguiente",
                    previous:"Anterior"
                },
                infoEmpty: "Mostrando 0 - 0 de 0 ",
                emptyTable:"Ningún dato disponible en el listado",
                info:"Mostrando _START_ - _END_ de _TOTAL_",
                infoFiltered:"(filtrado de un total de _MAX_ registros)",
                lengthMenu:"Mostrar _MENU_ ",
                loadingRecords:"Cargando...",
                processing:"Procesando...",
                search:"",
                thousands:",",
                zeroRecords:"No se encontraron resultados"
            },
        });
        var table = $('#datatables').DataTable();

        // Edit record
        table.on('click', '.edit', function() {
            $tr = $(this).closest('tr');

            var data = table.row($tr).data();
            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });

        // Delete a record
        table.on('click', '.remove', function(e) {
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        });
        $('body').find(".pagination").addClass("pagination-success");

        $('.card .material-datatables label').addClass('form-group has-success');
    });
</script>
<?php }} ?>