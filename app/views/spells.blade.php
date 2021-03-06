@extends('layouts.master')
@section('content')

<div class="col-xs-12">
	<h1 class="page-header">5e Spell List</h1>
	@if(Session::has('message'))
        <div class="alert alert-dismissible alert-success text-center">
            <p>{{ Session::get('message') }}</p>
        </div>
    @endif
	<div class="alert alert-info" role="alert">Click on a spell in the table to see additional information.</div>

	<div class="dataTable_wrapper">
	    <table class="table table-striped table-bordered table-hover" id="spell-table">
	        <thead>
	            <tr>
	                <th>Name</th>
	                <th>Level</th>
	                <th>Type</th>
	                <th>Classes</th>
	                @if(userIsAdmin())
	                	<th>Unpublish</th>
	                	<th>Update</th>
	                	<th>Delete</th>
	                @else
		                <th>Casting Time</th>
		                <th>Range</th>
	                @endif
	            </tr>
	        </thead>
	        <tbody>
	        	@foreach($spells as $spell)
        			@if(userIsAdmin())
        				<tr>
		        			<td data-toggle="modal" data-target="#myModal" data-index="{{ $spell->spell_name }}">{{ $spell->spell_name }}</td>
		        			<td data-toggle="modal" data-target="#myModal" data-index="{{ $spell->spell_name }}">{{ $spell->spell_level }}</td>
		        			<td data-toggle="modal" data-target="#myModal" data-index="{{ $spell->spell_name }}">{{ $spell->spell_type }}</td>
		        			<td data-toggle="modal" data-target="#myModal" data-index="{{ $spell->spell_name }}">{{ $spell->class_name }}</td>
	        				<td class="text-center">
	        					{{ Form::open(array('route' => array('spell.unpublish', $spell->spell_id))) }}
			                    <button type="submit" class="btn btn-primary">
			                        <i class="fa fa-check-square-o" ></i>
			                    </button>
			                    {{ Form::close() }}
				            </td>
		        			<td class="text-center">
								<a class="btn btn-success" href="{{ route('spell.show', $spell->spell_id) }}" role="button"><i class="fa fa-gears"></i></a>
							</td>
							<td class="text-center">
								{{ Form::open(array('route' => array('spell.destroy', $spell->spell_id), 'method' => 'delete')) }}
			                    <button type="submit" class="btn btn-danger">
			                        <i class="fa fa-times" ></i>
			                    </button>
			                    {{ Form::close() }}
				            </td>
				        </tr>
        			@else
        				<tr data-toggle="modal" data-target="#myModal" data-index="{{ $spell->spell_name }}">
		        			<td>{{ $spell->spell_name }}</td>
		        			<td>{{ $spell->spell_level }}</td>
		        			<td>{{ $spell->spell_type }}</td>
		        			<td>{{ $spell->class_name }}</td>
		        			<td>{{ $spell->casting_time }}</td>
		        			<td>{{ $spell->spell_range }}</td>
		        		</tr>
        			@endif
	        	@endforeach
	        </tbody>
	    </table>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">New Modal</h4>
			</div>
			<div class="modal-body">
				<p id="spell_type"></p>
				<p id="class_name"></p>
				<p id="casting_time"></p>
				<p id="spell_range"></p>
				<p id="components"></p>
				<p id="duration"></p>
				<p id="description"></p>
				<p id="higher_levels"></p>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		var spells = {{ json_encode($spells) }};  // convert collection to JSON object
		var selected = "";  // initialize empty string

		// format searchable table
	    $('#spell-table').DataTable({
	        responsive: true
	    });

	    // show modal when table row is clicked
	    $('#myModal').on('show.bs.modal', function (event) {
			var link = $(event.relatedTarget); // link that triggered the modal
			var index = link.data('index'); // extract info from data-index attribute

			// loop through the spells array object for selected table spell
			spells.forEach(function(spell){
				if(index === spell["spell_name"]) {
					selected = spell;
				}
			});

			// add item info to the empty modal
			var modal = $(this);
			modal.find('.modal-title').text(selected["spell_name"]);
			modal.find('.modal-body #spell_type').text(selected["spell_type"]);
			modal.find('.modal-body #class_name').text("Classes: " + selected["class_name"]);
			modal.find('.modal-body #casting_time').text("Casting time: " + selected["casting_time"]);
			modal.find('.modal-body #spell_range').text("Range: " + selected["spell_range"]);
			modal.find('.modal-body #components').text("Components: " + selected["components"]);
			modal.find('.modal-body #duration').text("Duration: " + selected["duration"]);
			modal.find('.modal-body #description').text(selected["description"]);
			modal.find('.modal-body #higher_levels').text(selected["higher_levels"]);
		});
	});
</script>

@stop