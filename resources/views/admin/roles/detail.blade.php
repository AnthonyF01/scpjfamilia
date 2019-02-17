<div class="container-fluid spark-screen">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="box_plus box_plus-default ">
        <div id="box_plus-title" class="box_plus-heading">Rol</div>

        <div class="box_plus-body">

          <p><strong>Nombre: </strong>      {{ $role->name }}</p>
          <p><strong>Slug: </strong>      {{ $role->slug }}</p>
          <p><strong>Descripción: </strong> {{ $role->description }}</p>


        </div>

        <div class="box_plus-footer">

          <a class="btn btn-default" href="javascript:ajaxLoad('{{ url('roles') }}')">Atrás</a>


        </div>
      
      </div>
    </div>
  </div>
</div>