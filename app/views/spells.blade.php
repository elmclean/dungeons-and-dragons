@extends('layouts.master')
@section('content')

<div class="col-xs-12">
	<h1 class="page-header">5e Spell List</h1>

	<div class="dataTable_wrapper">
	    <table class="table table-striped table-bordered table-hover" id="spell-table">
	        <thead>
	            <tr>
	                <th>Name</th>
	                <th>Level</th>
	                <th>Type</th>
	                <th>Casting Time</th>
	                <th>Range</th>
	            </tr>
	        </thead>
	        <tbody>
	        	@foreach($spells as $spell)
	        		<tr>
	        			<td>{{ $spell->spell_name }}</td>
	        			<td>{{ $spell->spell_level }}</td>
	        			<td>{{ $spell->spell_type }}</td>
	        			<td>{{ $spell->casting_time }}</td>
	        			<td>{{ $spell->spell_range }}</td>
	        		</tr>
	        	@endforeach
	        </tbody>
	    </table>
	</div>
</div>

<script>
	$(document).ready(function() {
	    $('#spell-table').DataTable({
	            responsive: true
	    });
	});
</script>

@stop