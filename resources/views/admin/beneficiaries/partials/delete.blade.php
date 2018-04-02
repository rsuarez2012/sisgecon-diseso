{{ Form::open(['route' => ['beneficiarios.destroy', $beneficiary->id], 'method' => 'DELETE']) }}
	<button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Seguro desea eliminar?')">Eliminar</button>
{{ Form::close() }}