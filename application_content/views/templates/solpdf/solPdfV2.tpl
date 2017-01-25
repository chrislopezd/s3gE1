<style type="text/css">
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
{if !empty($DATA)}
    <div class="wrapper">
        <div class="table-responsive">
           <table class="tablaHead" width="100%" cellspacing="2" cellpadding="2">
                <thead>
                <tr>
                    <td colspan="{if $existeTitular neq ''}9{else}8{/if}" class="center">CANCELACIÓN</td>
                    <td style="width:4px;"></td>
                    <td colspan="{$col}" class="center">CREACIÓN / CONVERSIÓN</td>
                </tr>
                <tr>
                    {if $existeTitular neq ''}
                    <th rowspan="2">TITULAR</th>
                    {/if}
                    <th rowspan="2">MUNICIPIO Y<br/> LOCALIDAD</th>
                    <th rowspan="2">ZO-<br/>NA</th>
                    <th rowspan="2">CLAVE<br/>ESCUELA</th>
                    <th rowspan="2">TUR-<br/>NO</th>
                    <th rowspan="2">PLAZA</th>
                    <th rowspan="2">MOTIVO</th>
                    <th rowspan="2">VIGENCIA</th>
                    <th rowspan="2">OBSERVACIONES</th>
                    <td rowspan="2" style="width:4px;"></td>
                    <th rowspan="2">MUNICIPIO Y<br/> LOCALIDAD</th>
                    <th rowspan="2">CLAVE<br/>ESCUELA</th>
                    <th rowspan="2">TUR-<br/>NO</th>
                    <th rowspan="2">ZO-<br/>NA</th>
                    <th colspan="{if $esconderBCM eq ''}6{else}3{/if}">GRUPOS DE BASE</th>
                    <th colspan="{if $esconderBCM eq ''}6{else}3{/if}">GRUPOS DE CONTRATO</th>
                    <th colspan="{if $esconderBCM eq ''}6{else}3{/if}">MATRÍCULA</th>
                    {if $esconderG eq ''}
                    <th rowspan="2">GRUPO</th>
                    {/if}
                    {if $esconderA eq ''}
                    <th rowspan="2">ASIGNATURA</th>
                    {/if}
                    <th rowspan="2">CATE-<br/>GORIA</th>
                    {if $esconderH eq ''}
                    <th rowspan="2">HO-<br/>RAS</th>
                    {/if}
                    <th rowspan="2">MOTIVO</th>
                    <th rowspan="2">VIGENCIA</th>
                    <th rowspan="2">OBSERVACIONES</th>
                </tr>
                <tr>
                    <th>1°</th>
                    <th>2°</th>
                    <th>3°</th>
                    {if $esconderBCM eq ''}
                    <th>4°</th>
                    <th>5°</th>
                    <th>6°</th>
                    {/if}
                    <th>1°</th>
                    <th>2°</th>
                    <th>3°</th>
                    {if $esconderBCM eq ''}
                    <th>4°</th>
                    <th>5°</th>
                    <th>6°</th>
                    {/if}
                    <th>1°</th>
                    <th>2°</th>
                    <th>3°</th>
                    {if $esconderBCM eq ''}
                    <th>4°</th>
                    <th>5°</th>
                    <th>6°</th>
                    {/if}
                </tr>
                </thead>
                {foreach from=$GUIA key=kg item=g}
                {assign var="guia" value=$g['guia']}
                {assign var="p1" value=$DATAPLAZACAN[$guia]|count}
                {assign var="p2" value=$DATAPLAZACREA[$guia]|count}

                {assign var="tr1" value=''}
                {assign var="tr2" value=''}
                {if $p1 gt $p2}
                    {assign var="tr2" value=($p1 -$p2) + 1}
                {/if}
                {if $p2 gt $p1}
                    {assign var="tr1" value=($p2 -$p1) + 1}
                {/if}
                {foreach from=$DATAPLAZACAN[$guia] key=kc item=p}
                {assign var="count" value=$kc +1}
                <tr>
                    {if $existeTitular neq ''}
                    <td rowspan="">{$p['titularCan']}</td>
                    {/if}
                    <td rowspan="">{$p['municipio']}<br/>{$p['localidad']}</td>
                    <td rowspan="" class="center">{$p['zona']}</td>
                    <td rowspan="">{$p['claveCCTCan']}<br/>"{$p['nombreCt']}"</td>
                    <td rowspan="" class="center">{$p['turnoCCTCan']}</td>
                    <td rowspan="">{$p['cp']}</td>
                    <td rowspan="">{$p['motivoCan']}</td>
                    <td rowspan="" class="center">{$p['vigenciaCan']}</td>
                    <td rowspan="" class="center">{$p['observacionesCan']}</td>
                    <td rowspan=""></td>
                    {if $p2 gte $count}
                    <td rowspan="">{$DATAPLAZACREA[$guia][$kc]['municipio']}<br/>{$DATAPLAZACREA[$guia][$kc]['localidad']}</td>
                    <td rowspan="">{$DATAPLAZACREA[$guia][$kc]['claveCCTCrea']}<br/>"{$DATAPLAZACREA[$guia][$kc]['nombreCt']}"</td>
                    <td rowspan="" class="center">{$DATAPLAZACREA[$guia][$kc]['turnoCCTCrea']}</td>
                    <td rowspan="" class="center">{$DATAPLAZACREA[$guia][$kc]['zona']}</td>
                    <td rowspan="" class="center">{$DATAPLAZACREA[$guia][$kc]['grupoTotal1Base']}</td>
                    <td rowspan="" class="center">{$DATAPLAZACREA[$guia][$kc]['grupoTotal2Base']}</td>
                    <td rowspan="" class="center">{$DATAPLAZACREA[$guia][$kc]['grupoTotal3Base']}</td>
                    {if $esconderBCM eq ''}
                    <td rowspan="" class="center">{$DATAPLAZACREA[$guia][$kc]['grupoTotal4Base']}</td>
                    <td rowspan="" class="center">{$DATAPLAZACREA[$guia][$kc]['grupoTotal5Base']}</td>
                    <td rowspan="" class="center">{$DATAPLAZACREA[$guia][$kc]['grupoTotal6Base']}</td>
                    {/if}
                    <td rowspan="" class="center">{$DATAPLAZACREA[$guia][$kc]['grupoTotal1Contrato']}</td>
                    <td rowspan="" class="center">{$DATAPLAZACREA[$guia][$kc]['grupoTotal2Contrato']}</td>
                    <td rowspan="" class="center">{$DATAPLAZACREA[$guia][$kc]['grupoTotal3Contrato']}</td>
                    {if $esconderBCM eq ''}
                    <td rowspan="" class="center">{$DATAPLAZACREA[$guia][$kc]['grupoTotal4Contrato']}</td>
                    <td rowspan="" class="center">{$DATAPLAZACREA[$guia][$kc]['grupoTotal5Contrato']}</td>
                    <td rowspan="" class="center">{$DATAPLAZACREA[$guia][$kc]['grupoTotal6Contrato']}</td>
                    {/if}
                    <td rowspan="" class="center">{$DATAPLAZACREA[$guia][$kc]['alumTotal1']}</td>
                    <td rowspan="" class="center">{$DATAPLAZACREA[$guia][$kc]['alumTotal2']}</td>
                    <td rowspan="" class="center">{$DATAPLAZACREA[$guia][$kc]['alumTotal3']}</td>
                    {if $esconderBCM eq ''}
                    <td rowspan="" class="center">{$DATAPLAZACREA[$guia][$kc]['alumTotal4']}</td>
                    <td rowspan="" class="center">{$DATAPLAZACREA[$guia][$kc]['alumTotal5']}</td>
                    <td rowspan="" class="center">{$DATAPLAZACREA[$guia][$kc]['alumTotal6']}</td>
                    {/if}
                    {if $esconderG eq ''}
                    <td rowspan="">{$DATAPLAZACREA[$guia][$kc]['grupoCrea']}</td>
                    {/if}
                    {if $esconderA eq ''}
                    <td rowspan="">{$DATAPLAZACREA[$guia][$kc]['asignaturaCrea']}</td>
                    {/if}
                    <td rowspan="" class="center"v>{$DATAPLAZACREA[$guia][$kc]['plazaCrea']}</td>
                    {if $esconderH eq ''}
                    <td rowspan="" class="center">{$DATAPLAZACREA[$guia][$kc]['horasCrea']}</td>
                    {/if}
                    <td rowspan="">{$DATAPLAZACREA[$guia][$kc]['motivoCrea']}</td>
                    <td rowspan="" class="center">{$DATAPLAZACREA[$guia][$kc]['vigenciaCrea']}</td>
                    <td rowspan="">{$DATAPLAZACREA[$guia][$kc]['observacionesCrea']}</td>
                    {/if}
                </tr>
                    {foreach from=$DATAPLAZACREA[$guia] key=k item=pc}
                    {assign var="count2" value=$k +1}
                    {if $k gte $p1 && $count eq $p1}
                    <tr>
                        {if $count eq $p1}
                        <td colspan="9" style="border: 0px !important;"></td>   
                        <td></td>                     
                        {/if}
                        <td rowspan="">{$pc['municipio']}<br/>{$pc['localidad']}</td>
                        <td rowspan="">{$pc['claveCCTCrea']}<br/>"{$pc['nombreCt']}"</td>
                        <td rowspan="" class="center">{$pc['turnoCCTCrea']}</td>
                        <td rowspan="" class="center">{$pc['zona']}</td>
                        <td rowspan="" class="center">{$pc['grupoTotal1Base']}</td>
                        <td rowspan="" class="center">{$pc['grupoTotal2Base']}</td>
                        <td rowspan="" class="center">{$pc['grupoTotal3Base']}</td>
                        {if $esconderBCM eq ''}
                        <td rowspan="" class="center">{$pc['grupoTotal4Base']}</td>
                        <td rowspan="" class="center">{$pc['grupoTotal5Base']}</td>
                        <td rowspan="" class="center">{$pc['grupoTotal6Base']}</td>
                        {/if}
                        <td rowspan="" class="center">{$pc['grupoTotal1Contrato']}</td>
                        <td rowspan="" class="center">{$pc['grupoTotal2Contrato']}</td>
                        <td rowspan="" class="center">{$pc['grupoTotal3Contrato']}</td>
                        {if $esconderBCM eq ''}
                        <td rowspan="" class="center">{$pc['grupoTotal4Contrato']}</td>
                        <td rowspan="" class="center">{$pc['grupoTotal5Contrato']}</td>
                        <td rowspan="" class="center">{$pc['grupoTotal6Contrato']}</td>
                        {/if}
                        <td rowspan="" class="center">{$pc['alumTotal1']}</td>
                        <td rowspan="" class="center">{$pc['alumTotal2']}</td>
                        <td rowspan="" class="center">{$pc['alumTotal3']}</td>
                        {if $esconderBCM eq ''}
                        <td rowspan="" class="center">{$pc['alumTotal4']}</td>
                        <td rowspan="" class="center">{$pc['alumTotal5']}</td>
                        <td rowspan="" class="center">{$pc['alumTotal6']}</td>
                        {/if}
                        <td rowspan="">{$pc['grupoCrea']}</td>
                        {if $esconderA eq ''}
                        <td rowspan="">{$pc['asignaturaCrea']}</td>
                        {/if}
                        <td rowspan="" class="center">{$pc['plazaCrea']}</td>
                        {if $esconderH eq ''}
                        <td rowspan="" class="center">{$pc['horasCrea']}</td>
                        {/if}
                        <td rowspan="">{$pc['motivoCrea']}</td>
                        <td rowspan=""  class="center">{$pc['vigenciaCrea']}</td>
                        <td rowspan="">{$pc['observacionesCrea']}</td>
                    </tr>
                    {/if}
                    {/foreach}
                   {/foreach}
                   {assign var="mguia" value=$GUIA|count}
                   {assign var="countGuia" value=$kg +1}
                   {if $mguia gt $countGuia}
                   <tr>
                        <td colspan="{$colspan}"></td>
                   </tr>
                   {/if}
                {/foreach}
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
                {assign var="pr1" value=$DATARESCAN['categoria']|count}
                {assign var="pr2" value=$DATARESCREA['categoria']|count}
                {foreach from=$DATARESCAN['categoria'] key=kr item=vr}
                {assign var="countr" value=$kr +1}
                <tr>
                    <td>{$vr}</td>
                    <td align="center">{$DATARESCAN['total'][$kr]}</td>
                    <td align="center">{$DATARESCAN['horas'][$kr]}</td>
                    <td style="{if $countr > $pr2}border:0px;{/if}">{$DATARESCREA['categoria'][$kr]}</td>
                    <td align="center" style="{if $countr > $pr2}border:0px;{/if}">{$DATARESCREA['total'][$kr]}</td>
                    <td align="center" style="{if $countr > $pr2}border:0px;{/if}">{$DATARESCREA['horas'][$kr]}</td>
                </tr>
                {/foreach}
                {if $pr2 gte $pr1}
                {foreach from=$DATARESCREA['categoria'] key=kr item=vr}
                {if $kr gte $pr1 && $countr eq $pr1}
                <tr>
                    <td style="border:0px;"></td>
                    <td align="center" style="border:0px;"></td>
                    <td align="center" style="border:0px;"></td>
                    <td>{$DATARESCREA['categoria'][$kr]}</td>
                    <td align="center">{$DATARESCREA['total'][$kr]}</td>
                    <td align="center">{$DATARESCREA['horas'][$kr]}</td>
                </tr>
                {/if}
                {/foreach}
                {/if}
            </tbody>
           </table>
        </div>

    </div>

{else}
    <div class="wrapper">
        <div class="alert alert-danger">
            No hay información para mostrar.
        </div>
    </div>
{/if}