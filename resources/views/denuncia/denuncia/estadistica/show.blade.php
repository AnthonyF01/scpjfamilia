<!DOCTYPE html>
<html>
<head>
  <style type="text/css">

    body {
      font-size: 12px;
      /*font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;*/
      font-family: 'Source Sans Pro',sans-serif;
    }

    /* table-cell */

    table.table-cell{
      border-spacing: 2px;
      border-collapse: separate;
    }

    table.table-cell>thead {
      display: table-header-group;
      page-break-after: avoid;
    }

    thead:before, thead:after { 
      display: none; 
    } 

    tbody:before, tbody:after { 
      display: none; 
    }

    table.table-cell>thead>tr {
      color: #fff;
    }

    table.table-cell>thead>tr>th>a {
      color: #fff;
    }

    table.table-cell>thead>tr>th {
      background-color: #1d96b2;
      border: 1px solid #1d96b2;
      /*background-color: #6d6d6d;
      border: 1px solid #6d6d6d;*/
      padding: 12px;
    }

    table.table-lg>thead>tr>th {
      padding: 8px;
    }

    table.table-lg>thead>tr>th.modHeader {
      padding: 8px 4px;
    }

    table.table-cell>thead>tr>th:first-child {
      text-align: center;
    }

    table.table-cell>thead>tr>th.header {
      text-align: center;
    }

    table.table-cell>tbody {
      color: #5e5d52;
    }

    table.table-cell>tbody>tr:nth-of-type(odd) {
      background-color: #f5f5f5;
    }

    table.table-cell>tbody>tr:hover {
      background-color: #f1f1f1;
    }

    table.table-cell>tbody>tr>td:first-child {
      text-align: center;
    }

    table.table-cell>tbody>tr>td {
      border-bottom: 1px solid #1d96b2;
      /*border-bottom: 1px solid #6d6d6d;*/
    }

    table.table-cell>tbody>tr>td.no-bd {
      border-bottom: none;
    }

    table.table-cell>tbody>tr>td.details-control {
      background: url("/assests/img/details_open.png") no-repeat center center;
      cursor: pointer;
    }

    table.table-cell>tbody>tr.selected {
      background-color: #c0d4f9;
    }

    td.width-20{
      width: 20%;
    }

    td.width-30{
      width: 30%;
    }

    .fweight{
      font-weight: bold;
    }

    .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
      padding: 8px;
      padding-top: 8px;
      padding-right: 8px;
      padding-bottom: 8px;
      padding-left: 8px;
      line-height: 1.42857143;
    }

    .tape {
        margin: 40px 0px;
        line-height: 40px;  
        font-size: 20px;
        background-color: #555;
        color: #fff;
        text-align: center;
        vertical-align: middle;
    }


    /*------- table-cell -------*/

    /* add styles */
    
    .bg-red, .callout.callout-danger, .alert-danger, .alert-error, .label-danger, .modal-danger .modal-body {
      background-color: #dd4b39 !important;
      /*background-color: #868686 !important;*/
    }

    .bg-green, .callout.callout-success, .alert-success, .label-success, .modal-success .modal-body {
      background-color: #00a65a !important;
      /*background-color: #b7b7b7 !important;*/
    }

    .label {
      display: inline-block;
      padding: 4px 5px;
      font-size: 10px;
      font-weight: 700;
      line-height: 1;
      color: #fff;
      text-align: center;
      white-space: nowrap;
      vertical-align: baseline;
      border-radius: .25em;
    }

    /* --add styles-- */

    /* others styles */
  
    .div-table{
      /*padding: 5px 0px;*/
      display: table;
      table-layout: fixed;
      width:100%;
      /*margin-left: -15px; 
      margin-right: -15px;*/
      /*border: 1px solid;*/
    }
    .div-cell{
      display: table-cell;
      text-align: center;
      padding: 15px;
      /*border: 1px solid;*/
      text-align: justify; 
    }
    .cell-1{
      width: 8.33%;
    }
    .cell-1_2{
      width: 10%;
    }
    .cell-2{
      width: 16.67%;
    }
    .cell-2_4{
      width: 20%;
    }
    .cell-2_5{
      width: 20.83%;
    }
    .cell-3{
      width: 25%;
    }
    .cell-3_5{
      width: 29.16%;
    }
    .cell-4{
      width: 33.33%;
    }
    .cell-5{
      width: 41.66%;
    }
    .cell-6{
      width: 50%;
    }
    .cell-7{
      width: 58.33%;
    }
    .cell-8{
      width: 66.66%;
    }
    .cell-9{
      width: 75%;
    }
    .cell-10{
      width: 83.33%;
    }
    .cell-11{
      width: 91.66%;
    }
    .cell-12{
      width: 100%;
    }
    .nplr{
      padding: 0px;
    }
    .plr1 {
      padding: 2px;
    }
    .both{
      clear: both;
    }

    .headBox {
      margin: 0px;
      line-height: 40px;
      vertical-align: middle;
      font-weight: bold;
      font-size: 20px;
    }

    .min{
      font-size: 13px;
    }

    .color_bl {
      color: #fff;
    }

    .color_bk {
      color: #000;
    }

    .color_rd {
      color: rgb(203, 0, 0);
    }

    .red {
      background-color: rgb(203, 0, 0);
    }

    .green {
      background-color: rgb(0,100,40);
    }

    .pink {
      background-color: rgb(255,51,153);
    }

    .blue {
      background-color: rgb(37,89,151);
    }

    .black {
      background-color: rgb(0, 0, 0);
    }

    .blank {
      background-color: #fff;
    }

    .box {
      height: 265px;
    }

    .bbox_rd {
      border: 1px solid rgb(203, 0, 0);
    }

    .bbox_bl {
      border: 1px solid rgb(0, 0, 0);
    }

    .boxBody{
      height: 225px;
      text-align: center;
      font-size: 30px;
    }

    .headGraph {
      margin: 0px;
      line-height: 40px;
      vertical-align: middle;
      font-weight: bold;
    }

    .bodyGraph {
      max-height: 225px;
      overflow:hidden;
      align-items: center;
      text-align: center;
    }

    .bodyGraph img {
      margin-top: 0px;
      margin-bottom: 0px; 
    }

    .bodyGraph img.img1 {
      margin-top: -10px;
      margin-bottom: -5; 
    }

    .bodyGraph img.img2 {
      margin-top: 10px;
      margin-bottom: 0; 
    }

    .bodyGraph img.img3 {
      margin-top: 0px;
      margin-bottom: 0; 
    }

    /* ---others styles--- */

    img {
      /*border: 1px solid #000;*/
    }

    .circle {
      margin: 30px auto 0 auto;
      font-size: 40px;
      font-weight: bold;
      width: 150px;
      height: 150px;
      line-height: 175px;
      vertical-align: middle;
      -webkit-border-radius: 75px;
      -moz-border-radius: 75px;
      border-radius: 75px;
    }

    .center {
      text-align: center;
    }

    .bcont {
      height: 100px;
    }

    .cadjust {
      margin: 30px auto 0 auto;
      font-size: 15px;
      font-weight: bold;
      width: 120px;
      height: 120px;
      line-height: 140px;
      vertical-align: middle;
      -webkit-border-radius: 60px;
      -moz-border-radius: 60px;
      border-radius: 60px;
    }

    .strong {
      border-top: 1px solid #ff8f00f7;
    }
    .h6 {
      font-size: 12px !important;
      margin-bottom: 5px !important;
      margin-top: 5px !important;
    }

    .pj {
      background-color: #951307;
    }

    .orange {
      background-color: #f39c12;
    }

    .suma {
      background-color: #333;
    }

    .adjust {
      /*font-size: 10px !important;
      width: 70px !important;
      height: 70px !important;
      line-height: 10px !important;
      border-top-left-radius: 50px !important;
      border-top-right-radius: 50px !important;
      border-bottom-left-radius: 50px !important;
      border-bottom-right-radius: 50px !important;
      -webkit-border-radius: 50px !important;
      -moz-border-radius: 50px !important;*/
      margin: 15px auto 0 auto;
      font-size: 25px;
      font-weight: bold;
      width: 70px;
      height: 70px;
      line-height: 70px;
      vertical-align: middle;
      -webkit-border-radius: 35px;
      -moz-border-radius: 35px;
      border-radius: 35px;
    }

    .add {
      margin: 5px auto 0 auto !important;
    }

    table.table-cell>thead>tr>th {
        background-color: #255997 !important;
        border: 1px solid #255997 !important;
        padding: 3px !important;
    }


  </style>

  <style>
    @page { margin-top: 10px; margin-bottom: 10px; margin-left: 50px; margin-right: 50px; border: 1px solid #ccc}
    #header { position: fixed; left: 0px; top: -90px; right: 0px; height: 80px; text-align: center; }
    #footer { position: fixed; left: 0px; bottom: -50px; right: 0px; height: 50px; }
    #footer .page:after { content: counter(page); }
  </style>
  
</head>
<body>

  <div id="content">

    <?php 
      $mes = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Setiembre','Octubre','Noviembre','Diciembre'];
    ?>
    
    <div style="page-break-after: avoid; text-align: center; margin-top: 20px;">
      <img src="{{base_path().'/public/img/pjlogo.png'}}" height="50px" width="50px" style="display: flex;">
      <h4 style="margin: 0px">MODULO DE VIOLENCIA FAMILIAR - {{Auth::user()->tblmodulo->nombre}}</h4>
      <h4 style="margin: 0px">PERIODO DE GESTION {{ ( isset($request['mes']) && !empty($request['mes']) ) ? $mes[$request['mes']-1]." - ".$request['anio'] : $request['anio'] }}</h4>
      @if ($request['graph'] == '1')
        <h4 style="margin: 10px 0px 20px 0px">CONSOLIDADO MENSUAL DE FOCALIZACION DE VICTIMAS Y AGRESORES DE LAS DENUNCIAS DE VIOLENCIA FAMILIAR SEGÚN LA LEY Nº 30364</h4>
      @endif
      @if ($request['graph'] == '2')
        <h4 style="margin: 10px 0px 20px 0px">REPORTE CONSOLIDADO DE ATENCION Y DURACION DEL TRAMITE DE LAS DENUNCIAS DE VIOLENCIA FAMILIAR SEGÚN LA LEY Nº 30364</h4>
      @endif
      @if ($request['graph'] == '3')
        <h4 style="margin: 10px 0px 20px 0px">CONSOLIDADO ANUAL DE FOCALIZACION DE VICTIMAS Y AGRESORES DE LAS DENUNCIAS DE VIOLENCIA FAMILIAR SEGÚN LA LEY Nº 30364</h4>
      @endif
      @if ($request['graph'] == '4')
        <h4 style="margin: 10px 0px 20px 0px">CONSOLIDADO ANUAL DE INGRESOS, TIEMPO Y CARGA PROCESAL DE LAS DENUNCIAS DE VIOLENCIA FAMILIAR SEGÚN LA LEY Nº 30364</h4>
      @endif
    </div>

    <div class="both"></div>
    
    @if ($request['graph'] == '1' || $request['graph'] == '3')
      <div class="div-table" style="margin-bottom: 20px;">
        <div class="div-cell cell-2 nplr">
          <div class="box bbox_rd">
            <center><h3 class="headBox color_bl red">VICTIMAS</h3></center>
            <div class="boxBody color_rd"><h2 style="margin-top: 80px">{{ $request['vDTotal'] }}</h2></div>
          </div>
        </div>
        <div class="div-cell cell-4 nplr">
          <center><h3 class="headGraph color_rd">CARACTERISTICAS DE LA VICTIMA</h3></center>
          <div class="bodyGraph"><img style="" src="{{ $splitImg[0] }}" height="90%" width="90%"></div>
        </div>
        <div class="div-cell cell-4 nplr">
          <center><h3 class="headGraph color_rd">EDAD DE LA VICTIMA</h3></center>
          <div class="bodyGraph"><img style="" src="{{ $splitImg[1] }}" height="90%" width="90%"></div>
        </div>
        <div class="div-cell cell-2 nplr">
          <div class="box bbox_rd red color_bl">
            <center><h3 class="headBox color_rd blank">HIJOS</h3></center>
            <div class="boxBody color_bl"><h2 style="margin-top: 80px">{{ $request['hHTotal'] }}</h2></div>
          </div>
        </div>
      </div>

      <div class="both"></div>

      <hr style="margin:0px">
      <hr style="margin-bottom:0px; border-width: 2px">
      <hr style="margin-bottom:20px">

      <div class="div-table" >
        <div class="div-cell cell-2 nplr">
          <div class="box bbox_bl">
            <center><h3 class="headBox color_bl black">AGRESORES</h3></center>
            <div class="color_bk" style="text-align: center; font-size: 30px;"><h2 style="margin-top: 80px">{{ $request['pATotal'] }}</h2></div>
          </div>
        </div>
        <div class="div-cell cell-8 nplr">
          <center><h3 class="headGraph color_bk">PARENTESCO DEL AGRESOR</h3></center>
          <div class="bodyGraph"><img class="img1" src="{{ $splitImg[3] }}" height="auto" width="100%"></div>
        </div>
        <div class="div-cell cell-2 nplr">
          <div class="box bbox_bl">
            <center><h3 class="headBox color_bl black">SEXO</h3></center>
            <div class="bodyGraph" style="margin-left: 2px; margin-right: 1px; padding-left: 1px; padding-right: 1px"><img style="" class="img2" src="{{ $splitImg[2] }}" height="75%" width="auto"></div>
          </div>
        </div>
      </div>
    @endif

    @if ($request['graph'] == '2')
    <br>
      <h3 class="tape" style="margin-top: -1px; margin-bottom:0">Tiempo de Tramite</h3>
      <div class="table-responsive">
        <table class="table table-cell" style="width: 100%; font-size: 12px;">
          <thead>
            <tr>
              <th style="font-size: 13px;" colspan="6" rowspan="2" class="header v-align">FASE I</th>
              <th style="font-size: 13px;" rowspan="2" class="header v-align">FASE II</th>
              <th style="font-size: 13px;" colspan="2" class="header">FASE III</th>
              <th style="font-size: 13px;" rowspan="2" class="header v-align">Total</th>
            </tr>
            <tr>
              <th style="font-size: 13px;" class="header">Etapa 1</th>
              <th style="font-size: 13px;" class="header">Etapa 2</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                  <h6 class="center h6">
                    <strong>PNP</strong>
                  </h6>
                @if (isset($request['PNPTotal']) || $request['PNPTotal'] == 0)
                  <div class=" adjust center green color_bl">{{ round($request['PNPTotal'],1) }}</div>
                @endif
              </td>
              <td>
                <div class="signo center" style="font-size: 25px; font-weight: 700">+</div>
              </td>
              <td>
                  <h6 class="center h6">
                    <strong>Módulo VF</strong>
                  </h6>
                @if (isset($request['MVFTotal']) || $request['MVFTotal'] == 0)
                  <div class=" adjust center pink color_bl">{{ round($request['MVFTotal'],1) }}</div>
                @endif
              </td>
              <td>
                <div class="signo center" style="font-size: 25px; font-weight: 700">=</div>
              </td>
              <td>
                  <h6 class="center h6">
                    <strong class="strong">Duración</strong>
                  </h6>
                @if (isset($request['DRTotal']) || $request['DRTotal'] == 0)
                  <div class=" adjust center blue color_bl">{{ round($request['PNPTotal'],1)+round($request['MVFTotal'],1) }}</div>
                @endif
              </td>
              <td>
                  <h6 class="center h6">
                    <strong class="strong">Remisión</strong>
                  </h6>
                @if (isset($request['REMTotal']) || $request['REMTotal'] == 0)
                  <div class=" adjust center pj color_bl">{{ round($request['REMTotal'],1) }}</div>
                @endif
              </td>
              <td>
                  <h6 class="center h6">
                    <strong class="strong">M. Público</strong>
                  </h6>
                @if (isset($request['FASEIItotal']) || $request['FASEIItotal'] == 0)
                  <div class=" adjust center orange color_bl">{{ round($request['FASEIItotal'],1) }}</div>
                @endif
              </td>
              <td>
                  <h6 class="center h6">
                    <strong class="strong">JIP</strong>
                  </h6>
                @if (isset($request['FASE31total']) || $request['FASE31total'] == 0)
                  <div class=" adjust center pj color_bl">{{ round($request['FASE31total'],1) }}</div>
                @endif
              </td>
              <td>
                  <h6 class="center h6">
                    <strong class="strong">Juzgamiento</strong>
                  </h6>
                @if (isset($request['FASE32total']) || $request['FASE32total'] == 0)
                  <div class=" adjust center pj color_bl">  {{ round($request['FASE32total'],1) }}</div>
                @endif
              </td>
              <td>
                <h6 class="center h6">
                    <strong>Suma</strong>
                </h6>
                <div class=" adjust center suma color_bl">{{ round($request['PNPTotal'],1)+round($request['MVFTotal'],1)+round($request['REMTotal'],1)+round($request['FASEIItotal'],1)+round($request['FASE31total'],1)+round($request['FASE32total'],1) }}</div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <br>
      <h3 class="tape" style="margin-bottom:0">Carga laboral</h3>
      <div class="table-responsive">
        <table class="table table-cell" style="width: 100%; font-size: 12px;">
          <thead>
            <tr>
              <th style="font-size: 13px;" colspan="2" class="header v-align">CEM</th>
              <th style="font-size: 13px;" colspan="2" class="header v-align">FASE I</th>
              <th style="font-size: 13px;" rowspan="2" class="header v-align">FASE II</th>
              <th style="font-size: 13px;" colspan="2" class="header">FASE III</th>
            </tr>
            <tr>
              <th style="font-size: 13px;" class="header">Atención Psicológica</th>
              <th style="font-size: 13px;" class="header">Atención legal</th>
              <th style="font-size: 13px;" class="header">Denuncia Policial</th>
              <th style="font-size: 13px;" class="header">M. Familia</th>
              <th style="font-size: 13px;" class="header">Etapa 1</th>
              <th style="font-size: 13px;" class="header">Etapa 2</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                @if (isset($request['ApTotal']) || $request['ApTotal'] == 0)
                  <div class="circle adjust add center red color_bl">{{ $request['ApTotal'] }}</div>
                @endif
              </td>
              <td>
                @if (isset($request['AlTotal']) || $request['AlTotal'] == 0)
                  <div class="circle adjust add center red color_bl">{{  $request['AlTotal'] }}</div>
                @endif
              </td>
              <td>
                @if (isset($request['DPTotal']) || $request['DPTotal'] == 0)
                  <div class="circle adjust add center green color_bl">{{  $request['DPTotal'] }}</div>
                @endif
              </td>
              <td>
                @if (isset($request['AJTotal']) || $request['AJTotal'] == 0)
                  <div class="circle adjust add center pink color_bl">{{  $request['AJTotal'] }}</div>
                @endif
              </td>
              <td>
                @if (isset($request['F2Total']) || $request['F2Total'] == 0)
                  <div class="circle adjust add center orange color_bl">{{ $request['F2Total'] }}</div>
                @endif
              </td>
              <td>
                @if (isset($request['F31Total']) || $request['F31Total'] == 0)
                  <div class="circle adjust add center pj color_bl">{{ $request['F31Total'] }}</div>
                @endif
              </td>
              <td>
                @if (isset($request['F32Total']) || $request['F32Total'] == 0)
                  <div class="circle adjust add center pj color_bl">{{ $request['F32Total'] }}</div>
                @endif
              </td>
            </tr>
          </tbody>
        </table>
      </div>



      {{-- <br>
      <div class="div-table" style="margin-bottom: 20px;">
        <div class="div-cell cell-2 nplr">
          <div class="box ">
            <center><h4 class="headBox min ">ATENCION PSICOLOGICA</h4></center>
            <div class="boxBody "><div class="cadjust red color_bl">{{ $request['ApTotal'] }}</div></div>
          </div>
        </div>
        <div class="div-cell cell-2 nplr">
          <div class="box  ">
            <center><h4 class="headBox min  blank">ASISTENCIA LEGAL</h4></center>
            <div class="boxBody "><div class="cadjust red color_bl">{{ $request['AlTotal'] }}</div></div>
          </div>
        </div>
        <div class="div-cell cell-2 nplr">
          <div class="box ">
            <center><h4 class="headBox min ">DENUNCIA POLICIAL</h4></center>
            <div class="boxBody "><div class="cadjust green color_bl">{{ $request['DPTotal'] }}</div></div>
          </div>
        </div>
        <div class="div-cell cell-2 nplr">
          <div class="box  ">
            <center><h4 class="headBox min  blank">CALIFICACION</h4></center>
            <div class="bodyGraph" ><img class="img2" src="{{ $splitImg[0] }}" height="auto" width="100%" style="margin-top: 5px"></div>
          </div>
        </div>
        <div class="div-cell cell-2 nplr">
          <div class="box ">
            <center><h4 class="headBox min ">AUDIENCIAS JUDICIALES</h4></center>
            <div class="boxBody "><div class="cadjust pink color_bl">{{ $request['AJTotal'] }}</div></div>
          </div>
        </div>
        <div class="div-cell cell-2 nplr">
          <div class="box  ">
            <center><h4 class="headBox min  blank">V-A REINCIDENTES</h4></center>
            <div class="bodyGraph" ><img class="img2" src="{{ $splitImg[1] }}" height="auto" width="100%" style="margin-top: 5px"></div>
          </div>
        </div>
      </div>

      <div class="both"></div>

      <hr style="margin:0px">
      <hr style="margin-bottom:0px; border-width: 2px">
      <hr style="margin-bottom:20px">
      
      <div class="div-table" >
        <div class="div-cell cell-2 nplr">
          <div class="box ">
            <center><h4 class="headBox min ">PNP</h4></center>
            <div class=" center"><div class="cadjust green color_bl">{{ $request['PNPTotal'] }}</div></div>
          </div>
        </div>
        <div style="margin-left: 155px; font-weight: bold; font-size: 50px; float: left; position: absolute; top: 565px;">+</div>
        <div class="div-cell cell-2 nplr">
          <div class="box  ">
            <center><h4 class="headBox min  blank">MODULO VF</h4></center>
            <div class=" center"><div class="cadjust pink color_bl">{{ $request['MVFTotal'] }}</div></div>
          </div>
        </div>
        <div style="margin-left: 325px; font-weight: bold; font-size: 50px; float: left; position: absolute; top: 565px;">=</div>
        <div class="div-cell cell-2 nplr">
          <div class="box ">
            <center><h4 class="headBox min ">DURACION</h4></center>
            <div class=" center"><div class="cadjust blue color_bl">{{ $request['DRTotal'] }}</div></div>
          </div>
        </div>
        <div class="div-cell cell-2 nplr"></div>
        <div class="div-cell cell-2 nplr"></div>
        <div class="div-cell cell-2 nplr">
          <div class="box  ">
            <center><h4 class="headBox min  blank">REMISION</h4></center>
            <div class=" center"><div class="cadjust blue color_bl">{{ $request['REMTotal'] }}</div></div>
          </div>
        </div>
      </div> --}}
    @endif

    @if ($request['graph'] == '4')
      <div class="div-table" style="margin-bottom: 20px;">
        <div class="div-cell cell-6 nplr" style="border: 1px solid #000">
          <center><h3 class="headGraph color_bk">INGRESO DE DENUNCIAS LEY Nº 30364</h3></center>
          <center><div><img style="margin-top: -15px" class="img3" src="{{ $splitImg[0] }}" height="350px" width="80%"></div></center>
        </div>
        <div class="div-cell cell-6 nplr" style="border: 1px solid #000">
          <center><h3 class="headGraph color_bk">TIEMPOS DE TRÁMITE DE DENUNCIAS LEY Nº 30364</h3></center>
          <center><div><img style="margin-top: -15px" class="img3" src="{{ $splitImg[1] }}" height="350px" width="80%"></div></center>
        </div>
      </div>

      <div class="both"></div>

      <hr style="margin:0px">
      <hr style="margin-bottom:0px; border-width: 2px">
      <hr style="margin-bottom:20px">

      <h4 style="margin: 10px 0px 20px 0px; text-align: center;">CARGA PROCESAL DE LAS DENUNCIAS DE VIOLENCIA FAMILIAR</h4>
      
      <div class="div-table">
        <div class="div-cell cell-4 nplr">
          <h4 class="center">Centro de Emergencia Mujer<br>CEM</h4>
          <div class="bcont">
            <div class="div-table">
              <div class="div-cell cell-6 nplr" style="height: 100px; ">
                <h2 class="center color_bl red" style="padding: 10px; margin: 0px 20px; ">{{ $request['PSCEMTotal'] }}</h2>
              </div>
              <div class="div-cell cell-6 nplr" style="height: 100px; ">
                <h2 class="center color_bl red" style="padding: 10px; margin: 0px 20px;">{{ $request['ALCEMTotal'] }}</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="div-cell cell-2 nplr">
          <h4 class="center">Policía Nacional del Peru<br>PNP</h4>
          <div class="bcont">
            <div class="div-table">
              <div class="div-cell cell-12 nplr" style="height: 100px; ">
                <h2 class="center color_bl green" style="padding: 10px; margin: 0px 20px;">{{ $request['PNPTotal'] }}</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="div-cell cell-2 nplr">
          <h4 class="center">Módulo Violencia Familiar<br>MVF</h4>
          <div class="bcont">
            <div class="div-table">
              <div class="div-cell cell-12 nplr" style="height: 100px; ">
                <h2 class="center color_bl pink" style="padding: 10px; margin: 0px 20px;">{{ $request['MVFTotal'] }}</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="div-cell cell-2 nplr">
          <h4 class="center">Ministerio Público<br>MP</h4>
          <div class="bcont">
            <div class="div-table">
              <div class="div-cell cell-12 nplr" style="height: 100px; ">
                <h2 class="center color_bl blue" style="padding: 10px; margin: 0px 20px;">{{ $request['MINTotal'] }}</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="div-cell cell-2 nplr">
          <h4 class="center">Módulo Penal<br>NCPP</h4>
          <div class="bcont">
            <div class="div-table">
              <div class="div-cell cell-12 nplr" style="height: 100px; ">
                <h2 class="center color_bl red" style="padding: 10px; margin: 0px 20px;">324</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endif


  </div>

</body>
</html>