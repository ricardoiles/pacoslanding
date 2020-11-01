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
	    	</tr>
	    </thead>
	    <tbody>
	    	@foreach($leads as $lead)
	    	<tr>
	    		<td>{{$loop->iteration}}</td>
	    		<td>{{ $lead->Nombres }}</td>
	    		<td>{{ $lead->WhatsApp }}</td>
	    	</tr>
	    	@endforeach
	    </tbody>
	  </table>
	</div>
  </div>
</div>
@endsection