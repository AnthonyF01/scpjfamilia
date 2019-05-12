@php
    function permisos($permisos,$id){
        if (count($permisos)>0) {
            $c='';
            foreach ($permisos as $key => $element) {
                $d=count($element->permisos);
                $a='<li class="dd-item dd3-item">'.
                        '<div class="dd3-content">';
                            $a.='<button class="btn btn-xs btn-outline-'.($d>0?'secondary':'dark').' pull-left" style="margin-top: -2px; margin-right: 5px;">';
                                $a.='<span class="fa fa-'.($d>0?'minus':'bars').' fa-lg"></span>'.
                                '</button>';

                            $a.=$element->name.' <span class="text-muted">'.$element->description.'</span> '.
                            '<span class="pull-right" style="margin-top: -2px;">';
                                if ($element->nivel==1) {
                                    $a.='<a title="Agregar permiso" href="javascript:ajaxLoad(\''.url('/permisos/create?padre='.$element->id.'&depende_de='.$element->name).'\')" class="btn btn-xs btn-outline-primary">'.
                                            '<span class="fa fa-plus-circle fa-lg"></span>'.
                                        '</a> ';
                                }
                                $a.='<a title="Editar" href="javascript:ajaxLoad(\''.url('/permisos/'.$element->id.'/edit?padre='.$element->id.'&depende_de='.$element->name).'\')" class="btn btn-xs btn-outline-warning">'.
                                        '<span class="fa fa-edit fa-lg"></span>'.
                                    '</a> ';
                                if ($d==0) {
                                    $a.='<span onclick="removeThisRow(\''.url('/permisos/'.$element->id).'\')" title="Eliminar esta oficina" class="btn btn-xs btn-outline-danger"><i class="fa fa-trash fa-lg"></i></span>';
                                }
                            $a.='</span>'.
                        '</div>'.
                        '<ol class="dd-list">';
                            if ($d>0) {
                                $a.=permisos($element->permisos,$element->id);
                            }
                    $a.='</ol>'.
                    '</li>';
                $c=$c.$a;
            }
            return $c;
        }
        else{
            return '';
        }
    }
@endphp
<div class="panel panel-default">
    <div class="panel-heading">
            <span>Listado de permisos del sistema</span>
        </div>
        <div class="panel-body">
            <div class="col-sm-12" align="center">
                <div class="dd" id="nestable_list_1" style="max-width: 900px;">
                    <ol class="dd-list">
                        <li class="dd-item dd3-item">
                            <div class="dd3-content">
                                <button class="btn btn-xs btn-outline-{{ count($permiso->permisos) > 0 ? 'secondary' : 'dark' }} pull-left" style="margin-top: -2px; margin-right: 5px;">
                                    <span class="fa fa-{{ count($permiso->permisos) > 0 ? 'minus' : 'bars' }} fa-lg"></span>
                                </button>
                                {{ $permiso->name }}<span class="text-muted">{{ $permiso->description }}</span>
                                <span class="pull-right" style="margin-top: -2px;">
                                    <a title="Agregar permiso" href="javascript:ajaxLoad('{{ url('/permisos/create?padre='.$permiso->id.'&depende_de='.$permiso->name) }}')" class="btn btn-xs btn-outline-primary">
                                        <span class="fa fa-plus-circle fa-lg"></span>
                                    </a>
                                    <a title="Editar" href="javascript:ajaxLoad('{{ url('/permisos/'.$permiso->id.'/edit?padre='.$permiso->id.'&depende_de='.$permiso->name) }}')" class="btn btn-xs btn-outline-warning">
                                        <span class="fa fa-edit fa-lg"></span>
                                    </a>
                                </span>
                            </div>
                            <ol class="dd-list">
                                {!! permisos($permiso->permisos,$permiso->id) !!}
                            </ol>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="max-width: 400px;">
            <div class="modal-content">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title text-center"><b><span style="color: red">¡Alto!</span> ¿Esta seguro eliminar el registro?</b></h4>
                    </div>
                    <div class="panel-body">
                        <p class="margin-bottom-lg text-center">Esta acción no podrá deshacerse. ¿Desea continuar?</p>
                        <div class="form-group text-center">
                            <form id="form-delete">
                                @csrf
                                <div class="row" align="center">
                                    <div class="col-sm-6">
                                        <a  id="button-delete" class="btn btn-danger btn-block margin-right-sm"><i class="fa fa-times-circle"></i> Sí, eliminar registro</a>
                                    </div>
                                    <div class="col-sm-6">
                                        <button data-dismiss="modal" class="btn btn-default btn-block"><i class="fa fa-chevron-circle-left"></i> No, cerrar ventana</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
