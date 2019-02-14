<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ (Auth::user()->imagen) ? asset(Auth::user()->imagen) : Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p style="overflow: hidden;text-overflow: ellipsis;max-width: 160px;" data-toggle="tooltip" title="{{ Auth::user()->nombre }}">{{ Auth::user()->nombre }}</p>
                    <!-- Status -->
                    {{-- <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a> --}}
                    <a href="#"><i class="fa fa-circle text-success"></i> Conectado</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">

            <li style="font-size: 13px" class="header">{{ trans('adminlte_lang::message.header') }}</li>

            <!-- Optionally, you can add icons to the links -->
            <li class="@yield('home')"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>
                {{-- {{ trans('adminlte_lang::message.home') }} --}}
                Inicio
            </span></a></li>

            <li class="treeview @yield('denuncia') @yield('victima') @yield('agresor') @yield('report') @yield('import') @yield('estadistica')">
                <a href="javascript:;">
                    <i class="fa fa-angle-left pull-right"></i>
                    <i class="fa fa-balance-scale"></i>
                    <span>Adm. Ley Nº 30364</span>
                </a>
                <ul class="treeview-menu">
                    <li class="treeview @yield('denuncia') @yield('victima') @yield('agresor')">
                        <a href="javascript:;"><i class="fa fa-indent"></i> Denuncias
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            @can ('denuncia.index')
                                <li class="@yield('denuncia')"><a href="{{ route('denuncia.index') }}"><i class="fa fa-table"></i> Registros</a></li>
                            @endcan
                            @can ('victima.index')
                                <li class="@yield('victima')"><a href="{{ route('victima.index') }}"><i class="fa fa-user"></i> Victimas</a></li>
                            @endcan
                            @can ('agresor.index')
                                <li class="@yield('agresor')"><a href="{{ route('agresor.index') }}"><img style="height: 14px;margin-right: 6px;" src="{{ asset('/assests/img/icons/human-skull.png') }}"> Agresores</a></li>
                            @endcan
                        </ul>
                    </li>
                    @can ('denuncia.estadistica')
                        <li class="@yield('estadistica')"><a href="{{ route('denuncia.estadistica') }}"><i class="fa fa-bar-chart"></i> Estadisticas</a></li>
                    @endcan
                    @can ('denuncia.report')
                        <li class="@yield('report')"><a href="{{ route('denuncia.report') }}"><i class="fa fa-clipboard"></i> Reportes</a></li>
                    @endcan
                    @can ('denuncia.import')
                        <li class="@yield('import')"><a href="{{ route('denuncia.import') }}"><i class='fa fa-bell'></i> <span>Importar</span></a></li>
                    @endcan
                </ul>
            </li>

            @can ('notification.index')
                <li class="@yield('notification')"><a href="{{ route('notification.index') }}"><i class='fa fa-bell'></i> <span>Notificaciones</span></a></li>
            @endcan

            <li class="header">MANTENIMIENTO</li>

            <li class="treeview @yield('users') @yield('roles')">
                <a href="javascript:;">
                    <i class="fa fa-angle-left pull-right"></i>
                    <i class="fa fa-users"></i>
                    <span>Personal Administrativo</span>
                </a>
                <ul class="treeview-menu">
                    @can ('users.index')
                        <li class="@yield('users')">
                            <a href="{{ route('users.index') }}"><i class="fa fa-user"></i> <span>Usuarios</span></a>
                        </li>
                    @endcan

                    @can ('roles.index')
                        <li class="@yield('roles')">
                            <a href="{{ route('roles.index') }}"><i class="fa fa-tag"></i> <span>Roles</span></a>
                        </li>
                    @endcan
                </ul>
            </li>

            <li class="treeview @yield('tblcentrosalud') @yield('tblcomisaria') @yield('tblinstancia') @yield('tblmotivo') @yield('tbldocumento') @yield('tbltipo') @yield('tblparentesco') @yield('tbldenuncia')">
                <a href="javascript:;">
                    <i class="fa fa-angle-left pull-right"></i>
                    <i class="fa fa-list"></i>
                    <span>Tablas Maestras</span>
                </a>
                <ul class="treeview-menu">
                    @can ('centrosalud.index')
                        <li class="@yield('tblcentrosalud')"><a href="{{ route('centrosalud.index') }}"><i class="fa fa-medkit"></i> Centros de Salud</a></li>
                    @endcan
                    @can ('comisaria.index')
                        <li class="@yield('tblcomisaria')"><a href="{{ route('comisaria.index') }}"><img style="height: 14px;margin-right: 6px;" src="{{ asset('/assests/img/icons/police-station.png') }}"> Instituciones</a></li>
                    @endcan
                    @can ('documento.index')
                        <li class="@yield('tbldocumento')"><a href="{{ route('documento.index') }}"><i class="fa fa-credit-card"></i> Documentos</a></li>
                    @endcan
                    @can ('instancia.index')
                        <li class="@yield('tblinstancia')"><a href="{{ route('instancia.index') }}"><i class="fa fa-bank"></i> Instancias</a></li>
                    @endcan
                    @can ('motivo.index')
                        <li class="@yield('tblmotivo')"><a href="{{ route('motivo.index') }}"><i class="fa fa-folder-open"></i> Motivos</a></li>
                    @endcan
                    @can ('parentesco.index')
                        <li class="@yield('tblparentesco')"><a href="{{ route('parentesco.index') }}"><i class="fa fa-group"></i> Parentescos</a></li>
                    @endcan
                    @can ('tdenuncia.index')
                        <li class="@yield('tbldenuncia')"><a href="{{ route('tdenuncia.index') }}"><i class="fa fa-object-group"></i> Tipo Denuncia</a></li>
                    @endcan
                    @can ('tblmedida.index')
                        <li class="@yield('tblmedida')"><a href="{{ route('tblmedida.index') }}"><i class="fa fa-object-group"></i> Tipo Medida</a></li>
                    @endcan
                    @can ('tipo.index')
                        <li class="@yield('tbltipo')"><a href="{{ route('tipo.index') }}"><i class="fa fa-object-group"></i> Tipo Victima</a></li>
                    @endcan
                </ul>
            </li>


        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
