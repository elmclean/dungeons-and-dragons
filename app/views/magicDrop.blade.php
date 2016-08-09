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

	<div class="row" hidden>
		<h3>Item List</h3>
	    <table class="table table-striped table-bordered table-hover">
	    	<thead>
	            <tr>
	                <th>Name</th>
	                <th>Attunement</th>
	                <th>Requirements</th>
	                <th>Source</th>
	            </tr>
	        </thead>
	        <tbody>
	        </tbody>
	    </table>
	</div>

</div>

<script type="text/javascript">
$(document).ready(function() {
	var all_items = {{ json_encode($items) }};
	var items = [];

	$( "#submit" ).click(function() {
		var rarityOption = $( "#rarityOption option:selected" ).val();
		var typeOption = $( "#typeOption option:selected" ).val();

		all_items.forEach(function(item){
			if(item["rarity"] == rarityOption && item["item_type"] == typeOption) {
				console.log('true');
			}
		});

		console.log('clicked');
	});

});

</script>

@stop