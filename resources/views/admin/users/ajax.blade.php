<div class="box_plus box_plus-default ">
  <div id="box_plus-title" class="box_plus-heading">
    <div class="row">
      <div class="col-md-6"><i class="fa fa-list-ul"></i> Usuarios</div>
      <div class="col-md-6">
        @can('users.create')
          <!-- <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary pull-right">
            <i class="fa fa-plus"></i> Agregar
          </a> -->
          <a href="javascript:ajaxLoad('{{ route('users.create') }}')" class="btn btn-xs btn-outline-primary pull-right">
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
            <input class="form-control input-sm" autofocus="autofocus" id="search" value="{{ request()->session()->get('search') }}" onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('users')}}?search='+this.value)" placeholder="Buscar..." name="search" type="text"/>
            <div class="input-group-btn">
              <button type="submit" class="btn btn-sm btn-primary" onclick="ajaxLoad('{{url('users')}}?search='+$('input#search').val())">
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
            <a class="btn-block" href="javascript:ajaxLoad('{{url('users?field=nombre&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Nombre
              <i style="margin-right: 10px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
            </a>
          </th>

          <th>
            <a class="btn-block" href="javascript:ajaxLoad('{{url('users?field=email&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Email
               <i style="margin-right: 10px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
            </a>
          </th>

          <th>
            <a class="btn-block" href="javascript:ajaxLoad('{{url('users?field=fono&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Telefono
               <i style="margin-right: 10px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
            </a>
          </th>

          <th>
            <a class="btn-block" href="javascript:ajaxLoad('{{url('users?field=name&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">Usuario
               <i style="margin-right: 10px" class="pull-right fa {{ ( request()->session()->get('sort')=='asc' ) ? 'fa-caret-up' : 'fa-caret-down' }}"></i>
            </a>
          </th>

          <th colspan="3" style="text-align: center;">Accion</th>
        </tr>
      </thead>
      <tbody>

        @if ($users->total() == 0)

          <tr>
            <td colspan="7" style="text-align: center;">No se encontraron resultados... </td>
          </tr>

        @else

          <?php $counter=1; ?>
          @foreach($users as $user)
            <tr>
              <td class="middle">{{ $counter++ + ( $users->perPage() * ( $users->currentPage() - 1 ) ) }}</td>
              <td class="middle">{{ $user->nombre }}</td>
              <td class="middle">{{ $user->email }}</td>
              <td class="middle">{{ $user->fono }}</td>
              <td class="middle">{{ $user->name }}</td>
              {{-- @can('users.show')
                <td width="10px">
                  <!-- <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-default">Ver</a> -->
                  <a href="javascript:ajaxLoad('{{ route('users.show', $user->id) }}')" class="btn btn-xs btn-outline-info protip" data-pt-title="Mostrar" data-pt-scheme="info" data-pt-position="left" data-pt-size="small"><i class="fa fa-eye"></i></a>
                </td>
              @endcan --}}
              <td width="10px">
                @if (!empty($user->lat)&&!empty($user->lng))
                  <button class="btn btn-xs btn-outline-success" onclick="showMapSelect({{ $user->lat }},{{ $user->lng }},1,{{ $user->id }})">
                    <i class="glyphicon glyphicon-map-marker"></i>
                  </button>
                @else
                  <button class="btn btn-xs btn-outline-primary" onclick="showMapSelect({{ auth()->user()->lat ? auth()->user()->lat : -18.0092832}},{{ auth()->user()->lat ? auth()->user()->lng : -70.2438729 }},0,{{ $user->id }})" title="Registrar cordenadas de geolocalización">
                    <i class="glyphicon glyphicon-map-marker"></i>
                  </button>
                @endif
              </td>
              @can('users.edit')
                @if (Auth::user()->id != $user->id)
                  <td width="20px">
                @else
                  <td width="10px">
                @endif
                  <a href="javascript:ajaxLoad('{{ route('users.edit', $user->id) }}')" class="btn btn-xs btn-outline-warning"><i class="glyphicon glyphicon-edit"></i></a>
                </td>
              @endcan
              @can('users.destroy')
                @if (Auth::user()->id != $user->id)
                  <td width="10px">
                    <input type="hidden" name="_method" value="delete"/>
                    <a class="btn btn-xs btn-outline-danger" href="javascript:if(confirm('¿Está seguro que desea eliminar este registro?')) ajaxDelete('{{ route('users.destroy', $user->id) }}','{{csrf_token()}}')">
                        <i class="glyphicon glyphicon-trash"></i>
                    </a>
                  </td>
                @endif
              @endcan
            </tr>
          @endforeach

        @endif

      </tbody>
    </table>
    <div class="row">
      <div class="col-md-6">

        @if ($users->total() == 0)
          Mostrando registros del 0 al 0 de un total de 0
        @else
          Mostrando registros del
          @if ($users->currentPage() == $users->lastPage())
            {{ ( $users->currentPage() - 1 ) * $users->perPage() + 1 }} al {{ $users->total() }}
          @else
            {{ $users->currentPage()*$users->count() - ( $users->count() - 1 ) }} al {{ $users->currentPage()*$users->count() }}
          @endif
          de un total de {{ $users->total() }}</div>
        @endif
      <div class="col-md-6"><div class="pull-right">{{ $users->links() }}</div></div>
    </div>
  </div>
</div>
