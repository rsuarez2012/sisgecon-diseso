@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-heading">
                	<b class="sub-header">Nueva Dependencia</b>
                	
                </div>
				<br>
				<div class="panel-body">
                    {!! Form::open(['route' => ['dependencias.store'], 'files' => true]) !!}
                        
                        @include('admin.dependencies.partials.form')

                    {!! Form::close() !!}
				</div>
				
			</div>

		</div>


	</div>
				

</div>




@endsection
