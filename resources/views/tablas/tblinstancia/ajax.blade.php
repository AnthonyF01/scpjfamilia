<div class="box_plus box_plus-default ">
  <div id="box_plus-title" class="box_plus-heading">
    <div class="row">
      <div class="col-md-6"><i class="fa fa-list-ul"></i> Instancias</div>
      <div class="col-md-6">
        @can('instancia.create')
          <!-- <a href="{{ route('instancia.create') }}" class="btn btn-sm btn-primary pull-right">
            <i class="fa fa-plus"></i> Agregar
          </a> -->
          <a href="javascript:ajaxLoad('{{ route('instancia.create') }}')" class="btn btn-xs btn-outline-primary pull-right">
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
            <input class="form-control input-sm" autofocus="autofocus" id="search" value="{{ request()->session()->get('search') }}" onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('tblinstancia')}}?search='+this.value)" placeholder="Buscar..." name="search" type="text"/>
            <div class="input-group-btn">
              <button type="submit" class="btn btn-sm btn-primary" onclick="ajaxLoad('{{url('tblinstancia')}}?search='+$('input#search').val())">
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
            <a class="btn-block" href="javascript:ajaxLoad('{{url('tblinstancia?field=tblmodulo_id&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Modulo 
              <i style="margin-right: 10px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
            </a>
          </th>

          <th>
            <a class="btn-block" href="javascript:ajaxLoad('{{url('tblinstancia?field=tbldepartamento_id&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Departamento
               <i style="margin-right: 10px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
            </a>
          </th>

          <th>
            <a class="btn-block" href="javascript:ajaxLoad('{{url('tblinstancia?field=nombre&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Nombre
               <i style="margin-right: 10px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
            </a>
          </th>

          <th>
            <a class="btn-block" href="javascript:ajaxLoad('{{url('tblinstancia?field=sigla&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Sigla
               <i style="margin-right: 10px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
            </a>
          </th>

          <th colspan="3" style="text-align: center;">Accion</th>
        </tr>
      </thead>
      <tbody>

        @if ($tblinstancias->total() == 0)

          <tr>
            <td colspan="7" style="text-align: center;">No se encontraron resultados... </td>
          </tr>

        @else

          <?php $counter=1; ?>
          @foreach($tblinstancias as $tblinstancia)
            <tr>
              <td class="middle">{{ $counter++ + ( $tblinstancias->perPage() * ( $tblinstancias->currentPage() - 1 ) ) }}</td>
              <td class="middle" {{ (isset($tblinstancia->tblmodulo->nombre)&&!empty($tblinstancia->tblmodulo->nombre))? '':'style=font-style:italic;' }} >{{ (isset($tblinstancia->tblmodulo->nombre)&&!empty($tblinstancia->tblmodulo->nombre))?$tblinstancia->tblmodulo->nombre:'No registra' }}</td>
              <td class="middle">{{ $tblinstancia->tbldepartamento->nombre }}</td>
              <td class="middle">{{ $tblinstancia->nombre }}</td>
              <td class="middle">{{ $tblinstancia->sigla }}</td>
              {{-- @can('tblinstancia.show')
                <td width="10px">
                  <!-- <a href="{{ route('tblinstancia.show', $tblinstancia->id) }}" class="btn btn-sm btn-default">Ver</a> -->
                  <a href="javascript:ajaxLoad('{{ route('tblinstancia.show', $tblinstancia->id) }}')" class="btn btn-xs btn-outline-info protip" data-pt-title="Mostrar" data-pt-scheme="info" data-pt-position="left" data-pt-size="small"><i class="fa fa-eye"></i></a>
                </td>
              @endcan --}}
              @can('instancia.edit')
                <td width="10px">
                  <a href="javascript:ajaxLoad('{{ route('instancia.edit', $tblinstancia->id) }}')" class="btn btn-xs btn-outline-warning"><i class="glyphicon glyphicon-edit"></i></a>
                </td>
              @endcan 
              @can('instancia.destroy')
                <td width="10px">
                  <input type="hidden" name="_method" value="delete"/>
                  <a class="btn btn-xs btn-outline-danger" href="javascript:if(confirm('¿Está seguro que desea eliminar este registro?')) ajaxDelete('{{ route('instancia.destroy', $tblinstancia->id) }}','{{csrf_token()}}')">
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

        @if ($tblinstancias->total() == 0)
          Mostrando registros del 0 al 0 de un total de 0
        @else
          Mostrando registros del 
          @if ($tblinstancias->currentPage() == $tblinstancias->lastPage())
            {{ ( $tblinstancias->currentPage() - 1 ) * $tblinstancias->perPage() + 1 }} al {{ $tblinstancias->total() }}
          @else
            {{ $tblinstancias->currentPage()*$tblinstancias->count() - ( $tblinstancias->count() - 1 ) }} al {{ $tblinstancias->currentPage()*$tblinstancias->count() }} 
          @endif
          de un total de {{ $tblinstancias->total() }}</div>
        @endif
      <div class="col-md-6"><div class="pull-right">{{ $tblinstancias->links() }}</div></div>
    </div>
  </div>
</div>