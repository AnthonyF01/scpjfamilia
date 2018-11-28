<div class="container-fluid spark-screen">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="box_plus box_plus-default ">
        <div id="box_plus-title" class="box_plus-heading">Categoría</div>

        <div class="box_plus-body">

          <p><strong>Nombre: </strong> {{ $user->name }}</p>
          <p><strong>Email: </strong> {{ $user->email }}</p>


        </div>

        <div class="box_plus-footer">

          <a class="btn btn-default" href="javascript:ajaxLoad('{{ url('users') }}')">Atrás</a>


        </div>
      
      </div>
    </div>
  </div>
</div>