<div class="box_plus box_plus-default ">
  <div id="box_plus-title" class="box_plus-heading">
    <div class="row">
      <div class="col-md-5"><i class="fa fa-list-ul"></i> Caracteristicas</div>
      <div class="col-md-7">
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
            @can('caracteristicas.create')
              <!-- <a href="{{ route('caracteristicas.create') }}" class="btn btn-sm btn-primary pull-right">
                <i class="fa fa-plus"></i> Agregar
              </a> -->
              <a href="javascript:ajaxLoad('{{ route('caracteristicas.create') }}')" class="btn btn-sm btn-outline-primary pull-right">
                <i class="fa fa-plus"></i> Agregar
              </a>
            @endcan 
          </div>
          <div class="col-md-6">
            <div class="pull-right">
              <div class="input-group">
                <input class="form-control input-sm" autofocus="autofocus" id="search" value="{{ request()->session()->get('search') }}" onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('caracteristicas')}}?search='+this.value)" placeholder="Buscar..." name="search" type="text"/>
                <div class="input-group-btn">
                  <button type="submit" class="btn btn-sm btn-primary" onclick="ajaxLoad('{{url('caracteristicas')}}?search='+$('input#search').val())">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div>  
    </div>
  </div> 
  <div class="box_plus-body">
    <table class="table table-striped table-hover table-cell">
      <thead>
        <tr>
          <th width="10px">#</th>

          <th>
            <a class="btn-block" href="javascript:ajaxLoad('{{url('caracteristicas?field=name&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Caracteristica 
              <i style="margin-right: 10px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
            </a>
          </th>

          <th>
            <a class="btn-block" href="javascript:ajaxLoad('{{url('caracteristicas?field=state&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Estado
              <i style="margin-right: 10px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
            </a>
          </th>

          <th>
            <a class="btn-block" href="javascript:ajaxLoad('{{url('caracteristicas?field=description&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Descripción
               <i style="margin-right: 10px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
            </a>
          </th>
          
            <th colspan="3" style="text-align: center;">Accion</th>

        </tr>
      </thead>
      <tbody>

        @if ($caracteristicas->total() == 0)

          <tr>
            <td colspan="7" style="text-align: center;">No se encontraron resultados... </td>
          </tr>

        @else

          <?php $counter=1; ?>
          @foreach($caracteristicas as $caracteristica)
            <tr>
              <td class="middle no-bd">{{ $counter++ + ( $caracteristicas->perPage() * ( $caracteristicas->currentPage() - 1 ) ) }}</td>
              <td class="middle">{{ $caracteristica->name }}</td>
              <td class="middle">@if ($caracteristica->state == 1) <span class="label bg-green">Activo</span> @else <span class="label bg-red">Inactivo</span> @endif</td>
              <td class="middle">{{ $caracteristica->description }}</td>
              @can('caracteristicas.show')
                <td class="no-bd" width="10px">
                  <!-- <a href="{{ route('caracteristicas.show', $caracteristica->id) }}" class="btn btn-sm btn-default">Ver</a> -->
                  <a href="javascript:ajaxLoad('{{ route('caracteristicas.show', $caracteristica->id) }}')" class="btn btn-sm btn-outline-info protip" data-pt-title="Mostrar" data-pt-scheme="info" data-pt-position="left" data-pt-size="small"><i class="fa fa-eye"></i></a>
                </td>
              @endcan 
              @can('caracteristicas.edit')
                <td class="no-bd" width="10px">
                  <a href="javascript:ajaxLoad('{{ route('caracteristicas.edit', $caracteristica->id) }}')" class="btn btn-sm btn-outline-warning protip" data-pt-title="Editar" data-pt-scheme="warning" data-pt-position="left" data-pt-size="small"><i class="glyphicon glyphicon-edit"></i></a>
                </td>
              @endcan 
              @can('caracteristicas.destroy')
                <td class="no-bd" width="10px">
                  <input type="hidden" name="_method" value="delete"/>
                  <a class="btn btn-sm btn-outline-danger protip" href="javascript:if(confirm('¿Está seguro que desea eliminar este registro?')) ajaxDelete('{{ route('caracteristicas.destroy', $caracteristica->id) }}','{{csrf_token()}}')" data-pt-title="Eliminar" data-pt-scheme="pro" data-pt-position="left" data-pt-size="small">
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

        @if ($caracteristicas->total() == 0)
          Mostrando registros del 0 al 0 de un total de 0
        @else
          Mostrando registros del 
          @if ($caracteristicas->currentPage() == $caracteristicas->lastPage())
            {{ ( $caracteristicas->currentPage() - 1 ) * $caracteristicas->perPage() + 1 }} al {{ $caracteristicas->total() }}
          @else
            {{ $caracteristicas->currentPage()*$caracteristicas->count() - ( $caracteristicas->count() - 1 ) }} al {{ $caracteristicas->currentPage()*$caracteristicas->count() }} 
          @endif
          de un total de {{ $caracteristicas->total() }}</div>
        @endif
      <div class="col-md-6"><div class="pull-right">{{ $caracteristicas->links() }}</div></div>
    </div>
  </div>
</div>