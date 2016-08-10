@extends('layouts.master')
@section('content')

<div class="col-xs-12">
	<h1 class="page-header">5e Random Magic Item Generator</h1>
	@if(Session::has('error'))
        <div class="alert alert-dismissible alert-danger text-center">
            <p>{{ Session::get('error') }}</p>
        </div>
    @endif

    <div class="row form-inline">
		<div class="form-group">
			{{ Form::label('rarityLabel','Rarity: ') }}
			<select class="form-control" id="rarityOption" name="rarityOption">
				<option value="any" selected>Any Rarity</option>
				@foreach($rarity as $rare)
					<option value="{{ $rare }}">{{ $rare }}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			{{ Form::label('typeLabel','Type: ') }}
			<select class="form-control" id="typeOption" name="typeOption" required>
				<option value="any" selected>Any Type</option>
				@foreach($types as $type)
					<option value="{{ $type }}">{{ $type }}</option>
				@endforeach
			</select>
		</div>

		<button id="submit" type="submit" class="btn btn-primary">Generate!</button>
	</div>

	<div class="row" id="tableDiv">
		<h3>Item List</h3>
	    <table class="table table-striped table-bordered table-hover" id="itemTable">
	    	<thead>
	            <tr>
	                <th>Name</th>
	                <th>Rarity</th>
	                <th>Attunement</th>
	                <th>Requirements</th>
	                <th>Source</th>
	            </tr>
	        </thead>
	        <tbody>
	        	<tr>
	        		<td colspan="5">No items selected</td>
	        	</tr>
	        </tbody>
	    </table>
	</div>

</div>

<script type="text/javascript">
$(document).ready(function() {
	var all_items = {{ json_encode($items) }};

	$( "#submit" ).click(function() {
		// get select box values
		var rarityOption = $( "#rarityOption option:selected" ).val();
		var typeOption = $( "#typeOption option:selected" ).val();

		var items = [];  // create empty array

		// determine what options are selected, loop through all items and push correct
		// options to the empty item array
		if(rarityOption === "any" && typeOption === "any") {
			items = all_items;
		} else if(rarityOption === "any" && typeOption != "any") {
			all_items.forEach(function(item){
				if(item["item_type"] == typeOption) {
					items.push(item);
				}
			});
		} else if(rarityOption != "any" && typeOption === "any") {
			all_items.forEach(function(item){
				if(item["rarity"] == rarityOption) {
					items.push(item);
				}
			});
		} else {
			all_items.forEach(function(item){
				if(item["rarity"] == rarityOption && item["item_type"] == typeOption) {
					items.push(item);
				}
			});
		}
		
		// remove existing table rows
		$('#itemTable tbody').empty();

		if(items.length == 0) { // no items found
			// append table row message
			$('#itemTable > tbody:last-child')
				.append('<tr><td colspan="5">No items matching this description were found</td></tr>');
		} else if(items.length > 10){  // too many items found
			var reducedItems = [];

			// randomly select 15 items from the full list
			for(var i=0; i < 10; i++){
				var item = items[Math.floor(Math.random()*items.length)];
				reducedItems.push(item);
			}

			// append item rows to table
			reducedItems.forEach(function(item){
				$('#itemTable > tbody:last-child')
				.append('<tr><td>'+item["item_name"]+'</td><td>'+item["rarity"]+'</td><td>'+item["attunement"]+'</td><td>'+item["requirements"]+'</td><td>'+item["page_source"]+'</td></tr>');
			});
		} else {  // good amount of items
			// append item rows to table
			items.forEach(function(item){
				$('#itemTable > tbody:last-child')
				.append('<tr><td>'+item["item_name"]+'</td><td>'+item["rarity"]+'</td><td>'+item["attunement"]+'</td><td>'+item["requirements"]+'</td><td>'+item["page_source"]+'</td></tr>');
			});
		}
	});
});

</script>

@stop