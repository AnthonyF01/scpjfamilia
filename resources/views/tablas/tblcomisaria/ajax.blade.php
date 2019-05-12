<div class="box_plus box_plus-default ">
  <div id="box_plus-title" class="box_plus-heading">
    <div class="row">
      <div class="col-md-6"><i class="fa fa-list-ul"></i> Instituciones</div>
      <div class="col-md-6">
        @can('comisaria.create')
          <a href="javascript:ajaxLoad('{{ route('comisaria.create') }}')" class="btn btn-xs btn-outline-primary pull-right">
            <i class="fa fa-plus"></i> Agregar
          </a>
        @endcan
      </div>
    </div>
  </div>
  <div class="box_plus-body">
    <div class="row">
      <div class="col-md-6">
        <label style="margin: 0px; font-size: 12px">Mostrar
          <select name="showing" aria-controls="showing" class="input-sm" onchange="showRow(this);">
            <option value="10" {{ (request()->session()->get('show') == '10' ) ? 'selected' : '' }} >10</option>
            <option value="25" {{ (request()->session()->get('show') == '25' ) ? 'selected' : '' }} >25</option>
            <option value="50" {{ (request()->session()->get('show') == '50' ) ? 'selected' : '' }} >50</option>
            <option value="100" {{ (request()->session()->get('show') == '100' ) ? 'selected' : '' }} >100</option>
          </select> registros
        </label>
      </div>
      <div class="col-md-6">
        <div class="pull-right">
          <div class="input-group">
            <input class="form-control input-sm" autofocus="autofocus" id="search" value="{{ request()->session()->get('search') }}" onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('tblcomisaria')}}?search='+this.value)" placeholder="Buscar..." name="search" type="text"/>
            <div class="input-group-btn">
              <button type="submit" class="btn btn-sm btn-primary" onclick="ajaxLoad('{{url('tblcomisaria')}}?search='+$('input#search').val())">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div><br>
    <table class="table table-striped table-hover table-cell">
      <thead>
        <tr>
          <th width="10px">#</th>

          <th>
            <a class="btn-block" href="javascript:ajaxLoad('{{url('tblcomisaria?field=tblmodulo_id&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Modulo
              <i style="margin-right: 10px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
            </a>
          </th>

          <th>
            <a class="btn-block" href="javascript:ajaxLoad('{{url('tblcomisaria?field=tbldepartamento_id&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Departamento
               <i style="margin-right: 10px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
            </a>
          </th>

          <th>
            <a class="btn-block" href="javascript:ajaxLoad('{{url('tblcomisaria?field=nombre&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Nombre
               <i style="margin-right: 10px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
            </a>
          </th>

          <th>
            <a class="btn-block" href="javascript:ajaxLoad('{{url('tblcomisaria?field=sigla&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Sigla
               <i style="margin-right: 10px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
            </a>
          </th>

          <th>
            <a class="btn-block" href="javascript:ajaxLoad('{{url('tblcomisaria?field=tipo_int&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Tipo
               <i style="margin-right: 10px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
            </a>
          </th>

          <th colspan="3" style="text-align: center;">Accion</th>
        </tr>
      </thead>
      <tbody>

        @if ($tblcomisarias->total() == 0)
          <tr>
            <td colspan="7" style="text-align: center;">No se encontraron resultados... </td>
          </tr>
        @else
          <?php $counter=1; ?>
          @foreach($tblcomisarias as $tblcomisaria)
            <tr>
              <td class="middle">{{ $counter++ + ( $tblcomisarias->perPage() * ( $tblcomisarias->currentPage() - 1 ) ) }}</td>
              <td class="middle" {{ (isset($tblcomisaria->tblmodulo->nombre)&&!empty($tblcomisaria->tblmodulo->nombre))? '':'style=font-style:italic;' }} >{{ (isset($tblcomisaria->tblmodulo->nombre)&&!empty($tblcomisaria->tblmodulo->nombre))?$tblcomisaria->tblmodulo->nombre:'No registra' }}</td>
              <td class="middle">{{ $tblcomisaria->tbldepartamento->nombre }}</td>
              <td class="middle">{{ $tblcomisaria->nombre }}</td>
              <td class="middle">{{ $tblcomisaria->sigla ? $tblcomisaria->sigla : 'No registra' }}</td>
              <td class="middle">
                {!! $tblcomisaria->tipo_int==0?'<small class="label bg-green">Comisaría</small>':'<small class="label bg-primary">Fiscalía</small>' !!}
              </td>
              <td width="10px">
                @if (!empty($tblcomisaria->latitud)&&!empty($tblcomisaria->longitud))
                  <button class="btn btn-xs btn-outline-success" onclick="showMapSelect({{ $tblcomisaria->latitud }},{{ $tblcomisaria->longitud }},1,{{ $tblcomisaria->id }},{{ "'".$tblcomisaria->nombre."'" }})">
                    <i class="glyphicon glyphicon-map-marker"></i>
                  </button>
                @else
                  <button class="btn btn-xs btn-outline-primary" onclick="showMapSelect({{ auth()->user()->lat ? auth()->user()->lat : -18.0092832}},{{ auth()->user()->lat ? auth()->user()->lng : -70.2438729 }},0,{{ $tblcomisaria->id }},{{ "'".$tblcomisaria->nombre."'" }})" title="Registrar coordenadas de geolocalización">
                    <i class="glyphicon glyphicon-map-marker"></i>
                  </button>
                @endif
              </td>
              @can('comisaria.edit')
                <td width="10px">
                  <a href="javascript:ajaxLoad('{{ route('comisaria.edit', $tblcomisaria->id) }}')" class="btn btn-xs btn-outline-warning"><i class="glyphicon glyphicon-edit"></i></a>
                </td>
              @endcan
              @can('comisaria.destroy')
                <td width="10px">
                  <input type="hidden" name="_method" value="delete"/>
                  <a class="btn btn-xs btn-outline-danger" href="javascript:if(confirm('¿Está seguro que desea eliminar este registro?')) ajaxDelete('{{ route('comisaria.destroy', $tblcomisaria->id) }}','{{csrf_token()}}')">
                      <i class="glyphicon glyphicon-trash"></i>
                  </a>
                </td>
              @endcan
            </tr>
          @endforeach
        @endif
      </tbody>
    </table>

    <div class="row">
      <div class="col-md-6">
        @if ($tblcomisarias->total() == 0)
          Mostrando registros del 0 al 0 de un total de 0
        @else
          Mostrando registros del
          @if ($tblcomisarias->currentPage() == $tblcomisarias->lastPage())
            {{ ( $tblcomisarias->currentPage() - 1 ) * $tblcomisarias->perPage() + 1 }} al {{ $tblcomisarias->total() }}
          @else
            {{ $tblcomisarias->currentPage()*$tblcomisarias->count() - ( $tblcomisarias->count() - 1 ) }} al {{ $tblcomisarias->currentPage()*$tblcomisarias->count() }}
          @endif
          de un total de {{ $tblcomisarias->total() }}</div>
        @endif
      <div class="col-md-6"><div class="pull-right">{{ $tblcomisarias->links() }}</div></div>
    </div>
  </div>
</div>
