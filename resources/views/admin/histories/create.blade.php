@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-heading">
                	<b class="sub-header">Nueva Historia</b>
                	
                </div>
				<br>
				<div class="panel-body">
                    {!! Form::open(['route' => ['historias.store'], 'files' => true]) !!}
                        
                        @include('admin.histories.partials.form')

                    {!! Form::close() !!}
				</div>
				
			</div>

		</div>


	</div>
				

</div>




@endsection
@section('scripts')

<script type="text/javascript">
$(document).ready(function(){
	$('#people').select2();
});
</script>
@endsection