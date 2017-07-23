@extends('principal')

@section('content')

<div class="container">
	
	<h1>Comentarios de los Fans De GOT</h1>

	<div class="dropdown">
	  <button  id="btnfan" class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
	    Fans de GOT
	    <span class="caret"></span>
	  </button>
	  <ul id="listFans" class="dropdown-menu" aria-labelledby="dropdownMenu1">
	  	@foreach($comentarios as $coment)
	    <li value="{{$coment->fan->id}}">{{$coment->fan->nombre}} {{$coment->fan->apellido}}</li>
	    @endforeach
	  </ul>
	</div>

	<br/>

	<form>
		<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
		<div id="listComentarios">
			<ul class="list-group">
			@foreach($comentarios as $coment)
			    <li class="list-group-item">
			    	<label class="label label-default">{{$coment->fan->nombre}}:</label> {{$coment->descripcion}}
			    </li>
			@endforeach
			</ul>
	  	</div>
	  	<button id="buton1" ></button>
	</form>

</div>

@endsection

@section('scripts')

<script type="text/javascript">
	$("#listFans li").click(function(){
		$("#listComentarios").empty();
        
        var route="comentarios";
	    var token= $("#token").val();
	    $.ajax({
	      url: route,
	      headers: {'X-CSRF-TOKEN': token},
	      type: 'POST',
	      datatype: 'json',
	      data: {id_fan: $(this).val()},
	      success:function(response){
	        
	        var html = '<ul class="list-group">';
	        for (var i = 0; i < response.coment.length; i++){
			  	html+='<li class="list-group-item">';
				html+='<label class="label label-default">'
				html+=''+response.coment[i]['nombre'];
				html+='</label>';
				html+=' '+response.coment[i]['descripcion'];
				html+='</li>'; 
			}
	        
			html+='</ul>'; 
	    	$("#listComentarios").append(html);
	      },
	      error:function(msj){
	        $("#msj").html(msj.responseJSON);
	        $("#msj-error").fadeIn();
	      }
	    });
  	});
</script>
@endsection