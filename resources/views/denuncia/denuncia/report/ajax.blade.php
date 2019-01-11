<table class="table table-striped table-hover table-cell table-lg">
  <thead>
    <tr>
      <th class="header" width="10px"></th>
      <th class="header" colspan="6">FASE I: LEY 30364</th>
      <th class="header" colspan="2">FASE II</th>
      <th class="header" colspan="2">FASE III</th>
      <th class="header" colspan="2">FASE IV</th>
      <th class="header" rowspan="3">TOTAL</th>
    </tr>
    <tr>
      <th class="header" width="10px"></th>
      <th class="header" colspan="2">FORMALIZACION</th>
      <th class="header" colspan="2">EXPEDIENTE</th>
      <th class="header" colspan="2">AUDIENCIA</th>
      <th class="header" colspan="2">REMISION</th>
      <th class="header" colspan="2">DENUNCIA</th>
      <th class="header" colspan="2">JUZGADO</th>
    </tr>
    <tr>
      <th class="modHeader" width="10px">#</th>
      <th class="modHeader" title="Fecha de Formalizacion">F. Form.</th>
      <th class="modHeader" title="Días Formalizacion">D.F.</th>
      <th class="modHeader">Expediente</th>
      <th class="modHeader">Juzgado</th>
      <th class="modHeader" title="Fecha de Audiencia">F. Aud.</th>
      <th class="modHeader" title="Días Audiencia">D.A.</th>
      <th class="modHeader">Lugar</th>
      <th class="modHeader" title="Días Remisión">D.R.</th>
      <th class="modHeader" title="Fecha Denuncia">F. Den.</th>
      <th class="modHeader" title="Días Denuncia">D.D.</th>
      <th class="modHeader" title="Fecha Juzgado">F. Juz.</th>
      <th class="modHeader" title="Días Juzgado">D.J.</th>
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
        @if ($tdias == '-1')
          <?php echo "@continue1"; ?>
          @continue;
        @else
          @if ($tdias != '-1') 
            @if ($denuncia->total <= $tdias)
              <?php echo "@continue2"; ?>
              @continue;
            @else
              <?php echo "@break"; ?>
              @break;
            @endif
          @endif
        @endif
        <tr>
          {{-- <td class="middle details-control" data-toggle="1" onclick="showDetalis(this)" style="padding-left: 15px; padding-right: 15px"></td> --}}
          <td class="middle">{{ $counter++ + ( $denuncias->perPage() * ( $denuncias->currentPage() - 1 ) ) }}</td>
          {{-- <td class="middle modContent">@if ($denuncia->registro) <small class="label bg-green">si</small> @else <small class="label bg-red">no</small> @endif</td> --}}
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
          {{-- <td style="padding: 8px 4px;">
            @if (isset($denuncia->medida_file) && !empty($denuncia->medida_file))
              <a title="Descargar Medida de Protección" href="{{ $denuncia->medida_file }}" target="_blank" class="btn btn-xs btn-outline-primary"><i class="fa fa-file"></i></a>
            @else
              <a href="javascript:void(0)" disabled class="btn btn-xs btn-outline-primary"><i class="fa fa-file-o"></i></a>
            @endif
            @can('denuncia.edit')
              <a href="{{ route('denuncia.edit', $denuncia->id) }}" class="btn btn-xs btn-outline-warning"><i class="glyphicon glyphicon-edit"></i></a>
            @endcan 
            @can('denuncia.destroy')
              <input type="hidden" name="_method" value="delete"/>
              <a class="btn btn-xs btn-outline-danger" href="javascript:if(confirm('¿Está seguro que desea eliminar este registro?')) ajaxDelete('{{ route('denuncia.destroy', $denuncia->id) }}','{{csrf_token()}}')">
                  <i class="glyphicon glyphicon-trash"></i>
              </a>
            @endcan 
          </td> --}}
        </tr>
        <tr class="details" style="display: none;">
          <td colspan="17" style="padding:20px;">
            <table class="table" style="text-align: left; margin: 0px;">
              <tbody>
                <tr>
                  <td class="width-20 fweight">Oficio:</td>
                  <td class="width-30">{{ $denuncia->oficio }}</td>
                  <td class="width-20 fweight">Institución:</td>
                  <td class="width-30">{{ $denuncia->tblcomisaria->nombre }}</td>
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
                  <td class="width-30">{{ $denuncia->tblinstancia->nombre }}</td>
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
                      <a href="{{ $denuncia->medida_file }}" target="_blank" class="btn btn-xs btn-default">{{ str_replace('/img/denuncia/', '', $denuncia->medida_file) }}</a>
                    @else
                      <small style="font-size:11px;" class="label bg-blue">Sin archivo</small>
                    @endif
                  </td>
                </tr>
                <tr class="selected">
                  <td class="width-20 fweight">Remitido (Fase II):</td>
                  <td class="width-30">
                    @if (isset($denuncia->remitido) && !empty($denuncia->remitido))
                      {{ $denuncia->remitido }}
                    @else
                      <small style="font-size:11px;" class="label bg-red">No Registra</small>
                    @endif
                  </td>
                  <td class="width-20 fweight">Fecha Remisión (Fase II):</td>
                  <td class="width-30">
                    @if (isset($denuncia->fremision) && !empty($denuncia->fremision))
                      {{ $denuncia->fremision }}
                    @else
                      <small style="font-size:11px;" class="label bg-red">No Registra</small>
                    @endif
                  </td>
                </tr>
                <tr class="selected">
                  <td class="width-20 fweight">Remitido (Fase III):</td>
                  <td class="width-30">
                    @if (isset($denuncia->remitidod) && !empty($denuncia->remitidod))
                      {{ $denuncia->remitidod }}
                    @else
                      <small style="font-size:11px;" class="label bg-red">No Registra</small>
                    @endif
                  </td>
                  <td class="width-20 fweight">Fecha Remisión (Fase III):</td>
                  <td class="width-30">
                    @if (isset($denuncia->fremisiond) && !empty($denuncia->fremisiond))
                      {{ $denuncia->fremisiond }}
                    @else
                      <small style="font-size:11px;" class="label bg-red">No Registra</small>
                    @endif
                  </td>
                </tr>
                <tr class="selected">
                  <td class="width-20 fweight">Remitido (Fase IV):</td>
                  <td class="width-30">
                    @if (isset($denuncia->remitidoj) && !empty($denuncia->remitidoj))
                      {{ $denuncia->remitidoj }}
                    @else
                      <small style="font-size:11px;" class="label bg-red">No Registra</small>
                    @endif
                  </td>
                  <td class="width-20 fweight">Fecha Remisión (Fase IV):</td>
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
          </td>
        </tr>
      @endforeach
    @endif
  </tbody>
</table>
{{$tdias}}
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