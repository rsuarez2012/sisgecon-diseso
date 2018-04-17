@extends('layouts.app')

@section('content')
	{{ Form::open() }}

		<div class="form-group">
			<select name="peoples" id="peoples" class="form-control people">
				<option value="0" disabled="true" selected="true">===Seleccione El Titular===</option>
					@foreach($peoples as $people)
						<option value="{{ $people->id }}">{{ $people->first_name.' '.$people->dni }}</option>
					@endforeach

			</select>
		</div>

		<div class="form-group">
			<select name="beneficiaries" id="beneficiaries" class="form-control beneficiaries">
				<option value="0" disabled="true" selected="true">===Seleccione el Beneficiario===</option>

			</select>
		</div>

	{{ Form::close() }}
@endsection
@section('scripts')
<script type="text/javascript">
$(document).ready(function(){
	$('#peoples').select2();
	$('#peoples').on('change', function(e) {
		/* Act on the event */
		console.log(e);
		var people_id = e.target.value;
		//alert(people_id);
		$.get('/json-beneficiaries?people_id=' + people_id,function(data){
			console.log(data);
			$('#beneficiaries').empty();
			$('#beneficiaries').append('<option value="0" disabled="true" selected="true">===Seleccione el Beneficiario===</option>');

			$.each(data, function(index, beneficiariesObj){
				//alert(beneficiariesObj.first_name);
				$('#beneficiaries').append('<option value="'+ beneficiariesObj.id +'">'+ beneficiariesObj.first_name +'</option>');				
			})
		});
	});
});
</script>
@endsection