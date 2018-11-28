<!DOCTYPE html>
<html>
<head>
  <style type="text/css">

    body {
      font-size: 12px;
      /*font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;*/
      font-family: serif;
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
    .cell-2{
      width:  16.67%;
    }
    .cell-3{
      width: 25%;
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
    .both{
      clear: both;
    }

    /* ---others styles--- */

  </style>

  <style>
    @page { margin-top: 100px; margin-bottom: 50px; margin-left: 50px; margin-right: 50px;}
    #header { position: fixed; left: 0px; top: -90px; right: 0px; height: 80px; text-align: center; }
    #footer { position: fixed; left: 0px; bottom: -50px; right: 0px; height: 50px; }
    #footer .page:after { content: counter(page); }
  </style>
  
</head>
<body>

  <div id="header">
    <table class="encabezado" width='100%' style='border-bottom: 2px solid; margin-top: 0px; margin-bottom: 10px;' id='encabezado' border='0'>
      <tr class='fila'>
        <td id='col_1' >
          <p class="line">
            Poder Judicial del Perú - {{ucfirst(strtolower(Auth::user()->tblmodulo->nombre))}}<br>
            Calle Inclán Esq. Presbítero Andía s/n, Cercado, Tacna<br>
            Central Telefónica: 052-583200<br>
          </p>
        </td>
        <td id='col_2' align='right'>
          <span class='span1'><b>Reporte Ley Nº 30364</b></span>
          <br>
          <span class='span2'>Sistema de Monitoreo Judicial</span>
        </td>
      </tr>
    </table>
  </div>
  <div id="footer">
    <table width="100%" style="border-top: 2px solid; vertical-align: bottom; font-family: serif; font-size: 10pt; color: #000000; font-weight: bold; font-style: italic;">
      <tr>
        <td width="33%"><span style="font-weight: bold; font-style: italic;"><?php echo date("d/m/Y"); ?></span></td>
        <td width="33%" align="center" style="font-weight: bold; font-style: italic;"><span class="page"></td>
        <td width="33%" style="text-align: right; ">Reporte Ley Nº 30364</td>
      </tr>
    </table>
  </div>

  <div id="content">
    
    <div style="page-break-after: avoid; text-align: center; margin-top: 20px;">
      <img src="{{base_path()}}\public\img\pjlogo.png" height="50px" width="50px" style="display: flex;">
      <h3>MODULO DE VIOLENCIA FAMILIAR - {{Auth::user()->tblmodulo->nombre}}</h3>
    </div>

    <div class="both"></div>

    <div class="div-table">
      <div class="div-cell cell-7" style="">
        <div class="div-table">
          <div class="div-cell cell-3" style="">
            <p style="font-weight: bold; margin: 0px;">JUZGADO<span style="float: right;">:</span></p>
            <p style="font-weight: bold; margin: 0px;">COMISARIA<span style="float: right;">:</span></p>
            <p style="font-weight: bold; margin: 0px;">EXPEDIENTE<span style="float: right;">:</span></p>
            <p style="font-weight: bold; margin: 0px;">PENDIENTE<span style="float: right;">:</span></p>
          </div>
          <div class="div-cell cell-9" style="">
            <p style="margin: 0px;">{{ ($filters['instancia']!='')?$filters['instancia']:'No seleccionado' }}</p>
            <p style="margin: 0px;">{{ ($filters['comisaria']!='')?$filters['comisaria']:'No seleccionado' }}</p>
            <p style="margin: 0px;">{{ ($filters['search']!='')?$filters['search']:'No ingresado' }}</p>
            <p style="margin: 0px;">{{ ($filters['formalizacion']!='0')?'Formalizacion,':'' }} {{ ($filters['audiencia']!='0')?'Audiencia, ':'' }} {{ ($filters['remision']!='0')?'Remision, ':'' }} {{ ($filters['denuncia']!='0')?'Denuncia, ':'' }} {{ ($filters['juzgado']!='0')?'Juzgado':'' }} {{ ($filters['formalizacion']=='0' && $filters['audiencia']=='0' && $filters['remision']=='0' && $filters['denuncia']=='0' && $filters['juzgado']=='0')?'Ninguno':'' }}</p>
          </div>
        </div>
      </div>
      <div class="div-cell cell-5" style=" ">
        <div class="div-table">
          <div class="div-cell cell-5" style="">
            <p style="font-weight: bold; margin: 0px;">AÑO<span style="float: right;">:</span></p>
            <p style="font-weight: bold; margin: 0px;">MES<span style="float: right;">:</span></p>
            <p style="font-weight: bold; margin: 0px;">PERIODO<span style="float: right;">:</span></p>
            <p style="font-weight: bold; margin: 0px;">REINCIDENTE<span style="float: right;">:</span></p>
          </div>
          <div class="div-cell cell-7" style="">
            <p style="margin: 0px;">{{ ($filters['anio']!='0')?$filters['anio']:'No seleccionado' }}</p>
            <p style="margin: 0px;">{{ ($filters['mes']!='0')?$filters['mes']:'No seleccionado' }}</p>
            <p style="margin: 0px;">{{ ($filters['fecha1']!='' && $filters['fecha2']!='')?$filters['fecha1']." - ".$filters['fecha2']:'No proveido' }}</p>
            <p style="margin: 0px;">{{ ($filters['victima']!='0')?'Victima,':'' }} {{ ($filters['agresor']!='0')?'Agresor':'' }} {{ ($filters['victima']=='0' && $filters['agresor']=='0')?'Ninguno':'' }}</p>
          </div>
        </div>
      </div>
    </div>
  
    <table class="table table-striped table-hover table-cell table-lg" style="width: 1010px; margin-right: 5px; margin-left: 5px; page-break-inside: auto; page-break-before: avoid;">
      <thead>
        <tr>
          <th class="header" width="10px"></th>
          <th class="header" colspan="6">FASE I: LEY 30364</th>
          <th class="header" colspan="2">FASE II</th>
          <th class="header" colspan="2">FASE III</th>
          <th class="header" colspan="2">FASE IV</th>
          <th class="header" rowspan="3" style="width: 30px">TOTAL</th>
        </tr>
        <tr>
          <th class="header" width="10px"></th>
          <th class="header" colspan="2">FORMALIZ.</th>
          <th class="header" colspan="2">EXPEDIENTE</th>
          <th class="header" colspan="2">AUDIENCIA</th>
          <th class="header" colspan="2">REMISION</th>
          <th class="header" colspan="2">DENUNCIA</th>
          <th class="header" colspan="2">JUZGADO</th>
        </tr>
        <tr>
          <th class="modHeader" width="10px">#</th>
          <th class="modHeader" style="width: 80px" title="Fecha de Formalizacion">F. Form.</th>
          <th class="modHeader" style="width: 20px" title="Días Formalizacion">D.F.</th>
          <th class="modHeader" style="width: 80px">Expediente</th>
          <th class="modHeader" style="width: 50px">Juzgado</th>
          <th class="modHeader" style="width: 80px" title="Fecha de Audiencia">F. Aud.</th>
          <th class="modHeader" style="width: 20px" title="Días Audiencia">D.A.</th>
          <th class="modHeader" style="width: 175px">Lugar</th>
          <th class="modHeader" style="width: 20px" title="Días Remisión">D.R.</th>
          <th class="modHeader" style="width: 80px" title="Fecha Denuncia">F. Den.</th>
          <th class="modHeader" style="width: 20px" title="Días Denuncia">D.D.</th>
          <th class="modHeader" style="width: 80px" title="Fecha Juzgado">F. Juz.</th>
          <th class="modHeader" style="width: 20px" title="Días Juzgado">D.J.</th>
        </tr>
      </thead>
      <tbody>
        @if ($denuncias->count() == 0)
          <tr>
            <td colspan="14" style="text-align: center;">No se encontraron resultados... </td>
          </tr>
        @else
          <?php $counter=1; ?>
          @foreach($denuncias as $denuncia)
            <tr>
              <td class="middle">{{ $counter++ }}</td>
              <td class="middle">{{ $denuncia->fformalizacion }}</td>

              @if ($denuncia->dform >= 0)
                @if (isset($denuncia->fformalizacion) && !empty($denuncia->fformalizacion))
                  <td class="middle"><small class="label bg-green">{{ $denuncia->dform }}</small></td>
                @else
                  <td class="middle" title="Fecha Formalización no está registrado"><small class="label bg-red">{{ $denuncia->dform }}</small></td>
                @endif
              @else
                @if ($denuncia->dform == -1 && empty($denuncia->fdenuncia))
                  <td class="middle" title="Fecha Denuncia no está registrado"><small class="label bg-red">SFI</small></td>
                @else
                  @if ($denuncia->dform <= -1 && !empty($denuncia->fdenuncia)))
                    <td class="middle" title="Fecha Denuncia es mayor que Fecha Formalización"><small class="label bg-red">{{ $denuncia->dform }}</small></td>
                  @endif
                @endif
              @endif

              <td class="middle">{{ $denuncia->expediente }}</td>
              <td class="middle" title="{{ $denuncia->tblinstancia->nombre }}">{{ $denuncia->tblinstancia->sigla }}</td>
              <td class="middle">{{ (isset($denuncia->faudiencia) && !empty($denuncia->faudiencia)) ? $denuncia->faudiencia : '-' }}</td>

              @if ($denuncia->daud >= 0)
                @if (isset($denuncia->faudiencia) && !empty($denuncia->faudiencia))
                  <td class="middle"><small class="label bg-green">{{ $denuncia->daud }}</small></td>
                @else
                  <td class="middle" title="Fecha Audiencia no está registrado"><small class="label bg-red">{{ $denuncia->daud }}</small></td>
                @endif
              @else
                @if ($denuncia->daud == -1 && empty($denuncia->fformalizacion))
                  <td class="middle" title="Fecha Formalización no está registrado"><small class="label bg-red">SFI</small></td>
                @else
                  @if ($denuncia->daud <= -1 && !empty($denuncia->fformalizacion)))
                    <td class="middle" title="Fecha Formalización es mayor que Fecha Audiencia"><small class="label bg-red">{{ $denuncia->daud }}</small></td>
                  @endif
                @endif
              @endif

              <td class="middle">{{ (isset($denuncia->remitido) && !empty($denuncia->remitido)) ? $denuncia->remitido : '-' }}</td>

              @if ($denuncia->drem >= 0)
                @if (isset($denuncia->fremision) && !empty($denuncia->fremision))
                  <td class="middle"><small class="label bg-green">{{ $denuncia->drem }}</small></td>
                @else
                  <td class="middle" title="Fecha Remisión no está registrado"><small class="label bg-red">{{ $denuncia->drem }}</small></td>
                @endif
              @else
                @if ($denuncia->drem == -1 && empty($denuncia->faudiencia))
                  <td class="middle" title="Fecha Audiencia no está registrado"><small class="label bg-red">SFI</small></td>
                @else
                  @if ($denuncia->drem <= -1 && !empty($denuncia->faudiencia)))
                    <td class="middle" title="Fecha Audiencia es mayor que Fecha Remisión"><small class="label bg-red">{{ $denuncia->drem }}</small></td>
                  @endif
                @endif
              @endif

              <td class="middle">{{ (isset($denuncia->fremisiond) && !empty($denuncia->fremisiond)) ? $denuncia->fremisiond : '-' }}</td>

              @if ($denuncia->dden >= 0)
                @if (isset($denuncia->fremisiond) && !empty($denuncia->fremisiond))
                  <td class="middle"><small class="label bg-green">{{ $denuncia->dden }}</small></td>
                @else
                  <td class="middle" title="Fecha Remisión Denuncia no está registrado"><small class="label bg-red">{{ $denuncia->dden }}</small></td>
                @endif
              @else
                @if ($denuncia->dden == -1 && empty($denuncia->fremision))
                  <td class="middle" title="Fecha Remisión no está registrado"><small class="label bg-red">SFI</small></td>
                @else
                  @if ($denuncia->dden <= -1 && !empty($denuncia->fremision)))
                    <td class="middle" title="Fecha Remisión es mayor que Fecha Remisión Denuncia"><small class="label bg-red">{{ $denuncia->dden }}</small></td>
                  @endif
                @endif
              @endif

              <td class="middle">{{ (isset($denuncia->fremisionj) && !empty($denuncia->fremisionj)) ? $denuncia->fremisionj : '-' }}</td>

              @if ($denuncia->djuz >= 0)
                @if (isset($denuncia->fremisionj) && !empty($denuncia->fremisionj))
                  <td class="middle"><small class="label bg-green">{{ $denuncia->djuz }}</small></td>
                @else
                  <td class="middle" title="Fecha Remisión Juzgado no está registrado"><small class="label bg-red">{{ $denuncia->djuz }}</small></td>
                @endif
              @else
                @if ($denuncia->djuz == -1 && empty($denuncia->fremisiond))
                  <td class="middle" title="Fecha Remisión Denuncia no está registrado"><small class="label bg-red">SFI</small></td>
                @else
                  @if ($denuncia->djuz <= -1 && !empty($denuncia->fremisiond)))
                    <td class="middle" title="Fecha Remisión Denuncia es mayor que Fecha Remisión Juzgado"><small class="label bg-red">{{ $denuncia->djuz }}</small></td>
                  @endif
                @endif
              @endif

              <td class="middle">{{ $denuncia->total }}</td>
            </tr>
          @endforeach
        @endif
      </tbody>
    </table>
  
    <div class="both"></div>
    
  </div>

</body>
</html>

