<div class="container-fluid spark-screen">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="box_plus box_plus-default ">
        <div id="box_plus-title" class="box_plus-heading">Color</div>

        <div class="box_plus-body">

          <p><strong>Nombre: </strong>      {{ $caracteristica->name }}</p>
          <p><strong>Estado: </strong>      @if ($caracteristica->state == 1) <span class="label bg-green">Activo</span> @else <span class="label bg-red">Inactivo</span> @endif</p>
          <p><strong>Descripción: </strong> {{ $caracteristica->description }}</p>


        </div>

        <div class="box_plus-footer">

          <a class="btn btn-default" href="javascript:ajaxLoad('{{ url('caracteristicas') }}')">Atrás</a>


        </div>
      
      </div>
    </div>
  </div>
</div>