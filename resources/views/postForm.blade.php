<form method=post action="/mensajeAgur">
	{{ csrf_field()}}
    	<input type= "text" name="nombre" value="Nombre"></input>
	<input type="submit" name="aceptar" value="Enviar"></input>
	
</form>

