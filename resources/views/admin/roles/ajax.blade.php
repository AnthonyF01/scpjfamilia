<div class="box_plus box_plus-default ">
  <div id="box_plus-title" class="box_plus-heading">
    <div class="row">
      <div class="col-md-6"><i class="fa fa-list-ul"></i> Roles</div>
      <div class="col-md-6">
        <div class="pull-right">
          @can('roles.create')
            <!-- <a href="{{ route('roles.create') }}" class="btn btn-xs btn-primary pull-right">
              <i class="fa fa-plus"></i> Agregar
            </a> -->
            <a href="javascript:ajaxLoad('{{ route('roles.create') }}')" class="btn btn-xs btn-outline-primary pull-right">
              <i class="fa fa-plus"></i> Agregar
            </a>
          @endcan 
        </div>
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
            <input class="form-control input-sm" autofocus="autofocus" id="search" value="{{ request()->session()->get('search') }}" onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('roles')}}?search='+this.value)" placeholder="Buscar..." name="search" type="text"/>
            <div class="input-group-btn">
              <button type="submit" class="btn btn-sm btn-primary" onclick="ajaxLoad('{{url('roles')}}?search='+$('input#search').val())">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </div>
          </div>
        </div> 
      </div>
    </div><br>
    <table class="table table-striped table-hover table-cell mdc-table">
      <thead>
        <tr>
          <th width="10px">#</th>

          <th>
            <a class="btn-block" href="javascript:ajaxLoad('{{url('roles?field=name&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Rol 
              <i style="margin-right: 10px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
            </a>
          </th>

          <th>
            <a class="btn-block" href="javascript:ajaxLoad('{{url('roles?field=description&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Descripción
               <i style="margin-right: 10px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
            </a>
          </th>

          <th colspan="3" style="text-align: center;">Accion</th>
        </tr>
      </thead>
      <tbody>

        @if ($roles->total() == 0)

          <tr>
            <td colspan="7" style="text-align: center;">No se encontraron resultados... </td>
          </tr>

        @else

          <?php $counter=1; ?>
          @foreach($roles as $role)
            <tr>
              <td class="middle" data-label="#">{{ $counter++ + ( $roles->perPage() * ( $roles->currentPage() - 1 ) ) }}</td>
              <td class="middle" data-label="Rol">{{ $role->name }}</td>
              <td class="middle" data-label="Descripción">{{ $role->description }}</td>
              {{-- @can('roles.show')
              <td width="10px" data-label="Accion">
                  <!-- <a href="{{ route('roles.show', $role->id) }}" class="btn btn-xs btn-default">Ver</a> -->
                  <a href="javascript:ajaxLoad('{{ route('roles.show', $role->id) }}')" class="btn btn-xs btn-outline-info"><i class="fa fa-eye"></i></a>
                </td>
              @endcan  --}}
              @can('roles.edit')
              <td width="10px" data-label="Accion">
                  <a href="javascript:ajaxLoad('{{ route('roles.edit', $role->id) }}')" class="btn btn-xs btn-outline-warning"><i class="glyphicon glyphicon-edit"></i></a>
                </td>
              @endcan 
              @can('roles.destroy')
              <td width="10px"  data-label="Accion">

                  <input type="hidden" name="_method" value="delete"/>
                  <a class="btn btn-xs btn-outline-danger" href="javascript:if(confirm('¿Está seguro que desea eliminar este registro?')) ajaxDelete('{{ route('roles.destroy', $role->id) }}','{{csrf_token()}}')">
                    <i class="glyphicon glyphicon-trash"></i>
                  </a>

                  {{-- {!! Form::open(['route' => ['roles.destroy', $role->id], 'method' => 'DELETE']) !!}
                    <button class="btn btn-xs btn-danger">
                      Eliminar
                    </button>
                  {!! Form::close() !!} --}}
                </td>
              @endcan 
            </tr>
          @endforeach

        @endif

      </tbody>
    </table>
    <div class="row">
      <div class="col-md-6">

        @if ($roles->total() == 0)
          Mostrando registros del 0 al 0 de un total de 0
        @else
          Mostrando registros del 
          @if ($roles->currentPage() == $roles->lastPage())
            {{ ( $roles->currentPage() - 1 ) * $roles->perPage() + 1 }} al {{ $roles->total() }}
          @else
            {{ $roles->currentPage()*$roles->count() - ( $roles->count() - 1 ) }} al {{ $roles->currentPage()*$roles->count() }} 
          @endif
          de un total de {{ $roles->total() }}</div>
        @endif
      <div class="col-md-6"><div class="pull-right">{{ $roles->links() }}</div></div>
    </div>
  </div>
</div>