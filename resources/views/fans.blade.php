@extends('principal')

@section('content')
	<div class="container">
		<h1>Fans de Juego de tronos</h1>
		
		<table class="table table-striped">
	  		<tr>
	  			<th>Nombre</th>
	  			<th>Apellido</th>
	  			<th>Edad</th>
	  			<th>Sexo</th>
	  		</tr>

	  		@foreach($fans as $fan)
	  			<tr>
	  				<td>
	  					{{$fan->nombre}}
	  				</td>
	  				<td>
	  					{{$fan->apellido}}
	  				</td>
	  				<td>
	  					{{$fan->edad}}
	  				</td>
	  				<td>
	  					{{$fan->sexo}}
	  				</td>
	  			</tr>

	  			
	  		@endforeach
		</table>

	</div>

@endsection
