<table class="table table-striped table-hover table-cell mdc-table">
  <thead>
    <tr>

      <th class="modHeader" width="10px"></th>
      <th class="modHeader" width="10px" title="Estado del Registro" style="padding-left: 5px !important;padding-right: 5px !important;"></th>

      <th class="modHeader" title="Fecha de Formalizacion" width="100px">
        <a class="btn-block" href="javascript:ajaxLoad('{{url('denuncia/jitinerante/index?field=fdenuncia&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">F. Denuncia <i style="margin-right: 2px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
        </a>
      </th>

      <th class="modHeader">
        <a class="btn-block" href="javascript:ajaxLoad('{{url('denuncia/jitinerante/index?field=codigo&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Codigo <i style="margin-right: 2px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
        </a>
      </th>

      <th class="modHeader" width="225px">
        <a class="btn-block" href="javascript:ajaxLoad('{{url('denuncia/jitinerante/index?field=tblcomisaria_id&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Comisaria <i style="margin-right: 2px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
        </a>
      </th>

      <th class="modHeader" title="Violencia">Violencia</th>

      <th class="modHeader">
        <a class="btn-block" href="javascript:ajaxLoad('{{url('denuncia/jitinerante/index?field=tbldenuncia_id&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Grado <i style="margin-right: 2px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
        </a>
      </th>

      <th class="modHeader" title="Fecha de Audiencia" width="105px">
        <a class="btn-block" href="javascript:ajaxLoad('{{url('denuncia/jitinerante/index?field=faudiencia&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">F. Audiencia <i style="margin-right: 2px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
        </a>
      </th>

      <th class="modHeader" title="Fecha de Audiencia">
        <a class="btn-block" href="javascript:ajaxLoad('{{url('denuncia/jitinerante/index?field=hora&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Hora A. <i style="margin-right: 2px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
        </a>
      </th>

      <th class="modHeader" title="Acciones" style="text-align: center;">ACCIONES</th>
      
    </tr>
  </thead>
  <tbody>
    @if ($denuncias->count() == 0)
      <tr>
        <td colspan="9" style="text-align: center;">No se encontraron resultados... </td>
      </tr>
    @else
      <?php $counter=1; ?>
      @foreach($denuncias as $denuncia)
        <tr>
          <td class="middle details-control" data-toggle="1" onclick="showDetalis(this)" style="padding-left: 15px; padding-right: 15px" data-label="Ver detalles"></td>
          <td class="middle" style="padding-left: 5px !important;padding-right: 5px !important;">
            @if ((isset($denuncia->victimas) && !empty($denuncia->victimas) && count($denuncia->victimas) > 0) && (isset($denuncia->agresores) && !empty($denuncia->agresores) && count($denuncia->agresores) > 0))
              <i style="margin-right: 2px; color: #00a65a; font-size: 15px;" title="" class="fa fa-check-circle"></i>
            @else 
              @if (count($denuncia->victimas) <= 0)
                <i style="margin-right: 2px; color: #dd4b39; font-size: 15px;" title="La denuncia no tiene victimas asignadas" class="fa fa-times-circle"></i>
              @else
                @if (count($denuncia->agresores) <= 0)
                  <i style="margin-right: 2px; color: #dd4b39; font-size: 15px;" title="La denuncia no tiene agresores asignados" class="fa fa-times-circle"></i>
                @endif
              @endif
            @endif
          </td>
          <td class="middle" data-label="Fecha Denuncia">{{ $denuncia->fdenuncia }}</td>
          <td class="middle" data-label="Codigo">{{ $denuncia->codigo }}</td>
          <td class="middle" data-label="Comisaria">{{ $denuncia->tblcomisaria->nombre }}</td>
          <td>
            @if (count($denuncia->tblviolencias))
              @foreach ($denuncia->tblviolencias as $tblviolencia)
                <span class="label label-primary">{{$tblviolencia->nombre}}</span>
              @endforeach
            @endif
          </td>
          <td class="middle" data-label="Grado de Violencia">{{ $denuncia->tbldenuncia->nombre }}</td>
          <td class="middle" data-label="Fecha Audiencia">{{ $denuncia->faudiencia }}</td>
          <td class="middle" data-label="Hora Audiencia">{{ $denuncia->hora }}</td>
          <td style="text-align: center; padding: 8px 4px;" data-label="Acciones">
            @can('denuncia.jiedit')
              <a href="{{ route('denuncia.jiedit', $denuncia->id) }}" class="btn btn-xs btn-outline-warning"><i class="glyphicon glyphicon-edit"></i></a>
            @endcan
            @can('denuncia.jidestroy')
              <input type="hidden" name="_method" value="delete"/>
              <a class="btn btn-xs btn-outline-danger" href="javascript:if(confirm('¿Está seguro que desea eliminar este registro?')) ajaxDelete('{{ route('denuncia.jidestroy', $denuncia->id) }}','{{csrf_token()}}')">
                  <i class="glyphicon glyphicon-trash"></i>
              </a>
            @endcan
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
                    @if (count($denuncia->victimas) <= 0)
                      <div style="padding: 10px;">No se encontraron resultados...</div>
                    @else
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
                                    <td class="width-20 fweight">Correo Electrónico:</td>
                                    <td class="width-30">
                                      @if (isset($victima->email) && !empty($victima->email))
                                        {{ $victima->email }}
                                      @else
                                        <small style="font-size:11px;" class="label bg-red">No Registra</small>
                                      @endif
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="width-20 fweight">Dirección:</td>
                                    <td class="width-30">
                                      @if (isset($victima->direccion) && !empty($victima->direccion))
                                        {{ $victima->direccion }}
                                      @else
                                        <small style="font-size:11px;" class="label bg-red">No Registra</small>
                                      @endif
                                    </td>
                                    <td class="width-20 fweight">Distrito:</td>
                                    <td class="width-30">{{ $victima->tbldistrito->nombre }}</td>
                                  </tr>
                                  <tr>
                                    <td class="width-20 fweight">Provincia:</td>
                                    <td class="width-30">{{ $victima->tblprovincia->nombre }}</td>
                                    <td class="width-20 fweight">Departamento:</td>
                                    <td class="width-30">{{ $victima->tbldepartamento->nombre }}</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        @endforeach
                      @endif
                    @endif  
                  </div>
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