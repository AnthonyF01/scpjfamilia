<table class="table table-striped table-hover table-cell table-lg mdc-table" style="font-size: 11px !important;">
  <thead>
    <tr>
      <th class="header" width="10px"></th>
      {{-- <th class="header" width="10px"></th> --}}
      <th class="header" width="10px"></th>
      <th class="header" width="10px"></th>
      <th class="header" width="10px"></th>
      <th class="header" colspan="9">FASE I: LEY 30364</th>
      {{-- <th class="header" colspan="2">FASE II</th> --}}
      <th class="header" colspan="3">FASE II</th>
      <th class="header" colspan="2">FASE III</th>
      <th class="header" rowspan="3">T</th>
      <th rowspan="3" style="text-align: center;">ACCION</th>
    </tr>
    <tr>
      <th class="header" width="10px"></th>
      {{-- <th class="header" width="10px"></th> --}}
      <th class="header" width="10px"></th>
      <th class="header" width="10px"></th>
      <th class="header" width="10px"></th>
      <th class="header" colspan="2">FORMALIZACION</th>
      <th class="header" colspan="2">EXPEDIENTE</th>
      <th class="header" colspan="2">AUDIENCIA</th>
      <th class="header" colspan="1"></th>
      <th class="header" colspan="2">REMISION</th>
      <th class="header" colspan="2">DENUNCIA</th>
      <th class="header" colspan="1"></th>
      <th class="header" colspan="2">JUZGADO</th>
    </tr>
    <tr>
      <th class="modHeader" width="10px"></th>
      {{-- <th class="modHeader" width="10px">#</th> --}}
      <th class="modHeader" width="10px" title="Archivo de Denuncia" style="text-align: center;">
        PNP
        {{-- <i style="margin-right: 2px" class="fa fa-file"></i> --}}
      </th>
      <th class="modHeader" width="10px" title="Informe CEM" style="text-align: center;">
        CEM
        {{-- <i style="margin-right: 2px" class="fa fa-file"></i> --}}
      </th>
      <th class="modHeader" width="10px" title="Informe Medicina Legal" style="text-align: center;">
        IML  
        {{-- <i style="margin-right: 2px" class="fa fa-file"></i> --}}
      </th>

      <th class="modHeader" title="Fecha de Formalizacion">
        <a class="btn-block" href="javascript:ajaxLoad('{{url('denuncia?field=fformalizacion&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">F. F. <i style="margin-right: 2px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
        </a>
      </th>

      <th class="modHeader" title="Días Formalizacion">
        <a class="btn-block" href="javascript:ajaxLoad('{{url('denuncia?field=dform&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">D.F. <i style="margin-right: 2px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
        </a>
      </th>

      <th class="modHeader">
        <a class="btn-block" href="javascript:ajaxLoad('{{url('denuncia?field=expediente&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">NRO. <i style="margin-right: 2px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
        </a>
      </th>

      <th class="modHeader">
        <a class="btn-block" href="javascript:ajaxLoad('{{url('tblinstancia?field=tblcomisaria_id&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">JUZ. <i style="margin-right: 2px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
        </a>
      </th>

      <th class="modHeader" title="Fecha de Audiencia">
        <a class="btn-block" href="javascript:ajaxLoad('{{url('denuncia?field=faudiencia&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">F. Aud. <i style="margin-right: 2px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
        </a>
      </th>

      <th class="modHeader" title="Días Audiencia">
        <a class="btn-block" href="javascript:ajaxLoad('{{url('denuncia?field=daud&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">D.A. <i style="margin-right: 2px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
        </a>
      </th>

      <th class="modHeader" title="Total 1">
        <a class="btn-block" href="javascript:ajaxLoad('{{url('denuncia?field=total1&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">T1 <i style="margin-right: 2px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
        </a>
      </th>

      <th class="modHeader">
        <a class="btn-block" href="javascript:ajaxLoad('{{url('denuncia?field=remitido&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Lugar <i style="margin-right: 2px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
        </a>
      </th>

      <th class="modHeader" title="Días Remisión">
        <a class="btn-block" href="javascript:ajaxLoad('{{url('denuncia?field=drem&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">D.R. <i style="margin-right: 2px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
        </a>
      </th>

      <th class="modHeader" title="Fecha Denuncia">
        <a class="btn-block" href="javascript:ajaxLoad('{{url('denuncia?field=fdenuncia&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">F. Den. <i style="margin-right: 2px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
        </a>
      </th>

      <th class="modHeader" title="Días Denuncia">
        <a class="btn-block" href="javascript:ajaxLoad('{{url('denuncia?field=dden&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">D.D. <i style="margin-right: 2px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
        </a>
      </th>

      <th class="modHeader" title="Total 2">
        <a class="btn-block" href="javascript:ajaxLoad('{{url('denuncia?field=total2&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">T2 <i style="margin-right: 2px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
        </a>
      </th>

      <th class="modHeader" title="Fecha Juzgado">
        <a class="btn-block" href="javascript:ajaxLoad('{{url('denuncia?field=fjuzgado&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">F. Juz. <i style="margin-right: 2px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
        </a>
      </th>

      <th class="modHeader" title="Días Juzgado">
        <a class="btn-block" href="javascript:ajaxLoad('{{url('denuncia?field=djuz&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">D.J. <i style="margin-right: 2px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
        </a>
      </th>
    </tr>
  </thead>
  <tbody>
    @if ($denuncias->count() == 0)
      <tr>
        <td colspan="17" style="text-align: center;">No se encontraron resultados... </td>
      </tr>
    @else
      <?php $counter=1; ?>
      @foreach($denuncias as $denuncia)
        <tr>
          <td class="middle details-control" data-toggle="1" onclick="showDetalis(this)" style="padding-left: 15px; padding-right: 15px" data-label="Ver detalles"></td>
          {{-- <td class="middle">{{ $counter++ + ( $denuncias->perPage() * ( $denuncias->currentPage() - 1 ) ) }}</td> --}}
          <td class="middle modContent" data-label="Subir archivo de registro policial">
            @can('denuncia.file')
              @if ($denuncia->registro)
                <button class="btn btn-xs btn-outline-success" onclick="showDocumentoPolicial('{{ url($denuncia->registro_file) }}',1,{{ $denuncia->id }},'Registro Policial')" title="Ver o Modificar Archivo de Registro Policial">
                  <i style="margin-right: 2px" class="fa fa-folder"></i>
                </button>
              @else
                <button class="btn btn-xs btn-outline-success" onclick="showDocumentoPolicial('',0,{{ $denuncia->id }},'Registro Policial')" title="Subir Archivo de Registro Policial">
                  <i style="margin-right: 2px" class="fa fa-upload"></i>
                </button>
              @endif
            @else
              {{-- <small class="label bg-red">SR</small> --}}
              @if (isset($denuncia->registro_file) && !empty($denuncia->registro_file))
                <a title="Descargar Archivo de Registro Policial" href="{{ $denuncia->registro_file }}" target="_blank" class="btn btn-xs btn-outline-success"><i class="fa fa-download"></i></a>
              @else
                <a href="javascript:void(0)" disabled class="btn btn-xs btn-outline-sucess" title="Ud. no tiene este permiso"><i class="fa fa-times"></i></a>
              @endif
            @endcan
          </td>

          <td class="middle modContent" data-label="Informe CEM">
            @can('denuncia.filecem')
              @if ($denuncia->cem)
                <button class="btn btn-xs btn-outline-danger" onclick="showDocumentoPolicial('{{ url($denuncia->cem_file) }}',1,{{ $denuncia->id }},'Informe CEM')" title="Ver o Modificar Informe CEM">
                  <i style="margin-right: 2px" class="fa fa-folder"></i>
                </button>
              @else
                <button class="btn btn-xs btn-outline-danger" onclick="showDocumentoPolicial('',0,{{ $denuncia->id }},'Informe CEM')" title="Subir Informe CEM">
                  <i style="margin-right: 2px" class="fa fa-upload"></i>
                </button>
              @endif
            @else
              {{-- <small class="label bg-red">SR</small> --}}
              @if (isset($denuncia->cem_file) && !empty($denuncia->cem_file))
                <a title="Descargar Informe CEM" href="{{ $denuncia->cem_file }}" target="_blank" class="btn btn-xs btn-outline-danger"><i class="fa fa-download"></i></a>
              @else
                <a href="javascript:void(0)" disabled class="btn btn-xs btn-outline-danger" title="Ud. no tiene este permiso"><i class="fa fa-times"></i></a>
              @endif
            @endcan
          </td>
          
          <td class="middle modContent" data-label="Informe Medicina Legal">
            @can('denuncia.fileml')
              @if ($denuncia->medicina)
                <button class="btn btn-xs btn-outline-primary" onclick="showDocumentoPolicial('{{ url($denuncia->registro_file) }}',1,{{ $denuncia->id }},'Informe de Medicina')" title="Ver o Modificar Informe de Medicina Legal">
                  <i style="margin-right: 2px" class="fa fa-folder"></i>
                </button>
              @else
                <button class="btn btn-xs btn-outline-primary" onclick="showDocumentoPolicial('',0,{{ $denuncia->id }},'Informe de Medicina')" title="Subir Informe de Medicina Legal">
                  <i style="margin-right: 2px" class="fa fa-upload"></i>
                </button>
              @endif
            @else
              {{-- <small class="label bg-red">SR</small> --}}
              @if (isset($denuncia->cem_file) && !empty($denuncia->cem_file))
                <a title="Descargar Informe de Medicina Legal" href="{{ $denuncia->cem_file }}" target="_blank" class="btn btn-xs btn-outline-primary"><i class="fa fa-download"></i></a>
              @else
                <a href="javascript:void(0)" disabled class="btn btn-xs btn-outline-primary"  title="Ud. no tiene este permiso"><i class="fa fa-times"></i></a>
              @endif
            @endcan
          </td>
          
          <td class="middle" data-label="Fecha de Formalización">{{ $denuncia->fformalizacion }}</td>

          {{-- <td class="middle" data-label="Dias de Formalización"><small class="label bg-green">{{ $denuncia->dform }}</small></td> --}}
          @if ($denuncia->dform >= 0)
            @if (isset($denuncia->fformalizacion) && !empty($denuncia->fformalizacion))
              <td class="middle" data-label="Dias de Formalización"><small class="label bg-green">{{ $denuncia->dform }}</small></td>
            @else
              <td class="middle" title="Fecha Formalización no está registrado" data-label="Dias de Formalización"><small class="label bg-red">{{ $denuncia->dform }}</small></td>
            @endif
          @else
            @if ($denuncia->dform == -1 && empty($denuncia->fdenuncia))
              <td class="middle" title="Fecha Denuncia no está registrado" data-label="Dias de Formalización"><small class="label bg-red">SFI</small></td>
            @else
              @if ($denuncia->dform <= -1 && !empty($denuncia->fdenuncia)))
                <td class="middle" title="Fecha Denuncia es mayor que Fecha Formalización" data-label="Dias de Formalización"><small class="label bg-red">{{ $denuncia->dform }}</small></td>
              @endif
            @endif
          @endif

          <td class="middle" data-label="Numero">{{ substr($denuncia->expediente,0,((strpos($denuncia->expediente, '-') + 5) - strlen($denuncia->expediente))) }}</td>
          <td class="middle" title="{{ $denuncia->tblinstancia ? $denuncia->tblinstancia->nombre : ''}}" data-label="Instancia">{{ $denuncia->tblinstancia ? $denuncia->tblinstancia->sigla : ''}}</td>
          <td class="middle" data-label="Fecha de Audiencia">{{ (isset($denuncia->faudiencia) && !empty($denuncia->faudiencia)) ? $denuncia->faudiencia : '-' }}</td>

          {{-- <td class="middle" data-label="Dias de audiencia">{{ $denuncia->daud }}</td> --}}
          @if ($denuncia->daud >= 0)
            @if (isset($denuncia->faudiencia) && !empty($denuncia->faudiencia))
              <td class="middle" data-label="Dias de audiencia"><small class="label bg-green">{{ $denuncia->daud }}</small></td>
            @else
              <td class="middle" title="Fecha Audiencia no está registrado" data-label="Dias de audiencia"><small class="label bg-red">{{ $denuncia->daud }}</small></td>
            @endif
          @else
            @if ($denuncia->daud == -1 && empty($denuncia->fformalizacion))
              <td class="middle" title="Fecha Formalización no está registrado" data-label="Dias de audiencia"><small class="label bg-red">SFI</small></td>
            @else
              @if ($denuncia->daud <= -1 && !empty($denuncia->fformalizacion)))
                <td class="middle" title="Fecha Formalización es mayor que Fecha Audiencia" data-label="Dias de audiencia"><small class="label bg-red">{{ $denuncia->daud }}</small></td>
              @endif
            @endif
          @endif

          <td class="middle" data-label="Total 1">{{ $denuncia->total1 }}</td>

          <td class="middle" data-label="Lugar">{{ (isset($denuncia->remitido) && !empty($denuncia->remitido)) ? $denuncia->remitido : '-' }}</td>

          {{-- <td class="middle" data-label="Dias de remision">{{ $denuncia->drem }}</td> --}}
          @if ($denuncia->drem >= 0)
            @if (isset($denuncia->fremision) && !empty($denuncia->fremision))
              <td class="middle" data-label="Dias de remision"><small class="label bg-green">{{ $denuncia->drem }}</small></td>
            @else
              <td class="middle" title="Fecha Remisión no está registrado" data-label="Dias de remision"><small class="label bg-red">{{ $denuncia->drem }}</small></td>
            @endif
          @else
            @if ($denuncia->drem == -1 && empty($denuncia->faudiencia))
              <td class="middle" title="Fecha Audiencia no está registrado"><small class="label bg-red" data-label="Dias de remision">SFI</small></td>
            @else
              @if ($denuncia->drem <= -1 && !empty($denuncia->faudiencia)))
                <td class="middle" title="Fecha Audiencia es mayor que Fecha Remisión" data-label="Dias de remision"><small class="label bg-red">{{ $denuncia->drem }}</small></td>
              @endif
            @endif
          @endif

          <td class="middle" data-label="Fecha de denuncia">{{ (isset($denuncia->fremisiond) && !empty($denuncia->fremisiond)) ? $denuncia->fremisiond : '-' }}</td>

          {{-- <td class="middle" data-label="Dias de denuncia">{{ $denuncia->dden }}</td> --}}
          @if ($denuncia->dden >= 0)
            @if (isset($denuncia->fremisiond) && !empty($denuncia->fremisiond))
              <td class="middle" data-label="Dias de denuncia"><small class="label bg-green">{{ $denuncia->dden }}</small></td>
            @else
              <td class="middle" title="Fecha Remisión Denuncia no está registrado" data-label="Dias de denuncia"><small class="label bg-red">{{ $denuncia->dden }}</small></td>
            @endif
          @else
            @if ($denuncia->dden == -1 && empty($denuncia->fremision))
              <td class="middle" title="Fecha Remisión no está registrado" data-label="Dias de denuncia"><small class="label bg-red">SFI</small></td>
            @else
              @if ($denuncia->dden <= -1 && !empty($denuncia->fremision)))
                <td class="middle" title="Fecha Remisión es mayor que Fecha Remisión Denuncia" data-label="Dias de denuncia"><small class="label bg-red">{{ $denuncia->dden }}</small></td>
              @endif
            @endif
          @endif

          <td class="middle" data-label="Total 2">{{ $denuncia->total2 }}</td>

          <td class="middle" data-label="Fecha Juzgado">{{ (isset($denuncia->fremisionj) && !empty($denuncia->fremisionj)) ? $denuncia->fremisionj : '-' }}</td>

          {{-- <td class="middle" data-label="Dias Juzgado">{{ $denuncia->djuz }}</td> --}}
          @if ($denuncia->djuz >= 0)
            @if (isset($denuncia->fremisionj) && !empty($denuncia->fremisionj))
              <td class="middle" data-label="Dias Juzgado"><small class="label bg-green">{{ $denuncia->djuz }}</small></td>
            @else
              <td class="middle" title="Fecha Remisión Juzgado no está registrado" data-label="Dias Juzgado"><small class="label bg-red">{{ $denuncia->djuz }}</small></td>
            @endif
          @else
            @if ($denuncia->djuz == -1 && empty($denuncia->fremisiond))
              <td class="middle" title="Fecha Remisión Denuncia no está registrado" data-label="Dias Juzgado"><small class="label bg-red">SFI</small></td>
            @else
              @if ($denuncia->djuz <= -1 && !empty($denuncia->fremisiond)))
                <td class="middle" title="Fecha Remisión Denuncia es mayor que Fecha Remisión Juzgado" data-label="Dias Juzgado"><small class="label bg-red">{{ $denuncia->djuz }}</small></td>
              @endif
            @endif
          @endif

          <td class="middle" data-label="Total">{{ $denuncia->total }}</td>
          <td style="text-align: center; padding: 8px 4px;" data-label="Acciones">
            @if (isset($denuncia->medida_file) && !empty($denuncia->medida_file))
              <a title="Descargar Medida de Protección" href="{{ $denuncia->medida_file }}" target="_blank" class="btn btn-xs btn-outline-primary"><i class="fa fa-download"></i></a>
            @else
              <a href="javascript:void(0)" disabled class="btn btn-xs btn-outline-primary"><i class="fa fa-file-o"></i></a>
            @endif
            @can('denuncia.ejecucion')
              @if (auth()->user()->id!=1)
                <a {{ (isset($denuncia->medida_file) && !empty($denuncia->medida_file)) ? '' : 'disabled' }} title="{{ (isset($denuncia->medida_file) && !empty($denuncia->medida_file)) ? ( (isset($denuncia->oficioejecucion) && !empty($denuncia->oficioejecucion) && isset($denuncia->foficioejecucion) && !empty($denuncia->foficioejecucion) && isset($denuncia->oficioejecucion_file) && !empty($denuncia->oficioejecucion_file)) ? 'Ejecucion informada' : 'Informar Ejecucion' ) : '' }}" href="{{ (isset($denuncia->medida_file) && !empty($denuncia->medida_file)) ? route('denuncia.ejecucion', $denuncia->id) : 'javascript:void(0)' }}" class="btn btn-xs {{ (isset($denuncia->medida_file) && !empty($denuncia->medida_file)) ? ( (isset($denuncia->oficioejecucion) && !empty($denuncia->oficioejecucion) && isset($denuncia->foficioejecucion) && !empty($denuncia->foficioejecucion) && isset($denuncia->oficioejecucion_file) && !empty($denuncia->oficioejecucion_file)) ? 'btn-success' : 'btn-warning' ) : 'btn-outline-secondary' }}">
                    <i class="fa fa-check"></i>
                </a>
              @endif
            @endcan
            @can('denuncia.edit')
              <a href="{{ route('denuncia.edit', $denuncia->id) }}" class="btn btn-xs btn-outline-warning"><i class="glyphicon glyphicon-edit"></i></a>
            @endcan
            @can('denuncia.destroy')
              <input type="hidden" name="_method" value="delete"/>
              <a class="btn btn-xs btn-outline-danger" href="javascript:if(confirm('¿Está seguro que desea eliminar este registro?')) ajaxDelete('{{ route('denuncia.destroy', $denuncia->id) }}','{{csrf_token()}}')">
                  <i class="glyphicon glyphicon-trash"></i>
              </a>
            @endcan
            <a title='{{ (isset($denuncia->device) && !empty($denuncia->device)) ? "Aplicación instalada" : "Aplicación no instalada" }}' href="javascript:void(0)" class="btn btn-xs {{ (isset($denuncia->device) && !empty($denuncia->device)) ? ( ($denuncia->device == 0)? 'btn-secondary' : ( ($denuncia->device == 1) ? 'btn-success' : ( ($denuncia->device == 2) ? 'btn-danger' : ( ($denuncia->device == 3) ? 'btn-warning' : '' ) ) ) ) : 'btn-secondary' }}" {{ (isset($denuncia->device) && !empty($denuncia->device)) ? ( ($denuncia->device == 0)? 'disabled' : '' ) : 'disabled' }}>
              <i class="glyphicon glyphicon-phone"></i>
            </a>
          </td>
        </tr>
        <tr class="details" style="display: none;">
          <td colspan="20" style="padding:20px;">
            <div class="col-lg-12 col-md-12 col-ms-12 col-xs-12">
              <div class="row">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <span style="font-size: 14px">
                      <strong>Información Personal de la(s) Victima(s)</strong>
                    </span>
                  </div>
                  <div class="panel-body">
                    @if (count($denuncia->victimas))
                      @foreach ($denuncia->victimas as $victima)
                        <div class="panel panel-info">
                          <div class="panel-body">
                            <table class="table" style="text-align: left; margin: 0px;">
                              <tbody>
                                <tr>
                                  <td class="width-20 fweight">Nombres:</td>
                                  <td class="width-30">{{ $victima->nombre }} {{ $victima->apellido }}</td>
                                  <td class="width-20 fweight">{{ $victima->tbldocumento->sigla }}:</td>
                                  <td class="width-30">{{ $victima->nro_doc }}</td>
                                </tr>
                                <tr>
                                  <td class="width-20 fweight">Edad:</td>
                                  <td class="width-30">{{ $victima->edad }}</td>
                                  <td class="width-20 fweight">N° de Hijos:</td>
                                  <td class="width-30">{{ $victima->hijos }}</td>
                                </tr>
                                <tr>
                                  <td class="width-20 fweight">Teléfono:</td>
                                  <td class="width-30">
                                    @if (isset($victima->telefono) && !empty($victima->telefono))
                                      {{ $victima->telefono }}
                                    @else
                                      <small style="font-size:11px;" class="label bg-red">No Registra</small>
                                    @endif
                                  </td>
                                  <td class="width-20 fweight">Dirección:</td>
                                  <td class="width-30">
                                    @if (isset($victima->direccion) && !empty($victima->direccion))
                                      {{ $victima->direccion }}
                                    @else
                                      <small style="font-size:11px;" class="label bg-red">No Registra</small>
                                    @endif
                                  </td>
                                </tr>
                                <tr>
                                  <td class="width-20 fweight">Departamento:</td>
                                  <td class="width-30">{{ $victima->tbldepartamento->nombre }}</td>
                                  <td class="width-20 fweight">Provincia:</td>
                                  <td class="width-30">{{ $victima->tblprovincia->nombre }}</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      @endforeach
                    @endif
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <span style="font-size: 14px">
                      <strong>Información Detallada</strong>
                    </span>
                  </div>
                  <div class="panel-body">
                    <table class="table" style="text-align: left; margin: 0px;">
                      <tbody>
                        <tr>
                          <td class="width-20 fweight">Oficio:</td>
                          <td class="width-30">
                            @if (isset($denuncia->registro_file) && !empty($denuncia->registro_file))
                              <a href="{{ url($denuncia->registro_file) }}" target="_blank" class="btn btn-xs btn-default">
                                <i class="fa fa-eye"></i>
                                {{ $denuncia->oficio }}
                              </a>
                            @else
                              <small style="font-size:11px;" class="label bg-blue">{{ $denuncia->oficio }}</small>
                            @endif
                          </td>
                          <td class="width-20 fweight">Institución:</td>
                          <td class="width-30">{{ $denuncia->tblcomisaria ? $denuncia->tblcomisaria->nombre : ''}}</td>
                        </tr>
                        <tr>
                          <td class="width-20 fweight">Fecha de Denuncia:</td>
                          <td class="width-30">{{ $denuncia->fdenuncia }}</td>
                          <td class="width-20 fweight">Fecha de Formalizacion:</td>
                          <td class="width-30">{{ $denuncia->fformalizacion }}</td>
                        </tr>
                        <tr>
                          <td class="width-20 fweight">Expediente:</td>
                          <td class="width-30">{{ $denuncia->expediente }}</td>
                          <td class="width-20 fweight">Juzgado:</td>
                          <td class="width-30">{{ $denuncia->tblinstancia ? $denuncia->tblinstancia->nombre : '' }}</td>
                        </tr>
                        <tr>
                          <td class="width-20 fweight">Fecha de Audiencia:</td>
                          <td class="width-30">
                            @if (isset($denuncia->faudiencia) && !empty($denuncia->faudiencia))
                              {{ $denuncia->faudiencia }}
                            @else
                              <small style="font-size:11px;" class="label bg-red">No Registra</small>
                            @endif
                          </td>
                          <td class="width-20 fweight">Medida de Protección:</td>
                          <td class="width-30">
                            @if (isset($denuncia->medida_file) && !empty($denuncia->medida_file))
                              <a href="{{ $denuncia->medida_file }}" target="_blank" class="btn btn-xs btn-default">
                                <i class="fa fa-eye"></i>
                                @if (isset($denuncia->tblmedida_id) && !empty($denuncia->tblmedida_id))
                                  <span title="{{ $denuncia->tblmedida->medida }}">
                                    {{ substr($denuncia->tblmedida->medida, 0,50) }}
                                  </span>
                                @else
                                  Ver archivo
                                @endif
                              </a>
                            @else
                              @if (isset($denuncia->tblmedida_id) && !empty($denuncia->tblmedida_id))
                                <span title="{{ $denuncia->tblmedida->medida }}">
                                  {{ substr($denuncia->tblmedida->medida, 0,50) }}
                                </span>
                              @else
                                <small style="font-size:11px;" class="label bg-blue">Sin archivo</small>
                              @endif
                            @endif
                          </td>
                        </tr>
                        <tr class="selected">
                          <td class="width-20 fweight">Remitido (Fase I):</td>
                          <td class="width-30">
                            @if (isset($denuncia->remitido) && !empty($denuncia->remitido))
                              {{ $denuncia->remitido }}
                            @else
                              <small style="font-size:11px;" class="label bg-red">No Registra</small>
                            @endif
                          </td>
                          <td class="width-20 fweight">Fecha Remisión (Fase I):</td>
                          <td class="width-30">
                            @if (isset($denuncia->fremision) && !empty($denuncia->fremision))
                              {{ $denuncia->fremision }}
                            @else
                              <small style="font-size:11px;" class="label bg-red">No Registra</small>
                            @endif
                          </td>
                        </tr>
                        <tr class="selected">
                          <td class="width-20 fweight" title="Fase II-MP">Remitido (Fase II):</td>
                          <td class="width-30">
                            @if (isset($denuncia->remitidod) && !empty($denuncia->remitidod))
                              {{ $denuncia->remitidod }}
                            @else
                              <small style="font-size:11px;" class="label bg-red">No Registra</small>
                            @endif
                          </td>
                          <td class="width-20 fweight" title="Fase II-MP">Fecha Remisión (Fase II):</td>
                          <td class="width-30">
                            @if (isset($denuncia->fremisiond) && !empty($denuncia->fremisiond))
                              {{ $denuncia->fremisiond }}
                            @else
                              <small style="font-size:11px;" class="label bg-red">No Registra</small>
                            @endif
                          </td>
                        </tr>
                        <tr class="selected">
                          <td class="width-20 fweight" title="Fase III-NCPP">Sentencia (Fase III):</td>
                          <td class="width-30">
                            @if (isset($denuncia->sentencia) && !empty($denuncia->sentencia))
                              {{ $denuncia->sentencia }}
                            @else
                              <small style="font-size:11px;" class="label bg-red">No Registra</small>
                            @endif
                          </td>
                          <td class="width-20 fweight" title="Fase III-NCPP">Fecha Sentencia (Fase III):</td>
                          <td class="width-30">
                            @if (isset($denuncia->fremisionj) && !empty($denuncia->fremisionj))
                              {{ $denuncia->fremisionj }}
                            @else
                              <small style="font-size:11px;" class="label bg-red">No Registra</small>
                            @endif
                          </td>
                        </tr>
                        <tr>
                          <td colspan="4">
                            <p class="fweight">Observaciones:</p>
                            @if (isset($denuncia->observacion) && !empty($denuncia->observacion))
                              {{ $denuncia->observacion }}
                            @else
                              <small style="font-size:11px;" class="label bg-red">No Registra</small>
                            @endif
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
              </div>
            </div>
          </td>
        </tr>
      @endforeach
    @endif
  </tbody>
</table>
<div class="row">
  <div class="col-md-6">
    @if ($denuncias->total() == 0)
      Mostrando registros del 0 al 0 de un total de 0
    @else
      Mostrando registros del
      @if ($denuncias->currentPage() == $denuncias->lastPage())
        {{ ( $denuncias->currentPage() - 1 ) * $denuncias->perPage() + 1 }} al {{ $denuncias->total() }}
      @else
        {{ $denuncias->currentPage()*$denuncias->count() - ( $denuncias->count() - 1 ) }} al {{ $denuncias->currentPage()*$denuncias->count() }}
      @endif
      de un total de {{ $denuncias->total() }}</div>
    @endif
  <div class="col-md-6"><div class="pull-right">{{ $denuncias->links() }}</div></div>
</div>
