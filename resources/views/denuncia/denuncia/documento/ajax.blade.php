<div class="box_plus box_plus-default ">
  <div id="box_plus-title" class="box_plus-heading">
    <div class="row">
      <div class="col-md-6"><i class="fa fa-list-ul"></i> Documentos Digitalizados</div>
      <div class="col-md-6">
        @can('ddocumento.create')
          <!-- <a href="{{ route('ddocumento.create') }}" class="btn btn-sm btn-primary pull-right">
            <i class="fa fa-plus"></i> Agregar
          </a> -->
          <a href="javascript:ajaxLoad('{{ route('ddocumento.create') }}')" class="btn btn-xs btn-outline-primary pull-right">
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
            <input class="form-control input-sm" autofocus="autofocus" id="search" value="{{ request()->session()->get('search') }}" onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('documento')}}?search='+this.value)" placeholder="Buscar..." name="search" type="text"/>
            <div class="input-group-btn">
              <button type="submit" class="btn btn-sm btn-primary" onclick="ajaxLoad('{{url('documento')}}?search='+$('input#search').val())">
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
            <a class="btn-block" href="javascript:ajaxLoad('{{url('documento?field=tblmodulo_id&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Modulo 
              <i style="margin-right: 10px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
            </a>
          </th>

          <th>
            <a class="btn-block" href="javascript:ajaxLoad('{{url('documento?field=tbldepartamento_id&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Departamento
               <i style="margin-right: 10px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
            </a>
          </th>

          <th>
            <a class="btn-block" href="javascript:ajaxLoad('{{url('documento?field=nombre&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Nombre
               <i style="margin-right: 10px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
            </a>
          </th>

          <th colspan="3" style="text-align: center;">Accion</th>
        </tr>
      </thead>
      <tbody>

        @if ($documentos->total() == 0)

          <tr>
            <td colspan="7" style="text-align: center;">No se encontraron resultados... </td>
          </tr>

        @else

          <?php $counter=1; ?>
          @foreach($documentos as $documento)
            <tr>
              <td class="middle">{{ $counter++ + ( $documentos->perPage() * ( $documentos->currentPage() - 1 ) ) }}</td>
              <td class="middle">{{ $documento->tblmodulo->nombre }}</td>
              <td class="middle">{{ $documento->tbldepartamento->nombre }}</td>
              <td class="middle">{{ $documento->nombre }}</td>
              @can('ddocumento.edit')
                <td width="10px">
                  <a href="javascript:ajaxLoad('{{ route('ddocumento.edit', $documento->id) }}')" class="btn btn-xs btn-outline-warning"><i class="glyphicon glyphicon-edit"></i></a>
                </td>
              @endcan 
              @can('ddocumento.destroy')
                <td width="10px">
                  <input type="hidden" name="_method" value="delete"/>
                  <a class="btn btn-xs btn-outline-danger" href="javascript:if(confirm('¿Está seguro que desea eliminar este registro?')) ajaxDelete('{{ route('ddocumento.destroy', $documento->id) }}','{{csrf_token()}}')">
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

        @if ($documentos->total() == 0)
          Mostrando registros del 0 al 0 de un total de 0
        @else
          Mostrando registros del 
          @if ($documentos->currentPage() == $documentos->lastPage())
            {{ ( $documentos->currentPage() - 1 ) * $documentos->perPage() + 1 }} al {{ $documentos->total() }}
          @else
            {{ $documentos->currentPage()*$documentos->count() - ( $documentos->count() - 1 ) }} al {{ $documentos->currentPage()*$documentos->count() }} 
          @endif
          de un total de {{ $documentos->total() }}</div>
        @endif
      <div class="col-md-6"><div class="pull-right">{{ $documentos->links() }}</div></div>
    </div>
  </div>
</div>