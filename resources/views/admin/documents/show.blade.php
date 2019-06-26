@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-info">
  <!-- Default panel contents -->
      <div class="panel-heading">
        <b>Documento</b>
        <a class="pull-right" href="{{ route('documentos.index') }}">
          <span class="" aria-hidden="true"></span>
          Regresar
        </a>
      </div>

      {{asset($documento->file)}}

    </div>

</div>


@endsection