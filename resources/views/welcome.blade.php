@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Control Asistencias</h4>
    <form class="navbar-form navbar-left" role="search" action="{{url('personas/autocomplete')}}">
     <div class="form-group">
      <input type="text" class="form-control" name='search' placeholder="Titular ..." />
     </div>
     <button type="submit" class="btn btn-default">Buscar</button>
    </form>

</div>

@endsection