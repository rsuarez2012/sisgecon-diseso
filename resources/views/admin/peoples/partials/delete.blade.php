{{ Form::open(['route' => ['titulares.destroy', $peopl->id], 'method' => 'DELETE']) }}
	<button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Seguro desea eliminar?')">Eliminar</button>
{{ Form::close() }}