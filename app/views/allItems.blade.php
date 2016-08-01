@extends('layouts.master')
@section('content')

<div class="col-xs-12">
	<h1 class="page-header">5e Magic Item List</h1>
	<div class="alert alert-info" role="alert">Click on an item in the table to see additional information.</div>

	<div class="dataTable_wrapper">
	    <table class="table table-striped table-bordered table-hover" id="item-table">
	        <thead>
	            <tr>
	                <th>Name</th>
	                <th>Item Type</th>
	                <th>Rarity</th>
	                <th>Attunement Required?</th>
	                <th>Item Requirement</th>
	                <th>Resource</th>
	            </tr>
	        </thead>
	        <tbody>
	        	@foreach($magic_items as $item)
	        		<tr data-toggle="modal" data-target="#myModal" data-index="{{ $item->item_name }}">
	        			<td>{{ $item->item_name }}</td>
	        			<td>{{ $item->item_type }}</td>
	        			<td>{{ $item->rarity }}</td>
	        			<td>{{ ucfirst($item->attunement) }}</td>
	        			<td>{{ ucfirst($item->requirements) }}</td>
	        			<td>{{ $item->page_source }}</td>
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
        <p id="item_type"></p>
        <p id="attunement"></p>
        <p id="requirements"></p>
        <p id="description"></p>
      </div>
    </div>
  </div>
</div>

<script>
	$(document).ready(function() {
		var items = {{ json_encode($magic_items) }};
		var selected = "";

	    $('#item-table').DataTable({
	            responsive: true
	    });

	    $('#myModal').on('show.bs.modal', function (event) {
			var link = $(event.relatedTarget); // link that triggered the modal
			var index = link.data('index'); // extract info from data-index attribute

			items.forEach(function(item){
				if(index === item["item_name"]) {
					selected = item;
					console.log(selected);
				}
			});

			if(selected['attunement'] == '') {
				attunement = 'None';
			}
			if(selected['requirements'] == '') {
				requirements = 'None';
			}

			var modal = $(this);
			modal.find('.modal-title').text(selected["item_name"]);
			modal.find('.modal-body #item_type').text(selected["rarity"] + " " + selected["item_type"]);
			modal.find('.modal-body #attunement').text("Attunement: " + attunement);
			modal.find('.modal-body #requirements').text("Item Requirements: " + requirements);
			modal.find('.modal-body #description').text(selected["item_description"]);
		});


	});
</script>

@stop