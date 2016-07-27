@extends('layouts.master')
@section('content')

<div class="col-xs-12">
	<h1 class="page-header">5e Items List</h1>

	<div class="dataTable_wrapper">
	    <table class="table table-striped table-bordered table-hover" id="item-table">
	        <thead>
	            <tr>
	                <th>Name</th>
	                <th>Magic Type</th>
	                <th>Rarity</th>
	                <th>Attunement Required?</th>
	                <th>Enchantment Requirement</th>
	            </tr>
	        </thead>
	        <tbody>
	        	@foreach($all_items as $item)
	        		<tr>
	        			<td>{{ $item->item_name }}</td>
	        			<td>{{ $item->magic_type }}</td>
	        			<td>{{ $item->rarity }}</td>
	        			<td>{{ ucfirst($item->attunement) }}</td>
	        			<td>{{ ucfirst($item->item_type) }}</td>
	        		</tr>
	        	@endforeach
	        </tbody>
	    </table>
	</div>
</div>


<script>
	$(document).ready(function() {
	    $('#item-table').DataTable({
	            responsive: true
	    });
	});
</script>

@stop