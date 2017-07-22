@extends('principal')

	@section('content')

		<!--Formulario de Registro de fans-->

		<div class="container">
			
			<h1>Únete a los fans de Juego de Tronos</h1>

			{!!Form::open(['method'=>'post','route'=>'store'])!!}
				<div class="form-group">
				    <label >Nombre: </label>
				    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Aquí escribe tu nombre">
				  </div>

				<div class="form-group">
				    <label >Apellido: </label>
				    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Aquí escribe tu apellido">
				  </div>

				<div class="form-group">
				    <label >Edad: </label>
				    <input type="text" class="form-control" id="edad" name="edad" placeholder="Aquí escribe tu edad">
				  </div>

				 <div class="form-group">
				    <label >sexo: </label>
				    <input type="text" class="form-control" id="sexo" name="sexo" placeholder="Aquí escribe tu sexo">
				  </div>

				  <button class="btn btn-success" type="submit">
				  		Registrarse
				  </button>
			{!!Form::close()!!}	  
			</form>
		</div>


	@endsection