@extends('layouts.leads')
@section('suscribirme')
<div class="columns is-desktop">
  <div class="column is-12">
  	<div class="table-container">
	  <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
	    <thead>
	    	<tr>
	    		<th>N°</th>
	    		<th>Nombres</th>
	    		<th>WhatsApp</th>
	    		<th>Correo Electronico</th>
	    	</tr>
	    </thead>
	    <tbody>
	    	@foreach($leadsPACOS as $pacos)
	    	<tr>
	    		<td>{{$loop->iteration}}</td>
	    		<td>{{ $pacos->Nombres }}</td>
	    		<td>{{ $pacos->WhatsApp }}</td>
	    		<td>{{ $pacos->Email }}</td>
	    	</tr>
	    	@endforeach
	    </tbody>
	  </table>
	</div>
  </div>
</div>
@endsection