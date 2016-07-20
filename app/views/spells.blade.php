@extends('layouts.master')
@section('content')

<div class="col-xs-12">
	<h1 class="page-header">5e Spell List</h1>
	<div class="alert alert-info" role="alert">Click on a spell in the table to see additional information.</div>

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
	        		<tr data-toggle="modal" data-target="#myModal" data-index="{{ $spell->spell_name }}">
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
		var spells = {{ json_encode($spells) }};
		var selected = "";

	    $('#spell-table').DataTable({
	            responsive: true
	    });

	    $('#myModal').on('show.bs.modal', function (event) {
			var link = $(event.relatedTarget); // link that triggered the modal
			var index = link.data('index'); // extract info from data-index attribute

			spells.forEach(function(spell){
				if(index === spell["spell_name"]) {
					selected = spell;
					console.log(selected);
				}
			});

			var modal = $(this);
			modal.find('.modal-title').text(selected["spell_name"]);
			modal.find('.modal-body #spell_type').text(selected["spell_type"]);
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